<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jhs extends CI_Controller {

	public function index()
	{
		$this->load->view('LR/juniorhs');
	}
}
