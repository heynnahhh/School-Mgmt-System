<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Application extends CI_Controller {

	public function index()
	{
		$this->load->view('website/application');
	}
}
