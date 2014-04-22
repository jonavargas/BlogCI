<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Biography_model extends CI_Model {

	public function getBiography()
	{	
		$query = $this->db->get('bio');
		return $query->result();		
	}
}	
