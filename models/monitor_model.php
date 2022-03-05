<?php
class Monitor_Model extends Model{


	public function __construct(){
		parent::__construct();
		
	}


    public function getAllStudents(){
		return $this->db->select("SELECT * FROM `students`");
    }


    public function getAllSettings(){
		return $this->db->select("SELECT * FROM `settings`");
    }


    public function getAllSections($id){
		$query =  $this->db->select("SELECT * FROM `settings` WHERE grade_level='$id'");

		echo json_encode($query);
    }

    public function getStudents($id){
		$query =  $this->db->select("SELECT * FROM `students` WHERE student_section='$id'");
echo json_encode($query);
    }
    

    public function getAllEvents($id){
		$query =  $this->db->select("SELECT * FROM `monitoring` WHERE student_id='$id'");
echo json_encode($query);
    }

    
   

   public function addNewEvent($data){
		$caldendardata = 	$data['caldendardata'];
		$studentsId = 	$data['studentsId'];

		$checking =  $this->db->select("SELECT * FROM `monitoring` WHERE student_id='$studentsId'");

		// $sql = "INSERT INTO monitoring (	student_id, allEvents)";
		// $sql .= "VALUES ('$studentsId', '$caldendardata')";

		if(empty($checking)){
			$sql = "INSERT INTO monitoring (student_id, allEvents)";
			$sql .= "VALUES ('$studentsId', '$caldendardata')";

			$query = $this->db->prepare($sql);
			$query->execute();
			$last_id =  $this->db->lastInsertId();
			if($query->rowCount() > 0){
			echo json_encode(array('saving' => 'save','id'=> $last_id));
			}else{
			echo 'not saving1';
			}


		}else {
			$sql = "UPDATE monitoring Set allEvents = '".$caldendardata."' WHERE student_id = '$studentsId' ";

			$query = $this->db->prepare($sql);
			$query->execute();
			
			if($query->rowCount() > 0){
				echo 'updated';
			}else{
				echo 'failed';
			}
		}


		
	}
	
}



?>