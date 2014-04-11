<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('comments_model');		
	}

	public function comment(){				
		date_default_timezone_set("America/Costa_Rica");
		$id_post = $this->input->post('id_post');
		$comment = array(
			'id_post' => $id_post,
			'creator' => $this->input->post('creator'),
			'status' => ('disable'),	
			'comment' => $this->input->post('comment'),
			'date' => date('Y-m-d h:i:s')
			);

		$this->comments_model->insert('comments', $comment);

		redirect(base_url() . 'post/viewPost/' . $id_post);
	}

	public function disable(){		
		$data['status'] = 'disable';
		$data['comments'] = $this->comments_model->selectComments();
		$this->load->view('disableComments', $data);
	}	

}