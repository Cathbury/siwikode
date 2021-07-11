<?php

class Wisata_model extends CI_Model {

    public function getAll() {
        // $query = $this->db->get('wisata');  =====
        $query = $this->db->get('wisata_depok');
        return $query->result();
    }

    public function findById($id)
    {
        // $query = $this->db->get_where('wisata', array('id' => $id)); =====
        $query = $this->db->get_where('wisata_depok', array('id' => $id));
        return $query->row();
    }

    public function joinTable() {
        // $this->db->order_by('jenis_rekreasi_id', 'ASC');=====
        // $this->db->select('wisata.*,jenis_rekreasi.nama_rekreasi, jenis_kuliner.nama_kuliner');=====
        // $this->db->from('wisata');======
        // $this->db->join('jenis_rekreasi', 'jenis_rekreasi.id = wisata.jenis_rekreasi_id');=====
        // $this->db->join('jenis_kuliner', 'jenis_kuliner.id = wisata.jenis_kuliner_id');=====
        $this->db->select('wisata_depok.*, jenis_wisata.jenis, kategori.nama_kategori');
        $this->db->from('wisata_depok');
        $this->db->join('jenis_wisata', 'jenis_wisata.id = wisata_depok.jenis_wisata_id', 'left');
        $this->db->join('kategori', 'kategori.id = wisata_depok.kategori_id');
        // $this->db->join('testimoni_wisata', 'testimoni_wisata.id = wisata_depok.rating', 'left');
        return $this->db->get()->result();
    }

    public function insert_wisata($data){ 
        $this->db->insert('wisata_depok', $data);
    }

    public function delete_wisata($data) {
        $sql = "DELETE FROM wisata_depok WHERE id=?";
        return $this->db->query($sql, $data);
    }

    public function update_wisata($id, $data) {
        $this->db->where(array('id' => $id));
        $this->db->update('wisata_depok', $data);
    }
    
    // ============= 
    public function __jenisWisata__() {
        $query = $this->db->get('jenis_wisata');
        return $query->result();
    }

    public function __kategori__() {
        $query = $this->db->get('kategori');
        return $query->result();
    }
    // ================
    // public function update_rating($id)
    // {
    //     $testimoni = $this->db->get_where('testimoni_wisata', array('wisata_depok_id' => $id))->result();
    //     $total = 0;
    //     foreach ($testimoni as $row) {
    //         $total += $row->rating;
    //     }
    //     $total = $total / count($testimoni);
    //     $data['rating'] = round($total, 0);

    //     $this->db->where(['id' => $id]);
    //     $this->db->update('wisata_depok', $data);
    // }
}
?>