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

    public function showAllBySubDeptID($sub_id, $type) {
        $query = "select id,name,nashat,address,phone,type from adv where sub_dept_id = ? and type='$type'";
        $result = $this->db->query($query, $sub_id);
        return $result->result();
    }

    function selectLevel2PhotoById($id) {
        $query = "select * from photo where level2_id= ?";
        $result = $this->db->query($query, $id);
        return $result->result();
    }

}

?>
