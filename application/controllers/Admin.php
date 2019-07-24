<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('status') != 'login') {
            redirect('auth');
        }
        $this->load->library('combine');
        $this->load->model('m_admin');
        $this->load->model('m_article');
        $this->load->library(array('ckeditor'));
    }

    public function index() {
        $load['header'] = 'Dashboard';
        $this->combine->load('admin/index', 'admin/home', $load);
    }
    
    public function editor() {
        $load['header'] = 'Editor';
        $width = '100%';
        $height = '500px';
        $this->edit($width, $height);
        
        $this->combine->load('admin/index', 'admin/editor', $load);
    }
    
    function edit($width, $height) {
        $this->ckeditor->basePath = base_url() . 'plugins/ckeditor/';
        $this->ckeditor->config['toolbar'] = 'Full';
        $this->ckeditor->config['language'] = 'en';
        $this->ckeditor->config['width'] = $width;
        $this->ckeditor->config['height'] = $height;
    }

    public function profile() {
        $username = $this->session->userdata('username');
        $load['header'] = 'Profile';
        $load['profile'] = $this->m_admin->profile($username);
        $this->combine->load('admin/index', 'admin/profile', $load);
    }

    public function stat_article() {
        $load['header'] = 'Artikel Statis';
        $load['table_title'] = 'List Artikel / Halaman Statis (Single - Paged)';
        
        $this->combine->load('admin/index', 'admin/articles', $load);
    }

    public function dyn_article() {
        $load['header'] = 'Artikel Dinamis';
        $load['table_title'] = 'List Artikel / Halaman Dinamis (Multiple - Paged)';
        
        $this->combine->load('admin/index', 'admin/articled', $load);
    }

    public function sip_ppob() {
        $load['header'] = 'History PPOB';
        $this->combine->load('admin/index', 'admin/ppob', $load);
    }
    
    public function sip_pulsa() {
        $load['header'] = 'History Pulsa';
        $dt_start = $this->input->post('date_start');
        $dt_end = $this->input->post('date_end');

        if (empty($dt_start)) {
            $date_start = date('Y-m-01');
        }

        if (empty($dt_end)) {
            $date_end = date('Y-m-t');
        }
        $load['data'] = $this->m_admin->sip_pulsa($date_start, $date_end);
        $this->combine->load('admin/index', 'admin/pulsa', $load);
    }
    
    public function sip_pesawat() {
        $load['header'] = 'History Pesawat';
        $dt_start = $this->input->post('date_start');
        $dt_end = $this->input->post('date_end');

        if (empty($dt_start)) {
            $date_start = date('Y-m-01');
        }

        if (empty($dt_end)) {
            $date_end = date('Y-m-t');
        }
        $load['data'] = $this->m_admin->sip_pesawat($date_start, $date_end);
        $this->combine->load('admin/index', 'admin/pesawat', $load);
    }
    
    public function sip_kereta() {
        $load['header'] = 'History Kereta';
        $dt_start = $this->input->post('date_start');
        $dt_end = $this->input->post('date_end');

        if (empty($dt_start)) {
            $date_start = date('Y-m-01');
        }

        if (empty($dt_end)) {
            $date_end = date('Y-m-t');
        }
        $load['data'] = $this->m_admin->sip_kereta($date_start, $date_end);
        $this->combine->load('admin/index', 'admin/kereta', $load);
    }
    
    public function sip_hotel() {
        $load['header'] = 'History Hotel';
        $dt_start = $this->input->post('date_start');
        $dt_end = $this->input->post('date_end');

        if (empty($dt_start)) {
            $date_start = date('Y-m-01');
        }

        if (empty($dt_end)) {
            $date_end = date('Y-m-t');
        }
        $load['data'] = $this->m_admin->sip_hotel($date_start, $date_end);
        $this->combine->load('admin/index', 'admin/hotel', $load);
    }

}
