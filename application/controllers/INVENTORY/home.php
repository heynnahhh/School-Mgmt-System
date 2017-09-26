<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
  		parent::__construct();

		$this->load->model('SMS/user');
		$this->load->library('form_validation');

	}

	public function index()
	{
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('INVENTORY/index2',$data);
	}

	public function manage_records()
	{
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('INVENTORY/manage_records');
	}

	public function reports_search()
	{
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('INVENTORY/reports_search', $data);
	}

	public function compose_email(){
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('INVENTORY/compose_email', $data);
	}

	public function formulate_app(){
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('INVENTORY/formulate_app', $data);
	}

	public function generate_apr(){
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('INVENTORY/generate_apr',$data);
	}


}
