-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 03, 2024 at 05:37 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ses-des`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_kategori`, `kategori`) VALUES
(1, 'Prodi Agribisnis (jalur PMDK)'),
(2, 'Prodi Agribisnis Jalur Formulir IPA'),
(3, 'Prodi Agribisnis Jalur PMB Online'),
(4, 'Prodi Agroteknologi jalur PMDK'),
(5, 'Prodi Agroteknologi Jalur IPA'),
(6, 'Prodi Agroteknologi Jalur PMB Online'),
(7, 'Prodi Akuntansi Jalur PMDK'),
(8, 'Prodi Akuntansi Jalur IPS'),
(9, 'Prodi Akuntansi Jalu PMB Online'),
(10, 'Prodi D3-Ilmu Keperawatan Jalur PMDK'),
(11, 'Prodi D3-Ilmu Keperawatan Jalur Fikes (IPA)'),
(12, 'Prodi D3-Ilmu Keperawatan Jalur PMB Online'),
(13, 'Prodi D3 Perhotelan Jalur IPS'),
(14, 'Prodi D3-Perhotelan jalur PMDK'),
(15, 'Prodi D3-Perhotelan Jalur PMB Online'),
(16, 'Prodi D3-Ilmu Hukum Jalur IPS'),
(17, 'Prodi D3-Ilmu Hukum Jalur PMDK'),
(18, 'Prodi D3-Ilmu Hukum Jalur PMB Online'),
(19, 'Prodi Ilmu Komunikasi Jalur IPS'),
(20, 'Prodi Ilmu Komunikasi Jalur PMDK'),
(21, 'Prodi Ilmu Komunikasi Jalur PMB Online'),
(22, 'Prodi Ilmu Pemerintahan jalur IPS'),
(23, 'Prodi Ilmu Pemerintahan Jalur Pmdk'),
(24, 'Prodi Ilmu Pemerintahan Jalur PMB Online'),
(25, 'Prodi Manajemen Jalur IPS'),
(26, 'Prodi Manajemen Jalur PMDK'),
(27, 'Prodi Manajemen Jalur PMB Online'),
(28, 'Prodi Manajemen Informatika Jalur IPA'),
(29, 'Prodi Manajemen Informatika Jalur PMDK'),
(30, 'Prodi Manajemen Informatika Jalur PMB Online'),
(31, 'Prodi Pendidikan Agama Islam Jalur IPS'),
(32, 'Prodi Pendidikan Agama Islam Jalur PMDK'),
(33, 'Prodi Pendidikan Agama Islam Jalur PMB Online'),
(34, 'Prodi Pendidikan Sastra Indonesia Jalur IPS'),
(35, 'Prodi Pendidikan Satra Indonesia Jalur PMDK'),
(36, 'Prodi Pendidikan Sastra Indonesia Jalur PMB Online'),
(37, 'Pendidikan Bhs.Inggris Jalur IPS'),
(38, 'Prodi Pendidikan Bahasa Inggris Jalur PMDK'),
(39, 'Prodi Pendidikan Bahasa Inggris Jalur PMB Online'),
(40, 'Prodi Pendidikan Biologi Jalur IPA'),
(41, 'Prodi Pendidikan Biologi Jalur PMDK'),
(42, 'Prodi Pendidikan Biologi Jalur PMB Online '),
(43, 'Prodi Pend.Guru Pend.Anak Usia Dini Jalur IPS'),
(44, 'Prodi Pend.Guru Pend.Anak  Usia Dini Jalur PMDK'),
(45, 'Prodi Pend.Guru Pend.Anak Usia Dini Jalur PMB Online'),
(46, 'Prodi Pendidikan Matematika Jalur IPA'),
(47, 'Prodi Pendidikan Matematika Jalur PMDK '),
(48, 'Prodi Pendidikan Matematika Jalur PMB Online'),
(49, 'Prodi PSIKOLOGI Jalur IPS'),
(50, 'Prodi Psikologi Jalur PMDK'),
(51, 'Prodi Psikologi Jalur PMB Online'),
(52, 'Prodi S1-Ilmu Keperawatan Jalur IPA FIKES'),
(53, 'Prodi S1-Keperawatan Jalur PMDK'),
(54, 'Prodi S1-Keperawatan Jalur PMDK'),
(55, 'Prodi Teknik Elektro Jalur Formulir IPA'),
(56, 'Prodi Teknik Elektro Jalur PMDK'),
(57, 'Prodi Teknik Elektro Jalur PMB Online'),
(58, 'Prodi Teknik Informatika Jalur IPA'),
(59, 'Prodi Teknik Informatika Jalur PMDK'),
(60, 'Teknik Informatika Jalur PMB Online'),
(61, 'Prodi Teknik Mesin Jalur  IPA'),
(62, 'Prodi Teknik Mesin Jalur PMDK'),
(63, 'Prodi Teknik Mesin Jalur PMB Online'),
(64, 'Prodi Teknik Sipil Jalur IPA'),
(65, 'Prodi Teknik Sipil Jalur PMDK'),
(66, 'Prodi Teknik Sipil Jalur PMB Online'),
(67, 'Profesi Ners (Jalur Alumni Ners)'),
(68, 'Prodi Pendidikan Matematika (Jalur IPA)');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id_data` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id_data`, `id_kategori`, `tahun`, `jumlah`) VALUES
(1, 1, '2014', 4),
(2, 1, '2015', 11),
(3, 1, '2016', 13),
(4, 1, '2017', 22),
(5, 1, '2018', 6),
(6, 1, '2019', 7),
(7, 1, '2020', 7),
(8, 1, '2021', 32),
(9, 1, '2022', 16),
(10, 2, '2014', 67),
(11, 2, '2015', 51),
(12, 2, '2016', 72),
(13, 2, '2017', 38),
(14, 2, '2018', 25),
(15, 3, '2018', 30),
(16, 3, '2019', 51),
(17, 3, '2020', 51),
(18, 3, '2021', 30),
(19, 3, '2022', 48),
(20, 4, '2014', 4),
(21, 4, '2015', 10),
(22, 4, '2016', 7),
(23, 4, '2017', 9),
(24, 4, '2018', 4),
(25, 4, '2019', 3),
(26, 4, '2020', 4),
(27, 4, '2021', 10),
(28, 4, '2022', 4),
(29, 5, '2014', 53),
(30, 5, '2015', 37),
(31, 5, '2016', 54),
(32, 5, '2017', 27),
(33, 5, '2018', 13),
(34, 6, '2018', 23),
(35, 6, '2019', 40),
(36, 6, '2020', 35),
(37, 6, '2021', 30),
(38, 6, '2022', 48),
(39, 7, '2014', 28),
(40, 7, '2015', 23),
(41, 7, '2016', 22),
(42, 7, '2017', 34),
(43, 7, '2018', 23),
(44, 7, '2019', 5),
(45, 7, '2020', 11),
(46, 7, '2021', 30),
(47, 7, '2022', 17),
(48, 8, '2014', 137),
(49, 8, '2015', 149),
(50, 8, '2016', 102),
(51, 8, '2017', 68),
(52, 8, '2018', 13),
(53, 9, '2018', 33),
(54, 9, '2019', 75),
(55, 9, '2020', 77),
(56, 9, '2021', 35),
(57, 9, '2022', 30),
(58, 10, '2014', 16),
(59, 10, '2015', 13),
(60, 10, '2016', 29),
(61, 10, '2017', 20),
(62, 10, '2018', 15),
(63, 10, '2019', 6),
(64, 10, '2020', 9),
(65, 10, '2021', 16),
(66, 10, '2022', 30),
(67, 11, '2014', 54),
(68, 11, '2015', 42),
(69, 11, '2016', 39),
(70, 11, '2017', 24),
(71, 11, '2018', 24),
(72, 12, '2018', 33),
(73, 12, '2019', 25),
(74, 12, '2020', 16),
(75, 12, '2021', 21),
(76, 12, '2022', 42),
(77, 13, '2014', 34),
(78, 13, '2015', 21),
(79, 13, '2016', 25),
(80, 13, '2017', 16),
(81, 13, '2018', 14),
(82, 14, '2014', 3),
(83, 14, '2015', 5),
(84, 14, '2016', 8),
(85, 14, '2017', 6),
(86, 14, '2018', 3),
(87, 14, '2019', 4),
(88, 14, '2020', 3),
(89, 14, '2021', 3),
(90, 14, '2022', 2),
(91, 15, '2018', 7),
(92, 15, '2019', 12),
(93, 15, '2020', 21),
(94, 15, '2021', 4),
(95, 15, '2022', 3),
(96, 16, '2014', 34),
(97, 16, '2015', 100),
(98, 16, '2016', 100),
(99, 16, '2017', 76),
(100, 16, '2018', 43),
(101, 17, '2017', 7),
(102, 17, '2015', 9),
(103, 17, '2016', 7),
(104, 17, '2017', 24),
(105, 17, '2018', 5),
(106, 17, '2019', 9),
(107, 17, '2020', 10),
(108, 17, '2021', 54),
(109, 17, '2022', 26),
(110, 18, '2018', 60),
(111, 18, '2019', 116),
(112, 18, '2020', 121),
(113, 18, '2021', 69),
(114, 18, '2022', 95),
(115, 19, '2014', 30),
(116, 19, '2015', 37),
(117, 19, '2016', 41),
(118, 19, '2017', 28),
(119, 19, '2018', 21),
(120, 20, '2014', 2),
(121, 20, '2015', 13),
(122, 20, '2016', 9),
(123, 20, '2017', 8),
(124, 20, '2018', 7),
(125, 20, '2019', 3),
(126, 20, '2020', 12),
(127, 20, '2021', 54),
(128, 20, '2022', 24),
(129, 21, '2018', 20),
(130, 21, '2019', 70),
(131, 21, '2020', 51),
(132, 21, '2021', 58),
(133, 21, '2022', 69),
(134, 22, '2014', 57),
(135, 22, '2015', 51),
(136, 22, '2016', 44),
(137, 22, '2017', 29),
(138, 22, '2018', 15),
(139, 23, '2014', 9),
(140, 23, '2015', 12),
(141, 23, '2016', 5),
(142, 23, '2017', 10),
(143, 23, '2018', 4),
(144, 23, '2019', 3),
(145, 23, '2020', 7),
(146, 23, '2021', 18),
(147, 23, '2022', 12),
(148, 24, '2018', 34),
(149, 24, '2019', 58),
(150, 24, '2020', 40),
(151, 24, '2021', 37),
(152, 24, '2022', 20),
(153, 25, '2014', 348),
(154, 25, '2015', 297),
(155, 25, '2016', 204),
(156, 25, '2017', 154),
(157, 25, '2018', 98),
(158, 26, '2014', 38),
(159, 26, '2015', 70),
(160, 26, '2016', 54),
(161, 26, '2017', 58),
(162, 26, '2018', 26),
(163, 26, '2019', 21),
(164, 26, '2020', 36),
(165, 26, '2021', 69),
(166, 26, '2022', 47),
(167, 27, '2018', 126),
(168, 27, '2019', 239),
(169, 27, '2020', 224),
(170, 27, '2021', 136),
(171, 27, '2022', 156),
(172, 28, '2014', 18),
(173, 28, '2015', 9),
(174, 28, '2016', 18),
(175, 28, '2017', 8),
(176, 28, '2018', 6),
(177, 29, '2014', 2),
(178, 29, '2015', 5),
(179, 29, '2016', 3),
(180, 29, '2017', 4),
(181, 29, '2018', 4),
(182, 29, '2019', 2),
(183, 29, '2020', 2),
(184, 29, '2021', 3),
(185, 30, '2018', 5),
(186, 30, '2019', 9),
(187, 30, '2021', 7),
(188, 31, '2014', 23),
(189, 31, '2015', 19),
(190, 31, '2016', 22),
(191, 31, '2017', 20),
(192, 31, '2018', 12),
(193, 32, '2014', 4),
(194, 32, '2015', 4),
(195, 32, '2016', 7),
(196, 32, '2017', 5),
(197, 32, '2016', 7),
(198, 32, '2018', 3),
(199, 32, '2019', 4),
(200, 32, '2020', 7),
(201, 32, '2021', 9),
(202, 32, '2022', 11),
(203, 33, '2018', 35),
(204, 33, '2019', 25),
(205, 33, '2020', 24),
(206, 33, '2021', 32),
(207, 33, '2022', 45),
(208, 34, '2014', 111),
(209, 34, '2015', 80),
(210, 34, '2016', 73),
(211, 34, '2017', 30),
(212, 34, '2018', 18),
(213, 35, '2014', 17),
(214, 35, '2015', 21),
(215, 35, '2016', 17),
(216, 35, '2017', 21),
(217, 35, '2018', 12),
(218, 35, '2019', 5),
(219, 35, '2020', 6),
(220, 35, '2021', 22),
(221, 35, '2022', 14),
(222, 36, '2018', 14),
(223, 36, '2019', 39),
(224, 36, '2020', 48),
(225, 36, '2021', 23),
(226, 36, '2022', 38),
(227, 37, '2014', 66),
(228, 37, '2015', 46),
(229, 37, '2016', 51),
(230, 37, '2017', 31),
(231, 37, '2018', 17),
(232, 38, '2014', 12),
(233, 38, '2015', 10),
(234, 38, '2016', 10),
(235, 38, '2017', 10),
(236, 38, '2018', 5),
(237, 38, '2019', 4),
(238, 38, '2020', 7),
(239, 38, '2021', 16),
(240, 38, '2022', 12),
(241, 39, '2018', 29),
(242, 39, '2019', 35),
(243, 39, '2020', 40),
(244, 39, '2021', 27),
(245, 39, '2022', 17),
(246, 40, '2014', 50),
(247, 40, '2015', 34),
(248, 40, '2016', 32),
(249, 40, '2017', 18),
(250, 40, '2018', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `data_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `category` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
