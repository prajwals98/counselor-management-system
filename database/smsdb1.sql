-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2016 at 08:56 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smsdb1`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE IF NOT EXISTS `activity_log` (
  `activity_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `action` varchar(128) NOT NULL,
  PRIMARY KEY (`activity_log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`activity_log_id`, `username`, `date`, `action`) VALUES
(1, '', '2016-11-25 01:23:30', 'Added Student '),
(2, 'admin', '2016-11-25 02:27:51', 'Edit system User bhargav'),
(3, 'admin', '2016-11-25 13:54:50', 'Add System User bhargav'),
(4, 'admin', '2016-11-25 13:55:22', 'Add System User HOD'),
(5, 'admin', '2016-11-25 13:55:53', 'Edit system User HOD');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(128) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `adminthumbnails` varchar(300) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `username`, `password`, `adminthumbnails`) VALUES
(1, 'bhargav', 's', 'admin', 'admin', 'uploads/1914773_1139364306098051_2056838924423599965_n.jpg'),
(2, 'bhargav', 's', 'admin', '123', 'images/NO-IMAGE-AVAILABLE.jpg'),
(3, 'HOD', 'MCA', 'hod', 'hod', 'uploads/dr._sujatha_d.n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `content_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `title`, `content`) VALUES
(1, 'Mission', '<pre>\r\n<span style="font-size:16px"><strong>Mission</strong></span></pre>\r\n\r\n<p style="text-align:left"><span style="font-family:arial,helvetica,sans-serif; font-size:medium"><span style="font-size:large">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span>&nbsp; &nbsp;<span style="font-size:18px"> &nbsp;<ul><li>To empower student with knowledge, skills and attitude to develop comprehensive computing solutions that addresses the needs of academia, industry and society.</li><li>To Excel in education, research, consultancy and Industry collaboration.</li></ul>&nbsp;</span></p>\r\n\r\n<p style="text-align:left">&nbsp;</p>\r\n'),
(2, 'Vision', '<pre><span style="font-size: large;"><strong>Vision</strong></span></pre>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: large;">&nbsp; To emerge as a premier knowledge center for imparting computing education inculcating human values to solve global challenges. </span><br /><br /></p>'),
(3, 'History', 'Cooking.'),
(4, 'Footer', '<p style="text-align:center">Glinks Computer Systems: Copyright 2015</p>\n\n<p style="text-align:center">All Rights Reserved &reg;2015</p>\n'),
(5, 'Title', '<p><span style="font-family:trebuchet ms,geneva">School Management System\n</span></p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int(128) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `usn` varchar(100) NOT NULL,
  `thumbnails` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`, `firstname`, `lastname`, `usn`, `thumbnails`, `email`) VALUES
(14, 'deepesh', '123', 'Deepesh', 'Chhadva', '1BM14MCA11', 'uploads/nobody_m.original.jpg', 'deepeshchhadva@gmail.com'),
(16, 'ajay', '123', 'Ajay', 'V', '1BM14MCA02', 'uploads/nobody_m.original.jpg', 'ajayv2312@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE IF NOT EXISTS `login_details` (
  `admin_id` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  `salt` varchar(32) NOT NULL,
  `access_level` int(10) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`admin_id`, `password`, `salt`, `access_level`) VALUES
('0', 'admin', 'admin', 0),
('1', 'user', 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `usn` varchar(15) NOT NULL,
  `sc1` varchar(10) NOT NULL,
  `sc2` varchar(10) NOT NULL,
  `sc3` varchar(10) NOT NULL,
  `sc4` varchar(10) NOT NULL,
  `sc5` varchar(10) NOT NULL,
  `sc6` varchar(10) NOT NULL,
  `sc7` varchar(10) NOT NULL,
  `sc8` varchar(10) NOT NULL,
  `t1s1` varchar(10) NOT NULL,
  `t1s2` varchar(10) NOT NULL,
  `t1s3` varchar(10) NOT NULL,
  `t1s4` varchar(10) NOT NULL,
  `t1s5` varchar(10) NOT NULL,
  `t1s6` varchar(10) NOT NULL,
  `t1s7` varchar(10) NOT NULL,
  `t1s8` varchar(10) NOT NULL,
  `t1total` varchar(10) NOT NULL,
  `t2s1` varchar(10) NOT NULL,
  `t2s2` varchar(10) NOT NULL,
  `t2s3` varchar(10) NOT NULL,
  `t2s4` varchar(10) NOT NULL,
  `t2s5` varchar(10) NOT NULL,
  `t2s6` varchar(10) NOT NULL,
  `t2s7` varchar(10) NOT NULL,
  `t2s8` varchar(10) NOT NULL,
  `t2total` varchar(10) NOT NULL,
  `t3s1` varchar(10) NOT NULL,
  `t3s2` varchar(10) NOT NULL,
  `t3s3` varchar(10) NOT NULL,
  `t3s4` varchar(10) NOT NULL,
  `t3s5` varchar(10) NOT NULL,
  `t3s6` varchar(10) NOT NULL,
  `t3s7` varchar(10) NOT NULL,
  `t3s8` varchar(10) NOT NULL,
  `t3total` varchar(10) NOT NULL,
  `a1s1` varchar(10) NOT NULL,
  `a1s2` varchar(10) NOT NULL,
  `a1s3` varchar(10) NOT NULL,
  `a1s4` varchar(10) NOT NULL,
  `a1s5` varchar(10) NOT NULL,
  `a1s6` varchar(10) NOT NULL,
  `a1s7` varchar(10) NOT NULL,
  `a1s8` varchar(10) NOT NULL,
  `a1total` varchar(10) NOT NULL,
  `as1s1` varchar(10) NOT NULL,
  `as1s2` varchar(10) NOT NULL,
  `as1s3` varchar(10) NOT NULL,
  `as1s4` varchar(10) NOT NULL,
  `as1s5` varchar(10) NOT NULL,
  `as1s6` varchar(10) NOT NULL,
  `as1s7` varchar(10) NOT NULL,
  `as1s8` varchar(10) NOT NULL,
  `as1total` varchar(10) NOT NULL,
  `f1s1` varchar(10) NOT NULL,
  `f1s2` varchar(10) NOT NULL,
  `f1s3` varchar(10) NOT NULL,
  `f1s4` varchar(10) NOT NULL,
  `f1s5` varchar(10) NOT NULL,
  `f1s6` varchar(10) NOT NULL,
  `f1s7` varchar(10) NOT NULL,
  `f1s8` varchar(10) NOT NULL,
  `f1total` varchar(10) NOT NULL,
  `e1s1` varchar(10) NOT NULL,
  `e1s2` varchar(10) NOT NULL,
  `e1s3` varchar(10) NOT NULL,
  `e1s4` varchar(10) NOT NULL,
  `e1s5` varchar(10) NOT NULL,
  `e1s6` varchar(10) NOT NULL,
  `e1s7` varchar(10) NOT NULL,
  `e1s8` varchar(10) NOT NULL,
  `e1total` varchar(10) NOT NULL,
  `totals1` varchar(10) NOT NULL,
  `totals2` varchar(10) NOT NULL,
  `totals3` varchar(10) NOT NULL,
  `totals4` varchar(10) NOT NULL,
  `totals5` varchar(10) NOT NULL,
  `totals6` varchar(10) NOT NULL,
  `totals7` varchar(10) NOT NULL,
  `totals8` varchar(10) NOT NULL,
  `total` varchar(10) NOT NULL,
  `sc11` varchar(10) NOT NULL,
  `sc21` varchar(10) NOT NULL,
  `sc31` varchar(10) NOT NULL,
  `sc41` varchar(10) NOT NULL,
  `sc51` varchar(10) NOT NULL,
  `sc61` varchar(10) NOT NULL,
  `sc71` varchar(10) NOT NULL,
  `sc81` varchar(10) NOT NULL,
  `t1s11` varchar(10) NOT NULL,
  `t1s21` varchar(10) NOT NULL,
  `t1s31` varchar(10) NOT NULL,
  `t1s41` varchar(10) NOT NULL,
  `t1s51` varchar(10) NOT NULL,
  `t1s61` varchar(10) NOT NULL,
  `t1s71` varchar(10) NOT NULL,
  `t1s81` varchar(10) NOT NULL,
  `t1total1` varchar(10) NOT NULL,
  `t2s11` varchar(10) NOT NULL,
  `t2s21` varchar(10) NOT NULL,
  `t2s31` varchar(10) NOT NULL,
  `t2s41` varchar(10) NOT NULL,
  `t2s51` varchar(10) NOT NULL,
  `t2s61` varchar(10) NOT NULL,
  `t2s71` varchar(10) NOT NULL,
  `t2s81` varchar(10) NOT NULL,
  `t2total1` varchar(10) NOT NULL,
  `t3s11` varchar(10) NOT NULL,
  `t3s21` varchar(10) NOT NULL,
  `t3s31` varchar(10) NOT NULL,
  `t3s41` varchar(10) NOT NULL,
  `t3s51` varchar(10) NOT NULL,
  `t3s61` varchar(10) NOT NULL,
  `t3s71` varchar(10) NOT NULL,
  `t3s81` varchar(10) NOT NULL,
  `t3total1` varchar(10) NOT NULL,
  `a1s11` varchar(10) NOT NULL,
  `a1s21` varchar(10) NOT NULL,
  `a1s31` varchar(10) NOT NULL,
  `a1s41` varchar(10) NOT NULL,
  `a1s51` varchar(10) NOT NULL,
  `a1s61` varchar(10) NOT NULL,
  `a1s71` varchar(10) NOT NULL,
  `a1s81` varchar(10) NOT NULL,
  `a1total1` varchar(10) NOT NULL,
  `as1s11` varchar(10) NOT NULL,
  `as1s21` varchar(10) NOT NULL,
  `as1s31` varchar(10) NOT NULL,
  `as1s41` varchar(10) NOT NULL,
  `as1s51` varchar(10) NOT NULL,
  `as1s61` varchar(10) NOT NULL,
  `as1s71` varchar(10) NOT NULL,
  `as1s81` varchar(10) NOT NULL,
  `as1total1` varchar(10) NOT NULL,
  `f1s11` varchar(10) NOT NULL,
  `f1s21` varchar(10) NOT NULL,
  `f1s31` varchar(10) NOT NULL,
  `f1s41` varchar(10) NOT NULL,
  `f1s51` varchar(10) NOT NULL,
  `f1s61` varchar(10) NOT NULL,
  `f1s71` varchar(10) NOT NULL,
  `f1s81` varchar(10) NOT NULL,
  `f1total1` varchar(10) NOT NULL,
  `e1s11` varchar(10) NOT NULL,
  `e1s21` varchar(10) NOT NULL,
  `e1s31` varchar(10) NOT NULL,
  `e1s41` varchar(10) NOT NULL,
  `e1s51` varchar(10) NOT NULL,
  `e1s61` varchar(10) NOT NULL,
  `e1s71` varchar(10) NOT NULL,
  `e1s81` varchar(10) NOT NULL,
  `e1total1` varchar(10) NOT NULL,
  `total11` varchar(10) NOT NULL,
  `total21` varchar(10) NOT NULL,
  `total31` varchar(10) NOT NULL,
  `total41` varchar(10) NOT NULL,
  `total51` varchar(10) NOT NULL,
  `total61` varchar(10) NOT NULL,
  `total71` varchar(10) NOT NULL,
  `total81` varchar(10) NOT NULL,
  `total1` varchar(10) NOT NULL,
  PRIMARY KEY (`usn`),
  KEY `usn` (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`usn`, `sc1`, `sc2`, `sc3`, `sc4`, `sc5`, `sc6`, `sc7`, `sc8`, `t1s1`, `t1s2`, `t1s3`, `t1s4`, `t1s5`, `t1s6`, `t1s7`, `t1s8`, `t1total`, `t2s1`, `t2s2`, `t2s3`, `t2s4`, `t2s5`, `t2s6`, `t2s7`, `t2s8`, `t2total`, `t3s1`, `t3s2`, `t3s3`, `t3s4`, `t3s5`, `t3s6`, `t3s7`, `t3s8`, `t3total`, `a1s1`, `a1s2`, `a1s3`, `a1s4`, `a1s5`, `a1s6`, `a1s7`, `a1s8`, `a1total`, `as1s1`, `as1s2`, `as1s3`, `as1s4`, `as1s5`, `as1s6`, `as1s7`, `as1s8`, `as1total`, `f1s1`, `f1s2`, `f1s3`, `f1s4`, `f1s5`, `f1s6`, `f1s7`, `f1s8`, `f1total`, `e1s1`, `e1s2`, `e1s3`, `e1s4`, `e1s5`, `e1s6`, `e1s7`, `e1s8`, `e1total`, `totals1`, `totals2`, `totals3`, `totals4`, `totals5`, `totals6`, `totals7`, `totals8`, `total`, `sc11`, `sc21`, `sc31`, `sc41`, `sc51`, `sc61`, `sc71`, `sc81`, `t1s11`, `t1s21`, `t1s31`, `t1s41`, `t1s51`, `t1s61`, `t1s71`, `t1s81`, `t1total1`, `t2s11`, `t2s21`, `t2s31`, `t2s41`, `t2s51`, `t2s61`, `t2s71`, `t2s81`, `t2total1`, `t3s11`, `t3s21`, `t3s31`, `t3s41`, `t3s51`, `t3s61`, `t3s71`, `t3s81`, `t3total1`, `a1s11`, `a1s21`, `a1s31`, `a1s41`, `a1s51`, `a1s61`, `a1s71`, `a1s81`, `a1total1`, `as1s11`, `as1s21`, `as1s31`, `as1s41`, `as1s51`, `as1s61`, `as1s71`, `as1s81`, `as1total1`, `f1s11`, `f1s21`, `f1s31`, `f1s41`, `f1s51`, `f1s61`, `f1s71`, `f1s81`, `f1total1`, `e1s11`, `e1s21`, `e1s31`, `e1s41`, `e1s51`, `e1s61`, `e1s71`, `e1s81`, `e1total1`, `total11`, `total21`, `total31`, `total41`, `total51`, `total61`, `total71`, `total81`, `total1`) VALUES
('1BM14MCA02', '13mca11', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '13mca21', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('1BM14MCA11', '13mca11', '13mca12', '13mca13', '13mca14', '13mca15', '13mca16', '13mca17', '13mca18', '40', '27', '33', '26', '33', '26', '26', '38', '249', '33', '14', '14', '35', '14', '35', '30', '36', '211', '19', '20', '16', '11', '23', '0', '0', '0', '89', '37', '24', '20', '31', '28', '31', '28', '37', '236', '10', '3', '9', '10', '10', '10', '10', '10', '72', '47', '27', '31', '41', '38', '41', '38', '47', '310', '53', '48', '56', '56', '65', '43', '49', '25', '395', '100', '75', '87', '97', '104', '84', '87', '72', '706', '13mca21', '13mca22', '13mca23', '13mca24', '13mca25', '13mca26', '13mca27', '13mca28', '26', '31', '16', '17', '20', '40', '33', '40', '223', '28', '30', '19', '10', '30', '30', '37', '40', '224', '30', '0', '31', '20', '26', '0', '0', '0', '107', '29', '31', '25', '19', '28', '35', '35', '40', '242', '8', '9', '10', '8', '9', '8', '9', '10', '71', '37', '40', '35', '27', '37', '43', '44', '50', '313', '66', '49', '56', '48', '50', '47', '44', '46', '406', '103', '89', '91', '75', '87', '90', '88', '96', '719');

-- --------------------------------------------------------

--
-- Table structure for table `marks1`
--

CREATE TABLE IF NOT EXISTS `marks1` (
  `usn` varchar(15) NOT NULL,
  `sc1` varchar(10) NOT NULL,
  `sc2` varchar(10) NOT NULL,
  `sc3` varchar(10) NOT NULL,
  `sc4` varchar(10) NOT NULL,
  `sc5` varchar(10) NOT NULL,
  `sc6` varchar(10) NOT NULL,
  `sc7` varchar(10) NOT NULL,
  `sc8` varchar(10) NOT NULL,
  `t1s1` varchar(10) NOT NULL,
  `t1s2` varchar(10) NOT NULL,
  `t1s3` varchar(10) NOT NULL,
  `t1s4` varchar(10) NOT NULL,
  `t1s5` varchar(10) NOT NULL,
  `t1s6` varchar(10) NOT NULL,
  `t1s7` varchar(10) NOT NULL,
  `t1s8` varchar(10) NOT NULL,
  `t1total` varchar(10) NOT NULL,
  `t2s1` varchar(10) NOT NULL,
  `t2s2` varchar(10) NOT NULL,
  `t2s3` varchar(10) NOT NULL,
  `t2s4` varchar(10) NOT NULL,
  `t2s5` varchar(10) NOT NULL,
  `t2s6` varchar(10) NOT NULL,
  `t2s7` varchar(10) NOT NULL,
  `t2s8` varchar(10) NOT NULL,
  `t2total` varchar(10) NOT NULL,
  `t3s1` varchar(10) NOT NULL,
  `t3s2` varchar(10) NOT NULL,
  `t3s3` varchar(10) NOT NULL,
  `t3s4` varchar(10) NOT NULL,
  `t3s5` varchar(10) NOT NULL,
  `t3s6` varchar(10) NOT NULL,
  `t3s7` varchar(10) NOT NULL,
  `t3s8` varchar(10) NOT NULL,
  `t3total` varchar(10) NOT NULL,
  `a1s1` varchar(10) NOT NULL,
  `a1s2` varchar(10) NOT NULL,
  `a1s3` varchar(10) NOT NULL,
  `a1s4` varchar(10) NOT NULL,
  `a1s5` varchar(10) NOT NULL,
  `a1s6` varchar(10) NOT NULL,
  `a1s7` varchar(10) NOT NULL,
  `a1s8` varchar(10) NOT NULL,
  `a1total` varchar(10) NOT NULL,
  `as1s1` varchar(10) NOT NULL,
  `as1s2` varchar(10) NOT NULL,
  `as1s3` varchar(10) NOT NULL,
  `as1s4` varchar(10) NOT NULL,
  `as1s5` varchar(10) NOT NULL,
  `as1s6` varchar(10) NOT NULL,
  `as1s7` varchar(10) NOT NULL,
  `as1s8` varchar(10) NOT NULL,
  `as1total` varchar(10) NOT NULL,
  `f1s1` varchar(10) NOT NULL,
  `f1s2` varchar(10) NOT NULL,
  `f1s3` varchar(10) NOT NULL,
  `f1s4` varchar(10) NOT NULL,
  `f1s5` varchar(10) NOT NULL,
  `f1s6` varchar(10) NOT NULL,
  `f1s7` varchar(10) NOT NULL,
  `f1s8` varchar(10) NOT NULL,
  `f1total` varchar(10) NOT NULL,
  `e1s1` varchar(10) NOT NULL,
  `e1s2` varchar(10) NOT NULL,
  `e1s3` varchar(10) NOT NULL,
  `e1s4` varchar(10) NOT NULL,
  `e1s5` varchar(10) NOT NULL,
  `e1s6` varchar(10) NOT NULL,
  `e1s7` varchar(10) NOT NULL,
  `e1s8` varchar(10) NOT NULL,
  `e1total` varchar(10) NOT NULL,
  `totals1` varchar(10) NOT NULL,
  `totals2` varchar(10) NOT NULL,
  `totals3` varchar(10) NOT NULL,
  `totals4` varchar(10) NOT NULL,
  `totals5` varchar(10) NOT NULL,
  `totals6` varchar(10) NOT NULL,
  `totals7` varchar(10) NOT NULL,
  `totals8` varchar(10) NOT NULL,
  `total` varchar(10) NOT NULL,
  `sc11` varchar(10) NOT NULL,
  `sc21` varchar(10) NOT NULL,
  `sc31` varchar(10) NOT NULL,
  `sc41` varchar(10) NOT NULL,
  `sc51` varchar(10) NOT NULL,
  `sc61` varchar(10) NOT NULL,
  `sc71` varchar(10) NOT NULL,
  `sc81` varchar(10) NOT NULL,
  `t1s11` varchar(10) NOT NULL,
  `t1s21` varchar(10) NOT NULL,
  `t1s31` varchar(10) NOT NULL,
  `t1s41` varchar(10) NOT NULL,
  `t1s51` varchar(10) NOT NULL,
  `t1s61` varchar(10) NOT NULL,
  `t1s71` varchar(10) NOT NULL,
  `t1s81` varchar(10) NOT NULL,
  `t1total1` varchar(10) NOT NULL,
  `t2s11` varchar(10) NOT NULL,
  `t2s21` varchar(10) NOT NULL,
  `t2s31` varchar(10) NOT NULL,
  `t2s41` varchar(10) NOT NULL,
  `t2s51` varchar(10) NOT NULL,
  `t2s61` varchar(10) NOT NULL,
  `t2s71` varchar(10) NOT NULL,
  `t2s81` varchar(10) NOT NULL,
  `t2total1` varchar(10) NOT NULL,
  `t3s11` varchar(10) NOT NULL,
  `t3s21` varchar(10) NOT NULL,
  `t3s31` varchar(10) NOT NULL,
  `t3s41` varchar(10) NOT NULL,
  `t3s51` varchar(10) NOT NULL,
  `t3s61` varchar(10) NOT NULL,
  `t3s71` varchar(10) NOT NULL,
  `t3s81` varchar(10) NOT NULL,
  `t3total1` varchar(10) NOT NULL,
  `a1s11` varchar(10) NOT NULL,
  `a1s21` varchar(10) NOT NULL,
  `a1s31` varchar(10) NOT NULL,
  `a1s41` varchar(10) NOT NULL,
  `a1s51` varchar(10) NOT NULL,
  `a1s61` varchar(10) NOT NULL,
  `a1s71` varchar(10) NOT NULL,
  `a1s81` varchar(10) NOT NULL,
  `a1total1` varchar(10) NOT NULL,
  `as1s11` varchar(10) NOT NULL,
  `as1s21` varchar(10) NOT NULL,
  `as1s31` varchar(10) NOT NULL,
  `as1s41` varchar(10) NOT NULL,
  `as1s51` varchar(10) NOT NULL,
  `as1s61` varchar(10) NOT NULL,
  `as1s71` varchar(10) NOT NULL,
  `as1s81` varchar(10) NOT NULL,
  `as1total1` varchar(10) NOT NULL,
  `f1s11` varchar(10) NOT NULL,
  `f1s21` varchar(10) NOT NULL,
  `f1s31` varchar(10) NOT NULL,
  `f1s41` varchar(10) NOT NULL,
  `f1s51` varchar(10) NOT NULL,
  `f1s61` varchar(10) NOT NULL,
  `f1s71` varchar(10) NOT NULL,
  `f1s81` varchar(10) NOT NULL,
  `f1total1` varchar(10) NOT NULL,
  `e1s11` varchar(10) NOT NULL,
  `e1s21` varchar(10) NOT NULL,
  `e1s31` varchar(10) NOT NULL,
  `e1s41` varchar(10) NOT NULL,
  `e1s51` varchar(10) NOT NULL,
  `e1s61` varchar(10) NOT NULL,
  `e1s71` varchar(10) NOT NULL,
  `e1s81` varchar(10) NOT NULL,
  `e1total1` varchar(10) NOT NULL,
  `total11` varchar(10) NOT NULL,
  `total21` varchar(10) NOT NULL,
  `total31` varchar(10) NOT NULL,
  `total41` varchar(10) NOT NULL,
  `total51` varchar(10) NOT NULL,
  `total61` varchar(10) NOT NULL,
  `total71` varchar(10) NOT NULL,
  `total81` varchar(10) NOT NULL,
  `total1` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks1`
--

INSERT INTO `marks1` (`usn`, `sc1`, `sc2`, `sc3`, `sc4`, `sc5`, `sc6`, `sc7`, `sc8`, `t1s1`, `t1s2`, `t1s3`, `t1s4`, `t1s5`, `t1s6`, `t1s7`, `t1s8`, `t1total`, `t2s1`, `t2s2`, `t2s3`, `t2s4`, `t2s5`, `t2s6`, `t2s7`, `t2s8`, `t2total`, `t3s1`, `t3s2`, `t3s3`, `t3s4`, `t3s5`, `t3s6`, `t3s7`, `t3s8`, `t3total`, `a1s1`, `a1s2`, `a1s3`, `a1s4`, `a1s5`, `a1s6`, `a1s7`, `a1s8`, `a1total`, `as1s1`, `as1s2`, `as1s3`, `as1s4`, `as1s5`, `as1s6`, `as1s7`, `as1s8`, `as1total`, `f1s1`, `f1s2`, `f1s3`, `f1s4`, `f1s5`, `f1s6`, `f1s7`, `f1s8`, `f1total`, `e1s1`, `e1s2`, `e1s3`, `e1s4`, `e1s5`, `e1s6`, `e1s7`, `e1s8`, `e1total`, `totals1`, `totals2`, `totals3`, `totals4`, `totals5`, `totals6`, `totals7`, `totals8`, `total`, `sc11`, `sc21`, `sc31`, `sc41`, `sc51`, `sc61`, `sc71`, `sc81`, `t1s11`, `t1s21`, `t1s31`, `t1s41`, `t1s51`, `t1s61`, `t1s71`, `t1s81`, `t1total1`, `t2s11`, `t2s21`, `t2s31`, `t2s41`, `t2s51`, `t2s61`, `t2s71`, `t2s81`, `t2total1`, `t3s11`, `t3s21`, `t3s31`, `t3s41`, `t3s51`, `t3s61`, `t3s71`, `t3s81`, `t3total1`, `a1s11`, `a1s21`, `a1s31`, `a1s41`, `a1s51`, `a1s61`, `a1s71`, `a1s81`, `a1total1`, `as1s11`, `as1s21`, `as1s31`, `as1s41`, `as1s51`, `as1s61`, `as1s71`, `as1s81`, `as1total1`, `f1s11`, `f1s21`, `f1s31`, `f1s41`, `f1s51`, `f1s61`, `f1s71`, `f1s81`, `f1total1`, `e1s11`, `e1s21`, `e1s31`, `e1s41`, `e1s51`, `e1s61`, `e1s71`, `e1s81`, `e1total1`, `total11`, `total21`, `total31`, `total41`, `total51`, `total61`, `total71`, `total81`, `total1`) VALUES
('1BM14MCA11', '13mca31', '13mca32', '13mca33', '13mca34', '13mca35', '13mca36', '13mca37', '13mca38', '20', '20', '20', '20', '20', '20', '20', '20', '140', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '13mca41', '13mca42', '13mca43', '13mca44', '13mca45', '13mca46', '13mca47', '13mca48', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `marks2`
--

CREATE TABLE IF NOT EXISTS `marks2` (
  `usn` varchar(15) NOT NULL,
  `sc1` varchar(10) NOT NULL,
  `sc2` varchar(10) NOT NULL,
  `sc3` varchar(10) NOT NULL,
  `sc4` varchar(10) NOT NULL,
  `sc5` varchar(10) NOT NULL,
  `sc6` varchar(10) NOT NULL,
  `sc7` varchar(10) NOT NULL,
  `sc8` varchar(10) NOT NULL,
  `t1s1` varchar(10) NOT NULL,
  `t1s2` varchar(10) NOT NULL,
  `t1s3` varchar(10) NOT NULL,
  `t1s4` varchar(10) NOT NULL,
  `t1s5` varchar(10) NOT NULL,
  `t1s6` varchar(10) NOT NULL,
  `t1s7` varchar(10) NOT NULL,
  `t1s8` varchar(10) NOT NULL,
  `t1total` varchar(10) NOT NULL,
  `t2s1` varchar(10) NOT NULL,
  `t2s2` varchar(10) NOT NULL,
  `t2s3` varchar(10) NOT NULL,
  `t2s4` varchar(10) NOT NULL,
  `t2s5` varchar(10) NOT NULL,
  `t2s6` varchar(10) NOT NULL,
  `t2s7` varchar(10) NOT NULL,
  `t2s8` varchar(10) NOT NULL,
  `t2total` varchar(10) NOT NULL,
  `t3s1` varchar(10) NOT NULL,
  `t3s2` varchar(10) NOT NULL,
  `t3s3` varchar(10) NOT NULL,
  `t3s4` varchar(10) NOT NULL,
  `t3s5` varchar(10) NOT NULL,
  `t3s6` varchar(10) NOT NULL,
  `t3s7` varchar(10) NOT NULL,
  `t3s8` varchar(10) NOT NULL,
  `t3total` varchar(10) NOT NULL,
  `a1s1` varchar(10) NOT NULL,
  `a1s2` varchar(10) NOT NULL,
  `a1s3` varchar(10) NOT NULL,
  `a1s4` varchar(10) NOT NULL,
  `a1s5` varchar(10) NOT NULL,
  `a1s6` varchar(10) NOT NULL,
  `a1s7` varchar(10) NOT NULL,
  `a1s8` varchar(10) NOT NULL,
  `a1total` varchar(10) NOT NULL,
  `as1s1` varchar(10) NOT NULL,
  `as1s2` varchar(10) NOT NULL,
  `as1s3` varchar(10) NOT NULL,
  `as1s4` varchar(10) NOT NULL,
  `as1s5` varchar(10) NOT NULL,
  `as1s6` varchar(10) NOT NULL,
  `as1s7` varchar(10) NOT NULL,
  `as1s8` varchar(10) NOT NULL,
  `as1total` varchar(10) NOT NULL,
  `f1s1` varchar(10) NOT NULL,
  `f1s2` varchar(10) NOT NULL,
  `f1s3` varchar(10) NOT NULL,
  `f1s4` varchar(10) NOT NULL,
  `f1s5` varchar(10) NOT NULL,
  `f1s6` varchar(10) NOT NULL,
  `f1s7` varchar(10) NOT NULL,
  `f1s8` varchar(10) NOT NULL,
  `f1total` varchar(10) NOT NULL,
  `e1s1` varchar(10) NOT NULL,
  `e1s2` varchar(10) NOT NULL,
  `e1s3` varchar(10) NOT NULL,
  `e1s4` varchar(10) NOT NULL,
  `e1s5` varchar(10) NOT NULL,
  `e1s6` varchar(10) NOT NULL,
  `e1s7` varchar(10) NOT NULL,
  `e1s8` varchar(10) NOT NULL,
  `e1total` varchar(10) NOT NULL,
  `totals1` varchar(10) NOT NULL,
  `totals2` varchar(10) NOT NULL,
  `totals3` varchar(10) NOT NULL,
  `totals4` varchar(10) NOT NULL,
  `totals5` varchar(10) NOT NULL,
  `totals6` varchar(10) NOT NULL,
  `totals7` varchar(10) NOT NULL,
  `totals8` varchar(10) NOT NULL,
  `total` varchar(10) NOT NULL,
  `pt` varchar(100) NOT NULL,
  `cnp` varchar(100) NOT NULL,
  `ig` varchar(20) NOT NULL,
  `eg` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks2`
--

INSERT INTO `marks2` (`usn`, `sc1`, `sc2`, `sc3`, `sc4`, `sc5`, `sc6`, `sc7`, `sc8`, `t1s1`, `t1s2`, `t1s3`, `t1s4`, `t1s5`, `t1s6`, `t1s7`, `t1s8`, `t1total`, `t2s1`, `t2s2`, `t2s3`, `t2s4`, `t2s5`, `t2s6`, `t2s7`, `t2s8`, `t2total`, `t3s1`, `t3s2`, `t3s3`, `t3s4`, `t3s5`, `t3s6`, `t3s7`, `t3s8`, `t3total`, `a1s1`, `a1s2`, `a1s3`, `a1s4`, `a1s5`, `a1s6`, `a1s7`, `a1s8`, `a1total`, `as1s1`, `as1s2`, `as1s3`, `as1s4`, `as1s5`, `as1s6`, `as1s7`, `as1s8`, `as1total`, `f1s1`, `f1s2`, `f1s3`, `f1s4`, `f1s5`, `f1s6`, `f1s7`, `f1s8`, `f1total`, `e1s1`, `e1s2`, `e1s3`, `e1s4`, `e1s5`, `e1s6`, `e1s7`, `e1s8`, `e1total`, `totals1`, `totals2`, `totals3`, `totals4`, `totals5`, `totals6`, `totals7`, `totals8`, `total`, `pt`, `cnp`, `ig`, `eg`) VALUES
('1BM14MCA11', '13mca51', '13mca52', '13mca53', '13mca54', '13mca55', '13mca56', '13mca57', '13mca58', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SMART MENTORING SYSTEM', 'Bms College of Engineering,Bangalore', 'SivaRamaKrishna M', '----unknown-----');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(128) NOT NULL,
  `notification` varchar(100) NOT NULL,
  `date_of_notification` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`notification_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `notification_read`
--

CREATE TABLE IF NOT EXISTS `notification_read` (
  `notification_read_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `admin_read` varchar(50) NOT NULL,
  `notification_id` int(11) NOT NULL,
  PRIMARY KEY (`notification_read_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(128) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `thumbnails` varchar(200) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `username`, `password`, `firstname`, `lastname`, `thumbnails`) VALUES
(16, 'SRK', '123', 'Sivaramakrishna', 'M', 'uploads/siva_ramakrishna_m.jpg'),
(20, 'VK', '123', 'Dr K Vijayakumar', '', 'uploads/dr.k.vijayakumar.jpg'),
(21, 'GK', '123', 'Girish', 'K', 'uploads/girish_k.jpg'),
(22, 'PLN', '123', 'Lakshinarayana', 'P', 'uploads/lakshminarayana_p.jpg'),
(23, 'VPP', '123', 'Padmapriya', 'V', 'uploads/v._padmapriya.jpg'),
(24, 'TSP', '123', 'Pushpa', 'T S', 'uploads/pushpa_t.s.jpg'),
(25, 'RR', '123', 'Raghavendra Rao', 'R V', 'uploads/raghavendra_rao_rv.jpg'),
(26, 'RMR', '123', 'Rammohan ', 'Reddy C H', 'uploads/ram_mohan_reddy.jpg'),
(27, 'SS', '123', 'Shilpa', 'S', 'uploads/shilpa_s.jpg'),
(28, 'KPS', '123', 'Shailaja', 'K P', 'uploads/shailaja_k._p.jpg'),
(29, 'US', '123', 'Uma', 'S', 'uploads/uma_s.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `FirstName` varchar(200) DEFAULT NULL,
  `SecondName` varchar(200) DEFAULT NULL,
  `Othername` varchar(200) DEFAULT NULL,
  `RegNo` varchar(200) NOT NULL,
  `PlaceOfBirth` varchar(200) DEFAULT NULL,
  `YearAdmitted` varchar(200) DEFAULT NULL,
  `YearOut` varchar(200) DEFAULT NULL,
  `YearOfBirth` varchar(200) DEFAULT NULL,
  `Mobile` varchar(200) DEFAULT NULL,
  `PostalCode` varchar(200) DEFAULT NULL,
  `PAddress` varchar(200) DEFAULT NULL,
  `KCPEMarks` int(5) DEFAULT NULL,
  PRIMARY KEY (`RegNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE IF NOT EXISTS `user_log` (
  `user_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `login_date` varchar(30) NOT NULL,
  `logout_date` varchar(128) NOT NULL,
  `admin_id` int(128) NOT NULL,
  `staff_id` int(128) NOT NULL,
  PRIMARY KEY (`user_log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=199 ;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`user_log_id`, `username`, `login_date`, `logout_date`, `admin_id`, `staff_id`) VALUES
(191, 'admin', '2016-11-21 17:34:49', '2016-11-21', 6, 0),
(192, 'admin', '2016-11-21 18:02:45', '2016-11-21', 6, 0),
(193, 'user', '2016-11-21 18:06:47', '2016-11-21', 0, 13),
(194, 'admin', '2016-11-21 18:16:28', '2016-11-21', 6, 0),
(195, 'admin', '2016-11-21 18:18:46', '2016-11-21', 6, 0),
(197, 'admin', '2016-11-24 18:52:49', '2016-12-05', 1, 0),
(198, 'user', '2016-11-24 18:53:05', '2016-12-02', 0, 15);

-- --------------------------------------------------------

--
-- Table structure for table `verify`
--

CREATE TABLE IF NOT EXISTS `verify` (
  `login_id` int(128) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `usn` varchar(100) NOT NULL,
  `thumbnails` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `code` varchar(200) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `verify`
--

INSERT INTO `verify` (`login_id`, `username`, `password`, `firstname`, `lastname`, `usn`, `thumbnails`, `email`, `code`) VALUES
(8, 'bhargav', '123', 'bhargav', 's', '1BM14MCA66', 'uploads/nobody_m.original.jpg', 'bhargavs2493@gmail.com', '90e92e4c02c5b69'),
(9, 'bhargav', '123', 'bhargav', 's', '1BM14MCA67', 'uploads/nobody_m.original.jpg', 'bhargavs2493@gmail.com', '5615b2d8611e014'),
(10, 'bhargav', '123', 'bhargav', 'K', '1BM14MCA68', 'uploads/nobody_m.original.jpg', 'bhargavs2493@gmail.com', '8d6c38497b3cc53'),
(11, 'bhargav', '123', 'bhargav', 'K', '1BM14MCA69', 'uploads/nobody_m.original.jpg', 'bhargavs2493@gmail.com', 'b60d8418e72e141'),
(12, 'bhargav', '123', 'bhargav', 'K', '1BM14MCA70', 'uploads/nobody_m.original.jpg', 'bhargavs2493@gmail.com', '6eeec4a9047ab37'),
(13, 'bhargav', '123', 'bhargav', 'K', '1BM14MCA70', 'uploads/nobody_m.original.jpg', 'bhargavs2493@gmail.com', 'eff350d5ec8d6d4');

-- --------------------------------------------------------

--
-- Table structure for table `year1`
--

CREATE TABLE IF NOT EXISTS `year1` (
  `fullname` varchar(100) NOT NULL,
  `usn` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `Mobileno` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `proctor` varchar(100) NOT NULL,
  `bloodgroup` varchar(20) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `foccupation` varchar(100) NOT NULL,
  `faddress` varchar(100) NOT NULL,
  `fcontact` varchar(100) NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `moccupation` varchar(100) NOT NULL,
  `maddress` varchar(12) NOT NULL,
  `mcontact` varchar(100) NOT NULL,
  `localname` varchar(100) NOT NULL,
  `lcontact` varchar(100) NOT NULL,
  `accommodation` varchar(100) NOT NULL,
  `boardx` varchar(50) NOT NULL,
  `xmarks` varchar(11) NOT NULL,
  `yopx` varchar(40) NOT NULL,
  `boardxii` varchar(50) NOT NULL,
  `xiimarks` varchar(40) NOT NULL,
  `yopxii` varchar(40) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `degreemarks` varchar(40) NOT NULL,
  `yopdegree` varchar(40) NOT NULL,
  `yr` varchar(20) NOT NULL,
  PRIMARY KEY (`usn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year1`
--

INSERT INTO `year1` (`fullname`, `usn`, `DOB`, `email`, `Mobileno`, `address`, `proctor`, `bloodgroup`, `fathername`, `foccupation`, `faddress`, `fcontact`, `mothername`, `moccupation`, `maddress`, `mcontact`, `localname`, `lcontact`, `accommodation`, `boardx`, `xmarks`, `yopx`, `boardxii`, `xiimarks`, `yopxii`, `degree`, `degreemarks`, `yopdegree`, `yr`) VALUES
('Deepesh Chhadva', '1BM14MCA11', '1992-05-28', 'deepeshchhadva@gmail.com', '9035728726', 'dvg road', 'SRK', 'B', 'kamalesh', 'bussniess', 'dvg road', '9980837963', 'kajal', 'housewife', '', '', '', '', '', 'cbse', '65', '2011', 'bangalore', '65', '2014', 'bangalore', '65', '2017', '3rd Year'),
('Ajay V', '1BM14MCA02', '1993-12-23', 'ajayv2312@gmail.com', '9595353578', 'Bangalore', 'VK', 'B+', 'Vittal', 'Work', 'Bangalore', '8971324168', '', '', '', '', '', '', 'Day Scholar', 'Karnataka', '70', '2009', 'Bangalore', '70', '2011', 'Bangalore', '70', '2014', '3rd Year');

-- --------------------------------------------------------

--
-- Table structure for table `year2`
--

CREATE TABLE IF NOT EXISTS `year2` (
  `fullname` varchar(100) NOT NULL,
  `usn` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `Mobileno` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `proctor` varchar(100) NOT NULL,
  `bloodgroup` varchar(20) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `foccupation` varchar(100) NOT NULL,
  `faddress` varchar(100) NOT NULL,
  `fcontact` varchar(100) NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `moccupation` varchar(100) NOT NULL,
  `maddress` varchar(12) NOT NULL,
  `mcontact` varchar(100) NOT NULL,
  `localname` varchar(100) NOT NULL,
  `lcontact` varchar(100) NOT NULL,
  `accommodation` varchar(100) NOT NULL,
  `boardx` varchar(50) NOT NULL,
  `xmarks` float NOT NULL,
  `yopx` int(4) NOT NULL,
  `boardxii` varchar(50) NOT NULL,
  `xiimarks` float NOT NULL,
  `yopxii` int(4) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `degreemarks` float NOT NULL,
  `yopdegree` int(4) NOT NULL,
  PRIMARY KEY (`usn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year2`
--

INSERT INTO `year2` (`fullname`, `usn`, `DOB`, `email`, `Mobileno`, `address`, `proctor`, `bloodgroup`, `fathername`, `foccupation`, `faddress`, `fcontact`, `mothername`, `moccupation`, `maddress`, `mcontact`, `localname`, `lcontact`, `accommodation`, `boardx`, `xmarks`, `yopx`, `boardxii`, `xiimarks`, `yopxii`, `degree`, `degreemarks`, `yopdegree`) VALUES
('Bhargav S', '1BM14MCA08', '1993-04-02', 'bhargavs2493@gmail.com', '7411221043', 'Bangalore', 'SivaRamaKrishna', '0+', 'Shivaprasad', 'BSNL', 'Kormangala', '8974541254', 'Poornima Prasad', '', '', '', '', '', 'Day Scholar', 'Karnataka State board', 76.48, 2009, 'Karnataka Secondary Education', 46.5, 2011, 'BCA', 59.34, 2014),
('Deepesh K', '1BM14MCA11', '2016-11-29', 'bhargavs2493@gmail.com', '8971324168', 'bangalore', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, 0, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `year3`
--

CREATE TABLE IF NOT EXISTS `year3` (
  `fullname` varchar(100) NOT NULL,
  `usn` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `Mobileno` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `proctor` varchar(100) NOT NULL,
  `bloodgroup` varchar(20) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `foccupation` varchar(100) NOT NULL,
  `faddress` varchar(100) NOT NULL,
  `fcontact` varchar(100) NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `moccupation` varchar(100) NOT NULL,
  `maddress` varchar(12) NOT NULL,
  `mcontact` varchar(100) NOT NULL,
  `localname` varchar(100) NOT NULL,
  `lcontact` varchar(100) NOT NULL,
  `accommodation` varchar(100) NOT NULL,
  `boardx` varchar(50) NOT NULL,
  `xmarks` float NOT NULL,
  `yopx` int(4) NOT NULL,
  `boardxii` varchar(50) NOT NULL,
  `xiimarks` float NOT NULL,
  `yopxii` int(4) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `degreemarks` float NOT NULL,
  `yopdegree` int(4) NOT NULL,
  PRIMARY KEY (`usn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

1RV[0-9][0-9]IS[0-9][0-9][0-9]