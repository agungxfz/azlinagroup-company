<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class sip extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_sip');
    }

    // <editor-fold defaultstate="collapsed" desc="PPOB">
    public function insert_ppob_asuransi() {
        $no_idpel = $this->input->post('no_idpel');
        $jenis_produk = $this->input->post('jenis_produk');
        $admin = $this->input->post('admin');

        if (!empty($no_idpel) and ! empty($jenis_produk) and ! empty($admin)) {
            $this->m_sip->insert_ppob_asuransi($no_idpel, $jenis_produk, $admin);
            echo 'success';
        } else {
            echo 'failed';
        }
    }

    public function insert_ppob_internet() {
        $no_idpel = $this->input->post('no_idpel');
        $jenis_produk = $this->input->post('jenis_produk');
        $admin = $this->input->post('admin');

        if (!empty($no_idpel) and ! empty($jenis_produk) and ! empty($admin)) {
            $this->m_sip->insert_ppob_internet($no_idpel, $jenis_produk, $admin);
            echo 'success';
        } else {
            echo 'failed';
        }
    }

    public function insert_ppob_multifinance() {
        $no_idpel = $this->input->post('no_idpel');
        $jenis_produk = $this->input->post('jenis_produk');
        $admin = $this->input->post('admin');

        if (!empty($no_idpel) and ! empty($jenis_produk) and ! empty($admin)) {
            $this->m_sip->insert_ppob_multifinance($no_idpel, $jenis_produk, $admin);
            echo 'success';
        } else {
            echo 'failed';
        }
    }

    public function insert_ppob_pdam() {
        $no_idpel = $this->input->post('no_idpel');
        $jenis_produk = $this->input->post('jenis_produk');
        $admin = $this->input->post('admin');

        if (!empty($no_idpel) and ! empty($jenis_produk) and ! empty($admin)) {
            $this->m_sip->insert_ppob_pdam($no_idpel, $jenis_produk, $admin);
            echo 'success';
        } else {
            echo 'failed';
        }
    }

    public function insert_ppob_plnpasca() {
        $no_idpel = $this->input->post('no_idpel');
        $admin = $this->input->post('admin');

        if (!empty($no_idpel) and ! empty($admin)) {
            $this->m_sip->insert_ppob_plnpasca($no_idpel, $admin);
            echo 'success';
        } else {
            echo 'failed';
        }
    }

    public function insert_ppob_plnpra() {
        $no_idpel = $this->input->post('no_idpel');
        $jenis_produk = $this->input->post('jenis_produk');
        $admin = $this->input->post('admin');

        if (!empty($no_idpel) and ! empty($jenis_produk) and ! empty($admin)) {
            $this->m_sip->insert_ppob_plnpra($no_idpel, $jenis_produk, $admin);
            echo 'success';
        } else {
            echo 'failed';
        }
    }

    public function insert_ppob_telpasca() {
        $no_idpel = $this->input->post('no_idpel');
        $jenis_produk = $this->input->post('jenis_produk');
        $admin = $this->input->post('admin');

        if (!empty($no_idpel) and ! empty($jenis_produk) and ! empty($admin)) {
            $this->m_sip->insert_ppob_telpasca($no_idpel, $jenis_produk, $admin);
            echo 'success';
        } else {
            echo 'failed';
        }
    }

    public function insert_ppob_tvkabel() {
        $no_idpel = $this->input->post('no_idpel');
        $jenis_produk = $this->input->post('jenis_produk');
        $admin = $this->input->post('admin');

        if (!empty($no_idpel) and ! empty($jenis_produk) and ! empty($admin)) {
            $this->m_sip->insert_ppob_tvkabel($no_idpel, $jenis_produk, $admin);
            echo 'success';
        } else {
            echo 'failed';
        }
    }

    // </editor-fold>
    // <editor-fold defaultstate="collapsed" desc="Pulsa">
    public function insert_pulsa() {
        $no_idpel = $this->input->post('no_idpel');
        $jenis_produk = $this->input->post('jenis_produk');
        $admin = $this->input->post('admin');

        if (!empty($no_idpel) and ! empty($jenis_produk) and ! empty($admin)) {
            $this->m_sip->insert_pulsa($no_idpel, $jenis_produk, $admin);
            echo 'success';
        } else {
            echo 'failed';
        }
    }

    // </editor-fold>
    // <editor-fold defaultstate="collapsed" desc="Hotel">
    public function insert_hotel() {
        $kota_tujuan = $this->input->post('kota_tujuan');
        $checkin = $this->input->post('checkin');
        $checkout = $this->input->post('checkout');
        $jml_kamar = $this->input->post('jml_kamar');
        $jml_tamu = $this->input->post('jml_tamu');
        $chat_admin = $this->input->post('admin');

        if (!empty($kota_tujuan) and ! empty($checkin) and ! empty($checkout) and ! empty($jml_kamar) and ! empty($jml_tamu) and ! empty($chat_admin)) {
            $this->m_sip->insert_hotel($kota_tujuan, $checkin, $checkout, $jml_kamar, $jml_tamu, $chat_admin);
            echo 'success';
        } else {
            echo 'failed';
        }
    }

    // </editor-fold>
    // <editor-fold defaultstate="collapsed" desc="Kereta">
    public function insert_kereta() {
        $type = $this->input->post('type');
        $asal_k = $this->input->post('asal_k');
        $tujuan_k = $this->input->post('tujuan_k');
        $dateb_k = $this->input->post('dateb_k');
        $datep_k = $this->input->post('datep_k');
        $jml_dewasa_k = $this->input->post('jml_dewasa_k');
        $jml_anak_k = $this->input->post('jml_anak_k');
        $chat_admin = $this->input->post('admin');
        
        if (!empty($type) and !empty($asal_k) and !empty($tujuan_k) and ! empty($dateb_k) and ! empty($jml_dewasa_k) and ! empty($jml_anak_k) and ! empty($chat_admin)) {
            $this->m_sip->insert_kereta($type, $asal_k, $tujuan_k, $dateb_k, $datep_k, $jml_dewasa_k, $jml_anak_k, $chat_admin);
            echo 'success';
        } else {
            echo 'failed';
        }
    }
    
    public function insert_railink() {
        $type = $this->input->post('type');
        $asal_r = $this->input->post('asal_r');
        $tujuan_r = $this->input->post('tujuan_r');
        $dateb_r = $this->input->post('dateb_r');
        $datep_r = $this->input->post('datep_r');
        $jml_dewasa_r = $this->input->post('jml_dewasa_r');
        $jml_anak_r = $this->input->post('jml_anak_r');
        $chat_admin = $this->input->post('admin');
        if (!empty($type)) {// and !empty($asal_r) and !empty($tujuan_r) and ! empty($dateb_r) and ! empty($jml_dewasa_r) and ! empty($jml_anak_r) and ! empty($chat_admin)
            $this->m_sip->insert_railink($type, $asal_r, $tujuan_r, $dateb_r, $datep_r, $jml_dewasa_r, $jml_anak_r, $chat_admin);
            echo 'success';
        } else {
            echo 'failed';
        }
    }

    // </editor-fold>
    // <editor-fold defaultstate="collapsed" desc="Pesawat">
    public function insert_pesawat() {
        $category = $this->input->post('category');
        $departure = $this->input->post('departure');
        $arrival = $this->input->post('arrival');
        $jml_dewasa = $this->input->post('jml_dewasa');
        $jml_anak = $this->input->post('jml_anak');
        $jml_infant = $this->input->post('jml_infant');
        $date_departure = $this->input->post('date_departure');
        $date_arrival = $this->input->post('date_arrival');
        $cabin = $this->input->post('cabin');
        $chat_admin = $this->input->post('admin');
        
        if (!empty($category) and !empty($departure) and !empty($arrival) and ! empty($jml_dewasa) and ! empty($date_departure) and ! empty($chat_admin)) {
            $this->m_sip->insert_pesawat($category, $departure, $arrival, $jml_dewasa, $jml_anak, $jml_infant, $date_departure, $date_arrival, $cabin, $chat_admin);
            echo 'success';
        } else {
            echo 'failed';
        }
    }
    // </editor-fold>

}
