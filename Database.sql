-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2019 at 12:08 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(50) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `state_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `state_id`) VALUES
(1, 'Jaipur', 1),
(2, 'Udaipur', 1),
(3, 'Bikaner', 1),
(4, 'Ajmer', 1),
(5, 'Raval Bhindi', 2);

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `color_id` int(55) NOT NULL,
  `color_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`color_id`, `color_name`) VALUES
(1, 'Red'),
(2, 'Green'),
(3, 'Black'),
(4, 'Yellow');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(50) NOT NULL,
  `short_name` varchar(50) NOT NULL,
  `country_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `short_name`, `country_name`) VALUES
(1, 'IN', 'India'),
(2, 'PA', 'Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerid` int(50) NOT NULL,
  `contactname` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `colleges` varchar(50) NOT NULL,
  `sports` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `contactname`, `country`, `colleges`, `sports`) VALUES
(101, 'anmol punjabi', 'india', 'mlsu', 'handball'),
(102, 'shikha agarwal', 'india', 'mlsu', 'roadies'),
(103, 'vishal yadav', 'bangladesh', 'jcrc', 'volleyball'),
(104, 'chirag mangnani', 'japan', 'gits', 'cricket'),
(107, 'adtit', 'china', 'gits', 'cricket');

-- --------------------------------------------------------

--
-- Table structure for table `fruit`
--

CREATE TABLE `fruit` (
  `fruit_id` int(55) NOT NULL,
  `fruit_name` varchar(55) NOT NULL,
  `color_id` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fruit`
--

INSERT INTO `fruit` (`fruit_id`, `fruit_name`, `color_id`) VALUES
(1, 'Apple', 1),
(2, 'Cherry', 1),
(3, 'Green Apple', 2),
(4, 'Grapes', 2),
(5, 'BlackBerry', 3),
(6, 'BlackGrapes', 3),
(7, 'Banana', 4),
(8, 'Pumkin', 4);

-- --------------------------------------------------------

--
-- Table structure for table `myguest1`
--

CREATE TABLE `myguest1` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `Gender` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myguest1`
--

INSERT INTO `myguest1` (`id`, `firstname`, `lastname`, `email`, `password`, `Gender`, `Subject`, `Image`, `reg_date`) VALUES
(6, 'vishal', 'yadav', 'visha133 ', 'kgakjn', 'male', 'maths,hindi,english', 'rose-blue-flower-rose-blooms-67636.jpeg', '2019-06-12 11:47:06');

-- --------------------------------------------------------

--
-- Table structure for table `myguest2`
--

CREATE TABLE `myguest2` (
  `Id` int(6) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Dob` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myguest2`
--

INSERT INTO `myguest2` (`Id`, `Name`, `Dob`, `Email`, `Password`, `Gender`, `Subject`, `Image`) VALUES
(15, 'monish', '2018-12-31', 'mk2123', 'aafgagf', 'male', 'maths', 'images (1).jpg'),
(16, 'Monish kapoor', '1998-05-08', 'monishkapoor573@gmail.com', '12345', 'male', '', 'images (1).jpg'),
(17, 'lakshya choudhary', '2019-12-01', 'lucky123@gmail.com', '12345', 'male', 'maths,hindi,english', 'images (1).jpg'),
(18, 'ronak mathur', '2019-12-01', 'rj321@gmail.com', '12345', 'male', '', 'images.jpg'),
(19, 'monish kapoor', '2018-12-31', 'mk123@gmail.com', '12345', 'male', 'maths,english', 'images (1).jpg'),
(28, 'akshay kapor', '2019-04-02', 'akshaykapoor573@gmail.com', '12345', 'male', 'maths,hindi,english', 'images (1).jpg'),
(31, 'sfc', '2019-07-15', 'dff', 'sdf', '', '', ''),
(32, '12', '2019-07-08', 'xcvhdbs', 'zgg', 'male', 'maths,english', '');

-- --------------------------------------------------------

--
-- Table structure for table `myguests`
--

CREATE TABLE `myguests` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myguests`
--

INSERT INTO `myguests` (`id`, `firstname`, `lastname`, `email`, `reg_date`) VALUES
(1, 'monish', 'kapoor', 'monish@exa.com', '2019-06-04 12:37:57');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderid` int(50) NOT NULL,
  `customername` varchar(50) NOT NULL,
  `orderdate` date NOT NULL,
  `product` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderid`, `customername`, `orderdate`, `product`, `city`) VALUES
(101, 'monish kapoor', '2019-12-01', 'parleyg', 'udaipur'),
(102, 'akshay kapoor', '2020-12-31', 'britania', 'udaipur'),
(103, 'jatin kapoor', '2019-12-31', 'lays', 'udaipur'),
(104, 'lakshya choudhary', '2019-12-01', 'nestle', 'kherwada'),
(105, 'jugal mehra', '2019-01-01', 'bruu', 'kota');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `state_id` int(50) NOT NULL,
  `state_name` varchar(50) NOT NULL,
  `country_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `state_name`, `country_id`) VALUES
(1, 'Rajasthan', 1),
(2, 'Lahore', 2);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `Id` int(50) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Assignned` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`Id`, `Title`, `Description`, `Assignned`) VALUES
(34, 'html', 'very good language', 'Jatin kapoor'),
(35, 'validation', 'php form validation', 'ronak mathur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `fruit`
--
ALTER TABLE `fruit`
  ADD PRIMARY KEY (`fruit_id`);

--
-- Indexes for table `myguest1`
--
ALTER TABLE `myguest1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myguest2`
--
ALTER TABLE `myguest2`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `myguests`
--
ALTER TABLE `myguests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `color_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `fruit`
--
ALTER TABLE `fruit`
  MODIFY `fruit_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `myguest1`
--
ALTER TABLE `myguest1`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `myguest2`
--
ALTER TABLE `myguest2`
  MODIFY `Id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `myguests`
--
ALTER TABLE `myguests`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `state_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
