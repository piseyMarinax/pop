-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2018 at 06:18 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `client_popdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_menu`
--

CREATE TABLE `table_menu` (
  `mid` int(11) NOT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `mnameen` varchar(50) DEFAULT NULL,
  `murl` varchar(100) DEFAULT NULL,
  `mstatus` int(11) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `mtrash` int(11) NOT NULL DEFAULT '0',
  `created_at` date DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `mpagetypeid` int(11) DEFAULT NULL,
  `mphoto` varchar(100) DEFAULT NULL,
  `mdes` varchar(10000) DEFAULT NULL,
  `mdeskh` varchar(10000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_menu`
--

INSERT INTO `table_menu` (`mid`, `mname`, `mnameen`, `murl`, `mstatus`, `ordering`, `mtrash`, `created_at`, `created_by`, `mpagetypeid`, `mphoto`, `mdes`, `mdeskh`) VALUES
(5, 'រូបភាព', 'Gallery', 'contents/gallaries', 1, 6, 0, '2018-01-20', 26, 1, NULL, '', ''),
(2, 'អំពីយើង', 'About Us', 'aboutus', 1, 2, 0, '2018-01-20', 26, 1, NULL, '', ''),
(3, 'សេវាកម្ម', 'Service', 'service', 1, 3, 0, '2018-01-20', 26, 1, NULL, '', ''),
(4, 'ពត៌មាន', 'News', 'news', 1, 4, 0, '2018-01-20', 26, 1, NULL, '', ''),
(6, 'ផលិតផល', 'Shopping', 'shopping', 1, 7, 0, '2018-01-20', 26, 1, NULL, '', ''),
(11, 'ទំនាក់ទំនង', 'Contact Us', 'contents/contacts', 1, 8, 0, '2018-01-25', 26, 2, NULL, '', ''),
(12, 'ព្រឹត្តិការណ៍', 'Event', 'event', 1, 5, 0, '2018-01-26', 26, 1, NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_loghistory`
--

CREATE TABLE `tb_loghistory` (
  `log_id` int(11) NOT NULL,
  `log_userid` int(11) DEFAULT NULL,
  `log_date` date DEFAULT NULL,
  `log_time` datetime DEFAULT NULL,
  `log_status` int(11) DEFAULT NULL,
  `log_actionscript` varchar(9999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_loghistory`
--

INSERT INTO `tb_loghistory` (`log_id`, `log_userid`, `log_date`, `log_time`, `log_status`, `log_actionscript`) VALUES
(1, 26, '2018-01-25', '2018-01-25 00:44:39', 1, NULL),
(2, 26, '2018-01-25', '2018-01-25 09:28:13', 1, NULL),
(3, 26, '2018-01-25', '2018-01-25 17:43:20', 1, NULL),
(4, 26, '2018-01-26', '2018-01-26 15:39:51', 1, NULL),
(5, 26, '2018-01-30', '2018-01-30 16:11:47', 1, NULL),
(6, 26, '2018-02-05', '2018-02-05 16:31:41', 1, NULL),
(7, 26, '2018-02-05', '2018-02-05 21:05:08', 1, NULL),
(8, 26, '2018-02-06', '2018-02-06 23:27:08', 1, NULL),
(9, 26, '2018-02-07', '2018-02-07 09:17:27', 1, NULL),
(10, 26, '2018-02-07', '2018-02-07 09:20:09', 2, NULL),
(11, 26, '2018-02-07', '2018-02-07 09:20:35', 1, NULL),
(12, 26, '2018-02-07', '2018-02-07 13:44:16', 1, NULL),
(13, 26, '2018-02-07', '2018-02-07 18:41:10', 1, NULL),
(14, 26, '2018-02-10', '2018-02-10 00:12:31', 1, NULL),
(15, 26, '2018-02-11', '2018-02-11 18:37:28', 1, NULL),
(16, 26, '2018-02-11', '2018-02-11 19:35:04', 2, NULL),
(17, 26, '2018-02-11', '2018-02-11 21:55:13', 1, NULL),
(18, 26, '2018-02-14', '2018-02-14 11:30:05', 1, NULL),
(19, 26, '2018-02-27', '2018-02-27 20:11:23', 1, NULL),
(20, 26, '2018-02-27', '2018-02-27 20:42:30', 1, NULL),
(21, 26, '2018-02-27', '2018-02-27 23:36:16', 1, NULL),
(22, 26, '2018-03-30', '2018-03-30 00:02:22', 1, NULL),
(23, 26, '2018-03-30', '2018-03-30 17:27:10', 1, NULL),
(24, 26, '2018-04-18', '2018-04-18 13:15:04', 1, NULL),
(25, 26, '2018-04-22', '2018-04-22 20:50:35', 1, NULL),
(26, 26, '2018-05-13', '2018-05-13 20:53:01', 1, NULL),
(27, 26, '2018-05-13', '2018-05-13 21:54:58', 1, NULL),
(28, 26, '2018-05-14', '2018-05-14 20:26:02', 1, NULL),
(29, 26, '2018-05-15', '2018-05-15 13:32:18', 1, NULL),
(30, 26, '2018-05-15', '2018-05-15 13:33:46', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pagetype`
--

CREATE TABLE `tb_pagetype` (
  `ptid` int(11) NOT NULL,
  `pt_name` varchar(100) DEFAULT NULL,
  `pt_status` int(11) DEFAULT NULL,
  `pt_des` varchar(6000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_pagetype`
--

INSERT INTO `tb_pagetype` (`ptid`, `pt_name`, `pt_status`, `pt_des`) VALUES
(1, 'Default', 1, 'Default Page is image and description (articles controller)'),
(2, 'Define Layout Page', 1, 'Page has been define or different layout ready (content controller)');

-- --------------------------------------------------------

--
-- Table structure for table `tb_spcompanies`
--

CREATE TABLE `tb_spcompanies` (
  `spcid` int(11) NOT NULL,
  `spcordering` varchar(50) DEFAULT '555',
  `spcnamekh` varchar(250) DEFAULT NULL,
  `spcnameen` varchar(100) DEFAULT NULL,
  `spclink` varchar(250) DEFAULT NULL,
  `spclogo` varchar(150) DEFAULT NULL,
  `spcstatus` int(11) DEFAULT '1',
  `spc_sptypeid` int(11) DEFAULT NULL,
  `spcdetail` varchar(500) DEFAULT NULL,
  `spccreated_at` datetime DEFAULT NULL,
  `spccreated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_spcompanies`
--

INSERT INTO `tb_spcompanies` (`spcid`, `spcordering`, `spcnamekh`, `spcnameen`, `spclink`, `spclogo`, `spcstatus`, `spc_sptypeid`, `spcdetail`, `spccreated_at`, `spccreated_by`) VALUES
(8, '2', 'សំអាងការ បុប្ផាសួគ៍', 'BOPHA SOUR', '', '742537bopha.jpg', 1, 1, NULL, '2018-02-07 14:53:26', 26),
(7, '1', 'Great', 'Great', '', '779091great.png', 1, 1, NULL, '2018-02-07 14:51:21', 26),
(9, '3', 'តា ដា ណា', 'TA DA NA', '', '114168tadana.jpg', 1, 1, NULL, '2018-02-07 14:56:13', 26),
(10, '4', 'ហាងឆ្នៃម៉ូតទេពី', 'CHHNAY MODE TEPI SHOP', '', '352302tepi.jpg', 1, 1, NULL, '2018-02-07 14:57:46', 26),
(11, '5', 'យូនីក', 'UNIQUE', '', '535621unique.png', 1, 1, NULL, '2018-02-07 15:00:11', 26),
(12, '99', 'ទទេ', 'BLANK', '', '709062blank.png', 1, 1, NULL, '2018-02-07 15:00:48', 26),
(13, '1', 'វីង', 'Wing', 'www.wingmoney.com', '331967wing.jpg', 1, 2, NULL, '2018-02-11 23:15:02', 26);

-- --------------------------------------------------------

--
-- Table structure for table `tb_types`
--

CREATE TABLE `tb_types` (
  `spid` int(11) NOT NULL,
  `spname` varchar(100) DEFAULT NULL,
  `spstatus` int(11) DEFAULT '1',
  `spcreated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_types`
--

INSERT INTO `tb_types` (`spid`, `spname`, `spstatus`, `spcreated_at`) VALUES
(1, 'Sponsorship', 1, '2018-02-05 16:29:00'),
(2, 'Work With', 1, '2018-02-05 16:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `s_photo` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `log_active` int(11) NOT NULL DEFAULT '0',
  `date_created` date NOT NULL,
  `created_by` varchar(50) CHARACTER SET utf8 NOT NULL,
  `u_trash` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `s_photo`, `name`, `email`, `password`, `log_active`, `date_created`, `created_by`, `u_trash`) VALUES
(26, 'LOGOGROUP.png', 'Admin', 'admin@pit.com', '8054b7b1cb4a22c2a21ff97204b6816686f7fd5575575260fd00ef8787617456', 1, '2017-08-31', '1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_menu`
--
ALTER TABLE `table_menu`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `tb_loghistory`
--
ALTER TABLE `tb_loghistory`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `tb_pagetype`
--
ALTER TABLE `tb_pagetype`
  ADD PRIMARY KEY (`ptid`);

--
-- Indexes for table `tb_spcompanies`
--
ALTER TABLE `tb_spcompanies`
  ADD PRIMARY KEY (`spcid`);

--
-- Indexes for table `tb_types`
--
ALTER TABLE `tb_types`
  ADD PRIMARY KEY (`spid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `username` (`email`),
  ADD KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_menu`
--
ALTER TABLE `table_menu`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_loghistory`
--
ALTER TABLE `tb_loghistory`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tb_pagetype`
--
ALTER TABLE `tb_pagetype`
  MODIFY `ptid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_spcompanies`
--
ALTER TABLE `tb_spcompanies`
  MODIFY `spcid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_types`
--
ALTER TABLE `tb_types`
  MODIFY `spid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
