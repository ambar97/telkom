-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2019 at 08:27 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

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
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(999) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `data_cacti`
--

CREATE TABLE `data_cacti` (
  `nomor` int(3) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_cacti`
--

INSERT INTO `data_cacti` (`nomor`, `status`) VALUES
(1, 1),
(2, 1),
(3, 0),
(4, 1),
(5, 0),
(6, 1),
(7, 0),
(8, 1),
(9, 0),
(10, 1),
(11, 0),
(12, 1),
(13, 0),
(14, 1),
(15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_history`
--

CREATE TABLE `data_history` (
  `id_history` int(10) NOT NULL,
  `lat` double(10,8) NOT NULL,
  `lng` double(11,8) NOT NULL,
  `kabel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `core` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `des` text COLLATE utf8_unicode_ci NOT NULL,
  `pekerja` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Image 1` text COLLATE utf8_unicode_ci NOT NULL,
  `Image 2` text COLLATE utf8_unicode_ci NOT NULL,
  `Respond` time DEFAULT NULL,
  `Working` time DEFAULT NULL,
  `Solving` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_history`
--

INSERT INTO `data_history` (`id_history`, `lat`, `lng`, `kabel`, `core`, `des`, `pekerja`, `Image 1`, `Image 2`, `Respond`, `Working`, `Solving`) VALUES
(29, -7.80307177, 110.36600400, '2', '3', 'Gangguan ada galian', '', '', '', NULL, NULL, NULL),
(34, -7.78645470, 110.37462520, '1', '1', 'ganggu', '', '', '', NULL, NULL, NULL),
(90, 99.99999999, 999.99999999, '3', '4', 'fdhd', 'gdh', 'fddfghj', 'cvx vc', '29:00:00', '00:29:00', '00:18:00');

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
(2, 'Ahmad Gede Pratama', 'Marketing', '1212', '23', 'adaq', 'AAS@GMAIL', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_latlng`
--

CREATE TABLE `data_latlng` (
  `id` int(11) NOT NULL,
  `Nama` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Lat` double NOT NULL,
  `Lng` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_latlng`
--

INSERT INTO `data_latlng` (`id`, `Nama`, `Lat`, `Lng`) VALUES
(1, 'PAKEM', -7.6673833333333, 110.42034444444),
(2, 'KALASAN', -7.7634861111111, 110.47414722222),
(3, 'BANTUL', -7.8926277777778, 110.33554444444),
(4, 'SLEMAN', -7.7150611111111, 110.35607777778),
(5, 'WATES', -7.8599138888889, 110.15859722222),
(6, 'BANGUNTAPAN', -7.8178416666667, 110.40796944444),
(7, 'KOTABARU', -7.7861027777778, 110.37469722222),
(8, 'BABARSARI', -7.7803, 110.41238333333),
(9, 'KENTUNGAN', -7.7403411129463, 110.39251368019),
(10, 'STO KLATEN', -7.713657288838, 110.59069023317),
(11, 'STO WONOSARI', -7.967213256662, 110.60302250191),
(12, 'TRIKORA', -7.8022520938298, 110.36478144096),
(13, 'PUGERAN', -7.8138098450388, 110.36053407264),
(14, 'GODEAN', -7.7655713044148, 110.29082792171);

-- --------------------------------------------------------

--
-- Table structure for table `data_primer`
--

CREATE TABLE `data_primer` (
  `id_primer` int(5) NOT NULL,
  `lokasi_1` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `lokasi_2` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kabel` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `panjang` double(8,4) NOT NULL,
  `ruas` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_primer`
--

INSERT INTO `data_primer` (`id_primer`, `lokasi_1`, `lokasi_2`, `jenis_kabel`, `panjang`, `ruas`) VALUES
(1, 'BABARSARI', 'BANGUNTAPAN', 'Aerial', 5.1050, 'KU JR G 652 24 C'),
(2, 'SLEMAN', 'MUNTILAN', 'Direct Burried', 0.8174, 'KT JR G 655 48 C'),
(3, 'SLEMAN', 'PAKEM', 'Aerial', 0.5472, 'KU JR G 652 12C'),
(4, 'KALASAN', 'BABARSARI', 'Aerial', 8.7180, 'KT JR G 652 36C'),
(5, 'BABARSARI', 'KALASAN', 'Duct', 8.7080, 'KT JR G 655 36C'),
(6, 'PUGERAN', 'BANGUNTAPAN', 'Duct', 6.3080, 'KT JR G 655 48C'),
(7, 'PUGERAN', 'SLEMAN', 'Direct Burried\r\n', 14.3490, 'KT JR G 655 24 C'),
(8, 'KOTABARU', 'WATES', 'Direct Burried\r\n', 31.5840, 'KT KA G 652 12C'),
(9, 'KOTABARU', 'KENTUNGAN', 'Duct\r\n', 8.0880, 'KT JR G652 36 C'),
(10, 'KOTABARU', 'GODEAN', 'Direct Burried\r\n', 10.6920, 'KT JR G 655 48C'),
(11, 'BABARSARI', 'BANGUNTAPAN', 'Aerial\r\n', 5.3750, 'KU JR G 655 48C'),
(12, 'BANGUNTAPAN', 'WONOSARI', 'Aerial\r\n', 38.1890, 'KU JR G 655 24C'),
(13, 'BANGUNTAPAN', 'WONOSARI', 'Aerial\r\n', 35.8500, 'KU JR G 652 24C'),
(14, 'PUGERAN', 'SLEMAN', 'Aerial\r\n', 14.1490, 'KU JR G 652 36C'),
(15, 'KOTABARU', 'KLATEN', 'Direct Burried\r\n', 29.2450, 'KT KA G 652 12C'),
(16, 'BABARSARI', 'KOTABARU', 'Aerial\r\n', 5.1750, 'KT JR G 652 24C'),
(17, 'KOTABARU', 'KENTUNGAN', 'Duct\r\n', 6.1900, 'KT JR G 655 24 C'),
(18, 'KOTABARU', 'TRIKORA', 'Duct\r\n', 2.7620, 'KT JR G655 48 C'),
(19, 'KOTABARU', 'KENTUNGAN', 'Aerial\r\n', 6.1980, 'KU JR G 655, 48 C'),
(20, 'KOTABARU', 'SLEMAN', 'Duct\r\n', 12.3000, 'KT JR G 655 48C'),
(21, 'KOTABARU', 'PUGERAN', 'Aerial\r\n', 5.7410, 'KU JR G 655 48C'),
(22, 'KOTABARU', 'GODEAN', 'Aerial\r\n', 10.5980, 'KU JR G 652 12C'),
(23, 'TRIKORA', 'PUGERAN', 'Duct\r\n', 3.1290, 'KT JR G 655 48C'),
(24, 'PUGERAN', 'BANTUL', 'Direct Burried\r\n', 11.2600, 'KT JR G 655 24C'),
(25, 'KOTABARU', 'PUGERAN', 'Duct\r\n', 5.7410, 'KT JR G 652 12C'),
(26, 'BABARSARI', 'KALASAN', 'Aerial\r\n', 8.7080, 'KU JR G 652 36C'),
(27, 'BABARSARI', 'KOTABARU', 'Duct\r\n', 5.5980, 'KT JR G 654 24C'),
(28, 'KOTABARU', 'BABARSARI', 'Duct\r\n', 5.6030, 'KT JR G 655 48 C'),
(29, 'BANGUNTAPAN', 'BANTUL', 'Direct Burried\r\n', 17.3200, 'KT JR G655 24C'),
(30, 'PUGERAN', 'BANTUL', 'Aerial\r\n', 12.5000, 'KU JR G 655 48C'),
(31, 'KALASAN', 'KLATEN', 'Direct Burried\r\n', 15.5680, 'KT JR G 655 36 C'),
(32, 'KALASAN', 'KLATEN', 'Aerial\r\n', 15.5380, 'KU JR G 652 36C'),
(33, 'KENTUNGAN', 'SLEMAN', 'Aerial\r\n', 8.8170, 'KU JR G 652 24C'),
(34, 'SLEMAN', 'MUNTILAN', 'Aerial\r\n', 18.0000, 'KU JR G655 48 C'),
(35, 'SLEMAN', 'MUNTILAN', 'Aerial\r\n', 18.8000, 'KU JR G 652 36C'),
(36, 'PAKEM', 'KENTUNGAN', 'Aerial\r\n', 8.9120, 'KU Jalan Raya G652 12 C'),
(37, 'KENTUNGAN', 'SLEMAN', 'Direct Burried\r\n', 8.3600, 'KT Jalan Raya 24 C, G 655'),
(38, 'KENTUNGAN', 'SLEMAN', 'Aerial\r\n', 8.8170, 'KU Jalan Raya G655, 48 C'),
(39, 'BABARSARI', 'BANGUNTAPAN', 'Direct Burried\r\n', 5.0110, 'KT Jalan Raya 24 C, G 655'),
(40, 'PUGERAN', 'WATES', 'Direct Burried\r\n', 31.0640, 'KT Jalan Raya G655, 48 C'),
(41, 'GODEAN', 'WATES', 'Direct Burried\r\n', 26.6510, 'KT Jalan Raya 48 C, G 655'),
(42, 'KOTABARU', 'STO KLATEN', 'Direct Burried\r\n', 29.8940, 'KT Jalan Raya 48 C, G 655');

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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(5) NOT NULL,
  `username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'Admin'),
(2, 'dhanyrf', '123', 'Dhany Rivaldi'),
(3, 'Alifiah', '123', 'Alifia fia alif'),
(4, 'Ninis', '123', 'Ninis Masulah'),
(5, 'a', 'a', 'a');

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
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_cacti`
--
ALTER TABLE `data_cacti`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `data_history`
--
ALTER TABLE `data_history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `data_latlng`
--
ALTER TABLE `data_latlng`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_cacti`
--
ALTER TABLE `data_cacti`
  MODIFY `nomor` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `data_history`
--
ALTER TABLE `data_history`
  MODIFY `id_history` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  MODIFY `id_karyawan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_latlng`
--
ALTER TABLE `data_latlng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `data_primer`
--
ALTER TABLE `data_primer`
  MODIFY `id_primer` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `data_rating`
--
ALTER TABLE `data_rating`
  MODIFY `id_rating` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
