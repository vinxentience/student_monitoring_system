<?php

class Changepassword extends Controller
{
	public function __construct()
	{
		parent::__construct();
		Session::init();
	}
		function index() {
			$this->view->getUser = $this->model->getUser();
			$this->view->render('changepassword/index');
		}

		function changePassword(){
			echo "<script> alert('yay');</script>";
			if($_POST){
				$user_oldpass = strip_tags($_POST['password']);
				$user_id = strip_tags($_POST['id']);
				$user = strip_tags($_POST['name']);

				$data= array();
				$data['password'] = $user_oldpass;
				$data['id'] = $user_id;
				$data['name'] = $user_name;
				echo "<script> alert('yaaay')</script>";
				$this->model->editNewPassword($data);
		}		
	}
}

?>