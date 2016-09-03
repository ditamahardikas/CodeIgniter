-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 23, 2016 at 05:07 
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
('1', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `iddosen` int(5) NOT NULL AUTO_INCREMENT,
  `nidn` varchar(10) NOT NULL,
  `namadosen` varchar(10) NOT NULL,
  `idprodi` int(11) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`iddosen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `dosen`
--


-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE IF NOT EXISTS `krs` (
  `id` varchar(5) NOT NULL,
  `nis` varchar(5) NOT NULL,
  `mapel` varchar(5) NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`id`, `nis`, `mapel`, `tgl`) VALUES
('43', 'admin', 'm', '0000-00-00 00:00:00'),
('43', 'admin', 'm01', '0000-00-00 00:00:00'),
('345', 'coba ', 'm02', '0000-00-00 00:00:00'),
('345', 'coba ', 'm02', '2016-07-31 18:32:05');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nis` varchar(4) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `mapel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nis`, `nama`, `mapel`) VALUES
('01', 'Andry La', 'Manajemen Sains'),
('03', 'Ramli', 'Web analiis managemen'),
('04', 'Inaya', 'projek manajemen'),
('05', 'Rohan', 'Management Sains'),
('06', 'afan', 'kosep dasar website'),
('07', 'ramlan', 'dasar editing'),
('10', 'surya', 'Manajemen Sains');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE IF NOT EXISTS `mapel` (
  `id_mapel` varchar(5) NOT NULL,
  `nm_mapel` varchar(30) NOT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nm_mapel`) VALUES
('m01', 'Manajemen Sains comp');
