<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_login
{
	protected $ci;

	public function __construct()
	{
		$this->ci = &get_instance();
		$this->ci->load->model('m_auth');
	}

	public function login($nama, $password)
	{
		$cek = $this->ci->m_auth->login_user($nama, $password);
		if ($cek) {
			$nama = $cek->nama;
			$email = $cek->email;
			$password = $cek->password;

			//session
			$this->ci->session->set_userdata('nama', $nama);
			$this->ci->session->set_userdata('email', $email);
			$this->ci->session->set_userdata('password', $password);
			redirect('admin');
		} else {
			$this->ci->session->set_flashdata('pesan', 'Username atau password salah');
			redirect('auth/login_user');
		}
	}

	public function proteksi_halaman()
	{
		if ($this->ci->session->userdata('nama') == '') {
			$this->ci->session->set_flashdata('error', 'Anda Belum Login');
			redirect('auth/login_user');
		}
	}

	public function logout()
	{
		$this->ci->session->unset_userdata('email');
		$this->ci->session->unset_userdata('nama');
		$this->ci->session->set_flashdata('pesan', 'Berhasil LogOut!!!!');
		redirect('auth/login_user');
	}
}
