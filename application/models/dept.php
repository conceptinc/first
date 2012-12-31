<?php

class dept extends CI_Model {

    public function create($data) {
        $this->db->insert("dept", $data);
    }

    public function showAll() {
        $this->db->order_by('order');
        $query = $this->db->get('dept');
        return $query->result();
    }

    public function update_order($id, $order) {

        $data = array('order' => $order);
        $this->db->where('id', $id);
        $this->db->update('dept', $data);
    }

    function createSubDept($data) {
        $this->db->insert("sub_dept", $data);
    }

}

?>
