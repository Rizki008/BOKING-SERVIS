<?php
defined('BASEPATH') or exit('No direct script access allowed');
class LaporanFpdf extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf'); // MEMANGGIL LIBRARY YANG KITA BUAT TADI
        $this->load->model('m_laporan');
    }
    function index()
    {
        $tahun = $this->input->post('tahun');
        error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $pdf = new FPDF('L', 'mm', 'Letter');
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 7, 'LAPORAN SERVIS PERTAHUN', 0, 1, 'C');
        $pdf->SetFont('Arial', 'I', 12);
        $pdf->Cell(0, 7, 'Jl. Siliwangi Timur No.3 Kuningan', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'No', 1, 0, 'C');
        $pdf->Cell(50, 6, 'Nomor Boking', 1, 0, 'C');
        $pdf->Cell(30, 6, 'Tanggal Boking', 1, 0, 'C');
        $pdf->Cell(60, 6, 'Nama Perangkat', 1, 0, 'C');
        $pdf->Cell(40, 6, 'Tipe Perangkat', 1, 0, 'C');
        $pdf->Cell(40, 6, 'Kerusakan', 1, 0, 'C');
        $pdf->Cell(40, 6, 'Jumlah Bayar', 1, 1, 'C');
        $pdf->SetFont('Arial', '', 10);
        $pemesanan = $this->m_laporan->lap_tahunan($tahun);
        $no = 0;
        foreach ($pemesanan as $data) {
            $no++;
            $pdf->Cell(10, 6, $no, 1, 0, 'C');
            $pdf->Cell(50, 6, $data->no_boking, 1, 0);
            $pdf->Cell(30, 6, $data->tgl_boking, 1, 0);
            $pdf->Cell(60, 6, $data->nama_barang, 1, 0);
            $pdf->Cell(40, 6, $data->tipe_barang, 1, 0);
            $pdf->Cell(40, 6, $data->kerusakan_barang, 1, 0);
            $pdf->Cell(40, 6, $data->harga_bayar, 1, 1);
        }
        $pdf->Output();
    }

    function bulan()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $pdf = new FPDF('L', 'mm', 'Letter');
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 7, 'LAPORAN PERBULAN SELECTA', 0, 1, 'C');
        $pdf->SetFont('Arial', 'I', 12);
        $pdf->Cell(0, 7, 'Jl. Siliwangi Timur No.3 Kuningan', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'No', 1, 0, 'C');
        $pdf->Cell(50, 6, 'Nomor Boking', 1, 0, 'C');
        $pdf->Cell(30, 6, 'Tanggal Boking', 1, 0, 'C');
        $pdf->Cell(60, 6, 'Nama Perangkat', 1, 0, 'C');
        $pdf->Cell(40, 6, 'Tipe Perangkat', 1, 0, 'C');
        $pdf->Cell(40, 6, 'Kerusakan', 1, 0, 'C');
        $pdf->Cell(40, 6, 'Jumlah Bayar', 1, 1, 'C');
        $pdf->SetFont('Arial', '', 10);
        $pemesanan = $this->m_laporan->lap_bulanan($bulan, $tahun);
        $no = 0;
        foreach ($pemesanan as $data) {
            $no++;
            $pdf->Cell(10, 6, $no, 1, 0, 'C');
            $pdf->Cell(50, 6, $data->no_boking, 1, 0);
            $pdf->Cell(30, 6, $data->tgl_boking, 1, 0);
            $pdf->Cell(60, 6, $data->nama_barang, 1, 0);
            $pdf->Cell(40, 6, $data->tipe_barang, 1, 0);
            $pdf->Cell(40, 6, $data->kerusakan_barang, 1, 0);
            $pdf->Cell(40, 6, $data->harga_bayar, 1, 1);
        }
        $pdf->Output();
    }

    function hari()
    {
        $tanggal = $this->input->post('tanggal');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $pdf = new FPDF('L', 'mm', 'Letter');
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 7, 'LAPORAN PERHARI SELECTA', 0, 1, 'C');
        $pdf->SetFont('Arial', 'I', 12);
        $pdf->Cell(0, 7, 'Jl. Siliwangi Timur No.3 Kuningan', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'No', 1, 0, 'C');
        $pdf->Cell(50, 6, 'Nomor Boking', 1, 0, 'C');
        $pdf->Cell(30, 6, 'Tanggal Boking', 1, 0, 'C');
        $pdf->Cell(60, 6, 'Nama Perangkat', 1, 0, 'C');
        $pdf->Cell(40, 6, 'Tipe Perangkat', 1, 0, 'C');
        $pdf->Cell(40, 6, 'Kerusakan', 1, 0, 'C');
        $pdf->Cell(40, 6, 'Jumlah Bayar', 1, 1, 'C');
        $pdf->SetFont('Arial', '', 10);
        $pemesanan = $this->m_laporan->lap_harian($tanggal, $bulan, $tahun);
        $no = 0;
        foreach ($pemesanan as $data) {
            $no++;
            $pdf->Cell(10, 6, $no, 1, 0, 'C');
            $pdf->Cell(50, 6, $data->no_boking, 1, 0);
            $pdf->Cell(30, 6, $data->tgl_boking, 1, 0);
            $pdf->Cell(60, 6, $data->nama_barang, 1, 0);
            $pdf->Cell(40, 6, $data->tipe_barang, 1, 0);
            $pdf->Cell(40, 6, $data->kerusakan_barang, 1, 0);
            $pdf->Cell(40, 6, $data->harga_bayar, 1, 1);
        }
        $pdf->Output();
    }
}
