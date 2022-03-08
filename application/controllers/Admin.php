<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
    }

    // List all your items
    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'isi' => 'v_admin'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }
}

/* End of file Admin.php */
