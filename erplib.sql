-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2024 at 09:04 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erplib`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `enq_id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `mobile` varchar(13) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `state` varchar(40) DEFAULT NULL,
  `comment` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`enq_id`, `name`, `mobile`, `email`, `city`, `state`, `comment`) VALUES
(1, 'aakash yadav', '7206701191', 'aakashyadav8708103040@gmail.com', 'rewari', 'haryana', 'enquiry for java development');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `seatid` int(11) NOT NULL,
  `admission_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`seatid`, `admission_id`) VALUES
(1, 'aak1234010002'),
(2, 'null'),
(3, 'null'),
(4, 'null'),
(5, 'null'),
(6, 'null'),
(7, 'null'),
(8, 'null'),
(9, 'null'),
(10, 'null'),
(11, 'null'),
(12, 'null'),
(13, 'null'),
(14, 'null'),
(15, 'null'),
(16, 'null'),
(17, 'null'),
(18, 'null'),
(19, 'null'),
(20, 'null'),
(21, 'null'),
(22, 'null'),
(23, 'null'),
(24, 'null'),
(25, 'null'),
(26, 'null'),
(27, 'null'),
(28, 'null'),
(29, 'null'),
(30, 'null'),
(31, 'null'),
(32, 'null'),
(33, 'null'),
(34, 'null'),
(35, 'null');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `admission_id` varchar(100) DEFAULT NULL,
  `gsn` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `mobile` varchar(13) DEFAULT NULL,
  `parentmobile` varchar(13) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `state` varchar(40) DEFAULT NULL,
  `pin` varchar(40) DEFAULT NULL,
  `aadhaar` varchar(15) DEFAULT NULL,
  `exam` varchar(30) DEFAULT NULL,
  `profile` varchar(40) DEFAULT NULL,
  `aadhaarfront` varchar(40) DEFAULT NULL,
  `aadhaarback` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`admission_id`, `gsn`, `name`, `mobile`, `parentmobile`, `email`, `street`, `city`, `state`, `pin`, `aadhaar`, `exam`, `profile`, `aadhaarfront`, `aadhaarback`) VALUES
('ash1234010001', 1, 'suyash', '7206809424', '7056709888', 'ashuyaduvanshi720680@gmail.com', 'vill-phideri', 'rewari', 'haryana', '123401', '123456789245', 'ssc', 'ash1234010001.jpg', 'aadhaarfrontash1234010001.jpg', 'aadhaarbackash1234010001.jpg'),
('aak1234010002', 2, 'aakash', '8901164933', '7056709888', 'aakashyadav8708103040@gmail.com', 'vill-phideri', 'rewari', 'haryana', '123401', '123456789245', 'ssc', 'aak1234010002.jpg', 'aadhaarfrontaak1234010002.jpg', 'aadhaarbackaak1234010002.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `subid` int(11) NOT NULL,
  `admission_id` varchar(40) DEFAULT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `feereceiveddate` date NOT NULL,
  `amount` varchar(40) NOT NULL,
  `status` varchar(30) NOT NULL,
  `seat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`subid`, `admission_id`, `startdate`, `enddate`, `feereceiveddate`, `amount`, `status`, `seat`) VALUES
(3, 'aak1234010002', '2024-06-01', '2024-06-25', '2024-06-01', '600', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(40) DEFAULT NULL,
  `userpassword` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `userpassword`) VALUES
('ashu', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`enq_id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`seatid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`gsn`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`subid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `enq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
