<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class MantComments_model extends CI_Model {
 
	public function __construct() {
		parent::__construct(); 
	}
 
	function getData() {
		$comments = $this->db->get('comments'); //obtenemos la tabla 'contacto'. db->get('nombre_tabla') equivale a SELECT * FROM nombre_tabla.
		return $comments->result(); //devolvemos el resultado de lanzar la query.
	}

	function obtenerContacto($id) {
		$this->db->select('id, creator, status, comment');
		$this->db->from('comments');
		$this->db->where('id = ' . $id);
		$comments = $this->db->get();
		return $comments->result();
	}

	function update($data) {
		$this->db->set('creator', $data['creator']);
		$this->db->set('status', $data['status']);
		$this->db->set('comment', $data['comment']);
		$this->db->where('id', $data['id']); // problema con el id!!!!!!!!!!!!!!!!
		$this->db->update('comments');
	}

}