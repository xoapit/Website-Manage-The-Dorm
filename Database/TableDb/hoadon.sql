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
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `sophong` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `khunha` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `dongiadien` int(9) NOT NULL,
  `chisodiendau` int(5) NOT NULL,
  `chisodiencuoi` int(5) NOT NULL,
  `chisonuocdau` int(5) NOT NULL,
  `chisonuoccuoi` int(5) NOT NULL,
  `thangghiso` date NOT NULL,
  `dongianuoc` int(50) NOT NULL,
  `manhanvien` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mahoadon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`sophong`, `khunha`, `dongiadien`, `chisodiendau`, `chisodiencuoi`, `chisonuocdau`, `chisonuoccuoi`, `thangghiso`, `dongianuoc`, `manhanvien`, `mahoadon`) VALUES
('102', 'B', 1500, 1876, 1963, 124, 201, '2016-10-01', 5000, 'AdminB', 1),
('104', 'B', 1500, 1782, 1904, 100, 263, '2016-10-01', 5000, 'AdminB', 2),
('103', 'A', 1500, 1109, 1205, 209, 308, '2016-10-01', 5000, 'AdminA', 3),
('102', 'A', 1500, 2400, 2400, 2400, 2400, '2016-12-02', 5000, 'AdminA', 4),
('101', 'A', 1500, 1309, 1497, 220, 342, '2016-10-01', 5000, 'AdminA', 5),
('204', 'A', 1500, 902, 1198, 150, 287, '2016-10-01', 5000, 'AdminA', 6),
('201', 'B', 1500, 898, 1190, 120, 249, '2016-10-01', 5000, 'AdminB', 7),
('104', 'A', 1500, 1005, 1102, 170, 300, '2016-10-01', 5000, 'AdminA', 8),
('201', 'A', 1500, 1105, 1205, 120, 230, '2016-10-01', 5000, 'AdminA', 9),
('202', 'A', 1500, 987, 1099, 132, 234, '2016-10-01', 5000, 'AdminA', 10),
('203', 'A', 1500, 1234, 1302, 120, 280, '2016-10-01', 5000, 'AdminA', 11),
('101', 'B', 1500, 1215, 1392, 210, 340, '2016-10-01', 5000, 'AdminB', 12),
('103', 'B', 1500, 1765, 1822, 121, 250, '2016-10-01', 5000, 'AdminB', 13),
('202', 'B', 1500, 1455, 1672, 130, 280, '2016-10-01', 5000, 'AdminB', 14),
('203', 'B', 1500, 1675, 1892, 123, 298, '2016-10-01', 5000, 'AdminB', 15),
('204', 'B', 1500, 1455, 1562, 131, 230, '2016-10-01', 5000, 'AdminB', 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahoadon`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
