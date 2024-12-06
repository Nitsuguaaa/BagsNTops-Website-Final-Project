-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2024 at 09:26 PM
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
-- Database: `bagsntops`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `prodDescription` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productName`, `price`, `quantity`, `prodDescription`, `image`) VALUES
(1, 'T-shirt', 5.99, 10, 'This is a t-shirt description.', 'RSC/products-img/image1.png'),
(2, 'Bags', 2.99, 20, 'This is a description for bags.', 'RSC/products-img/image2.png'),
(3, 'Shoes', 9.99, 20, 'This is a description for shoes.', 'RSC/products-img/image3.png'),
(4, 'Phone', 49.99, 20, 'This is a description for phone.', 'RSC/products-img/image4.png'),
(5, 'Laptop', 99.99, 20, 'This is a description for laptop.', 'RSC/products-img/image5.png'),
(6, 'Charger', 39.99, 20, 'This is a description for shoes.', 'RSC/products-img/image6.png'),
(7, 'Fans', 59.99, 20, 'This is a description for fans.', 'RSC/products-img/image7.png'),
(8, 'Soap', 6.99, 20, 'This is a description for soap.', 'RSC/products-img/image8.png'),
(9, 'Shades', 17.99, 20, 'This is a description for shades.', 'RSC/products-img/image9.png'),
(10, 'Camera', 4.99, 20, 'This is a description for camera.', 'RSC/products-img/image10.png'),
(11, 'Weeds', 1.99, 100, 'Smoke then fuck', 'RSC/products-img/image11.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
