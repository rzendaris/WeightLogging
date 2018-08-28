-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2018 at 01:58 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weight_logging`
--

-- --------------------------------------------------------

--
-- Table structure for table `weight_log`
--

CREATE TABLE `weight_log` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `max` int(11) NOT NULL,
  `min` int(11) NOT NULL,
  `variance` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weight_log`
--

INSERT INTO `weight_log` (`id`, `date`, `max`, `min`, `variance`, `created_at`, `updated_at`) VALUES
(3, '2015-01-21', 50, 48, 2, '2018-08-28 04:27:29', '2018-08-28 11:34:21'),
(4, '2015-01-22', 51, 50, 1, '2018-08-28 04:28:18', '2018-08-28 11:34:18'),
(5, '2015-01-23', 52, 50, 2, '2018-08-28 04:28:44', '2018-08-28 11:34:15'),
(6, '2015-01-24', 49, 49, 0, '2018-08-28 04:29:09', '2018-08-28 04:29:09'),
(7, '2015-01-25', 50, 49, 1, '2018-08-28 04:29:30', '2018-08-28 04:54:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `weight_log`
--
ALTER TABLE `weight_log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `weight_log`
--
ALTER TABLE `weight_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
