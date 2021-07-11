<?php
class Wisata_rekreasi_model extends CI_Model {

    // mengambil seluruh data table jenis_wisata
    public function getAll() {
        // SELECT * FROM jenis_wisata
        $query = $this->db->get('jenis_rekreasi');
        return $query->result();
    }

    // mengambil data dosen yang memiliki $id tertentu
    public function findById($id) {
        $query = $this->db->get_where('jenis_rekreasi', array('id' => $id));
        return $query->row();
    }
    public function insert_rekreasi($data) {
        $this->db->insert('jenis_rekreasi', $data);
    }

    public function delete_rekreasi($data) {
        $sql = "DELETE FROM jenis_rekreasi WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function update_rekreasi($data,$id) {
        $this->db->where(['id' =>$id]);
        $this->db->update('jenis_rekreasi', $data);
    }
}