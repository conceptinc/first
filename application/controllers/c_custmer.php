<?php

class c_custmer extends CI_Controller {

    function enter() {
        $this->load->model('custmer');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|max_length[100]|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|max_length[255]|xss_clean');
        if ($this->form_validation->run() == false) {
            echo "dsfgsg";
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user_id = $this->custmer->valid_custmer($username, $password);
            if (!$user_id) {
                $login_data = array("logged_error2" => true);
                $this->session->set_flashdata($login_data);
                redirect('site');
            } else {
                $login_data = array("logged_custmer" => true, "user_id" => $user_id);
                $this->session->set_userdata($login_data);
                redirect('site');
            }
        }
    }

    function is_login_custmer() {
        if ($this->session->userdata('logged_custmer')) {
            return true;
        } else {
            return false;
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('site');
    }

    function edit() {
        $this->load->model('adv');
        $this->load->model('golden');
        $this->load->model('sliver');

        if ($this->session->userdata('logged_custmer')) {
            $id = mysql_escape_string($this->uri->segment(3));
            if ($this->session->userdata('user_id') == $id) {
                $type = $this->adv->getTypeById($id);
                if ($type == 's') {
                    $data1['res'] = $this->sliver->selectAllFromSliver($id);
                    // load adv photo 
                    $z = $this->adv->selectLevel2PhotoById($id);
                    $phot = array();
                    foreach ($z as $value) {
                        $phot[] = array('url' => base_url() . "public/original/" . $value->name,
                            'th_url_photo' => base_url() . "public/original/thumbs/" . $value->name
                        );
                    }
                    $data1['photo'] = $phot;
                } else if ($type == 'g') {
                    $data1['res'] = $this->golden->selectAllFromGolden($id);
                    // load adv photo 
                    $z = $this->adv->selectLevel2PhotoById($id);
                    $phot = array();
                    foreach ($z as $value) {
                        $phot[] = array('url' => base_url() . "public/original/" . $value->name,
                            'th_url_photo' => base_url() . "public/original/thumbs/" . $value->name
                        );
                    }
                    $data1['photo'] = $phot;
                    // load golden adv gallery 
                    $z2 = $this->golden->selectGalleryPhotoByID($id);
                    $ga = array();
                    foreach ($z2 as $value) {
                        $ga[] = array('url_ga' => base_url() . "public/golden/" . $value->name,
                            'th_url' => base_url() . "public/golden/thumbs/" . $value->name
                        );
                    }
                    $data1['gallery'] = $ga;
                } else {
                    
                }
                $data1['customer']=true;
                $this->load->view('civou/view_updateAdv', $data1);
            } else {
                echo " 3eb tl3b kteer";
            }
        } else {
            echo " u are not login  ";
        }
    }

}

?>
