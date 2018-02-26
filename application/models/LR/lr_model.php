<?php
class lr_model extends CI_Model{
  public function __construct() {
			parent::__construct();

	}

	public function add_user($m_data){
	    $this->db->insert('tbl_lr_users_profile', $m_data[0]);
	    $this->db->insert('tbl_lr_users_account', $m_data[1]);
	}

	public function uplaod_lrn($m_data){
		$this->db->insert('tbl_lr_attachment_info', $m_data[0]);
		$this->db->insert('tbl_lr_attachment', $m_data[1]);
	}

	public function add_topic($m_data){
		$this->db->insert('tbl_lr_attachment_info', $m_data);
	}


}
