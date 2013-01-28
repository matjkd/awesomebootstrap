<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Themes_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
	
	
	function get_themes($quantity = NULL) {
		
	
        $query = $this->db->get('themes');
        if ($query->num_rows > 0) {
            return $query->result();
        }
		
		
	}
	
}