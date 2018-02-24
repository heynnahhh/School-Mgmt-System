<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('website/home');
	}

	public function admission()
	{
		$this->load->view('website/admission');
	}
	
	public function ahs_hymn()
	{
		$this->load->view('website/ahs_hymn');
	}
	
	public function application()
	{
		$this->load->view('website/application');
	}
	public function calendar()
	{
		$this->load->view('website/calendar');
	}
	public function contacts()
	{
		$this->load->view('website/contact_us');
	}
	public function courses()
	{
		$this->load->view('website/courses');
	}
	public function ers()
	{
		$this->load->view('website/ers');
	}
	public function history()
	{
		$this->load->view('website/history');
	}
	public function login()
	{
		$this->load->view('website/login');
	}
	public function mvgo()
	{
		$this->load->view('website/mvgo');
	}
	public function news()
	{
		$this->load->view('website/news_page');
	}
	public function org_chart()
	{
		$this->load->view('website/org_chart');
	}

	public function procedures()
	{
		$this->load->view('website/e_procedures');
	}
}

