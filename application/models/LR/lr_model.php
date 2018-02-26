<?php
class lr_model extends CI_Model{
  public function __construct() {
			parent::__construct();

	}

  public function add_user($m_data){
    $this->db->insert('tbl_lr_users_profile', $m_data[0]);
    $this->db->insert('tbl_lr_users_account', $m_data[1]);
  }

  public function get_grade_lvl($m_data){
    $this->db->select('grade_lvl');
    $this->db->where('educ_type', $m_data);
    $query = $this->db->get('tbl_lr_grade_lvl');
    return $query->result();
  }

  public function get_subject($m_data){
    $this->db->select('subject');
    $this->db->where('educ_type', $m_data);
    $query = $this->db->get('tbl_lr_subjects');
    return $query->result();
  }

  public function get_topic($m_data){
    $this->db->select('topic_name');
    $this->db->where($m_data);
    $query = $this->db->get('tbl_lr_topics');
    return $query->result();
  }

}
