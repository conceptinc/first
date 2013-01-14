<?php

class c_doctor extends CI_Controller {

    function add() {
        if ($this->session->userdata('logged_in')) {
            if ($this->session->userdata('logged_in')) {
                $this->load->library('form_validation');
                $this->form_validation->set_rules('adv_name', ' Name ', 'required|trim|xss_clean');
                $this->form_validation->set_rules('adv_spe', 'nashat ', 'required|trim|xss_clean');
                $this->form_validation->set_rules('adv_address', 'address ', 'required|trim|xss_clean');
                $this->form_validation->set_rules('adv_phone', 'phone ', 'required|trim|xss_clean|numeric');

                if ($this->form_validation->run() == false) {
                    $error['error'] = "";
                    $this->load->view("view_doctorAdd", $error);
                } else {
                    $dept_id = $this->input->post('dept');
                    $adv_na = $this->input->post('adv_name');
                    $desc = $this->input->post('desc');
                    $adv_spe = $this->input->post('adv_spe');
                    $adv_add = $this->input->post('adv_address');
                    $adv_ph = $this->input->post('adv_phone');
                    $f_time = $this->input->post('adv_f_time');
                    $f_date = $this->input->post('adv_f_date');
                    $f_book = $this->input->post('adv_f_book');
                    $inset_value = array(
                        'name' => $adv_na,
                        'desc' => $desc,
                        'spe' => $adv_spe,
                        'address' => $adv_add,
                        'phone' => $adv_ph,
                        'sdept_id' => $dept_id,
                        'f_time' => $f_time,
                        'f_date' => $f_date,
                        'book' => $f_book
                    );
                    $this->load->model("adv");
                    $this->adv->createDoctor($inset_value);
                    $this->load_doctor();
                }
            } else {
                redirect('');
            }
        } else {
            redirect('');
        }
    }

    function load_doctor() {
        if ($this->session->userdata('logged_in')) {
            $this->load->model('adv');
            $data['res'] = $this->adv->selectDocSubDept();
            $this->load->view('civou/view_doctorAdd', $data);
        } else {
            
        }
    }

}

?>