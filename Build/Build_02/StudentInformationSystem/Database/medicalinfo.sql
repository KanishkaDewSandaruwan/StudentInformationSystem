-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2020 at 04:57 PM
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
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `trndate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `full_name`, `address`, `phone_number`, `email`, `gender`, `password`, `username`, `trndate`) VALUES
(2, 'Dr. Nalaka Godahewa', 'Kosmulla, Galle', 785878963, 'nala@gmail.com', 'Male', '827ccb0eea8a706c4c34a16891f84e7b', 'nalaka', '2020-11-14'),
(3, 'Dr. Ruwan wijevardana', 'Colombo', 713664578, 'ruwan@gmail.com', 'Male', '827ccb0eea8a706c4c34a16891f84e7b', 'dew', '2020-11-15'),
(6, 'Nalaka', 'galle', 713664071, 'n@gmail.com', 'Male', '827ccb0eea8a706c4c34a16891f84e7b', 'nalaka', '2020-11-17');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `drug_id` int(11) NOT NULL,
  `drug_code` varchar(255) NOT NULL,
  `drugname` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `availability` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`drug_id`, `drug_code`, `drugname`, `description`, `availability`) VALUES
(4, 'pp', 'Penadol', 'Use to Hedek', 'Yes'),
(5, 'aaaa', 'Parasitamol', 'yryrtyeye', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `drug_list`
--

CREATE TABLE `drug_list` (
  `list_id` int(11) NOT NULL,
  `drug1` varchar(255) NOT NULL,
  `drug2` varchar(255) NOT NULL,
  `drug3` varchar(255) NOT NULL,
  `drug4` varchar(255) NOT NULL,
  `drug5` varchar(255) NOT NULL,
  `drug6` varchar(255) NOT NULL,
  `drug7` varchar(255) NOT NULL,
  `drug8` varchar(255) NOT NULL,
  `drug9` varchar(255) NOT NULL,
  `drug10` varchar(255) NOT NULL,
  `treatment_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drug_list`
--

INSERT INTO `drug_list` (`list_id`, `drug1`, `drug2`, `drug3`, `drug4`, `drug5`, `drug6`, `drug7`, `drug8`, `drug9`, `drug10`, `treatment_id`) VALUES
(1, 'cc01.1', 'cc02.1', 'cc01.1', 'cc01.1', 'cc01.1', 'cc01.1', 'cc01.1', 'cc01.1', 'cc01.1', 'cc01.1', '');

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
(3, 'SEU/IS/15/ICT/037', '3', '6', 'kaniya', '2020-11-15 00:00:00'),
(4, 'SEU/IS/15/ICT/035', '2', '9', 'Patta sssds', '2020-11-16 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `medical_officer`
--

CREATE TABLE `medical_officer` (
  `office_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `trndate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_officer`
--

INSERT INTO `medical_officer` (`office_id`, `full_name`, `address`, `phone_number`, `email`, `gender`, `password`, `username`, `trndate`) VALUES
(1, 'Wathsal Sewwandi', 'Mathara', 713664078, 'wathsla1996@gmail.com', 'Female', '827ccb0eea8a706c4c34a16891f84e7b', 'kaniya', '2020-11-14 00:00:00'),
(2, '', '', 0, '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', '0000-00-00 00:00:00'),
(4, 'Wevaldeniya', 'Neluwa', 713664071, 'wevaldeniya@gmail.com', 'Female', '827ccb0eea8a706c4c34a16891f84e7b', 'W', '2020-11-17 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sid` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `regnumber` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `trndate` datetime NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sid`, `full_name`, `phone_number`, `email`, `gender`, `regnumber`, `faculty`, `dob`, `trndate`, `address`) VALUES
(2, 'Avindu Lankshan', '0713664072', 'kanishkadewsandaruwan1@gmail.com', 'Male', 'SEU/IS/15/ICT/035', 'Technology', '1996-09-23', '2020-11-15 00:00:00', 'Banwalgodalla, Kosmulla'),
(3, 'Kanishka Dew Sandaruwan', '0713664071', 'kanishkadewsandaruwan1232@gmail.com', 'Male', 'SEU/IS/15/ICT/037', 'Management & Commerce', '1996-09-23', '2020-11-15 00:00:00', 'Banwalgodalla, Kosmulla'),
(4, 'Thilini Maheshika', '0716636789', 'thili@gmail.com', 'Female', 'SEU/IS/15/ICT/016', 'Technology', '1999-01-10', '2020-11-16 00:00:00', 'Thawalama');

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `std_log_id` int(11) NOT NULL,
  `regnumber` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`std_log_id`, `regnumber`, `password`, `sid`) VALUES
(1, 'SEU/IS/15/ICT/037', '827ccb0eea8a706c4c34a16891f84e7b', '3'),
(2, 'SEU/IS/15/ICT/035', '827ccb0eea8a706c4c34a16891f84e7b', '2');

-- --------------------------------------------------------

--
-- Table structure for table `treat`
--

CREATE TABLE `treat` (
  `treat_id` int(11) NOT NULL,
  `reg_num` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `nb` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL,
  `doc_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treat`
--

INSERT INTO `treat` (`treat_id`, `reg_num`, `description`, `nb`, `trn_date`, `doc_id`) VALUES
(6, 'SEU/IS/15/ICT/037', 'pala pala', 'aaaa pp', '2020-11-15 11:06:46', '3'),
(8, 'SEU/IS/15/ICT/037', 'Patta sssds', 'pp', '2020-11-15 11:11:03', '2'),
(9, 'SEU/IS/15/ICT/035', 'Patta sssds', 'pp', '2020-11-15 11:16:30', '2'),
(11, 'SEU/IS/15/ICT/016', 'fewer', 'pp aaaa', '2020-11-16 11:03:40', 'Kanishka Dew Sandaruwan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`drug_id`);

--
-- Indexes for table `drug_list`
--
ALTER TABLE `drug_list`
  ADD PRIMARY KEY (`list_id`);

--
-- Indexes for table `medical_issue`
--
ALTER TABLE `medical_issue`
  ADD PRIMARY KEY (`medicai_issue_id`);

--
-- Indexes for table `medical_officer`
--
ALTER TABLE `medical_officer`
  ADD PRIMARY KEY (`office_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`std_log_id`);

--
-- Indexes for table `treat`
--
ALTER TABLE `treat`
  ADD PRIMARY KEY (`treat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `drug_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `drug_list`
--
ALTER TABLE `drug_list`
  MODIFY `list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medical_issue`
--
ALTER TABLE `medical_issue`
  MODIFY `medicai_issue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medical_officer`
--
ALTER TABLE `medical_officer`
  MODIFY `office_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_login`
--
ALTER TABLE `student_login`
  MODIFY `std_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `treat`
--
ALTER TABLE `treat`
  MODIFY `treat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
