<?php
class Medical_model extends CI_Model{
  public function __construct() {
		parent::__construct();

	}


	public function get_grade_section($m_data){
		$this->db->select('section');
		$this->db->where('grade_lvl', $m_data);
		$query = $this->db->get('tbl_md_grade_section');
		return $query->result();
	}

	public function insert_student_info($m_data){
		$this->db->insert('tbl_md_student_info', $m_data);
	}

  public function insert_student_cons($m_data){
    $this->db->insert('tbl_med_student_his', $m_data);
  }

  public function insert_employee_info($m_data){
    $this->db->insert('tbl_md_employee_info', $m_data);
  }

	public function get_student_info(){
		$this->db->select('*');
		$query = $this->db->get('tbl_md_student_info');
		return $query->result();
	}

  public function get_employee_info(){
		$this->db->select('*');
		$query = $this->db->get('tbl_md_employee_info');
		return $query->result();
	}

  public function get_student_recs(){
    $this->db->select('*');
    $query = $this->db->get('tbl_med_student_his');
    return $query->result();
  }

  // DELETE *******

  public function delete($table,$m_data){
    $this->db->where($m_data);
    $this->db->delete($table);
  }

}
