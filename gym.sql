-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2024 at 05:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `package` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `duration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package`, `price`, `duration`) VALUES
(1, 'Silver', 3000.00, '3montths'),
(2, 'Gold', 7000.00, '6months'),
(3, 'Platinum', 10000.00, '12months'),
(4, 'Annual', 15000.00, '15months');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phno` int(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subscription` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL,
  `status` int(4) DEFAULT 0 COMMENT '1 paid = 0 Notpaid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `gender`, `phno`, `email`, `subscription`, `price`, `password`, `create_datetime`, `status`) VALUES
(1, 'admin', 'Male', 23525352, 'admin@gmail.com', 'Annual', 0, 'e3274be5c857fb42ab72d786e281b4b8', '2024-04-08 19:18:16', 1),
(3, 'Tech', 'Male', 45765687, 'tech@gmail.com', 'Gold', 0, '51d917f1e20bad9f5258378d532fe8b4', '2024-04-09 05:34:11', 0),
(5, 'Fronseye', 'Male', 2147483647, 'fronseye@gmail.com', 'Platinum', 0, '4e511d3b273ca8125963a64b85bb0d0c', '2024-04-10 09:22:26', 0),
(6, 'trish', 'Female', 2147483647, 'trish@gmail.com', 'Platinum', 10000, '9958f4fd07eae633e28543e352118704', '2024-04-10 12:32:31', 1),
(10, 'Ram', 'Male', 2147483647, 'ram@gmail.com', 'Platinum', 10000, 'c9a2c96cd599eca3ba0a2e2a471043e3', '2024-04-11 07:21:49', 1),
(17, 'Kumar', 'Male', 2147483647, 'kumar@gmail.com', 'Platinum', 5000, 'd35464e39953a02c9f5cd9457974440a', '2024-04-12 03:41:50', 1),
(18, 'User', 'Male', 763535353, 'user@gmail.com', 'Platinum', 10000, 'b5b73fae0d87d8b4e2573105f8fbe7bc', '0000-00-00 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
