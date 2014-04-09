<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {

	public function getPosts(){
		$this->db->order_by('date DESC');
		return $this->db->get('post')->result();
	}

	public function insert($table, $data){
		return $this->db->insert($table, $data);
	}

	public function validate_credentials($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('users')->row();
	}

	public function getPost($id){
		$this->db->where('id', $id);
		return $this->db->get('post')->row();
	}

	public function getComments($id){
		$this->db->where('id_blog', $id);
		return $this->db->get('comments')->result();
	}
}
