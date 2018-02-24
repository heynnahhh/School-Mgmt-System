<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('LR/website/home');
	}

	public function juniorhs()
	{
		$this->load->view('LR/website/juniorhs');
	}

	public function seniorhs()
	{
		$this->load->view('LR/website/seniorhs');
	}

	public function juniorhs_subjects()
	{
		$this->load->view('LR/website/juniorhs_subjects');
	}

	public function seniorhs_subjects()
	{
		$this->load->view('LR/website/seniorhs_subjects');
	}

	public function view_file()
	{
		$this->load->view('LR/website/view_file');
	}

	public function register()
	{
		$this->load->view('LR/website/register');
	}



}
