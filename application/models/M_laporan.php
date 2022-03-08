<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_laporan extends CI_Model
{
    public function lap_harian($tanggal, $bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('boking');
        $this->db->where('DAY(boking.tgl_boking)', $tanggal);
        $this->db->where('MONTH(boking.tgl_boking)', $bulan);
        $this->db->where('YEAR(boking.tgl_boking)', $tahun);

        return $this->db->get()->result();
    }

    public function lap_bulanan($bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('boking');
        $this->db->where('MONTH(tgl_boking)', $bulan);
        $this->db->where('YEAR(tgl_boking)', $tahun);
        $this->db->where('status_bayar=1');

        return $this->db->get()->result();
    }

    public function lap_tahunan($tahun)
    {
        $this->db->select('*');
        $this->db->from('boking');
        $this->db->where('YEAR(tgl_boking)', $tahun);
        $this->db->where('status_bayar=1');


        return $this->db->get()->result();
    }
}

/* End of file M_laporan.php */
