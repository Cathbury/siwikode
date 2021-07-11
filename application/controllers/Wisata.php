<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('wisata_model');
        $this->load->model('important_model');
        $this->load->model('testimoni_model');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index(){
        $data['wisata'] = $this->wisata_model->joinTable();
        $this->important_model->__loadView__('wisata/index', $data, 'Wisata');
    }

    public function create() {
        $this->load->model('wisata_rekreasi_model');
        $this->load->model('wisata_kuliner_model');
        $data = [
            'wisata' => $this->wisata_model->getAll(),
            'jenis_wisata' => $this->wisata_model->__jenisWisata__(),
            'kategori' => $this->wisata_model->__kategori__()
        ]; 
        $this->important_model->__loadView__('wisata/create', $data, 'Create Wisata');
    }

    public function edit($id) {
        $data = [
            'wisata' => $this->wisata_model->getAll(),
            'wisataId' => $this->wisata_model->findById($id),
            'kategori' => $this->wisata_model->__kategori__(),
            'jenis_wisata' => $this->wisata_model->__jenisWisata__()
        ]; 
        
        $this->important_model->__loadView__('wisata/edit', $data, 'Edit Wisata');
    }

    public function store() {
        $this->form_validation->set_rules('nama_wisata', 'Nama Wisata', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('jenis_wisata_id', 'Jenis Wisata', 'required|trim');
        $this->form_validation->set_rules('kategori_id', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('fasilitas', 'Fasilitas', 'required|trim');
        $this->form_validation->set_rules('kontak', 'Kontak', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('latlong', 'Latlong', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('url', 'URL', 'required|trim');

        $data = [
            'id' => htmlspecialchars($this->input->post('id', true)),
            'nama_wisata' => htmlspecialchars($this->input->post('nama_wisata', true)),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
            'jenis_wisata_id' => htmlspecialchars($this->input->post('jenis_wisata', true)),
            'kategori_id' => htmlspecialchars($this->input->post('kategori', true)),
            // 'jenis_rekreasi_id' => htmlspecialchars($this->input->post('jenis_wisata', true)), ======
            'fasilitas' => htmlspecialchars($this->input->post('fasilitas', true)),
            // 'rating' => htmlspecialchars($this->input->post('rating', true)),
            'kontak' => htmlspecialchars($this->input->post('kontak', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'latlong' => htmlspecialchars($this->input->post('latlong', true)),
            'email' => htmlspecialchars( $this->input->post('email', true)),
            'url' => htmlspecialchars( $this->input->post('url', true)),
            // 'web' => htmlspecialchars($this->input->post('web', true)), ======
            // 'jenis_kuliner_id' => htmlspecialchars($this->input->post('jenis_kuliner', true))=====
        ];
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '2048';
        $config['upload_path'] = './assets/img/photo_wisata/';

        $this->load->library('upload', $config);

        if($this->upload->do_upload('image')) {
            $new_image = $this->upload->data('file_name');
            $this->db->set('image', $new_image);
            
        } else {
            echo $this->upload->display_errors();
        }

        $this->wisata_model->insert_wisata($data);

        // $host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        // if ($host == 'localhost/siwikode/wisata/create') {
        // }

        redirect('/wisata/index');
    }

    public function update() {
        $this->form_validation->set_rules('nama_wisata', 'Nama Wisata', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('jenis_wisata_id', 'Jenis Wisata', 'required|trim');
        $this->form_validation->set_rules('kategori_id', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('fasilitas', 'Fasilitas', 'required|trim');
        $this->form_validation->set_rules('kontak', 'Kontak', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('latlong', 'Latlong', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('url', 'URL', 'required|trim');

        $data = [
            'id' => htmlspecialchars($this->input->post('id', true)),
            'nama_wisata' => htmlspecialchars($this->input->post('nama_wisata', true)),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
            'jenis_wisata_id' => htmlspecialchars($this->input->post('jenis_wisata', true)),
            'kategori_id' => htmlspecialchars($this->input->post('kategori', true)),
            // 'jenis_rekreasi_id' => htmlspecialchars($this->input->post('jenis_wisata', true)), ======
            'fasilitas' => htmlspecialchars($this->input->post('fasilitas', true)),
            // 'rating' => htmlspecialchars($this->input->post('rating', true)),
            'kontak' => htmlspecialchars($this->input->post('kontak', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'latlong' => htmlspecialchars($this->input->post('latlong', true)),
            'email' => htmlspecialchars( $this->input->post('email', true)),
            'url' => htmlspecialchars( $this->input->post('url', true)),
            // 'web' => htmlspecialchars($this->input->post('web', true)), ======
            // 'jenis_kuliner_id' => htmlspecialchars($this->input->post('jenis_kuliner', true))=====
        ];
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '2048';
        $config['upload_path'] = './assets/img/photo_wisata/';

        $this->load->library('upload', $config);

        if($this->upload->do_upload('image')) {
            $new_image = $this->upload->data('file_name');
            $this->db->set('image', $new_image);
            
        } else {
            echo $this->upload->display_errors();
        }

        $this->wisata_model->update_wisata($data['id'], $data);

        // $host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        // if ($host == 'localhost/siwikode/wisata/create') {
        // }

        redirect('/wisata/index');
    }

    public function delete($id) {
        $data['id'] = $id;
        $this->wisata_model->delete_wisata($id);
        redirect('wisata');
    }
}
?>