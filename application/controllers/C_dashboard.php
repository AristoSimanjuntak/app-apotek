<?php

class C_dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
        // $this->load->model(array('M_home'));

       // if (!empty($this->session->userdata ('logged_in')['akses_ApotekSambu'])) {
        if (!empty($this->session->userdata ('logged_in')['akses_ApotekSambu'])) {
            $this->session->unset_userdata('logged_in');
            session_destroy();
        }
    }

    function index()
    {
        $session_data            = $this->session->userdata('logged_in');

        if ($this->session->userdata('logged_in')) {
            $session_data            = $this->session->userdata('logged_in');
            // $data['id']          = $session_data['id'];
            $data['username']        = $session_data['username'];
            $data['password']        = $session_data['password'];
            $data['Titel']           = 'Dashboard';


            // $menus                  = $this->M_menu->menus($LevelUser);
            // $data2                  = array('menus' => $menus);

            // $user_ol                = $this->M_home->get_dt_user_ol();
            // $dt_user_ol             = array('user_ol' => $user_ol);

            // $list_form              = $this->M_home->get_form_list($LevelUser);
            // $dt_list_form           = array('list_form' => $list_form);


            // $data['jml_ol']         = count($user_ol);


            $this->load->view('V_dashboard', array_merge($data));
        } else {
            //Jika tidak ada session di kembalikan ke halaman login
            redirect('C_login', 'refresh');
        }
    }
}
