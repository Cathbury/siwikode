<?php

class Profesi_model extends CI_Model {
    public function getAll() {
        $query = $this->db->get('profesi');
        return $query->result();
    }

    public function findById($id) {
        $query = $this->db->get_where('profesi', array('id' => $id));
        return $query->row();
    }

    public function insert_profesi($data) {
        $this->db->insert('profesi', $data);
    }

    public function delete_profesi($data) {
        $sql = "DELETE FROM profesi WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function update_profesi($data,$id,$table) {
        $this->db->where(['id' =>$id]);
        $this->db->update($table, $data);
    }
}
?>