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

    function getTypeById($id) {
        $query = "select `type` from adv where id = ?";
        $result = $this->db->query($query, $id);
        $r = "";
        foreach ($result->result() as $value) {
            $r = $value->type;
        }
        return $r;
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

    function deleteAdv($id) {
        $this->db->where('id', $id);
        $this->db->delete('adv');
    }

    function createDoctor($dc) {
        $this->db->insert("doctor", $dc);
    }

    public function showAllBySubDeptID($sub_id, $type) {
        $query = "select id,name,nashat,address,phone,type,`desc` from adv where sub_dept_id = ? and type='$type' order by id desc";
        $result = $this->db->query($query, $sub_id);
        return $result->result();
    }

    public function showAllByDeptID($dept_id, $type) {
        $query = "select id,name,nashat,address,phone,type,`desc` from adv where dept_id = ? and type='$type' order by id desc";
        $result = $this->db->query($query, $dept_id);
        return $result->result();
    }

    function selectLevel2PhotoById($id) {
        $query = "select * from photo where level2_id= ?";
        $result = $this->db->query($query, $id);
        return $result->result();
    }

    function incremetAdv($adv_id) {
        $query = "update level2 set views = views+1  where adv_id=?";
        $this->db->query($query, $adv_id);
    }

// get all sub department of doctor 
    public function showDoctorAdvDetail($sub_id) {
        $query = "select id,name,spe,address,phone,f_time,f_date,book from doctor where sdept_id = ?";
        $result = $this->db->query($query, $sub_id);
        return $result->result();
    }

    function selectDocSubDept() {
        $query = "select * from sub_dept where dept_id= 1";
        $result = $this->db->query($query);
        return $result->result();
    }

    function disactive($id) {
        $sql = "update level2 set active=0 where adv_id=?";
        if ($result = $this->db->query($sql, $id)) {
            return true;
        } else {
            return false;
        }
    }

////////////////////////////////////////
    function active($id) {
        $sql = "update level2 set active=1 where adv_id=?";
        if ($result = $this->db->query($sql, $id)) {
            return true;
        } else {
            return false;
        }
    }

    function updateAdv($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('adv', $data);
    }

    function updateLevel2($id, $data) {
        $this->db->where('adv_id', $id);
        $this->db->update('level2', $data);
    }

    function updateGolden($id, $data) {
        $this->db->where('g_id', $id);
        $this->db->update('golden', $data);
    }

}

?>
