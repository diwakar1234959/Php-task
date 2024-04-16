-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2024 at 05:26 AM
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
-- Database: `practise`
--

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

CREATE TABLE `hobbies` (
  `hobbies_id` int(100) NOT NULL,
  `hobbies_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hobbies`
--

INSERT INTO `hobbies` (`hobbies_id`, `hobbies_name`) VALUES
(1, 'Cricket'),
(2, 'Football'),
(3, 'Gym'),
(4, 'Books');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `no` int(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `class` varchar(100) DEFAULT NULL,
  `hobbies` varchar(100) DEFAULT NULL,
  `lang` varchar(100) DEFAULT NULL,
  `marks` int(100) DEFAULT NULL,
  `files` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `name`, `gender`, `no`, `date`, `class`, `hobbies`, `lang`, `marks`, `files`) VALUES
(2, 'Murugan', 'Male', 219098977, '1995-04-12', 'Grade 8', 'Cricket,Gym', 'Tamil,English', 85, ''),
(3, 'madhu', 'Female', 786468522, '2002-05-14', 'Grade 9', 'Cricket,Football', 'Tamil,English', 80, ''),
(4, 'mm', 'Female', 2147483647, '1999-03-12', 'Grade 8', 'Cricket', 'Tamil', 95, ''),
(5, 'Sam', 'Male', 489486165, '1999-02-12', 'Grade 9', 'Cricket,Football', 'Tamil,English', 80, NULL),
(6, 'vikki', 'Male', 84547587, '1999-12-05', 'Grade 7', 'Cricket,Football', 'English', 80, NULL),
(7, 'sam', 'Male', 123456789, '2024-04-26', 'Grade 6', 'Cricket', 'Tamil', 95, NULL),
(8, 'vw', 'Male', 448984645, '2024-04-04', 'Grade 8', 'Cricket,Football', 'Tamil', 62, NULL),
(9, 'ram', 'Male', 2147483647, '2024-05-03', 'Grade 8', 'Cricket,Football', 'Tamil,English', 70, NULL),
(10, 'vas', 'Male', 234235235, '2024-04-20', 'Grade 8', 'Cricket', 'Tamil', 50, NULL),
(11, 'hari', 'Male', 893589523, '2024-04-18', 'Grade 8', 'Football', 'Tamil', 50, 'Array'),
(12, 'Jack', 'Male', 2147483647, '1999-02-12', 'Grade 8', 'Cricket,Football', 'Tamil,English', 80, 'Array'),
(15, 'frank', 'Male', 676658585, '1999-03-10', 'Grade 7', 'Cricket,Football', 'English', 85, '442431.jpg'),
(16, 'Ram', 'Male', 624634523, '1111-12-12', 'Grade 8', 'Cricket,Football', 'Tamil,English', 80, 'wallpaperflare.com_wallpaper (4).jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`hobbies_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `hobbies_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
