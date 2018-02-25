<?php
class Dental_model extends CI_Model{
  public function __construct() {
		parent::__construct();

	}

  public function insert_student_info($m_data){
		$this->db->insert('tbl_md_student_info', $m_data);
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

}
