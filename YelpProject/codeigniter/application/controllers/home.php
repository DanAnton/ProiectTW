<?php
Class Home extends CI_Controller {

	public function index() {

	//	echo "smdbanbasmndbasdmabsndmb";
	 	$a = 24 ;
	 	//echo $a;
		$this->load->model('get');
		$data['prods'] = $this->get->products();
		//$this->get->logout();
		$this->load->view('home', $data);

		
		
	}

}
?>