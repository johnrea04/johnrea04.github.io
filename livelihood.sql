-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2017 at 03:58 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livelihood`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Type` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `Name`, `Username`, `Password`, `Type`) VALUES
(1, '0', 'user', '*D5D9F81F5542DE067FFF5FF7A4CA4BDD322C578F', 1),
(2, '0', 'test', '*94BDCEBE19083CE2A1F959FD02F964C7AF4CFC29', 0);

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(255) NOT NULL,
  `PID` int(255) NOT NULL,
  `streetNum` varchar(35) NOT NULL,
  `Barangay` varchar(35) NOT NULL,
  `District` varchar(35) NOT NULL,
  `Zip` int(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `Region` varchar(255) NOT NULL,
  `postOffice` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `PID`, `streetNum`, `Barangay`, `District`, `Zip`, `City`, `Province`, `Region`, `postOffice`) VALUES
(1, 1000, '600', '1', 'test', 5678, 'cdo', 'nn', 'x', 234),
(2, 0, '1', '2', 'Hayes', 9005, 'CDO', 'Mis. Or.', 'X', 0),
(3, 2, '1', '2', 'Hayes', 9005, 'CDO', 'Mis. Or.', 'X', 0),
(4, 3, '1', '2', 'Hayes', 9005, 'CDO', 'Mis. Or.', 'X', 0),
(5, 1004, '1', '2', 'Hayes', 9005, 'CDO', 'Mis. Or.', 'X', 0),
(6, 1005, '1', '2', 'Hayes', 9005, 'CDO', 'Mis. Or.', 'X', 0),
(7, 1006, '1', '2', 'Hayes', 9005, 'CDO', 'Mis. Or.', 'X', 0),
(8, 1007, '1', '2', 'Hayes', 9005, 'CDO', 'Mis. Or.', 'X', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `PID` int(255) NOT NULL,
  `Phone` int(255) NOT NULL,
  `Telephone` int(255) NOT NULL,
  `Fax` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `PID`, `Phone`, `Telephone`, `Fax`, `email`, `others`) VALUES
(1, 1000, 456, 0, 0, '', ''),
(2, 0, 12456, 0, 0, 'email@bite.me.com', ''),
(3, 3, 12456, 0, 0, 'email@bite.me.com', ''),
(4, 4, 12456, 0, 0, 'email@bite.me.com', ''),
(5, 6, 12456, 0, 0, 'email@bite.me.com', ''),
(6, 7, 12456, 0, 0, 'email@bite.me.com', ''),
(7, 8, 12456, 0, 0, 'email@bite.me.com', ''),
(8, 0, 12456, 0, 0, 'email@bite.me.com', ''),
(9, 0, 12456, 0, 0, 'email@bite.me.com', ''),
(10, 0, 12456, 0, 0, 'email@bite.me.com', ''),
(11, 0, 12456, 0, 0, 'email@bite.me.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(255) NOT NULL,
  `PID` int(255) NOT NULL,
  `School` varchar(255) NOT NULL,
  `Level` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `Degree` varchar(255) NOT NULL,
  `Minor` varchar(255) NOT NULL,
  `Major` varchar(255) NOT NULL,
  `Units` int(255) NOT NULL,
  `Honor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `PID`, `School`, `Level`, `Year`, `Degree`, `Minor`, `Major`, `Units`, `Honor`) VALUES
(1, 1000, 'xu', '3', '2017', 'css', 'web', 'automaata', 123, 'love'),
(2, 5, 'rwa', '2', '2', 'BSBA', '', 'Finance', 234, ''),
(3, 5, 'rwa', '2', '2', 'BSCS', '', 'SOFTWARE', 234, ''),
(4, 5, 'rwa', '2', '2', 'BSIS', '', '', 234, ''),
(5, 2, 'rwa', '2', '2', 'BSBA', '', 'Finance', 234, ''),
(6, 2, 'rwa', '2', '2', 'BSCS', '', 'SOFTWARE', 234, ''),
(7, 2, 'rwa', '2', '2', 'BSIS', '', '', 234, ''),
(8, 5, 'rwa', '2', '2', 'BSBA', '', 'Finance', 234, ''),
(9, 5, 'rwa', '2', '2', 'BSCS', '', 'SOFTWARE', 234, ''),
(10, 5, 'rwa', '2', '2', 'BSIS', '', '', 234, ''),
(11, 6, 'rwa', '24', '2', 'BSBA', '', 'Finance', 234, ''),
(12, 6, 'rwa', '245', '2', 'BSCS', '', 'SOFTWARE', 234, ''),
(13, 6, 'rwa', '25', '2', 'BSIS', '', '', 234, ''),
(14, 7, 'rwa', '24', '2', 'BSBA', '', 'Finance', 234, ''),
(15, 7, 'rwa', '245', '2', 'BSCS', '', 'SOFTWARE', 234, ''),
(16, 7, 'rwa', '25', '2', 'BSIS', '', '', 234, ''),
(17, 0, 'rwa', '24', '2', 'BSBA', '', 'Finance', 234, ''),
(18, 0, 'rwa', '245', '2', 'BSCS', '', 'SOFTWARE', 234, ''),
(19, 0, 'rwa', '25', '2', 'BSIS', '', '', 234, ''),
(20, 0, 'rwa', '24', '2', 'BSBA', '', 'Finance', 234, ''),
(21, 0, 'rwa', '245', '2', 'BSCS', '', 'SOFTWARE', 234, ''),
(22, 0, 'rwa', '25', '2', 'BSIS', '', '', 234, ''),
(23, 0, 'rwa', '24', '2', 'BSBA', '', 'Finance', 234, ''),
(24, 0, 'rwa', '245', '2', 'BSCS', '', 'SOFTWARE', 234, ''),
(25, 0, 'rwa', '25', '2', 'BSIS', '', '', 234, ''),
(26, 0, 'rwa', '24', '2', 'BSBA', '', 'Finance', 234, ''),
(27, 0, 'rwa', '245', '2', 'BSCS', '', 'SOFTWARE', 234, ''),
(28, 0, 'rwa', '25', '2', 'BSIS', '', '', 234, '');

-- --------------------------------------------------------

--
-- Table structure for table `employment`
--

CREATE TABLE `employment` (
  `id` int(255) NOT NULL,
  `PID` int(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Company` varchar(255) NOT NULL,
  `Business` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employment`
--

INSERT INTO `employment` (`id`, `PID`, `Type`, `Status`, `Company`, `Business`, `Address`) VALUES
(1, 1000, 'employed', 'rreegular', 'test', '', 'cdo'),
(2, 0, '', '', '', '', ''),
(3, 3, '', '', '', '', ''),
(4, 4, '', '', '', '', ''),
(5, 8, '', '', '', '', ''),
(6, 5, 'Employed', 'Regular', 'XU', '', ''),
(7, 11, 'Employed', 'Regular', 'XU', '', ''),
(8, 14, 'Employed', 'Regular', 'XU', '', ''),
(9, 0, 'Employed', 'Regular', 'XU', '', ''),
(10, 0, 'Employed', 'Regular', 'XU', '', ''),
(11, 0, 'Employed', 'Regular', 'XU', '', ''),
(12, 0, 'Employed', 'Regular', 'XU', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(255) NOT NULL,
  `PID` int(255) NOT NULL,
  `image_type` varchar(25) NOT NULL DEFAULT '',
  `image` blob NOT NULL,
  `image_size` varchar(25) NOT NULL DEFAULT '',
  `image_ctgy` varchar(25) NOT NULL DEFAULT '',
  `image_name` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id` int(255) NOT NULL,
  `Purpose` text NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Middle` varchar(255) NOT NULL,
  `Birth` datetime NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Sex` varchar(255) NOT NULL,
  `Citizenship` varchar(255) NOT NULL,
  `Religion` varchar(255) NOT NULL,
  `birthPlace` varchar(255) NOT NULL,
  `Height` varchar(255) NOT NULL,
  `Weight` varchar(255) NOT NULL,
  `Blood` varchar(10) NOT NULL,
  `SSS` int(255) NOT NULL,
  `GSIS` int(255) NOT NULL,
  `TIN` int(255) NOT NULL,
  `Marks` varchar(255) NOT NULL,
  `civilStatus` varchar(255) NOT NULL,
  `Head` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `Purpose`, `Lastname`, `Firstname`, `Middle`, `Birth`, `Gender`, `Sex`, `Citizenship`, `Religion`, `birthPlace`, `Height`, `Weight`, `Blood`, `SSS`, `GSIS`, `TIN`, `Marks`, `civilStatus`, `Head`) VALUES
(1000, 'test', 'admin', 'user', 'test', '2017-02-02 00:00:00', '', 'male', '', '', '', '', '', '', 0, 0, 0, '', '', ''),
(1002, '', 'rain', 'song', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', ''),
(1003, 'test', 'song', 'rain', 'lol', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `PID` int(255) NOT NULL,
  `Course` varchar(255) NOT NULL,
  `Semester` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `Duration` int(255) NOT NULL,
  `Start` date NOT NULL,
  `Finish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `PID`, `Course`, `Semester`, `Year`, `Duration`, `Start`, `Finish`) VALUES
(1, 1000, 'bscs', '', '', 0, '0000-00-00', '0000-00-00'),
(2, 0, '', '', '', 0, '0000-00-00', '0000-00-00'),
(3, 3, '', '', '', 0, '0000-00-00', '0000-00-00'),
(4, 4, '', '', '', 0, '0000-00-00', '0000-00-00'),
(5, 6, 'PEN TEST', '2nd', '2017', 0, '0000-00-00', '0000-00-00'),
(6, 7, 'PEN TEST', '2nd', '2017', 0, '0000-00-00', '0000-00-00'),
(7, 8, 'PEN TEST', '2nd', '2017', 0, '0000-00-00', '0000-00-00'),
(8, 0, 'PEN TEST', '2nd', '2017', 0, '0000-00-00', '0000-00-00'),
(9, 0, 'PEN TEST', '2nd', '2017', 0, '0000-00-00', '0000-00-00'),
(10, 0, 'PEN TEST', '2nd', '2017', 0, '0000-00-00', '0000-00-00'),
(11, 0, 'PEN TEST', '2nd', '2017', 0, '0000-00-00', '0000-00-00'),
(12, 11, 'DRAGON SLAYER', '', '', 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(255) NOT NULL,
  `PID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Instructor` varchar(255) NOT NULL,
  `schoolHead` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `PID`, `Name`, `Address`, `Instructor`, `schoolHead`) VALUES
(1, 1000, 'Xu', 'cdo', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `PID` (`PID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `employment`
--
ALTER TABLE `employment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PID` (`PID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `employment`
--
ALTER TABLE `employment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1014;
--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `school`
--
ALTER TABLE `school`
  ADD CONSTRAINT `school_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `personal` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
