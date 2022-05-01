-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 10:31 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_sbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `drug_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `drug_id` int(10) NOT NULL,
  `generic_name` varchar(200) DEFAULT NULL,
  `brand_name` varchar(200) DEFAULT NULL,
  `dosage_form` varchar(200) DEFAULT NULL,
  `drug_class` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `drug_approval`
--

CREATE TABLE `drug_approval` (
  `approval_id` int(10) NOT NULL,
  `new_drug` varchar(200) NOT NULL,
  `company` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `treatment_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `healthcare_pro`
--

CREATE TABLE `healthcare_pro` (
  `NPI` char(10) NOT NULL,
  `job_title` varchar(200) NOT NULL,
  `job_special` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `ZIP_code` char(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `healthcare_pro`
--

INSERT INTO `healthcare_pro` (`NPI`, `job_title`, `job_special`, `first_name`, `last_name`, `ZIP_code`, `user_id`) VALUES
('211402006', 'Dokter', 'Penyakit Dalam', 'Donny', 'Adithya', '20726', 1),
('211402018', 'Dentist', 'Orthodontis', 'Talitha', 'Syafiyah', '20731', 6),
('211402084', 'Dokter', 'Mata', 'Caesto', 'Marco', '20728', 2),
('211402126', 'Dokter', 'Ahli Bedah', 'Febri', 'Zuladhari', '208394', 4);

-- --------------------------------------------------------

--
-- Table structure for table `medlist`
--

CREATE TABLE `medlist` (
  `medlist_id` int(10) NOT NULL,
  `profile_name` varchar(50) NOT NULL,
  `emergency_contact` varchar(200) DEFAULT NULL,
  `primary_phisician` varchar(200) DEFAULT NULL,
  `other_details` varchar(200) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `NIP` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medlist_details`
--

CREATE TABLE `medlist_details` (
  `detail_id` int(10) NOT NULL,
  `drugs` varchar(255) DEFAULT NULL,
  `condition` varchar(255) DEFAULT NULL,
  `allergy` varchar(255) DEFAULT NULL,
  `medlist_id` int(10) NOT NULL,
  `drug_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pill_identifier`
--

CREATE TABLE `pill_identifier` (
  `identifier_id` int(10) NOT NULL,
  `color` varchar(200) NOT NULL,
  `shape` varchar(200) NOT NULL,
  `drug_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `treatment_id` int(10) NOT NULL,
  `treatment_name` varchar(200) NOT NULL,
  `medication` varchar(200) NOT NULL,
  `drug_used` varchar(200) NOT NULL,
  `drug_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `level` enum('Admin','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `username`, `password`, `age`, `level`) VALUES
(2, 'caesto@gmail.com', 'caesto', 'caesto', 18, 'User'),
(3, 'erli@gmail.com', 'erli', 'erli', 18, 'Admin'),
(4, 'febri@gmail.com', 'febri', 'febri', 18, 'Admin'),
(6, 'talithasyafiyah@gmail.com', 'talitha', 'talitha', 18, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `drug_id` (`drug_id`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`drug_id`);

--
-- Indexes for table `drug_approval`
--
ALTER TABLE `drug_approval`
  ADD PRIMARY KEY (`approval_id`),
  ADD KEY `treatment_id` (`treatment_id`);

--
-- Indexes for table `healthcare_pro`
--
ALTER TABLE `healthcare_pro`
  ADD PRIMARY KEY (`NPI`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `medlist`
--
ALTER TABLE `medlist`
  ADD PRIMARY KEY (`medlist_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `medlist_details`
--
ALTER TABLE `medlist_details`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `medlist_details_ibfk_1` (`medlist_id`),
  ADD KEY `medlist_details_ibfk_2` (`drug_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `pill_identifier`
--
ALTER TABLE `pill_identifier`
  ADD PRIMARY KEY (`identifier_id`),
  ADD KEY `pill_identifier_ibfk_1` (`drug_id`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`treatment_id`),
  ADD KEY `drug_id` (`drug_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `drug_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drug_approval`
--
ALTER TABLE `drug_approval`
  MODIFY `approval_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medlist`
--
ALTER TABLE `medlist`
  MODIFY `medlist_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medlist_details`
--
ALTER TABLE `medlist_details`
  MODIFY `detail_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pill_identifier`
--
ALTER TABLE `pill_identifier`
  MODIFY `identifier_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `treatment_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`drug_id`) REFERENCES `drugs` (`drug_id`) ON UPDATE CASCADE;

--
-- Constraints for table `drug_approval`
--
ALTER TABLE `drug_approval`
  ADD CONSTRAINT `drug_approval_ibfk_1` FOREIGN KEY (`treatment_id`) REFERENCES `treatment` (`treatment_id`) ON UPDATE CASCADE;

--
-- Constraints for table `medlist`
--
ALTER TABLE `medlist`
  ADD CONSTRAINT `medlist_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `medlist_ibfk_2` FOREIGN KEY (`NIP`) REFERENCES `healthcare_pro` (`NPI`) ON UPDATE CASCADE;

--
-- Constraints for table `medlist_details`
--
ALTER TABLE `medlist_details`
  ADD CONSTRAINT `medlist_details_ibfk_1` FOREIGN KEY (`medlist_id`) REFERENCES `medlist` (`medlist_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `medlist_details_ibfk_2` FOREIGN KEY (`drug_id`) REFERENCES `drugs` (`drug_id`) ON UPDATE CASCADE;

--
-- Constraints for table `pill_identifier`
--
ALTER TABLE `pill_identifier`
  ADD CONSTRAINT `pill_identifier_ibfk_1` FOREIGN KEY (`drug_id`) REFERENCES `drugs` (`drug_id`) ON UPDATE CASCADE;

--
-- Constraints for table `treatment`
--
ALTER TABLE `treatment`
  ADD CONSTRAINT `treatment_ibfk_1` FOREIGN KEY (`drug_id`) REFERENCES `drugs` (`drug_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
