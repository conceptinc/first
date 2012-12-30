<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class site extends CI_Controller {

	public function index()
	{
	$this->load->view('index');	
	}
	
        public function login(){
            $this->load->view('view_login');
        }
	
        public function load_admin(){
              if ($this->session->userdata('logged_in')){
            $this->load->view('admin/view_admin');
        } else {
            $this->load->view('view_login');
        }
        }
	
}
