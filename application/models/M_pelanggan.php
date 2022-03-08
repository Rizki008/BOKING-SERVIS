<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_pelanggan extends CI_Model
{
    public function profil()
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
        $this->db->order_by('id_pelanggan', 'desc');
        return $this->db->get()->result();
    }

    public function total_boking()
    {
        // $this->db->where('status=0');
        $this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
        return $this->db->get('boking')->num_rows();
    }

    public function total_transaksi()
    {
        // $this->db->where('status=3');
        $this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
        return $this->db->get('boking')->num_rows();
    }
}

/* End of file M_pelanggan.php */
