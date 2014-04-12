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
		
		$this->load->library('email', '','email');
		$this->email->from('jvargasa91@gmail.com', 'Jonathan Blog');
		$this->email->to('jonavargas2012@gmail.com');
		$this->email->subject('New comment added!');
		$this->email->message('<h4>It added a new comment new comment:</h4>' .
	    '<strong>Author: </strong>'. $comment[creator] .'<br />'. '<br />'.'<br />'.
		'<strong>Comment: </strong>' . $comment[comment] .'<br />'.'<br />'.
		'<strong>Date: </strong>'.$comment[date] . '<hr />');

		if($this->email->send()){
		}
		else{
			show_error($this->email->print_debugger());
		}

		$this->comments_model->insert('comments', $comment);
		redirect(base_url() . 'post/viewPost/' . $id_post);
	}

	public function disable(){		
		$data['status'] = 'disable';
		$data['comments'] = $this->comments_model->selectComments();
		$this->load->view('disableComments', $data);
	}	

}