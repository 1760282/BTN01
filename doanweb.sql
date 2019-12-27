-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 27, 2019 lúc 03:19 PM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doanweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `userID` int(10) NOT NULL,
  `createAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `content`, `userID`, `createAt`) VALUES
(1, 'Sống Chậm lại. Cảm Nhận và yêu thương nhiều hơn!!', 1, '2019-11-30 11:00:00'),
(2, 'Cuộc sống tươi đẹp <3', 1, '2019-12-01 11:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `status` int(16) NOT NULL,
  `code` varchar(16) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `mimebia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `anhbia` mediumblob NOT NULL,
  `mimeava` varchar(255) NOT NULL,
  `avatar` mediumblob NOT NULL,
  `bietdanh` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `tieusu` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `quequan` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `workplace` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `phonenumber` varchar(12) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `gioitinh` varchar(5) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `ngaysinh` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `status`, `code`, `mimebia`, `anhbia`, `mimeava`, `avatar`, `bietdanh`, `tieusu`, `quequan`, `address`, `workplace`, `phonenumber`, `gioitinh`, `ngaysinh`) VALUES
(1, 'Nguyễn Thị Hiền Diệu', 'nthd3009@gmail.com', '$2y$10$TLeDBri.da/R8oJF22yJAu3JwhrCjSmDgRK/EAHfA0ljTLuw7nTnC', 1, '2iOTPFUsycvgdS6v', 'image/jpeg', '', 'image/jpeg', '', 'Dẹo', 'Hi! Luôn Mỉm Cười Nhé', 'BRVT', 'TP.HCM', 'ĐHKHTN-ĐHQG TP.HCM', '0339185311', 'Nữ', '30/09/1999'),
(2, 'a@gmail.com', 'a@gmail.com', '$2y$10$xvCiM0.kC9YRTr69mCybuuVCkW7Jap8giAVsJWAR8YZZre/wWa/X.', 0, 'LiSMMDtPA1F5fpf1', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
