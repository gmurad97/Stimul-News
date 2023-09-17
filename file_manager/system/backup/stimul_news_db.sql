-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 17, 2023 at 05:52 AM
-- Server version: 8.0.30
-- PHP Version: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stimul_news_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `branding`
--

CREATE TABLE `branding` (
  `b_id` int NOT NULL,
  `b_options` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branding`
--

INSERT INTO `branding` (`b_id`, `b_options`) VALUES
(32, '{\"favicon\": {\"file_ext\": \".ico\", \"file_name\": \"e989052b4ffafaf6a4d6fd798660f5f3.ico\", \"file_type\": \"image/vnd.microsoft.icon\"}, \"logo_dark\": {\"file_ext\": \".png\", \"file_name\": \"3022b33ff21d621ccc011a9d5ce88048.png\", \"file_type\": \"image/png\", \"visibility\": false}, \"logo_light\": {\"file_ext\": \".png\", \"file_name\": \"5990f481e4f481d2ff63b3200f3ffbd5.png\", \"file_type\": \"image/png\", \"visibility\": true}, \"title_prefix\": \"Stimul News\"}');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `c_id` int NOT NULL,
  `c_categories` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `p_id` int NOT NULL,
  `p_options` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`p_id`, `p_options`) VALUES
(14, '{\"partner_img\": \"c8460bdd4e7ad0d5b3d0511f2147870c.png\", \"partner_link\": \"\", \"partner_title\": \"\", \"partner_status\": false}');

-- --------------------------------------------------------

--
-- Table structure for table `topbar`
--

CREATE TABLE `topbar` (
  `t_id` int NOT NULL,
  `t_options` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topbar`
--

INSERT INTO `topbar` (`t_id`, `t_options`) VALUES
(46, '{\"topbar_date\": true, \"topbar_self\": true, \"topbar_time\": true, \"topbar_weather\": true}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branding`
--
ALTER TABLE `branding`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `topbar`
--
ALTER TABLE `topbar`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branding`
--
ALTER TABLE `branding`
  MODIFY `b_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `p_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `topbar`
--
ALTER TABLE `topbar`
  MODIFY `t_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
