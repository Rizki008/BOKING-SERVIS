<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Boking extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_boking');
        $this->load->model('m_pelanggan');
        $this->load->model('m_admin');
    }

    // List all your items
    public function index()
    {
        $data = array(
            'title' => 'Data Boking',
            'data_boking' => $this->m_boking->data_boking(),
            'isi' => 'layout/frontend/boking/v_data_boking'
        );
        $this->load->view('layout/frontend/v_wrapper', $data, FALSE);
    }

    // Add a new item
    public function add_boking()
    {
        $this->pelanggan_login->proteksi_halaman();
        $data = array(
            'id_pelanggan' => $this->session->userdata('id_pelanggan'),
            'no_boking' => $this->input->post('no_boking'),
            'tgl_boking' => date('Y-m-d'),
            'nama_barang' => $this->input->post('nama_barang'),
            'tipe_barang' => $this->input->post('tipe_barang'),
            'kerusakan_barang' => $this->input->post('kerusakan_barang'),
            'status_boking' => '0'
        );
        $this->m_boking->boking($data);
        $this->session->set_flashdata('pesan', 'Boking Berhasil');
        redirect('home');
    }

    public function bayar($id_boking)
    {
        $this->form_validation->set_rules('atas_nama', 'Atas Nama', 'required', array('required' => '%s Mohon untuk Diisi'));



        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/bukti_bayar';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
            $config['max_size']     = '5000';
            $this->upload->initialize($config);
            $field_name = "bukti_bayar";
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => 'Pembayaran',
                    'barang' => $this->m_boking->data_bayar(),
                    'data_boking' => $this->m_boking->data_boking(),
                    'pesanan' => $this->m_boking->detail_boking($id_boking),
                    // 'error_upload' => $this->upload->display_error(),
                    'isi' => 'layout/frontend/boking/v_bayar'
                );
                $this->load->view('layout/frontend/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = '.assets/bukti_bayar/' . $upload_data['uploads']['field_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'id_boking' => $id_boking,
                    'atas_nama' => $this->input->post('atas_nama'),
                    'vocher' => $this->input->post('vocher'),
                    'status_bayar' => 1,
                    'status_boking' => 5,
                    'bukti_bayar' => $upload_data['uploads']['file_name'],
                );
                $this->m_boking->upload_buktibayar($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil DiUpload !!!');
                redirect('boking');
                $datasatu = array(
                    'id_boking' => $id_boking,
                    'atas_nama' => $this->input->post('atas_nama'),
                    'status_bayar' => 1,
                    'bukti_bayar' => $upload_data['uploads']['file_name'],
                );
                $this->m_boking->bayar($datasatu);
                redirect('boking');
            }
        }
        $data = array(
            'title' => 'Pembayaran',
            'barang' => $this->m_boking->data_bayar(),
            'vocher' => $this->m_pelanggan->profil(),
            'data_boking' => $this->m_boking->data_boking(),
            'pesanan' => $this->m_boking->detail_boking($id_boking),
            'isi' => 'layout/frontend/boking/v_bayar'
        );
        $this->load->view('layout/frontend/v_wrapper', $data, FALSE);
    }

    public function konfirmasiservis($id_boking)
    {
        $data = array(
            'id_boking' => $id_boking,
            'status_boking' => 4,
        );
        $this->m_admin->update_boking($data);
        $this->session->set_flashdata('pesan', ' data berhasil di update');
        redirect('boking');
    }

    public function batalservis($id_boking)
    {
        $data = array(
            'id_boking' => $id_boking,
            'status_boking' => 7,
        );
        $this->m_admin->update_boking($data);
        $this->session->set_flashdata('pesan', ' data berhasil di update');
        redirect('boking');
    }
}

/* End of file Boking.php */
