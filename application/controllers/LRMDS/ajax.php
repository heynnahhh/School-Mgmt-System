<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ajax extends CI_Controller {
	public function __construct() {
  		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('LRMDS/lrmds_model');
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
				unset($data['add']);
				$this->add_employee_info($data['employee_info']);
			}
		}

	}


	public function view_strand(){
		$m_data = $this->lrmds_model->get_strand();
		$data = array();

			foreach ($m_data as $value) {
				$row = array();
				$row[] = $value->strand;
				$row[] = '<button type="button" class="btn btn-sm bg-blue edit" id="edit"><i class="fa fa-edit"></i></button>
						<button type="button" class="btn btn-sm bg-red delete" id="delete"><i class="fa fa-trash-o"></i></button>';
				$data[] = $row;
			}

			$result = array(
				"data" => $data,
			);

			echo json_encode($result);
	}

	public function view_topic(){
		$m_data = $this->lrmds_model->get_topic();
		$data = array();

			foreach ($m_data as $value) {
				$row = array();
				$row[] = $value->topic_name;
				$row[] = '<button type="button" class="btn btn-sm bg-blue edit" id="edit"><i class="fa fa-edit"></i></button>
						<button type="button" class="btn btn-sm bg-red delete" id="delete"><i class="fa fa-trash-o"></i></button>';
				$data[] = $row;
			}

			$result = array(
				"data" => $data,
			);

			echo json_encode($result);
	}


}
