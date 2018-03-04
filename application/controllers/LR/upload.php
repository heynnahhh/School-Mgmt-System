<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class upload extends CI_Controller {
	public function __construct() {
  		parent::__construct();
      $this->load->helper('string');
      $this->load->model('LR/lr_model');
	}


  public function upload(){
    $lr_code = random_string('alnum', 6);

    $data = $this->input->post();

    $topic_id = $this->lr_model->get_topic_id($data['topic_name']);

    foreach ($topic_id as $id) {
      $lrn_info = array(
        'lr_code' => $lr_code,
        'topic_id' => $id->topic_id,
        'lr_title' => $data['lr_title'],
        'description' => $data['description'],
        'objective' => $data['objective'],
        'resource_type' => $data['lr_type'],
        'intended_user' => $data['intended_user'],
        'language' => $data['language'],
        'publisher' => 'Hannah Liao',
        'date_published' => date("Y-m-d H:i:s"),
        'copyright' => $data['copyright'],
        'copyright_owner' => $data['copyright_owner']
      );


      $config['upload_path']   ="./asd/";
      $config['overwrite'] = TRUE;
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      $this->upload->do_upload('upload_lrn');
      $lrn_data =  $this->upload->data();

      if ( ! $this->upload->do_upload('upload_lrn')) {
        $error = array('error' => $this->upload->display_errors());
        print_r($error);
      }

      else {
        $data = array('upload_data' => $this->upload->data());

        $lrn = array(
  					'lup_lr_code' => $lr_code,
  	        'file_name' => $lrn_data['file_name'],
  	        'file_path' => $lrn_data['file_path'],
  	        'full_path_url' => $lrn_data['full_path'],
  	        'file_type' => $lrn_data['file_type'],
  	        'file_size' => $lrn_data['file_size']
  	      );

      }
    }

    $m_data = array($lrn_info, $lrn);
    $this->lr_model->upload_lrn($m_data);
    redirect('lr/profile/upload');
  }

}
