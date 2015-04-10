-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2015 at 05:46 AM
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
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(4) NOT NULL auto_increment,
  `question_id` int(4) NOT NULL,
  `user` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `question` varchar(300) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `question_id` (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_id`, `user`, `course`, `question`, `type`) VALUES
(1, 1, '', '', 'Ram is a Ramdom acess memory', 'tf'),
(2, 2, '', '', 'Mouse is a pointing device', 'tf'),
(3, 3, '', '', 'keyboard is a output device', 'tf'),
(4, 4, '', '', 'RAM is a ', 'mc'),
(5, 5, '', '', 'Keyboard is a ', 'mc'),
(6, 6, '', '', 'Mouse is a which type of device', 'mc'),
(7, 7, '', '', 'Trackball is use for game', 'tf'),
(8, 8, '', '', 'Joystick is use for Games', 'tf'),
(9, 9, '', '', 'Mointor is a output device', 'tf'),
(10, 10, '', '', 'Printer is give ', 'mc'),
(11, 11, '', '', 'Mointor is a which type of device', 'mc'),
(12, 12, '', '', 'Which is a toggle key', 'mc'),
(13, 13, '', '', 'new tf', 'tf'),
(14, 0, '', '', 'NEw bQ', 'bq'),
(15, 15, '', '', 'second bq', 'bq'),
(16, 16, '', '', 'Mcq new try', 'mc'),
(17, 17, 'sir', '', 'Mcq2 new try', 'mc'),
(18, 18, 'Sir', 'Ms-Office', 'bekar shi', 'bq'),
(19, 19, 'Sir', '', 'kdflkdfjdlkfjdfdjflkj', 'mc'),
(20, 20, 'Sir', '', 'kdflkdfjdlkfjdfdjflkjdfdfd', 'mc'),
(21, 21, 'Sir', 'Ms-Office', 'bekar shi', 'mc'),
(22, 22, 'Sir', 'Ms-Office', 'kdflkdfjdlkfjdfdjflkj', 'bq'),
(23, 23, 'Sir', 'Ms-Office', 'Mcq2 new try', 'mc'),
(24, 24, 'Sir', '', 'Mcq new try', 'mc'),
(25, 25, 'Sir', '', 'bekar shi', 'mc'),
(26, 26, 'Sir', 'Ms-Office', 'bekar shi', 'mc'),
(27, 27, 'Sir', 'Ms-Office', 'Mcq new try', 'tf');
