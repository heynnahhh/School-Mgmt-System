<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AHS_Hymn extends CI_Controller {

	public function index()
	{
		$this->load->view('website/ahs_hymn');
	}
}
