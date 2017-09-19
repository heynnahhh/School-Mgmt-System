<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
  		parent::__construct();

		$this->load->model('LIBRARY/imagedb');
    	$this->load->model('LIBRARY/books');
		$this->load->model('LIBRARY/user');
		$this->load->library('form_validation');

	}

	public function index()
	{
		$this->load->view('LIBRARY/index');
	}

	public function books_list()
	{
		// $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
    $data['query'] = $this->books->getBooks();
		$this->load->view('LIBRARY/form_books_list', $data);
	}

	public function add_books(){
		$this->load->view('LIBRARY/form_add_book');
	}

	public function book_users(){
	//  $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
	 $data['users'] = $this->user->getUser();
	 $this->load->view('LIBRARY/form_user_management',$data);

	}

	public function borrowed_books(){
		// $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
	  $data['books'] = $this->books->getBorrowed();
		$data['requests'] = $this->books->getRequests();
	  $this->load->view('LIBRARY/form_borrowed_books',$data);
	}

	public function returned_books(){
		// $id = $this->input->get('id');
	  // $data['update'] = $this->books->updateborrow($id);
	  // $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
	  // $data['books'] = $this->books->getBorrowed();
	  $data['returns'] = $this->books->getReturned();
	  $this->load->view('LIBRARY/form_returned_books',$data);
	}

	public function addbook(){

	  if($this->input->post()) {
	    $data = $this->input->post();
	    $result = $this->books->insertbook($data);
	    //redirect('home/list_books');

	  }

	     $config['upload_path']   = './uploads/books/';
	     $config['overwrite'] = TRUE;
	     $config['allowed_types'] = 'gif|jpg|png';

	     $this->load->library('upload', $config);

	     if ( ! $this->upload->do_upload()) {
	        $error = array('error' => $this->upload->display_errors());
	        $this->load->view('vadd_books', $error);
	     }

	     else {
	       $data = array('upload_data' => $this->upload->data());



	       $data=array(
	           'book_id' => $this->db->insert_id(),
	           'imageName' => $this->upload->data('file_name'),
	           'imagePath' => $this->upload->data('full_path')
	         );

	       $result = $this->books->insertimg($data);
	       redirect('LIBRARY/home/books_list');

	      }

	    }

}
