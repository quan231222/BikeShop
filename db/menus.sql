-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 03, 2021 lúc 12:23 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bikeshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `name`, `parent_id`, `description`, `content`, `active`, `created_at`, `updated_at`) VALUES
(19, 'Phụ Kiện', 0, 'Các loại phụ kiện dành cho bạn', '<p>C&aacute;c loại phụ kiện d&agrave;nh cho bạn</p>', 1, '2021-10-31 05:46:53', '2021-10-31 05:46:53'),
(20, 'Nón bảo hiểm', 0, 'Các loại nón bảo hiểm dành cho bạn', '<p>C&aacute;c loại n&oacute;n bảo hiểm d&agrave;nh cho bạn</p>', 1, '2021-10-31 05:57:17', '2021-10-31 05:57:17'),
(21, 'Xe máy', 0, 'Các dòng xe từ các hãng', '<p>C&aacute;c d&ograve;ng xe từ c&aacute;c h&atilde;ng</p>', 1, '2021-10-31 05:58:18', '2021-10-31 05:58:18'),
(22, 'Honda', 21, 'Một hãng xe', '<p>Một h&atilde;ng xe&nbsp;</p>', 1, '2021-10-31 20:55:19', '2021-10-31 20:55:19'),
(23, 'Yamaha', 21, 'Một hãng xe', '<p>Một h&atilde;ng xe</p>', 1, '2021-11-03 02:35:01', '2021-11-03 02:35:01'),
(24, 'SYM', 21, 'Một hãng xe', '<p>Một h&atilde;ng xe</p>', 1, '2021-11-03 02:35:16', '2021-11-03 03:14:09'),
(25, 'Suziki', 21, 'Một hãng xe', '<p>Một h&atilde;ng xe</p>', 1, '2021-11-03 02:35:33', '2021-11-03 03:13:58'),
(26, 'Napoli', 20, 'Một hãng nón bảo hiểm', '<p>Một h&atilde;ng n&oacute;n bảo hiểm</p>', 1, '2021-11-03 02:37:43', '2021-11-03 02:39:53'),
(27, 'Royal', 20, 'Một hãng nón bảo hiểm', '<p>Một h&atilde;ng n&oacute;n bảo hiểm</p>', 1, '2021-11-03 02:40:18', '2021-11-03 02:40:18'),
(28, 'Givi', 20, 'Một hãng nón bảo hiểm', '<p>Một h&atilde;ng n&oacute;n bảo hiểm</p>', 1, '2021-11-03 02:40:52', '2021-11-03 03:13:50');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
