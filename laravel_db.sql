-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2017 at 05:32 AM
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
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `image`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'IMG_7781.jpg', 'รูปที่ 1', '1', '2017-08-30 21:48:46', '2017-08-30 21:48:46'),
(2, 'IMG_7890.jpg', 'รูปที่ 2', '2', '2017-08-30 21:49:00', '2017-08-30 21:49:00'),
(3, 'IMG_7903.jpg', 'รูปที่ 3', '3', '2017-08-30 21:49:09', '2017-08-30 21:49:09'),
(4, 'IMG_8036.jpg', 'รูปที่ 4', '4', '2017-08-30 21:49:16', '2017-08-30 21:49:16'),
(5, 'IMG_8207.jpg', 'รูปที่ 5', '5', '2017-08-30 21:49:24', '2017-08-30 21:49:24'),
(6, 'IMG_8214.jpg', 'รูปที่ 6', '6', '2017-08-30 21:49:31', '2017-08-30 21:49:31'),
(7, 'IMG_8540.jpg', 'รูปที่ 7', '7', '2017-08-30 21:49:41', '2017-08-30 21:49:41'),
(8, 'IMG_8574.jpg', 'รูปที่ 8', '8', '2017-08-30 21:49:48', '2017-08-30 21:49:48'),
(9, 'IMG_8716.jpg', 'รูปที่ 9', '9', '2017-08-30 21:49:56', '2017-08-30 21:49:56'),
(10, 'IMG_7781.jpg', '12', '1', '2017-09-17 18:20:57', '2017-09-17 18:20:57');

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
(1, 'JAVA Programmer', 'ทีปกร อัจฉริยะประดิษฐ์', 'อัจฉริยะประดิษฐ์', 'Female', '20', 'teepakorn46@gmail.com', '944824655', 'about1.jpg', '2017-08-31 01:02:26', '2017-08-31 01:02:26'),
(2, 'JAVA Programmer', 'ทีปกร อัจฉริยะประดิษฐ์', 'อัจฉริยะประดิษฐ์', 'Female', '20', 'teepakorn46@gmail.com', '944824655', '20638836_288075061668754_7272772087976038806_n.jpg', '2017-09-15 00:08:26', '2017-09-15 00:08:26'),
(3, 'JAVA Programmer', 'ทีปกร อัจฉริยะประดิษฐ์', 'อัจฉริยะประดิษฐ์', 'Female', '20', 'teepakorn46@gmail.com', '944824655', '20663702_288075058335421_6013825784035907148_n.jpg', '2017-09-15 00:15:24', '2017-09-15 00:15:24'),
(4, 'JAVA Programmer', 'ทีปกร อัจฉริยะประดิษฐ์', 'อัจฉริยะประดิษฐ์', 'Female', '20', 'teepakorn46@gmail.com', '0944824655', '20663702_288075058335421_6013825784035907148_n.jpg', '2017-09-15 03:53:55', '2017-09-15 03:53:55'),
(5, 'JAVA Programmer', 'ทีปกร อัจฉริยะประดิษฐ์', 'อัจฉริยะประดิษฐ์', 'Female', '20', 'teepakorn46@gmail.com', '0944824655', '20638836_288075061668754_7272772087976038806_n.jpg', '2017-09-15 03:54:27', '2017-09-15 03:54:27');

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
(9, '2017_08_02_084654_create_homes_table', 1);

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
(4, 'People.png', '4', 'https://www.facebook.com/TL.tonliw?fref=pb&hc_location=friends_tab', '--', '2017-08-30 21:44:32', '2017-08-30 22:26:37');

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
(4, 'teepakorn', 'benz@mail.com', '$2y$10$JgRZsDfDCyePMvHHqpjUV.NY14fxw4VqCQL9X16/TEembA79DBvBe', 'q4RtRsL4QQRJhfvDOuENgsfeepQgs7TrZrT0Di98APvy15ePrX8g1SGjqKJe', '2017-09-14 23:34:07', '2017-09-14 23:34:07', 'benz'),
(5, 'useradmin', 'admin@mail.com', '$2y$10$iq/8C.2Pobd6brtDfoG33OBvTIhJgLWWUet5we7niuZ6Ja1ri/wXm', 'mM93zFinPBpplWSWvFWScd8OXSbde3aGu1I8CbsUZ7700jjFw0Du9TUqq7Er', '2017-09-14 23:36:59', '2017-09-14 23:36:59', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobapps`
--
ALTER TABLE `jobapps`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jobapps`
--
ALTER TABLE `jobapps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
