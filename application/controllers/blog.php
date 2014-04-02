<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start();
class Blog extends CI_Controller
{  
    function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['user'] = $session_data['user'];
            $this->load->view('blog', $data);
        } else {
            redirect('login', 'refresh');
        }
    }
    
    function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('blog', 'refresh');
    }
}
?>