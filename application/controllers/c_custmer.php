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
                $data1['customer'] = true;
                $this->load->view('civou/view_updateAdv', $data1);
            } else {
                echo " 3eb tl3b kteer";
            }
        } else {
            echo " u are not login  ";
        }
    }

    function updateAdv() {


        $this->load->library('form_validation');
        $this->form_validation->set_rules('adv_name', ' Name ', 'required|trim|max_length[45]|xss_clean');
        $this->form_validation->set_rules('adv_nashat', 'nashat ', 'required|trim|max_length[45]|xss_clean');
        $this->form_validation->set_rules('adv_address', 'address ', 'required|trim|max_length[445]|xss_clean');
        $this->form_validation->set_rules('adv_phone', 'phone ', 'required|trim|max_length[445]|xss_clean|numeric');
        $this->form_validation->set_rules('desc', 'description ', 'required|trim|max_length[1385]|xss_clean');

        if ($this->form_validation->run() == false) {
            echo "error ";
        } else {
            $this->load->model('adv');
            $id = $this->input->post('id');
            $type = $this->input->post('type');
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
                'phone' => $phone
            );
            $this->adv->updateAdv($id, $db_value);

            if ($type == 's') {
                $username = $this->input->post('username');
                $pass = $this->input->post('pass');
                $level2 = array('username' => $username, 'password' => $pass);
                $this->adv->updateLevel2($id, $level2);
//                $this->adv->removeLevel2PhotoFromHard($id);
//                $this->adv->deleteLevel2Photo($id);
//                $this->addLevel2($type, $name);
            }
            if ($type == 'g') {
                $username = $this->input->post('username');
                $pass = $this->input->post('pass');
                $level2 = array('username' => $username, 'password' => $pass);
                $this->adv->updateLevel2($id, $level2);
                $vedio = $this->input->post('vedio');
                $golden = array('vedio' => $vedio);
                $this->adv->updateGolden($id, $golden);
//                $this->adv->removeLevel2PhotoFromHard($id);
//                $this->adv->deleteLevel2Photo($id);
//                $this->adv->removeGalleryPhotoFromHard($id);
//                $this->adv->deleteGalleryPhoto($id);
//                $this->addLevel2($type, $name);
//                $this->addGalleryPhoto($name);
            }
        }

        if ($this->session->userdata('logged_in')) {
            redirect('civou/c_adv/load_adv_edit');
        } else {
            redirect('site');
        }
    }

    function addGalleryPhoto($advName) {
      
            $this->load->model('adv');
            $vedio = $this->input->post('vedio');
            $advId = $this->adv->getAdvIdByName($advName);
            $db_value = array('g_id' => $advId, 'vedio' => $vedio);
            $this->adv->addGoldenAdv($db_value);

            // configuration for upload library

            $gallery_photo = array();
            $gallery_path = realpath(APPPATH . '../public/golden/');
            $config1['upload_path'] = $gallery_path;
            $config1['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
            $config1['max_size'] = '20000';
            $this->load->library('upload', $config1);
            $this->upload->initialize($config1);
            $thum_path = realpath(APPPATH . '../public/golden/thumbs');
            $con = array(
                'image_library' => 'gd2',
                'source_image' => '',
                'maintain_ratio' => TRUE,
                'width' => 200,
                'height' => 200,
                'new_image' => $thum_path
            );
            $this->load->library('image_lib', $con);

            ///////////// for loop and code that upload  photo /////////////////////  
            $ii = 0;
            foreach ($_FILES as $filey) {
                if (isset($_FILES['gallery' . $ii])) {
                    $this->upload->do_upload('gallery' . $ii);
                    $phot_data = $this->upload->data();
                    $gallery_photo[$ii] = $phot_data['file_name'];
                    $con['source_image'] = $phot_data['full_path'];
                    $this->image_lib->initialize($con);
                    $this->image_lib->resize();
                    $ii++;
                }
            }
            /////   watermark to image   ////////////
//        $config['image_library'] = 'gd2';
//        $config['source_image'] = $gallery_path . $phot_data['file_name'];
//        $config['wm_text'] = 'malahhhhgfjfgjtgjfhgdfhfhfhhh';
//        $config['wm_type'] = 'text';
//        $config['wm_font_path'] = 'C:\Windows\Fonts\georgia.ttf';
//        $config['wm_font_size'] = '16';
//        $config['wm_font_color'] = 'ffffff';
//        $config['wm_vrt_alignment'] = 'center';
//        $config['wm_hor_alignment'] = 'center';
//        $config['wm_padding'] = '20';
//        $this->image_lib->initialize($config);
//        $this->image_lib->watermark();
            ///////////// code that store //////////////////////////////////////////
            $ar = array();
            foreach ($gallery_photo as $value) {
                $ar['name'] = $value;
                $ar['golden_id'] = $advId;
                $this->adv->addGalleryPhoto($ar);
            }
         
    }

    function addLevel2($type, $advName) {
        if ($this->session->userdata('logged_custmer')) {
            $this->load->model('adv');
            $username = $this->input->post('username');
            $pass = $this->input->post('pass');
            $main_photo = $_FILES['file0']['name'];
            $advId = $this->adv->getAdvIdByName($advName);
            $db_value = array('adv_id' => $advId, 'type' => $type, 'username' => $username,
                'password' => $pass, 'main_photo' => $main_photo);
            $this->adv->addLevel2Adv($db_value);
            ///// configuration for upload library
            $photo_name = array();
            $gallery_path = realpath(APPPATH . '../public/original/');
            $config['upload_path'] = $gallery_path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
            $config['max_size'] = '20000';
            $this->load->library('upload', $config);

            /////////////  for  thumbanial /////////////////////////////////////
            $thum_path = realpath(APPPATH . '../public/original/thumbs');
            $con = array(
                'image_library' => 'gd2',
                'source_image' => '',
                'maintain_ratio' => TRUE,
                'width' => 200,
                'height' => 150,
                'new_image' => $thum_path
            );
            $this->load->library('image_lib', $con);

            ///////////// for loop and code that upload  photo /////////////////////  
            $i = 0;
            foreach ($_FILES as $file) {
                if ($this->upload->do_upload("file" . $i)) {
                    $phot_data = $this->upload->data();
                    $photo_name[$i] = $phot_data['file_name'];
                    $con['source_image'] = $phot_data['full_path'];
                    $this->image_lib->initialize($con);
                    $this->image_lib->resize();
                    $i++;
                }
            }
            ///////////// code that store //////////////////////////////////////////
            $ar = array();
            foreach ($photo_name as $value) {
                $ar['name'] = $value;
                $ar['level2_id'] = $advId;
                $this->adv->addLevel2Photo($ar);
            }
        } else {
            
        }
    }

}

?>
