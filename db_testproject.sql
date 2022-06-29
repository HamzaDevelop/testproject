-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 29, 2022 at 09:52 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_testproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_29_140059_create_employees_table', 1),
(6, '2022_06_29_142109_create_departments_table', 1),
(7, '2022_06_29_142724_create_teams_table', 1),
(8, '2022_06_29_153404_create_divisions_table', 1),
(9, '2022_06_29_155434_create_division_to_employees_table', 1),
(10, '2022_06_29_155453_create_department_to_employees_table', 1),
(11, '2022_06_29_155508_create_team_to_employees_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_departments`
--

DROP TABLE IF EXISTS `tbl_departments`;
CREATE TABLE IF NOT EXISTS `tbl_departments` (
  `department_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `department_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_departments`
--

INSERT INTO `tbl_departments` (`department_id`, `department_name`, `employee_id`, `division_id`) VALUES
(1, 'Zurich', 5, 3),
(2, 'Berlin', 3, 1),
(3, 'Munich', 6, 1),
(4, 'Salzburg', 4, 2),
(5, 'Vienna', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department_to_employees`
--

DROP TABLE IF EXISTS `tbl_department_to_employees`;
CREATE TABLE IF NOT EXISTS `tbl_department_to_employees` (
  `department_id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_department_to_employees`
--

INSERT INTO `tbl_department_to_employees` (`department_id`, `employee_id`) VALUES
(1, 6),
(1, 9),
(4, 12),
(5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_divisions`
--

DROP TABLE IF EXISTS `tbl_divisions`;
CREATE TABLE IF NOT EXISTS `tbl_divisions` (
  `division_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `division_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`division_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_divisions`
--

INSERT INTO `tbl_divisions` (`division_id`, `division_name`, `employee_id`) VALUES
(1, 'Germany', 14),
(2, 'Austria', 19),
(3, 'Switzerland', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_division_to_employees`
--

DROP TABLE IF EXISTS `tbl_division_to_employees`;
CREATE TABLE IF NOT EXISTS `tbl_division_to_employees` (
  `division_id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_division_to_employees`
--

INSERT INTO `tbl_division_to_employees` (`division_id`, `employee_id`) VALUES
(3, 4),
(3, 7),
(2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employees`
--

DROP TABLE IF EXISTS `tbl_employees`;
CREATE TABLE IF NOT EXISTS `tbl_employees` (
  `employee_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `employee_first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_employees`
--

INSERT INTO `tbl_employees` (`employee_id`, `employee_first_name`, `employee_last_name`) VALUES
(1, 'Employee', 'one'),
(2, 'Employee', 'two'),
(3, 'Employee', 'three'),
(4, 'Employee', 'four'),
(5, 'Employee', 'five'),
(6, 'Employee', 'six'),
(7, 'Employee', 'seven'),
(8, 'Employee', 'eight'),
(9, 'Employee', 'nine'),
(10, 'Employee', 'ten'),
(11, 'Employee', 'eleven'),
(12, 'Employee', 'twelve'),
(13, 'Employee', 'thirteen'),
(14, 'Employee', 'fourteen'),
(15, 'Employee', 'fifteen'),
(16, 'Employee', 'sixteen'),
(17, 'Employee', 'seventeen'),
(18, 'Employee', 'eighteen'),
(19, 'Employee', 'nineteen'),
(20, 'Employee', 'twenty');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teams`
--

DROP TABLE IF EXISTS `tbl_teams`;
CREATE TABLE IF NOT EXISTS `tbl_teams` (
  `team_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `team_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_teams`
--

INSERT INTO `tbl_teams` (`team_id`, `team_name`, `employee_id`, `department_id`) VALUES
(1, 'Sales ZU', 10, 1),
(2, 'Sales Ber', 17, 2),
(3, 'Sales MU', 18, 3),
(4, 'Marketing ZU', 2, 1),
(5, 'Marketing Ber', 20, 2),
(6, 'Development MU', 14, 3),
(7, 'Development AU', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team_to_employees`
--

DROP TABLE IF EXISTS `tbl_team_to_employees`;
CREATE TABLE IF NOT EXISTS `tbl_team_to_employees` (
  `team_id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_team_to_employees`
--

INSERT INTO `tbl_team_to_employees` (`team_id`, `employee_id`) VALUES
(2, 16),
(2, 4),
(2, 7),
(5, 11),
(5, 12),
(5, 15),
(3, 4),
(3, 9),
(6, 8),
(6, 13),
(1, 1),
(1, 12),
(1, 13),
(4, 3),
(4, 7),
(4, 8),
(7, 2),
(7, 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
