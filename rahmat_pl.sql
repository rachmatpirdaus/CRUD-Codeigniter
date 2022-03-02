-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Okt 2019 pada 05.14
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rahmat_pl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuansppt`
--

CREATE TABLE `pengajuansppt` (
  `id` int(11) NOT NULL,
  `nama_wp` varchar(50) NOT NULL,
  `nik` bigint(255) NOT NULL,
  `ktp` varchar(50) NOT NULL,
  `imb` varchar(50) NOT NULL,
  `lokasi_tanah` varchar(50) NOT NULL,
  `foto_pbb_tetangga` varchar(50) NOT NULL,
  `sk_belum_punya_pbb` varchar(50) NOT NULL,
  `bukti_kepemilikan` varchar(50) NOT NULL,
  `nama_pld` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajuansppt`
--

INSERT INTO `pengajuansppt` (`id`, `nama_wp`, `nik`, `ktp`, `imb`, `lokasi_tanah`, `foto_pbb_tetangga`, `sk_belum_punya_pbb`, `bukti_kepemilikan`, `nama_pld`) VALUES
(1, 'suci', 65116152, 'ktp_2.jpg', 'S.PNG', 'njkndkandkajdbaindjka2.PNG', 'bhjbhjv.PNG', 'MMM.PNG', 'Screenshot_(21).png', 'Rachmat'),
(6, 'dwa', 321, 'a2.PNG', 'ktp2.jpeg', 'njkndkandkajdbaindjka3.PNG', 'MMM2.PNG', 'AA.PNG', 'BKVHVVHDVY.PNG', 'adwadw'),
(55, 'fkfe', 43, 'ktp_5.jpg', 'BKVHVVHDVY2.PNG', 'a4.PNG', 'S4.PNG', 'ASASA1.PNG', 'ktp5.jpeg', 'zzff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `isi` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_laporan`
--

CREATE TABLE `tbl_laporan` (
  `nop` bigint(20) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kecamatan` enum('Sukaraja','Babakan Madang') NOT NULL,
  `nama_pengirim` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_laporan`
--

INSERT INTO `tbl_laporan` (`nop`, `nama_pemilik`, `desa`, `kecamatan`, `nama_pengirim`, `tanggal`) VALUES
(32, 'dasd', 'dada', '', 'dawdwq', '2019-10-07'),
(32031710020091820, 'ajata', 'gunung geulis', 'Babakan Madang', 'saepul', '2019-09-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `desa` varchar(50) DEFAULT NULL,
  `role` enum('admin','pld') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama_lengkap`, `desa`, `role`) VALUES
(1, 'rahmat', 'dbb592f5146b9a709912d0f578b34b66', 'Rachmat Pirdaus', NULL, 'admin'),
(3, 'rama', 'db6d758cd5194d4f076085dd44e4e2ca', 'rama lingga', 'cibadak', 'pld'),
(4, 'aku', 'ab4e517c2d0c625eb6dd43821fbd8022', 'aku', 'aku', 'pld'),
(5, 'mamat', 'dbb592f5146b9a709912d0f578b34b66', 'Rachmat Pirdaus', 'Cijayanti', 'pld');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengajuansppt`
--
ALTER TABLE `pengajuansppt`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_laporan`
--
ALTER TABLE `tbl_laporan`
  ADD PRIMARY KEY (`nop`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengajuansppt`
--
ALTER TABLE `pengajuansppt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
