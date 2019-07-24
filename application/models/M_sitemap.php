<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_sitemap extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function sitemap() {
        $this->db->select('id_menu, create_date');
        $this->db->from('anna_sitemap');
        $this->db->order_by('id', "ASC");
        $query = $this->db->get();
        return $query->result();
    }

}
