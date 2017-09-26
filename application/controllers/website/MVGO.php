<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MVGO extends CI_Controller {

	public function index()
	{
		$this->load->view('website/mvgo');
	}
}
