-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 30, 2017 lúc 03:33 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_thietbi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `codes`
--

CREATE TABLE `codes` (
  `id` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `infomation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `codes`
--

INSERT INTO `codes` (`id`, `photo`, `infomation`) VALUES
(1, 'public/images/img_qrCode/1.jpg', '1'),
(2, 'public/images/img_qrCode/2.jpg', '2'),
(3, 'public/images/img_qrCode/3.jpg', '3'),
(4, 'public/images/img_qrCode/4.jpg', '4'),
(5, 'public/images/img_qrCode/5.jpg', '5'),
(6, 'public/images/img_qrCode/6.jpg', '6'),
(7, 'public/images/img_qrCode/7.jpg', '7'),
(8, 'public/images/img_qrCode/8.jpg', '8'),
(9, 'public/images/img_qrCode/9.jpg', '9'),
(10, 'public/images/img_qrCode/10.jpg', '10'),
(11, 'public/images/img_qrCode/11.png', '11'),
(12, 'public/images/img_qrCode/12.png', '12'),
(13, 'public/images/img_qrCode/13.png', '13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `department`
--

CREATE TABLE `department` (
  `id_department` int(11) NOT NULL,
  `room_department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `department`
--

INSERT INTO `department` (`id_department`, `room_department`) VALUES
(0, 'Thực tập - Lầu 4'),
(1, 'Bảo vệ - Lầu 1'),
(2, 'Quản lý nhân sự'),
(3, 'Thư ký'),
(4, 'Chăm sóc khách hàng'),
(5, 'Kho '),
(6, 'Hỗ trợ phát triển doanh nghiệp'),
(7, 'Thể thao'),
(8, 'Đào tào nhân viên'),
(9, 'Căng tin'),
(10, 'Cà phê');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `devices`
--

CREATE TABLE `devices` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `os_name` varchar(50) NOT NULL,
  `chip_name` varchar(50) NOT NULL,
  `status` varchar(40) NOT NULL,
  `id_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `devices`
--

INSERT INTO `devices` (`id`, `name`, `os_name`, `chip_name`, `status`, `id_code`) VALUES
(1, 'Macbook Pro MJLT2', 'IOS', 'Core i7 Quad-core 2.8GHz', 'Running', 1),
(2, 'Macbook Pro MF840', 'IOS', 'Core i5 Quad-core 2.8GHz', 'Error', 2),
(3, 'Dell Latitude D630', 'Windows 10 Home', ' core i3 - 520M', 'Running', 3),
(4, 'Dell Latitude E7440', 'Windows 10 Home', '4th gen Core i7', 'Running', 4),
(5, 'Dell Latitude E7250', 'Windows 10 Home', '5th gen Core i7', 'Running', 5),
(6, 'Dell Latitude E5250', 'Windows 10 Home', '5th gen Celeron Core i7', 'Running', 6),
(7, 'Dell Latitude E3550', 'Windows 10 Home', '5th gen Celeron Core i5', 'Running', 7),
(8, 'Dell Latitude E7275', 'Windows 10 Home', '6th gen Core m7', 'Error', 8),
(9, 'Dell XT2 XFR', 'Windows 10 Home', 'Fully Rugged (Core2Duo ULV)', 'Error', 9),
(10, 'Dell E3570', 'Windows 10 Home', 'Celeron Core i7', 'Error', 10),
(15, 'Laptop', 'Window 10', 'Core I3', '', 11),
(16, 'Chiu chet', 'Chiu chet', 'IOS', 'Pham Dang Hoang', 12),
(17, 'Yyyyy', 'xxxxx', 'oooo', 'Pham Dang Hoang', 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `display`
--

CREATE TABLE `display` (
  `id_display` varchar(20) NOT NULL,
  `display` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `birth_day` date NOT NULL,
  `id_code` int(11) NOT NULL,
  `id_department` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `employees`
--

INSERT INTO `employees` (`id`, `name`, `birth_day`, `id_code`, `id_department`) VALUES
(0, 'Phạm Đăng Hoàng', '1996-10-19', 1, 1),
(2, 'Đậu Thị Kim Oanh', '1996-04-16', 2, 4),
(3, 'Nguyễn Phúc Tài', '1996-02-02', 3, 4),
(4, 'Hoàng Văn Thuần', '1996-09-04', 4, 10),
(5, 'Lê Tiến Phát', '1996-03-04', 5, 5),
(6, 'Phan Nhựt Cường', '1996-01-12', 6, 8),
(7, 'Phạm Công Huấn', '1996-11-18', 7, 3),
(8, 'Đỗ Nhật Kha', '1996-02-05', 8, 5),
(9, 'Nguyễn Phi Thủ', '1996-03-08', 9, 6),
(10, 'Nguyễn Thành Toản', '1996-08-03', 10, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `email`) VALUES
(2, 'hoang6896vn0101', '123', '14520315@gm.uit.edu.vn'),
(1, 'nhomthuctap', 'nhomthuctap', 'nhomthuctap@gmail.com'),
(3, 'phat123', 'u888j', '14520655@gm.uit.edu.vn');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id_department`);

--
-- Chỉ mục cho bảng `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_code` (`id_code`);

--
-- Chỉ mục cho bảng `display`
--
ALTER TABLE `display`
  ADD PRIMARY KEY (`id_display`);

--
-- Chỉ mục cho bảng `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_code` (`id_code`),
  ADD KEY `id_department` (`id_department`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_name`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT cho bảng `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `devices`
--
ALTER TABLE `devices`
  ADD CONSTRAINT `devices_ibfk_1` FOREIGN KEY (`id_code`) REFERENCES `codes` (`id`);

--
-- Các ràng buộc cho bảng `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`id_code`) REFERENCES `codes` (`id`),
  ADD CONSTRAINT `employees_ibfk_2` FOREIGN KEY (`id_department`) REFERENCES `department` (`id_department`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
