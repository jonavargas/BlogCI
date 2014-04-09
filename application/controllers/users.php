<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('blog_model'); 
	}

	public function signin(){
		$this->load->view('login');
	}

	public function validateLogin(){		
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		if($user = $this->blog_model->validate_credentials($username, $password)){
			$session = array(
				'username' => $username,
				'is_logged_in' => TRUE,				
				);
			$this->session->set_userdata($session);

			//redirect(base_url());
			$this->load->view('newPost'); //////////////// crar vista admind!!!
		}
		else{
			$this->load->view('login', array('error'=>TRUE));
		}

	}

	public function logout(){
		if($this->session->userdata('is_logged_in'))
			$this->session->sess_destroy();		
		redirect(base_url());			
	}

}