-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2020 at 10:01 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `roll_no` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `roll_no`, `name`, `email`, `address`, `class_name`, `gender`, `created_date`) VALUES
(1, '0001', 'Student', 'student@webhaunt.com', '34,100 GH, New York, USA', 'Pre-Nursery ', 'Male', '2020-02-09 14:44:10'),
(2, '0002', 'Sdudent-2', 'student2@webhaunt.com', '20/105 Street , New York, USA', 'UKG', 'Male', '2020-02-09 21:01:58'),
(6, '0003', 'Sdudent-3', 'student3@webhaunt.com', '9228 Peninsula Drive\r\nCarol Stream, IL 60188', 'LKG', 'Female', '2020-02-09 21:01:58'),
(7, '0004', 'Sdudent-4', 'student4@webhaunt.com', '54 Sutor St.\r\nSanta Monica, CA 90403', '1st', 'Female', '2020-02-09 21:01:58'),
(8, '0005', 'Sdudent-5', 'student5@webhaunt.com', '640 Front Ave.\r\nDrexel Hill, PA 19026', '5th', 'Male', '2020-02-09 21:01:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
