<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sms_session {
	private $CI;

		public function __construct()
	    {
	        $this->CI =& get_instance();
					$this->CI->load->helper('url');
					$this->CI->load->library('session');
	    }

        public function checkSession($data)
        {
        	if(!isset($this->CI->session->logged_in)) {
					redirect($data); exit;
					}
					else
					return;
        }

}
