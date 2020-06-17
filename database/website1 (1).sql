-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2020 at 03:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website1`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `doctors_name` varchar(40) NOT NULL,
  `patients_name` varchar(40) NOT NULL,
  `patients_username` varchar(40) NOT NULL,
  `date1` varchar(40) NOT NULL,
  `timming` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL DEFAULT 'underr process'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doctors_name`, `patients_name`, `patients_username`, `date1`, `timming`, `status`) VALUES
(75, 'AADHAR', 'TUSHAR', 'tushar2001', '30-04-2020', '2pm-3pm', 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `blood-donation`
--

CREATE TABLE `blood-donation` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `blood_group` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `date` varchar(40) NOT NULL,
  `time` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood-donation`
--

INSERT INTO `blood-donation` (`id`, `name`, `blood_group`, `address`, `phone`, `email`, `date`, `time`) VALUES
(1, 'TUSHAR', 'O+', 'CHAS', '44535', 'TUSHARKARLE', '27-03-20', '07-57-43'),
(2, 'EWRTGDH', 'B+', 'DGHFH', '564535', 'HDSGH', '27-03-20', '07-59-44'),
(3, 'EWRTGDH', 'B+', 'DGHFH', '564535', 'HDSGH', '27-03-20', '08-00-31'),
(4, 'nhkj', 'O+', 'kokl.', '876868', 'utkgk', '27-03-20', '04-33-17'),
(5, 'TUSHAR', 'AB+', '763763', '4564646', 'gfhgfhg', '30-03-20', '07-50-39'),
(6, 'TUSHAR', 'A+', 'gdfh', '15654', '456fu', '01-04-20', '11-23-44'),
(7, 'TUSHAR', 'A+', 'gdfh', '15654', '456fu', '01-04-20', '11-23-47'),
(8, 'TUSHARgfj', 'A+', 'gdfh', '15654', '456fu', '01-04-20', '11-23-51'),
(9, 'TUSHARgfjkhvj', 'A+', 'gdfh', '15654', '456fu', '01-04-20', '11-23-56'),
(10, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-05-07'),
(11, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-06-14'),
(12, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-08-01'),
(13, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-09-46'),
(14, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-09-56'),
(15, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-10-21'),
(16, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-10-35'),
(17, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-10-46'),
(18, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-11-03'),
(19, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-11-47'),
(20, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-12-14'),
(21, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-12-42'),
(22, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-13-02'),
(23, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-13-14'),
(24, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-13-28'),
(25, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-13-39'),
(26, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-13-46'),
(27, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-13-55'),
(28, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-14-47'),
(29, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-15-17'),
(30, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-15-30'),
(31, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-15-45'),
(32, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-16-23'),
(33, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-16-36'),
(34, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-16-58'),
(35, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-17-13'),
(36, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-38-47'),
(37, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-39-09'),
(38, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-40-06'),
(39, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-40-36'),
(40, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '01-41-07'),
(41, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '02-20-30'),
(42, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '02-20-52'),
(43, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '02-22-06'),
(44, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '02-22-37'),
(45, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '02-22-54'),
(46, 'TUSHAR', 'AB-', '144', '54578', 'fkdsf', '01-04-20', '02-23-19'),
(47, 'TUSHAR', 'AB+', 'DGHFH', '44535', 'tushar@gmail.com', '01-04-20', '02-25-45'),
(48, 'TUSHAR', 'AB+', 'DGHFH', '44535', 'tushar@gmail.com', '01-04-20', '02-27-49'),
(49, 'TUSHAR', 'AB+', 'DGHFH', '44535', 'tushar@gmail.com', '01-04-20', '02-28-03'),
(50, 'TUSHAR', 'AB+', 'DGHFH', '44535', 'tushar@gmail.com', '01-04-20', '02-28-14'),
(51, 'TUSHAR', 'B-', 'DFDSG', '44535', 'tushar@gmail.com', '01-04-20', '02-28-38'),
(52, 'TUSHAR', 'B-', 'DFDSG', '44535', 'tushar@gmail.com', '01-04-20', '02-28-48'),
(53, 'TUSHAR', 'B-', 'DFDSG', '44535', 'tushar@gmail.com', '01-04-20', '02-29-25'),
(54, 'TUSHAR', 'O+', 'chas', '7040067813', 'tushar@gmail.com', '02-04-20', '06-47-01'),
(55, 'TUSHAR', 'AB+', 'DGHFH', '44535', 'DFG@gmail.com', '02-04-20', '02-50-56'),
(56, 'TUSHAR', 'AB+', 'DGHFH', '44535', 'DFG@gmail.com', '02/Apr/2020', '02-52-52'),
(57, 'TUSHAR', 'B-', 'DFDSG', '44535', 'DFG@gmail.com', '02/Apr/2020', '02:56:49pm'),
(58, 'TUSHARvfbcvn', 'AB+', 'DFDSG', '44535', 'tushar2001@gmail.com', '02/Apr/2020', '02:57:34pm');

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE `emergency` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `current_facing_issue` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` varchar(40) NOT NULL,
  `time` varchar(40) NOT NULL,
  `hospital` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`id`, `patient_name`, `current_facing_issue`, `phone`, `address`, `date`, `time`, `hospital`) VALUES
(8, 'tushar', 'alkflsd', '44535', '', '0000-00-00 00:00:00', '0', 'rushi'),
(9, 'tushar1', '1', '1', '', '0000-00-00 00:00:00', '0', 'rushi'),
(10, 'tushar2', '2', '2', '', '0000-00-00 00:00:00', '0', 'rushi'),
(17, 'DHFG', 'alkflsd', '44535', '', '25-03-20', '06-54-17', 'rushi'),
(19, 'TUSHAR', 'ACIDIT', '34354', '', '30-03-20', '07-49-18', 'AADHAR'),
(29, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '02-41-36', 'AADHAR'),
(30, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '02-41-49', 'AADHAR'),
(31, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '02-41-58', 'AADHAR'),
(32, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '02-44-30', 'AADHAR'),
(33, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '03-15-29', 'AADHAR'),
(34, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '03-15-47', 'AADHAR'),
(35, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '03-16-05', 'AADHAR'),
(36, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '04-24-43', 'AADHAR'),
(37, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '04-26-55', 'AADHAR'),
(38, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '04-27-20', 'AADHAR'),
(39, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '04-27-30', 'AADHAR'),
(40, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '04-27-38', 'AADHAR'),
(41, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '04-27-53', 'AADHAR'),
(42, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '04-28-04', 'AADHAR'),
(43, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '04-28-20', 'AADHAR'),
(44, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '04-28-37', 'AADHAR'),
(45, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '04-28-51', 'AADHAR'),
(46, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '04-29-01', 'AADHAR'),
(47, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '04-29-16', 'AADHAR'),
(48, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '04-29-27', 'AADHAR'),
(49, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '04-29-38', 'AADHAR'),
(50, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '04-29-54', 'AADHAR'),
(51, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '04-30-03', 'AADHAR'),
(52, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '04-30-18', 'AADHAR'),
(53, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '04-31-24', 'AADHAR'),
(54, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '04-31-40', 'AADHAR'),
(55, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '04-31-58', 'AADHAR'),
(56, 'DFGFH', 'alkflsd', '44535', '', '01-04-20', '04-32-33', 'AADHAR'),
(66, 'DFGFH', 'alkflsd', '44535', 'DFDSG', '01-04-20', '04-48-09', 'AADHAR'),
(67, 'DFGFH', '5453', '44535', 'DFDSG', '01-04-20', '04-48-18', 'AADHAR'),
(68, 'DFGFH', 'alkflsd', '44535', 'DFDSG', '01-04-20', '04-48-35', 'AADHAR'),
(69, 'DFGFH', 'alkflsd', '44535', 'DFDSG', '01-04-20', '04-51-24', 'AADHAR'),
(70, 'tushar', 'astama', '1', 'chas', '02-04-20', '06-47-55', 'AADHAR');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `profession` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `name`, `profession`, `username`, `password`) VALUES
(1, 'tushar', 'Patient', 'tushar001', 'chas2001'),
(2, 'dsgfbf', 'Patient', 'db', 'dhgh'),
(3, 'dsgfbf', 'Patient', 'dbghgfh', 'bcbfgh'),
(4, 'dsgfbf', 'Patient', 'tushar001xc', 'sdvxv'),
(7, 'rgfg', 'Doctor', 'gbgfnb', 'dbghj'),
(8, 'rgfg', 'Hospital', 'gbgfnbhjfgk', 'ghd'),
(9, 'AADHAR', 'Hospital', 'ASACH', 'ASACH'),
(10, 'tushar', 'Hospital', 'tushar', 'karle'),
(11, 'suvarna', 'Hospital', 'karle', 'karle'),
(12, '', '', '', ''),
(13, 'rushi', 'Hospital', 'rushi1', 'rushi'),
(14, 'rushi1', 'Hospital', 'rushi2', 'rushi'),
(15, 'tushar', 'Patient', 'tushar1', 'tushar'),
(16, 'TUSHAR', 'Patient', 'tushar2001', 'tushar'),
(17, 'TUSHAR', 'Patient', 'tushar20001', 'tushar'),
(18, 'dfsgfh', 'Hospital', 'egrdjh', 'wgrdh'),
(19, 'EWRTGDH', 'Doctor', 'sdffhgdh', 'gffdh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood-donation`
--
ALTER TABLE `blood-donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emergency`
--
ALTER TABLE `emergency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `blood-donation`
--
ALTER TABLE `blood-donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `emergency`
--
ALTER TABLE `emergency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
