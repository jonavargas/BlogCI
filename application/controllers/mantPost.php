<?php
 
class MantPost extends CI_Controller {
 
	public function __construct() {
		parent::__construct();
		$this->load->model('mantPost_model');
	}
 
	function maintenance() {
		$post = $this->mantPost_model->getData();		
		$data['post'] = $post;
		$this->load->view('mantPost', $data);
	}

	function getPost() {
		$data['data'] = $this->mantPost_model->getPost($_POST['edit']);		
		$this->load->view('editPost', $data);
	}

	function edit() {
		$data['id'] = $_POST['idPost'];
		$data['creator'] = $_POST['txtCreator'];
		$data['title'] = $_POST['txtTitle'];	
		$data['content'] = $_POST['txtContent'];
		$this->mantPost_model->update($data);
		$this->maintenance();
	}

	function delete($id) {
		$this->mantPost_model->deletePosts($id);
		$this->maintenance();
	}

} 
?>