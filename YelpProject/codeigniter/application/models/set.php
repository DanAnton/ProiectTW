<?php 

Class Set extends CI_Model {

public function insert_user($email, $password) {
		

	/*
	 *	Aflu numarul total de linii, apoi iau id de pe pozitia numRows-1,
	 *	adica ultima pozitie. Dupa ce am aflat id-ul urmatorul user o sa 
	 *	aiba id-ul ultimul id din lista + 1;
	 */
	
		$result = $this->db->query('select id from users');
		$data = array();
		$numRows = $result->num_rows();
		$result = $result->result_array();
		$user['id'] = $result[$numRows-1]['id'];

		$id = $user['id'] + 1;
		
		$data = array(
			'id' => $id,
			'email' => $email,
			'password' => md5($password)
		);

		$this->db->insert('users', $data);
		$id++;
		//echo $data['email'];

	}
}