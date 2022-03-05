<?php
class Register_Model extends Model{


	public function __construct(){
		parent::__construct();
		
	}

	
	public function insertUser($data){

		$reg_firstname     = $data["reg_firstname"];
		$reg_lastname      = $data["reg_lastname"];
		$reg_email     = $data["reg_email"];
		$reg_role      = $data["reg_role"];
		$reg_username      = $data["reg_username"];
		$correct_password       = $data["correct_password"];
		
		$userFullName = $reg_firstname . ', ' . $reg_lastname;

		$select_query = "SELECT * FROM user WHERE username='".$reg_username."'";
		$prepared = $this->db->prepare($select_query);
		$prepared->execute();

		if($prepared->rowCount() > 0){
			//Account Already Exist!
		}else{
			$sql = "INSERT INTO user (name, email, username, password, role)";
			$sql .= "VALUES ('$userFullName', '$reg_email', '$reg_username', '".md5($correct_password)."', '$reg_role')";
			$query = $this->db->prepare($sql);
			$query->execute();
			$last_id =  $this->db->lastInsertId();
			echo json_encode(array('saving' => 'save','id'=> $last_id));
		}

	}
}



?>