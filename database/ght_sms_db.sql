-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2017 at 04:12 PM
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
(1, 'asd.txt', 'C:/wamp64/www/School-Mgmt-System/uploads/news/', 'C:/wamp64/www/School-Mgmt-System/uploads/news/asd.txt');

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
  MODIFY `wat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_lrmds_attachments`
--
ALTER TABLE `tb_lrmds_attachments`
  MODIFY `lat_id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
