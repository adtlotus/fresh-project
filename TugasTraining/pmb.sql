-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2017 at 11:47 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbllogin`
--
create database pmb;

use pmb;

CREATE TABLE `tbllogin` (
  `Id_Login` int(10) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllogin`
--

INSERT INTO `tbllogin` (`Id_Login`, `Username`, `Password`) VALUES
(2017001, 'Rossi', 'admin'),
(2017002, 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblpmb`
--

CREATE TABLE `tblpmb` (
  `No_Pmb` int(11) NOT NULL,
  `No_Ujian` int(10) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `No_Kwitansi` int(10) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `PSSB` int(10) NOT NULL,
  `No_Pindahan` int(10) NOT NULL,
  `Jenis_Kelamin` varchar(10) NOT NULL,
  `Tempat_Lahir` varchar(30) NOT NULL,
  `Tgl_Lahir` date NOT NULL,
  `Sesi` varchar(15) NOT NULL,
  `Jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpmb`
--

INSERT INTO `tblpmb` (`No_Pmb`, `No_Ujian`, `Nama`, `No_Kwitansi`, `Status`, `PSSB`, `No_Pindahan`, `Jenis_Kelamin`, `Tempat_Lahir`, `Tgl_Lahir`, `Sesi`, `Jurusan`) VALUES
(2017071001, 2017001, 'Ardiane Rossi', 20172211, 'Baru', 0, 0, 'Laki-Laki', 'Tangerang', '1995-04-30', 'Pagi', 'SI'),
(2017071005, 2017002, 'Occi', 20172211, '', 20170102, 0, 'laki-laki', 'Tangerang', '2017-11-22', 'Pagi', 'TI'),
(2017071011, 2017004, 'Eli', 20172213, 'Drop-In', 0, 0, 'perempuan', 'Jakarta', '2017-09-01', 'Siang', 'TI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbllogin`
--
ALTER TABLE `tbllogin`
  ADD PRIMARY KEY (`Id_Login`);

--
-- Indexes for table `tblpmb`
--
ALTER TABLE `tblpmb`
  ADD PRIMARY KEY (`No_Pmb`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbllogin`
--
ALTER TABLE `tbllogin`
  MODIFY `Id_Login` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2017003;
--
-- AUTO_INCREMENT for table `tblpmb`
--
ALTER TABLE `tblpmb`
  MODIFY `No_Pmb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2017071012;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
