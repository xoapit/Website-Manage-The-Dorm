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
-- Table structure for table `hopdong`
--

CREATE TABLE `hopdong` (
  `mahopdong` int(5) NOT NULL,
  `mssv` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `manhanvien` varchar(5) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `khunha` varchar(5) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `sophong` varchar(4) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `ngaylap` date DEFAULT NULL,
  `ngaybatdau` date DEFAULT NULL,
  `ngayketthuc` date DEFAULT NULL,
  `thanhtoan` varchar(20) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `hopdong`
--

INSERT INTO `hopdong` (`mahopdong`, `mssv`, `manhanvien`, `khunha`, `sophong`, `ngaylap`, `ngaybatdau`, `ngayketthuc`, `thanhtoan`) VALUES
(26, '102130001', NULL, 'B', '202', '2016-11-28', '2016-11-28', '2016-11-28', 'Đã Thanh Toán'),
(28, '102130002', NULL, 'B', '101', '2016-11-28', '2016-11-28', '2016-11-28', 'Chưa Thanh Toán'),
(29, '102130020', NULL, 'A', '101', '2016-12-01', '2016-12-01', '2017-03-01', 'ÄÃ£ Thanh ToÃ¡n'),
(30, '102130021', NULL, 'A', '101', '2016-12-01', '2016-12-01', '2017-03-01', 'ÄÃ£ Thanh ToÃ¡n'),
(31, '102130022', NULL, 'A', '101', '2016-12-01', '2016-12-01', '2017-03-01', 'ÄÃ£ Thanh ToÃ¡n'),
(32, '102130023', NULL, 'A', '101', '2016-12-01', '2016-12-01', '2017-03-01', 'ÄÃ£ Thanh ToÃ¡n'),
(33, '102130024', NULL, 'A', '102', '2016-12-01', '2016-12-01', '2017-03-01', 'ÄÃ£ Thanh ToÃ¡n'),
(34, '102130025', NULL, 'A', '102', '2016-12-01', '2016-12-01', '2017-03-01', 'ÄÃ£ Thanh ToÃ¡n'),
(35, '102130026', NULL, 'A', '102', '2016-12-01', '2016-12-01', '2017-03-01', 'ÄÃ£ Thanh ToÃ¡n'),
(36, '102130027', NULL, 'A', '103', '2016-12-01', '2016-12-01', '2017-03-01', 'ÄÃ£ Thanh ToÃ¡n'),
(37, '102130028', NULL, 'A', '103', '2016-12-01', '2016-12-01', '2017-03-01', 'ÄÃ£ Thanh ToÃ¡n'),
(38, '102130029', NULL, 'A', '103', '2016-12-01', '2016-12-01', '2017-03-01', 'ÄÃ£ Thanh ToÃ¡n'),
(39, '102130030', NULL, 'A', '104', '2016-12-01', '2016-12-01', '2017-03-01', 'ÄÃ£ Thanh ToÃ¡n'),
(40, '102130031', NULL, 'A', '106', '2016-12-01', '2016-12-01', '2017-03-01', 'ÄÃ£ Thanh ToÃ¡n'),
(41, '102130032', NULL, 'A', '106', '2016-12-01', '2016-12-01', '2017-03-01', 'ÄÃ£ Thanh ToÃ¡n'),
(42, '102130033', NULL, 'A', '108', '2016-12-01', '2016-12-01', '2017-03-01', 'ÄÃ£ Thanh ToÃ¡n'),
(43, '102130034', NULL, 'A', '108', '2016-12-01', '2016-12-01', '2017-03-01', 'ÄÃ£ Thanh ToÃ¡n'),
(44, '102130035', NULL, 'A', '108', '2016-12-01', '2016-12-01', '2017-03-01', 'ÄÃ£ Thanh ToÃ¡n'),
(45, '102130036', NULL, 'A', '109', '2016-12-01', '2016-12-01', '2017-03-01', 'ÄÃ£ Thanh ToÃ¡n'),
(46, '102130037', NULL, 'A', '203', '2016-12-01', '2016-12-01', '2017-03-01', 'ÄÃ£ Thanh ToÃ¡n'),
(47, '102130038', NULL, 'A', '204', '2016-12-01', '2016-12-01', '2017-03-01', 'Đã Thanh Toán'),
(48, '102130039', NULL, 'A', '204', '2016-12-01', '2016-12-01', '2017-03-01', 'Đã Thanh Toán'),
(49, '102130041', NULL, 'A', '206', '2016-12-01', '2016-12-01', '2017-03-01', 'Đã Thanh Toán'),
(50, '102130042', NULL, 'A', '206', '2016-12-01', '2016-12-01', '2017-03-01', 'Đã Thanh Toán'),
(51, '102130043', NULL, 'A', '207', '2016-12-01', '2016-12-01', '2017-03-01', 'Đã Thanh Toán'),
(52, '102130044', NULL, 'A', '207', '2016-12-01', '2016-12-01', '2017-03-01', 'Đã Thanh Toán'),
(53, '102130045', NULL, 'A', '208', '2016-12-01', '2016-12-01', '2017-03-01', 'Đã Thanh Toán'),
(54, '102130046', NULL, 'A', '208', '2016-12-01', '2016-12-01', '2017-03-01', 'Đã Thanh Toán'),
(55, '102130047', NULL, 'A', '210', '2016-12-01', '2016-12-01', '2017-03-01', 'Đã Thanh Toán'),
(56, '102130048', NULL, 'A', '210', '2016-12-01', '2016-12-01', '2017-03-01', 'Đã Thanh Toán'),
(57, '102130049', NULL, 'A', '302', '2016-12-01', '2016-12-01', '2017-03-01', 'Đã Thanh Toán'),
(58, '102130050', NULL, 'A', '302', '2016-12-01', '2016-12-01', '2017-03-01', 'Đã Thanh Toán'),
(59, '102130051', NULL, 'A', '303', '2016-12-01', '2016-12-01', '2017-03-01', 'Đã Thanh Toán'),
(60, '102130052', NULL, 'A', '303', '2016-12-01', '2016-12-01', '2017-03-01', 'Đã Thanh Toán'),
(61, '102130053', NULL, 'A', '304', '2016-12-01', '2016-12-01', '2017-03-01', 'Đã Thanh Toán'),
(62, '102130054', NULL, 'A', '304', '2016-12-01', '2016-12-01', '2017-03-01', 'Đã Thanh Toán'),
(63, '102130055', NULL, 'A', '305', '2016-12-01', '2016-12-01', '2017-03-01', 'Đã Thanh Toán'),
(64, '102130056', NULL, 'A', '305', '2016-12-01', '2016-12-01', '2017-03-01', 'Đã Thanh Toán'),
(65, '102130057', NULL, 'A', '306', '2016-12-01', '2016-12-01', '2017-03-01', 'Đã Thanh Toán'),
(66, '102130058', NULL, 'A', '306', '2016-12-01', '2016-12-01', '2017-03-01', 'Đã Thanh Toán'),
(67, '102130059', NULL, 'B', '306', '2016-12-01', '2016-12-01', '2017-03-01', 'Đã Thanh Toán'),
(68, '102130060', NULL, 'B', '306', '2016-12-01', '2016-12-01', '2017-03-01', 'Đã Thanh Toán'),
(69, '102130061', NULL, 'B', '308', '2016-12-01', '2016-12-01', '2017-03-01', 'Đã Thanh Toán'),
(70, '102130062', NULL, 'B', '308', '2016-12-01', '2016-12-01', '2017-03-01', 'Đã Thanh Toán'),
(71, '102130063', NULL, 'B', '310', '2016-12-01', '2016-12-01', '2017-03-01', 'Đã Thanh Toán'),
(72, '102130064', NULL, 'B', '310', '2016-12-01', '2016-12-01', '2017-03-01', 'Đã Thanh Toán');

--
-- Triggers `hopdong`
--
DELIMITER $$
CREATE TRIGGER `tinhslsv` AFTER INSERT ON `hopdong` FOR EACH ROW update phong set soluongsinhvien=(soluongsinhvien+1)
where khunha=NEW.khunha and sophong=NEW.sophong
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `xoahopdong` AFTER DELETE ON `hopdong` FOR EACH ROW update phong set soluongsinhvien=(soluongsinhvien-1)
where khunha=OLD.khunha and sophong=OLD.sophong
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD PRIMARY KEY (`mahopdong`),
  ADD UNIQUE KEY `    manhanvien` (`manhanvien`),
  ADD UNIQUE KEY `    manhanvien_2` (`manhanvien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hopdong`
--
ALTER TABLE `hopdong`
  MODIFY `mahopdong` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
