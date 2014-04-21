<?php
 
class MantComments extends CI_Controller {
 
	public function __construct() {
		parent::__construct();
		$this->load->model('mantComments_model');
	}
 
	function maintenance() {
		$comments = $this->mantComments_model->getData();		
		$data['comments'] = $comments;
		$this->load->view('mantenance', $data);
	}

	function getMessages() {
		$data['comment'] = $this->mantComments_model->getMessage($_POST['edit']);		
		$this->load->view('editComment', $data);
	}

	function edit() {
		$data['id'] = $_POST['idComment'];
		$data['creator'] = $_POST['txtCreator'];
		$data['status'] = $_POST['txtStatus'];	
		$data['comment'] = $_POST['txtComment'];
		$this->mantComments_model->update($data);
		$this->maintenance();
	}

	function delete($id) {
		$this->mantComments_model->deleteComments($id);
		$this->maintenance();
	}

} 
?>