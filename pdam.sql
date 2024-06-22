-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2024 at 03:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdam`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_tagihan`
--

CREATE TABLE `data_tagihan` (
  `no_sl` char(7) NOT NULL,
  `no_pelanggan` char(5) NOT NULL,
  `jumlah_tagihan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_tagihan`
--

INSERT INTO `data_tagihan` (`no_sl`, `no_pelanggan`, `jumlah_tagihan`) VALUES
('015555`', 'P4', 100000);

--
-- Triggers `data_tagihan`
--
DELIMITER $$
CREATE TRIGGER `pembayaran` BEFORE DELETE ON `data_tagihan` FOR EACH ROW begin
insert into log_pembayaran
set no_sl = old.no_sl,
no_pelanggan = old.no_pelanggan,
jumlah_tagihan = old.jumlah_tagihan,
waktu = now();
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `log_pembayaran`
--

CREATE TABLE `log_pembayaran` (
  `log_id` int(11) NOT NULL,
  `no_sl` char(7) NOT NULL,
  `no_pelanggan` varchar(5) NOT NULL,
  `jumlah_tagihan` int(100) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_pembayaran`
--

INSERT INTO `log_pembayaran` (`log_id`, `no_sl`, `no_pelanggan`, `jumlah_tagihan`, `waktu`) VALUES
(1, '056983', 'P1', 10000, '2024-06-13 00:17:45'),
(2, '056983', 'P1', 61000, '2024-06-13 19:02:22'),
(3, '019231', 'P2', 10000, '2024-06-13 19:03:49'),
(4, '019231', 'P2', 10000, '2024-06-13 19:36:11'),
(5, '056983', 'P1', 100000, '2024-06-14 16:45:17'),
(6, '018733', 'P3', 76000, '2024-06-15 13:24:32'),
(7, '018733', 'P3', 75000, '2024-06-15 14:39:05'),
(8, '056983', 'P1', 61000, '2024-06-15 14:42:22'),
(9, '019231', 'P2', 72000, '2024-06-15 14:47:26');

-- --------------------------------------------------------

--
-- Table structure for table `meteran`
--

CREATE TABLE `meteran` (
  `no_meteran` char(5) NOT NULL,
  `merk` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meteran`
--

INSERT INTO `meteran` (`no_meteran`, `merk`) VALUES
('M1', 'Onda');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `no_pelanggan` char(5) NOT NULL,
  `nama_pelanggan` varchar(35) NOT NULL,
  `alamat_pelanggan` varchar(35) NOT NULL,
  `no_meteran` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`no_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `no_meteran`) VALUES
('P1', 'Hamisah', 'Bayongbong', 'M1'),
('P2', 'Budi', 'Bayongbong', 'M1'),
('P3', 'Lilis Mamuroh', 'Bayongbong', 'M1'),
('P4', 'Yanto', 'Bayongbong', 'M1'),
('P5', 'Acid', 'Bayongbong', 'M1');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` varchar(5) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `alamat_petugas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `alamat_petugas`) VALUES
('001', 'Vicky Achmad Garniadi', 'Perum Griya Bumi Praja Blok I.7');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id_report` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `keluhan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id_report`, `email`, `keluhan`) VALUES
(4, '2206032@itg.ac.id', 'ampas\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(51) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_tagihan`
--
ALTER TABLE `data_tagihan`
  ADD PRIMARY KEY (`no_sl`),
  ADD KEY `no_pelanggan` (`no_pelanggan`);

--
-- Indexes for table `log_pembayaran`
--
ALTER TABLE `log_pembayaran`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `meteran`
--
ALTER TABLE `meteran`
  ADD PRIMARY KEY (`no_meteran`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`no_pelanggan`),
  ADD KEY `no_meteran` (`no_meteran`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id_report`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_pembayaran`
--
ALTER TABLE `log_pembayaran`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id_report` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_tagihan`
--
ALTER TABLE `data_tagihan`
  ADD CONSTRAINT `data_tagihan_ibfk_1` FOREIGN KEY (`no_pelanggan`) REFERENCES `pelanggan` (`no_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `pelanggan_ibfk_1` FOREIGN KEY (`no_meteran`) REFERENCES `meteran` (`no_meteran`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
