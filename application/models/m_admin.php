<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_admin extends CI_Model {
	
	public function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	


}