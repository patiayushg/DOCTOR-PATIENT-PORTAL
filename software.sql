-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2017 at 12:35 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `software`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `aid` bigint(20) NOT NULL,
  `pid` varchar(50) DEFAULT NULL,
  `did` varchar(50) DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `appointment_time` time DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`aid`, `pid`, `did`, `appointment_date`, `appointment_time`) VALUES
(101, 'p101', 'd101', '2017-03-14', '12:30:00'),
(102, 'p101', 'd103', '2017-03-15', '13:30:00'),
(103, 'p101', 'd104', '2017-03-15', '15:30:00'),
(104, 'p102', 'd104', '2017-03-14', '15:30:00'),
(105, 'p102', 'd108', '2017-03-14', '14:00:00'),
(106, 'p102', 'd110', '2017-03-16', '13:30:00'),
(107, 'p102', 'd111', '2017-03-16', '15:30:00'),
(108, 'p103', 'd115', '2017-03-16', '15:30:00'),
(109, 'p105', 'd101', '2017-03-14', '15:30:00'),
(110, 'p105', 'd114', '2017-03-14', '12:30:00'),
(111, 'p106', 'd115', '2017-03-14', '15:30:00'),
(112, 'p106', 'd117', '2017-03-14', '12:30:00'),
(113, 'p107', 'd115', '2017-03-14', '13:30:00'),
(114, 'p107', 'd114', '2017-03-14', '14:30:00'),
(115, 'p107', 'd105', '2017-03-14', '16:30:00'),
(116, 'p109', 'd116', '2017-03-14', '13:30:00'),
(117, 'p109', 'd117', '2017-03-14', '15:00:00'),
(118, 'p109', 'd107', '2017-03-15', '15:00:00'),
(1038, 'p101', 'd102', '2017-03-29', '10:00:00'),
(1035, 'p104', 'd101', '2017-03-27', '10:00:00'),
(1034, 'p104', 'd101', '2017-03-23', '10:00:00'),
(1033, 'p104', 'd101', '2017-03-28', '12:30:00'),
(1032, 'p104', 'd101', '2017-03-16', '10:00:00'),
(1030, 'p104', 'd103', '2017-03-22', '12:30:00'),
(1031, 'p104', 'd101', '2017-03-29', '10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` varchar(50) NOT NULL,
  `dname` varchar(50) DEFAULT NULL,
  `daddress` varchar(80) DEFAULT NULL,
  `dcontact` bigint(20) DEFAULT NULL,
  `dcategory` varchar(30) DEFAULT NULL,
  `dpassword` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `dname`, `daddress`, `dcontact`, `dcategory`, `dpassword`) VALUES
('ashish', 'ashish', 'ashish', 2345, 'Eye/Ear specialist', 'ashish'),
('khare', 'Sanjay Khare', 'chhavni', 1234, 'Heart Specialist', '1234'),
('d101', 'n1', 'add1', 2311, 'Bone Specialist', '1234'),
('d102', 'n2', 'add2', 2311, 'Bone Specialist', '1234'),
('d103', 'n3', 'add3', 2311, 'Bone Specialist', '1234'),
('d104', 'n4', 'add4', 2311, 'Heart Specialist', '1234'),
('d105', 'n5', 'add5', 2311, 'Heart Specialist', '1234'),
('d106', 'n6', 'add6', 2311, 'Heart Specialist', '1234'),
('d107', 'n7', 'add7', 2311, 'Eye/Ear Specialist', '1235'),
('d108', 'n8', 'add8', 2311, 'Eye/Ear Specialist', '1235'),
('d109', 'n9', 'add9', 2311, 'Eye/Ear Specialist', '1235'),
('d110', 'n10', 'add10', 2311, 'Dentist', '1235'),
('d111', 'n11', 'add11', 2311, 'Dentist', '1235'),
('d112', 'n12', 'add12', 2311, 'Dentist', '1235'),
('d113', 'n13', 'add13', 2311, 'Pediatrician', '1235'),
('d114', 'n14', 'add14', 2311, 'Pediatrician', '1235'),
('d115', 'n15', 'add15', 2311, 'Pediatrician', '1235'),
('d116', 'n16', 'add16', 2311, 'Psychiatrist', '1235'),
('d117', 'n17', 'add17', 2311, 'Psychiatrist', '1235'),
('d118', 'n18', 'add18', 2311, 'Psychiatrist', '1235');

-- --------------------------------------------------------

--
-- Table structure for table `organ`
--

CREATE TABLE `organ` (
  `pid` varchar(50) DEFAULT NULL,
  `blood_group` varchar(5) DEFAULT NULL,
  `organ` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organ`
--

INSERT INTO `organ` (`pid`, `blood_group`, `organ`) VALUES
('p102', 'A+', 'Eye'),
('p102', 'A+', 'Lungs'),
('p103', 'O+', 'Eye'),
('p105', 'B+', 'Liver'),
('p105', 'B+', 'Eye'),
('p105', 'B+', 'Lungs'),
('p108', 'AB+', 'Kidney'),
('p108', 'AB+', 'Liver'),
('p101', 'A-', 'Eye'),
('p101', 'A-', 'Kidney');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(80) DEFAULT NULL,
  `contact` bigint(20) DEFAULT NULL,
  `emailid` varchar(60) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `name`, `address`, `contact`, `emailid`, `password`) VALUES
('prjcool', 'prakher', 'jkloi', 6789, 'as@ryt.ll', '1234'),
('qwertyuiop@asdfgh.comm', 'qwer', 'asxcv', 12333, 'assg@sid.cd', 'qwer1234@'),
('4555', 'fd', 'sdd', 43354, 'ddh@ysus.ko', 'dfgg'),
('atul', 'atul', 'khargon', 8982, 'as@ryt.lla', '1234'),
('arshad', 'arshad', 'indore', 9098, 'arsh@wer.ji', '12345'),
('p101', 'pn1', 'padd1', 1111, 'email1@ea.com', 'p1234'),
('p102', 'pn2', 'padd2', 1111, 'email2@ea.com', 'p1234'),
('p103', 'pn3', 'padd3', 1111, 'email3@ea.com', 'p1234'),
('p104', 'pn4', 'padd4', 1111, 'email4@ea.com', 'p1234'),
('p105', 'pn5', 'padd5', 1111, 'email5@ea.com', 'p1234'),
('p106', 'pn6', 'padd6', 1111, 'email6@ea.com', 'p1234'),
('p107', 'pn7', 'padd7', 1111, 'email7@ea.com', 'p1234'),
('p108', 'pn8', 'padd8', 1111, 'email8@ea.com', 'p1234'),
('p109', 'pn9', 'padd9', 1111, 'email9@ea.com', 'p1234'),
('shruti28', 'shruti', 'greater kailash', 9827030027, 'shruti28jindal@gmail.com', 'shruti28'),
('wxyz', 'xyz', 'abc', 12345678, 'xyz.xyz', 'wxyz');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `pid` varchar(50) DEFAULT NULL,
  `disease` varchar(30) DEFAULT NULL,
  `note` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`pid`, `disease`, `note`) VALUES
('p101', 'rickets', 'note1'),
('p101', 'bone pain', 'note1'),
('p102', 'cardiac arrest', 'note2'),
('p102', 'red eye', 'note3'),
('p103', 'vomiting', 'note4'),
('p106', 'vomiting', 'note4'),
('p106', 'mental disorder', 'note5'),
('p107', 'cold', 'note6'),
('p107', 'cough & cold', 'note7'),
('p107', 'heart attack', 'note7'),
('p109', 'disorder', 'note8'),
('p109', 'ear pain', 'note9'),
('p103', 'Healthy', 'Active'),
('p104', 'Healthy', 'Active'),
('p104', '1111111', '1111\r\n'),
('p104', 'j', 'k\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `did` (`did`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `organ`
--
ALTER TABLE `organ`
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `emailid` (`emailid`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD KEY `pid` (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `aid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1039;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
