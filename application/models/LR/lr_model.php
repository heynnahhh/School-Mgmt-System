<?php
class lr_model extends CI_Model{
  public function __construct() {
			parent::__construct();

		$this->userTbl = 'tbl_lr_users_account';

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
        $this->db->where('lusa_lus_id',$params['id']);
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

	public function add_user($m_data){
	    $this->db->insert('tbl_lr_users_profile', $m_data[0]);
	    $this->db->insert('tbl_lr_users_account', $m_data[1]);
	}

	public function upload_lrn($m_data){
		$this->db->insert('tbl_lr_attachment_info', $m_data[0]);
		$this->db->insert('tbl_lr_attachment', $m_data[1]);
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

  public function add_topic($m_data){
		$this->db->insert('tbl_lr_topics', $m_data);
	}
}
