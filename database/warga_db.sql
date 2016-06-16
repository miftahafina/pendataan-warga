-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 16, 2016 at 01:28 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

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

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `path_galeri`, `caption_galeri`, `tautan_galeri`, `id_user`, `created_at`, `updated_at`) VALUES
(2, 'path_galeri', 'caption_galeri', 'tautan_galeri', 1, '2016-06-15 16:00:29', '0000-00-00 00:00:00'),
(3, 'function.php', 'asdf', 'asdf', 1, '2016-06-15 16:04:25', '0000-00-00 00:00:00'),
(4, 'function.php', 'asdfacp', 'tau', 1, '2016-06-15 16:04:43', '0000-00-00 00:00:00'),
(5, '', 'ini caption', 'ini tautan', 1, '2016-06-15 16:26:01', '0000-00-00 00:00:00'),
(6, '', 'e', 'e', 1, '2016-06-15 16:28:34', '0000-00-00 00:00:00'),
(7, '', 'r', 'k', 1, '2016-06-15 16:30:54', '0000-00-00 00:00:00'),
(8, '', 'r', 'k', 1, '2016-06-15 16:31:17', '0000-00-00 00:00:00'),
(9, '', 'r', 'k', 1, '2016-06-15 16:32:48', '0000-00-00 00:00:00'),
(10, '', 'capt', 'taut', 1, '2016-06-16 03:18:52', '0000-00-00 00:00:00'),
(11, '', 'f', '', 1, '2016-06-16 04:16:26', '0000-00-00 00:00:00');

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

--
-- Dumping data for table `kartu_keluarga`
--

INSERT INTO `kartu_keluarga` (`id_keluarga`, `nomor_keluarga`, `id_kepala_keluarga`, `alamat_keluarga`, `desa_kelurahan_keluarga`, `kecamatan_keluarga`, `kabupaten_kota_keluarga`, `provinsi_keluarga`, `negara_keluarga`, `rt_keluarga`, `rw_keluarga`, `kode_pos_keluarga`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'dsf', 11, 'jkh', 'h', 'lkjh', 'kh', 'lkj', 'hlk', 'j', 'hlk', 'hkl', 1, '2016-06-16 10:48:45', '2016-06-16 10:48:45'),
(2, 'jkasdf', 7, 'lk', 'mlk', 'mk', 'm', 'klm', 'lkm', 'lkm', 'lkm', 'asdf', 1, '2016-06-15 16:57:30', '0000-00-00 00:00:00'),
(8, 'kj', 7, 'k', 'klj', 'k', 'jk', 'jk', 'j', 'kjk', 'jk', 'jkj', 1, '2016-06-15 17:00:55', '0000-00-00 00:00:00'),
(10, 'DUADUA', 11, 'k', 'km', 'klm', 'lm', 'lk', 'lk', 'lkm', 'lkm', 'lkm', 1, '2016-06-16 10:49:57', '2016-06-16 10:49:57'),
(11, '321321', 19, 'alamat', 'desa', 'kecamatan', 'kabupaten kota', 'provinsi', 'negara', 'rt', 'rw', 'kodep', 1, '2016-06-16 04:32:57', '0000-00-00 00:00:00'),
(13, 'nomorRRRRR', 11, 'alamat', 'desa', 'kecamataRRRR', 'kab', 'prov', 'negara', 'rt', 'rw', 'kode', 1, '2016-06-16 10:49:33', '2016-06-16 10:49:33'),
(14, 'FEDEX', 11, 'L', 'HL', 'HL', 'HLI', 'H', 'LIH', 'LIU', 'UIG', 'YUKG', 1, '2016-06-16 10:50:13', '0000-00-00 00:00:00');

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

--
-- Dumping data for table `mutasi`
--

INSERT INTO `mutasi` (`id_mutasi`, `nik_mutasi`, `nama_mutasi`, `tempat_lahir_mutasi`, `tanggal_lahir_mutasi`, `jenis_kelamin_mutasi`, `alamat_ktp_mutasi`, `alamat_mutasi`, `desa_kelurahan_mutasi`, `kecamatan_mutasi`, `kabupaten_kota_mutasi`, `provinsi_mutasi`, `negara_mutasi`, `rt_mutasi`, `rw_mutasi`, `agama_mutasi`, `pendidikan_terakhir_mutasi`, `pekerjaan_mutasi`, `status_perkawinan_mutasi`, `status_mutasi`, `id_user`, `created_at`, `updated_at`) VALUES
(2, '342', 'aaaaaaa', 'korea', '0000-00-00', 'L', 'pemalankzzz', 'pemalankz', 'pemalankz', 'pemalank', 'pemalank', 'pemalank', 'pemalank', 'pem', 'pem', 'Islam', 'SMP', 'nyupang', 'Tidak Kawin', 'Tetap', 1, '2016-06-15 14:03:07', '0000-00-00 00:00:00'),
(3, '342', 'aaaaaaa', 'korea', '0000-00-00', 'L', 'pemalank', 'pemalank', 'pemalank', 'pemalank', 'pemalank', 'pemalank', 'pemalank', 'pem', 'pem', 'Islam', 'SMP', 'nyupang', 'Tidak Kawin', 'Tetap', 1, '2016-06-15 14:07:08', '0000-00-00 00:00:00'),
(4, '342', 'aaaaaaa', 'korea', '0000-00-00', 'L', 'pemalank', 'pemalank', 'pemalank', 'pemalank', 'pemalank', 'pemalank', 'pemalank', 'pem', 'pem', 'Islam', 'SMP', 'nyupang', 'Tidak Kawin', 'Tetap', 1, '2016-06-15 14:07:08', '0000-00-00 00:00:00'),
(5, '342', 'aaaaaaa', 'korea', '0000-00-00', 'L', 'pemalank', 'pemalank', 'pemalank', 'pemalank', 'pemalank', 'pemalank', 'pemalank', 'pem', 'pem', 'Islam', 'SMP', 'nyupang', 'Tidak Kawin', 'Tetap', 1, '2016-06-15 14:07:46', '0000-00-00 00:00:00'),
(6, '12341234', 'miftah amila', 'widuri', '1996-08-06', 'P', 'alamat ktp1', 'alamat1', 'Kebondalem1', 'Pemalang1', 'Pemalang1', 'Jawa Tengah1', 'Indonesia1', '002', '003', 'Islam', 'SMA', 'gutu', 'Tidak Kawin', 'Kontrak', 1, '2016-06-15 14:16:19', '0000-00-00 00:00:00'),
(7, '234', '234 afin', '', '0000-00-00', 'L', '', '', '', '', '', '', '', '', '', 'Kristen', 'SMP', '', 'Kawin', 'Kontrak', 1, '2016-06-15 14:18:36', '0000-00-00 00:00:00'),
(8, 'aaaaaaaaaaaaaaaa', 'asdf', 'asdf', '1968-01-12', 'L', 'asdf', 'adsf', 'Kebondalem', 'Pemalang', 'Pemalang', 'Jawa Tengah', 'Indonesia', '001', '002', 'Kristen', 'D2', 'sadf', 'Tidak Kawin', 'Tetap', 1, '2016-06-16 08:54:26', '0000-00-00 00:00:00');

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
(3, 'nama_user', 'username_uesr', 'password_user', 'keterangan_user', 'Admin', 'desa_kelurahan_user', 'kecamatan_user', 'kabupaten_kota_user', 'provinsi_user', 'negara_user', 'rt_', 'rw_', '2016-06-15 14:58:47', '0000-00-00 00:00:00'),
(4, 'nama_user', 'username_user', 'password_user', 'keterangan_user', 'Admin', 'desa_kelurahan_user', 'kecamatan_user', 'kabupaten_kota_user', 'provinsi_user', 'negara_user', 'rt_', 'rw_', '2016-06-15 15:33:04', '0000-00-00 00:00:00'),
(5, 'afinfff', 'sdf', '202cb962ac59075b964b07152d234b70', 'sdf', 'RT', 'oij', 'oi', 'joi', 'jo', 'ij', 'o', 'oij', '2016-06-15 15:46:21', '2016-06-15 15:46:21'),
(6, 'slamet budiarto1', 'slamet1', 'd41d8cd98f00b204e9800998ecf8427e', 'ini slamet1', 'Admin', 'butuh1', 'tengaran1', 'semarang1', 'jawa tengah1', 'indonesia1', '008', '009', '2016-06-15 15:40:26', '2016-06-15 15:40:26'),
(7, 'chirs', 'lk', '30b3db3e65c341b847430e0b88823c1b', 'jlk', 'Admin', 'kkl', 'jkl', 'j', 'kl', ';klj', 'lkj', 'lkj', '2016-06-15 15:07:53', '0000-00-00 00:00:00'),
(8, 'afin', 'a', '24c6aa74f058c1ab7f1c9c656d35394b', 'uih', 'Admin', 'kh', 'kjh', 'kj', 'h', 'kjh', 'jkh', 'kjh', '2016-06-16 03:29:56', '0000-00-00 00:00:00');

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
(5, 'miftah afina', 'lkm', 'l', '1919-06-23', 'L', 'lkm', 'lk', 'ml', 'km', 'lklk', 'mlk', 'm', 'mlk', 'ml', 'Konghucu', 'Tidak Tamat SD', ';', 'Tidak Kawin', 'Tetap', 1, '2016-06-16 10:22:02', '2016-06-30 03:06:08'),
(7, 'd', 'afina', '', '1996-07-16', '', '', '', 'Kebondalem', 'Pemalang', 'Pemalang', 'Jawa Tengah', 'Indonesia', '', '', '', '', '', '', '', 1, '2016-06-15 17:45:04', '0000-00-00 00:00:00'),
(11, '234', 'nmwrg', 'kasur', '1991-06-08', 'P', 'jhy', 'hjb', 'j', 'b', 'jkhbk', 'jhb', 'kjhb', '', '', 'Hindu', 'Tidak Tamat SD', 'sdf', 'Tidak Kawin', 'Kontrak', 1, '2016-06-16 08:24:58', '2016-06-16 08:24:58'),
(17, '', '', '', '0000-00-00', '', '', '', 'Kebondalem', 'Pemalang', 'Pemalang', 'Jawa Tengah', 'Indonesia', '001', '002', '', '', '', '', '', 1, '2016-06-14 09:51:43', '0000-00-00 00:00:00'),
(18, '', '', '', '0000-00-00', '', '', '', 'Kebondalem', 'Pemalang', 'Pemalang', 'Jawa Tengah', 'Indonesia', '001', '002', '', '', '', '', '', 1, '2016-06-14 09:51:54', '0000-00-00 00:00:00'),
(19, 'Miftah afina', 'slamet budiarto', '', '0000-00-00', 'L', '', '', 'Kebondalem', 'Pemalang', 'Pemalang', 'Jawa Tengah', 'Indonesia', '001', '002', 'Kristen', 'SD', '', 'Kawin', 'Kontrak', 1, '2016-06-16 03:08:10', '2016-06-16 03:08:10'),
(20, '2Miftah afina', '', '', '0000-00-00', 'L', '', '', 'Kebondalem', 'Pemalang', 'Pemalang', 'Jawa Tengah', 'Indonesia', '001', '002', 'Kristen', 'SD', '', 'Kawin', 'Kontrak', 1, '2016-06-14 09:53:24', '0000-00-00 00:00:00'),
(21, '2Miftah afina', '', '', '0000-00-00', 'L', '', '', 'Kebondalem', 'Pemalang', 'Pemalang', 'Jawa Tengah', 'Indonesia', '001', '002', 'Kristen', 'SD', '', 'Kawin', 'Kontrak', 1, '2016-06-14 09:54:02', '0000-00-00 00:00:00'),
(22, '2Miftah afina', '', '', '0000-00-00', 'L', '', '', 'Kebondalem', 'Pemalang', 'Pemalang', 'Jawa Tengah', 'Indonesia', '001', '002', 'Kristen', 'SD', '', 'Kawin', 'Kontrak', 1, '2016-06-14 09:54:19', '0000-00-00 00:00:00'),
(23, '2Miftah afina', '', '', '0000-00-00', 'L', '', '', 'Kebondalem', 'Pemalang', 'Pemalang', 'Jawa Tengah', 'Indonesia', '001', '002', 'Kristen', 'SD', '', 'Kawin', 'Kontrak', 1, '2016-06-15 14:20:23', '2016-06-15 14:20:23'),
(24, '321654', 'klkln', 'jlk', '2016-06-16', 'P', 'sdf', 'asdf', 'Kebondalem', 'Pemalang', 'Pemalang', 'Jawa Tengah', 'Indonesia', '001', '002', 'Islam', 'SMP', '', 'Tidak Kawin', 'Tetap', 1, '2016-06-16 02:48:44', '2016-06-16 02:48:44'),
(26, 'dsaf', '555555555', '365', '2016-06-16', 'L', '35', '1', '351', '531', '3', '513', '51', '5', '13', 'Katholik', 'Tidak Tamat SD', 'sd', 'Kawin', 'Kontrak', 1, '2016-06-16 03:10:58', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `warga_has_kartu_keluarga`
--

CREATE TABLE `warga_has_kartu_keluarga` (
  `id_warga` int(11) NOT NULL,
  `id_keluarga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warga_has_kartu_keluarga`
--

INSERT INTO `warga_has_kartu_keluarga` (`id_warga`, `id_keluarga`) VALUES
(5, 10),
(7, 2),
(11, 1),
(11, 2),
(17, 11),
(19, 2),
(19, 2),
(19, 2),
(19, 10),
(24, 2),
(26, 2);

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
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  MODIFY `id_keluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `mutasi`
--
ALTER TABLE `mutasi`
  MODIFY `id_mutasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
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
