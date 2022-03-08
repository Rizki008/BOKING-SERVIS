<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan_login
{
	protected $ci;

	public function __construct()
	{
		$this->ci = &get_instance();
		$this->ci->load->model('m_auth');
	}

	public function login($nama, $password)
	{
		$cek = $this->ci->m_auth->login_pelanggan($nama, $password);
		if ($cek) {
			$id_pelanggan = $cek->id_pelanggan;
			$nama = $cek->nama;
			$email = $cek->email;
			$password = $cek->password;

			//session
			$this->ci->session->set_userdata('id_pelanggan', $id_pelanggan);
			$this->ci->session->set_userdata('nama', $nama);
			$this->ci->session->set_userdata('email', $email);
			$this->ci->session->set_userdata('password', $password);
			redirect('home');
		} else {
			$this->ci->session->set_flashdata('pesan', 'Username atau password salah');
			redirect('pelanggan/login');
		}
	}

	public function proteksi_halaman()
	{
		if ($this->ci->session->userdata('nama') == '') {
			$this->ci->session->set_flashdata('error', 'Anda Belum Login');
			redirect('pelanggan/login');
		}
	}

	public function logout()
	{
		$this->ci->session->unset_userdata('id_pelanggan');
		$this->ci->session->unset_userdata('email');
		$this->ci->session->unset_userdata('nama');
		$this->ci->session->set_flashdata('pesan', 'Berhasil LogOut!!!!');
		redirect('pelanggan/login');
	}
}
