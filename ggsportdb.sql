-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2024 at 03:15 AM
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
-- Database: `ggsportdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(11) NOT NULL,
  `catname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`) VALUES
(8, 'Boxing'),
(9, 'Tennis'),
(10, 'Table Tennis'),
(11, 'Soccer'),
(12, 'Badminton'),
(13, 'Golf'),
(14, 'Swimming'),
(15, 'Base Ball'),
(16, 'Basketball'),
(17, 'Archery');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackid` int(11) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackid`, `feedback`) VALUES
(3, 'good service'),
(4, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemid` int(11) NOT NULL,
  `itemname` varchar(30) NOT NULL,
  `catid` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemid`, `itemname`, `catid`, `price`, `qty`, `photo`) VALUES
(28, 'tennis01', 9, 70000, 6, '1.jpg'),
(29, 'tennis02', 9, 50000, 16, '2.jpg'),
(30, 'tennis03', 9, 650000, 12, '3.jpg'),
(31, 'Boxing01', 8, 70000, 10, '01.jpg'),
(32, 'Boxing02', 8, 70000, 10, '02.jpg'),
(33, 'Boxing03', 8, 10000, 10, '03.jpg'),
(34, 'soccer01', 11, 80000, 30, 'P25.jpg'),
(35, 'soccer02', 11, 500000, 7, 'P9.jpg'),
(36, 'badminton', 12, 60000, 3, 'P1.jpg'),
(37, 'badminton02', 12, 70000, 12, 'P2.jpg'),
(38, 'Baseball01', 16, 100000, 23, 'P5.jpg'),
(39, 'Baseball02', 16, 60000, 23, 'P6.jpg'),
(40, 'Golf01', 13, 50000, 7, 'P19.jpg'),
(41, 'Golf02', 13, 50000, 10, 'P30.jpg'),
(42, 'Golf03', 13, 20000, 10, 'P20.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `productqty` int(11) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`orderid`, `productid`, `productqty`, `amount`) VALUES
(9, 14, 2, 7000),
(10, 14, 4, 14000),
(10, 20, 2, 7200),
(10, 12, 2, 700),
(11, 29, 4, 200000),
(11, 32, 2, 140000),
(11, 34, 2, 160000),
(12, 28, 2, 140000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `deliveryname` varchar(30) NOT NULL,
  `deliveryphone` varchar(20) NOT NULL,
  `deliveryaddress` varchar(255) NOT NULL,
  `orderdate` date NOT NULL,
  `status` int(11) NOT NULL,
  `senddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `customerid`, `deliveryname`, `deliveryphone`, `deliveryaddress`, `orderdate`, `status`, `senddate`) VALUES
(11, 13, 'group2user', '091234567', 'Yangon', '2024-02-03', 1, '2024-02-03'),
(12, 13, 'group2user', '091234567', 'Yangon', '2024-02-03', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `email`, `phone`, `address`, `role`) VALUES
(12, 'group2', '202cb962ac59075b964b07152d234b70', '', '', '', 'admin'),
(13, 'group2user', '202cb962ac59075b964b07152d234b70', 'group2@gmail.com', '091234567', 'Yangon', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackid`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
