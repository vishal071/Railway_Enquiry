-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 10:33 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enquiry`
--

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `name` varchar(25) DEFAULT NULL,
  `pnr` int(5) NOT NULL,
  `AGE` int(2) DEFAULT NULL,
  `sex` varchar(2) DEFAULT NULL,
  `train_no` int(2) DEFAULT NULL,
  `coachno` int(5) DEFAULT NULL,
  `seatno` int(5) DEFAULT NULL,
  `berth` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`name`, `pnr`, `AGE`, `sex`, `train_no`, `coachno`, `seatno`, `berth`) VALUES
('NIDHI', 1234, 21, 'M', 12345, 5, 6, 'LOW'),
('SUNNY', 1534, 21, 'M', 12345, 5, 6, 'LOW'),
('KRISH', 1624, 21, 'M', 12623, 5, 6, 'LOW'),
('BHOOT', 1921, 192, 'T', 12623, 5, 60, 'MID');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `train_no` int(5) NOT NULL,
  `train_name` varchar(255) DEFAULT NULL,
  `source_name` varchar(255) DEFAULT NULL,
  `destination_name` varchar(255) DEFAULT NULL,
  `arriving_platform` varchar(255) DEFAULT NULL,
  `departure_time` time DEFAULT NULL,
  `arrival_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`train_no`, `train_name`, `source_name`, `destination_name`, `arriving_platform`, `departure_time`, `arrival_time`) VALUES
(121, 'Patna-tata', 'Patna', 'Tatanagar', '1', '06:30:12', '12:40:50'),
(123, 'Tata-patna', 'Tatanagar', 'Patna', '2', '19:30:10', '19:30:40'),
(131, 'Patna-madras', 'Patna', 'Madras', '3', '06:30:12', '12:40:50'),
(185, 'Tata-express', 'Tatanagar', 'Patna', '4', '20:09:09', '14:26:05'),
(191, 'Tata-madras', 'Tatanagar', 'Madras', '2', '09:30:12', '22:40:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`pnr`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`train_no`),
  ADD UNIQUE KEY `train_name` (`train_name`),
  ADD UNIQUE KEY `constraint_name` (`train_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
