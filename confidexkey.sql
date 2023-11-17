-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2023 at 12:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `confidexkey`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `unique_key` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `ip`, `status`, `unique_key`, `pin`, `msg`, `file`, `created_at`) VALUES
(1, '2401:4900:1c6f:47ad:75d3:996b:7c8c:3f49', 1, 'YBj4pmG38t', 'vinay0000', 'Hello, Welcome to Secret Data. Created by Vinay Munjal.', NULL, '2023-11-17 10:36:45'),
(2, '2401:4900:1c6f:479e:cc1a:c0bd:a7bf:31ce', 1, 'M10zNJuDbl', '25810', 'Aufers@7777\r\nEducasia', NULL, '2023-11-17 11:59:29'),
(3, '2401:4900:1c6f:479e:cc1a:c0bd:a7bf:31ce', 1, 'lszk0uC26A', 'f2f2se3', '<?php\r\n      $conn = mysqli_connect(\"localhost\",\"root\", \"\", \"secretData\");\r\n?>', NULL, '2023-11-17 12:03:03'),
(4, '2401:4900:1c6f:479e:cc1a:c0bd:a7bf:31ce', 1, '0ydhMWF87C', 'vinay_por01/17-11/16:53', 'Portrait Image', '27334_vinay.jpg', '2023-11-17 12:23:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
