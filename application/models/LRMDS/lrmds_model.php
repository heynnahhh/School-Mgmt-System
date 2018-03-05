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

	public function get_jhs_subject_id($m_data){
      $this->db->select('lres_id');
      $this->db->where('subject', $m_data);
      $query = $this->db->get('tbl_lr_jhs_subjects');
      return $query->result();
    }

  public function get_strand_id($m_data){
      $this->db->select('lrs_id');
      $this->db->where('strand', $m_data);
      $query = $this->db->get('tbl_lr_strands');
      return $query->result();
    }

  public function get_topic_detail($m_data){
      $this->db->select('topic_id,educ_type,grade_lvl,subject_type,strand,subject,topic_name');
      $this->db->where('topic_name', $m_data);
      $query = $this->db->get('tbl_lr_topics');
      return $query->result();
    }

// ADD **********

	public function insert_jhs_subject($m_data){
      $this->db->insert('tbl_lr_jhs_subjects', $m_data);
    }

  public function insert_shs_subject($m_data){
      $this->db->insert('tbl_lr_shs_subjects', $m_data);
    }

	public function insert_strand($m_data){
      $this->db->insert('tbl_lr_strands', $m_data);
    }

// EDIT ********

  public function update_jhs_subject($m_data){
      $this->db->where('lres_id', $m_data['lres_id']);
      $this->db->update('tbl_lr_jhs_subjects', $m_data);
    }

  public function update_shs_subject($m_data){
        $this->db->where('subject', $m_data['subject']);
        $this->db->update('tbl_lr_shs_subjects', $m_data);
      }

  public function update_strand($m_data){
      $this->db->where('lrs_id', $m_data['lrs_id']);
      $this->db->update('tbl_lr_strands', $m_data);
    }

// DELETE *******

  public function delete($table,$m_data){
    $this->db->where($m_data);
    $this->db->delete($table);
  }

}
