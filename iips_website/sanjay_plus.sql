-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 22, 2017 at 05:06 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admin_plus`
--

-- --------------------------------------------------------

--
-- Table structure for table `sanjay_plus`
--

CREATE TABLE IF NOT EXISTS `sanjay_plus` (
  `u_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `u_user` varchar(100) DEFAULT NULL,
  `u_pass` varchar(100) DEFAULT NULL,
  `u_access` char(1) NOT NULL DEFAULT '1',
  `u_name` varchar(100) DEFAULT NULL,
  `u_mail` varchar(128) DEFAULT NULL,
  `u_city` varchar(1000) DEFAULT NULL,
  `u_country` varchar(100) DEFAULT NULL,
  `u_imgurl` varchar(100) DEFAULT NULL,
  `u_ondate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Dumping data for table `sanjay_plus`
--

INSERT INTO `sanjay_plus` (`u_id`, `u_user`, `u_pass`, `u_access`, `u_name`, `u_mail`, `u_city`, `u_country`, `u_imgurl`, `u_ondate`) VALUES
(99, 'sanjay', 'openplus106c61744d43403913ef7ff6ce993ca37b75684fe23b2ad33b8599bf2c937e81', '1', 'Sanjay Prasad', 'sonzoy@gmail.com', 'kolkata', 'India', 'sanjay.jpg', '2014-04-21 15:42:13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
