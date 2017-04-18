
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 14, 2016 at 02:58 AM
-- Server version: 10.0.20-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u804013128_qlsv`
--

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE IF NOT EXISTS `nhanvien` (
  `manhanvien` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hovaten` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `chucvu` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nhiemvu` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`manhanvien`, `hovaten`, `ngaysinh`, `gioitinh`, `diachi`, `chucvu`, `sodienthoai`, `nhiemvu`) VALUES
('1', 'TS.Đặng Hoài Phương', '1960-11-20', 'Nam', '36 Nguyễn Lương Bằng', 'Phó trưởng phòng CTSV', '0969210100', 'Quản lý hoạt động chung của Ký túc xá'),
('2', 'Trần Nãi', '1970-11-20', 'Nam', 'Liên Chiểu', 'Tổ phó', '0914926155', 'Phụ trách văn phòng Ban quản lý Ký túc xá'),
('3', 'Phạm Viết Thương', '1972-11-20', 'Nam', 'Liên Chiểu', 'Tổ phó', '0905091891', 'Phụ trách chung về an ninh trật tự Ký túc xá, quản lý nhà 3 (Ký túc xá của sinh viên nước ngoài)'),
('4', 'Trần Ngọc Ba', '1976-11-20', 'Nam', 'Liên Chiểu', 'Nhân viên', '01268559977', 'Phụ trách quản lý nhà A1'),
('5', 'Nguyễn Vinh', '1972-11-20', 'Nam', 'Liên Chiểu', 'Nhân viên', '0914563590', 'Phụ trách quản lý nhà A2'),
('6', 'Nguyễn Anh Sơn', '1985-11-20', 'Nam', 'Liên Chiểu', 'Nhân viên', '0914300941', 'Phụ trách quản lý nhà B1'),
('7', 'Hoàng Thu', '1976-11-20', 'Nam', 'Liên Chiểu', 'Nhân viên', '01293581379', 'Phụ trách sửa chữa trong Ký túc xá'),
('8', 'Nguyễn Việt Hùng', '1985-11-20', 'Nam', 'Liên Chiểu', 'Nhân viên', '0975155859', 'Quản lý an ninh trật tự'),
('9', 'Nguyễn Văn Chính', '1980-11-20', 'Nam', 'Liên Chiểu', 'Nhân viên', '0905939269', 'Phụ trách quản lý nhà B2'),
('10', 'Lê Thị Minh Hiền', '1985-11-20', 'Nữ', 'Liên Chiểu', 'Chuyên viên', '01249367577', 'Phụ trách vệ sinh nhà A'),
('11', 'Lê Thị Hoa', '1987-11-20', 'Nữ', 'Liên Chiểu', 'Nhân viên', '0917770841', 'Phụ trách vệ sinh nhà A'),
('12', 'Vũ Thị Quyên', '1989-01-20', 'Nữ', 'Liên Chiểu', 'Nhân viên', '0914692951', 'Phụ trách vệ sinh nhà B'),
('13', 'Hoàng Thị Duyên', '1986-11-20', 'Nữ', 'Liên Chiểu', 'Nhân viên', '0986656121', 'Phụ trách vệ sinh nhà B'),
('14', 'Phùng Đình Khai', '1990-01-20', 'Nam', 'Liên Chiểu', 'Nhân viên', '0969210101', 'Phụ trách vệ sinh Ký túc xá'),
('15', 'Nguyễn Thị Thanh Hồng', '1983-11-20', 'Nữ', 'Liên Chiểu', 'Nhân viên', '0965071247', 'Phụ trách vệ sinh Ký túc xá');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
