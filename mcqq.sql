-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2015 at 05:34 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `mcqq`
--

CREATE TABLE IF NOT EXISTS `mcqq` (
  `qid` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(4) NOT NULL,
  `aid` int(4) NOT NULL,
  `question` varchar(100) NOT NULL,
  `opt_1` varchar(30) NOT NULL,
  `opt_2` varchar(30) NOT NULL,
  `opt_3` varchar(30) NOT NULL,
  `opt_4` varchar(30) NOT NULL,
  `answer` varchar(30) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mcqq`
--

INSERT INTO `mcqq` (`qid`, `cid`, `aid`, `question`, `opt_1`, `opt_2`, `opt_3`, `opt_4`, `answer`) VALUES
(1, 1, 1, 'In sales Voucher, sales A/c is always', 'Debit', 'Credit', 'Transfer', 'Journalise', 'Credit'),
(2, 1, 1, 'L.F Stands for __', 'Ledger Folio', 'Ledger File', 'List File', 'Leger File', 'Ledger Folio');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
