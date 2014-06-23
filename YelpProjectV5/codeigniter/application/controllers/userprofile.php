<?php
Class Userprofile extends CI_Controller {

	public function index() {
/*
		$this->load->model('get');
		$this->connection = new MongoClient('localhost:27017');
		$tableName2 = 'users';
		$this->posts = $this->connection->test->$tableName2;
		$data['members']=$this->posts->count();
		
		$data['members'][0] = $this->get->printPercentStars1(0,2);
		$data['members'][1] = $this->get->printPercentStars1(2,3);
		$data['members'][2] = $this->get->printPercentStars1(3,4);
		$data['members'][3] = $this->get->printPercentStars2(4,5);
		$data['members'][4] = $this->get->printBusinessNumber(4,5);
		$data['members'][5] = $this->get->printBusinessNumber1(0,2);
		$data['members'][6] = $this->get->printBusinessNumber1(2,3);
		$data['members'][7] = $this->get->printBusinessNumber1(3,4);
		$data['members'][8] = $this->get->printTotalReviews(4,5);
		$data['members'][9] = $this->get->printTotalReviews(0,2);
		$data['members'][10] = $this->get->printTotalReviews(2,3);
		$data['members'][11] = $this->get->printTotalReviews(3,4);
	*/	
		//$data['members'][4] = $this->get->printPercentStars2(4,5);
	//	$data['members'][3] = $this->get->printPercentStars2(6,10);
	/*	*/
	//	echo "salutare!";
	/*	$members =  $this->get->printUsers();
		$data = array(
			'members' => array()
		);
		//$data['pUsers'] = $this->get->printUsers();
		//$this->get->logout();
		
		while ($members->hasNext())
		{
			$member = $members->getNext();
			$data['members'][] = array(
				'email'=>$member['email']
			);
		}
		*/
		$this->load->view('userprofile');//, $data);

		//$this->load->model('set');
		//$this->set->insert_user('email@email.com','asada'.md5('test'),'asada');
	}

}
?>
