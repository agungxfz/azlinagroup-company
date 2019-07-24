<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class data extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->model('m_article');
    }
    
    function get_static_article() {
        return $this->m_article->load_static();
    }
    
    function get_dynamic_article() {
        return $this->m_article->load_dynamic();
    }

    function get_list_ppob() {
        return $this->m_admin->sip_ppob();
    }

    function rpt_hotel_month() {
        return $this->m_admin->rpt_hotel_month();
    }

    function rpt_kereta_month() {
        return $this->m_admin->rpt_kereta_month();
    }

    function rpt_pesawat_month() {
        return $this->m_admin->rpt_pesawat_month();
    }

    function rpt_ppob_month() {
        $date_from = $this->input->get('date_from');
        $date_to = $this->input->get('date_to');
        return $this->m_admin->rpt_ppob_month($date_from, $date_to);
    }

}
