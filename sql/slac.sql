-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2015 at 11:13 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slac`
--

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `R_125` int(11) NOT NULL,
  `R_250` int(11) NOT NULL,
  `R_500` int(11) NOT NULL,
  `R_750` int(11) NOT NULL,
  `R_1000` int(11) NOT NULL,
  `R_1500` int(11) NOT NULL,
  `R_2000` int(11) NOT NULL,
  `R_3000` int(11) NOT NULL,
  `R_4000` int(11) NOT NULL,
  `R_6000` int(11) NOT NULL,
  `R_8000` int(11) NOT NULL,
  `L_125` int(11) NOT NULL,
  `L_250` int(11) NOT NULL,
  `L_500` int(11) NOT NULL,
  `L_750` int(11) NOT NULL,
  `L_1000` int(11) NOT NULL,
  `L_1500` int(11) NOT NULL,
  `L_2000` int(11) NOT NULL,
  `L_3000` int(11) NOT NULL,
  `L_4000` int(11) NOT NULL,
  `L_6000` int(11) NOT NULL,
  `L_8000` int(11) NOT NULL,
  `BR_125` int(11) NOT NULL,
  `BR_250` int(11) NOT NULL,
  `BR_500` int(11) NOT NULL,
  `BR_750` int(11) NOT NULL,
  `BR_1000` int(11) NOT NULL,
  `BR_1500` int(11) NOT NULL,
  `BR_2000` int(11) NOT NULL,
  `BR_3000` int(11) NOT NULL,
  `BR_4000` int(11) NOT NULL,
  `BR_6000` int(11) NOT NULL,
  `BR_8000` int(11) NOT NULL,
  `BL_125` int(11) NOT NULL,
  `BL_250` int(11) NOT NULL,
  `BL_500` int(11) NOT NULL,
  `BL_750` int(11) NOT NULL,
  `BL_1000` int(11) NOT NULL,
  `BL_1500` int(11) NOT NULL,
  `BL_2000` int(11) NOT NULL,
  `BL_3000` int(11) NOT NULL,
  `BL_4000` int(11) NOT NULL,
  `BL_6000` int(11) NOT NULL,
  `BL_8000` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;