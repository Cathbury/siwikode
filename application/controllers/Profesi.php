<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profesi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('profesi_model');
        $this->load->model('important_model');
    }
    
    public function index() {
        $data['profesi'] = $this->profesi_model->getAll();
        $this->important_model->__loadView__('profesi/index', $data, 'Profesi');

    }

    public function create() {
        $data['profesi'] = $this->profesi_model->getAll();
        $this->important_model->__loadView__('profesi/create', $data, 'Create Profesi');
    }

    public function store() {
        $data = [
            'id' => htmlspecialchars($this->input->post('id', true)),
            'nama_profesi' => htmlspecialchars($this->input->post('nama_profesi', true))
        ];
        $this->profesi_model->insert_profesi($data);
        redirect('profesi');
    }

    public function delete($id){
        $data['id'] =  $id;
        $this->profesi_model->delete_profesi($data);
        redirect('profesi');
    }

    public function edit($id) {
        $data['profesi'] = $this->profesi_model->findById($id);
        $this->important_model->__loadView__('profesi/edit', $data, 'Edit Profesi');
    }

    public function update() {
        $data = [
            'id' => htmlspecialchars($this->input->post('id', true)),
            'nama_profesi' => htmlspecialchars($this->input->post('nama_profesi', true))
        ];
        $this->profesi_model->update_profesi($data, $data['id'], 'profesi');
        redirect('profesi');
    }

}

?>