<?php 

class Students_Model extends Model{


    public function __construct(){
        parent::__construct();
        
    }


    public function insertNewStudent($data){
		$student_lrn = 	$data['student_lrn'];
		$student_fname = $data['student_fname'];
		$student_lname = $data['student_lname'] ;
		$student_gender = $data['student_gender'] ;
		$student_gradelevel = $data['student_gradelevel'] ;
		$student_section = $data['student_section'] ;
		$student_adviser = $data['student_adviser'];
		

		$sql = "INSERT INTO students (student_lrn, student_fname, student_lname, student_gender,student_gradelevel,student_section,student_adviser)";
		$sql .= "VALUES ('$student_lrn', '$student_fname', '$student_lname', '$student_gender', '$student_gradelevel', '$student_section', '$student_adviser')";


		$query = $this->db->prepare($sql);
		$query->execute();
		$last_id =  $this->db->lastInsertId();
		if($query->rowCount() > 0){
			echo json_encode(array('saving' => 'save','id'=> $last_id));
		}else{
			echo 'not saving';
		}
		
	}

	public function editNewStudent($data){
		$student_id = 	$data['student_id'];
		$student_lrn = 	$data['student_lrn'];
		$student_fname = 	$data['student_fname'];
		$student_lname =	$data['student_lname'] ;
		$student_gender =	$data['student_gender'] ;
		$student_gradelevel =	$data['student_gradelevel'] ;
		$student_section = $data['student_section'] ;
		$student_adviser = $data['student_adviser'];


		$sql = "UPDATE students Set student_lrn = '".$student_lrn."' , student_fname  = '".$student_fname."' , student_lname = '".$student_lname."' , student_gender = '".$student_gender."', student_gradelevel  = '".$student_gradelevel."' , student_section  = '".$student_section."' , student_adviser  = '".$student_adviser."'  WHERE id = '$student_id' ";

			$query = $this->db->prepare($sql);
			$query->execute();
			
			if($query->rowCount() > 0){
				echo 'updated';
			}else{
				echo 'failed';
			}
	}

	public function deleteNewStudent($id){
		$sql = "DELETE FROM students WHERE id = '$id'";
		$query = $this->db->prepare($sql);
		$query->execute();
		if($query->rowCount() > 0){
			echo 'deleted';
		}else{
			echo 'failed';
		}
	}

	public function getStudent(){
		return $this->db->select("SELECT * FROM `students`");
	}

	public function getGradeLevel(){
		return $this->db->select("SELECT DISTINCT grade_level FROM `settings`");
    }


        public function getSections($id){
		$query =  $this->db->select("SELECT * FROM `settings` WHERE grade_level='$id'");

		echo json_encode($query);
    }

        public function getAdviser($id){
		$query =  $this->db->select("SELECT * FROM `settings` WHERE section='$id'");

		echo json_encode($query);
    }

    
	

}