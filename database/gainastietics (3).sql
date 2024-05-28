-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2020 at 08:37 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gainastietics`
--

-- --------------------------------------------------------

--
-- Table structure for table `competition`
--

CREATE TABLE IF NOT EXISTS `competition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `venue` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `competition`
--

INSERT INTO `competition` (`id`, `name`, `time`, `date`, `contact`, `venue`) VALUES
(1, 'Championship', '2020-09-09', '13:02', '9995858999', 'Ernakulam');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `courseid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `fee` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`courseid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseid`, `name`, `description`, `fee`, `image`) VALUES
(1, 'Diet', 'Diet description', '5000', 'home-care.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `coursetime`
--

CREATE TABLE IF NOT EXISTS `coursetime` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trainerid` int(11) NOT NULL,
  `time` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `coursetime`
--

INSERT INTO `coursetime` (`id`, `trainerid`, `time`) VALUES
(1, 4, '12:00:00'),
(2, 5, '12:00:00'),
(3, 6, '11:15');

-- --------------------------------------------------------

--
-- Table structure for table `fact`
--

CREATE TABLE IF NOT EXISTS `fact` (
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `message` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `usertype`) VALUES
(2, 'bellcochin@gmail.com', '123', 'member'),
(3, 's@gmail.com', '123', 'member'),
(4, 'prince@gmail.com', '123', 'member'),
(5, 'admin@gmail.com', '123', 'admin'),
(6, 'spartan@gmail.com', '123', 'member'),
(7, 'd@gmail.com', '123', 'member'),
(8, 'gitty.g@caxita.com', 'a', 'member'),
(9, 'sdfsd@fds.com', 'qqq', 'member'),
(10, 'jo@gmail.com', '123', 'member'),
(11, 'a@gmail.com', '123', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE IF NOT EXISTS `registeration` (
  `Name` varchar(20) NOT NULL,
  `Phone_number` varchar(15) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Age` int(6) NOT NULL,
  `Date_of_birth` int(15) NOT NULL,
  `Blood_group` varchar(20) NOT NULL,
  `Height` int(15) NOT NULL,
  `Weight` int(15) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`Name`, `Phone_number`, `Email`, `Age`, `Date_of_birth`, `Blood_group`, `Height`, `Weight`, `Course`, `Address`, `userid`) VALUES
('mohanan achary', '2147483647', 'bellcochin@gmail.com', 45, 2020, '', 180, 80, 'Weight Lossing', 'pandalil building, kokkapilly.p.o', 2),
('tom', '0123456789', 'd@gmail.com', 204, 2020, 'BLOOD GROUP A+', 501, 30, 'Yoga', 'abc', 7),
('fffff', '324334444', 'gitty.g@caxita.com', 45, 2020, 'BLOOD GROUP A+', 23, 45, 'Yoga', 'dfdfdf', 8),
('john', '9400159732', 'jo@gmail.com', 33, 2018, 'BLOOD GROUP A+', 175, 82, 'Zumba Dance', 'abcdefghijk', 10),
('ann', '1234567890', 'a@gmail.com', 20, 2005, 'BLOOD GROUP AB+', 180, 65, 'Zumba Dance', 'abc', 11);

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE IF NOT EXISTS `trainer` (
  `trainerid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phoneno` int(11) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `courseid` int(11) DEFAULT NULL,
  PRIMARY KEY (`trainerid`),
  KEY `courseid` (`courseid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`trainerid`, `name`, `phoneno`, `image`, `courseid`) VALUES
(4, 'ADAM VON ', 2147483647, 'trainer1.jpg', 1),
(5, 'JUSTIN KLEN', 2147483647, 'trainer2.jpg', 1),
(6, 'MIKE SIMON', 2147483647, 'trainer3.jpg', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
