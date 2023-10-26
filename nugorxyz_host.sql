-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 25, 2023 at 07:04 PM
-- Server version: 8.0.34-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nugorxyz_host`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `company`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Todd Hayden', 'Riggs Brennan Inc', 'Quibusdam voluptas m', 'Excepteur culpa magn', '8WDcM462600.jpg', NULL, NULL),
(2, 'Ana Joly', 'Riggs Brennan Inc', 'Holisticly reintermediate', 'Collaboratively reintermediate out-of-the-box e-business via economically sound supply chains. Dynamically target client-based holistic information.', 'VhgYP650996.png', NULL, NULL),
(3, 'Ana', 'Riggs Brennan Inc', 'Holisticly reintermediate', 'Collaboratively reintermediate out-of-the-box e-business via economically sound supply chains. Dynamically target client-based holistic information.', 'mPC0C211939.png', NULL, NULL),
(4, 'Mark Zuckerberg', 'facebook', 'CEO of Facebook', 'ame amar companyr kag hosting nugurtech it theka korai onara onak valo hosting provide kora.', 'yHY8K176605.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hosting_categories`
--

CREATE TABLE `hosting_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hosting_categories`
--

INSERT INTO `hosting_categories` (`id`, `name`, `title`, `cat_img`, `created_at`, `updated_at`) VALUES
(3, 'Web Hosting', 'NVMe SSD server', 'yOQK4450942.png', '2023-09-24 23:14:55', NULL),
(4, 'Cloud Hosting', 'Fast autoscaling server', '9SQMb738363.png', '2023-09-24 23:20:58', NULL),
(6, 'BDIX Hosting', 'High Performance SSD', 'GJ0gr762290.png', '2023-09-24 23:24:52', NULL),
(7, 'Reseller Hosting', 'Start your Business', 'TJNGh865717.png', '2023-09-24 23:34:32', NULL),
(8, 'Premium Hosting', 'Get fast and secure hosting', 'BaBI3345724.png', '2023-09-24 23:37:33', NULL),
(9, 'PNR Hosting', 'Python, Ruby, NodeJs Supported Shared Hosting', 'tEUX6906721.png', '2023-09-24 23:39:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hosting_pakages`
--

CREATE TABLE `hosting_pakages` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `storage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bandwidth` int NOT NULL,
  `addon_domain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_domain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ftp_account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transfer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `database` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpu_limit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_limit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpanel` int NOT NULL,
  `ssl` int NOT NULL,
  `litespeed` int NOT NULL,
  `cloudlinux` int NOT NULL,
  `firewall` int NOT NULL,
  `softaclus` int NOT NULL,
  `instant` int NOT NULL,
  `upgradation` int NOT NULL,
  `backup` int NOT NULL,
  `grantee` int NOT NULL,
  `support` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hosting_pakages`
--

INSERT INTO `hosting_pakages` (`id`, `category_id`, `name`, `title`, `storage`, `bandwidth`, `addon_domain`, `sub_domain`, `ftp_account`, `transfer`, `database`, `email`, `cpu_limit`, `ram`, `email_limit`, `cpanel`, `ssl`, `litespeed`, `cloudlinux`, `firewall`, `softaclus`, `instant`, `upgradation`, `backup`, `grantee`, `support`, `created_at`, `updated_at`) VALUES
(6, 3, 'NIT 500MB SSD NVMe', 'TK 84 Monthly', '500 MB', 50, '0', '10', '10', '10', '10', '5', '1 Core', '512 MB', '20/hr', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2023-09-25 02:16:47', NULL),
(7, 3, 'NIT 1GB SSD NVMe', 'TK 138 Monthly', '1 GB', 100, '2', '20', '20', '20', '50', '20', '1 Core', '1024 MB', '30/hr', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2023-09-25 02:30:42', NULL),
(8, 3, 'NIT 2GB SSD NVMe', 'TK 199 Monthly', '2 GB', 200, '2', '30', '30', '30', '50', '30', '1 Core', '1024 MB', '30/hr', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2023-09-25 02:33:56', NULL),
(9, 6, 'BDIX SSD 1 GB NVMe', 'Monthly 134 TK', '1 GB', 100, '2', '20', '20', '20', '50', '20', '1 Core', '1024 MB', '30/hr', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2023-09-25 03:55:16', NULL),
(10, 6, 'BDIX SSD 2 GB NVMe', 'Monthly 215 TK', '2 GB', 200, '2', '30', '30', '30', '50', '30', '1 Core', '1024 MB', '30/hr', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2023-09-25 04:40:59', NULL),
(11, 6, 'BDIX SSD 3 GB NVMe', 'Monthly 280 TK', '3 GB', 300, '3', '30', '30', '30', '50', '30', '1 Core', '1024 MB', '30/hr', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2023-09-25 04:44:38', NULL),
(12, 8, '1 GB SSD Premium', 'Tk. 299 /monthly', '1 GB', 300, '3', '50', '50', '50', '50', '50', '1.5 Core', '1200 MB', '40/hr', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2023-09-25 05:23:07', NULL),
(13, 8, '5 GB SSD Premium', 'Tk. 999 /monthly', '5 GB', 1024, '4', 'Unlimited', 'Unlimited', '100', 'Unlimited', '40', '3 Core', '2048 MB', '40/hr', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2023-09-25 05:48:56', NULL),
(14, 7, '1 GB SSD', 'Tk. 299 /monthly', '1 GB', 300, '2', '30', '30', '30', '30', '20', '1 Core', '1024 MB', '30/hr', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2023-09-25 06:32:37', NULL),
(15, 4, 'SSD 1 GB', 'Monthly 215 TK', '1 GB', 300, '2', '20', '20', '20', '20', '15', '1 Core', '1024 MB', '30/hr', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2023-09-25 06:34:57', NULL),
(16, 4, 'SSD 3 GB NVMe', 'Monthly 280 TK', '2 GB', 300, '3', '30', '30', '30', '30', '20', '1 Core', '1024 MB', '30/hr', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2023-09-25 06:36:50', NULL),
(17, 9, 'SSD 3 GB NVMe', 'Monthly 280 TK', '1 GB', 200, '2', '30', '30', '30', '30', '30', '1 Core', '1024 MB', '30/hr', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2023-09-25 06:38:55', NULL),
(18, 3, 'NIT 3GB SSD NVMe', 'TK 270 Monthly', '3 GB ', 300, '3', '30', '50', '50', '50', '30', '1 Core', '1024 MB', '30/hr', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2023-10-08 06:10:45', NULL),
(19, 3, 'NIT 5GB SSD NVMe', 'TK 407 Monthly', '5 GB ', 300, '4', 'Unlimited', 'Unlimited', '300', 'Unlimited', 'Unlimited', '1 Core', '1024 MB', '40/hr', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2023-10-08 06:26:04', NULL),
(20, 3, 'NIT 10GB SSD NVMe', 'TK 579 Monthly', '10 GB', 500, '5', 'Unlimited', 'Unlimited', '500', 'Unlimited', 'Unlimited', '1 Core', '1024 MB', '50/hr', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2023-10-08 06:30:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inventories`
--

CREATE TABLE `inventories` (
  `id` bigint UNSIGNED NOT NULL,
  `package_id` int NOT NULL,
  `month` int DEFAULT NULL,
  `year` int DEFAULT NULL,
  `price` int NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventories`
--

INSERT INTO `inventories` (`id`, `package_id`, `month`, `year`, `price`, `link`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 0, 878, 'https://www.dianahost.com/web-hosting/1', '2023-09-14 03:44:56', NULL),
(2, 1, 0, 3, 294, 'https://www.google.com/maps', '2023-09-14 03:44:56', NULL),
(3, 1, 5, 0, 500, 'https://www.youtube.com/', '2023-09-14 03:44:56', NULL),
(4, 2, 4, 0, 844, 'https://www.dianahost.com/web-hosting/4', '2023-09-14 04:12:30', NULL),
(5, 2, 5, 0, 350, 'https://www.dianahost.com/web-hosting/5', '2023-09-14 04:12:30', NULL),
(6, 8, 1, 0, 199, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-2gb-ssd-nvme', '2023-09-14 04:12:30', NULL),
(7, 8, 3, 0, 600, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-2gb-ssd-nvme', '2023-09-14 06:53:22', NULL),
(8, 8, 6, 0, 1150, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-2gb-ssd-nvme', '2023-09-14 06:53:22', NULL),
(9, 8, 0, 1, 2399, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-2gb-ssd-nvme', '2023-09-14 06:53:22', NULL),
(10, 8, 0, 2, 4799, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-2gb-ssd-nvme', '2023-09-17 05:03:16', NULL),
(11, 8, 0, 3, 7099, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-2gb-ssd-nvme', '2023-09-17 06:11:26', NULL),
(12, 6, 1, 0, 84, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-500mb-ssd-nvme', '2023-09-25 02:16:47', NULL),
(13, 6, 3, 0, 230, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-500mb-ssd-nvme', '2023-09-25 02:16:47', NULL),
(14, 6, 6, 0, 402, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-500mb-ssd-nvme', '2023-09-25 02:16:47', NULL),
(15, 6, 0, 1, 747, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-500mb-ssd-nvme', '2023-09-25 02:16:47', NULL),
(16, 6, 0, 2, 1322, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-500mb-ssd-nvme', '2023-09-25 02:30:42', NULL),
(17, 6, 0, 3, 1955, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-500mb-ssd-nvme', '2023-09-25 02:30:42', NULL),
(18, 7, 1, 0, 138, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-1gb-ssd-nvme', '2023-09-25 02:30:42', NULL),
(19, 7, 3, 0, 345, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-1gb-ssd-nvme', '2023-09-25 02:33:56', NULL),
(20, 7, 6, 0, 828, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-1gb-ssd-nvme', '2023-09-25 02:33:56', NULL),
(21, 7, 0, 1, 1610, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-1gb-ssd-nvme', '2023-09-25 02:33:56', NULL),
(22, 7, 0, 2, 2990, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-1gb-ssd-nvme', '2023-09-25 02:33:56', NULL),
(23, 7, 0, 3, 4600, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-1gb-ssd-nvme', '2023-09-25 03:55:16', NULL),
(24, 9, 1, 0, 199, 'https://clients.dianahost.com.bd/store/shared-hosting-ssd-nvme/dh-500mb-ssd-nvme?extra=0&currency=2&billingcycle=monthly', '2023-09-25 03:55:16', NULL),
(25, 9, 6, 0, 680, 'https://clients.dianahost.com.bd/store/shared-hosting-ssd-nvme/dh-500mb-ssd-nvme?extra=0&currency=2&billingcycle=monthly', '2023-09-25 03:55:16', NULL),
(26, 10, 1, 0, 215, 'https://clients.dianahost.com.bd/store/shared-hosting-ssd-nvme/dh-500mb-ssd-nvme?extra=0&currency=2&billingcycle=monthly', '2023-09-25 04:40:59', NULL),
(27, 10, 3, 0, 600, 'https://clients.dianahost.com.bd/store/shared-hosting-ssd-nvme/dh-500mb-ssd-nvme?extra=0&currency=2&billingcycle=monthly', '2023-09-25 04:40:59', NULL),
(28, 10, 6, 0, 1150, 'https://clients.dianahost.com.bd/store/shared-hosting-ssd-nvme/dh-500mb-ssd-nvme?extra=0&currency=2&billingcycle=monthly', '2023-09-25 04:40:59', NULL),
(29, 10, 0, 1, 2222, 'https://clients.dianahost.com.bd/store/shared-hosting-ssd-nvme/dh-500mb-ssd-nvme?extra=0&currency=2&billingcycle=monthly', '2023-09-25 04:40:59', NULL),
(30, 11, 1, 0, 2802, 'https://clients.dianahost.com.bd/store/shared-hosting-ssd-nvme/dh-500mb-ssd-nvme?extra=0&currency=2&billingcycle=monthly', '2023-09-25 04:44:38', NULL),
(31, 11, 3, 0, 820, 'https://clients.dianahost.com.bd/store/shared-hosting-ssd-nvme/dh-500mb-ssd-nvme?extra=0&currency=2&billingcycle=monthly', '2023-09-25 04:44:38', NULL),
(32, 11, 6, 0, 1600, 'https://clients.dianahost.com.bd/store/shared-hosting-ssd-nvme/dh-500mb-ssd-nvme?extra=0&currency=2&billingcycle=monthly', '2023-09-25 04:44:38', NULL),
(33, 12, 1, 0, 299, 'https://clients.dianahost.com.bd/store/shared-hosting-ssd-nvme/dh-500mb-ssd-nvme?extra=0&currency=2&billingcycle=monthly', '2023-09-25 05:23:07', NULL),
(34, 12, 3, 0, 650, 'https://clients.dianahost.com.bd/store/shared-hosting-ssd-nvme/dh-500mb-ssd-nvme?extra=0&currency=2&billingcycle=monthly', '2023-09-25 05:23:07', NULL),
(35, 12, 6, 0, 1200, 'https://clients.dianahost.com.bd/store/shared-hosting-ssd-nvme/dh-500mb-ssd-nvme?extra=0&currency=2&billingcycle=monthly', '2023-09-25 05:23:07', NULL),
(36, 12, 0, 1, 2222, 'https://clients.dianahost.com.bd/store/shared-hosting-ssd-nvme/dh-500mb-ssd-nvme?extra=0&currency=2&billingcycle=monthly', '2023-09-25 05:23:07', NULL),
(37, 13, 1, 0, 999, 'https://clients.dianahost.com.bd/store/shared-hosting-ssd-nvme/dh-500mb-ssd-nvme?extra=0&currency=2&billingcycle=monthly', '2023-09-25 05:48:56', NULL),
(38, 13, 3, 0, 1800, 'https://clients.dianahost.com.bd/store/shared-hosting-ssd-nvme/dh-500mb-ssd-nvme?extra=0&currency=2&billingcycle=monthly', '2023-09-25 05:48:56', NULL),
(39, 13, 6, 0, 2700, 'https://clients.dianahost.com.bd/store/shared-hosting-ssd-nvme/dh-500mb-ssd-nvme?extra=0&currency=2&billingcycle=monthly', '2023-09-25 05:48:56', NULL),
(40, 14, 1, 0, 299, 'https://clients.dianahost.com.bd/store/shared-hosting-ssd-nvme/dh-500mb-ssd-nvme?extra=0&currency=2&billingcycle=monthly', '2023-09-25 06:32:37', NULL),
(41, 14, 3, 0, 570, 'https://clients.dianahost.com.bd/store/shared-hosting-ssd-nvme/dh-500mb-ssd-nvme?extra=0&currency=2&billingcycle=monthly', '2023-09-25 06:32:37', NULL),
(42, 14, 6, 0, 999, 'https://clients.dianahost.com.bd/store/shared-hosting-ssd-nvme/dh-500mb-ssd-nvme?extra=0&currency=2&billingcycle=monthly', '2023-09-25 06:32:37', NULL),
(43, 15, 1, 0, 215, 'https://hostg.nugortechit.xyz/', '2023-09-25 06:34:57', NULL),
(44, 15, 3, 0, 599, 'https://hostg.nugortechit.xyz/', '2023-09-25 06:34:57', NULL),
(45, 15, 6, 0, 999, 'https://hostg.nugortechit.xyz/', '2023-09-25 06:34:57', NULL),
(46, 16, 1, 0, 280, 'https://hostg.nugortechit.xyz/', '2023-09-25 06:36:50', NULL),
(47, 16, 3, 0, 620, 'https://hostg.nugortechit.xyz/', '2023-09-25 06:36:50', NULL),
(48, 16, 6, 0, 1999, 'https://hostg.nugortechit.xyz/', '2023-09-25 06:36:50', NULL),
(49, 16, 0, 1, 2700, 'https://hostg.nugortechit.xyz/', '2023-09-25 06:36:50', NULL),
(50, 17, 1, 0, 280, 'https://hostg.nugortechit.xyz/', '2023-09-25 06:38:55', NULL),
(51, 17, 3, 0, 690, 'https://hostg.nugortechit.xyz/', '2023-09-25 06:38:55', NULL),
(52, 17, 6, 0, 999, 'https://hostg.nugortechit.xyz/', '2023-09-25 06:38:55', NULL),
(53, 18, 1, 0, 270, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit', '2023-10-08 06:10:45', NULL),
(54, 18, 3, 0, 750, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit', '2023-10-08 06:10:45', NULL),
(55, 18, 6, 0, 1300, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit', '2023-10-08 06:10:45', NULL),
(56, 18, 0, 1, 2999, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit', '2023-10-08 06:10:45', NULL),
(57, 18, 0, 2, 5500, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit', '2023-10-08 06:10:45', NULL),
(58, 18, 0, 3, 7999, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit', '2023-10-08 06:10:45', NULL),
(59, 19, 1, 0, 407, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-5gb-ssd-nvme', '2023-10-08 06:26:04', NULL),
(60, 19, 3, 0, 1170, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-5gb-ssd-nvme', '2023-10-08 06:26:04', NULL),
(61, 19, 6, 0, 2199, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-5gb-ssd-nvme', '2023-10-08 06:26:04', NULL),
(62, 19, 0, 1, 4750, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-5gb-ssd-nvme', '2023-10-08 06:26:04', NULL),
(63, 19, 0, 2, 7799, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-5gb-ssd-nvme', '2023-10-08 06:26:04', NULL),
(64, 19, 0, 3, 10399, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-5gb-ssd-nvme', '2023-10-08 06:26:04', NULL),
(65, 20, 1, 0, 579, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-10gb-ssd-nvme', '2023-10-08 06:30:10', NULL),
(66, 20, 3, 0, 1599, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-10gb-ssd-nvme', '2023-10-08 06:30:10', NULL),
(67, 20, 6, 0, 2999, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-10gb-ssd-nvme', '2023-10-08 06:30:10', NULL),
(68, 20, 0, 1, 5799, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-10gb-ssd-nvme', '2023-10-08 06:30:10', NULL),
(69, 20, 0, 2, 10599, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-10gb-ssd-nvme', '2023-10-08 06:30:10', NULL),
(70, 20, 0, 3, 16599, 'https://bill.nugortech.com/index.php?rp=/store/web-hosting/nit-10gb-ssd-nvme', '2023-10-08 06:30:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(8, '2023_09_12_122822_create_hosting_pakages_table', 2),
(12, '2023_09_14_072524_create_inventories_table', 3),
(13, '2023_09_17_075040_create_hosting_categories_table', 4),
(14, '2023_09_20_092654_create_clients_table', 5),
(15, '2023_09_20_100807_create_send_messages_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `send_messages`
--

CREATE TABLE `send_messages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `send_messages`
--

INSERT INTO `send_messages` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Phoebe Holland', 'xibutoroco@mailinator.com', 'Deleniti accusamus v', '2023-09-20 04:16:47', NULL),
(4, 'hamim', 'admin@test.com', 'torikul ar cha moja na', '2023-09-25 04:01:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hamim', 'hamim@gmail.com', NULL, '$2y$10$lzqYhprOv8AC72G30DxIluWhzMm5I3aE4kOHQJFJPVtX9QPDHgCpa', NULL, '2023-09-11 03:18:17', '2023-09-11 03:18:17'),
(2, 'Nurnnabi nobi', 'creativeartistz@gmail.com', NULL, '$2y$10$poPG.E4pLIOcV1/nYEgngOqej8kb2thxhPzEIt2AMrNOCTztZUfwC', NULL, '2023-09-25 06:16:18', '2023-09-25 06:16:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hosting_categories`
--
ALTER TABLE `hosting_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hosting_pakages`
--
ALTER TABLE `hosting_pakages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventories`
--
ALTER TABLE `inventories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `send_messages`
--
ALTER TABLE `send_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hosting_categories`
--
ALTER TABLE `hosting_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hosting_pakages`
--
ALTER TABLE `hosting_pakages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `inventories`
--
ALTER TABLE `inventories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `send_messages`
--
ALTER TABLE `send_messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
