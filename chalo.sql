-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2024 at 06:40 PM
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
-- Database: `chalo`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payid` int(11) NOT NULL,
  `studentid` varchar(25) NOT NULL,
  `planid` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `trasnid` varchar(25) NOT NULL,
  `bank` varchar(25) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payid`, `studentid`, `planid`, `city`, `trasnid`, `bank`, `startdate`, `enddate`) VALUES
(5, 'ajay@gmail.com', 7, 'Mangalore', '3534btergegbdfg', 'bank of baroda', '2012-05-24', '2011-06-24'),
(10, 'shravan@gmail.com', 1, 'Mangalore', 'yfoweforf', 'canara bank', '2018-05-24', '2017-06-24'),
(13, 'avil@gmail.com', 8, 'Mangalore', 'DJAFFIM45NI6', 'Baroda Bank', '2024-05-18', '2024-08-16');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `pid` int(10) NOT NULL,
  `price` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `trips` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`pid`, `price`, `duration`, `trips`) VALUES
(1, '199', '30', 2),
(7, '299', '30', 4),
(8, '499', '90', 2),
(9, '599', '90', 4);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `clgname` text NOT NULL,
  `clgid` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `age`, `phoneno`, `email`, `clgname`, `clgid`, `password`) VALUES
('ajay', 22, '8797966977', 'ajay@gmail.com', 'st joseph engineering college', 'MS78993956', '$2y$10$JJv/axuOaysCNUfGR4sr/uzxaQT9cbW25z5BO/NY/bov6ULD5ltWO'),
('Stan Avil Dsouza', 21, '7624898573', 'avil@gmail.com', 'St Joseph', '204716', '$2y$10$dcVhj/YX1p9qfy3DJ/PBUujV7Db7FTMUvkaKUSPiHZv.EqMfsYdNm'),
('Shravan k', 21, '7624898574', 'shravan@gmail.com', 'St Joseph', '204717', '$2y$10$HEl3MQ.hrm4LohE7jA3pauScbDZ14lJW7DbTt/IGFwAkLoQneLdeS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payid`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `clgid` (`clgid`),
  ADD UNIQUE KEY `phoneno` (`phoneno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
