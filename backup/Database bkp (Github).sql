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
-- password : admin@akshat
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
