<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manage_records extends CI_Controller {


	public function index()
	{
		$this->load->view('INVENTORY/manage_records');
	}


}
