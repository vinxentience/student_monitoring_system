<?php
Class Model{

	function __construct(){
		$this->db = new Database();
	}

	  function getAllSections($data){
        return $this->db->select("SELECT * FROM `settings` WHERE grade_level='$data'");
    }
}


?>