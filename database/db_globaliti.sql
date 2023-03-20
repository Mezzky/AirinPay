-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 05:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_globaliti`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `idkelas` int(4) NOT NULL,
  `namakelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`idkelas`, `namakelas`) VALUES
(3, 'RPL 3'),
(5, 'MM 1'),
(22, 'DKV 1'),
(23, 'TKJ 1'),
(24, 'RPL 1'),
(25, 'RPL 2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `idpembayaran` int(4) NOT NULL,
  `nip` int(4) DEFAULT NULL,
  `nis` int(4) NOT NULL,
  `tgl` date DEFAULT NULL,
  `bulan` varchar(10) NOT NULL,
  `jumlah_bayar` double DEFAULT NULL,
  `angkatan` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`idpembayaran`, `nip`, `nis`, `tgl`, `bulan`, `jumlah_bayar`, `angkatan`) VALUES
(318, 1, 5001, '2023-03-20', 'Juli', 650000, 'X'),
(319, 1, 5001, '2023-03-20', 'Agustus', 650000, 'X'),
(320, 1, 5001, '2023-03-20', 'September', 650000, 'X'),
(321, NULL, 5001, NULL, 'Oktober', NULL, 'X'),
(322, NULL, 5001, NULL, 'November', NULL, 'X'),
(323, NULL, 5001, NULL, 'Desember', NULL, 'X'),
(324, NULL, 5001, NULL, 'Januari', NULL, 'X'),
(325, NULL, 5001, NULL, 'Februari', NULL, 'X'),
(326, NULL, 5001, NULL, 'Maret', NULL, 'X'),
(327, NULL, 5001, NULL, 'April', NULL, 'X'),
(328, NULL, 5001, NULL, 'Mei', NULL, 'X'),
(329, NULL, 5001, NULL, 'Juni', NULL, 'X'),
(330, NULL, 5001, NULL, 'Juli', NULL, 'XI'),
(331, NULL, 5001, NULL, 'Agustus', NULL, 'XI'),
(332, NULL, 5001, NULL, 'September', NULL, 'XI'),
(333, NULL, 5001, NULL, 'Oktober', NULL, 'XI'),
(334, NULL, 5001, NULL, 'November', NULL, 'XI'),
(335, NULL, 5001, NULL, 'Desember', NULL, 'XI'),
(336, NULL, 5001, NULL, 'Januari', NULL, 'XI'),
(337, NULL, 5001, NULL, 'Februari', NULL, 'XI'),
(338, NULL, 5001, NULL, 'Maret', NULL, 'XI'),
(339, NULL, 5001, NULL, 'April', NULL, 'XI'),
(340, NULL, 5001, NULL, 'Mei', NULL, 'XI'),
(341, NULL, 5001, NULL, 'Juni', NULL, 'XI'),
(342, NULL, 5001, NULL, 'Juli', NULL, 'XII'),
(343, NULL, 5001, NULL, 'Agustus', NULL, 'XII'),
(344, NULL, 5001, NULL, 'September', NULL, 'XII'),
(345, NULL, 5001, NULL, 'Oktober', NULL, 'XII'),
(346, NULL, 5001, NULL, 'November', NULL, 'XII'),
(347, NULL, 5001, NULL, 'Desember', NULL, 'XII'),
(348, NULL, 5001, NULL, 'Januari', NULL, 'XII'),
(349, NULL, 5001, NULL, 'Februari', NULL, 'XII'),
(350, NULL, 5001, NULL, 'Maret', NULL, 'XII'),
(351, NULL, 5001, NULL, 'April', NULL, 'XII'),
(352, NULL, 5001, NULL, 'Mei', NULL, 'XII'),
(353, NULL, 5001, NULL, 'Juni', NULL, 'XII'),
(354, 1, 5002, '2023-03-20', 'Juli', 650000, 'X'),
(355, 1, 5002, '2023-03-20', 'Agustus', 650000, 'X'),
(356, 1, 5002, '2023-03-20', 'September', 650000, 'X'),
(357, NULL, 5002, NULL, 'Oktober', NULL, 'X'),
(358, NULL, 5002, NULL, 'November', NULL, 'X'),
(359, NULL, 5002, NULL, 'Desember', NULL, 'X'),
(360, NULL, 5002, NULL, 'Januari', NULL, 'X'),
(361, NULL, 5002, NULL, 'Februari', NULL, 'X'),
(362, NULL, 5002, NULL, 'Maret', NULL, 'X'),
(363, NULL, 5002, NULL, 'April', NULL, 'X'),
(364, NULL, 5002, NULL, 'Mei', NULL, 'X'),
(365, NULL, 5002, NULL, 'Juni', NULL, 'X'),
(366, NULL, 5002, NULL, 'Juli', NULL, 'XI'),
(367, NULL, 5002, NULL, 'Agustus', NULL, 'XI'),
(368, NULL, 5002, NULL, 'September', NULL, 'XI'),
(369, NULL, 5002, NULL, 'Oktober', NULL, 'XI'),
(370, NULL, 5002, NULL, 'November', NULL, 'XI'),
(371, NULL, 5002, NULL, 'Desember', NULL, 'XI'),
(372, NULL, 5002, NULL, 'Januari', NULL, 'XI'),
(373, NULL, 5002, NULL, 'Februari', NULL, 'XI'),
(374, NULL, 5002, NULL, 'Maret', NULL, 'XI'),
(375, NULL, 5002, NULL, 'April', NULL, 'XI'),
(376, NULL, 5002, NULL, 'Mei', NULL, 'XI'),
(377, NULL, 5002, NULL, 'Juni', NULL, 'XI'),
(378, NULL, 5002, NULL, 'Juli', NULL, 'XII'),
(379, NULL, 5002, NULL, 'Agustus', NULL, 'XII'),
(380, NULL, 5002, NULL, 'September', NULL, 'XII'),
(381, NULL, 5002, NULL, 'Oktober', NULL, 'XII'),
(382, NULL, 5002, NULL, 'November', NULL, 'XII'),
(383, NULL, 5002, NULL, 'Desember', NULL, 'XII'),
(384, NULL, 5002, NULL, 'Januari', NULL, 'XII'),
(385, NULL, 5002, NULL, 'Februari', NULL, 'XII'),
(386, NULL, 5002, NULL, 'Maret', NULL, 'XII'),
(387, NULL, 5002, NULL, 'April', NULL, 'XII'),
(388, NULL, 5002, NULL, 'Mei', NULL, 'XII'),
(389, NULL, 5002, NULL, 'Juni', NULL, 'XII');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `nip` int(4) NOT NULL,
  `namapetugas` varchar(50) NOT NULL,
  `telp` varchar(16) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(18) NOT NULL,
  `leveluser` enum('Admin','Pegawai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`nip`, `namapetugas`, `telp`, `username`, `password`, `leveluser`) VALUES
(1, 'Airin Tika', '6283192287338', 'airin', 'admin', 'Admin'),
(2, 'Icha Shafa', '6283165578229', 'icha', 'admin', 'Admin'),
(3, 'Salsa Nabilla', '6283192287338', 'salsa', 'pegawai', 'Pegawai'),
(4, 'Nisa Prabawati', '6289967762552', 'nisa', 'pegawai', 'Pegawai'),
(6, 'Adi Sutejo', '6289967762675', 'adikuy', 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` int(4) NOT NULL,
  `idspp` int(4) NOT NULL,
  `idkelas` int(4) NOT NULL,
  `namasiswa` varchar(50) NOT NULL,
  `telp` varchar(16) NOT NULL,
  `password` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `idspp`, `idkelas`, `namasiswa`, `telp`, `password`) VALUES
(5001, 1, 3, 'Arinda Tika Agustin', '087163524566', 'globaliti'),
(5002, 1, 3, 'Rizky Ryan Sahadha', '087615362743', 'globaliti');

-- --------------------------------------------------------

--
-- Table structure for table `tb_spp`
--

CREATE TABLE `tb_spp` (
  `idspp` int(4) NOT NULL,
  `tahun_angkatan` varchar(5) NOT NULL,
  `nominal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_spp`
--

INSERT INTO `tb_spp` (`idspp`, `tahun_angkatan`, `nominal`) VALUES
(1, '2020', 650000),
(2, '2021', 700000),
(3, '2022', 750000),
(4, '2023', 800000),
(7, '2024', 850000),
(15, '2025', 900000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`idkelas`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`idpembayaran`),
  ADD KEY `fk_nip` (`nip`),
  ADD KEY `fk_nis` (`nis`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `fk_spp2` (`idspp`),
  ADD KEY `fk_kelas` (`idkelas`);

--
-- Indexes for table `tb_spp`
--
ALTER TABLE `tb_spp`
  ADD PRIMARY KEY (`idspp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `idkelas` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `idpembayaran` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=390;

--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `nip` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_spp`
--
ALTER TABLE `tb_spp`
  MODIFY `idspp` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `fk_nip` FOREIGN KEY (`nip`) REFERENCES `tb_petugas` (`nip`),
  ADD CONSTRAINT `fk_nis` FOREIGN KEY (`nis`) REFERENCES `tb_siswa` (`nis`) ON DELETE CASCADE;

--
-- Constraints for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `fk_kelas` FOREIGN KEY (`idkelas`) REFERENCES `tb_kelas` (`idkelas`),
  ADD CONSTRAINT `fk_spp2` FOREIGN KEY (`idspp`) REFERENCES `tb_spp` (`idspp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
