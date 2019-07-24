<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('combine');
        $this->load->model('m_admin');
    }

    public function index() {
        $load['flag'] = '0';
        $this->load->view('login_page', $load);
    }

    public function login() {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        
        $check = $this->m_admin->login($username, $password);
        if ($check->username == $username && $check->password == $password) {
            $data_session = array(
                'username' => $check->username,
                'long_name' => $check->long_name,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);
            redirect('admin');
        } else {
            $load['flag'] = 'salah';
            $this->load->view('login_page', $load);
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        header('Location: ' . base_url() . 'index.php/nav');
    }

}
