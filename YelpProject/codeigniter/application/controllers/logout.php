<?php

Class Logout extends CI_Controller {

	public function index() {

	$user = $this->session->userdata('user');


		if ($user) {
			$this->load->model('get');
			$this->get->logout();
			$this->load->view('logout');
	}
	else
	{
		$this->load->view('logout');
		echo "Nu sunteti logat!";
		redirect(base_url());
	}
}
}