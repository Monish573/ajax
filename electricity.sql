-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2019 at 11:47 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electricity`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `id` int(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `uname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`id`, `email`, `password`, `uname`) VALUES
(1, 'monishkapoor573@gmail.com', 'monish0508', 'Monish Kapoor');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `id` int(35) NOT NULL,
  `user` varchar(35) NOT NULL,
  `period` int(35) NOT NULL,
  `last_date` date NOT NULL,
  `cu` int(200) NOT NULL,
  `pu` int(100) NOT NULL,
  `unit` int(5) NOT NULL DEFAULT '5',
  `ldate` date NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`id`, `user`, `period`, `last_date`, `cu`, `pu`, `unit`, `ldate`, `total`) VALUES
(1, '1', 2, '2019-07-04', 110, 120, 5, '2019-08-08', 1150),
(2, '2', 4, '0000-00-00', 120, 0, 2019, '0000-00-00', 700),
(3, '3', 4, '0000-00-00', 100, 120, 5, '2019-07-27', 700),
(4, '4', 3, '2019-07-12', 10, 20, 5, '2019-07-10', 110),
(5, '5', 5, '2019-07-05', 10, 10, 5, '2019-07-06', 100),
(6, '6', 3, '2019-08-08', 112, 110, 5, '2019-08-16', 1110),
(7, '7', 4, '2019-08-16', 112, 120, 5, '2019-08-21', 1160);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(50) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` int(200) NOT NULL,
  `account` int(200) NOT NULL,
  `connection` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `address`, `city`, `state`, `email`, `password`, `phone`, `account`, `connection`) VALUES
(1, 'Monish', 'Kapoor', 'gvbafbgkjfbgvfgbahbg', 'Udapiur', 'rajasthan', 'monishkapoor573@gmail.com', '123456', 2147483647, 2147483647, 'Personal'),
(2, 'lakshya', 'choudhary', 'hjdgjhjthjmhjy', 'Udapiur', 'rajasthan', 'lakshya.bms@gmail.com', '00112233', 147852, 2147483647, 'Commercial'),
(3, 'akshay', 'kapoor', 'bdh gjjjjb hnmhhh', 'Udapiur', 'rajasthan', 'ak@bms.com', '123456', 147852, 2147483647, 'Personal'),
(4, 'jatin', 'kapoor', 'nsghvifhgi', 'Udapiur', 'rajasthan', 'jk@gmail.com', '123456', 147852, 2147483647, 'Commercial'),
(5, 'praveen', 'yadav', 'cmsgnijfvgjn', 'Udapiur', 'rajasthan', 'py@gmail.com', '123456', 147852, 2147483647, 'Personal'),
(6, 'ram', 'yadav', 'shghgh rghgrh', 'Udapiur', 'rajasthan', 'ram@gmail.com', '123456', 147852, 2147483647, 'Commercial'),
(7, 'praveen', 'choudhary', 'gsdhgghjggghhsh', 'Chittorgarh', 'rajasthan', 'praveen@gmail.com', '123456', 2147483647, 2147483647, 'Commercial');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin1`
--
ALTER TABLE `admin1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin1`
--
ALTER TABLE `admin1`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
