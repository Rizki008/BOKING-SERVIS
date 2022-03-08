<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Boking_masuk extends CI_Controller
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
            'title' => 'Data Boking',
            'boking_masuk' => $this->m_admin->boking_masuk(),
            'isi' => 'layout/backend/boking/v_boking_masuk'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }

    // Add a new item
    public function ambil_barang($id_boking)
    {
        $data = array(
            'id_boking' => $id_boking,
            'status_boking' => 1,
        );
        $this->m_admin->update_boking($data);
        $this->session->set_flashdata('pesan', 'Pengecekan Diagnosa kerusakan');
        redirect('boking_masuk/pickup');
    }
    public function kirim_barang_batal_pesan($id_boking)
    {
        $data = array(
            'id_boking' => $id_boking,
            'status_boking' => 8,
        );
        $this->m_admin->update_boking($data);
        $this->session->set_flashdata('pesan', 'Pengecekan Diagnosa kerusakan');
        redirect('boking_masuk/pickup');
    }

    public function pickup()
    {
        $data = array(
            'title' => 'Data Pickup',
            'data_pickup' => $this->m_admin->data_pickup(),
            'data_ambil' => $this->m_admin->data_ambil(),
            'isi' => 'layout/backend/boking/v_pickup'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }
    public function update_pickup($id_boking)
    {
        $data = array(
            'id_boking' => $id_boking,
            'status_boking' => 2
        );
        $this->m_admin->update_boking($data);
        $this->session->set_flashdata('pesan', 'Barang Akan Diambil');
        redirect('diagnosa');
    }

    public function pembayaran()
    {
        $data = array(
            'title' => 'Dashboard',
            'data_biaya' => $this->m_admin->data_biaya(),
            'isi' => 'layout/backend/boking/v_pembayaran'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }
    public function update_bayar($id_boking)
    {
        $data = array(
            'id_boking' => $id_boking,
            'status_boking' => 4,
            'harga_bayar' => $this->input->post('harga_bayar')
        );
        $this->m_admin->update_boking($data);
        $this->session->set_flashdata('pesan', 'Barang Akan Diambil');
        redirect('boking_masuk/pickup');
    }

    public function proses_pembayaran()
    {
        $data = array(
            'title' => 'Dashboard',
            'data_bayar' => $this->m_admin->data_bayar(),
            'data_ambil' => $this->m_admin->data_ambil(),
            'isi' => 'layout/backend/boking/v_data_bayar'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }

    public function proses_kirim()
    {
        $data = array(
            'title' => 'Dashboard',
            'data_ambil' => $this->m_admin->data_ambil(),
            'isi' => 'layout/backend/boking/v_kirim'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }
    public function proses_kirim_barang()
    {
        $data = array(
            'title' => 'Dashboard',
            'boking_batal' => $this->m_admin->boking_batal(),
            'isi' => 'layout/backend/boking/v_batal_servis'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }
    public function update_kirim($id_boking)
    {
        $data = array(
            'id_boking' => $id_boking,
            'status_boking' => 6
        );
        $this->m_admin->update_boking($data);
        $this->session->set_flashdata('pesan', 'Barang Akan Diambil');
        redirect('diagnosa');
    }
}

/* End of file Boking_masuk.php */
