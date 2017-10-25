<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct(){
    parent::__construct();
      $this->load->library('form_validation');
      $this->load->model('SMS/user');
    $this->sms_session->checkSession();

  }

	public function index()
	{
		$this->load->view('SMS/form_login');
	}

  public function account(){

          $data = array();

          if($this->session->userdata('isUserLoggedIn')){
              $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
              $uemail = $this->session->userdata('userId');
              $user = $data['user']['status'];

                if($user == 1){
                    $this->load->view('SMS/home', $data);
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
                $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
                $this->form_validation->set_rules('password', 'password', 'required');
                if ($this->form_validation->run() == true) {
                    $con['returnType'] = 'single';
                    $con['conditions'] = array(
                        'email'=>$this->input->post('email'),
                        'password' => md5($this->input->post('password')),

                    );
                    $checkLogin = $this->user->getRows($con);
                    if($checkLogin){
                        $this->session->set_userdata('isUserLoggedIn',TRUE);
                        $this->session->set_userdata('uemail',$checkLogin['email']);
                        $this->session->set_userdata('userId',$checkLogin['sus_id']);
                        redirect('SMS/home/account');
                    }else{
                        $data['error_msg'] = 'Wrong email or password, please try again.';
                    }
                }
            }

    $this->load->view('SMS/form_login', $data);

  }

  public function logout(){

            $this->session->unset_userdata('isUserLoggedIn');
            $this->session->unset_userdata('userId');
            $this->session->sess_destroy();
            redirect('SMS/home');

        }

}
