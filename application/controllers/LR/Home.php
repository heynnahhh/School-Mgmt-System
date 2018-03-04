<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
    parent::__construct();
      $this->load->library('form_validation');
      $this->load->model('LR/user');

  	}

	public function index()
	{
		$this->load->view('LR/website/home');
	}



	  public function account(){
	          $data = array();
	          if($this->session->userdata('logged_in')){
	              $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
	              $uname = $this->session->userdata('userId');
	              $user = $data['user']['status'];

	                if($user == 'Active'){
	                    $this->load->view('LR/profile/home', $data);
	                }

	                elseif($user == 0){
	                  // $id = $data['user']['id'];
	                  // $data['requests'] = $this->member->getRequested($id);
	                  // $data['query'] = $this->books->getBooks();
	                  $this->load->view('SMS/home',$data);
	                }
	          }

	          else{
	              redirect('SMS/home');
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
	                $this->form_validation->set_rules('username', 'username', 'required');
	                $this->form_validation->set_rules('password', 'password', 'required');
	                if ($this->form_validation->run() == true) {
	                    $con['returnType'] = 'single';
	                    $con['conditions'] = array(
	                        'username'=>$this->input->post('username'),
	                        'password' => md5($this->input->post('password'))
	                    );
	                    $checkLogin = $this->user->getRows($con);
	                    if($checkLogin){
	                        $this->session->set_userdata('logged_in',TRUE);
	                        $this->session->set_userdata('uname',$checkLogin['username']);
	                        $this->session->set_userdata('userId',$checkLogin['lusa_lus_id']);
	                        redirect('lr/account');
	                    }else{
	                        $data['error_msg'] = 'Wrong email or password, please try again.';
	                    }
	                }
	            }

	    $this->load->view('LR/website/home',$data);
	  }

	  public function logout(){

	            $this->session->unset_userdata('logged_in');
	            $this->session->unset_userdata('userId');
	            $this->session->sess_destroy();
	            redirect('LR/home');

	        }

	public function juniorhs()
	{
		echo md5('maganda');
		// $this->load->view('LR/website/juniorhs');
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

	public function strands()
	{
		$this->load->view('LR/website/strands');
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
		$this->sms_session->checkSession('lr/home');
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('LR/profile/home', $data);
	}

	public function p_juniorhs()
	{
		$this->sms_session->checkSession('lr/home');
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('LR/profile/juniorhs', $data);
	}

	public function p_seniorhs()
	{
		$this->sms_session->checkSession('lr/home');
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('LR/profile/seniorhs', $data);
	}

	public function p_juniorhs_subjects()
	{
		$this->sms_session->checkSession('lr/home');
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('LR/profile/juniorhs_subjects', $data);
	}

	public function p_seniorhs_subjects()
	{
		$this->sms_session->checkSession('lr/home');
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('LR/profile/seniorhs_subjects', $data);
	}

	public function p_strands()
	{
		$this->sms_session->checkSession('lr/home');
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('LR/profile/strands',$data);
	}

	public function p_juniorhs_view_file()
	{
		$this->sms_session->checkSession('lr/home');
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('LR/profile/juniorhs_view_files',$data);
	}

	public function p_seniorhs_view_file()
	{
		$this->sms_session->checkSession('lr/home');
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('LR/profile/seniorhs_view_files',$data);
	}

	public function p_jhs_view_file()
	{
		$this->sms_session->checkSession('lr/home');
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('LR/profile/jhs_view_file',$data);
	}

	public function p_shs_view_file()
	{
		$this->sms_session->checkSession('lr/home');
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('LR/profile/shs_view_file',$data);
	}

	public function activity_log()
	{
		$this->sms_session->checkSession('lr/home');
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('LR/profile/activity_log', $data);
	}

	public function log_history()
	{
		$this->sms_session->checkSession('lr/home');
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('LR/profile/log_history', $data);
	}

	public function upload()
	{
		$this->sms_session->checkSession('lr/home');
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('LR/profile/upload', $data);
	}

	public function change_pass()
	{
		$this->sms_session->checkSession('lr/home');
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('LR/profile/change_pass', $data);
	}

	public function edit_profile()
	{
		$this->sms_session->checkSession('lr/home');
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('LR/profile/edit_profile',$data);
	}

	public function p_search()
	{
		$this->sms_session->checkSession('lr/home');
		$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
		$this->load->view('LR/profile/search',$data);
	}


}
