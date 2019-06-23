-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 18, 2019 at 09:58 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iventaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `jenis_barang` text NOT NULL,
  `satuan` varchar(30) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `jumlah_persediaan` int(11) NOT NULL,
  `nilai_persediaan` int(11) NOT NULL,
  `jumlah_pembelian1` int(11) NOT NULL,
  `nilai_pembelian1` int(11) NOT NULL,
  `jumlah_pembelian2` int(11) NOT NULL,
  `nilai_pembelian2` int(11) NOT NULL,
  `jumlah_pembelian3` int(11) NOT NULL,
  `nilai_pembelian3` int(11) NOT NULL,
  `jumlah_total` int(11) NOT NULL,
  `nilai_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `jenis_barang`, `satuan`, `harga`, `jumlah_persediaan`, `nilai_persediaan`, `jumlah_pembelian1`, `nilai_pembelian1`, `jumlah_pembelian2`, `nilai_pembelian2`, `jumlah_pembelian3`, `nilai_pembelian3`, `jumlah_total`, `nilai_total`) VALUES
(1, 'sa', '', 'sa', '213', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2),
(2, 'sa', '', 'w', '213', 3, 4, 4, 4, 2, 42, 24, 24, 42, 24),
(3, 'daf', '', 'afa', '132', 321, 312, 12, 12, 213, 12, 23, 231, 21, 13),
(4, 'ad', '', 'as', '23', 412, 241, 24, 41, 241, 42, 41, 24, 142, 412),
(5, 'wq', '', 'rwq', '214', 12, 241, 41, 41, 21, 41, 41, 412, 142, 14),
(6, 'asdf', 'Alat dan Bahan Kebersihan', '21', '12', 21, 21, 212, 121, 12, 21, 12, 11, 1211, 22),
(7, 'dsf', 'Barang Cetakan', '2', '2', 1222, 22, 1, 1, 2, 2, 21, 2, 2, 12),
(8, 'desf', 'Komponen Listrik', '2', '2', 2, 4, 2, 1, 12, 24, 4, 1, 1, 21),
(9, 'tyt', 'Komponen Listrik', '2', '3', 3, 1, 3, 2, 3, 3, 2, 2, 1, 1),
(10, 'r', 'Alat dan Bahan Kebersihan', '21', '12', 12, 12, 12, 21, 21, 12, 2, 21, 2, 1),
(11, 'wq', 'ATK', '2', '24', 1222, 2, 12, 21, 12, 12, 12, 25, 212, 21),
(12, 'df', 'Alat dan Bahan Kebersihan', '1', '1', 1, 1, 1, 1, 12, 1, 1, 1, 1, 1),
(13, 'r', 'Alat dan Bahan Kebersihan', '1', '1', 1, 1, 12, 1, 12, 13, 13, 13, 13, 13),
(14, 'ee', 'Alat dan Bahan Kebersihan', '21', '12', 12, 21, 12, 21, 21, 12, 12, 12, 1211, 21),
(15, 'ew', 'ATK', '1', '1', 21, 2, 2, 2, 232, 2, 2, 2, 212, 2),
(16, 're', 'ATK', '1', '12', 1, 1, 1, 1, 1, 1, 12, 1, 1211, 1),
(17, 'rer', 'Barang Cetakan', '1', '1', 1, 1, 1, 1, 1, 1, 1, 11, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
