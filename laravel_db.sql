-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2017 at 11:17 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'about4.jpg', 'Entronica Co.,', 'Ltd. was founded in January 1998', '2017-08-30 21:50:26', '2017-08-30 21:50:26'),
(2, 'about1.jpg', 'Entronica', 'Entronica is an IT solution provider and system integrator company based in Thailand.We provide software solution development, implementation, integration, including professional and consultancy service on IT and telecommunication area.', '2017-08-30 21:51:54', '2017-08-30 21:51:54'),
(3, 'about2.jpg', 'WHY ENTRONICA?', 'Realizing that key success for our business is relying on our customers, we have built our business by focusing on the delivery of high quality solutions and services to our customers. The basis for this successful can only be achieved through good collaboration between customers, employees, and management. Apart from that, all deliveries we provided to our customers are surrounded by our customer support which is our fundamental aspect of how we are doing our business. Regardless of availability of solutions we have or no matter what kind of problems you are facing, we are here to support your needs.', '2017-08-30 21:52:15', '2017-08-30 21:52:15');

-- --------------------------------------------------------

--
-- Table structure for table `about_ths`
--

CREATE TABLE `about_ths` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_ths`
--

INSERT INTO `about_ths` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'anime-feature1.jpg', 'aaa', 'aaa', '2017-09-26 00:18:26', '2017-09-26 00:18:26');

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `image`, `name`, `created_at`, `updated_at`) VALUES
(1, 'IMG_7781.jpg', 'อัลบั้มที่ 1', '2017-08-30 21:48:46', '2017-09-19 04:05:41'),
(2, 'IMG_7890.jpg', 'รูปที่ 2', '2017-08-30 21:49:00', '2017-08-30 21:49:00'),
(3, 'IMG_7903.jpg', 'รูปที่ 3', '2017-08-30 21:49:09', '2017-08-30 21:49:09'),
(4, 'IMG_8036.jpg', 'รูปที่ 4', '2017-08-30 21:49:16', '2017-08-30 21:49:16'),
(5, 'IMG_8207.jpg', 'รูปที่ 5', '2017-08-30 21:49:24', '2017-08-30 21:49:24'),
(6, 'IMG_8214.jpg', 'รูปที่ 6', '2017-08-30 21:49:31', '2017-08-30 21:49:31'),
(7, 'IMG_8540.jpg', 'รูปที่ 7', '2017-08-30 21:49:41', '2017-08-30 21:49:41'),
(8, 'IMG_8574.jpg', 'รูปที่ 8', '2017-08-30 21:49:48', '2017-08-30 21:49:48'),
(9, 'IMG_8716.jpg', 'รูปที่ 9', '2017-08-30 21:49:56', '2017-08-30 21:49:56'),
(10, 'IMG_7781.jpg', '12', '2017-09-17 18:20:57', '2017-09-17 18:20:57'),
(11, 'IMG_8716.jpg', 'รูปที่ 3', '2017-09-18 00:25:57', '2017-09-18 00:25:57'),
(12, 'IMG_7781.jpg', 'รูปที่ 1', '2017-09-18 03:42:10', '2017-09-18 03:42:10');

-- --------------------------------------------------------

--
-- Table structure for table `album1s`
--

CREATE TABLE `album1s` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `album1s`
--

INSERT INTO `album1s` (`id`, `image`, `name`, `created_at`, `updated_at`) VALUES
(1, 'IMG_7890.jpg', 'อัลบั้มที่ 2', '2017-09-17 23:34:45', '2017-09-19 04:05:57'),
(2, 'IMG_8036.jpg', 'รูปที่ 4', '2017-09-17 23:42:32', '2017-09-17 23:42:32'),
(3, 'IMG_7903.jpg', 'รูปที่ 3', '2017-09-17 23:43:24', '2017-09-17 23:43:24');

-- --------------------------------------------------------

--
-- Table structure for table `album2s`
--

CREATE TABLE `album2s` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `album2s`
--

INSERT INTO `album2s` (`id`, `image`, `name`, `created_at`, `updated_at`) VALUES
(1, 'IMG_7903.jpg', 'อัลบั้มที่ 3', '2017-09-17 23:45:05', '2017-09-19 04:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `album3s`
--

CREATE TABLE `album3s` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `album3s`
--

INSERT INTO `album3s` (`id`, `image`, `name`, `created_at`, `updated_at`) VALUES
(1, 'IMG_8036.jpg', 'อัลบั้มที่ 4', '2017-09-17 23:45:22', '2017-09-19 04:06:15');

-- --------------------------------------------------------

--
-- Table structure for table `album4s`
--

CREATE TABLE `album4s` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `album4s`
--

INSERT INTO `album4s` (`id`, `image`, `name`, `created_at`, `updated_at`) VALUES
(1, 'IMG_8207.jpg', 'อัลบั้มที่ 5', '2017-09-17 23:51:53', '2017-09-19 04:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `album5s`
--

CREATE TABLE `album5s` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `album5s`
--

INSERT INTO `album5s` (`id`, `image`, `name`, `created_at`, `updated_at`) VALUES
(1, 'IMG_8214.jpg', 'อัลบั้มที่ 6', '2017-09-17 23:57:55', '2017-09-19 04:06:37');

-- --------------------------------------------------------

--
-- Table structure for table `album6s`
--

CREATE TABLE `album6s` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `album6s`
--

INSERT INTO `album6s` (`id`, `image`, `name`, `created_at`, `updated_at`) VALUES
(1, 'IMG_8540.jpg', 'อัลบั้มที่ 7', '2017-09-18 00:03:31', '2017-09-19 04:06:46');

-- --------------------------------------------------------

--
-- Table structure for table `album7s`
--

CREATE TABLE `album7s` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `album7s`
--

INSERT INTO `album7s` (`id`, `image`, `name`, `created_at`, `updated_at`) VALUES
(1, 'IMG_8574.jpg', 'อัลบั้มที่ 8', '2017-09-18 00:07:43', '2017-09-19 04:06:55');

-- --------------------------------------------------------

--
-- Table structure for table `album8s`
--

CREATE TABLE `album8s` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `album8s`
--

INSERT INTO `album8s` (`id`, `image`, `name`, `created_at`, `updated_at`) VALUES
(1, 'IMG_8716.jpg', 'อัลบั้มที่ 9', '2017-09-18 00:11:51', '2017-09-19 04:07:02');

-- --------------------------------------------------------

--
-- Table structure for table `detail_jobs`
--

CREATE TABLE `detail_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `No1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `No2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `No3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `No4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subheading1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail1` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `No8` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `No9` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `No10` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `No11` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_jobs`
--

INSERT INTO `detail_jobs` (`id`, `title`, `subheading`, `detail`, `No1`, `No2`, `No3`, `No4`, `subheading1`, `detail1`, `No8`, `No9`, `No10`, `No11`, `created_at`, `updated_at`) VALUES
(1, 'JAVA PROGRAMMER', 'Qualifications', 'Bachelor/Master\'s Degree in Computer Science, Information Technology, or related field', '0-3 years working experience in Java application development', 'Strong in JAVA Programming: J2EE, J2SE, JSP', 'Experience in Object-Oriented analysis and design using UML, Java/J2EE, RDBMS, SQL statements, XML', 'Strong in Internet Protocol: TCP, UDP', 'Responsibilities:', 'Coding programs as designed in specification documents using Programming Best Practices', 'Perform Unit Testing to ensure 1st level of quality of the program created', 'Perform Peer Reviews by reviewing other developer programs’ to detect initial defects and possible enhancements', 'Prepare documents related to the application', 'Knowledge transfer for application development to Tester and Application Administration', '2017-09-19 03:03:14', '2017-09-21 00:52:18'),
(2, 'SYSTEM ANALYST', 'Qualifications', 'Bachelor/Master\'s Degree in Computer Science, Information Technology, or related field 0-3 years working experience in Java application development Strong in JAVA Programming: J2EE, J2SE, JSP Experience in Object-Oriented analysis and design using UML, Java/J2EE, RDBMS, SQL statements, XML Strong in Internet Protocol: TCP, UDP', '', '', '', '', 'Responsibilities:', 'Coding programs as designed in specification documents using Programming Best Practices Perform Unit Testing to ensure 1st level of quality of the program created Perform Peer Reviews by reviewing other developer programs’ to detect initial defects and possible enhancements Prepare documents related to the application Knowledge transfer for application development to Tester and Application Administration', '', '', '', '', '2017-09-19 03:16:27', '2017-09-19 04:05:05'),
(3, 'ccc', 'ccc', '', '', '', '', '', 'cccc', 'cccc', '', '', '', '', '2017-09-19 03:19:29', '2017-09-19 03:19:29'),
(4, 'kjk', 'jkj', 'kjk', '', '', '', '', 'jkj', 'kjk', '', '', '', '', '2017-09-19 03:30:42', '2017-09-19 03:30:42');

-- --------------------------------------------------------

--
-- Table structure for table `detail_ths`
--

CREATE TABLE `detail_ths` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `No1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `No2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `No3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `No4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subheading1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `No8` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `No9` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `No10` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `No11` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_ths`
--

INSERT INTO `detail_ths` (`id`, `title`, `subheading`, `detail`, `No1`, `No2`, `No3`, `No4`, `subheading1`, `detail1`, `No8`, `No9`, `No10`, `No11`, `created_at`, `updated_at`) VALUES
(1, 'aaaaa', 'aaaa', 'aa', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'aa', '2017-09-25 22:16:00', '2017-09-25 22:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Facebook` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Twitter` varchar(255) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `title`, `description`, `Facebook`, `Twitter`, `created_at`, `updated_at`) VALUES
(1, 'PROFILE', 'Entronica is an IT solution provider and system integrator company based in Thailand. We provide software solution, implementation, integration, including professional and consultancy service on IT and telecommunication area..', '', '', '2017-08-30 21:53:34', '2017-08-30 21:53:34'),
(2, 'CONTACT', '31 Phyathai Building Suite  No. 911-913, 9th Floor,  Phayathai Rd., Kwang Phayathai Road,Ratchathewi, Bangkok 10400', '-', '-', '2017-08-30 21:54:18', '2017-09-13 01:28:15'),
(3, 'NETWORK WITH US', 'ส่วนของหัวข้อตรง Footers', 'https://www.facebook.com/oOteepakornOo', '--', '2017-08-30 21:55:32', '2017-08-30 22:18:40'),
(4, 'JOB APPLICATION FORM', 'ส่วนของหัวข้อตรง Footers', '', '', '2017-08-30 21:56:07', '2017-08-30 21:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `footer_ths`
--

CREATE TABLE `footer_ths` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_ths`
--

INSERT INTO `footer_ths` (`id`, `title`, `description`, `Facebook`, `Twitter`, `created_at`, `updated_at`) VALUES
(1, 'aaaa', 'aaa', 'aaa', 'aaaa', '2017-09-25 22:33:30', '2017-09-25 22:33:30');

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `image`, `title`, `created_at`, `updated_at`) VALUES
(1, 'logo.png', 'IT SOLUTION PROVIDER AND SYSTEM INTEGRATOR COMPANY.', '2017-08-30 21:43:41', '2017-09-14 23:44:38');

-- --------------------------------------------------------

--
-- Table structure for table `home_ths`
--

CREATE TABLE `home_ths` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_ths`
--

INSERT INTO `home_ths` (`id`, `image`, `title`, `created_at`, `updated_at`) VALUES
(1, 'anime-feature1.jpg', 'aa', '2017-09-25 22:58:26', '2017-09-25 22:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `jobapps`
--

CREATE TABLE `jobapps` (
  `id` int(10) UNSIGNED NOT NULL,
  `position` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobapps`
--

INSERT INTO `jobapps` (`id`, `position`, `name`, `lastname`, `gender`, `age`, `email`, `telephone`, `resume`, `created_at`, `updated_at`) VALUES
(1, 'JAVA Programmer', 'ทีปกร', 'อัจฉริยะประดิษฐ์', 'Female', '20', 'teepakorn46@gmail.com', '944824655', 'about2.jpg', '2017-08-31 01:02:26', '2017-09-18 23:57:07'),
(2, 'JAVA Programmer', 'ทีปกร', 'อัจฉริยะประดิษฐ์', 'Female', '20', 'teepakorn46@gmail.com', '944824655', '3-bus.png', '2017-09-15 00:08:26', '2017-09-18 23:56:29'),
(3, 'JAVA Programmer', 'ทีปกร', 'อัจฉริยะประดิษฐ์', 'Female', '20', 'teepakorn46@gmail.com', '944824655', 'about1.jpg', '2017-09-15 00:15:24', '2017-09-18 23:56:36'),
(4, 'JAVA Programmer', 'ทีปกร', 'อัจฉริยะประดิษฐ์', 'Female', '20', 'teepakorn46@gmail.com', '0944824655', 'about1.jpg', '2017-09-15 03:53:55', '2017-09-18 23:56:43'),
(5, 'JAVA Programmer', 'ทีปกร', 'อัจฉริยะประดิษฐ์', 'Female', '20', 'teepakorn46@gmail.com', '0944824655', 'about1.jpg', '2017-09-15 03:54:27', '2017-09-18 23:56:49'),
(6, 'JAVA Programmer', 'ทีปกร', 'อัจฉริยะประดิษฐ์', 'Female', '20', 'teepakorn46@gmail.com', '0944824655', 'about1.jpg', '2017-09-19 00:10:30', '2017-09-19 00:10:30'),
(7, 'JAVA Programmer', 'ทีปกร', 'อัจฉริยะประดิษฐ์', 'Female', '20', 'teepakorn46@gmail.com', '0944824655', 'EN.png', '2017-09-19 00:11:07', '2017-09-19 00:11:07'),
(8, 'JAVA Programmer', 'ทีปกร อัจฉริยะประดิษฐ์', 'อัจฉริยะประดิษฐ์', 'Female', '20', 'teepakorn46@gmail.com', '0944824655', 'about1.jpg', '2017-09-19 00:16:43', '2017-09-19 00:16:43'),
(9, 'JAVA Programmer', 'bbbbb', 'อัจฉริยะประดิษฐ์', 'Female', '20', 'teepakorn46@gmail.com', '0944824655', 'fer.jpg', '2017-09-19 00:17:30', '2017-09-19 00:17:30'),
(10, 'JAVA Programmer', 'cccc', 'อัจฉริยะประดิษฐ์', 'Female', '20', 'teepakorn46@gmail.com', '0944824655', 'TH.png', '2017-09-19 00:20:01', '2017-09-19 00:20:01'),
(11, 'JAVA Programmer', 'ทีปกร', 'อัจฉริยะประดิษฐ์', 'Female', '20', 'teepakorn46@gmail.com', '0944824655', 'anime-feature1.jpg', '2017-09-24 21:19:55', '2017-09-24 21:19:55'),
(12, 'JAVA Programmer', 'ทีปกร', 'อัจฉริยะประดิษฐ์', 'Female', '20', 'teepakorn46@gmail.com', '0944824655', 'anime-feature1.jpg', '2017-09-26 01:39:09', '2017-09-26 01:39:09');

-- --------------------------------------------------------

--
-- Table structure for table `job_ths`
--

CREATE TABLE `job_ths` (
  `id` int(10) UNSIGNED NOT NULL,
  `position` varchar(205) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_ths`
--

INSERT INTO `job_ths` (`id`, `position`, `name`, `lastname`, `gender`, `age`, `email`, `telephone`, `resume`, `created_at`, `updated_at`) VALUES
(1, 'JAVA Programmer', 'ทีปกร', 'อัจฉริยะประดิษฐ์', 'Female', '20', 'teepakorn46@gmail.com', '0944824655', 'anime-feature1.jpg', '2017-09-26 00:46:21', '2017-09-26 00:47:00'),
(2, 'JAVA Programmer', 'aaaa', 'อัจฉริยะประดิษฐ์', 'Female', '20', 'teepakorn46@gmail.com', '0944824655', 'anime-feature1.jpg', '2017-09-26 01:41:07', '2017-09-26 01:41:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_01_033312_create_footers_table', 1),
(4, '2017_08_01_061009_create_products_table', 1),
(5, '2017_08_01_074251_create_partners_table', 1),
(6, '2017_08_01_083452_create_abouts_table', 1),
(7, '2017_08_01_101026_create_jobapps_table', 1),
(8, '2017_08_02_083223_create_activities_table', 1),
(9, '2017_08_02_084654_create_homes_table', 1),
(11, '2017_09_18_062354_create_album2s_table', 3),
(12, '2017_09_18_063032_create_album3s_table', 3),
(13, '2017_09_18_063042_create_album4s_table', 3),
(14, '2017_09_18_063052_create_album5s_table', 3),
(15, '2017_09_18_063101_create_album6s_table', 3),
(16, '2017_09_18_063110_create_album7s_table', 3),
(17, '2017_09_18_063120_create_album8s_table', 3),
(18, '2017_09_18_052407_create_album1s_table', 4),
(19, '2017_09_19_092900_create_detail_jobs_table', 5),
(20, '2017_09_26_044441_create_product_ths_table', 6),
(21, '2017_09_26_045732_create_detail_ths_table', 7),
(22, '2017_09_26_051915_create_show_ths_table', 8),
(23, '2017_09_26_052443_create_footer_ths_table', 8),
(24, '2017_09_26_053853_create_partner_ths_table', 9),
(25, '2017_09_26_055155_create_home_ths_table', 10),
(26, '2017_09_26_060034_create_about_ths_table', 11),
(27, '2017_09_26_072205_create_job_ths_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Facebook` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Twitter` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `image`, `title`, `Facebook`, `Twitter`, `created_at`, `updated_at`) VALUES
(1, 'People.png', '1', 'https://www.facebook.com/oOteepakornOo', '--', '2017-08-30 21:44:14', '2017-08-30 22:25:32'),
(2, 'People.png', '2', 'https://www.facebook.com/zeenuz.pdiiz?fref=pb&hc_location=friends_tab', '--', '2017-08-30 21:44:20', '2017-08-30 22:26:26'),
(3, 'People.png', '3', 'https://www.facebook.com/toon.gundam?fref=pb&hc_location=friends_tab', '--', '2017-08-30 21:44:27', '2017-08-30 22:26:16'),
(4, 'People.png', '4', 'https://www.facebook.com/TL.tonliw?fref=pb&hc_location=friends_tab', '--', '2017-08-30 21:44:32', '2017-08-30 22:26:37'),
(5, 'anime-feature1.jpg', 'aaaa', 'aaa', 'aaa', '2017-09-25 22:45:55', '2017-09-25 22:45:55');

-- --------------------------------------------------------

--
-- Table structure for table `partner_ths`
--

CREATE TABLE `partner_ths` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partner_ths`
--

INSERT INTO `partner_ths` (`id`, `image`, `title`, `Facebook`, `Twitter`, `created_at`, `updated_at`) VALUES
(1, 'anime-feature1.jpg', 'aaa2', 'aaa', 'aaa', '2017-09-25 22:49:19', '2017-09-26 00:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, '1-system.png', 'System Development and Customization', 'We are purely focusing on system development and customization services on telecom segment. The fact that off-the-shelf products often made on proprietary hardware or software, and most of the times they are not fully meet requirement of customers, therefore, system development and customization is the best answer.', '2017-08-30 21:46:27', '2017-08-30 21:46:27'),
(2, '2-Custom.png', 'Custom Cloud Management Solution', 'Cloud computing is emerging and playing an important role both in term of delivering valuable business services and in term of infrastructure management methodology on a large number of highly virtualized resources. Cloud Management solution is a key to the success of bringing it into live.', '2017-08-30 21:47:23', '2017-08-30 21:47:23'),
(3, '3-bus.png', 'Business Process Development Service', 'Business Process Management (BPM) is an approach to aligning an organization\\\'s business processes with the wants and needs of its clients. It provides governance of a business\\\'s process environment to improve business effectiveness and efficiency while striving for innovation, flexibility, and integration with technology.', '2017-08-30 21:47:53', '2017-08-30 21:47:53'),
(4, '4-Mobile.png', 'Mobile Application Development', 'Corresponding to highly demand for the use of Mobile Application, we have also built our expertise around mobile devices application development. Our current Mobile Application Development service can cover all types of platforms; Android, iOS, Windows, RIM, and HTML5.', '2017-08-30 21:48:09', '2017-08-30 21:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `product_ths`
--

CREATE TABLE `product_ths` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_ths`
--

INSERT INTO `product_ths` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'anime-feature1.jpg', 'aaa', 'aaa', '2017-09-25 21:54:48', '2017-09-25 21:54:48');

-- --------------------------------------------------------

--
-- Table structure for table `show_ths`
--

CREATE TABLE `show_ths` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `username`) VALUES
(1, 'benz', 'teepakorn46@gmail.com', '$2y$10$t75XQJ6xKklcDmEqntzO6upGFtatKGqqAeu2rDwBmsIyIjrJ1jCMi', 'hUHT5RlALZgPiheSqRshvBVz1IKiNiCFS0PUWmec7yHqomBkDIfq8DImOOwt', '2017-08-30 21:41:22', '2017-08-30 21:41:22', ''),
(2, 'benz1', 'teepakorn46@gmail.com', '$2y$10$yA92Ns5UvhUKpkKT8h9/zOCExBbjIA2tCHC3LXospr6XmZgfssqqe', '7YD3lKhfs54Wbg4t4XNxLKae1jEtNsYhGKhAJ8sASiQtD3bAbde4x7xik8PK', '2017-09-14 00:44:24', '2017-09-14 00:44:24', ''),
(3, 'benzza2009', 'teepakorn@gmail.com', '$2y$10$.IZbj4VCXum4ESeWm1SgNuQ2gI3EGMIIgXA3znkVG/l7.iLSAdrS.', 'WWHTQfk7s7CsK9Y9dQAIy3oUtv5PdnPnWrzCY1bVTaOGqBVZ3we6Rx1Vl4Qq', '2017-09-14 00:48:53', '2017-09-14 00:48:53', ''),
(4, 'teepakorn', 'benz@mail.com', '$2y$10$JgRZsDfDCyePMvHHqpjUV.NY14fxw4VqCQL9X16/TEembA79DBvBe', 'hH85yYUQBbCv3O2XNtcJv76kMlLSNVM4v9lwsCLaG70MI5KNmBQTaeWt3nYF', '2017-09-14 23:34:07', '2017-09-14 23:34:07', 'benz'),
(6, 'admin', 'admin@gmail.com', '$2y$10$y4wgwF7eJIXw8WwnprEFQuiPZp2kuvuCSqHiZx1yHX/dKid0JFJR6', 'b8F7LTmpIk9Y0tQFUdV8VMbaeMWQwbLvq9hDP3LtXUJArjEpzvXYk26fpRfJ', '2017-09-18 02:24:01', '2017-09-18 02:24:01', 'admin1'),
(7, 'admin', 'admin1@gmail.com', '$2y$10$ZlyZYrQv26gDSpBk7mdlQOAMSpisNy3PjzaSHrzulfc77wuFJn2x2', 'ttgRzCSYii4W2TiXjrkSwHlYAURPUX51z9m7y2GNtocnFFeNPz0Pjtlf3BmC', '2017-09-18 03:21:37', '2017-09-18 03:21:37', 'useradmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_ths`
--
ALTER TABLE `about_ths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album1s`
--
ALTER TABLE `album1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album2s`
--
ALTER TABLE `album2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album3s`
--
ALTER TABLE `album3s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album4s`
--
ALTER TABLE `album4s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album5s`
--
ALTER TABLE `album5s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album6s`
--
ALTER TABLE `album6s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album7s`
--
ALTER TABLE `album7s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album8s`
--
ALTER TABLE `album8s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_jobs`
--
ALTER TABLE `detail_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_ths`
--
ALTER TABLE `detail_ths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_ths`
--
ALTER TABLE `footer_ths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_ths`
--
ALTER TABLE `home_ths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobapps`
--
ALTER TABLE `jobapps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_ths`
--
ALTER TABLE `job_ths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_ths`
--
ALTER TABLE `partner_ths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_ths`
--
ALTER TABLE `product_ths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `show_ths`
--
ALTER TABLE `show_ths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `about_ths`
--
ALTER TABLE `about_ths`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `album1s`
--
ALTER TABLE `album1s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `album2s`
--
ALTER TABLE `album2s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `album3s`
--
ALTER TABLE `album3s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `album4s`
--
ALTER TABLE `album4s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `album5s`
--
ALTER TABLE `album5s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `album6s`
--
ALTER TABLE `album6s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `album7s`
--
ALTER TABLE `album7s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `album8s`
--
ALTER TABLE `album8s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `detail_jobs`
--
ALTER TABLE `detail_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `detail_ths`
--
ALTER TABLE `detail_ths`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `footer_ths`
--
ALTER TABLE `footer_ths`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `home_ths`
--
ALTER TABLE `home_ths`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jobapps`
--
ALTER TABLE `jobapps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `job_ths`
--
ALTER TABLE `job_ths`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `partner_ths`
--
ALTER TABLE `partner_ths`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product_ths`
--
ALTER TABLE `product_ths`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `show_ths`
--
ALTER TABLE `show_ths`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
