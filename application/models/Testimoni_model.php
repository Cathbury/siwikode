 <?php

class Testimoni_model extends CI_Model {
    public function getAll() {
        $query = $this->db->get('testimoni_wisata');
        return $query->result();
    }

    public function findById($id) {
        $query = $this->db->get_where('testimoni_wisata', array('id' => $id));
        
        return $query->row();
    }

    public function joinTable() {
        // $this->db->order_by('profesi_id','ASC');
        $this->db->select('testimoni_wisata.*, profesi.nama_profesi, wisata_depok.nama_wisata');
        $this->db->from('testimoni_wisata');
        $this->db->join('profesi','profesi.id = testimoni_wisata.profesi_id', 'left');
        $this->db->join('wisata_depok','wisata_depok.id = testimoni_wisata.wisata_depok_id',);

        return $this->db->get()->result();
    }

    public function insert_testimoni($data) {
        $this->db->insert('testimoni_wisata', $data);
    }

    public function delete_testimoni($data) {
        $sql = "DELETE FROM testimoni_wisata WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function update_testimoni($data, $id) {
        $this->db->where(['id' => $id]);
        $this->db->update('testimoni_wisata', $data);
    }


}
?>