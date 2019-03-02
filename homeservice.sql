-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2019 at 05:29 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

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
-- Table structure for table `ac`
--

CREATE TABLE `ac` (
  `ac_id` int(11) NOT NULL,
  `org_name` varchar(100) NOT NULL,
  `split_price` int(100) NOT NULL,
  `window_price` int(100) NOT NULL,
  `phone_no` int(12) NOT NULL,
  `negotiable` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ac`
--

INSERT INTO `ac` (`ac_id`, `org_name`, `split_price`, `window_price`, `phone_no`, `negotiable`, `address`) VALUES
(1, 'ishtiaq refrigerator', 800, 1200, 1684348016, 'No', 'moghbazar'),
(2, 'avir refrigerator', 500, 1500, 1981233043, 'Yes', 'kuril'),
(3, 'tonmoy refrigerator', 600, 1200, 1682181859, 'Yes', 'ajimpur');

-- --------------------------------------------------------

--
-- Table structure for table `car_repair`
--

CREATE TABLE `car_repair` (
  `car_id` int(100) NOT NULL,
  `org_name` varchar(100) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `price_type` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_repair`
--

INSERT INTO `car_repair` (`car_id`, `org_name`, `phone_no`, `price_type`, `address`) VALUES
(1, 'avir motors', 1684218754, 'Fixed Price', 'kuril'),
(16, 'avir motors and repair', 1684348016, 'Fixed Price', 'Kuril,Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(20) NOT NULL,
  `s_name` varchar(200) NOT NULL,
  `delivery_available` varchar(200) NOT NULL,
  `delivery_charge` int(20) NOT NULL,
  `area` varchar(200) NOT NULL,
  `phone_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `s_name`, `delivery_available`, `delivery_charge`, `area`, `phone_no`) VALUES
(1, 'ripon medi store', 'No', 0, 'moghbazar,dhaka', 1684348016),
(2, 'sadia medi store', 'Yes', 50, 'mirpur,dhaka', 1912982768);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ac`
--
ALTER TABLE `ac`
  ADD PRIMARY KEY (`ac_id`),
  ADD UNIQUE KEY `org_name` (`org_name`);

--
-- Indexes for table `car_repair`
--
ALTER TABLE `car_repair`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ac`
--
ALTER TABLE `ac`
  MODIFY `ac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `car_repair`
--
ALTER TABLE `car_repair`
  MODIFY `car_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
