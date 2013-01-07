<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class site extends CI_Controller {

    public function index() {

        $this->start();
    }

    function start() {
        $data1=array();
        $this->load->model('slider_model');

        $slider_pics = $this->slider_model->load_img();

        if ($slider_pics->num_rows() > 0) 
            $data1['big_pics'] = $slider_pics->result();
        

        $this->load->view('index', $data1);
    }

    ////////////////////////////////////	  

    public function login() {
        $this->load->view('view_login');
    }

    public function load_admin() {
        if ($this->session->userdata('logged_in')) {
            $this->load->view('civou/view_admin');
        } else {
            $this->load->view('view_login');
        }
    }

}
