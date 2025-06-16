-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 16, 2025 at 12:00 PM
-- Server version: 5.5.68-MariaDB
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ugmslnr`
--

-- --------------------------------------------------------

--
-- Table structure for table `awc`
--

CREATE TABLE IF NOT EXISTS `awc` (
  `date` date NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `day_parts`
--

CREATE TABLE IF NOT EXISTS `day_parts` (
  `id` int(11) NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fire_forecast`
--

CREATE TABLE IF NOT EXISTS `fire_forecast` (
  `id` int(11) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `high_water_posts`
--

CREATE TABLE IF NOT EXISTS `high_water_posts` (
  `id` int(11) NOT NULL,
  `water_body_name` varchar(50) NOT NULL DEFAULT '',
  `water_post_name` varchar(50) NOT NULL DEFAULT '',
  `forecast_description` text NOT NULL,
  `last_update` datetime DEFAULT NULL,
  `current_status` tinyint(4) NOT NULL DEFAULT '0',
  `forecast_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `high_water_statuses`
--

CREATE TABLE IF NOT EXISTS `high_water_statuses` (
  `status` int(11) NOT NULL COMMENT 'status id',
  `color` varchar(7) NOT NULL COMMENT 'hex color',
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `high_water_warning`
--

CREATE TABLE IF NOT EXISTS `high_water_warning` (
  `id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `icons`
--

CREATE TABLE IF NOT EXISTS `icons` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pfatp`
--

CREATE TABLE IF NOT EXISTS `pfatp` (
  `date` date NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pollution`
--

CREATE TABLE IF NOT EXISTS `pollution` (
  `date` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qr_codes`
--

CREATE TABLE IF NOT EXISTS `qr_codes` (
  `id` int(11) NOT NULL,
  `doc_type` text NOT NULL,
  `doc_number` text NOT NULL,
  `doc_date` date NOT NULL,
  `doc_source` text NOT NULL,
  `doc_receiver` text NOT NULL,
  `doc_performer` text NOT NULL,
  `doc_signer` text NOT NULL,
  `doc_comment` text,
  `doc_hash` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `radiation`
--

CREATE TABLE IF NOT EXISTS `radiation` (
  `date` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sinop_comments`
--

CREATE TABLE IF NOT EXISTS `sinop_comments` (
  `date` date NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `warnings`
--

CREATE TABLE IF NOT EXISTS `warnings` (
  `id` int(11) NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `aside_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `weather_current`
--

CREATE TABLE IF NOT EXISTS `weather_current` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `icon` int(11) NOT NULL,
  `temperature` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wind_speed` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `humidity` int(11) NOT NULL,
  `pressure` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `weather_forecast_table`
--

CREATE TABLE IF NOT EXISTS `weather_forecast_table` (
  `date` date NOT NULL,
  `day_part` int(11) NOT NULL DEFAULT '0',
  `icon` int(11) NOT NULL,
  `wind_direction` int(11) NOT NULL,
  `wind_speed` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temperature` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `weather_forecast_text`
--

CREATE TABLE IF NOT EXISTS `weather_forecast_text` (
  `date` date NOT NULL,
  `desc_city` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_region` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wind_directions`
--

CREATE TABLE IF NOT EXISTS `wind_directions` (
  `id` int(11) NOT NULL,
  `direction` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `awc`
--
ALTER TABLE `awc`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `day_parts`
--
ALTER TABLE `day_parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fire_forecast`
--
ALTER TABLE `fire_forecast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `high_water_posts`
--
ALTER TABLE `high_water_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `high_water_statuses`
--
ALTER TABLE `high_water_statuses`
  ADD PRIMARY KEY (`status`);

--
-- Indexes for table `high_water_warning`
--
ALTER TABLE `high_water_warning`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `pfatp`
--
ALTER TABLE `pfatp`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `pollution`
--
ALTER TABLE `pollution`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `qr_codes`
--
ALTER TABLE `qr_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radiation`
--
ALTER TABLE `radiation`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `sinop_comments`
--
ALTER TABLE `sinop_comments`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `warnings`
--
ALTER TABLE `warnings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weather_current`
--
ALTER TABLE `weather_current`
  ADD PRIMARY KEY (`id`),
  ADD KEY `icon` (`icon`);

--
-- Indexes for table `weather_forecast_table`
--
ALTER TABLE `weather_forecast_table`
  ADD PRIMARY KEY (`date`,`day_part`),
  ADD KEY `day_part` (`day_part`),
  ADD KEY `icon` (`icon`),
  ADD KEY `wind_direction` (`wind_direction`);

--
-- Indexes for table `weather_forecast_text`
--
ALTER TABLE `weather_forecast_text`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `wind_directions`
--
ALTER TABLE `wind_directions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `direction` (`direction`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `day_parts`
--
ALTER TABLE `day_parts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fire_forecast`
--
ALTER TABLE `fire_forecast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `high_water_posts`
--
ALTER TABLE `high_water_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `high_water_warning`
--
ALTER TABLE `high_water_warning`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `icons`
--
ALTER TABLE `icons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `qr_codes`
--
ALTER TABLE `qr_codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `warnings`
--
ALTER TABLE `warnings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `weather_current`
--
ALTER TABLE `weather_current`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wind_directions`
--
ALTER TABLE `wind_directions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `weather_current`
--
ALTER TABLE `weather_current`
  ADD CONSTRAINT `weather_current_ibfk_1` FOREIGN KEY (`icon`) REFERENCES `icons` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
