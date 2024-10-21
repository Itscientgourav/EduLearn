<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Get all students
    public function get_students() {
        $query = $this->db->get_where('students', ['status' => 1]);
        return $query->result();
    }

    // Insert a new student
    public function insert_student($data) {
        return $this->db->insert('students', $data);
    }

    // Get student by ID
    public function get_student($id) {
        return $this->db->get_where('students', ['student_id' => $id])->row();
    }

    // Update student
    public function update_student($id, $data) {
        $this->db->where('student_id', $id);
        return $this->db->update('students', $data);
    }

    // Delete student
    public function delete_student($id , $data) {
        $this->db->where('student_id', $id);
        return $this->db->update('students', $data);
    }
}
