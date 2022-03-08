<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_boking extends CI_Model
{
    // List all your items
    public function boking($data)
    {
        $this->db->insert('boking', $data);
    }

    // Add a new item
    public function data_boking()
    {
        $this->db->select('*');
        $this->db->from('boking');
        $this->db->where(
            'id_pelanggan',
            $this->session->userdata('id_pelanggan')
        );
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

    public function detail_boking($id_boking)
    {
        $this->db->select('*');
        $this->db->from('boking');
        $this->db->join('pelanggan', 'boking.id_pelanggan = pelanggan.id_pelanggan', 'left');
        $this->db->where('id_boking', $id_boking);
        return $this->db->get()->result();
    }

    //Update one item
    public function upload_buktibayar($data)
    {
        $this->db->where('id_boking', $data['id_boking']);
        $this->db->update('boking', $data);
    }
    public function bayar($data)
    {
        $this->db->insert('pembayaran', $data);
    }
}

/* End of file M_boking.php */
