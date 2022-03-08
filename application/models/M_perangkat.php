<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_perangkat extends CI_Model
{

    public function perangkat()
    {
        $this->db->select('*');
        $this->db->from('perangkat_keras');
        $this->db->order_by('id_perangkat', 'desc');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('perangkat_keras', $data);
    }

    public function update($data)
    {
        $this->db->where('id_perangkat', $data['id_perangkat']);
        $this->db->update('perangkat_keras', $data);
    }

    public function detail($id_perangkat)
    {
        $this->db->select('*');
        $this->db->from('perangkat_keras');
        $this->db->where('id_perangkat', $id_perangkat);
        return $this->db->get()->row();
    }

    public function delete($data)
    {
        $this->db->where('id_perangkat', $data['id_perangkat']);
        $this->db->delete('perangkat_keras');
    }
}
