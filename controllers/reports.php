<?php
class Reports extends Controller{

	function __construct(){
		parent::__construct();
		Session::init();
		$loggedIn = Session::get("loggedIn");
		if($loggedIn == false){
			Session::destroy();
			header('location: ./login');
			exit;
		}
	}

	function index(){
		$this->view->getAllReports = $this->model->getAllReports();
		$this->view->render('reports/index');
	}
}

