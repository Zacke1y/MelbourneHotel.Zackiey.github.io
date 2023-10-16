-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 07:57 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `facilityId` bigint(20) UNSIGNED NOT NULL,
  `facilityname` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `caption` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `capacity` int(10) NOT NULL,
  `image` text NOT NULL,
  `configuration` enum('Single','Queen','King','Double') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`facilityId`, `facilityname`, `description`, `caption`, `price`, `capacity`, `image`, `configuration`) VALUES
(3, 'Studio', 'Studio apartment in North Melbourne', 'Room 2', 140, 2, 'room2.jpeg', 'Queen'),
(4, 'Room', 'Hotel Room in Melbourne CBD', 'Room1', 164, 2, 'room1.jpeg', 'Queen'),
(5, 'Room', 'Hotel Room in South Yarra', 'Room 4', 250, 3, 'room4.jpeg', 'King'),
(6, 'Suite', 'Suite room in the Melbourne CBD', 'Room3', 230, 2, 'room3.jpeg', 'Queen'),
(7, 'Suite', 'Suite Room in Footscray', 'room7', 255, 2, 'room7.jpg', 'Queen'),
(8, 'Studio', 'Studio Room in Docklands', 'room6', 345, 2, 'room6.jpg', 'King');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`facilityId`),
  ADD UNIQUE KEY `facilityId` (`facilityId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `facilityId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
