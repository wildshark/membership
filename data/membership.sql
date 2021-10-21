-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 07:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `membership`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_person_data`
--

CREATE TABLE `tbl_person_data` (
  `person_id` int(11) NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `bmb_number` int(11) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `region_id` int(11) DEFAULT NULL,
  `constituency` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `mobile1` varchar(255) DEFAULT NULL,
  `mobile2` varchar(255) DEFAULT NULL,
  `level_education` varchar(255) DEFAULT NULL,
  `new_voter_id` varchar(50) DEFAULT NULL,
  `old_voter_id` varchar(50) DEFAULT NULL,
  `job_appointment` varchar(255) DEFAULT NULL,
  `memberrship_card` varchar(255) DEFAULT NULL,
  `card_number` varchar(50) DEFAULT NULL,
  `support_bmb` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `strategies` varchar(255) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_person_data`
--

INSERT INTO `tbl_person_data` (`person_id`, `member_id`, `full_name`, `bmb_number`, `gender`, `dob`, `region_id`, `constituency`, `branch`, `mobile1`, `mobile2`, `level_education`, `new_voter_id`, `old_voter_id`, `job_appointment`, `memberrship_card`, `card_number`, `support_bmb`, `occupation`, `strategies`, `status_id`) VALUES
(17, 1634831355, 'Andrew Quaye', 456456456, 'Female', '2021-10-21', 7, 'dfg', 'fgdfdf', 'dfgdg', 'dfgdfg', 'dfgdfg', 'dfgf', 'dfg', 'dgfdfgdf', 'Yes', '', 'Yes', 'dfgdg', 'dfgdfg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_region`
--

CREATE TABLE `tbl_region` (
  `region_id` int(11) NOT NULL,
  `region_title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_region`
--

INSERT INTO `tbl_region` (`region_id`, `region_title`) VALUES
(1, 'Western'),
(2, 'Central'),
(3, 'Greater Accra'),
(4, 'Volta'),
(5, 'Eastern'),
(6, 'Ashanti'),
(7, 'Brong-Ahafo'),
(8, 'Northern'),
(9, 'Upper East'),
(10, 'Upper West');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_acct`
--

CREATE TABLE `tbl_user_acct` (
  `user_id` int(11) NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_acct`
--

INSERT INTO `tbl_user_acct` (`user_id`, `member_id`, `full_name`, `username`, `password`, `role`) VALUES
(1, 1234567890, 'admin', 'admin', 'admin', 'admin'),
(11, 1634831355, 'Andrew Quaye', 'andyq@yoo.com', 'pass', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_person_data`
--
ALTER TABLE `tbl_person_data`
  ADD PRIMARY KEY (`person_id`);

--
-- Indexes for table `tbl_region`
--
ALTER TABLE `tbl_region`
  ADD PRIMARY KEY (`region_id`);

--
-- Indexes for table `tbl_user_acct`
--
ALTER TABLE `tbl_user_acct`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_person_data`
--
ALTER TABLE `tbl_person_data`
  MODIFY `person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_region`
--
ALTER TABLE `tbl_region`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_user_acct`
--
ALTER TABLE `tbl_user_acct`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
