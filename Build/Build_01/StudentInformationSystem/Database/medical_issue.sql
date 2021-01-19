-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 05:24 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicalinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `medical_issue`
--

CREATE TABLE `medical_issue` (
  `medicai_issue_id` int(11) NOT NULL,
  `reg_num` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `treat_id` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_issue`
--

INSERT INTO `medical_issue` (`medicai_issue_id`, `reg_num`, `doctor`, `treat_id`, `description`, `trn_date`) VALUES
(3, 'SEU/IS/15/ICT/037', '3', '6', 'Painkillers', '2020-11-15 00:00:00'),
(4, 'SEU/IS/15/ICT/035', '2', '9', 'Patta sssds', '2020-11-16 00:00:00'),
(5, 'SEU/IS/15/ICT/016', '5', '11', 'Patta sssds', '2020-11-16 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medical_issue`
--
ALTER TABLE `medical_issue`
  ADD PRIMARY KEY (`medicai_issue_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medical_issue`
--
ALTER TABLE `medical_issue`
  MODIFY `medicai_issue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
