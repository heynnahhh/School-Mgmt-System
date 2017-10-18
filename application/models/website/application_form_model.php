<?php
class application_form_model extends CI_Model{
  public function __construct() {
			parent::__construct();

	}

    public function insert_form($m_data){

      $this->db->insert('students_info',$m_data[0]);
      $this->db->insert('addresses',$m_data[1]);
      $this->db->insert('guardians',$m_data[2]);
      $this->db->insert('parents',$m_data[3]);

    }


}
