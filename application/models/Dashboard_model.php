<?php

class Dashboard_model extends CI_Model {
    public function getAll(){
        $query = $this->db->get('users');
        return $query->result();
    }
}
?>