<?php

class sliver extends CI_Model {

    function selectAllFromSliver($id) {
        $query = "select * from sliver_view where id = ?";
        $result = $this->db->query($query, $id);
        return $result->result();
    }


}

?>