<?php

class sitead extends CI_Model {

    function valid_user_pass($user, $pass) {

        $this->db->select('id,username,password');
        $this->db->from('sitead');
        $this->db->where('username', $user);
        $this->db->where('password', $pass);

        $query = $this->db->get();
    
        if ($query->num_rows() == 1) {
            return $query->row(0)->id;
        } else {
            return false;
        }
    }

}

?>
