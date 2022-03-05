<?php
class Reports_Model extends Model{


	public function __construct(){
		parent::__construct();
		
	}

	public function getAllReports(){
        // return $this->db->select("SELECT * FROM `monitoring`");
        return $this->db->select("SELECT students.student_lrn, students.student_fname, students.student_lname, students.student_gradelevel, students.student_section, monitoring.allEvents FROM `monitoring` INNER JOIN `students` ON monitoring.student_id=students.id");
    }
	
}



?>