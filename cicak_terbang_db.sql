-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2016 at 04:42 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cicak_terbang_db`
--
CREATE DATABASE IF NOT EXISTS `cicak_terbang_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cicak_terbang_db`;

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `idAdministrator` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idAdministrator`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`idAdministrator`, `nama`, `username`, `password`) VALUES
(1, 'Admin', 'admin', 'admin12345');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `idGuru` int(5) NOT NULL,
  `nama` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idGuru`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`idGuru`, `nama`, `alamat`) VALUES
(12452, 'Aman Saja S.Psi', 'Jalan Aman'),
(33667, 'Bastian S.Pd, M.Si', 'Jalan Sehat'),
(77666, 'Mursidi Al Fathah', 'Jalan Kita Berdua'),
(44562, 'Suryadi S.Kom', 'Jalan Kita'),
(34112, 'Jamin S,Pd', 'Jalan Dijamin Aman'),
(55412, 'Chacha, S.T', 'Jalan Bersama No. 90 Medan');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE IF NOT EXISTS `mata_pelajaran` (
  `idmata_pelajaran` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idmata_pelajaran`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`idmata_pelajaran`, `nama`) VALUES
(1, 'Matematika'),
(2, 'Bahasa Indonesia'),
(3, 'Bahasa Inggris'),
(4, 'Agama'),
(12, 'Bahasa Jepang');

-- --------------------------------------------------------

--
-- Table structure for table `ruang_kelas`
--

CREATE TABLE IF NOT EXISTS `ruang_kelas` (
  `idRuang_Kelas` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idRuang_Kelas`),
  UNIQUE KEY `nama` (`nama`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `ruang_kelas`
--

INSERT INTO `ruang_kelas` (`idRuang_Kelas`, `nama`) VALUES
(1, 'X'),
(2, 'XI'),
(3, 'XII');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `idSiswa` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kelas` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idSiswa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`idSiswa`, `nama`, `alamat`, `kelas`) VALUES
('2222', 'Bulli Yasona Telaumbanua', 'Ringroad', 'XI'),
('3333', 'Opung Tambunan', 'Tidak Diketahui', 'XII'),
('2134', 'Anarko', 'Jalan Anak Medan No 89', 'X'),
('2133', 'Jhone', 'Tidak Diketahui', 'XI'),
('12131', 'In Jack', 'Kota Fajar', 'X'),
('2132', 'Eca Eci', 'Jalan Keberkahan', 'X'),
('1006', 'Fandi Adhitya,s.kom', 'Jalan Mundur', 'XI');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
