<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
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


	/////////////////////////////////////////////////////////////////////////////////////////





	function index()
    {
        $data['title'] = 'MantComments';
        $pages= 4; //Número de registros mostrados por páginas
        $this->load->library('pagination'); //Cargamos la librería de paginación
        $config['base_url'] = base_url().'mantComments/maintenance/'; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
        $config['total_rows'] = $this->mantComments_model->getNumRows();//calcula el número de filas  
        $config['per_page'] = $pages; //Número de registros mostrados por páginas
        $config['num_links'] = 4; //Número de links mostrados en la paginación
        $config['first_link'] = 'First';//primer link
        $config['last_link'] = 'Last';//último link
        $config["uri_segment"] = 3;//el segmento de la paginación
        $config['next_link'] = 'Next';//siguiente link
        $config['prev_link'] = 'Prev';
        $config['full_tag_open'] = '<div id="pag">';
        $config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);       
        $data["comments"] = $this->mantComments_model->totalPaged($config['per_page'],$this->uri->segment(3));            
                
                //cargamos la vista y el array data
        $this->load->view('mantenance', $data);
    }





	/////////////////////////////////////////////////////////////////////////////////////////
} 
?>