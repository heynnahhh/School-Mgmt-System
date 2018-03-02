<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ajax extends CI_Controller {
	public function __construct() {
  		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('LRMDS/lrmds_model');
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

	public function view_jhs(){
		$m_data = $this->lrmds_model->get_jhs();
		$data = array();

			foreach ($m_data as $value) {
				$row = array();
				$row[] = $value->subject;
				$row[] = '<button type="button" class="btn btn-sm bg-blue edit" id="edit"><i class="fa fa-edit"></i></button>
						<button type="button" class="btn btn-sm bg-red delete" id="delete"><i class="fa fa-trash-o"></i></button>';
				$data[] = $row;
			}

			$result = array(
				"data" => $data,
			);

			echo json_encode($result);
	}

	public function view_shs(){
		$m_data = $this->lrmds_model->get_shs();
		$data = array();

			foreach ($m_data as $value) {
				$row = array();
				$row[] = $value->subject;
				$row[] = $value->strand;
				$row[] = $value->grade_lvl;
				$row[] = $value->subject_type;
				$row[] = '<button type="button" class="btn btn-sm bg-blue edit" id="edit"><i class="fa fa-edit"></i></button>
						<button type="button" class="btn btn-sm bg-red delete" id="delete"><i class="fa fa-trash-o"></i></button>';
				$data[] = $row;
			}

			$result = array(
				"data" => $data,
			);

			echo json_encode($result);
	}

	public function get_jhs_subject(){
		$data = $this->input->post();

		$m_data = $data['subject'];

		$values = $this->lrmds_model->get_jhs_subject($m_data);

		$result = array(
			"data" => $values
		);

		echo json_encode($result);

	}

	public function get_shs_subject(){
		$data = $this->input->post();

		$m_data = $data['subject'];

		$values = $this->lrmds_model->get_shs_subject($m_data);

		$result = array(
			"data" => $values
		);

		echo json_encode($result);

	}

	public function get_strand_name(){
		$data = $this->input->post();

		$m_data = $data['strand'];

		$values = $this->lrmds_model->get_strand_name($m_data);

		$result = array(
			"data" => $values
		);

		echo json_encode($result);

	}

	public function add(){
		$data = $this->input->post();

		if ( $data['add'] == 'strands'){
			if($data['strand']){
				$this->add_strand($data['strand']);
			}
		}

		else if ( $data['add'] == 'jhs'){
			if($data['jhs_subject']){
				$this->add_jhs_subject($data['jhs_subject']);
			}
		}
	}

	public function edit(){
		$data = $this->input->post();
		// echo $current_view;

		if ( $data['edit'] == 'jhs'){
			if($data['jhs_subject']){
				unset($data['edit']);
				$this->edit_jhs_subject($data['jhs_subject']);
			}

		}
	}

	private function add_strand($data){
		if($data){

			$m_data = array(
				'strand' => $data
			);

			$this->lrmds_model->insert_strand($m_data);
		} 

	}

	private function add_jhs_subject($data){
		if($data){

			$m_data = array(
				'subject' => $data['subject'],
				'educ_type' => "Junior High School"
			);

			$this->lrmds_model->insert_jhs_subject($m_data);
		}

	}

	private function edit_jhs_subject($data){
		if($data){

			$m_data = array(
				'subject' => $data,
				'educ_type' => "Junior High School"
			);

			$this->lrmds_model->update_jhs_subject($m_data);
		}
	}



}
