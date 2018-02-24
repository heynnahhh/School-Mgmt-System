<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ajax extends CI_Controller {
	public function __construct() {
  		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('MEDICAL/medical_model');
		$this->sms_session->checkSession();

	}

	public function get_section_option(){
		$data = $this->input->post();

		$m_data = $data['grade_lvl'];

		$values = $this->medical_model->get_grade_section($m_data);

		if($values) {

		foreach ($values as $value) {
			$option = array();
			$option[] = $value->section;
			$option_data[] = $option;
		}

		$result = array(
			"data" => $option_data
		);

		echo json_encode($result);

		}
	}

	public function add(){
		$data = $this->input->post();

		if ( $data['add'] == 'student'){
			if($data['student_info']){
				$this->add_student_info($data['student_info']);
			}
		}

		elseif ( $data['add'] == 'employees'){
			if($data['employee_info']) {
				$this->add_employee_info($data['employee_info']);
			}
		}

	}

	private function add_student_info($data){
		if($data){

			$m_data = array(
				'last_name' => $data['last_name'],
				'first_name' => $data['first_name'],
				'middle_name' => $data['middle_name'],
				'grade_lvl' => $data['grade_lvl'],
				'section' => $data['section'],
				'age' => $data['age'],
				'birthdate' => $data['birthdate'],
				'contact_no' => $data['contact_no'],
				'mother_name' => $data['mother_name'],
				'mother_contact' => $data['mother_contact'],
				'father_name' => $data['father_name'],
				'father_contact' => $data['father_contact'],
				'status' => 'Inactive'
			);

			$this->medical_model->insert_student_info($m_data);
		}
	}

	public function view_student_info(){
		$m_data = $this->medical_model->get_student_info();
		$data = array();

			foreach ($m_data as $value) {
				$row = array();
				$row[] = $value->last_name;
				$row[] = $value->first_name;
				$row[] = $value->middle_name;
				$row[] = $value->status;
				$row[] = '<button type="button" class="btn btn-sm bg-blue" id="edit" onclick="edit()"><i class="fa fa-edit"></i></button>';
				$data[] = $row;
			}

			$result = array(
				"data" => $data,
			);

			echo json_encode($result);
	}

}