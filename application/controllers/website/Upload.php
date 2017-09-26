<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {
  public function __construct() {
      parent::__construct();

    $this->load->model('website/news_upload_model');
    $this->load->model('SMS/user');
    $this->load->library('form_validation');

  }


	public function index()
	{
    $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('website/news_upload', $data);
	}

  public function upload_news(){

	     $config['upload_path']   = './uploads/news/';
	     $config['overwrite'] = TRUE;
	     $config['allowed_types'] = '*';

	     $this->load->library('upload', $config);

	     if ( ! $this->upload->do_upload()) {
	        $error = array('error' => $this->upload->display_errors());
	        $this->load->view('website/news_upload', $error);
	     }

	     else {
	       $data = array('upload_data' => $this->upload->data());

	       $data=array(
	           'file_name' => $this->upload->data('file_name'),
             'file_path' => $this->upload->data('file_path'),
	           'full_path' => $this->upload->data('full_path')
	         );

	       $result = $this->news_upload_model->insert_file($data);
	       redirect('website/Upload');

	      }


  }

}
