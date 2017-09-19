<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ers extends CI_Controller {

	public function index()
	{
		$this->load->view('website/ers');
	}
}
