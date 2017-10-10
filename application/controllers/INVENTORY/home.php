<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
  		parent::__construct();

		$this->load->model('SMS/user');
		$this->load->library('form_validation');
		$this->load->model('INVENTORY/inventory_model');

	}

	public function index()
	{
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('INVENTORY/index2',$data);
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

	public function stocks(){
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$data['stocks'] = $this->view_stocks();
		$data['products'] = $this->view_products();
		// 	print_r($data);
		$this->load->view('INVENTORY/stocks',$data);
	}

	public function products(){
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$data['products'] = $this->view_products();
		$data['category'] = $this->get_category();
		// print_r($data);
		$this->load->view('INVENTORY/products',$data);
	}

	public function view_stocks(){
		$data = $this->inventory_model->get_Stocks();
		return $data;
	}

	public function view_products(){
		$data = $this->inventory_model->get_Products();
		return $data;
	}

	public function get_category(){
	    $data = $this->inventory_model->get_category();
	    return $data;
    }

	public function add_product(){
		if($data = $this->input->post()){

			$m_data = array(
				'product_code' => $data['product_code'],
				'product_name' => $data['product_name'],
				'product_desc' => $data['product_desc'],
				'product_amount' => $data['product_amount'],
				'product_status' => 'Inactive'
			);

			$this->inventory_model->insert_product($m_data);
		}

		$this->products();
	}

	public function add_stocks(){
		if($data = $this->input->post()){

			$m_data = array(
				'ist_product_code' => $data['ist_product_code'],
				'product_qty' => $data['product_qty'],
				'product_qty_left' => $data['product_qty'],
				'import_date' => date("Y-m-d H:i:s"),
				'as_of_date' => date("Y-m-d H:i:s")
			);

			$this->inventory_model->insert_stocks($m_data);
		}
		// needs to set url
		$this->stocks();

	}


}
