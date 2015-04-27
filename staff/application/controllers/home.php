<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
		
		//$this->output->enable_profiler(TRUE);
    }

    public function index() {
         if ($this->session->userdata('is_user_login')) {
            redirect('dashboard');
        } else {
			$this->load->view('vwLogin');
        }
    }
	
	public function login()
	{
		$this->load->view('vwLogin');
	}

    public function do_login() {

        if ($this->session->userdata('is_user_login')) {
            redirect('home/registration');
        } else {
            $user = $_POST['username'];
            $password = $_POST['password'];

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('vwLogin');
            } else {
                //$salt = '5&JDDlwz%Rwh!t2Yg-Igae@QxPzFTSId';
                //$enc_pass  = md5($salt.$password);
                $enc_pass = sha1($password);
				$sql = "SELECT * FROM skck_administrators WHERE staff_username = ? AND staff_password = ?";
                $val = $this->db->query($sql,array($user ,$enc_pass ));

                if ($val->num_rows) {
                    foreach ($val->result_array() as $recs => $res) {
                        $this->session->set_userdata(array(
                            'id' => $res['id'],
                            'staff_code' => $res['staff_code'],
                            'staff_username' => $res['staff_username'],                            
                            'is_user_login' => true,
                            'staff_role' => $res['staff_role']
                                )
                        );
                    }
					
					$this->db->query("UPDATE skck_administrators SET staff_last_login = NOW() WHERE id = ".$res['id']);
					
                    redirect('registration');
                } else {
                    $err['error'] = '<strong>Access Denied</strong> Invalid Username/Password ';
                    $this->load->view('vwLogin', $err);
                }
            }
        }
           }

        
    public function logout() {
		$this->db->query("UPDATE skck_administrators SET staff_last_logout = NOW() WHERE id = ".$this->session->userdata('id'));
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('staff_username');
        $this->session->unset_userdata('staff_code');
        $this->session->unset_userdata('staff_role');
        $this->session->unset_userdata('is_user_login');   
        $this->session->sess_destroy();
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
        redirect('home/login', 'refresh');
    }

    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */