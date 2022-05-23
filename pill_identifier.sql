-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 04:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

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
-- Table structure for table `pill_identifier`
--

CREATE TABLE `pill_identifier` (
  `identifier_id` int(10) NOT NULL,
  `pill_imprint` varchar(50) NOT NULL,
  `definition` varchar(555) NOT NULL,
  `color` varchar(200) NOT NULL,
  `shape` varchar(200) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `drug_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pill_identifier`
--

INSERT INTO `pill_identifier` (`identifier_id`, `pill_imprint`, `definition`, `color`, `shape`, `url`, `drug_id`) VALUES
(1, 'M367', 'Pill with imprint M367 is White, Capsule-shape and has been identified as Acetaminophen and Hydrocodone Bitartrate 325 mg / 10 mg. It is supplied by Mallinckrodt Pharmaceuticals. Acetaminophen/hydrocodone is used in the treatment of back pain; pain; cough and belongs to the drug class narcotic analgesic combinations. Risk cannot be ruled out during pregnancy. Acetaminophen/hydrocodone 325 mg / 10 mg is classified as a Schedule 2 controlled substance under the Controlled Substance Act (CSA).Pill with imprint M367 is White, Capsule-shape and has been ', 'white', 'Capsule-shape', 'https://www.drugs.com/images/pills/nlm/675440670.jpg', 5),
(15, 'L484', 'Pill with imprint L484 is White, Capsule-shape and has been identified as Acetaminophen 500mg. It is supplied by Kroger Company. Acetaminophen is used in the treatment of sciatica; muscle pain; pain; eustachian tube dysfunction; fever and belongs to the drug class miscellaneous analgesics. Risk cannot be ruled out during pregnancy. Acetaminophen 500mg is not a controlled substance under the Controlled Substances Act (CSA).', 'White', 'Capsule-shape', 'https://www.drugs.com/images/pills/nlm/493480042.jpg', 4),
(16, '512', 'Pill with imprint 512 is Yellow, Round and has been identified as Meloxicam 7.5 mg. It is supplied by Caraco Pharmaceutical Laboratories. Meloxicam is used in the treatment of osteoarthritis; juvenile rheumatoid arthritis; rheumatoid arthritis; pain and belongs to the drug class Nonsteroidal anti-inflammatory drugs. prior to 30 weeks gestation: Risk cannot be ruled out during pregnancy. starting at 30 weeks gestation: There is positive evidence of human fetal risk during pregnancy. Meloxicam 7.5 mg is not a controlled substance under the Controlled ', 'Yellow', 'Round', 'https://www.drugs.com/images/pills/mmx/t108146f/meloxicam.jpg', 451),
(17, '1 2', 'Pill with imprint 1 2 is Orange, Round and has been identified as Clonazepam 0.5 mg. It is supplied by Accord Healthcare, Inc. Clonazepam is used in the treatment of panic disorder; epilepsy; seizure prevention and belongs to the drug classes benzodiazepine anticonvulsants, benzodiazepines. There is positive evidence of human fetal risk during pregnancy. Clonazepam 0.5 mg is classified as a Schedule 4 controlled substance under the Controlled Substance Act (CSA).', 'Orange', 'Round', 'https://www.drugs.com/images/pills/mmx/t108146f/meloxicam.jpg', 121),
(18, 'Lupin 500', 'Pill with imprint LUPIN 500 is Dark & Light Green, Capsule-shape and has been identified as Cephalexin 500 mg. It is supplied by Lupin Pharmaceuticals, Inc. Cephalexin is used in the treatment of bladder infection; bacterial infection; bacterial endocarditis prevention; bone infection; kidney infections and belongs to the drug class first generation cephalosporins. There is no proven risk in humans during pregnancy. Cephalexin 500 mg is not a controlled substance under the Controlled Substances Act (CSA).', 'Dark & Light Green', 'Capsule-shape', 'https://www.drugs.com/images/pills/nlm/681800122.jpg', 114);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pill_identifier`
--
ALTER TABLE `pill_identifier`
  ADD PRIMARY KEY (`identifier_id`),
  ADD KEY `drug_id` (`drug_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pill_identifier`
--
ALTER TABLE `pill_identifier`
  MODIFY `identifier_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pill_identifier`
--
ALTER TABLE `pill_identifier`
  ADD CONSTRAINT `pill_identifier_ibfk_1` FOREIGN KEY (`drug_id`) REFERENCES `drugs` (`drug_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
