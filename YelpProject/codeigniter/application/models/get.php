<?php

Class Get extends CI_Model {

	public function login($email, $password) {

		$this->db->where('email', $email);
		$this->db->where('password', md5($password));
		//$result = $this->db->get('USERS');
		$result = $this->db->query('select * from users');
		if ($result->num_rows() > 0) {
			$user = array();
			$result = $result->result_array();
			$user['id'] = $result[0]['id'];
			$user['email'] = $result[0]['email'];
			$this->session->set_userdata('user', $user);
			redirect(base_url());
		} else {
			redirect(base_url('login'));
		}
	}


	public function logout()
	{
    $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }
    $this->session->sess_destroy();
    
	}


	public function products() {

		$this->db->limit(10);
		//$this->db->order_by('date_added', 'desc');
		$result = $this->db->query('select * from first');
		//$data = array_shift($result->result_array());
		//return $data;
		return $result->result_array();
	}
}
?>