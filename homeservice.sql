-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2019 at 08:33 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homeservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `laundry`
--

CREATE TABLE `laundry` (
  `l_id` int(11) NOT NULL,
  `org_name` varchar(200) NOT NULL,
  `r_men` int(100) NOT NULL,
  `r_kid` int(100) NOT NULL,
  `r_woman` int(100) NOT NULL,
  `r_ass` int(100) NOT NULL,
  `m_man` int(100) NOT NULL,
  `m_kid` int(100) NOT NULL,
  `m_woman` int(100) NOT NULL,
  `m_ass` int(100) NOT NULL,
  `phone_no` int(12) NOT NULL,
  `area` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laundry`
--

INSERT INTO `laundry` (`l_id`, `org_name`, `r_men`, `r_kid`, `r_woman`, `r_ass`, `m_man`, `m_kid`, `m_woman`, `m_ass`, `phone_no`, `area`) VALUES
(1, 'abir laundry services', 50, 30, 50, 200, 800, 600, 800, 1000, 1632006057, 'kuril'),
(2, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `shifting`
--

CREATE TABLE `shifting` (
  `h_id` int(11) NOT NULL,
  `org_name` varchar(100) NOT NULL,
  `home` varchar(200) NOT NULL,
  `office` varchar(100) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `area` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shifting`
--

INSERT INTO `shifting` (`h_id`, `org_name`, `home`, `office`, `phone_no`, `area`) VALUES
(1, 'Abir Carrier and Logistics ', '10000', '25000', 1916868231, 'kuril'),
(2, 'Hassan Chowdhary logistics', '12000', '22000', 1916868231, 'dhanmondi'),
(3, 'NSU Carrier and Logistics', '13000', '30000', 1916579548, 'Banani');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laundry`
--
ALTER TABLE `laundry`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `shifting`
--
ALTER TABLE `shifting`
  ADD PRIMARY KEY (`h_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laundry`
--
ALTER TABLE `laundry`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shifting`
--
ALTER TABLE `shifting`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
