-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2015 at 03:15 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `card_num` varchar(45) NOT NULL,
  `expiry_date` date NOT NULL,
  `ccv` varchar(45) NOT NULL,
  `first_name` text NOT NULL,
  `middle_name` text,
  `last_name` text NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone_number` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`user_id`),
  KEY `fk_donation_user1_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `amount`, `card_num`, `expiry_date`, `ccv`, `first_name`, `middle_name`, `last_name`, `email`, `phone_number`, `user_id`) VALUES
(1, 100, '123590', '0000-00-00', 'sdfsdf324', 'qwerty', 'qwerty', 'qwerty', 'qwerty@yahoo.com', '123456789009', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_type` varchar(45) DEFAULT NULL,
  `price` decimal(3,0) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `items_available` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `item_type`, `price`, `size`, `color`, `items_available`) VALUES
(1, 'Mug', '80', '', 'White', 0),
(2, 'Mug', '80', '', 'Black', 0),
(3, 'Mug', '80', '', 'Sky Blue', 0),
(4, 'Cap', '150', '', 'Black', 0),
(5, 'Cap', '150', '', 'White', 0),
(6, 'Cap', '150', '', 'Sky Blue', 0),
(7, 'T-Shirt', '150', 'Small', 'White', 0),
(8, 'T-Shirt', '150', 'Medium', 'White', 0),
(9, 'T-Shirt', '150', 'Large', 'White', 0),
(10, 'T-Shirt', '150', 'Small', 'Sky Blue', 0),
(11, 'T-Shirt', '150', 'Medium', 'Sky Blue', 0),
(12, 'T-Shirt', '150', 'Large', 'Sky Blue', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subsciber`
--

CREATE TABLE IF NOT EXISTS `subsciber` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `subscriber_email` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `subsciber`
--

INSERT INTO `subsciber` (`id`, `first_name`, `last_name`, `subscriber_email`) VALUES
(1, 'Lois Anne', 'Logronio', 'lglogronio@student.apc.edu.ph'),
(2, 'Katherine Alexandre', 'Mayo', 'kdmayo@student.apc.edu.ph'),
(3, 'Renon Eroll', 'Dadulla', 'redadulla@apc.edu.ph'),
(4, 'Farrah', 'Gonzales', 'farrag@hotmail.com'),
(5, 'Maria Perla', 'Logronio', 'mariap@yahoo.com'),
(6, 'Erika', 'Hidalgo', 'ecchidalgo@student.apc.edu.ph'),
(7, 'Arianne Bianca', 'Papna', 'afpapna@student.apc.edu.ph'),
(8, 'Juli Ann', 'Santiago', 'jasantiago@gmail.com'),
(9, 'Jewel John Allen', 'Nadua', 'kodykwon@gmail.com'),
(10, 'Keemee', 'Gonzales', 'monkeygurl@gmail.com'),
(11, 'Krizia', 'Gonzales', 'Kriziag@rocketmail.com'),
(12, 'Lois Anne', 'Logronio', 'lloisanne@yahoo.com'),
(13, 'LA', 'LA', 'LA@la.com'),
(14, 'Lois', 'Logronio', '5432@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `usercol` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `volunteer_email` varchar(45) NOT NULL,
  `contact_number1` varchar(11) NOT NULL,
  `contact_number2` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `first_name`, `last_name`, `volunteer_email`, `contact_number1`, `contact_number2`) VALUES
(1, 'Princess', 'Ordiales', 'Prio@gmail.com', '2147483647', '2147483647'),
(2, 'Ronald', 'Ayson', 'rayson@gmail.com', '2147483647', '2147483647'),
(3, 'Allan', 'Cotecson', 'allan@apc.edu.ph', '09179037568', '09179037568');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
