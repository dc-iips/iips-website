-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2017 at 04:49 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `photo`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image`) VALUES
(1, '5523298_7.jpg'),
(2, '5523298_7.jpg'),
(30, 'Chrysanthemum.jpg'),
(29, 'Chrysanthemum.jpg'),
(28, 'womens-girls-summer-kurti-kurta-with-tights-jeans-collection-2013-new-fashionable-dress-4.jpg'),
(27, '42FA401A-27E0-496E-909C-1822110FD774swetarathore.jpg'),
(26, '5523298_7.jpg'),
(25, '5523298_7.jpg'),
(24, 'ganesha-1.jpg'),
(23, 'Latest-Kurta-Design-for-Women-and-Girls-2016-3.jpg'),
(21, ''),
(22, '42FA401A-27E0-496E-909C-1822110FD774swetarathore.jpg'),
(20, 'Hot-Sale-Summer-Casual-Women-s-Linen-Cotton-Short-Sleeve-Shirt-Blouse-font-b-Latest-b.jpg'),
(31, 'Penguins.jpg'),
(32, 'Lighthouse.jpg');
