<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller {
	
	public function index()
	{
		$this->load->view('website/contact_us');
	}
}
