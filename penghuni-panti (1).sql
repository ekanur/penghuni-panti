-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2018 at 05:28 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `pembayaran_alat_bantu` enum('Bayar 100%','Bayar >50%','Bayar <50%','Tidak bayar') NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `asessmen`
--

CREATE TABLE `asessmen` (
  `id` int(11) NOT NULL,
  `tunanetra` varchar(70) NOT NULL,
  `tunarungu` varchar(70) NOT NULL,
  `tunagrahita` varchar(70) NOT NULL,
  `tunadaksa` varchar(200) NOT NULL,
  `perilaku` varchar(200) NOT NULL,
  `epilepsi` varchar(200) NOT NULL,
  `disability` varchar(150) NOT NULL,
  `komunitas_difabel` varchar(200) NOT NULL,
  `co` varchar(200) NOT NULL,
  `identifikasi_kader` varchar(200) NOT NULL,
  `tinggal_asrama` enum('ya','tidak') NOT NULL,
  `biodata_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asessmen`
--

INSERT INTO `asessmen` (`id`, `tunanetra`, `tunarungu`, `tunagrahita`, `tunadaksa`, `perilaku`, `epilepsi`, `disability`, `komunitas_difabel`, `co`, `identifikasi_kader`, `tinggal_asrama`, `biodata_id`, `created_at`, `deleted_at`) VALUES
(2, '{\"jenis\":\"blind\",\"tanggal\":\"2018-07-16\",\"tempat\":\"outreach\"}', '{\"jenis\":\"gangguan_bicara\",\"tanggal\":\"2018-07-16\",\"tempat\":\"outreach\"}', '{\"jenis\":\"sedang\",\"tanggal\":\"2018-07-16\",\"tempat\":\"outreach\"}', '{\"jenis\":\"CTEV\",\"tanggal\":\"2018-07-17\",\"tempat\":\"outreach\",\"lain\":\"d\"}', '{\"jenis\":\"Autis kanner\",\"tanggal\":\"2018-07-16\",\"tempat\":\"outreach\",\"lain\":\"d\"}', '{\"jenis\":\"Pengobatan\",\"tanggal\":\"2018-07-16\",\"tempat\":\"outreach\"}', 'Psycho-social disabilities', 'd', 'd', 'e', 'ya', 1, '2018-07-15 20:22:15', '2018-07-15 17:00:00'),
(5, '{\"jenis\":\"low_vision\",\"tanggal\":\"2018-07-17\",\"tempat\":\"at_base\"}', '{\"jenis\":\"gangguan_bicara\",\"tanggal\":\"2018-07-24\",\"tempat\":\"at_base\"}', '{\"jenis\":\"sedang\",\"tanggal\":\"2018-07-18\",\"tempat\":\"at_base\"}', '{\"jenis\":\"Kaki X\",\"tanggal\":\"2018-07-03\",\"tempat\":\"at_base\",\"lain\":\"sdfdf\"}', '{\"jenis\":\"Agresif\",\"tanggal\":\"2018-07-19\",\"tempat\":\"at_base\",\"lain\":\"dd\"}', '{\"jenis\":\"Pengobatan\",\"tanggal\":\"2018-07-18\",\"tempat\":\"at_base\"}', 'Psycho-social disabilities', 'dd', 'dd', 'dddd', 'tidak', 2, '2018-07-15 22:49:34', NULL),
(6, '{\"jenis\":\"blind\",\"tanggal\":\"2018-07-18\",\"tempat\":\"outreach\"}', '{\"jenis\":\"gangguan_bicara\",\"tanggal\":\"2018-07-10\",\"tempat\":\"outreach\"}', '{\"jenis\":\"normal\",\"tanggal\":\"2018-07-11\",\"tempat\":\"outreach\"}', '{\"jenis\":\"Kaki O\",\"tanggal\":\"2018-07-05\",\"tempat\":\"outreach\",\"lain\":\"d\"}', '{\"jenis\":\"ADHD\",\"tanggal\":\"2018-07-10\",\"tempat\":\"outreach\",\"lain\":\"dd\"}', '{\"jenis\":\"Putus obat\",\"tanggal\":\"2018-07-11\",\"tempat\":\"at_base\"}', 'Deafblindness', 'e', 'd', 'd', 'tidak', 3, '2018-07-16 06:56:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `nomor_identifikasi` varchar(25) NOT NULL,
  `id_klien_lv` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` enum('pria','wanita') NOT NULL,
  `akta_kelahiran` varchar(30) NOT NULL,
  `ktp` varchar(30) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `alamat` varchar(350) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `kota` varchar(25) NOT NULL,
  `kec` varchar(25) NOT NULL,
  `kelurahan` varchar(25) NOT NULL,
  `telp_rumah` varchar(20) NOT NULL,
  `hp1` varchar(150) NOT NULL,
  `hp2` varchar(150) NOT NULL,
  `asuransi_kesehatan` varchar(25) NOT NULL,
  `sumber_informasi` varchar(50) NOT NULL,
  `sponsor` varchar(50) NOT NULL,
  `detail_pendidikan` varchar(500) NOT NULL,
  `detail_profesi` varchar(500) NOT NULL,
  `detail_ayah` varchar(350) NOT NULL,
  `detail_ibu` varchar(350) NOT NULL,
  `detail_wali` varchar(350) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nomor_identifikasi`, `id_klien_lv`, `nama`, `jenis_kelamin`, `akta_kelahiran`, `ktp`, `no_kk`, `nik`, `alamat`, `rt`, `rw`, `kota`, `kec`, `kelurahan`, `telp_rumah`, `hp1`, `hp2`, `asuransi_kesehatan`, `sumber_informasi`, `sponsor`, `detail_pendidikan`, `detail_profesi`, `detail_ayah`, `detail_ibu`, `detail_wali`, `created_at`, `deleted_at`) VALUES
(1, '1234556', '11221', 'ddd', 'pria', 'ada', '', 'd', 'd', 'd', 'd', 'd', 'Kota Malang', 'Lowokwaru', 'Tunjungsekar', '08886', '{\"nomor\":\"d\",\"pemilik\":\"d\"}', '{\"nomor\":\"d\",\"pemilik\":\"d\"}', '0', 'd', 'd', '{\"pendidikan\":\"paud_tk\",\"kelas\":\"d\",\"nama_sekolah\":\"d\",\"no_telp_sekolah\":\"d\"}', '{\"pekerjaan\":\"d\",\"alamat_kerja\":\"d\",\"telp_kerja\":\"d\",\"pendidikan_kerja\":\"sd\",\"keterampilan\":\"\",\"minat\":\"\"}', '{\"nama_ayah\":\"\",\"pekerjaan_ayah\":\"\",\"pendidikan_ayah\":\"sd\"}', '{\"nama_ibu\":\"\",\"pekerjaan_ibu\":\"\",\"pendidikan_ibu\":\"sd\"}', '{\"nama_wali\":\"\",\"pekerjaan_wali\":\"\",\"pendidikan_wali\":\"sd\"}', '2018-07-15 12:33:00', '2018-07-15 17:00:00'),
(2, '12345567', 'a', 'ani', 'wanita', 'tidak ada', 'tidak ada', 'd', 'd', 'd', 'd', 'd', 'Kab. Malang', 'Lowokwaru', 'Tunjungsekar', 'd', '{\"nomor\":\"d\",\"pemilik\":\"d\"}', '{\"nomor\":\"d\",\"pemilik\":\"d\"}', 'BPJS', 'd', 'd', '{\"pendidikan\":\"putus_sekolah\",\"kelas\":\"d\",\"nama_sekolah\":\"d\",\"no_telp_sekolah\":\"d\"}', '{\"pekerjaan\":\"d\",\"alamat_kerja\":\"d\",\"telp_kerja\":\"d\",\"pendidikan_kerja\":\"diploma\",\"keterampilan\":\"d\",\"minat\":\"d\"}', '{\"nama_ayah\":\"d\",\"pekerjaan_ayah\":\"d\",\"pendidikan_ayah\":\"sma\"}', '{\"nama_ibu\":\"d\",\"pekerjaan_ibu\":\"d\",\"pendidikan_ibu\":\"s1\"}', '{\"nama_wali\":\"d\",\"pekerjaan_wali\":\"d\",\"pendidikan_wali\":\"s2_s3\"}', '2018-07-15 12:36:09', NULL),
(3, '12345568', 'd', 'rudi', 'pria', 'ada', '', 'd', 'd', 'd', 'd', 'd', 'Kota Malang', 'Lowokwaru', 'Tunjungsekar', 'd', '{\"nomor\":\"d\",\"pemilik\":\"d\"}', '{\"nomor\":\"d\",\"pemilik\":\"d\"}', '0', 'd', 'd', '{\"pendidikan\":\"paud_tk\",\"kelas\":\"d\",\"nama_sekolah\":\"d\",\"no_telp_sekolah\":\"d\"}', '{\"pekerjaan\":\"d\",\"alamat_kerja\":\"d\",\"telp_kerja\":\"d\",\"pendidikan_kerja\":\"sd\",\"keterampilan\":\"d\",\"minat\":\"d\"}', '{\"nama_ayah\":\"d\",\"pekerjaan_ayah\":\"d\",\"pendidikan_ayah\":\"sd\"}', '{\"nama_ibu\":\"d\",\"pekerjaan_ibu\":\"d\",\"pendidikan_ibu\":\"sd\"}', '{\"nama_wali\":\"d\",\"pekerjaan_wali\":\"d\",\"pendidikan_wali\":\"sd\"}', '2018-07-16 06:28:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(3) NOT NULL,
  `username` varchar(15) NOT NULL,
  `nidn` varchar(16) NOT NULL,
  `nama_lengkap` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `username`, `nidn`, `nama_lengkap`, `email`, `password`) VALUES
(1, 'admin', '160535611826', 'Slametian Dewa Tegar Perkasa', 'admin@localhost', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat_bantu`
--
ALTER TABLE `alat_bantu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asessmen`
--
ALTER TABLE `asessmen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nomor_identifikasi` (`nomor_identifikasi`) USING BTREE;

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat_bantu`
--
ALTER TABLE `alat_bantu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asessmen`
--
ALTER TABLE `asessmen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
