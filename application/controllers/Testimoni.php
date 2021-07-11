<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('testimoni_model');
        $this->load->model('wisata_model');
        $this->load->model('profesi_model');
        $this->load->model('important_model');
    }

    public function index(){
        $data['testimoni'] = $this->testimoni_model->joinTable();

        $this->important_model->__loadView__('testimoni/index', $data, 'Testimoni');
    }

    public function create() {
        $data = [
            'profesi' => $this->profesi_model->getAll(),
            'wisata' => $this->wisata_model->getAll()
        ];

        $this->important_model->__loadView__('testimoni/create', $data, 'Create Testimoni');
    }

    public function store() {
        $data = [
            'nama_testimoni' => htmlspecialchars($this->input->post('nama_testimoni', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'wisata_depok_id' => htmlspecialchars($this->input->post('wisata', true)),
            'profesi_id' => htmlspecialchars($this->input->post('profesi', true)),
            'rating' => htmlspecialchars($this->input->post('rating', true)),
            'komentar' => htmlspecialchars($this->input->post('komentar', true))
        ];
        $this->testimoni_model->insert_testimoni($data);
        // update bintang di wisata
        // $this->wisata_model->update_rating($data, $data['wisata_depok_id']);
        redirect('/testimoni/index');
    }

    public function delete($id) {
        $data['id'] = $id;
        // $testimoni = $this->testimoni_model->findById($id)
        $this->testimoni_model->delete_testimoni($data);
        // update bintang di wisata
        // $this->wisata_model->update_rating($testimoni->wisata_depok_id);
        redirect('/testimoni/index');
    }

    public function edit($id) {
        $data = [
            'profesi' => $this->profesi_model->getAll(),
            'wisata' => $this->wisata_model->getAll(),
            'testimoniId' => $this->testimoni_model->findById($id),
            'testimoni' => $this->testimoni_model->joinTable()
        ];

        $this->important_model->__loadView__('testimoni/edit', $data, 'Edit Testimoni');
    }

    public function update() {
        $data = [
            'id' => htmlspecialchars($this->input->post('id', true)),
            'nama_testimoni' => htmlspecialchars($this->input->post('nama_testimoni', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'wisata_depok_id' => htmlspecialchars($this->input->post('wisata', true)),
            'profesi_id' => htmlspecialchars($this->input->post('profesi', true)),
            'rating' => htmlspecialchars($this->input->post('rating', true)),
            'komentar' => htmlspecialchars($this->input->post('komentar', true))
        ];
        $this->testimoni_model->update_testimoni($data, $data['id']);
        // update bintang di wisata
        // $this->wisata_model->update_rating($data, $data['wisata_depok_id']);
        redirect('/testimoni/index');
    }
}
?>