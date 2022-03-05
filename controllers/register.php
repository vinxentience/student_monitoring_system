<?php

class Register extends Controller
{
	
	function __construct()
	{
		parent::__construct();

	}
	function index(){
		$this->view->render('register/index');
	}

	function registerUser(){
			if($_POST){
				$reg_firstname = strip_tags($_POST['reg_firstname']);
				$reg_lastname = strip_tags($_POST['reg_lastname']);
				$reg_email = strip_tags($_POST['reg_email']);
				$reg_role = strip_tags($_POST['reg_role']);
				$reg_username = strip_tags($_POST['reg_username']);
				$correct_password = strip_tags($_POST['correct_password']);
	
				$data = array();
				$data['reg_firstname'] = $reg_firstname;
				$data['reg_lastname'] = $reg_lastname;
				$data['reg_email'] = $reg_email;
				$data['reg_role'] = $reg_role;
				$data['reg_username'] = $reg_username;
				$data['correct_password'] = $correct_password;
	
				$this->model->insertUser($data);
			}
			
	}
}

?>

