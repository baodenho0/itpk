-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2019 at 11:09 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itpk`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tieude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `tieude`, `hinhanh`, `link`, `seo`, `created_at`, `updated_at`) VALUES
(1, 'tiêu đề 1', '27xz-2.png', 'link 1', 'seo 1', '2019-03-01 08:00:42', '2019-03-04 03:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `banner_top`
--

CREATE TABLE `banner_top` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bannerdautrang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hotline` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `background` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slogan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banner_top`
--

INSERT INTO `banner_top` (`id`, `bannerdautrang`, `logo`, `hotline`, `diachi`, `email`, `background`, `slogan`, `created_at`, `updated_at`) VALUES
(1, 'AuMN-banner.png', 'logo', '125454545', 'địa chỉ 01225', 'emai@gmail.com', 'LW8U-bg.jpg', 'slogan', '2019-02-28 13:48:38', '2019-03-05 08:20:09');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tendanhmuc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `checkhienthi` tinyint(1) NOT NULL,
  `noibat` tinyint(1) NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`, `checkhienthi`, `noibat`, `hinhanh`, `created_at`, `updated_at`) VALUES
(1, 'menu 1', 0, 0, 'RBFc-video.png', '2019-03-01 14:51:50', '2019-03-01 16:18:30'),
(2, 'menu 2', 0, 1, 'CKrL-video.png', '2019-03-02 12:37:34', '2019-03-02 12:37:34'),
(3, 'menu 3', 0, 0, 'YFkJbn-8.png', '2019-03-04 07:31:20', '2019-03-04 07:31:20');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc2`
--

CREATE TABLE `danhmuc2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tendanhmuc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_danhmuc2` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc2`
--

INSERT INTO `danhmuc2` (`id`, `tendanhmuc`, `id_danhmuc2`, `created_at`, `updated_at`) VALUES
(1, 'menu cấp 2 1', 1, '2019-03-01 15:02:13', '2019-03-01 15:02:13'),
(2, 'menu cấp 2 2', 1, '2019-03-01 15:17:11', '2019-03-01 15:17:11'),
(3, 'Menu cấp 2 2', 2, '2019-03-03 10:11:06', '2019-03-03 10:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--

CREATE TABLE `dichvu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dichvu`
--

INSERT INTO `dichvu` (`id`, `noidung`, `created_at`, `updated_at`) VALUES
(1, '<p><img alt=\"TƯ VẤN HỖ TRỢ 24/7\" src=\"http://rotechvietnam.com/upload/baiviet/icon1-964.png\" /></p>\r\n\r\n<h5>TƯ VẤN HỖ TRỢ 24/7</h5>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel odio consectetur, semper felis nec, convallis metus. Ut ligula magna, lobortis at bibendum vitae, ullamcorper nec tellus. Fusce...</p>\r\n\r\n<p><img alt=\"MIỄN PHÍ THIẾT KẾ THEO Ý TƯỞNG\" src=\"http://rotechvietnam.com/upload/baiviet/icon2-894.png\" /></p>\r\n\r\n<h5>MIỄN PH&Iacute; THIẾT KẾ THEO &Yacute; TƯỞNG</h5>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel odio consectetur, semper felis nec, convallis metus. Ut ligula magna, lobortis at bibendum vitae, ullamcorper nec tellus. Fusce...</p>\r\n\r\n<p><img alt=\"TƯ VẤN CHUYÊN NGHIỆP\" src=\"http://rotechvietnam.com/upload/baiviet/icon3-1937.png\" /></p>\r\n\r\n<h5>TƯ VẤN CHUY&Ecirc;N NGHIỆP</h5>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel odio consectetur, semper felis nec, convallis metus. Ut ligula magna, lobortis at bibendum vitae, ullamcorper nec tellus. Fusce...</p>\r\n\r\n<p><img alt=\"Giao hàng đúng hạn, giá cạnh tranh\" src=\"http://rotechvietnam.com/upload/baiviet/icon4-2631.png\" /></p>\r\n\r\n<h5>GIAO H&Agrave;NG Đ&Uacute;NG HẠN, GI&Aacute; CẠNH TRANH</h5>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel odio consectetur, semper felis nec, convallis metus. Ut ligula magna, lobortis at bibendum vitae, ullamcorper nec tellus. Fusce...</p>\r\n\r\n<p><img alt=\"Hàng hóa đảm bảo nguồn gốc\" src=\"http://rotechvietnam.com/upload/baiviet/icon5-7054.png\" /></p>\r\n\r\n<h5>H&Agrave;NG H&Oacute;A ĐẢM BẢO NGUỒN GỐC</h5>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel odio consectetur, semper felis nec, convallis metus. Ut ligula magna, lobortis at bibendum vitae, ullamcorper nec tellus. Fusce...</p>\r\n\r\n<p><img alt=\"Công nghệ mới\" src=\"http://rotechvietnam.com/upload/baiviet/icon6-692.png\" /></p>\r\n\r\n<h5>C&Ocirc;NG NGHỆ MỚI</h5>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel odio consectetur, semper felis nec, convallis metus. Ut ligula magna, lobortis at bibendum vitae, ullamcorper nec tellus. Fusce...</p>', '2019-02-28 14:32:30', '2019-03-04 09:26:14');

-- --------------------------------------------------------

--
-- Table structure for table `doitac`
--

CREATE TABLE `doitac` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doitac`
--

INSERT INTO `doitac` (`id`, `hinhanh`, `seo`, `created_at`, `updated_at`) VALUES
(2, 'dd66-doitac.png', 'seo 2 đôi tác 2', '2019-03-01 08:46:35', '2019-03-04 09:06:41'),
(3, 'NS30-doitac1.png', 'đối tác 1', '2019-03-04 09:11:54', '2019-03-04 09:11:54'),
(4, 'Mdkp-Untitled.jpg', 'đối tác mới', '2019-03-05 08:46:49', '2019-03-05 08:46:49');

-- --------------------------------------------------------

--
-- Table structure for table `duannoibat`
--

CREATE TABLE `duannoibat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `noibat` tinyint(1) NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tieude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `duannoibat`
--

INSERT INTO `duannoibat` (`id`, `noidung`, `noibat`, `hinhanh`, `tieude`, `mota`, `created_at`, `updated_at`) VALUES
(1, '<p>b&agrave;i viết</p>', 1, 'wDfO-3.png', 'tiêu đề', 'mô tả', '2019-03-01 08:18:16', '2019-03-01 08:18:16');

-- --------------------------------------------------------

--
-- Table structure for table `duoi_duannoibat`
--

CREATE TABLE `duoi_duannoibat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tieude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vechungtoi` text COLLATE utf8_unicode_ci NOT NULL,
  `hotline` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mxh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hotrotructuyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trongtincty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chinhsach` text COLLATE utf8_unicode_ci NOT NULL,
  `fanpage` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `vechungtoi`, `hotline`, `email`, `mxh`, `hotrotructuyen`, `trongtincty`, `chinhsach`, `fanpage`, `created_at`, `updated_at`) VALUES
(1, 'ROTECH VIỆT NAM là một công ty chuyên nghiên cứu và cung cấp các sản phẩm về chăm sóc sức khoẻ của thế kỷ 21 với tầm nhìn làm cho Việt Nam trở thành một quốc gia lành mạnh, hạnh phúc, phồn vinh. ROTECH là một trong những đơn vị tiên phong đầu tiên trong việc đưa công nghệ lọc nước Reverse Osmosis (R.O) phát triển thành những sản phẩm mang tính cách mạng trong ngành lọc nước nước Việt Nam.', '0933.14.2323', 'rotechvietnam@gmail.com', 'mxh 1rotechvietnam@gmail.com', 'ANH SÁNG: 0933 14 23 23', 'Địa Chỉ: Số 21, Đường D10, P. Tây Thạnh, Q. Tân Phú, TP. Hồ Chí Minh Điện Thoại: 02862 679 166 - 0886 382 823 - Hotline: 0933 14 2323 Website: www.rotech.vn - Email: rotechvietnam@gmail.com', '<p><a href=\"\" title=\"Chính sách bảo mật thông tin\"><span style=\"color:#1abc9c\">Ch&iacute;nh s&aacute;ch bảo mật th&ocirc;ng tin</span></a></p>\r\n\r\n<p><a href=\"\" title=\"Chính sách thanh toán\"><span style=\"color:#1abc9c\">Ch&iacute;nh s&aacute;ch thanh to&aacute;n</span></a></p>\r\n\r\n<p><a href=\"\" title=\"Chính sách bảo mật\"><span style=\"color:#1abc9c\">Ch&iacute;nh s&aacute;ch bảo mật</span></a></p>\r\n\r\n<p><a href=\"\" title=\"Chính sách vận chuyển\"><span style=\"color:#1abc9c\">Ch&iacute;nh s&aacute;ch vận chuyển</span></a></p>\r\n\r\n<p><a href=\"\" title=\"CÔNG TY TNHH ROTECH VIỆT NAM\"><img alt=\"CÔNG TY TNHH ROTECH VIỆT NAM\" src=\"http://rotechvietnam.com/upload/hinhanh/20150827110756dathongbao-6083.png\" /></a></p>', '<iframe src=\"https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=300&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId\" width=\"300\" height=\"500\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>', '2019-03-01 09:05:58', '2019-03-05 07:55:15');

-- --------------------------------------------------------

--
-- Table structure for table `form_lienhe`
--

CREATE TABLE `form_lienhe` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `form_lienhe`
--

INSERT INTO `form_lienhe` (`id`, `hoten`, `diachi`, `sdt`, `email`, `created_at`, `updated_at`) VALUES
(1, 'họ tên', 'điah chỉ', '021321', 'email@gmail.com', '2019-03-04 04:29:50', '2019-03-04 04:29:50'),
(2, 'họ tên', 'địa chỉ', '010231123', 'email.com@gmail.com', '2019-03-04 08:31:38', '2019-03-04 08:31:38');

-- --------------------------------------------------------

--
-- Table structure for table `gioithieu`
--

CREATE TABLE `gioithieu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gioithieu`
--

INSERT INTO `gioithieu` (`id`, `noidung`, `created_at`, `updated_at`) VALUES
(1, '<p>Chưa c&oacute; th&ocirc;ng tin</p>', '2019-02-28 14:27:16', '2019-03-04 09:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `hinhanhphu`
--

CREATE TABLE `hinhanhphu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_sanpham` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hinhanhphu2`
--

CREATE TABLE `hinhanhphu2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_sanpham2` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `bando` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`id`, `noidung`, `bando`, `created_at`, `updated_at`) VALUES
(1, '<p>Li&ecirc;n hệ</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7837.488234182676!2d106.67027905221049!3d10.830883697435661!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1551672061636\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '2019-02-28 15:29:42', '2019-03-04 04:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_28_002110_create_banner_top', 1),
(4, '2019_02_28_002952_create_gioithieu', 2),
(5, '2019_02_28_003032_create_dichvu', 2),
(6, '2019_02_28_003059_create_tuyendung', 2),
(7, '2019_02_28_003916_create_lienhe', 2),
(8, '2019_02_28_004342_create_form_lienhe', 2),
(9, '2019_02_28_004447_create_slide', 2),
(10, '2019_02_28_004955_create_banner', 2),
(11, '2019_02_28_005123_create_duannoibat', 2),
(12, '2019_02_28_005747_create_duoi_duannoibat', 2),
(13, '2019_02_28_005905_create_video', 2),
(14, '2019_02_28_010000_create_doitac', 2),
(15, '2019_02_28_010039_create_footer', 2),
(16, '2019_03_01_011338_create_tintuc', 3),
(17, '2019_03_01_040010_create_danhmuc', 4),
(18, '2019_03_01_040319_create_sanpham', 5),
(19, '2019_03_01_042044_create_hinhanhphu', 6),
(20, '2019_03_01_052945_create_danhmuc2', 7),
(22, '2019_03_01_055415_create_sanpham2', 8),
(23, '2019_03_01_055911_create_hinhanhphu2', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hinhanhchinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tieude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giatien` int(11) NOT NULL,
  `thongsokythuat` longtext COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `chitietsanpham` longtext COLLATE utf8_unicode_ci NOT NULL,
  `cmtfb` text COLLATE utf8_unicode_ci NOT NULL,
  `seo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_danhmuc` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `hinhanhchinh`, `tieude`, `giatien`, `thongsokythuat`, `mota`, `chitietsanpham`, `cmtfb`, `seo`, `id_danhmuc`, `created_at`, `updated_at`) VALUES
(1, 'buof-XBWO-slide-21.png', '1321', 12, '<p>1321</p>', '<p>12</p>', '<p>1321</p>', '<div id=\"fb-root\"></div><script async defer src=\"https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2\"></script><div class=\"fb-comments\" data-href=\"https://developers.facebook.com/docs/plugins/comments#configurator\" data-numposts=\"5\"></div>', '12', 2, '2019-03-02 12:55:46', '2019-03-05 07:41:25'),
(2, 'zCAoqm-aZZa-tfDc-bg.jpg', 'tiêu đề', 12155, '<p>ti&ecirc;u đề</p>', '<p>m&ocirc; tả</p>', '<p>ti&ecirc;u đề</p>', 'sdfdsf', 'seo', 2, '2019-03-05 07:40:49', '2019-03-05 07:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham2`
--

CREATE TABLE `sanpham2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hinhanhchinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tieude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giatien` int(11) NOT NULL,
  `thongsokythuat` longtext COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `chitietsanpham` longtext COLLATE utf8_unicode_ci NOT NULL,
  `cmtfb` text COLLATE utf8_unicode_ci NOT NULL,
  `seo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_danhmuc2` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham2`
--

INSERT INTO `sanpham2` (`id`, `hinhanhchinh`, `tieude`, `giatien`, `thongsokythuat`, `mota`, `chitietsanpham`, `cmtfb`, `seo`, `id_danhmuc2`, `created_at`, `updated_at`) VALUES
(1, 'vB3zbn-Untitled.jpg', 'tiêu đề 1', 1010, '<p>ti&ecirc;u đề 1</p>', '<p>m&ocirc; tả 1</p>', '<p>ti&ecirc;u đề 1</p>', 'nhúng cmt fb 1', 'seo 1, soew 1', 1, '2019-03-02 13:44:15', '2019-03-05 07:40:13'),
(2, 'erMapC-Untitled.jpg', '234234', 234234, '<p>23423423</p>', '<p>234234</p>', '<p>234234</p>', '23423', '234234', 2, '2019-03-02 13:48:36', '2019-03-02 13:48:36'),
(3, '5oWYnq-logo.png', 'tiêu đề demo', 12003314, '<p>th&ocirc;ng số kỹ thuật</p>', '<p>m&ocirc; tả&nbsp;</p>', '<p>chi tiết sản phẩm</p>', 'cmsdfsdf', 'seo', 2, '2019-03-05 03:00:42', '2019-03-05 03:00:42'),
(4, 'I4QZ4J-doitac.png', 'tiê đề tiếp', 1321, '<p>1121</p>', '<p>12121</p>', '<p>121</p>', '21', '21', 2, '2019-03-05 03:01:04', '2019-03-05 03:01:04'),
(5, 'M7tZpv-bTOX-slide-22.png', 'MÁY LỌC NƯỚC RO TORAY: NK-0888S (8 CẤP LỌC)', 123456789, '<p>M&Aacute;Y LỌC NƯỚC RO TORAY: NK-0888S (8 CẤP LỌC)</p>', '<p><strong><big>1. M&agrave;ng lọc R.O Nhật Bản.<img alt=\"Màng lọc nước RO Nhật Bản.\" src=\"https://rotech.vn/datafiles/11545/upload/images/TORAY%20NH%E1%BA%ACT%20B%E1%BA%A2N/MSMV-4.png\" /></big></strong></p>\r\n\r\n<p><big>&nbsp;M&Agrave;NG LỌC &lsquo;TORAY&rsquo; TS-1812S-50G/75G</big></p>\r\n\r\n<p><big>TORAY&#39; Innovation by Chemical</big></p>\r\n\r\n<p><big>M&agrave;ng lọc RO - TORAY cho m&aacute;y lọc nước RO</big></p>\r\n\r\n<p><big>Trải nghiệm chuẩn TORAY</big></p>\r\n\r\n<p><big>Hai model 50GPD v&agrave; 75GPD</big></p>\r\n\r\n<p><big>Đơn vị chủ quản: Toray Industries., Inc</big></p>\r\n\r\n<p><big>Nh&agrave; m&aacute;y: Toray Chemical Korea.Inc</big></p>\r\n\r\n<p><big>------</big></p>\r\n\r\n<p><big>TORAY REVERSE OSMOSIS MEMBRANE</big></p>\r\n\r\n<p><big>MODEL: TS-1812S-50G &amp; TS-1812S-75G</big></p>\r\n\r\n<p><big>Capacity: 50GPD &amp; 75GPD</big></p>\r\n\r\n<p><big>Brand: TORAY</big></p>\r\n\r\n<p><big>Distributor by ROTECH Viet Nam Co.,Ltd</big></p>\r\n\r\n<p><big>Origin from TORAY</big></p>\r\n\r\n<p><big>Email: rotechvietnam@gmail.com</big></p>\r\n\r\n<p><strong><big>1. Nguy&ecirc;n l&yacute; hoạt động.</big></strong></p>\r\n\r\n<p><big>&nbsp;- M&aacute;y lọc nước NK-0888S gồm 8 cấp lọc hoạt động đồng bộ cho nguồn nước tinh khiết sạch khuẩn. Sử dụng ngay khi qua l&otilde;i số 5,6,7,8 m&agrave; kh&ocirc;ng cần đun s&ocirc;i.</big></p>\r\n\r\n<p><big>1. L&otilde;i lọc số 1&nbsp;PP&nbsp;( u) - (Foam of Polypropylene): Lọc cặn bẩn (rong, r&ecirc;u, gỉ, sắt...) c&oacute; k&iacute;ch thước lớn hơn 1 microm m&eacute;t.</big></p>\r\n\r\n<p><big>2. L&otilde;i lọc số 2&nbsp;OCB&nbsp;than hoạt t&iacute;nh dạng hạt&nbsp;(Granue Activated Carbon): Lọc c&aacute;c chất hữu cơ độc hại, clorine, m&ugrave;i vị lạ của nước</big></p>\r\n\r\n<p><big>3. L&otilde;i lọc số 3&nbsp;CTO&nbsp;Than hoạt t&iacute;nh dạng khối &nbsp;(Solid Block Activated Carbon &ndash; SBAC):&nbsp;Được&nbsp;&eacute;p chặt, b&ecirc;n ngo&agrave;i được bao bởi lớp lưới tr&aacute;ng bạc để diệt khuẩn. Loại bỏ c&aacute;c kim loại nặng, amoni, asen, c&aacute;c chất hữu cơ nhỏ nhất....</big></p>\r\n\r\n<p><big>4. M&agrave;ng lọc số 4 R.O: K&iacute;ch thước 0,0001 Micro (u): Lọc sạch ở cấp độ ph&acirc;n tử, loại bỏ c&aacute;c kim loại nặng, amoni, asen, c&aacute;c chất hữu cơ nhỏ nhất...với k&iacute;ch thước khoảng 0.1 nanomet.&nbsp;( Tr&aacute;i Tim Của M&aacute;y Lọc Nước )</big></p>\r\n\r\n<p><big>5. L&otilde;i lọc số 5 Carbon (T33): Ổn định lại vị ngọt m&aacute;t tự nhi&ecirc;n, tạo lại một phần vị kho&aacute;ng cho nguồn nước tinh khiết khi qua m&agrave;ng R.O</big></p>\r\n\r\n<p><big>6. L&otilde;i số 6 Alkaline: Tăng độ PH cho nước từ 6.5-8.5, bổ sung th&ecirc;m một phần kho&aacute;ng chất, tăng th&ecirc;m độ kiềm trong nước.</big></p>\r\n\r\n<p><big>7. L&otilde;i số 7 BIO OXI : Tăng h&agrave;m lượng oxi trong nước hỗ trợ tế b&agrave;o hấp thụ nước tốt hơn.</big></p>\r\n\r\n<p><big>&nbsp; 8. L&otilde;i lọc số 8 Nano : Cấu tạo từ than hoạt t&iacute;nh t&iacute;ch hợp với vật liệu Nano Silver tr&aacute;ng bạc, gi&uacute;p loại bỏ tuyệt đối những độc tố như vi khuẩn, chống khuẩn ngược từ v&ograve;i,v&agrave; vị tr&iacute; lắp m&aacute;y, loại bỏ nấm c&oacute; hại trong nước, đảm bảo cho bạn v&agrave; gia đ&igrave;nh một nguồn nước tinh khiết v&agrave; an to&agrave;n nhất sức khỏe.</big></p>\r\n\r\n<p><strong><big>3. Sơ đồ cấu tạo.</big></strong></p>\r\n\r\n<p><strong><big><img alt=\"\" src=\"https://rotech.vn/datafiles/11545/upload/files/RO%20TORAY/S%C6%A1%20%C4%91%E1%BB%93%20c%E1%BA%A5u%20t%E1%BA%A1o%20R_O%20copy.png\" /></big></strong></p>\r\n\r\n<p><strong><big>4. Tiện &iacute;ch vượt trội.</big></strong></p>\r\n\r\n<p><big>M&aacute;y lọc nước ROTECH&nbsp; NK0888S chạy ho&agrave;n to&agrave;n tự động :</big></p>\r\n\r\n<p><big>1. Van &aacute;p cao: Tự động dừng m&aacute;y khi nước đầy trong b&igrave;nh &aacute;p chứa nước.</big></p>\r\n\r\n<p><big>2. Van &aacute;p thấp: Bảo vệ m&aacute;y khi nguồn nước yếu, kh&ocirc;ng c&oacute; nước hoặc khi l&otilde;i lọc tắc.</big></p>\r\n\r\n<p><big>3. Adaptor: Chuyển d&ograve;ng điện 220V th&agrave;nh 24V cung cấp điện cho bơm tăng &aacute;p.</big></p>\r\n\r\n<p><big>4. Van điện từ: Ngắt nước thải khi m&aacute;y dừng hoạt động để tiết kiệm nước, b&aacute;o hiệu khi l&otilde;i lọc tắc (ph&aacute;t tiếng k&ecirc;u lạch tạch)</big></p>\r\n\r\n<p><big>5. B&igrave;nh &aacute;p chứa nước: Để giữ v&agrave; bảo quản nguồn nước tinh khiết</big></p>\r\n\r\n<p><big>6. Bơm tăng &aacute;p: Tăng &aacute;p lực nước đẩy qua m&agrave;ng R.O.</big></p>\r\n\r\n<p><big>7. Ho&agrave;n to&agrave;n kh&ocirc;ng tốn điện năng, ghim điện 24/24 bởi v&igrave; điện năng của m&aacute;y ti&ecirc;u thụ chỉ c&oacute; 24V-1,2A</big></p>\r\n\r\n<p><strong><big>5. Cam kết chất lượng sản phẩm:</big></strong></p>\r\n\r\n<p><big>&nbsp;&rArr;&nbsp;M&aacute;y lọc nước ROTECH NK-0888S (8 cấp lọc) được sản xuất theo quy tr&igrave;nh c&ocirc;ng nghệ cấp chứng nhận ph&ugrave; hợp ISO 9001:2008.</big></p>\r\n\r\n<p><big>&nbsp;&rArr;&nbsp;Nước qua m&aacute;y lọc nước NK-0888S (8 cấp lọc) đạt ti&ecirc;u chuẩn QCVN 6-1:2010 BYT. (Xem th&ecirc;m: Ti&ecirc;u chuẩn nước uống trực tiếp của Bộ Y Tế)</big></p>\r\n\r\n<p><big>&nbsp;&rArr;&nbsp;Sản phẩm c&oacute; nguồn gốc xuất xứ r&otilde; r&agrave;ng: sản xuất v&agrave; lắp r&aacute;p tại c&ocirc;ng ty TNHH ROTECH Việt Nam.</big></p>\r\n\r\n<p><big>&nbsp;&rArr;&nbsp;Sử dụng m&agrave;ng lọc R.O TORAY, nhập khẩu trực tiếp từ NHẬT BẢN.</big></p>\r\n\r\n<p><big>&nbsp;&rArr;&nbsp;Hệ thống tem nh&atilde;n sắc n&eacute;t, cụ thể, r&otilde; r&agrave;ng:</big></p>\r\n\r\n<p><big>&nbsp;&rArr;&nbsp;Tem chức năng: được d&aacute;n tr&ecirc;n từng l&otilde;i, thể hiện r&otilde; r&agrave;ng vật liệu cấu tạo, t&aacute;c dụng v&agrave; thời hạn sử dụng của c&aacute;c bộ phận như: l&otilde;i số 1, 2, 3, bơm, b&igrave;nh &aacute;p, v&ograve;i.</big></p>\r\n\r\n<p><big>&nbsp;&rArr;&nbsp;Tem phụ: D&aacute;n tr&ecirc;n sản phẩm c&oacute; hotline, website v&agrave; xuất xứ sản phẩm r&otilde; r&agrave;ng gi&uacute;p người mua y&ecirc;n t&acirc;m về nguồn gốc sản phẩm.</big></p>\r\n\r\n<p><big>&nbsp;&rArr;&nbsp;Tem x&aacute;c thực sản phẩm ch&iacute;nh h&atilde;ng m&atilde; vạch của từng sản phẩm.</big></p>\r\n\r\n<p><big>&nbsp;&rArr;&nbsp;Bao b&igrave; được l&agrave;m từ vật liệu th&acirc;n thiện với m&ocirc;i trường, c&oacute; độ bền v&agrave; khả năng chịu lực k&eacute;o, lực n&eacute;n v&agrave; nhiệt cao gi&uacute;p bảo vệ to&agrave;n vẹn cho sản phẩm.</big></p>\r\n\r\n<p><big><strong><img alt=\"Kích thước máy lọc nước ROTECH.\" src=\"https://rotech.vn/datafiles/11545/upload/images/TORAY%20NH%E1%BA%ACT%20B%E1%BA%A2N/K%C3%ADch%20th%C6%B0%E1%BB%9Bc%20.png\" /></strong></big></p>\r\n\r\n<p>&nbsp;</p>', '<p>M&Aacute;Y LỌC NƯỚC RO TORAY: NK-0888S (8 CẤP LỌC)</p>', '<div class = \"fb-bình luận\" data-href = \"https://developers.facebook.com/docs/plugins/comments#configurator\" data-numposts = \"5\" > </ div>', 'MÁY LỌC NƯỚC RO TORAY', 3, '2019-03-05 04:34:22', '2019-03-05 07:37:31');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tieude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `baiviet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `hinhanh`, `tieude`, `baiviet`, `mota`, `link`, `created_at`, `updated_at`) VALUES
(1, 'bTOX-slide-22.png', 'tiêu đề', 'nội dung', 'mô tả', 'link', '2019-02-28 15:49:03', '2019-02-28 15:49:03'),
(2, 'wjnc-slide-31.png', 'tiêu đề 2', 'nội dung 2', 'mô tả 2', 'link 2', '2019-03-02 00:21:23', '2019-03-02 00:21:23'),
(3, 'cN9p-slide-31.png', 'tiêu đề 3', 'nội dung 3', 'mô tả 3', 'link 3', '2019-03-02 00:21:50', '2019-03-02 00:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `noibat` tinyint(1) NOT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tieude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `noidung`, `noibat`, `mota`, `tieude`, `hinhanh`, `created_at`, `updated_at`) VALUES
(1, '<p>nội dung 1</p>', 1, 'mô tả 1', 'tiêu đề 1', 'tmPrJmb8-new_seo-10-512.png', '2019-03-01 09:32:01', '2019-03-01 09:38:59'),
(2, '<h1>Cấm đường, hạn chế phương tiện dịp &ocirc;ng Kim Jong Un thăm Việt Nam</h1>\r\n\r\n<p>Thứ S&aacute;u, ng&agrave;y 01/03/2019 16:58 PM (GMT+7)</p>\r\n\r\n<p><a href=\"http://www.facebook.com/fan24h\" target=\"_blank\" title=\"Chia sẻ trên Fanpage\">&nbsp;</a></p>\r\n\r\n<h2>C&ocirc;ng an H&agrave; Nội đ&atilde; c&oacute; th&ocirc;ng b&aacute;o cấm đường v&agrave; ph&acirc;n luồng giao th&ocirc;ng dịp Chủ tịch Triều Ti&ecirc;n Kim Jong Un thăm hữu nghị ch&iacute;nh thức Việt Nam.</h2>\r\n\r\n<p>Sự kiện:&nbsp;</p>\r\n\r\n<h3><a href=\"https://www.24h.com.vn/thoi-su-c46e3909.html\" title=\"Thời sự\">Thời sự</a></h3>\r\n\r\n<p>,&nbsp;</p>\r\n\r\n<h3><a href=\"https://www.24h.com.vn/kim-jong-un-c415e4032.html\" title=\"Kim Jong Un\">Kim Jong Un</a></h3>\r\n\r\n<p>,&nbsp;</p>\r\n\r\n<h3><a href=\"https://www.24h.com.vn/tin-nong-c46e3908.html\" title=\"Tin nóng\">Tin n&oacute;ng</a></h3>\r\n\r\n<p><img alt=\"Cấm đường, hạn chế phương tiện dịp ông Kim Jong Un thăm Việt Nam - 1\" src=\"https://cdn.24h.com.vn/upload/1-2019/images/2019-03-01/1551434321-24-cam-duong-han-che-phuong-tien-dip-ong-kim-jong-un-tham-viet-nam-cd-1551434156-width660height440.jpg\" /></p>\r\n\r\n<p>C&ocirc;ng an H&agrave; Nội sẽ cấm, hạn chế phương tiện ở một số tuyến đường dịp Chủ tịch Triều Ti&ecirc;n Kim Jong Un thăm Việt Nam. (Ảnh minh họa)</p>\r\n\r\n<p>Nhận lời mời của Tổng B&iacute; thư Ban Chấp h&agrave;nh Trung ương Đảng Cộng sản Việt Nam, Chủ tịch nước Cộng h&ograve;a x&atilde; hội chủ nghĩa Việt Nam Nguyễn Ph&uacute; Trọng, Chủ tịch Đảng Lao động Triều Ti&ecirc;n, Chủ tịch Uỷ ban Quốc vụ nước Cộng ho&agrave; d&acirc;n chủ nh&acirc;n d&acirc;n Triều Ti&ecirc;n Kim Ch&acirc;ng Ưn (Kim Jong Un) sẽ thăm hữu nghị ch&iacute;nh thức Việt Nam trong hai ng&agrave;y 1/3 v&agrave; 2/3.</p>\r\n\r\n<p>Nhằm bảo đảm an ninh, an to&agrave;n giao th&ocirc;ng th&ocirc;ng suốt, C&ocirc;ng an H&agrave; Nội th&ocirc;ng b&aacute;o ph&acirc;n luồng giao th&ocirc;ng v&agrave; tổ chức hướng đi cho c&aacute;c phương tiện tr&ecirc;n địa b&agrave;n Thủ đ&ocirc; như sau:</p>', 1, 'mô tả', 'tiêu đề', 'iVYAh9D9-a1.png', '2019-03-02 01:25:05', '2019-03-03 10:37:10'),
(3, '<h1>Lịch tr&igrave;nh dự kiến 2 ng&agrave;y thăm ch&iacute;nh thức Việt Nam của Chủ tịch Kim Jong Un</h1>\r\n\r\n<p>Thứ S&aacute;u, ng&agrave;y 01/03/2019 07:48 AM (GMT+7)</p>\r\n\r\n<p><a href=\"http://www.facebook.com/fan24h\" target=\"_blank\" title=\"Chia sẻ trên Fanpage\">&nbsp;</a></p>\r\n\r\n<h2>Trong lịch tr&igrave;nh 2 ng&agrave;y thăm ch&iacute;nh thức VN, Chủ tịch Triều Ti&ecirc;n sẽ hội đ&agrave;m với Tổng b&iacute; thư, Chủ tịch nước Nguyễn Ph&uacute; Trọng...</h2>\r\n\r\n<p>Sự kiện:&nbsp;</p>\r\n\r\n<h3><a href=\"https://www.24h.com.vn/hoi-nghi-thuong-dinh-my-trieu-c415e5378.html\" title=\"Hội nghị thượng đỉnh Mỹ-Triều Tiên\">Hội nghị thượng đỉnh Mỹ-Triều Ti&ecirc;n</a></h3>\r\n\r\n<p>,&nbsp;</p>\r\n\r\n<h3><a href=\"https://www.24h.com.vn/kim-jong-un-c415e4032.html\" title=\"Kim Jong Un\">Kim Jong Un</a></h3>\r\n\r\n<p><img alt=\"Lịch trình dự kiến 2 ngày thăm chính thức Việt Nam của Chủ tịch Kim Jong Un - 1\" src=\"https://cdn.24h.com.vn/upload/1-2019/images/2019-03-01/Lich-trinh-du-kien-2-ngay-tham-chinh-thuc-Viet-Nam-cua-Chu-tich-Kim-Jong-Un-kim-jong-1551401247-139-width1004height565.jpg\" style=\"width:660px\" /></p>\r\n\r\n<p>Chủ tịch Triều Ti&ecirc;n Kim Jong Un vẫy ch&agrave;o người d&acirc;n Việt Nam khi đặt ch&acirc;n xuống ga Đồng Đăng, Lạng Sơn trước ng&agrave;y dự Hội nghị Thượng đỉnh với Tổng thống Mỹ Donald Trump</p>\r\n\r\n<p>Nhận lời mời của Tổng B&iacute; thư, Chủ tịch nước Nguyễn Ph&uacute; Trọng, Chủ tịch Đảng Lao động Triều Ti&ecirc;n, Chủ tịch Ủy ban Quốc vụ nước CHDCND Triều Ti&ecirc;n Kim Jong Un sẽ&nbsp;thăm hữu nghị ch&iacute;nh thức Việt Nam trong hai ng&agrave;y 1-2/3, ngay sau&nbsp;khi kết th&uacute;c Hội&nbsp;nghị thượng đỉnh lần&nbsp;thứ hai&nbsp;với Tổng thống Mỹ Donald Trump.</p>\r\n\r\n<p>Theo một l&atilde;nh đạo Bộ Ngoại giao, đ&acirc;y l&agrave; lần đầu ti&ecirc;n sau 55 năm, sau chuyến thăm của Chủ tịch Kim Nhật Th&agrave;nh, l&atilde;nh đạo CHDCND Triều Ti&ecirc;n c&oacute; cuộc thăm ch&iacute;nh thức Việt Nam.</p>\r\n\r\n<p>Chương tr&igrave;nh dự kiến chuyến thăm cấp nh&agrave; nước tới Việt Nam của Chủ tịch Triều Ti&ecirc;n Kim Jong Un diễn ra với nhiều hoạt động trong lịch tr&igrave;nh.</p>\r\n\r\n<p>Dự kiến, chiều 1/3&nbsp;sẽ diễn ra Lễ đ&oacute;n ch&iacute;nh thức Chủ tịch Triều Ti&ecirc;n Kim Jong Un tại Phủ Chủ tịch. Sau đ&oacute;, c&aacute;c l&atilde;nh đạo sẽ chụp ảnh chung trước khi diễn ra cuộc hội đ&agrave;m giữa &ocirc;ng Kim Jong Un v&agrave; Tổng b&iacute; thư, Chủ tịch nước Nguyễn Ph&uacute; Trọng.</p>\r\n\r\n<p>Tối c&ugrave;ng ng&agrave;y, tại Trung t&acirc;m Hội nghị quốc tế (11 L&ecirc; Hồng Phong) sẽ c&oacute; tiệc chi&ecirc;u đ&atilde;i ch&agrave;o mừng Chủ tịch Kim Jong Un.</p>\r\n\r\n<p>S&aacute;ng 2/3, Chủ tịch Kim Jong Un sẽ đặt v&ograve;ng hoa tưởng niệm tại Đ&agrave;i tưởng niệm c&aacute;c anh h&ugrave;ng liệt sĩ.&nbsp;Sau đ&oacute;, l&agrave;&nbsp;đặt v&ograve;ng hoa v&agrave; viếng Lăng Chủ tịch Hồ Ch&iacute; Minh.</p>\r\n\r\n<p>Tại Văn ph&ograve;ng Ch&iacute;nh phủ ngay sau đ&oacute;, Chủ tịch Kim Jong Un sẽ c&oacute; cuộc hội kiến người người đứng đầu Ch&iacute;nh phủ Việt Nam - Thủ tướng Nguyễn Xu&acirc;n Ph&uacute;c. Tiếp đến, &ocirc;ng tiếp tục c&oacute; cuộc hội kiến với Chủ tịch Quốc hội Nguyễn Thị Kim Ng&acirc;n. Dự kiến, nh&agrave; l&atilde;nh đạo Triều Ti&ecirc;n sẽ rời Việt Nam v&agrave;o trưa c&ugrave;ng ng&agrave;y.</p>\r\n\r\n<p>Trước đ&oacute;, trong ng&agrave;y 28/2, Chủ tịch Kim Jong Un đ&atilde; c&oacute; cuộc gặp thượng đỉnh với Tổng thống Mỹ Donald Trump. D&ugrave; được giới chuy&ecirc;n gia nhận định trước sẽ c&oacute; nhiều diễn biến t&iacute;ch cực tại cuộc gặp lần n&agrave;y giữa hai b&ecirc;n Mỹ - Triều, song kết quả cho thấy hai b&ecirc;n kh&ocirc;ng đạt được thoả thuận như mong muốn. Dự kiến c&ugrave;ng ăn trưa l&agrave;m việc giữa hai b&ecirc;n cũng như lễ k&yacute; tuy&ecirc;n bố chung cũng bị hủy bỏ.</p>\r\n\r\n<p>Kh&ocirc;ng ra được Tuy&ecirc;n bố chung v&agrave; để ngỏ việc tổ chức hội nghị thượng đỉnh lần 3 nhưng Tổng thống Mỹ Donald Trump vẫn nhấn mạnh về mối quan hệ tốt đẹp giữa Mỹ v&agrave; Triều Ti&ecirc;n, giữa &ocirc;ng với Chủ tịch Kim Jong Un. Giữa ch&uacute;ng t&ocirc;i c&oacute; khoảng c&aacute;ch nhưng kh&ocirc;ng phải l&agrave; &quot;đường ai nấy đi&quot;, vẫn cần c&oacute; th&ecirc;m thời gian, &ocirc;ng Trump trả lời tại cuộc họp b&aacute;o sau khi kết th&uacute;c hội nghị.</p>', 1, 'mô tả 3', 'tiêu đề 3', 'FM7GukWc-video.png', '2019-03-02 01:28:29', '2019-03-04 03:43:44'),
(4, '<p>n&ocirc;i dung mới</p>', 1, 'mô tả mới', 'tiêu đề mới', 'LqnRbTnY-logo.png', '2019-03-04 03:44:23', '2019-03-04 03:44:23'),
(5, '<p>1</p>', 0, '1', '1', 'iyMnTChR-Untitled.jpg', '2019-03-04 10:01:17', '2019-03-04 10:01:17');

-- --------------------------------------------------------

--
-- Table structure for table `tuyendung`
--

CREATE TABLE `tuyendung` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `noibat` tinyint(1) NOT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tieude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tuyendung`
--

INSERT INTO `tuyendung` (`id`, `noidung`, `noibat`, `mota`, `tieude`, `hinhanh`, `created_at`, `updated_at`) VALUES
(1, '<p>Tuyển 20 nh&acirc;n vi&ecirc;n IT</p>', 0, 'mô tả', 'Tuyển dụng', '6trv-Untitled.jpg', '2019-02-28 15:01:10', '2019-03-05 08:22:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, '$2y$10$VBA2QWCbRZ.M9Q3jKgyaKOxjCX7sabA15VYMy7I/6oSPiNXUuiH2y', 'PwwKJ4IisB0GbWKR8DPIYBFuyG3rDuBynboAKzAOQHYuAqNsUcrqXjbU4zXn', NULL, '2019-03-05 02:26:57');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `link`, `created_at`, `updated_at`) VALUES
(1, '<iframe width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/8Ic6aDNKVPk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2019-03-01 08:30:30', '2019-03-03 10:19:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_top`
--
ALTER TABLE `banner_top`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc2`
--
ALTER TABLE `danhmuc2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `danhmuc2_id_danhmuc2_foreign` (`id_danhmuc2`);

--
-- Indexes for table `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doitac`
--
ALTER TABLE `doitac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `duannoibat`
--
ALTER TABLE `duannoibat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `duoi_duannoibat`
--
ALTER TABLE `duoi_duannoibat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_lienhe`
--
ALTER TABLE `form_lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gioithieu`
--
ALTER TABLE `gioithieu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hinhanhphu`
--
ALTER TABLE `hinhanhphu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hinhanhphu_id_sanpham_foreign` (`id_sanpham`);

--
-- Indexes for table `hinhanhphu2`
--
ALTER TABLE `hinhanhphu2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hinhanhphu2_id_sanpham2_foreign` (`id_sanpham2`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_name_index` (`name`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sanpham_id_danhmuc_foreign` (`id_danhmuc`);

--
-- Indexes for table `sanpham2`
--
ALTER TABLE `sanpham2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sanpham2_id_danhmuc2_foreign` (`id_danhmuc2`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuyendung`
--
ALTER TABLE `tuyendung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner_top`
--
ALTER TABLE `banner_top`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `danhmuc2`
--
ALTER TABLE `danhmuc2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doitac`
--
ALTER TABLE `doitac`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `duannoibat`
--
ALTER TABLE `duannoibat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `duoi_duannoibat`
--
ALTER TABLE `duoi_duannoibat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form_lienhe`
--
ALTER TABLE `form_lienhe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gioithieu`
--
ALTER TABLE `gioithieu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hinhanhphu`
--
ALTER TABLE `hinhanhphu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hinhanhphu2`
--
ALTER TABLE `hinhanhphu2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sanpham2`
--
ALTER TABLE `sanpham2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tuyendung`
--
ALTER TABLE `tuyendung`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `danhmuc2`
--
ALTER TABLE `danhmuc2`
  ADD CONSTRAINT `danhmuc2_id_danhmuc2_foreign` FOREIGN KEY (`id_danhmuc2`) REFERENCES `danhmuc` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hinhanhphu`
--
ALTER TABLE `hinhanhphu`
  ADD CONSTRAINT `hinhanhphu_id_sanpham_foreign` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hinhanhphu2`
--
ALTER TABLE `hinhanhphu2`
  ADD CONSTRAINT `hinhanhphu2_id_sanpham2_foreign` FOREIGN KEY (`id_sanpham2`) REFERENCES `sanpham2` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_id_danhmuc_foreign` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sanpham2`
--
ALTER TABLE `sanpham2`
  ADD CONSTRAINT `sanpham2_id_danhmuc2_foreign` FOREIGN KEY (`id_danhmuc2`) REFERENCES `danhmuc2` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
