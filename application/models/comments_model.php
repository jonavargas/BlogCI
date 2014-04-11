<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments_model extends CI_Model {

	public function insert($table, $data){
		return $this->db->insert($table, $data);
	}
	
	public function getComments($id){
		$this->db->where('id_post', $id);
		return $this->db->get('comments')->result();
	}

	public function selectComments()
	{	
		$this->db->order_by("id_post","date", "desc"); // ordena los datos por id_post y se basa en la fecha mas antigua.
		$query = $this->db->get('comments');
		return $query->result_array();		
	}

}	