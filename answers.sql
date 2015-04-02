-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2015 at 09:59 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mytest`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` int(4) NOT NULL auto_increment,
  `question_id` int(4) NOT NULL,
  `answer` varchar(30) NOT NULL,
  `correct` varchar(10) NOT NULL,
  PRIMARY KEY  (`aid`),
  KEY `question_id` (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `question_id`, `answer`, `correct`) VALUES
(1, 1, 'True', '1'),
(2, 1, 'False', '0'),
(3, 2, 'True', '1'),
(4, 2, 'False', '0'),
(5, 3, 'False', '1'),
(6, 3, 'True', '0'),
(7, 4, 'Randam Access memory', '1'),
(8, 4, 'Ram access memory', '0'),
(9, 4, 'Rational Assemble model', '0'),
(10, 4, 'None of these', '0'),
(11, 5, 'Input device', '1'),
(12, 5, 'Output device', '0'),
(13, 5, 'Pointing device', '0'),
(14, 5, 'Typing device', '0'),
(15, 6, 'Input device', '1'),
(16, 6, 'Output device', '0'),
(17, 6, 'Pointing device', '0'),
(18, 6, 'None of these', '0'),
(19, 7, 'False', '1'),
(20, 7, 'True', '0'),
(21, 8, 'True', '1'),
(22, 8, 'False', '0'),
(23, 9, 'True', '1'),
(24, 9, 'False', '0'),
(25, 10, 'Hard copy', '1'),
(26, 10, 'Soft copy', '0'),
(27, 10, 'paper', '0'),
(28, 10, 'None of these', '0'),
(29, 11, 'Output device', '1'),
(30, 11, 'Input device', '0'),
(31, 11, 'Pointing device', '0'),
(32, 11, 'None of these', '0'),
(33, 12, 'Caps lock', '1'),
(34, 12, 'Ctrl', '0'),
(35, 12, 'Function key', '0'),
(36, 12, 'Navigation', '0');
