<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('scp/home');
        }
    }

    public function index() {
        $arr['page'] = 'user';
        $this->load->view('scp/vwManageUser',$arr);
    }

    public function add_user() {
        $arr['page'] = 'user';
        $this->load->view('scp/vwAddUser',$arr);
    }

     public function edit_user() {
        $arr['page'] = 'user';
        $this->load->view('scp/vwEditUser',$arr);
    }
    
     public function block_user() {
        // Code goes here
    }
    
     public function delete_user() {
        // Code goes here
    }
    
    
    
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */