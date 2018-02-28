-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2018 at 03:14 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ght_sms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lr_shs_subjects`
--

CREATE TABLE `tbl_lr_shs_subjects` (
  `lres_id` int(11) NOT NULL,
  `educ_type` varchar(40) NOT NULL,
  `grade_lvl` varchar(11) NOT NULL,
  `subject_type` varchar(155) NOT NULL,
  `strand` varchar(155) DEFAULT NULL,
  `subject` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lr_shs_subjects`
--

INSERT INTO `tbl_lr_shs_subjects` (`lres_id`, `educ_type`, `grade_lvl`, `subject_type`, `strand`, `subject`) VALUES
(1, 'Senior High School', 'Grade 11', 'Specialized Subject', 'STEM', 'General Chemistry 1'),
(2, 'Senior High School', 'Grade 12', 'Applied Subject', NULL, 'Entrepreneurship'),
(3, 'Senior High School', 'Grade 11', 'Core Subject', NULL, 'Oral Communication'),
(4, 'Senior High School', 'Grade 11', 'Core Subject', NULL, 'Personal Development'),
(5, 'Senior High School', 'Grade 11', 'Core Subject', NULL, 'Introduction to the Philosophy of the Human Person'),
(6, 'Senior High School', 'Grade 11', 'Core Subject', NULL, 'Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino'),
(7, 'Senior High School', 'Grade 11', 'Core Subject', NULL, 'General Mathematics'),
(8, 'Senior High School', 'Grade 11', 'Core Subject', NULL, 'Earth and Life Science'),
(9, 'Senior High School', 'Grade 11', 'Core Subject', NULL, 'PE and Health 1'),
(10, 'Senior High School', 'Grade 11', 'Specialized Subject', 'HUMSS', 'Philippine Politics and Governance'),
(11, 'Senior High School', 'Grade 11', 'Specialized Subject', 'HUMSS', 'Disciplines and Ideas in the Social Sciences'),
(12, 'Senior High School', 'Grade 11', 'Specialized Subject', 'GAS', 'Elective 1 - General Biology 1'),
(13, 'Senior High School', 'Grade 11', 'Specialized Subject', 'HE', 'Food and Beverages Services 1 and 2'),
(14, 'Senior High School', 'Grade 11', 'Specialized Subject', 'Automotive', 'Automotive Servicing 1 and 2'),
(15, 'Senior High School', 'Grade 11', 'Specialized Subject', 'GAS', 'Organization and Management'),
(16, 'Senior High School', 'Grade 11', 'Specialized Subject', 'ABM', 'Organization and Management'),
(17, 'Senior High School', 'Grade 11', 'Specialized Subject', 'ABM', 'Fundamentals of Accountancy, Business and Management 1'),
(18, 'Senior High School', 'Grade 11', 'Specialized Subject', 'STEM', 'Pre-Calculus'),
(19, 'Senior High School', 'Grade 12', 'Core Subject', NULL, '21st Century Literature from the Philippines and the World'),
(20, 'Senior High School', 'Grade 12', 'Core Subject', NULL, 'PE and Health 3'),
(21, 'Senior High School', 'Grade 12', 'Applied Subject', NULL, 'English for Academic and Professional Purposes'),
(22, 'Senior High School', 'Grade 12', 'Applied Subject', NULL, 'Research Project'),
(23, 'Senior High School', 'Grade 12', 'Applied Subject', NULL, 'Practical Research 1'),
(24, 'Senior High School', 'Grade 12', 'Applied Subject', NULL, 'Empowerment Technologies/ICT'),
(25, 'Senior High School', 'Grade 12', 'Specialized Subject', 'GAS', 'Philippine Politics and Governance'),
(26, 'Senior High School', 'Grade 12', 'Specialized Subject', 'HUMSS', 'Disciplines and Ideas in the Social Sciences'),
(27, 'Senior High School', 'Grade 12', 'Specialized Subject', 'GAS', 'Elective 2 - General Biology 2'),
(28, 'Senior High School', 'Grade 12', 'Specialized Subject', 'HUMSS', 'Trends, Networks and Critical Thinking in the 21st Century'),
(29, 'Senior High School', 'Grade 12', 'Specialized Subject', 'HUMSS', 'Creative Non-Fiction'),
(30, 'Senior High School', 'Grade 12', 'Specialized Subject', 'ABM', 'Business Finance'),
(31, 'Senior High School', 'Grade 12', 'Specialized Subject', 'ABM', 'Fundamentals of Accountancy, Business and Management 2'),
(32, 'Senior High School', 'Grade 12', 'Specialized Subject', 'HE', 'Cookery 1 and 2'),
(33, 'Senior High School', 'Grade 12', 'Specialized Subject', 'Automotive', 'Automotive Servicing 5 and 6'),
(34, 'Senior High School', 'Grade 12', 'Specialized Subject', 'STEM', 'Pre-conservation, Documentation and Examination'),
(35, 'Senior High School', 'Grade 12', 'Specialized Subject', 'STEM', 'Wood Conservation'),
(36, 'Senior High School', 'Grade 12', 'Specialized Subject', 'STEM', 'Conservation of Rare Documents'),
(37, 'Senior High School', '', 'Specialized Subject', 'HUMSS', 'Philippine Politics and Governance');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_lr_shs_subjects`
--
ALTER TABLE `tbl_lr_shs_subjects`
  ADD PRIMARY KEY (`lres_id`),
  ADD KEY `educ_type` (`educ_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_lr_shs_subjects`
--
ALTER TABLE `tbl_lr_shs_subjects`
  MODIFY `lres_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_lr_shs_subjects`
--
ALTER TABLE `tbl_lr_shs_subjects`
  ADD CONSTRAINT `tbl_lr_shs_subjects_ibfk_1` FOREIGN KEY (`educ_type`) REFERENCES `tbl_lr_educ_type` (`educ_type`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
