<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('blog_model');		
	}
	
	public function index(){
		$data['posts'] = $this->blog_model->getPosts();		// obtiene los posts
		$this->load->view('showPosts', $data);
	}

	public function post(){
		$this->load->view('newPost');
	}

	public function insertPost(){
		date_default_timezone_set("America/Costa_Rica");
		$post = array(
			'blogLink'  => permaLink($this->input->post('title')),
			'creator' => $this->session->userdata('username'),
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'date' => date('Y-m-d H:i:s')
			);		
		$this->blog_model->insert('post', $post);

		redirect(base_url());
	}

	public function view(){
		$postId = $this->uri->segment(3);
		$data['post'] = $this->blog_model->getPost($postId);
		$data['comments'] = $this->blog_model->getComments($postId);
		$this->load->view('comments', $data);
	}

	public function comment(){				
		date_default_timezone_set("America/Costa_Rica");
		$id_blog = $this->input->post('id_blog');
		$comment = array(
			'id_blog' => $id_blog,
			'creator' => $this->input->post('creator'),
			'status' => ('disable'),	
			'comment' => $this->input->post('comment'),
			'date' => date('Y-m-d h:i:s')
			);

		$this->blog_model->insert('comments', $comment);

		redirect(base_url() . 'home/view/' . $id_blog);
	}
}