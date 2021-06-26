-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 يونيو 2021 الساعة 21:59
-- إصدار الخادم: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robotmovementdb`
--

-- --------------------------------------------------------

--
-- بنية الجدول `movement_table`
--

CREATE TABLE `movement_table` (
  `MID` int(11) NOT NULL,
  `movement` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `movement_table`
--

INSERT INTO `movement_table` (`MID`, `movement`) VALUES
(1, 'right'),
(2, 'stop'),
(3, 'left'),
(4, 'right'),
(5, 'right'),
(6, 'stop'),
(7, 'left'),
(8, 'stop'),
(9, 'forward'),
(10, 'stop'),
(11, 'stop'),
(12, 'forward'),
(13, 'forward'),
(14, 'stop'),
(15, 'forward'),
(16, 'forward'),
(17, 'right');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movement_table`
--
ALTER TABLE `movement_table`
  ADD PRIMARY KEY (`MID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movement_table`
--
ALTER TABLE `movement_table`
  MODIFY `MID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
