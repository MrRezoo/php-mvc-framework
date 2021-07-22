-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 22, 2021 at 12:28 PM
-- Server version: 10.3.30-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hidevs_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(11) NOT NULL,
  `migration` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `created_at`) VALUES
(1, 'm0001_initial.php', '2021-07-22 07:40:01'),
(2, 'm0002_add_password_column.php', '2021-07-22 07:40:01'),
(3, 'm0003_create_post_table.php', '2021-07-22 07:40:01');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `subject`, `slug`, `image`, `description`, `status`, `user_id`, `created_at`) VALUES
(1, 'learning Django', 'Programming', 'learning-Django', '4f80c52fb432ee2e116a8eb0b57ca86f_1620812252353.icns', 'learning Django learning Django learning Django learning Django learning Django ', 0, NULL, '2021-07-13 22:48:36'),
(2, 'learning Django2', 'Programming2', 'learning-Django2', '4f80c52fb432ee2e116a8eb0b57ca86f_1620812252353.icns', 'learning Django learning Django learning Django learning Django learning Django ', 0, 2, '2021-07-13 22:49:48'),
(3, 'machine learning', 'Technology ', 'machine-learning', '9b0af55043bbf6ad71e4fdce0c70a221_Firefox (1).icns', 'this course for teach machine learning this course for teach machine learning this course for teach machine learning this course for teach machine learning this course for teach machine learning this course for teach machine learning this course for teach machine learning this course for teach machine learning', 0, 10, '2021-07-14 06:22:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `password` varchar(512) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `first_name`, `last_name`, `status`, `created_at`, `password`) VALUES
(2, 'rezam578@gmail.com', 'reza', 'mobaraki', 0, '2021-07-09 10:59:19', '$2y$10$mvxd7R0jVtKIlaKmdq.9RehFcAsxCvzyBeDvU8lJW85H92fmxjuPa'),
(3, 'reza@gmail.com', 'reza', 'reza', 0, '2021-07-09 15:00:50', '$2y$10$N.aRuO3ZRiHIGk5PJNyGdOO2i8PJsiDOQp90gRZYazUnM8AlaHUrG'),
(4, 'rezam57888@gmail.com', 'reza', 'reza', 0, '2021-07-09 15:24:47', '$2y$10$Vx8rgoEV10ALdPsgGUNQmObsfUyfWtnfKBNQp/AAErsInw2bDB3Q2'),
(5, 'rezam3@gmail.com', 'reza', 'reza', 0, '2021-07-09 15:28:56', '$2y$10$v8Mrwf8BBkaSXkBtNcy35u19UNgeHeL6r2eeOmvILNfhP1jOHtCYS'),
(6, 'rezam57899@gmail.com', 'reza', 'mobaraki', 0, '2021-07-09 15:29:32', '$2y$10$Md75VY8edjVltTXoEVnKQu0znU9fAAaPIInNZciQbpr0B4S6.09FW'),
(7, 'maryost24@gmail.com', 'mary', 'ost', 0, '2021-07-11 16:00:19', '$2y$10$z1o3U8xdxF6U15qCKcSfmeshMrIe3051HzsMIK6q8bOIfPuia/PnW'),
(8, 'mary@gmail.com', 'reza', 'mobaraki', 0, '2021-07-12 16:59:26', '$2y$10$z9L/GOQGU1bvPBmBCJgfw.w0nS7iW2jWTm3tDrk6STRZchp3Yusi6'),
(9, 'gholi@gholi.com', 'gholi', 'gholian', 0, '2021-07-12 16:59:55', '$2y$10$DhprQP3Lf.pK.XN5M9etzO4chrUNr0XF64Wcl0CxCAov09KZH/iCq'),
(10, 'maryost2@gmail.com', 'mary', 'ostovar', 0, '2021-07-14 06:19:47', '$2y$10$4nV6I9Cwb57JLnh5uMbN8.skbdcWEpWnTr/ZB92Fj1V8HNgYBnkkW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
