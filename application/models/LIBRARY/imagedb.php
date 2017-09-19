<?php

class Imagedb extends CI_Model{


  public function insert_data($data){
      $this->db->insert('image',$data);

  }


}

 ?>
