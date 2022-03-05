<?php
class Dashboard_Model extends Model{


	public function __construct(){
		parent::__construct();
		
	}
    
	public function getUser(){
		return $this->db->select("SELECT * FROM `students`");
    }
    
    public function userDetails($userId){
        return $this->db->select("SELECT * FROM `user` WHERE id='$userId'");
    }
	
}



?>