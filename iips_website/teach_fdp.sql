-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2017 at 08:16 AM
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
-- Table structure for table `teach_fdp`
--

CREATE TABLE IF NOT EXISTS `teach_fdp` (
  `Session` varchar(10) NOT NULL,
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `FDP_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Teach_FDP_Programme` varchar(150) NOT NULL,
  `Teach_FDP_month` varchar(20) NOT NULL,
  `Teach_FDP_days` int(11) NOT NULL,
  `Teach_FDP_Organized` varchar(150) NOT NULL,
  `Data_Set` varchar(30) NOT NULL,
  PRIMARY KEY (`FDP_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `teach_fdp`
--

INSERT INTO `teach_fdp` (`Session`, `User_Id`, `Year`, `FDP_ID`, `Teach_FDP_Programme`, `Teach_FDP_month`, `Teach_FDP_days`, `Teach_FDP_Organized`, `Data_Set`) VALUES
('', 'shubham', '2015-2016', 1, 'mca', '6 yrs', 0, 'davv', ''),
('', 'a', '', 2, '', '', 0, '', 'new'),
('', 'a', '', 3, '', '', 0, '', 'updated'),
('', 'a', '', 4, 'HEllo1', '', 0, 'Dello', 'updated'),
('', 'a', '', 5, 'HEllo13', '', 0, 'Dellof', 'updated');
