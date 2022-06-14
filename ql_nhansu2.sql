-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 14, 2022 lúc 03:04 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_nhansu2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhansu`
--

CREATE TABLE `nhansu` (
  `mans` int(11) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `gioitinh` varchar(5) NOT NULL,
  `sdt` int(10) NOT NULL,
  `diachi` varchar(1000) NOT NULL,
  `email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhansu`
--

INSERT INTO `nhansu` (`mans`, `hoten`, `gioitinh`, `sdt`, `diachi`, `email`) VALUES
(7, 'Nguyen Van C', 'aaa', 1234, 'aac', 'thanhnino140402@gmail.com1'),
(8, 'Mot Minh Tao', 'Nam', 12345678, 's', 'a');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nhansu`
--
ALTER TABLE `nhansu`
  ADD PRIMARY KEY (`mans`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nhansu`
--
ALTER TABLE `nhansu`
  MODIFY `mans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
