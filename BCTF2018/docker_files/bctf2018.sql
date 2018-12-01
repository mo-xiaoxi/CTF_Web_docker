-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 16, 2018 at 02:34 PM
-- Server version: 5.7.23
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bctf2018`
--
drop database if exists `bctf2018`;
create database `bctf2018`;
use bctf2018;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL DEFAULT '',
  `user_pass` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `user_name`, `user_pass`) VALUES
(1, 'admin', 'm0xiaox1_BcTF_p@ss'),
(2, 'moxiaoxi', 'moxiaoxi');

-- --------------------------------------------------------

--
-- Table structure for table `f111111ag`
--

CREATE TABLE `f111111ag` (
  `flllllag` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f111111ag`
--

INSERT INTO `f111111ag` (`flllllag`) VALUES
('bctf{XsS_SQL1_7438x_2xfccmk}');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `message` text,
  `timestamp` timestamp NULL DEFAULT NULL,
  `user_name` text,
  `uid` text,
  `is_checked` int(11) DEFAULT NULL,
  `reply` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `message`, `timestamp`, `user_name`, `uid`, `is_checked`, `reply`) VALUES
(1, 'Hint:\r\nI will tell you a secret path for web2:/admin/m0st_Secret.php! :)', '2018-11-15 12:14:57', 'admin', '8e772b3f10f445cb4338b1050b1ea9c0', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

