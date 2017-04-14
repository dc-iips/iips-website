-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2017 at 03:46 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pbas_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `teach_rg`
--

CREATE TABLE IF NOT EXISTS `teach_rg` (
  `Session` varchar(30) NOT NULL,
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(11) NOT NULL,
  `RG_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Teach_RG_NE` varchar(30) NOT NULL,
  `Teach_RG_TS` varchar(50) NOT NULL,
  `Teach_RG_DA` varchar(50) NOT NULL,
  `Data_Set` varchar(30) NOT NULL,
  PRIMARY KEY (`RG_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `teach_rg`
--

INSERT INTO `teach_rg` (`Session`, `User_Id`, `Year`, `RG_ID`, `Teach_RG_NE`, `Teach_RG_TS`, `Teach_RG_DA`, `Data_Set`) VALUES
('', 'a', '', 1, 'Testing', 'TestYes', 'Yes', 'new'),
('', 'a', '', 2, 'Testing1', 'TestYes11', 'Yes1', 'deleted'),
('', 'a', '', 3, 'Testingupdate', 'TestYesudate', 'Yesupdate', 'updated'),
('', 'a', '', 4, 'updatetesting', 'TestYesudated', 'Yesupdated', 'updated'),
('', 'a', '', 5, '123rr', 'Yes', 'No', 'updated'),
('', 'a', '', 6, 'Upadted', 'Yes', 'No', 'new');
