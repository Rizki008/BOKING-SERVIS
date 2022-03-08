<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Diagnosa extends CI_Controller
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
            'title' => 'Data Diagnosa',
            'diagnosa' => $this->m_admin->data_diagnosa(),
            'isi' => 'layout/backend/diagnosa/v_diagnosa'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }

    // Add a new item
    public function kerusakan($id_boking)
    {
        $data = array(
            'id_boking' => $id_boking,
            'status_boking' => 3,
            'catatan' => $this->input->post('catatan')
        );
        $this->m_admin->update_boking($data);
        $this->session->set_flashdata('pesan', 'Diagnosa Di Update');
        redirect('diagnosa');
    }
}

/* End of file Diagnosa.php */
