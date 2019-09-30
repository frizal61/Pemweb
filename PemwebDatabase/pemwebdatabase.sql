-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 08:12 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemwebdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataform`
--

CREATE TABLE `dataform` (
  `NPM` varchar(20) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `SD` varchar(50) NOT NULL,
  `SMP` varchar(50) NOT NULL,
  `SMA` varchar(50) NOT NULL,
  `Universitas` varchar(50) NOT NULL,
  `Motto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataform`
--

INSERT INTO `dataform` (`NPM`, `Nama`, `Alamat`, `SD`, `SMP`, `SMA`, `Universitas`, `Motto`) VALUES
('17081010061', 'frizal aditya', 'surabaya', 'mi hasannuddin', 'smpn 22 surabaya', 'sman 18 surabaya', 'UPN', 'aku yang terbaik !!'),
('17081010047', 'lokal', 'wkwkwkw', 'ksksks', 'adasd', 'asdasdasd', 'adadwqdqwd', 'asdaqwqd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
