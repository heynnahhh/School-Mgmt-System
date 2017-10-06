<?php
class News_upload_model extends CI_Model{
    function __construct() {

    }

    public function insert_form($m_data){

      $this->db->insert('students_info',$m_data['info_data']);
      $this->db->insert('addresses',$m_data['addr_data']);
      $this->db->insert('guardians',$m_data['guar_data']);
      $this->db->insert('parents',$m_data['par_data']);

    }


}
