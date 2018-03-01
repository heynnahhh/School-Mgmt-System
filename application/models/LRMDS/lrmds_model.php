<?php
class lrmds_model extends CI_Model{
  public function __construct() {
		parent::__construct();

	}

	public function get_strand(){
		$this->db->select('strand');
		$query = $this->db->get('tbl_lr_strands');
		return $query->result();
	}

	public function get_topic(){
		$this->db->select('strand');
		$query = $this->db->get('tbl_lr_topics');
		return $query->result();
	}
}