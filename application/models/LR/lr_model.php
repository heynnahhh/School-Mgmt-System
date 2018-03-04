<?php
class lr_model extends CI_Model{
  public function __construct() {
			parent::__construct();

	}

	public function add_user($m_data){
	    $this->db->insert('tbl_lr_users_profile', $m_data[0]);
	    $this->db->insert('tbl_lr_users_account', $m_data[1]);
	}

	public function upload_lrn($m_data){
		$this->db->insert('tbl_lr_attachments_info', $m_data[0]);
		$this->db->insert('tbl_lr_attachments', $m_data[1]);
	}

  public function get_grade_lvl($m_data){
    $this->db->select('grade_lvl');
    $this->db->where('educ_type', $m_data);
    $query = $this->db->get('tbl_lr_grade_lvl');
    return $query->result();
  }

  public function get_subject_type($m_data){
    $this->db->select('subject_type');
    $this->db->where('educ_type', $m_data);
    $query = $this->db->get('tbl_lr_subject_type');
    return $query->result();
  }

  public function get_jhs_subject($m_data){
    $this->db->select('subject');
    $this->db->where('educ_type', $m_data);
    $query = $this->db->get('tbl_lr_jhs_subjects');
    return $query->result();
  }

  public function get_shs_subject($m_data){
    $this->db->select('subject');
    $this->db->where($m_data);
    $query = $this->db->get('tbl_lr_shs_subjects');
    return $query->result();
  }

  public function get_topic($m_data){
    $this->db->select('topic_name');
    $this->db->where($m_data);
    $query = $this->db->get('tbl_lr_topics');
    return $query->result();
  }

  public function get_topic_id($m_data){
    $this->db->select('topic_id');
    $this->db->where('topic_name', $m_data);
    $query = $this->db->get('tbl_lr_topics');
    return $query->result();
  }

  public function add_topic($m_data){
		$this->db->insert('tbl_lr_topics', $m_data);
	}
}
