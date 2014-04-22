<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments_model extends CI_Model {

	public function insert($table, $data){
		return $this->db->insert($table, $data);
	}
	
	//Se optinen los comentarios que sean pertenecientes al id del post elegido.
	public function getComments($id){
		$this->db->where('id_post', $id);
		$this->db->order_by("date", "desc"); 
		return $this->db->get('comments')->result();
	}

	//Se obtienen los comentarios deshabilitados, y son ordenados por fecha en orden desendente.
	public function selectComments()
	{	
		$this->db->order_by("date", "desc"); 
		$query = $this->db->get('comments');
		return $query->result_array();		
	}
	
}	
