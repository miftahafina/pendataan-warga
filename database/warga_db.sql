-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 17, 2016 at 01:47 AM
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
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `path_galeri` varchar(100) NOT NULL,
  `caption_galeri` text NOT NULL,
  `tautan_galeri` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kartu_keluarga`
--

CREATE TABLE `kartu_keluarga` (
  `id_keluarga` int(11) NOT NULL,
  `nomor_keluarga` varchar(16) NOT NULL,
  `id_kepala_keluarga` int(11) NOT NULL,
  `alamat_keluarga` text NOT NULL,
  `desa_kelurahan_keluarga` varchar(30) NOT NULL,
  `kecamatan_keluarga` varchar(30) NOT NULL,
  `kabupaten_kota_keluarga` varchar(30) NOT NULL,
  `provinsi_keluarga` varchar(30) NOT NULL,
  `negara_keluarga` varchar(30) NOT NULL,
  `rt_keluarga` varchar(3) NOT NULL,
  `rw_keluarga` varchar(3) NOT NULL,
  `kode_pos_keluarga` varchar(5) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mutasi`
--

CREATE TABLE `mutasi` (
  `id_mutasi` int(11) NOT NULL,
  `nik_mutasi` varchar(16) NOT NULL,
  `nama_mutasi` varchar(45) NOT NULL,
  `tempat_lahir_mutasi` varchar(30) NOT NULL,
  `tanggal_lahir_mutasi` date NOT NULL,
  `jenis_kelamin_mutasi` enum('L','P') NOT NULL,
  `alamat_ktp_mutasi` text NOT NULL,
  `alamat_mutasi` text NOT NULL,
  `desa_kelurahan_mutasi` varchar(30) NOT NULL,
  `kecamatan_mutasi` varchar(30) NOT NULL,
  `kabupaten_kota_mutasi` varchar(30) NOT NULL,
  `provinsi_mutasi` varchar(30) NOT NULL,
  `negara_mutasi` varchar(30) NOT NULL,
  `rt_mutasi` varchar(3) NOT NULL,
  `rw_mutasi` varchar(3) NOT NULL,
  `agama_mutasi` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `pendidikan_terakhir_mutasi` varchar(20) NOT NULL,
  `pekerjaan_mutasi` varchar(20) NOT NULL,
  `status_perkawinan_mutasi` enum('Kawin','Tidak Kawin') NOT NULL,
  `status_mutasi` enum('Tetap','Kontrak') NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(45) NOT NULL,
  `username_user` varchar(20) NOT NULL,
  `password_user` varchar(32) NOT NULL,
  `keterangan_user` text NOT NULL,
  `status_user` enum('Admin','RT','RW') NOT NULL,
  `desa_kelurahan_user` varchar(30) NOT NULL,
  `kecamatan_user` varchar(30) NOT NULL,
  `kabupaten_kota_user` varchar(30) NOT NULL,
  `provinsi_user` varchar(30) NOT NULL,
  `negara_user` varchar(30) NOT NULL,
  `rt_user` varchar(3) NOT NULL,
  `rw_user` varchar(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username_user`, `password_user`, `keterangan_user`, `status_user`, `desa_kelurahan_user`, `kecamatan_user`, `kabupaten_kota_user`, `provinsi_user`, `negara_user`, `rt_user`, `rw_user`, `created_at`, `updated_at`) VALUES
(1, 'Miftah Afina', 'miftahafina', '2e5b97a8a84739fecea891201a74bd7e', 'afin123', 'Admin', 'Kebondalem', 'Pemalang', 'Pemalang', 'Jawa Tengah', 'Indonesia', '001', '002', '2016-06-14 09:20:25', '0000-00-00 00:00:00'),
(8, 'Murti Ayu', 'murtiayu', 'fae38bd94701cdf2a9d114425cb40292', 'pass: ayu123', 'Admin', 'Tomang', 'Grogol Petamburan', 'Jakarta Barat', 'Jakarta', 'Indonesia', '003', '016', '2016-06-16 23:47:08', '2016-06-16 23:47:08');

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

-- --------------------------------------------------------

--
-- Table structure for table `warga_has_kartu_keluarga`
--

CREATE TABLE `warga_has_kartu_keluarga` (
  `id_warga` int(11) NOT NULL,
  `id_keluarga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD PRIMARY KEY (`id_keluarga`),
  ADD KEY `id_kepala_keluarga` (`id_kepala_keluarga`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `mutasi`
--
ALTER TABLE `mutasi`
  ADD PRIMARY KEY (`id_mutasi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id_warga`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `warga_has_kartu_keluarga`
--
ALTER TABLE `warga_has_kartu_keluarga`
  ADD KEY `id_penduduk` (`id_warga`,`id_keluarga`),
  ADD KEY `warga_has_kartu_keluarga_ibfk_2` (`id_keluarga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  MODIFY `id_keluarga` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mutasi`
--
ALTER TABLE `mutasi`
  MODIFY `id_mutasi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `galeri_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD CONSTRAINT `kartu_keluarga_ibfk_1` FOREIGN KEY (`id_kepala_keluarga`) REFERENCES `warga` (`id_warga`),
  ADD CONSTRAINT `kartu_keluarga_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `mutasi`
--
ALTER TABLE `mutasi`
  ADD CONSTRAINT `mutasi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `warga`
--
ALTER TABLE `warga`
  ADD CONSTRAINT `warga_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `warga_has_kartu_keluarga`
--
ALTER TABLE `warga_has_kartu_keluarga`
  ADD CONSTRAINT `warga_has_kartu_keluarga_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `warga_has_kartu_keluarga_ibfk_2` FOREIGN KEY (`id_keluarga`) REFERENCES `kartu_keluarga` (`id_keluarga`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
