-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 09:50 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `myproc` (IN `Fn` VARCHAR(50), IN `Ln` VARCHAR(50))  NO SQL
BEGIN
(SELECT Passid from buspass where Pid in (SELECT Pid from passenger where Fname=Fn and Lname=Ln))union(
SELECT Pid FROM passenger WHERE Fname=Fn and Lname=Ln);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin_log_in`
--

CREATE TABLE `admin_log_in` (
  `AdminId` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_log_in`
--

INSERT INTO `admin_log_in` (`AdminId`, `Password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `Busid` varchar(50) NOT NULL,
  `Dname` varchar(50) NOT NULL,
  `Routeno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`Busid`, `Dname`, `Routeno`) VALUES
('C3', 'Samrin', 60),
('M1', 'djkak', 68);

-- --------------------------------------------------------

--
-- Table structure for table `buspass`
--

CREATE TABLE `buspass` (
  `Passid` bigint(50) NOT NULL,
  `Pid` int(11) NOT NULL,
  `Validfrom` date NOT NULL,
  `Validto` date NOT NULL,
  `Routeno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buspass`
--

INSERT INTO `buspass` (`Passid`, `Pid`, `Validfrom`, `Validto`, `Routeno`) VALUES
(0, 18, '2018-11-09', '2018-11-29', 68),
(1543508197657, 2, '2018-11-08', '2018-11-15', 68),
(1543509528406, 20, '2018-11-06', '2018-11-28', 80),
(1543511187881, 89, '2018-11-14', '2018-11-20', 68),
(1543513687519, 81, '2018-11-17', '2018-11-30', 68),
(1543522807659, 1, '2018-11-14', '2018-11-28', 68),
(1543610256886, 96, '2018-12-04', '2018-12-20', 65),
(1543784155202, 105, '2018-12-12', '2018-12-28', 60),
(1543821400838, 107, '2018-12-12', '2018-12-21', 62);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Mailid` varchar(20) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Feedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`Fname`, `Lname`, `Mailid`, `Phone`, `Feedback`) VALUES
('Kiran', 'k', 'kirank27751@gmail.co', 842847249, 'Comments Please!!!!!!!!!'),
('Kiran', 'k', 'kirank27751@gmail.co', 842847249, 'Comments Please!!'),
('Samrin', 'Sam', 'Samrin@gmail.com', 3456789, 'Comment please!!!!'),
('aidj', 'dad', 'faf', 234, 'Comment please!!!!');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `Type` varchar(5) NOT NULL,
  `Pid` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` char(1) NOT NULL,
  `Bloodtag` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`Type`, `Pid`, `Fname`, `Lname`, `Age`, `Gender`, `Bloodtag`) VALUES
('ST', 1, 'me', 'alsome', 20, 'm', 'O+'),
('ST', 2, 'kiran', 'k', 20, 'm', 'O+'),
('ST', 10, 'Ainab', 'xyz', 20, 'f', 'O+'),
('ST', 16, 'Safnaaz', 'Sheikh', 21, 'f', 'O+'),
('FL', 18, 'Hemanth', 'xyz', 30, 'm', 'O+'),
('ST', 20, 'ameen', 'ahmed', 20, 'm', 'B+'),
('ST', 78, 'HEllo', 'k', 34, '5', 'O+'),
('ST', 80, 'HEllo', 'k', 34, 'F', 'O+'),
('ST', 81, 'Mohammed', 'Ahfan', 20, 'm', 'AB+'),
('ST', 88, 'Bavin', 'I', 20, 'm', 'A+'),
('ST', 89, 'Hithin', 'R', 20, 'm', 'A+'),
('ST', 96, 'vishal', 'Nayak', 20, 'm', 'O+'),
('ST', 98, 'keerthana', 'K', 16, 'f', 'O+'),
('ST', 102, 'Gautham', 'S', 20, 'm', 'O+'),
('ST', 104, 'Samrin', 'Banu', 20, 'f', 'O+'),
('ST', 105, 'Samrin', 'Banu', 20, 'f', 'A+'),
('', 106, '', '', 0, '', ''),
('ST', 107, 'Rabit', 'Rabeya', 10, 'm', 'O+'),
('ST', 108, 'Ameen', 'Ahmed', 20, 'm', 'O+'),
('FL', 109, 'kladlkd', 'kadsl', 32, 'm', 'O+'),
('ST', 110, 'herge', 'fsefg', 0, 'm', 'O+');

--
-- Triggers `passenger`
--
DELIMITER $$
CREATE TRIGGER `pass_insert` AFTER INSERT ON `passenger` FOR EACH ROW BEGIN 
INSERT INTO users_log 
VALUES(NEW.Pid,  NOW());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `Destination` varchar(50) NOT NULL,
  `Distance` int(11) NOT NULL,
  `Routeno` int(11) NOT NULL,
  `Fair` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`Destination`, `Distance`, `Routeno`, `Fair`) VALUES
('Udupi', 40, 31, 1600),
('BC Road', 45, 38, 1500),
('Suratkal', 55, 60, 2100),
('Karkala', 50, 62, 2200),
('Bailor', 56, 63, 2500),
('Mulky', 26, 65, 1670),
('Manglore', 34, 68, 2635),
('Manipal', 60, 73, 3600),
('Belthangadi', 55, 80, 2100);

-- --------------------------------------------------------

--
-- Table structure for table `users_log`
--

CREATE TABLE `users_log` (
  `Pid` int(11) NOT NULL,
  `Date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_log`
--

INSERT INTO `users_log` (`Pid`, `Date_time`) VALUES
(78, '2018-11-29 13:16:23'),
(80, '2018-11-29 13:16:52'),
(81, '2018-11-29 13:21:32'),
(82, '2018-11-29 13:28:58'),
(83, '2018-11-29 13:29:13'),
(84, '2018-11-29 13:30:43'),
(85, '2018-11-29 13:35:10'),
(86, '2018-11-29 15:43:28'),
(87, '2018-11-29 16:30:50'),
(88, '2018-11-29 16:37:38'),
(89, '2018-11-29 17:05:31'),
(90, '2018-11-29 20:54:28'),
(91, '2018-11-30 15:54:12'),
(92, '2018-11-30 16:27:01'),
(93, '2018-11-30 16:48:59'),
(94, '2018-11-30 19:18:41'),
(95, '2018-11-30 19:18:58'),
(96, '2018-11-30 20:35:17'),
(97, '2018-11-30 20:37:53'),
(98, '2018-12-02 07:14:46'),
(99, '2018-12-02 07:14:55'),
(100, '2018-12-02 15:41:01'),
(101, '2018-12-02 18:20:56'),
(102, '2018-12-02 19:07:50'),
(103, '2018-12-02 19:43:42'),
(104, '2018-12-02 20:49:12'),
(105, '2018-12-02 20:51:47'),
(106, '2018-12-02 21:12:27'),
(107, '2018-12-03 07:14:42'),
(108, '2018-12-03 08:16:30'),
(109, '2018-12-03 08:51:24'),
(110, '2018-12-04 08:48:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_log_in`
--
ALTER TABLE `admin_log_in`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`Busid`),
  ADD KEY `bus_ibfk_1` (`Routeno`);

--
-- Indexes for table `buspass`
--
ALTER TABLE `buspass`
  ADD PRIMARY KEY (`Passid`),
  ADD KEY `Routeno` (`Routeno`),
  ADD KEY `Pid` (`Pid`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`Pid`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`Routeno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `Pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bus`
--
ALTER TABLE `bus`
  ADD CONSTRAINT `bus_ibfk_1` FOREIGN KEY (`Routeno`) REFERENCES `route` (`Routeno`);

--
-- Constraints for table `buspass`
--
ALTER TABLE `buspass`
  ADD CONSTRAINT `buspass_ibfk_1` FOREIGN KEY (`Routeno`) REFERENCES `route` (`Routeno`),
  ADD CONSTRAINT `buspass_ibfk_2` FOREIGN KEY (`Pid`) REFERENCES `passenger` (`Pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
