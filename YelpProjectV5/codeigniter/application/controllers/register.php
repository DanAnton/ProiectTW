<?php
Class Register extends CI_Controller {
	
	function __construct() {
		
		parent::__construct();
		
		$tableName = 'users1';
		$primaryKey = 'id';
		
		// Connect to Mongo
		$this->connection = new MongoClient('localhost:27017');
	
		// Select a database
	//	$this->db = $this->connection->test;
	
		// Select a collection
		$this->posts = $this->connection->test->$tableName;
	
	}
	
	
	public function index() {

		$user = $this->session->userdata('user');
		$auxString = "" ; //string auxiliar care se adauga la parola;

		
		for($i = 0 ; $i < 5 ; $i++)
		{
				
			$randNumberUppr = rand(65,90);
			$randNumberLow = rand(97,122);
				
			$auxString = $auxString.chr($randNumberUppr).chr($randNumberLow);
		}
		$data['error'][0]="";
		if (!$user) {
			
			$this->form_validation->set_rules('email', 'Email', 'required|xss_clean|valid_email');
			$this->form_validation->set_rules('password', 'Password','xss_clean|required|md5');
			
			if ($this->form_validation->run()) {
				$this->load->model("set");
				$data['error'][0] = $this->set->insert_user($this->input->post('email'), $this->input->post('password'),$auxString);
				$this->load->view('index.php/register',$data);
			}else
		{
				
			$this->load->view('register',$data);
		}
		
		} else {
		
			redirect(base_url());
		}

	}

}