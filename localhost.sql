-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 05, 2018 at 01:04 AM
-- Server version: 10.1.24-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ermsyste_Admin_login`
--
CREATE DATABASE IF NOT EXISTS `ermsyste_Admin_login` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ermsyste_Admin_login`;

-- --------------------------------------------------------

--
-- Table structure for table `loginAttempts`
--

CREATE TABLE `loginAttempts` (
  `IP` varchar(20) NOT NULL,
  `Attempts` int(11) NOT NULL,
  `LastLogin` datetime NOT NULL,
  `Username` varchar(65) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loginAttempts`
--

INSERT INTO `loginAttempts` (`IP`, `Attempts`, `LastLogin`, `Username`, `ID`) VALUES
('162.158.165.114', 1, '2017-11-20 10:04:27', 'Akshat', 1),
('162.158.165.252', 1, '2017-11-05 19:42:40', 'Akshat', 2),
('141.101.98.144', 1, '2017-11-07 11:33:43', 'Akshat', 3),
('172.68.144.81', 2, '2017-11-18 20:14:04', 'Akshat', 4),
('14.139.242.195', 1, '2017-11-27 05:32:28', 'Akshat', 5),
('157.37.82.245', 1, '2017-11-28 14:25:08', 'akshat', 6),
('5.107.61.26', 2, '2017-11-30 03:53:38', 'Akshat', 7),
('157.37.170.128', 1, '2017-11-30 04:08:40', 'Akshat', 8),
('162.158.165.9', 1, '2018-01-12 05:38:37', 'Akshat', 9),
('162.158.165.69', 2, '2017-12-03 11:19:44', 'Akshat', 10),
('172.68.133.137', 1, '2017-12-03 12:18:51', 'Akshat', 11),
('172.68.144.186', 1, '2017-12-03 13:26:17', 'Akshat', 12),
('162.158.165.135', 1, '2017-12-03 13:39:05', 'Akshat', 13),
('172.68.144.180', 1, '2017-12-03 17:41:09', 'Akshat', 14),
('172.68.162.63', 1, '2017-12-03 19:13:21', 'Akshat', 15),
('162.158.165.33', 1, '2017-12-04 08:59:05', 'Akshat', 16),
('172.68.162.27', 1, '2017-12-04 10:44:35', 'akshat', 17),
('162.158.63.75', 1, '2017-12-04 13:38:06', 'akshat', 18),
('172.68.132.208', 2, '2017-12-05 11:25:02', '', 19),
('172.68.144.156', 1, '2017-12-14 11:26:50', 'Akshat', 20),
('162.158.167.113', 1, '2017-12-18 11:40:47', 'Akshat', 21);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` char(23) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `mod_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `email`, `verified`, `mod_timestamp`) VALUES
('EMP398504', 'Akshat', '$2y$10$SkOJf4pqoNL1tUJjQI.LdeOoqZAJ.vwgvza976X3p41EJoysrohFm', 'akshat.khanna@st.niituniversity.in', 1, '2017-11-04 11:14:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginAttempts`
--
ALTER TABLE `loginAttempts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginAttempts`
--
ALTER TABLE `loginAttempts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;--
-- Database: `ermsyste_details`
--
CREATE DATABASE IF NOT EXISTS `ermsyste_details` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ermsyste_details`;

-- --------------------------------------------------------

--
-- Table structure for table `aboutcom`
--

CREATE TABLE `aboutcom` (
  `companyname` varchar(50) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `companylogo` varchar(2000) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `website` varchar(2000) NOT NULL,
  `emailid` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutcom`
--

INSERT INTO `aboutcom` (`companyname`, `owner`, `companylogo`, `contact`, `website`, `emailid`) VALUES
('ERMSolutions', '(owner)', '', '123456789', 'https://ermsystem.xyz', 'companyemail@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `Clients`
--

CREATE TABLE `Clients` (
  `company_name` varchar(30) DEFAULT NULL,
  `client_name` varchar(30) DEFAULT NULL,
  `email_ID` varchar(50) NOT NULL,
  `mobile_no` bigint(10) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `postalcode` int(10) DEFAULT NULL,
  `productname` varchar(50) NOT NULL,
  `aboutproduct` varchar(50) NOT NULL,
  `EmpID` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Clients`
--

INSERT INTO `Clients` (`company_name`, `client_name`, `email_ID`, `mobile_no`, `address`, `city`, `country`, `postalcode`, `productname`, `aboutproduct`, `EmpID`) VALUES
('Amul Co.', 'Rahul Tyagi', 'rahulcool@gmail.com', 9999999999, 'House 12, amrapali banglows, Amritsar', 'Amritsar', 'India', 303025, 'Milk Candy and sugar candy', 'software required for production data entries', 'EMP206520'),
('YTAL', 'YJain', 'yashj302@gmail.com', 9989986562, 'B7 102 A block treveni Nagar Rridhi Sidhi Jaipur', 'Jaipur', 'India', 302020, 'Mobile Parts', 'This is to just inform that these parts are for us', 'EMP180366'),
('sakdjfl', 'dsfjsahsadfjasdfh', 'fdsahjksdhf@gamail.com', 345678, 'afskjh', 'asdfhkjaf', 'asdfkj', 492010, 'jbvcx', '', 'EMP295349'),
('Fritolay Pvt. Ltd.', 'Rajpurohit Ranjit Singh', 'Rajpurohit@rediffmail.com', 9865987456, '@#, Raj Bunglows, Purohit Vihar, Delhi.', 'Delhi', 'India', 333662, 'Chips', 'Software Needed For Stock maintenance and employee', 'EMP206520'),
('', '', '', 0, '', '', '', 0, '', '', 'EMP197011'),
('lol', 'kim', 'zasnfsd@gmail.com', 9999999999, 'Raipur', 'Raipur', 'Australia', 990999, 'ERM', 'dunno kknow', 'EMP197011'),
('YTAL', 'CLIENT', 'ermsammm@gmail.com', 869666666, 'hshaajdjhasdhjhshaajdjhasdhjhshaajdjhasdhjhshaajdjhasdhjhshaajdjhasdhjhshaajdjhasdhjhshaajdjhasdhj', 'Jaipur', 'India', 302015, 'juhghfcghjiko', 'njbhgfchjkosijdauih iashdiahiduahihaiuhiudhaiuhiau', 'EMP244836');

-- --------------------------------------------------------

--
-- Table structure for table `Company`
--

CREATE TABLE `Company` (
  `Name` varchar(50) NOT NULL,
  `image_URL` varchar(50) NOT NULL,
  `Owner` varchar(50) NOT NULL,
  `CEO` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `B_Name` varchar(50) NOT NULL,
  `B_Contact` int(15) NOT NULL,
  `B_EmailID` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Employees`
--

CREATE TABLE `Employees` (
  `empid` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `age` int(5) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `mobileno` bigint(15) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `postalcode` int(10) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `Salary` int(10) NOT NULL,
  `image_URL` varchar(50) NOT NULL DEFAULT 'default.png'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Employees`
--

INSERT INTO `Employees` (`empid`, `UserName`, `firstname`, `lastname`, `age`, `dob`, `gender`, `mobileno`, `address`, `city`, `country`, `postalcode`, `status`, `Salary`, `image_URL`) VALUES
('EMP206520', 'Fayaz.Maknojia', 'Fayaz', 'Maknojia', 21, '1996-07-15', 'Male', 9924000978, 'A1/12, Sanman Apartment, Near DCB Bank, Opp To Civil Court Compound.', 'Sidhpur', 'India', 384151, 0, 0, 'default.png'),
('EMP180366', 'Yash.Jain', 'Yash', 'Jain', 18, '1997-02-04', 'Male', 8696999921, '102 onyx enclave 82 a keshav vihar gopalpura bypass jaipur rajasthan india earth milkyway near sun', 'jaipur', 'india', 302018, 0, 0, 'default.png'),
('EMP295349', 'Kundan.Dewangan', 'Kundan', 'Dewangan', 21, '1997-02-04', 'Male', 9962236102, '102 onyx enclave 82 a keshav vihar gopalpura bypas...', NULL, NULL, NULL, 1, 0, 'default.png'),
('EMP197011', 'Prateek.jha', 'Prateek', 'Jha', 20, '1997-02-04', 'Male', 7894561237, '102 onyx enclave 82 a keshav vihar gopalpura bypas...', NULL, NULL, NULL, 1, 0, 'default.png'),
('EMP244836', 'ERM', 'ERM ', 'SYSTEM', 21, '2017-12-07', 'Male', 8696999921, 'yashaadsbjkajka yashaadsbjkajka yashaadsbjkajka yashaadsbjkajka yashaadsbjkajka ', 'Jaipur', 'India', 302018, 0, 0, 'default.png'),
('EMP255399', 'Akshat.khanna', 'Akshat', 'Khanna', 20, '1997-03-17', 'Male', 9166495770, 'AKSHAT KHANNA,, KD-122, KAVINAGAR,, Ghaziabad,, Uttar Pradesh,, pincode: 201002', 'Ghaziabad', 'India', 201002, 0, 0, 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `ID` bigint(20) NOT NULL,
  `Noti_from` varchar(50) NOT NULL,
  `Message` varchar(1000) NOT NULL,
  `Noti_to` varchar(50) NOT NULL,
  `Deadline` date NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'Pending',
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`ID`, `Noti_from`, `Message`, `Noti_to`, `Deadline`, `Status`, `TimeStamp`) VALUES
(4, 'Admin', 'Testing', 'EMP963894', '2017-12-29', 'Pending', '2017-12-03 18:26:17'),
(5, 'Admin', 'This is your 1st task', 'EMP180366', '2017-12-15', 'Completed', '2017-12-03 18:29:53'),
(6, 'Admin', 'do the stock checking', 'EMP286330', '2017-12-05', 'Pending', '2017-12-03 13:45:02'),
(7, 'Admin', 'This is just a demo version', 'EMP180366', '2017-12-13', 'Pending', '2017-12-03 18:30:00'),
(8, 'Admin', 'Testing Task', 'EMP255399', '2017-12-31', 'Completed', '2017-12-04 10:47:27'),
(9, 'Admin', 'Testing', 'EMP244836', '2017-12-21', 'Completed', '2017-12-04 13:55:18');

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `Revenue` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutcom`
--
ALTER TABLE `aboutcom`
  ADD PRIMARY KEY (`companyname`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- Indexes for table `Clients`
--
ALTER TABLE `Clients`
  ADD PRIMARY KEY (`email_ID`);

--
-- Indexes for table `Employees`
--
ALTER TABLE `Employees`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;--
-- Database: `ermsyste_login`
--
CREATE DATABASE IF NOT EXISTS `ermsyste_login` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ermsyste_login`;

-- --------------------------------------------------------

--
-- Table structure for table `loginAttempts`
--

CREATE TABLE `loginAttempts` (
  `IP` varchar(20) NOT NULL,
  `Attempts` int(11) NOT NULL,
  `LastLogin` datetime NOT NULL,
  `Username` varchar(65) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loginAttempts`
--

INSERT INTO `loginAttempts` (`IP`, `Attempts`, `LastLogin`, `Username`, `ID`) VALUES
('162.158.154.99', 1, '2017-10-04 15:44:36', 'YashJain', 2),
('162.158.154.99', 2, '2017-10-04 16:00:56', 'fayaz', 6),
('162.158.154.9', 2, '2017-10-04 16:10:46', 'akslas', 7),
('162.158.154.9', 2, '2017-10-04 16:10:54', 'salslk', 8),
('162.158.154.99', 1, '2017-10-04 23:16:49', 'Kundan Dewangan', 9),
('162.158.154.99', 1, '2017-10-04 23:21:40', 'Fayaz Maknojia', 10),
('162.158.154.9', 2, '2017-10-10 12:27:52', 'Akshat', 11),
('162.158.154.99', 1, '2017-10-06 16:01:29', 'aman', 12),
('162.158.154.99', 1, '2017-10-07 20:38:46', 'arachnis', 13),
('162.158.154.9', 2, '2017-10-10 12:24:30', 'jdnskfjbsd', 14),
('162.158.154.99', 3, '2017-10-11 16:01:24', 'prateekjha07@gmail.com', 15),
('162.158.155.100', 2, '2017-10-14 02:24:32', 'shot_dead', 16),
('162.158.166.61', 1, '2017-10-14 16:43:03', 'AkshatTest', 17),
('162.158.166.61', 1, '2017-10-14 16:47:06', 'akshat', 18),
('162.158.166.115', 2, '2017-11-04 21:03:24', 'Kundan Dewangan', 19),
('162.158.166.115', 3, '2017-11-19 14:51:34', 'Kundan ', 20),
('162.158.166.115', 5, '2017-11-18 00:52:16', 'Fayaz', 21),
('162.158.166.115', 1, '2017-11-20 15:16:00', 'Akshat', 22),
('172.68.144.105', 2, '2017-11-18 00:54:56', 'Fayaz', 23),
('172.68.144.105', 2, '2017-11-07 14:23:42', 'Yash', 24),
('162.158.166.115', 1, '2017-11-18 00:50:32', 'Yash', 25),
('172.68.144.105', 1, '2017-11-18 17:23:46', 'Fayaz.Maknojia', 26),
('162.158.166.115', 1, '2017-11-18 17:41:21', 'Yash.Jain', 27),
('162.158.165.246', 2, '2017-11-18 20:13:38', 'Akshat', 28),
('162.158.166.115', 1, '2017-11-19 14:52:30', 'Kundan.Dewangan', 29),
('162.158.166.115', 1, '2017-11-19 19:06:54', 'prateek.jha', 30),
('172.68.144.105', 1, '2017-11-20 15:02:47', 'Yash.Jain', 31),
('14.139.242.195', 1, '2017-11-25 10:28:35', 'Akshat.Khanna', 32),
('14.139.242.195', 1, '2017-11-29 14:51:25', 'Yash.Jain', 33),
('14.139.242.195', 2, '2017-11-27 05:54:01', 'Akshat', 34),
('157.37.82.245', 1, '2017-11-28 14:30:32', 'aman.jha', 35),
('5.107.61.26', 5, '2017-11-30 03:51:57', 'Akshat', 36),
('162.158.166.238', 1, '2017-12-02 12:18:07', 'Yash.Jain', 37),
('172.68.142.82', 4, '2017-12-02 17:54:43', 'Akshat', 38),
('172.68.162.27', 4, '2017-12-02 18:00:14', 'Akshat.khanna', 39),
('172.68.143.83', 1, '2017-12-02 18:02:04', 'Yash.Jain', 40),
('172.68.143.53', 2, '2017-12-02 18:26:44', 'Yash.Jain', 41),
('172.68.142.106', 5, '2017-12-02 18:58:25', 'Akshat', 42),
('172.68.142.106', 2, '2017-12-02 18:58:38', 'Akshat.khanna', 43),
('172.68.144.42', 1, '2017-12-03 11:19:36', 'Akshat.khanna', 44),
('162.158.165.33', 1, '2017-12-03 12:49:31', 'Akshat.khanna', 45),
('162.158.165.195', 5, '2017-12-03 13:27:08', 'akshat', 46),
('162.158.165.195', 1, '2017-12-03 13:28:33', 'Akshat.khanna', 47),
('172.68.144.210', 1, '2017-12-03 13:28:52', 'Akshat.khanna', 48),
('162.158.165.183', 1, '2017-12-03 14:13:57', 'Akshat.khanna', 49),
('172.68.162.99', 1, '2017-12-03 17:32:24', 'Akshat.khanna', 50),
('162.158.166.238', 1, '2017-12-03 18:36:28', 'prateek.jha', 51),
('172.68.144.234', 4, '2017-12-04 08:56:47', 'Akshat.khanna', 52),
('162.158.167.215', 3, '2017-12-04 09:37:44', 'Akshat.khanna', 53),
('172.68.162.57', 1, '2017-12-04 10:45:29', 'Akshat.khanna', 54),
('162.243.228.176', 1, '2017-12-04 10:52:02', 'kundan.dewangan', 55),
('108.162.219.165', 1, '2017-12-04 11:52:34', 'kundan.dewangan', 56),
('172.68.162.75', 5, '2017-12-04 13:31:06', '', 57),
('172.68.141.111', 1, '2017-12-04 13:29:45', 'Akshat.khanna', 58),
('172.68.133.227', 1, '2017-12-04 13:52:08', 'ERM', 59),
('162.158.166.34', 1, '2017-12-14 11:25:35', 'Yash.jain', 60),
('162.158.166.34', 2, '2017-12-14 11:24:12', 'Yash', 61),
('162.158.167.227', 5, '2017-12-18 11:37:15', 'yash.jain', 62),
('162.158.166.52', 5, '2017-12-20 11:49:55', 'Kundan.dewangan', 63),
('162.158.166.52', 2, '2017-12-20 11:48:35', 'Kundan', 64),
('162.158.167.53', 3, '2018-01-12 05:37:39', 'Akshat', 65),
('162.158.167.53', 1, '2018-01-12 05:37:47', 'Akshat.khanna', 66),
('162.158.166.238', 2, '2018-01-14 09:44:25', 'Akshat.khanna', 67),
('162.158.166.238', 5, '2018-01-14 09:44:59', '2112121', 68);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `mod_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `email`, `verified`, `mod_timestamp`) VALUES
('EMP180366', 'Yash.Jain', '$2y$10$ugKGdQ8RxCi9YoMMONXiwuq4sam45yomacXY3Nsa2NYb.w0Y5.ci6', 'yash.jain@st.niituniversity.in', 1, '2017-12-18 11:37:52'),
('EMP197011', 'Prateek.jha', '$2y$10$ccN8ruDOPibopSZl7RJU2uPVQ.f0g0vOg7GwbBgCkHoq2QdreudWy', 'prateek.jha@st.niituniversity.in', 1, '2017-11-19 05:54:42'),
('EMP206520', 'Fayaz.Maknojia', '$2y$10$0bMZSU/uRNgpVaDCb2DzP.rD4kYYzzQcGH/YrVpNrd7T05bqTd98O', 'fayaz.z.maknojia@st.niituniversity.in', 1, '2017-11-18 11:52:35'),
('EMP244836', 'ERM', '$2y$10$0xyHJrOtvCjpn9QEtk8eNuL/IYCoiyYm5s3G9MoZJ09AdMU2ZnDAu', 'ermsample@gmail.com', 1, '2017-12-04 13:51:52'),
('EMP255399', 'Akshat.khanna', '$2y$10$xC6.bOLUtua2DI5NPcREhey1LMZw.tQwIGS5wWoxlWQP1UXOF52wu', 'akshat.khanna@st.niituniversity.in', 1, '2017-12-04 09:37:36'),
('EMP295349', 'Kundan.Dewangan', '$2y$10$.H17C3ESnHkiOje7xRt7q.2uoBIwmPEKmeGWFvsxmmrj1l9YRd0Ji', 'kundan.dewangan@st.niituniversity.in', 1, '2017-11-19 08:45:52');

--
-- Triggers `members`
--
DELIMITER $$
CREATE TRIGGER `afterinsertinto` AFTER INSERT ON `members` FOR EACH ROW INSERT INTO ermsyste_details.Employees(empid,UserName) VALUES(NEW.id, NEW.username)
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginAttempts`
--
ALTER TABLE `loginAttempts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginAttempts`
--
ALTER TABLE `loginAttempts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;--
-- Database: `ermsyste_Logs`
--
CREATE DATABASE IF NOT EXISTS `ermsyste_Logs` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ermsyste_Logs`;

-- --------------------------------------------------------

--
-- Table structure for table `Login_logs`
--

CREATE TABLE `Login_logs` (
  `UserName` varchar(50) NOT NULL,
  `Admin/Employee` varchar(50) NOT NULL,
  `IP_Address` varchar(50) NOT NULL,
  `TimeStamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
