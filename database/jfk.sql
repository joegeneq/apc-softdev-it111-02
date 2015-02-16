-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2015 at 04:22 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jfk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `staffID` int(11) NOT NULL,
  `staffName` varchar(45) DEFAULT NULL,
  `staffPosition` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`staffID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE IF NOT EXISTS `donation` (
  `donationNumber` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `cardType` varchar(45) NOT NULL,
  `cardNumber` varchar(45) NOT NULL,
  `cardHoldersName` text NOT NULL,
  `expirationDate` date NOT NULL,
  `issuingBank` text,
  `Users_cus_id` int(11) NOT NULL,
  PRIMARY KEY (`donationNumber`,`Users_cus_id`),
  KEY `fk_Donation_Users1_idx` (`Users_cus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `eventNumber` int(11) NOT NULL,
  `eventName` varchar(45) DEFAULT NULL,
  `eventDescription` varchar(500) DEFAULT NULL,
  `eventDate` date DEFAULT NULL,
  `sponsorEmail` varchar(45) DEFAULT NULL,
  `Users_cus_id` int(11) NOT NULL,
  `Admin_staffID` int(11) NOT NULL,
  PRIMARY KEY (`eventNumber`,`Users_cus_id`),
  KEY `fk_Event_Users1_idx` (`Users_cus_id`),
  KEY `fk_Event_Admin1_idx` (`Admin_staffID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `stockNumber` int(200) NOT NULL AUTO_INCREMENT,
  `itemName` text NOT NULL,
  `price` int(255) NOT NULL,
  `size` varchar(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`stockNumber`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`stockNumber`, `itemName`, `price`, `size`, `color`) VALUES
(1, 'T-shirt L', 250, 'Large', 'White'),
(2, 'T-shirt M', 250, 'Medium', 'White'),
(3, 'T-shirt S', 250, 'Small', 'White'),
(4, 'Cap 1', 150, NULL, NULL),
(5, 'Mug 1', 100, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchasedetails`
--

CREATE TABLE IF NOT EXISTS `purchasedetails` (
  `puchaseNumber` int(11) NOT NULL,
  `cardType` varchar(45) NOT NULL,
  `cardNumber` varchar(45) NOT NULL,
  `cardHoldersName` varchar(45) NOT NULL,
  `expirationDate` date NOT NULL,
  `issuingBank` text,
  `Users_cus_id` int(11) NOT NULL,
  `Users_cus_id1` int(11) NOT NULL,
  PRIMARY KEY (`puchaseNumber`,`Users_cus_id`,`Users_cus_id1`),
  KEY `fk_PurchaseDetails_Users1_idx` (`Users_cus_id1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `cus_id` int(11) NOT NULL,
  `cus_name` text,
  `birthdate` date DEFAULT NULL,
  `contactNumber` varchar(50) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `uname` varchar(45) DEFAULT NULL,
  `pass` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `fk_Donation_Users1` FOREIGN KEY (`Users_cus_id`) REFERENCES `users` (`cus_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `fk_Event_Admin1` FOREIGN KEY (`Admin_staffID`) REFERENCES `admin` (`staffID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Event_Users1` FOREIGN KEY (`Users_cus_id`) REFERENCES `users` (`cus_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `purchasedetails`
--
ALTER TABLE `purchasedetails`
  ADD CONSTRAINT `fk_PurchaseDetails_Users1` FOREIGN KEY (`Users_cus_id1`) REFERENCES `users` (`cus_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
