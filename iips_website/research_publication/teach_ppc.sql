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
-- Table structure for table `teach_ppc`
--

CREATE TABLE IF NOT EXISTS `teach_ppc` (
  `Session` varchar(30) NOT NULL,
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `PPC_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Teach_PPC_TPP` varchar(50) NOT NULL,
  `Teach_PPC_TCS` varchar(50) NOT NULL,
  `Teach_PPC_DOE` date NOT NULL,
  `Teach_PPC_Organized` varchar(50) NOT NULL,
  `Teach_PPC_WINS` text NOT NULL,
  `Data_Set` varchar(30) NOT NULL,
  PRIMARY KEY (`PPC_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `teach_ppc`
--

INSERT INTO `teach_ppc` (`Session`, `User_Id`, `Year`, `PPC_ID`, `Teach_PPC_TPP`, `Teach_PPC_TCS`, `Teach_PPC_DOE`, `Teach_PPC_Organized`, `Teach_PPC_WINS`, `Data_Set`) VALUES
('', 'a', '', 1, 'TestingManual', 'Selenium', '2001-08-09', 'IIPS', 'National', 'updated'),
('', 'rahul', '', 2, 'hello', 'hiiiiiii', '0000-00-00', 'IIPS', 'State', 'deleted'),
('', 'rahul', '', 3, 'hello1', 'hiiiiiii', '0000-00-00', 'IIPS', 'State', 'updated'),
('', 'rahul', '', 4, 'Automation', 'Testing', '2003-09-01', 'IIPS', 'State', 'updated'),
('', 'rahul', '', 5, 'Development', 'Developer', '2017-08-05', 'IMS', 'NATIONAL', 'updated'),
('', 'rahul', '', 6, 'AutomationSelenium', 'Testing', '2003-09-01', 'IIPS', 'State', 'new'),
('', 'rahul', '', 7, 'AutomationSelenium', 'Testing', '2003-09-01', 'IIPS', 'State', 'deleted'),
('', 'a', '', 8, 'HEllo', 'hello', '2001-02-02', 'IIPS', 'State', 'updated'),
('', 'a', '', 9, 'Testing', 'Testing', '2017-04-03', 'IIPS', 'State', 'updated'),
('', 'a', '', 10, 'Testing2', 'Testing', '2017-04-03', 'IIPS', 'State', 'deleted'),
('', 'a', '', 11, 'Testing1', 'Testing', '2017-04-03', 'IIPS', 'State', 'new'),
('', 'a', '', 12, 'HElloUpade', 'hello', '2001-02-02', 'IIPS', 'International', 'updated'),
('', 'a', '', 13, 'HElloUpadetest', 'hello', '2001-02-02', 'IIPS', 'State', 'new'),
('', 'a', '', 14, 'HElloUpadetest', 'hello', '2001-02-02', 'IIPS', 'State', 'updated'),
('', 'a', '', 15, 'HElloUpadetest', 'hello', '2001-02-02', 'IIPS', 'State', 'deleted'),
('', 'a', '', 16, 'HElloUpadetest', 'hello', '2001-02-02', 'IIPS', 'State', 'deleted'),
('', 'a', '', 17, 'HElloUpadetest', 'hello', '2001-02-02', 'IIPS', 'State', 'deleted'),
('', 'a', '', 18, 'Testingupadte', 'hello', '2001-02-02', 'IIPS', 'national', 'new');
