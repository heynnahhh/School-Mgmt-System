<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->view('INVENTORY/index2');
	}

	public function manage_records()
	{
		$this->load->view('INVENTORY/manage_records');
	}


}
