-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2017 at 01:50 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php15_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `pk_category_product_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`pk_category_product_id`, `c_name`) VALUES
(1, 'Sữa Vinamilk'),
(2, 'Sữa Alaska'),
(3, 'Sữa Nutifood'),
(4, 'Sữa XO'),
(5, 'Sữa Abbott'),
(6, 'Sữa Zin Zin'),
(7, 'Sữa Mộc Châu'),
(9, 'Sữa Ông Thọ'),
(10, 'Sữa chua uống'),
(11, 'Sữa tươi nguyên chất'),
(12, 'Fomat Con bò cười'),
(13, 'Bơ các loại'),
(14, 'Sản phẩm khác');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_counter`
--

CREATE TABLE `tbl_counter` (
  `counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_counter`
--

INSERT INTO `tbl_counter` (`counter`) VALUES
(120);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `hovaten` varchar(500) NOT NULL,
  `diachi` varchar(2000) NOT NULL,
  `dienthoai` varchar(200) NOT NULL,
  `ghichu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `hovaten`, `diachi`, `dienthoai`, `ghichu`) VALUES
(18, 'Nguyễn Văn A', 'Ha noi', '12345678', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `pk_news_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `c_description` varchar(20000) NOT NULL,
  `c_content` text NOT NULL,
  `c_img` varchar(500) NOT NULL,
  `c_hotnews` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`pk_news_id`, `c_name`, `c_description`, `c_content`, `c_img`, `c_hotnews`) VALUES
(2, 'Giá nguyên liệu sữa nhập khẩu tiếp tục tăng cao@', '<p>Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.</p>\r\n', '<p>Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.&nbsp;Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.&nbsp;Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.</p>\r\n', '1484744380anh_1.jpg', 1),
(3, 'Giá nguyên liệu sữa nhập khẩu tiếp tục tăng cao 1', '<p>Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.</p>\r\n', '<p>Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.&nbsp;Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.&nbsp;Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.</p>\r\n', '1484745113anh_2.jpg', 1),
(4, 'Giá nguyên liệu sữa nhập khẩu tiếp tục tăng cao 2', '<p>Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.</p>\r\n', '<p>Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.&nbsp;Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.&nbsp;Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.</p>\r\n', '1484745121anh_3.jpg', 1),
(5, 'Giá nguyên liệu sữa nhập khẩu tiếp tục tăng cao 3', '<p>Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.</p>\r\n', '<p>Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.&nbsp;Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.&nbsp;Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.</p>\r\n', '1484745131anh_4.jpg', 1),
(6, 'Giá nguyên liệu sữa nhập khẩu tiếp tục tăng cao 4', '<p>Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.</p>\r\n', '<p>Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.&nbsp;Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.&nbsp;Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.</p>\r\n', '1484745140anh_5.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `ngaymua` date NOT NULL,
  `gia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `ngaymua`, `gia`) VALUES
(1, 18, '2017-01-06', 6000000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `fk_product_id` int(11) NOT NULL,
  `c_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`order_detail_id`, `order_id`, `fk_product_id`, `c_number`) VALUES
(1, 1, 13, 1),
(2, 1, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pk_product_id` int(11) NOT NULL,
  `fk_category_product_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `c_description` varchar(2000) NOT NULL,
  `c_content` text NOT NULL,
  `c_img` varchar(500) NOT NULL,
  `c_price` float NOT NULL DEFAULT '0',
  `c_hotproduct` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`pk_product_id`, `fk_category_product_id`, `c_name`, `c_description`, `c_content`, `c_img`, `c_price`, `c_hotproduct`) VALUES
(4, 3, 'Sản phẩm 1@', '<p>C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh</p>\r\n', '<p>C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh</p>\r\n', '1486898351product-lager.gif', 1000000, 0),
(5, 4, 'Sản phẩm 2', '<p>C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh</p>\r\n', '<p>C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh</p>\r\n', '1486898344anh_8.jpg', 2000000, 1),
(6, 1, 'Sản phẩm 3', '<p>C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh</p>\r\n', '<p>C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh</p>\r\n', '1486898337anh_7.jpg', 3000000, 1),
(7, 1, 'Sản phẩm 4', '<p>C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh</p>\r\n', '<p>C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;</p>\r\n', '1486898328anh_6.jpg', 3000000, 1),
(9, 3, 'Sản phẩm 5', '<p>C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh</p>\r\n', '<p>C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh</p>\r\n', '1486898321anh_5.jpg', 2000000, 1),
(11, 1, 'Sản phẩm 6', '<p>C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh</p>\r\n', '<p>C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh</p>\r\n', '1486898311anh_4.jpg', 3000000, 1),
(12, 1, 'Sản phẩm 7', '<p>C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh</p>\r\n', '<p>C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh</p>\r\n', '1486898302anh_3.jpg', 4000000, 1),
(13, 1, 'Sản phẩm 8', '<p>C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh</p>\r\n', '<p>C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh&nbsp;C&oacute; nhiều hương vị tr&aacute;i c&acirc;y tự nhi&ecirc;n: d&acirc;u, sầu ri&ecirc;ng, cốm, dừa, khoai m&ocirc;n, đậu xanh</p>\r\n', '1486898293anh_2.jpg', 2000000, 1),
(14, 2, 'Sản phẩm 9', '<p>H&ocirc;m qua, MU đ&atilde; gi&agrave;nh chiến thắng quan trọng với tỷ số 2-0 trước Watford. Trong đ&oacute;, Juan Mata v&agrave; Anthony Martial l&agrave; những người lập c&ocirc;ng cho MU ở trận đấu n&agrave;y. Ngo&agrave;i việc gi&agrave;nh 3 điểm để tiếp tục b&aacute;m đuổi những đội xếp tr&ecirc;n, chiến thắng n&agrave;y c&ograve;n gi&uacute;p MU c&aacute;n cột mốc đặc biệt.</p>\r\n', '<p>H&ocirc;m qua, MU đ&atilde; gi&agrave;nh chiến thắng quan trọng với tỷ số 2-0 trước Watford. Trong đ&oacute;, Juan Mata v&agrave; Anthony Martial l&agrave; những người lập c&ocirc;ng cho MU ở trận đấu n&agrave;y. Ngo&agrave;i việc gi&agrave;nh 3 điểm để tiếp tục b&aacute;m đuổi những đội xếp tr&ecirc;n, chiến thắng n&agrave;y c&ograve;n gi&uacute;p MU c&aacute;n cột mốc đặc biệt.&nbsp;H&ocirc;m qua, MU đ&atilde; gi&agrave;nh chiến thắng quan trọng với tỷ số 2-0 trước Watford. Trong đ&oacute;, Juan Mata v&agrave; Anthony Martial l&agrave; những người lập c&ocirc;ng cho MU ở trận đấu n&agrave;y. Ngo&agrave;i việc gi&agrave;nh 3 điểm để tiếp tục b&aacute;m đuổi những đội xếp tr&ecirc;n, chiến thắng n&agrave;y c&ograve;n gi&uacute;p MU c&aacute;n cột mốc đặc biệt.&nbsp;H&ocirc;m qua, MU đ&atilde; gi&agrave;nh chiến thắng quan trọng với tỷ số 2-0 trước Watford. Trong đ&oacute;, Juan Mata v&agrave; Anthony Martial l&agrave; những người lập c&ocirc;ng cho MU ở trận đấu n&agrave;y. Ngo&agrave;i việc gi&agrave;nh 3 điểm để tiếp tục b&aacute;m đuổi những đội xếp tr&ecirc;n, chiến thắng n&agrave;y c&ograve;n gi&uacute;p MU c&aacute;n cột mốc đặc biệt.</p>\r\n', '1486898199anh_1.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `pk_user_id` int(11) NOT NULL,
  `c_username` varchar(500) NOT NULL,
  `c_password` varchar(500) NOT NULL,
  `c_fullname` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`pk_user_id`, `c_username`, `c_password`, `c_fullname`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'Nguyễn Văn B@'),
(2, 'admin1', '202cb962ac59075b964b07152d234b70', 'Nguyễn Văn B@123'),
(3, 'admin2', '202cb962ac59075b964b07152d234b70', 'Nguyễn Văn B@'),
(4, 'admin3', '202cb962ac59075b964b07152d234b70', 'Nguyễn Văn B@'),
(5, 'admin4', '202cb962ac59075b964b07152d234b70', 'Nguyễn Văn B@'),
(7, 'abc', '202cb962ac59075b964b07152d234b70', 'Nguyễn Văn B@');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_useronline`
--

CREATE TABLE `tbl_useronline` (
  `pk_useronline_id` int(11) NOT NULL,
  `session_id` varchar(500) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_useronline`
--

INSERT INTO `tbl_useronline` (`pk_useronline_id`, `session_id`, `time`) VALUES
(7, 'ajif270i754obrh5pt6m87nan1', 1487161856);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`pk_category_product_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`pk_news_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pk_product_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`pk_user_id`);

--
-- Indexes for table `tbl_useronline`
--
ALTER TABLE `tbl_useronline`
  ADD PRIMARY KEY (`pk_useronline_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `pk_category_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `pk_news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pk_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `pk_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_useronline`
--
ALTER TABLE `tbl_useronline`
  MODIFY `pk_useronline_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
