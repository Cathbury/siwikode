<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata_kuliner extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('wisata_kuliner_model');
        $this->load->model('important_model');
    }

    public function index(){
        $data['wisata_kuliner'] = $this->wisata_kuliner_model->getAll(); 
        $this->important_model->__loadView__('wisata_kuliner/index', $data, 'Testimoni');
    }

    public function create(){
        $data['wisata_kuliner'] = $this->wisata_kuliner_model->getAll();
        $this->important_model->__loadView__('wisata_kuliner/create', $data, 'Create Testimoni');
    }

    public function store(){
        $data = [
            'id' => htmlspecialchars($this->input->post('id', true)),
            'nama_kuliner' => htmlspecialchars($this->input->post('nama_kuliner', true))
        ];
        $this->wisata_kuliner_model->insert_kuliner($data);
        redirect('wisata_kuliner');
    }

    public function delete($id){
        $data['id'] =  $id;
        $this->wisata_kuliner_model->delete_kuliner($data);
        redirect('wisata_kuliner');
    }

    public function edit($id) {
        $data['wisata_kuliner'] = $this->wisata_kuliner_model->findById($id);
        $this->important_model->__loadView__('wisata_kuliner/edit', $data, 'Edit Testimoni');
    }

    public function update() {
        $data = [
            'id' => htmlspecialchars($this->input->post('id', true)),
            'nama_kuliner' => htmlspecialchars($this->input->post('nama_kuliner', true))
        ];
        $this->wisata_kuliner_model->update_kuliner($data, $data['id']);
        redirect('wisata_kuliner');
    }
}

?>