<?php
 
class MantComments extends CI_Controller {
 
	public function __construct() {
		parent::__construct();
		$this->load->model('mantComments_model');
	}
 


	////////////////////////////////////////////////////////////////////////////////


	function maintenance() {
		$comments = $this->mantComments_model->getData();
		$data['comments'] = $comments;
		$this->load->view('mantenance', $data);
	}

	function accion() {
		//cargamos el modelo y obtenemos la información del contacto seleccionado.
		//$this->load->model('mantComments_model');
		$data['comment'] = $this->mantComments_model->obtenerContacto($_POST['edit']);
		//cargamos la vista para editar la información, pasandole dicha información.
		$this->load->view('editComment', $data);
	}

	function edit() {
		//recogemos los datos por POST
		$data['id'] = $_POST['idComment'];
		$data['creator'] = $_POST['txtCreator'];
		$data['status'] = $_POST['txtStatus'];	
		$data['comment'] = $_POST['txtComment'];
		//cargamos el modelo y llamamos a la función update()
		//$this->load->model('mantComments_model');
		$this->mantComments_model->update($data);
		//volvemos a cargar la primera vista
		$this->maintenance();
	}

	////////////////////////////////////////////////////////////////////////////////

	/*

	function index() {
		//$this->load->model('mantComments_model'); //cargamos el modelo

		//$data['page_title'] = "¡Copy Paste Reference! - Tutorial CodeIgniter";

		//Obtener datos de la tabla 'contacto'
		$comments = $this->mantComments_model->getData(); //llamamos a la función getData() del modelo creado anteriormente.

		$data['comments'] = $comments;

		//load de vistas
		$this->load->view('mantenance', $data); //llamada a la vista, que crearemos posteriormente
	}

	function accion() {
		//cargamos el modelo y obtenemos la información del contacto seleccionado.
		//$this->load->model('mantComments_model');
		$data['comment'] = $this->mantComments_model->obtenerContacto($_POST['edit']);
		//cargamos la vista para editar la información, pasandole dicha información.
		$this->load->view('editComment', $data);
	}

	function edit() {
		//recogemos los datos por POST
		$data['id'] = $_POST['id'];
		$data['creator'] = $_POST['txtCreator'];
		$data['status'] = $_POST['txtStatus'];	
		$data['comment'] = $_POST['txtComment'];
		//cargamos el modelo y llamamos a la función update()
		//$this->load->model('mantComments_model');
		$this->mantComments_model->update($data);
		//volvemos a cargar la primera vista
		$this->index();
	}

	*/

} 
?>