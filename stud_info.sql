-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2015 at 07:15 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `stud_info`
--

CREATE TABLE `stud_info` (
  `stud_id` int(4) NOT NULL auto_increment,
  `user` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `exam_time` time NOT NULL,
  `exam_date` date NOT NULL,
  `course` varchar(30) NOT NULL,
  `exam_duration` int(4) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY  (`stud_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `stud_info`
--

INSERT INTO `stud_info` (`stud_id`, `user`, `name`, `username`, `exam_time`, `exam_date`, `course`, `exam_duration`, `photo`) VALUES
(1, 'Sir', 'Shailesh', 'Shailesh_tally', '20:00:00', '2015-04-04', 'Tally', 60, '');
