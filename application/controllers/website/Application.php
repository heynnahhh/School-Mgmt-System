<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Application extends CI_Controller {

	public function __construct() {
			parent::__construct();

		// $this->load->model('');
		$this->load->library('form_validation');

	}

	public function index()
	{
		$this->load->view('website/application');
	}

	// public function submit_form($data){
	//
	// $info_data = array('lrn' => $data[], 'first_name' => $data[], 'middle_name' => $data[]);
	// $addr_data = array();
	// $guar_data = array();
	// $par_data = array();
	//
	//	$data = array($info_data, $addr_data, $guar_data, $par_data);
	// 	$this->application_form_model->insert_form($data);
	//
	// }

}
