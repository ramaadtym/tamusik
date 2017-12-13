-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2017 at 05:02 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `audio_watermarking`
--

-- --------------------------------------------------------

--
-- Table structure for table `datauser`
--

CREATE TABLE IF NOT EXISTS `datauser` (
  `id_user` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `notlp` varchar(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `level` int(100) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `datauser`
--

INSERT INTO `datauser` (`id_user`, `username`, `password`, `nama`, `alamat`, `notlp`, `email`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'jl.telekomunikasi', '01234567890', 'admin@gmail.com', 0),
(2, 'pelanggan', 'pelanggan', 'pelanggan', 'sukabirus', 'hahaha', 'pelanggan@gmail.com', 1),
(3, 'produsen', 'produsen', 'produsen', 'sukapura', 'mantap', 'produsen@gmail.com', 2),
(4, '', '', '', '', '', '', 0),
(5, '', '', '', '', '', '', 0),
(6, '', '', '', '', '', '', 0),
(7, 'cc', 'cc', 'c', 'c', 'c', 'c@c', 0),
(8, 'dd', 'dd', 'd', 'd', 'd', 'd@d', 2);

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE IF NOT EXISTS `konfirmasi` (
  `id_konfirmasi` int(250) NOT NULL AUTO_INCREMENT,
  `id_pembayaran` int(250) NOT NULL,
  `id_user` int(250) NOT NULL,
  `namabank` varchar(500) NOT NULL,
  `no.rek` int(250) NOT NULL,
  `totalbayar` int(250) NOT NULL,
  `buktibayar` varchar(500) NOT NULL,
  `status` int(250) NOT NULL,
  PRIMARY KEY (`id_konfirmasi`),
  KEY `id_user` (`id_user`),
  KEY `id_pembayaran` (`id_pembayaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `id_pembayaran` int(250) NOT NULL AUTO_INCREMENT,
  `id_user` int(250) NOT NULL,
  `id_watermarked` int(250) NOT NULL,
  `namabank` varchar(500) NOT NULL,
  `rekening` int(250) NOT NULL,
  PRIMARY KEY (`id_pembayaran`),
  KEY `id_user` (`id_user`),
  KEY `id_watermarked` (`id_watermarked`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `watermarked`
--

CREATE TABLE IF NOT EXISTS `watermarked` (
  `id_watermarked` int(100) NOT NULL AUTO_INCREMENT,
  `id_watermarking` int(250) NOT NULL,
  `tanggal` date NOT NULL,
  `watermarked_free` varchar(200) NOT NULL,
  `watermarked_buy` varchar(200) NOT NULL,
  PRIMARY KEY (`id_watermarked`),
  KEY `id_watermarking` (`id_watermarking`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `watermarking`
--

CREATE TABLE IF NOT EXISTS `watermarking` (
  `id_watermarking` int(100) NOT NULL AUTO_INCREMENT,
  `id_user` int(250) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(500) NOT NULL,
  `host` varchar(200) NOT NULL,
  `watermark` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  PRIMARY KEY (`id_watermarking`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD CONSTRAINT `konfirmasi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `datauser` (`id_user`),
  ADD CONSTRAINT `konfirmasi_ibfk_2` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id_pembayaran`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `datauser` (`id_user`),
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`id_watermarked`) REFERENCES `watermarked` (`id_watermarked`);

--
-- Constraints for table `watermarked`
--
ALTER TABLE `watermarked`
  ADD CONSTRAINT `watermarked_ibfk_1` FOREIGN KEY (`id_watermarking`) REFERENCES `watermarking` (`id_watermarking`);

--
-- Constraints for table `watermarking`
--
ALTER TABLE `watermarking`
  ADD CONSTRAINT `watermarking_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `datauser` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
