<?php
class Notifications extends Controller{

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
		// $this->view->getNotifications = $this->model->getNotifications();
		$this->view->render('notifications/index');
	}
}
