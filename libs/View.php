<?php

class View{
	function __construct(){
		$this->db = new Database();
	}

	function getAllSections($data){
	    return $this->db->select("SELECT * FROM `settings` WHERE grade_level='$data'");
	}

	function render($name){
		if($name == 'printpdf/print'){
			require 'views/'.$name.'.php';
		} else{
			require 'views/header.php';
			require 'views/'.$name.'.php';
			require 'views/footer.php';
		}
		
	}
}


?>