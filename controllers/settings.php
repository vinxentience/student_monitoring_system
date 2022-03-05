<?php

class Settings extends Controller{
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
        $this->view->getSettings = $this->model->getSettings();
		$this->view->render('settings/index');
	}

	function logout(){
		Session::destroy();
		header('location: ../login');
		exit;
    }
    
    function addSettings(){
		if($_POST){
			$setting_add_grade_level = strip_tags($_POST['setting_add_grade_level']);
			$setting_add_section = strip_tags($_POST['setting_add_section']);
			$setting_add_adivser = strip_tags($_POST['setting_add_adivser']);

			$data = array();
			$data['setting_add_grade_level'] = $setting_add_grade_level;
			$data['setting_add_section'] = $setting_add_section;
			$data['setting_add_adivser'] = $setting_add_adivser;

			$this->model->insertNewSettings($data);
		}
    }

	function deleteSettings(){
		if($_POST){
			$settingsid        = strip_tags($_POST['settingsid']);
			$this->model->deleteNewSettings($settingsid);
		}
    }


    function editSettings(){
    	if($_POST){
			$settings_id = strip_tags($_POST['settings_id']);
			$settings_gradelevel = strip_tags($_POST['settings_gradelevel']);
			$settings_section = strip_tags($_POST['settings_section']);
			$settings_adviser = strip_tags($_POST['settings_adviser']);


			$data = array();
			$data['settings_id'] = $settings_id;
			$data['settings_gradelevel'] = $settings_gradelevel;
			$data['settings_section'] = $settings_section;
			$data['settings_adviser'] = $settings_adviser;
			
			$this->model->editNewSettings($data);
		}
    }
    
 


    


}


?>