-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 30, 2020 lúc 01:14 PM
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
-- Cơ sở dữ liệu: `olympia`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `addresses`
--

INSERT INTO `addresses` (`id`, `name`, `slug_name`, `address`, `created_at`, `updated_at`) VALUES
(1, '[HN]_NTH', 'hn_nth', NULL, NULL, NULL),
(2, '[HN]_GP', 'hn_gp', NULL, NULL, NULL),
(3, '[HN]_MC1', 'hn_mc1', NULL, NULL, NULL),
(4, '[HN]_MC2', 'hn_mc2', NULL, NULL, NULL),
(5, '[HN]_DTD1', 'hn_dtd1', NULL, NULL, NULL),
(6, '[HN]_DTD2', 'hn_dtd1', NULL, NULL, NULL),
(7, '[HCM]_CENTER', NULL, NULL, NULL, NULL),
(8, 'Olympia', 'olympia', NULL, '2020-08-12 03:11:58', '2020-08-12 03:11:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `days`
--

CREATE TABLE `days` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `days`
--

INSERT INTO `days` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Monday', '2020-08-03 03:32:29', '2020-08-03 03:32:50'),
(2, 'Tuesday', '2020-08-03 03:32:29', '2020-08-03 03:32:29'),
(3, 'Wednesday', '2020-08-03 03:32:29', '2020-08-03 03:32:29'),
(4, 'Thursday', '2020-08-03 03:32:29', '2020-08-03 03:32:29'),
(5, 'Friday', '2020-08-03 03:32:29', '2020-08-03 03:32:29'),
(6, 'Saturday', NULL, NULL),
(7, 'Sunday', '2020-08-03 03:35:25', '2020-08-03 03:35:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `default_schedules`
--

CREATE TABLE `default_schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `address_id` int(10) UNSIGNED DEFAULT NULL,
  `day_id` int(10) UNSIGNED DEFAULT NULL,
  `session_id` int(10) UNSIGNED DEFAULT NULL,
  `teacher_id` int(10) UNSIGNED DEFAULT NULL,
  `dclass` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `default_schedules`
--

INSERT INTO `default_schedules` (`id`, `address_id`, `day_id`, `session_id`, `teacher_id`, `dclass`, `created_at`, `updated_at`) VALUES
(117, 3, 1, 2, 10, '5I', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(118, 3, 1, 2, 16, '2P1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(119, 3, 1, 2, 14, '3M2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(120, 3, 1, 2, 15, '3P1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(121, 3, 1, 3, 10, '5M1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(122, 3, 1, 3, 16, '1P2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(123, 3, 1, 3, 14, '4I', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(124, 3, 1, 3, 15, '3G', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(125, 3, 1, 4, 10, '5M1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(126, 3, 1, 4, 16, '1P2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(127, 3, 1, 4, 14, '4I', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(128, 3, 1, 5, 10, '5P1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(129, 3, 1, 5, 16, '1M1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(130, 3, 1, 5, 14, '3P2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(131, 3, 1, 5, 15, '1I', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(132, 3, 1, 6, 16, '1M1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(133, 3, 1, 6, 14, '3P2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(134, 3, 1, 6, 15, '1I', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(135, 3, 2, 1, 10, '5M2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(136, 3, 2, 1, 16, '1M2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(137, 3, 2, 1, 14, '4G', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(138, 3, 2, 1, 15, '1G', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(139, 3, 2, 2, 10, '5M2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(140, 3, 2, 2, 16, '1M2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(141, 3, 2, 2, 15, '1G', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(142, 3, 2, 3, 10, '5G', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(143, 3, 2, 3, 16, '2G', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(144, 3, 2, 3, 14, '4M1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(145, 3, 2, 3, 15, '3I', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(146, 3, 2, 4, 10, '5G', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(147, 3, 2, 4, 16, '2P2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(148, 3, 2, 4, 14, '4M1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(149, 3, 2, 5, 10, '2M1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(150, 3, 2, 5, 16, '1P1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(151, 3, 2, 5, 14, '4P1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(152, 3, 2, 6, 10, '2M1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(153, 3, 2, 6, 16, '1P1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(154, 3, 2, 6, 14, '4P1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(155, 3, 3, 1, 10, '5P1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(156, 3, 3, 1, 16, '1M1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(157, 3, 3, 1, 14, '4P2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(158, 3, 3, 1, 15, '1I', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(159, 3, 3, 2, 10, '5P1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(160, 3, 3, 2, 16, '1M1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(161, 3, 3, 2, 14, '3P2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(162, 3, 3, 2, 15, '1I', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(163, 3, 3, 3, 10, '2M2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(164, 3, 3, 3, 16, '2I', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(165, 3, 3, 3, 14, '4M2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(166, 3, 3, 3, 15, '1G', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(167, 3, 3, 4, 10, '2M2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(168, 3, 3, 4, 14, '4M2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(169, 3, 3, 4, 15, '1G', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(170, 3, 3, 5, 10, '5I', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(171, 3, 3, 5, 16, '1P2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(172, 3, 3, 5, 14, '3M2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(173, 3, 3, 5, 15, '3P1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(174, 3, 3, 6, 10, '5I', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(175, 3, 3, 6, 16, '1P2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(176, 3, 3, 6, 14, '3M2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(177, 3, 3, 6, 15, '3P1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(178, 3, 4, 1, 10, '5M1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(179, 3, 4, 1, 16, '2G', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(180, 3, 4, 1, 14, '3M1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(181, 3, 4, 1, 15, '1G', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(182, 3, 4, 2, 10, '5P2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(183, 3, 4, 2, 16, '2G', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(184, 3, 4, 2, 14, '4P1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(185, 3, 4, 2, 15, '1G', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(186, 3, 4, 3, 10, '5G', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(187, 3, 4, 3, 16, '1M2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(188, 3, 4, 3, 14, '4M1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(189, 3, 4, 3, 15, '3I', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(190, 3, 4, 4, 16, '1M2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(191, 3, 4, 4, 15, '3I', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(192, 3, 4, 5, 10, '2M1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(193, 3, 4, 5, 16, '2P1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(194, 3, 4, 5, 14, '4G', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(195, 3, 4, 5, 15, '1I', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(196, 3, 4, 6, 10, '5M2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(197, 3, 4, 6, 16, '2P1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(198, 3, 4, 6, 14, '4G', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(199, 3, 4, 6, 15, '1I', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(200, 3, 5, 1, 16, '1P1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(201, 3, 5, 1, 14, '4I', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(202, 3, 5, 1, 15, '1I', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(203, 3, 5, 2, 10, '2M2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(204, 3, 5, 2, 16, '1P1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(205, 3, 5, 2, 14, '4M2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(206, 3, 5, 2, 15, '1I', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(207, 3, 5, 3, 10, '5P2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(208, 3, 5, 3, 16, '2P2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(209, 3, 5, 3, 14, '3M1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(210, 3, 5, 3, 15, '3G', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(211, 3, 5, 4, 10, '5P2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(212, 3, 5, 4, 16, '2P2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(213, 3, 5, 4, 14, '3M1', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(214, 3, 5, 4, 15, '3G', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(215, 3, 5, 5, 16, '2I', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(216, 3, 5, 5, 14, '4P2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(217, 3, 5, 5, 15, '1G', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(218, 3, 5, 6, 16, '2I', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(219, 3, 5, 6, 14, '4P2', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(220, 3, 5, 6, 15, '1G', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(221, 4, 1, 8, 17, '5P3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(222, 4, 1, 8, 20, '2M3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(223, 4, 1, 8, 18, '3I3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(224, 4, 1, 9, 17, '3G3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(225, 4, 1, 9, 20, '2M4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(226, 4, 1, 9, 19, '1M4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(227, 4, 1, 9, 18, '4I3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(228, 4, 1, 10, 17, '3G3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(229, 4, 1, 10, 20, '2M4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(230, 4, 1, 10, 19, '1M4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(231, 4, 1, 10, 18, '4I3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(232, 4, 1, 11, 20, '2I3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(233, 4, 1, 11, 19, '1M3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(234, 4, 1, 11, 18, '4M3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(235, 4, 1, 12, 20, '2I3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(236, 4, 1, 12, 19, '1M3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(237, 4, 1, 12, 18, '4M3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(238, 4, 2, 7, 17, '3M3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(239, 4, 2, 7, 20, '2P3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(240, 4, 2, 7, 19, '1G3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(241, 4, 2, 7, 18, '4G3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(242, 4, 2, 8, 17, '5M3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(243, 4, 2, 8, 20, '2G3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(244, 4, 2, 8, 19, '1G3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(245, 4, 2, 8, 18, '4I3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(246, 4, 2, 9, 17, '5G3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(247, 4, 2, 9, 20, '3P4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(248, 4, 2, 9, 19, '1P3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(249, 4, 2, 9, 18, '3G4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(250, 4, 2, 10, 17, '5G3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(251, 4, 2, 10, 20, '3P4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(252, 4, 2, 10, 19, '1P3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(253, 4, 2, 10, 18, '3G4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(254, 4, 2, 11, 17, '3I4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(255, 4, 2, 11, 19, '1P4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(256, 4, 2, 11, 18, '4M4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(257, 4, 2, 12, 17, '3I4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(258, 4, 2, 12, 19, '1P4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(259, 4, 2, 12, 18, '4M4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(260, 4, 3, 7, 20, '2I3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(261, 4, 3, 7, 19, '1M4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(262, 4, 3, 7, 18, '4P3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(263, 4, 3, 8, 17, '3G3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(264, 4, 3, 8, 20, '2M4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(265, 4, 3, 8, 19, '1M4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(266, 4, 3, 8, 18, '4M3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(267, 4, 3, 9, 17, '5P3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(268, 4, 3, 9, 20, '2P4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(269, 4, 3, 9, 19, '1I3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(270, 4, 3, 9, 18, '1G4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(271, 4, 3, 10, 17, '5P3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(272, 4, 3, 10, 20, '2P4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(273, 4, 3, 10, 19, '1I3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(274, 4, 3, 10, 18, '1G4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(275, 4, 3, 11, 17, '3M4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(276, 4, 3, 11, 20, '2M3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(277, 4, 3, 12, 17, '3M4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(278, 4, 3, 12, 20, '2M3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(279, 4, 4, 7, 17, '3I4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(280, 4, 4, 7, 19, '1M3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(281, 4, 4, 7, 18, '3G4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(282, 4, 4, 8, 17, '5G3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(283, 4, 4, 8, 20, '3P4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(284, 4, 4, 8, 19, '1M3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(285, 4, 4, 8, 18, '4M4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(286, 4, 4, 9, 17, '5M3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(287, 4, 4, 9, 20, '3P3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(288, 4, 4, 9, 19, '1P4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(289, 4, 4, 9, 18, '3I3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(290, 4, 4, 10, 17, '5M3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(291, 4, 4, 10, 20, '3P3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(292, 4, 4, 10, 19, '1P4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(293, 4, 4, 10, 18, '3I3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(294, 4, 4, 11, 20, '2P3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(295, 4, 4, 11, 19, '1G3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(296, 4, 4, 11, 18, '4G3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(297, 4, 4, 12, 20, '2P3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(298, 4, 4, 12, 19, '1G3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(299, 4, 4, 12, 18, '4G3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(300, 4, 5, 7, 20, '3P3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(301, 4, 5, 7, 19, '1P3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(302, 4, 5, 7, 18, '1G4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(303, 4, 5, 8, 17, '3M4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(304, 4, 5, 8, 20, '2P4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(305, 4, 5, 8, 19, '1P3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(306, 4, 5, 8, 18, '1G4', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(307, 4, 5, 9, 17, '3M3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(308, 4, 5, 9, 20, '2G3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(309, 4, 5, 9, 19, '1I3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(310, 4, 5, 9, 18, '4P3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(311, 4, 5, 10, 17, '3M3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(312, 4, 5, 10, 20, '2G3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(313, 4, 5, 10, 19, '1I3', '2020-08-12 04:48:56', '2020-08-12 04:48:56'),
(314, 4, 5, 10, 18, '4P3', '2020-08-12 04:48:56', '2020-08-12 04:48:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `evaluations`
--

CREATE TABLE `evaluations` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_schedules` int(10) UNSIGNED DEFAULT NULL,
  `id_teacher` int(10) UNSIGNED DEFAULT NULL,
  `id_subject` int(10) UNSIGNED DEFAULT NULL,
  `id_location` int(10) UNSIGNED DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `objective` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `criteria` int(10) DEFAULT NULL,
  `author` int(10) UNSIGNED DEFAULT NULL,
  `lesson_flow` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `strengths` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `improvement` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `part1` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `part2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `part3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `part4` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `part5` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `part2a` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `part2b` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `part2c` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `part2d` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `part3a` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `part3b` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `part3c` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `part3d` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `part4a` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `part4b` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `part4c` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `test` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `editor` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lesson_plans`
--

CREATE TABLE `lesson_plans` (
  `id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extension` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lesson_plans`
--

INSERT INTO `lesson_plans` (`id`, `teacher_id`, `title`, `note`, `file`, `extension`, `created_at`, `updated_at`) VALUES
(12, 1, 'speak', 'note here', 'KPNt-CEHv9_Finish 01 - Ethical .pdf', 'pdf', '2020-08-01 05:35:08', '2020-08-01 05:35:08'),
(14, 1, 'speak', 'note here', 'VRhy-request.394662.docx', 'docx', '2020-08-01 05:35:08', '2020-08-01 05:35:08'),
(15, 1, 'modal', 'asdf', '4VXs-logo.png', 'png', '2020-08-12 11:59:45', '2020-08-12 11:59:45'),
(16, 22, 'Unit 8 OW4 Review_August 24-28', NULL, 'Unit 8 Review (August 24-28).docx', 'docx', '2020-08-23 05:06:05', '2020-08-23 05:06:05'),
(17, 23, 'Grade 1_Session 1_Week 1_ August 31-September 4', NULL, 'Grade 1_Session 1_Week 1 August 31 - September 4.docx', 'docx', '2020-08-28 05:25:46', '2020-08-28 05:25:46'),
(18, 23, 'Grade 1_OIC_Week 1_ August 31-September 4', NULL, 'Grade 1_Session 2_Week 1_August 31- September 4.docx', 'docx', '2020-08-28 05:27:30', '2020-08-28 05:27:30'),
(19, 23, 'Grade 1_OIC_Week 1_ August 31-September 4', NULL, 'Grade 1_Session 12_Week 1 August 31 - September 4.docx', 'docx', '2020-08-28 05:27:30', '2020-08-28 05:27:30'),
(20, 23, 'Grade 1_OIC_Week 1_ August 31-September 4', NULL, 'Grade 1_Session 11_Week 1 August 31 - September 4.docx', 'docx', '2020-08-28 05:27:30', '2020-08-28 05:27:30'),
(21, 23, 'Grade 1_OIC_Week 1_ August 31-September 4', NULL, 'Grade 1_Session 10_Week 1 August 31 - September 4.docx', 'docx', '2020-08-28 05:27:30', '2020-08-28 05:27:30'),
(22, 23, 'Grade 1_OIC_Week 1_ August 31-September 4', NULL, 'Grade 1_Session 9_Week 1 August 31 - September 4.docx', 'docx', '2020-08-28 05:27:30', '2020-08-28 05:27:30'),
(23, 23, 'Grade 1_OIC_Week 1_ August 31-September 4', NULL, 'Grade 1_Session 8_Week 1 August 31 - September 4.docx', 'docx', '2020-08-28 05:27:30', '2020-08-28 05:27:30'),
(25, 23, 'Grade 1_OIC_Week 1_ August 31-September 4', NULL, 'Grade 1_Session 6_Week 1 August 31 - September 4.docx', 'docx', '2020-08-28 05:27:30', '2020-08-28 05:27:30'),
(26, 23, 'Grade 1_OIC_Week 1_ August 31-September 4', NULL, 'Grade1_Session5_Week1_August31-September4.docx', 'docx', '2020-08-28 05:27:30', '2020-08-28 05:27:30'),
(27, 23, 'Grade 1_OIC_Week 1_ August 31-September 4', NULL, 'Grade1_Session4_Week1_August31-September4.docx', 'docx', '2020-08-28 05:27:30', '2020-08-28 05:27:30'),
(28, 23, 'Grade 1_OIC_Week 1_ August 31-September 4', NULL, 'Grade1_Session3_Week1_August 31-September 4.docx', 'docx', '2020-08-28 05:27:30', '2020-08-28 05:27:30'),
(29, 23, 'Grade 1_Session 7_Week 1_ August 31-September 4', 'Content to be provided', 'Grade 1_Session 7_Week 1 August 31 - September 4.docx', 'docx', '2020-08-28 05:28:42', '2020-08-28 05:28:42'),
(30, 17, 'Grade 5 Week August 3-4', 'These two days will be class rules and routines. We will begin Vocab 1 on 7/9.', 'Grade5Session1August3-4.docx', 'docx', '2020-08-29 04:16:55', '2020-08-29 04:16:55'),
(31, 17, 'Grade 5 Week August 3-4', 'These two days will be class rules and routines. We will begin Vocab 1 on 7/9.', 'Grade5Session2August3-4.docx', 'docx', '2020-08-29 04:16:55', '2020-08-29 04:16:55'),
(34, 17, 'Grade 3 Week August 3-4', 'These two days will be class rules and routines. We will begin Vocab 1 on 7/9.', 'Grade3Session1August3-4.docx', 'docx', '2020-08-29 04:36:09', '2020-08-29 04:36:09'),
(35, 17, 'Grade 3 Week August 3-4', 'These two days will be class rules and routines. We will begin Vocab 1 on 7/9.', 'Grade3Session2August3-4.docx', 'docx', '2020-08-29 04:36:09', '2020-08-29 04:36:09'),
(36, 21, 'OW_Grade 1_Session 1_Week Spt1-4', NULL, 'OW_Grade 1_Session 1_Week Spt1-4.docx', 'docx', '2020-08-29 10:01:57', '2020-08-29 10:01:57'),
(37, 21, 'OW_Grade 1_Session 2_Week Spt1-4', NULL, 'OW_Grade 1_Session 2_Week Spt1-4.docx', 'docx', '2020-08-29 10:08:21', '2020-08-29 10:08:21'),
(38, 10, 'Grade5_Session1,2_August31-Sep4', 'This is a double session that can be shortened or extended due to the nature of a two day week', 'Grade5 LessonPlan August 31.docx', 'docx', '2020-08-30 10:37:12', '2020-08-30 10:37:12'),
(39, 10, 'Grade2_Session1,2_August31-Sep4', NULL, 'Grade2 LessonPlan August 31.docx', 'docx', '2020-08-30 10:38:01', '2020-08-30 10:38:01'),
(40, 22, 'Grade 5_Sesson 1_ 30 Aug-4 Sep', NULL, 'Unit 9 Review (August 31 - September 4).docx', 'docx', '2020-08-30 13:15:35', '2020-08-30 13:15:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_02_06_104600_create_roles_table', 1),
(4, '2020_02_06_104724_add_column_in_users_table', 2),
(5, '2020_02_06_105417_add_column_in_users_table', 3),
(6, '2020_02_11_114203_create_teachers_table', 4),
(7, '2020_02_14_033057_create_addresses_table', 5),
(8, '2020_02_14_033410_add_column_in_teacher_table', 6),
(9, '2020_02_14_034957_create_schedules_table', 7),
(10, '2020_02_14_040923_add_column_in_schedules_table', 8),
(11, '2020_02_14_042143_add_column_in_schedules_table', 9),
(12, '2020_02_24_070216_create_evaluations_table', 10),
(13, '2020_02_26_032625_add_new_column_in_evaluations_table', 11),
(14, '2020_02_28_030031_add_new_column_in_evaluations_table', 12),
(15, '2020_02_29_052629_add_new_column_in_evaluations_table', 13),
(16, '2020_03_02_043233_add_new_column_in_evaluations_table', 14),
(17, '2020_03_04_034854_add_new_column_in_evaluations_table', 15),
(18, '2020_06_05_104629_add_new_column_in_evaluations_table', 16),
(19, '2020_06_05_113221_add_new_column_in_evaluations_table', 17),
(20, '2020_07_17_150719_add_new_column_in_teachers_table', 18),
(21, '2020_07_17_165512_create_lesson_plans_table', 19),
(22, '2020_08_03_103039_create_days_table', 20),
(23, '2020_08_03_104238_create_sessions_table', 21),
(24, '2020_08_03_154755_create_default_schedules_table', 22),
(25, '2020_08_12_104412_add_new_column_in_default_schedules', 23),
(26, '2020_09_21_173925_create_subjects_table', 24),
(27, '2020_09_25_101923_add_new_column_in_schedule_table', 24),
(28, '2020_09_25_112404_add_new_column_in_schedule_table', 25),
(29, '2020_09_25_143618_add_new_column_in_evaluation_table', 26);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2020-02-05 17:00:00', '2020-02-05 17:00:00'),
(2, 'Reviewer', '2020-02-05 17:00:00', '2020-02-05 17:00:00'),
(3, 'teacher', '2020-02-10 17:00:00', '2020-02-10 17:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `schedules`
--

CREATE TABLE `schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_session` int(10) UNSIGNED DEFAULT NULL,
  `id_subject` int(10) UNSIGNED DEFAULT NULL,
  `id_teacher` int(10) UNSIGNED NOT NULL,
  `author` int(10) UNSIGNED DEFAULT NULL,
  `booking` int(10) UNSIGNED DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `time` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time1` date DEFAULT NULL,
  `day` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_location` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` int(10) UNSIGNED NOT NULL,
  `day_id` int(10) UNSIGNED DEFAULT NULL,
  `address_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `day_id`, `address_id`, `name`, `time`, `created_at`, `updated_at`) VALUES
(1, NULL, 3, 'Tiết 1', '8:00 - 8:40', '2020-08-12 04:35:47', '2020-08-12 04:35:47'),
(2, NULL, 3, 'Tiết 2', '8:45 - 9:25', '2020-08-12 04:35:47', '2020-08-12 04:35:47'),
(3, NULL, 3, 'Tiết 3', '9:40 - 10:20', '2020-08-12 04:35:47', '2020-08-12 04:35:47'),
(4, NULL, 3, 'Tiết 4', '10:25 - 10:55', '2020-08-12 04:35:47', '2020-08-12 04:35:47'),
(5, NULL, 3, 'Tiết 5', '13:45 - 14:25', '2020-08-12 04:35:47', '2020-08-12 04:35:47'),
(6, NULL, 3, 'Tiết 6', '14:30 - 15:00', '2020-08-12 04:35:47', '2020-08-12 04:35:47'),
(7, NULL, 4, 'Tiết 7', '8:00 - 8:40', '2020-08-12 04:35:47', '2020-08-12 04:35:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `criteria` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `code_name`, `criteria`, `created_at`, `updated_at`) VALUES
(1, 'Math/Toán', 'Math', 1, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(2, 'Club/Câu lạc bộ', 'Club', 1, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(3, 'Investment/Đầu tư tài chính', 'Investment', 1, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(4, 'Photoshop', 'Photoshop', 1, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(5, 'Application programming/Lập trình ứng dụng', 'App_P', 1, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(6, 'Cooking/Nấu ăn', 'Cooking', 1, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(7, 'French/Tiếng Pháp', 'French', 1, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(8, 'Poem Club/CLB Hoa và thơ', 'C-Poem', 1, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(9, 'Game Gladiators Club/CLB trò chơi đối kháng', 'C-GameGladiators', 1, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(10, 'Astros English Club/Đội tuyển tiếng anh', 'C-AstrosEnglish', 1, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(11, 'Music Club/CLB Âm nhạc', 'C-music', 1, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(12, 'Handmade Club/CLB Handmade', 'C-HandMade', 1, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(13, 'Meditation Club/CLB Thiền tập', 'C-Meditaton', 1, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(14, 'Pi Club/CLB Pi', 'C-Pi', 1, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(15, 'War Club/CLB War', 'C-War', 1, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(16, 'Travel Club/CLB Du lịch', 'C-Travel', 1, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(17, 'Philology/Ngữ văn', 'Philology', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(18, 'Vietnamese/Tiếng Việt', 'Vietnamese', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(19, 'Physics/Vật lý', 'VL', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(20, 'Science/Khoa học', 'Science', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(21, 'Chemistry/Hóa học', 'HH', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(22, 'Biology/Sinh học', 'SH', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(23, 'Natural Sciences/Khoa học Tự nhiên', 'NaturalSciences', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(24, 'Social Sciences/Khoa học xã hội', 'SocialSciences', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(25, 'Geography/Địa lý', 'DL', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(26, 'History/Lịch sử', 'LS', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(27, 'English/Tiếng Anh', 'English', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(28, 'Academic English/Tiếng Anh Học Thuật', 'AcademicEnglish', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(29, 'Technology/Công nghệ', 'Technology', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(30, 'IT/Tin học', 'ICT', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(31, 'Music/Âm nhạc', 'Music', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(32, 'Drum/Trống', 'Drum', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(33, 'Piano', 'Piano', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(34, 'Guitar/Ghi ta', 'Guitar', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(35, 'Vocal singing/Thanh nhạc', 'Vocal', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(36, 'Fine Art/Mỹ thuật', 'Art', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(37, 'PE/Thể dục', 'PE', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(38, 'Soccer/Bóng đá', 'Soccer', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(39, 'Basketball/Bóng rổ', 'Basketball', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(40, 'Volleyball/Bóng chuyền', 'VolleyBall', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(41, 'Gym', 'GYM', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(42, 'Gym/Điền kinh', 'GYMDIENKINH', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(43, 'Citizenship education/Giáo dục công dân', 'GDCD', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(44, 'Swimming/Bơi', 'Swimming', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(45, 'Economics & Law/Kinh tế và Pháp luật', 'KT_PL', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(46, 'SAT', 'SAT_ELECTIVE', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(47, 'LiFE', 'LiFE', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(48, 'SAT', 'SATPrep', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(49, 'PSAT', 'SATPrepA', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(50, 'Humanities/Nhân văn', 'Humanities', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(51, 'Florist/Hoa và sắc màu', 'Florist', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(52, 'Psychology/Tâm lý học', 'Psychology', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(53, 'Sociology/Xã hội học', 'Sociology', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(54, 'Intro to Mass Media/Truyền thông đại chúng', 'IntrotoMassMedia', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(55, 'Entrepreneurship/Kinh tế khởi nghiệp', 'Entrepreneurship', 2, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(56, 'Marketing', 'Marketing', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(57, 'Painting/Hội họa', 'Painting', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(58, 'Graphic Design/Hoạ sĩ thiết kế', 'GraphicDesign', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(59, 'Graphic Design & Edit Video', 'Graphic', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(60, 'Internet of thing A', 'IOTA', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(61, 'Traditional music instruments/Nhạc cụ dân tộc', 'NCDT', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(62, 'Grammar and Vocab for IELTS B', 'GrammarandVocabforIELTSB', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(63, 'Academic Listening and Speaking A', 'AcademicListeningandSpeakingA', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(64, 'Academic Listening and Speaking B', 'AcademicListeningandSpeakingB', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(65, 'Academic Reading and Vocab A', 'AcademicReadingandVocabA', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(66, 'Academic Reading and Vocab B', 'AcademicReadingandVocabB', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(67, 'IELTS', 'IELTS_ELECTIVE', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(68, 'IELTS 1A', 'IELTS1A', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(69, 'IELTS 1B', 'IELTS1B', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(70, 'IELTS 2A', 'IELTS2A', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(71, 'IELTS 2B', 'IELTS2B', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(72, 'Grammar and Vocab for IELTS A', 'GrammarandVocabforIELTSA', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(73, 'Global Studies/Toàn cầu học', 'GlobalStudies', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(74, 'Global Studies I', 'GlobalStudiesI', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(75, 'Global Studies II', 'GlobalStudiesIII', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(76, 'Drama/Kịch nghệ', 'Drama', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(77, 'Basketball Club/CLB Bóng rổ', 'C-Basketball', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(78, 'Fitness Club/CLB Fitness', 'C-Fitness', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(79, 'Football Team/Đội tuyển Bóng đá', 'C-FootballTeam', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(80, 'Robotics Teky Club', 'C-Teky', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(81, 'Eco Warriors Club', 'C-E_Warriors', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(82, 'The Pen Pals Club', 'C-Culture_E', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(83, 'Magic of language Club', 'C-M_language', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(84, 'Mindfullness Club', 'C-Mind_F', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(85, 'Mathmagicians Club', 'C-Math_M', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(86, 'Công nghệ', 'CN', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(87, 'Green Warriors Club', 'G_Warriors', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(88, 'Radio Club/CLB Radio', 'C-Radio', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(89, 'HandCrafting Club/CLB Hand Crafting', 'C-HandCrafting', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(90, 'Kids Coding Club', 'C-IT', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(91, 'Origami Club', 'Origami', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(92, 'Science Team', 'C-Science_T', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(93, 'Tự nhiên & xã hội', 'TNXH', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(94, 'Reading books Club/CLB đọc sách', 'C-R_Book', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(95, 'Hiểu biết thông tin', 'HBTT', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(96, 'Programming app inventor Club', 'C-P_App', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(97, 'Hiểu biết về sức khỏe', 'HBSK', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(98, 'Tutoring Club', 'C-Tutoring', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(99, 'Behavioral Sciences/Khoa học hành vi', 'BehavioralSciences', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(100, 'Home Smart/Điện Thông Minh', 'HomeSmart', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(101, 'OSEL', 'OL', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(102, 'Tin Tự Chọn', 'TinTC', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(103, 'Chemistry (Electives)/Hóa học (TC)', 'HHTC', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(104, 'Biology (Electives)/Sinh học (TC)', 'SHTC', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(105, 'Physics (Electives)/Vật lý (TC)', 'VLTC', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(106, 'History (Electives)/Lịch sử (TC)', 'LSTC', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(107, 'Geography (Electives)/Địa lý (TC)', 'DLTC', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(108, 'History & Geography/Lịch sử & Địa lý', 'LSDL', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(109, 'Sketches/Vẽ chì', 'ATM_VECHI_TC', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(110, 'Graphic/Đồ họa', 'ATM_DOHOA_TC', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(111, 'Acrylic', 'ATM_ACRYLIC_TC', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(112, 'Piano', 'ATM_PIANO_TC', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(113, 'Drum/Trống', 'ATM_TRONG_TC', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(114, 'Vocal/Thanh nhạc', 'ATM_THANHNHAC_TC', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(115, 'Reading & Vocabulary', 'READING_VOCABULATY_ELECTIVE', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(116, 'Writing & Grammar', 'WRITING_GRAMMAR_ELECTIVE', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(117, 'Speaking & Listening', 'SPEAKING_LISTENING_ELECTIVE', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(118, 'Creative Writing, Drama, Literature and Film', 'CREATIVE_WDLF_ELECTIVE', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(119, 'Sức khoẻ và khoa học hành vi', 'SK_KHHV_TC', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(120, 'Nghiên cứu khoa học và Sáng tạo Công nghệ', 'NCKH_STCN_TC', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(121, 'Medicine/Y dược', 'YD_TC', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(122, 'ICT', 'ICT_TC', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(123, 'Management/Quản lý', 'QL_TC', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(124, 'Economics/Kinh tế', 'KT_TC', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(125, 'Văn hoá và truyền thông đại chúng/Media & Culture', 'VH_TTDC', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(126, 'Bơi/Swimming', 'Boi1', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(127, 'UCO Class', 'UCO', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(128, 'Drawing', 'Draw', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(129, 'Painting Club', 'Paint', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(130, 'Movie Maker', 'Movie', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(131, 'Nhân văn', 'Nhanvan', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(132, 'Song Bằng', 'Songbang', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(133, 'Quốc tế', 'Quocte', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(134, 'Toán tiếng Việt', 'Toantiengviet', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(135, 'Toán tiếng Anh', 'Toantienganh', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(136, 'Academic Writing', 'AcademicWriting', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(137, 'College Prep', 'CollegePrep', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(138, 'ME2 Geometry', 'ME2Geometry', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(139, 'Văn tự chọn', 'Van_Elective', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(140, 'Tâm lý', 'Tamly', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(141, 'Tổ hợp Lý Hóa Sinh', 'lyhoasinh', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(142, 'Club/ Câu lạc bộ', 'CLB', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(143, 'Science/Khoa học 3', 'KH3', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(144, 'Literature and Film', 'LitFilm', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(145, 'Kinh tế Quốc tế', 'KT_QT', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(146, 'Kinh tế Khởi nghiệp', 'KT_KN', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(147, 'Ôn thi GDCD', 'OTGDCD', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(148, 'Ôn thi Sinh học', 'OTSinhHoc', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(149, 'Ôn thi Vật lý', 'OTVatLy', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(150, 'Ôn thi Hóa học', 'OTHoaHoc', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(151, 'Ôn thi Địa lý', 'OTDiaLy', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(152, 'Ôn thi Ngữ văn', 'OTNguVan', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(153, 'Government & Citizenship/Chính phủ & Công dân', 'LiFE2', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(154, 'Academic Writing A', 'AcademicWritingA', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(155, 'Academic Writing B', 'AcademicWritingB', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(156, 'Algebra 1', 'Algebra1', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(157, 'Algebra 2A', 'Algebra2A', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(158, 'Applied Biology/Sinh học và ứng dụng ', 'AppliedBiology', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(159, 'Applied Chemistry/Hóa học và ứng dụng ', 'AppliedChemistry', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(160, 'Applied Physics/Vật lí và ứng dụng ', 'AppliedPhysics', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(161, 'Drama and Art Perfomances/Kịch nghệ và biểu diễn nghệ thuật', 'DramaandArtPerfomances', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(162, 'Drawing/Vẽ chì', 'Drawing', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(163, 'Economics/Nhập môn kinh tế', 'Economics', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(164, 'International Business/Kinh tế quốc tế', 'InternationalBusiness', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(165, 'Internet of thing B', 'IOTB', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(166, 'Nutrition and Cooking/Dinh dưỡng và nấu ăn', 'NutritionandCooking', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(167, 'Sculpture and Installation Art/Điêu khắc và nghệ thuật sắp đặt', 'SculptureandInstallationArt', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(168, 'Vietnamese Literature/Văn ôn thi ', 'VietnameseLiterature ', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(169, 'Self-study/Tự học', 'SelfStudy', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(170, 'Media/Truyền thông', 'Media', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(171, 'Acrylic Club/CLB Acrylic', 'C-Acrylic', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(172, 'Fine Art Club/CLB Mỹ thuật', 'C-Art', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(173, 'Art of Science Club/CLB Art of Science', 'C-ArtofScience', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(174, 'Basketball Team/Đội tuyển Bóng rổ', 'C-BasketballTeam', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(175, 'Chess Club/CLB Cờ vua', 'C-Chess', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(176, 'Choir Club/CLB Hợp xướng', 'C-Choir', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(177, 'Cooking Club/CLB Nấu ăn', 'C-Cooking', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(178, 'Dancing Club/CLB nhảy hiện đại', 'C-Dancing', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(179, 'DDoxa Club/CLB Ddoxa', 'C-DDoxa', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(180, 'DIY Club/CLB DIY', 'C-DIY', 3, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(181, 'Drama Club', 'C-Drama', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(182, 'Art Team/Đội tuyển Mỹ thuật', 'C-ExcellenceInArts', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(183, 'Excellence in English Club/CLB Excellence in English', 'C-ExcellenceInEnglish', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(184, 'Film Club', 'C-Film', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(185, 'French Club/CLB Tiếng Pháp', 'C-French', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(186, 'Gardening Club/CLB Làm vườn', 'C-Gardening', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(187, 'Huna Club/CLB Huna', 'C-Huna', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(188, 'Korean Club/CLB Hàn Quốc', 'C-Korean', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(189, 'Martial Art Club/CLB Võ', 'C-MartialArts', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(190, 'Math Team/Đội tuyển Toán', 'C-MathTeam', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(191, 'Photography Club/CLB Nhiếp Ảnh', 'C-Photography', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(192, 'Piano Club/CLB Tiếng dương cầm', 'C-Piano', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(193, 'Sign Language Club/CLB Âm thanh của sự im lặng', 'C-SignLanguage', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(194, 'Soccer Team/Đội tuyển Bóng đá', 'C-SoccerTeam', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(195, 'STEAM Craft Club/CLB STEAM Craft', 'C-STEAMCraft', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(196, 'STEM Club', 'C-STEM', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(197, 'STEM Robotics Club', 'C-STEMRobotics', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(198, 'Swimming Club/CLB Bơi lội', 'C-Swimming', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(199, 'Swimming Team/Đội tuyển bơi', 'C-SwimmingTeam', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(200, 'Traditional Dance Club/CLB Múa dân gian', 'C-TraditionalDance', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(201, 'Ukulele Club/CLB Ukulele', 'C-Ukulele', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(202, 'Volleyball Club/CLB Bóng chuyền', 'C-Volleyball', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(203, 'Watercolor Club/CLB Màu nước', 'C-Watercolor', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(204, 'Wood Carving Club/CLB Khắc gỗ', 'C-WoodCarving', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(205, 'Wood Carving and Lacquer Club/CLB Khắc gỗ sơn mài', 'C-WoodCarvingLacquer', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(206, 'Sculpture and Installation Art Club/CLB Điêu khắc và Nghệ thuật sắp đặt', 'C-SculptureInstallationArt', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(207, 'Interactive Drama Club/CLB Kịch tương tác', 'C-InteractiveDrama', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(208, 'Rap and Study Club', 'C-Rap', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(209, 'Connected We Club', 'C-ConnectedWe', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(210, 'Project: Multimedia', 'C-Multimedia', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(211, 'Philology Competition Club/Đội tuyển Văn', 'C-PhilologyCompetition', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(212, 'Female Volleyball Club/CLB Bóng chuyền nữ', 'C-FemaleVolleyball', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(213, 'Male Soccer Club/CLB Bóng đá nam', 'C-MaleSoccer', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(214, 'Pencaksylat Club', 'C-Pencaksylat', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(215, 'Male Basketball Club/CLB Bóng rổ nam', 'C-MaleBasketball', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(216, 'Female Basketball Club/CLB Bóng rổ nữ', 'C-FemaleBasketball', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(217, 'School Band', 'C-SchoolBand', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(218, 'Scientific Research Club/CLB Nghiên cứu Khoa học', 'C-ScientificResearch', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(219, 'Historical Wheel Club/CLB Người Hà Nội', 'C-HistoricalWheel', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(220, 'Personal Project/Dự án: Học tập cá nhân', 'C-PersonalProject', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(221, 'ICT Club/CLB Lập trình', 'C-ICT', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(222, 'Literature Discussion Club/CLB Trò Chuyện Văn Học', 'C-LiteratureDiscussion', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(223, 'Project: Start-up/Dự án: Khởi nghiệp', 'C-Startup', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(224, 'Project: Teapot Society', 'C-TeapotSociety', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(225, 'Project: Liberiature', 'C-Liberiature', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(226, 'Social Sciences 2/Khoa học xã hội 2', 'SocialSciences2', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(227, 'Humanities in Vietnamese/Nhân văn Tiếng Việt', 'HumanitiesTV', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(228, 'Musical/Nhạc kịch', 'Musical', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(229, 'Soccer Club/CLB Bóng đá', 'C-Soccer', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(230, 'Little Publisher Club/CLB Tòa soạn nhỏ', 'C-LittlePublisher', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(231, 'Science Club/CLB Khoa học', 'C-Science', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(232, 'Compass Club/CLB La Bàn', 'C-Compass', 4, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(233, 'Service Learning Club/CLB Service Learning', 'C-ServiceLearning', 5, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(234, 'Olympia Photo Club/CLB OPC', 'C-PhotoClub', 5, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(235, 'Critical reading_Writing skills/Kĩ năng đọc và viết học thuật', 'CR_Writing', 5, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(236, 'World history 1/Lịch sử thế giới 1', 'W_history1', 5, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(237, 'World culture 1/Văn hóa thế giới 1', 'W_culture 1', 5, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(238, 'Legal studies/Nghiên cứu pháp luật', 'Legal', 5, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(239, 'Guided study', 'G_study', 5, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(240, 'IT Tutoring', 'ITTutor', 5, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(241, 'STEAM', 'STEAM', 5, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(242, 'Table Tennis/Bóng bàn', 'TableTennis', 5, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(243, 'Martial/Võ', 'Martial', 5, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(244, 'TeaArt/Trà đạo', 'TeaArt', 5, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(245, 'TableTennis Club/CLB Bóng bàn', 'C-TableTennis', 5, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(246, 'Tea Art Club/CLB Trà đạo', 'C-TeaArt', 5, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(247, 'Fashion Club/CLB Thời trang', 'C-Fashion', 5, '2020-09-25 04:22:38', '2020-09-25 04:22:38'),
(248, 'Kiddo Club/CLB Kiddo', 'C-Kiddo', 5, '2020-09-25 04:22:38', '2020-09-25 04:22:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` int(10) UNSIGNED NOT NULL DEFAULT 3,
  `id_address` int(10) UNSIGNED DEFAULT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullname_eng` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `teachers`
--

INSERT INTO `teachers` (`id`, `role`, `id_address`, `fullname`, `fullname_eng`, `first_name`, `last_name`, `department`, `position`, `address`, `mobile`, `image`, `gender`, `dob`, `email`, `password`, `facebook`, `twitter`, `created_at`, `updated_at`, `email_verified_at`, `remember_token`) VALUES
(1, 3, NULL, 'Phan Mỹ Linh', 'Linh Phan Mỹ ', 'Linh', 'Phan Mỹ ', 'C3_Cấp trung học phổ thông', 'Điều phối CM Chương trình Song bằng Quốc tế, Giáo viên Humanities', NULL, NULL, NULL, NULL, NULL, 'linh.pm@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(2, 3, NULL, 'Phạm Sơn Tùng', 'Tùng Phạm Sơn ', 'Tùng', 'Phạm Sơn ', 'C3_Cấp trung học phổ thông', 'Điều phối Hoạt động học sinh cấp THPT-Giáo viên Kinh tế - Pháp luật', NULL, NULL, NULL, NULL, NULL, 'tung.ps@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(3, 3, NULL, 'Nguyễn Tường Phượng', 'Phượng Nguyễn Tường ', 'Phượng', 'Nguyễn Tường ', '3. PB_CH0300_BAN ĐIỀU HÀNH', 'Giám đốc Công ty, Giám đốc Điều hành Trường PTLC Olympia', NULL, NULL, NULL, NULL, NULL, 'phuong.nt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(4, 3, NULL, 'Nguyễn Kiều Linh', 'Linh Nguyễn Kiều ', 'Linh', 'Nguyễn Kiều ', 'C1_Cấp Tiểu học', 'Giáo viên Âm nhạc', NULL, NULL, NULL, NULL, NULL, 'linh.nk@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(5, 3, NULL, 'Nguyễn Mai Phương', 'Phương Nguyễn Mai ', 'Phương', 'Nguyễn Mai ', 'C1_Cấp Tiểu học', 'Giáo viên Âm nhạc', NULL, NULL, NULL, NULL, NULL, 'phuong.nm@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(6, 3, NULL, 'Trần Thị Hồi', 'Hồi Trần Thị ', 'Hồi', 'Trần Thị ', 'C2_Cấp trung học cơ sở', 'Giáo viên Âm nhạc', NULL, NULL, NULL, NULL, NULL, 'hoi.tt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(7, 3, NULL, 'Nguyễn Quỳnh Ngọc', 'Ngọc Nguyễn Quỳnh ', 'Ngọc', 'Nguyễn Quỳnh ', 'C2_Cấp trung học cơ sở', 'Giáo viên Âm nhạc', NULL, NULL, NULL, NULL, NULL, 'ngoc.nq@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(8, 3, NULL, 'Lê Thanh Tâm', 'Tâm Lê Thanh ', 'Tâm', 'Lê Thanh ', 'C2_Cấp trung học cơ sở', 'Giáo viên Âm nhạc', NULL, NULL, NULL, NULL, NULL, 'tam.lt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(9, 3, NULL, 'Đinh Lan Phương', 'Phương Đinh Lan ', 'Phương', 'Đinh Lan ', 'C3_Cấp trung học phổ thông', 'Giáo viên Âm nhạc', NULL, NULL, NULL, NULL, NULL, 'phuong.dl@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(10, 3, NULL, 'Hoa Quốc Quỳnh', 'Quỳnh Hoa Quốc ', 'Quỳnh', 'Hoa Quốc ', 'C3_Cấp trung học phổ thông', 'Giáo viên BM Kinh tế', NULL, NULL, NULL, NULL, NULL, 'quynh.hq@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(11, 3, NULL, 'Trương Thị Hồng Huệ', 'Huệ Trương Thị Hồng ', 'Huệ', 'Trương Thị Hồng ', 'C2_Cấp trung học cơ sở', 'Giáo viên Công nghệ', NULL, NULL, NULL, NULL, NULL, 'hue.tth@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(12, 3, NULL, 'Vũ Minh Thoại', 'Thoại Vũ Minh ', 'Thoại', 'Vũ Minh ', 'C3_Cấp trung học phổ thông', 'Giáo viên Công nghệ', NULL, NULL, NULL, NULL, NULL, 'thoai.vm@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(13, 3, NULL, 'Đỗ Xuân Khoa', 'Khoa Đỗ Xuân ', 'Khoa', 'Đỗ Xuân ', 'C3_Cấp trung học phổ thông', 'Giáo viên dạy Maketting', NULL, NULL, NULL, NULL, NULL, 'khoa.dx@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(14, 3, NULL, 'Hoàng Thị Hường', 'Hường Hoàng Thị ', 'Hường', 'Hoàng Thị ', 'C2_Cấp trung học cơ sở', 'Giáo viên Địa', NULL, NULL, NULL, NULL, NULL, 'Huong.ht@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(15, 3, NULL, 'Nguyễn Thị Ngân', 'Ngân Nguyễn Thị ', 'Ngân', 'Nguyễn Thị ', 'C2_Cấp trung học cơ sở', 'Giáo viên Địa', NULL, NULL, NULL, NULL, NULL, 'ngan.nt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(16, 3, NULL, 'Trịnh Thùy Linh', 'Linh Trịnh Thùy ', 'Linh', 'Trịnh Thùy ', 'C3_Cấp trung học phổ thông', 'Giáo viên Địa', NULL, NULL, NULL, NULL, NULL, 'linh.tt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(17, 3, NULL, 'Bùi Thị Thùy', 'Thùy Bùi Thị ', 'Thùy', 'Bùi Thị ', 'C4. PB_GD0309_Nhóm Giáo dục đặc biệt', 'Giáo viên GDĐB', NULL, NULL, NULL, NULL, NULL, 'thuy.bt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(18, 3, NULL, 'Trần Văn Năng', 'Năng Trần Văn ', 'Năng', 'Trần Văn ', 'C3_Cấp trung học phổ thông', 'Giáo viên Giáo dục Công dân K12', NULL, NULL, NULL, NULL, NULL, 'nang.tv@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(19, 3, NULL, 'Nguyễn Đức Trường', 'Trường Nguyễn Đức ', 'Trường', 'Nguyễn Đức ', 'C3_Cấp trung học phổ thông', 'Giáo viên Hóa', NULL, NULL, NULL, NULL, NULL, 'truong.nd@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(20, 3, NULL, 'Nguyễn Phương Duy', 'Duy Nguyễn Phương ', 'Duy', 'Nguyễn Phương ', 'C3_Cấp trung học phổ thông', 'Giáo viên Hóa', NULL, NULL, NULL, NULL, NULL, 'duy.np@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(21, 3, NULL, 'Satbinder Deshi', 'Deshi Satbinder ', 'Deshi', 'Satbinder ', 'C3_Cấp trung học phổ thông', 'Giáo Viên Humanities/ Senior Teacher', NULL, NULL, NULL, NULL, NULL, 'satbinder.Deshi@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(22, 3, NULL, 'Phạm Thị Ngọc Hân', 'Hân Phạm Thị Ngọc ', 'Hân', 'Phạm Thị Ngọc ', 'C1_Cấp Tiểu học', 'Giáo viên Khoa học (Science)', NULL, NULL, NULL, NULL, NULL, 'han.ptn@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(23, 3, NULL, 'Đỗ Minh Đức', 'Đức Đỗ Minh ', 'Đức', 'Đỗ Minh ', 'C1_Cấp Tiểu học', 'Giáo viên Khoa học (Science)', NULL, NULL, NULL, NULL, NULL, 'duc.dm@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(24, 3, NULL, 'Todd Michael Paget', 'Paget Todd Michael ', 'Paget', 'Todd Michael ', 'C2_Cấp trung học cơ sở', 'Giáo viên Khoa học (Science)', NULL, NULL, NULL, NULL, NULL, 'paget.mt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(25, 3, NULL, 'Phillip John Balistriere', 'Balistriere Phillip John ', 'Balistriere', 'Phillip John ', 'C2_Cấp trung học cơ sở', 'Giáo viên Khoa học (Science)', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(26, 3, NULL, 'Mã Thị Thanh Xuân', 'Xuân Mã Thị Thanh ', 'Xuân', 'Mã Thị Thanh ', 'C2_Cấp trung học cơ sở', 'Giáo viên Khoa học xã hội', NULL, NULL, NULL, NULL, NULL, 'xuan.mtt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(27, 3, NULL, 'Ashley James Edwards', 'Edwards Ashley James ', 'Edwards', 'Ashley James ', 'C1_Cấp Tiểu học', 'Giáo viên Kịch nghệ', NULL, NULL, NULL, NULL, NULL, 'ashley.ej@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(28, 3, NULL, 'Ngô Thị Thu Hà', 'Hà Ngô Thị Thu ', 'Hà', 'Ngô Thị Thu ', 'C3_Cấp trung học phổ thông', 'Giáo viên Kinh tế - Pháp luật THPT', NULL, NULL, NULL, NULL, NULL, 'ha.ntt4@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(29, 3, NULL, 'Ngô Minh Trang', 'Trang Ngô Minh ', 'Trang', 'Ngô Minh ', 'C2_Cấp trung học cơ sở', 'Giáo viên Life', NULL, NULL, NULL, NULL, NULL, 'trang.nm@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(30, 3, NULL, 'Lương Thế Huy', 'Huy Lương Thế ', 'Huy', 'Lương Thế ', 'C3_Cấp trung học phổ thông', 'Giáo viên Luật', NULL, NULL, NULL, NULL, NULL, 'huy.lt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(31, 3, NULL, 'Phạm Thùy Giang', 'Giang Phạm Thùy ', 'Giang', 'Phạm Thùy ', 'C3_Cấp trung học phổ thông', 'Giáo viên Lý', NULL, NULL, NULL, NULL, NULL, 'giang.pt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(32, 3, NULL, 'Trần Khánh', 'Khánh Trần ', 'Khánh', 'Trần ', 'C3_Cấp trung học phổ thông', 'Giáo viên Lý', NULL, NULL, NULL, NULL, NULL, 'khanh.tran@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(33, 3, NULL, 'Đinh Thị Thương', 'Thương Đinh Thị ', 'Thương', 'Đinh Thị ', 'C1_Cấp Tiểu học', 'Giáo viên Mầm non', NULL, NULL, NULL, NULL, NULL, 'thuong.dt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(34, 3, NULL, 'Nguyễn Thị Mỹ Hạnh', 'Hạnh Nguyễn Thị Mỹ ', 'Hạnh', 'Nguyễn Thị Mỹ ', 'C1_Cấp Tiểu học', 'Giáo viên Mầm non', NULL, NULL, NULL, NULL, NULL, 'hanh.ntm1@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(35, 3, NULL, 'Nguyễn Thị Kim Nga', 'Nga Nguyễn Thị Kim ', 'Nga', 'Nguyễn Thị Kim ', 'C1_Cấp Tiểu học', 'Giáo viên Mỹ thuật', NULL, NULL, NULL, NULL, NULL, 'nga.ntk@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(36, 3, NULL, 'Trần Thị Phương Anh', 'Anh Trần Thị Phương ', 'Anh', 'Trần Thị Phương ', 'C1_Cấp Tiểu học', 'Giáo viên Mỹ thuật', NULL, NULL, NULL, NULL, NULL, 'anh.ttp@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(37, 3, NULL, 'Phạm Thị Thúy Hằng', 'Hằng Phạm Thị Thúy ', 'Hằng', 'Phạm Thị Thúy ', 'C1_Cấp Tiểu học', 'Giáo viên Mỹ thuật', NULL, NULL, NULL, NULL, NULL, 'hang.ptt1@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(38, 3, NULL, 'Phan Phượng Hoàng', 'Hoàng Phan Phượng ', 'Hoàng', 'Phan Phượng ', 'C2_Cấp trung học cơ sở', 'Giáo viên Mỹ thuật', NULL, NULL, NULL, NULL, NULL, 'hoang.pp@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(39, 3, NULL, 'Hoàng Kim Hạnh', 'Hạnh Hoàng Kim ', 'Hạnh', 'Hoàng Kim ', 'C3_Cấp trung học phổ thông', 'Giáo viên Mỹ thuật', NULL, NULL, NULL, NULL, NULL, 'hanh.hk@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(40, 3, NULL, 'Giang Thiên Tùng', 'Tùng Giang Thiên ', 'Tùng', 'Giang Thiên ', 'C3_Cấp trung học phổ thông', 'Giáo viên Mỹ thuật', NULL, NULL, NULL, NULL, NULL, 'tung.gt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(41, 3, NULL, 'Nguyễn Quang Huy', 'Huy Nguyễn Quang ', 'Huy', 'Nguyễn Quang ', 'C3_Cấp trung học phổ thông', 'Giáo viên Sinh', NULL, NULL, NULL, NULL, NULL, 'huy.nq@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(42, 3, NULL, 'Tạ Thị Hòa', 'Hòa Tạ Thị ', 'Hòa', 'Tạ Thị ', 'C2_Cấp trung học cơ sở', 'Giáo viên Sinh học', NULL, NULL, NULL, NULL, NULL, 'hoa.tt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(43, 3, NULL, 'Bùi Thị Phương Thảo', 'Thảo Bùi Thị Phương ', 'Thảo', 'Bùi Thị Phương ', 'C3_Cấp trung học phổ thông', 'Giáo viên Sinh học, PT Phòng Thí nghiệm', NULL, NULL, NULL, NULL, NULL, 'thao.btp@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(44, 3, NULL, 'Nguyễn Thị Hà', 'Hà Nguyễn Thị ', 'Hà', 'Nguyễn Thị ', 'C2_Cấp trung học cơ sở', 'Giáo viên Sử', NULL, NULL, NULL, NULL, NULL, 'ha.nt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(45, 3, NULL, 'Nguyễn Anh Tuấn', 'Tuấn Nguyễn Anh ', 'Tuấn', 'Nguyễn Anh ', 'C1_Cấp Tiểu học', 'Giáo viên Thể dục', NULL, NULL, NULL, NULL, NULL, 'tuan.na@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(46, 3, NULL, 'Phạm Thị Hường', 'Hường Phạm Thị ', 'Hường', 'Phạm Thị ', 'C1_Cấp Tiểu học', 'Giáo viên Thể dục', NULL, NULL, NULL, NULL, NULL, 'huong.pt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(47, 3, NULL, 'Trần Đức Hoàng', 'Hoàng Trần Đức ', 'Hoàng', 'Trần Đức ', 'C2_Cấp trung học cơ sở', 'Giáo viên Thể dục', NULL, NULL, NULL, NULL, NULL, 'hoang.td@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(48, 3, NULL, 'Nguyễn Khắc Huân', 'Huân Nguyễn Khắc ', 'Huân', 'Nguyễn Khắc ', 'C2_Cấp trung học cơ sở', 'Giáo viên Thể dục', NULL, NULL, NULL, NULL, NULL, 'huan.nk@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(49, 3, NULL, 'Nicholas Anthony George', 'George Nicholas Anthony ', 'George', 'Nicholas Anthony ', 'C2_Cấp trung học cơ sở', 'Giáo viên Thể dục', NULL, NULL, NULL, NULL, NULL, 'nicholas.ga@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(50, 3, NULL, 'Đỗ Quý Toản', 'Toản Đỗ Quý ', 'Toản', 'Đỗ Quý ', 'C3_Cấp trung học phổ thông', 'Giáo viên Thể dục', NULL, NULL, NULL, NULL, NULL, 'toan.dq@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(51, 3, NULL, 'Mai Xuân Linh', 'Linh Mai Xuân ', 'Linh', 'Mai Xuân ', 'C1_Cấp Tiểu học', 'Giáo viên Thể dục - Phụ trách kỷ luật K1-4', NULL, NULL, NULL, NULL, NULL, 'linh.mx@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(52, 3, NULL, 'Nguyễn Hữu Nghị', 'Nghị Nguyễn Hữu ', 'Nghị', 'Nguyễn Hữu ', 'C3_Cấp trung học phổ thông', 'Giáo viên Thể dục-Thành viên Ban kỷ luật học sinh', NULL, NULL, NULL, NULL, NULL, 'nghi.nh@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(53, 3, NULL, 'Đỗ Thị Ngọc Ánh', 'Ánh Đỗ Thị Ngọc ', 'Ánh', 'Đỗ Thị Ngọc ', 'C1_Cấp Tiểu học', 'Giáo Viên Tiếng Anh', NULL, NULL, NULL, NULL, NULL, 'anh.dtn@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(54, 3, NULL, 'Nguyễn Thị Hồng Ngọc', 'Ngọc Nguyễn Thị Hồng ', 'Ngọc', 'Nguyễn Thị Hồng ', 'C1_Cấp Tiểu học', 'Giáo viên Tiếng Anh', NULL, NULL, NULL, NULL, NULL, 'ngoc.nth@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(55, 3, NULL, 'Nguyễn Phương Thảo', 'Thảo Nguyễn Phương ', 'Thảo', 'Nguyễn Phương ', 'C1_Cấp Tiểu học', 'Giáo Viên Tiếng Anh', NULL, NULL, NULL, NULL, NULL, 'thao.np@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(56, 3, NULL, 'Phạm Thị Thúy Hằng', 'Hằng Phạm Thị Thúy ', 'Hằng', 'Phạm Thị Thúy ', 'C1_Cấp Tiểu học', 'Giáo Viên Tiếng Anh', NULL, NULL, NULL, NULL, NULL, 'hang.ptt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(57, 3, NULL, 'BRIAN PATRICK MCCAFFERY', 'MCCAFFERY BRIAN PATRICK ', 'MCCAFFERY', 'BRIAN PATRICK ', 'C1_Cấp Tiểu học', 'Giáo Viên Tiếng Anh', NULL, NULL, NULL, NULL, NULL, 'brian.pc@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(58, 3, NULL, 'Hoàng Mai Hiền', 'Hiền Hoàng Mai ', 'Hiền', 'Hoàng Mai ', 'C1_Cấp Tiểu học', 'Giáo viên Tiếng Anh', NULL, NULL, NULL, NULL, NULL, 'hien.hm@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(59, 3, NULL, 'Dominic Marshall', 'Marshall Dominic ', 'Marshall', 'Dominic ', 'C1_Cấp Tiểu học', 'Giáo Viên Tiếng Anh', NULL, NULL, NULL, NULL, NULL, 'dominic.Marshall@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(60, 3, NULL, 'Amber Eleanor Salsbury', 'Salsbury Amber Eleanor ', 'Salsbury', 'Amber Eleanor ', 'C1_Cấp Tiểu học', 'Giáo Viên Tiếng Anh', NULL, NULL, NULL, NULL, NULL, 'amber.Salsbury@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(61, 3, NULL, 'Tạ Thị Diệu Hồng', 'Hồng Tạ Thị Diệu ', 'Hồng', 'Tạ Thị Diệu ', 'C2_Cấp trung học cơ sở', 'Giáo viên Tiếng Anh', NULL, NULL, NULL, NULL, NULL, 'hong.ttd@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(62, 3, NULL, 'Dustin Robert Lloyd', 'Lloyd Dustin Robert ', 'Lloyd', 'Dustin Robert ', 'C2_Cấp trung học cơ sở', 'Giáo viên Tiếng Anh', NULL, NULL, NULL, NULL, NULL, 'dustin.lr@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(63, 3, NULL, 'AFARINESH SARIR', 'SARIR AFARINESH ', 'SARIR', 'AFARINESH ', 'C2_Cấp trung học cơ sở', 'Giáo viên Tiếng Anh', NULL, NULL, NULL, NULL, NULL, 'afarinesh.sarir@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(64, 3, NULL, 'Trần Thị Phương Thảo', 'Thảo Trần Thị Phương ', 'Thảo', 'Trần Thị Phương ', 'C2_Cấp trung học cơ sở', 'Giáo Viên Tiếng Anh', NULL, NULL, NULL, NULL, NULL, 'thao.ttp@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(65, 3, NULL, 'Nguyễn Thị Định Lan', 'Lan Nguyễn Thị Định ', 'Lan', 'Nguyễn Thị Định ', 'C2_Cấp trung học cơ sở', 'Giáo Viên Tiếng Anh', NULL, NULL, NULL, NULL, NULL, 'lan.ntd@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(66, 3, NULL, 'Trần Thị Thùy', 'Thùy Trần Thị ', 'Thùy', 'Trần Thị ', 'C2_Cấp trung học cơ sở', 'Giáo Viên Tiếng Anh', NULL, NULL, NULL, NULL, NULL, 'thuy.tt1@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(67, 3, NULL, 'Jack William Cook', 'Cook Jack William ', 'Cook', 'Jack William ', 'C2_Cấp trung học cơ sở', 'Giáo Viên Tiếng Anh', NULL, NULL, NULL, NULL, NULL, 'jack.wc@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(68, 3, NULL, 'Richard Alexander Cronin', 'Cronin Richard Alexander ', 'Cronin', 'Richard Alexander ', 'C2_Cấp trung học cơ sở', 'Giáo Viên Tiếng Anh', NULL, NULL, NULL, NULL, NULL, 'richard.ac@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(69, 3, NULL, 'Sam Joshua Wardle', 'Wardle Sam Joshua ', 'Wardle', 'Sam Joshua ', 'C2_Cấp trung học cơ sở', 'Giáo Viên Tiếng Anh', NULL, NULL, NULL, NULL, NULL, 'sam.jw@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(70, 3, NULL, 'Mai Thị Ngọc Yến', 'Yến Mai Thị Ngọc ', 'Yến', 'Mai Thị Ngọc ', 'C3_Cấp trung học phổ thông', 'Giáo viên Tiếng Anh', NULL, NULL, NULL, NULL, NULL, 'yen.mtn@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(71, 3, NULL, 'Leonid Kanev', 'Kanev Leonid ', 'Kanev', 'Leonid ', 'C3_Cấp trung học phổ thông', 'Giáo Viên Tiếng Anh', NULL, NULL, NULL, NULL, NULL, 'kanev.leonid@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(72, 3, NULL, 'Ngô Trần Việt Hà', 'Hà Ngô Trần Việt ', 'Hà', 'Ngô Trần Việt ', 'C3_Cấp trung học phổ thông', 'Giáo viên Tiếng Anh', NULL, NULL, NULL, NULL, NULL, 'ha.ntv@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(73, 3, NULL, 'Hoàng Hồng Ngọc', 'Ngọc Hoàng Hồng ', 'Ngọc', 'Hoàng Hồng ', 'C3_Cấp trung học phổ thông', 'Giáo Viên Tiếng Anh', NULL, NULL, NULL, NULL, NULL, 'ngoc.hh@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(74, 3, NULL, 'Gabriel Lander Smith', 'Smith Gabriel Lander ', 'Smith', 'Gabriel Lander ', 'C3_Cấp trung học phổ thông', 'Giáo Viên Tiếng Anh', NULL, NULL, NULL, NULL, NULL, 'gabriel.ls@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(75, 3, NULL, 'Nhữ An Lâm Đức', 'Đức Nhữ An Lâm ', 'Đức', 'Nhữ An Lâm ', 'C3_Cấp trung học phổ thông', 'Giáo viên Tiếng Anh', NULL, NULL, NULL, NULL, NULL, 'duc.nal@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(76, 3, NULL, 'Nguyễn Hồng Nhung', 'Nhung Nguyễn Hồng ', 'Nhung', 'Nguyễn Hồng ', 'C2_Cấp trung học cơ sở', 'Giáo viên Tiếng Anh, Trợ lý BGH THCS', NULL, NULL, NULL, NULL, NULL, 'nhung.nh@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(77, 3, NULL, 'Phạm Lê Huy', 'Huy Phạm Lê ', 'Huy', 'Phạm Lê ', 'C3_Cấp trung học phổ thông', 'Giáo viên Tiếng Pháp', NULL, NULL, NULL, NULL, NULL, 'huy.pl@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(78, 3, NULL, 'Nguyễn Thị Minh Hạnh', 'Hạnh Nguyễn Thị Minh ', 'Hạnh', 'Nguyễn Thị Minh ', 'C1_Cấp Tiểu học', 'Giáo viên Tiếng Việt', NULL, NULL, NULL, NULL, NULL, 'hanh.ntm@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(79, 3, NULL, 'Phạm Hải Hà', 'Hà Phạm Hải ', 'Hà', 'Phạm Hải ', 'C1_Cấp Tiểu học', 'Giáo viên Tiếng Việt', NULL, NULL, NULL, NULL, NULL, 'ha.ph@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(80, 3, NULL, 'Trần Thị Thùy Dung', 'Dung Trần Thị Thùy ', 'Dung', 'Trần Thị Thùy ', 'C1_Cấp Tiểu học', 'Giáo viên Tiếng Việt', NULL, NULL, NULL, NULL, NULL, 'dung.ttt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(81, 3, NULL, 'Đặng Thị Vân Anh', 'Anh Đặng Thị Vân ', 'Anh', 'Đặng Thị Vân ', 'C1_Cấp Tiểu học', 'Giáo viên Tiếng Việt', NULL, NULL, NULL, NULL, NULL, 'anh.dtv@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(82, 3, NULL, 'Trần Thị Quỳnh', 'Quỳnh Trần Thị ', 'Quỳnh', 'Trần Thị ', 'C1_Cấp Tiểu học', 'Giáo viên Tiếng Việt', NULL, NULL, NULL, NULL, NULL, 'quynh.tt1@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(83, 3, NULL, 'Vũ Thị Thúy Hường', 'Hường Vũ Thị Thúy ', 'Hường', 'Vũ Thị Thúy ', 'C1_Cấp Tiểu học', 'Giáo viên Tiếng Việt', NULL, NULL, NULL, NULL, NULL, 'huong.vtt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(84, 3, NULL, 'Nguyễn Thị Diễm', 'Diễm Nguyễn Thị ', 'Diễm', 'Nguyễn Thị ', 'C1_Cấp Tiểu học', 'Giáo viên Tiếng Việt', NULL, NULL, NULL, NULL, NULL, 'diem.nt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(85, 3, NULL, 'Nguyễn Thị Huyền', 'Huyền Nguyễn Thị ', 'Huyền', 'Nguyễn Thị ', 'C1_Cấp Tiểu học', 'Giáo viên Tiếng Việt', NULL, NULL, NULL, NULL, NULL, 'huyen.nt2@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(86, 3, NULL, 'Lưu Thị Thu Huệ', 'Huệ Lưu Thị Thu ', 'Huệ', 'Lưu Thị Thu ', 'C1_Cấp Tiểu học', 'Giáo viên Tiếng Việt - Trưởng Khối 1', NULL, NULL, NULL, NULL, NULL, 'hue.ltt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(87, 3, NULL, 'Nguyễn Thu Huyền', 'Huyền Nguyễn Thu ', 'Huyền', 'Nguyễn Thu ', 'C1_Cấp Tiểu học', 'Giáo viên Tin học', NULL, NULL, NULL, NULL, NULL, 'huyen.nt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(88, 3, NULL, 'Nguyễn Thanh Hương', 'Hương Nguyễn Thanh ', 'Hương', 'Nguyễn Thanh ', 'C3_Cấp trung học phổ thông', 'Giáo viên Tin học', NULL, NULL, NULL, NULL, NULL, 'huong.nt1@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(89, 3, NULL, 'Trần Quốc Thư', 'Thư Trần Quốc ', 'Thư', 'Trần Quốc ', 'C3_Cấp trung học phổ thông', 'Giáo viên Tin học', NULL, NULL, NULL, NULL, NULL, 'thu.tq@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(90, 3, NULL, 'Bạch Thị Thu Hồng', 'Hồng Bạch Thị Thu ', 'Hồng', 'Bạch Thị Thu ', 'C2_Cấp trung học cơ sở', 'Giáo viên Tin học/ ICT', NULL, NULL, NULL, NULL, NULL, 'hong.btt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(91, 3, NULL, 'Đào Thị Huyền Thương', 'Thương Đào Thị Huyền ', 'Thương', 'Đào Thị Huyền ', 'C1_Cấp Tiểu học', 'Giáo viên Toán', NULL, NULL, NULL, NULL, NULL, 'thuong.dth@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(92, 3, NULL, 'Khuất Thị Tuấn', 'Tuấn Khuất Thị ', 'Tuấn', 'Khuất Thị ', 'C1_Cấp Tiểu học', 'Giáo viên Toán', NULL, NULL, NULL, NULL, NULL, 'tuan.kt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(93, 3, NULL, 'Đào Nguyễn Vân Anh', 'Anh Đào Nguyễn Vân ', 'Anh', 'Đào Nguyễn Vân ', 'C1_Cấp Tiểu học', 'Giáo viên Toán', NULL, NULL, NULL, NULL, NULL, 'anh.dnv@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(94, 3, NULL, 'Lê Thị Mận', 'Mận Lê Thị ', 'Mận', 'Lê Thị ', 'C1_Cấp Tiểu học', 'Giáo viên Toán', NULL, NULL, NULL, NULL, NULL, 'man.lt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(95, 3, NULL, 'Trịnh Thị Thu Hiền', 'Hiền Trịnh Thị Thu ', 'Hiền', 'Trịnh Thị Thu ', 'C1_Cấp Tiểu học', 'Giáo viên Toán', NULL, NULL, NULL, NULL, NULL, 'hien.ttt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(96, 3, NULL, 'Nguyễn Ngân Hà', 'Hà Nguyễn Ngân ', 'Hà', 'Nguyễn Ngân ', 'C1_Cấp Tiểu học', 'Giáo viên Toán', NULL, NULL, NULL, NULL, NULL, 'ha.nn@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(97, 3, NULL, 'Đặng Hà Phương', 'Phương Đặng Hà ', 'Phương', 'Đặng Hà ', 'C1_Cấp Tiểu học', 'Giáo viên Toán', NULL, NULL, NULL, NULL, NULL, 'phuong.dh@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(98, 3, NULL, 'Phạm Huyền Trang', 'Trang Phạm Huyền ', 'Trang', 'Phạm Huyền ', 'C2_Cấp trung học cơ sở', 'Giáo viên Toán', NULL, NULL, NULL, NULL, NULL, 'trang.ph@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(99, 3, NULL, 'Bùi Thị Bảo Trang', 'Trang Bùi Thị Bảo ', 'Trang', 'Bùi Thị Bảo ', 'C2_Cấp trung học cơ sở', 'Giáo viên Toán', NULL, NULL, NULL, NULL, NULL, 'trang.btb@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(100, 3, NULL, 'Võ Đức Anh', 'Anh Võ Đức ', 'Anh', 'Võ Đức ', 'C2_Cấp trung học cơ sở', 'Giáo viên Toán', NULL, NULL, NULL, NULL, NULL, 'anh.vd@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(101, 3, NULL, 'Phạm Thị Phương Lan', 'Lan Phạm Thị Phương ', 'Lan', 'Phạm Thị Phương ', 'C2_Cấp trung học cơ sở', 'Giáo viên Toán', NULL, NULL, NULL, NULL, NULL, 'lan.ptp@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(102, 3, NULL, 'Nguyễn Hoàng Ngọc Trâm', 'Trâm Nguyễn Hoàng Ngọc ', 'Trâm', 'Nguyễn Hoàng Ngọc ', 'C2_Cấp trung học cơ sở', 'Giáo viên Toán', NULL, NULL, NULL, NULL, NULL, 'tram.nhn@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(103, 3, NULL, 'Đặng Ngọc Mỹ Anh', 'Anh Đặng Ngọc Mỹ ', 'Anh', 'Đặng Ngọc Mỹ ', 'C2_Cấp trung học cơ sở', 'Giáo viên Toán', NULL, NULL, NULL, NULL, NULL, 'anh.dnm@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(104, 3, NULL, 'Đinh Đắc Hoàng', 'Hoàng Đinh Đắc ', 'Hoàng', 'Đinh Đắc ', 'C2_Cấp trung học cơ sở', 'Giáo viên Toán', NULL, NULL, NULL, NULL, NULL, 'hoang.dd@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(105, 3, NULL, 'Trần Minh Sơn', 'Sơn Trần Minh ', 'Sơn', 'Trần Minh ', 'C3_Cấp trung học phổ thông', 'Giáo viên Toán', NULL, NULL, NULL, NULL, NULL, 'son.tm@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(106, 3, NULL, 'Lê Tuấn Cường', 'Cường Lê Tuấn ', 'Cường', 'Lê Tuấn ', 'C3_Cấp trung học phổ thông', 'Giáo viên Toán', NULL, NULL, NULL, NULL, NULL, 'cuong.lt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(107, 3, NULL, 'Lê Đức Hưng', 'Hưng Lê Đức ', 'Hưng', 'Lê Đức ', 'C3_Cấp trung học phổ thông', 'Giáo viên Toán', NULL, NULL, NULL, NULL, NULL, 'hung.ld@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(108, 3, NULL, 'Nguyễn Thị Quỳnh', 'Quỳnh Nguyễn Thị ', 'Quỳnh', 'Nguyễn Thị ', 'C3_Cấp trung học phổ thông', 'Giáo viên Toán', NULL, NULL, NULL, NULL, NULL, 'quynh.nt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(109, 3, NULL, 'Lê Hà Linh', 'Linh Lê Hà ', 'Linh', 'Lê Hà ', 'C2_Cấp trung học cơ sở', 'Giáo viên Toán Tin học', NULL, NULL, NULL, NULL, NULL, 'linh.lh@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(110, 3, NULL, 'Omer Jem Reshat', 'Reshat Omer Jem ', 'Reshat', 'Omer Jem ', 'C1_Cấp Tiểu học', 'Giáo viên Toán, Khoa học', NULL, NULL, NULL, NULL, NULL, 'jem.ro@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(111, 3, NULL, 'Nguyễn Thị Chinh', 'Chinh Nguyễn Thị ', 'Chinh', 'Nguyễn Thị ', 'C3_Cấp trung học phổ thông', 'Giáo viên Toán-Trưởng Khối 11', NULL, NULL, NULL, NULL, NULL, 'chinh.nt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(112, 3, NULL, 'Hoàng Khánh Phương', 'Phương Hoàng Khánh ', 'Phương', 'Hoàng Khánh ', 'C1_Cấp Tiểu học', 'Giáo viên Toán-Trưởng Khối 2', NULL, NULL, NULL, NULL, NULL, 'phuong.hk@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(113, 3, NULL, 'Nguyễn Thị Huệ', 'Huệ Nguyễn Thị ', 'Huệ', 'Nguyễn Thị ', 'C2_Cấp trung học cơ sở', 'Giáo viên Văn', NULL, NULL, NULL, NULL, NULL, 'hue.nt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(114, 3, NULL, 'Kiều Thị Huế', 'Huế Kiều Thị ', 'Huế', 'Kiều Thị ', 'C2_Cấp trung học cơ sở', 'Giáo viên Văn', NULL, NULL, NULL, NULL, NULL, 'hue.kt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(115, 3, NULL, 'Nguyễn Thị Huệ', 'Huệ Nguyễn Thị ', 'Huệ', 'Nguyễn Thị ', 'C2_Cấp trung học cơ sở', 'Giáo viên Văn', NULL, NULL, NULL, NULL, NULL, 'hue.nt1@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(116, 3, NULL, 'Trần Phương Thanh', 'Thanh Trần Phương ', 'Thanh', 'Trần Phương ', 'C3_Cấp trung học phổ thông', 'Giáo viên Văn', NULL, NULL, NULL, NULL, NULL, 'thanh.tp@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(117, 3, NULL, 'Trần Khánh Linh', 'Linh Trần Khánh ', 'Linh', 'Trần Khánh ', 'C3_Cấp trung học phổ thông', 'Giáo viên Văn', NULL, NULL, NULL, NULL, NULL, 'linh.tk@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(118, 3, NULL, 'Lê Hồng Hạnh', 'Hạnh Lê Hồng ', 'Hạnh', 'Lê Hồng ', 'C3_Cấp trung học phổ thông', 'Giáo viên Văn', NULL, NULL, NULL, NULL, NULL, 'hanh.lh@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(119, 3, NULL, 'Nguyễn Việt Cường', 'Cường Nguyễn Việt ', 'Cường', 'Nguyễn Việt ', 'C3_Cấp trung học phổ thông', 'Giáo viên Văn', NULL, NULL, NULL, NULL, NULL, 'cuong.nv1@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(120, 3, NULL, 'Đàm Phương Thảo', 'Thảo Đàm Phương ', 'Thảo', 'Đàm Phương ', 'C3_Cấp trung học phổ thông', 'Giáo viên Văn - Trưởng khối 10', NULL, NULL, NULL, NULL, NULL, 'thao.dp@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(121, 3, NULL, 'Mai Thị Khánh Hòa', 'Hòa Mai Thị Khánh ', 'Hòa', 'Mai Thị Khánh ', 'C2_Cấp trung học cơ sở', 'Giáo viên Văn-Trưởng Khối 6', NULL, NULL, NULL, NULL, NULL, 'hoa.mtk@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(122, 3, NULL, 'Nguyễn Thị Minh Khuê', 'Khuê Nguyễn Thị Minh ', 'Khuê', 'Nguyễn Thị Minh ', 'C2_Cấp trung học cơ sở', 'Giáo viên Vật lý, PT Phòng Thí nghiệm', NULL, NULL, NULL, NULL, NULL, 'khue.ntm@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(123, 3, NULL, 'Nguyễn Thu Bích Hà', 'Hà Nguyễn Thu Bích ', 'Hà', 'Nguyễn Thu Bích ', 'C1_Cấp Tiểu học', 'Nhóm trưởng Mầm non', NULL, NULL, NULL, NULL, NULL, 'ha.ntb@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(124, 3, NULL, 'Phạm Thị Minh An', 'An Phạm Thị Minh ', 'An', 'Phạm Thị Minh ', '1. PB_CH0100_HỘI ĐỒNG QUẢN TRỊ', 'Phó Chủ tịch HĐQT-Chủ tịch HĐCM-Hiệu trưởng THPT-Phụ trách Ban Đầu tư & Phát triển', NULL, NULL, NULL, NULL, NULL, 'an.ptm@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(125, 3, NULL, 'Lê Thị Hằng Nga', 'Nga Lê Thị Hằng ', 'Nga', 'Lê Thị Hằng ', '3. PB_CH0300_BAN ĐIỀU HÀNH', 'Phó Giám đốc phụ trách Hành chính - Nhân sự', NULL, NULL, NULL, NULL, NULL, 'nga.lth@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(126, 3, NULL, 'Nguyễn Hồng Duyên', 'Duyên Nguyễn Hồng ', 'Duyên', 'Nguyễn Hồng ', 'C3_Cấp trung học phổ thông', 'Phó Hiệu trưởng - Điều phối cấp THPT-Phụ trách Chuyên môn THPT', NULL, NULL, NULL, NULL, NULL, 'duyen.nh@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(127, 3, NULL, 'Nguyễn Thị Hằng', 'Hằng Nguyễn Thị ', 'Hằng', 'Nguyễn Thị ', 'C1_Cấp Tiểu học', 'Phó Hiệu trưởng TH & THCS -Điều phối cấp Tiểu học-Phụ trách đời sống học đường Tiểu học-Giáo viên Toán', NULL, NULL, NULL, NULL, NULL, 'hang.nt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(128, 3, NULL, 'Nguyễn Thị Tâm Hiền', 'Hiền Nguyễn Thị Tâm ', 'Hiền', 'Nguyễn Thị Tâm ', 'C2_Cấp trung học cơ sở', 'Phó Hiệu trưởng TH&THCS - Điều phối cấp THCS-Phụ trách Đời sống học đường THCS-Giáo viên Ngữ văn', NULL, NULL, NULL, NULL, NULL, 'hien.ntt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(129, 3, NULL, 'Đặng Thu Hương', 'Hương Đặng Thu ', 'Hương', 'Đặng Thu ', 'C2_Cấp trung học cơ sở', 'Phó Hiệu trưởng TH&THCS-Phụ trách chuyên môn THCS-Tổ trưởng Tổ Toán THCS-Giáo viên Toán', NULL, NULL, NULL, NULL, NULL, 'huong.dt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(130, 3, NULL, 'Vũ Thị Loan', 'Loan Vũ Thị ', 'Loan', 'Vũ Thị ', 'C3_Cấp trung học phổ thông', 'Phụ trách chương trình BM Sử - Địa-Tổ trưởng Tổ Sử - Địa (K4-K12)-Giáo viên Sử', NULL, NULL, NULL, NULL, NULL, 'loan.vt1@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(131, 3, NULL, 'Võ Thục Anh', 'Anh Võ Thục ', 'Anh', 'Võ Thục ', 'C3_Cấp trung học phổ thông', 'Phụ trách chương trình BM Tiếng Anh-Tổ Trưởng Tổ Ngoại ngữ THPT-Giáo viên Tiếng Anh', NULL, NULL, NULL, NULL, NULL, 'anh.vt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(132, 3, NULL, 'Nguyễn Thị Minh Thủy', 'Thủy Nguyễn Thị Minh ', 'Thủy', 'Nguyễn Thị Minh ', 'C3_Cấp trung học phổ thông', 'Phụ trách chương trình BM Tiếng Việt và Ngữ Văn-Tổ trưởng Tổ Văn THPT-Giáo viên Văn', NULL, NULL, NULL, NULL, NULL, 'thuy.ntm@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(133, 3, NULL, 'Phạm Lệ Thủy', 'Thủy Phạm Lệ ', 'Thủy', 'Phạm Lệ ', 'C3_Cấp trung học phổ thông', 'Quản lý Chương trình quốc tế THPT', NULL, NULL, NULL, NULL, NULL, 'thuy.pl@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(134, 3, NULL, 'Đinh Thị Thanh Bình', 'Bình Đinh Thị Thanh ', 'Bình', 'Đinh Thị Thanh ', '3. PB_CH0300_BAN ĐIỀU HÀNH', 'Thành viên Ban Điều hành - Phụ trách Khối Trường học', NULL, NULL, NULL, NULL, NULL, 'binh.dtt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(135, 3, NULL, 'Phạm Thu Ngọc', 'Ngọc Phạm Thu ', 'Ngọc', 'Phạm Thu ', 'C1_Cấp Tiểu học', 'Thành viên Ban Giám hiệu TH & THCS-Phụ trách Chuyên môn Tiểu học-Giáo viên Tiếng Việt', NULL, NULL, NULL, NULL, NULL, 'ngoc.pt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(136, 3, NULL, 'Nguyễn Hạnh Chi', 'Chi Nguyễn Hạnh ', 'Chi', 'Nguyễn Hạnh ', 'C3_Cấp trung học phổ thông', 'Thành viên Ban Giám Hiệu THPT, Trưởng Văn phòng Tư vấn Đại học, Du học & Hướng nghiệp', NULL, NULL, NULL, NULL, NULL, 'chi.nh@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(137, 3, NULL, 'Trần Quốc Dân', 'Dân Trần Quốc ', 'Dân', 'Trần Quốc ', 'C3_Cấp trung học phổ thông', 'Thành viên Ban Giám Hiệu THPT-Phụ trách chuyên môn THPT-Phụ trách chương trình BM Toán-Tổ trưởng Tổ Toán THPT-Giáo viên Toán', NULL, NULL, NULL, NULL, NULL, 'dan.tq@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(138, 3, NULL, 'Bùi Trà My', 'My Bùi Trà ', 'My', 'Bùi Trà ', 'C3_Cấp trung học phổ thông', 'Thành viên Ban Giám hiệu THPT-Phụ trách Đời sống học đường THPT-Tổ trưởng Tổ Khoa học xã hội-Giáo viên Khoa học xã hội', NULL, NULL, NULL, NULL, NULL, 'my.bt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(139, 3, NULL, 'Đỗ Thị Bảo Linh', 'Linh Đỗ Thị Bảo ', 'Linh', 'Đỗ Thị Bảo ', 'C3_Cấp trung học phổ thông', 'Thành viên Ban Giám hiệu THPT-Phụ trách Nội chính THPT-Phụ trách kỷ luật học sinh', NULL, NULL, NULL, NULL, NULL, 'linh.dtb@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(140, 3, NULL, 'Lê Thanh Hà', 'Hà Lê Thanh ', 'Hà', 'Lê Thanh ', 'C2_Cấp trung học cơ sở', 'Tổ trưởng Tổ Khoa học & Công Nghệ  (K1 - 12)', NULL, NULL, NULL, NULL, NULL, 'ha.lt1@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(141, 3, NULL, 'Lương Thu Hà', 'Hà Lương Thu ', 'Hà', 'Lương Thu ', 'C3_Cấp trung học phổ thông', 'Tổ trưởng Tổ Mỹ thuật (K1-12)-Giáo viên Mỹ thuật', NULL, NULL, NULL, NULL, NULL, 'ha.lt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(142, 3, NULL, 'Ngô Thị Hồng Liên', 'Liên Ngô Thị Hồng ', 'Liên', 'Ngô Thị Hồng ', 'C2_Cấp trung học cơ sở', 'Tổ trưởng Tổ Ngữ Văn THCS (K5-8), Trưởng Khối 6', NULL, NULL, NULL, NULL, NULL, 'lien.nth1@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(143, 3, NULL, 'Đồng Trường Sơn', 'Sơn Đồng Trường ', 'Sơn', 'Đồng Trường ', 'C2_Cấp trung học cơ sở', 'Tổ trưởng Tổ thể dục (K1-12)-Phụ trách kỷ luật học sinh THCS', NULL, NULL, NULL, NULL, NULL, 'son.dt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(144, 3, NULL, 'Lưu Thị Giang', 'Giang Lưu Thị ', 'Giang', 'Lưu Thị ', 'C2_Cấp trung học cơ sở', 'Tổ trưởng Tổ Tiếng Anh THCS', NULL, NULL, NULL, NULL, NULL, 'giang.lt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(145, 3, NULL, 'Hoàng Bích Thủy', 'Thủy Hoàng Bích ', 'Thủy', 'Hoàng Bích ', 'C1_Cấp Tiểu học', 'Tổ Trưởng Tổ Tiếng Anh Tiểu học', NULL, NULL, NULL, NULL, NULL, 'thuy.hb@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(146, 3, NULL, 'Tạ Phương Anh', 'Anh Tạ Phương ', 'Anh', 'Tạ Phương ', 'C1_Cấp Tiểu học', 'Tổ trưởng Tổ Tiếng Việt Tiểu học', NULL, NULL, NULL, NULL, NULL, 'anh.tp@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(147, 3, NULL, 'Nguyễn Thị Thu Hà', 'Hà Nguyễn Thị Thu ', 'Hà', 'Nguyễn Thị Thu ', 'C2_Cấp trung học cơ sở', 'Tổ trưởng Tổ Tin học (K1 - 12)', NULL, NULL, NULL, NULL, NULL, 'ha.ntt1@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(148, 3, NULL, 'Trần Xuân Hương', 'Hương Trần Xuân ', 'Hương', 'Trần Xuân ', 'C1_Cấp Tiểu học', 'Tổ trưởng Tổ Toán tiểu học', NULL, NULL, NULL, NULL, NULL, 'huong.tx@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(149, 3, NULL, 'Lê Huyền My', 'My Lê Huyền ', 'My', 'Lê Huyền ', 'C2_Cấp trung học cơ sở', 'Trợ giảng Tiếng Anh', NULL, NULL, NULL, NULL, NULL, 'my.lh@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(150, 3, NULL, 'Phương Hoài Nga', 'Nga Phương Hoài ', 'Nga', 'Phương Hoài ', '3. PB_CH0300_BAN ĐIỀU HÀNH', 'Trợ lý Giám đốc Điều hành', NULL, NULL, NULL, NULL, NULL, 'nga.ph@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(151, 3, NULL, 'Nguyễn Hải Yến', 'Yến Nguyễn Hải ', 'Yến', 'Nguyễn Hải ', 'C3_Cấp trung học phổ thông', 'Trưởng bộ môn Âm nhạc (K1 - 12), Phụ trách Bộ môn Sáng tạo và phát triển thể chất THPT', NULL, NULL, NULL, NULL, NULL, 'yen.nh@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(152, 3, NULL, 'Trần Vân Khánh', 'Khánh Trần Vân ', 'Khánh', 'Trần Vân ', 'C3_Cấp trung học phổ thông', 'Trưởng khối 12-Giáo viên Sử', NULL, NULL, NULL, NULL, NULL, 'khanh.tv@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(153, 3, NULL, 'Vũ Thị Ngọc Huyền', 'Huyền Vũ Thị Ngọc ', 'Huyền', 'Vũ Thị Ngọc ', 'C1_Cấp Tiểu học', 'Trưởng Khối 3-Phụ trách Hoạt động học sinh Tiểu học', NULL, NULL, NULL, NULL, NULL, 'huyen.vtn@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(154, 3, NULL, 'Phạm Thị Chung Hà', 'Hà Phạm Thị Chung ', 'Hà', 'Phạm Thị Chung ', 'C1_Cấp Tiểu học', 'Trưởng Khối 4-Giáo viên Tiếng Anh', NULL, NULL, NULL, NULL, NULL, 'ha.ptc@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(155, 3, NULL, 'Nguyễn Diệu Hoa', 'Hoa Nguyễn Diệu ', 'Hoa', 'Nguyễn Diệu ', 'C2_Cấp trung học cơ sở', 'Trưởng Khối 5-Giáo viên Ngữ văn', NULL, NULL, NULL, NULL, NULL, 'hoa.nd@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(156, 3, NULL, 'Phạm Thị Mai Nguyệt', 'Nguyệt Phạm Thị Mai ', 'Nguyệt', 'Phạm Thị Mai ', 'C2_Cấp trung học cơ sở', 'Trưởng khối 7-Giáo viên Lý', NULL, NULL, NULL, NULL, NULL, 'nguyet.ptm@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(157, 3, NULL, 'Dương Thị Thu Hiền', 'Hiền Dương Thị Thu ', 'Hiền', 'Dương Thị Thu ', 'C2_Cấp trung học cơ sở', 'Trưởng khối 8-Giáo viên Hóa', NULL, NULL, NULL, NULL, NULL, 'hien.dtt1@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL),
(158, 3, NULL, 'Nguyễn Thị Trinh', 'Trinh Nguyễn Thị ', 'Trinh', 'Nguyễn Thị ', 'C3_Cấp trung học phổ thông', 'Trưởng khối 9-Giáo viên Địa lý', NULL, NULL, NULL, NULL, NULL, 'trinh.nt@theolympiaschools.edu.vn', NULL, NULL, NULL, '2020-09-30 11:12:13', '2020-09-30 11:12:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `qa-qc` int(10) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `qa-qc`, `image`, `mobile`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dat', 'datnt@ieg.vn', 1, NULL, 'default.png', '0344445304', NULL, '$2y$10$JLfUiJAzhXavGtNhCASv/OAOcYxYnaRHahcKwcczUVDrVmdv8PjP6', NULL, '2020-02-10 20:39:12', '2020-02-11 04:27:33'),
(10, 'Phạm Thị Minh An', 'an.ptm@theolympiaschools.edu.vn', 1, 1, 'default.png', NULL, NULL, '$2y$10$S.OTaa6xepAd2VT126b.ius4BmMJKe6xvpQuMwYhHcQsbFLJUqCK.', NULL, '2020-09-25 04:21:33', '2020-09-25 04:21:33'),
(11, 'Vũ Thị Diệu Lý', 'ly.vtd@theolympiaschools.edu.vn', 1, 1, 'default.png', NULL, NULL, '$2y$10$khIvmBvkb4f2wQpHY6/MFOEGqkVRqz/u3A3J/rUg48sbHz4irsk7O', NULL, '2020-09-25 04:21:33', '2020-09-25 04:21:33'),
(12, 'Nguyễn Chí Hiếu', 'hieu.nc@theolympiaschools.edu.vn', 1, 1, 'default.png', NULL, NULL, '$2y$10$PKkuhXHNATqT976lPHlYQOWVOIizWp9Lre0k52bdJtHDZ335.XPui', NULL, '2020-09-25 04:21:33', '2020-09-25 04:21:33'),
(13, 'Trần Thị Thúy Liên', 'lien.ttt@theolympiaschools.edu.vn', 1, 1, 'default.png', NULL, NULL, '$2y$10$nX7AngUoQesyHo1ZeKtRMOLc7NN3VkDJUV6XJAAcMNmuSeGrXxnd2', NULL, '2020-09-25 04:21:34', '2020-09-25 04:21:34'),
(14, 'Nguyễn Thị Thu Thảo', 'thao.ntt1@theolympiaschools.edu.vn', 1, 1, 'default.png', NULL, NULL, '$2y$10$xSH8n6IqRnRmtd3RYIaL7uBC6oV2NMEnT41S//cItonvSIfCAGiZa', NULL, '2020-09-25 04:21:34', '2020-09-25 04:21:34'),
(15, 'Trần Thị Thanh Tâm', 'tam.ttt@theolympiaschools.edu.vn', 1, 1, 'default.png', NULL, NULL, '$2y$10$v9E8LVGToI/XFcbCDNl9A.2lrbBpwrF8QdNfqK0BbWQrmwwwL4fqq', NULL, '2020-09-25 04:21:34', '2020-09-25 04:21:34'),
(16, 'Trần Quốc Dân', 'dan.tq@theolympiaschools.edu.vn', 1, 1, 'default.png', NULL, NULL, '$2y$10$gXFudIa76MsSaRwY7Pz6zeST3EZJuGSsEF..v7VWHJHeermsYkX1m', NULL, '2020-09-25 04:21:34', '2020-09-25 04:21:34'),
(17, 'Nguyễn Thị Minh Thủy', 'thuy.ntm@theolympiaschools.edu.vn', 1, 1, 'default.png', NULL, NULL, '$2y$10$4l94mUyQyzSYXm.Q4LjSh.VjixFqXhlhCNyvWfjiTTn6A3rJKB0gi', NULL, '2020-09-25 04:21:34', '2020-09-25 04:21:34'),
(18, 'Võ Thục Anh', 'anh.vt@theolympiaschools.edu.vn', 1, 1, 'default.png', NULL, NULL, '$2y$10$Leuv1AUKl1R9LBQmoxMipeAKjyycfPiUoc3QveZVXxAVwjx6gbIS2', NULL, '2020-09-25 04:21:34', '2020-09-25 04:21:34'),
(19, 'Vũ Thị Loan', 'loan.vt1@theolympiaschools.edu.vn', 1, 1, 'default.png', NULL, NULL, '$2y$10$ZUlqA5oqIO9rNmWL8Wraj.smMF06sncUImv.nk.mTG9x1PYumCHZm', NULL, '2020-09-25 04:21:34', '2020-09-25 04:21:34'),
(20, 'Lê Thanh Hà', 'ha.lt1@theolympiaschools.edu.vn', 1, 1, 'default.png', NULL, NULL, '$2y$10$5ZYjAKzOchsCkxb.hShrdObAw/DSZ9cgZipAhSf0grLMudCW5l/t2', NULL, '2020-09-25 04:21:34', '2020-09-25 04:21:34'),
(21, 'Phạm Thu Ngọc', 'ngoc.pt@theolympiaschools.edu.vn', 1, 2, 'default.png', NULL, NULL, '$2y$10$cEWGaVNNeEwLFaAg00twP.BJyZUz.kszUZdgCk/IyEng9W6Of/z..', NULL, '2020-09-25 04:21:34', '2020-09-25 04:21:34'),
(22, 'Nguyễn Thị Hằng', 'hang.nt@theolympiaschools.edu.vn', 1, 2, 'default.png', NULL, NULL, '$2y$10$fSAajBo7BWlg5gWxqr9Lb.paAAPEppYL54hPpUlFMTu5ZoaB039hK', NULL, '2020-09-25 04:21:34', '2020-09-25 04:21:34'),
(23, 'Đặng Thu Hương', 'huong.dt@theolympiaschools.edu.vn', 1, 2, 'default.png', NULL, NULL, '$2y$10$jZAjM3u5GyGcmNrhu26HkeP1UWJSr//mxXjmvwW6enpCyeE2M/bQ6', NULL, '2020-09-25 04:21:34', '2020-09-25 04:21:34'),
(24, 'Nguyễn Thị Tâm Hiền', 'hien.ntt@theolympiaschools.edu.vn', 1, 2, 'default.png', NULL, NULL, '$2y$10$i6sSVQVGE6u.uFCU.HN7veOBG3B3nKNkyYDZuQcjKBYLSQRYbA5a.', NULL, '2020-09-25 04:21:35', '2020-09-25 04:21:35'),
(25, 'Nguyễn Hồng Duyên', 'duyen.nh@theolympiaschools.edu.vn', 1, 2, 'default.png', NULL, NULL, '$2y$10$Jlcgfxnl8e4Ee88FAVlyKer9.nYJd7rRO/j8c2vxdDLT.vDJSXJmO', NULL, '2020-09-25 04:21:35', '2020-09-25 04:21:35'),
(26, 'Bùi Trà My', 'my.bt@theolympiaschools.edu.vn', 1, 2, 'default.png', NULL, NULL, '$2y$10$u7wSySPE22vbM6pOyZS95eKLTgL1u4buqxAus0XCAhWBrhzRttwYO', NULL, '2020-09-25 04:21:35', '2020-09-25 04:21:35'),
(27, 'Ngô Thị Hồng Liên', 'lien.nth1@theolympiaschools.edu.vn', 1, 2, 'default.png', NULL, NULL, '$2y$10$7lOZZT4eVZWC1DBrq/vDWO4PeJfCC/FFz.T9lzpzFMjU.ygliCMri', NULL, '2020-09-25 04:21:35', '2020-09-25 04:21:35'),
(28, 'Lưu Thị Giang', 'giang.lt@theolympiaschools.edu.vn', 1, 2, 'default.png', NULL, NULL, '$2y$10$.20Z7Lo.t1OcnFvKhgYcNeEmBTpx7MxhlvaB/ZO8osAH0Uy2D7zaK', NULL, '2020-09-25 04:21:35', '2020-09-25 04:21:35'),
(29, 'Trần Xuân Hương', 'huong.tx@theolympiaschools.edu.vn', 1, 2, 'default.png', NULL, NULL, '$2y$10$P9JCG53m7IpABY1g3PvXyumdWrNYIrUNNcCL0CFeHhP8btZIVC632', NULL, '2020-09-25 04:21:35', '2020-09-25 04:21:35'),
(30, 'Tạ Phương Anh', 'anh.tp@theolympiaschools.edu.vn', 1, 2, 'default.png', NULL, NULL, '$2y$10$RYiuDhsNV/ssgvkPiQRGXeukQTlcwPypkalKGHVqZ0./qjxFHMFIm', NULL, '2020-09-25 04:21:35', '2020-09-25 04:21:35'),
(31, 'Hoàng Bích Thủy', 'thuy.hb@theolympiaschools.edu.vn', 1, 2, 'default.png', NULL, NULL, '$2y$10$F8M3Xz2p.aEBqZyf6d7oJeZy1dbmiV8bzoOdwAZP5.1yQbmXOIfze', NULL, '2020-09-25 04:21:35', '2020-09-25 04:21:35'),
(32, 'Nguyễn Hải Yến', 'yen.nh@theolympiaschools.edu.vn', 1, 2, 'default.png', NULL, NULL, '$2y$10$uSMEajSyLJMo1BPqKi6VfuiKRuQG500RWeH97gD1pzs5Jln2T0o9a', NULL, '2020-09-25 04:21:35', '2020-09-25 04:21:35'),
(33, 'Đồng Trường Sơn', 'son.dt@theolympiaschools.edu.vn', 1, 2, 'default.png', NULL, NULL, '$2y$10$/IUHJvp.USEIQI5MDOdhZeQVK6/WuH5e/jqtFuPxwE/nyNcY7PTei', NULL, '2020-09-25 04:21:35', '2020-09-25 04:21:35'),
(34, 'Lương Thu Hà', 'ha.lt@theolympiaschools.edu.vn', 1, 2, 'default.png', NULL, NULL, '$2y$10$edNAwoD2hm3il269wqATc.br20iOfwW8KofW0OuSb.dq.2XwNzts2', NULL, '2020-09-25 04:21:35', '2020-09-25 04:21:35'),
(35, 'Nguyễn Thị Thu Hà', 'ha.ntt1@theolympiaschools.edu.vn', 1, 2, 'default.png', NULL, NULL, '$2y$10$UD./8.DtUm.niBZzX0Pu7e3Exhn9YoRAFDgd1mTHF0cO/1Shb1CYm', NULL, '2020-09-25 04:21:35', '2020-09-25 04:21:35'),
(36, 'Nguyễn Thị Minh Hạnh', 'hanh.ntm@theolympiaschools.edu.vn', 1, 2, 'default.png', NULL, NULL, '$2y$10$SpxBtGixS/UpIwBYpdezgOFUpxwGHrBG1fLfLGrYCTEbU9XSwkEca', NULL, '2020-09-25 04:21:36', '2020-09-25 04:21:36'),
(37, 'Hoàng Khánh Phương', 'phuong.hk@theolympiaschools.edu.vn', 1, 2, 'default.png', NULL, NULL, '$2y$10$YKDYFybinDzMnQZjXXTdxe8zJlDLJFmdRHlaImomkLqJDpdnUVzcu', NULL, '2020-09-25 04:21:36', '2020-09-25 04:21:36'),
(38, 'Phạm Thị Chung Hà', 'ha.ptc@theolympiaschools.edu.vn', 1, 2, 'default.png', NULL, NULL, '$2y$10$SL6ryTkTcZRxATfb9xnH9u.fIOMKtGADANe8KbIRTRTniMGi53CKi', NULL, '2020-09-25 04:21:36', '2020-09-25 04:21:36'),
(39, 'Vũ Thị Ngọc Huyền', 'huyen.vtn@theolympiaschools.edu.vn', 1, 2, 'default.png', NULL, NULL, '$2y$10$XgN43XC7T52MSwofq9eUCeKJyiEffD.FOyRny1Y1nUvfpdMVIM95G', NULL, '2020-09-25 04:21:36', '2020-09-25 04:21:36'),
(40, 'Mai Thị Khánh Hoà', 'hoa.mtk@theolympiaschools.edu.vn', 1, 2, 'default.png', NULL, NULL, '$2y$10$jg5C.VKTPIE4PGCAYLfblO2N/3zIiwhEw/bNIljQBej3GTF.VpA5q', NULL, '2020-09-25 04:21:36', '2020-09-25 04:21:36'),
(41, 'Nguyễn Diệu Hoa', 'hoa.nd@theolympiaschools.edu.vn', 1, 2, 'default.png', NULL, NULL, '$2y$10$26nMuSyujHi8YlqT.OsiTubekP.AsOn/9ph89sytoN/7evE5T2v66', NULL, '2020-09-25 04:21:36', '2020-09-25 04:21:36'),
(42, 'Phạm Thị Mai Nguyệt', 'nguyet.ptm@theolympiaschools.edu.vn', 1, 2, 'default.png', NULL, NULL, '$2y$10$FDRoWcX6rf0AAyWETojWGOL5I6Z3xyNQN8noFy.33yUjnTD2hPOSm', NULL, '2020-09-25 04:21:36', '2020-09-25 04:21:36'),
(43, 'Dương Thị Thu Hiền', 'hien.dtt1@theolympiaschools.edu.vn', 1, 2, 'default.png', NULL, NULL, '$2y$10$m.WW08/AYpVIF.cLBH1Al.WdJf7KMmX65XBOaGdRtGjVCj4yI5LOu', NULL, '2020-09-25 04:21:36', '2020-09-25 04:21:36'),
(44, 'Nguyễn Thị Trinh', 'trinh.nt@theolympiaschools.edu.vn', 1, 2, 'default.png', NULL, NULL, '$2y$10$kuOwy/9rgpp41EV3.r.dl.2e0JU3yjRV9QK5jNgT4OyWi7uk.bCs2', NULL, '2020-09-25 04:21:36', '2020-09-25 04:21:36'),
(45, 'Đàm Phương Thảo', 'thao.dp@theolympiaschools.edu.vn', 1, 2, 'default.png', NULL, NULL, '$2y$10$P3Lt4WTodOQLzWgyjTBP8ekah6zNJWxkhgYOjGYJM1g7AaKFOM./u', NULL, '2020-09-25 04:21:36', '2020-09-25 04:21:36'),
(46, 'Nguyễn Thị Chinh', 'chinh.nt@theolympiaschools.edu.vn', 1, 2, 'default.png', NULL, NULL, '$2y$10$.MhJ4qbTtZsUj8E.ykbGreAYS7PkQVEQJ5r3EUwCNR7XwdmuS3uQW', NULL, '2020-09-25 04:21:36', '2020-09-25 04:21:36'),
(47, 'Trần Vân Khánh', 'khanh.tv@theolympiaschools.edu.vn', 1, 2, 'default.png', NULL, NULL, '$2y$10$xfk9l4Od4WukcVtfOh0XXuomc7YmLYuI9jeqN7zcd1LEx/9gZpezG', NULL, '2020-09-25 04:21:36', '2020-09-25 04:21:36');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `default_schedules`
--
ALTER TABLE `default_schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `default_schedules_day_id_foreign` (`day_id`),
  ADD KEY `default_schedules_session_id_foreign` (`session_id`),
  ADD KEY `default_schedules_teacher_id_foreign` (`teacher_id`),
  ADD KEY `default_schedules_address_id_foreign` (`address_id`);

--
-- Chỉ mục cho bảng `evaluations`
--
ALTER TABLE `evaluations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `evaluations_id_schedules_foreign` (`id_schedules`),
  ADD KEY `evaluations_author_foreign` (`author`),
  ADD KEY `evaluations_editor_foreign` (`editor`),
  ADD KEY `evaluations_id_teacher_foreign` (`id_teacher`),
  ADD KEY `evaluations_id_location_foreign` (`id_location`),
  ADD KEY `evaluations_id_subject_foreign` (`id_subject`);

--
-- Chỉ mục cho bảng `lesson_plans`
--
ALTER TABLE `lesson_plans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lesson_plans_teacher_id_foreign` (`teacher_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedules_id_location_foreign` (`id_location`),
  ADD KEY `schedules_id_teacher_foreign` (`id_teacher`),
  ADD KEY `schedules_booking_foreign` (`booking`),
  ADD KEY `schedules_author_foreign` (`author`),
  ADD KEY `schedules_id_session_foreign` (`id_session`),
  ADD KEY `schedules_id_subject_foreign` (`id_subject`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_day_id_foreign` (`day_id`),
  ADD KEY `sessions_address_id_foreign` (`address_id`);

--
-- Chỉ mục cho bảng `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teachers_role_foreign` (`role`),
  ADD KEY `teachers_id_address_foreign` (`id_address`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_foreign` (`role`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `days`
--
ALTER TABLE `days`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `default_schedules`
--
ALTER TABLE `default_schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=315;

--
-- AUTO_INCREMENT cho bảng `evaluations`
--
ALTER TABLE `evaluations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lesson_plans`
--
ALTER TABLE `lesson_plans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT cho bảng `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `default_schedules`
--
ALTER TABLE `default_schedules`
  ADD CONSTRAINT `default_schedules_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `default_schedules_day_id_foreign` FOREIGN KEY (`day_id`) REFERENCES `days` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `default_schedules_session_id_foreign` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `default_schedules_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `evaluations`
--
ALTER TABLE `evaluations`
  ADD CONSTRAINT `evaluations_author_foreign` FOREIGN KEY (`author`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `evaluations_editor_foreign` FOREIGN KEY (`editor`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `evaluations_id_location_foreign` FOREIGN KEY (`id_location`) REFERENCES `addresses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `evaluations_id_schedules_foreign` FOREIGN KEY (`id_schedules`) REFERENCES `schedules` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `evaluations_id_subject_foreign` FOREIGN KEY (`id_subject`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `evaluations_id_teacher_foreign` FOREIGN KEY (`id_teacher`) REFERENCES `teachers` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `lesson_plans`
--
ALTER TABLE `lesson_plans`
  ADD CONSTRAINT `lesson_plans_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_author_foreign` FOREIGN KEY (`author`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schedules_booking_foreign` FOREIGN KEY (`booking`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schedules_id_location_foreign` FOREIGN KEY (`id_location`) REFERENCES `addresses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schedules_id_session_foreign` FOREIGN KEY (`id_session`) REFERENCES `sessions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schedules_id_subject_foreign` FOREIGN KEY (`id_subject`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schedules_id_teacher_foreign` FOREIGN KEY (`id_teacher`) REFERENCES `teachers` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `sessions_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sessions_day_id_foreign` FOREIGN KEY (`day_id`) REFERENCES `days` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_id_address_foreign` FOREIGN KEY (`id_address`) REFERENCES `addresses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `teachers_role_foreign` FOREIGN KEY (`role`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_foreign` FOREIGN KEY (`role`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
