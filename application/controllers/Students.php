<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

    public $Student_model;
    public $input;
    public function __construct() {
        parent::__construct();
        $this->load->model('Student_model');
    }

    // Landing page to list students
    public function index() {
        $time = microtime(true);
        $data['students'] = $this->Student_model->get_students();
        $end = microtime(true);
        $data['execution_time'] = $end - $time;
        $this->load->view('students/index', $data);
    }

    // Add student form
    public function create() {
        $this->load->view('students/create');
    }

    // Store new student
    public function store() {
        $data = [
            'first_name' => $this->input->post('first_name'),
            'email' => $this->input->post('email'),
            'age' => $this->input->post('age'),
        ];
        $this->Student_model->insert_student($data);
        redirect('students');
    }

    // Edit student
    public function edit($id) {
        $time = microtime(true);
        $data['student'] = $this->Student_model->get_student($id);
        $end = microtime(true);
        $data['execution_time'] = $end - $time;
        $this->load->view('students/edit', $data);
    }

    // Update student
    public function update($id) {
        $data = [
            'first_name' => $this->input->post('first_name'),
            'email' => $this->input->post('email'),
            'age' => $this->input->post('age'),
        ];
        $this->Student_model->update_student($id, $data);
        redirect('students');
    }

    // Delete student
    public function delete($id) {
        $data = [
            'status' => 0,
        ];
        $this->Student_model->delete_student($id , $data);
        redirect('students');
    }
}
