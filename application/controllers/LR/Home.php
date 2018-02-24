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

	public function juniorhs_view_file()
	{
		$this->load->view('LR/website/juniorhs_view_files');
	}

	public function seniorhs_view_file()
	{
		$this->load->view('LR/website/seniorhs_view_files');
	}

	public function view_file()
	{
		$this->load->view('LR/website/view_file');
	}

	public function register()
	{
		$this->load->view('LR/website/register');
	}

	public function p_home()
	{
		$this->load->view('LR/profile/home');
	}

	public function p_juniorhs()
	{
		$this->load->view('LR/profile/juniorhs');
	}

	public function p_seniorhs()
	{
		$this->load->view('LR/profile/seniorhs');
	}

	public function p_juniorhs_subjects()
	{
		$this->load->view('LR/profile/juniorhs_subjects');
	}

	public function p_seniorhs_subjects()
	{
		$this->load->view('LR/profile/seniorhs_subjects');
	}

	public function p_juniorhs_view_file()
	{
		$this->load->view('LR/profile/juniorhs_view_files');
	}

	public function p_seniorhs_view_file()
	{
		$this->load->view('LR/profile/seniorhs_view_files');
	}

	public function p_view_file()
	{
		$this->load->view('LR/profile/view_file');
	}

}
