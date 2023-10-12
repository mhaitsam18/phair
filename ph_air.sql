-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 02:32 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ph_air`
--

-- --------------------------------------------------------

--
-- Table structure for table `ph_air`
--

CREATE TABLE `ph_air` (
  `id` int(11) NOT NULL,
  `sampel` varchar(255) NOT NULL,
  `indikator` varchar(255) DEFAULT NULL,
  `trayek_ph_terendah` decimal(3,1) DEFAULT NULL,
  `trayek_ph_tertinggi` decimal(3,1) DEFAULT NULL,
  `warna` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ph_air`
--

INSERT INTO `ph_air` (`id`, `sampel`, `indikator`, `trayek_ph_terendah`, `trayek_ph_tertinggi`, `warna`) VALUES
(1, 'Sungai Citarum', 'Metil Merah', '4.2', '6.1', 'Merah');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_identitas` varchar(255) DEFAULT NULL,
  `no_ponsel` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama_lengkap`, `email`, `no_identitas`, `no_ponsel`, `alamat`, `foto`) VALUES
('okedeh', '81dc9bdb52d04dc20036dbd8313ed055', 'oke oke', 'oke@ok', '123456', '08211', 'Jonggol', 'upload/reSize twibbon sarasehan 2020.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ph_air`
--
ALTER TABLE `ph_air`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ph_air`
--
ALTER TABLE `ph_air`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
