-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2019 at 06:00 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vendor_business`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_info`
--

CREATE TABLE IF NOT EXISTS `business_info` (
`Business_ID` int(11) NOT NULL,
  `Business_Cat` text NOT NULL,
  `Owner_fname` text NOT NULL,
  `Owner_lname` text NOT NULL,
  `Business_Name` varchar(50) NOT NULL,
  `Business_Type` varchar(30) NOT NULL,
  `Assist_fname` text,
  `Assist_lname` text,
  `Assist_ID` varchar(15) DEFAULT NULL,
  `Assist_Phone` int(15) DEFAULT NULL,
  `Business_Hrs` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Date` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_info`
--

INSERT INTO `business_info` (`Business_ID`, `Business_Cat`, `Owner_fname`, `Owner_lname`, `Business_Name`, `Business_Type`, `Assist_fname`, `Assist_lname`, `Assist_ID`, `Assist_Phone`, `Business_Hrs`, `Location`, `Date`) VALUES
(15, 'D', 'Nathan', 'Moono', 'QuadP;ex', 'ICT', 'Oscar', 'Musonda', 'OC-4499', 2147483647, '08:30.Hrs to 17:30.Hrs', 'Northmead', 'March, 14 2019 16:14'),
(17, 'R', 'Gabriel', 'Kapumpe', 'GAMPE', 'ICT', 'Nkhibby', 'Nkonjera', '10', 950004236, '08:00.Hrs to 17:00.Hrs', 'Kamwala', 'March, 14 2019 17:14'),
(18, 'L', 'Muchelwa', 'Moono', 'MuMine', 'Mining', 'Michelo', 'Sikabonga', '11', 965222100, '07:30.Hrs to 18:00.Hrs', 'Chilenje', 'March, 14 2019 20:09'),
(19, 'K', 'Henry', 'Kabwe', 'HK-Academy', 'Education', 'Moses', 'Okero', '253', 975866201, '08:00.Hrs to 17:00.Hrs', 'Kabulonga', 'March, 16 2019 03:16'),
(25, 'A', 'Augustine', 'Simukonde', 'Simukonde Farms', 'Agriculture', 'Vivian', 'Mulwe', '1002', 955632101, '08:00.Hrs to 17:00.Hrs', 'Woodlands', 'March, 19 2019 10:58'),
(26, 'A', 'Moffat', 'Banda', 'Banda & sons ltd', 'Agriculture', 'Joseph', 'Banda', 'BS102', 978223104, '08:00.Hrs to 17:00.Hrs', 'Chipata', 'March, 19 2019 11:01'),
(27, 'J', 'Michael', 'Moono', 'MM Web Solutions', 'ICT', 'Moses', 'Katwishi', 'MMW112', 977245001, '08:00.Hrs to 17:00.Hrs', 'Woodlands', 'March, 23 2019 05:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`User_ID` int(11) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `User_name` varchar(15) NOT NULL,
  `Date` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `Password`, `User_name`, `Date`) VALUES
(1, 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Nathan', 'March, 08 2019 15:10'),
(2, 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Sunday', 'March, 08 2019 15:21'),
(5, 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Harry', 'March, 11 2019 18:18'),
(6, 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Benny', 'March, 12 2019 15:37'),
(7, 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Lawrence', 'March, 12 2019 15:38'),
(8, 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Gabriel', 'March, 12 2019 15:39'),
(9, 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Joseph', 'March, 12 2019 15:40'),
(10, 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Caroline', 'March, 12 2019 15:41'),
(11, 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Lugodo', 'March, 12 2019 15:41'),
(12, 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Chaphulika', 'March, 12 2019 15:41'),
(13, 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Njekwa', 'March, 18 2019 17:25'),
(14, 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Mubita', 'March, 21 2019 19:34'),
(15, 'a025983eb1e9fb916761712d82b03df5', 'Muchelwa', 'March, 23 2019 04:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_info`
--
ALTER TABLE `business_info`
 ADD PRIMARY KEY (`Business_ID`), ADD UNIQUE KEY `Business_Name` (`Business_Name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_info`
--
ALTER TABLE `business_info`
MODIFY `Business_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
