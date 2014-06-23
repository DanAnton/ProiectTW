<?php

Class Login extends CI_Controller {

	public function index() {

		$user = $this->session->userdata('user');
		$data ['error'][0]='';
		if (!$user) {

			$this->form_validation->set_rules('email', 'Email', 'required|xss_clean|valid_email');
			$this->form_validation->set_rules('password', 'Password','required|xss_clean|md5');

			if ($this->form_validation->run()) {
				$this->load->model('get');
				$data['error'][0]=$this->get->login($this->input->post('email'), $this->input->post('password'));
				$this->load->view('login',$data);
			} else {
				
				$this->load->view('login',$data);
				
			}

		} else {

			redirect(base_url());
		}

	}

}

?>