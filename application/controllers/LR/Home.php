<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('LR/home');
	}

	public function gallery(){
		$this->load->view('LR/gallery');
	}

}
