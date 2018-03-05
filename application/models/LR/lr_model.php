<?php
class lr_model extends CI_Model{
  public function __construct() {
			parent::__construct();

	}

	public function add_user($m_data){
	    $this->db->insert('tbl_lr_users_profile', $m_data[0]);
	    $this->db->insert('tbl_lr_users_account', $m_data[1]);
	    $this->db->insert('tbl_lr_users_profile_pic', $m_data[2]);
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

  public function get_users_profile($m_data){
    $this->db->select('*');
    $this->db->where('lus_id', $m_data);
    $query = $this->db->get('tbl_lr_users_profile');
    return $query->result();
  }

  public function get_users_profile_pic($m_data){
    $this->db->select('*');
    $this->db->where('lupc_id', $m_data);
    $query = $this->db->get('tbl_lr_users_profile_pic');
    return $query->result();
  }

  public function update_users_profile($m_data){
    if($m_data[0]){
      $this->db->where('lus_id', $m_data[0]['lus_id']);
      $this->db->update('tbl_lr_users_profile', $m_data[0]);
    }
    if($m_data[1]){
      $this->db->where('lupc_id', $m_data[1]['lupc_id']);
      $this->db->update('tbl_lr_users_profile_pic', $m_data[1]);
    }
  }

  public function update_password($m_data){
    $this->db->where('lusa_id', $m_data['lusa_id']);
    $this->db->update('tbl_lr_users_account', $m_data);
  }

  public function get_jhs_lvl(){
    $this->db->select('grade_lvl');
    $this->db->where('educ_type', 'Junior High School');
    $query = $this->db->get('tbl_lr_grade_lvl');
    return $query->result();
  }

  public function get_shs_lvl(){
    $this->db->select('grade_lvl');
    $this->db->where('educ_type', 'Senior High School');
    $query = $this->db->get('tbl_lr_grade_lvl');
    return $query->result();
  }

  public function get_jhs_subjects(){
    $this->db->select('subject');
    $this->db->where('educ_type', 'Junior High School');
    $query = $this->db->get('tbl_lr_jhs_subjects');
    return $query->result();
  }

  public function get_shs_cs_subj_g11(){
    $this->db->select('subject');
    $this->db->where('subject_type', 'Core Subject');
    $this->db->where('grade_lvl', 'Grade 11');
    $query = $this->db->get('tbl_lr_shs_subjects');
    return $query->result();
  }

  public function get_shs_as_subj_g11(){
    $this->db->select('subject');
    $this->db->where('subject_type', 'Applied Subject');
    $this->db->where('grade_lvl', 'Grade 11');
    $query = $this->db->get('tbl_lr_shs_subjects');
    return $query->result();
  }

  public function get_shs_cs_subj_g12(){
    $this->db->select('subject');
    $this->db->where('subject_type', 'Core Subject');
    $this->db->where('grade_lvl', 'Grade 12');
    $query = $this->db->get('tbl_lr_shs_subjects');
    return $query->result();
  }

  public function get_shs_as_subj_g12(){
    $this->db->select('subject');
    $this->db->where('subject_type', 'Applied Subject');
    $this->db->where('grade_lvl', 'Grade 12');
    $query = $this->db->get('tbl_lr_shs_subjects');
    return $query->result();
  }

  public function get_shs_ss_strand(){
    $this->db->select('strand');
    $query = $this->db->get('tbl_lr_strands');
    return $query->result();
  }

}
