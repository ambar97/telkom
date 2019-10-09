-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2019 at 04:05 AM
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
-- Database: `telkom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `nama_admin` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `id_karyawan` int(5) NOT NULL,
  `nama` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `posisi_kerja` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `telp` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `shift_kerja` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Alamat` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(99) COLLATE utf8_unicode_ci NOT NULL,
  `status_user` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_karyawan`
--

INSERT INTO `data_karyawan` (`id_karyawan`, `nama`, `posisi_kerja`, `telp`, `shift_kerja`, `Alamat`, `email`, `status_user`) VALUES
(1, 'Anas Abiem Bahar', 'Pem', '09779', '122', 'Jember', 'abiemassyikin@gmail.com', 0),
(2, 'Ahmad Gede Pratama', 'Marketing', '1212', '23', 'adaq', 'AAS@GMAIL', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_primer`
--

CREATE TABLE `data_primer` (
  `id_primer` int(5) NOT NULL,
  `nama` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lokasi_1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `lokasi_2` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah_jarak` int(10) NOT NULL,
  `lat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `waktu_gangguan` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_primer`
--

INSERT INTO `data_primer` (`id_primer`, `nama`, `lokasi_1`, `lokasi_2`, `jumlah_jarak`, `lat`, `waktu_gangguan`) VALUES
(1, 'asas', 'asas', 'asasa', 34, 'asa', '00:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `data_rating`
--

CREATE TABLE `data_rating` (
  `id_rating` int(5) NOT NULL,
  `id_karyawan` int(5) NOT NULL,
  `points` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_rating`
--

INSERT INTO `data_rating` (`id_rating`, `id_karyawan`, `points`) VALUES
(1, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(4) NOT NULL,
  `idKaryawan` int(4) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `status` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(99) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(99) COLLATE utf8_unicode_ci NOT NULL,
  `kategori_user` varchar(12) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `data_primer`
--
ALTER TABLE `data_primer`
  ADD PRIMARY KEY (`id_primer`);

--
-- Indexes for table `data_rating`
--
ALTER TABLE `data_rating`
  ADD PRIMARY KEY (`id_rating`),
  ADD UNIQUE KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `idKaryawan` (`idKaryawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  MODIFY `id_karyawan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_primer`
--
ALTER TABLE `data_primer`
  MODIFY `id_primer` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_rating`
--
ALTER TABLE `data_rating`
  MODIFY `id_rating` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(4) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_rating`
--
ALTER TABLE `data_rating`
  ADD CONSTRAINT `data_rating_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `data_karyawan` (`id_karyawan`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idKaryawan`) REFERENCES `data_karyawan` (`id_karyawan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
