-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 23, 2024 at 01:37 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `interview`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `loginid` varchar(10) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(25) NOT NULL,
  `quali` varchar(20) NOT NULL,
  `address` varchar(300) NOT NULL,
  `phno` bigint(50) NOT NULL,
  PRIMARY KEY (`cid`),
  UNIQUE KEY `loginid` (`loginid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `loginid`, `name`, `email`, `quali`, `address`, `phno`) VALUES
(9, 'S001', 'Neraj Lal', 'neraj@gmail.com', 'BSc.CS', 'lal bhavan mukkoodu p.o mulavana', 8547470675),
(24, 'S002', 'Anandhu', 'anandhu@gmail.com', 'MCA', 'anandhu bhavan kundara p.o Mulavana', 2365897411);

-- --------------------------------------------------------

--
-- Table structure for table `facial_expression`
--

CREATE TABLE IF NOT EXISTS `facial_expression` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `UID` varchar(5) NOT NULL,
  `expression` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `facial_expression`
--

INSERT INTO `facial_expression` (`id`, `UID`, `expression`) VALUES
(1, 'S001', 'happy'),
(3, 'S001', 'angry'),
(5, 'S001', 'angry'),
(6, 'S001', 'angry');

-- --------------------------------------------------------

--
-- Table structure for table `hupcurrent`
--

CREATE TABLE IF NOT EXISTS `hupcurrent` (
  `user_id` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hupcurrent`
--

INSERT INTO `hupcurrent` (`user_id`) VALUES
('S001'),
('S001'),
('S001');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `qid` int(5) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `answer`) VALUES
(1, 'how are you?', 'na'),
(2, 'What is your domain of expertise?', 'na'),
(4, 'What interests you about this position and our company?', 'na'),
(5, 'What are your strengths and weaknesses?', 'na'),
(6, 'Which programming is more powerful python or C? ', 'yes'),
(7, 'Who is the father of Computer Science?', 'yes'),
(8, 'Is Binary Search better than Linear Search?', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `recordings`
--

CREATE TABLE IF NOT EXISTS `recordings` (
  `UID` text NOT NULL,
  `QID` int(50) NOT NULL,
  `Text` varchar(255) NOT NULL,
  `Mark` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recordings`
--

INSERT INTO `recordings` (`UID`, `QID`, `Text`, `Mark`) VALUES
('S001', 1, 'mausa ji', 2),
('S001', 2, 'computer science', 2),
('S001', 3, 'I am a hard working person', 2),
('S002', 1, 'Sajeev', 2),
('S001', 2, 'artificial intelligence', 2),
('S001', 3, 'I am hard working person', 2),
('S001', 4, 'the company is nice', 2),
('S002', 5, 'yes', 1),
('S001', 1, 'Sajeev', 2),
('S001', 2, 'Sajeev', 2),
('S001', 2, 'artificial intelligence', 2),
('S001', 3, 'artificial intelligence', 2),
('S001', 4, 'I am hard working', 2),
('S001', 3, 'I am hard working', 2),
('S002', 5, 'your company is very good', 0),
('S001', 4, 'your company is very good', 2),
('S002', 5, 'yes', 1),
('S001', 1, 'Sajeev', 2),
('S001', 1, 'Sajeev', 2),
('S001', 2, 'artificial intelligence', 2),
('S001', 3, 'I am really hard working', 2),
('S001', 4, 'your company is really nice', 2),
('S002', 5, 'yes', 1),
('S001', 1, '123', 2),
('S001', 2, 'computer science', 2),
('S001', 1, 'Sachin', 2),
('S001', 2, 'computer science', 2),
('S001', 3, 'advocate', 2),
('S001', 4, 'artificial intelligence in computer', 2),
('S001', 8, 'na', 2),
('S001', 10, 'na', 2);

-- --------------------------------------------------------

--
-- Table structure for table `usermarks`
--

CREATE TABLE IF NOT EXISTS `usermarks` (
  `UID` int(100) NOT NULL,
  `UMarks` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usermarks`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(25) NOT NULL,
  `password` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL,
  `status` int(5) NOT NULL,
  `UID` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `type`, `status`, `UID`) VALUES
('admin@gmail.com', 'Admin123@', 'admin', 3, 'T001'),
('neraj@gmail.com', 'Neraj123@', 'user', 1, 'S001'),
('anandhu@gmail.com', 'Anandhu123@', 'user', 1, 'S002');
