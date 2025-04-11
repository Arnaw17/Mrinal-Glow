-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 09:35 PM
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
-- Database: `mrinal glow`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Name` text NOT NULL,
  `Email_Phone` varchar(255) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `Order_id` int(11) NOT NULL,
  `Full_Name` text NOT NULL,
  `Phone_No` double NOT NULL,
  `Address` text NOT NULL,
  `Pin_Code` varchar(200) NOT NULL,
  `State_name` text NOT NULL,
  `Pay_Mode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`Order_id`, `Full_Name`, `Phone_No`, `Address`, `Pin_Code`, `State_name`, `Pay_Mode`) VALUES
(1, 'Arnaw', 9102565799, 'Dudhani', '814101', 'Jharkhand', 'COD'),
(2, 'Arnaw', 7319842283, 'afd', '814101', 'Jharkhand', 'COD'),
(3, 'Arnaw', 12312, 'fadf', '1231', 'jharkhand', 'on'),
(4, 'Arnaw', 1231, 'fadfa', '423423', 'fasdf', 'on'),
(5, 'arnaw', 321, 'fads', '214', 'fdas', 'on'),
(6, 'arnaw23', 321321, 'fdasfas', '2313', 'fdasf', 'on'),
(7, 'Arnaw', 1232, 'Gasuahala Road Dudhani Dumka', '12324', 'stare', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `Order_Id` int(11) NOT NULL,
  `Item_Name` text NOT NULL,
  `Price` double NOT NULL,
  `Quantity` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES
(1, 'Multani Mitti Powder|Earth Fuller\'s', 140, 1),
(2, 'Multani Mitti Powder|Earth Fuller\'s', 140, 1),
(3, 'Mrinal Glow', 7560, 54),
(4, 'Mrinal Glow', 840, 6),
(5, 'Mrinal Glow', 840, 6),
(6, 'Mrinal Glow', 700, 5),
(7, 'Mrinal Glow', 6020, 43);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`Order_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `Order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `Order_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
