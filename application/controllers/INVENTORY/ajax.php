<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ajax extends CI_Controller {
	public function __construct() {
  		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('INVENTORY/inventory_model');
		$this->sms_session->checkSession();

	}

	public function view_stocks(){
		$m_data = $this->inventory_model->get_Stocks();
		$data = array();

			foreach ($m_data as $value) {
				$row = array();
				$row[] = '<a href="'.site_url().'/INVENTORY/home/stock_register'.$value->stock_no.'">'.$value->stock_no.'</a>';
				$row[] = $value->item_name;
				$row[] = $value->item_category;
				if($value->quantity <= 0){
					$row[] = '<span class="badge bg-red">Out of Stock</span>';
				}
				elseif($value->quantity > 0 ){
					$row[] = $value->quantity;
				}
				$row[] = '<button type="button" class="btn bg-green" id="myBtn">Distribute</button>
				          <button type="button" class="btn bg-blue edit" id="edit" onclick="edit()"><i class="fa fa-edit"></i></button>
				          <button type="button" class="btn bg-red" id="del"><i class="fa fa-trash-o"></i></button>';
				$data[] = $row;
			}

			$result = array(
				"data" => $data,
			);

		echo json_encode($result);
	}

	public function view_products(){
		$m_data = $this->inventory_model->get_Items();
		$data = array();

			foreach ($m_data as $value) {
				$row = array();
				$row[] = $value->item_code;
				$row[] = $value->item_name;
				$row[] = $value->item_category;
				if($value->product_status == 'Inactive'){
					$row[] = '<span class="badge bg-red">Inactive</span>';
				}
				elseif($value->product_status == 'Active'){
					$row[] = '<span class="badge bg-green">Active</span>';
				}
				$row[] = '<button type="button" class="btn btn-sm bg-blue edit" id="edit"><i class="fa fa-edit"></i></button>
				<button type="button" class="btn btn-sm bg-aqua view" id="view"><i class="fa fa-eye"></i></button>';
				$data[] = $row;
			}

			$result = array(
				"data" => $data,
			);

		echo json_encode($result);

	}

	public function view_transacts(){
		$m_data = $this->inventory_model->get_Transacts();
		$data = array();

			foreach ($m_data as $value) {
				$row = array();
				$row[] = $value->receipt_no;
				$row[] = $value->item_name;
				$row[] = $value->quantity;
				$row[] = $value->total_cost;
				$row[] = $value->date_received;
				$row[] = '<button type="button" class="btn btn-sm bg-blue edit" id="edit"><i class="fa fa-edit"></i></button>
				<button type="button" class="btn btn-sm bg-aqua view" id="view"><i class="fa fa-eye"></i></button>';
				$data[] = $row;
			}

			$result = array(
				"data" => $data,
			);

		echo json_encode($result);
			// print_r($result);
	}

	public function add(){
		$data = $this->input->post();
		// echo $current_view;

		if ( $data['add'] == 'inventory_items'){
			if($data['category']){
				unset($data['items']);
				$this->add_category($data['category']);
			}
			elseif($data['items']){
				unset($data['category']);
				$this->add_items($data['items']);
			}
		}

		elseif ( $data['add'] == 'transactions'){
			if($data['transacts']) {
				$this->add_transacts($data['transacts']);
			}
		}

	}

	private function add_category($data){
		if($data){

				$m_data = array(
					'category' => $data
				);

				$this->inventory_model->insert_category($m_data);
				print_r($m_data);

		}
	}

	private function add_items($data){
		if($data){

			$m_data = array(
				'item_code' => $data['item_code'],
				'item_category' => $data['item_category'],
				'item_name' => $data['item_name'],
				'item_desc' => $data['item_desc'],
				'unit_cost' => $data['unit_cost'],
				'product_status' => 'Inactive'
			);

			$this->inventory_model->insert_product($m_data);
		}

	}

	private function add_transacts($data){
		if ($data) {

			$item_code = explode(' - ', $data['item_code']);

			$m_data = array(
				'receipt_no' => $data['receipt_no'],
				'itr_item_code' => $item_code[0],
				'quantity' => $data['quantity'],
				'unit_cost' => $data['unit_cost'],
				'total_cost' => $data['total_cost'],
				'description' => $data['description'],
				'received_by' => $data['received_by'],
				'received_fr' => $data['received_fr'],
				'date_received' => $data['date_received']
			);

			$this->inventory_model->insert_transacts($m_data);
		}
	}

	private function add_stocks(){
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

	public function edit(){
		$data = $this->input->post();
		// echo $current_view;

		if ( $data['edit'] == 'transactions'){
			if($data['transacts']){
				unset($data['edit']);
				$this->edit_transacts($data['transacts']);
			}

		}
		elseif ( $data['edit'] == 'inventory_items'){
			if($data['items']){
				unset($data['edit']);
				$this->edit_item($data['items']);
			}

		}
	}

	private function edit_transacts($data){
		if($data){

			$item_code = explode(' - ', $data['item_code']);

			$m_data = array(
				'receipt_no' => $data['receipt_no'],
				'itr_item_code' => $item_code[0],
				'quantity' => $data['quantity'],
				'unit_cost' => $data['unit_cost'],
				'total_cost' => $data['total_cost'],
				'description' => $data['description'],
				'received_by' => $data['received_by'],
				'received_fr' => $data['received_fr'],
				'date_received' => $data['date_received']
			);

			$this->inventory_model->update_transact($m_data);
		}
	}

	private function edit_item($data){
		if($data){

			$m_data = array(
				'item_code' => $data['item_code'],
				'item_category' => $data['item_category'],
				'item_name' => $data['item_name'],
				'item_desc' => $data['item_desc'],
				'unit_cost' => $data['unit_cost']
			);

			$this->inventory_model->update_item($m_data);
		}
	}

	public function get_item_details(){
		$data = $this->input->post();

		$item_code = explode(' - ', $data['item_code']);

		$m_data = $item_code[0];

		$values = $this->inventory_model->get_details($m_data);

		if($values) {

			foreach ($values as $value){
				$option = array();
				$option[] = $value->unit_cost;
				$option_data[] = $option;
			}

		echo json_encode($option_data);

		}
	}

	public function get_transact_details(){
		$data = $this->input->post();

		$m_data = $data['receipt_no'];

		$values = $this->inventory_model->get_transact_details($m_data);

		$result = array(
			"data" => $values
		);

		echo json_encode($result);

	}

	public function get_item_info(){
		$data = $this->input->post();

		$m_data = $data['item_code'];

		$values = $this->inventory_model->get_item_info($m_data);

		$result = array(
			"data" => $values
		);

		echo json_encode($result);

	}

}
