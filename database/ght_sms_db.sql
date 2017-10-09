-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2017 at 05:26 PM
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(7, 14, '226-b', 'Talaba I', 'Bacoor City', 'Cavity');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(7, 14, 'Marissa Tomei', '0955-887-4822', 'Mother');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(7, 14, 'Marissa Tomei', '0955-887-4822', 'Tom Cruise', '0955-887-4822');

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
(7, 14, 'Hakeem', 'Andaya', 'Polistico', 'Male', '0955-887-4822', '1994-07-22', 'Mandaluyong City', 23, 'Filipino', 'Roman Catholic', b'0', '2017-10-01 23:03:03', '2017-10-01 23:03:03');

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
-- Table structure for table `tbl_inv_products`
--

CREATE TABLE `tbl_inv_products` (
  `ipr_id` int(11) NOT NULL,
  `product_code` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `product_status` enum('Active','Inactive') COLLATE utf8_unicode_ci NOT NULL,
  `product_amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_inv_products`
--

INSERT INTO `tbl_inv_products` (`ipr_id`, `product_code`, `product_name`, `product_desc`, `product_status`, `product_amount`) VALUES
(1, 123, 'prod', 'desc', 'Active', 12),
(2, 113, 'wala', 'ako', 'Inactive', 12),
(3, 980, 'shit', 'life', 'Inactive', 0),
(4, 991, 'no', 'value', 'Inactive', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inv_stocks`
--

CREATE TABLE `tbl_inv_stocks` (
  `ist_id` int(11) NOT NULL,
  `ist_product_code` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `import_date` timestamp NOT NULL,
  `product_qty_left` int(11) NOT NULL,
  `as_of_date` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inv_stocks`
--

INSERT INTO `tbl_inv_stocks` (`ist_id`, `ist_product_code`, `product_qty`, `import_date`, `product_qty_left`, `as_of_date`) VALUES
(8, 980, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(9, 980, 1, '2017-10-08 09:18:49', 1, '2017-10-08 09:18:49'),
(10, 113, 12, '2017-10-08 09:22:30', 12, '2017-10-08 09:22:30');

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
-- Table structure for table `tbl_sms_modules`
--

CREATE TABLE `tbl_sms_modules` (
  `smo_id` int(10) NOT NULL,
  `module` int(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `tbl_inv_products`
--
ALTER TABLE `tbl_inv_products`
  ADD PRIMARY KEY (`ipr_id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Indexes for table `tbl_inv_stocks`
--
ALTER TABLE `tbl_inv_stocks`
  ADD PRIMARY KEY (`ist_id`),
  ADD KEY `ist_product_code` (`ist_product_code`);

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
-- Indexes for table `tbl_sms_modules`
--
ALTER TABLE `tbl_sms_modules`
  ADD PRIMARY KEY (`smo_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `guardians`
--
ALTER TABLE `guardians`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `students_info`
--
ALTER TABLE `students_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_inv_attachments`
--
ALTER TABLE `tbl_inv_attachments`
  MODIFY `wat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_inv_products`
--
ALTER TABLE `tbl_inv_products`
  MODIFY `ipr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_inv_stocks`
--
ALTER TABLE `tbl_inv_stocks`
  MODIFY `ist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
-- AUTO_INCREMENT for table `tbl_sms_modules`
--
ALTER TABLE `tbl_sms_modules`
  MODIFY `smo_id` int(10) NOT NULL AUTO_INCREMENT;
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
-- Constraints for table `tbl_inv_stocks`
--
ALTER TABLE `tbl_inv_stocks`
  ADD CONSTRAINT `tbl_inv_stocks_ibfk_1` FOREIGN KEY (`ist_product_code`) REFERENCES `tbl_inv_products` (`product_code`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
