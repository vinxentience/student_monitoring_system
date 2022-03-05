-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2019 at 07:36 AM
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
-- Database: `school_management_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `monitoring`
--

CREATE TABLE `monitoring` (
  `id` int(255) NOT NULL,
  `student_id` int(255) NOT NULL,
  `allEvents` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monitoring`
--

INSERT INTO `monitoring` (`id`, `student_id`, `allEvents`) VALUES
(1, 13, '[]'),
(2, 15, '[{\"title\":\"Absent\",\"start\":\"2019-02-04T08:00:00.000Z\"},{\"title\":\"Haircut(Non Compliance)\",\"start\":\"2019-02-19T08:00:00.000Z\"},{\"title\":\"Skirt(Non Compliance)\",\"start\":\"2019-02-11T08:00:00.000Z\"},{\"title\":\"Hair Color(Non Compliance)\",\"start\":\"2019-02-13T08:00:00.000Z\"},{\"title\":\"Hair Color(Non Compliance)\",\"start\":\"2019-02-12T08:00:00.000Z\"},{\"title\":\"Blouse(Non Compliance)\",\"start\":\"2019-02-05T00:00:00.000Z\"},{\"title\":\"Pants(Non Compliance)\",\"start\":\"2019-02-17T00:00:00.000Z\"},{\"title\":\"Polo(Non Compliance)\",\"start\":\"2019-02-11T00:00:00.000Z\"},{\"title\":\"Polo(Non Compliance)\",\"start\":\"2019-02-11T00:00:00.000Z\"},{\"title\":\"Tardy\",\"start\":\"2019-02-12T00:00:00.000Z\"},{\"title\":\"Absent\",\"start\":\"2019-02-12T00:00:00.000Z\"},{\"title\":\"Polo(Non Compliance)\",\"start\":\"2019-02-13T00:00:00.000Z\"},{\"title\":\"ID(Non Compliance)\",\"start\":\"2019-02-14T00:00:00.000Z\"}]'),
(3, 0, '[]'),
(4, 16, '[{\"title\":\"Absent\",\"start\":\"2019-02-04T00:00:00.000Z\"},{\"title\":\"Tardy\",\"start\":\"2019-02-04T00:00:00.000Z\"},{\"title\":\"Polo(Non Compliance)\",\"start\":\"2019-02-04T00:00:00.000Z\"},{\"title\":\"Pants(Non Compliance)\",\"start\":\"2019-02-04T00:00:00.000Z\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(255) NOT NULL,
  `grade_level` int(5) NOT NULL,
  `section` varchar(255) NOT NULL,
  `adviser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `grade_level`, `section`, `adviser`) VALUES
(4, 12, 'Data TEST', 'Data TEST'),
(5, 11, 'Section2', 'John doe1');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(255) NOT NULL,
  `student_lrn` varchar(12) NOT NULL,
  `student_fname` varchar(255) NOT NULL,
  `student_lname` varchar(255) NOT NULL,
  `student_gender` varchar(255) NOT NULL,
  `student_gradelevel` int(3) NOT NULL,
  `student_section` varchar(255) NOT NULL,
  `student_adviser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_lrn`, `student_fname`, `student_lname`, `student_gender`, `student_gradelevel`, `student_section`, `student_adviser`) VALUES
(16, '1111225', 'Jona', 'Hinayon', 'female', 12, 'twelve', 'twelve'),
(17, '111111', 'Angela', 'Bergavera', 'female', 12, 'Data TEST', 'Data TEST');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `password`, `role`) VALUES
(3, 'admin, admin', '', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(4, 'wewe, wewe', '', 'wewe', '2a7d544ccb742bd155e55c796de8e511', 1),
(13, 'Test, Test', '', 'test@test.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(14, 'Test, Test', '', 'Test', 'e10adc3949ba59abbe56e057f20f883e', 1),
(15, 'New, New', '', 'New', 'e10adc3949ba59abbe56e057f20f883e', 1),
(16, 'Roro, Roro', 'Roro@roro.com', 'Roro', '05f36763ad6992fd4f919aa0e6363cd3', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monitoring`
--
ALTER TABLE `monitoring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monitoring`
--
ALTER TABLE `monitoring`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
