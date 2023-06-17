-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 03:40 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detail_rumah`
--

CREATE TABLE `detail_rumah` (
  `no_rumah` int(11) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `harga` int(11) NOT NULL,
  `luas` int(11) NOT NULL,
  `fasilitas` text NOT NULL,
  `denah` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `formulir`
--

CREATE TABLE `formulir` (
  `no_daftar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `status` varchar(9) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ktp` varchar(25) NOT NULL,
  `tipe_pesanan` varchar(9) NOT NULL,
  `blok` varchar(25) NOT NULL,
  `no_kavling` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `katalog`
--

CREATE TABLE `katalog` (
  `no_rumah` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `gambar` int(25) NOT NULL,
  `sarana` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `no_laporan` int(11) NOT NULL,
  `no_pesanan` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `foto` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `no_pesanan` int(11) NOT NULL,
  `no_daftar` int(11) NOT NULL,
  `biaya_kpr` int(11) NOT NULL,
  `bphtb` int(11) NOT NULL,
  `harga_ppn` int(11) NOT NULL,
  `harga_rumah` int(11) NOT NULL,
  `luas_tanah` int(11) NOT NULL,
  `luas_bangunan` int(11) NOT NULL,
  `ppn_tanah_lebih` int(11) NOT NULL,
  `biaya_tanah_lebih` int(11) NOT NULL,
  `rumah hook` int(11) NOT NULL,
  `harga_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `detail_rumah`
--
ALTER TABLE `detail_rumah`
  ADD KEY `no_rumah` (`no_rumah`);

--
-- Indexes for table `formulir`
--
ALTER TABLE `formulir`
  ADD PRIMARY KEY (`no_daftar`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`no_rumah`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`no_laporan`),
  ADD KEY `no_pesanan` (`no_pesanan`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`no_pesanan`),
  ADD KEY `no_daftar` (`no_daftar`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_rumah`
--
ALTER TABLE `detail_rumah`
  ADD CONSTRAINT `detail_rumah_ibfk_1` FOREIGN KEY (`no_rumah`) REFERENCES `katalog` (`no_rumah`);

--
-- Constraints for table `formulir`
--
ALTER TABLE `formulir`
  ADD CONSTRAINT `formulir_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `laporan` (`id_user`),
  ADD CONSTRAINT `formulir_ibfk_2` FOREIGN KEY (`no_daftar`) REFERENCES `pesanan` (`no_daftar`);

--
-- Constraints for table `katalog`
--
ALTER TABLE `katalog`
  ADD CONSTRAINT `katalog_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `customer` (`id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `laporan_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`no_daftar`) REFERENCES `formulir` (`no_daftar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
