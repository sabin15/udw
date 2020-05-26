-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 26, 2020 at 11:03 AM
-- Server version: 5.5.65-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nlsherpa`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoint_staff`
--

CREATE TABLE IF NOT EXISTS `appoint_staff` (
  `id` int(11) NOT NULL,
  `unit_code` varchar(10) DEFAULT NULL,
  `staff_id` int(10) DEFAULT NULL,
  `position` varchar(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoint_staff`
--

INSERT INTO `appoint_staff` (`id`, `unit_code`, `staff_id`, `position`) VALUES
(1, 'asdcaa', 2, 'dc'),
(2, 'asdcaa', 2, 'uc'),
(3, 'KIT1234', 2, 'lecturer'),
(4, 'asdcaa', 2, 'lecturer'),
(6, 'BSBWHS521', 6, 'uc'),
(9, 'BSBWHS521', 8, 'uc'),
(10, 'BSBWHS521', 8, 'uc');

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE IF NOT EXISTS `campus` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campus`
--

INSERT INTO `campus` (`id`, `name`) VALUES
(1, 'Pandera'),
(2, 'Rivendell'),
(3, 'Neverland');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE IF NOT EXISTS `enrollment` (
  `id` int(11) NOT NULL,
  `student` varchar(30) DEFAULT NULL,
  `unit` varchar(10) DEFAULT NULL,
  `campus` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`id`, `student`, `unit`, `campus`, `semester`) VALUES
(1, 'st123', 'BSBWHS521', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `lec_time`
--

CREATE TABLE IF NOT EXISTS `lec_time` (
  `usc_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `name`) VALUES
(1, 'Semester 1'),
(2, 'Semester 2'),
(3, 'Spring'),
(4, 'Winter');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(32) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(100) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `expertise` varchar(50) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'staff',
  `staff_id` varchar(30) DEFAULT NULL,
  `dob` varchar(30) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `email`, `password`, `address`, `qualification`, `expertise`, `phone_number`, `type`, `staff_id`, `dob`) VALUES
(1, 'pro', 'pro@gmail.com', '$2y$10$Jca1xlEUq.qCytw.9eUuXuXWlIFO0B0jyyRHkmtoX6JTAVmY7qowq', '123 avenue road', 'masters', 'it', '1234123412', 'uc', '12312', NULL),
(2, 'Sabin', 'sabin@gmail.com', '$2y$10$mJGJU4unETNuLh.gXyZEZ.x2uRkUJw7r66IADICI70Nc4jQZpSBBi', '123 avenue road', 'masters', 'it', '123456712', 'lecturer', '12312', NULL),
(3, 'UC', 'uc@g.com', '$2y$10$fpuUnftoNBSejckbsc2S5eq/aZKs4EWmhKsOsAtd8dlnM3Mxi9qRq', '123 avenue road', 'masters', 'it', '1234222', 'uc', 'uc123', NULL),
(4, 'Sabin Shrestha', 'uc@gmail.com', '$2y$10$Ldx.Zp365.vZbKL90wbpk.hRv.o.JVHHvOmUJ6U0UvVNbWAAQagLS', 'kathmandu', 'phd', 'it', '405845199', '', '123123', NULL),
(7, 'sttt', 'stt@gmail.com', '$2y$10$GEjFzUVG0yL5KXwwhEq53.WueEw7iB2fxFJLvYknz0beUz9tdiAN6', '3/446 Pacific Highway', 'phd', 'it', '12342', 'staff', '1423232', NULL),
(6, 'staff', 'staff1@gmail.com', '$2y$10$hljKmHXRBs3dbvOvXoPU4OCr8.CHIHXIDcqqAGoL1NigCFpCGNO5C', '123', 'masters', 'it', '1234533', 'staff', '123121', NULL),
(8, 'st', 'staf@gmail.com', '$2y$10$J29H5m6jv7I4AQ6W03t9X.7rjSrb3wMm4j53Eh.CHIa0qyArofvVO', '6/43 Stokes Street', 'masters', 'it', '21343211', 'staff', '123123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(32) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `student_id` varchar(30) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `password`, `address`, `phone_number`, `student_id`) VALUES
(1, 'Sabin Sapkota', 'sabinshrestha15@gmail.com', '$2y$10$Del7zBVS5/x/Gwl3y.7nxeU59nbOUgWEHj8OOAe2CwvnQJlvX5Ja6', 'nepal', '435345', NULL),
(2, 'Sabin Sapkota', 'sabinshrestha5010@gmail.com', '$2y$10$ohe78F6do4A8KPc9c/CuNO2OZseulSd7BXeMAuHVU61Cuq5kGnLIC', 'kathmandu', '345345', NULL),
(3, 'Sabin Shrestha', 'sabina@gmail.com', '$2y$10$jtV83KFEsnyvDWbTFowmUuOl8hk6j/zC.0hRN0D71VdJy0XA/5mK6', 'kathmandu', '34353453', NULL),
(4, 'Sabin Sapkota', 'rahulshrestha@gmail.com', '$2y$10$k3adB1K6XaBmZdVrvXHvzucZANShEn9Sxj1KuX8dGbzSrscBVUr4W', 'dfg', '456456', NULL),
(5, '123', 'sdfsdf@sdasd', '$2y$10$9EcKDJG0nseBtPBiSYBoh.wcpd8ynipbIvKd7MzB9VbVO./A0dkWW', 'asdasd', '2345', NULL),
(6, 'Prashant Pokhrel', 'prashant@gmail.com', '$2y$10$S0C6t6SJ09tvtbJjD0v05.BYsS.Afq74.jecVGk80laYEmPZglica', 'Unit 5/ 78-80 Pitt Street. The second left building on the top floor.', '0405845199', NULL),
(7, 'poiuytr', 'lkj@ll.com', '$2y$10$nGL9HojZr0S/hXLUq73JiOzJa0wTM7Z4fTucF9ZxdyLt0gqu0edW6', '123 avenue', '4054567787', '123432'),
(8, 'Prashant Pokhrel', 'prashantpokhrel15@gmail.com', '$2y$10$6MRcQ4uM249r6FZS68RZ7uEw4ggHCOjh245nqJVjlZAW8SZkGue1u', 'Unit 5/ 78-80 Pitt Street. The second left building on the top floor.', '0405845199', 'sabinshrestha15@gmail.com'),
(9, 'Prashant Pokhrel', 'pro@gmail.com', '$2y$10$Jca1xlEUq.qCytw.9eUuXuXWlIFO0B0jyyRHkmtoX6JTAVmY7qowq', 'Unit 5/ 78-80 Pitt Street. The second left building on the top floor.', '0405845199', '12345411'),
(10, 'student', 'student@gmail.com', '$2y$10$sGzNpQx5hZ6Wf3P56t7FaOYXMaaKfNzu5L/.9nAXCNB/IZj9cjUEi', '123 avenue', '123425563', 'st123'),
(11, 'st', 'st@g.com', '$2y$10$U1xHrwjpgAdIXgefAUDkdutZPjD6SipaWy0tBpY9CSsVryq42eNJa', '28/2 Parkes Road', '1234322', '12098');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
  `id` int(10) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `campus` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `start_date` varchar(15) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `end_date` varchar(15) NOT NULL,
  `start_time` varchar(15) NOT NULL,
  `end_time` varchar(15) NOT NULL,
  `day` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `unit`, `campus`, `semester`, `type`, `start_date`, `end_date`, `start_time`, `end_time`, `day`) VALUES
(1, '', '', '', 'asdasd', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', ''),
(2, '', '', '', '', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', ''),
(3, '', '', '', '', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', ''),
(4, '', '', '', '', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', ''),
(5, '', '', '', 'lecture', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', ''),
(6, '', '', '', 'lecture', '05/22/2020', '05/14/2020', '11:00 AM', '11:00 AM', ''),
(7, '', '', '', 'lecture', '05/08/2020', '05/08/2020', '11:00 AM', '11:00 AM', 'Wednesday'),
(8, '', '', '', 'lecture', '05/08/2020', '05/08/2020', '11:00 AM', '11:00 AM', '....'),
(9, '', '', '', 'tutorial', '05/12/2020', '05/14/2020', '10:00 AM', '11:00 AM', '.Tuesday.Wednesday.Thursday.'),
(10, 'asdcaa', 'Rivendell', 'Semester 2', 'tutorial', '05/05/2020', '05/11/2020', '11:00 AM', '11:00 AM', '.Tuesday.Wednesday..'),
(11, 'asdcaa', 'Rivendell', 'Semester 2', 'tutorial', '05/05/2020', '05/11/2020', '11:00 AM', '11:00 AM', '.Tuesday.Wednesday..'),
(12, 'asdcaa', 'Rivendell', 'Semester 2', 'tutorial', '05/05/2020', '05/11/2020', '11:00 AM', '11:00 AM', '.Tuesday.Wednesday..'),
(13, '1234', 'Pandera', 'Semester 1', 'tutorial', '05/20/2020', '05/21/2020', '11:00 AM', '10:30 AM', '...Thursday.Friday'),
(14, 'KIT1234', 'Neverland', 'Semester 2', 'tutorial', '05/11/2020', '05/21/2020', '10:00 AM', '9:30 AM', '.Tuesday..Thursday.Friday'),
(15, '1234', 'Pandera', 'Semester 1', 'lecture', '05/04/2020', '05/27/2020', '11:00 AM', '9:30 AM', 'Monday.Tuesday.Wednesday.Thursday.Friday'),
(16, '1234', 'Pandera', 'Semester 1', 'tutorial', '05/04/2020', '05/28/2020', '11:00 AM', '11:00 AM', '..Wednesday.Thursday.Friday'),
(17, '1234', 'Pandera', 'Semester 1', 'tutorial', '05/04/2020', '05/28/2020', '11:00 AM', '11:00 AM', 'Monday.Tuesday.Wednesday.Thursday.Friday'),
(18, '1234', 'Pandera', 'Semester 1', 'tutorial', '05/04/2020', '05/28/2020', '11:00 AM', '11:00 AM', '.Tuesday.Wednesday.Thursday.Friday'),
(19, '1234', 'Pandera', 'Semester 1', 'tutorial', '05/03/2020', '05/19/2020', '11:00 AM', '1:00 PM', 'Tuesday.Thursday.'),
(20, '1234', 'Pandera', 'Semester 1', 'lecture', '05/03/2020', '05/19/2020', '11:00 AM', '1:00 PM', 'Thursday.'),
(21, '1234', 'Pandera', 'Semester 1', 'lecture', '05/03/2020', '05/19/2020', '3:30 PM', '7:00 PM', 'Thursday.Friday'),
(22, '1234', 'Pandera', 'Semester 1', 'lecture', '05/22/2020', '05/19/2020', '11:00 AM', '6:00 PM', 'Monday.Friday'),
(23, 'asdcaa', 'Rivendell', 'Semester 2', 'tutorial', '05/12/2020', '05/27/2020', '9:00 AM', '11:00 AM', 'Monday.Wednesday.');

-- --------------------------------------------------------

--
-- Table structure for table `ucs`
--

CREATE TABLE IF NOT EXISTS `ucs` (
  `id` int(11) NOT NULL,
  `unit_code` varchar(11) DEFAULT NULL,
  `campus_id` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `timetable_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `position` varchar(30) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ucs`
--

INSERT INTO `ucs` (`id`, `unit_code`, `campus_id`, `semester`, `timetable_id`, `staff_id`, `position`) VALUES
(1, '1234', 1, 1, NULL, NULL, NULL),
(2, '1234', 1, 1, NULL, NULL, NULL),
(3, '1234', 1, 2, NULL, NULL, NULL),
(4, '1234', 1, 3, NULL, NULL, NULL),
(5, '1234', 1, 4, NULL, NULL, NULL),
(6, '1234', 2, 1, NULL, NULL, NULL),
(7, '1234', 2, 2, NULL, NULL, NULL),
(8, '1234', 2, 3, NULL, NULL, NULL),
(9, '1234', 2, 4, NULL, NULL, NULL),
(10, '1234', 3, 1, NULL, NULL, NULL),
(11, '1234', 3, 2, NULL, NULL, NULL),
(12, '1234', 3, 3, NULL, NULL, NULL),
(13, '1234', 3, 4, NULL, NULL, NULL),
(14, '1234', 1, 2, NULL, NULL, NULL),
(15, '1234', 3, 2, NULL, NULL, NULL),
(16, '0', 1, 2, NULL, NULL, NULL),
(17, '0', 2, 3, NULL, NULL, NULL),
(18, '0', 1, 2, NULL, NULL, NULL),
(19, '0', 2, 2, NULL, NULL, NULL),
(20, '0', 1, 2, NULL, NULL, NULL),
(21, '0', 2, 4, NULL, NULL, NULL),
(22, 'BSBWHS521', 1, 2, NULL, NULL, NULL),
(23, 'BSBWHS521', 2, 4, NULL, NULL, NULL),
(24, 'BSBWHS521', 1, 2, NULL, 6, 'Lecturer');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE IF NOT EXISTS `unit` (
  `code` varchar(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `max_staff` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`code`, `name`, `description`, `max_staff`) VALUES
('1234', 'database design', 'asbfjkasfjasfb', NULL),
('KIT1234', 'Data Management', 'hbasjfjkwasfilknasf', 3),
('asdcaa', 'Management', 'hbasjfjkwasfilknasf', NULL),
('BMGT123', 'Business Management and Leadership Skills', 'skills', 5),
('KIT12as', 'Data Management', 'hbasjfjkwasfilknasf', NULL),
('asdfsdas', 'asddfdsa', 'asdffsafa', NULL),
('BSBWHS521', 'Workplace Health and Safety', 'workplace safety', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoint_staff`
--
ALTER TABLE `appoint_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus`
--
ALTER TABLE `campus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lec_time`
--
ALTER TABLE `lec_time`
  ADD PRIMARY KEY (`usc_id`,`staff_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ucs`
--
ALTER TABLE `ucs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoint_staff`
--
ALTER TABLE `appoint_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `campus`
--
ALTER TABLE `campus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `ucs`
--
ALTER TABLE `ucs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
