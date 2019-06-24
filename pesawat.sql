-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2019 at 03:58 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesawat`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesawat`
--

CREATE TABLE `pesawat` (
  `no_reservasi` varchar(10) NOT NULL,
  `nama_pemesan` varchar(35) NOT NULL,
  `tujuan` varchar(15) NOT NULL,
  `biaya_tujuan` int(11) NOT NULL,
  `biaya_pokok` int(11) NOT NULL,
  `potongan` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `jenis_tiket` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesawat`
--

INSERT INTO `pesawat` (`no_reservasi`, `nama_pemesan`, `tujuan`, `biaya_tujuan`, `biaya_pokok`, `potongan`, `total`, `jenis_tiket`) VALUES
('12345', 'SunDi3yansyah', 'Yogyakarta', 350000, 100000, 262500, 187500, 'Promosi'),
('123', 'ikram', 'Yogyakarta', 350000, 100000, 0, 450000, 'reguler'),
('1234', 'ikram', 'Singapura', 1000000, 250000, 750000, 500000, 'promosi'),
('12', 'ikram', 'Yogyakarta', 350000, 100000, 0, 450000, 'reguler');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
