-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2018 at 03:39 AM
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

--
-- Dumping data for table `alat_bantu`
--

INSERT INTO `alat_bantu` (`id`, `nomor_identifikasi`, `alat_bantu`, `alat_bantu_diperbaiki`, `tanggal_diresepkan`, `jadwal_monitoring`, `mendapat_alat_bantu`, `tanggal_dapat_alat_bantu`, `pembayaran_alat_bantu`, `asal_alat_bantu`, `cara_pemberian_alat_bantu`, `tanggal_pemberian_alat`, `keterangan_monitoring`, `durasi_penggunaan_alat_bantu`, `alasan_tidak_menggunakan`, `alasan_lain`, `cara_monitoring`, `tanggal_monitoring`, `petugas`, `created_at`, `deleted_at`) VALUES
(3, '44333', 'nama alat bantu', 'alat bantu diperbaiki', '2018-08-15', '2018-08-07', 'ya', '2018-08-10', 'Bayar <50%', 'asal alat bantu', 'Field visit', '2018-08-07', 'keterangan monitoring', '6 bulan-1 tahun', 'sdf', 'lk                                  \r\n                                ', 'Field visit', '2018-08-22', 'petugas1', '2018-08-27 16:29:50', '2018-08-28 17:00:00'),
(4, '44333', 'nama alat bantu', 'alat bantu diperbaiki', '2018-09-14', '2018-09-19', 'tidak', '2018-09-10', 'Bayar >50%', 'asal alat bantu', 'Field visit', '2018-09-19', 'keterangan monitoring', '6 bulan-1 tahun', 'asdfsd', 'dfsdfsd', 'Field visit', '2018-09-06', 'petugas', '2018-09-05 04:14:03', NULL);

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
(5, '{\"jenis\":\"low_vision\",\"tanggal\":\"2018-07-17\",\"tempat\":\"at_base\"}', '{\"jenis\":\"gangguan_bicara\",\"tanggal\":\"2018-07-24\",\"tempat\":\"at_base\"}', '{\"jenis\":\"sedang\",\"tanggal\":\"2018-07-18\",\"tempat\":\"at_base\"}', '{\"jenis\":\"Kaki X\",\"tanggal\":\"2018-07-03\",\"tempat\":\"at_base\",\"lain\":\"sdfdf\"}', '{\"jenis\":\"Agresif\",\"tanggal\":\"2018-07-19\",\"tempat\":\"at_base\",\"lain\":\"dd\"}', '{\"jenis\":\"Pengobatan\",\"tanggal\":\"2018-07-18\",\"tempat\":\"at_base\"}', 'Psycho-social disabilities', 'dd', 'dd', 'dddd', 'tidak', 2, '2018-07-15 22:49:34', NULL);

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
(2, 'a', 'a', 'd', 'wanita', 'tidak ada', 'tidak ada', 'd', 'd', 'd', 'd', 'd', 'Kab. Malang', 'Lowokwaru', 'Tunjungsekar', 'd', '{\"nomor\":\"d\",\"pemilik\":\"d\"}', '{\"nomor\":\"d\",\"pemilik\":\"d\"}', 'BPJS', 'd', 'd', '{\"pendidikan\":\"putus_sekolah\",\"kelas\":\"d\",\"nama_sekolah\":\"d\",\"no_telp_sekolah\":\"d\"}', '{\"pekerjaan\":\"d\",\"alamat_kerja\":\"d\",\"telp_kerja\":\"d\",\"pendidikan_kerja\":\"diploma\",\"keterampilan\":\"d\",\"minat\":\"d\"}', '{\"nama_ayah\":\"d\",\"pekerjaan_ayah\":\"d\",\"pendidikan_ayah\":\"sma\"}', '{\"nama_ibu\":\"d\",\"pekerjaan_ibu\":\"d\",\"pendidikan_ibu\":\"s1\"}', '{\"nama_wali\":\"d\",\"pekerjaan_wali\":\"d\",\"pendidikan_wali\":\"s2_s3\"}', '2018-07-15 12:36:09', NULL),
(3, '44333', '', '', 'pria', 'ada', '', '', '', '', '', '', 'Kota Malang', 'Lowokwaru', 'Tunjungsekar', '', '{\"nomor\":\"\",\"pemilik\":\"\"}', '{\"nomor\":\"\",\"pemilik\":\"\"}', '0', '', '', '{\"pendidikan\":\"paud_tk\",\"kelas\":\"\",\"nama_sekolah\":\"\",\"no_telp_sekolah\":\"\"}', '{\"pekerjaan\":\"\",\"alamat_kerja\":\"\",\"telp_kerja\":\"\",\"pendidikan_kerja\":\"sd\",\"keterampilan\":\"\",\"minat\":\"\"}', '{\"nama_ayah\":\"\",\"pekerjaan_ayah\":\"\",\"pendidikan_ayah\":\"sd\"}', '{\"nama_ibu\":\"\",\"pekerjaan_ibu\":\"\",\"pendidikan_ibu\":\"sd\"}', '{\"nama_wali\":\"\",\"pekerjaan_wali\":\"\",\"pendidikan_wali\":\"sd\"}', '2018-08-27 16:09:33', NULL),
(4, 'sd34', '', '', 'pria', 'ada', '', '', '', '', '', '', 'Kota Malang', 'Lowokwaru', 'Tunjungsekar', '', '{\"nomor\":\"\",\"pemilik\":\"\"}', '{\"nomor\":\"\",\"pemilik\":\"\"}', '0', '', '', '{\"pendidikan\":\"paud_tk\",\"kelas\":\"\",\"nama_sekolah\":\"\",\"no_telp_sekolah\":\"\"}', '{\"pekerjaan\":\"\",\"alamat_kerja\":\"\",\"telp_kerja\":\"\",\"pendidikan_kerja\":\"sd\",\"keterampilan\":\"\",\"minat\":\"\"}', '{\"nama_ayah\":\"\",\"pekerjaan_ayah\":\"\",\"pendidikan_ayah\":\"sd\"}', '{\"nama_ibu\":\"\",\"pekerjaan_ibu\":\"\",\"pendidikan_ibu\":\"sd\"}', '{\"nama_wali\":\"\",\"pekerjaan_wali\":\"\",\"pendidikan_wali\":\"sd\"}', '2018-08-27 16:10:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `intervensi`
--

CREATE TABLE `intervensi` (
  `id` int(11) NOT NULL,
  `nomor_identifikasi` varchar(25) NOT NULL,
  `subjek_intervensi` enum('Penyandang disabilitas','Orang tua/wali','Guru') NOT NULL,
  `jenis_intervensi` enum('Observasi','Assessemen lanjutan','Screening','Monitoring','Konseling','Konsultasi','Rujukan','Fasilitasi','Pelatihan vokasional/profesional_1','Pelatihan vokasional/profesional_2','Pelatihan keterampilan atau bisnis_1','Pelatihan keterampilan atau bisnis_2','Pelatihan lainnya','Pekerjaan formal','Berwirausaha, usaha mikro','Pekerjaan terlindung','Layanan finansial dari organisasi disabilitas','Layanan finansial dari organisasi mainstream') NOT NULL,
  `jenis_rujukan` enum('Kesehatan','Pendidikan','Training/bimbingan','Support grup','Rehab/terapi','Alat bantu','Financial services','Employment') NOT NULL,
  `keterangan` text NOT NULL,
  `cara` enum('Telepon/text','Field visit','At base') NOT NULL,
  `tanggal` date NOT NULL,
  `tanggal_follow_up` date NOT NULL,
  `rencana_monitoring` text NOT NULL,
  `hasil_monitoring_fasilitas1` text NOT NULL,
  `cara_fasilitas1` enum('Telepon/text','Field visit','At base') NOT NULL,
  `tanggal_fasilitas1` date NOT NULL,
  `hasil_monitoring_fasilitas2` text NOT NULL,
  `cara_fasilitas2` enum('Telepon/text','Field visit','At base') NOT NULL,
  `tanggal_fasilitas2` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intervensi`
--

INSERT INTO `intervensi` (`id`, `nomor_identifikasi`, `subjek_intervensi`, `jenis_intervensi`, `jenis_rujukan`, `keterangan`, `cara`, `tanggal`, `tanggal_follow_up`, `rencana_monitoring`, `hasil_monitoring_fasilitas1`, `cara_fasilitas1`, `tanggal_fasilitas1`, `hasil_monitoring_fasilitas2`, `cara_fasilitas2`, `tanggal_fasilitas2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '44333', 'Orang tua/wali', 'Konseling', 'Support grup', 'asdfd', 'Field visit', '2018-09-03', '2018-09-03', 'asd', 'asdf', 'Field visit', '2018-09-17', 'asdf', 'At base', '2018-09-11', '2018-09-05 04:20:14', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(3) NOT NULL,
  `username` varchar(15) NOT NULL,
  `nama_lengkap` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `kecamatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `username`, `nama_lengkap`, `email`, `password`, `kecamatan`) VALUES
(1, 'admin', 'Administrator', 'admin@localhost', '202cb962ac59075b964b07152d234b70', 'admin'),
(2, 'lowokwaru', 'Admin Lowokwaru', 'admin@localhost', '202cb962ac59075b964b07152d234b70', 'Lowokwaru'),
(3, 'klojen', 'Admin Klojen', 'admin@localhost', '202cb962ac59075b964b07152d234b70', 'Klojen');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intervensi`
--
ALTER TABLE `intervensi`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `asessmen`
--
ALTER TABLE `asessmen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `intervensi`
--
ALTER TABLE `intervensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
