<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function login($post){
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where('username', $post['username']);
		$this->db->where('password', sha1($post['password']));
		$query = $this->db->get();
		return $query;
	}	

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */