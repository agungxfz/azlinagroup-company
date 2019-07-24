<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_article extends CI_Model {

    function static_article($location) {
        $query = $this->db->query("SELECT * FROM anna_article WHERE article_location = '$location' AND article_category = 'static'");
        $num = $query->num_rows();
        if ($num > 0) {
            foreach ($query->result() as $row) {
                return $row;
            }
        } else {
            return 0;
        }
    }

    function dynamic_article($location) {
        $query = $this->db->query("SELECT * FROM anna_article WHERE article_location = '$location' AND article_category = 'dynamic'");
        $num = $query->num_rows();
        if ($num > 0) {
            foreach ($query->result() as $row) {
                return $row;
            }
        } else {
            return 0;
        }
    }

    function load_dynamic() {
        $query = $this->db->query("SELECT * FROM anna_article WHERE article_category = 'dynamic'");
        echo json_encode($query->result());
    }

    function load_static() {
        $query = $this->db->query("SELECT * FROM anna_article WHERE article_category = 'static'");
        echo json_encode($query->result());
    }

    function whr_slider() {
        $query = $this->db->query("SELECT * FROM anna_whr_gallery WHERE is_active = 1");
        return $query->result_array();
    }

}
