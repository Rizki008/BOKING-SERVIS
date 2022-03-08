<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_register');
        $this->load->model('m_auth');
        $this->load->model('m_pelanggan');
    }

    // List all your items
    public function register()
    {
        $this->form_validation->set_rules('nama', 'Nama Pelanggan', 'required|regex_match[/^([a-zA-Z]|\s)+$/]', array(
            'required' => '%s Mohon Untuk Diisi !!!',
            'regex_match' => '%s Mohon Inputkan Hurup!!!'
        ));
        $this->form_validation->set_rules('no_tlpn', 'Nomor Telpon', 'required|numeric|min_length[11]|max_length[13]', array(
            'required' => '%s Mohon Untuk Diisi !!!',
            'min_length' => '%s Minimal 11 angka !!!',
            'max_length' => '%s Maksimal 13 angka !!!',
            'numeric' => '%s Mohon Inputkan Angka !!!'
        ));
        $this->form_validation->set_rules('alamat', 'alamat Pelanggan', 'required', array(
            'required' => '%s Mohon Untuk Diisi !!!'
        ));
        $this->form_validation->set_rules('email', 'Email Pelanggan', 'required|is_unique[pelanggan.email]', array(
            'required' => '%s Mohon Untuk Diisi !!!',
            'is_unique' => '%s Email Sudah Terdaptar'
        ));
        $this->form_validation->set_rules('password', 'Password Pelanggan', 'required|min_length[8]', array(
            'required' => '%s Mohon Untuk Diisi !!!',
            'min_length' => '%s Minimal 8 karakter !!!'
        ));
        $this->form_validation->set_rules('ulangi_password', 'Ulangi Password Pelanggan', 'required|matches[password]', array(
            'required' => '%s Mohon Untuk Diisi !!!',
            'matches' => '%s Password Tidak Sama !!!'
        ));


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Regiseter Pelanggan',
                'isi' => 'layout/frontend/register/v_register'
            );
            $this->load->view('layout/frontend/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'no_tlpn' => $this->input->post('no_tlpn'),
                'alamat' => $this->input->post('alamat'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'vocher' => 5000,
            );
            $this->m_register->register($data);
            $this->session->set_flashdata('pesan', 'Register Berhasil, Silahkan Untuk Login!!!');
            redirect('pelanggan/login');
        }
    }

    public function login()
    {
        $this->form_validation->set_rules('nama', 'Username', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));

        if ($this->form_validation->run() == TRUE) {
            $nama = $this->input->post('nama');
            $password = $this->input->post('password');
            $this->pelanggan_login->login($nama, $password);
        }
        $data = array(
            'title' => 'Login Pelanggan',
            'isi' => 'layout/frontend/login/v_login_pelanggan'
        );
        $this->load->view('layout/frontend/v_wrapper', $data, FALSE);
    }

    public function logout()
    {
        $this->pelanggan_login->logout();
    }

    public function akun()
    {
        //proteksi halaman
        // $this->pelanggan_login->proteksi_halaman();
        $data = array(
            'title' => 'Akun Saya',
            'profil' => $this->m_pelanggan->profil(),
            'total_boking' => $this->m_pelanggan->total_boking(),
            'total_transaksi' => $this->m_pelanggan->total_transaksi(),
            'isi' => 'layout/frontend/login/v_akun'
        );
        $this->load->view('layout/frontend/v_wrapper', $data, FALSE);
    }
}

/* End of file Pelanggan.php */
