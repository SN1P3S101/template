-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 26, 2022 at 06:49 PM
-- Server version: 10.3.34-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SNIP-Template`
--

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `setting_language` text NOT NULL,
  `setting_title` text NOT NULL,
  `setting_themecolor` text DEFAULT NULL,
  `setting_meta_title` text NOT NULL,
  `setting_meta_description` text NOT NULL,
  `setting_bootstrap` int(11) NOT NULL,
  `setting_css` int(11) NOT NULL,
  `setting_css_minified` int(11) NOT NULL,
  `setting_robots` int(11) NOT NULL,
  `setting_favicon` int(11) NOT NULL,
  `setting_meta` int(11) NOT NULL,
  `setting_facebook` int(11) NOT NULL,
  `setting_meta_image` int(11) NOT NULL,
  `setting_twitter` int(11) NOT NULL,
  `setting_jquery` int(11) NOT NULL,
  `setting_javascript` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `setting_language`, `setting_title`, `setting_themecolor`, `setting_meta_title`, `setting_meta_description`, `setting_bootstrap`, `setting_css`, `setting_css_minified`, `setting_robots`, `setting_favicon`, `setting_meta`, `setting_facebook`, `setting_meta_image`, `setting_twitter`, `setting_jquery`, `setting_javascript`) VALUES
(1, 'en', 'Website title', '', 'Meta title', 'Meta description', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
