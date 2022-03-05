<?php

class Changepassword_model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function editNewPassword($data){
		// $user_name = $data['user_name'];
		$user_id = $data['id'];
		$user_oldpass = $data['password'];
		$user_newpass = $data['newpass'];


		$sql = "UPDATE user SET password = '".md5($user_newpass)."' WHERE password = 'md5($user_oldpass)' ";
			$query = $this->db->prepare($sql);
			$query->execute();
			echo "<script> alert('yaaay')</script>";
			if($query->rowCount() > 0){
				echo 'updated';
				echo "<script> alert('yaaay')</script>";
			}else{
				echo 'failed';
				echo "<script> alert('yaaay')</script>";
			}
	}

	
	public function getUser(){
		return $this->db->select("SELECT * FROM `user`");

	}
}
?>