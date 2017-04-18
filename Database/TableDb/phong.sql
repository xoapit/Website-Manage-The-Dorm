-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2016 at 05:20 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlsv`
--

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `khunha` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `sophong` varchar(3) COLLATE utf8_vietnamese_ci NOT NULL,
  `soluongsinhvien` int(11) NOT NULL,
  `tinhtrangphong` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`khunha`, `sophong`, `soluongsinhvien`, `tinhtrangphong`, `gia`) VALUES
('B', '202', 1, 'Tốt', 100000),
('B', '203', 0, 'Tốt', 100000),
('B', '204', 0, 'Tốt', 100000),
('B', '101', 1, 'Tốt', 100000),
('B', '102', 0, 'Tốt', 100000),
('B', '103', 0, 'Tốt', 100000),
('B', '104', 0, 'Tốt', 100000),
('A', '201', 0, 'Tốt', 120000),
('A', '202', 0, 'Tốt', 120000),
('A', '203', 1, 'Tốt', 120000),
('A', '204', 2, 'Tốt', 120000),
('A', '101', 4, 'Tốt', 120000),
('A', '102', 3, 'Tốt', 120000),
('A', '103', 3, 'Tốt', 120000),
('A', '104', 1, 'Tốt', 120000),
('B', '201', 0, 'Tốt', 120000),
('A', '301', 0, 'Tốt', 140000),
('A', '302', 2, 'Tốt', 140000),
('A', '303', 2, 'Tốt', 140000),
('A', '304', 2, 'Tốt', 140000),
('B', '302', 0, 'Tốt', 140000),
('B', '303', 0, 'Tốt', 140000),
('B', '304', 0, 'Tốt', 140000),
('B', '301', 0, 'Tốt', 140000),
('A', '105', 0, 'Tốt', 100000),
('A', '106', 2, 'Tốt', 100000),
('A', '107', 0, 'Tốt', 100000),
('A', '108', 3, 'Tốt', 100000),
('A', '109', 1, 'Tốt', 100000),
('A', '110', 0, 'Tốt', 100000),
('A', '205', 0, 'Tốt', 100000),
('A', '206', 2, 'Tốt', 100000),
('A', '207', 2, 'Tốt', 100000),
('A', '208', 2, 'Tốt', 100000),
('A', '209', 0, 'Tốt', 100000),
('A', '210', 2, 'Tốt', 100000),
('A', '305', 2, 'Tốt', 100000),
('A', '306', 2, 'Tốt', 100000),
('A', '307', 0, 'Tốt', 100000),
('A', '308', 0, 'Tốt', 100000),
('A', '309', 0, 'Tốt', 100000),
('A', '310', 0, 'Tốt', 100000),
('B', '305', 0, 'Tốt', 100000),
('B', '306', 2, 'Tốt', 100000),
('B', '307', 0, 'Tốt', 100000),
('B', '308', 2, 'Tốt', 100000),
('B', '309', 0, 'Tốt', 100000),
('B', '310', 2, 'Tốt', 100000),
('B', '205', 0, 'Tốt', 100000),
('B', '206', 0, 'Tốt', 100000),
('B', '207', 0, 'Tốt', 100000),
('B', '208', 0, 'Tốt', 100000),
('B', '209', 0, 'Tốt', 100000),
('B', '210', 0, 'Tốt', 100000),
('B', '105', 0, 'Tốt', 100000),
('B', '106', 0, 'Tốt', 100000),
('B', '107', 0, 'Tốt', 100000),
('B', '108', 0, 'Tốt', 100000),
('B', '109', 0, 'Tốt', 100000),
('B', '110', 0, 'Tốt', 100000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
