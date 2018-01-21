<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Procedures extends CI_Controller {

	public function index()
	{
		$this->load->view('website/e_procedures');
	}
}
