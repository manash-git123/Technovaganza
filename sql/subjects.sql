-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2019 at 07:34 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sl_no` int(4) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `branch` int(2) NOT NULL,
  `semester` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sl_no`, `subject`, `branch`, `semester`) VALUES
(1, 'Physics ', 1, 1),
(2, 'Maths ', 1, 1),
(3, 'EM  ', 1, 1),
(4, 'BEE', 1, 1),
(5, 'English', 1, 1),
(6, 'EGD', 1, 1),
(7, 'Ph Lab', 1, 1),
(8, 'BEE Lan', 1, 1),
(9, ' L Lab', 1, 1),
(10, 'Physics ', 2, 1),
(11, 'Maths ', 2, 1),
(12, 'EM  ', 2, 1),
(13, 'BEE', 2, 1),
(14, 'English', 2, 1),
(15, 'EGD', 2, 1),
(16, 'Ph Lab', 2, 1),
(17, 'BEE Lan', 2, 1),
(18, ' L Lab', 2, 1),
(19, 'Physics ', 6, 1),
(20, 'Maths ', 6, 1),
(21, 'EM  ', 6, 1),
(22, 'BEE', 6, 1),
(23, 'English', 6, 1),
(24, 'EGD', 6, 1),
(25, 'Ph Lab', 6, 1),
(26, 'BEE Lan', 6, 1),
(27, ' L Lab', 6, 1),
(28, 'Chemistry', 5, 1),
(29, 'Maths ', 5, 1),
(30, 'IP', 5, 1),
(31, 'BE', 5, 1),
(32, 'ESE', 5, 1),
(33, 'Ch Lab', 5, 1),
(34, 'IP Lab', 5, 1),
(35, 'BE Lab', 5, 1),
(36, 'WP', 5, 1),
(37, 'Chemistry', 4, 1),
(38, 'Maths ', 4, 1),
(39, 'IP', 4, 1),
(40, 'BE', 4, 1),
(41, 'ESE', 4, 1),
(42, 'Ch Lab', 4, 1),
(43, 'IP Lab', 4, 1),
(44, 'BE Lab', 4, 1),
(45, 'WP', 4, 1),
(46, 'Chemistry', 3, 1),
(47, 'Maths ', 3, 1),
(48, 'IP', 3, 1),
(49, 'BE', 3, 1),
(50, 'ESE', 3, 1),
(51, 'Ch Lab', 3, 1),
(52, 'IP Lab', 3, 1),
(53, 'BE Lab', 3, 1),
(54, 'WP', 3, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
