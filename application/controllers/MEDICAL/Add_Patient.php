<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_Patient extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('SMS/user');
    $this->load->library('form_validation');

  }

  public function index()
  {
  	 $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
    $this->load->view('MEDICAL/add_patient',$data);

  }
}
