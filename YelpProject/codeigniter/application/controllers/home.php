<?php
Class Home extends CI_Controller {

	public function index() {

		$this->load->model('get');
		$data['prods'] = $this->get->products();
		//$this->get->logout();
		$this->load->view('home', $data);

		
		
	}

}
?>