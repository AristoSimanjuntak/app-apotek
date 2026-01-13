<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("form_validation");
       

    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');


        if ($this->form_validation->run() == false) {
            $this->load->view('V_login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where("user", ['username' => $username])->row_array();

        if ($user['is_active'] == 1) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                    'password' => $user['password'],
                    'role_id' => $user['role_id'],
                ];
                $this->session->set_userdata('logged_in', $data);
                redirect('C_dashboard');
            } else {
                redirect('C_login/index');
            }
        }
    }

    public function logout()
    {
        session_destroy();
        $this->load->view('V_login');
    }
}

