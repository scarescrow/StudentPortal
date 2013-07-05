-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 05, 2013 at 07:52 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `conceptum`
--
CREATE DATABASE `conceptum` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `conceptum`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Username` varchar(40) NOT NULL,
  `Password` varchar(500) NOT NULL,
  KEY `Username` (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('conceptum', 'd0bb80aabb8619b6e35113f02e72752b');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `Date` varchar(20) NOT NULL,
  `abhimanyu` varchar(10) NOT NULL DEFAULT 'P',
  `abhishek` varchar(10) NOT NULL DEFAULT 'P',
  `arjun` varchar(10) NOT NULL DEFAULT 'P',
  `chetan` varchar(10) NOT NULL DEFAULT 'P',
  `koteshwar` varchar(10) NOT NULL DEFAULT 'P',
  `gaurav` varchar(10) NOT NULL DEFAULT 'P',
  `mehul` varchar(10) NOT NULL DEFAULT 'P',
  `sagnik` varchar(10) NOT NULL DEFAULT 'P',
  KEY `Date` (`Date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`Date`, `abhimanyu`, `abhishek`, `arjun`, `chetan`, `koteshwar`, `gaurav`, `mehul`, `sagnik`) VALUES
('12-07-2012', 'P', 'P', 'P', 'A', 'P', 'P', 'A', 'P'),
('13-07-12', 'P', 'P', 'A', 'P', 'P', 'A', 'P', 'P'),
('19-07-2012', 'P', 'P', 'P', 'A', 'P', 'P', 'A', 'P'),
('20-07-2012', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A'),
('27/07/2012', 'P', 'A', 'A', 'P', 'P', 'A', 'P', 'P'),
('28/07/2012', 'P', 'P', 'P', 'A', 'P', 'A', 'A', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE IF NOT EXISTS `student_details` (
  `Name` varchar(40) NOT NULL,
  `Enrollment_No` varchar(40) NOT NULL,
  `Father_Name` varchar(40) NOT NULL,
  `Mother_Name` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(500) NOT NULL,
  KEY `Enrollment_No` (`Enrollment_No`),
  KEY `Name` (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`Name`, `Enrollment_No`, `Father_Name`, `Mother_Name`, `Mobile`, `Photo`, `Username`, `Password`) VALUES
('Abhimanyu Karandikar', 'CE_001', 'Dhananjay Karandikar', 'Varsha Karandikar', 8987610369, 'images/abhimanyu.jpg', 'abhimanyu', 'a8c4c38c9dbf03bc1a7a0929a8c98357'),
('Abhishek Kumar', 'CE_002', 'Mr. Kumar', 'Mrs. Kumar', 9876543210, 'images/abhishek.jpg', 'abhishek', 'f589a6959f3e04037eb2b3eb0ff726ac'),
('Arjun Garg', 'CE_003', 'Mr. Garg', 'Turran Garg', 9458159259, 'images/arjun.jpg', 'arjun', '7626d28b710e7f9e98d9dfbe9bf0d123'),
('Chetan Dhagarra', 'CE_004', 'Sanjeev Dhagarra', 'Mrs. Dhagarra', 9997808135, 'images/chetan.jpg', 'chetan', '3b8ebe34e784a3593693a37baaacb016'),
('D. Koteshwar Rao', 'CE_005', 'Mr. Rao', 'Mrs. Rao', 7987198446, 'images/koteshwar.jpg', 'koteshwar', 'e0f28b7eb9bb38aa6cb010d32be43b94'),
('Gaurav Seth', 'CE_006', 'Mr. Seth', 'Mrs. Seth', 7417404063, 'images/gaurav.jpg', 'gaurav', '29be54a52396750258d886abc5417fda'),
('Mehul Chauhan', 'CE_007', 'Mr. Chauhan', 'Mrs. Chauhan', 9045737837, 'images/mehul.jpg', 'mehul', 'f626f4ab367c4cf89ea50330054f2056'),
('Sagnik Sinha Roy', 'CE_008', 'Nilay Sinha Roy', 'Ronita Sinha Roy', 8860812994, 'images/sagnik.jpg', 'sagnik', '1767446c0454b60a622b53bf196895b2');

-- --------------------------------------------------------

--
-- Table structure for table `test_marks`
--

CREATE TABLE IF NOT EXISTS `test_marks` (
  `Name` varchar(50) NOT NULL,
  `Enrollment_No` varchar(50) NOT NULL,
  `Test_1` varchar(10) NOT NULL,
  `Test_2` varchar(10) NOT NULL,
  `Test_3` varchar(10) NOT NULL,
  `Test_4` varchar(10) NOT NULL,
  `Test_5` varchar(10) NOT NULL,
  `Test_6` varchar(10) NOT NULL,
  `Test_7` varchar(10) NOT NULL,
  `Test_8` varchar(10) NOT NULL,
  `Test_9` varchar(10) NOT NULL,
  `Test_10` varchar(10) NOT NULL,
  `Remarks` varchar(500) NOT NULL DEFAULT 'None',
  KEY `Name` (`Name`),
  KEY `Enrollment_No` (`Enrollment_No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_marks`
--

INSERT INTO `test_marks` (`Name`, `Enrollment_No`, `Test_1`, `Test_2`, `Test_3`, `Test_4`, `Test_5`, `Test_6`, `Test_7`, `Test_8`, `Test_9`, `Test_10`, `Remarks`) VALUES
('Abhimanyu Karandikar', 'CE_001', '96/120', '293/480', '213/240', '', '', '', '', '', '', '', 'None'),
('Abhishek Kumar', 'CE_002', '67/120', '207/480', '143/240', '', '', '', '', '', '', '', 'None'),
('Arjun Garg', 'CE_003', '82/120', '245/480', '154/240', '', '', '', '', '', '', '', 'None'),
('Chetan Dhagarra', 'CE_004', '58/120', '187/480', '136/240', '', '', '', '', '', '', '', 'None'),
('D. Koteshwar Rao', 'CE_005', '112/120', '314/480', '225/240', '', '', '', '', '', '', '', 'None'),
('Gaurav Seth', 'CE_006', '78/120', '243/480', '173/240', '', '', '', '', '', '', '', 'None'),
('Mehul Chauhan', 'CE_007', '81/120', '232/480', '148/240', '', '', '', '', '', '', '', 'None'),
('Sagnik Sinha Roy', 'CE_008', '87/120', '272/480', '192/240', '', '', '', '', '', '', '', 'None');
