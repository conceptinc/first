<?php

class adv extends CI_Model {

    function addNormalAdv($dat) {
        $this->db->insert("adv", $dat);
    }

    function getAdvIdByName($name) {
        $query = "select id from adv where name = ?";
        $result = $this->db->query($query, $name);
        return $result->row(0)->id;
    }

    function addLevel2Adv($dat) {
        $this->db->insert("level2", $dat);
    }

    function addLevel2Photo($data) {
        $this->db->insert("photo", $data);
    }

    function addGalleryPhoto($data) {
        $this->db->insert("gallery", $data);
    }

    function addGoldenAdv($data) {
        $this->db->insert("golden", $data);
    }

}

?>
