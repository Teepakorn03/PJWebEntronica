-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2017 at 08:03 AM
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
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'about4.jpg', 'Entronica Co.,', 'Ltd. was founded in January 1998', '2017-08-01 04:03:52', '2017-08-03 01:51:57'),
(2, 'about1.jpg', 'Entronica', 'Entronica is an IT solution provider and system integrator company based in Thailand.We provide software solution development, implementation, integration, including professional and consultancy service on IT and telecommunication area.', '2017-08-01 04:04:05', '2017-08-03 01:53:15'),
(3, 'about2.jpg', 'WHY ENTRONICA?', 'Realizing that key success for our business is relying on our customers, we have built our business by focusing on the delivery of high quality solutions and services to our customers. The basis for this successful can only be achieved through good collaboration between customers, employees, and management. Apart from that, all deliveries we provided to our customers are surrounded by our customer support which is our fundamental aspect of how we are doing our business. Regardless of availability of solutions we have or no matter what kind of problems you are facing, we are here to support your needs.', '2017-08-01 04:04:17', '2017-08-03 01:53:32');

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
(1, 'IMG_7781.jpg', 'รูปที่1', '2017-08-02 01:42:19', '2017-08-20 22:07:31'),
(2, 'IMG_7890.jpg', 'รูปที่2', '2017-08-03 01:20:59', '2017-08-20 22:07:40'),
(3, 'IMG_7903.jpg', 'รูปที่ 3', '2017-08-03 01:21:10', '2017-08-20 22:07:47'),
(4, 'IMG_8036.jpg', 'รูปที่ 4', '2017-08-03 01:21:17', '2017-08-20 22:07:55'),
(5, 'IMG_8207.jpg', 'รูปที่ 5', '2017-08-03 01:21:46', '2017-08-20 22:08:04'),
(6, 'IMG_8214.jpg', 'รูปที่ 6', '2017-08-15 01:19:07', '2017-08-20 22:08:12'),
(7, 'IMG_8540.jpg', 'รูปที่ 7', '2017-08-15 01:19:50', '2017-08-20 22:08:21'),
(8, 'IMG_8574.jpg', 'รูปที่ 8', '2017-08-15 01:20:07', '2017-08-20 22:36:06'),
(9, 'IMG_8716.jpg', 'รูปที่ 9', '2017-08-15 01:20:40', '2017-08-20 22:36:20');

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(2, 'PROFILE', 'Entronica is an IT solution provider and system integrator company based in Thailand. We provide software solution 									, implementation, integration, including professional and consultancy service on IT and telecommunication area..', '2017-08-03 01:34:02', '2017-08-03 01:34:02'),
(3, 'CONTACT | MAP', '31 Phyathai Building Suite  No. 911-913, 9th Floor,  Phayathai Rd., Kwang Phayathai Road,Ratchathewi, Bangkok 10400  02-000-0000', '2017-08-03 01:34:19', '2017-08-03 01:34:19');

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
(1, 'logo.png', 'IT SOLUTION PROVIDER AND SYSTEM INTEGRATOR COMTANY.', '2017-08-02 01:55:05', '2017-08-20 23:50:01'),
(2, 'logo.png', 'IT SOLUTION PROVIDER AND SYSTEM INTEGRATOR COMTANY.', '2017-08-03 01:30:51', '2017-08-03 01:30:51'),
(3, '3-bus.png', 'aaa', '2017-08-20 21:50:37', '2017-08-20 21:50:37');

-- --------------------------------------------------------

--
-- Table structure for table `jobapps`
--

CREATE TABLE `jobapps` (
  `id` int(10) UNSIGNED NOT NULL,
  `position` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brithday` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` text CHARACTER SET utf8 NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `currentposition` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` int(11) NOT NULL,
  `expectedsalary` int(11) NOT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobapps`
--

INSERT INTO `jobapps` (`id`, `position`, `name`, `lastname`, `gender`, `age`, `brithday`, `nationality`, `address`, `email`, `telephone`, `currentposition`, `education`, `experience`, `expectedsalary`, `resume`, `created_at`, `updated_at`) VALUES
(1, 'JAVA Programmer', 'ทีปกร', 'อัจฉริยะประดิษฐ์', 'Female', '20', '20/03/1996', 'ไทย', '74/22 ม.พฤกษา49/2 ถ.กาญจนาภิเษก', 'teepakorn46@gmail.com', '944824655', 'dadasd', 'asdasd', 1231212, 123132, 'CSGO500.xlsx', '2017-08-01 21:13:41', '2017-08-01 21:13:41'),
(2, 'JAVA Programmer', 'ทีปกร', 'อัจฉริยะประดิษฐ์', 'Female', '20', '20/03/1996', 'ไทย', '74/22 ม.พฤกษา49/2 ถ.กาญจนาภิเษก', 'teepakorn46@gmail.com', '0944824655', 'dadasd', 'asdasd', 1231212, 123132, 'CSGO500.xlsx', '2017-08-01 21:18:05', '2017-08-01 21:18:05'),
(3, 'JAVA Programmer', 'ทีปกร อัจฉริยะประดิษฐ์', 'อัจฉริยะประดิษฐ์', 'Female', '20', '20/03/1996', 'ไทย', '74/22 ม.พฤกษา49/2 ถ.กาญจนาภิเษก', 'teepakorn46@gmail.com', '0944824655', 'asdasd', 'asdasd', 1231212, 123132, 'CSGO500.xlsx', '2017-08-02 00:33:14', '2017-08-02 00:33:14'),
(4, 'JAVA Programmer', 'ทีปกร อัจฉริยะประดิษฐ์', 'อัจฉริยะประดิษฐ์', 'Female', '20', '20/03/1996', 'ไทย', '74/22 ม.พฤกษา49/2 ถ.กาญจนาภิเษก', 'teepakorn46@gmail.com', '0944824655', 'asdasd', 'asdasd', 1231212, 123132, 'CSGO500.xlsx', '2017-08-02 00:33:58', '2017-08-02 00:33:58'),
(5, 'JAVA Programmer', 'ทีปกร อัจฉริยะประดิษฐ์', 'อัจฉริยะประดิษฐ์', 'Female', '20', '20/03/1996', 'ไทย', '74/22 ม.พฤกษา49/2 ถ.กาญจนาภิเษก', 'teepakorn46@gmail.com', '0944824655', 'dadasd', 'asdasd', 1231212, 123132, '1-system.png', '2017-08-03 03:13:41', '2017-08-03 03:13:41'),
(6, 'JAVA Programmer', 'aaaaaaaaa', 'อัจฉริยะประดิษฐ์', 'Female', '20', '20/03/1996', 'ไทย', '74/22 ม.พฤกษา49/2 ถ.กาญจนาภิเษก', 'teepakorn46@gmail.com', '0944824655', 'dadasd', 'asdasd', 1231212, 123132, '1-system.png', '2017-08-03 03:14:53', '2017-08-03 03:14:53'),
(7, 'JAVA Programmer', 'bbbbbbbbbb', 'อัจฉริยะประดิษฐ์', 'Female', '20', '20/03/1996', 'ไทย', '74/22 ม.พฤกษา49/2 ถ.กาญจนาภิเษก', 'teepakorn46@gmail.com', '0944824655', 'asdasd', 'asdasd', 1231212, 123132, '2-Custom.png', '2017-08-03 03:15:51', '2017-08-03 03:15:51'),
(8, 'JAVA Programmer', 'ทีปกร อัจฉริยะประดิษฐ์', 'อัจฉริยะประดิษฐ์', 'Female', '20', '123123', 'ไทย', '74/22 ม.พฤกษา49/2 ถ.กาญจนาภิเษก', 'teepakorn46@gmail.com', '0944824655', 'dadasd', 'asdasd', 1231212, 123132, 'about1.jpg', '2017-08-03 03:16:56', '2017-08-03 03:16:56'),
(9, 'JAVA Programmer', 'ทีปกร อัจฉริยะประดิษฐ์', 'อัจฉริยะประดิษฐ์', 'Female', '20', '20/03/1996', 'ไทย', '74/22 ม.พฤกษา49/2 ถ.กาญจนาภิเษก', 'teepakorn46@gmail.com', '0944824655', 'asdasd', '123', 12312, 123123, 'laravel_course-master.zip', '2017-08-20 23:52:01', '2017-08-20 23:52:01');

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
(4, '2017_08_01_033312_create_footers_table', 1),
(6, '2017_08_01_061009_create_products_table', 1),
(7, '2017_08_01_074251_create_partners_table', 1),
(8, '2017_08_01_083452_create_abouts_table', 1),
(9, '2017_08_01_101026_create_jobapps_table', 2),
(10, '2017_08_02_083223_create_activities_table', 3),
(11, '2017_08_02_084654_create_homes_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `image`, `title`, `created_at`, `updated_at`) VALUES
(1, 'People.png', 'aaaa', '2017-08-01 04:05:14', '2017-08-01 04:05:14'),
(2, 'People.png', 'bbbbb', '2017-08-01 04:05:19', '2017-08-01 04:05:19'),
(3, 'People.png', 'ccccc', '2017-08-01 04:05:25', '2017-08-01 04:05:25'),
(4, 'People.png', 'ddddd', '2017-08-01 04:05:31', '2017-08-01 04:05:31');

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
(1, '1-system.png', 'System Development and Customization', 'We are purely focusing on system development and customization services on telecom segment. The fact that off-the-shelf products often made on proprietary hardware or software, and most of the times they are not fully meet requirement of customers, therefore, system development and customization is the best answer.', '2017-08-01 04:06:16', '2017-08-01 04:06:16'),
(2, '2-Custom.png', 'Custom Cloud Management Solution', 'Cloud computing is emerging and playing an important role both in term of delivering valuable business services and in term of infrastructure management methodology on a large number of highly virtualized resources. Cloud Management solution is a key to the success of bringing it into live.', '2017-08-01 04:06:35', '2017-08-01 04:06:35'),
(3, '3-bus.png', 'Business Process Development Service', 'Business Process Management (BPM) is an approach to aligning an organization\'s business processes with the wants and needs of its clients. It provides governance of a business\'s process environment to improve business effectiveness and efficiency while striving for innovation, flexibility, and integration with technology.', '2017-08-01 04:06:48', '2017-08-01 04:06:48'),
(4, '4-Mobile.png', 'Mobile Application Development', 'Corresponding to highly demand for the use of Mobile Application, we have also built our expertise around mobile devices application development. Our current Mobile Application Development service can cover all types of platforms; Android, iOS, Windows, RIM, and HTML5.', '2017-08-01 04:07:02', '2017-08-01 04:07:02');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'benz', 'teepakorn46@gmail.com', '$2y$10$FnUjGv4NBtTjZs7/Ohj3huZcLvURUJ/mZuMUbfRuXYxcxm0boMFse', 'QU4cGAQbP52ZsIolPBJjjCCpjnMBm51PuZQLIsD7ERzHZaYEz4ZyyCYV49dr', '2017-08-01 03:39:29', '2017-08-01 03:39:29'),
(2, 'aaaa', 'b_teepakorn@hotmail.com', '$2y$10$UZ0.xajNlq36H94ySl1MtOsq7R3HFz24T3hiBHBLK175cft0u2PAy', 'DzBW5yKA0YyOWaRuX5nmCIEyP7uHDliwCdiTTO6uBiD2vKiaRWjR5uZHGP1R', '2017-08-10 20:25:38', '2017-08-10 20:25:38');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jobapps`
--
ALTER TABLE `jobapps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
