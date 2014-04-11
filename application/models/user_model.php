<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public function validate($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('users')->row();
	}
}