-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2024 at 04:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample_bhw`
--

-- --------------------------------------------------------

--
-- Table structure for table `lgbt_category`
--

--
-- Dumping data for table `lgbt_category`
--

INSERT INTO `lgbt_categories` (`id`, `lgbt_category`) VALUES
(1, 'Lesbian'),
(2, 'Gay'),
(3, 'Bisexual'),
(4, 'Trans'),
(5, 'Queer'),
(6, 'Questioning'),
(7, 'Intersex'),
(8, 'Asexual '),
(9, 'Not Applicable');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lgbt_category`
--
ALTER TABLE `lgbt_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lgbt_category`
--
ALTER TABLE `lgbt_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
