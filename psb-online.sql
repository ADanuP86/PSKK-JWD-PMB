-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 06:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psb-online`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel-admin`
--

CREATE TABLE `tabel-admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel-admin`
--

INSERT INTO `tabel-admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'baru');

-- --------------------------------------------------------

--
-- Table structure for table `tabel-data_siswa`
--

CREATE TABLE `tabel-data_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `asal_sekolah` varchar(20) NOT NULL,
  `status_pendaftaran` varchar(15) NOT NULL,
  `status_berkas` varchar(15) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel-data_siswa`
--

INSERT INTO `tabel-data_siswa` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `asal_sekolah`, `status_pendaftaran`, `status_berkas`, `foto`) VALUES
(21, 'Ananto Danu Prasetyo', 'Lampung', 'Laki-laki', 'Islam', '', 'Tidak Diterima', 'Lengkap', 'Foto_3_x_44.jpg'),
(22, 'Ananto Danu Prasetyo', 'lampung', 'laki-laki', 'islam', 'sma1 punggur', 'Diterima', 'Lengkap', 'Logo_Unila1.png'),
(23, 'Danu', 'lampung', 'laki-laki', 'islam', 'sma punggur', '', 'Lengkap', 'Foto_3_x_4.jpg'),
(24, 'TEGAR BAGUS DERMAWAN', 'Jabung', 'Laki-laki', 'Islam', 'sman 1 raman utara', '', 'Lengkap', 'Logo_Unila.png'),
(25, 'Danu', 'Lampung', 'Laki-laki', 'Islam', 'SMAN1 Trimurjo', '', 'Lengkap', 'Foto_3_x_41.jpg'),
(26, 'Ananto Danu Prasetyo', 'lampung', 'laki-laki', 'islam', 'sma1 trimurjo', '', 'Lengkap', 'Foto_3_x_42.jpg'),
(27, 'Ananto Danu Prasetyo', 'lampung', 'laki-laki', 'islam', 'sma1 punggur', '', 'Lengkap', 'Foto_3_x_43.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tabel-siswa`
--

CREATE TABLE `tabel-siswa` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel-siswa`
--

INSERT INTO `tabel-siswa` (`id`, `username`, `password`) VALUES
(1, 'siswa', 'baru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel-admin`
--
ALTER TABLE `tabel-admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel-data_siswa`
--
ALTER TABLE `tabel-data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel-siswa`
--
ALTER TABLE `tabel-siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel-admin`
--
ALTER TABLE `tabel-admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel-data_siswa`
--
ALTER TABLE `tabel-data_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tabel-siswa`
--
ALTER TABLE `tabel-siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
