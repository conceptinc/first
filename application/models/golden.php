<?php

class golden extends CI_Model {

    function selectAllFromGolden($id) {
        $query = "select * from golden_view where id = ?";
        $result = $this->db->query($query, $id);
        return $result->result();
    }

    public function selectGalleryPhotoByID($id) {

        $query = "select * from gallery where golden_id= ?";
        $result = $this->db->query($query, $id);
        return $result->result();
    }

}

?>
