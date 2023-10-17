-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 29, 2016 at 11:11 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ban_hang`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hinh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `rong` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `cao` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `hinh`, `rong`, `cao`) VALUES
(1, 'banner_2.png', '990px', '150px');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE IF NOT EXISTS `footer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `html` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `html`) VALUES
(1, '<table width="990px">\r\n<tbody>\r\n<tr>\r\n<td align="right" width="495px">Cửa h&agrave;ng :</td>\r\n<td width="495px">Shop abc <strong>mới</strong></td>\r\n</tr>\r\n<tr>\r\n<td align="right">Điện thoại :</td>\r\n<td>so_dien_thoai_<strong>moi</strong></td>\r\n</tr>\r\n<tr>\r\n<td align="right">Địa chỉ :</td>\r\n<td>dia_chi_<strong>moi</strong></td>\r\n</tr>\r\n</tbody>\r\n</table>');

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE IF NOT EXISTS `hoa_don` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_nguoi_mua` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `hang_duoc_mua` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `ngaytaohd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`id`, `ten_nguoi_mua`, `email`, `dia_chi`, `dien_thoai`, `noi_dung`, `hang_duoc_mua`, `ngaytaohd`) VALUES
(6, 'le he', 'b@gmail.com', 'nui thanh', '0905112233', 'chưa duyệt', '26[|||]1[|||||]', '2016-11-01 21:40:49'),
(7, 'c', 'c@gmail.com', 'c', '05113232323', 'chưa duyệt', '26[|||]1[|||||]', '2016-11-01 21:45:19'),
(8, 'le the', 'a@gmail.com', 'aaaa', '0905798321', 'chưa duyệt', '26[|||]2[|||||]', '2016-11-01 21:51:30'),
(9, 'ngô lê quan', 'ngolequanit@gmail.com', 'Dương khuê Đà nẵng', '0905234563', 'chưa duyệt', '26[|||]1[|||||]', '2016-11-01 21:54:36'),
(10, 'le he', 'b@gmail.com', 'nui thanh', '0905112233', 'chưa duyệt', '14[|||]1[|||||]', '2016-11-01 21:58:44'),
(11, 'trần trường', 'truong@gmail.com', 'Núi thành Đà nẵng', '0905123563', 'chưa duyệt', '14[|||]1[|||||]', '2016-11-01 22:00:32'),
(12, 'le the', 'a@gmail.com', 'aaaa', '0905798321', 'chưa duyệt', '12[|||]1[|||||]', '2016-11-01 22:03:03'),
(13, 'le the', 'a@gmail.com', 'aaaa', '0905798321', 'chưa duyệt', '26[|||]4[|||||]', '2016-11-01 22:04:06'),
(14, 'cao thị thấp', 'dd@gmail.com', 'Núi thành, đà nẵng', '0905235313', 'chưa duyệt', '19[|||]1[|||||]26[|||]1[|||||]', '2016-11-01 22:35:59'),
(15, 'le the', 'a@gmail.com', 'aaaa', '0905798321', 'chưa duyệt', '26[|||]2[|||||]', '2016-11-02 15:21:17'),
(16, 'le the', 'a@gmail.com', '01 Phan Bội Châu, Đà Nẵng', '0905798321', 'chưa duyệt', '26[|||]1[|||||]14[|||]1[|||||]', '2016-11-04 14:55:59'),
(17, 'le the', 'a@gmail.com', '01 Phan Bội Châu, Đà Nẵng', '0905798321', 'chưa duyệt', '39[|||]1[|||||]26[|||]1[|||||]', '2016-11-04 17:32:30');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `URLS` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Birthday` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin` int(1) NOT NULL DEFAULT '0',
  `dienthoai` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `email`, `URLS`, `Name`, `Birthday`, `admin`, `dienthoai`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ngolequanit@gmail.com', '08 Núi thành, Đà Nẵng', 'le quan', '29/09/1990', 1, '0905710047'),
(2, 'quan', '0cc175b9c0f1b6a831c399e269772661', 'a@gmail.com', '01 Phan Bội Châu, Đà Nẵng', 'le the', '1/1/1990', 0, '0905798321'),
(3, 'b', '92eb5ffee6ae2fec3ad71c777531578f', 'b@gmail.com', 'nui thanh', 'Nguyễn Văn', '1/1/1990', 0, '0905112233'),
(4, 'c', '4a8a08f09d37b73795649038408b5f33', 'c@gmail.com', '09 Dương khuê', 'Bùi Như Lạc', '1/1/1890', 0, '05113232323'),
(5, 'd', '8277e0910d750195b448797616e091ad', 'dd@gmail.com', 'Núi thành, đà nẵng', 'cao thị thấp', '20/2/2001', 0, '0905235313');

-- --------------------------------------------------------

--
-- Table structure for table `menu_doc`
--

CREATE TABLE IF NOT EXISTS `menu_doc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `menu_doc`
--

INSERT INTO `menu_doc` (`id`, `ten`) VALUES
(1, 'Menu 1'),
(2, 'Menu 2'),
(3, 'Menu 3'),
(4, 'Menu 4'),
(5, 'Menu 5a'),
(6, 'Menu 6'),
(7, 'Menu 7'),
(8, 'Menu 8');

-- --------------------------------------------------------

--
-- Table structure for table `menu_ngang`
--

CREATE TABLE IF NOT EXISTS `menu_ngang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `loai_menu` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `menu_ngang`
--

INSERT INTO `menu_ngang` (`id`, `ten`, `noi_dung`, `loai_menu`) VALUES
(1, 'Giới thiệu', '<p>Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /></p>', ''),
(2, 'Sản phẩm', '', 'san_pham'),
(3, 'Hướng dẫn mua hàng', 'Nội dung hướng dẫn mua hàng <br><br>\r\nNội dung hướng dẫn mua hàng <br><br>\r\nNội dung hướng dẫn mua hàng <br><br>\r\nNội dung hướng dẫn mua hàng <br><br>\r\nNội dung hướng dẫn mua hàng <br><br>\r\nNội dung hướng dẫn mua hàng <br><br>\r\nNội dung hướng dẫn mua hàng <br><br>', ''),
(4, 'Cách mua hàng', 'Nội dung cách mua hàng <br><br>\r\nNội dung cách mua hàng <br><br>\r\nNội dung cách mua hàng <br><br>\r\nNội dung cách mua hàng <br><br>\r\nNội dung cách mua hàng <br><br>\r\nNội dung cách mua hàng <br><br>\r\nNội dung cách mua hàng <br><br>', ''),
(5, 'Liên hệ', 'Nội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>', '');

-- --------------------------------------------------------

--
-- Table structure for table `quang_cao`
--

CREATE TABLE IF NOT EXISTS `quang_cao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `html` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `vi_tri` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `quang_cao`
--

INSERT INTO `quang_cao` (`id`, `html`, `vi_tri`) VALUES
(1, '<p><a href="#"><img style="display: block; margin-left: auto; margin-right: auto;" src="/ban_hang/hinh_anh/tinymce/qc_p_1.png" alt="" /></a></p>\r\n<p style="text-align: center;"><a href="#"><img src="/ban_hang/hinh_anh/tinymce/qc_p_2.png" alt="" /></a></p>\r\n<p><a href="#"><img style="display: block; margin-left: auto; margin-right: auto;" src="/ban_hang/hinh_anh/tinymce/qc_p_3.png" alt="" /></a></p>', 'trai'),
(2, '<p><a href="#"><img style="display: block; margin-left: auto; margin-right: auto;" src="/ban_hang/hinh_anh/tinymce/qc_t_1.png" alt="" /></a></p>\r\n<p style="text-align: center;"><a href="#"><img src="/ban_hang/hinh_anh/tinymce/qc_t_2.png" alt="" /></a></p>\r\n<p><a href="#"><img style="display: block; margin-left: auto; margin-right: auto;" src="/ban_hang/hinh_anh/tinymce/qc_t_3.png" alt="" /></a></p>', 'phai');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE IF NOT EXISTS `san_pham` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(255) NOT NULL,
  `hinh_anh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `thuoc_menu` int(255) NOT NULL,
  `noi_bat` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `trang_chu` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `sap_xep_trang_chu` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=41 ;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id`, `ten`, `gia`, `hinh_anh`, `noi_dung`, `thuoc_menu`, `noi_bat`, `trang_chu`, `sap_xep_trang_chu`) VALUES
(1, 'Sản phẩm 1', 55000, '1.jpg', '<p>Nội dung của sản phẩm 1</p>', 1, 'co', '', 0),
(2, 'Sản phẩm 3', 82000, '3.jpg', '<p>Nội dung sản phẩm 3</p>', 3, '', 'co', 7),
(3, 'Sản phẩm 1_2', 86000, '1_2.jpg', 'Nội dung của sản phẩm 1_2', 1, '', '', 0),
(4, 'Sản phẩm 1_3', 97000, '1_3.jpg', 'Nội dung của sản phẩm 1_3', 1, '', 'co', 3),
(5, 'Sản phẩm 1_4', 42000, '1_4.jpg', 'Nội dung của sản phẩm 1_4', 1, '', '', 0),
(6, 'Sản phẩm 1_5', 100000, '1_5.jpg', '<p>Nội dung của sản phẩm 1_5</p>', 1, '', 'co', 0),
(7, 'Sản phẩm 1_6', 120000, '1_6.jpg', 'Nội dung của sản phẩm 1_6', 1, '', 'co', 2),
(8, 'Sản phẩm 1_7', 80000, '1_7.jpg', 'Nội dung của sản phẩm 1_7', 1, '', '', 0),
(9, 'Sản phẩm 1_8', 160000, '1_8.jpg', 'Nội dung của sản phẩm 1_8', 1, '', '', 0),
(10, 'Sản phẩm 1_9', 160000, '1_9.jpg', 'Nội dung của sản phẩm 1_9', 1, '', 'co', 7),
(11, 'Sản phẩm 1_10', 135000, '1_10.jpg', '<p>Nội dung của sản phẩm 1_10</p>', 1, '', 'co', 0),
(12, 'Sản phẩm 1_11', 55000, '1_11.jpg', '<p>Nội dung của sản phẩm 1_11</p>', 1, '', 'co', 13),
(13, 'Sản phẩm 1_12', 72000, '1_12.jpg', '<p>Nội dung của sản phẩm 1_12</p>', 1, '', '', 0),
(14, 'Sản phẩm 1_13', 78000, '1_13.jpg', '<p>Nội dung của sản phẩm 1_13</p>', 1, '', 'co', 11),
(15, 'Sản phẩm 1_14', 123000, '1_14.jpg', '<p>Nội dung của sản phẩm 1_14</p>', 1, '', 'co', 0),
(16, 'Sản phẩm 1_15', 125000, '1_15.jpg', 'Nội dung của sản phẩm 1_15', 1, 'co', 'co', 5),
(17, 'Sản phẩm 1_16', 99000, '1_16.jpg', 'Nội dung của sản phẩm 1_16', 1, '', '', 0),
(18, 'Sản phẩm 1_17', 145000, '1_17.jpg', '<p>Nội dung của sản phẩm 1_17</p>', 1, '', 'co', 1),
(19, 'Sản phẩm 1_18', 145000, '1_18.jpg', 'Nội dung của sản phẩm 1_18', 1, '', '', 0),
(20, 'Sản phẩm 1_19', 170000, '1_19.jpg', 'Nội dung của sản phẩm 1_19', 1, '', '', 0),
(21, 'Sản phẩm 1_20', 85000, '1_20.jpg', 'Nội dung của sản phẩm 1_20', 1, '', '', 0),
(22, 'Sản phẩm 3_2', 30000, '3_2.jpg', '<p>Nội dung của sản phẩm 3_2</p>', 3, '', 'co', 8),
(23, 'Sản phẩm 3_3', 40000, '3_3.jpg', 'Nội dung của sản phẩm 3_3', 3, '', '', 6),
(24, 'Sản phẩm 3_4', 50000, '3_4.jpg', 'Nội dung của sản phẩm 3_4', 3, '', '', 0),
(25, 'Sản phẩm 3_5', 60000, '3_5.jpg', 'Nội dung của sản phẩm 3_5', 3, '', '', 9),
(26, 'Sản phẩm 3_6', 70000, '3_6.jpg', '<p>Nội dung của sản phẩm 3_6</p>', 3, '', 'co', 12),
(27, 'Sản phẩm 3_7', 80000, '3_7.jpg', 'Nội dung của sản phẩm 3_7', 3, '', '', 0),
(28, 'Sản phẩm 3_8', 90000, '3_8.jpg', '<p>Nội dung của sản phẩm 3_8</p>', 3, '', '', 8),
(29, 'Sản phẩm 3_9', 100000, '3_9.jpg', 'Nội dung của sản phẩm 3_9', 3, '', '', 0),
(30, 'Sản phẩm 3_10', 110000, '3_10.jpg', 'Nội dung của sản phẩm 3_10', 3, '', '', 7),
(31, 'Sản phẩm 3_11', 120000, '3_11.jpg', '<p>Nội dung của sản phẩm 3_11</p>', 3, '', 'co', 9),
(32, 'Sản phẩm 3_12', 50000, '3_12.jpg', 'Nội dung của sản phẩm 3_12', 3, '', '', 12),
(33, 'Sản phẩm 3_13', 60000, '3_13.jpg', '<p>Nội dung của sản phẩm 3_13</p>', 3, '', '', 1),
(34, 'Sản phẩm 3_14', 70000, '3_14.jpg', 'Nội dung của sản phẩm 3_14', 3, '', '', 11),
(35, 'Sản phẩm 3_15', 80000, '3_15.jpg', '<p>Nội dung của sản phẩm 3_15</p>', 3, '', '', 0),
(36, 'Sản phẩm 3_16', 90000, '3_16.jpg', 'Nội dung của sản phẩm 3_16', 3, '', '', 16),
(37, 'Sản phẩm 3_17', 170000, '3_17.jpg', 'Nội dung của sản phẩm 3_17', 3, '', '', 15),
(38, 'Sản phẩm 3_18', 180000, '3_18.jpg', 'Nội dung của sản phẩm 3_18', 3, '', '', 0),
(39, 'Sản phẩm 3_19', 190000, '3_19.jpg', '<p>Nội dung của sản phẩm 3_19</p>', 3, 'co', '', 0),
(40, 'Sản phẩm 3_20', 200000, '3_20.jpg', '<p>Nội dung của sản phẩm 3_20</p>', 3, '', 'co', 2);

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE IF NOT EXISTS `slideshow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hinh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `lien_ket` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id`, `hinh`, `lien_ket`) VALUES
(1, 'a_1.png', '#'),
(2, 'a_2.png', '#'),
(3, 'a_3.png', '#'),
(4, 'a_4.png', '#'),
(5, 'Chrysanthemum.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `thong_tin_quan_tri`
--

CREATE TABLE IF NOT EXISTS `thong_tin_quan_tri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ky_danh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `thong_tin_quan_tri`
--

INSERT INTO `thong_tin_quan_tri` (`id`, `ky_danh`, `mat_khau`) VALUES
(1, 'admin', 'c3284d0f94606de1fd2af172aba15bf3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
