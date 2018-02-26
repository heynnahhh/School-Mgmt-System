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

}
