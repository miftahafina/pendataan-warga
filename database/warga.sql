-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 17, 2016 at 01:38 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warga_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id_warga` int(11) NOT NULL,
  `nik_warga` varchar(16) NOT NULL,
  `nama_warga` varchar(45) NOT NULL,
  `tempat_lahir_warga` varchar(30) NOT NULL,
  `tanggal_lahir_warga` date NOT NULL,
  `jenis_kelamin_warga` enum('L','P') NOT NULL,
  `alamat_ktp_warga` text NOT NULL,
  `alamat_warga` text NOT NULL,
  `desa_kelurahan_warga` varchar(30) NOT NULL,
  `kecamatan_warga` varchar(30) NOT NULL,
  `kabupaten_kota_warga` varchar(30) NOT NULL,
  `provinsi_warga` varchar(30) NOT NULL,
  `negara_warga` varchar(30) NOT NULL,
  `rt_warga` varchar(3) NOT NULL,
  `rw_warga` varchar(3) NOT NULL,
  `agama_warga` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `pendidikan_terakhir_warga` varchar(20) NOT NULL,
  `pekerjaan_warga` varchar(20) NOT NULL,
  `status_perkawinan_warga` enum('Kawin','Tidak Kawin') NOT NULL,
  `status_warga` enum('Tetap','Kontrak') NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id_warga`, `nik_warga`, `nama_warga`, `tempat_lahir_warga`, `tanggal_lahir_warga`, `jenis_kelamin_warga`, `alamat_ktp_warga`, `alamat_warga`, `desa_kelurahan_warga`, `kecamatan_warga`, `kabupaten_kota_warga`, `provinsi_warga`, `negara_warga`, `rt_warga`, `rw_warga`, `agama_warga`, `pendidikan_terakhir_warga`, `pekerjaan_warga`, `status_perkawinan_warga`, `status_warga`, `id_user`, `created_at`, `updated_at`) VALUES
(5, 'miftah afina', 'lkm', 'l', '1919-06-23', 'P', 'lkm', 'lk', 'ml', 'km', 'lklk', 'mlk', 'm', 'mlk', 'ml', 'Kristen', 'Tidak Tamat SD', ';', 'Kawin', 'Tetap', 1, '2016-06-15 17:44:49', '2016-06-15 17:20:30'),
(7, 'd', 'afina', '', '1996-07-16', '', '', '', 'Kebondalem', 'Pemalang', 'Pemalang', 'Jawa Tengah', 'Indonesia', '', '', '', '', '', '', '', 1, '2016-06-15 17:45:04', '0000-00-00 00:00:00'),
(11, '234', '', '', '1991-06-08', '', '', '', 'Kebondalem', 'Pemalang', 'Pemalang', 'Jawa Tengah', 'Indonesia', '', '', '', '', '', '', '', 1, '2016-06-15 17:45:15', '0000-00-00 00:00:00'),
(17, '', '', '', '0000-00-00', '', '', '', 'Kebondalem', 'Pemalang', 'Pemalang', 'Jawa Tengah', 'Indonesia', '001', '002', '', '', '', '', '', 1, '2016-06-14 09:51:43', '0000-00-00 00:00:00'),
(18, '', '', '', '0000-00-00', '', '', '', 'Kebondalem', 'Pemalang', 'Pemalang', 'Jawa Tengah', 'Indonesia', '001', '002', '', '', '', '', '', 1, '2016-06-14 09:51:54', '0000-00-00 00:00:00'),
(19, 'Miftah afina', '', '', '0000-00-00', 'L', '', '', 'Kebondalem', 'Pemalang', 'Pemalang', 'Jawa Tengah', 'Indonesia', '001', '002', 'Kristen', 'SD', '', 'Kawin', 'Kontrak', 1, '2016-06-14 09:52:44', '0000-00-00 00:00:00'),
(20, '2Miftah afina', '', '', '0000-00-00', 'L', '', '', 'Kebondalem', 'Pemalang', 'Pemalang', 'Jawa Tengah', 'Indonesia', '001', '002', 'Kristen', 'SD', '', 'Kawin', 'Kontrak', 1, '2016-06-14 09:53:24', '0000-00-00 00:00:00'),
(21, '2Miftah afina', '', '', '0000-00-00', 'L', '', '', 'Kebondalem', 'Pemalang', 'Pemalang', 'Jawa Tengah', 'Indonesia', '001', '002', 'Kristen', 'SD', '', 'Kawin', 'Kontrak', 1, '2016-06-14 09:54:02', '0000-00-00 00:00:00'),
(22, '2Miftah afina', '', '', '0000-00-00', 'L', '', '', 'Kebondalem', 'Pemalang', 'Pemalang', 'Jawa Tengah', 'Indonesia', '001', '002', 'Kristen', 'SD', '', 'Kawin', 'Kontrak', 1, '2016-06-14 09:54:19', '0000-00-00 00:00:00'),
(23, '2Miftah afina', '', '', '0000-00-00', 'L', '', '', 'Kebondalem', 'Pemalang', 'Pemalang', 'Jawa Tengah', 'Indonesia', '001', '002', 'Kristen', 'SD', '', 'Kawin', 'Kontrak', 1, '2016-06-15 14:20:23', '2016-06-15 14:20:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id_warga`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `warga`
--
ALTER TABLE `warga`
  ADD CONSTRAINT `warga_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
