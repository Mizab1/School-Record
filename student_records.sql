-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2022 at 07:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_records`
--

-- --------------------------------------------------------

--
-- Table structure for table `disable_table`
--

CREATE TABLE `disable_table` (
  `id` int(100) NOT NULL,
  `roll_no` int(100) NOT NULL,
  `first_name` text NOT NULL,
  `middle_name` text NOT NULL,
  `surname` text NOT NULL,
  `age` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `branch` text NOT NULL,
  `year` text NOT NULL,
  `address` text NOT NULL,
  `state` text NOT NULL,
  `pincode` int(100) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `parent_phone_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disable_table`
--

INSERT INTO `disable_table` (`id`, `roll_no`, `first_name`, `middle_name`, `surname`, `age`, `email`, `branch`, `year`, `address`, `state`, `pincode`, `phone_no`, `parent_phone_no`) VALUES
(3, 3, 'Mayuresh', 'Suresh', 'Gaikwad', 19, 'maus@gmail.com', 'Computer Engineering', 'TY', 'Mumbra', 'Maharastra', 40612, 2147483647, 2147483647),
(14, 12, 'Araf', 'Ashfaque', 'Ansari', 19, 'araf@gmail.com', 'Chemical Engineering', 'TY', 'Thane', 'Maharastra', 421302, 2147483647, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `fee_records`
--

CREATE TABLE `fee_records` (
  `uid` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `today_date` date NOT NULL DEFAULT current_timestamp(),
  `narration` text NOT NULL DEFAULT 'Basic Fees',
  `debit` int(100) NOT NULL DEFAULT 6000,
  `credit` int(100) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fee_records`
--

INSERT INTO `fee_records` (`uid`, `id`, `today_date`, `narration`, `debit`, `credit`) VALUES
(1, 1, '2022-08-24', 'Basic Fees', 6000, 0),
(2, 2, '2022-08-24', 'Basic Fees', 6000, 0),
(3, 3, '2022-08-24', 'Basic Fees', 6000, 0),
(4, 4, '2022-08-24', 'Basic Fees', 6000, 0),
(5, 4, '2022-08-24', 'test', 1000, 0),
(6, 4, '2022-08-24', 'test 2', 0, 2000),
(7, 2, '2022-08-24', 'Basic Fees', 6000, 0),
(8, 6, '2022-08-24', 'Basic Fees', 6000, 0),
(9, 6, '2022-08-24', 'Late submission of book', 1000, 0),
(10, 6, '2022-08-24', 'Fees for last semester', 0, 5000),
(11, 2, '2022-08-24', 'Basic Fees', 6000, 0),
(12, 2, '2022-08-24', 'Basic Fees', 6000, 0),
(13, 2, '2022-08-24', 'Basic Fees', 6000, 0),
(14, 10, '2022-08-24', 'Basic Fees', 6000, 0),
(15, 11, '2022-08-24', 'Basic Fees', 6000, 0),
(16, 12, '2022-08-24', 'Basic Fees', 6000, 0),
(17, 13, '2022-08-25', 'Basic Fees', 6000, 0),
(18, 13, '2022-08-25', 'Late submission of Book', 1000, 0),
(19, 13, '2022-08-25', 'Last Semester Fees', 0, 5000),
(20, 14, '2022-09-10', 'Basic Fees', 6000, 0),
(21, 14, '2022-09-10', 'Final Year fee', 60000, 0),
(22, 14, '2022-09-10', 'Final year fee 1/2', 0, 30000),
(23, 15, '2022-09-24', 'Basic Fees', 6000, 0),
(24, 15, '2022-09-24', '3rd Sem fees', 45000, 0),
(25, 15, '2022-09-24', 'Paid 3rd sem fees', 0, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(100) NOT NULL,
  `login_email` varchar(100) NOT NULL,
  `login_username` varchar(100) NOT NULL,
  `login_password` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `login_email`, `login_username`, `login_password`, `img`) VALUES
(6, 'mizab@gmail.com', 'Mizab', 'mizab123', '../../img/6307ab177b6c86307ab177b6ca.png');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(100) NOT NULL,
  `roll_no` int(100) NOT NULL,
  `first_name` text NOT NULL,
  `middle_name` text NOT NULL,
  `surname` text NOT NULL,
  `age` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `branch` text NOT NULL,
  `year` text NOT NULL,
  `address` text NOT NULL,
  `state` text NOT NULL,
  `pincode` int(100) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `parent_phone_no` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `roll_no`, `first_name`, `middle_name`, `surname`, `age`, `email`, `branch`, `year`, `address`, `state`, `pincode`, `phone_no`, `parent_phone_no`) VALUES
(2, 1, 'Mizab', 'Mansoor', 'Ansari', '19', 'mizab@gmail.com', 'Computer Engineering', 'TY', 'Diva', 'Maharastra', 400612, 2147483647, 2147483647),
(6, 4, 'Khurshid', 'Abdul', 'Khan', '19', 'rk@gmail.com', 'Computer Engineering', 'TY', 'Mumbra', 'Maharastra', 400511, 2147483647, 2147483647),
(11, 10, 'Mayuresh', 'Suresh', 'Gaikwad', '19', 'maus@gmail.com', 'Computer Engineering', 'TY', 'Mumbra', 'Maharastra', 400612, 9876876857, 9877567856),
(12, 3, 'Advaitya', 'Ramesh', 'Jadav', '18', 'ad@gmail.com', 'Computer Engineering', 'TY', 'Kalwa', 'Maharastra', 469123, 9867458745, 9876896787),
(13, 19, 'Abdul Rehmaan', 'Khalid', 'Azmi', '19', 'maaz@gmail.com', 'Computer Engineering', 'TY', 'Thane', 'Maharastra', 400644, 2147483647, 2147483647),
(15, 5, 'Arfat', 'Mushtak', 'Ansari', '18', 'arfat@gmail.com', 'Computer Engineering', 'SY', 'Mumbra', 'Maharastra', 400612, 2147483647, 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disable_table`
--
ALTER TABLE `disable_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_records`
--
ALTER TABLE `fee_records`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disable_table`
--
ALTER TABLE `disable_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `fee_records`
--
ALTER TABLE `fee_records`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
