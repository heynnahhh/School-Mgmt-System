<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ajax extends CI_Controller {
	public function __construct() {
  		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('INVENTORY/inventory_model');
		$this->load->helper('string');

	}

	public function view_stocks(){
		$m_data = $this->inventory_model->get_Stocks();
		$data = array();

			foreach ($m_data as $value) {
				$row = array();
				$row[] = $value->stock_no;
				$row[] = $value->item_name;
				$row[] = $value->item_category;
				if($value->quantity <= 0){
					$row[] = '<span class="badge bg-red">Out of Stock</span>';
				}
				elseif($value->quantity > 0 ){
					$row[] = $value->quantity;
				}
				$row[] = '<button type="button" class="btn bg-green btn-dist" id="myBtn">Distribute</button>
				          <button type="button" class="btn btn-sm bg-red delete"><i class="fa fa-trash-o"></i></button>';
				$data[] = $row;
			}

			$result = array(
				"data" => $data,
			);

		echo json_encode($result);
	}

	public function view_stocks_dept(){
		$data = $this->input->post();
		$m_data = $this->inventory_model->get_Stocks_dept($data['department']);
		$data = array();

			foreach ($m_data as $value) {
				$row = array();
				$row[] = $value->department;
				$row[] = $value->item_name;
				$row[] = $value->item_category;
				if($value->distributed_qty <= 0){
					$row[] = '<span class="badge bg-red">Out of Stock</span>';
				}
				elseif($value->distributed_qty > 0 ){
					$row[] = $value->distributed_qty;
				}
				$row[] = '<button type="button" class="btn bg-blue edit" id="edit"><i class="fa fa-edit"></i></button>
				          <button type="button" class="btn btn-sm bg-red delete"><i class="fa fa-trash-o"></i></button>';
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
				$row[] = '<button type="button" class="btn btn-sm bg-aqua view" id="view"><i class="fa fa-eye"></i></button>
				<button type="button" class="btn btn-sm bg-blue edit" id="edit"><i class="fa fa-edit"></i></button>
				<button type="button" class="btn btn-sm bg-red delete"><i class="fa fa-trash-o"></i></button>';
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
				$row[] = '<button type="button" class="btn btn-sm bg-aqua view" id="view"><i class="fa fa-eye"></i></button>
				<button type="button" class="btn btn-sm bg-blue edit" id="edit"><i class="fa fa-edit"></i></button>
				<button type="button" class="btn btn-sm bg-red delete"><i class="fa fa-trash-o"></i></button>';
				$data[] = $row;
			}

			$result = array(
				"data" => $data,
			);

		echo json_encode($result);
			// print_r($result);
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

		// public function get_stock_details(){
		// 	$data = $this->input->post();
		//
		// 	$m_data = $data['stock_no'];
		//
		// 	$values = $this->inventory_model->get_stock_details($m_data);
		//
		// 	$result = array(
		// 		"data" => $values
		// 	);
		//
		// 	echo json_encode($result);
		//
		//
		// }

		public function get_item_info(){
			$data = $this->input->post();

			$m_data = $data['item_code'];

			$values = $this->inventory_model->get_item_info($m_data);

			$result = array(
				"data" => $values
			);

			echo json_encode($result);

		}

// ADD *************************

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
		elseif ( $data['add'] == 'stock_register'){
			if($data['distrib']) {
				$this->add_distrib($data['distrib']);
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
			$stock_no = random_string('alnum', 4);

			$trans_data = array(
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

			$qty = $this->inventory_model->get_existing_data($item_code[0]);

			if(!empty($qty)){

					$quantity = $qty[0]->quantity + $data['quantity'];

					$stock_data = array(
						'stock_no' => $qty[0]->stock_no,
						'ist_item_code' => $qty[0]->ist_item_code,
						'quantity' => $quantity
					);

					$this->inventory_model->update_stock($stock_data);
					$this->inventory_model->insert_transacts($trans_data);
			}
			elseif(empty($qty)){

				$stocks_data = array(
					'stock_no' => $stock_no,
					'ist_item_code' => $item_code[0],
					'quantity' => $data['quantity']
				);

				$m_data = array($trans_data, $stocks_data);
				$this->inventory_model->insert_transacts($m_data);
			}
		}
	}


	private function add_distrib($data){
		if($data){

			$item_code = $this->inventory_model->get_item_code($data['item_name']);

			$m_data = array(
				'department' => $data['department'],
				'item_code' => $item_code[0]->item_code,
				'distributed_qty' => $data['quantity']
			);

			// print_r($m_data);
			$this->inventory_model->insert_distrib($m_data);

		}
	}

	public function subt(){
		$data = $this->input->post();

		$item_code = $this->inventory_model->get_item_code($data['subtract']['item_name']);
		$ex_data = $this->inventory_model->get_existing_data($item_code[0]->item_code);


		$quantity_left = $ex_data[0]->quantity - $data['subtract']['quantity'];

		$m_data = array(
			'stock_no' => $ex_data[0]->stock_no,
			'ist_item_code' => $item_code[0]->item_code,
			'quantity' => $quantity_left
		);

		$this->inventory_model->update_stock($m_data);

	}

// EDIT **************************

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

	// DELETE FUNCTION ****************************

		public function delete(){
			$data = $this->input->post();
			// echo $current_view;
			if ( $data['delete'] == 'transactions'){
				if($data['receipt_no']){
					unset($data['delete']);
					$this->delete_transact($data['receipt_no']);
				}
			}
			elseif ( $data['delete'] == 'inventory_items'){
				if($data['item_code']){
					unset($data['delete']);
					$this->delete_item($data['item_code']);
				}
			}
			elseif ( $data['delete'] == 'stock_register'){
				if($data['stock_no']){
					unset($data['delete']);
					$this->delete_stock($data['stock_no']);
				}
			}
		}

		private function delete_transact($data){
			if($data){
				$m_data = array('receipt_no' => $data);
				$table = 'tbl_inv_transactions';
				$this->inventory_model->delete($table,$m_data);
			}
		}

		private function delete_item($data){
			if($data){
				$m_data = array('item_code' => $data);
				$table = 'tbl_inv_items';
				$this->inventory_model->delete($table,$m_data);
			}
		}

		private function delete_stock($data){
			if($data){
				$m_data = array('stock_no' => $data);
				$table = 'tbl_inv_stocks';
				$this->inventory_model->delete($table,$m_data);
			}
		}

}
