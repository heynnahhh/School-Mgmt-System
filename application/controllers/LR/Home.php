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

	public function view_login(){
		$this->load->view('LR/login');
	}

	public function preview(){
		$this->load->view('LR/preview');
	}

	public function subjects(){
		$this->load->view('LR/subjects');
	}

	public function view_jhs(){
		$this->load->view('LR/juniorhs');
	}

	public function view_shs(){
		$this->load->view('LR/seniorhs');
	}

	public function short(){
		$this->load->view('LR/short-codes');
	}

}
