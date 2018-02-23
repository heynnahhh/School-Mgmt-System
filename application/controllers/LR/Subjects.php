<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subjects extends CI_Controller {

	public function index()
	{
		$this->load->view('LR/subjects');
	}
}
