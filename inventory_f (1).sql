-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 13, 2024 at 03:57 AM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_f`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `brand_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_desp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `brand_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_desp`, `brand_status`, `created_at`, `updated_at`) VALUES
(1, 'DELL', '', 1, '2024-10-29 04:29:54', '2024-10-29 08:56:42'),
(2, 'HP', NULL, 1, '2024-10-30 04:21:54', '2024-10-30 04:21:54'),
(3, 'Logitech', NULL, 1, '2024-10-30 04:22:31', '2024-10-30 04:22:31'),
(5, 'Samsung', NULL, 1, '2024-10-30 05:06:56', '2024-10-30 05:06:56'),
(6, 'Corning', NULL, 0, '2024-10-30 05:14:35', '2024-10-30 05:14:35'),
(7, 'HIK Vision', NULL, 1, '2024-10-30 10:44:46', '2024-10-30 10:44:46'),
(8, 'Huawei ', NULL, 1, '2024-10-30 10:48:38', '2024-10-30 10:48:38'),
(9, 'Glux', NULL, 1, '2024-10-30 10:54:45', '2024-10-30 10:54:45'),
(10, 'Novastar', NULL, 1, '2024-10-30 10:56:05', '2024-10-30 10:56:05'),
(11, 'Sangoma', NULL, 1, '2024-10-30 11:09:12', '2024-10-30 11:09:12'),
(12, 'ITC ', NULL, 1, '2024-10-30 11:13:24', '2024-10-30 11:13:24'),
(13, 'Apple', NULL, 1, '2024-10-31 03:45:50', '2024-10-31 03:45:50'),
(14, 'Maverick', NULL, 1, '2024-10-31 03:48:50', '2024-10-31 03:48:50'),
(15, 'Microsoft ', NULL, 1, '2024-10-31 04:03:37', '2024-10-31 04:03:37'),
(16, 'Motion', NULL, 1, '2024-10-31 04:07:44', '2024-10-31 04:07:44'),
(17, 'Seagate', NULL, 1, '2024-10-31 07:18:49', '2024-10-31 07:18:49'),
(18, 'Orient', NULL, 1, '2024-10-31 07:19:14', '2024-10-31 07:19:14'),
(19, 'TP-Link', NULL, 1, '2024-10-31 07:19:36', '2024-10-31 07:19:36'),
(20, 'Sophos', NULL, 1, '2024-10-31 07:20:21', '2024-10-31 07:20:21'),
(21, 'Fargo', NULL, 1, '2024-10-31 07:21:01', '2024-10-31 07:21:01'),
(22, 'Restmoment', NULL, 1, '2024-10-31 07:22:33', '2024-10-31 07:22:33'),
(23, 'Bardl', NULL, 1, '2024-10-31 07:23:04', '2024-10-31 07:23:04'),
(24, 'Kingston', NULL, 1, '2024-10-31 07:23:23', '2024-10-31 07:23:23'),
(25, 'Amaze', NULL, 1, '2024-10-31 07:24:30', '2024-10-31 07:24:30'),
(27, 'Sony', NULL, 1, '2024-10-31 07:37:01', '2024-10-31 07:37:01'),
(28, 'APC', NULL, 1, '2024-10-31 07:38:45', '2024-10-31 07:38:45'),
(29, 'Interim', NULL, 1, '2024-10-31 07:39:08', '2024-10-31 07:39:08'),
(30, 'Leyard', NULL, 1, '2024-10-31 07:44:30', '2024-10-31 07:44:30'),
(31, 'STD ', NULL, 1, '2024-10-31 10:54:29', '2024-10-31 10:54:29');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:69:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:9:\"user view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:11:\"user create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:9:\"user edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:11:\"user delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:22:\"role & permission view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:24:\"role & permission create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:6;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:22:\"role & permission edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:7;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:24:\"role & permission delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:8;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:9:\"test view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:9;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:10:\"brand view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:10;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:12:\"brand create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:11;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:10:\"brand edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:12;a:4:{s:1:\"a\";i:13;s:1:\"b\";s:12:\"brand delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:13;a:4:{s:1:\"a\";i:14;s:1:\"b\";s:13:\"category view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:14;a:4:{s:1:\"a\";i:15;s:1:\"b\";s:15:\"category create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:15;a:4:{s:1:\"a\";i:16;s:1:\"b\";s:13:\"category edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:16;a:4:{s:1:\"a\";i:17;s:1:\"b\";s:15:\"category delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:17;a:4:{s:1:\"a\";i:18;s:1:\"b\";s:12:\"project view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:18;a:4:{s:1:\"a\";i:19;s:1:\"b\";s:14:\"project create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:19;a:4:{s:1:\"a\";i:20;s:1:\"b\";s:12:\"project edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:20;a:4:{s:1:\"a\";i:21;s:1:\"b\";s:14:\"project delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:21;a:4:{s:1:\"a\";i:22;s:1:\"b\";s:18:\"fundingsource view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:22;a:4:{s:1:\"a\";i:23;s:1:\"b\";s:20:\"fundingsource create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:23;a:4:{s:1:\"a\";i:24;s:1:\"b\";s:18:\"fundingsource edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:24;a:4:{s:1:\"a\";i:25;s:1:\"b\";s:20:\"fundingsource delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:25;a:4:{s:1:\"a\";i:26;s:1:\"b\";s:9:\"wing view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:26;a:4:{s:1:\"a\";i:27;s:1:\"b\";s:11:\"wing create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:27;a:4:{s:1:\"a\";i:28;s:1:\"b\";s:9:\"wing edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:28;a:4:{s:1:\"a\";i:29;s:1:\"b\";s:11:\"wing delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:29;a:4:{s:1:\"a\";i:30;s:1:\"b\";s:9:\"item view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:30;a:4:{s:1:\"a\";i:31;s:1:\"b\";s:11:\"item create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:31;a:4:{s:1:\"a\";i:32;s:1:\"b\";s:9:\"item edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:32;a:4:{s:1:\"a\";i:33;s:1:\"b\";s:11:\"item delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:33;a:4:{s:1:\"a\";i:34;s:1:\"b\";s:10:\"issue view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:34;a:4:{s:1:\"a\";i:35;s:1:\"b\";s:12:\"issue create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:35;a:4:{s:1:\"a\";i:36;s:1:\"b\";s:10:\"issue edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:36;a:4:{s:1:\"a\";i:37;s:1:\"b\";s:12:\"issue delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:37;a:4:{s:1:\"a\";i:38;s:1:\"b\";s:11:\"repair view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:38;a:4:{s:1:\"a\";i:39;s:1:\"b\";s:13:\"repair create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:39;a:4:{s:1:\"a\";i:40;s:1:\"b\";s:11:\"repair edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:40;a:4:{s:1:\"a\";i:41;s:1:\"b\";s:13:\"repair delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:41;a:4:{s:1:\"a\";i:42;s:1:\"b\";s:14:\"itemclass view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:42;a:4:{s:1:\"a\";i:43;s:1:\"b\";s:16:\"itemclass create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:43;a:4:{s:1:\"a\";i:44;s:1:\"b\";s:14:\"itemclass edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:44;a:4:{s:1:\"a\";i:45;s:1:\"b\";s:16:\"itemclass delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:45;a:4:{s:1:\"a\";i:46;s:1:\"b\";s:13:\"itemtype view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:46;a:4:{s:1:\"a\";i:47;s:1:\"b\";s:15:\"itemtype create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:47;a:4:{s:1:\"a\";i:48;s:1:\"b\";s:13:\"itemtype edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:48;a:4:{s:1:\"a\";i:49;s:1:\"b\";s:15:\"itemtype delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:49;a:4:{s:1:\"a\";i:50;s:1:\"b\";s:11:\"vendor view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:50;a:4:{s:1:\"a\";i:51;s:1:\"b\";s:13:\"vendor create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:51;a:4:{s:1:\"a\";i:52;s:1:\"b\";s:11:\"vendor edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:52;a:4:{s:1:\"a\";i:53;s:1:\"b\";s:13:\"vendor delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:53;a:4:{s:1:\"a\";i:54;s:1:\"b\";s:13:\"employee view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:54;a:4:{s:1:\"a\";i:55;s:1:\"b\";s:15:\"employee create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:55;a:4:{s:1:\"a\";i:56;s:1:\"b\";s:13:\"employee edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:56;a:4:{s:1:\"a\";i:57;s:1:\"b\";s:15:\"employee delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:57;a:4:{s:1:\"a\";i:58;s:1:\"b\";s:16:\"designation view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:58;a:4:{s:1:\"a\";i:59;s:1:\"b\";s:18:\"designation create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:59;a:4:{s:1:\"a\";i:60;s:1:\"b\";s:16:\"designation edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:60;a:4:{s:1:\"a\";i:61;s:1:\"b\";s:18:\"designation delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:61;a:4:{s:1:\"a\";i:62;s:1:\"b\";s:12:\"section view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:62;a:4:{s:1:\"a\";i:63;s:1:\"b\";s:14:\"section create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:63;a:4:{s:1:\"a\";i:64;s:1:\"b\";s:12:\"section edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:64;a:4:{s:1:\"a\";i:65;s:1:\"b\";s:14:\"section delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:65;a:4:{s:1:\"a\";i:66;s:1:\"b\";s:14:\"condition view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:66;a:4:{s:1:\"a\";i:67;s:1:\"b\";s:16:\"condition create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:67;a:4:{s:1:\"a\";i:68;s:1:\"b\";s:14:\"condition edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:68;a:4:{s:1:\"a\";i:69;s:1:\"b\";s:16:\"condition delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}}s:5:\"roles\";a:2:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:5:\"admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:2:\"hr\";s:1:\"c\";s:3:\"web\";}}}', 1731492819);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `category_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_desp`, `category_status`, `created_at`, `updated_at`) VALUES
(1, 'Expandable', NULL, 1, '2024-10-29 05:03:15', '2024-10-30 02:39:51'),
(2, 'Non-Expandable', NULL, 1, '2024-10-30 04:32:13', '2024-10-30 04:32:13');

-- --------------------------------------------------------

--
-- Table structure for table `conditions`
--

DROP TABLE IF EXISTS `conditions`;
CREATE TABLE IF NOT EXISTS `conditions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `condition_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `conditions`
--

INSERT INTO `conditions` (`id`, `condition_name`, `condition_status`, `created_at`, `updated_at`) VALUES
(1, 'Working', 0, '2024-11-12 02:39:10', '2024-11-12 02:39:10'),
(2, 'Not Working', 0, '2024-11-12 02:39:23', '2024-11-12 02:39:23'),
(3, 'Repairable', 0, '2024-11-12 02:39:37', '2024-11-12 02:39:37'),
(4, 'Non Repairable', 0, '2024-11-12 02:39:54', '2024-11-12 02:39:54');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

DROP TABLE IF EXISTS `designations`;
CREATE TABLE IF NOT EXISTS `designations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `designation_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation_name_short` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `designation_name`, `designation_name_short`, `designation_status`, `created_at`, `updated_at`) VALUES
(1, 'General Manager', 'GM', 0, '2024-11-07 00:31:49', '2024-11-07 00:31:49'),
(2, 'Deputy Manager', 'DM', 0, '2024-11-07 00:32:07', '2024-11-07 00:32:07');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `employee_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_cnic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_contact` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `wing_id` bigint UNSIGNED NOT NULL,
  `designation_id` bigint UNSIGNED NOT NULL,
  `user_status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `employees_wing_id_foreign` (`wing_id`),
  KEY `employees_designation_id_foreign` (`designation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_name`, `employee_cnic`, `employee_email`, `employee_contact`, `wing_id`, `designation_id`, `user_status`, `created_at`, `updated_at`) VALUES
(1, 'Ghayour Abbas', '221122112212', 'a@gmail.com', '44554455', 2, 2, 'Active', '2024-11-07 01:10:15', '2024-11-07 01:10:15'),
(2, 'Awais', '454545454', 'awa@ndm.com', '454545', 2, 2, 'Active', '2024-11-07 02:33:35', '2024-11-07 02:33:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `fundingsources`
--

DROP TABLE IF EXISTS `fundingsources`;
CREATE TABLE IF NOT EXISTS `fundingsources` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `source_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `source_desp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `source_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `fundingsources`
--

INSERT INTO `fundingsources` (`id`, `source_name`, `source_desp`, `source_status`, `created_at`, `updated_at`) VALUES
(1, 'NDMF', NULL, 0, '2024-10-29 05:42:14', '2024-10-30 02:44:35'),
(2, 'Budgetary Grant', 'NDMA Annual Budget', 0, '2024-11-07 23:58:38', '2024-11-07 23:59:17');

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

DROP TABLE IF EXISTS `issues`;
CREATE TABLE IF NOT EXISTS `issues` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `item_id` bigint UNSIGNED NOT NULL,
  `issue_to` bigint UNSIGNED NOT NULL,
  `issue_by` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `issue_date` date NOT NULL,
  `voucher_no` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity_issued` int NOT NULL,
  `remarks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `issue_status` enum('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `issues_item_id_foreign` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`id`, `item_id`, `issue_to`, `issue_by`, `issue_date`, `voucher_no`, `quantity_issued`, `remarks`, `issue_status`, `created_at`, `updated_at`) VALUES
(6, 5, 1, '2', '2024-11-07', '32323', 0, 'ASDF', '1', '2024-11-07 01:40:08', '2024-11-07 01:40:08'),
(7, 6, 1, '2', '2024-11-07', '32323', 0, 'ASDF', '1', '2024-11-07 02:34:38', '2024-11-07 02:34:38'),
(8, 6, 1, '2', '2024-11-07', '32323', 2, 'ASDF', '1', '2024-11-07 04:02:00', '2024-11-07 04:02:00'),
(9, 83, 1, '2', '2024-11-05', '32323', 1, 'ASDF', '1', '2024-11-12 05:55:38', '2024-11-12 05:55:38');

-- --------------------------------------------------------

--
-- Table structure for table `itemclasses`
--

DROP TABLE IF EXISTS `itemclasses`;
CREATE TABLE IF NOT EXISTS `itemclasses` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `class_name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `itemclasses`
--

INSERT INTO `itemclasses` (`id`, `class_name`, `class_status`, `created_at`, `updated_at`) VALUES
(1, 'PC', 1, '2024-10-30 03:14:07', '2024-10-30 03:17:10'),
(2, 'Printer', 1, '2024-10-30 03:36:30', '2024-10-30 03:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `item_code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_model_no` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_desp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `project_id` bigint UNSIGNED NOT NULL,
  `fundingsource_id` bigint UNSIGNED NOT NULL,
  `itemclass_id` bigint UNSIGNED DEFAULT NULL,
  `quantity` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `received_date` date DEFAULT NULL,
  `grn_id` text COLLATE utf8mb4_unicode_ci,
  `vendor_id` int DEFAULT NULL,
  `type_id` bigint UNSIGNED NOT NULL,
  `remarks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `condition_id` bigint UNSIGNED NOT NULL,
  `warranty_start` date DEFAULT NULL,
  `warranty_end` date DEFAULT NULL,
  `warranty_terms` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `items_brand_id_foreign` (`brand_id`),
  KEY `items_category_id_foreign` (`category_id`),
  KEY `items_project_id_foreign` (`project_id`),
  KEY `items_fundingsource_id_foreign` (`fundingsource_id`),
  KEY `items_itemclass_id_foreign` (`itemclass_id`),
  KEY `items_type_id_foreign` (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_code`, `item_name`, `item_model_no`, `item_desp`, `brand_id`, `category_id`, `project_id`, `fundingsource_id`, `itemclass_id`, `quantity`, `item_status`, `received_date`, `grn_id`, `vendor_id`, `type_id`, `remarks`, `created_at`, `updated_at`, `condition_id`, `warranty_start`, `warranty_end`, `warranty_terms`) VALUES
(5, '2YHY5T3', 'Desktop PCs', 'Optiplex 7000', 'ci7, 1TB SSD, 16GB RAM ', 1, 2, 1, 1, 1, '100', 'Servicable', '0000-00-00', 'T-001-1', 0, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(6, 'PR0001', 'Printer', '150nw', 'LaserJet Printer color', 2, 2, 1, 1, 1, '31', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(7, 'CS0001', 'VCS', 'vcy6654er', 'Video conference system', 3, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(8, 'CB0001', 'HDMI Cables', 'Hd4960', 'Vention', 5, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(9, 'CC0001', 'Cat-6', 'Cat-6e', 'Ethernet cable', 6, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(10, 'LT0001', 'HP Probook ', '450G9', 'Laptop', 2, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(11, 'HIK001', 'IP Camera ', 'DS-2CD2043G2', 'IP Camera', 7, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(12, 'HNVR001', 'NVR', 'DS-7632N1-K2', '32 port NVR', 7, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(13, 'STH001', 'Network Switch', 'TL-SG2428P', 'POE SWITCH 24 Port', 8, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(14, 'LED001', '4K LED TV ', 'SMSG020199', 'Samsung 4k LED TV 85\"', 5, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(15, 'LED002', '4K LED TV ', 'SMSG0234657', '4K LED TV 65\"', 5, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(16, 'SMD001', 'SMD ', 'GLX29245', 'SMD video wall ', 9, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', 'grn_id', 0, 0, 'remarks', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(17, 'NSR001', 'Novastar', 'NSTR789876', 'H15 SMD Controller ', 10, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(18, 'IPT001', 'Network Phones', 'A20', 'IP Phones ', 11, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(19, 'USB001', 'Data Traveller', 'USB ', '64GB USB ', 5, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(20, 'PA001', 'PA SYSTEM', 'ITC-T240B', 'Sound System ', 12, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(21, 'MAR001', 'MacBook Air ', 'MRXV3LL/A', 'Macbook Air 13\" midnight m3 chip', 13, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(22, 'IFP001', 'Interactive Flat panel', 'IFP9850', 'Interactive Flat Panel /screen', 14, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(23, 'SMG001', 'Desktop PC ', '14900k', 'ci9,DDR5, XPG ,64GB RAM, 1TB,ZOTAK RTX ', 5, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(24, 'SFC001', 'Surface pro 9', 'MSP9', '12th GEN,ci5, 8GB RAM, 256GB SSD ', 15, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(25, 'TP001', 'Poe Switch ', 'TL-SG2428P', 'Poe switch 24port', 19, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(26, 'HKAC001', 'Access control system', 'DS-K1T804AEF', 'Biometric system magnetic door lock with push button', 7, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(27, 'ORT001', 'Racks 3xPDU', '42U', '42U Rack with 3xPDU for switches', 18, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(28, 'OC001', 'Omada controller', 'OC200', 'Wireless controller', 19, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(29, 'SFW001', 'Firewall', 'XGS-126', ' sophos Firewall', 20, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(30, 'ACP001', 'Access Card Printer', 'DTC1250e', 'Card printing machine ', 21, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(31, 'ACP001', 'Access Card printer ', 'DTC1250e', 'Card printer ', 21, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(32, 'RCU001', 'Control unit ', 'RX-M2700XP', 'Restmoment control unit mixer', 22, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(33, 'RCU002', 'Restmoment mic system', 'RX-C2700XP', 'Table Microphone system  ', 22, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(34, 'BHWM001', ' wireless microphone', 'UK800HT', 'WIRELESS MICROPHONE ', 23, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(35, 'ADS001', 'Antenna distribution system', 'B824D', 'UHF 2X4 Antenna distribution system ', 23, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(36, 'BHWM001', 'Headgear for wireless microphone', 'BHGWM1', 'headgear wireless microphone ', 23, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(37, 'CMS001', 'Ceiling Mount speakers', 'ITCT-105T', 'Ceiling PA speakers', 12, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(38, 'MA001', 'Mixer Amplifier', 'CMX-EA60A', 'Mixer Amplifier for sound system', 12, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(39, 'WS001', 'Wall speakers', 'DSP218', 'Wall speaker 40watt', 12, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(40, 'KU001', 'Data Traveler ', 'KUSB3.0', 'USB DRIVE 64GB', 24, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(41, 'TSP001', 'Touch screen Panel', 'RK20180129CXX219-036', 'Touch screen LED 22\" ', 1, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(43, 'WK001', 'Wireless keyboard & mouse ', 'LWKM', 'Wireless keyboard and mouse ', 3, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(44, 'DOT001', 'Desktop Tower', 'Plus 7010', 'ci7,13th gen 13700, 16GB DDR5, 512GB,', 1, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(45, 'HPP001', 'ProBook', '440G10', 'ci7, 13th gen 135SU , 16GB DDR4 512GB,', 2, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(46, 'CAM001', 'Camera', 'A7', 'A7 Standard, Alpha 7 III , 24.2MP ', 27, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(47, 'UPS001', 'UPS System', 'E3SUPS40KHB2', '40KVA UPS Backup', 28, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(48, 'UPS002', 'UPS', 'E3MUPS80KHP1', '80KVA UPS Backup System', 28, 2, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(50, 'STD001', 'RF Amplifier', 'RFA', 'Radio Frequency Amplifier', 2, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(51, 'STD001', 'RF Amplifier', 'RFA', 'Radio frequency Amplifier', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(52, 'STD002', 'RF Spliter', 'RFS', 'Radio frequency splitter', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(53, 'STD003', 'Fibre optic', 'FOC', 'Fibre optic cable ', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(54, 'STD004', 'RFID cards ', 'Fargo01', 'Employee ID Card', 21, 1, 1, 1, 1, '500', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(55, 'STD005', 'Cable Roll', 'SCR', 'Speaker cable Roll', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(56, 'STD006', 'Cable Roll', 'MCR', 'Microphone Cable Roll', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(57, 'STD007', 'Cable clipsal ', 'RG6', 'RG6 Cable clipsal white ', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(58, 'STD008', 'PVC Pipes', 'GI PVC ', '1\" GI PVC Coated pipes', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(59, 'STD009', 'Face plates ', 'fP001', 'Face plates ', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(60, 'STD010', 'Patch panel ', 'PP0101', 'Patch Panels ', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(61, 'STD011', 'Cable Manager ', 'CM01', 'Cable manager ', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(62, 'STD012', 'Cable VGA ', 'VGA01', 'VGA Cables', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(63, 'item_code', 'item_name', 'item_model_no', 'item_desp', 0, 0, 0, 0, 0, 'quantity', 'item_status', '0000-00-00', 'grn_id', 0, 0, 'remarks', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(64, 'STD014', 'AC to DC ', 'ADC001', 'AC to DC Adaptor', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', '', 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(65, 'STD015', 'UTP Cat6', 'Ucat001', 'UTP CAT6 cable Roll', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', '', 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(66, 'STD016', 'Earthing Cable', 'EC001', 'Earthing Cable for controllers', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', '', 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(67, 'STD017', 'Ethernet Cable ', 'ETC001', 'CAT6 ethernet cable ', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', '', 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(68, 'STD018', 'Cable Tray', 'CT001', '6\" PERFORATED cable tray', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', '', 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(69, 'STD019', 'Cable Tray', 'CT002', '12\" SOLID CABLE TRAY', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', '', 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(70, 'STD020', 'Cable Tray', 'CT003', '12\" X3 Solid cable tray', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', '', 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(71, 'STD021', 'PVC Coated pipe', 'PCP001', '1\" GI PVC Coated pipes', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', '', 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(72, 'STD022', 'Baynet Connector', 'BC001', 'Baynet connector for Cat6 RJ 45', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', '', 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(73, 'STD023', 'Connector cold press', 'FC001', 'F  Connector cold press', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', '', 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(74, 'STD024', 'Dual shutter face plate', 'DSFP001', 'Dual shutter fac plate 120x for data ', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', '', 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(75, 'STD025', 'Single shutter face plate ', 'SSFP001', 'Single shutter face plate for TV', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', '', 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(76, 'STD026', 'Cat6 UTP IO', 'IO001', 'CAT 6 UTP IO for 120 x data points,36TV Points, 10 printer points', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', '', 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(77, 'STD027', 'Cat5e for Telephone point', 'CTP001', 'CAT 5 e IO for Telephone point', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', '', 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(78, 'STD028', 'Patch cord ', 'PC001', 'Patch cord UTP CAT6 1 meter', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', '', 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(79, 'STD029', 'Patch cord ', 'PC002', 'Patch cord UTP CAT6 3 meter', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', '', 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(80, 'STD030', 'Male to Femle connectors', 'MFC001', 'IEC/Male to Female connector 90 connector', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', '', 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(81, 'STD031', 'RF Jointer', 'RFJ001', 'RF Jointer', 31, 1, 1, 1, 1, '1', 'Servicable', '0000-00-00', '', 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', '0000-00-00', ''),
(82, 'a000', 'adsf', 'pr222', 'adf', 17, 1, 1, 1, 1, '2', '1', '2024-11-05', '3434343434', NULL, 0, NULL, '2024-11-04 05:15:12', '2024-11-04 05:15:12', 0, '0000-00-00', '0000-00-00', ''),
(83, 'test', 'printer', 'pr222', 'adf', 17, 1, 1, 1, 1, '2', '1', '2024-11-06', '3434343434', 1, 1, NULL, '2024-11-04 06:07:24', '2024-11-05 01:55:23', 0, '0000-00-00', '0000-00-00', ''),
(84, 'Totam vero tempore', 'Christopher Hendricks', 'Nobis illum culpa', 'Dolorem recusandae', 18, 1, 2, 2, 1, '985', '1', '2020-04-28', 'Nulla numquam ipsam', 1, 1, NULL, '2024-11-12 04:46:58', '2024-11-12 04:46:58', 1, '2012-05-03', '2016-10-07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `itemtypes`
--

DROP TABLE IF EXISTS `itemtypes`;
CREATE TABLE IF NOT EXISTS `itemtypes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `type_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_desp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `itemtypes`
--

INSERT INTO `itemtypes` (`id`, `type_name`, `type_desp`, `type_status`, `created_at`, `updated_at`) VALUES
(1, 'core i 3', 'df', 1, '2024-11-04 05:44:43', '2024-11-05 01:38:12'),
(2, 'core i 5', 'df', 1, '2024-11-05 01:38:24', '2024-11-05 01:38:24');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(5, '2022_01_12_072103_add_avatar_to_users_table', 1),
(6, '2022_01_12_130803_create_permission_tables', 1),
(7, '2024_10_29_092926_create_brands_table', 2),
(8, '2024_10_29_100239_create_categories_table', 3),
(9, '2024_10_29_102513_create_projects_table', 4),
(10, '2024_10_29_104107_create_fundingsources_table', 5),
(11, '2024_10_29_105605_create_wings_table', 6),
(12, '2024_10_29_113417_create_items_table', 7),
(13, '2024_10_29_115819_create_issues_table', 8),
(14, '2024_10_29_121755_create_repairs_table', 9),
(15, '2024_10_30_080808_create_itemclasses_table', 10),
(16, '2024_11_04_092702_create_itemtypes_table', 11),
(17, '2024_11_04_095956_create_vendors_table', 12),
(18, '2024_11_07_053126_create_designations_table', 13),
(19, '2024_11_07_055146_create_employees_table', 14),
(20, '2024_11_07_102719_create_sections_table', 15),
(21, '2024_11_12_071344_create_conditions_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user view', 'web', '2024-08-16 21:35:57', '2024-08-16 21:35:57'),
(2, 'user create', 'web', '2024-08-16 21:35:57', '2024-08-16 21:35:57'),
(3, 'user edit', 'web', '2024-08-16 21:35:57', '2024-08-16 21:35:57'),
(4, 'user delete', 'web', '2024-08-16 21:35:57', '2024-08-16 21:35:57'),
(5, 'role & permission view', 'web', '2024-08-16 21:35:57', '2024-08-16 21:35:57'),
(6, 'role & permission create', 'web', '2024-08-16 21:35:57', '2024-08-16 21:35:57'),
(7, 'role & permission edit', 'web', '2024-08-16 21:35:57', '2024-08-16 21:35:57'),
(8, 'role & permission delete', 'web', '2024-08-16 21:35:57', '2024-08-16 21:35:57'),
(9, 'test view', 'web', '2024-08-16 21:35:57', '2024-08-16 21:35:57'),
(10, 'brand view', 'web', '2024-10-29 04:29:26', '2024-10-29 04:29:26'),
(11, 'brand create', 'web', '2024-10-29 04:29:26', '2024-10-29 04:29:26'),
(12, 'brand edit', 'web', '2024-10-29 04:29:26', '2024-10-29 04:29:26'),
(13, 'brand delete', 'web', '2024-10-29 04:29:26', '2024-10-29 04:29:26'),
(14, 'category view', 'web', '2024-10-29 05:02:39', '2024-10-29 05:02:39'),
(15, 'category create', 'web', '2024-10-29 05:02:39', '2024-10-29 05:02:39'),
(16, 'category edit', 'web', '2024-10-29 05:02:39', '2024-10-29 05:02:39'),
(17, 'category delete', 'web', '2024-10-29 05:02:39', '2024-10-29 05:02:39'),
(18, 'project view', 'web', '2024-10-29 05:25:13', '2024-10-29 05:25:13'),
(19, 'project create', 'web', '2024-10-29 05:25:13', '2024-10-29 05:25:13'),
(20, 'project edit', 'web', '2024-10-29 05:25:13', '2024-10-29 05:25:13'),
(21, 'project delete', 'web', '2024-10-29 05:25:13', '2024-10-29 05:25:13'),
(22, 'fundingsource view', 'web', '2024-10-29 05:41:07', '2024-10-29 05:41:07'),
(23, 'fundingsource create', 'web', '2024-10-29 05:41:07', '2024-10-29 05:41:07'),
(24, 'fundingsource edit', 'web', '2024-10-29 05:41:07', '2024-10-29 05:41:07'),
(25, 'fundingsource delete', 'web', '2024-10-29 05:41:07', '2024-10-29 05:41:07'),
(26, 'wing view', 'web', '2024-10-29 05:56:05', '2024-10-29 05:56:05'),
(27, 'wing create', 'web', '2024-10-29 05:56:05', '2024-10-29 05:56:05'),
(28, 'wing edit', 'web', '2024-10-29 05:56:05', '2024-10-29 05:56:05'),
(29, 'wing delete', 'web', '2024-10-29 05:56:05', '2024-10-29 05:56:05'),
(30, 'item view', 'web', '2024-10-29 06:34:17', '2024-10-29 06:34:17'),
(31, 'item create', 'web', '2024-10-29 06:34:17', '2024-10-29 06:34:17'),
(32, 'item edit', 'web', '2024-10-29 06:34:17', '2024-10-29 06:34:17'),
(33, 'item delete', 'web', '2024-10-29 06:34:17', '2024-10-29 06:34:17'),
(34, 'issue view', 'web', '2024-10-29 06:58:19', '2024-10-29 06:58:19'),
(35, 'issue create', 'web', '2024-10-29 06:58:19', '2024-10-29 06:58:19'),
(36, 'issue edit', 'web', '2024-10-29 06:58:19', '2024-10-29 06:58:19'),
(37, 'issue delete', 'web', '2024-10-29 06:58:19', '2024-10-29 06:58:19'),
(38, 'repair view', 'web', '2024-10-29 07:17:55', '2024-10-29 07:17:55'),
(39, 'repair create', 'web', '2024-10-29 07:17:55', '2024-10-29 07:17:55'),
(40, 'repair edit', 'web', '2024-10-29 07:17:55', '2024-10-29 07:17:55'),
(41, 'repair delete', 'web', '2024-10-29 07:17:55', '2024-10-29 07:17:55'),
(42, 'itemclass view', 'web', '2024-10-30 03:08:08', '2024-10-30 03:08:08'),
(43, 'itemclass create', 'web', '2024-10-30 03:08:08', '2024-10-30 03:08:08'),
(44, 'itemclass edit', 'web', '2024-10-30 03:08:08', '2024-10-30 03:08:08'),
(45, 'itemclass delete', 'web', '2024-10-30 03:08:08', '2024-10-30 03:08:08'),
(46, 'itemtype view', 'web', '2024-11-04 04:27:02', '2024-11-04 04:27:02'),
(47, 'itemtype create', 'web', '2024-11-04 04:27:02', '2024-11-04 04:27:02'),
(48, 'itemtype edit', 'web', '2024-11-04 04:27:02', '2024-11-04 04:27:02'),
(49, 'itemtype delete', 'web', '2024-11-04 04:27:02', '2024-11-04 04:27:02'),
(50, 'vendor view', 'web', '2024-11-04 04:59:56', '2024-11-04 04:59:56'),
(51, 'vendor create', 'web', '2024-11-04 04:59:56', '2024-11-04 04:59:56'),
(52, 'vendor edit', 'web', '2024-11-04 04:59:56', '2024-11-04 04:59:56'),
(53, 'vendor delete', 'web', '2024-11-04 04:59:56', '2024-11-04 04:59:56'),
(54, 'employee view', 'web', '2024-11-06 04:19:59', '2024-11-06 04:19:59'),
(55, 'employee create', 'web', '2024-11-06 04:19:59', '2024-11-06 04:19:59'),
(56, 'employee edit', 'web', '2024-11-06 04:19:59', '2024-11-06 04:19:59'),
(57, 'employee delete', 'web', '2024-11-06 04:19:59', '2024-11-06 04:19:59'),
(58, 'designation view', 'web', '2024-11-07 00:31:26', '2024-11-07 00:31:26'),
(59, 'designation create', 'web', '2024-11-07 00:31:26', '2024-11-07 00:31:26'),
(60, 'designation edit', 'web', '2024-11-07 00:31:26', '2024-11-07 00:31:26'),
(61, 'designation delete', 'web', '2024-11-07 00:31:26', '2024-11-07 00:31:26'),
(62, 'section view', 'web', '2024-11-07 05:27:19', '2024-11-07 05:27:19'),
(63, 'section create', 'web', '2024-11-07 05:27:19', '2024-11-07 05:27:19'),
(64, 'section edit', 'web', '2024-11-07 05:27:19', '2024-11-07 05:27:19'),
(65, 'section delete', 'web', '2024-11-07 05:27:19', '2024-11-07 05:27:19'),
(66, 'condition view', 'web', '2024-11-12 02:13:44', '2024-11-12 02:13:44'),
(67, 'condition create', 'web', '2024-11-12 02:13:44', '2024-11-12 02:13:44'),
(68, 'condition edit', 'web', '2024-11-12 02:13:44', '2024-11-12 02:13:44'),
(69, 'condition delete', 'web', '2024-11-12 02:13:44', '2024-11-12 02:13:44');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `project_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_desp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `project_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `project_desp`, `project_status`, `created_at`, `updated_at`) VALUES
(1, 'NEOC', 'National Emergency Operation Center', 1, '2024-10-29 05:31:24', '2024-11-07 23:56:46'),
(2, 'NDMA_OLD', 'All previously held ICT Equipment from multiple sources/projects', 1, '2024-11-07 23:56:07', '2024-11-07 23:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `repairs`
--

DROP TABLE IF EXISTS `repairs`;
CREATE TABLE IF NOT EXISTS `repairs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `request_by` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `request_date` date NOT NULL,
  `request_sheet_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `repair_cost` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `repair_date` date NOT NULL,
  `repair_status` enum('Repaired','Inprogress') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fundingsource_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `item_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `repairs_fundingsource_id_foreign` (`fundingsource_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `repairs`
--

INSERT INTO `repairs` (`id`, `request_by`, `request_date`, `request_sheet_id`, `repair_cost`, `repair_date`, `repair_status`, `fundingsource_id`, `created_at`, `updated_at`, `item_id`) VALUES
(1, 'Sardar Junaid Baig', '2024-10-30', 'EO-NDMA-0012', '5000', '2024-10-30', 'Repaired', 1, '2024-10-30 05:01:16', '2024-10-30 05:01:16', 1),
(2, 'Ghayour abbas', '2024-10-30', 'EO-NDMA-023', '15000', '2024-10-30', 'Inprogress', 1, '2024-10-30 05:20:25', '2024-10-30 05:20:25', 2),
(3, 'Areej Fatima ', '2024-10-30', 'EO-NDMA-024', '30000', '2024-10-30', 'Inprogress', 1, '2024-10-30 06:15:18', '2024-10-30 06:15:18', 1),
(4, 'Tayyab shah ', '2024-10-30', 'EO-NDMA-025', '18000', '2024-10-30', 'Repaired', 1, '2024-10-30 06:16:33', '2024-10-30 06:16:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2024-08-16 21:35:57', '2024-08-16 21:35:57'),
(2, 'hr', 'web', '2024-11-12 05:13:40', '2024-11-12 05:13:40');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

DROP TABLE IF EXISTS `sections`;
CREATE TABLE IF NOT EXISTS `sections` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `section_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `wing_id` bigint UNSIGNED NOT NULL,
  `section_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sections_wing_id_foreign` (`wing_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section_name`, `wing_id`, `section_status`, `created_at`, `updated_at`) VALUES
(1, 'Log', 3, 0, '2024-11-07 05:27:52', '2024-11-07 05:27:52');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('WizA4M93rdzJPudmeglojggv8tXmLaIdBaE2G9FN', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiWUdsNm5QUVZLRks4bEhkUkZXZktXbVVha29HZERoMEhYejFqV3h6NyI7czozOiJ1cmwiO2E6MDp7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1731409884);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `avatar`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@example.com', '2024-08-16 21:35:57', '$2y$12$D/sdY0BBLCW9T5Yalmkr3uIgdoiX9LDeJUEOYqx6qslVsMhCuEUB6', NULL, NULL, NULL, 'TYGdnaT3PSbRrVzu9TlkVz18ezXsuSigjfiX2Slv7UJbVBbj34p5GYVgyE61', '2024-08-16 21:35:57', '2024-10-29 01:43:41'),
(2, 'Cathrine Huels', 'hadams@example.org', '2024-08-16 21:35:57', '$2y$12$1qiXqWHXcjV3GtxwexTmJujogho6hBhBHeEOQUy8gh2IgNNVfK58y', NULL, NULL, NULL, 'gDURQxSfSQ', '2024-08-16 21:35:57', '2024-08-16 21:35:57'),
(3, 'Britney Reinger', 'rspinka@example.net', '2024-08-16 21:35:57', '$2y$12$1qiXqWHXcjV3GtxwexTmJujogho6hBhBHeEOQUy8gh2IgNNVfK58y', NULL, NULL, NULL, '2XkKUbDPwp', '2024-08-16 21:35:57', '2024-08-16 21:35:57'),
(4, 'Milan Leannon DVM', 'nienow.jerald@example.org', '2024-08-16 21:35:57', '$2y$12$1qiXqWHXcjV3GtxwexTmJujogho6hBhBHeEOQUy8gh2IgNNVfK58y', NULL, NULL, NULL, '7ZG6N5QjKY', '2024-08-16 21:35:57', '2024-08-16 21:35:57'),
(5, 'Tyrique Herzog', 'autumn.toy@example.org', '2024-08-16 21:35:57', '$2y$12$1qiXqWHXcjV3GtxwexTmJujogho6hBhBHeEOQUy8gh2IgNNVfK58y', NULL, NULL, NULL, 'OatdicRmus', '2024-08-16 21:35:57', '2024-08-16 21:35:57'),
(6, 'Dasia Boyer Jr.', 'mina.swaniawski@example.net', '2024-08-16 21:35:57', '$2y$12$1qiXqWHXcjV3GtxwexTmJujogho6hBhBHeEOQUy8gh2IgNNVfK58y', NULL, NULL, NULL, 'ZJ2MqYZVOU', '2024-08-16 21:35:57', '2024-08-16 21:35:57'),
(7, 'Mr. Dean Torphy DVM', 'ewalter@example.net', '2024-08-16 21:35:57', '$2y$12$1qiXqWHXcjV3GtxwexTmJujogho6hBhBHeEOQUy8gh2IgNNVfK58y', NULL, NULL, NULL, 'vaC7NhPIwd', '2024-08-16 21:35:57', '2024-08-16 21:35:57'),
(8, 'Estrella Luettgen', 'tromp.marjolaine@example.com', '2024-08-16 21:35:57', '$2y$12$1qiXqWHXcjV3GtxwexTmJujogho6hBhBHeEOQUy8gh2IgNNVfK58y', NULL, NULL, NULL, 'FUd0VUoCra', '2024-08-16 21:35:57', '2024-08-16 21:35:57'),
(9, 'Alex Walter', 'zwhite@example.net', '2024-08-16 21:35:57', '$2y$12$1qiXqWHXcjV3GtxwexTmJujogho6hBhBHeEOQUy8gh2IgNNVfK58y', NULL, NULL, NULL, 'N2kFHjvEzb', '2024-08-16 21:35:57', '2024-08-16 21:35:57'),
(10, 'Teagan Vandervort PhD', 'legros.nicholas@example.net', '2024-08-16 21:35:57', '$2y$12$1qiXqWHXcjV3GtxwexTmJujogho6hBhBHeEOQUy8gh2IgNNVfK58y', NULL, NULL, NULL, 'eYvtENB98S', '2024-08-16 21:35:57', '2024-08-16 21:35:57'),
(11, 'Miss Lois Jacobi', 'nondricka@example.net', '2024-08-16 21:35:57', '$2y$12$1qiXqWHXcjV3GtxwexTmJujogho6hBhBHeEOQUy8gh2IgNNVfK58y', NULL, NULL, NULL, 'kkgqoCR0iB', '2024-08-16 21:35:57', '2024-08-16 21:35:57');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

DROP TABLE IF EXISTS `vendors`;
CREATE TABLE IF NOT EXISTS `vendors` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `vendor_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_desp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `vendor_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `vendor_name`, `vendor_desp`, `vendor_status`, `created_at`, `updated_at`) VALUES
(1, 'Elegant Solutions', NULL, 0, '2024-11-04 05:06:25', '2024-11-08 00:05:25');

-- --------------------------------------------------------

--
-- Table structure for table `wings`
--

DROP TABLE IF EXISTS `wings`;
CREATE TABLE IF NOT EXISTS `wings` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `wing_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `wing_short_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `wing_desp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `wing_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `wings`
--

INSERT INTO `wings` (`id`, `wing_name`, `wing_short_name`, `wing_desp`, `wing_status`, `created_at`, `updated_at`) VALUES
(1, 'Tech - (EW)', '', NULL, 1, '2024-10-29 05:56:46', '2024-11-08 00:00:08'),
(2, 'Tech (E&M)', 'a', NULL, 1, '2024-10-30 06:23:39', '2024-10-30 02:55:49'),
(3, 'OPS(Response)', '', NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'OPS(Logistics)', '', NULL, 1, NULL, NULL),
(5, 'RM&M', '', NULL, 1, NULL, NULL),
(6, 'plans wing', '', NULL, 1, NULL, NULL),
(7, 'IA&PD', '', NULL, 1, NULL, NULL),
(8, 'IC Wing ', '', NULL, 1, NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_designation_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`),
  ADD CONSTRAINT `employees_wing_id_foreign` FOREIGN KEY (`wing_id`) REFERENCES `wings` (`id`);

--
-- Constraints for table `issues`
--
ALTER TABLE `issues`
  ADD CONSTRAINT `issues_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `items_fundingsource_id_foreign` FOREIGN KEY (`fundingsource_id`) REFERENCES `fundingsources` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`itemclass_id`) REFERENCES `itemclasses` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `items_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `repairs`
--
ALTER TABLE `repairs`
  ADD CONSTRAINT `repairs_fundingsource_id_foreign` FOREIGN KEY (`fundingsource_id`) REFERENCES `fundingsources` (`id`) ON UPDATE RESTRICT;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_wing_id_foreign` FOREIGN KEY (`wing_id`) REFERENCES `wings` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
