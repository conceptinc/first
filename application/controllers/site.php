<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class site extends CI_Controller {

    public function index() {

        $this->start();
    }

    function start() {
        $data1 = array();
        $this->load->model('slider_model');
        $slider_pics = $this->slider_model->load_img();
        if ($slider_pics->num_rows() > 0)
            $data1['big_pics'] = $slider_pics->result();

        $this->load->model('dept');
        $data1['result'] = $this->dept->showAll_deptANDsub();


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

    ///////////////////////////////////////

    function showBySubId() {

        if ($this->uri->segment(3) != '') {
            // data on home page 
            $data1 = array();
            $this->load->model('slider_model');
            $slider_pics = $this->slider_model->load_img();
            if ($slider_pics->num_rows() > 0)
                $data1['big_pics'] = $slider_pics->result();
            $this->load->model('dept');
            $data1['result'] = $this->dept->showAll_deptANDsub();
            // load adv data  
            $this->load->model('adv');
            $adv_id = mysql_escape_string($this->uri->segment(3));
            $data1['golden'] = $this->adv->showAllBySubDeptID($adv_id, 'g');
            $data1['sliver'] = $this->adv->showAllBySubDeptID($adv_id, 's');
            $data1['normal'] = $this->adv->showAllBySubDeptID($adv_id, 'n');
            $this->load->view('index_1', $data1);
        } else {
            $this->load->view('view_error');
        }
    }

    /////////////////////////////////////////

    function showGoldenAdvDetail() {
        if ($this->uri->segment(3) != '') {
            // data on home page 
            $data1 = array();
            $this->load->model('slider_model');
            $this->load->model('golden');
            $this->load->model('adv');
            $slider_pics = $this->slider_model->load_img();
            if ($slider_pics->num_rows() > 0)
                $data1['big_pics'] = $slider_pics->result();
            $this->load->model('dept');
            $data1['result'] = $this->dept->showAll_deptANDsub();

            // load adv data  

            $adv_id = mysql_escape_string($this->uri->segment(3));
            $data1['res'] = $this->golden->selectAllFromGolden($adv_id);

            // load adv photo 

            $z = $this->adv->selectLevel2PhotoById($adv_id);
            $phot = array();
            foreach ($z as $value) {
                $phot[] = array('url' => base_url() . "public/original/" . $value->name
                    
                );
            }
            $data1['photo'] = $phot;

            // load adv gallery 

            $data1['gallery'] = $this->golden->selectGalleryPhotoByID($adv_id);
            $z2 = $data1['gallery'];
            $ga = array();
            foreach ($z2 as $value) {
                $ga[] = array('url_ga' => base_url() . "public/golden/" . $value->name,
                    'th_url' => "public/golden/thumbs/" . $value->name."thumb" 
                );
            }
            $data1['gallery'] = $ga;

            ///////////////////////////

            $this->load->view('index_golden', $data1);
        } else {
            $this->load->view('view_error');
        }
    }

    //////////////////////////////////////////

    function showSliverAdvDetail() {
        
    }

    //////////////////////////////////////////
}
