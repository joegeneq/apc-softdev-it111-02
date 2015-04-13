-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2015 at 03:23 AM
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
