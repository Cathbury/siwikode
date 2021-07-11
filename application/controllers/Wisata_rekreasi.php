<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata_rekreasi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('wisata_rekreasi_model');
        $this->load->model('important_model');
    }


    public function index() {
        $data['wisata_rekreasi'] = $this->wisata_rekreasi_model->getAll();

        $this->important_model->__loadView__('wisata_rekreasi/index', $data,'Wisata Rekreasi');
    }

    public function create() { 
        $data['wisata_rekreasi'] = $this->wisata_rekreasi_model->getAll();
        
        $this->important_model->__loadView__('wisata_rekreasi/create', $data, 'Create Wisata Rekreasi');
    }

    public function store() {
        $data = [
            'id' => htmlspecialchars( $this->input->post('id', true)),
            'nama_rekreasi' => htmlspecialchars($this->input->post('nama_rekreasi', true))
        ];
        // $data["nama/key dari database"], post("name dari form")
        $this->wisata_rekreasi_model->insert_rekreasi($data);
        redirect('wisata_rekreasi');
    }

    public function delete($id){
        $data['id'] =  $id;
        $this->wisata_rekreasi_model->delete_rekreasi($data);
        redirect('wisata_rekreasi');
    }

    public function edit($id) {
        $data['wisata_rekreasi'] = $this->wisata_rekreasi_model->findById($id);

        $this->important_model->__loadView__('wisata_rekreasi/edit', $data, 'Wisata');
    }

    public function update() {
        $data = [
            'id' => htmlspecialchars( $this->input->post('id', true)),
            'nama_rekreasi' => htmlspecialchars($this->input->post('nama_rekreasi', true))
        ];
        $this->wisata_rekreasi_model->update_rekreasi($data, $data['id']);
        redirect('wisata_rekreasi');
    }
}

?>