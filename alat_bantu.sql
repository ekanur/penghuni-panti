-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 12, 2018 at 10:17 PM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penghuni-panti`
--

-- --------------------------------------------------------

--
-- Table structure for table `alat_bantu`
--

CREATE TABLE `alat_bantu` (
  `id` int(11) NOT NULL,
  `nomor_identifikasi` varchar(25) NOT NULL,
  `alat_bantu` varchar(705) NOT NULL,
  `alat_bantu_diperbaiki` varchar(75) NOT NULL,
  `tanggal_diresepkan` date NOT NULL,
  `jadwal_monitoring` date NOT NULL,
  `mendapat_alat_bantu` enum('ya','tidak') NOT NULL,
  `tanggal_dapat_alat_bantu` date NOT NULL,
  `pembayaran_alat_bantu` enum('Bayar 100%','Bayar ?50%','Bayar <50%','Tidak bayar') NOT NULL,
  `asal_alat_bantu` varchar(100) NOT NULL,
  `cara_pemberian_alat_bantu` enum('Telepon/text','Field visit','At base') NOT NULL,
  `tanggal_pemberian_alat` date NOT NULL,
  `keterangan_monitoring` varchar(350) NOT NULL,
  `durasi_penggunaan_alat_bantu` enum('<6 bulan','6 bulan-1 tahun','>1 tahun','Tidak menggunakan') NOT NULL,
  `alasan_tidak_menggunakan` varchar(350) NOT NULL,
  `alasan_lain` varchar(200) NOT NULL,
  `cara_monitoring` enum('Telepon/text','Field visit','At base') NOT NULL,
  `tanggal_monitoring` date NOT NULL,
  `petugas` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
