-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2024 at 07:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb_smansa`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `id_antrian` varchar(255) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `kode_pendaftaran` varchar(255) NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `jalur_pendaftaran` varchar(255) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `loket` varchar(255) DEFAULT NULL,
  `ket_antrian` varchar(255) DEFAULT NULL,
  `no_antrian` int(11) NOT NULL,
  `qr_code` varchar(255) NOT NULL,
  `sesi_antrian` varchar(255) DEFAULT NULL,
  `tanggal_antrian` date NOT NULL,
  `status_antrian` enum('0','1','2','3','4') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_kategori`
--

CREATE TABLE `master_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `kode_kategori` varchar(255) NOT NULL,
  `status_kategori` enum('1','0') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_kategori`
--

INSERT INTO `master_kategori` (`id_kategori`, `nama_kategori`, `kode_kategori`, `status_kategori`, `created_at`, `updated_at`) VALUES
(1, 'LOKET', 'LK', '1', '2024-05-28 11:28:17', '2024-05-28 11:28:17'),
(2, 'Role Users', 'ROLE', '1', '2024-05-28 11:28:55', '2024-05-28 11:28:55'),
(4, 'Setting Antrian', 'set_antrian', '1', '2024-06-01 05:33:55', '2024-06-01 05:33:55');

-- --------------------------------------------------------

--
-- Table structure for table `master_referensi`
--

CREATE TABLE `master_referensi` (
  `id_referensi` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama_referensi` varchar(255) NOT NULL,
  `kode_referensi` varchar(255) NOT NULL,
  `status_referensi` enum('1','0') NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_referensi`
--

INSERT INTO `master_referensi` (`id_referensi`, `kategori_id`, `nama_referensi`, `kode_referensi`, `status_referensi`, `urutan`, `created_at`, `updated_at`) VALUES
(1, 2, 'Administrator', 'Admin', '1', 1, '2024-05-28 11:29:15', '2024-05-28 11:29:15'),
(2, 2, 'Petugas', 'User', '1', 2, '2024-05-28 11:29:38', '2024-05-28 11:30:13'),
(3, 2, 'Verifikator', 'Petugas', '1', 3, '2024-05-28 11:29:56', '2024-05-28 11:29:56'),
(4, 4, 'max_antrian', '105', '1', 1, '2024-06-01 05:35:44', '2024-06-01 05:36:24'),
(5, 4, 'Sesi 1', '07.00 - 09.00', '1', 2, '2024-06-01 05:38:45', '2024-06-07 14:52:11'),
(6, 4, 'Sesi 2', '09.00 - 11.00', '1', 3, '2024-06-01 05:39:12', '2024-06-06 21:00:10'),
(7, 4, 'Sesi 3', '13.00 - 23.00', '1', 4, '2024-06-01 05:39:23', '2024-06-07 15:08:30'),
(8, 4, 'tanggal_antrian', '2024-06-8', '1', 5, '2024-06-01 06:13:35', '2024-06-08 07:59:15'),
(9, 1, 'Loket 1', 'loket1', '1', 1, '2024-06-03 14:45:22', '2024-06-03 14:45:22'),
(10, 1, 'Loket 2', 'loket2', '1', 2, '2024-06-03 14:45:34', '2024-06-03 14:45:34'),
(11, 1, 'Loket 3', 'loket3', '1', 3, '2024-06-03 14:45:45', '2024-06-03 14:45:45'),
(12, 1, 'Loket 4', 'loket4', '1', 4, '2024-06-03 14:46:01', '2024-06-03 14:46:01'),
(14, 4, 'status_antrian', '0', '1', 6, '2024-06-06 21:01:06', '2024-06-07 17:35:04');

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id_notifikasi` int(11) NOT NULL,
  `nama_notifikasi` varchar(255) DEFAULT NULL,
  `isi_notifikasi` varchar(255) DEFAULT NULL,
  `status_notifikasi` enum('1','0') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`id_notifikasi`, `nama_notifikasi`, `isi_notifikasi`, `status_notifikasi`, `created_at`, `updated_at`) VALUES
(1, 'Antrean', 'Nomor antrean 1 , Silahkan ke, Loket 1', '0', '2024-06-04 08:35:26', '2024-06-04 04:05:36'),
(2, 'asdsad', 'asd', '0', '2024-06-04 10:59:17', '2024-06-04 04:05:16'),
(3, 'alam', 'alam', '0', '2024-06-04 11:00:59', '2024-06-04 04:02:40'),
(4, 'asdasdsad', 'alammmm', '0', '2024-06-04 11:02:08', '2024-06-04 04:02:50'),
(5, 'Antrean', 'Nomor antrian, 1, silahkan menuju ke,  loket 1', '0', '2024-06-04 04:59:52', '2024-06-04 05:00:17'),
(6, 'Pemberkasan Antrian', 'Nomor antrean, 2, silahkan menuju ke, LOKET 1', '0', '2024-06-04 07:16:41', '2024-06-04 07:16:42'),
(7, 'Pemberkasan Antrian', 'Nomor antrean, 1, silahkan menuju ke, LOKET 1', '0', '2024-06-04 07:16:51', '2024-06-04 07:16:52'),
(8, 'Pemberkasan Antrian', 'Nomor antrean, 2, silahkan menuju ke, LOKET 1', '0', '2024-06-04 07:17:45', '2024-06-04 07:17:46'),
(9, 'Pemberkasan Antrian', 'Nomor antrean, 2, silahkan menuju ke, LOKET 1', '0', '2024-06-04 07:18:00', '2024-06-04 07:18:01'),
(10, 'Pemberkasan Antrian', 'Nomor antrean, 1, silahkan menuju ke, LOKET 1', '0', '2024-06-04 07:18:09', '2024-06-04 07:18:11'),
(11, 'Pemberkasan Antrian', 'Nomor antrean, 1, silahkan menuju ke, LOKET 1', '0', '2024-06-04 07:18:13', '2024-06-04 07:18:31'),
(12, 'Pemberkasan Antrian', 'Nomor antrean, 2, silahkan menuju ke, LOKET 1', '0', '2024-06-04 07:18:16', '2024-06-04 07:18:21'),
(13, 'Pemberkasan Antrian', 'Nomor antrean, 1, silahkan menuju ke, LOKET 1', '0', '2024-06-04 07:18:41', '2024-06-04 07:18:42'),
(14, 'Pemberkasan Antrian', 'Nomor antrean, 2, silahkan menuju ke LOKET 1', '0', '2024-06-04 07:19:19', '2024-06-04 07:19:20'),
(15, 'Pemberkasan Antrian', 'Nomor antrean, 2, silahkan menuju ke LOKET 1', '0', '2024-06-04 07:19:57', '2024-06-04 07:19:58'),
(16, 'Antrean', 'Nomor antrean, 1, silahkan menuju ke LOKET 1', '0', '2024-06-04 07:29:15', '2024-06-04 07:29:16'),
(17, 'Antrean', 'Nomor antrean, 1, silahkan menuju ke LOKET 1', '0', '2024-06-04 07:29:27', '2024-06-04 07:29:28'),
(18, 'Antrean', 'Nomor antrean, 2, silahkan menuju ke LOKET 1', '0', '2024-06-04 07:29:34', '2024-06-04 07:29:38'),
(19, 'Pemberkasan Antrian', 'Nomor antrean, 2, silahkan menuju ke LOKET 1', '0', '2024-06-04 07:30:10', '2024-06-04 07:30:10'),
(20, 'Pemberkasan Antrian', 'Nomor antrean, 1, silahkan menuju ke LOKET 1', '0', '2024-06-04 07:30:17', '2024-06-04 07:30:20'),
(21, 'Pemberkasan Antrian', 'Nomor antrean, 1, silahkan menuju ke LOKET 1', '0', '2024-06-04 07:30:20', '2024-06-04 07:30:40'),
(22, 'Pemberkasan Antrian', 'Nomor antrean, 1, silahkan menuju ke LOKET 1', '0', '2024-06-04 07:30:27', '2024-06-04 07:30:30'),
(23, 'Antrean', 'Nomor antrean, 1, silahkan menuju ke Administrator', '0', '2024-06-04 23:29:35', '2024-06-04 23:29:36'),
(24, 'Pemberkasan Antrian', 'Nomor antrean, 1, silahkan menuju ke Administrator', '0', '2024-06-04 23:29:52', '2024-06-04 23:29:52'),
(25, 'Pemberkasan Antrian', 'Nomor antrean, 1, silahkan menuju ke Administrator', '0', '2024-06-04 23:29:54', '2024-06-04 23:30:03'),
(26, 'Pemberkasan Antrian', 'Nomor antrean, 1, silahkan menuju ke Administrator', '0', '2024-06-04 23:30:05', '2024-06-04 23:30:23'),
(27, 'Pemberkasan Antrian', 'Nomor antrean, 1, silahkan menuju ke Administrator', '0', '2024-06-04 23:30:06', '2024-06-04 23:30:13'),
(28, 'Antrean', 'Nomor antrean, 10, silahkan menuju ke LOKET 1', '0', '2024-06-05 19:55:27', '2024-06-05 19:55:28'),
(29, 'Antrean', 'Nomor antrean, 11, silahkan menuju ke LOKET 2', '0', '2024-06-05 19:55:56', '2024-06-05 19:55:57'),
(30, 'Antrean', 'Nomor antrean, 12, silahkan menuju ke LOKET 3', '0', '2024-06-05 19:56:57', '2024-06-05 19:56:58'),
(31, 'Antrean', 'Nomor antrean, 13, silahkan menuju ke LOKET 4', '0', '2024-06-05 19:57:31', '2024-06-05 19:57:32'),
(32, 'Pemberkasan Antrian', 'Nomor antrean, 13, silahkan menuju ke LOKET 4', '0', '2024-06-05 20:00:14', '2024-06-05 20:00:15'),
(33, 'Pemberkasan Antrian', 'Nomor antrean, 13, silahkan menuju ke LOKET 4', '0', '2024-06-05 20:00:22', '2024-06-05 20:00:25'),
(34, 'Pemberkasan Antrian', 'Nomor antrean, 14, silahkan menuju ke Administrator', '0', '2024-06-05 20:18:31', '2024-06-05 20:18:32'),
(35, 'Antrean', 'Nomor antrean, 10, silahkan menuju ke LOKET 1', '0', '2024-06-05 20:33:05', '2024-06-05 20:33:06'),
(36, 'Pemberkasan Antrian', 'Nomor antrean, 10, silahkan menuju ke LOKET 1', '0', '2024-06-05 20:33:35', '2024-06-05 20:33:36'),
(37, 'Antrean', 'Nomor antrean, 10, silahkan menuju ke LOKET 1', '0', '2024-06-05 20:33:45', '2024-06-05 20:33:46'),
(38, 'Pemberkasan Antrian', 'Nomor antrean, 14, silahkan menuju ke LOKET 1', '0', '2024-06-05 20:39:26', '2024-06-05 20:39:27'),
(39, 'Pemberkasan Antrian', 'Nomor antrean, 14, silahkan menuju ke LOKET 1', '0', '2024-06-05 20:39:42', '2024-06-05 20:39:42'),
(40, 'Antrean', 'Nomor antrean, 14, silahkan menuju ke LOKET 1', '0', '2024-06-05 20:43:10', '2024-06-05 20:43:10'),
(41, 'Antrean', 'Nomor antrean, 11, silahkan menuju ke Administrator', '0', '2024-06-05 22:13:56', '2024-06-05 22:13:57'),
(42, 'Pemberkasan Antrian', 'Nomor antrean, 11, silahkan menuju ke Administrator', '0', '2024-06-05 22:14:08', '2024-06-05 22:14:08'),
(43, 'Antrean', 'Nomor antrean, 11, silahkan menuju ke LOKET 1', '0', '2024-06-05 22:23:41', '2024-06-05 22:23:41'),
(44, 'Pemberkasan Antrian', 'Nomor antrean, 11, silahkan menuju ke LOKET 1', '0', '2024-06-05 22:23:50', '2024-06-05 22:23:52'),
(45, 'Antrean', 'Nomor antrean, 12, silahkan menuju ke LOKET 1', '0', '2024-06-05 22:23:53', '2024-06-05 22:24:02'),
(46, 'Antrean', 'Nomor antrean, 62, silahkan menuju ke Administrator', '0', '2024-06-07 15:51:26', '2024-06-07 16:10:44'),
(47, 'Antrean', 'Nomor antrean, 63, silahkan menuju ke Administrator', '0', '2024-06-07 15:51:30', '2024-06-07 16:10:23'),
(48, 'Pemberkasan Antrian', 'Nomor antrean, 1, silahkan menuju ke Administrator', '0', '2024-06-07 15:57:47', '2024-06-07 16:10:13'),
(49, 'Pemberkasan Antrian', 'Nomor antrean, 2, silahkan menuju ke Administrator', '0', '2024-06-07 15:57:51', '2024-06-07 16:10:03'),
(50, 'Pemberkasan Antrian', 'Nomor antrean, 60, silahkan menuju ke Administrator', '0', '2024-06-07 16:10:27', '2024-06-07 16:10:33'),
(51, 'Pemberkasan Antrian', 'Nomor antrean, 60, silahkan menuju ke Administrator', '0', '2024-06-07 16:11:15', '2024-06-07 16:11:16'),
(52, 'Pemberkasan Antrian', 'Nomor antrean, 62, silahkan menuju ke Administrator', '0', '2024-06-07 18:52:50', '2024-06-07 18:52:51'),
(53, 'Pemberkasan Antrian', 'Nomor antrean, 63, silahkan menuju ke Administrator', '0', '2024-06-07 18:53:00', '2024-06-07 18:53:01'),
(54, 'Pemberkasan Antrian', 'Nomor antrean, 60, silahkan menuju ke Administrator', '0', '2024-06-07 18:53:14', '2024-06-07 18:53:15'),
(55, 'Pemberkasan Antrian', 'Nomor antrean, 4, silahkan menuju ke Administrator', '0', '2024-06-07 18:53:34', '2024-06-07 18:53:35'),
(56, 'Pemberkasan Antrian', 'Nomor antrean, 60, silahkan menuju ke Administrator', '0', '2024-06-07 18:53:46', '2024-06-07 18:53:48'),
(57, 'Antrean', 'Nomor antrean, 62, silahkan menuju ke LOKET 1', '0', '2024-06-07 18:58:14', '2024-06-07 18:58:15'),
(58, 'Antrean', 'Nomor antrean, 63, silahkan menuju ke LOKET 1', '0', '2024-06-07 18:58:28', '2024-06-07 18:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `status_user` enum('0','1') NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `role`, `nama_user`, `status_user`, `last_login`, `created_at`, `updated_at`) VALUES
('2ba9773b-0788-4022-9eef-264b459eda6b', 'admin', '$2y$10$u4/Seh2IkW1NhhCtllvgSOvIqa2l6F2M5XDrPOI5A4DQ1WN/IpQlm', 'Administrator', 'Administrator', '1', '2024-06-08 12:03:14', '2024-05-28 11:31:10', '2024-06-08 12:03:14'),
('36ca84a6-44a6-4d0b-8c9e-7bd6d78b9b5e', 'loket2', '$2y$10$3OQI9z55HHuQNfiVJ.1J7.gFNR0G/OY6mIG6R4YXXqaUD1tkN95P2', 'Verifikator', 'LOKET 2', '1', '2024-06-08 12:03:49', '2024-05-28 11:34:38', '2024-06-08 12:04:07'),
('4a28377f-a375-4817-934f-6b8aa708b17a', 'loket1', '$2y$10$vtap2HU5PbQ/Ywve2MQPHuQbC1XG9F1.Ve.vZ7UBmesC4Gji3moj2', 'Verifikator', 'LOKET 1', '1', '2024-06-08 12:03:24', '2024-05-28 11:32:36', '2024-06-08 12:03:42'),
('838078b0-5d1c-464e-932f-032c54751aa5', 'loket3', '$2y$10$XcrmpacyHzVxeoP1C0EeL.sbB3lBed9gNXuCdcdGagN6CUv5gauMi', 'Verifikator', 'LOKET 3', '1', '2024-06-08 12:04:20', '2024-05-28 11:35:00', '2024-06-08 12:04:34'),
('92a81d91-b522-407d-b55c-f25907ff56d9', 'petugas1', '$2y$10$ASA/sDdZvZLj67RiNE1yD.Na0Hj639fm6Xbv0m2pR6rbVXysM9BwS', 'Petugas', 'Petugas 1', '1', '2024-06-08 12:04:44', '2024-05-28 11:31:44', '2024-06-08 12:05:13'),
('fb41e63c-cf75-440f-9556-e1a8cd206c8f', 'loket4', '$2y$10$DSXlEsJdI4nrXzxaSeOjVOTUc2FqHmk2UTJ7H2iAytJvJqXH6YQUG', 'Verifikator', 'LOKET 4', '1', NULL, '2024-05-28 11:35:19', '2024-06-04 06:09:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indexes for table `master_kategori`
--
ALTER TABLE `master_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `master_referensi`
--
ALTER TABLE `master_referensi`
  ADD PRIMARY KEY (`id_referensi`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id_notifikasi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_kategori`
--
ALTER TABLE `master_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `master_referensi`
--
ALTER TABLE `master_referensi`
  MODIFY `id_referensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id_notifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `master_referensi`
--
ALTER TABLE `master_referensi`
  ADD CONSTRAINT `master_referensi_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `master_kategori` (`id_kategori`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
