-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2021 pada 08.03
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_osis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `id_anggota` int(5) NOT NULL,
  `id_jabatan` int(5) NOT NULL,
  `id_tahun` int(5) NOT NULL,
  `nama_anggota` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kelas` varchar(100) DEFAULT NULL,
  `tempat_tanggal_lahir` varchar(100) DEFAULT NULL,
  `no_hp` varchar(100) DEFAULT NULL,
  `program_keahlian` varchar(100) DEFAULT NULL,
  `jabatan` varchar(100) NOT NULL,
  `tahun_masa_khidmat` varchar(100) DEFAULT NULL,
  `foto` mediumblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`id_anggota`, `id_jabatan`, `id_tahun`, `nama_anggota`, `alamat`, `kelas`, `tempat_tanggal_lahir`, `no_hp`, `program_keahlian`, `jabatan`, `tahun_masa_khidmat`, `foto`) VALUES
(1, 0, 0, 'jiyad', 'KarangResik', 'XII RPL 1', 'tasikmalaya', '083132138147', ' RPL ', 'ketua osis', '2021', 0x494d472d32303231313032372d5741303030372e6a7067),
(7, 0, 0, 'Tedi', 'Yudanegara', 'XI RPL 1', 'tasikmalaya', '083159171069', ' RPL ', 'Wakil Ketua', '2021', 0x494d472d32303231313032372d5741303030392e6a7067),
(27, 0, 0, 'Fahrul', 'Ampera', 'XII TBSM 2', 'ciamis,17 juli 2003', '085523759010', ' TBSM ', 'Ketua Mpk', '2021', 0x494d472d32303231313032372d5741303031322e6a7067),
(28, 0, 0, 'Ade.M', 'Cikanyere', 'XI TBSM 1', 'Tasikmalaya,', '085793676558', ' TBSM ', 'wakil mpk', '2021', 0x494d472d32303231313131312d5741303031322e6a7067),
(29, 0, 0, 'Rosdiana Fitri', 'Sawah lempay', 'XI RPL 1', 'Tasikmalaya,12 januari 2005', '088293166134', ' RPL ', 'Sekretaris', '2021', 0x494d472d32303231313032372d5741303031312e6a7067),
(30, 0, 0, 'Firda', 'Cikanyere', 'XI RPL 1', 'tasikmalaya', '083872609927', ' RPL ', 'wakil Sekretaris', '2021', 0x494d472d32303231313031382d5741303030312e6a7067),
(31, 0, 0, 'laela mukaromah', 'Indihiang', 'XII RPL 1', 'Bandung,20 maret 2003', '083827736561', ' RPL ', 'Bendahara', '2021', 0x494d472d32303231313032372d5741303030382e6a7067),
(35, 0, 0, 'Tita', 'Panjalu', 'XI RPL 2', 'Tasikmalaya,23 Februari 2005', '088214916679', ' RPL ', 'wakil bendahara', '2021', 0x494d472d32303231313130382d5741303030352e6a7067),
(105, 0, 0, 'Resti', 'Kawalu', 'XI TBSM 1', 'Tasikmalaya,', '083152501459', ' TBSM ', 'Kerohanian', '2021', 0x494d472d32303231313130392d5741303030302e6a7067),
(106, 0, 0, 'Rizki.A', 'Mangkubumi', 'XI TBSM 1', 'Tasikmalaya,29 Desember2004', '083856105601', ' TBSM ', 'Ekstrakulikuler', '2021', 0x494d472d32303231313031382d5741303030302e6a7067),
(107, 0, 0, 'Rizki.M', 'Sukamaju', 'XII TBSM 2', '123', '083152501459', ' TBSM ', 'Keamanan', '2021', 0x494d472d32303231313032372d5741303030352e6a7067),
(108, 0, 0, 'Eki', 'Kalangsari', 'XI TBSM 1', '123', '085797817904', ' TBSM ', 'wakil keamanan', '2021', 0x494d472d32303231313032372d5741303031302e6a7067),
(109, 0, 0, 'Risa', 'Nagarawangi', 'XI RPL 2', '123', '083180975147', ' RPL ', 'belanegara', '2021', 0x494d472d32303231313031382d5741303030332e6a7067),
(110, 0, 0, 'ilan', 'Pelang', 'XI RPL 2', '123', '34643436643', 'RPL', 'g', '2021', 0x494d475f32303231313032315f3131313735302e6a7067),
(111, 0, 0, 'Meri', 'paseh', 'XI RPL 3', '123', '082117217449', ' RPL ', 'g', '2021', 0x494d472d32303231313032302d5741303030352e6a7067),
(112, 0, 0, 'Firda', 'Cikanyere', 'XI RPL 1', '123', '083872609927', ' RPL ', 'wakil bendahara', '2021', 0x494d472d32303231313031382d5741303030312e6a7067),
(113, 0, 0, 'Eki', 'Kalangsari', 'XI TBSM 1', '123', '085797817904', 'TBSM', 'Keamanan', '2021', 0x494d472d32303231313032372d5741303031302e6a7067),
(114, 0, 0, 'Ade.M', 'Cikanyere', 'XI TBSM 1', '123', '085793676558', 'TBSM', 'wakil mpk', '2021', 0x494d472d32303231313131312d574130303132312e6a7067),
(115, 0, 0, 'Rizki.A', 'Mangkubumi', 'XI RPL 1', '123', '08385610560-1', ' RPL ', 'Ekstrakulikuler', '2021', 0x494d472d32303231313031382d5741303030302e6a7067);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` int(5) NOT NULL,
  `nama_jabatan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'ketua mpk'),
(2, 'wakil ketua mpk'),
(3, 'ketua osis'),
(51, 'wakil ketua osis'),
(52, 'sekretaris'),
(53, 'wakil sekretaris'),
(54, 'bendahara'),
(55, 'wakil bendahara'),
(56, 'kerohanian'),
(57, 'ekstrakulikuler'),
(58, 'keamanan'),
(59, 'kesehatan'),
(61, 'bela negara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_masa_khidmat`
--

CREATE TABLE `tbl_masa_khidmat` (
  `id_masa_khidmat` int(5) NOT NULL,
  `Pembina_osis` varchar(100) NOT NULL,
  `nama_ketua` varchar(100) NOT NULL,
  `nama_wakil` varchar(100) NOT NULL,
  `masa_khidmat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_masa_khidmat`
--

INSERT INTO `tbl_masa_khidmat` (`id_masa_khidmat`, `Pembina_osis`, `nama_ketua`, `nama_wakil`, `masa_khidmat`) VALUES
(17, 'Pak aceng', 'jiyad', 'tedi', '2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tahun`
--

CREATE TABLE `tbl_tahun` (
  `id_tahun` int(5) NOT NULL,
  `nama_tahun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_tahun`
--

INSERT INTO `tbl_tahun` (`id_tahun`, `nama_tahun`) VALUES
(10, '2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `level`) VALUES
(1, 'admin', '1302', 'dila@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `tbl_masa_khidmat`
--
ALTER TABLE `tbl_masa_khidmat`
  ADD PRIMARY KEY (`id_masa_khidmat`);

--
-- Indeks untuk tabel `tbl_tahun`
--
ALTER TABLE `tbl_tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  MODIFY `id_anggota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT untuk tabel `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `tbl_masa_khidmat`
--
ALTER TABLE `tbl_masa_khidmat`
  MODIFY `id_masa_khidmat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tbl_tahun`
--
ALTER TABLE `tbl_tahun`
  MODIFY `id_tahun` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
