-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 27, 2013 at 12:43 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `58`
--
CREATE DATABASE IF NOT EXISTS `58` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `58`;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `f_name` varchar(20) NOT NULL,
  `f_id` varchar(20) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`f_name`, `f_id`) VALUES
('', ''),
('abc', 'i1'),
('sdf', 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `enrlmnt_no` int(11) NOT NULL,
  `sr` int(11) NOT NULL AUTO_INCREMENT,
  `s_code` varchar(20) NOT NULL,
  `grade` varchar(20) NOT NULL,
  PRIMARY KEY (`sr`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`enrlmnt_no`, `sr`, `s_code`, `grade`) VALUES
(0, 1, '1', '1'),
(123, 2, '1', '1'),
(123, 3, '2', '2'),
(123, 4, '3', '3'),
(123, 5, '4', '4'),
(123, 6, '5', '5'),
(9, 7, '901', 'aa'),
(9, 8, '902', 'bc'),
(9, 9, '903', 'ab'),
(9, 10, '904', 'cc'),
(9, 11, '905', 'ab'),
(12, 12, '1', 'aa'),
(12, 13, '2', 'aa'),
(12, 14, '3', 'aa'),
(12, 15, '4', 'aa'),
(12, 16, '5', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `enrlmnt_no` varchar(20) NOT NULL,
  `s_name` varchar(20) NOT NULL,
  `sem` varchar(20) NOT NULL,
  PRIMARY KEY (`enrlmnt_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`enrlmnt_no`, `s_name`, `sem`) VALUES
('09', 'Noopur', '4'),
('12', 'trusha', '2'),
('58', 'Shreya', '4'),
('d2d3', 'Dipali', '4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
