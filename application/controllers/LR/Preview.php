<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Preview extends CI_Controller {

	public function index()
	{
		$this->load->view('LR/preview');
	}
}
