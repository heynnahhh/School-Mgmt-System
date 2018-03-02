<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ajax extends CI_Controller {
	public function __construct() {
  		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('LR/lr_model');
		$this->load->helper('string');
	}

  public function add(){
    $data = $this->input->post();

    if($data['add'] == 'register'){
      if($data['reg_info']){
        unset($data['add']);
        $this->add_user_profile($data['reg_info']);
      }
    }
		elseif($data['add'] == 'topic'){
			if($data['topic']){
				unset($data['add']);
				$this->add_topic($data['topic']);
			}
		}
		elseif($data['add'] == 'upload') {
			if($data['upload']){
				unset($data['add']);
				$this->upload_lrn($data['upload']);
			}
		}

  }

  private function add_user_profile($data){
    if($data){

      $prof_data = array(
        'last_name' => $data['last_name'],
        'first_name' => $data['first_name'],
        'middle_name' => $data['middle_name'],
        'address' => $data['address'],
        'birthdate' => $data['birthdate'],
        'gender' => $data['gender'],
        'contact_no' => $data['contact_no'],
        'area_of_expertise' => $data['area_of_expertise']
      );

      $acct_data = array(
        'email' => $data['email'],
        'username' => $data['username'],
        'password' => md5($data['password'])

      );

      $m_data = array($prof_data,$acct_data);

      $this->lr_model->add_user($m_data);

    }
  }

	private function add_topic($data){
	 if($data){
		 $topic_id = md5(random_string('alnum', 5));

		 if(empty($data['subject_type']) && empty($data['strand'])){
	 		 $m_data = array(
	 			 'topic_id' => $topic_id,
	 			 'educ_type' => $data['educ_type'],
	 			 'grade_lvl' => $data['grade_lvl'],
	 			 'subject_type' => NULL,
	 			 'strand' => NULL,
	 			 'subject' => $data['subject'],
	 			 'topic_name' => $data['topic_name']
	 		 );
		 }
		 elseif (empty($data['strand'])) {
			 $m_data = array(
				 'topic_id' => $topic_id,
				 'educ_type' => $data['educ_type'],
				 'grade_lvl' => $data['grade_lvl'],
				 'subject_type' => $data['subject_type'],
				 'strand' => NULL,
				 'subject' => $data['subject'],
				 'topic_name' => $data['topic_name']
			 );
	 	}
		else {
			$m_data = array(
				'topic_id' => $topic_id,
				'educ_type' => $data['educ_type'],
				'grade_lvl' => $data['grade_lvl'],
				'subject_type' => $data['subject_type'],
				'strand' => $data['strand'],
				'subject' => $data['subject'],
				'topic_name' => $data['topic_name']
			);
		}

		$this->lr_model->add_topic($m_data);

	}

 }

	public function get_grade_lvl(){
		$data = $this->input->post();

		$m_data = $data['educ_type'];

		$values = $this->lr_model->get_grade_lvl($m_data);

		if($values) {

		foreach ($values as $value) {
			$option = array();
			$option[] = $value->grade_lvl;
			$option_data[] = $option;
		}

		echo json_encode($option_data);

		}
	}

	public function get_subject_type(){
		$data = $this->input->post();

		$m_data = $data['educ_type'];

		$values = $this->lr_model->get_subject_type($m_data);

		if($values) {

		foreach ($values as $value) {
			$option = array();
			$option[] = $value->subject_type;
			$option_data[] = $option;
		}

		echo json_encode($option_data);

		}
	}

	public function get_jhs_subjects(){
		$data = $this->input->post();

		$m_data = $data['educ_type'];

		$values = $this->lr_model->get_jhs_subject($m_data);

		if($values) {

		foreach ($values as $value) {
			$option = array();
			$option[] = $value->subject;
			$option_data[] = $option;
		}

		echo json_encode($option_data);

		}
	}

	public function get_shs_subjects(){
		$data = $this->input->post();

		if($data['get'] == 'no strand'){
			unset($data['get']);
			$m_data = array(
				'grade_lvl' => $data['grade_lvl'],
				'subject_type' => $data['subj_type']
			);
		}
		elseif($data['get'] == 'strand'){
			unset($data['get']);
			$m_data = array(
				'grade_lvl' => $data['grade_lvl'],
				'subject_type' => $data['subj_type'],
				'strand' => $data['strand']
			);
		}

		$values = $this->lr_model->get_shs_subject($m_data);

		if($values) {

		foreach ($values as $value) {
			$option = array();
			$option[] = $value->subject;
			$option_data[] = $option;
		}

		echo json_encode($option_data);

		}
	}

	public function get_topics(){
		$data = $this->input->post();

		if(empty($data['subject_type']) && empty($data['strand'])){
			$m_data = array(
			'educ_type' => $data['educ_type'],
			'grade_lvl' => $data['grade_lvl'],
			'subject_type' => NULL,
			'strand' => NULL,
			'subject' => $data['subject']
			);
		}
		elseif (empty($data['strand'])) {
			$m_data = array(
				'educ_type' => $data['educ_type'],
				'grade_lvl' => $data['grade_lvl'],
				'subject_type' => $data['subject_type'],
				'strand' => NULL,
				'subject' => $data['subject']
			);
	 }
	 else {
		 $m_data = array(
			 'educ_type' => $data['educ_type'],
 			'grade_lvl' => $data['grade_lvl'],
 			'subject_type' => $data['subject_type'],
 			'strand' => $data['strand'],
 			'subject' => $data['subject']
		 );
	 }

		$values = $this->lr_model->get_topic($m_data);

		if($values) {

		foreach ($values as $value) {
			$option = array();
			$option[] = $value->topic_name;
			$option_data[] = $option;
		}

		echo json_encode($option_data);

		}
	}

	private function upload_lrn($data){
		if($data){
			$lr_code = md5(random_string('alnum', 6));

			$topic_id = $this->lr_model->get_topic_id($data['topic']);

      // $lrn_info = array(
			// 	'lr_code' => $lr_code,
			// 	'topic_id' => md5($topic_id),
      //   'lr_title' => $data['lr_title'],
      //   'description' => $data['description'],
      //   'objective' => $data['objective'],
			// 	'resource_type' => $data['resource_type'],
			// 	'intended_user' => $data['intended_user'],
			// 	'language' => $data['language'],
      //   'publisher' => 'Hannah Liao',
      //   'date_published' => date("Y-m-d H:i:s"),
      //   'copyright' => $data['copyright'],
			// 	'copyright_owner' => $data['copyright_owner'],
      // );

			foreach ($topic_id as $id) {
				$lrn_info = array(
					'lr_code' => $lr_code,
					'topic_id' => $id->topic_id,
				  'lr_title' => $data['lr_title'],
	        'description' => $data['description'],
	        'objective' => $data['objective'],
					'resource_type' => $data['resource_type'],
					'intended_user' => $data['intended_user'],
					'language' => $data['language'],
	        'publisher' => 'Hannah Liao',
	        'date_published' => date("Y-m-d H:i:s"),
	        'copyright' => $data['copyright'],
					'copyright_owner' => $data['copyright_owner']
				);
			}

      // $config['upload_path'] = './uploads/';
      // $config['allowed_types'] = 'gif|jpg|png|txt';
			//
      // $this->load->library('upload', $config);
			//
      // $upload_lrn = 'upload_lrn';
			//
      // $this->upload->do_upload($upload_lrn);
			//
      // $lrn = array(
			// 	'lup_lr_code' => $lr_code,
      //   'file_name' => $this->upload->data('file_name'),
      //   'file_path' => $this->upload->data('file_path'),
      //   'full_path_url' => $this->upload->data('full_path'),
      //   'file_type' => $this->upload->data('file_type'),
      //   'file_size' => $this->upload->data('file_size')
      // );

			$config['upload_path']   = './uploads/';
      $config['overwrite'] = TRUE;
      $config['allowed_types'] = 'gif|jpg|png|txt';

      $this->load->library('upload', $config);

			$upload_lrn = 'upload_lrn';
			$this->upload->do_upload($upload_lrn);


      if ( ! $this->upload->do_upload($upload_lrn)) {
        $error = array('error' => $this->upload->display_errors());
				$this->load->view('LR/profile/upload', $error);
      }

      else {
        $data = array('upload_data' => $this->upload->data());

				$lrn = array(
					'lup_lr_code' => $lr_code,
	        'file_name' => $this->upload->data('file_name'),
	        'file_path' => $this->upload->data('file_path'),
	        'full_path_url' => $this->upload->data('full_path'),
	        'file_type' => $this->upload->data('file_type'),
	        'file_size' => $this->upload->data('file_size')
	      );

				$m_data = array($lrn_info, $lrn);

	      $this->lr_model->upload_lrn($m_data);
			}
		}

  }

}
