-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 01:21 PM
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
  `auto_expiry` tinyint(4) NOT NULL DEFAULT 0,
  `expiry_date` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `ip`, `status`, `unique_key`, `pin`, `msg`, `file`, `auto_expiry`, `expiry_date`, `created_at`) VALUES
(1, '2401:4900:1c70:57c7:e051:f677:f81d:ae9', 1, 'SRN3FjPE5y', '18603', 'Secret Key: 023352fsfr875s35\r\nSecret Pin: f21200-2023', NULL, 1, '2023-11-28 17:03:51', '2023-11-20 17:03:52'),
(2, '2401:4900:1c70:57c7:e051:f677:f81d:ae9', 1, 'L46JfMO21d', '03/11/23', 'Amit Visa', '38261_AMIT VISA.pdf', 1, '2023-11-21 17:06:30', '2023-11-20 17:06:50');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
