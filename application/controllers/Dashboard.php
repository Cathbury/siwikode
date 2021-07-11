<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index() {
        $this->load->model('dashboard_model');
        $this->load->model('important_model');

        $this->important_model->__loadView__('dashboard/index', null, 'Dashboard');
    }
}
?>