<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Application extends CI_Controller {

	public function __construct() {
			parent::__construct();

		$this->load->model('website/application_form_model');
		$this->load->library('form_validation');

	}

	public function index()
	{
		$this->load->view('website/application');
	}

	public function submit_form(){

		if($data = $this->input->post()){

			$info_data = array(
				'lrn' => $data['lrn'],
				'first_name' => $data['first_name'],
				'middle_name' => $data['middle_name'],
				'last_name' => $data['last_name'],
				'sex' => $data['sex'],
				'contact_number' => $data['contact_number'],
				'birth_date' => $data['birth_date'],
				'birth_place' => $data['birth_place'],
				'age' => $data['age'],
				'mother_tongue' => $data['mother_tongue'],
				'religion' => $data['religion'],
				'online_applicant' => '12'
			);

			$addr_data = array(
				'street' => $data['street'],
				'barangay' => $data['barangay'],
				'city' => $data['city'],
				'province' => $data['province']
			);

			$guar_data = array(
				'name' => $data['guardian_name'],
				'contact' => $data['guardian_contact'],
				'relationship' => $data['relationship']
			);

			$par_data = array(
				'mother_name' => $data['mother_name'],
				'mother_contact' => $data['parent_contact'],
				'father_name' => $data['father_name'],
				'father_contact' => $data['parent_contact']
			);

			$m_data = array($info_data, $addr_data, $guar_data, $par_data);
			// print_r($m_data);
			$this->application_form_model->insert_form($m_data);

			echo json_encode($data);
		}

	}

}
