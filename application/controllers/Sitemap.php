<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class sitemap extends CI_Controller {

    public function index() {
        $this->load->model('M_sitemap');
        $this->load->helper('url');
        $data['links'] = $this->M_sitemap->sitemap();
        $this->load->view('sitemap', $data);
    }

}
