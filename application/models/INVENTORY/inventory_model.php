<?php
class Inventory_model extends CI_Model{
  public function __construct() {
			parent::__construct();

	}

    public function get_Stocks(){
          $this->db->select('tbl_inv_stocks.ist_id,
                            tbl_inv_stocks.ist_product_code,
                            tbl_inv_products.product_name,
                            tbl_inv_stocks.product_qty_left,
                            tbl_inv_stocks.as_of_date');
          $this->db->from('tbl_inv_stocks');
          $this->db->join('tbl_inv_products' , 'tbl_inv_products.product_code = tbl_inv_stocks.ist_product_code');
          $query = $this->db->get();
          return $query->result();
    }

    public function get_Products(){
          $this->db->select('*');
          $query = $this->db->get('tbl_inv_products');
          return $query->result();
    }

    public function insert_product($m_data){
      $this->db->insert('tbl_inv_products', $m_data);
    }

    public function insert_stocks($m_data){
      $this->db->insert('tbl_inv_stocks', $m_data);
    }
}
