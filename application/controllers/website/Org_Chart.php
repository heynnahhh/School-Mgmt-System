<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Org_Chart extends CI_Controller {

	public function index()
	{
		$this->load->view('website/org_chart');
	}
}
