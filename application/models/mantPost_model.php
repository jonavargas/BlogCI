<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class MantPost_model extends CI_Model {
 
	public function __construct() {
		parent::__construct(); 
	}
 
	function getData() {
		$this->db->order_by("date", "desc"); 
		$post = $this->db->get('post');
		return $post->result(); 
	}

	function getPost($id) {
		$this->db->order_by("date", "desc"); 
		$this->db->select('id, creator, title, content');
		$this->db->from('post');
		$this->db->where('id = ' . $id);
		$post = $this->db->get();
		return $post->result();
	}

	function update($data) {
		$this->db->set('creator', $data['creator']);
		$this->db->set('title', $data['title']);
		$this->db->set('content', $data['content']);
		$this->db->where('id', $data['id']); 
		$this->db->update('post');
	}

	function deletePosts ($id) {		
		$this->db->where('id_post', $id);
		$this->db->delete('comments');
		$this->db->where('id', $id);
		$this->db->delete('post');
	}

}