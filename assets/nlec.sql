-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2016 at 03:36 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nlec`
--

-- --------------------------------------------------------

--
-- Table structure for table `avail_pengajar`
--

CREATE TABLE IF NOT EXISTS `avail_pengajar` (
  `hari` int(1) NOT NULL DEFAULT '0',
  `jam_mulai` time NOT NULL DEFAULT '00:00:00',
  `jam_selesai` time NOT NULL DEFAULT '00:00:00',
  `id_pengajar` int(6) NOT NULL,
  PRIMARY KEY (`hari`,`jam_mulai`,`jam_selesai`,`id_pengajar`),
  KEY `id_pengajar` (`id_pengajar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `avail_siswa`
--

CREATE TABLE IF NOT EXISTS `avail_siswa` (
  `hari` int(1) NOT NULL DEFAULT '0',
  `jam_mulai` time NOT NULL DEFAULT '00:00:00',
  `jam_selesai` time NOT NULL DEFAULT '00:00:00',
  `id_siswa` int(1) NOT NULL,
  PRIMARY KEY (`hari`,`jam_mulai`,`jam_selesai`,`id_siswa`),
  KEY `id_siswa` (`id_siswa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `hari` int(1) NOT NULL,
  `jam` time NOT NULL,
  `kode_kelas` varchar(6) NOT NULL,
  `nomor_ruangan` int(2) NOT NULL,
  PRIMARY KEY (`jam`,`hari`),
  KEY `kode_kelas` (`kode_kelas`),
  KEY `nomor_ruangan` (`nomor_ruangan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `kode` varchar(6) NOT NULL,
  `jumlah_siswa` int(2) NOT NULL,
  `id_pengajar` int(6) NOT NULL,
  `kode_ruangan` int(2) NOT NULL,
  PRIMARY KEY (`kode`),
  KEY `kode` (`kode`),
  KEY `id_pengajar` (`id_pengajar`),
  KEY `kode_ruangan` (`kode_ruangan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_siswa` int(6) NOT NULL,
  `id_pengajar` int(6) NOT NULL,
  `skor` int(2) NOT NULL,
  `komentar` text,
  PRIMARY KEY (`id_siswa`),
  KEY `id_pengajar` (`id_pengajar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE IF NOT EXISTS `pengajar` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `ttl` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE IF NOT EXISTS `presensi` (
  `hari` date NOT NULL,
  `status` text NOT NULL,
  `kode_kelas` varchar(6) NOT NULL,
  PRIMARY KEY (`hari`,`kode_kelas`),
  KEY `kode_kelas` (`kode_kelas`),
  KEY `kode_kelas_2` (`kode_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE IF NOT EXISTS `ruangan` (
  `nomor` int(2) NOT NULL AUTO_INCREMENT,
  `kapasitas` int(11) NOT NULL,
  PRIMARY KEY (`nomor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `ttl` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kode_kelas` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kode_kelas` (`kode_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
