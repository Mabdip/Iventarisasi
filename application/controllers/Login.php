<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_m');
    }

    function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

            $where =  array('username' => $username ,
                            'password' => md5($password) 
                           );
            $cek = $this->login_m->cek_login('user', $where)->num_rows();

        if ($cek > 0) 
        {
            $data_session = array('nama' => $username,
                                  'status' => 'login'
                                 );
            $this->session->set_userdata( $data_session );
            redirect(site_url('admin'));
            
        }
        else 
        {
            $this->session->set_flashdata( 'msg', 'Username dan Password Salah !!!' );
            redirect(site_url('login'));
            
        }

    }
    
    public function index()
    {
        $data['judul'] = 'Login';
        $data['content'] = 'login/login';
        $this->load->view('login/template/layout', $data);
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }

}

/* End of file Login.php */
