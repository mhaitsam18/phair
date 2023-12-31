-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 06, 2021 at 09:10 PM
-- Server version: 10.2.36-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phac2339_ph_air`
--

-- --------------------------------------------------------

--
-- Table structure for table `ph`
--

CREATE TABLE `ph` (
  `id_ph` int(11) NOT NULL,
  `nilai_ph` double NOT NULL,
  `tegangan` double NOT NULL,
  `logdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ph`
--

INSERT INTO `ph` (`id_ph`, `nilai_ph`, `tegangan`, `logdate`) VALUES
(1, 6.91, 1.98, '2021-02-04 10:05:48'),
(2, 7.09, 2.03, '2021-02-04 10:06:23'),
(3, 7.09, 2.03, '2021-02-04 10:06:58'),
(4, 6.9, 1.97, '2021-02-04 10:07:35'),
(5, 7.09, 2.02, '2021-02-04 10:08:10'),
(6, 7.09, 2.03, '2021-02-04 10:08:46'),
(7, 7.09, 2.03, '2021-02-04 10:09:21'),
(8, 7.09, 2.03, '2021-02-04 10:09:57'),
(9, 7.09, 2.03, '2021-02-04 10:10:32'),
(10, 6.9, 1.97, '2021-02-04 10:10:56'),
(11, 7.09, 2.02, '2021-02-04 10:11:32'),
(12, 7.09, 2.02, '2021-02-04 10:12:07'),
(13, 6.89, 1.97, '2021-02-04 10:17:14'),
(14, 7.08, 2.02, '2021-02-04 10:17:49'),
(15, 7.08, 2.02, '2021-02-04 10:18:25'),
(16, 7.09, 2.02, '2021-02-04 10:19:01'),
(17, 7.08, 2.02, '2021-02-04 10:19:36'),
(18, 7.09, 2.02, '2021-02-04 10:20:12'),
(19, 7.08, 2.02, '2021-02-04 10:20:47'),
(20, 7.08, 2.02, '2021-02-04 10:21:23'),
(21, 7.08, 2.02, '2021-02-04 10:21:58'),
(22, 7.09, 2.02, '2021-02-04 10:22:34'),
(23, 7.09, 2.02, '2021-02-04 10:23:10'),
(24, 7.09, 2.02, '2021-02-04 10:23:45'),
(25, 6.71, 1.92, '2021-02-04 10:24:51'),
(26, 7.11, 2.03, '2021-02-04 10:25:27'),
(27, 7.09, 2.03, '2021-02-04 10:26:03'),
(28, 6.72, 1.92, '2021-02-04 10:26:24'),
(29, 6.9, 1.97, '2021-02-04 10:26:59'),
(30, 7.09, 2.03, '2021-02-04 10:27:34'),
(31, 7.09, 2.03, '2021-02-04 10:28:08'),
(32, 7.09, 2.03, '2021-02-04 10:28:43'),
(33, 7.09, 2.03, '2021-02-04 10:29:17'),
(34, 7.09, 2.03, '2021-02-04 10:29:52'),
(35, 7.09, 2.03, '2021-02-04 10:30:27'),
(36, 7.09, 2.03, '2021-02-04 10:31:01'),
(37, 7.09, 2.03, '2021-02-04 10:31:36'),
(38, 7.09, 2.03, '2021-02-04 10:32:11'),
(39, 7.09, 2.03, '2021-02-04 10:32:45'),
(40, 7.09, 2.03, '2021-02-04 10:33:21'),
(41, 7.09, 2.03, '2021-02-04 10:33:55'),
(42, 7.09, 2.03, '2021-02-04 10:34:30'),
(43, 7.09, 2.03, '2021-02-04 10:35:04'),
(44, 7.09, 2.03, '2021-02-04 10:35:39'),
(45, 7.09, 2.03, '2021-02-04 10:36:14'),
(46, 7.09, 2.03, '2021-02-04 10:36:48'),
(47, 7.09, 2.03, '2021-02-04 10:37:23'),
(48, 7.09, 2.03, '2021-02-04 10:37:58'),
(49, 7.09, 2.03, '2021-02-04 10:38:33'),
(50, 7.09, 2.03, '2021-02-04 10:39:07'),
(51, 7.09, 2.03, '2021-02-04 10:39:42'),
(52, 7.09, 2.03, '2021-02-04 10:40:16'),
(53, 7.09, 2.03, '2021-02-04 10:40:51'),
(54, 7.09, 2.03, '2021-02-04 10:41:26'),
(55, 7.09, 2.03, '2021-02-04 10:42:05'),
(56, 7.09, 2.03, '2021-02-04 10:42:39'),
(57, 7.09, 2.03, '2021-02-04 10:43:14'),
(58, 7.09, 2.03, '2021-02-04 10:43:48'),
(59, 7.09, 2.03, '2021-02-04 10:44:23'),
(60, 7.09, 2.03, '2021-02-04 10:44:58'),
(61, 7.09, 2.03, '2021-02-04 10:45:33'),
(62, 7.09, 2.03, '2021-02-04 10:46:08'),
(63, 7.09, 2.03, '2021-02-04 10:46:42'),
(64, 7.09, 2.03, '2021-02-04 10:47:17'),
(65, 7.09, 2.03, '2021-02-04 10:47:51'),
(66, 7.09, 2.03, '2021-02-04 10:48:26'),
(67, 7.09, 2.03, '2021-02-04 10:49:01'),
(68, 7.09, 2.03, '2021-02-04 10:49:36'),
(69, 7.09, 2.03, '2021-02-04 10:50:11'),
(70, 7.09, 2.03, '2021-02-04 10:50:45'),
(71, 7.09, 2.03, '2021-02-04 10:51:20'),
(72, 7.09, 2.03, '2021-02-04 10:51:55'),
(73, 7.09, 2.03, '2021-02-04 10:52:29'),
(74, 7.09, 2.03, '2021-02-04 10:53:04'),
(75, 7.09, 2.03, '2021-02-04 10:53:39'),
(76, 7.09, 2.03, '2021-02-04 10:54:13'),
(77, 7.09, 2.03, '2021-02-04 10:54:50'),
(78, 7.09, 2.03, '2021-02-04 10:55:25'),
(79, 7.09, 2.03, '2021-02-04 10:55:59'),
(80, 7.09, 2.02, '2021-02-04 10:56:34'),
(81, 7.09, 2.02, '2021-02-04 10:57:08'),
(82, 7.09, 2.02, '2021-02-04 10:57:43'),
(83, 7.09, 2.02, '2021-02-04 10:58:18'),
(84, 7.09, 2.02, '2021-02-04 10:58:52'),
(85, 7.09, 2.02, '2021-02-04 10:59:28'),
(86, 7.09, 2.02, '2021-02-04 11:00:02'),
(87, 7.09, 2.02, '2021-02-04 11:00:37'),
(88, 7.08, 2.02, '2021-02-04 11:01:11'),
(89, 7.08, 2.02, '2021-02-04 11:01:46'),
(90, 7.08, 2.02, '2021-02-04 11:02:21'),
(91, 7.08, 2.02, '2021-02-04 11:02:55'),
(92, 7.08, 2.02, '2021-02-04 11:03:30'),
(93, 7.08, 2.02, '2021-02-04 11:04:05'),
(94, 7.08, 2.02, '2021-02-04 11:04:39'),
(95, 7.08, 2.02, '2021-02-04 11:05:14'),
(96, 7.08, 2.02, '2021-02-04 11:05:49'),
(97, 7.08, 2.02, '2021-02-04 11:06:24'),
(98, 7.08, 2.02, '2021-02-04 11:06:58'),
(99, 7.08, 2.02, '2021-02-04 11:07:33'),
(100, 7.08, 2.02, '2021-02-04 11:08:07'),
(101, 7.08, 2.02, '2021-02-04 11:08:42'),
(102, 7.08, 2.02, '2021-02-04 11:09:17'),
(103, 7.08, 2.02, '2021-02-04 11:09:51'),
(104, 7.08, 2.02, '2021-02-04 11:10:26'),
(105, 7.08, 2.02, '2021-02-04 11:11:01'),
(106, 7.08, 2.02, '2021-02-04 11:11:35'),
(107, 7.08, 2.02, '2021-02-04 11:12:10'),
(108, 7.08, 2.02, '2021-02-04 11:12:45'),
(109, 7.08, 2.02, '2021-02-04 11:13:19'),
(110, 7.08, 2.02, '2021-02-04 11:13:54'),
(111, 7.08, 2.02, '2021-02-04 11:14:29'),
(112, 7.08, 2.02, '2021-02-04 11:15:03'),
(113, 7.08, 2.02, '2021-02-04 11:15:38'),
(114, 7.08, 2.02, '2021-02-04 11:16:13'),
(115, 7.08, 2.02, '2021-02-04 11:16:47'),
(116, 7.08, 2.02, '2021-02-04 11:17:22'),
(117, 7.08, 2.02, '2021-02-04 11:17:57'),
(118, 7.08, 2.02, '2021-02-04 11:18:31'),
(119, 7.08, 2.02, '2021-02-04 11:19:06'),
(120, 7.08, 2.02, '2021-02-04 11:19:41'),
(121, 7.08, 2.02, '2021-02-04 11:20:15'),
(122, 7.08, 2.02, '2021-02-04 11:20:50'),
(123, 7.08, 2.02, '2021-02-04 11:21:25'),
(124, 7.08, 2.02, '2021-02-04 11:21:59'),
(125, 7.08, 2.02, '2021-02-04 11:22:34'),
(126, 7.08, 2.02, '2021-02-04 11:23:09'),
(127, 7.08, 2.02, '2021-02-04 11:23:43'),
(128, 7.08, 2.02, '2021-02-04 11:24:18'),
(129, 7.08, 2.02, '2021-02-04 11:24:53'),
(130, 7.08, 2.02, '2021-02-04 11:25:27'),
(131, 7.08, 2.02, '2021-02-04 11:26:02'),
(132, 7.08, 2.02, '2021-02-04 11:26:37'),
(133, 7.08, 2.02, '2021-02-04 11:27:11'),
(134, 7.09, 2.02, '2021-02-04 11:27:46');

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
(1, 'Sungai Citarum', 'Metil Merah', 4.2, 6.1, 'Merah');

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
('admin', 'c20ad4d76fe97759aa27a0c99bff6710', 'admin admin', NULL, NULL, NULL, NULL, NULL),
('okedeh', '81dc9bdb52d04dc20036dbd8313ed055', 'oke oke', 'oke@ok', '123456', '08211', 'Jonggol', 'upload/reSize twibbon sarasehan 2020.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ph`
--
ALTER TABLE `ph`
  ADD PRIMARY KEY (`id_ph`);

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
-- AUTO_INCREMENT for table `ph`
--
ALTER TABLE `ph`
  MODIFY `id_ph` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `ph_air`
--
ALTER TABLE `ph_air`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
