<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ajax extends CI_Controller {
	public function __construct() {
  		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('LR/lr_model');
		$this->sms_session->checkSession();

	}

  public function add(){
    $data = $this->input->post();

    if($data['add'] == 'register'){
      if($data['reg_info']){
        unset($data['add']);
        $this->add_user_profile($data['reg_info']);
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

	public function get_subject(){
		$data = $this->input->post();

		$m_data = $data['educ_type'];

		$values = $this->lr_model->get_subject($m_data);

		if($values) {

		foreach ($values as $value) {
			$option = array();
			$option[] = $value->subject;
			$option_data[] = $option;
		}

		echo json_encode($option_data);

		}
	}

	public function get_topic(){
		$data = $this->input->post();

		$m_data = array(
			'educ_type' => $data['educ_type'],
			'grade_lvl' => $data['grade_lvl'],
			'subject' => $data['subject']
		);

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

      $lrn_info = array(
        'lr_name' => $data['lr_name'],
        'description' => $data['description'],
        'objective' => $data['objective'],
        'learning_subj' => $data['learning_subj'],
        'language' => $data['language'],
        'date_published' => date("Y-m-d H:i:s"),
        'copyright' => $data['copyright'],
        'educ_type' => $data['educ_type'],
        'grade_level' => $data['grade_level']
      );

      $config['upload_path'] = './uploads/';
      $config['allowed_types'] = 'gif|jpg|png|txt';
      $config['max_size']     = '100';

      $this->load->library('upload', $config);

      $upload_lrn = "upload_lrn";

      $this->upload->do_upload($upload_lrn);

      $lr_info = $this->upload_data();

      $lrn = array(
        'file_name' => $lr_info['file_name'],
        'file_path' => $lr_info['file_path'],
        'full_path' => $lr_info['full_path'],
        'file_type' => $lr_info['file_type'],
        'full_size' => $lr_info['file_size']
      );

      $m_data = array($lrn_info, $lrn);

      $this->lr_model->upload_lrn($m_data);

    }
  }

   private function add_topic($data){
    if($data){

      $m_data = array(
        'educ_type' => $data['educ_type'],
        'grade_lvl' => $data['grade_lvl'],
        'subject' => $data['subject'],
        'topic_name' => $data['topic_name']
      );

      $this->lr_model->add_topic($m_data);

    }
  }
}
