<?php



defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{

	// List all your items
	public function login_user($nama, $password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where(array('nama' => $nama, 'password' => $password));
		return $this->db->get()->row();
	}
	public function login_pelanggan($nama, $password)
	{
		$this->db->select('*');
		$this->db->from('pelanggan');
		$this->db->where(array('nama' => $nama, 'password' => $password));
		return $this->db->get()->row();
	}
}

/* End of file M_auth.php */
