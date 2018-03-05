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
						<button type="button" class="btn btn-sm bg-red delete"><i class="fa fa-trash-o"></i></button>';
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
				$row[] = '<a type="button" href="#" class="btn btn-sm bg-green">Go to link</a>
						<button type="button" class="btn btn-sm bg-aqua view" id="view"><i class="fa fa-eye"></i></button>
						<button type="button" class="btn btn-sm bg-red delete"><i class="fa fa-trash-o"></i></button>';
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
						<button type="button" class="btn btn-sm bg-red delete"><i class="fa fa-trash-o"></i></button>';
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
				$row[] = $value->subject_type;
				$row[] = $value->strand;
				$row[] = $value->grade_lvl;
				$row[] = '<button type="button" class="btn btn-sm bg-blue edit" id="edit"><i class="fa fa-edit"></i></button>
						<button type="button" class="btn btn-sm bg-red delete"><i class="fa fa-trash-o"></i></button>';
				$data[] = $row;
			}

			$result = array(
				"data" => $data,
			);

			echo json_encode($result);
	}

	public function get_jhs_subject_id(){
		$data = $this->input->post();

		$m_data = $data['subject'];

		$values = $this->lrmds_model->get_jhs_subject_id($m_data);

		$result = array(
			"data" => $values
		);

		echo json_encode($result);

	}

	public function get_topic_details(){
		$data = $this->input->post();

		$m_data = $data['topic_name'];

		$values = $this->lrmds_model->get_topic_detail($m_data);

		$result = array(
			"data" => $values
		);

		echo json_encode($result);

	}

	public function get_shs_details(){
		$data = $this->input->post();

		$m_data = $data['subject'];

		$values = $this->lrmds_model->get_shs_detail($m_data);

		$result = array(
			"data" => $values
		);

		echo json_encode($result);

	}

	public function get_strand_id(){
		$data = $this->input->post();

		$m_data = $data['strand'];

		$values = $this->lrmds_model->get_strand_id($m_data);

		$result = array(
			"data" => $values
		);

		echo json_encode($result);

	}

	public function get_strand(){
		$values = $this->lrmds_model->get_strand();

		if($values) {

		foreach ($values as $value) {
			$option = array();
			$option[] = $value->strand;
			$option_data[] = $option;
		}

		echo json_encode($option_data);

		}
	}

// ADD FUNCTION ********************

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
		else if ( $data['add'] == 'shs'){
			if($data['shs_subject']){
				$this->add_shs_subject($data['shs_subject']);
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
				'subject' => $data,
				'educ_type' => "Junior High School"
			);

			$this->lrmds_model->insert_jhs_subject($m_data);
		}

	}

	private function add_shs_subject($data){
		if($data){

			if($data['strand'] == null){
				$m_data = array(
					'subject' => $data['subject'],
					'educ_type' => "Senior High School",
					'grade_lvl' => $data['grade_lvl'],
					'subject_type' => $data['subject_type'],
					'strand' => null
				);
			}
			else{
				$m_data = array(
					'subject' => $data['subject'],
					'educ_type' => "Senior High School",
					'grade_lvl' => $data['grade_lvl'],
					'subject_type' => $data['subject_type'],
					'strand' => $data['strand']
				);
			}

			$this->lrmds_model->insert_shs_subject($m_data);
		}

	}

// EDIT FUNCTION ************************

	public function edit(){
		$data = $this->input->post();
		// echo $current_view;

		if ( $data['edit'] == 'jhs'){
			if($data['jhs_subject']){
				unset($data['edit']);
				$this->edit_jhs_subject($data['jhs_subject']);
			}
		}
		elseif ( $data['edit'] == 'shs'){
			if($data['shs_subject']){
				unset($data['edit']);
				$this->edit_shs_subject($data['shs_subject']);
			}
		}
		elseif ( $data['edit'] == 'strands'){
			if($data['strand']){
				unset($data['edit']);
				$this->edit_strand($data['strand']);
			}
		}
	}


	private function edit_jhs_subject($data){
		if($data){

			$m_data = array(
				'lres_id' => $data['lres_id'],
				'educ_type' => "Junior High School",
				'subject' => $data['subject']
			);

			$this->lrmds_model->update_jhs_subject($m_data);
		}
	}

	private function edit_shs_subject($data){
		if($data){

			if($data['strand'] == null){
				$m_data = array(
					'educ_type' => 'Senior High School',
					'grade_lvl' => $data['grade_lvl'],
					'subject_type' => $data['subject_type'],
					'strand' => null,
					'subject' => $data['subject']
				);
			}
			else{
				$m_data = array(
					'educ_type' => 'Senior High School',
					'grade_lvl' => $data['grade_lvl'],
					'subject_type' => $data['subject_type'],
					'strand' => $data['strand'],
					'subject' => $data['subject']
				);
			}

			$this->lrmds_model->update_shs_subject($m_data);
		}
	}

	private function edit_strand($data){
		if($data){

			$m_data = array(
				'lrs_id' => $data['lrs_id'],
				'strand' => $data['strand']
			);

			$this->lrmds_model->update_strand($m_data);
		}
	}

// DELETE FUNCTION ****************************

	public function delete(){
		$data = $this->input->post();
		// echo $current_view;
		if ( $data['delete'] == 'topics'){
			if($data['topic']){
				unset($data['delete']);
				$this->delete_topic($data['topic']);
			}
		}
		elseif ( $data['delete'] == 'jhs'){
			if($data['subject']){
				unset($data['delete']);
				$this->delete_jhs_subject($data['subject']);
			}
		}
		elseif ( $data['delete'] == 'shs'){
			if($data['shs_data']){
				unset($data['delete']);
				$this->delete_shs_subject($data['shs_data']);
			}
		}
		elseif ( $data['delete'] == 'strands'){
			if($data['strand']){
				unset($data['delete']);
				$this->delete_strand($data['strand']);
			}
		}
	}

	private function delete_strand($data){
		if($data){
			$m_data = array('strand' => $data);
			$table = 'tbl_lr_strands';
			$this->lrmds_model->delete($table,$m_data);
		}
	}

	private function delete_topic($data){
		if($data){
			$m_data = array('topic_name' => $data);
			$table = 'tbl_lr_topics';
			$this->lrmds_model->delete($table,$m_data);
		}
	}

	private function delete_jhs_subject($data){
		if($data){
			$m_data = array('subject' => $data);
			$table = 'tbl_lr_jhs_subjects';
			$this->lrmds_model->delete($table,$m_data);
		}
	}

	private function delete_shs_subject($data){
		if($data){
			if($data['strand'] == null){
				$m_data = array('subject' => $data['subject']);
			}
			else{
				$m_data = array('subject' => $data['subject'], 'strand' => $data['strand']);
			}
			$table = 'tbl_lr_shs_subjects';
			$this->lrmds_model->delete($table,$m_data);
		}
	}

}
