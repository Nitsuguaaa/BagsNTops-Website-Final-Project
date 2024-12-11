-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2024 at 06:58 PM
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
  `accountPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accountstb`
--

INSERT INTO `accountstb` (`accountId`, `accountName`, `accountEmail`, `accountPassword`) VALUES
('AD-0000', 'Admin', 'admin@admin.com', '$2y$10$ANh9nztRcr2mAfBQX2jWQ.vXUJevfGUp5A6hEzsytg7B3a1bz1qrO'),
('UI-0001', 'Augustin', 'ac@gmail.com', '$2y$10$.y1dr/iF7etRN6bUG3vK9OidIFybRlb.iXLWpWlfQaAia9Q3xGxja'),
('UI-2057', 'Rafael', 'raf.1@gago.com', '$2y$10$JEK9q92T/22hHqmZeC9sMeR1UKD.mAV2DabRNb8jQ7c.UWrOJrdme'),
('UI-2842', 'test', 'a@a.a', '$2y$10$cuY1XSTeyQCmlVDVH3LleuXUT.vc6sp7HH884SwXGO.HpyPFVqhiK'),
('UI-4809', 'Augustin Christian', 'augustin@gmail.com', '$2y$10$3n3uh4.HAo8qJ4eQcWrsI.QQFiZT0B54I9XgzrLJkEstZRCqHYl7.'),
('UI-4887', 'test2', 't2@t2.com', '$2y$10$/hPApIMa5IlcPIkgJZVsNeMX0y1dPUklC43nAFE6i3nfLbYnJnpsy'),
('UI-5235', 'Marc Ebron', 'marc.ebron@gmail.com', '$2y$10$zwpUo4a9ptEqvBMWtXUgIu5JCGjB/2TCIdyR.PkkTSKxwWBysA58S');

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

--
-- Dumping data for table `productstb`
--

INSERT INTO `productstb` (`productId`, `productName`, `productPrice`, `productStock`) VALUES
('PD-0001', 'Autism Shirt | Men & Women & Children', 259.00, 27),
('PD-0002', 'Monster Shirt', 699.99, 10),
('PD-0003', 'Ra_ist Shirt', 300.00, 50),
('PD-3930', 'White Shirt Plain', 199.00, 100);

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
