<?php
class Wisata_kuliner_model extends CI_Model {
    public function getAll(){
        $query = $this->db->get('jenis_kuliner');
        return $query->result();
    }

    public function findById($id) {
        $query = $this->db->get_where('jenis_kuliner', array('id' => $id));
        return $query->row();
    }

    public function insert_kuliner($data) {
        $this->db->insert('jenis_kuliner', $data);
    }

    public function delete_kuliner($data) {
        $sql = "DELETE FROM jenis_kuliner WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function update_kuliner($data,$id) {
        $this->db->where(['id' =>$id]);
        $this->db->update('jenis_kuliner', $data);
    }
}
?>

