<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Libauth {

    var $CI = NULL;

    function __construct() {
        $this->CI = & get_instance();
    }

    public function login($username, $password) {
        $mysql = $this->CI->load->database('default', TRUE);
        $query = $mysql->query("SELECT is_active FROM anna_user WHERE username = '$username' AND password = '$password'");
        $check = $query->row();
        
        if ($check->is_active == 1) {
            $data_session = array(
                'username' => $check->username,
                'long_name' => $check->long_name,
                'status' => "login"
            );

            $this->CI->session->set_userdata($data_session);
            return TRUE;
        } else {
            show_error('<p style="color:red;">User : ' . $username . '</p> <p><b>Username anda belum terecord di database sistem. <br> Hub Administrator <br> Untuk Menambahkan Username Anda</b></p> <p><a href="' . base_url() . '">Back To Home<a></p>', 404, $heading = 'LOGIN ERROR');
        }
    }

    public function check_sess() {
        $username = $this->CI->session->userdata('username');
        if (empty($username)) {
            redirect('auth');
        } else {
            return true;
        }
    }

    public function logout() {
        $this->CI->session->sess_destroy();
        header('Location: ' . base_url() . 'nav');
    }

}
