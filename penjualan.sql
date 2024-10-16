-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2020 pada 07.36
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `No_pendaftaran` int(11) NOT NULL,
  `Nama` varchar(225) DEFAULT NULL,
  `Tempat_Lahir` varchar(50) DEFAULT NULL,
  `Tanggal_Lahir` date DEFAULT NULL,
  `Alamat` varchar(50) DEFAULT NULL,
  `Agama` varchar(30) DEFAULT NULL,
  `Jenis_Kelamin` varchar(15) DEFAULT NULL,
  `Kelurahan` varchar(50) DEFAULT NULL,
  `Kecamatan` varchar(50) DEFAULT NULL,
  `Kota` varchar(50) DEFAULT NULL,
  `Kabupaten` varchar(50) DEFAULT NULL,
  `Provinsi` varchar(50) DEFAULT NULL,
  `No_Telepon` varchar(15) DEFAULT NULL,
  `Nama_Sekolah` varchar(100) DEFAULT NULL,
  `Alamat_Sekolah` varchar(100) DEFAULT NULL,
  `No_Telp_Sekolah` varchar(15) DEFAULT NULL,
  `Jurusan_1` varchar(50) DEFAULT NULL,
  `Jurusan_2` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`No_Pendaftaran`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `No_Pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;