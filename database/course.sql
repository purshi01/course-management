-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 14, 2019 at 10:57 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `email`, `password`) VALUES
(1, 'purshi@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `contactrequest`
--

CREATE TABLE `contactrequest` (
  `coid` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `contactrequest`
--

INSERT INTO `contactrequest` (`coid`, `username`, `country`, `subject`) VALUES
(1, 'Vinayaka', 'india', 'fecev');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` int(11) NOT NULL,
  `cname` varchar(255) DEFAULT NULL,
  `ctype` varchar(255) DEFAULT NULL,
  `tid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `cname`, `ctype`, `tid`) VALUES
(1, 'java tutorial', 'videotype', 1),
(2, 'machine learning', 'videotype', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newrequest`
--

CREATE TABLE `newrequest` (
  `newid` int(11) NOT NULL,
  `newrequest` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `newrequest`
--

INSERT INTO `newrequest` (`newid`, `newrequest`) VALUES
(1, 'mflwmlw c');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `nid` int(11) NOT NULL,
  `nname` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `cid` int(11) DEFAULT NULL,
  `tid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`nid`, `nname`, `url`, `cid`, `tid`) VALUES
(1, 'KSCNV', 'http://localhost/course/teacher/notes/uploaded/KSCNV', 1, 1),
(2, 'FEFER', 'http://localhost/course/teacher/notes/uploaded/FEFER', 1, 1),
(3, 'wfrr3', 'http://localhost/course/teacher/notes/uploaded/wfrr3', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `dob` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `sname`, `email`, `college`, `password`, `phonenumber`, `dob`) VALUES
(1, 'ManishaG', 'r.manisha@campusuvce.in', 'uvce', 'Purshi@123', '9901000775', '2019-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tid` int(11) NOT NULL,
  `tname` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `college` varchar(255) DEFAULT NULL,
  `experience` varchar(255) NOT NULL,
  `salary` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tid`, `tname`, `email`, `password`, `college`, `experience`, `salary`, `phonenumber`) VALUES
(1, 'ravi', 'prajwal.s.j@campusuvce.in', 'Purshi@123', 'uvce', '12', '13132', '9742039621');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `vid` int(11) NOT NULL,
  `vname` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `cid` int(11) DEFAULT NULL,
  `tid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`vid`, `vname`, `url`, `cid`, `tid`) VALUES
(1, 'wdcw', 'http://localhost/course/teacher/videos/uploaded/wdcw', 1, 1),
(2, 'JFI4RNFR', 'http://localhost/course/teacher/videos/uploaded/JFI4RNFR', 1, 1),
(3, 'fw', 'http://localhost/course/teacher/videos/uploaded/fw', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `contactrequest`
--
ALTER TABLE `contactrequest`
  ADD PRIMARY KEY (`coid`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `tid` (`tid`);

--
-- Indexes for table `newrequest`
--
ALTER TABLE `newrequest`
  ADD PRIMARY KEY (`newid`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`nid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `tid` (`tid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`vid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `tid` (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactrequest`
--
ALTER TABLE `contactrequest`
  MODIFY `coid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newrequest`
--
ALTER TABLE `newrequest`
  MODIFY `newid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `teacher` (`tid`);

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `course` (`cid`),
  ADD CONSTRAINT `notes_ibfk_2` FOREIGN KEY (`tid`) REFERENCES `teacher` (`tid`);

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `course` (`cid`),
  ADD CONSTRAINT `video_ibfk_2` FOREIGN KEY (`tid`) REFERENCES `teacher` (`tid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
