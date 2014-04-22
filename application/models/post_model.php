<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_model extends CI_Model {

	public function getPosts(){
		$this->db->order_by("date", "desc"); 

		return $this->db->get('post')->result();
	}

	public function insert($table, $data){
		return $this->db->insert($table, $data);
	}

	public function getPost($id){
		$this->db->where('id', $id);
		return $this->db->get('post')->row();
	}
}