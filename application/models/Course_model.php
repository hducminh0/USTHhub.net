<?php
	class Course_model extends CI_Model{
		public function __construct(){
			// parent::__construct();
			$this->load->database();
		}

		public function get_ict3_courses_panel(){
			$query = $this->db->query("SELECT CourseName, Status from course WHERE DepartmentID = 1");
			return $query->result_array();
		}

		public function get_ict3_mobile(){
			$query = $this->db->query("SELECT course.CourseName, course.Credits, course.Hours, course.Description, user.Fullname, course.Status from course inner JOIN user on course.UserID = user.UserID WHERE course.CourseID = 1;");
			return $query->result_array();
		}

		public function get_ict3_web(){
			$query = $this->db->query("SELECT course.CourseName, course.Credits, course.Hours, course.Description, user.Fullname, course.Status from course inner JOIN user on course.UserID = user.UserID WHERE course.CourseID = 3;");
			return $query->result_array();
		}

		public function get_ict3_oosad(){
			$query = $this->db->query("SELECT course.CourseName, course.Credits, course.Hours, course.Description, user.Fullname, course.Status from course inner JOIN user on course.UserID = user.UserID WHERE course.CourseID = 4;");
			return $query->result_array();
		}

		public function get_ict3_data(){
			$query = $this->db->query("SELECT course.CourseName, course.Credits, course.Hours, course.Description, user.Fullname, course.Status from course inner JOIN user on course.UserID = user.UserID WHERE course.CourseID = 6;");
			return $query->result_array();
		}

	}
?>