<?php
class Login_Model extends Model{


	public function __construct(){
		parent::__construct();
		
	}

	public function run(){

		$sql = "Select * From user where username = :user AND password = md5(:pass)";
		$query = $this->db->prepare($sql);
		$query->execute(array(
			':user' => $_GET['username'],
			':pass' => $_GET['password'],
			));

		if($query->rowCount() > 0){
			Session::init();
			Session::set('loggedIn',true);
			$query = $query->fetch();

			Session::set('userRole', $query['role']);
			Session::set('userId', $query['id']);
			Session::set('fname', $query['name']);
			Session::set('userName', $query['username']);

			if($query['role'] == 1){
				header('location: ../dashboard');
			}else{
				header('location: ../clienthome');
			}

		}else{
			header('location: ../login');
		}
	}

	public function logout(){
		Session::init();
		Session::destroy();
		header('location: ../login');
		exit;
	}
}



?>