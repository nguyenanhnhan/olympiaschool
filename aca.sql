-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 12, 2020 lúc 02:01 PM
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
  `id_location` int(10) UNSIGNED DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `objective` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `author` int(10) UNSIGNED DEFAULT NULL,
  `lesson_flow` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `strengths` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `improvement` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `part1` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
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

--
-- Đang đổ dữ liệu cho bảng `evaluations`
--

INSERT INTO `evaluations` (`id`, `id_schedules`, `id_teacher`, `id_location`, `content`, `objective`, `comment`, `status`, `author`, `lesson_flow`, `strengths`, `improvement`, `part1`, `part2a`, `part2b`, `part2c`, `part2d`, `part3a`, `part3b`, `part3c`, `part3d`, `part4a`, `part4b`, `part4c`, `test`, `editor`, `created_at`, `updated_at`) VALUES
(57, 38, 16, 3, 'ddwddw', 'dwdwd', NULL, '1', 1, 'dwd', 'dwdwdw', 'dwd', '{\"part_1_1\":\"1\",\"part_1_2\":\"2\"}', '{\"p2a1\":{\"basic\":\"1\",\"appro\":\"2\",\"compe\":\"3\",\"outst\":\"4\"},\"p2a2\":{\"basic\":\"1\",\"appro\":\"2\",\"compe\":\"3\",\"outst\":\"4\"},\"p2a3\":{\"basic\":\"1\",\"appro\":\"2\",\"compe\":\"3\",\"outst\":null}}', '{\"p2b1\":{\"basic\":\"1\",\"appro\":\"2\",\"compe\":null,\"outst\":null},\"p2b2\":{\"basic\":\"1\",\"appro\":\"2\",\"compe\":\"3\",\"outst\":\"4\"}}', '{\"p2c\":{\"basic\":\"1\",\"appro\":\"2\",\"compe\":\"3\",\"outst\":\"4\"}}', '{\"p2d1\":{\"basic\":\"1\",\"appro\":\"2\",\"compe\":\"3\",\"outst\":\"4\"},\"p2d2\":{\"basic\":\"1\",\"appro\":\"2\",\"compe\":\"3\",\"outst\":null}}', '{\"p3a1\":{\"basic\":\"1\",\"appro\":\"2\",\"compe\":null,\"outst\":null},\"p3a2\":{\"basic\":\"1\",\"appro\":\"2\",\"compe\":\"3\",\"outst\":\"4\"},\"p3a3\":{\"basic\":\"1\",\"appro\":\"2\",\"compe\":\"3\",\"outst\":\"4\"},\"p3a4\":{\"basic_1\":\"1\",\"appro_1\":\"2\",\"compe_1\":\"3\",\"outst_1\":\"4\",\"basic_2\":\"1\",\"appro_2\":\"2\",\"compe_2\":\"3\",\"outst_2\":\"4\"}}', '{\"p3b1\":{\"basic_1\":\"1\",\"appro_1\":\"2\",\"compe_1\":\"3\",\"outst_1\":\"4\",\"basic_2\":\"1\",\"appro_2\":\"2\",\"compe_2\":\"3\",\"outst_2\":\"4\"},\"p3b2\":{\"basic\":\"1\",\"appro\":\"2\",\"compe\":\"3\",\"outst\":\"4\"}}', '{\"p3c1\":{\"basic_1\":\"1\",\"appro_1\":\"2\",\"compe_1\":\"3\",\"outst_1\":\"4\",\"basic_2\":\"1\",\"appro_2\":null,\"compe_2\":null,\"outst_2\":null},\"p3c2\":{\"basic\":\"1\",\"appro\":\"2\",\"compe\":\"3\",\"outst\":\"4\"}}', '{\"p3d1\":{\"basic\":\"1\",\"appro\":\"2\",\"compe\":\"3\",\"outst\":\"4\"},\"p3d2\":{\"basic_1\":\"1\",\"appro_1\":\"2\",\"compe_1\":\"3\",\"outst_1\":\"4\",\"basic_2\":\"1\",\"appro_2\":\"2\",\"compe_2\":\"3\",\"outst_2\":\"4\",\"basic_3\":\"1\",\"appro_3\":\"2\",\"compe_3\":\"3\",\"outst_3\":null}}', '{\"p4a1\":{\"basic\":\"1\",\"appro\":\"2\",\"compe\":\"3\",\"outst\":null},\"p4a2\":{\"basic_1\":\"1\",\"appro_1\":\"2\",\"compe_1\":\"3\",\"outst_1\":\"4\",\"basic_2\":null,\"appro_2\":\"2\",\"compe_2\":\"3\",\"outst_2\":\"4\"}}', '{\"p4b\":{\"basic\":\"1\",\"appro\":\"2\",\"compe\":\"3\",\"outst\":\"4\"}}', '{\"p4c\":{\"basic\":\"1\",\"appro\":\"2\",\"compe\":\"3\",\"outst\":\"4\"}}', '08/06/2020', 1, '2020-08-06 11:22:27', '2020-08-06 11:22:30');

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
(13, 1, 'speak', 'note here', '6PiM-CHE.xlsx', 'xlsx', '2020-08-01 05:35:08', '2020-08-01 05:35:08'),
(14, 1, 'speak', 'note here', 'VRhy-request.394662.docx', 'docx', '2020-08-01 05:35:08', '2020-08-01 05:35:08');

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
(25, '2020_08_12_104412_add_new_column_in_default_schedules', 23);

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
(38, 3, 16, '2P1', '8:45 - 9:25', NULL, 'Monday', '2020-08-06 09:22:30', '2020-08-06 09:22:30', 1, 'None', 1),
(39, 3, 15, '3P1', '8:45 - 9:25', NULL, 'Monday', '2020-08-06 11:16:32', '2020-08-06 11:16:32', 1, 'None', 1);

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
(1, NULL, 3, 'Session 1', '8:00 - 8:40', '2020-08-12 04:35:47', '2020-08-12 04:35:47'),
(2, NULL, 3, 'Session 2', '8:45 - 9:25', '2020-08-12 04:35:47', '2020-08-12 04:35:47'),
(3, NULL, 3, 'Session 3', '9:40 - 10:20', '2020-08-12 04:35:47', '2020-08-12 04:35:47'),
(4, NULL, 3, 'Session 4', '10:25 - 10:55', '2020-08-12 04:35:47', '2020-08-12 04:35:47'),
(5, NULL, 3, 'Session 5', '13:45 - 14:25', '2020-08-12 04:35:47', '2020-08-12 04:35:47'),
(6, NULL, 3, 'Session 6', '14:30 - 15:00', '2020-08-12 04:35:47', '2020-08-12 04:35:47'),
(7, NULL, 4, 'Session 1', '8:00 - 8:40', '2020-08-12 04:35:47', '2020-08-12 04:35:47'),
(8, NULL, 4, 'Session 2', '8:45 - 9:25', '2020-08-12 04:35:47', '2020-08-12 04:35:47'),
(9, NULL, 4, 'Session 3', '9:45 - 10:25', '2020-08-12 04:35:47', '2020-08-12 04:35:47'),
(10, NULL, 4, 'Session 4', '10:30 - 11:00', '2020-08-12 04:35:47', '2020-08-12 04:35:47'),
(11, NULL, 4, 'Session 5', '13:45 - 14:25', '2020-08-12 04:35:47', '2020-08-12 04:35:47'),
(12, NULL, 4, 'Session 6', '14:30 - 15:00', '2020-08-12 04:35:47', '2020-08-12 04:35:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` int(10) UNSIGNED NOT NULL DEFAULT 3,
  `id_address` int(10) UNSIGNED DEFAULT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `teachers` (`id`, `role`, `id_address`, `fullname`, `address`, `mobile`, `image`, `gender`, `dob`, `email`, `password`, `facebook`, `twitter`, `created_at`, `updated_at`, `email_verified_at`, `remember_token`) VALUES
(1, 3, 1, 'Tien Dat', '128 Nguyễn Thái học', '03444453048768', 'logo.png', NULL, '14.02.2020', 'datnt@ieg.vn', '$2y$10$h3FIO1fuRECzlQPENI7TEuVC6.GySfcK9CZlmTdpI92VphYH/sYVK', 'https://www.facebook.com/', '1', '2020-02-12 20:25:53', '2020-08-08 05:08:23', NULL, NULL),
(10, 3, 3, 'James Williams', NULL, NULL, 'logo.png', 'Male', NULL, 'james.williams@ieg.vn', '$2y$10$mPkAXdNqd5iC7Wm2jAUIPusw13YBpojNWaIOc3WFplmX7uwldfQMa', NULL, NULL, '2020-08-03 07:53:57', '2020-08-03 07:53:57', NULL, NULL),
(14, 3, 3, 'Ryan cherry', NULL, NULL, 'logo.png', 'Male', NULL, 'ryan.cherry@ieg.vn', '$2y$10$i/AP55OImvqaP3PXGkCTvOSq9hfLOcv9naVXYGUz/LE3Il.Tr2SDa', NULL, NULL, '2020-08-05 07:59:06', '2020-08-05 07:59:06', NULL, NULL),
(15, 3, 3, 'Miceala O’Donovan', NULL, NULL, 'logo.png', 'Male', NULL, 'miceala.odonovan@ieg.vn', '$2y$10$0xlAiH2T7GTe/qaVHPtuQuTbKm49joVUi6eP9e62/Hpc1pd4RQweK', NULL, NULL, '2020-08-05 08:26:04', '2020-08-05 08:26:04', NULL, NULL),
(16, 3, 3, 'Alex Davidson', NULL, NULL, 'logo.png', 'Male', NULL, 'alex.davidson@ieg.vn', '$2y$10$miNpk0QskkP4bgkChwCQEOte1r6qVBVnvZij2zLlNdySNV6SZNcHS', NULL, NULL, '2020-08-05 08:27:36', '2020-08-05 08:27:36', NULL, NULL),
(17, 3, 4, 'Rivers Moore', NULL, NULL, 'logo.png', 'Male', NULL, 'rivers.moore@ieg.vn', '$2y$10$pmDgcAwAheD0YIndpT9U5umdPA45z5yeVkjIy0oSzAnSDrZDwVc.K', NULL, NULL, '2020-08-05 09:19:26', '2020-08-05 09:19:26', NULL, NULL),
(18, 3, 4, 'Amelia Farquharson', NULL, NULL, 'logo.png', 'Male', NULL, 'amelia.farquharson@ieg.vn', '$2y$10$75Vwi5kx3cfTVXCbFkwgI.BBHeqArlR5zIp5QVVWFeArX8yGOwf/2', NULL, NULL, '2020-08-05 09:20:00', '2020-08-05 09:20:00', NULL, NULL),
(19, 3, 4, 'elle.angeloni', NULL, NULL, 'logo.png', 'Male', NULL, 'elle.angeloni@ieg.vn', '$2y$10$n2QgZ9L/rh07Y9hnIcNxBOCfaz.JDdQrkRQmITjsCeH2DJ1v8.uQW', NULL, NULL, '2020-08-05 09:20:38', '2020-08-05 09:20:38', NULL, NULL),
(20, 3, 4, 'Nathan J. Meier', NULL, NULL, 'logo.png', 'Male', NULL, 'nathan.meier@ieg.vn', '$2y$10$PIt0vHuoii9zOIAvZhPAIukY.EoaVjWCSQcKKZZLYi5fXgNStbjey', NULL, NULL, '2020-08-05 09:21:19', '2020-08-05 09:21:19', NULL, NULL),
(21, 3, 1, 'Andrew Miech', NULL, NULL, 'logo.png', 'Male', NULL, 'andrew@ieg.vn', '$2y$10$wN3GoFGAhcglIIAPfYEBy.vaAsN9z7ziU17JcoWrhUrfoFEZhMuV6', NULL, NULL, '2020-08-12 11:48:02', '2020-08-12 11:48:02', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(10) UNSIGNED NOT NULL DEFAULT 1,
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

INSERT INTO `users` (`id`, `name`, `email`, `role`, `image`, `mobile`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dat', 'datnt@ieg.vn', 1, 'default.png', '0344445304', NULL, '$2y$10$JLfUiJAzhXavGtNhCASv/OAOcYxYnaRHahcKwcczUVDrVmdv8PjP6', NULL, '2020-02-10 20:39:12', '2020-02-11 04:27:33'),
(5, 'Tien Dat', 'datnt@ieg.vn1', 1, 'default.png', '0344445304', NULL, '$2y$10$g0FDtR8b1fNkgwjr3DNyKOHG6C48/rHNUI4euWFkYncVHfI31Ide2', NULL, '2020-02-10 21:01:50', '2020-02-10 21:01:50'),
(9, 'Hanh', 'Hanh.ieg', 1, 'Pq1L-94671519-abstract-art-background-digital-painting-color-texture-modern-art-contemporary-art-colorful-canvas-.jpg', NULL, NULL, '$2y$10$4az6dPH9Q6mJKQlaEPnRL.kQlD8w7P146xfthKC0twk/8br584ny6', NULL, '2020-06-15 07:59:07', '2020-06-15 07:59:07');

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
  ADD KEY `evaluations_id_location_foreign` (`id_location`);

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
  ADD KEY `schedules_author_foreign` (`author`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_day_id_foreign` (`day_id`),
  ADD KEY `sessions_address_id_foreign` (`address_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `lesson_plans`
--
ALTER TABLE `lesson_plans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
