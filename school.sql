-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2024 at 11:22 AM
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
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_sno` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_sno`, `staff_name`, `designation`) VALUES
(1, 'Shri SUSHEEL KUMAR RAGHAV', 'PRINCIPAL'),
(2, 'Shri VIJAY KUMAR SHUKLA', 'VICE PRINCIPAL'),
(3, 'Shri N.K. SHARMA', 'TGT(SS)MATHS'),
(4, 'Shri DAYACHAND', 'TGT(SS) SOCIAL SCIENCE'),
(5, 'Shri J. N. PRASAD', 'TGT(SS) SOCIAL SCIENCE'),
(6, 'Shri U. N. RATH', 'TGT(SS) ENGLISH'),
(7, 'Shri NARENDRA SINGH', 'TGT SS (HIN/SANS)'),
(8, 'Ms NETRICA MANDAR', 'TGT(SS) SCIENCE'),
(9, 'Shri MAHENDRA SINGH DHAKA', 'TGTENG/SST'),
(10, 'Dr ABDUL HANEEF KHAN', 'TGT (PET)'),
(11, 'Ms NIRMALA MEENA', 'TGT(SS) HINDI'),
(12, 'Shri SUNIL KUMAR YADAV', 'TGT SCIENCE'),
(13, 'Ms RANJANA YADAV', 'TGT (PET)'),
(14, 'Ms SHUCHITA SHARMA', 'TGT(SPECIAL EDUCATOR)'),
(15, 'Shri ANMOL VIJAY TOTE', 'TGT ART'),
(16, 'Ms C. B. MEENA', 'TGT MATHEMATICS'),
(17, 'Smt PRAMILA CHATURVEDI', 'PRT (SS)'),
(18, 'Ms POOJA SHARMA', 'PGT (SS) ENGLISH');

-- --------------------------------------------------------

--
-- Table structure for table `touch`
--

CREATE TABLE `touch` (
  `sno` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `touch`
--

INSERT INTO `touch` (`sno`, `name`, `email`, `message`) VALUES
(2, 'JAYA RAJPUT', 'jaya@gmail.com', 'I have one query about admission process'),
(4, 'Palak', 'palak@gmail.com', 'good website');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_firstname` varchar(50) NOT NULL,
  `user_lastname` varchar(50) NOT NULL,
  `user_role` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_role`, `user_email`) VALUES
(1, 'admin', 'admin@12', 'Palak', 'Rajput', 'admin', 'admin12@gmail.com'),
(2, 'jaya', 'jaya@12', 'Jaya', 'rajput', 'admin', 'jaya@gmail.com'),
(4, 'moxs', 'abc@12', 'jisa', 'jixs', 'student', 'mikxs@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_sno`);

--
-- Indexes for table `touch`
--
ALTER TABLE `touch`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `touch`
--
ALTER TABLE `touch`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
