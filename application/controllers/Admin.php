<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->model('important_model');
        $this->load->model('wisata_model');
    }

    public function index() {
        // $data['menu'] = $this->important_model->menuAccessManagement();?
        $data = [
            'wisata' => $this->wisata_model->joinTable()
        ];
        $this->important_model->__loadView__('admin/index', $data, 'Dashboard');

    }

    // public function create() {
    //     // $data['admin'] = $this->admin_model->joinTable();
    //     $data['admin'] = $this->admin_model->whoCanAccessMenu();
    //     $this->important_model->__loadView__('admin/create', $data, 'Admin Create');
    // }

    // public function store() {
    //     $data = [
    //         'title' => htmlspecialchars($this->input->post('menu_title', true)),
    //         'url' => htmlspecialchars($this->input->post('menu_url', true)),
    //         'icon' => htmlspecialchars($this->input->post('menu_icon', true)),
    //         'menu_id' => htmlspecialchars($this->input->post('menu_access_rights', true)),
    //         'is_active' => 1
    //     ];
    //     $this->admin_model->insert_menu($data);
    //     redirect('admin/index');
    // }

    // public function delete($id) {
    //     $data['id'] = $id;
    //     $this->admin_model->delelte_menu($data);
    //     redirect('admin/index');
    // }

    // public function edit() {
    //     $data['admin'] = $this->admin_model->getAll();
    //     $this->important_model->__loadView__('admin/edit', $data, 'Admin Edit');
    // }


    // public function store($id) {
    //     $this->admin_model->insert_menu($data)
    // }
}
?>