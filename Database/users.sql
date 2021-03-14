-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2021 at 09:50 AM
-- Server version: 8.0.23-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pack` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `firstname`, `lastname`, `username`, `password`, `pack`, `email`, `time`, `code`) VALUES
(3, 'Ritesh', 'Rathod', 'rnrathod', 'ritesh@07', '', '', '2021-01-17 03:41:08', ''),
(7, 'RITESHcx', 'RATHOD', 'xcv', 'xcv', 'starter', '', '2021-01-14 04:42:15', ''),
(8, 'Suhas', 'RATHOD', 'srathod', 's', 'Starter', '', '2021-01-21 04:34:51', ''),
(9, 'sahil', 'sharma', 'ssharma', 's', 'Medium', '', '2021-01-15 04:48:40', ''),
(10, 'Rohan', 'Sharma', 'rsharma', 'r', 'Complete', '', '2021-01-17 03:41:08', ''),
(11, 'a', 'a', 'a', 'a', 'medium', 'rt@gmail.com', '2021-01-17 03:41:08', ''),
(12, 'z', 'z', 'z', 'z', 'Medium', 's@gmail.com', '2021-01-17 03:41:08', ''),
(13, 'b', 'b', 'b', 'b', 'medium', 's@gmail.com', '2021-01-17 03:41:08', ''),
(14, 'sdsasd', 'ad', 'asd', 'rn', 'Starter', 'rn07rathod@gmail.com', '2021-01-17 03:41:08', '562886'),
(15, 'Ritesh', 'Rathod', 'admin', 'admin', '', '', '2021-01-17 03:41:08', ''),
(16, 'RITESH', 'RATHOD', 'r', 'rn', 'Medium', 'rn07rathod@gmail.com', '2021-01-17 04:52:46', '562886'),
(18, 'q', 'q', 'q', 'q', 'medium', 'ritesh07rathod@gmail.com', '2021-03-01 13:30:53', '418088'),
(19, 'q', 'q', 'q', 'q', 'medium', 'ritesh07rathod@gmail.com', '2021-03-19 03:10:49', '418088'),
(21, 'r', 'r', 'r', 'r', 'medium', 'rn07rathod@gmail.com', '2021-03-09 03:18:47', '562886');

-- --------------------------------------------------------

--
-- Table structure for table `completeupload`
--

CREATE TABLE `completeupload` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int NOT NULL,
  `downloads` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `completeupload`
--

INSERT INTO `completeupload` (`id`, `name`, `size`, `downloads`) VALUES
(5, 'New Doc 2020-01-20 18.54.21.pdf', 771345, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `date`) VALUES
(1, 'Ritesh', 'rn07rathod@gmail.com', 'Hello', '2020-12-15 09:21:23'),
(2, 'RITESH RATHOD', 'rnrathod@mitaoe.ac.in', 'as', '2020-12-15 09:51:49'),
(3, 'RITESH RATHOD', 'rnrathod@mitaoe.ac.in', 'aaa', '2020-12-15 09:54:09'),
(8, 'RITESH RATHOD', 'rnrathod@mitaoe.ac.in', 'ritesh', '2020-12-16 10:20:20');

-- --------------------------------------------------------

--
-- Table structure for table `mediumupload`
--

CREATE TABLE `mediumupload` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int NOT NULL,
  `downloads` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mediumupload`
--

INSERT INTO `mediumupload` (`id`, `name`, `size`, `downloads`) VALUES
(5, 'Coursera 2T644X8FUF33.pdf', 172462, 0);

-- --------------------------------------------------------

--
-- Table structure for table `new_record`
--

CREATE TABLE `new_record` (
  `id` int NOT NULL,
  `trn_date` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `specs` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `offer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `new_record`
--

INSERT INTO `new_record` (`id`, `trn_date`, `name`, `plan`, `amount`, `specs`, `duration`, `offer`) VALUES
(1, '2021-03-14 09:03:37', 'fa', 'asfas', 'afasf', 'safasf', 'sfas', 'asdasf'),
(2, '2021-03-14 09:03:59', 'vbzdf', 'zfvf', 'vzfvz', 'vzsdfvzd', 'vszdvd', 'szds');

-- --------------------------------------------------------

--
-- Table structure for table `rejected`
--

CREATE TABLE `rejected` (
  `id` int NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `pack` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rejected`
--

INSERT INTO `rejected` (`id`, `firstname`, `lastname`, `username`, `password`, `pack`, `email`) VALUES
(1, 'ritesh', 'rath', 'sa', 'as', 'starter', 's@gmail.com'),
(2, 'RITESH', 'RATHOD', 'riteshsxa', 'as', 'Medium', 'ritesh07rathod@gmail.com'),
(3, '', '', 'er', 'q', '', 'r@gmail.com'),
(4, '', '', 'c', 'c', '', 'r@gmail.com'),
(5, '', '', '', '', '', ''),
(6, '', '', 'k', 'k', '', 'r@gmail.com'),
(7, '', '', 'm', 'm', '', 'r@gmail.com'),
(8, '', '', 'e', 'e', '', 'r@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `pack` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(40) NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `firstname`, `lastname`, `username`, `password`, `pack`, `date`, `email`, `phone`, `address`) VALUES
(50, '', '', 'c', 'c', '', '2021-03-11 11:43:19', 'r@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `starterupload`
--

CREATE TABLE `starterupload` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int NOT NULL,
  `downloads` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `starterupload`
--

INSERT INTO `starterupload` (`id`, `name`, `size`, `downloads`) VALUES
(5, '309_T206010_Ritesh_AZ2Y94E6FQES (1).pdf', 271764, 6),
(6, '309_T206010_Ritesh_AZ2Y94E6FQES (1) (1).pdf', 271764, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `completeupload`
--
ALTER TABLE `completeupload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mediumupload`
--
ALTER TABLE `mediumupload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_record`
--
ALTER TABLE `new_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rejected`
--
ALTER TABLE `rejected`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `starterupload`
--
ALTER TABLE `starterupload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `completeupload`
--
ALTER TABLE `completeupload`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mediumupload`
--
ALTER TABLE `mediumupload`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `new_record`
--
ALTER TABLE `new_record`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rejected`
--
ALTER TABLE `rejected`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `starterupload`
--
ALTER TABLE `starterupload`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
