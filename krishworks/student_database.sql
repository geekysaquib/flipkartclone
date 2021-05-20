-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 20, 2021 at 08:23 PM
-- Server version: 5.7.34
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studyeze_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_database`
--

CREATE TABLE `student_database` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email_id` varchar(250) NOT NULL,
  `subject1` decimal(5,2) NOT NULL,
  `subject2` decimal(5,2) NOT NULL,
  `subject3` decimal(5,2) NOT NULL,
  `subject4` decimal(5,2) NOT NULL,
  `subject5` decimal(5,2) NOT NULL,
  `Total_Marks` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_database`
--

INSERT INTO `student_database` (`id`, `name`, `phone`, `email_id`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `Total_Marks`) VALUES
(1, 'Riya Jaiswal', 9584763210, 'riyajaiswal@gmail.com', 90.00, 80.00, 75.00, 85.00, 90.00, 420.00),
(2, 'Akshay Singh', 9584763211, 'akshay@gmail.com', 70.00, 60.00, 75.00, 65.00, 80.00, 350.00),
(3, 'Mohammad Saquib Khan', 8576857691, 'imkhan8467@gmail.com', 80.00, 20.00, 60.00, 75.00, 75.00, 310.00),
(4, 'Mahak Agrawal', 8673678276, 'mahakagrawal@gmail.com', 90.00, 95.00, 80.00, 76.00, 87.00, 428.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_database`
--
ALTER TABLE `student_database`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_database`
--
ALTER TABLE `student_database`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
