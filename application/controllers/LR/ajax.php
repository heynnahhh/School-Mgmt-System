<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ajax extends CI_Controller {
	public function __construct() {
  		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('LR/lr_model');
		$this->load->model('LR/user');
		$this->load->helper('string');
		$this->load->helper('url');
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

  }

  private function add_user_profile($data){
    if($data){

			$user_id = random_string('alnum', 5);

      $prof_data = array(
				'user_id' => $user_id,
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
				'uacc_user_id' => $user_id,
        'email' => $data['email'],
        'username' => $data['username'],
        'password' => md5($data['re_password']),
				'status' => 'Active',
				'account_type' => 'Admin'
      );

			$default_pic = array (
				'upc_user_id' => $user_id,
				'image_name' => 'default.jpg',
				'full_path' => 'C:/wamp64/www/School-Mgmt-System/asd/profile_pic/default.jpg',
				'file_path'=>	'C:/wamp64/www/School-Mgmt-System/asd/profile_pic/',
				'file_type' => 'image/jpeg'
			);

      $m_data = array($prof_data,$acct_data,$default_pic);
      $this->lr_model->add_user($m_data);

    }
  }

	private function add_topic($data){
	 if($data){
		 $topic_id = random_string('alnum', 5);

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

	public function edit_users_profile(){
		$data = $this->input->post();
		$lus_id = $data['lus_id'];

			$edit_user_info = array(
				'lus_id' => $lus_id,
				'last_name' => $data['last_name'],
				'first_name' => $data['first_name'],
				'middle_name' => $data['middle_name'],
				'address' => $data['address'],
				'birthdate' => $data['birthdate'],
				'gender' => $data['gender'],
				'contact_no' => $data['contact_no'],
				'area_of_expertise' => $data['area_of_expertise']
			);

			$config['upload_path']   = APPPATH. "../asd/profile_pic";
			$config['overwrite'] = TRUE;
			$config['allowed_types'] = '*';

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			$this->upload->do_upload('upload_pic');
			$pic_data =  $this->upload->data();

			if ( ! $this->upload->do_upload('upload_pic')) {
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}

			else {
				$data = array('upload_data' => $this->upload->data());

				$prof_pic = array(
						'lupc_id' => $lus_id,
						'image_name' => $pic_data['file_name'],
						'file_path' => $pic_data['file_path'],
						'full_path' => $pic_data['full_path'],
						'file_type' => $pic_data['file_type']
					);

			}

			$m_data = array($edit_user_info, $prof_pic);
			$this->lr_model->update_users_profile($m_data);
			redirect('lr/profile/edit_profile');
	}

	public function edit_password(){
		$data = $this->input->post();
		if($data){
			if ($data['change_password'] != $data['change_re_password']){
					$data['error_msg'] = 'Password is not matched';
					$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
					$data['user_info'] = $this->lr_model->get_users_profile($this->session->userdata('userId'));
					$data['user_pic'] = $this->lr_model->get_users_profile_pic($this->session->userdata('userId'));
					$this->load->view('LR/profile/change_pass', $data);
			} else {
				$m_data = array(
					'lusa_id' => $data['lusa_id'],
					'password' => md5($data['change_password']),
				);
				$this->lr_model->update_password($m_data);
				$data['success_msg'] = 'Password Changed!';
				$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
				$data['user_info'] = $this->lr_model->get_users_profile($this->session->userdata('userId'));
				$data['user_pic'] = $this->lr_model->get_users_profile_pic($this->session->userdata('userId'));
				$this->load->view('LR/profile/change_pass', $data);
			}
		}

	}

}
