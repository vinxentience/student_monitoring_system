<?php
class Monitor extends Controller{

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
		$this->view->getAllStudents = $this->model->getAllStudents();
		$this->view->getAllSettings = $this->model->getAllSettings();

		$this->view->render('monitor/index');
	}

	function getSections() {
			if($_GET){
				 $id = $_GET['id'];
				$this->model->getAllSections($id);
			}
			// $this->model->getAllSections($id);
	}

	function getStudents() {
			if($_GET){
				 $id = $_GET['id'];
				$this->model->getStudents($id);
			}
			// $this->model->getAllSections($id);
	}

	function addNewEvent() {
			if($_POST){
				 $caldendardata = strip_tags($_POST['caldendardata']);
				  $studentsId = strip_tags($_POST['studentsId']);

				$data = array();
				$data['caldendardata'] = $caldendardata;
				$data['studentsId'] = $studentsId;
				$this->model->addNewEvent($data);
			}
	}

	
	function getAllEvents() {
			if($_GET){
				 $id = $_GET['id'];
				$this->model->getAllEvents($id);
			}
			// $this->model->getAllSections($id);
	}


	
}
