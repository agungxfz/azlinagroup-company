<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

    function login($username, $password) {
        $query = $this->db->query("SELECT * FROM anna_user WHERE username = '$username' AND password = '$password'");
        $num = $query->num_rows();
        if ($num > 0) {
            foreach ($query->result() as $row) {
                return $row;
            }
        } else {
            return 0;
        }
    }

    function profile($username) {
        $query = $this->db->query("SELECT * FROM anna_user WHERE username = '$username'");

        $num = $query->num_rows();
        if ($num > 0) {
            foreach ($query->result() as $row) {
                return $row;
            }
        } else {
            return 0;
        }
    }

    function sip_ppob() {
        $date_start = $this->input->get('ds');
        $date_end = $this->input->get('de');

        $query = $this->db->query("SELECT
                                        DATE_FORMAT(date_order, '%b') bulan,
                                        date_order,
                                        nomor_idpel,
                                        jenis_produk,
                                        status_order,
                                        chat_admin,
                                        layanan
                                FROM
                                        anna_sip_ppob
                                WHERE
                                        DATE_FORMAT(date_order, '%Y-%m-%d') BETWEEN '$date_start'
                                AND '$date_end'
                                ORDER BY
                                        date_order DESC");

        echo json_encode($query->result());
    }

    function sip_pulsa($date_start, $date_end) {
        $query = $this->db->query("SELECT
                                        *
                                FROM
                                        anna_sip_pulsa
                                WHERE
                                        DATE_FORMAT(order_date, '%Y-%m-%d') BETWEEN '$date_start'
                                AND '$date_end'
                                ORDER BY
                                        order_date DESC");

        return $query->result();
    }

    function sip_pesawat($date_start, $date_end) {
        $query = $this->db->query("SELECT
                                        *
                                FROM
                                        anna_sip_pesawat
                                WHERE
                                        DATE_FORMAT(date_order, '%Y-%m-%d') BETWEEN '$date_start'
                                AND '$date_end'
                                ORDER BY
                                        date_order DESC");

        return $query->result();
    }

    function sip_kereta($date_start, $date_end) {
        $query = $this->db->query("SELECT
                                        *
                                FROM
                                        anna_sip_kereta
                                WHERE
                                        DATE_FORMAT(date_order, '%Y-%m-%d') BETWEEN '$date_start'
                                AND '$date_end'
                                ORDER BY
                                        date_order DESC");

        return $query->result();
    }

    function sip_hotel($date_start, $date_end) {
        $query = $this->db->query("SELECT
                                        *
                                FROM
                                        anna_sip_hotel
                                WHERE
                                        DATE_FORMAT(order_date, '%Y-%m-%d') BETWEEN '$date_start'
                                AND '$date_end'
                                ORDER BY
                                        order_date DESC");

        return $query->result();
    }

    function rpt_hotel_month() {
        $thn = $this->input->post('tahun');

        if (empty($thn)) {
            $tahun = date('Y');
        } else {
            $tahun = $thn;
        }
        $query = $this->db->query("SELECT
                                            DATE_FORMAT(order_date, '%m') AS bulan,
                                            count(*) AS jumlah
                                    FROM
                                            anna_sip_hotel
                                    WHERE
                                            DATE_FORMAT(order_date, '%Y') = '$tahun'
                                    GROUP BY
                                            DATE_FORMAT(order_date, '%m'),
                                            DATE_FORMAT(order_date, '%Y')");
        foreach ($query->result() as $value) {
            $bulan = $value->bulan;
            $jumlah = $value->jumlah;

            $hasil['b' . $bulan] = array(
                'bulan' => $bulan,
                'jumlah' => $jumlah
            );
        }

        return json_encode($hasil);
    }

    function rpt_pesawat_month() {
        $thn = $this->input->post('tahun');

        if (empty($thn)) {
            $tahun = date('Y');
        } else {
            $tahun = $thn;
        }
        $query = $this->db->query("SELECT
                                            DATE_FORMAT(date_order, '%m') AS bulan,
                                            count(*) AS jumlah
                                    FROM
                                            anna_sip_pesawat
                                    WHERE
                                            DATE_FORMAT(date_order, '%Y') = '$tahun'
                                    GROUP BY
                                            DATE_FORMAT(date_order, '%m'),
                                            DATE_FORMAT(date_order, '%Y')");
        return $query->result();
    }

    function rpt_kereta_month() {
        $thn = $this->input->post('tahun');

        if (empty($thn)) {
            $tahun = date('Y');
        } else {
            $tahun = $thn;
        }
        $query = $this->db->query("SELECT
                                            DATE_FORMAT(date_order, '%m') AS bulan,
                                            count(*) AS jumlah
                                    FROM
                                            anna_sip_kereta
                                    WHERE
                                            DATE_FORMAT(date_order, '%Y') = '$tahun'
                                    GROUP BY
                                            DATE_FORMAT(date_order, '%m'),
                                            DATE_FORMAT(date_order, '%Y')");
        return $query->result();
    }

    function rpt_ppob_month($date_from, $date_to) {
        $query = $this->db->query("SELECT
                                            REPLACE (
                                                    DATE_FORMAT(date_order, '%m'),
                                                    0,
                                                    ''
                                            ) AS bulan,
                                            layanan,
                                            count(*) AS jumlah
                                    FROM
                                            anna_sip_ppob
                                    WHERE
                                            DATE_FORMAT(date_order, '%Y-%m-%d') BETWEEN '$date_from' AND '$date_to'
                                    GROUP BY
                                            DATE_FORMAT(date_order, '%m'),
                                            layanan,
                                            DATE_FORMAT(date_order, '%Y')");

        foreach ($query->result() as $value) {
            $bulan = $value->bulan;
            $layanan = $value->layanan;
            $jumlah = $value->jumlah;

            $hasil[$bulan][$layanan] = array(
                'bulan' => $bulan,
                'layanan' => $layanan,
                'jumlah' => $jumlah
            );
        }

        echo json_encode($hasil);
    }

}
