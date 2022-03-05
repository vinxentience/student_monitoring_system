<?php
class Students extends Controller{

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
		$this->view->getStudent = $this->model->getStudent();

		$this->view->getStudent = $this->model->getStudent();
		$this->view->getGradeLevel = $this->model->getGradeLevel();


		$this->view->render('students/index');
	}


	function addNewStudent(){
		if($_POST){
			$student_lrn = strip_tags($_POST['student_lrn']);
			$student_fname = strip_tags($_POST['student_fname']);
			$student_lname = strip_tags($_POST['student_lname']);
			$student_gender = strip_tags($_POST['student_gender']);
			$student_gradelevel = strip_tags($_POST['student_gradelevel']);
			$student_section = strip_tags($_POST['student_section']);
			$student_adviser = strip_tags($_POST['student_adviser']);


			$data = array();
			$data['student_lrn'] = $student_lrn;
			$data['student_fname'] = $student_fname;
			$data['student_lname'] = $student_lname;
			$data['student_gender'] = $student_gender;
			$data['student_gradelevel'] = $student_gradelevel;
			$data['student_section'] = $student_section;
			$data['student_adviser'] = $student_adviser;

			$this->model->insertNewStudent($data);
		}
		
	}

	function editStudent(){
		if($_POST){
			$student_id = strip_tags($_POST['student_id']);
			$student_lrn = strip_tags($_POST['student_lrn']);
			$student_fname = strip_tags($_POST['student_fname']);
			$student_lname = strip_tags($_POST['student_lname']);
			$student_gender = strip_tags($_POST['student_gender']);
			$student_gradelevel = strip_tags($_POST['student_gradelevel']);
			$student_section = strip_tags($_POST['student_section']);
			$student_adviser = strip_tags($_POST['student_adviser']);


			$data = array();
			$data['student_id'] = $student_id;
			$data['student_lrn'] = $student_lrn;
			$data['student_fname'] = $student_fname;
			$data['student_lname'] = $student_lname;
			$data['student_gender'] = $student_gender;
			$data['student_gradelevel'] = $student_gradelevel;
			$data['student_section'] = $student_section;
			$data['student_adviser'] = $student_adviser;

			$this->model->editNewStudent($data);
		}
	}

	function deleteStudent(){
		if($_POST){
			$studentid        = strip_tags($_POST['studentid']);
			$this->model->deleteNewStudent($studentid);
		}
	}

function getSections() {
			if($_GET){
				 $id = $_GET['id'];
				$this->model->getSections($id);
			}
			// $this->model->getAllSections($id);
	}

function getAdviser() {
			if($_GET){
				 $id = $_GET['id'];
				$this->model->getAdviser($id);
			}
			// $this->model->getAllSections($id);
	}




}

