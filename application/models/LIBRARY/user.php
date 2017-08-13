<?php
class User extends CI_Model{
    function __construct() {

        $this->userTbl = 'users';

    }


    function get_user($uemail){

      $this->db->select('type');
      $this->db->where('id',$uemail);
      $query = $this->db->get('users');

      return $query->row();

    }


    function getUser(){

        $this->db->select("*");
        $this->db->from('users');
        $query = $this->db->get();
        return $query->result();

    }


    function getUser2($id){

        $this->db->select("*");
        $this->db->from('users');
        $this->db->where('id =', $id);
        $query = $this->db->get();
        return $query->result();

    }


    function update2($data){

        $this->db->where('id', $data['id']);
        $this->db->update('users', $data);

    }


    function getRows($params = array()){

        $this->db->select('*');
        $this->db->from($this->userTbl);


        if(array_key_exists("conditions",$params)){
			foreach ($params['conditions'] as $key => $value) {
				$this->db->where($key,$value);
			}
		}

        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
			$query = $this->db->get();
			$result = $query->row_array();
        }

        else{

            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            $query = $this->db->get();
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
				$result = $query->num_rows();
			}elseif(array_key_exists("returnType",$params) && $params['returnType'] == 'single'){
				$result = ($query->num_rows() > 0)?$query->row_array():FALSE;
			}else{
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }


        return $result;

    }


    public function insert($data = array()) {

        if(!array_key_exists("created", $data)){
            $data['created'] = date("Y-m-d H:i:s");
        }
        if(!array_key_exists("modified", $data)){
            $data['modified'] = date("Y-m-d H:i:s");
        }


        $insert = $this->db->insert($this->userTbl, $data);


        if($insert){
            return $this->db->insert_id();;
        }else{
            return false;
        }
    }

}
?>
