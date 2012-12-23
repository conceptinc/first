<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$this->view_index();
	}
	
	public function view_index(){
		$this->load->view('index');
		}
	
	function view_index_1(){
		$this->load->view('index_1');
		}
		function view_index_golden(){
		$this->load->view('index_golden');
		}

	function view_index_silver(){
		$this->load->view('index_silver');
		}
		function view_doctor(){
		$this->load->view('index_doctor');
		}

	
}
