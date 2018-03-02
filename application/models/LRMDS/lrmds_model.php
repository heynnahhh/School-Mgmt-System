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

	public function get_jhs_subject($m_data){
      $this->db->select('subject');
      $this->db->where('subject', $m_data);
      $query = $this->db->get('tbl_lr_jhs_subjects');
      return $query->result();
    }

    public function get_shs_subject($m_data){
      $this->db->select('subject, strand, grade_lvl, subject_type');
      $this->db->where('subject', $m_data);
      $query = $this->db->get('tbl_lr_shs_subjects');
      return $query->result();
    }

    public function get_strand_name($m_data){
      $this->db->select('strand');
      $this->db->where('strand', $m_data);
      $query = $this->db->get('tbl_lr_strands');
      return $query->result();
    }

	public function insert_jhs_subject($m_data){
      $this->db->insert('tbl_lr_jhs_subjects', $m_data);
    }

	public function insert_strand($m_data){
      $this->db->insert('tbl_lr_strands', $m_data);
    }

    public function update_jhs_subject($m_data){
      $this->db->where('subject', $m_data['subject']);
      $this->db->update('tbl_lr_jhs_subjects', $m_data);
    }
}

