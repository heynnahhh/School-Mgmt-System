-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2018 at 04:29 PM
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
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(11) NOT NULL,
  `students_info_lrn` int(11) NOT NULL,
  `street` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `students_info_lrn`, `street`, `barangay`, `city`, `province`) VALUES
(1, 11111, '#211 Ph9 Barietto st., Bahayang Pag-asa', 'Brgy. Maharlika', 'Imus', 'Cavite'),
(2, 22222, 'Talaba st.', 'Baranggay Talaba', 'Bacoor', 'Cavite'),
(3, 33333, 'Paco st', 'Barangay Paco', 'Paco city', 'Manila'),
(4, 44444, 'Golden st.', 'Barangay Golden', 'Dasma', 'Cavite'),
(5, 55555, 'Citta st,', 'Barangay Italia', 'Imus', 'Cavite'),
(6, 66666, 'LA street', 'Baranggay LA', 'LA city', 'LA province'),
(7, 14, '226-b', 'Talaba I', 'Bacoor City', 'Cavity'),
(13, 0, 'wqeqweqw', 'qw', 'qweqweq', 'wqeqeqw');

-- --------------------------------------------------------

--
-- Table structure for table `guardians`
--

CREATE TABLE `guardians` (
  `id` int(11) NOT NULL,
  `students_info_lrn` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `relationship` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guardians`
--

INSERT INTO `guardians` (`id`, `students_info_lrn`, `name`, `contact`, `relationship`) VALUES
(1, 11111, 'Gema Mestiola', '09204260692', 'Mother'),
(2, 22222, 'Mother Polistico', 'MotherPoli cont', 'Mother'),
(3, 33333, 'Mother Guzman', 'MotherGuz conta', 'Mother'),
(4, 44444, 'Mother Salva', 'MotherSalva con', 'Mother'),
(5, 55555, 'Roman Ferrer', 'FatherFerrer co', 'Father'),
(6, 66666, 'Father Urie', '092222', 'Father'),
(7, 14, 'Marissa Tomei', '0955-887-4822', 'Mother'),
(13, 0, 'wqeqweqw', '21312312312', 'qweqeq');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int(11) NOT NULL,
  `students_info_lrn` int(11) NOT NULL,
  `mother_name` varchar(70) NOT NULL,
  `mother_contact` varchar(15) NOT NULL,
  `father_name` varchar(70) NOT NULL,
  `father_contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `students_info_lrn`, `mother_name`, `mother_contact`, `father_name`, `father_contact`) VALUES
(1, 11111, 'Gema Mestiola', '09204260692', 'Wilson Escaro', '09179430720'),
(2, 22222, 'Mother Polistico', 'MotherPoli cont', 'Father Polistico', 'FatherPoli cont'),
(3, 33333, 'Mother Guzman', 'MotherGuz conta', 'Father Guzman', 'FatherGuz conta'),
(4, 44444, 'Mother Salva', 'MotherSalva con', 'Father Salva', 'FatherSalva con'),
(5, 55555, 'fukIforgot Ferrer', 'MotherFerrer co', 'Roman Ferrer', 'FatherFerrer co'),
(6, 66666, 'Mother Urie', '0944444', 'Father Urie', '092222'),
(7, 14, 'Marissa Tomei', '0955-887-4822', 'Tom Cruise', '0955-887-4822'),
(13, 0, 'qwewqeqw', '12312312', 'weqweqw', '12312312');

-- --------------------------------------------------------

--
-- Table structure for table `students_info`
--

CREATE TABLE `students_info` (
  `id` int(11) NOT NULL,
  `lrn` int(12) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `birth_date` date NOT NULL,
  `birth_place` varchar(50) NOT NULL,
  `age` int(2) NOT NULL,
  `mother_tongue` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `online_applicant` bit(1) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_info`
--

INSERT INTO `students_info` (`id`, `lrn`, `first_name`, `middle_name`, `last_name`, `sex`, `contact_number`, `birth_date`, `birth_place`, `age`, `mother_tongue`, `religion`, `online_applicant`, `date_registered`, `date_modified`) VALUES
(1, 11111, 'Adrielle Kristine Nicolette', 'Mestiola', 'Escaro', 'Female', '09355156653', '1998-06-24', 'Quezon City', 19, 'Tagalog', 'Catholic', b'0', '2017-09-19 17:17:57', '2017-09-19 17:17:57'),
(2, 22222, 'Hakeem', 'Joshua', 'Polistico', 'Male', '09558874822', '1995-07-22', 'Hospital Bed', 22, 'Tagalog', 'Catholic', b'0', '2017-09-19 17:29:40', '2017-09-19 17:29:40'),
(3, 33333, 'John', 'Patrick', 'Guzman', 'Male', '09333333333', '2017-09-05', 'Hospital Bed', 0, 'Tagalog', 'Catholic', b'0', '2017-09-19 17:32:58', '2017-09-19 17:32:58'),
(4, 44444, 'Jasver', 'Anlouis', 'Salva', 'Female', '09444444444', '2017-09-22', 'Hospital Bed', 0, 'Tagalog', 'Catholic', b'0', '2017-09-19 17:35:08', '2017-09-19 17:35:08'),
(5, 55555, 'Journacel', 'Urgel', 'Ferrer', 'Female', '09555555555', '1997-10-10', 'Hospital Bed', 19, 'Tagalog', 'Catholic', b'0', '2017-09-19 17:37:59', '2017-09-19 17:37:59'),
(6, 66666, 'Brendon', 'Pogi', 'Urie', 'Male', '09666666666', '1998-07-29', 'Los Angeles', 19, 'English', 'no one knows', b'0', '2017-10-01 19:16:21', '2017-10-01 19:16:21'),
(7, 14, 'Hakeem', 'Andaya', 'Polistico', 'Male', '0955-887-4822', '1994-07-22', 'Mandaluyong City', 23, 'Filipino', 'Roman Catholic', b'0', '2017-10-01 23:03:03', '2017-10-01 23:03:03'),
(8, 13123, 'ewqe', 'ewqe', 'wqeqwe', 'Male', '123123', '2016-11-30', 'wqeqwe', 112, 'wqeqwewq', 'ewqeqw', b'1', '2017-10-12 04:50:13', '2017-10-12 04:50:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inv_attachments`
--

CREATE TABLE `tbl_inv_attachments` (
  `wat_id` int(10) NOT NULL,
  `file_name` varchar(155) NOT NULL,
  `file_path` varchar(155) NOT NULL,
  `full_path` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inv_attachments`
--

INSERT INTO `tbl_inv_attachments` (`wat_id`, `file_name`, `file_path`, `full_path`) VALUES
(1, 'asd.txt', 'C:/wamp64/www/School-Mgmt-System/uploads/news/', 'C:/wamp64/www/School-Mgmt-System/uploads/news/asd.txt');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inv_departments`
--

CREATE TABLE `tbl_inv_departments` (
  `ide_id` int(11) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inv_departments`
--

INSERT INTO `tbl_inv_departments` (`ide_id`, `department`) VALUES
(1, 'SHS'),
(2, 'English'),
(3, 'Math'),
(4, 'Science'),
(5, 'Filipino');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inv_items`
--

CREATE TABLE `tbl_inv_items` (
  `iit_id` int(11) NOT NULL,
  `item_code` int(11) NOT NULL,
  `item_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `item_category` varchar(255) CHARACTER SET latin1 NOT NULL,
  `product_status` enum('Active','Inactive') COLLATE utf8_unicode_ci NOT NULL,
  `unit_cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_inv_items`
--

INSERT INTO `tbl_inv_items` (`iit_id`, `item_code`, `item_name`, `item_desc`, `item_category`, `product_status`, `unit_cost`) VALUES
(7, 1234, 'asdas', 'assadasdsadasdasdasass', 'Common Office Equipment', 'Inactive', 12),
(9, 21212, 'asd', 'asas', 'Common Computer Supplies', 'Inactive', 12),
(10, 1312312, 'qwerqsd', 'pogi aljohn', 'warerwaw', 'Inactive', 123),
(11, 12345, 'ulam', 'burger', 'take me', 'Inactive', 12),
(12, 90831, 'adhlah', 'lkhlhd', 'asdAS', 'Inactive', 12),
(13, 78979, 'hadhpwuy', ';lwaydy', 'adasdwqeqwewq', 'Inactive', 12),
(14, 0, '', '', 'adasdwqeqwewq', 'Inactive', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inv_item_category`
--

CREATE TABLE `tbl_inv_item_category` (
  `iicat_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inv_item_category`
--

INSERT INTO `tbl_inv_item_category` (`iicat_id`, `category`) VALUES
(12, 'adasdwqeqwewq'),
(31, 'angel'),
(19, 'asdAS'),
(20, 'asdasd11'),
(10, 'asdasdas'),
(11, 'asdasdasdassdsadasda'),
(23, 'asdasdq21231242'),
(13, 'asmile'),
(15, 'aweweqw'),
(9, 'cacaacacaca'),
(8, 'cacaca'),
(26, 'coffee'),
(6, 'Common Computer Supplies'),
(1, 'Common Electrical Supplies'),
(4, 'Common Janitorial Supplies'),
(3, 'Common Office Devices'),
(5, 'Common Office Equipment'),
(2, 'Common Office Supplies'),
(7, 'Consumables'),
(21, 'eheheh'),
(36, 'foru'),
(14, 'gege'),
(37, 'getiton'),
(28, 'ghost'),
(27, 'gold'),
(29, 'gottago'),
(39, 'hehe'),
(17, 'hehehehe;lads'),
(33, 'idontwantit'),
(34, 'iwas'),
(25, 'likealovesong'),
(30, 'matchup'),
(16, 'myback'),
(38, 'oho'),
(42, 'premium'),
(41, 'quetsion'),
(43, 'room'),
(40, 'take me'),
(44, 'warerwaw'),
(32, 'whosaid'),
(35, 'worry'),
(22, 'wrwref'),
(18, 'yahayah'),
(24, 'you');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inv_stocks`
--

CREATE TABLE `tbl_inv_stocks` (
  `ist_id` int(11) NOT NULL,
  `stock_no` varchar(11) NOT NULL,
  `ist_item_code` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inv_stocks`
--

INSERT INTO `tbl_inv_stocks` (`ist_id`, `stock_no`, `ist_item_code`, `quantity`) VALUES
(12, 'os-11a', 1234, 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inv_stocks_per_department`
--

CREATE TABLE `tbl_inv_stocks_per_department` (
  `ispd_id` int(11) NOT NULL,
  `ispd_ide_id` int(11) NOT NULL,
  `item_code` int(11) NOT NULL,
  `distributed_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inv_transactions`
--

CREATE TABLE `tbl_inv_transactions` (
  `itr_id` int(11) NOT NULL,
  `receipt_no` int(11) NOT NULL,
  `itr_item_code` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text NOT NULL,
  `unit_cost` decimal(11,0) NOT NULL,
  `total_cost` decimal(11,0) NOT NULL,
  `received_by` varchar(40) NOT NULL,
  `received_fr` varchar(40) NOT NULL,
  `date_received` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inv_transactions`
--

INSERT INTO `tbl_inv_transactions` (`itr_id`, `receipt_no`, `itr_item_code`, `quantity`, `description`, `unit_cost`, `total_cost`, `received_by`, `received_fr`, `date_received`) VALUES
(1, 654, 1234, 87, 'JHG', '786', '876', 'HJG', 'GH', '2018-02-22'),
(2, 9867, 1234, 9867, 'kjgh', '876', '876', 'lkgj', 'g', '0000-00-00'),
(3, 876, 1234, 876, 'jhg', '876', '876', 'jhg', 'jhg', '2018-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inv_users`
--

CREATE TABLE `tbl_inv_users` (
  `ius_id` int(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `ius_sus_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lrmds_users`
--

CREATE TABLE `tbl_lrmds_users` (
  `lus_id` int(10) NOT NULL,
  `full_name` int(255) NOT NULL,
  `email` int(150) NOT NULL,
  `password` int(255) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lr_attachments`
--

CREATE TABLE `tbl_lr_attachments` (
  `lup_id` int(11) NOT NULL,
  `file_name` varchar(155) NOT NULL,
  `file_path` varchar(155) NOT NULL,
  `full_path_url` varchar(155) NOT NULL,
  `file_type` varchar(40) NOT NULL,
  `file_size` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lr_attachments_info`
--

CREATE TABLE `tbl_lr_attachments_info` (
  `latin_id` int(11) NOT NULL,
  `lr_code` varchar(11) NOT NULL,
  `lr_name` varchar(155) NOT NULL,
  `description` text NOT NULL,
  `objective` text NOT NULL,
  `learning_subj` varchar(155) NOT NULL,
  `language` varchar(40) NOT NULL,
  `date_published` date NOT NULL,
  `copyright` enum('yes','no') NOT NULL,
  `copyright_owner` varchar(40) NOT NULL,
  `educ_type` enum('Senior High School','Junior High School') NOT NULL,
  `grade_level` enum('Grade 7','Grade 8','Grade 9','Grade 10','Grade 11','Grade 12') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lr_subjects`
--

CREATE TABLE `tbl_lr_subjects` (
  `lsu_id` int(11) NOT NULL,
  `subject_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lr_subjects`
--

INSERT INTO `tbl_lr_subjects` (`lsu_id`, `subject_name`) VALUES
(2, 'Engliish'),
(1, 'Mathematics');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lr_topics`
--

CREATE TABLE `tbl_lr_topics` (
  `subject` int(11) NOT NULL,
  `topic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lr_users_account`
--

CREATE TABLE `tbl_lr_users_account` (
  `lusa_lus_id` int(11) NOT NULL,
  `email` varchar(155) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `status` varchar(11) NOT NULL,
  `account_type` enum('Member','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lr_users_activity`
--

CREATE TABLE `tbl_lr_users_activity` (
  `luac_id` int(11) NOT NULL,
  `activity` text NOT NULL,
  `date_of_activity` date NOT NULL,
  `time_of_activity` time NOT NULL,
  `logged_in_session` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lr_users_history`
--

CREATE TABLE `tbl_lr_users_history` (
  `lush_lus_id` int(11) NOT NULL,
  `logged_in_session` datetime NOT NULL,
  `logged_out_session` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lr_users_profile`
--

CREATE TABLE `tbl_lr_users_profile` (
  `lus_id` int(11) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `middle_name` varchar(40) NOT NULL,
  `address` text NOT NULL,
  `barangay` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `contact_no` int(11) NOT NULL,
  `position` varchar(40) NOT NULL,
  `area_of_expertise` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_md_employee_info`
--

CREATE TABLE `tbl_md_employee_info` (
  `mdei_id` int(11) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `middle_name` varchar(40) NOT NULL,
  `department` varchar(40) NOT NULL,
  `age` int(3) NOT NULL,
  `birthdate` date NOT NULL,
  `contact_no` int(11) NOT NULL,
  `contact_person` varchar(155) NOT NULL,
  `relationship` varchar(40) NOT NULL,
  `address` text NOT NULL,
  `contact_person_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_md_grade_section`
--

CREATE TABLE `tbl_md_grade_section` (
  `grade_lvl` varchar(40) NOT NULL,
  `section` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_md_grade_section`
--

INSERT INTO `tbl_md_grade_section` (`grade_lvl`, `section`) VALUES
('Grade 7', 'Affection'),
('Grade 9', 'Bondonel'),
('Grade 10', 'Confucius'),
('Grade 8', 'Daniel');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_md_student_info`
--

CREATE TABLE `tbl_md_student_info` (
  `mdsp_id` int(11) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `middle_name` varchar(40) NOT NULL,
  `grade_lvl` varchar(40) NOT NULL,
  `section` varchar(40) NOT NULL,
  `age` int(11) NOT NULL,
  `birthdate` date NOT NULL,
  `contact_no` int(11) NOT NULL,
  `mother_name` varchar(155) NOT NULL,
  `mother_contact` int(11) NOT NULL,
  `father_name` varchar(155) NOT NULL,
  `father_contact` int(11) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_md_student_info`
--

INSERT INTO `tbl_md_student_info` (`mdsp_id`, `last_name`, `first_name`, `middle_name`, `grade_lvl`, `section`, `age`, `birthdate`, `contact_no`, `mother_name`, `mother_contact`, `father_name`, `father_contact`, `status`) VALUES
(1, 'over', 'and over ', 'again', 'Grade 8', 'Daniel', 12, '2018-02-07', 123456789, 'hehe', 24546, 'haha', 4564846, 'Inactive'),
(2, 'kjhkj', 'kjhh', 'kjjh', 'Grade 8', 'Daniel', 876, '0000-00-00', 87987, 'kkjh', 987897, 'ghgh', 897987, 'Inactive'),
(3, 'jhjkh', 'kjhkjh', 'kjhkj', 'Grade 7', 'Affection', 87, '2018-02-05', 7897, 'hkjh', 87897, 'kjkjh', 898, 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sms_users`
--

CREATE TABLE `tbl_sms_users` (
  `sus_id` int(10) NOT NULL,
  `first_name` varchar(40) CHARACTER SET latin1 NOT NULL,
  `last_name` varchar(40) CHARACTER SET latin1 NOT NULL,
  `middle_name` varchar(40) CHARACTER SET latin1 NOT NULL,
  `full_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(150) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `status` varchar(10) CHARACTER SET latin1 NOT NULL,
  `privilege` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_sms_users`
--

INSERT INTO `tbl_sms_users` (`sus_id`, `first_name`, `last_name`, `middle_name`, `full_name`, `email`, `password`, `status`, `privilege`) VALUES
(1, 'Aljohn', 'Pangilinan', 'Olazo', 'Aljohn O. Pangilinan', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', '1', 'SMS Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wbs_attachments`
--

CREATE TABLE `tbl_wbs_attachments` (
  `wat_id` int(10) NOT NULL,
  `file_name` varchar(155) NOT NULL,
  `file_path` varchar(155) NOT NULL,
  `full_path` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_wbs_attachments`
--

INSERT INTO `tbl_wbs_attachments` (`wat_id`, `file_name`, `file_path`, `full_path`) VALUES
(1, 'asd.txt', 'C:/wamp64/www/School-Mgmt-System/uploads/news/', 'C:/wamp64/www/School-Mgmt-System/uploads/news/asd.txt'),
(2, 'AljohnPangilinan.docx', 'C:/wamp64/www/School-Mgmt-System/uploads/news/', 'C:/wamp64/www/School-Mgmt-System/uploads/news/AljohnPangilinan.docx'),
(3, 'HannahLiao.docx', 'uploads/news/', 'C:/wamp64/www/School-Mgmt-System/uploads/news/HannahLiao.docx'),
(4, 'HannahLiao.docx', 'uploads/news/', 'C:/wamp64/www/School-Mgmt-System/uploads/news/HannahLiao.docx');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wbs_uploads`
--

CREATE TABLE `tbl_wbs_uploads` (
  `wup_id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `full_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_lrmds_attachments`
--

CREATE TABLE `tb_lrmds_attachments` (
  `lat_id` int(10) NOT NULL,
  `lat_sus_id` int(10) NOT NULL,
  `file_name` int(255) NOT NULL,
  `file_path` int(255) NOT NULL,
  `full_path` int(255) NOT NULL,
  `lat_smo_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guardians`
--
ALTER TABLE `guardians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_info`
--
ALTER TABLE `students_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_inv_attachments`
--
ALTER TABLE `tbl_inv_attachments`
  ADD PRIMARY KEY (`wat_id`);

--
-- Indexes for table `tbl_inv_departments`
--
ALTER TABLE `tbl_inv_departments`
  ADD PRIMARY KEY (`ide_id`),
  ADD KEY `department` (`department`);

--
-- Indexes for table `tbl_inv_items`
--
ALTER TABLE `tbl_inv_items`
  ADD PRIMARY KEY (`iit_id`),
  ADD UNIQUE KEY `item_code` (`item_code`) USING BTREE,
  ADD KEY `item_category` (`item_category`) USING BTREE;

--
-- Indexes for table `tbl_inv_item_category`
--
ALTER TABLE `tbl_inv_item_category`
  ADD PRIMARY KEY (`iicat_id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `tbl_inv_stocks`
--
ALTER TABLE `tbl_inv_stocks`
  ADD PRIMARY KEY (`ist_id`),
  ADD KEY `ist_product_code` (`ist_item_code`);

--
-- Indexes for table `tbl_inv_stocks_per_department`
--
ALTER TABLE `tbl_inv_stocks_per_department`
  ADD PRIMARY KEY (`ispd_id`),
  ADD KEY `ispd_ide_id` (`ispd_ide_id`),
  ADD KEY `item_code` (`item_code`);

--
-- Indexes for table `tbl_inv_transactions`
--
ALTER TABLE `tbl_inv_transactions`
  ADD PRIMARY KEY (`itr_id`),
  ADD KEY `itr_item_code` (`itr_item_code`) USING BTREE;

--
-- Indexes for table `tbl_inv_users`
--
ALTER TABLE `tbl_inv_users`
  ADD PRIMARY KEY (`ius_id`),
  ADD UNIQUE KEY `ius_sus_id` (`ius_sus_id`);

--
-- Indexes for table `tbl_lrmds_users`
--
ALTER TABLE `tbl_lrmds_users`
  ADD PRIMARY KEY (`lus_id`);

--
-- Indexes for table `tbl_lr_attachments`
--
ALTER TABLE `tbl_lr_attachments`
  ADD PRIMARY KEY (`lup_id`);

--
-- Indexes for table `tbl_lr_attachments_info`
--
ALTER TABLE `tbl_lr_attachments_info`
  ADD PRIMARY KEY (`latin_id`),
  ADD UNIQUE KEY `lr_code` (`lr_code`),
  ADD KEY `learning_subj` (`learning_subj`);

--
-- Indexes for table `tbl_lr_subjects`
--
ALTER TABLE `tbl_lr_subjects`
  ADD PRIMARY KEY (`lsu_id`),
  ADD UNIQUE KEY `subject_name` (`subject_name`);

--
-- Indexes for table `tbl_lr_users_account`
--
ALTER TABLE `tbl_lr_users_account`
  ADD UNIQUE KEY `lusa_lus_id` (`lusa_lus_id`);

--
-- Indexes for table `tbl_lr_users_activity`
--
ALTER TABLE `tbl_lr_users_activity`
  ADD PRIMARY KEY (`luac_id`);

--
-- Indexes for table `tbl_lr_users_history`
--
ALTER TABLE `tbl_lr_users_history`
  ADD UNIQUE KEY `lush_lus_id` (`lush_lus_id`);

--
-- Indexes for table `tbl_lr_users_profile`
--
ALTER TABLE `tbl_lr_users_profile`
  ADD PRIMARY KEY (`lus_id`);

--
-- Indexes for table `tbl_md_employee_info`
--
ALTER TABLE `tbl_md_employee_info`
  ADD PRIMARY KEY (`mdei_id`);

--
-- Indexes for table `tbl_md_grade_section`
--
ALTER TABLE `tbl_md_grade_section`
  ADD UNIQUE KEY `section` (`section`);

--
-- Indexes for table `tbl_md_student_info`
--
ALTER TABLE `tbl_md_student_info`
  ADD PRIMARY KEY (`mdsp_id`);

--
-- Indexes for table `tbl_sms_users`
--
ALTER TABLE `tbl_sms_users`
  ADD PRIMARY KEY (`sus_id`);

--
-- Indexes for table `tbl_wbs_attachments`
--
ALTER TABLE `tbl_wbs_attachments`
  ADD PRIMARY KEY (`wat_id`);

--
-- Indexes for table `tbl_wbs_uploads`
--
ALTER TABLE `tbl_wbs_uploads`
  ADD PRIMARY KEY (`wup_id`);

--
-- Indexes for table `tb_lrmds_attachments`
--
ALTER TABLE `tb_lrmds_attachments`
  ADD PRIMARY KEY (`lat_id`),
  ADD UNIQUE KEY `lat_sus_id` (`lat_sus_id`),
  ADD UNIQUE KEY `lat_smo_id` (`lat_smo_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `guardians`
--
ALTER TABLE `guardians`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `students_info`
--
ALTER TABLE `students_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_inv_attachments`
--
ALTER TABLE `tbl_inv_attachments`
  MODIFY `wat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_inv_departments`
--
ALTER TABLE `tbl_inv_departments`
  MODIFY `ide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_inv_items`
--
ALTER TABLE `tbl_inv_items`
  MODIFY `iit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_inv_item_category`
--
ALTER TABLE `tbl_inv_item_category`
  MODIFY `iicat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `tbl_inv_stocks`
--
ALTER TABLE `tbl_inv_stocks`
  MODIFY `ist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_inv_stocks_per_department`
--
ALTER TABLE `tbl_inv_stocks_per_department`
  MODIFY `ispd_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_inv_transactions`
--
ALTER TABLE `tbl_inv_transactions`
  MODIFY `itr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_inv_users`
--
ALTER TABLE `tbl_inv_users`
  MODIFY `ius_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_lrmds_users`
--
ALTER TABLE `tbl_lrmds_users`
  MODIFY `lus_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_lr_attachments`
--
ALTER TABLE `tbl_lr_attachments`
  MODIFY `lup_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_lr_attachments_info`
--
ALTER TABLE `tbl_lr_attachments_info`
  MODIFY `latin_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_lr_subjects`
--
ALTER TABLE `tbl_lr_subjects`
  MODIFY `lsu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_lr_users_activity`
--
ALTER TABLE `tbl_lr_users_activity`
  MODIFY `luac_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_lr_users_profile`
--
ALTER TABLE `tbl_lr_users_profile`
  MODIFY `lus_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_md_employee_info`
--
ALTER TABLE `tbl_md_employee_info`
  MODIFY `mdei_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_md_student_info`
--
ALTER TABLE `tbl_md_student_info`
  MODIFY `mdsp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_sms_users`
--
ALTER TABLE `tbl_sms_users`
  MODIFY `sus_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_wbs_attachments`
--
ALTER TABLE `tbl_wbs_attachments`
  MODIFY `wat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_wbs_uploads`
--
ALTER TABLE `tbl_wbs_uploads`
  MODIFY `wup_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_lrmds_attachments`
--
ALTER TABLE `tb_lrmds_attachments`
  MODIFY `lat_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_inv_items`
--
ALTER TABLE `tbl_inv_items`
  ADD CONSTRAINT `tbl_inv_items_ibfk_1` FOREIGN KEY (`item_category`) REFERENCES `tbl_inv_item_category` (`category`);

--
-- Constraints for table `tbl_lr_attachments_info`
--
ALTER TABLE `tbl_lr_attachments_info`
  ADD CONSTRAINT `tbl_lr_attachments_info_ibfk_1` FOREIGN KEY (`learning_subj`) REFERENCES `tbl_lr_subjects` (`subject_name`);

--
-- Constraints for table `tbl_lr_users_account`
--
ALTER TABLE `tbl_lr_users_account`
  ADD CONSTRAINT `tbl_lr_users_account_ibfk_1` FOREIGN KEY (`lusa_lus_id`) REFERENCES `tbl_lr_users_profile` (`lus_id`);

--
-- Constraints for table `tbl_lr_users_history`
--
ALTER TABLE `tbl_lr_users_history`
  ADD CONSTRAINT `tbl_lr_users_history_ibfk_1` FOREIGN KEY (`lush_lus_id`) REFERENCES `tbl_lr_users_profile` (`lus_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
