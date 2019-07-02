-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2019 at 12:37 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `sms_addstudent`
--

CREATE TABLE IF NOT EXISTS `sms_addstudent` (
  `addstudent_id` int(11) NOT NULL,
  `addstudent_fname` varchar(50) DEFAULT NULL,
  `addstudent_lname` varchar(50) DEFAULT NULL,
  `addstudent_dob` varchar(20) DEFAULT NULL,
  `addstudent_rel` varchar(20) DEFAULT NULL,
  `addstudent_gender` varchar(20) DEFAULT NULL,
  `addstudent_image` varchar(50) NOT NULL,
  `addstudent_lschool` varchar(50) NOT NULL,
  `addstudent_lclass` varchar(20) NOT NULL,
  `addstudent_gname` varchar(20) NOT NULL,
  `addstudent_goccupation` varchar(20) DEFAULT NULL,
  `addstudent_address` varchar(50) DEFAULT NULL,
  `addstudent_phone` varchar(20) DEFAULT NULL,
  `addstudent_email` varchar(50) DEFAULT NULL,
  `addstudent_cell` varchar(20) DEFAULT NULL,
  `addstudent_roll` varchar(20) DEFAULT NULL,
  `addstudent_jdate` varchar(30) DEFAULT NULL,
  `addstudent_portalid` varchar(50) DEFAULT NULL,
  `addstudent_status` varchar(20) DEFAULT NULL,
  `addstudent_batch` int(11) DEFAULT NULL,
  `addstudent_class` int(11) DEFAULT NULL,
  `addstudent_group` int(11) DEFAULT NULL,
  `addstudent_fee` int(11) DEFAULT NULL,
  `addstudent_pass` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_addstudent`
--

INSERT INTO `sms_addstudent` (`addstudent_id`, `addstudent_fname`, `addstudent_lname`, `addstudent_dob`, `addstudent_rel`, `addstudent_gender`, `addstudent_image`, `addstudent_lschool`, `addstudent_lclass`, `addstudent_gname`, `addstudent_goccupation`, `addstudent_address`, `addstudent_phone`, `addstudent_email`, `addstudent_cell`, `addstudent_roll`, `addstudent_jdate`, `addstudent_portalid`, `addstudent_status`, `addstudent_batch`, `addstudent_class`, `addstudent_group`, `addstudent_fee`, `addstudent_pass`) VALUES
(26, 'Arsalan', 'khan', '1995-04-21', 'islam', '', 'B612_20170510_181710.jpg', 'st', 'seven', 'aslam', 'buss', 'karachi', '0432565432', 'khan@hotmail.com', '02354678', 'sms001', '2017-05-01', 'arsalan@gmail.com', 'Active', 2, 2, 1, 800, 'abc'),
(27, 'Fahad', 'Abtasam', '1991-05-19', 'Islam', '', '20170429_191849.jpg', 'public', 'seven', 'Ahmed', 'Worker', 'Korangi', '03112579753', 'ali@hotmail.com', '03459863336', 'sms002', '2017-05-01', 'ali@sms.com', 'Active', 2, 2, 2, 800, 'abc'),
(29, 'Arslan', 'Ahmed', '2017-05-03', 'Islam', '', '3.png', 'Peter', 'eight', 'Ahmed', 'Worker', 'nazmabad', '03456321778', 'arslan@hotmail.com', '03456789234', 'sms004', '2017-05-10', 'arslan@sms.com', 'Active', 4, 2, 4, 800, 'abc'),
(30, 'shan', 'khan', '2017-05-02', 'Islam', '', '2.png', 'patric', 'seven', 'aslam', 'worker', 'quyymabad', '034563425', 'zeeshan@hotmail.com', '034562356', 'sms005', '2017-05-25', 'fahad@gmail.com', 'Active', 6, 4, 4, 900, 'abc'),
(38, 'Hassan', 'Mahmood', '2017-01-01', 'Islam', '', 'e77f0152bd.jpg', 'Programmer', 'dfsdf', 'nessskadjasl', 'Busi', 'sdasd', 'adas', 'asdassadas', 'asdas', '101', '2017-01-01', 'h@h.com', 'Active', 2, 1, 2, 600, '123'),
(40, 'saad', 'sami', '2015-04-04', 'Islam', '', 'e77f0152bd.jpg', 'Pak Grammer', '10', 'Arsalana Ahmed', 'worker', 'house 119 street 37 f', '0215879635', 'saad@smi.com', '1235846', '4587', '0578-05-05', 'saa@smi.com', 'Active', 3, 4, 5, 900, '123');

-- --------------------------------------------------------

--
-- Table structure for table `sms_attendance`
--

CREATE TABLE IF NOT EXISTS `sms_attendance` (
  `att_id` int(11) NOT NULL,
  `att_st_roll` varchar(20) NOT NULL,
  `Date` varchar(40) NOT NULL,
  `att_class` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_attendance`
--

INSERT INTO `sms_attendance` (`att_id`, `att_st_roll`, `Date`, `att_class`) VALUES
(1, 'sms102', '2017-07-03', '2-A'),
(2, 'sms001', '2017-07-03', '6-A'),
(3, 'sms001', '2017-07-14', '1A'),
(4, 'sms002', '2017-07-17', '5A'),
(5, 'sms004', '2017-07-20', '5A'),
(6, 'sms002', '2017-05-23', '5A'),
(7, 'sm101', '2017-02-02', 'IV-a'),
(8, 'sm101', '2017-01-01', 'IV-5');

-- --------------------------------------------------------

--
-- Table structure for table `sms_batch`
--

CREATE TABLE IF NOT EXISTS `sms_batch` (
  `batch_id` int(11) NOT NULL,
  `batch_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_batch`
--

INSERT INTO `sms_batch` (`batch_id`, `batch_name`) VALUES
(2, '20105-2017'),
(3, '20174h'),
(4, '2017oh'),
(5, '201509g'),
(6, '2017oa'),
(7, 'Evening');

-- --------------------------------------------------------

--
-- Table structure for table `sms_challan`
--

CREATE TABLE IF NOT EXISTS `sms_challan` (
  `ch_id` int(11) NOT NULL,
  `ch_recp` varchar(50) NOT NULL,
  `ch_name` varchar(50) NOT NULL,
  `ch_class` varchar(50) NOT NULL,
  `ch_batch` varchar(50) NOT NULL,
  `ch_month` varchar(20) NOT NULL,
  `ch_date` date NOT NULL,
  `ch_addfee` int(11) NOT NULL,
  `ch_labfee` int(11) NOT NULL,
  `ch_tufee` int(11) NOT NULL,
  `ch_anuelfee` int(11) NOT NULL,
  `ch_other` varchar(50) NOT NULL,
  `ch_totalfee` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_challan`
--

INSERT INTO `sms_challan` (`ch_id`, `ch_recp`, `ch_name`, `ch_class`, `ch_batch`, `ch_month`, `ch_date`, `ch_addfee`, `ch_labfee`, `ch_tufee`, `ch_anuelfee`, `ch_other`, `ch_totalfee`) VALUES
(19, 'sms001', 'zeeshan', '5A', '20171G', '2017-09', '2017-05-03', 100, 60, 8, 20, '5', 52),
(20, 'sms004', 'Arslan', '5A', '2017oh', '2017-03', '2017-05-10', 4500, 566, 800, 56, '44', 452),
(21, 'sms003', 'Ali khan', '1A', '20174h', '2017-12', '0000-00-00', 34, 45, 600, 3, '56', 0),
(22, '', '', '', '', '', '0000-00-00', 0, 0, 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sms_class`
--

CREATE TABLE IF NOT EXISTS `sms_class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(20) NOT NULL,
  `class_fee` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_class`
--

INSERT INTO `sms_class` (`class_id`, `class_name`, `class_fee`) VALUES
(1, '1A', 600),
(2, '5A', 800),
(3, '3A', 700),
(4, '6A', 900),
(5, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sms_group`
--

CREATE TABLE IF NOT EXISTS `sms_group` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_group`
--

INSERT INTO `sms_group` (`group_id`, `group_name`) VALUES
(1, 'Science'),
(2, 'Biology'),
(4, 'English'),
(5, 'Chemistry'),
(6, '2015-6b'),
(7, '201709b2'),
(8, '2015-09-b1');

-- --------------------------------------------------------

--
-- Table structure for table `sms_login`
--

CREATE TABLE IF NOT EXISTS `sms_login` (
  `login_id` int(11) NOT NULL,
  `login_name` varchar(20) NOT NULL,
  `login_email` varchar(40) NOT NULL,
  `login_pass` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_login`
--

INSERT INTO `sms_login` (`login_id`, `login_name`, `login_email`, `login_pass`) VALUES
(2, 'Hassan', 'h@h.com', '123'),
(3, 'arsalan', 'a@a.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `sms_result`
--

CREATE TABLE IF NOT EXISTS `sms_result` (
  `re_id` int(11) NOT NULL,
  `re_roll` varchar(20) NOT NULL,
  `re_eng` int(11) NOT NULL,
  `re_math` int(11) NOT NULL,
  `re_phy` int(11) NOT NULL,
  `re_chem` int(11) NOT NULL,
  `re_urdu` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_result`
--

INSERT INTO `sms_result` (`re_id`, `re_roll`, `re_eng`, `re_math`, `re_phy`, `re_chem`, `re_urdu`) VALUES
(30, 'sms001', 8, 8, 9, 5, 5),
(31, 'sms004', 85, 90, 96, 81, 95),
(32, 'sms003', 65, 85, 75, 80, 91),
(33, 'sms005', 67, 55, 70, 86, 44),
(34, 'sms101', 50, 50, 50, 50, 50),
(35, '', 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sms_addstudent`
--
ALTER TABLE `sms_addstudent`
  ADD PRIMARY KEY (`addstudent_id`), ADD KEY `addstudent_batch` (`addstudent_batch`), ADD KEY `addstudent_class` (`addstudent_class`), ADD KEY `addstudent_group` (`addstudent_group`), ADD KEY `addstudent_fee` (`addstudent_fee`);

--
-- Indexes for table `sms_attendance`
--
ALTER TABLE `sms_attendance`
  ADD PRIMARY KEY (`att_id`);

--
-- Indexes for table `sms_batch`
--
ALTER TABLE `sms_batch`
  ADD PRIMARY KEY (`batch_id`);

--
-- Indexes for table `sms_challan`
--
ALTER TABLE `sms_challan`
  ADD PRIMARY KEY (`ch_id`);

--
-- Indexes for table `sms_class`
--
ALTER TABLE `sms_class`
  ADD PRIMARY KEY (`class_id`), ADD UNIQUE KEY `class_fee` (`class_fee`);

--
-- Indexes for table `sms_group`
--
ALTER TABLE `sms_group`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `sms_login`
--
ALTER TABLE `sms_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `sms_result`
--
ALTER TABLE `sms_result`
  ADD PRIMARY KEY (`re_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sms_addstudent`
--
ALTER TABLE `sms_addstudent`
  MODIFY `addstudent_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `sms_attendance`
--
ALTER TABLE `sms_attendance`
  MODIFY `att_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sms_batch`
--
ALTER TABLE `sms_batch`
  MODIFY `batch_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sms_challan`
--
ALTER TABLE `sms_challan`
  MODIFY `ch_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `sms_class`
--
ALTER TABLE `sms_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sms_group`
--
ALTER TABLE `sms_group`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sms_login`
--
ALTER TABLE `sms_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sms_result`
--
ALTER TABLE `sms_result`
  MODIFY `re_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `sms_addstudent`
--
ALTER TABLE `sms_addstudent`
ADD CONSTRAINT `sms_addstudent_ibfk_1` FOREIGN KEY (`addstudent_batch`) REFERENCES `sms_batch` (`batch_id`),
ADD CONSTRAINT `sms_addstudent_ibfk_2` FOREIGN KEY (`addstudent_class`) REFERENCES `sms_class` (`class_id`),
ADD CONSTRAINT `sms_addstudent_ibfk_3` FOREIGN KEY (`addstudent_group`) REFERENCES `sms_group` (`group_id`),
ADD CONSTRAINT `sms_addstudent_ibfk_4` FOREIGN KEY (`addstudent_fee`) REFERENCES `sms_class` (`class_fee`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
