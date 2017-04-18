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
-- Table structure for table `tin`
--

CREATE TABLE `tin` (
  `idtheloai` int(11) NOT NULL,
  `theloai` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `idtin` int(11) NOT NULL,
  `image` varchar(500) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `tieude` varchar(400) COLLATE utf8_vietnamese_ci NOT NULL,
  `noidung` mediumtext COLLATE utf8_vietnamese_ci NOT NULL,
  `anhien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tin`
--

INSERT INTO `tin` (`idtheloai`, `theloai`, `idtin`, `image`, `tieude`, `noidung`, `anhien`) VALUES
(1, 'Giới Thiệu', 1, '', 'Giới Thiệu Về Ký Túc Xá', '<p><strong>&emsp;&emsp;Cơ sở vật chất k&yacute; t&uacute;c x&aacute; </strong></p>\r\n\r\n<p>B&ecirc;n cạnh những c&ocirc;ng t&aacute;c sinh vi&ecirc;n như học tập, nghi&ecirc;n cứu khoa học, Trường ĐHBK H&agrave; Nội đặc biệt quan t&acirc;m đến đời sống sinh vi&ecirc;n n&oacute;i chung trong đ&oacute; c&oacute; sinh vi&ecirc;n nội tr&uacute;. K&yacute; t&uacute;c x&aacute; sinh vi&ecirc;n B&aacute;ch Khoa hiện nay l&agrave; một trong những khu k&yacute; t&uacute;c x&aacute; được đầu tư đồng bộ v&agrave; hiện đại. K&yacute; t&uacute;c x&aacute; bao gồm 10 d&atilde;y nh&agrave;, trong đ&oacute; c&oacute; 8 d&atilde;y nh&agrave; 4-5 tầng, 2 d&atilde;y nh&agrave; 1 tầng với tổng cộng 435 ph&ograve;ng ở bố tr&iacute; 8-12 người mỗi ph&ograve;ng, c&oacute; thể đ&oacute;n nhận 4200 sinh vi&ecirc;n, trong đ&oacute; c&oacute; c&aacute;c sinh vi&ecirc;n thuộc diện ch&iacute;nh s&aacute;ch v&agrave; sinh vi&ecirc;n c&oacute; ho&agrave;n cảnh kh&oacute; khăn v&agrave;o ở nội tr&uacute;. Năm năm trở lại đ&acirc;y, được sự đồng &yacute; của Ban Gi&aacute;m hiệu Nh&agrave; trường, Ban quản l&yacute; K&yacute; t&uacute;c x&aacute; hợp đồng với lực lượng bảo vệ v&agrave; c&ocirc;ng ty cung cấp dịch vụ vệ sinh chuy&ecirc;n nghiệp g&oacute;p phần duy tr&igrave; K&yacute; t&uacute;c x&aacute; v&agrave;o nề nếp an ninh ch&iacute;nh trị v&agrave; trật tự an to&agrave;n x&atilde; hội lu&ocirc;n được bảo đảm, vệ sinh khu&ocirc;n vi&ecirc;n, vệ sinh trong ph&ograve;ng ở tạo ra m&ocirc;i trường sống an to&agrave;n, l&agrave;nh mạnh cho sinh vi&ecirc;n nội tr&uacute;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="" src="/ckfinder/image/images/choo1.jpg" style="height:680px; width:1024px" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>&emsp;&emsp;&emsp;&emsp; Mỗi một ph&ograve;ng như vậy c&oacute; thể phục vụ 6 th&iacute; sinh v&agrave; người th&acirc;n. Ph&ograve;ng c&oacute; trang bị b&agrave;n học thuận tiện. </em></p>\r\n\r\n<p><img alt="" src="/ckfinder/image/images/choo1.jpg" style="height:680px; width:1024px" /></p>\r\n\r\n<p><em>&emsp; Sinh vi&ecirc;n v&agrave; người nh&agrave; đến nghỉ tại k&yacute; t&uacute;c x&aacute; B&aacute;ch Khoa sẽ ở ph&ograve;ng rộng 43 m2, c&oacute; 3 giường tầng, 2 nh&agrave; vệ sinh kh&eacute;p k&iacute;n. </em></p>\r\n\r\n<p>Đến nay, ban quản l&yacute; k&yacute; t&uacute;c x&aacute; cho biết đ&atilde; nhận được khoảng hơn 100 đơn đăng k&yacute; xin ở trọ miễn ph&iacute; của c&aacute;c th&iacute; sinh. Trong ng&agrave;y 29/6, đ&atilde; c&oacute; một th&iacute; sinh dọn đến ở. Nhiều th&iacute; sinh kh&aacute;c dự kiến sẽ c&oacute; mặt từ ngay mai sau khi l&agrave;m thủ tục thi.</p>\r\n', 1),
(2, 'Thông Báo', 2, '', 'Thông Tin Đăng Kí Phòng', ' <p> \n								<p><b>\n								<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRUNG TÂM QUẢN LÍ KÍ TÚC XÁ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</h5></b></p> </p> \n                                <p> <b>  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Số:955/TB/CĐBK-TH &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Độc Lập - Tự Do - Hạnh Phúc</b> </p> \n                                \n                                <p style ="text-align:center"><i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hà Nội, ngày 20 tháng 10 năm 2016 </i> </p> \n                                <br>\n                                \n                                \n                                \n                                \n<b><h4><strong><p align="center"> &nbsp;THÔNG BÁO </p></strong></h4></b>\n<p align="center"> <b> Về việc điều chỉnh đền bù giá thiết bị vòi sen năm 2016 </b> </p> \n                    \n                    <p>&emsp;&emsp;&emsp;&emsp;\n                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b><u>\n                   Kính gửi:\n                    </u></b> <b>Toàn thể HSSV đang lưu trú tại kí túc xá </b> </p>\n                    <br>\n                    \n                    <p> &emsp;&emsp;&emsp;- Căn cứ Quyết định số 01/QĐ/2016-KTX ngày 01/01/2016 về việc ban hành bảng giá bồi thường và sửa chữa tại KTX Hà Nội năm 2016\n					</p>\n                    <p>\n                    &emsp;&emsp;&emsp;- Căn cứ tình hình thực tế sử dụng thiết bị phòng tắm của sinh viên lưu trú tại KTX, nay Trung tâm quản lý KTX sinh viên Hà Nội điều chỉnh giá đền bù thiết bị vòi sen như sau :\n                    </p>\n                \n                    <p>\n                    <TABLE align = "center" border=2 cellspacing="0" cellpadding="4px">\n\n<TR>\n\n<TH> &emsp;&emsp;TT&emsp;&emsp; </TH>\n\n<TH> &emsp;&emsp;Tên thiết bị&emsp;&emsp; </TH>\n\n<TH > &emsp;&emsp;Giá cũ (VNĐ)&emsp;&emsp; </TH>\n<TH > &emsp;&emsp;Giá mới (VNĐ)&emsp;&emsp;</TH>\n<TH > &emsp;&emsp;&emsp;Ghi chú </TH>\n</TR>\n\n<TR>\n\n<TD align = "center" valign = "top"> 01 </TD>\n\n<TD align = "center" valign = "top"> Vòi sen phòng tắm </TD>\n\n<TD align = "center" valign = "top"> 100 </TD>\n<TD align = "center" valign = "top"> 70 </TD>\n<TD> Vòi sen mới là loại cố định </TD>\n\n</TR></table>\n                    \n                    \n                    \n                    \n                    \n                    \n                    \n</p>\n<p>\nThời gian áp dụng : Kể từ ngày <b>25/10/2016</b>\n</p>\n<p> Các hạng mục khác vẫn áp dụng đúng với mức giá hiện hành</p>\n<p>Nhận được thông báo này, đề nghị các sinh viên, đơn vị có liên nghiêm túc thực hiện đúng theo nhu cầu.\n    </p>\n    <p>Trân trọng thông báo. </p>\n                  <br>\n                    <p style ="text-align:center"><em>&emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;HIỆU TRƯỞNG         </em></p>\n                     <p style ="text-align:center"><em>\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n                     Đã ký </em></p>', 1),
(3, 'Tin Tức', 3, '', 'Tưng bừng hội trại "Âm vang bách khoa "', '<p><strong>Residents of Sri Lanka&#39;s second-largest city enjoy a plentiful supply of safe drinking water</strong></p>\r\n\r\n<p>The Greater Kandy region of Sri Lanka was facing a dilemma. Its water board needed to improve services to its growing population, which sometimes had to go without running water for several days a week or travel to remote wells. See how Hitachi Plant Technologies provided the equipment and training to keep Kandy City&#39;s residents from getting thirsty - all without exceeding the water board&#39;s budget.</p>\r\n\r\n<p><!--/ColumnSet--><!--/Section--></p>\r\n\r\n<p>Customer: National Water Supply and Drainage Board (NWSDB)<br />\r\nIndustries: Water Supply<br />\r\nRegion: Sri Lanka<br />\r\nRelease Date: Mar. 2013<br />\r\nProducts &amp; Services: Water Solution<br />\r\nSolutions By: Hitachi Plant Technologies (Sri Lanka Branch Office)</p>\r\n', 1),
(2, 'Thông Báo', 4, '', 'KTX Kêu gọi quyên góp ủng hộ người dân miền trung lũ lụt', ' <p>&emsp;&emsp;&emsp;\n                    Căn cứ Điều 73 Bộ luật Lao động sửa đổi, bổ sung về việc qui định người lao động hàng năm được nghỉ làm việc, hưởng nguyên lương trong các ngày lễ.\nBan Giám hiệu Trường Cao đẳng Bách Khoa Đà Nẵng thông báo thời gian nghỉ Lễ Quốc khánh năm 2016 đối với cán bộ, giảng viên, nhân viên và học sinh, sinh viên  như sau:\n                    </p>\n                    <p>1. Toàn thể CBGV-NV và HSSV được nghỉ từ ngày 02/9/2016 đến hết ngày 04/9/2016 (nghỉ 03 ngày liên tục).\nCBNV làm việc hành chính đi làm bù vào chiều Thứ Bảy (ngày 10/9/2016).\n					</p>\n                    <p>\n                    2. Giao trách nhiệm cho Tổ Bảo vệ thường trực đảm bảo an ninh trật tự trong những ngày nghỉ lễ.\n                    </p>\n                    <p>\n3. Trưởng Phòng Đào tạo – Công tác HSSV phối hợp với các Khoa bố trí thời khóa biểu dạy bù, học bù theo thời gian trên.</p>\n<p>\n4. Đề nghị trưởng các Khoa, Phòng, đơn vị nhắc nhở CBGV-NV kiểm tra, tắt điện nước, điều hòa, máy tính trong phòng làm việc, phòng thực hành và khóa cửa cẩn thận trước khi nghỉ.</p>\n<p>Nhận được thông báo này, đề nghị lãnh đạo các Phòng, Khoa, đơn vị nghiêm túc triển khai thực hiện.\n    </p>\n    <p>Trân trọng thông báo. </p>\n                  <br>\n                    <p style ="text-align:center"><em>&emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;HIỆU TRƯỞNG         </em></p>\n                     <p style ="text-align:center"><em>\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n                     Đã ký </em></p>', 1),
(2, 'Thông Báo', 5, '', 'Thông báo V/v sử dụng xe đạp điện trong KTX', '<p>&emsp;&emsp;&emsp;&emsp;\n                    Hiện nay trung tâm có lưu giữ một số xe không lưu hành. Vậy KTX thông báo cho chủ xe được biết để liên hệ KTX làm thủ tục nhận lại xe, sau 30 ngày kể từ ngày thông báo, nếu chủ xe không đến nhận, KTX sẽ thanh lý theo quy định.\n                     </p>\n                    <br>\n                    <p align="center"> <b> DANH SÁCH XE ĐẠP THANH LÝ THÁNG 9/2016 </b> </p> \n                    <p align="center"> <i> ( Kèm theo thông báo số 703/TB/2016-KTX ngày 1/10/2106 v/v xe đạp không lưu hành ) </i> </p>\n                    \n                    \n                    <p>\n                    <TABLE align = "center" border=2 cellspacing="0" cellpadding="4px">\n\n<TR>\n\n<TH> &emsp;&emsp;TT&emsp;&emsp; </TH>\n\n<TH> &emsp;&emsp;Họ Và Tên&emsp;&emsp; </TH>\n\n<TH > &emsp;&emsp;Phòng&emsp;&emsp; </TH>\n<TH > &emsp;&emsp;STT &emsp;&emsp;</TH>\n<TH > &emsp;&emsp;&emsp;Số thẻ từ&emsp;&emsp;&emsp; </TH>\n<TH > &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Ghi chú &emsp;&emsp;&emsp;</TH>\n</TR>\n\n<TR>\n<TD align = "center" valign = "top"> 01 </TD>\n<TD align = "center" valign = "top"> Nguyễn Quốc Anh </TD>\n<TD align = "center" valign = "top"> C69 </TD>\n<TD align = "center" valign = "top"> 69 </TD>\n<TD align = "center" valign = "top" > 6969 </TD>\n<TD align = "center" valign = "top" >&emsp; Mini hồng phấn hủy 13/05/2016&emsp; </TD>\n</TR>\\\n\n<TR>\n<TD align = "center" valign = "top"> 02</TD>\n<TD align = "center" valign = "top"> Hồ Tá Quý </TD>\n<TD align = "center" valign = "top"> C68 </TD>\n<TD align = "center" valign = "top"> 68 </TD>\n<TD align = "center" valign = "top" > 6868 </TD>\n<TD align = "center" valign = "top" >&emsp; Tay ngang đen &emsp; </TD>\n</TR>\n\n<TR>\n<TD align = "center" valign = "top"> 03</TD>\n<TD align = "center" valign = "top"> Võ Quốc Tin </TD>\n<TD align = "center" valign = "top"> C67 </TD>\n<TD align = "center" valign = "top"> 67 </TD>\n<TD align = "center" valign = "top" > 6767 </TD>\n<TD align = "center" valign = "top" >&emsp; Tay ngang sườn hai tiếp đen &emsp; </TD>\n</TR>\n\n<TR>\n<TD align = "center" valign = "top"> 04</TD>\n<TD align = "center" valign = "top"> Bùi Viết Toàn </TD>\n<TD align = "center" valign = "top"> C66 </TD>\n<TD align = "center" valign = "top"> 66 </TD>\n<TD align = "center" valign = "top" > 6666 </TD>\n<TD align = "center" valign = "top" >&emsp; Đỏ xám &emsp; </TD>\n</TR>\n</table>   \n                 \n                    \n                    \n                    \n                    \n                    \n</p>\n<p>\nThời gian áp dụng : Kể từ ngày <b>2/10/2016</b>\n</p>\n\n<p>Nhận được thông báo này, đề nghị các sinh viên, đơn vị có liên nghiêm túc thực hiện đúng theo nhu cầu.\n    </p>\n    <p>Trân trọng thông báo. </p>\n                  <br>\n                    <p style ="text-align:center"><em>&emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;HIỆU TRƯỞNG         </em></p>\n                     <p style ="text-align:center"><em>\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n                     Đã ký </em></p>', 1),
(2, 'Thông Báo', 6, '', 'Thông báo V/v nghỉ lễ Quốc Khánh 2/9', ' <p>&emsp;&emsp;&emsp;\n                    Căn cứ Điều 73 Bộ luật Lao động sửa đổi, bổ sung về việc qui định người lao động hàng năm được nghỉ làm việc, hưởng nguyên lương trong các ngày lễ.\nBan Giám hiệu Trường Cao đẳng Bách Khoa Đà Nẵng thông báo thời gian nghỉ Lễ Quốc khánh năm 2016 đối với cán bộ, giảng viên, nhân viên và học sinh, sinh viên  như sau:\n                    </p>\n                    <p>1. Toàn thể CBGV-NV và HSSV được nghỉ từ ngày 02/9/2016 đến hết ngày 04/9/2016 (nghỉ 03 ngày liên tục).\nCBNV làm việc hành chính đi làm bù vào chiều Thứ Bảy (ngày 10/9/2016).\n					</p>\n                    <p>\n                    2. Giao trách nhiệm cho Tổ Bảo vệ thường trực đảm bảo an ninh trật tự trong những ngày nghỉ lễ.\n                    </p>\n                    <p>\n3. Trưởng Phòng Đào tạo – Công tác HSSV phối hợp với các Khoa bố trí thời khóa biểu dạy bù, học bù theo thời gian trên.</p>\n<p>\n4. Đề nghị trưởng các Khoa, Phòng, đơn vị nhắc nhở CBGV-NV kiểm tra, tắt điện nước, điều hòa, máy tính trong phòng làm việc, phòng thực hành và khóa cửa cẩn thận trước khi nghỉ.</p>\n<p>Nhận được thông báo này, đề nghị lãnh đạo các Phòng, Khoa, đơn vị nghiêm túc triển khai thực hiện.\n    </p>\n    <p>Trân trọng thông báo. </p>\n                  <br>\n                    <p style ="text-align:center"><em>&emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;HIỆU TRƯỞNG         </em></p>\n                     <p style ="text-align:center"><em>\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n                     Đã ký </em></p>', 1),
(2, 'Thông Báo', 7, '', 'Thông báo V/v điều chỉnh giá đền bù thiết bị vòi sen', ' <p> \n								<p><b>\n								<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRUNG TÂM QUẢN LÍ KÍ TÚC XÁ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</h5></b></p> </p> \n                                <p> <b>  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Số:955/TB/CĐBK-TH &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Độc Lập - Tự Do - Hạnh Phúc</b> </p> \n                                \n                                <p style ="text-align:center"><i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hà Nội, ngày 20 tháng 10 năm 2016 </i> </p> \n                                <br>\n                                \n                                \n                                \n                                \n<b><h4><strong><p align="center"> &nbsp;THÔNG BÁO </p></strong></h4></b>\n<p align="center"> <b> Về việc điều chỉnh đền bù giá thiết bị vòi sen năm 2016 </b> </p> \n                    \n                    <p>&emsp;&emsp;&emsp;&emsp;\n                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b><u>\n                   Kính gửi:\n                    </u></b> <b>Toàn thể HSSV đang lưu trú tại kí túc xá </b> </p>\n                    <br>\n                    \n                    <p> &emsp;&emsp;&emsp;- Căn cứ Quyết định số 01/QĐ/2016-KTX ngày 01/01/2016 về việc ban hành bảng giá bồi thường và sửa chữa tại KTX Hà Nội năm 2016\n					</p>\n                    <p>\n                    &emsp;&emsp;&emsp;- Căn cứ tình hình thực tế sử dụng thiết bị phòng tắm của sinh viên lưu trú tại KTX, nay Trung tâm quản lý KTX sinh viên Hà Nội điều chỉnh giá đền bù thiết bị vòi sen như sau :\n                    </p>\n                \n                    <p>\n                    <TABLE align = "center" border=2 cellspacing="0" cellpadding="4px">\n\n<TR>\n\n<TH> &emsp;&emsp;TT&emsp;&emsp; </TH>\n\n<TH> &emsp;&emsp;Tên thiết bị&emsp;&emsp; </TH>\n\n<TH > &emsp;&emsp;Giá cũ (VNĐ)&emsp;&emsp; </TH>\n<TH > &emsp;&emsp;Giá mới (VNĐ)&emsp;&emsp;</TH>\n<TH > &emsp;&emsp;&emsp;Ghi chú </TH>\n</TR>\n\n<TR>\n\n<TD align = "center" valign = "top"> 01 </TD>\n\n<TD align = "center" valign = "top"> Vòi sen phòng tắm </TD>\n\n<TD align = "center" valign = "top"> 100 </TD>\n<TD align = "center" valign = "top"> 70 </TD>\n<TD> Vòi sen mới là loại cố định </TD>\n\n</TR></table>\n                    \n                    \n                    \n                    \n                    \n                    \n                    \n</p>\n<p>\nThời gian áp dụng : Kể từ ngày <b>25/10/2016</b>\n</p>\n<p> Các hạng mục khác vẫn áp dụng đúng với mức giá hiện hành</p>\n<p>Nhận được thông báo này, đề nghị các sinh viên, đơn vị có liên nghiêm túc thực hiện đúng theo nhu cầu.\n    </p>\n    <p>Trân trọng thông báo. </p>\n                  <br>\n                    <p style ="text-align:center"><em>&emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;HIỆU TRƯỞNG         </em></p>\n                     <p style ="text-align:center"><em>\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n                     Đã ký </em></p>', 1),
(2, 'Thông Báo', 8, '', 'Thông báo V/v Thanh lý xe không lưu hành tháng 9-2016', ' <p> \n								<p><b>\n								<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRUNG TÂM QUẢN LÍ KÍ TÚC XÁ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</h5></b></p> </p> \n                                <p> <b>  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Số:955/TB/CĐBK-TH &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Độc Lập - Tự Do - Hạnh Phúc</b> </p> \n                                \n                                <p style ="text-align:center"><i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hà Nội, ngày 20 tháng 10 năm 2016 </i> </p> \n                                <br>\n                                \n                                \n                                \n                                \n<b><h4><strong><p align="center"> &nbsp;THÔNG BÁO </p></strong></h4></b>\n<p align="center"> <b> Về việc điều chỉnh đền bù giá thiết bị vòi sen năm 2016 </b> </p> \n                    \n                    <p>&emsp;&emsp;&emsp;&emsp;\n                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b><u>\n                   Kính gửi:\n                    </u></b> <b>Toàn thể HSSV đang lưu trú tại kí túc xá </b> </p>\n                    <br>\n                    \n                    <p> &emsp;&emsp;&emsp;- Căn cứ Quyết định số 01/QĐ/2016-KTX ngày 01/01/2016 về việc ban hành bảng giá bồi thường và sửa chữa tại KTX Hà Nội năm 2016\n					</p>\n                    <p>\n                    &emsp;&emsp;&emsp;- Căn cứ tình hình thực tế sử dụng thiết bị phòng tắm của sinh viên lưu trú tại KTX, nay Trung tâm quản lý KTX sinh viên Hà Nội điều chỉnh giá đền bù thiết bị vòi sen như sau :\n                    </p>\n                \n                    <p>\n                    <TABLE align = "center" border=2 cellspacing="0" cellpadding="4px">\n\n<TR>\n\n<TH> &emsp;&emsp;TT&emsp;&emsp; </TH>\n\n<TH> &emsp;&emsp;Tên thiết bị&emsp;&emsp; </TH>\n\n<TH > &emsp;&emsp;Giá cũ (VNĐ)&emsp;&emsp; </TH>\n<TH > &emsp;&emsp;Giá mới (VNĐ)&emsp;&emsp;</TH>\n<TH > &emsp;&emsp;&emsp;Ghi chú </TH>\n</TR>\n\n<TR>\n\n<TD align = "center" valign = "top"> 01 </TD>\n\n<TD align = "center" valign = "top"> Vòi sen phòng tắm </TD>\n\n<TD align = "center" valign = "top"> 100 </TD>\n<TD align = "center" valign = "top"> 70 </TD>\n<TD> Vòi sen mới là loại cố định </TD>\n\n</TR></table>\n                    \n                    \n                    \n                    \n                    \n                    \n                    \n</p>\n<p>\nThời gian áp dụng : Kể từ ngày <b>25/10/2016</b>\n</p>\n<p> Các hạng mục khác vẫn áp dụng đúng với mức giá hiện hành</p>\n<p>Nhận được thông báo này, đề nghị các sinh viên, đơn vị có liên nghiêm túc thực hiện đúng theo nhu cầu.\n    </p>\n    <p>Trân trọng thông báo. </p>\n                  <br>\n                    <p style ="text-align:center"><em>&emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;HIỆU TRƯỞNG         </em></p>\n                     <p style ="text-align:center"><em>\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n                     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n                     Đã ký </em></p>', 1),
(2, 'Thông Báo', 9, '', 'Thông báo sinh viên nộp tiền BHYT-BHTN năm 2017', '', 1),
(2, 'Thông Báo', 10, '', ' Chương trình thẻ ưu đãi dành cho sinh viên', '', 1),
(2, 'Thông Báo', 11, '', 'Thông báo BHYT – BHTN HSSV NH 2016 – 2017', '', 1),
(3, 'Tin Tức', 12, '', 'Bách khoa nghìn giọt hy vọng lần thứ 20', '	<h4><strong>HIẾN MÁU CỨU NGƯỜI - MỘT NGHĨA CỬ CAO ĐẸP!</strong></h4> 				<p>Đã thành thông lệ, cứ mỗi tháng 11 hàng năm, trong trường Đại học Bách Khoa Hà Nội, nơi nơi rực lên một màu đỏ - màu đỏ của máu, màu đỏ của nhiệt huyết, màu của sức trẻ ra quân. Và năm nay là lần thứ 20, Đoàn Thanh niên Đại học Bách Khoa phối hợp với Viện Huyết học và Truyền máu Trung ương tổ chức chương trình hiến máu dành cho sinh viên nói chung và các sinh viên Bách Khoa nói riêng - "Bách Khoa nghìn giọt hy vọng".</p> 				<p>Chương trình năm nay sẽ diễn ra từ <strong>7h30 – 17h30 ngày 16,17/11/2016 tại Sân sau nhà C2 và Hội trường C2 Trường ĐH Bách Khoa Hà Nội.</strong></p> 				<p>Từ lúc chương trình hiến máu đầu tiên của Đại học Bách Khoa Hà Nội được tổ chức cho đến nay, hiến máu nhân đạo đã trở thành một phong trào quen thuộc đối với các sinh viên Bách Khoa. Sau thành công đầu tiên từ đợt hiến máu tháng 9/2010, với 1310 đơn vị máu thu được, Bách Khoa Hà Nội đã trở thành trường đại học có số đơn vị máu thu được từ hiến máu nhân đạo cao nhất trong khối các trường đại học toàn miền Bắc, lập nên con số kỷ lục đầu tiên của mình.</p> 				<center> 					<p><img src="imagetintuc/upl_n.png" width="100%" height="60%"></p> 					<b>        </b> 					<p><em>Ảnh minh họa: ngày hội hiến máu Bách Khoa nghìn giọt hi vọng</em></p> 				</center> 				<p>Hiến máu nhân đạo - "Bách Khoa nghìn giọt hy vọng" thực sự là một ngày hội, đúng như tên gọi - ngày hội của những tấm lòng nhân ái cùng hội tụ, ngày hội để tất cả mọi người cùng chung tay vì cộng đồng. Hiến máu nhân đạo đã trở thành một nét đẹp của sinh viên Bách Khoa nói riêng và sinh viên hiện nay nói chung. "Bách Khoa nghìn giọt hy vọng" đã trở thành một nơi kết nối những thế hệ của Bách Khoa, kết nối những tấm lòng nhân ái, tạo cơ hội cho những nghĩa cử cao đẹp được tôn vinh và giúp đỡ cho hàng triệu bệnh nhân trên cả nước.</p> 				<p>Qua đó, ai cũng có thể thấy rằng "Bách Khoa nghìn giọt hy vọng" là một chương trình hết sức có ý nghĩa, mang tính nhân văn sâu sắc và là một chương trình truyền thống tốt đẹp của trường Đại học Bách Khoa Hà Nội.</p> 				<p><img src="https://www.facebook.com/images/emoji.php/v5/f6c/1/16/2764.png" alt="" width="16" height="16">❤️<img src="https://www.facebook.com/images/emoji.php/v5/f6c/1/16/2764.png" alt="" width="16" height="16">❤️<img src="https://www.facebook.com/images/emoji.php/v5/f6c/1/16/2764.png" alt="" width="16" height="16">❤️CÙNG THAM GIA ĐÓNG GÓP MỘT PHẦN CHO CHƯƠNG TRÌNH BÁCH KHOA NGHÌN GIỌT HY VỌNG LẦN THỨ 20 ĐẶC BIỆT NÀY BẠN NHÉ! <img src="https://www.facebook.com/images/emoji.php/v5/f6c/1/16/2764.png" alt="" width="16" height="16">❤️<img src="https://www.facebook.com/images/emoji.php/v5/f6c/1/16/2764.png" alt="" width="16" height="16">❤️<img src="https://www.facebook.com/images/emoji.php/v5/f6c/1/16/2764.png" alt="" width="16" height="16">❤️</p>', 1),
(3, 'Tin Tức', 13, '', 'Tỏa sáng vẻ đẹp Mr.& Miss Bách khoa 2016', '<h4><strong>TƯNG BỪNG HỘI TRẠI &quot; ÂM VANG BÁCH KHOA &quot; </strong></h4>                     <b><p><strong>Trong 02 ngày 14 và 15/10, Hội trại "Âm vang Bách Khoa" đã diễn ra tại khuôn viên đại học Bách Khoa Hà Nội thu hút đông đảo các bạn sinh viên trong và ngoài trường đến tham dự.</strong></p>                     </b>                     <p>Chào mừng Kỷ niệm 60 năm thành lập Trường (1956 - 2016), Hội trại &ldquo;ÂM VANG BÁCH KHOA&rdquo; được tổ chức nhằm tạo ra một sân chơi sáng tạo, bổ ích và lý thú, món quà ý nghĩa cho tất cả các bạn sinh viên với nhiều trò chơi trí tuệ và vận động, các trò chơi huấn luyện kĩ năng mềm và một đêm văn nghệ hoành tráng, hấp dẫn, nhiều màu sắc. Hội trại đã có sự góp mặt của 20 đợn vị đến từ 20 Viện đào tạo trong toàn trường, với nhiều hoạt động sôi nổi và ý nghĩa như: Đêm chung khảo &ldquo;Mister &amp; Miss BK2016&rdquo;, Cuộc thi Rung chuông vàng phiên bản BK, Giải thể thao liên hợp, Triển lãm ảnh Bách Khoa, Hội chợ văn hóa ẩm thực, Ký túc xá ngày trở về... Mỗi gian trại là một mái ấm, thể hiện những tâm tư tình cảm, trí tuệ và sức sáng tạo của các bạn sinh viên gửi tới quý thầy cô và các anh chị cựu sinh viên quay về trường trong dịp này. Mỗi gian trại cũng là một sân chơi để các bạn sinh viên và cựu sinh viên thể hiện những tài năng của mình.</p>                     <p><img src="imagetintuc/upload_hoi_trai_1.png" width="100%" height="60%"></p>                     <p><img src="imagetintuc/upload_hoi_trYi_2.png" width="100%" height="60%"></p>                     <p><img src="imagetintuc/upload_DSC02159.png" width="100%" height="60%"></p>                     <p><img src="imagetintuc/upload_DSC_4652rs.png" width="100%" height="60%"></p>                     <p>Các bạn sinh viên chụp ảnh check-in tại hội trại "Âm vang Bách Khoa"</p>                     <p>Đêm Gala  âm nhạc chào mừng thành công Đại lễ kỷ niệm 60 năm thành lập trường ĐHBK HN đã diễn ra vào tối ngày 15/10 tại Quảng trường Thư viện Tạ Quang Bửu với những tiết mục nghệ thuật đặc sắc do các bạn sinh viên, cựu sinh viên và các ca sỹ, ban nhạc trình diễn. Tham dự đêm Gala có sự hiện diện của PGS Phạm Hoàng Lương- Phó hiệu trưởng Nhà trường; PGS Lê Minh Thắng- Chủ tịch Hội đồng Trường; TS Bùi Đức Hùng – Chủ tịch Công đoàn Trường; TS Vũ Duy Hải – Bí thư Đoàn Trường; sinh viên Đoàn Quang Trung – Chủ tịch Hội sinh viên Trường; lãnh đạo các Phòng, Ban, Khoa, Viện; đại diện các tập đoàn, doanh nghiệp, đơn vị có mối quan hệ hợp tác với Trường, các cơ quan thông tấn báo chí và đông đảo các sinh viên, cựu sinh viên trường.</p>                     <p>Tại quảng trường thư viện Tạ Quang Bửu, các khách mời đã cùng hát vang ca khúc &ldquo;Chúc mừng sinh nhật&rdquo;, hô vang khẩu hiệu &ldquo;Tôi yêu Bách Khoa&rdquo; và cùng thưởng thức các tiết mục nghệ thuật đặc sắc, với sự góp mặt của Ban nhạc OPLUS - Á Quân Nhân tố bí ẩn - XFactor Việt Nam mùa đầu tiên. Đặc biệt hơn là màn DJ sôi động của LY REBRA - DJ chương trình Beer Hà Nội countdown 2015.</p>                     <p>Gala là dịp để các thế hệ cán bộ, sinh viên hiện tại tri ân các thế hệ đi trước đồng thời ôn lại kỉ niệm về mái trường giàu truyền thống, cùng hòa vào giai điệu sâu lắng: ÂM VANG BÁCH KHOA.</p>                     <p>Một số hình ảnh đêm gala</p>                     <center>                     <p>                     <img src="imagetintuc/upload_DSC_4808rs.png" width="60%" height="60%"></p>               			<p>TS. Vũ Duy Hải- Bí thư Đoàn trường phát biểu tại đêm Gala</p>                         <p><img src="imagetintuc/upload_DSC_4825_sz.png" width="100%" height="60%"></p>                         <p><img src="imagetintuc/upload_gala.png" width="100%" height="60%"></p>                         <p>Lãnh đạo Nhà trường cùng hát vang  ca khúc Chúc mừng sinh nhật</p>	                         <p><img src="imagetintuc/upload_DSC_4994rs.png" width="100%" height="60%"></p>                         <p>Tiết mục biểu diễn của các chàng trai O-Plus</p>                         <p><img src="imagetintuc/upload_gala3.png" width="100%" height="60%"></p>                         <p><img src="imagetintuc/upload_DSC_5252rs.png" width="100%" height="60%"></p>', 1),
(3, 'Tin Tức', 14, '', 'Ủng Hộ Đồng Bào Miền Trung Bị Lũ', '<h4><strong>ỦNG HỘ ĐỒNG BÀO MIỀN TRUNG BỊ LŨ LỤT</strong></h4> <h4>&nbsp;</h4>                     <P><strong>Chiều qua (18/10) tại Hà Nội, nhiều cơ quan, đơn vị đã chung tay, quyên góp ủng hộ đồng bào miền Trung bị lũ lụt.</strong></P>                     <P>Theo Bộ Tài chính, trong ngày đầu tiên của cuộc vận động, toàn thể cán bộ, công chức, viên chức và người lao động thuộc khối cơ quan Bộ Tài chính đã ủng hộ tối thiểu 1 ngày lương/người với số tổng số tiền trên 500 triệu đồng. Sau khi quyên góp, trong hai ngày 18-19/10, Công đoàn Bộ Tài chính sẽ chuyển về Ủy ban Mặt trận Tổ quốc Việt Nam để kịp thời góp phần giúp người dân địa phương các tỉnh miền Trung khắc phục hậu quả của mưa, lũ, sớm vượt qua khó khăn, ổn định cuộc sống và phục hồi sản xuất. </P>                     <center>                     <P><img src="imagetintuc/Bo-truong-ung-ho (2).jpg" width="80%" height="40%"></P>                     <P>Bộ trưởng Bộ Tài chính ủng hộ đồng bào miền Trung bi lũ lụt.</P>                     </center>                     <P>Còn tại Tập đoàn Viễn thông Quân đội Viettel, mỗi cán bộ, công nhân viên chức người lao động thuộc Tập đoàn đã ủng hộ 1 ngày lương để giúp người dân vùng lũ. Tổng số tiền quyên góp 12 tỷ đồng sẽ được chuyển giao cho giám đốc Viettel tại các tỉnh để làm việc với chính quyền địa phương, tìm ra cách hỗ trợ thiết thực. Bên cạnh đó, Viettel điêù động 100 kỹ thuật viên khắc phục mạng lưới tại miền Trung. Tính đến 23h ngày 17/10, mạng lưới Viettel đã duy trì đảm bảo liên lạc đến 100% các huyện tại khu vực miền Trung. Trước đó, do luôn chủ động trong công tác phòng, chống thiên tai, tại các huyện có nguy cơ chịu ảnh hưởng nặng nề của lũ lụt như Bố Trạch, Minh Hóa, Tuyên Hóa, Quảng Trạch, Quảng Ninh (tỉnh Quảng Bình), Kỳ Anh, Cẩm Xuyên (tỉnh Hà Tĩnh), lực lượng kỹ thuật Viettel cũng đã nhanh chóng di chuyển thiết bị lên cao, luôn đảm bảo an toàn mạng lưới. </P>                     <center>                     <P><img src="imagetintuc/SXH2233.jpg" width="80%" height="40%"></P>                     <p>Nhân viên kỹ thuật Viettel ứng cứu, xử lý hệ thống mạng tại miền Trung.</p>                     </center>                     <P>Phát huy tinh thần &ldquo;Tương thân, tương ái&rdquo;, hướng tới cộng đồng và vì cộng đồng, Ngân hàng Maritime Bank đã phát động Chương trình &ldquo;Cùng Maritime Bank hành động vì đồng bào miền Trung&rdquo;. Theo đó, từ ngày 19/10 đến ngày 25/10, với mỗi 100 triệu đồng khách hàng gửi tiết kiệm, Maritime Bank sẽ trích 150 ngàn đồng từ doanh thu của ngân hàng để hỗ trợ cho các hộ dân bị ảnh hưởng tại vùng lũ. Ngoài ra, khách hàng còn có thể đóng góp ủng hộ thêm qua tài khoản công đoàn của Maritime Bank được niêm yết tại các quầy giao dịch. <br>                       <br>                             Trong ngày 18/10, Công đoàn và lãnh đạo Maritime Bank đã kêu gọi cán bộ nhân viên ngân hàng đóng góp tối thiểu nửa ngày lương để hỗ trợ cho bà con vùng lũ với cam kết ngân hàng sẽ nhân đôi tổng số tiền mà cán bộ nhân viên đóng góp được để có nhiều hơn các hộ dân miền Trung bị thiệt hại được hỗ trợ. Tổng số tiền thu được cũng như việc tổ chức hỗ trợ trực tiếp cho miền Trung sẽ được Maritime bank công bố công khai qua website của ngân hàng. </P>                     <b><p>&nbsp;</p></b>', 1),
(3, '', 15, '/ckfinder/image/images/15280947_933497283447512_1936574640_n.jpg', 'toan cho', '<p>asdflkjvlxcvdvxcv</p>\r\n\r\n<p>sdfhjoxckv</p>\r\n', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tin`
--
ALTER TABLE `tin`
  ADD PRIMARY KEY (`idtin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tin`
--
ALTER TABLE `tin`
  MODIFY `idtin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
