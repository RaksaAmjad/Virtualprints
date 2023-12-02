-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2023 at 04:42 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sipesan`
--

-- --------------------------------------------------------

--
-- Table structure for table `sipesan_brosur`
--

CREATE TABLE `sipesan_brosur` (
  `brosur_id` varchar(10) NOT NULL,
  `brosur_keranjang_id` varchar(10) NOT NULL,
  `brosur_ukuran` enum('A4','A5') NOT NULL,
  `brosur_bahan` enum('hvs','konstruk') NOT NULL,
  `brosur_jumlah` int(11) NOT NULL,
  `brosur_total` int(11) NOT NULL,
  `brosur_estimasi` varchar(100) NOT NULL,
  `brosur_foto` text NOT NULL,
  `brosur_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipesan_brosur`
--

INSERT INTO `sipesan_brosur` (`brosur_id`, `brosur_keranjang_id`, `brosur_ukuran`, `brosur_bahan`, `brosur_jumlah`, `brosur_total`, `brosur_estimasi`, `brosur_foto`, `brosur_date_created`) VALUES
('BRC-15537', 'CRT-15537', 'A4', 'hvs', 1, 500000, '7', 'KTM_Ketua_Yogaraksa_Amjad_H.jpeg', '2022-10-16 17:18:57'),
('BRC-16445', 'CRT-16445', 'A4', 'hvs', 2, 1000000, '3', 'KTM_Ketua_Yogaraksa_Amjad_H.pdf', '2022-10-16 17:34:05'),
('BRC-29881', 'CRT-75430', 'A4', 'hvs', 1, 500000, '10', 'Screenshot_(2).png', '2019-08-11 20:24:41'),
('BRC-30100', 'CRT-75430', 'A5', 'konstruk', 1, 750000, '10', 'Screenshot_(92).png', '2019-08-11 20:28:20'),
('BRC-43032', 'CRT-43032', 'A4', 'konstruk', 1, 750000, 'vaagagakkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', '729-1522-1-PB1.pdf', '2022-12-10 10:30:32'),
('BRC-75346', 'CRT-75347', 'A4', 'konstruk', 12, 9000000, '99', '729-1522-1-PB.pdf', '2022-12-09 15:42:27'),
('BRC-77719', 'CRT-77719', 'A4', 'hvs', 1, 500000, 'afafafaEGGwgywtw', 'DPPL_SISFO_INVENTORI_SWALAYAN_yoga.docx', '2022-12-09 16:21:59'),
('BRC-79618', 'CRT-79619', 'A4', 'hvs', 1, 500000, '5', '1039082_720.jpg', '2022-10-18 14:53:39'),
('BRC-84443', 'CRT-84443', 'A5', 'konstruk', 1, 750000, '2', '1.PNG', '2022-11-11 23:34:03'),
('BRC-95735', 'CRT-89848', 'A4', 'hvs', 1, 200000, '', 'UAS_KI_3130020023_Yogaraksa_Amjad_Hernawan1.pdf', '2023-01-15 22:15:35'),
('BRC-95758', 'CRT-89848', 'A4', 'konstruk', 1, 500000, '', 'soal_uas_kepemimpinan_dan_interpersonal.docx', '2023-01-15 22:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `sipesan_faktur`
--

CREATE TABLE `sipesan_faktur` (
  `faktur_id` varchar(10) NOT NULL,
  `faktur_keranjang_id` varchar(10) NOT NULL,
  `faktur_bank` enum('bri','bni') NOT NULL,
  `faktur_status` enum('belum','sudah','tunggu') NOT NULL DEFAULT 'belum',
  `faktur_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipesan_faktur`
--

INSERT INTO `sipesan_faktur` (`faktur_id`, `faktur_keranjang_id`, `faktur_bank`, `faktur_status`, `faktur_date_created`) VALUES
('INV-06780', 'CRT-06729', 'bri', 'belum', '2019-08-06 22:53:00'),
('INV-11376', 'CRT-69598', 'bri', 'sudah', '2019-08-02 09:02:56'),
('INV-15556', 'CRT-15537', 'bri', 'sudah', '2022-10-16 17:19:16'),
('INV-16483', 'CRT-16445', 'bri', 'sudah', '2022-10-16 17:34:43'),
('INV-30460', 'CRT-75430', 'bri', 'sudah', '2019-08-11 20:34:20'),
('INV-30764', 'CRT-30738', 'bri', 'belum', '2019-08-11 20:39:24'),
('INV-30879', 'CRT-30858', 'bri', 'belum', '2019-08-11 20:41:19'),
('INV-43046', 'CRT-43032', 'bri', 'sudah', '2022-12-10 10:30:46'),
('INV-55059', 'CRT-55029', 'bni', 'belum', '2022-12-27 22:30:59'),
('INV-57920', 'CRT-10688', 'bni', 'belum', '2019-08-08 16:52:00'),
('INV-68672', 'CRT-62818', 'bri', 'tunggu', '2022-12-18 20:04:32'),
('INV-68816', 'CRT-68796', 'bni', 'sudah', '2022-12-18 20:06:56'),
('INV-69855', 'CRT-55509', 'bri', 'belum', '2023-01-09 20:10:55'),
('INV-69969', 'CRT-69891', 'bni', 'belum', '2023-01-09 20:12:49'),
('INV-73209', 'CRT-73166', 'bri', 'sudah', '2019-08-08 21:06:49'),
('INV-75665', 'CRT-75347', 'bri', 'tunggu', '2022-12-09 15:47:45'),
('INV-77271', 'CRT-77257', 'bri', 'sudah', '2022-12-09 16:14:31'),
('INV-77737', 'CRT-77719', 'bni', 'sudah', '2022-12-09 16:22:17'),
('INV-78998', 'CRT-78645', 'bri', 'sudah', '2023-01-14 13:49:58'),
('INV-79595', 'CRT-79574', 'bri', 'sudah', '2023-01-14 13:59:55'),
('INV-79724', 'CRT-79619', 'bri', 'belum', '2022-10-18 14:55:24'),
('INV-80445', 'CRT-80436', 'bni', 'sudah', '2023-01-14 14:14:05'),
('INV-81280', 'CRT-81166', 'bri', 'belum', '2019-08-12 10:41:20'),
('INV-84454', 'CRT-84443', 'bri', 'belum', '2022-11-11 23:34:14'),
('INV-87018', 'CRT-57318', 'bri', 'sudah', '2023-01-15 19:50:18'),
('INV-98170', 'CRT-70007', 'bri', 'belum', '2023-01-13 15:22:50'),
('INV-99475', 'CRT-98206', 'bri', 'sudah', '2023-01-13 15:44:35');

-- --------------------------------------------------------

--
-- Table structure for table `sipesan_kartu`
--

CREATE TABLE `sipesan_kartu` (
  `kartu_id` varchar(10) NOT NULL,
  `kartu_keranjang_id` varchar(10) NOT NULL,
  `kartu_bahan` enum('biasa','bagus') NOT NULL,
  `kartu_jumlah` int(11) NOT NULL,
  `kartu_estimasi` varchar(100) NOT NULL,
  `kartu_total` int(11) NOT NULL,
  `kartu_foto` text NOT NULL,
  `kartu_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipesan_kartu`
--

INSERT INTO `sipesan_kartu` (`kartu_id`, `kartu_keranjang_id`, `kartu_bahan`, `kartu_jumlah`, `kartu_estimasi`, `kartu_total`, `kartu_foto`, `kartu_date_created`) VALUES
('CRD-24383', 'CRT-75430', 'bagus', 2, '10', 90000, 'Screenshot_(5).png', '2019-08-11 18:53:03'),
('CRD-30738', 'CRT-30738', 'biasa', 1, '2', 35000, 'Screenshot_(6).png', '2019-08-11 20:38:58'),
('CRD-30751', 'CRT-30738', 'bagus', 1, '3', 45000, 'Screenshot_(11).png', '2019-08-11 20:39:11'),
('CRD-30858', 'CRT-30858', 'biasa', 2, '10', 70000, 'Screenshot_(7).png', '2019-08-11 20:40:58'),
('CRD-30868', 'CRT-30858', 'bagus', 1, '12', 45000, 'Screenshot_(7)1.png', '2019-08-11 20:41:08'),
('CRD-77257', 'CRT-77257', 'bagus', 1, '10', 45000, '729-1522-1-PB.pdf', '2022-12-09 16:14:17'),
('CRD-80436', 'CRT-80436', 'biasa', 1, '', 35000, 'WIN_20201013_07_14_54_Pro.jpg', '2023-01-14 14:13:56'),
('CRD-87007', 'CRT-57318', 'biasa', 1, 'Secepatnya', 35000, 'UAS_KI_3130020023_Yogaraksa_Amjad_Hernawan.pdf', '2023-01-15 19:50:07');

-- --------------------------------------------------------

--
-- Table structure for table `sipesan_keranjang`
--

CREATE TABLE `sipesan_keranjang` (
  `keranjang_id` varchar(10) NOT NULL,
  `keranjang_pengguna_id` int(11) NOT NULL,
  `keranjang_total` int(11) NOT NULL,
  `keranjang_status` enum('belum','selesai','bayar_diterima','bayar_menunggu','bayar_verifikasi') NOT NULL DEFAULT 'belum',
  `keranjang_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipesan_keranjang`
--

INSERT INTO `sipesan_keranjang` (`keranjang_id`, `keranjang_pengguna_id`, `keranjang_total`, `keranjang_status`, `keranjang_date_created`) VALUES
('CRT-06729', 2, 370000, 'bayar_menunggu', '2019-08-06 22:52:09'),
('CRT-10688', 2, 180000, 'bayar_menunggu', '2019-08-06 23:58:08'),
('CRT-15537', 4, 500000, 'bayar_menunggu', '2022-10-16 17:18:57'),
('CRT-16445', 4, 1000000, 'bayar_menunggu', '2022-10-16 17:34:05'),
('CRT-30738', 2, 80000, 'bayar_menunggu', '2019-08-11 20:38:58'),
('CRT-30858', 2, 115000, 'bayar_menunggu', '2019-08-11 20:40:58'),
('CRT-43032', 4, 750000, 'bayar_menunggu', '2022-12-10 10:30:32'),
('CRT-55029', 4, 1000000, 'bayar_menunggu', '2022-12-27 22:30:29'),
('CRT-55509', 4, 2250000, 'bayar_menunggu', '2022-12-27 22:38:29'),
('CRT-57318', 5, 35000, 'bayar_menunggu', '2023-01-15 11:35:18'),
('CRT-62818', 4, 3250000, 'bayar_menunggu', '2022-12-18 18:26:58'),
('CRT-68796', 4, 500000, 'bayar_menunggu', '2022-12-18 20:06:36'),
('CRT-69598', 2, 1230000, 'bayar_menunggu', '2019-07-27 02:33:18'),
('CRT-69891', 4, 500000, 'bayar_menunggu', '2023-01-09 20:11:31'),
('CRT-70007', 4, 500000, 'bayar_menunggu', '2023-01-09 20:13:27'),
('CRT-73166', 2, 4500000, 'bayar_menunggu', '2019-08-08 21:06:06'),
('CRT-75347', 4, 9000000, 'bayar_menunggu', '2022-12-09 15:42:27'),
('CRT-75430', 2, 4100000, 'bayar_menunggu', '2019-08-08 21:43:50'),
('CRT-77257', 4, 45000, 'bayar_menunggu', '2022-12-09 16:14:17'),
('CRT-77719', 4, 500000, 'bayar_menunggu', '2022-12-09 16:21:59'),
('CRT-78645', 4, 18000, 'bayar_menunggu', '2023-01-14 13:44:05'),
('CRT-79574', 5, 47500, 'bayar_menunggu', '2023-01-14 13:59:34'),
('CRT-79619', 4, 500000, 'bayar_menunggu', '2022-10-18 14:53:39'),
('CRT-80436', 5, 35000, 'bayar_menunggu', '2023-01-14 14:13:56'),
('CRT-81166', 2, 38000, 'bayar_menunggu', '2019-08-12 10:39:26'),
('CRT-84443', 4, 750000, 'bayar_menunggu', '2022-11-11 23:34:03'),
('CRT-89848', 4, 700000, 'belum', '2023-01-15 20:37:28'),
('CRT-98206', 4, 13000, 'bayar_menunggu', '2023-01-13 15:23:26');

-- --------------------------------------------------------

--
-- Table structure for table `sipesan_konfirmasi`
--

CREATE TABLE `sipesan_konfirmasi` (
  `konfirmasi_id` varchar(10) NOT NULL,
  `konfirmasi_faktur_id` varchar(10) NOT NULL,
  `konfirmasi_rekening` varchar(30) NOT NULL,
  `konfirmasi_atas_nama` varchar(50) NOT NULL,
  `konfirmasi_nominal` int(11) NOT NULL,
  `konfirmasi_struk` text NOT NULL,
  `konfirmasi_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipesan_konfirmasi`
--

INSERT INTO `sipesan_konfirmasi` (`konfirmasi_id`, `konfirmasi_faktur_id`, `konfirmasi_rekening`, `konfirmasi_atas_nama`, `konfirmasi_nominal`, `konfirmasi_struk`, `konfirmasi_date_created`) VALUES
('CFM-15611', 'INV-15556', '215151251515', 'yoga', 500000, 'EPP1.png', '2022-10-16 17:20:11'),
('CFM-16581', 'INV-16483', '2222', 'rhe', 1000000, 'nic.png', '2022-10-16 17:36:21'),
('CFM-43078', 'INV-43046', '1414115151', 'Atatatstatas', 750000, '11.PNG', '2022-12-10 10:31:18'),
('CFM-68705', 'INV-68672', '1345151', 'agag', 2147483647, '1a.PNG', '2022-12-18 20:05:05'),
('CFM-68843', 'INV-68816', '15415161', 'asgaga', 500000, 'abc1.JPG', '2022-12-18 20:07:24'),
('CFM-75698', 'INV-75665', '141411', 'afq', 900000000, '1.PNG', '2022-12-09 15:48:19'),
('CFM-77304', 'INV-77271', '2151515', 'asd', 45000, 'abc.JPG', '2022-12-09 16:15:04'),
('CFM-77788', 'INV-77737', '151512512', 'aga', 500000, 'WhatsApp_Image_2022-11-13_at_22_57_31_(2).jpeg', '2022-12-09 16:23:08'),
('CFM-79060', 'INV-78998', '452525253', 'aq', 18000, 'WIN_20201013_07_14_54_Pro_(3).jpg', '2023-01-14 13:51:00'),
('CFM-79661', 'INV-79595', '4362642', 'uiitity', 47500, 'dashboard.PNG', '2023-01-14 14:01:01'),
('CFM-80481', 'INV-80445', '87565674654', 'hjjhj', 35000, 'WIN_20201013_07_14_54_Pro_(3)1.jpg', '2023-01-14 14:14:41'),
('CFM-87055', 'INV-87018', '51512512', 'Afni', 35000, 'abc2.JPG', '2023-01-15 19:50:55'),
('CFM-99516', 'INV-99475', '542524525425', 'qww', 13000, 'ab.JPG', '2023-01-13 15:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `sipesan_pengguna`
--

CREATE TABLE `sipesan_pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_username` varchar(255) NOT NULL,
  `pengguna_password` varchar(255) NOT NULL,
  `pengguna_nama` varchar(255) DEFAULT NULL,
  `pengguna_nomor_hp` varchar(20) DEFAULT NULL,
  `pengguna_email` varchar(255) DEFAULT NULL,
  `pengguna_level` enum('administrator','pemesan') NOT NULL,
  `pengguna_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipesan_pengguna`
--

INSERT INTO `sipesan_pengguna` (`pengguna_id`, `pengguna_username`, `pengguna_password`, `pengguna_nama`, `pengguna_nomor_hp`, `pengguna_email`, `pengguna_level`, `pengguna_date_created`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, NULL, 'administrator', '2019-07-18 16:35:32'),
(2, 'pemesan', '*E6CC90B878B948C35E92B003C792C46C58C4AF40', 'Randi', '081234567890', 'pemesan@gmail.com', 'pemesan', '2019-07-24 11:05:24'),
(3, 'testing', '7f2ababa423061c509f4923dd04b6cf1', 'nama test', '1234567', 'testing@gmail.com', 'pemesan', '2019-08-11 23:10:40'),
(4, 'yoga', 'c4ca4238a0b923820dcc509a6f75849b', 'Yoga', '087654764774', 'yogaraksa22@gmail.com', 'pemesan', '2022-10-16 17:14:54'),
(5, 'afniva', 'c4ca4238a0b923820dcc509a6f75849b', 'Afni Virda Alfadina', '085707072825', 'afnivir02@gmail.com', 'pemesan', '2023-01-14 13:56:54');

-- --------------------------------------------------------

--
-- Table structure for table `sipesan_print`
--

CREATE TABLE `sipesan_print` (
  `print_id` varchar(10) NOT NULL,
  `print_keranjang_id` varchar(10) NOT NULL,
  `print_ukuran` enum('A4','A5') NOT NULL,
  `print_bahan` enum('hvs','konstruk') NOT NULL,
  `print_jumlah` int(11) NOT NULL,
  `print_total` int(11) NOT NULL,
  `print_estimasi` varchar(100) NOT NULL,
  `print_foto` text NOT NULL,
  `print_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sipesan_spanduk`
--

CREATE TABLE `sipesan_spanduk` (
  `spanduk_id` varchar(10) NOT NULL,
  `spanduk_keranjang_id` varchar(10) DEFAULT NULL,
  `spanduk_ukuran` enum('A4','F4') NOT NULL,
  `spanduk_bahan` enum('biasa','menengah','bagus') NOT NULL,
  `spanduk_jumlah` int(11) NOT NULL,
  `spanduk_estimasi` varchar(100) NOT NULL,
  `spanduk_total` int(11) NOT NULL,
  `spanduk_foto` text NOT NULL,
  `spanduk_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipesan_spanduk`
--

INSERT INTO `sipesan_spanduk` (`spanduk_id`, `spanduk_keranjang_id`, `spanduk_ukuran`, `spanduk_bahan`, `spanduk_jumlah`, `spanduk_estimasi`, `spanduk_total`, `spanduk_foto`, `spanduk_date_created`) VALUES
('SDK-06729', 'CRT-06729', 'A4', 'biasa', 2, '10', 160000, 'imk_jadwal_test.png', '2019-08-06 22:52:09'),
('SDK-06767', 'CRT-06729', 'A4', 'bagus', 2, '3', 210000, 'Screenshot_(6)1.png', '2019-08-06 22:52:47'),
('SDK-10688', 'CRT-10688', 'A4', 'menengah', 2, '12', 180000, 'Screenshot_(6)2.png', '2019-08-06 23:58:08'),
('SDK-69598', 'CRT-69598', 'A4', 'menengah', 1, '12', 180000, 'Screenshot_(6).png', '2019-07-27 02:33:18'),
('SDK-69692', 'CRT-69598', 'A4', 'menengah', 1, '4', 1050000, 'Screenshot_(1)1.png', '2019-07-27 02:34:52'),
('SDK-73166', 'CRT-73166', 'A4', 'menengah', 3, '10', 4500000, 'imk_jadwal_test1.png', '2019-08-08 21:06:06'),
('SDK-75430', 'CRT-75430', 'A4', 'biasa', 2, '10', 2000000, 'Screenshot_(3).png', '2019-08-08 21:43:50'),
('SDK-78960', 'CRT-78645', 'F4', 'menengah', 20, '', 18000, 'WIN_20201013_07_14_54_Pro_(2)1.jpg', '2023-01-14 13:49:20'),
('SDK-79574', 'CRT-79574', 'A4', 'bagus', 35, 'secepatnya', 47500, 'AFNI_VIRDA_ALFADINA.png', '2023-01-14 13:59:34'),
('SDK-81225', 'CRT-81166', 'A4', 'biasa', 1, '10', 8000, 'Screenshot_(1)2.png', '2019-08-12 10:40:25'),
('SDK-99332', 'CRT-98206', 'A4', 'menengah', 10, 'dgsgs', 13000, 'DPPL_uas.pdf', '2023-01-13 15:42:12');

-- --------------------------------------------------------

--
-- Table structure for table `sipesan_stiker`
--

CREATE TABLE `sipesan_stiker` (
  `stiker_id` varchar(10) NOT NULL,
  `stiker_keranjang_id` varchar(10) NOT NULL,
  `stiker_panjang` double NOT NULL,
  `stiker_lebar` double NOT NULL,
  `stiker_bahan` enum('biasa','bagus') NOT NULL,
  `stiker_jumlah` int(11) NOT NULL,
  `stiker_estimasi` varchar(100) NOT NULL,
  `stiker_total` int(11) NOT NULL,
  `stiker_foto` text NOT NULL,
  `stiker_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipesan_stiker`
--

INSERT INTO `sipesan_stiker` (`stiker_id`, `stiker_keranjang_id`, `stiker_panjang`, `stiker_lebar`, `stiker_bahan`, `stiker_jumlah`, `stiker_estimasi`, `stiker_total`, `stiker_foto`, `stiker_date_created`) VALUES
('SKR-22758', 'CRT-75430', 2, 2, 'bagus', 2, '10', 760000, 'Screenshot_(3).png', '2019-08-11 18:25:58'),
('SKR-81166', 'CRT-81166', 1, 0.4, 'biasa', 1, '10', 30000, 'Screenshot_(2)1.png', '2019-08-12 10:39:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sipesan_brosur`
--
ALTER TABLE `sipesan_brosur`
  ADD PRIMARY KEY (`brosur_id`),
  ADD KEY `brosur_keranjang_id` (`brosur_keranjang_id`);

--
-- Indexes for table `sipesan_faktur`
--
ALTER TABLE `sipesan_faktur`
  ADD PRIMARY KEY (`faktur_id`),
  ADD KEY `faktur_keranjang_id` (`faktur_keranjang_id`);

--
-- Indexes for table `sipesan_kartu`
--
ALTER TABLE `sipesan_kartu`
  ADD PRIMARY KEY (`kartu_id`),
  ADD KEY `kartu_keranjang_id` (`kartu_keranjang_id`);

--
-- Indexes for table `sipesan_keranjang`
--
ALTER TABLE `sipesan_keranjang`
  ADD PRIMARY KEY (`keranjang_id`),
  ADD KEY `keranjang_pengguna_id` (`keranjang_pengguna_id`);

--
-- Indexes for table `sipesan_konfirmasi`
--
ALTER TABLE `sipesan_konfirmasi`
  ADD PRIMARY KEY (`konfirmasi_id`),
  ADD KEY `konfirmasi_faktur_id` (`konfirmasi_faktur_id`);

--
-- Indexes for table `sipesan_pengguna`
--
ALTER TABLE `sipesan_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indexes for table `sipesan_print`
--
ALTER TABLE `sipesan_print`
  ADD PRIMARY KEY (`print_id`),
  ADD KEY `print_keranjang_id` (`print_keranjang_id`);

--
-- Indexes for table `sipesan_spanduk`
--
ALTER TABLE `sipesan_spanduk`
  ADD PRIMARY KEY (`spanduk_id`),
  ADD KEY `spanduk_keranjang_id` (`spanduk_keranjang_id`);

--
-- Indexes for table `sipesan_stiker`
--
ALTER TABLE `sipesan_stiker`
  ADD PRIMARY KEY (`stiker_id`),
  ADD KEY `stiker_keranjang_id` (`stiker_keranjang_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sipesan_pengguna`
--
ALTER TABLE `sipesan_pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
