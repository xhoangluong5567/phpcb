-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 12, 2020 lúc 11:48 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Macbook'),
(2, 'Iphone'),
(3, 'Ipad'),
(4, 'Watch');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_username` varchar(50) DEFAULT NULL,
  `customer_password` varchar(50) DEFAULT NULL,
  `customer_email` varchar(80) DEFAULT NULL,
  `customer_verified` tinyint(1) DEFAULT NULL,
  `customer_createdate` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `product_name` varchar(250) DEFAULT NULL,
  `product_price` double DEFAULT NULL,
  `product_image` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 1, 'Macbook Air 2015', 15000000, 'mb.jpg'),
(2, 1, 'Macbook Pro 2018', 20000000, 'mb1.jpg'),
(3, 1, 'Macbook Pro 2020', 30000000, 'mb3.jpg'),
(4, 1, 'Macbook Air 2017', 19000000, 'mb2.jpg'),
(5, 1, 'Macbook Air 2020', 25000000, 'mb4.jpg'),
(6, 2, 'Iphone 11 Pro Max (Black)', 20000000, 'ip1.png'),
(7, 2, 'Iphone 11 Pro Max (Gold)', 25000000, 'ip2.jpg'),
(8, 2, 'Iphone 11 Pro Max (White)', 25000000, 'ip3.jpg'),
(9, 2, 'Iphone Xs (White)', 15000000, 'ip4.png'),
(10, 2, 'Iphone Xs Max (Gold)', 25000000, 'ip5.jpg'),
(11, 2, 'Iphone 11 (Green)', 26000000, 'ip6.jpg'),
(12, 3, 'Ipad Gen 7  ', 15000000, 'ipad.png'),
(13, 3, 'Ipad Mini', 12000000, 'ipad1.png'),
(14, 3, 'Ipad Pro 2020', 18000000, 'ipad2.jpg'),
(15, 3, 'Ipad Pro 11', 11000000, 'ipad3.png'),
(16, 3, 'Ipad Mini 2', 1500000, 'ipad4.jpg'),
(17, 3, 'Ipad Mini 4', 1600000, 'ipad5.jpg'),
(18, 4, 'Apple Watch S5 44mm', 1200000, 'watch1.jpg'),
(19, 4, 'Apple Watch S5 GPS', 1300000, 'watch2.jpg'),
(20, 4, 'Apple Watch Series 4 ', 1500000, 'watch3.jpg'),
(21, 4, 'Apple Watch S5 40mm', 1100000, 'watch4.png'),
(22, 4, 'Apple Watch Series 5', 1500000, 'watch5.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(150) CHARACTER SET utf8 NOT NULL,
  `fullname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `birthday` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_time` int(11) DEFAULT NULL,
  `last_updated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `birthday`, `status`, `created_time`, `last_updated`) VALUES
(1, 'admin', 'f727173ceeddfb3ee74056cfa31648df', 'Hoàng Lương', 55621515, 0, NULL, 1591874514),
(2, 'xhoangluong', 'e10adc3949ba59abbe56e057f20f883e', 'Luong ', 915318000, 1, 1591874711, 1591874711);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_category_id` (`category_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
