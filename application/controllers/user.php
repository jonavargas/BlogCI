<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('user_model'); 
	}

	public function login(){
		$this->load->view('login');
	}

	public function validate(){		
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		if($user = $this->user_model->validate($username, $password)){
			$session = array(
				'username' => $username,
				'is_logged_in' => TRUE,				
				);
			$this->session->set_userdata($session);

			redirect(base_url());
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