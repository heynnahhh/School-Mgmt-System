<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
  		parent::__construct();

		$this->load->model('SMS/user');
		$this->load->model('INVENTORY/inventory_model');
		$this->sms_session->checkSession();

	}

	public function index()
	{
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('INVENTORY/index2',$data);
	}

	public function transactions()
	{

		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$data['options'] = $this->inventory_model->get_item_options();
		$this->load->view('INVENTORY/transactions', $data);
		// print_r($data['item']);
	}

	public function stock_register()
	{
		$data = array();
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$data['options'] = $this->inventory_model->get_department();
		$data['categories'] = $this->inventory_model->get_category();
		$this->load->view('INVENTORY/stock_register', $data);
	}

	public function inventory_items()
	{
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$data['categories'] = $this->inventory_model->get_category();
		$this->load->view('INVENTORY/inventory_items', $data);
	}

	public function manage_records()
	{
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('INVENTORY/manage_records');
	}

	public function reports_search()
	{
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('INVENTORY/reports_search', $data);
	}

	public function compose_email(){
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('INVENTORY/compose_email', $data);
	}

	public function formulate_app(){
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('INVENTORY/formulate_app', $data);
	}

	public function generate_apr(){
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('INVENTORY/generate_apr',$data);
	}

	// public function stocks(){
	// 	$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
	// 	$data['stocks'] = $this->view_stocks();
	// 	$data['products'] = $this->view_products();
	// 	// 	print_r($data);
	// 	$this->load->view('INVENTORY/stocks',$data);
	// }
	//
	// public function products(){
	// 	$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
	// 	$data['products'] = $this->view_products();
	// 	$data['category'] = $this->get_category();
	// 	// print_r($data);
	// 	$this->load->view('INVENTORY/products',$data);
	// }

}
