<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('auth_model');
        $this->load->library('form_validation');   
    }

    private function __loadView__($whatView, $data, $title) {
        $this->load->view('layouts/authHeader', $title);
        $this->load->view($whatView, $data);
        $this->load->view('layouts/authFooter');
    }


    public function index() {
        if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');


        if($this->form_validation->run() == false) {
            // jika gagal login 
            $data['title'] = 'Login Page';
            $this->__loadView__('auth/login', null, $data /* title */);

        } else {
            // jika login success
            $this->__login__();
        }
    }

    private function __login__() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // $user = $this->auth_model->checkAccessLogin($email); =====
        $user = $this->db->get_where('users', ['email' => $email])->row_array();

        // user exist
        if ($user) {
            // if user active
            if($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                        // 'image' => $user['image'] ======
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_userdata('message', '<div class="alert alert-danger" role="alert">Wrong password</div>');
                    redirect('auth');
                }

            } else {
                $this->session->set_userdata('message', '<div class="alert alert-danger" role="alert">This Account has not been activated</div>');
                redirect('auth');
            }

        } else {
            $this->session->set_userdata('message', '<div class="alert alert-danger" role="alert">Wrong Email</div>');
            redirect('auth');
        }
    }

    public function registration() {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        
        $this->form_validation->set_rules(
            'username', 'Username', 
            'required|trim|is_unique[users.username]', 
            ['is_unique' => 'This username has already used']
        );
        $this->form_validation->set_rules(
            'email', 'Email', 
            'required|trim|valid_email|is_unique[users.email]', 
            ['is_unique' => 'This email has already registered']
        );
        $this->form_validation->set_rules(
            'password', 'Password', 
            'required|trim|min_length[5]|matches[repeat_password]', 
            [
                'matches' => '',
                'min_length' => 'Password too short!'
            ]
        );
        $this->form_validation->set_rules(
            'repeat_password', 'Repeat_Password', 
            'required|trim|min_length[5]|matches[password]', 
            [
                'required' => 'The Repeat Password field is required',
                'matches' => 'Password didnt matches!',
                'min_length' => 'Password didnt matches!'
            ]
        );

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration Page';
            $this->__loadView__('auth/registration', null, $data /* title */);

        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.png',
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT ),
                'role_id' => 1,
                'is_active' => 1,
                'date_created' => time() 
            ]; 

            $this->auth_model->insert_user($data);
            $this->session->set_userdata('message', '<div class="alert alert-success" role="alert">Create an account is successful</div>');
            redirect('/auth/index', 'refresh');
            
        }
    }

    public function logout() {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_userdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('auth');
    }

}

?>