-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2016 at 07:26 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nlec`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec');

-- --------------------------------------------------------

--
-- Table structure for table `avail_pengajar`
--

CREATE TABLE IF NOT EXISTS `avail_pengajar` (
  `hari` int(1) NOT NULL DEFAULT '0',
  `jam_mulai` time NOT NULL DEFAULT '00:00:00',
  `jam_selesai` time NOT NULL DEFAULT '00:00:00',
  `id_pengajar` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `avail_siswa`
--

CREATE TABLE IF NOT EXISTS `avail_siswa` (
  `hari` int(1) NOT NULL DEFAULT '0',
  `jam_mulai` time NOT NULL DEFAULT '00:00:00',
  `jam_selesai` time NOT NULL DEFAULT '00:00:00',
  `id_siswa` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `hari` int(1) NOT NULL,
  `jam` time NOT NULL,
  `kode_kelas` varchar(6) NOT NULL,
  `nomor_ruangan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`hari`, `jam`, `kode_kelas`, `nomor_ruangan`) VALUES
(1, '10:00:00', 'A1', 1),
(2, '10:00:00', 'A1', 1),
(3, '10:00:00', 'A2', 2),
(5, '10:00:00', 'A2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `kode` varchar(6) NOT NULL,
  `jumlah_siswa` int(2) NOT NULL,
  `id_pengajar` int(6) NOT NULL,
  `kode_ruangan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kode`, `jumlah_siswa`, `id_pengajar`, `kode_ruangan`) VALUES
('A1', 2, 5, 1),
('A2', 2, 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_siswa` int(6) NOT NULL,
  `id_pengajar` int(6) NOT NULL,
  `skor` int(2) NOT NULL,
  `komentar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_siswa`, `id_pengajar`, `skor`, `komentar`) VALUES
(5, 5, 100, 'Good job cuy!'),
(6, 6, 75, 'Hmm, not bad'),
(7, 5, 80, 'Nice!'),
(8, 6, 5, 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE IF NOT EXISTS `pengajar` (
  `id` int(6) NOT NULL,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `ttl` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`id`, `nama`, `alamat`, `ttl`) VALUES
(5, 'Adi kuncoro', 'ITB', '2016-04-13'),
(6, 'Suminem', 'Buah batu', '2016-04-04');

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE IF NOT EXISTS `presensi` (
  `hari` date NOT NULL,
  `status` text NOT NULL,
  `kode_kelas` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE IF NOT EXISTS `ruangan` (
  `nomor` int(2) NOT NULL,
  `kapasitas` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`nomor`, `kapasitas`) VALUES
(1, 10),
(2, 20);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id` int(6) NOT NULL,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `ttl` date NOT NULL,
  `kode_kelas` varchar(6) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `alamat`, `ttl`, `kode_kelas`) VALUES
(5, 'M. Azwar Adli', 'Jl. Plesiran no. 33 blk', '1994-10-03', 'A1'),
(6, 'Susi Susanti', 'Kanayakan', '2016-03-29', 'A2'),
(7, 'Merina Merli', 'Pontianak', '2016-03-29', 'A1'),
(8, 'Haha', 'hihi', '2016-03-28', 'A2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `avail_pengajar`
--
ALTER TABLE `avail_pengajar`
  ADD PRIMARY KEY (`hari`,`jam_mulai`,`jam_selesai`,`id_pengajar`),
  ADD KEY `id_pengajar` (`id_pengajar`);

--
-- Indexes for table `avail_siswa`
--
ALTER TABLE `avail_siswa`
  ADD PRIMARY KEY (`hari`,`jam_mulai`,`jam_selesai`,`id_siswa`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`jam`,`hari`),
  ADD KEY `kode_kelas` (`kode_kelas`),
  ADD KEY `nomor_ruangan` (`nomor_ruangan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `kode` (`kode`),
  ADD KEY `id_pengajar` (`id_pengajar`),
  ADD KEY `kode_ruangan` (`kode_ruangan`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_pengajar` (`id_pengajar`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`hari`,`kode_kelas`),
  ADD KEY `kode_kelas` (`kode_kelas`),
  ADD KEY `kode_kelas_2` (`kode_kelas`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_kelas` (`kode_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `nomor` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `avail_pengajar`
--
ALTER TABLE `avail_pengajar`
  ADD CONSTRAINT `avail_pengajar_ibfk_1` FOREIGN KEY (`id_pengajar`) REFERENCES `pengajar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `avail_siswa`
--
ALTER TABLE `avail_siswa`
  ADD CONSTRAINT `avail_siswa_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id`);

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`nomor_ruangan`) REFERENCES `ruangan` (`nomor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_pengajar`) REFERENCES `pengajar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas_ibfk_2` FOREIGN KEY (`kode_ruangan`) REFERENCES `ruangan` (`nomor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_pengajar`) REFERENCES `pengajar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `presensi_ibfk_1` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
