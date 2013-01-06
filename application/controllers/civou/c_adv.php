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

    // 

    function test() {

        $d1 = $this->input->post('search_category');
        $dsub = $this->input->post('sub_category');
         
        $d2 = $this->input->post('adv_name');
        $d2 = $this->input->post('desc');
        $d3 = $this->input->post('adv_nashat');
        $d4 = $this->input->post('adv_address');
        $d5 = $this->input->post('adv_phone');
        $d6 = $this->input->post('username');
        $d7 = $this->input->post('pass');
        $d8 = $this->input->post('file');
        $d9 = $this->input->file('file1');
        $d10 = $this->input->post('file2');
        

        echo $d1;
        echo " <br/>  //////  1 ";

        echo $dsub;
        echo " <br/>  //////  sub  ";
        
        echo $d2;
        echo " <br/>  //////  2 ";

        echo $d3;
        echo " <br/>  //////  3  ";

        echo $d4;
        echo " <br/>  //////  4 ";

        echo $d5;
        echo " <br/>  //////   5";

        echo $d6;
        echo " <br/>  //////   6";

        echo $d7;
        echo " <br/>  //////  7 ";

        echo $d8;
            echo " <br/>  //////  8 ";

        
        echo " <br/>  //////  9 ";
        echo $d9;
        
        echo $d10;
    }

}

?>
