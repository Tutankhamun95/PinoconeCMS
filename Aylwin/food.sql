-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2018 at 12:42 PM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_item`
--

CREATE TABLE IF NOT EXISTS `food_item` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `deleted` int(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_item`
--

INSERT INTO `food_item` (`id`, `name`, `description`, `price`, `deleted`) VALUES
(1, 'Laksa', 'The taste of Sarawak', 0, 0),
(2, 'Kolo Mee', 'The Taste of Kuching', 0, 0),
(3, 'kueh tiaw', 'sfdbgb', 0, 0),
(4, 'Nasi Lemak', '2RM', 0, 0),
(5, 'Magi Goreng', '3RM', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(2) NOT NULL,
  `food_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `food_id`) VALUES
(17, 3),
(18, 4),
(18, 5);

-- --------------------------------------------------------

--
-- Table structure for table `menu_item`
--

CREATE TABLE IF NOT EXISTS `menu_item` (
  `menu_id` int(2) NOT NULL,
  `menu_name` char(255) CHARACTER SET utf8 NOT NULL,
  `menu_description` text NOT NULL,
  `menu_image` varchar(255) NOT NULL,
  `menu_price` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_item`
--

INSERT INTO `menu_item` (`menu_id`, `menu_name`, `menu_description`, `menu_image`, `menu_price`) VALUES
(17, 'western', 'dfvfgfg', '', 0),
(18, 'Malay Food', 'All Malaysian Food', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food_item`
--
ALTER TABLE `food_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`,`food_id`),
  ADD KEY `food_id` (`food_id`);

--
-- Indexes for table `menu_item`
--
ALTER TABLE `menu_item`
  ADD PRIMARY KEY (`menu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food_item`
--
ALTER TABLE `food_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `menu_item`
--
ALTER TABLE `menu_item`
  MODIFY `menu_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu_item` (`menu_id`),
  ADD CONSTRAINT `menu_ibfk_2` FOREIGN KEY (`food_id`) REFERENCES `food_item` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
