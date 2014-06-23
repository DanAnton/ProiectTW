<?php
Class Set extends CI_Model {

	function __construct() {
		parent::__construct();
		$tableName = 'users1';
		$primaryKey = 'id';
	
		// Connect to Mongo
		$this->connection = new MongoClient('localhost:27017');
	
		// Select a database
		$this->db = $this->connection->test;
	
		// Select a collection
		$this->posts = $this->db->$tableName;
	}
	public function insert_user($email, $password,$auxString) {


	/*
	 *	Iau datele primite ca parametru,le pun intr-un vector si apoi
	 *	vectorul este inserat in colectie
	 */
		
		$querry = array('email'=>$data);
		$result = $this->posts->find($querry);
		//$this->db->where('email',);
		//$result = $this->db->get('users'); // <=> Select * from users;
		
		if($result->count() == 0)
		
		{
			$data = array(
					'email' => $email,
					'password' => $password,
					'random_str' => $auxString
			);
			$this->posts->insert($data);
			$this->load->model('get');
			$this->get->login($email,$password);
			redirect(base_url('index.php/userprofile'));
		}
		else
		{
			$var = "Email already exist! Please insert a valid email!";
			return $var;
			$this->load->view('index.php/register');//,$data);
				
		}
return null;
	}
}
	?>