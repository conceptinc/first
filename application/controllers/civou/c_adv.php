<?php

class c_adv extends CI_Controller {

    // load  add adv page 
    function load_adv_add() {
        if ($this->session->userdata('logged_in')) {
            $this->load->view('civou/view_advAdd');
        } else {
            $this->load->view('view_login');
        }
    }

    // method that have code that add data about level 2 adv that include sliver  and golden adv 
    function addLevel2($type, $advName) {
        $this->load->model('adv');
        $username = $this->input->post('username');
        $pass = $this->input->post('pass');
        $advId = $this->adv->getAdvIdByName($advName);
        $db_value = array('type' => $type, 'username' => $username, 'password' => $pass);
        $this->adv->addLevel2Adv($db_value);
        $photo_name = array();
        ///// configuration for upload library
        $gallery_path = realpath(APPPATH . '../public/original/');
        $config['upload_path'] = $gallery_path;
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['max_size'] = '20000';
        $this->load->library('upload', $config);

        ///////////// for loop and code that upload  photo /////////////////////  
        $i = 0;
        foreach ($_FILES as $file) {
            $this->upload->do_upload("file" . $i);
            $phot_data = $this->upload->data();
            $photo_name[$i] = $phot_data['file_name'];
            $i++;
        }
        ///////////// code that store //////////////////////////////////////////
        $ar = array();
        foreach ($photo_name as $value) {
            $ar['name'] = $value;
            $ar['level2_id'] = $advId;
            $this->adv->addLevel2Photo($ar);
        }
    }

    function addAdv() {
        $type = $this->input->post('advtype');
        $dept = $this->input->post('search_category');
        $subDept = $this->input->post('sub_category');
        $name = $this->input->post('adv_name');
        $desc = $this->input->post('desc');
        $nashat = $this->input->post('adv_nashat');
        $address = $this->input->post('adv_address');
        $phone = $this->input->post('adv_phone');

        $db_value = array(
            'name' => $name,
            'desc' => $desc,
            'nashat' => $nashat,
            'address' => $address,
            'phone' => $phone,
            'dept_id' => $dept,
            'sub_dept_id' => $subDept
        );

        if ($type == 3) {
            $db_value['type'] = 'n';
            $this->load->model('adv');
            $this->adv->addNormalAdv($db_value);
        } else if ($type == 2) {
            $db_value['type'] = 's';
            $this->load->model('adv');
            $this->adv->addNormalAdv($db_value);
            $this->addLevel2('s', $name);
        } else if ($type == 1) {
            $db_value[] = array('type' => 'g');
            $this->load->model('adv');
            $this->adv->addNormalAdv($db_value);
            $this->addLevel2('g', $advName);
        }
    }

}

?>
