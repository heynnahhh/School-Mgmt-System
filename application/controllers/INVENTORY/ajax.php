<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ajax extends CI_Controller {
	public function __construct() {
  		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('INVENTORY/inventory_model');
		$this->sms_session->checkSession();
		$current_module = $this->uri->segment(1);

	}

	public function view_stocks(){
		$data = $this->inventory_model->get_Stocks();
		return $data;
	}

	public function view_products(){
		$m_data = $this->inventory_model->get_Products();
		$data = array();

			foreach ($m_data as $value) {
				$row = array();
				$row[] = '<a href="'.site_url().'/INVENTORY/home/stock_register'.$value->item_code.'">'.$value->item_code.'</a>';
				$row[] = $value->item_name;
				$row[] = $value->item_desc;
				$row[] = $value->item_category;
				$row[] = $value->product_status;
				$row[] = $value->unit_cost;
				$row[] = '<button type="button" class="btn btn-sm bg-blue" id="edit" onclick="edit()"><i class="fa fa-edit"></i></button>';
				$data[] = $row;
			}

			$result = array(
				"data" => $data,
			);

		echo json_encode($result);

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
