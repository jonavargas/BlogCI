<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class MantComments_model extends CI_Model {
 
	public function __construct() {
		parent::__construct(); 
	}
 
	function getData() {
		$this->db->order_by("date", "desc"); 
		$comments = $this->db->get('comments');
		return $comments->result(); 
	}

	function getMessage($id) {    		
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
		$this->db->where('id', $data['id']);		
		$this->db->update('comments');
	}

	function deleteComments ($id) {
		$this->db->where('id', $id);
		$this->db->delete('comments');
	}



	//////////////////////////////////////////////////////////////////////

	function getNumRows()
    {
        $query = $this->db->get('comments');
        return  $query->num_rows() ;
    }

	function totalPaged($per_page,$segment) 
        {

            $query = $this->db->get('comments',$per_page,$segment);
            if($query->num_rows()>0)
            {
                foreach($query->result() as $row)
                {
                    $data[] = $row;
                }
                    return $data;
            }
    }

	/////////////////////////////////////////////////////////////////////

}