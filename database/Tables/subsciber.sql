-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2015 at 03:25 AM
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
-- Table structure for table `subsciber`
--

CREATE TABLE IF NOT EXISTS `subsciber` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `subscriber_email` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

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
(12, 'Lois Anne', 'Logronio', 'lloisanne@yahoo.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
