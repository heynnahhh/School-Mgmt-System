<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ajax extends CI_Controller {
	public function __construct() {
  		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('MEDICAL/medical_model');

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

		echo json_encode($option_data);

		}
	}

	public function add(){
		$data = $this->input->post();

		if ( $data['add'] == 'student'){
			if($data['student_info'] && !empty($data['student_info'])){
				unset($data['add']);
				$this->add_student_info($data['student_info']);
			}
		}

		elseif ( $data['add'] == 'employees'){
			if($data['employee_info']) {
				unset($data['add']);
				$this->add_employee_info($data['employee_info']);
			}
		}

	}

	public function add_consul(){
		$data = $this->input->post();

		if($data){

			$m_data = array(
				'msh_mdsp_id' => $data['studCons']['msh_mdsp_id'],
				'date' => $data['studCons']['date'],
				'complaint' => $data['studCons']['complaint'],
				'treatment' => $data['studCons']['treatment'],
				'remarks' => $data['studCons']['remarks']
			);
			print_r($m_data);
			$this->medical_model->insert_student_cons($m_data);
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

	private function add_student_cons($data){
		if($data){

			$m_data = array(
				'msh_mdsp_id' => $data['msh_mdsp_id'],
				'date' => $data['date'],
				'complaint' => $data['complaint'],
				'treatment' => $data['treatment'],
				'remarks' => $data['remarks']
			);
			print_r($m_data);
			$this->medical_model->insert_student_cons($m_data);
		}
	}

	private function add_employee_info($data){
		if($data){

			$m_data = array(
				'last_name' => $data['last_name'],
				'first_name' => $data['first_name'],
				'middle_name' => $data['middle_name'],
				'department' => $data['department'],
				'age' => $data['age'],
				'birthdate' => $data['birthdate'],
				'contact_no' => $data['contact_no'],
				'contact_person' => $data['contact_person'],
				'relationship' => $data['relationship'],
				'address' => $data['address'],
				'contact_person_no' => $data['contact_person_no']
			);

			$this->medical_model->insert_employee_info($m_data);
			print_r($m_data);
		}
	}

	public function view_student_info(){
		$m_data = $this->medical_model->get_student_info();
		$data = array();

			foreach ($m_data as $value) {
				$row = array();
				$row[] = $value->mdsp_id;
				$row[] = $value->last_name;
				$row[] = $value->first_name;
				$row[] = $value->middle_name;
				$row[] = $value->status;
				$row[] = '<a href="#" type="button" class="btn btn-primary btn-sm addConsul">Add Consultation</a>
									<button type="button" class="btn btn-sm bg-aqua" id="view" onclick="view()"><i class="fa fa-eye"></i></button>
									<button type="button" class="btn btn-sm bg-red delete" id="delete"><i class="fa fa-trash-o"></i></button>';
				$data[] = $row;
			}

			$result = array(
				"data" => $data,
			);

			echo json_encode($result);
	}

	public function view_employee_info(){
		$m_data = $this->medical_model->get_employee_info();
		$data = array();

			foreach ($m_data as $value) {
				$row = array();
				$row[] = $value->last_name;
				$row[] = $value->first_name;
				$row[] = $value->middle_name;
				$row[] = '<button type="button" class="btn btn-sm bg-blue" id="edit"><i class="fa fa-edit"></i></button>
									<button type="button" class="btn btn-sm bg-red delete" id="delete"><i class="fa fa-trash-o"></i></button>';
				$data[] = $row;
			}

			$result = array(
				"data" => $data,
			);

			echo json_encode($result);
	}

		public function view_student_records(){
			$m_data = $this->medical_model->get_student_recs();
			$data = array();

				foreach ($m_data as $value) {
					$row = array();
					$row[] = $value->date;
					$row[] = $value->complaint;
					$row[] = $value->treatment;
					$row[] = $value->remarks;
					$data[] = $row;
				}

				$result = array(
					"data" => $data,
				);

				echo json_encode($result);
		}


	// DELETE FUNCTION ****************************

		public function delete(){
			$data = $this->input->post();
			// echo $current_view;
			if ( $data['delete'] == 'student'){
				if($data['mdsp_id']){
					unset($data['delete']);
					$this->delete_student($data['mdsp_id']);
				}
			}
			elseif ( $data['delete'] == 'employees'){
				if($data['mdei_id']){
					unset($data['delete']);
					$this->delete_employee($data['mdei_id']);
				}
			}
		}

		private function delete_student($data){
			if($data){
				$m_data = array('mdsp_id' => $data);
				$table = 'tbl_md_student_info';
				$this->medical_model->delete($table,$m_data);
			}
		}

		private function delete_employee($data){
			if($data){
				$m_data = array('mdei_id' => $data);
				$table = 'tbl_md_employee_info';
				$this->medical_model->delete($table,$m_data);
			}
		}

}
