<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_sip extends CI_Model {

    // <editor-fold defaultstate="collapsed" desc="PPOB">
    public function insert_ppob_asuransi($no_idpel, $jenis_produk, $admin) {
        $query = $this->db->query("INSERT INTO anna_sip_ppob (
                                            date_order,
                                            nomor_idpel,
                                            jenis_produk,
                                            status_order,
                                            chat_admin,
                                            layanan
                                    )
                                    VALUES
                                            (
                                                    NOW(),
                                                    '$no_idpel',
                                                    '$jenis_produk',
                                                    'open',
                                                    '$admin',
                                                    'asuransi'
                                            )");
        return 1;
    }

    public function insert_ppob_internet($no_idpel, $jenis_produk, $admin) {
        $query = $this->db->query("INSERT INTO anna_sip_ppob (
                                            date_order,
                                            nomor_idpel,
                                            jenis_produk,
                                            status_order,
                                            chat_admin,
                                            layanan
                                    )
                                    VALUES
                                            (
                                                    NOW(),
                                                    '$no_idpel',
                                                    '$jenis_produk',
                                                    'open',
                                                    '$admin',
                                                    'internet'
                                            )");
        return 1;
    }

    public function insert_ppob_multifinance($no_idpel, $jenis_produk, $admin) {
        $query = $this->db->query("INSERT INTO anna_sip_ppob (
                                            date_order,
                                            nomor_idpel,
                                            jenis_produk,
                                            status_order,
                                            chat_admin,
                                            layanan
                                    )
                                    VALUES
                                            (
                                                    NOW(),
                                                    '$no_idpel',
                                                    '$jenis_produk',
                                                    'open',
                                                    '$admin',
                                                    'multifinance'
                                            )");
        return 1;
    }

    public function insert_ppob_pdam($no_idpel, $jenis_produk, $admin) {
        $query = $this->db->query("INSERT INTO anna_sip_ppob (
                                            date_order,
                                            nomor_idpel,
                                            jenis_produk,
                                            status_order,
                                            chat_admin,
                                            layanan
                                    )
                                    VALUES
                                            (
                                                    NOW(),
                                                    '$no_idpel',
                                                    '$jenis_produk',
                                                    'open',
                                                    '$admin',
                                                    'pdam'
                                            )");
        return 1;
    }

    public function insert_ppob_plnpasca($no_idpel, $admin) {
        $query = $this->db->query("INSERT INTO anna_sip_ppob (
                                            date_order,
                                            nomor_idpel,
                                            jenis_produk,
                                            status_order,
                                            chat_admin,
                                            layanan
                                    )
                                    VALUES
                                            (
                                                    NOW(),
                                                    '$no_idpel',
                                                    'PLN Pasca Bayar',
                                                    'open',
                                                    '$admin',
                                                    'pln_pascabayar'
                                            )");
        return 1;
    }

    public function insert_ppob_plnpra($no_idpel, $jenis_produk, $admin) {
        $query = $this->db->query("INSERT INTO anna_sip_ppob (
                                            date_order,
                                            nomor_idpel,
                                            jenis_produk,
                                            status_order,
                                            chat_admin,
                                            layanan
                                    )
                                    VALUES
                                            (
                                                    NOW(),
                                                    '$no_idpel',
                                                    '$jenis_produk',
                                                    'open',
                                                    '$admin',
                                                    'pln_prabayar'
                                            )");
        return 1;
    }

    public function insert_ppob_telpasca($no_idpel, $jenis_produk, $admin) {
        $query = $this->db->query("INSERT INTO anna_sip_ppob (
                                            date_order,
                                            nomor_idpel,
                                            jenis_produk,
                                            status_order,
                                            chat_admin,
                                            layanan
                                    )
                                    VALUES
                                            (
                                                    NOW(),
                                                    '$no_idpel',
                                                    '$jenis_produk',
                                                    'open',
                                                    '$admin',
                                                    'telepon_pasca'
                                            )");
        return 1;
    }

    public function insert_ppob_tvkabel($no_idpel, $jenis_produk, $admin) {
        $query = $this->db->query("INSERT INTO anna_sip_ppob (
                                            date_order,
                                            nomor_idpel,
                                            jenis_produk,
                                            status_order,
                                            chat_admin,
                                            layanan
                                    )
                                    VALUES
                                            (
                                                    NOW(),
                                                    '$no_idpel',
                                                    '$jenis_produk',
                                                    'open',
                                                    '$admin',
                                                    'tv_langganan'
                                            )");
        return 1;
    }

    // </editor-fold>
    // <editor-fold defaultstate="collapsed" desc="Pulsa">
    public function insert_pulsa($no_idpel, $jenis_produk, $admin) {
        $query = $this->db->query("INSERT INTO anna_sip_PULSA (
                                            nomer,
                                            nominal,
                                            chat_to,
                                            order_date,
                                            status
                                    )
                                    VALUES
                                            (
                                                    '$no_idpel',
                                                    '$jenis_produk',
                                                    '$admin',
                                                    NOW(),
                                                    'open'
                                            )");
        return 1;
    }

    // </editor-fold>
    // <editor-fold defaultstate="collapsed" desc="Hotel">
    public function insert_hotel($kota_tujuan, $checkin, $checkout, $jml_kamar, $jml_tamu, $chat_admin) {
        $query = $this->db->query("INSERT INTO anna_sip_hotel (
                                            order_date,
                                            kota_tujuan,
                                            checkin_date,
                                            checkout_date,
                                            jml_kamar,
                                            jml_tamu,	
                                            status,
                                            chat_admin
                                    )
                                    VALUES
                                            (
                                                    NOW(),
                                                    '$kota_tujuan',
                                                    '$checkin',
                                                    '$checkout',
                                                    '$jml_kamar',
                                                    '$jml_tamu',
                                                    'open',
                                                    '$chat_admin'
                                            )");
        return 1;
    }

    // </editor-fold>
    // <editor-fold defaultstate="collapsed" desc="Kereta">
    function insert_kereta($type, $asal_k, $tujuan_k, $dateb_k, $datep_k, $jml_dewasa_k, $jml_anak_k, $chat_admin) {
        $query = $this->db->query("INSERT INTO anna_sip_kereta (
                                            date_order,
                                            type,
                                            asal,
                                            tujuan,
                                            date_berangkat,
                                            date_pulang,
                                            jml_dewasa,
                                            jml_anak,
                                            chat_admin,
                                            status
                                    )
                                    VALUES
                                            (NOW(),
                                            '$type',
                                            '$asal_k',
                                            '$tujuan_k',
                                            '$dateb_k',
                                            '$datep_k',
                                            '$jml_dewasa_k',
                                            '$jml_anak_k',
                                            '$chat_admin',
                                            'open'
                                    )");
        return 1;
    }

    function insert_railink($type, $asal_r, $tujuan_r, $dateb_r, $datep_r, $jml_dewasa_r, $jml_anak_r, $chat_admin) {
        $query = $this->db->query("INSERT INTO anna_sip_kereta (
                                            date_order,
                                            type,
                                            asal,
                                            tujuan,
                                            date_berangkat,
                                            date_pulang,
                                            jml_dewasa,
                                            jml_anak,
                                            chat_admin,
                                            status
                                    )
                                    VALUES
                                            (NOW(),
                                            '$type',
                                            '$asal_r',
                                            '$tujuan_r',
                                            '$dateb_r',
                                            '$datep_r',
                                            '$jml_dewasa_r',
                                            '$jml_anak_r',
                                            '$chat_admin',
                                            'open'
                                    )");
        return 1;
    }

    // </editor-fold>
    // <editor-fold defaultstate="collapsed" desc="Pesawat">
    function insert_pesawat($category, $departure, $arrival, $jml_dewasa, $jml_anak, $jml_infant, $date_departure, $date_arrival, $cabin, $chat_admin) {
        $query = $this->db->query("INSERT INTO anna_sip_pesawat (
                                            date_order,
                                            category,
                                            departure,
                                            arrival,
                                            jml_dewasa,
                                            jml_anak,
                                            jml_infant,
                                            date_departure,
                                            date_arrival,
                                            cabin,
                                            chat_admin,
                                            status
                                    )
                                    VALUES
                                            (NOW(),
                                            '$category',
                                            '$departure',
                                            '$arrival',
                                            '$jml_dewasa',
                                            '$jml_anak',
                                            '$jml_infant',
                                            '$date_departure',
                                            '$date_arrival',
                                            '$cabin',
                                            '$chat_admin',
                                            'open'
                                            )");
        return 1;
    }
    // </editor-fold>

}
