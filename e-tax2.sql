-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 02, 2023 at 04:55 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-tax2`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_lembar_kerja`
--

CREATE TABLE `jenis_lembar_kerja` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jenis_lembar_kerja`
--

INSERT INTO `jenis_lembar_kerja` (`id`, `nama`) VALUES
(1, 'Mikro'),
(2, 'Ritel'),
(3, 'Kmg');

-- --------------------------------------------------------

--
-- Table structure for table `kredit_realisasi`
--

CREATE TABLE `kredit_realisasi` (
  `id` int NOT NULL,
  `id_jenis_lembar_kerja` int NOT NULL,
  `id_group` int NOT NULL,
  `cabang` varchar(100) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `tahun` year NOT NULL,
  `bulan_input` int NOT NULL,
  `realisasi` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kredit_realisasi`
--

INSERT INTO `kredit_realisasi` (`id`, `id_jenis_lembar_kerja`, `id_group`, `cabang`, `bulan`, `tahun`, `bulan_input`, `realisasi`) VALUES
(220, 3, 87, 'cabang', 'jun-22', '2021', 12, 1),
(221, 3, 87, 'cabang', 'jul-22', '2021', 12, 1),
(222, 3, 87, 'cabang', 'dec-22', '2021', 12, 1),
(223, 3, 87, 'cabang', 'mar-22', '2021', 12, 1),
(224, 3, 87, 'cabang', 'mar-23', '2021', 12, 1),
(225, 3, 87, 'cabang', 'apr-23', '2021', 12, 1),
(226, 3, 87, 'cabang', 'mei-23', '2021', 12, 1),
(227, 3, 87, 'cabang', 'jun-23', '2021', 12, 1),
(228, 3, 87, 'mks', 'jun-22', '2021', 12, 1),
(229, 3, 87, 'mks', 'jul-22', '2021', 12, 2),
(230, 3, 87, 'mks', 'dec-22', '2021', 12, 2),
(231, 3, 87, 'mks', 'mar-22', '2021', 12, 3),
(232, 3, 87, 'mks', 'mar-23', '2021', 12, 3),
(233, 3, 87, 'mks', 'apr-23', '2021', 12, 3),
(234, 3, 87, 'mks', 'mei-23', '2021', 12, 3),
(235, 3, 87, 'mks', 'jun-23', '2021', 12, 3),
(236, 1, 84, 'cabang', 'jun-22', '2020', 12, 1),
(237, 1, 84, 'cabang', 'jul-22', '2020', 12, 1),
(238, 1, 84, 'cabang', 'dec-22', '2020', 12, 1),
(239, 1, 84, 'cabang', 'mar-22', '2020', 12, 1),
(240, 1, 84, 'cabang', 'mar-23', '2020', 12, 1),
(241, 1, 84, 'cabang', 'apr-23', '2020', 12, 1),
(242, 1, 84, 'cabang', 'mei-23', '2020', 12, 1),
(243, 1, 84, 'cabang', 'jun-23', '2020', 12, 11),
(244, 1, 84, 'jpn', 'jun-22', '2020', 12, 2),
(245, 1, 84, 'jpn', 'jul-22', '2020', 12, 2),
(246, 1, 84, 'jpn', 'dec-22', '2020', 12, 2),
(247, 1, 84, 'jpn', 'mar-22', '2020', 12, 2),
(248, 1, 84, 'jpn', 'mar-23', '2020', 12, 2),
(249, 1, 84, 'jpn', 'apr-23', '2020', 12, 2),
(250, 1, 84, 'jpn', 'mei-23', '2020', 12, 2),
(251, 1, 84, 'jpn', 'jun-23', '2020', 12, 2),
(252, 1, 84, 'frnc', 'jun-22', '2020', 12, 123),
(253, 1, 84, 'frnc', 'jul-22', '2020', 12, 3),
(254, 1, 84, 'frnc', 'dec-22', '2020', 12, 3),
(255, 1, 84, 'frnc', 'mar-22', '2020', 12, 3),
(256, 1, 84, 'frnc', 'mar-23', '2020', 12, 3),
(257, 1, 84, 'frnc', 'apr-23', '2020', 12, 3),
(258, 1, 84, 'frnc', 'mei-23', '2020', 12, 3),
(259, 1, 84, 'frnc', 'jun-23', '2020', 12, 3),
(260, 1, 84, 'uk', 'jun-22', '2020', 12, 8),
(261, 1, 84, 'uk', 'jul-22', '2020', 12, 8),
(262, 1, 84, 'uk', 'dec-22', '2020', 12, 8),
(263, 1, 84, 'uk', 'mar-22', '2020', 12, 8),
(264, 1, 84, 'uk', 'mar-23', '2020', 12, 8),
(265, 1, 84, 'uk', 'apr-23', '2020', 12, 8),
(266, 1, 84, 'uk', 'mei-23', '2020', 12, 8),
(267, 1, 84, 'uk', 'jun-23', '2020', 12, 8);

-- --------------------------------------------------------

--
-- Table structure for table `lampiran`
--

CREATE TABLE `lampiran` (
  `id` int NOT NULL,
  `id_notifikasi` int NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lampiran`
--

INSERT INTO `lampiran` (`id`, `id_notifikasi`, `file`) VALUES
(14, 32, 'public/storage/lampiran/1688912338format.xlsx'),
(15, 32, 'public/storage/lampiran/1688912442format.xlsx');

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id` int NOT NULL,
  `id_pajak` int NOT NULL,
  `deadline` date NOT NULL,
  `id_user` int NOT NULL,
  `verifikasi` enum('0','1','2') NOT NULL,
  `alasan` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email_sended` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`id`, `id_pajak`, `deadline`, `id_user`, `verifikasi`, `alasan`, `email_sended`) VALUES
(25, 1, '2023-07-09', 76, '0', NULL, '0'),
(26, 1, '2023-07-09', 77, '0', NULL, '0'),
(27, 1, '2023-07-09', 76, '0', NULL, '0'),
(28, 1, '2023-07-09', 77, '0', NULL, '0'),
(29, 1, '2023-07-09', 76, '0', NULL, '0'),
(30, 1, '2023-07-09', 77, '0', NULL, '0'),
(31, 1, '2023-07-09', 79, '0', NULL, '0'),
(32, 1, '2023-07-09', 81, '2', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `pajak`
--

CREATE TABLE `pajak` (
  `id` int NOT NULL,
  `nama_pajak` varchar(100) NOT NULL,
  `lampiran` varchar(100) NOT NULL,
  `sample` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pajak`
--

INSERT INTO `pajak` (`id`, `nama_pajak`, `lampiran`, `sample`) VALUES
(1, 'SPT', 'Daftar nominatif biaya promosi', 'public/storage/contoh_lampiran/SPT.xlsx'),
(2, 'PPh 23', 'rekapan pajak', 'public/storage/contoh_lampiran/PPh 23.xlsx'),
(3, 'PPh 4 ayat 2', 'rekapan pajak', 'public/storage/contoh_lampiran/PPh 4 ayat 2.xlsx'),
(4, 'PPN', 'daftar save deposit box', 'public/storage/contoh_lampiran/PPN.xlsx'),
(7, 'test', 'test', 'public/storage/contoh_lampiran/test.xlsx');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(200) NOT NULL,
  `token` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `nama` varchar(120) NOT NULL,
  `nrik` varchar(100) NOT NULL,
  `role` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `no_hp` varchar(120) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `date_created` int NOT NULL,
  `soft_delete` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `nrik`, `role`, `no_hp`, `email`, `password`, `foto`, `date_created`, `soft_delete`) VALUES
(83, 'admin', 'admin', 'admin', 'admin', 'admin', '$2y$10$kchHM4iYCvy8yhg6bvL3Re6BwrCKBSE3AHDA7bc11uw/idLYTnFDq', '', 1690548497, 0),
(84, 'grup', 'grup', 'group', 'grup', 'grup', '$2y$10$/zuPnXJBV5LOriGXzV7mMOszuj/u7/z5JbrHVUuLOrq6VLCDZ3tMW', '', 1690548530, 0),
(86, 'pajak', 'pajak', 'akuntansi', 'pajak', 'pajak', '$2y$10$L5EzVgF/XgK7BY796iGMn..P.JRMIW5M7YCSaZktUN4mZsp1yP3ZG', '', 1690560955, 0),
(87, 'grup2', 'grup2', 'group', 'grup2', 'grup2', '$2y$10$YpFjgpCqK6X5Gf8H5yv.SOFcaOybNmK5UBs7W7oEcfoTF0E6aZGGy', '', 1690994682, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_lembar_kerja`
--
ALTER TABLE `jenis_lembar_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kredit_realisasi`
--
ALTER TABLE `kredit_realisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lampiran`
--
ALTER TABLE `lampiran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign_id_notifikasi` (`id_notifikasi`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign_id_pajak` (`id_pajak`);

--
-- Indexes for table `pajak`
--
ALTER TABLE `pajak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_lembar_kerja`
--
ALTER TABLE `jenis_lembar_kerja`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kredit_realisasi`
--
ALTER TABLE `kredit_realisasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT for table `lampiran`
--
ALTER TABLE `lampiran`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pajak`
--
ALTER TABLE `pajak`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lampiran`
--
ALTER TABLE `lampiran`
  ADD CONSTRAINT `foreign_id_notifikasi` FOREIGN KEY (`id_notifikasi`) REFERENCES `notifikasi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD CONSTRAINT `foreign_id_pajak` FOREIGN KEY (`id_pajak`) REFERENCES `pajak` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
