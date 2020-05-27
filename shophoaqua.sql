-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2019 at 05:24 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shophoaqua`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `fullname` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `vaitro` int(11) NOT NULL,
  `avatar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `fullname`, `vaitro`, `avatar`) VALUES
(1, 'admin', '$2y$10$WvFV/kX9FX00lNjp2x6tx.Gr34H4hIVOTbIrj0A10mD0qRq3Q8WSG', 'Trần Quang Huy', 1, 'default.png'),
(3, 'gindepzai', '$2y$10$WvFV/kX9FX00lNjp2x6tx.Gr34H4hIVOTbIrj0A10mD0qRq3Q8WSG', 'Trần Quang Huy', 0, 'default.png'),
(4, 'huydepzai', '$2y$10$WvFV/kX9FX00lNjp2x6tx.Gr34H4hIVOTbIrj0A10mD0qRq3Q8WSG', '', 0, 'default.png\r\n'),
(6, 'kanghy', '$2y$10$ejm/.MXTfwrCgMdcNQU3Tez3ZGLPieT2Mxzrc1Hsw.aJcZwOsFF.m', 'Đoàn Thủy Tiên', 0, '1.jpg'),
(7, 'taikhoantest', '$2y$10$zdFEAY2q8iMTr/dvXHr3.eBsqTnxqxV8Qx7VHa/G5coz9iCv7YlU6', 'Tôi Vô Danh', 0, ''),
(8, 'abcxyz', '$2y$10$71cFTdv104DVf7cZ3319OekfjVr7kzsCZyV5bjf36N6.y4/33oCL6', 'sfsdfsd', 0, 'default.jpg'),
(9, 'huydaik', '$2y$10$Hl1pnJTmymQd2FIysmDb2esJgbDEiaLn3isiZ94OEadbtauFfBo.O', '', 0, 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `ma_bl` int(11) NOT NULL,
  `noidung` varchar(128) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `ngay_bl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(128) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `giam_gia` int(11) NOT NULL,
  `hinh` varchar(128) NOT NULL,
  `ngay_nhap` date NOT NULL,
  `ma_loai` int(11) NOT NULL,
  `dac_biet` bit(1) NOT NULL,
  `so_luot_xem` int(11) NOT NULL,
  `mo_ta` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `ma_loai`, `dac_biet`, `so_luot_xem`, `mo_ta`) VALUES
(2, 'TÃƒÂ¡o Trung QuÃ¡Â»â€˜c', 150000, 10, 'tao.jpg', '2018-09-17', 3, b'1', 49, ' TÃƒÂ¡o xuÃ¡ÂºÂ¥t khÃ¡ÂºÂ©u tÃ¡Â»Â« Trung QuÃ¡Â»â€˜c, tiÃƒÂªm hÃƒÂ³a chÃ¡ÂºÂ¥t cÃ¡Â»Â±c Ã„â€˜Ã¡Â»â„¢c, mua vÃ¡Â»Â Ã„â€˜Ã¡Â»Æ’ d'),
(3, 'ChuÃ¡Â»â€˜i TÃƒÂ¢y', 130000, 0, 'chuoi.jpg', '2018-09-17', 3, b'1', 4, ' ChuÃ¡Â»â€˜i tÃƒÂ¢y to hÃ†Â¡n chuÃ¡Â»â€˜i ta, Ã„Æ’n gÃƒÂ¬ bÃ¡Â»â€¢ nÃ¡ÂºÂ¥y!'),
(4, 'Nho MÃ¡Â»Â¹', 60000, 10, 'nho.jpg', '2018-09-17', 3, b'1', 4, ' Nho MÃ¡Â»Â¹ Tho, cÃ¡Â»Â±c ngon cÃ¡Â»Â±c rÃ¡ÂºÂ», khÃƒÂ´ng dÃƒÂ¹ng chÃ¡ÂºÂ¥t kÃƒÂ­ch thÃƒÂ­ch.'),
(5, '1', 1, 1, '1', '2018-09-18', 1, b'1', 0, ' 1');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `ma_kh` int(11) NOT NULL,
  `ho_ten` varchar(128) NOT NULL,
  `mat_khau` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `hinh` varchar(128) NOT NULL,
  `kich_hoat` varchar(128) NOT NULL,
  `vai_tro` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `tenloai` varchar(128) NOT NULL,
  `ma_loai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(128) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `img` varchar(128) NOT NULL,
  `price` varchar(20) NOT NULL,
  `id_type` int(2) NOT NULL,
  `description` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `count` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `img`, `price`, `id_type`, `description`, `count`) VALUES
(7, 'Xoài Tượng Bắc Ninh', 'xoai.jpg', '20000', 1, 'Xoài tượng được hái tại vườn thơm ngon ', 90),
(8, 'Thịt lợn siêu nạc ', 'thitlon.jpg', '40000', 2, 'Thịt lợn nuôi không dùng cám tăng trọng, đảm bảo an toàn sức khỏe cho mọi người', 200),
(9, 'Cam sành Hương Khê', 'cam.jpg', '30000', 1, 'Cam Sành ăn cực ngon cực ngọt', 20),
(10, 'Cá rô phi đồng', 'carophi.jpg', '20000', 2, 'Cá rô phi được đánh bắt tại đồng ruộng, hoàn toàn tự nhiên, thịt cực thơm ngon.', 500),
(11, 'Thịt bò rừng', 'thitbo.jpg', '1000000', 2, 'Bò rừng được đánh bắt tự nhiên , thịt vô cùng thơm ngon', 20),
(12, 'Nho Đen Không Hạt', 'nho.jpg', '200000', 1, 'Nho Đen Không Hạt xuất sứ từ Mỹ ... Tho. Cực kì đen, à nhầm cực kì ngon', 10000),
(18, 'Chuối tây', 'chuoi.jpg', '20000', 1, 'Chuối tây rất ngon và vàng', 200),
(19, 'Tôm hùm', 'tomhum.jpg', '200000', 4, 'Tôm hùm đánh bắt ở biển Quảng Ngãi', 80),
(20, 'Cá Ba Sa', 'cabasa.jpg', '150000', 4, 'Cá Ba Sa do ngư dân Quảng Bình đánh bắt', 100),
(21, 'Cá tra', 'catra.jpg', '100000', 4, 'Cá tra cực ngon bắt ở biển Phan Thiết', 90),
(22, 'Mực', 'muc.jpg', '300000', 4, 'Mực được bắt ở biển Đà Nẵng', 50),
(23, 'Táo Trung Quốc', 'tao.jpg', '30000', 1, 'Táo do Trung Quốc trồng không chất kích thích', 200);

-- --------------------------------------------------------

--
-- Table structure for table `type_product`
--

CREATE TABLE `type_product` (
  `id` int(2) NOT NULL,
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `type_product`
--

INSERT INTO `type_product` (`id`, `name`) VALUES
(1, 'Hoa Quả'),
(2, 'Các loại thịt'),
(4, 'Hải Sản');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`ma_bl`);

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`ma_hh`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `type_product`
--
ALTER TABLE `type_product`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
