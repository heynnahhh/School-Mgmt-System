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
		$this->db->select('topic_name');
		$query = $this->db->get('tbl_lr_topics');
		return $query->result();
	}

	public function get_jhs(){
		$this->db->select('subject');
		$query = $this->db->get('tbl_lr_jhs_subjects');
		return $query->result();
	}

	public function get_shs(){
		$this->db->select('*');
		$query = $this->db->get('tbl_lr_shs_subjects');
		return $query->result();
	}

}
