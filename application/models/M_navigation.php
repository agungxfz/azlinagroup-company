<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_navigation extends CI_Model {

    public function airport_list_dom() {
        $query = $this->db->query("SELECT
                                        *
                                FROM
                                        anna_airport_list
                                WHERE
                                        category = 'domestic'");

//        echo '{"flight":' . json_encode($query->result()) . '}';
        return $query->result();
    }

    public function airport_list_int() {
        $query = $this->db->query("SELECT
                                        *
                                FROM
                                        anna_airport_list");

        return $query->result();
    }

}
