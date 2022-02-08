-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2022 at 05:27 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_1904030083`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_anggota`
--

CREATE TABLE `db_anggota` (
  `id` int(10) NOT NULL,
  `id_anggota` int(20) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_anggota`
--

INSERT INTO `db_anggota` (`id`, `id_anggota`, `nama_anggota`, `alamat`, `no_hp`) VALUES
(123, 11, 'Sandi', 'Sukamulya', 012556261),
(265, 18, 'Nanda', 'Pasir Gadung', 051477918),
(345, 12, 'Firman', 'Talaga', 098116278),
(511, 15, 'Aep', 'Kadu', 055156721),
(567, 13, 'Asep', 'Pasar Kemis', 0835756224);

-- --------------------------------------------------------

--
-- Table structure for table `db_buku`
--

CREATE TABLE `db_buku` (
  `id` int(10) NOT NULL,
  `id_buku` int(20) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_buku`
--

INSERT INTO `db_buku` (`id`, `id_buku`, `judul_buku`, `pengarang`, `penerbit`, `tahun_terbit`) VALUES
(1, 11, 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', '2005'),
(2, 12, 'Sang Pemimpi', 'Andrea Hirata', 'Bentang Pustaka', '2006'),
(3, 13, 'Padang Bulan', 'Andrea Hirata', 'Bentang Pustaka', '2011'),
(4, 14, 'Guru Aini', 'Andrea Hirata', 'Bentang Pustaka', '2020'),
(5, 15, 'Ayah', 'Andrea Hirata', 'Bentang Pustaka ', '2015');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_anggota`
--
ALTER TABLE `db_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_buku`
--
ALTER TABLE `db_buku`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
