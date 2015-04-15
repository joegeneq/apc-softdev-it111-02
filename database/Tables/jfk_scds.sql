-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2015 at 03:47 PM
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
  `subsciber_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `attachment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
`eventID` int(11) NOT NULL,
  `eventName` varchar(255) NOT NULL,
  `eventDesc` varchar(255) NOT NULL,
  `eventLocation` varchar(255) NOT NULL,
  `eventDate` varchar(255) NOT NULL,
  `eventPictures` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventID`, `eventName`, `eventDesc`, `eventLocation`, `eventDate`, `eventPictures`) VALUES
(1, 'JFK (Joy for Kids) Spend Christmas Time with Children', ' JFK team went to San Pedro, Laguna to have a Christmas gathering with street children to have fun and present them with gifts prepared by the team', 'San Pedro, Laguna ', '05/05/2013', 'gallery/JFK (Joy for Kids) Spend Christmas Time with Children.jpg'),
(2, 'JFK (Joy for Kids) 20th Birthday Bash', 'A 20 year-old girl spending her birthday creating a charity event for students from Sibol, Pasig', 'To Be Announce', '05/05/2014', 'gallery/JFK (Joy for Kids) 20th Birthday Bash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`galleryID` int(11) NOT NULL,
  `galleryName` varchar(255) NOT NULL,
  `galleryDesc` varchar(255) NOT NULL,
  `galleryYear` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subsciber`
--

INSERT INTO `subsciber` (`id`, `first_name`, `last_name`, `subscriber_email`) VALUES
(1, 'Lois Anne', 'Logronio', 'lglogronio@student.apc.edu.ph'),
(2, 'Katherine Alexandre', 'Mayo', 'kdmayo@student.apc.edu.ph'),
(3, 'Renon Eroll', 'Dadulla', 'ecdadulla@student.apc.edu.ph'),
(4, 'Farrah', 'Gonzales', 'farrag@hotmail.com'),
(5, 'Maria Perla', 'Logronio', 'mariap@yahoo.com'),
(6, 'Erika', 'Hidalgo', 'ecchidalgo@student.apc.edu.ph'),
(7, 'Arianne Bianca', 'Papna', 'afpapna@student.apc.edu.ph'),
(8, 'Juli Ann', 'Santiago', 'jasantiago@gmail.com'),
(9, 'Jewel John Allen', 'Nadua', 'kodykwon@gmail.com'),
(10, 'Keemee', 'Gonzales', 'monkeygurl@gmail.com'),
(11, 'Krizia', 'Gonzales', 'Kriziag@rocketmail.com'),
(12, 'Lois Anne', 'Logronio', 'lloisanne@yahoo.com');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `first_name`, `last_name`, `birthdate`, `address`, `contact_Number`, `usercol`) VALUES
(1, 'lglogronio', '3mwI1SH_Gp9yRUiVKPGaOz_KUd9L9hMv', '$2y$13$fQfb2h1I53zBlmmI73hFCuTYKL2byDziz/WBEBAgVQm3J.FsaqTiO', NULL, 'lglogronio@student.apc.edu.ph', 10, 1425718432, 1425718432, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'root', 'Q27ThgkBRwtNVFP5NK_vkWm4pkt9YJSg', '$2y$13$Ubluv1cdvgQsBr9NkyaHF.ZsnWfC/4nI6waILaWut5TAQcxFZIJti', NULL, 'ecdadlla@gmail.com', 10, 1425891971, 1425891971, 'Renon', 'Dadulla', '2015-01-01', 'Blk 4 Lot 18 Ep Village', '09123345678', NULL),
(4, 'lloisanne', 'XH7ZUnk4zU6qspmrM3SFACXSEkSNgLL5', '$2y$13$CsFz1OVUsEJbnRMhnlc6DOH2Kx4kjLyKmf9QduRR8AwfIedZR0a2y', NULL, 'lloisanne@yahoo.com', 10, 1426119427, 1426119427, 'Lois Anne', 'Logronio', '0000-00-00', 'Sangley Point Cavite City', '09441234567', NULL),
(5, 'admin', 'uEqnRjjRAGPqRiiejrW1avXwvqyo9Z1n', '$2y$13$h5a.D/hs.DTe6/YA9caMR.pPvKtxT/lVeFLyI0qpX78wZbJpm6wrq', NULL, 'administrator@admin.com', 10, 1426149296, 1426149296, 'admin', 'istrator', '0000-00-00', 'AFP Housing Taguig City', '09123456789', NULL);

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
  `status` enum('Approved','Rejected') DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `first_name`, `last_name`, `volunteer_email`, `contact_number1`, `contact_number2`, `status`) VALUES
(1, 'Princess', 'Ordiales', 'Prio@gmail.com', '2147483647', '2147483647', 'Rejected'),
(2, 'Ronald', 'Ayson', 'rayson@gmail.com', '2147483647', '2147483647', 'Approved'),
(3, 'Allan', 'Cotecson', 'allan@apc.edu.ph', '09179037568', '09179037568', 'Rejected'),
(8, 'dasdasdasd', 'asdasdasda', 'ecdadlla@gmail.com', '', '', NULL);

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
 ADD PRIMARY KEY (`id`,`subsciber_id`), ADD KEY `fk_email_subsciber_idx` (`subsciber_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`eventID`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`galleryID`);

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `eventID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `galleryID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subsciber`
--
ALTER TABLE `subsciber`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `email`
--
ALTER TABLE `email`
ADD CONSTRAINT `fk_email_subsciber` FOREIGN KEY (`subsciber_id`) REFERENCES `subsciber` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
