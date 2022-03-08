<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_perangkat');
    }

    // List all your items
    public function index($offset = 0)
    {
        $data = array(
            'title' => 'Home',
            'title1' => 'Perangkat Keras',
            'perangkat' => $this->m_perangkat->perangkat(),
            'isi' => 'v_home'
        );
        $this->load->view('layout/frontend/v_wrapper', $data, FALSE);
    }
}

/* End of file Home.php */
