-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 25, 2020 lúc 06:12 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `aca`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `schedules`
--

CREATE TABLE `schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_location` int(10) UNSIGNED NOT NULL,
  `id_teacher` int(10) UNSIGNED NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time1` date DEFAULT NULL,
  `day` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `booking` int(10) UNSIGNED DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'None',
  `author` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `schedules`
--

INSERT INTO `schedules` (`id`, `id_location`, `id_teacher`, `class`, `time`, `time1`, `day`, `created_at`, `updated_at`, `booking`, `status`, `author`) VALUES
(46, 1, 1, 'rwer', '08:00 - 08:40', NULL, 'Monday', '2020-09-08 09:37:23', '2020-09-08 09:37:23', 1, 'None', 1),
(47, 1, 1, NULL, '08:00 - 08:40', NULL, 'Monday', '2020-09-08 10:38:01', '2020-09-08 10:41:25', 1, 'None', 1),
(48, 1, 1, '6a4', '08:00 - 08:40', NULL, 'Monday', '2020-09-08 11:55:40', '2020-09-08 11:56:04', 1, 'None', 1),
(49, 1, 1, NULL, '08:00 - 08:40', NULL, 'Monday', '2020-09-08 11:57:02', '2020-09-08 11:57:29', 1, 'None', 1),
(52, 1, 1, NULL, '08:00 - 08:40', NULL, 'Monday', '2020-09-09 08:52:52', '2020-09-10 09:19:18', 1, 'None', 1),
(53, 1, 1, NULL, '08:00 - 08:40', NULL, 'Monday', '2020-09-10 09:08:19', '2020-09-10 10:41:49', 1, 'None', 1),
(54, 3, 10, '5I', '8:45 - 9:25', NULL, 'Monday', '2020-09-14 07:55:39', '2020-09-14 08:42:19', 1, 'None', 1),
(55, 1, 1, NULL, '08:00 - 08:40', NULL, 'Monday', '2020-09-14 08:47:34', '2020-09-14 09:15:22', 1, 'None', 1),
(56, 1, 1, NULL, '08:00 - 08:40', NULL, 'Monday', '2020-09-14 09:27:01', '2020-09-14 09:27:01', NULL, 'None', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedules_id_location_foreign` (`id_location`),
  ADD KEY `schedules_id_teacher_foreign` (`id_teacher`),
  ADD KEY `schedules_booking_foreign` (`booking`),
  ADD KEY `schedules_author_foreign` (`author`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_author_foreign` FOREIGN KEY (`author`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schedules_booking_foreign` FOREIGN KEY (`booking`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schedules_id_location_foreign` FOREIGN KEY (`id_location`) REFERENCES `addresses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schedules_id_teacher_foreign` FOREIGN KEY (`id_teacher`) REFERENCES `teachers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
