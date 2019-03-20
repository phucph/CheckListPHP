-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 20, 2019 lúc 06:29 PM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `checklist`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `file`
--

CREATE TABLE `file` (
  `file_id` int(10) NOT NULL,
  `name_file` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_path` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tab`
--

CREATE TABLE `tab` (
  `tab_id` int(10) NOT NULL,
  `tab_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tab_parent` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `deadline` datetime NOT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `checked` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tab`
--

INSERT INTO `tab` (`tab_id`, `tab_name`, `tab_parent`, `created`, `deadline`, `note`, `checked`) VALUES
(1, 'tab1', 0, '2019-03-19 04:36:51', '2019-03-19 04:36:00', ' noi dung tap 1', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tabfile`
--

CREATE TABLE `tabfile` (
  `file_id` int(10) NOT NULL,
  `tab_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Hoten` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `Hoten`) VALUES
(1, 'phuc@123.com', '$2y$10$Bv91xRDbXNjh8yMsigMqdODQzsaVK0wt6ZTOaZ7.4rwWjHf64LS22', 'Phan Hong Phuc'),
(2, 'phuctp14@gmail.com', '241198', 'phuc'),
(3, 'a@gmail.com', '$2y$10$mozQ/2mpMxi3vr/8Qi/uEe.n2ykyOivvfmrq2TiEoh3a6gqi4k1K6', 'Phuc Hong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `usertab`
--

CREATE TABLE `usertab` (
  `user_id` int(10) NOT NULL,
  `tab_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `usertab`
--

INSERT INTO `usertab` (`user_id`, `tab_id`) VALUES
(1, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`file_id`);

--
-- Chỉ mục cho bảng `tab`
--
ALTER TABLE `tab`
  ADD PRIMARY KEY (`tab_id`);

--
-- Chỉ mục cho bảng `tabfile`
--
ALTER TABLE `tabfile`
  ADD PRIMARY KEY (`file_id`,`tab_id`),
  ADD KEY `tab_id` (`tab_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `usertab`
--
ALTER TABLE `usertab`
  ADD PRIMARY KEY (`user_id`,`tab_id`),
  ADD KEY `tab_id` (`tab_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `file`
--
ALTER TABLE `file`
  MODIFY `file_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tab`
--
ALTER TABLE `tab`
  MODIFY `tab_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `usertab`
--
ALTER TABLE `usertab`
  MODIFY `tab_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tabfile`
--
ALTER TABLE `tabfile`
  ADD CONSTRAINT `tabfile_ibfk_1` FOREIGN KEY (`file_id`) REFERENCES `file` (`file_id`),
  ADD CONSTRAINT `tabfile_ibfk_2` FOREIGN KEY (`tab_id`) REFERENCES `tab` (`tab_id`);

--
-- Các ràng buộc cho bảng `usertab`
--
ALTER TABLE `usertab`
  ADD CONSTRAINT `usertab_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `usertab_ibfk_2` FOREIGN KEY (`tab_id`) REFERENCES `tab` (`tab_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
