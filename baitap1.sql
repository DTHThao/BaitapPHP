-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 15, 2019 lúc 08:19 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `baitap1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblusers`
--

CREATE TABLE `tblusers` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tblusers`
--

INSERT INTO `tblusers` (`Id`, `UserName`, `Address`, `Email`) VALUES
(6, 'namtom', '1/164 Nguyễn Ngọc Nại, Thanh Xuân, Hà Nội', 'sdfs@gmail.com'),
(7, 'huongthao', 'Tam Điệp, Ninh Bình', 'huongthaonb24@gmail.com'),
(9, 'abc', 'Tam Điệp, Ninh Bình', 'fdhf@gmail.com'),
(11, 'huongthao123', 'Tam Điệp, Ninh Bình', 'huongthaonb24@gmail.com'),
(12, 'huongthao123', 'Tam Điệp, Ninh Bình', 'huongthaonb24@gmail.com'),
(13, 'thaohap2404', 'Tam Điệp, Ninh Bình', 'huongthaonb24@gmail.com'),
(14, 'huongthao', 'Tam Điệp, Ninh Bình', 'huongthaonb24@gmail.com'),
(15, 'thaohap2404', 'Tam Điệp, Ninh Bình', 'huongthaonb24@gmail.com'),
(16, 'ptit01', 'gdged', 'dangnamcd@gmail.com'),
(17, 'ptit01', 'gdged', 'dangnamcd@gmail.com'),
(18, 'ptit01', 'gdged', 'dangnamcd@gmail.com'),
(19, 'ptitt', 'Hà Đông, Hà Nội', 'ptit.edu@gmail.com'),
(20, 'ptitt', 'Hà Đông, Hà Nội', 'ptit.edu@gmail.com'),
(21, 'thaohap2404', 'Tam Điệp, Ninh Bình', 'huongthaonb24@gmail.com'),
(22, 'PTIT11', 'Hà Đông, Hà Nội', 'ptit.edu@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
