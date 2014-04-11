<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('post_model');		
	}
	
	public function index(){
		$data['posts'] = $this->post_model->getPosts();		// obtiene los posts
		$this->load->view('showPosts', $data);
	}

	public function newPost(){
		$this->load->view('newPost');
	}

	public function insertPost(){
		date_default_timezone_set("America/Costa_Rica");
		$post = array(
			'postLink'  => permaLink($this->input->post('title')),
			'creator' => $this->session->userdata('username'),
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'date' => date('Y-m-d H:i:s')
			);		
		$this->post_model->insert('post', $post);

		redirect(base_url());
	}

	public function viewPost(){
		$this->load->model('comments_model');
		$postId = $this->uri->segment(3);
		$data['post'] = $this->post_model->getPost($postId);
		$data['comments'] = $this->comments_model->getComments($postId);
		$this->load->view('comments', $data);
	}
}