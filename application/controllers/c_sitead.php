<?php

class c_sitead extends CI_Controller {

    function valid_loign() {

        $this->load->model('sitead');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|max_length[100]|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|max_length[255]|xss_clean');

        if ($this->form_validation->run() == false) {
            $this->load->view('view_login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user_id = $this->load->sitead->valid_user_pass($username, $password);

            if (!$user_id) {
                $login_data = array("logged_error" => true);
                $this->load->view('view_login');
            } else {

                $login_data = array("logged_in" => true, "user_id" => $user_id);
                $this->session->set_userdata($login_data);
                redirect('');
            }
        }
    }

}

?>
