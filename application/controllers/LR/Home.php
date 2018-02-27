<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
    parent::__construct();
      $this->load->library('form_validation');
      $this->load->model('lr/lr_model');

  	}

	public function index()
	{
		$this->load->view('LR/website/home');
	}


    public function account(){

      $data = array();
      if($this->session->userdata('logged_in')){
          $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
          $uemail = $this->session->userdata('userId');
          $user = $data['user']['status'];

            if($user == 1){
                $this->load->view('lr/profile', $data);
            }

            elseif($user == 0){
              // $id = $data['user']['id'];
              // $data['requests'] = $this->member->getRequested($id);
              // $data['query'] = $this->books->getBooks();
              $this->load->view('lr/profile',$data);
            }
      }

      else{
          redirect('lr/profile');
      }

    }

	public function login(){

	$data = array();

	        if($this->session->userdata('success_msg')){
	            $data['success_msg'] = $this->session->userdata('success_msg');
	            $this->session->unset_userdata('success_msg');
	        }
	        if($this->session->userdata('error_msg')){
	            $data['error_msg'] = $this->session->userdata('error_msg');
	            $this->session->unset_userdata('error_msg');
	        }
	        if($this->input->post('loginSubmit')){
	            $this->form_validation->set_rules('username', 'Username', 'required');
	            $this->form_validation->set_rules('password', 'Password', 'required');
	            if ($this->form_validation->run() == true) {
	                $con['returnType'] = 'single';
	                $con['conditions'] = array(
	                    'username'=>$this->input->post('username'),
	                    'password' => $this->input->post('password')
	                );
	                $checkLogin = $this->lr_model->getRows($con);
	                if($checkLogin){
	                    $this->session->set_userdata('logged_in',TRUE);
	                    $this->session->set_userdata('uemail',$checkLogin['username']);
	                    $this->session->set_userdata('userId',$checkLogin['lusa_lus_id']);
	                    redirect('lr/profile');
	                }else{
	                    $data['error_msg'] = 'Wrong email or password, please try again.';
	                }
	            }
	        }

	$this->load->view('lr/home', $data);

	}

    public function logout(){

            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('userId');
            $this->session->sess_destroy();
            redirect('lr/profile');

    }

	public function juniorhs()
	{
		$this->load->view('LR/website/juniorhs');
	}

	public function seniorhs()
	{
		$this->load->view('LR/website/seniorhs');
	}

	public function juniorhs_subjects()
	{
		$this->load->view('LR/website/juniorhs_subjects');
	}

	public function seniorhs_subjects()
	{
		$this->load->view('LR/website/seniorhs_subjects');
	}

	public function juniorhs_view_file()
	{
		$this->load->view('LR/website/juniorhs_view_files');
	}

	public function seniorhs_view_file()
	{
		$this->load->view('LR/website/seniorhs_view_files');
	}

	public function jhs_view_file()
	{
		$this->load->view('LR/website/jhs_view_file');
	}

	public function shs_view_file()
	{
		$this->load->view('LR/website/shs_view_file');
	}

	public function register()
	{
		$this->load->view('LR/website/register');
	}

	public function search()
	{
		$this->load->view('LR/website/search');
	}

	public function p_home()
	{
		$this->load->view('LR/profile/home');
	}

	public function p_juniorhs()
	{
		$this->load->view('LR/profile/juniorhs');
	}

	public function p_seniorhs()
	{
		$this->load->view('LR/profile/seniorhs');
	}

	public function p_juniorhs_subjects()
	{
		$this->load->view('LR/profile/juniorhs_subjects');
	}

	public function p_seniorhs_subjects()
	{
		$this->load->view('LR/profile/seniorhs_subjects');
	}

	public function p_juniorhs_view_file()
	{
		$this->load->view('LR/profile/juniorhs_view_files');
	}

	public function p_seniorhs_view_file()
	{
		$this->load->view('LR/profile/seniorhs_view_files');
	}

	public function p_jhs_view_file()
	{
		$this->load->view('LR/profile/jhs_view_file');
	}

	public function p_shs_view_file()
	{
		$this->load->view('LR/profile/shs_view_file');
	}

	public function activity_log()
	{
		$this->load->view('LR/profile/activity_log');
	}

	public function log_history()
	{
		$this->load->view('LR/profile/log_history');
	}

	public function upload()
	{
		$this->load->view('LR/profile/upload');
	}

	public function change_pass()
	{
		$this->load->view('LR/profile/change_pass');
	}

	public function edit_profile()
	{
		$this->load->view('LR/profile/edit_profile');
	}

	public function p_search()
	{
		$this->load->view('LR/profile/search');
	}


}
