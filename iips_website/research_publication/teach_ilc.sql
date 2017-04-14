-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2017 at 03:47 AM
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
-- Table structure for table `teach_ilc`
--

CREATE TABLE IF NOT EXISTS `teach_ilc` (
  `Session` varchar(30) NOT NULL,
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `ILC_ID` int(20) NOT NULL AUTO_INCREMENT,
  `Teach_ILC_TOL` varchar(50) NOT NULL,
  `Teach_ILC_TCS` varchar(50) NOT NULL,
  `Teach_ILC_DOE` date NOT NULL,
  `Teach_ILC_Organized` varchar(50) NOT NULL,
  `Teach_ILC_WINS` varchar(15) NOT NULL,
  `Data_Set` varchar(10) NOT NULL,
  PRIMARY KEY (`ILC_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `teach_ilc`
--

INSERT INTO `teach_ilc` (`Session`, `User_Id`, `Year`, `ILC_ID`, `Teach_ILC_TOL`, `Teach_ILC_TCS`, `Teach_ILC_DOE`, `Teach_ILC_Organized`, `Teach_ILC_WINS`, `Data_Set`) VALUES
('', 'a', '', 23, 'testing', 'test', '2003-03-05', 'iips', 'State', 'new'),
('', 'a', '', 22, 'test', 'test', '2003-03-05', 'iips', 'State', 'updated'),
('', 'a', '', 21, 'TestingUpdatetesting', 'Testing', '2001-02-02', 'At IIPS', 'State/National', 'updated'),
('', 'a', '', 20, 'TestingUpdate', 'Testing', '2001-02-02', 'At IIPS', 'State', 'updated'),
('', 'a', '', 19, 'Testing', 'Testing', '2013-09-09', 'IIOSS', 'National', 'updated');
