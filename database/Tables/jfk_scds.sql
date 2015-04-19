-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2015 at 03:49 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jfk_scds`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE IF NOT EXISTS `donation` (
`id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `card_num` varchar(45) NOT NULL,
  `expiry_date` date NOT NULL,
  `ccv` varchar(45) NOT NULL,
  `first_name` text NOT NULL,
  `middle_name` text,
  `last_name` text NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone_number` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE IF NOT EXISTS `email` (
`id` int(11) NOT NULL,
  `subject` varchar(45) NOT NULL,
  `content` text NOT NULL,
  `attachment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emailv`
--

CREATE TABLE IF NOT EXISTS `emailv` (
`id` int(11) NOT NULL,
  `subject` varchar(45) NOT NULL,
  `content` text NOT NULL,
  `attachment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emailv`
--

INSERT INTO `emailv` (`id`, `subject`, `content`, `attachment`) VALUES
(1, '231232312', '3123232321323', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
`eventID` int(11) NOT NULL,
  `eventName` varchar(255) NOT NULL,
  `eventDesc` varchar(255) NOT NULL,
  `eventLocation` varchar(255) NOT NULL,
  `eventDate` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventID`, `eventName`, `eventDesc`, `eventLocation`, `eventDate`) VALUES
(1, 'JFK (Joy for Kids) Spend Christmas Time with Children', 'To be Changed', 'San Pedro, Laguna', '2013-05-05'),
(2, 'JFK (Joy for Kids) 20th Birthday Bash', 'To be Changed', 'Sibol, Pasig', '2014-05-05'),
(18, 'APC CAFETERIA JAMMING SESSION!', 'ApC Guest', 'APC', '2015-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(11) NOT NULL,
  `item_type` varchar(45) DEFAULT NULL,
  `price` decimal(3,0) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `items_available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subsciber`
--

CREATE TABLE IF NOT EXISTS `subsciber` (
`id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `subscriber_email` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subsciber`
--

INSERT INTO `subsciber` (`id`, `first_name`, `last_name`, `subscriber_email`) VALUES
(3, 'Renon', 'Dadulla', 'ecdadulla@student.apc.edu.ph');

-- --------------------------------------------------------

--
-- Table structure for table `uploadpicture`
--

CREATE TABLE IF NOT EXISTS `uploadpicture` (
`id` int(11) NOT NULL,
  `events_eventID` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `contact_Number` varchar(45) DEFAULT NULL,
  `usercol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
`id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `volunteer_email` varchar(45) NOT NULL,
  `contact_number1` varchar(11) DEFAULT NULL,
  `contact_number2` varchar(11) DEFAULT NULL,
  `status` enum('Pending','Approved','Rejected') DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `first_name`, `last_name`, `volunteer_email`, `contact_number1`, `contact_number2`, `status`) VALUES
(74, 'Renon', 'Dadulla', 'ecdadulla@student.apc.edu.ph', '', '', 'Approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
 ADD PRIMARY KEY (`id`,`user_id`), ADD KEY `fk_donation_user1_idx` (`user_id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emailv`
--
ALTER TABLE `emailv`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`eventID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subsciber`
--
ALTER TABLE `subsciber`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploadpicture`
--
ALTER TABLE `uploadpicture`
 ADD PRIMARY KEY (`id`,`events_eventID`), ADD KEY `fk_uploadpicture_events_idx` (`events_eventID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `emailv`
--
ALTER TABLE `emailv`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `eventID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subsciber`
--
ALTER TABLE `subsciber`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `uploadpicture`
--
ALTER TABLE `uploadpicture`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=75;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `uploadpicture`
--
ALTER TABLE `uploadpicture`
ADD CONSTRAINT `fk_uploadpicture_events` FOREIGN KEY (`events_eventID`) REFERENCES `events` (`eventID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
