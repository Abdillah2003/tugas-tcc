-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 03:44 PM
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
-- Database: `loginn`
--

-- --------------------------------------------------------

--
-- Table structure for table `tab_tegistrasi`
--

CREATE TABLE `tab_tegistrasi` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `kodepos` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tab_tegistrasi`
--

INSERT INTO `tab_tegistrasi` (`username`, `password`, `ttl`, `alamat`, `kota`, `negara`, `kodepos`) VALUES
('123200017027', '220902', '2002-09-02', 'Bungkolo', 'Muna Barat', 'Brunei Darusalam', 96532),
('admin', 'admin', '2009-08-22', 'lawa', 'singapura', 'Singapura', 98799),
('frelsy ', 'acong', '2004-08-22', 'medan', 'medan', 'Singapura', 987);

-- --------------------------------------------------------

--
-- Table structure for table `tab_user`
--

CREATE TABLE `tab_user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `kodepos` varchar(50) NOT NULL,
  `tempat_tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tab_user`
--

INSERT INTO `tab_user` (`username`, `password`, `alamat`, `kota`, `negara`, `status`, `kodepos`, `tempat_tanggal_lahir`) VALUES
('user', 'user', 'Barangka', 'Kendari', 'Indonesia', 'pelajar', '93652', '2021-11-21');

-- --------------------------------------------------------

--
-- Table structure for table `webku`
--

CREATE TABLE `webku` (
  `nama_pembeli` varchar(50) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `harga_buku` varchar(50) NOT NULL,
  `jumlah_buku` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab_tegistrasi`
--
ALTER TABLE `tab_tegistrasi`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tab_user`
--
ALTER TABLE `tab_user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `webku`
--
ALTER TABLE `webku`
  ADD PRIMARY KEY (`nama_pembeli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
