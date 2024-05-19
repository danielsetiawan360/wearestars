-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2024 at 01:20 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allstar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_ID` int(11) NOT NULL,
  `A_PW` varchar(255) NOT NULL,
  `A_name` varchar(100) NOT NULL,
  `A_email` varchar(100) NOT NULL,
  `A_position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_ID`, `A_PW`, `A_name`, `A_email`, `A_position`) VALUES
(1, 'KurokoZprvyn123', 'Daniel3e324', '324324@dsa', '324324'),
(2, 'KurokoZprvyn123', '213123', '21312@a', '324324'),
(3, 'KurokoZprvyn123', '213123', '21312@a', '324324'),
(4, 'KurokoZprvyn123', '213123', '21312@a', '324324'),
(5, '123', 'Daniel', 'danielsetiawan@gmail.com', 'Manager'),
(6, '123', 'Daniel', 'danielsetiawan@gmail.com', 'HR'),
(7, '123', 'Rahul', 'rahul@gmail.com', 'HR');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `C_ID` int(11) NOT NULL,
  `C_name` varchar(255) DEFAULT NULL,
  `C_mobile` bigint(20) DEFAULT NULL,
  `C_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_ID`, `C_name`, `C_mobile`, `C_email`) VALUES
(4, 'Daniel Setiawan', 416889141, 'danielsetiawan480@gmail.com'),
(5, 'Jane Doe', 5656, 'janedoe@gmail.com'),
(6, 'Samatha', 12345, 'sam@gmail.com'),
(7, 'Daniel Setiawan', 416889141, 'danielsetiawan480@gmail.com'),
(8, 'Daniel Setiawan', 416889141, 'danielsetiawan480@gmail.com'),
(9, 'Daniel Setiawan', 416889141, 're3432@ewef');

-- --------------------------------------------------------

--
-- Table structure for table `helpcenter`
--

CREATE TABLE `helpcenter` (
  `token_no` int(11) NOT NULL,
  `A_ID` int(11) DEFAULT NULL,
  `C_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `helpcenter`
--

INSERT INTO `helpcenter` (`token_no`, `A_ID`, `C_ID`) VALUES
(2, 1, 4),
(3, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `member_ID` int(11) NOT NULL,
  `C_ID` int(11) DEFAULT NULL,
  `mem_type` varchar(50) DEFAULT NULL,
  `membership_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`member_ID`, `C_ID`, `mem_type`, `membership_price`) VALUES
(71, 4, 'One year - $800 plus GST', 800);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `account_number` int(11) NOT NULL,
  `card_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`account_number`, `card_type`) VALUES
(4233432, 'Debit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `helpcenter`
--
ALTER TABLE `helpcenter`
  ADD PRIMARY KEY (`token_no`),
  ADD KEY `A_ID` (`A_ID`),
  ADD KEY `C_ID` (`C_ID`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`member_ID`),
  ADD KEY `C_ID` (`C_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `A_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `helpcenter`
--
ALTER TABLE `helpcenter`
  MODIFY `token_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `member_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `helpcenter`
--
ALTER TABLE `helpcenter`
  ADD CONSTRAINT `helpcenter_ibfk_1` FOREIGN KEY (`A_ID`) REFERENCES `admin` (`A_ID`),
  ADD CONSTRAINT `helpcenter_ibfk_2` FOREIGN KEY (`C_ID`) REFERENCES `customer` (`C_ID`);

--
-- Constraints for table `membership`
--
ALTER TABLE `membership`
  ADD CONSTRAINT `membership_ibfk_1` FOREIGN KEY (`C_ID`) REFERENCES `customer` (`C_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
