-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2015 at 06:23 AM
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
