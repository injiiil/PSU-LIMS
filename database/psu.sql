-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2024 at 08:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(150) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `mname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `contactno` varchar(12) NOT NULL,
  `address` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `admin_pic` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `fname`, `mname`, `lname`, `contactno`, `address`, `username`, `password`, `admin_pic`) VALUES
('21-SC-2332', 'Angel', 'Lopez', 'Sanchez', '09954377329', 'Bolingit', 'admin', 'admin', 'uploads/injil.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `all_desktop_computer`
--
-- Error reading structure for table psu.all_desktop_computer: #1932 - Table 'psu.all_desktop_computer' doesn't exist in engine
-- Error reading data for table psu.all_desktop_computer: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `psu`.`all_desktop_computer`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `custodian`
--

CREATE TABLE `custodian` (
  `custodian_id` varchar(150) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `mname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `contactno` varchar(13) NOT NULL,
  `address` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(250) NOT NULL,
  `custodian_pic` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `custodian`
--

INSERT INTO `custodian` (`custodian_id`, `fname`, `mname`, `lname`, `contactno`, `address`, `username`, `password`, `custodian_pic`) VALUES
('', 'injil', '', 'sanchez', '', '', 'injil', 'injil', 'images/'),
('21-sc-2334', 'Jheus', 'Hermosa', 'Valdez', '12345678901', 'Basista', 'custodian', 'custodian', '');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `lablocation_id` int(250) NOT NULL,
  `roomname` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`lablocation_id`, `roomname`) VALUES
(1, 'Lab 1'),
(2, 'Lab 2');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` varchar(150) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `mname` varchar(150) NOT NULL,
  `contactno` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `teacher_pic` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `fname`, `mname`, `contactno`, `address`, `username`, `password`, `teacher_pic`) VALUES
('21-sc-3434', 'Jimwell', 'M.', 'Mendoza', 'jsbdvjdsadsdas', 'teacher', 'teacher', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `user_log_id` int(50) NOT NULL,
  `username` varchar(250) NOT NULL,
  `login_date` varchar(250) NOT NULL,
  `admin_id` int(150) NOT NULL,
  `custodian_id` int(150) NOT NULL,
  `teacher_id` int(150) NOT NULL,
  `logout_date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `custodian`
--
ALTER TABLE `custodian`
  ADD PRIMARY KEY (`custodian_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`lablocation_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`user_log_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
