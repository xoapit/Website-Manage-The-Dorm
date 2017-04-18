-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2016 at 05:19 AM
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
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `mssv` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hovaten` varchar(35) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `khoa` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lop` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dantoc` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cmnd` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noisinh` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quoctich` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`mssv`, `hovaten`, `ngaysinh`, `gioitinh`, `sdt`, `khoa`, `password`, `lop`, `dantoc`, `email`, `cmnd`, `noisinh`, `quoctich`) VALUES
('102130000', 'Trần Văn Bằng', '1995-11-08', 'Nam', '0905123450', 'Khoa CNTT', '102130000', '13T1', 'Kinh', 'emaillagi@gmail.com', '174905123', 'Đà Nẵng', 'Việt Nam'),
('102130001', 'Nguyễn Xuân Thăng', '1995-11-17', 'Nam', '0122456456', 'Khoa Điện tử viễn thông', '102130001', '13DT1', 'Thái', 'toilaaitrencuocdoinay@gmail.com', '174905123', 'Thanh Hóa', 'Việt Nam'),
('102130002', 'Trần Thị Hoa', '1994-11-16', 'Nữ', '0905123452', 'Khoa Xây Dựng ', '102130002', '12X1', 'Mường', 'emaillagi@gmail.com', '174905123', 'Đà Nẵng', 'Việt Nam'),
('102130003', 'Nguyễn Thị Huyền Trang', '1996-11-30', 'Nữ', '0905123453', 'Khoa CNTT', '102130003', '12T1', 'Kinh', 'emaillagi@gmail.com', '174905123', 'Huế', 'Viết Nam'),
('102130004', 'Nguyễn Thanh Tâm', '1998-08-08', 'Nam', '0905456412', 'Khoa Kiến Trúc', '102130004', '13KT2', 'Kinh', 'emaillagi@gmail.com', '174905123', 'Quảng Trị', 'Việt Nam'),
('102130005', 'Phan Minh Trang', '1996-11-01', 'Nữ', '0905123458', 'Khoa Cơ khí chế tạo máy', '102130005', '13CB1', 'Kinh', 'emaillagi@gmail.com', '174905123', 'Huế', 'Viết Nam'),
('102130006', 'Đỗ Tâm Anh', '1998-11-01', 'Nữ', '0905123459', 'Khoa Xây dựng', '102130006', '12X1', 'Thái', 'emaillagi@gmail.com', '174905123', 'Thanh Hóa', 'Đà Nẵng'),
('102130007', 'Tạ Thị Lạng', '1995-09-05', 'Nữ', '0905456825', 'Khoa CNTT', '102130007', '13T2', 'Kinh', 'emaillagi@gmail.com', '174905123', 'Quảng Trị', 'Viết Nam'),
('102130008', 'Chu Quốc Anh', '2016-06-05', 'Nam', '0905621354', 'Khoa CNTT', '102130008', '13T4', 'Kinh', 'emaillagi@gmail.com', '174905123', 'Đà Nẵng', 'Viết Nam'),
('102130009', 'Hoàng Duy Đạt', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130009', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850123', 'Huế', 'Việt Nam'),
('102130010', 'Bùi Quốc Toàn', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130010', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850124', 'Huế', 'Việt Nam'),
('102130011', 'Trần Văn Tin', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130011', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850125', 'Huế', 'Việt Nam'),
('102130012', 'Hoàng Ngọc Quý', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130012', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850126', 'Huế', 'Việt Nam'),
('102130013', 'Bùi Duy Anh', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130013', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850127', 'Huế', 'Việt Nam'),
('102130014', 'Trần Quốc Thiện', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130014', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850128', 'Huế', 'Việt Nam'),
('102130015', 'Hoàng Văn Đạt', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130015', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850129', 'Huế', 'Việt Nam'),
('102130016', 'Bùi Ngọc Toàn', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130016', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850130', 'Huế', 'Việt Nam'),
('102130017', 'Trần Duy Tin', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130017', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850131', 'Huế', 'Việt Nam'),
('102130018', 'Hoàng Quốc Quý', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130018', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850132', 'Huế', 'Việt Nam'),
('102130019', 'Bùi Văn Anh', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130019', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850133', 'Huế', 'Việt Nam'),
('102130020', 'Trần Ngọc Thiện', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130020', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850134', 'Huế', 'Việt Nam'),
('102130021', 'Hoàng Duy Đạt', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130021', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850135', 'Huế', 'Việt Nam'),
('102130022', 'Bùi Quốc Toàn', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130022', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850136', 'Huế', 'Việt Nam'),
('102130023', 'Trần Văn Tin', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130023', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850137', 'Huế', 'Việt Nam'),
('102130024', 'Hoàng Ngọc Quý', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130024', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850138', 'Huế', 'Việt Nam'),
('102130025', 'Bùi Duy Anh', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130025', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850139', 'Huế', 'Việt Nam'),
('102130026', 'Trần Quốc Thiện', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130026', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850140', 'Huế', 'Việt Nam'),
('102130027', 'Hoàng Văn Đạt', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130027', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850141', 'Huế', 'Việt Nam'),
('102130028', 'Bùi Ngọc Toàn', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130028', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850142', 'Huế', 'Việt Nam'),
('102130029', 'Trần Duy Tin', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130029', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850143', 'Huế', 'Việt Nam'),
('102130030', 'Hoàng Quốc Quý', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130030', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850144', 'Huế', 'Việt Nam'),
('102130031', 'Bùi Văn Anh', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130031', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850145', 'Huế', 'Việt Nam'),
('102130032', 'Trần Ngọc Thiện', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130032', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850146', 'Huế', 'Việt Nam'),
('102130033', 'Hoàng Duy Đạt', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130033', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850147', 'Huế', 'Việt Nam'),
('102130034', 'Bùi Quốc Toàn', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130034', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850148', 'Huế', 'Việt Nam'),
('102130035', 'Trần Văn Tin', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130035', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850149', 'Huế', 'Việt Nam'),
('102130036', 'Hoàng Ngọc Quý', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130036', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850150', 'Huế', 'Việt Nam'),
('102130037', 'Bùi Duy Anh', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130037', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850151', 'Huế', 'Việt Nam'),
('102130038', 'Trần Quốc Thiện', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130038', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850152', 'Huế', 'Việt Nam'),
('102130039', 'Hoàng Văn Đạt', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130039', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850153', 'Huế', 'Việt Nam'),
('102130040', 'Lê Ngọc Quân', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130040', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850154', 'Huế', 'Việt Nam'),
('102130041', 'Hồ Duy Phong', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130041', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850155', 'Huế', 'Việt Nam'),
('102130042', 'Võ Quốc Tam', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130042', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850156', 'Huế', 'Việt Nam'),
('102130043', 'Lê Văn Danh', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130043', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850157', 'Huế', 'Việt Nam'),
('102130044', 'Hồ Ngọc Hào', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130044', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850158', 'Huế', 'Việt Nam'),
('102130045', 'Võ Duy Hiển', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130045', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850159', 'Huế', 'Việt Nam'),
('102130046', 'Lê Quốc Quân', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130046', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850160', 'Huế', 'Việt Nam'),
('102130047', 'Hồ Văn Phong', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130047', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850161', 'Huế', 'Việt Nam'),
('102130048', 'Võ Ngọc Tam', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130048', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850162', 'Huế', 'Việt Nam'),
('102130049', 'Lê Duy Danh', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130049', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850163', 'Huế', 'Việt Nam'),
('102130050', 'Hồ Quốc Hào', '1995-10-10', 'Nam', '0168101010', 'Công Nghệ Thông Tin', '102130050', '13T1', 'Kinh', 'Team13T1@gmail.com', '191850164', 'Huế', 'Việt Nam'),
('102130051', 'Võ Văn Hiển', '1995-08-15', 'Nam', '0168123123', 'Điện Tử Viễn Thông', '102130051', '13DT1', 'Kinh', 'Team13T1@gmail.com', '191850458', 'Hà Nội', 'Việt Nam'),
('102130052', 'Lê Ngọc Quân', '1995-08-15', 'Nam', '0168123123', 'Điện Tử Viễn Thông', '102130052', '13DT1', 'Kinh', 'Team13T1@gmail.com', '191850459', 'Hà Nội', 'Việt Nam'),
('102130053', 'Hồ Duy Phong', '1995-08-15', 'Nam', '0168123123', 'Điện Tử Viễn Thông', '102130053', '13DT1', 'Kinh', 'Team13T1@gmail.com', '191850460', 'Hà Nội', 'Việt Nam'),
('102130054', 'Võ Quốc Tam', '1995-08-15', 'Nam', '0168123123', 'Điện Tử Viễn Thông', '102130054', '13DT1', 'Kinh', 'Team13T1@gmail.com', '191850461', 'Hà Nội', 'Việt Nam'),
('102130055', 'Lê Văn Danh', '1995-08-15', 'Nam', '0168123123', 'Điện Tử Viễn Thông', '102130055', '13DT1', 'Kinh', 'Team13T1@gmail.com', '191850462', 'Hà Nội', 'Việt Nam'),
('102130056', 'Hồ Ngọc Hào', '1995-08-15', 'Nam', '0168123123', 'Điện Tử Viễn Thông', '102130056', '13DT1', 'Kinh', 'Team13T1@gmail.com', '191850463', 'Hà Nội', 'Việt Nam'),
('102130057', 'Võ Duy Hiển', '1995-08-15', 'Nam', '0168123123', 'Điện Tử Viễn Thông', '102130057', '13DT1', 'Kinh', 'Team13T1@gmail.com', '191850464', 'Hà Nội', 'Việt Nam'),
('102130058', 'Lê Quốc Quân', '1995-08-15', 'Nam', '0168123123', 'Điện Tử Viễn Thông', '102130058', '13DT1', 'Kinh', 'Team13T1@gmail.com', '191850465', 'Hà Nội', 'Việt Nam'),
('102130059', 'Hồ Văn Phong', '1995-08-15', 'Nam', '0168123123', 'Điện Tử Viễn Thông', '102130059', '13DT1', 'Kinh', 'Team13T1@gmail.com', '191850466', 'Hà Nội', 'Việt Nam'),
('102130060', 'Võ Ngọc Tam', '1995-08-15', 'Nam', '0168123123', 'Điện Tử Viễn Thông', '102130060', '13DT1', 'Kinh', 'Team13T1@gmail.com', '191850467', 'Hà Nội', 'Việt Nam'),
('102130061', 'Lê Duy Danh', '1995-08-15', 'Nam', '0168123123', 'Điện Tử Viễn Thông', '102130061', '13DT1', 'Kinh', 'Team13T1@gmail.com', '191850468', 'Hà Nội', 'Việt Nam'),
('102130062', 'Hồ Quốc Hào', '1995-08-15', 'Nam', '0168123123', 'Điện Tử Viễn Thông', '102130062', '13DT1', 'Kinh', 'Team13T1@gmail.com', '191850469', 'Hà Nội', 'Việt Nam'),
('102130063', 'Võ Văn Hiển', '1995-08-15', 'Nam', '0168123123', 'Điện Tử Viễn Thông', '102130063', '13DT1', 'Kinh', 'Team13T1@gmail.com', '191850470', 'Hà Nội', 'Việt Nam'),
('102130064', 'Lê Ngọc Quân', '1995-08-15', 'Nam', '0168123123', 'Điện Tử Viễn Thông', '102130064', '13DT1', 'Kinh', 'Team13T1@gmail.com', '191850471', 'Hà Nội', 'Việt Nam'),
('102130065', 'Hồ Duy Phong', '1995-08-15', 'Nam', '0168123123', 'Điện Tử Viễn Thông', '102130065', '13DT1', 'Kinh', 'Team13T1@gmail.com', '191850472', 'Hà Nội', 'Việt Nam'),
('102130066', 'Võ Quốc Tam', '1995-08-15', 'Nam', '0168123123', 'Điện Tử Viễn Thông', '102130066', '13DT1', 'Kinh', 'Team13T1@gmail.com', '191850473', 'Hà Nội', 'Việt Nam'),
('102130067', 'Lê Văn Danh', '1995-08-15', 'Nam', '0168123123', 'Điện Tử Viễn Thông', '102130067', '13DT1', 'Kinh', 'Team13T1@gmail.com', '191850474', 'Hà Nội', 'Việt Nam'),
('102130068', 'Hồ Ngọc Hào', '1995-08-15', 'Nam', '0168123123', 'Điện Tử Viễn Thông', '102130068', '13DT1', 'Kinh', 'Team13T1@gmail.com', '191850475', 'Hà Nội', 'Việt Nam'),
('102130069', 'Võ Duy Hiển', '1995-08-15', 'Nam', '0168123123', 'Điện Tử Viễn Thông', '102130069', '13DT1', 'Kinh', 'Team13T1@gmail.com', '191850476', 'Hà Nội', 'Việt Nam'),
('102130070', 'Lê Quốc Quân', '1995-08-15', 'Nam', '0168123123', 'Điện Tử Viễn Thông', '102130070', '13DT1', 'Kinh', 'Team13T1@gmail.com', '191850477', 'Hà Nội', 'Việt Nam'),
('admin', 'Administrator', '1995-01-01', '', '', '', 'admin', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`mssv`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
