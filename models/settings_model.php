<?php
class Settings_Model extends Model{


	public function __construct(){
		parent::__construct();
		
    }

    public function insertNewSettings($data){
		$setting_add_grade_level     = $data["setting_add_grade_level"];
		$setting_add_section      = $data["setting_add_section"];
		$setting_add_adivser      = $data["setting_add_adivser"];

		$sql = "INSERT INTO settings (grade_level, section, adviser)";
		$sql .= "VALUES ('$setting_add_grade_level', '$setting_add_section', '$setting_add_adivser')";

		$query = $this->db->prepare($sql);
		$query->execute();
		$last_id =  $this->db->lastInsertId();
		if($query->rowCount() > 0){
			echo json_encode(array('saving' => 'save','id'=> $last_id));
		}else{
			echo 'not saving';
		}
    }
    
        
    public function getSettings(){
		return $this->db->select("SELECT * FROM `settings`");
    }

    public function getIngredients(){
		return $this->db->select("SELECT * FROM `ingredients`");
    }
    
    
	public function deleteNewSettings($settingsid){
		$sql = "DELETE FROM settings WHERE id = '$settingsid'";
		$query = $this->db->prepare($sql);
		$query->execute();
		if($query->rowCount() > 0){
			echo 'deleted';
		}else{
			echo 'failed';
		}
    }
    
    public function editNewSettings($data){
		$settings_id = $data['settings_id'];
		$settings_gradelevel = $data['settings_gradelevel'];
		$settings_section = $data['settings_section'];
		$settings_adviser = $data['settings_adviser'];

		$sql = "UPDATE settings Set grade_level = '".$settings_gradelevel."' , section = '".$settings_section."', adviser = '".$settings_adviser."' WHERE id = '$settings_id' ";

			$query = $this->db->prepare($sql);
			$query->execute();
			
			if($query->rowCount() > 0){
				echo 'updated';
			}else{
				echo 'failed';
			}
	}


	
}



?>