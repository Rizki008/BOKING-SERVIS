-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Agu 2022 pada 11.25
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `servis_leptop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `boking`
--

CREATE TABLE `boking` (
  `id_boking` int(11) NOT NULL,
  `no_boking` int(128) DEFAULT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_diskon` int(11) DEFAULT NULL,
  `tgl_boking` date DEFAULT NULL,
  `nama_barang` varchar(128) DEFAULT NULL,
  `tipe_barang` varchar(128) DEFAULT NULL,
  `kerusakan_barang` text DEFAULT NULL,
  `harga_bayar` varchar(30) DEFAULT NULL,
  `vocher` varchar(128) DEFAULT NULL,
  `status_bayar` int(11) DEFAULT NULL,
  `status_boking` int(11) DEFAULT NULL,
  `atas_nama` varchar(128) DEFAULT NULL,
  `bukti_bayar` text DEFAULT NULL,
  `jumlah_bayar` int(30) DEFAULT NULL,
  `catatan` varchar(128) DEFAULT NULL,
  `estimasi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `boking`
--

INSERT INTO `boking` (`id_boking`, `no_boking`, `id_pelanggan`, `id_diskon`, `tgl_boking`, `nama_barang`, `tipe_barang`, `kerusakan_barang`, `harga_bayar`, `vocher`, `status_bayar`, `status_boking`, `atas_nama`, `bukti_bayar`, `jumlah_bayar`, `catatan`, `estimasi`) VALUES
(15, 20211217, 9, NULL, '2021-12-17', 'Laptop', 'asus', 'mati total', '12000', NULL, 1, 6, 'imam', 'Drawing2.jpg', NULL, 'ganti ram', NULL),
(16, 20211217, 9, NULL, '2021-12-17', 'Laptop', 'asus 123', 'os error', NULL, NULL, NULL, 8, NULL, NULL, NULL, 'harus ganti lcd ', NULL),
(17, 20211221, 8, NULL, '2021-12-21', 'Laptop', 'asus', 'os error', NULL, NULL, NULL, 8, NULL, NULL, NULL, 'instal ulang windows', NULL),
(18, 20211221, 8, NULL, '2021-12-21', 'Laptop', 'asus', 'os error', '40000', NULL, 1, 6, 'imam', 'Beautiful_Green_Earth_Closeup.jpg', NULL, 'instal ulang windows', NULL),
(19, 20211221, 8, NULL, '2021-12-21', 'laptop ', 'asus 123', 'os error', '40000', NULL, 1, 6, 'maung', '2.jpg', NULL, 'ganti ram', NULL),
(20, 20211225, 8, NULL, '2021-12-25', 'Laptop', 'acer', 'layar retak', NULL, NULL, NULL, 8, NULL, NULL, NULL, 'ganti ram', NULL),
(21, 20220816, 1, NULL, '2022-08-16', 'asus', 'xz2123q', 'batre ancur bos', '120000', NULL, 1, 5, 'hana', 'logoadmin.png', NULL, 'ganti batre', '7 hari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id_diagnosa` int(11) NOT NULL,
  `id_boking` int(11) DEFAULT NULL,
  `kerusakan` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskon`
--

CREATE TABLE `diskon` (
  `id_diskon` int(11) NOT NULL,
  `id_boking` int(11) DEFAULT NULL,
  `jumlah_diskon` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `no_tlpn` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `vocher` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `no_tlpn`, `email`, `password`, `alamat`, `vocher`) VALUES
(1, 'imam', '085745698745', 'imam@gmail.com', '12345678', 'jl. mardirancan no.12 siliwangi kuningan', 5000),
(2, 'jamal', '085741321452', 'jamal@gmail.com', '123456789', NULL, 5000),
(3, 'vera', '085876321457', 'verafadilla21@gmail.com', '12345678', NULL, 5000),
(4, 'adi', '089123432123', 'adi@gmail.com', '123456789', NULL, 5000),
(5, 'vera', '0284712345678', 'kr044401@gmail.com', '123456789', NULL, 5000),
(6, 'haki', '089123212312', 'haki@gmail.com', '16feb1999', 'kuningan', 5000),
(7, 'imam', '089123212313', 'imam1@gmail.com', '12345678', 'awr', 5000),
(8, 'imam', '089123212312', 'imam12@gmail.com', '123456789', 'kuningan', 5000),
(9, 'ujang', '089123212312', 'pinjol1@gmail.com', '12345678', 'Jln Ir Juanda, Awirarangan, Kuningan', 5000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_bayar` int(11) NOT NULL,
  `id_boking` int(11) DEFAULT NULL,
  `atas_nama` varchar(128) DEFAULT NULL,
  `jumlah_bayar` varchar(128) DEFAULT NULL,
  `bukti_bayar` text DEFAULT NULL,
  `status_bayar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perangkat_keras`
--

CREATE TABLE `perangkat_keras` (
  `id_perangkat` int(11) NOT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `harga` varchar(50) DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perangkat_keras`
--

INSERT INTO `perangkat_keras` (`id_perangkat`, `nama_produk`, `harga`, `gambar`, `deskripsi`) VALUES
(2, 'VGA', '1254', 'vg.jpg', 'VGA (Video Graphics Adapter)\r\nadalah perangkat keras komputer yang berfungsi menerjemahkan tampilan ke layar\r\nmonitor. \r\nVGA juga sering disebut sebagai kartu grafis.'),
(3, 'RAM', '350000', 'dd.jpg', 'RAM (random access memory) merupakan komponen penting dalam PC game apa pun.'),
(5, 'Prosesor', '50000', 'sa.jpg', ' Prosesor adalah komponen utama atau otak dari laptop / komputer Anda. Prosesor terletak tepat di tengah motherboard.'),
(6, 'Motheboard', '20600', 'm.jpg', ' Motherboard (atau biasa disebut mainboard, systemboard, logic board, baseboard atau mobo) merupakan sebuah printed circuit board (PCB) yang bertindak sebagai tulang belakang pada sebuah komputer,'),
(7, 'Power Supplay', '50000', 'pp.jpg', ' ower Supply adalah salah satu hardware komputer yang berperan dalam menyuplai tegangan pada setiap komponen komputer yang membutuhkan aliran arus listrik'),
(8, 'SSD', '50000', 'sss.jpg', ' SSD adalah singkatan dari Solid State Drive. Teknologi ini kini sudah mulai menggantikan Hard Disk Drives (HDD)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pickup`
--

CREATE TABLE `pickup` (
  `id_pickup` int(11) NOT NULL,
  `id_boking` int(11) DEFAULT NULL,
  `nama_kurir` varchar(50) DEFAULT NULL,
  `status_pickup` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`) VALUES
(1, 'imam', 'imam@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `boking`
--
ALTER TABLE `boking`
  ADD PRIMARY KEY (`id_boking`);

--
-- Indeks untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`);

--
-- Indeks untuk tabel `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id_diskon`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indeks untuk tabel `perangkat_keras`
--
ALTER TABLE `perangkat_keras`
  ADD PRIMARY KEY (`id_perangkat`);

--
-- Indeks untuk tabel `pickup`
--
ALTER TABLE `pickup`
  ADD PRIMARY KEY (`id_pickup`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `boking`
--
ALTER TABLE `boking`
  MODIFY `id_boking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `diskon`
--
ALTER TABLE `diskon`
  MODIFY `id_diskon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `perangkat_keras`
--
ALTER TABLE `perangkat_keras`
  MODIFY `id_perangkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pickup`
--
ALTER TABLE `pickup`
  MODIFY `id_pickup` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
