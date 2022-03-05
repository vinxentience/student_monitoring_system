<?php

class Dashboard extends Controller{
	function __construct(){
		parent::__construct();
		Session::init();
		$loggedIn = Session::get("loggedIn");
		if($loggedIn == false){
			Session::destroy();
			header('location: login');
			exit;
		}
	}

	function index(){
		Session::init();
		$userRole = Session::get("userRole");
		$userId = Session::get("userId");

		$this->view->userDetails = $this->model->userDetails($userId);
		$this->view->getUser = $this->model->getUser();

		$this->view->render('dashboard/index');
	}

	function logout(){
		Session::destroy();
		header('location: ../login');
		exit;
	}
}


?>