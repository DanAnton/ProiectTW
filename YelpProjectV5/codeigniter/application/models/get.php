<?php
Class Get extends CI_Model {

	function __construct() {
		parent::__construct();
		
		$tableName = 'users';
		$primaryKey = 'id';
	
		// Connect to Mongo
		$this->connection = new MongoClient('localhost:27017');
	
		// Select a database
		$this->db = $this->connection->test;
		$this->posts = $this->connection->test->$tableName;
		
	}
	public function top100Reviews()
	{
		$tableName4 = 'top100';
		$a = $this->connection->test->$tableName4;
		$result1 = $a->find();
		while($result1->hasNext()){ // While we have results
			$member = $result1->getNext();// Get the next result
				
			$data['members'][] = array(
					'date' => $member['date'],
					'text' => $member['text'],
					'stars' => $member['stars']
			);
		}
		return $data['members'];
	}
	/*
	 * Returnez numarul total de checkin-uri pentru business-urile
	 * aflate intr- un anumit interval(capetele incluse)
	 */
	public function getCheckinInfo($lowLevel,$highLevel){
		$tableName4 = 'checkin_count';
		$a = $this->connection->test->$tableName4;
		$rangeQuery = array('stars' => array( '$gte' => $lowLevel, '$lte' => $highLevel ));
		$result1 = $a->find($rangeQuery);
		return $result1->count();
	}
	
	/*
	 * Returnez numarul total de checkin-uri pentru business-urile
	* aflate intr- un anumit interval(capetele incluse)
	*/
	public function getCheckinInfo1($lowLevel,$highLevel){
		$tableName4 = 'checkin_count';
		$a = $this->connection->test->$tableName4;
		$rangeQuery = array('stars' => array( '$gte' => $lowLevel, '$lt' => $highLevel ));
		$result1 = $a->find($rangeQuery);
		return $result1->count();
	}
	/*
	 * Returnez review-urile totale pentru business-urile
	 * aflate intr-un anumit range(capete incluse);
	 */
	public function printTotalReviews($lowLevel,$highLevel)
	{
		$totalReviews = 0;
		$data = $this->getResultGteLte($lowLevel,$highLevel);
		if($data->count()>0)
		{
			while($data->hasNext()){ // While we have results
				$member = $data->getNext();// Get the next result
					
					$totalReviews+=$member['review_count'];			
			}
		}
		
		return $totalReviews;
	}
	/*
	 * Returnez review-urile totale pentru business-urile
	 * aflate intr-un anumit range(capat stanga inclus,capat dreapta exclus);
	 */
	public function printTotalReviews1($lowLevel,$highLevel)
	{
		$totalReviews = 0;
		$data = $this->getResultGteLt($lowLevel,$highLevel);
		if($data->count()>0)
		{
			while($data->hasNext()){ // While we have results
				$member = $data->getNext();// Get the next result
					
				$totalReviews+=$member['review_count'];
			}
		}
	
		return $totalReviews;
	}
	
	/*
	 * Returnez procentul unor business dupa rating-ul dintr-un 
	 * anumit range(capetele incluse)
	 */
	public function printPercentStars2($lowLevel,$highLevel)
	{
		$tableName3 = 'checkin_count';
		$this->posts = $this->connection->test->$tableName3;
		$result1 = $this->posts->count();
		$rangeQuery = array('stars' => array( '$gte' => $lowLevel, '$lte' => $highLevel ));
		$result = $this->posts->find($rangeQuery);
		return round((($result->count()/$result1)*100),2);
			
	
	}
	
	/*
	 * Returnez procentul unor business dupa rating-ul dintr-un
	 * anumit range(capatul stanga inclus,capat dreapta exclus)
	 */
	public function printPercentStars1($lowLevel,$highLevel)
	{
		$tableName3 = 'checkin_count';
		$this->posts = $this->connection->test->$tableName3;
		$result1 = $this->posts->count();
		$rangeQuery = array('stars' => array( '$gte' => $lowLevel, '$lt' => $highLevel ));
		$result = $this->posts->find($rangeQuery);
		return round((($result->count()/$result1)*100),2);
	
	}
	
	/*
	 * Printez procentul pentru useri dupa avarage_stars
	 * Exemplu: 0-2 ->23%;
	 * @highLevel - nivelul superior
	 * @lowLevel - nivelul inferior
	 * 
	 */
	
	public function printPercentStars($lowLevel,$highLevel)
	{
		$result1 = $this->posts->count();
		$rangeQuery = array('average_stars' => array( '$gte' => $lowLevel, '$lt' => $highLevel ));
		$result = $this->posts->find($rangeQuery);
			return ($result->count()/$result1)*100;
			
		}
		
		
	/*
	 * Returneaza numarul de business-uri dupa numarul de stele
	 * dintr-un anumit interval(cu capetele incluse)
	 */
	public function printBusinessNumber($lowLevel,$highLevel)
	{
		
		return $this->getResultGteLte($lowLevel,$highLevel)->count();
	}
	
	/*
	 * Returneaza numarul de business-uri dupa numarul de stele
	 * dintr-un anumit interval(capatul stanga inchis,capat dreapta deschis)
	 */
	public function printBusinessNumber1($lowLevel,$highLevel)
	{
		return $this->getResultGteLt($lowLevel,$highLevel)->count();
	}
	

	/*
	 * Returneaza rezultatul interogarii bazei de date dupa 
	 * un query : $lowLevel=< stars <= $highLevel ;
	 */
	public function getResultGteLte($lowLevel,$highLevel)
	{
		$tableName4 = 'checkin_count';
		$this->posts = $this->connection->test->$tableName4;
		$result1 = $this->posts->count();
		$rangeQuery = array('stars' => array( '$gte' => $lowLevel, '$lte' => $highLevel ));
		$result = $this->posts->find($rangeQuery);
		return $result;
	}
	
	/*
	* Returneaza rezultatul interogarii bazei de date dupa
	* un query : $lowLevel=< stars < $highLevel ;
	*/
	public function getResultGteLt($lowLevel,$highLevel)
	{
		$tableName4 = 'checkin_count';
		$this->posts = $this->connection->test->$tableName4;
		$result1 = $this->posts->count();
		$rangeQuery = array('stars' => array( '$gte' => $lowLevel, '$lt' => $highLevel ));
		$result = $this->posts->find($rangeQuery);
		return $result;
	}
	
	
	/*
	 * Printez userii dintr-un tabel dupa o anumita limita
	 */
		
	public function printUsers() {
	
		//	$this->db->limit(10);
		//$this->db->order_by('date_added', 'desc');
		$result = $this->posts->find()->limit(50);
		//$data = array_shift($result->result_array());
		//return $data;
		return $result;
	}

	/*
	 * Logarea unui user dupa $emai si $parola
	 */
	
	public function login($email, $password) {

		/*
		 * Verifica daca email-ul primit ca parametru se potriveste
		* cu email-ul din baza de date;
		*/
		$tableName1 = "users1";
		$this->posts = $this->connection->test->$tableName1;
		//$this->db->where('email', $email);
	    $querry = array('email'=>$email);
		$result = $this->posts->find($querry);
		//$result = $this->db->get('users');

		if($result->count()>0)
		{
			while($result->hasNext()){ // While we have results
				$member = $result->getNext();// Get the next result
					
				$data['members'][] = array(
						'email' => $member['email'],
						'password' => $member['password'],
						'random_str' => $member['random_str'],
				);
			}
			foreach($data['members'] as $member => $fields)
			{
				/*
				 * Verifica daca parola primita ca parametru se potriveste
				 * cu parola din baza de date;
				 */
				$password1 = $fields['random_str'].$password;
				$querry2 = array ('password'=>$password1);
				$result2 = $this->posts->find($querry2);
				if($result2->count()>0)
				{
					$user = array();
					$user['email'] = $fields['email'];
					$this->session->set_userdata('user', $user);
					$tableName2 = "users";
					$this->posts = $this->connection->test->$tableName1;
					redirect(base_url('index.php/userprofile'));
				}
				else
				{
					$error= "Wrong password! Please insert a valid password.";
					return $error;
					$this->load->view('login');
					
				}
			}
		}
		else
		{
			$error= "Email does not exist! Please try again with a valid email.";
			return $error;
			$this->load->view('login');
			
		}
		//$tableName2 = "users";
		//$this->posts = $this->connection->test->$tableName1;
		return null;
	}
		
	/*
	 * Logout
	 */
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
}
/*
 * Junk Code
 */

/*	foreach ($result->result() as $r2)
			{
				//echo $r2->email." ";
				$this->db->where('password', $r2->random_str.$password);
				$result2 = $this->db->get('users');

				//imi face un select cu clauza where password == random_str+md5(password_primit)
					
				if($result2->num_rows>0)   //<=>$r2->password == $data unde $data = $r2->random_str.md5($password);
				{
					$user = array();
					$result = $result->result_array();
					$user['id'] = $result[0]['id'];
					$user['email'] = $result[0]['email'];
					$this->session->set_userdata('user', $user);
					redirect(base_url());
				}
				else
				{
					$this->load->view('login');
					echo "Ati introdus parola gresit!";
				}
					
			}
		}
		else
		{
			$this->load->view('login');
			echo "Emailul nu exista in baza de date! Inregistrati-va";
		}
			

	}

 */

?>

