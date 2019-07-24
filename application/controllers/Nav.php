<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class nav extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('combine');
        $this->load->model('m_article');
    }

    public function index() {
        $this->load->view('welcome_message');
    }

    // <editor-fold defaultstate="collapsed" desc="Tentang kami">
    public function welcome() {
        $load['header'] = ''; //'PT Astana Noor Azlina';
        $load['article'] = $this->m_article->static_article('welcome');
        $this->combine->load('template/head_only', 'navigation/welcome', $load);
    }

    public function company() {
        $load['header'] = ''; //'Sekilas Perusahaan';
        $load['article'] = $this->m_article->static_article('company');
        $this->combine->load('template/head_only', 'navigation/company', $load);
    }

    public function vision() {
        $load['header'] = ''; //'Visi & Misi';
        $load['article'] = $this->m_article->dynamic_article('vision');
        $this->combine->load('template/head_only', 'navigation/vision', $load);
    }

    public function organization() {
        $load['header'] = ''; //'Struktur Organisasi';
        $load['article'] = $this->m_article->dynamic_article('organization');
        $this->combine->load('template/head_only', 'navigation/organization', $load);
    }

    public function commissioner() {
        $load['header'] = ''; //'Dewan Komisaris';
        $load['article'] = $this->m_article->dynamic_article('commissioner');
        $this->combine->load('template/head_only', 'navigation/commissioner', $load);
    }

    public function directors() {
        $load['header'] = ''; //'Dewan Direksi';
        $load['article'] = $this->m_article->dynamic_article('directors');
        $this->combine->load('template/head_only', 'navigation/directors', $load);
    }

    // </editor-fold>
    // <editor-fold defaultstate="collapsed" desc="Produk & layanan">
    public function flpp() {
        $load['header'] = ''; //'FLPP';
        $load['article'] = $this->m_article->static_article('flpp');
        $this->combine->load('template/head_only', 'navigation/flpp', $load);
    }

    public function komersial() {
        $load['header'] = ''; //'Rumah Komersial';
        $load['article'] = $this->m_article->static_article('komersial');
        $this->combine->load('template/head_only', 'navigation/komersial', $load);
    }

    public function arsitektur() {
        $load['header'] = ''; //'Desain Arsitektur';
        $load['article'] = $this->m_article->static_article('arsitektur');
        $this->combine->load('template/head_only', 'navigation/arsitektur', $load);
    }

    public function plt() {
        $load['header'] = ''; //'Property Learning Technologies';
        $load['article'] = $this->m_article->static_article('plt');
        $this->combine->load('template/head_only', 'navigation/plt', $load);
    }

    public function vmart() {
        $load['header'] = ''; //'Mini V-Mart';
        $load['article'] = $this->m_article->static_article('vmart');
        $this->combine->load('template/head_only', 'navigation/vmart', $load);
    }

    public function whr() {
        $load['header'] = ''; //'Mini V-Mart';
        $load['article'] = $this->m_article->static_article('whr');
        $load['images'] = $this->m_article->whr_slider();
        $this->combine->load('template/head_only', 'navigation/whr', $load);
    }

    // </editor-fold>
    // <editor-fold defaultstate="collapsed" desc="Investor">
    public function relation() {
        $load['header'] = ''; //'Hubungan Investor';
        $load['article'] = $this->m_article->dynamic_article('relation');
        $this->combine->load('template/head_only', 'navigation/relation', $load);
    }

    public function shareholders() {
        $load['header'] = ''; //'Pemegang Saham';
        $load['article'] = $this->m_article->dynamic_article('shareholders');
        $this->combine->load('template/head_only', 'navigation/shareholders', $load);
    }

    public function stockinfo() {
        $load['header'] = ''; //'Informasi Saham';
        $load['article'] = $this->m_article->dynamic_article('stockinfo');
        $this->combine->load('template/head_only', 'navigation/stockinfo', $load);
    }

    public function report() {
        $load['header'] = ''; //'Laporan Keuangan';
        $load['article'] = $this->m_article->dynamic_article('report');
        $this->combine->load('template/head_only', 'navigation/report', $load);
    }

    public function rups() {
        $load['header'] = ''; //'R U P S';
        $load['article'] = $this->m_article->dynamic_article('rups');
        $this->combine->load('template/head_only', 'navigation/rups', $load);
    }

    // </editor-fold>
    // <editor-fold defaultstate="collapsed" desc="Berita & pers">
    public function acara() {
        $load['header'] = ''; //'Acara';
        $load['article'] = $this->m_article->dynamic_article('acara');
        $this->combine->load('template/head_only', 'navigation/acara', $load);
    }

    public function berita() {
        $load['header'] = ''; //'Berita';
        $load['article'] = $this->m_article->dynamic_article('berita');
        $this->combine->load('template/head_only', 'navigation/berita', $load);
    }

    public function pers() {
        $load['header'] = ''; //'Pers';
        $load['article'] = $this->m_article->dynamic_article('pers');
        $this->combine->load('template/head_only', 'navigation/pers', $load);
    }

    // </editor-fold>
    // <editor-fold defaultstate="collapsed" desc="Tata kelola">
    public function gcg() {
        $load['header'] = ''; //'Good Corporate Governance';
        $load['article'] = $this->m_article->static_article('gcg');
        $this->combine->load('template/head_only', 'navigation/gcg', $load);
    }

    // </editor-fold>
    // <editor-fold defaultstate="collapsed" desc="CSR">
    public function komunitas() {
        $load['header'] = ''; //'Komunitas';
        $load['article'] = $this->m_article->dynamic_article('komunitas');
        $this->combine->load('template/head_only', 'navigation/komunitas', $load);
    }

    public function lingkungan() {
        $load['header'] = ''; //'Lingkungan';
        $load['article'] = $this->m_article->dynamic_article('lingkungan');
        $this->combine->load('template/head_only', 'navigation/lingkungan', $load);
    }

    // </editor-fold>
    // <editor-fold defaultstate="collapsed" desc="Hubungi kami">
    public function contact() {
        $load['header'] = ''; //'Kontak Kami';
        $load['article'] = $this->m_article->static_article('contact');
        $this->combine->load('template/head_only', 'navigation/contact', $load);
    }

    // </editor-fold>
    // <editor-fold defaultstate="collapsed" desc="Order">
    public function sip() {
        $load['header'] = 'Tiket Kereta';
        $load['article'] = $this->m_article->static_article('sip');
        $this->combine->load('template/head_only', 'navigation/sip', $load);
    }
    
    public function pesawat() {
        $this->load->model('m_navigation');
        
        $load['header'] = 'Tiket Pesawat';
        $load['article'] = $this->m_article->static_article('pesawat');
        $load['domestic'] = $this->m_navigation->airport_list_dom();
        $load['international'] = $this->m_navigation->airport_list_int();
        $this->combine->load('template/head_only', 'order/pesawat', $load);
    }

    public function kereta() {
        $load['header'] = 'Tiket Kereta';
        $load['article'] = $this->m_article->static_article('kereta');
        $this->combine->load('template/head_only', 'order/kereta', $load);
    }

    public function hotel() {
        $load['header'] = 'Hotel / Penginapan';
        $load['article'] = $this->m_article->static_article('hotel');
        $this->combine->load('template/head_only', 'order/hotel', $load);
    }

    public function pulsa() {
        $load['header'] = 'Pulsa Elektrik';
        $load['article'] = $this->m_article->static_article('pulsa');
        $this->combine->load('template/head_only', 'order/pulsa', $load);
    }

    public function ppob() {
        $load['header'] = 'All PPOB';
        $load['article'] = $this->m_article->static_article('ppob');
        $this->combine->load('template/head_only', 'order/ppob', $load);
    }

    public function ppob_asuransi() {
        $load['header'] = 'PPOB';
        $load['title'] = 'PPOB : BPJS Kesehatan';
        $load['article'] = $this->m_article->static_article('ppob_asuransi');
        $this->combine->load('template/head_only', 'order/ppob_asuransi', $load);
    }

    public function ppob_internet() {
        $load['header'] = 'PPOB';
        $load['title'] = 'PPOB : Internet Speedy';
        $load['article'] = $this->m_article->static_article('ppob_internet');
        $this->combine->load('template/head_only', 'order/ppob_internet', $load);
    }

    public function ppob_mutifinance() {
        $load['header'] = 'PPOB';
        $load['title'] = 'PPOB : Multi Finance';
        $load['article'] = $this->m_article->static_article('ppob_mutifinance');
        $this->combine->load('template/head_only', 'order/ppob_mutifinance', $load);
    }

    public function ppob_pdam() {
        $load['header'] = 'PPOB';
        $load['title'] = 'PPOB : PDAM';
        $load['article'] = $this->m_article->static_article('ppob_pdam');
        $this->combine->load('template/head_only', 'order/ppob_pdam', $load);
    }

    public function ppob_plnpasca() {
        $load['header'] = 'PPOB';
        $load['title'] = 'PPOB : PLN Pasca Bayar';
        $load['article'] = $this->m_article->static_article('ppob_plnpasca');
        $this->combine->load('template/head_only', 'order/ppob_plnpasca', $load);
    }

    public function ppob_plnpra() {
        $load['header'] = 'PPOB';
        $load['title'] = 'PPOB : PLN Pra Bayar';
        $load['article'] = $this->m_article->static_article('ppob_plnpra');
        $this->combine->load('template/head_only', 'order/ppob_plnpra', $load);
    }

    public function ppob_telpasca() {
        $load['header'] = 'PPOB';
        $load['title'] = 'PPOB : Telp Pasca Bayar';
        $load['article'] = $this->m_article->static_article('ppob_telpasca');
        $this->combine->load('template/head_only', 'order/ppob_telpasca', $load);
    }

    public function ppob_tvkabel() {
        $load['header'] = 'PPOB';
        $load['title'] = 'PPOB : TV Berlangganan';
        $load['article'] = $this->m_article->static_article('ppob_tvkabel');
        $this->combine->load('template/head_only', 'order/ppob_tvkabel', $load);
    }
    
    public function index_tes() {
        $this->load->view('home');
    }

    // </editor-fold>
}
