<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    public function update_boking($data)
    {
        $this->db->where('id_boking', $data['id_boking']);
        $this->db->update('boking', $data);
    }

    // List all your items
    public function boking_masuk()
    {
        $this->db->select('*');
        $this->db->from('boking');
        $this->db->join('pelanggan', 'boking.id_pelanggan = pelanggan.id_pelanggan', 'left');

        $this->db->where('status_boking=0');
        $this->db->order_by('id_boking', 'desc');
        return $this->db->get()->result();
    }
    public function boking_batal()
    {
        $this->db->select('*');
        $this->db->from('boking');
        $this->db->join('pelanggan', 'boking.id_pelanggan = pelanggan.id_pelanggan', 'left');
        $this->db->where('status_boking=7');
        $this->db->order_by('id_boking', 'desc');
        return $this->db->get()->result();
    }

    public function data_pickup()
    {
        $this->db->select('*');
        $this->db->from('boking');
        $this->db->where('status_boking=1');
        $this->db->order_by('id_boking', 'desc');
        return $this->db->get()->result();
    }

    public function data_diagnosa()
    {
        $this->db->select('*');
        $this->db->from('boking');
        $this->db->where('status_boking=2');
        $this->db->order_by('id_boking', 'desc');
        return $this->db->get()->result();
    }

    public function data_biaya()
    {
        $this->db->select('*');
        $this->db->from('boking');
        $this->db->where('status_boking=4');
        $this->db->order_by('id_boking', 'desc');
        return $this->db->get()->result();
    }

    public function data_bayar()
    {
        $this->db->select('*');
        $this->db->from('boking');
        $this->db->where('status_boking=4');
        $this->db->order_by('id_boking', 'desc');
        return $this->db->get()->result();
    }

    public function data_ambil()
    {
        $this->db->select('*');
        $this->db->from('boking');
        $this->db->join('pelanggan', 'boking.id_pelanggan = pelanggan.id_pelanggan', 'left');
        $this->db->where('status_boking=5');
        $this->db->order_by('id_boking', 'desc');
        return $this->db->get()->result();
    }
}

/* End of file M_admin.php */
