<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class MantComments extends CI_Controller {
 
	public function __construct() {
		parent::__construct();
		$this->load->model('mantComments_model');
	}
	
	function index()
    {
        $data['title'] = 'MantComments';
        $pages= 4; 
        $this->load->library('pagination');
        $config['base_url'] = base_url().'mantComments/maintenance/'; 
        $config['total_rows'] = $this->mantComments_model->getNumRows();
        $config['per_page'] = $pages; 
        $config['num_links'] = 4; 
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config["uri_segment"] = 3;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['full_tag_open'] = '<div id="pag">';
        $config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);       
        $data["comments"] = $this->mantComments_model->totalPaged($config['per_page'],$this->uri->segment(3));            
                
        $this->load->view('mantenance', $data);
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