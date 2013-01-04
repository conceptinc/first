<?php

class c_adv extends CI_Controller {

    function load_adv_add() {

        if ($this->session->userdata('logged_in')) {
            $this->load->view('civou/view_advAdd');
        } else {
            $this->load->view('view_login');
        }
    }
    

}

?>
