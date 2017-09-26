<?php
class News_upload_model extends CI_Model{
    function __construct() {

    }

    public function insert_file($data){

      $this->db->insert('tbl_wbs_attachments',$data);

    }


}
