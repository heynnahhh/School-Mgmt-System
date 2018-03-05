<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
  		parent::__construct();

		$this->load->model('SMS/user');
		$this->load->library('form_validation');
		$this->sms_session->checkSession(base_url());

	}

	public function strands()
	{
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('LRMDS/strands', $data);
	}

	public function topics()
	{
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('LRMDS/topics', $data);
	}

	public function jhs()
	{
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('LRMDS/jhs', $data);
	}

	public function shs()
	{
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('LRMDS/shs', $data);
	}

	public function users_account()
	{
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('LRMDS/users_account', $data);
	}

	public function users_privilege()
	{
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('LRMDS/users_privilege', $data);
	}

}
