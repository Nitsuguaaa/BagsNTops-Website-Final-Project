-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2024 at 03:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bagsntopsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountstb`
--

CREATE TABLE `accountstb` (
  `accountId` varchar(7) NOT NULL,
  `accountName` varchar(30) NOT NULL,
  `accountEmail` varchar(50) NOT NULL,
  `accountPassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productstb`
--

CREATE TABLE `productstb` (
  `productId` varchar(7) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productPrice` decimal(10,2) NOT NULL,
  `productStock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactionstb`
--

CREATE TABLE `transactionstb` (
  `transactionId` varchar(7) NOT NULL,
  `accountId` varchar(7) NOT NULL,
  `productId` varchar(7) NOT NULL,
  `orderQuantity` int(11) NOT NULL,
  `accountAddress` varchar(255) NOT NULL,
  `accountPNum` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountstb`
--
ALTER TABLE `accountstb`
  ADD PRIMARY KEY (`accountId`);

--
-- Indexes for table `productstb`
--
ALTER TABLE `productstb`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `transactionstb`
--
ALTER TABLE `transactionstb`
  ADD PRIMARY KEY (`transactionId`),
  ADD KEY `accountId` (`accountId`),
  ADD KEY `productId` (`productId`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transactionstb`
--
ALTER TABLE `transactionstb`
  ADD CONSTRAINT `transactionstb_ibfk_1` FOREIGN KEY (`accountId`) REFERENCES `accountstb` (`accountId`),
  ADD CONSTRAINT `transactionstb_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `productstb` (`productId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
