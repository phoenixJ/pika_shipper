-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2016 at 08:51 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pika_shipper`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `item_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `comission` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datec` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`id`, `uid`, `item_name`, `link`, `country`, `quantity`, `cost`, `comission`, `currency`, `datec`, `status`) VALUES
(47, 21, 'Thảm xốp', 'http://vn-live-01.slatic.net/p/4/tham-xop-2-mat-cho-be-maboshi-nhieu-mau-5624-5653952-a37fe05744121062d151ccddaeaf606c-webp-zoom.jpg', 'Ý', 5, 15000000, '120000', 'AUD', '03:18 24-12-2016', NULL),
(39, 3, 'Mi4', 'http://cdn2.gsmarena.com/vv/bigpic/xiaomi-mi-4.jpg', 'Tây Ban Nha', 2, 500000, '20000', 'AUD', '22:32 23-12-2016', 1),
(40, 5, 'Mi4', 'http://cdn2.gsmarena.com/vv/bigpic/xiaomi-mi-4.jpg', 'Ý', 2, 500000, '20000', 'AUD', '22:32 23-12-2016', NULL),
(50, 22, 'sofa Klosso', 'http://vn-live-03.slatic.net/p/3/sofa-giuong-cao-cap-klosso-m3-den-1364-7921501-ee309b629a5e86b5a3f81e66b1ddfd66-webp-zoom.jpg', 'Tây Ban Nha', 2, 80000000, '5000000', 'AUD', '03:40 24-12-2016', NULL),
(43, 5, 'Mi4', 'http://cdn2.gsmarena.com/vv/bigpic/xiaomi-mi-4.jpg', 'Ý', 2, 500000, '20000', 'USD', '22:32 23-12-2016', 0),
(48, 21, 'Giày thể thao Unisex Prospecs PS0US16S801', 'http://vn-live-03.slatic.net/p/7/giay-the-thao-unisex-prospecs-ps0us16s801-xam-5773-0644262-7702551194daa71f320c2cdb931553cc-webp-zoom_850x850.jpg', 'Mỹ', 4, 50000000, '500000', 'VND', '03:25 24-12-2016', NULL),
(49, 22, 'Túi đeo Birdybag', 'http://vn-live-03.slatic.net/p/7/tui-deo-cheo-birdybag-concept-3-big-exciting-concept-3-mini-hong-2191-9548613-304f15676fe3457220c6b576a7bade75-webp-product_340x340.jpg', 'Tây Ban Nha', 2, 500000, '250000', 'AUD', '03:28 24-12-2016', NULL),
(51, 22, 'Đồng hồ tốc độ', 'http://vn-live-02.slatic.net/p/8/bo-hien-thi-toc-do-tren-kinh-lai-hud-a8-0136-5865712-b7f00cc31aabe8031d5472b87dab7de9-webp-zoom.jpg', 'Đức', 4, 32000000, '5000000', 'VND', '03:45 24-12-2016', NULL),
(52, 22, 'Nệm massage Bella', 'http://vn-live-01.slatic.net/p/5/nem-massage-toan-than-bella-den-3651-8266221-150b1652d10adf29eb6629f341ae0831-webp-product.jpg', 'Đức', 2, 5000000, '4000000', 'VND', '03:48 24-12-2016', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `buyable`
--

CREATE TABLE `buyable` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `currentplace` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `destination` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `leweight` int(11) DEFAULT NULL,
  `item` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datec` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `buyable`
--

INSERT INTO `buyable` (`id`, `uid`, `currentplace`, `destination`, `leweight`, `item`, `datec`) VALUES
(1, 12, 'currentplace', 'destination', 23, 'item', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `phone`) VALUES
(1, 'Pikashipper', 'pika@gmail.com', '4297f44b13955235245b2497399d7a93', '133'),
(2, 'pewpew', 'pew@mail.com', '4297f44b13955235245b2497399d7a93', '19001560'),
(3, 'Nguyễn Anh Tài', 'tai@mail.com', 'b51e8dbebd4ba8a8f342190a4b9f08d7', '115'),
(4, 'Hà Quốc Sơn', 'sonha@mail.com', '1a36cff0c8da8fb25e15a585dc6c3014', '111'),
(5, 'LongLong', 'long@mail.com', '0bc651ef7626a7868da4cbfdbe70f96f', '0123232'),
(6, 'Lần Cuối Em Đi', 'emdidi@mail.com', 'da4aa33f185778526e5b757de64d497d', '0909113'),
(21, 'Jap Hien', 'hien@gmail.com', '4297f44b13955235245b2497399d7a93', '4343'),
(22, 'Thái Phong', 'phong@mail.com', '4297f44b13955235245b2497399d7a93', '114');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyable`
--
ALTER TABLE `buyable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `buyable`
--
ALTER TABLE `buyable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
