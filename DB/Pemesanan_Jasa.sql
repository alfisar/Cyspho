-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2019 at 01:14 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Pemesanan_Jasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `jasa_maintenance_general`
--

CREATE TABLE `jasa_maintenance_general` (
  `id` int(11) NOT NULL,
  `jenis_jasa` varchar(50) NOT NULL,
  `repaint` varchar(50) NOT NULL,
  `repair` varchar(50) NOT NULL,
  `restoration` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jasa_maintenance_general`
--

INSERT INTO `jasa_maintenance_general` (`id`, `jenis_jasa`, `repaint`, `repair`, `restoration`) VALUES
(9, 'building', 'no', 'yes', 'yes'),
(10, 'building', 'yes', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `jasa_maintenance_unik`
--

CREATE TABLE `jasa_maintenance_unik` (
  `id` int(11) NOT NULL,
  `jenis_produk` varchar(50) NOT NULL,
  `ac_produk` int(11) NOT NULL,
  `catudaya_produk` int(11) NOT NULL,
  `baterai_produk` int(11) NOT NULL,
  `komputer_produk` int(11) NOT NULL,
  `seratoptik_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jasa_maintenance_unik`
--

INSERT INTO `jasa_maintenance_unik` (`id`, `jenis_produk`, `ac_produk`, `catudaya_produk`, `baterai_produk`, `komputer_produk`, `seratoptik_produk`) VALUES
(7, 'telcom', 1, 1, 0, 3, 0),
(8, 'scada', 2, 0, 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jasa_teknisi_colocation`
--

CREATE TABLE `jasa_teknisi_colocation` (
  `id` int(11) NOT NULL,
  `kuantitas_colocation` varchar(15) NOT NULL,
  `kekuatan_tower` varchar(25) NOT NULL,
  `bandwidth_tower` varchar(50) NOT NULL,
  `tanggal_mulai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jasa_teknisi_colocation`
--

INSERT INTO `jasa_teknisi_colocation` (`id`, `kuantitas_colocation`, `kekuatan_tower`, `bandwidth_tower`, `tanggal_mulai`) VALUES
(4, '1/2 Rack', '16A Flatrate', '100Mbit/s Port', '2019-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `jasa_teknisi_laboratorium`
--

CREATE TABLE `jasa_teknisi_laboratorium` (
  `id` int(11) NOT NULL,
  `kapasitas_lab` varchar(25) NOT NULL,
  `lapisan_lab` varchar(15) NOT NULL,
  `tanggal_mulai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jasa_teknisi_laboratorium`
--

INSERT INTO `jasa_teknisi_laboratorium` (`id`, `kapasitas_lab`, `lapisan_lab`, `tanggal_mulai`) VALUES
(3, '50 - 70 People', 'Tier 3', '2019-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `jasa_teknisi_shelter`
--

CREATE TABLE `jasa_teknisi_shelter` (
  `id` int(11) NOT NULL,
  `kapasitas_shelter` varchar(15) NOT NULL,
  `kuantitas_shelter` int(11) NOT NULL,
  `lokasi` text NOT NULL,
  `tanggal_mulai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jasa_teknisi_shelter`
--

INSERT INTO `jasa_teknisi_shelter` (`id`, `kapasitas_shelter`, `kuantitas_shelter`, `lokasi`, `tanggal_mulai`) VALUES
(2, 'Small', 1, 'aaa', '2019-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `jasa_teknisi_tower`
--

CREATE TABLE `jasa_teknisi_tower` (
  `id` int(11) NOT NULL,
  `ukuran_tower` varchar(15) NOT NULL,
  `kuantitas_tower` int(11) NOT NULL,
  `lokasi_tower` text NOT NULL,
  `warna_tower` varchar(25) NOT NULL,
  `tanggal_mulai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jasa_teknisi_tower`
--

INSERT INTO `jasa_teknisi_tower` (`id`, `ukuran_tower`, `kuantitas_tower`, `lokasi_tower`, `warna_tower`, `tanggal_mulai`) VALUES
(3, 'Small', 1, '', 'balck', '2019-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `Pemesanan_Jasa`
--

CREATE TABLE `Pemesanan_Jasa` (
  `id_Pemesanan` int(11) NOT NULL,
  `id_Cust` varchar(50) NOT NULL,
  `id_tower` int(11) DEFAULT NULL,
  `id_shelter` int(11) DEFAULT NULL,
  `id_lab` int(11) DEFAULT NULL,
  `id_col` int(11) DEFAULT NULL,
  `id_main_unik` int(11) DEFAULT NULL,
  `id_main_general` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Pemesanan_Jasa`
--

INSERT INTO `Pemesanan_Jasa` (`id_Pemesanan`, `id_Cust`, `id_tower`, `id_shelter`, `id_lab`, `id_col`, `id_main_unik`, `id_main_general`) VALUES
(8, '', 3, NULL, NULL, NULL, NULL, NULL),
(9, '', NULL, NULL, NULL, 4, NULL, NULL),
(10, '', NULL, 2, NULL, NULL, NULL, NULL),
(11, '', NULL, NULL, 3, NULL, NULL, NULL),
(12, '', NULL, NULL, NULL, NULL, 7, NULL),
(13, '', NULL, NULL, NULL, NULL, NULL, 9),
(14, '', NULL, NULL, NULL, NULL, 8, NULL),
(15, '', NULL, NULL, NULL, NULL, NULL, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jasa_maintenance_general`
--
ALTER TABLE `jasa_maintenance_general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jasa_maintenance_unik`
--
ALTER TABLE `jasa_maintenance_unik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jasa_teknisi_colocation`
--
ALTER TABLE `jasa_teknisi_colocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jasa_teknisi_laboratorium`
--
ALTER TABLE `jasa_teknisi_laboratorium`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jasa_teknisi_shelter`
--
ALTER TABLE `jasa_teknisi_shelter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jasa_teknisi_tower`
--
ALTER TABLE `jasa_teknisi_tower`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Pemesanan_Jasa`
--
ALTER TABLE `Pemesanan_Jasa`
  ADD PRIMARY KEY (`id_Pemesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jasa_maintenance_general`
--
ALTER TABLE `jasa_maintenance_general`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jasa_maintenance_unik`
--
ALTER TABLE `jasa_maintenance_unik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jasa_teknisi_colocation`
--
ALTER TABLE `jasa_teknisi_colocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jasa_teknisi_laboratorium`
--
ALTER TABLE `jasa_teknisi_laboratorium`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jasa_teknisi_shelter`
--
ALTER TABLE `jasa_teknisi_shelter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jasa_teknisi_tower`
--
ALTER TABLE `jasa_teknisi_tower`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Pemesanan_Jasa`
--
ALTER TABLE `Pemesanan_Jasa`
  MODIFY `id_Pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
