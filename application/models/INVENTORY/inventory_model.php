<?php
class Inventory_model extends CI_Model{
  public function __construct() {
			parent::__construct();

	}

    public function get_Stocks(){
          $this->db->select('tbl_inv_stocks.stock_no,
                            tbl_inv_stocks.quantity,
                            tbl_inv_items.item_name,
                            tbl_inv_items.item_category');
          $this->db->from('tbl_inv_stocks');
          $this->db->join('tbl_inv_items' , 'tbl_inv_items.item_code = tbl_inv_stocks.ist_item_code');
          $query = $this->db->get();
          return $query->result();
    }

    public function get_Items(){
          $this->db->select('item_code, item_name, item_desc, item_category, product_status, unit_cost');
          $query = $this->db->get('tbl_inv_items');
          return $query->result();
    }

    public function get_Transacts(){
          $this->db->select('tbl_inv_transactions.receipt_no,
                            tbl_inv_items.item_name,
                            tbl_inv_transactions.description,
                            tbl_inv_transactions.quantity,
                            tbl_inv_transactions.unit_cost,
                            tbl_inv_transactions.total_cost,
                            tbl_inv_transactions.received_by,
                            tbl_inv_transactions.received_fr,
                            tbl_inv_transactions.date_received');
          $this->db->from('tbl_inv_transactions');
          $this->db->join('tbl_inv_items' , 'tbl_inv_items.item_code = tbl_inv_transactions.itr_item_code');
          $query = $this->db->get();
          return $query->result();
    }

    public function insert_product($m_data){
      $this->db->insert('tbl_inv_items', $m_data);
    }

    public function insert_stocks($m_data){
      $this->db->insert('tbl_inv_stocks', $m_data);
    }

    public function insert_category($m_data){
      $this->db->insert('tbl_inv_item_category', $m_data);
    }

    public function get_category(){
        $this->db->select('category');
        $query = $this->db->get('tbl_inv_item_category');
        return $query->result();
    }

    public function get_item_options(){
        $this->db->select('item_name, item_code');
        $query = $this->db->get('tbl_inv_items');
        return $query->result();
    }

    public function get_department(){
        $this->db->select('*');
        $query = $this->db->get('tbl_inv_departments');
        return $query->result();
    }

}
