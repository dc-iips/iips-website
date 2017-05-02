-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2017 at 08:17 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pbas_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `acad_act`
--

CREATE TABLE IF NOT EXISTS `acad_act` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Gen_Info_AQ` varchar(5) NOT NULL,
  `Gen_Info_Noc` varchar(30) NOT NULL,
  `Gen_Info_Place` varchar(30) NOT NULL,
  `Gen_Info_Duration` varchar(30) NOT NULL,
  `Gen_Info_SA` varchar(30) NOT NULL,
  `Gen_Info_Aqyear` varchar(30) NOT NULL,
  `Gen_Info_ASC` varchar(5) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Gen_Info_Noc`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acad_act`
--

INSERT INTO `acad_act` (`User_Id`, `Year`, `Gen_Info_AQ`, `Gen_Info_Noc`, `Gen_Info_Place`, `Gen_Info_Duration`, `Gen_Info_SA`, `Gen_Info_Aqyear`, `Gen_Info_ASC`) VALUES
('a', '2003', 'no', 'a', 'a', 'a', 'a', '2014', 'yes'),
('ajeet', '', 'no', 'ai', 'Indore', 'gfg', 'gfg', '2013-01-01', 'yes'),
('ajeet', '', 'yes', 'StartUp Engineering', 'Indore', '2 year', 'Stanford', '2013-01-01', 'yes'),
('b', '', 'no', 'b', 'gfgf', 'gfg', 'gfg', '2013-01-01', 'yes'),
('Faculty', '', 'yes', '.NET', 'Indore', '3 Month', 'Internet', '2013', 'yes'),
('Faculty', '', 'yes', 'JAVA', 'Indore', '2 month', 'Online', '2013', 'yes'),
('Faculty', '', 'yes', 'Python', 'Indore', '6 Month', 'Coursera', '2013', 'yes'),
('Faculty', '', 'yes', 'xxxx', 'Indore', '2 month', 'Online', '2013', 'yes'),
('Faculty', '', 'yes', 'zzzzzz', 'Indore', '2 month', 'Online', '2013', 'yes'),
('n', '', 'yes', 'Android', 'Indore', '6 month', 'Google', '2012', 'no'),
('n', '', 'no', 'Data Analysis', 'Khandwa', '30 days', 'gfg', '2013-01-01', 'yes'),
('n', '', 'no', 'PHD', 'Indore', '1 month', 'sassa', '2013-01-01', 'yes'),
('n', '2003', 'no', 'b', 'Khandwa', '30 days', 'gfg', '2013-01-01', 'yes'),
('v', '2003', 'no', 'n', 'gfgf', 'gfg', 'gfg', '2013-01-01', 'yes'),
('shaligram', '2012-13', 'yes', '', '', '', '', '', 'yes'),
('a', '2003-2004', 'yes', 'a', 'a', 'a', 'a', '2003', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `enclosures`
--

CREATE TABLE IF NOT EXISTS `enclosures` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(20) NOT NULL,
  `SNo` int(11) NOT NULL AUTO_INCREMENT,
  `Enclosure` varchar(1000) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`SNo`),
  KEY `SNo` (`SNo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `enclosures`
--

INSERT INTO `enclosures` (`User_Id`, `Year`, `SNo`, `Enclosure`) VALUES
('Faculty', '', 32, 'This Enclosures'),
('n', '', 30, 'Hello'),
('n', '', 31, 'World'),
('n', '2003', 25, 'hfh'),
('a', '', 36, 'saa'),
('a', '', 38, 'as');

-- --------------------------------------------------------

--
-- Table structure for table `gen_info`
--

CREATE TABLE IF NOT EXISTS `gen_info` (
  `User_Id` varchar(30) NOT NULL,
  `Gen_Info_Name` varchar(30) NOT NULL,
  `Gen_Info_Fname` varchar(30) NOT NULL,
  `Gen_Info_Mname` varchar(30) NOT NULL,
  `Gen_Info_DOB` date NOT NULL,
  `Gen_Info_Adhar` int(12) NOT NULL,
  `Gen_Info_PAN` varchar(10) NOT NULL,
  `Gen_Info_Qualification` varchar(20) NOT NULL,
  `Gen_Info_Department` varchar(30) NOT NULL,
  `Gen_Info_Address` varchar(30) NOT NULL,
  `Gen_Info_Mobile` int(10) NOT NULL,
  `Gen_Info_Email` varchar(30) NOT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gen_info`
--

INSERT INTO `gen_info` (`User_Id`, `Gen_Info_Name`, `Gen_Info_Fname`, `Gen_Info_Mname`, `Gen_Info_DOB`, `Gen_Info_Adhar`, `Gen_Info_PAN`, `Gen_Info_Qualification`, `Gen_Info_Department`, `Gen_Info_Address`, `Gen_Info_Mobile`, `Gen_Info_Email`) VALUES
('ajeet', 'asas', 'sasas', 'asas', '0000-00-00', 0, '', '', 'asasas', 'sasaasa', 75757, 'email'),
('Faculty', 'Rahul Sagore', 'Faculty', 'Faculty', '0000-00-00', 0, '', '', 'Internation Institute of Profe', '43/14 Nanak Nagar, Indore', 2147483647, 'rahul.sagore@gmail.com'),
('ic2k9', 'ggfgkgkg', 'k,vkgk', '111111111', '0000-00-00', 0, '', '', 'qkvkvk', '', 0, ''),
('n', 'Nitesh', 'sasa', 'sasa', '0000-00-00', 0, '', '', 'lk', 'asas', 7852457, 'example@gmail.com'),
('v', 'v', 'v', 'v', '0000-00-00', 0, '', '', 'v', 'n', 155445, 'nn'),
('a', 'Swety', 'Swetypaapa', 'swetymumma', '1992-05-11', 2147483647, '45454646', 'MCA', 'IIIPS', '', 0, 'hugg@hotmail.com'),
('shaligram', 'SHALIGRAM PRAJAPAT', 'Ramkishore Prajapat', 'BrijRani Prajapat', '0000-00-00', 0, '', '', 'International Institute of Pro', 'D-49/A MIG First Floor Shoping', 2147483647, 'shaligram.prajapat@gmail.com'),
('s', 'Shivshankar Pindoriya', 'ss', 'ss', '0000-00-00', 0, '', '', 'ss', 'dflfm', 2147483647, 'shiv.dangi71@gmail.com'),
('rahul', 'rahal sisjhffc', 'sdjkbf', 'sdf', '0000-00-00', 0, 'p', 'p', 'p', '', 0, 'ss@sdjf'),
('ritika', 'Ritika', 'Prem', 'Kiran', '0000-00-00', 0, '', '', '', '', 0, 'kk@hh'),
('rajkumar', 'a', 'a', 'A', '1999-02-20', 0, '457855', 'phd', 'iips', '4556, pepwpd, indore', 98698598, 'aboutvikaschouhan@hotmail.com'),
('rajat', 'rajat garg', 'sanjay', 'xyz', '0000-00-00', 123457689, '44444444aa', '11111111111R', '11111111111R', '11111111111R', 2147483614, 'abc@ff'),
('shraddha_soni', 'mona', 'jjjjj', 'nnnnn', '0000-00-00', 0, '53345345', 'hfghfg', 'iiips', 'hgfjgh', 675753, 'rrtrtgfdfgdfgfdgdfg@m'),
('vikas', 'vikas', 'chouhan', 'chouhan', '1993-02-28', 123456799, '789446DFC', 'Int. MCA', 'IIPS-DAVV', '248, pawan nagar, indore 45200', 2147483647, 'aboutvikaschouhan@gmail.com'),
('abc', 'aaaaa', 'abccc', 'ccccc', '0000-00-00', 0, 'ssdsd4s4s4', 'ssss4444444', '1333-33-33', 'swdwdwwd bbbbb', 2147483647, 'abc@gmail.com'),
('kirti_mathur', 'kitri', 'ddd', 'h', '0000-00-00', 0, 'h', 'h', 'mahur', 'ddddddddd', 0, 'h');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `User_Id` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `insert_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `User_Id`, `image`, `insert_time`) VALUES
(8, 'ritika', '15-10-03-17-58-55-138_deco.jpg', '2017-03-20 22:34:26'),
(12, 'rahul', 'ramesh_thakur.jpg', '2017-03-22 18:23:18'),
(14, 'rahul', 'faculty_pic.jpg', '2017-03-22 18:23:47'),
(51, 'abc', 'director.jpg', '2017-04-29 01:56:59'),
(23, 'shraddha_soni', '235.jpg', '2017-04-20 21:28:23'),
(24, 'ramesh_thakur', 'ramesh_thakur.jpg', '2017-04-20 21:29:55'),
(25, 'kirti_mathur', 'DSCN6256.JPG', '2017-04-20 21:34:05'),
(26, 'rajkumar', '21537157690_15c64669f6_b.jpg', '2017-04-20 21:35:40'),
(27, 'rajat', 'technophilia.PNG', '2017-04-20 22:07:58'),
(29, 'rupesh_01', 'ramesh_thakur.jpg', '2017-04-20 22:37:31'),
(50, 'rajesh_verma', 'director.jpg', '2017-04-27 23:17:37'),
(31, 'shraddha_soni', '', '2017-04-21 22:40:38'),
(32, 'shraddha_soni', '1014150_630486336969252_223045885_n.jpg', '2017-04-21 22:40:49'),
(33, 'shraddha_soni', '', '2017-04-21 22:40:51'),
(34, 'shraddha_soni', '', '2017-04-21 22:40:52'),
(35, 'shraddha_soni', '1014150_630486336969252_223045885_n.jpg', '2017-04-21 22:41:02'),
(36, 'a', '21537157690_15c64669f6_b.jpg', '2017-04-22 23:43:43'),
(37, 'vikas', 'technophilia.PNG', '2017-04-26 20:28:56'),
(49, 'pradeep_jatav', 'Capture1.JPG', '2017-04-27 23:14:50'),
(48, 'pradeep_jatav', '', '2017-04-27 23:14:45'),
(47, 'pradeep_jatav', '', '2017-04-27 23:14:30'),
(46, 'pradeep_jatav', 'Capture1.JPG', '2017-04-27 23:14:29'),
(45, 'pradeep_jatav', '21537157690_15c64669f6_b.jpg', '2017-04-27 23:14:24');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `level_no` int(4) NOT NULL,
  `level_name` varchar(20) NOT NULL,
  PRIMARY KEY (`level_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`level_no`, `level_name`) VALUES
(1, 'Admin'),
(2, 'Faculty'),
(3, 'Student'),
(4, 'Alumni');

-- --------------------------------------------------------

--
-- Table structure for table `orie`
--

CREATE TABLE IF NOT EXISTS `orie` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(20) NOT NULL,
  `SNo` int(11) NOT NULL AUTO_INCREMENT,
  `Details` varchar(1000) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`SNo`),
  KEY `SNo` (`SNo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `orie`
--

INSERT INTO `orie` (`User_Id`, `Year`, `SNo`, `Details`) VALUES
('Faculty', '', 10, 'Hello World'),
('Faculty', '', 11, 'How Are You?'),
('n', '', 5, 'Detail Is Confedential'),
('n', '', 7, 'Hello World'),
('n', '', 9, 'Top Secret'),
('a', '', 15, 'ffd');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `current` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `phone`, `current`, `company_name`) VALUES
(6, 'vikas', 'a@gmail.com', '8889888', '8adafafafafafaf', ''),
(10, 'vikas', 'aboutvikaschouhan@gmail.com', '2147483647', 'sdfsefsfsf', ''),
(11, 'rahul satal', 'rahulsatal92@gmail.com', '2147483647', 'DD submit krna hai aaj 26/04/2017', ''),
(20, 'rajat garg', 'rg6694@gmail.com', '2147483647', 'reach us rename ke baad ki testing', ''),
(24, 'v', 'aa@f.c', '111111', '', ''),
(25, 'zzzzzz', 'xxxx@c.c', '8888', '', ''),
(26, 'hjvhj', 'ghjg@fghgf', '76876', '6867', '768'),
(27, 'vishnu yadav', 'vishnuthestranger@gmail.com', '2147483647', 'lead developer at bankok', 'Alphabet'),
(28, 'rajendra verma', 'rajendra93verma@gmail.com', '2147483647', 'lead developer at bankok', 'Alphabet'),
(29, 'rajendra verma', 'rajendra93verma@gmail.com', '9713663979', 'lead developer at bankok', 'Alphabet'),
(30, 'rajendra verma', 'rajendra93verma@gmail.com', '9713663979', 'lead developer at bankok', 'Alphabet'),
(31, 'rahul testing', 'rajeshsir@gmail.com', '0', 'sgdg', 'gdfgfdg'),
(32, '', '', '0', '', ''),
(33, '', '', '0', '', ''),
(34, 'rajendra verma', 'rajendra93verma@gmail.com', '0', 'cbcbf', 'vgnvgjngn'),
(35, 'jhvj', 'rajendra93verma@gmail.com', '97136631', 'jjhg', 'jhvjvj'),
(36, 'yamini', 'xxxx@c.c', '91964553453', 'vxvxfv', 'xcvcbcv');

-- --------------------------------------------------------

--
-- Table structure for table `session_master`
--

CREATE TABLE IF NOT EXISTS `session_master` (
  `session_id` int(10) NOT NULL AUTO_INCREMENT,
  `session_description` varchar(50) NOT NULL,
  `from_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `session_master`
--

INSERT INTO `session_master` (`session_id`, `session_description`, `from_date`, `end_date`) VALUES
(1, 'January 2017 - March 2017', '2017-01-01', '2017-03-31'),
(2, 'April 2017 - December 2017', '2017-04-01', '2017-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `teach_apb`
--

CREATE TABLE IF NOT EXISTS `teach_apb` (
  `apb_id` int(30) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Teach_APB_TNO` varchar(50) NOT NULL,
  `Teach_APB_BEP` varchar(50) NOT NULL,
  `Teach_APB_ISSN` varchar(30) NOT NULL,
  `Teach_APB_WPR` varchar(50) NOT NULL,
  `Teach_APB_NOC` int(11) NOT NULL,
  `Teach_APB_MA` varchar(20) NOT NULL,
  `Data_Set` varchar(20) NOT NULL,
  PRIMARY KEY (`apb_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `teach_apb`
--

INSERT INTO `teach_apb` (`apb_id`, `user_id`, `Year`, `Teach_APB_TNO`, `Teach_APB_BEP`, `Teach_APB_ISSN`, `Teach_APB_WPR`, `Teach_APB_NOC`, `Teach_APB_MA`, `Data_Set`) VALUES
(1, 0, '', 'ras', 'sar', '143', 'lala', 3, 'on', '');

-- --------------------------------------------------------

--
-- Table structure for table `teach_bpe`
--

CREATE TABLE IF NOT EXISTS `teach_bpe` (
  `User_Id` varchar(30) NOT NULL,
  `s_date` date NOT NULL,
  `end_date` date NOT NULL,
  `Teach_BPE_TPN` varchar(50) NOT NULL,
  `Teach_BPE_TBA` varchar(50) NOT NULL,
  `Teach_BPE_PISSN` varchar(30) NOT NULL,
  `Teach_BPE_WPR` varchar(50) NOT NULL,
  `Teach_BPE_NOC` int(11) NOT NULL,
  `Teach_BPE_YN` text NOT NULL,
  PRIMARY KEY (`User_Id`,`s_date`,`Teach_BPE_TPN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_bpe`
--

INSERT INTO `teach_bpe` (`User_Id`, `s_date`, `end_date`, `Teach_BPE_TPN`, `Teach_BPE_TBA`, `Teach_BPE_PISSN`, `Teach_BPE_WPR`, `Teach_BPE_NOC`, `Teach_BPE_YN`) VALUES
('', '0000-00-00', '0000-00-00', 'Aaau', 'Lolita', '1456', 'Goga', 3, 'on'),
('n', '0000-00-00', '0000-00-00', 'm', 'm', 'm', 'm', 0, 'No'),
('n', '0000-00-00', '0000-00-00', 'n', 'n', 'n', 'n', 0, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `teach_clmi`
--

CREATE TABLE IF NOT EXISTS `teach_clmi` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Teach_CLMI_TOA` varchar(100) NOT NULL,
  `Teach_CLMI_YSR` varchar(30) NOT NULL,
  `CORPORATE_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Data_Set` varchar(7) NOT NULL,
  `Session` varchar(30) NOT NULL,
  PRIMARY KEY (`CORPORATE_ID`),
  KEY `User_Id` (`User_Id`,`Year`,`Teach_CLMI_TOA`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `teach_clmi`
--

INSERT INTO `teach_clmi` (`User_Id`, `Year`, `Teach_CLMI_TOA`, `Teach_CLMI_YSR`, `CORPORATE_ID`, `Data_Set`, `Session`) VALUES
('a', '2003', 'a', 'aa', 1, '', ''),
('n', '', 'Hawan', 'Karenge', 2, 'updated', ''),
('n', '', 'Samvardhan', 'dadsas', 3, '', ''),
('v', '2003', 'v', 'v', 4, '', ''),
('a', '2003', 'abc', 'abc', 5, '', ''),
('a', '1990', 'a', 'a', 6, 'updated', ''),
('$user_id', '$year', '$type', '$responsibility', 7, 'updated', ''),
('a', '1990', 'q', 'q', 8, 'updated', ''),
('a', '1990', 's', 's', 9, 'updated', ''),
('a', '1990', 'e`', 'e', 10, 'updated', ''),
('shaligram.prajapat@gmail.com', '2013-2014', 'Member in discipline committee of IIPS', 'Semester wise', 11, 'updated', ''),
('shaligram.prajapat@gmail.com', '2013-2014', 'Member in anti-ragging committees', 'Semester wise', 12, 'updated', ''),
('shaligram.prajapat@gmail.com', '2013-2014', 'Member of ISTE,CSTA, IEEE', 'yearly', 13, 'updated', ''),
('shaligram.prajapat@gmail.com', '2013-2014', 'Project In charge for Counseling and co-coordinating Student Projects', 'Semester wise', 14, '', ''),
('shaligram.prajapat@gmail.com', '2013-2014', 'Member of Innovative Practices for the preparation of NAAC inspection team visit.', 'Not applicable', 15, '', ''),
('shaligram.prajapat@gmail.com', '2013-2014', 'Member of editorial board of Proposed IIPS international journal ', 'yearly', 16, '', ''),
('shaligram.prajapat@gmail.com', '2013-2014', 'Member of subject allocation committee of computer course of IIPS', 'Semester wise', 17, '', ''),
('shaligram.prajapat@gmail.com', '2013-2014', 'Member of monitoring committee and executing staff of Research and Development Center of IIPS', 'Not applicable', 18, '', ''),
('a', '', 'saasfa', 'sdvdsvsv', 19, 'updated', ''),
('a', '', 'sfgsdg', 'fbdfb', 20, 'updated', ''),
('a', '', 'abcdefg', 'ffbdfbdbbd', 21, 'updated', ''),
('a', '', 'vikas_testimg', '', 22, 'deleted', ''),
('a', '', 'ddd', '', 23, 'updated', ''),
('a', '', 'vikas_testiNG_2', '', 24, 'deleted', ''),
('a', '', 'FFFF', '', 25, 'deleted', ''),
('a', '', 'XYZZ', 'AAAA', 26, 'deleted', ''),
('a', '', 'FINAL_1', 'PLEASE', 27, 'deleted', ''),
('a', '', 'abcdefg_1', 'ffbdfbdbbd', 28, 'deleted', ''),
('a', '', 'saasfa_QQ', 'sdvdsvsv', 29, 'updated', ''),
('a', '', 'AS', 'SDSD', 30, 'updated', ''),
('a', '', 'XCVXDV', 'DSVDS', 31, 'updated', ''),
('a', '', 'DVSDF', 'DTDGDRG', 32, 'updated', ''),
('a', '', 'DVSDF_Q', 'DTDGDRG', 33, 'deleted', ''),
('a', '', 'FBDFAdf', 'dd', 34, 'updated', ''),
('a', '', 'AFAW', 'FGSRDGDR', 35, 'updated', ''),
('a', '', 'DFHBDF', 'THHTH', 36, 'updated', ''),
('a', '', 'DFHBDFAA', 'THHTH', 37, 'deleted', ''),
('a', '', 'DFDF', 'DFFBDB', 38, 'updated', ''),
('a', '', 'AS', 'aa', 39, 'new', ''),
('a', '', 'vikas_testimg', 'aa', 40, 'new', ''),
('a', '', 'vikas_testimg', 'aa--', 41, 'updated', ''),
('a', '', 'vikas_testimg_qq', 'aa--', 42, 'updated', ''),
('a', '', 'vikas_testimg_qq', 'aa--', 43, 'updated', ''),
('a', '', 'update it', 'aa--', 44, 'deleted', ''),
('a', '', 'aaaaaaaaaa', 'aa--', 45, 'deleted', ''),
('a', '', 'vikas_testimg', 'aa--', 46, 'deleted', '');

-- --------------------------------------------------------

--
-- Table structure for table `teach_cocurri`
--

CREATE TABLE IF NOT EXISTS `teach_cocurri` (
  `COCURRI_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Session` varchar(30) NOT NULL,
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(11) NOT NULL,
  `Teach_COCURRI_TOA` varchar(30) NOT NULL,
  `Teach_COCURRI_YSR` varchar(30) NOT NULL,
  `Data_Set` varchar(7) NOT NULL,
  PRIMARY KEY (`COCURRI_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `teach_cocurri`
--

INSERT INTO `teach_cocurri` (`COCURRI_ID`, `Session`, `User_Id`, `Year`, `Teach_COCURRI_TOA`, `Teach_COCURRI_YSR`, `Data_Set`) VALUES
(1, '', 'a', '', 'JAI SHREE RAM', '5', 'updated'),
(2, '', 'a', '', 'SECOND TRIAL', '3', 'deleted'),
(3, '', 'a', '', 'UPDATE P SECOND TRIAL', '3', 'updated'),
(4, '', 'a', '', 'LEARNING', '2', 'updated'),
(5, '', 'a', '', 'LEARNING2', '2', 'deleted'),
(6, '', 'a', '', 'LEARNING3333', '2222', 'updated'),
(7, '', 'a', '', 'eeeeeeeee', 'aaa', 'updated'),
(8, '', 'a', '', 'LEARNING3333_update', '2222', 'updated'),
(9, '', 'a', '', 'asdas', 'dfbdfb', 'deleted'),
(10, '', 'a', '', 'LEARNING3333_updateq', '2222', 'updated'),
(11, '', 'a', '', 'LEARNING3333_updateqaaa', '2222', 'updated'),
(12, '', 'a', '', 'LEARNING3333_updateqaaa', '2222', 'updated'),
(13, '', 'a', '', 'LEARNING3333_updateqaaa', '2222', 'updated'),
(14, '', 'a', '', 'LEARNING3333_updateq2222', '2222', 'updated'),
(15, '', 'a', '', 'aef', 'dawfqe', 'deleted'),
(16, '', 'a', '', 'dddd', 'dddddd', 'deleted'),
(17, '', 'a', '', '2dddd', 'dddddd', 'deleted'),
(18, '', 'a', '', '2dddd', 'dddddd', 'updated'),
(19, '', 'a', '', 'AAS', 'SSSS', 'deleted'),
(20, '', 'a', '', '2dddd_UPDATE', 'dddddd', 'updated'),
(21, '', 'a', '', 'NEW', 'UUUU', 'updated'),
(22, '', 'a', '', 'NAYA', 'NEW', 'updated'),
(23, '', 'a', '', 'NAYA_1', 'NEW', 'updated'),
(24, '', 'a', '', 'LEARNING3333_updateq2222', '2222', 'deleted'),
(25, '', 'a', '', 'UPDATE P SECOND TRIAL', '3_3', 'updated'),
(26, '', 'a', '', 'AAS', 'AA', 'deleted'),
(27, '', 'a', '', 'BBB', 'BB1', 'updated'),
(28, '', 'a', '', 'BBB', 'BB1_UPDATE', 'deleted'),
(29, '', 'a', '', 'ass', 'ddd', 'updated'),
(30, '', 'a', '', 'new', 'year', 'updated'),
(31, '', 'a', '', 'new_update', 'year', 'updated'),
(32, '', 'a', '', 'ass_update', 'ddd', 'updated'),
(33, '', 'rupesh_01', '', 'visit_indore', 'yearly', 'updated'),
(34, '', 'rupesh_01', '', 'visit_dewas', 'semester wise', 'deleted'),
(35, '', 'shraddha_soni', '', 'aaaaaa', 'yearly', 'updated'),
(36, '', 'shraddha_soni', '', 'aaaaaaolpol', 'yearly', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `teach_cpc`
--

CREATE TABLE IF NOT EXISTS `teach_cpc` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Teach_CPC_Title` varchar(50) NOT NULL,
  `Teach_CPC_Agency` varchar(50) NOT NULL,
  `Teach_CPC_month` int(20) NOT NULL,
  `Teach_CPC_year` int(40) NOT NULL,
  `Teach_CPC_GAM` double NOT NULL,
  `Teach_CPC_WPD` varchar(50) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_CPC_Title`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_cpc`
--

INSERT INTO `teach_cpc` (`User_Id`, `Year`, `Teach_CPC_Title`, `Teach_CPC_Agency`, `Teach_CPC_month`, `Teach_CPC_year`, `Teach_CPC_GAM`, `Teach_CPC_WPD`) VALUES
('', '', 'thousand', 'years', 0, 0, 5, ''),
('n', '2003', 'bb', 'b', 0, 0, 0, 'b'),
('n', '2003', 'v', 'v', 0, 0, 0, 'v');

-- --------------------------------------------------------

--
-- Table structure for table `teach_ecfa`
--

CREATE TABLE IF NOT EXISTS `teach_ecfa` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Teach_ECFA_TOA` varchar(150) NOT NULL,
  `Teach_ECFA_AH` varchar(30) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_ECFA_TOA`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_ecfa`
--

INSERT INTO `teach_ecfa` (`User_Id`, `Year`, `Teach_ECFA_TOA`, `Teach_ECFA_AH`) VALUES
('a', '2003', 'a', 'a'),
('a', '2003', 'aa', 'aa'),
('Faculty', '', 'ggghgh', '4'),
('Faculty', '', 'Workshop', '11'),
('n', '', 'Pycon', '5'),
('n', '', 'TechDays', '3'),
('n', '2003', 'workshop', '5'),
('v', '2003', 'v', '5'),
('$user_id', '$year', '$type', '$averageHrs'),
('a', '1990', 'a', 'a'),
('a', '2003', 'abc', '5'),
('a', '1990', 'q', 'q'),
('shaligram.prajapat@gmail.com', '2013-2014', 'Judged software project competition organized by Nai-Duniya and MPTCTA â€œFonocom â€“2011â€', '8'),
('a', '2013-2014', '"sdff"', 'h'),
('a', '2013-2014', 'â€œGaurav Sirâ€', 'qw');

-- --------------------------------------------------------

--
-- Table structure for table `teach_edap`
--

CREATE TABLE IF NOT EXISTS `teach_edap` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Teach_EDAP_TED` varchar(100) NOT NULL,
  `Teach_EDAP_DA` varchar(30) NOT NULL,
  `Teach_EDAP_ECO` varchar(30) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_EDAP_TED`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_edap`
--

INSERT INTO `teach_edap` (`User_Id`, `Year`, `Teach_EDAP_TED`, `Teach_EDAP_DA`, `Teach_EDAP_ECO`) VALUES
('a', '2003', 'a', 'a', '12'),
('n', '', 'b', 'fgf', '50'),
('n', '', 'board', 'bv', '80'),
('n', '2003', 'vb', 'bv', '100'),
('v', '2003', 'm', 'm', '12'),
('a', '1990', 'ghgf', 'fgh', 'fhg'),
('a', '1990', 'a', 'a', 'a'),
('shaligram.prajapat@gmail.com', '2013-2014', 'Setting of question paper (University Level)', 'Yes', '100.00%'),
('shaligram.prajapat@gmail.com', '2013-2014', 'Setting of question paper (Departmental Level)', 'Yes', '100.00%'),
('shaligram.prajapat@gmail.com', '2013-2014', 'Invigilation (University Level)', 'Yes', '100.00%'),
('shaligram.prajapat@gmail.com', '2013-2014', 'Invigilation (Departmental Level)', 'Yes', '100.00%'),
('shaligram.prajapat@gmail.com', '2013-2014', 'Evaluation of Answer Scripts (University Level)', 'Yes', '100.00%'),
('shaligram.prajapat@gmail.com', '2013-2014', 'Evaluation of Answer Book (Departmental Level)', 'Yes', '100.00%'),
('shaligram.prajapat@gmail.com', '2013-2014', 'Assistant Superintendent of End semester examination at IIPS(April-May 2012)', 'Yes', '100.00%');

-- --------------------------------------------------------

--
-- Table structure for table `teach_fcp`
--

CREATE TABLE IF NOT EXISTS `teach_fcp` (
  `fcp_id` int(11) NOT NULL AUTO_INCREMENT,
  `User_id` varchar(20) NOT NULL,
  `Session` varchar(10) NOT NULL,
  `Teach_FCP_TNO` varchar(50) NOT NULL,
  `Teach_FCP_DCP` varchar(50) NOT NULL,
  `Teach_FCP_ISSN` varchar(30) NOT NULL,
  `Teach_FCP_NOC` int(11) NOT NULL,
  `Teach_FCP_MA` text NOT NULL,
  `Data_Set` varchar(20) NOT NULL,
  PRIMARY KEY (`fcp_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `teach_fcp`
--

INSERT INTO `teach_fcp` (`fcp_id`, `User_id`, `Session`, `Teach_FCP_TNO`, `Teach_FCP_DCP`, `Teach_FCP_ISSN`, `Teach_FCP_NOC`, `Teach_FCP_MA`, `Data_Set`) VALUES
(1, '0', '', 'jayesh', 'kothari', '34', 43, '', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `teach_fdp`
--

CREATE TABLE IF NOT EXISTS `teach_fdp` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Teach_FDP_Programme` varchar(150) NOT NULL,
  `Teach_FDP_month` varchar(20) NOT NULL,
  `Teach_FDP_year` int(11) NOT NULL,
  `Teach_FDP_Organized` varchar(150) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_FDP_Programme`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_fdp`
--

INSERT INTO `teach_fdp` (`User_Id`, `Year`, `Teach_FDP_Programme`, `Teach_FDP_month`, `Teach_FDP_year`, `Teach_FDP_Organized`) VALUES
('', '', 'saajan', 'chale sasural', 0, 'sasural'),
('n', '2003', 'h', 'h', 0, 'h'),
('n', '2003', 'nb', 'n', 0, 'n'),
('shaligram.prajapat@gmail.com', '2013-2014', 'Statistical Modeling of Systems', '1 week', 0, 'IIT Kharagpur'),
('shaligram.prajapat@gmail.com', '2013-2014', 'Advanced Data structures', '5 days', 0, 'NIT calicut,AICTE-MHRD'),
('shaligram.prajapat@gmail.com', '2013-2014', 'National workshop on Algorithms, Computation and Optimization(NWACO-2011)', '2 days', 0, 'IICA,Indore'),
('shubham', '2015-2016', 'mca', '6 yrs', 0, 'davv');

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

-- --------------------------------------------------------

--
-- Table structure for table `teach_lstp`
--

CREATE TABLE IF NOT EXISTS `teach_lstp` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Teach_LSTP_Course` varchar(100) NOT NULL,
  `Teach_LSTP_Level` varchar(30) NOT NULL,
  `Teach_LSTP_MOT` varchar(150) NOT NULL,
  `Teach_LSTP_NOCA` varchar(100) NOT NULL,
  `Teach_LSTP_NOCC` int(11) NOT NULL,
  `Teach_LSTP_Practicals` varchar(70) NOT NULL,
  `Teach_LSTP_CTDR` varchar(50) NOT NULL,
  `Teach_LSTP_CTAPI` int(11) NOT NULL,
  `Teach_LSTP_TLAPI` int(11) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_LSTP_Course`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_lstp`
--

INSERT INTO `teach_lstp` (`User_Id`, `Year`, `Teach_LSTP_Course`, `Teach_LSTP_Level`, `Teach_LSTP_MOT`, `Teach_LSTP_NOCA`, `Teach_LSTP_NOCC`, `Teach_LSTP_Practicals`, `Teach_LSTP_CTDR`, `Teach_LSTP_CTAPI`, `Teach_LSTP_TLAPI`) VALUES
('a', '2003', 'q', 'q', 'q', '0', 0, 'q', '0', 0, 0),
('Faculty', '', 'Artificial Intelligence', 'Intermediate', 'Online', '4', 4, '3', '100', 40, 9),
('Faculty', '', 'Machine Learning', 'Beginner', 'Online', '4', 4, '3', '100', 40, 8),
('Faculty', '', 'xzxzx', 'xzxzxz', 'zxzx', '4', 4, '3', '100', 40, 9),
('Faculty', '', 'zxzxzxzx', 'xzxzxz', 'zxzx', '4', 4, '3', '100', 40, 9),
('n', '', 'Java', 'Professional', 'Online', '3', 3, '1', '100', 10, 8),
('n', '', 'Python', 'Intermediate', 'Online', '5', 5, '4', '100', 40, 10),
('n', '2003', 'n', 'hjhcc', 'hghgcc', '7', 2, '1', '50', 12, 10),
('v', '2003', 'v', 'vv', 'v', '2', 2, '2', '100', 50, 10),
('a', '2003', 'a', 'a', 'a', '0', 0, 'a', '0', 0, 0),
('shaligram', '2012-13', 'MCA-V Computer Graphics', 'UG', 'Lectures, Discussion, Lab Assi', '8', 45, 'Given and checked Lab assignme', '100', 100, 10),
('shaligram', '2012-13', 'MCA-VIII- Analysis and  Design', 'PG', 'ADA', '4', 12, 'Problems given together with t', '30', 0, 3),
('shaligram', '2012-13', 'M.Tech-Projects ', 'PG', 'Guiding, monitoring and Contro', '4', 40, 'Whole Project is a practcle co', '100', 100, 10),
('a', '2011', 'Machine Learning', 'Beginner', 'MOOC', '7', 7, '7', '7', 7, 7),
('a', '2011', 'fgf', 'dfg', 'dfg', '0', 0, 'fdg', '0', 0, 0),
('a', '1990', 'fgf', 'gfh', 'fgh', '0', 0, 'fgh', '0', 0, 0),
('a', '2000', 'uio', 'jio', 'jio', '0', 0, 'vghy', '0', 0, 10),
('a', '1990', 'a', 'a', 'a', '0', 0, 'a', '0', 0, 0),
('a', '1999', 'a', 'a', 'a', '0', 0, 'a', '0', 0, 0),
('shaligram.prajapat@gmail.com', '2013', 'Computer Graphics', 'UG', 'Classroom teaching/Lectures + ', '0', 48, 'Allocated as per the concepts ', '100', 50, 10),
('a', '2003-2004', 'a', 'a', 'a', 'a', 0, 'a', 'a', 0, 0),
('shaligram.prajapat@gmail.com', '2002-2003', '{bhjbh}', 'bhj', 'bjk', 'bjkb', 0, 'jkb', 'b', 0, 0),
('shaligram.prajapat@gmail.com', '2002-2003', 'dzsrf(Dxfg)dsg', 'nhjv', 'bj', 'bjkb', 0, 'bb', 'b', 0, 0),
('shaligram.prajapat@gmail.com', '2013-2014', 'IC-803- Analysis and Design of algorithms', 'PG', 'Classroom teaching ,assignments, programming supplements, exercise', '4 (L)Hrs (section A)  + 4 (L)Hrs (section B)', 50, 'Lab Work', '100% Classes Taken', 50, 10),
('shaligram.prajapat@gmail.com', '2013-2014', 'IC-906 â€“Project', 'PG', 'Project management activities', '4 (c) Hrs per week', 50, 'Lab Work', '100% Classes Taken', 50, 10),
('shaligram.prajapat@gmail.com', '2013-2014', 'IC-606-Project', 'UG', 'Project management activities including projects presentations and progress check.', '4 (c) Hrs per week (section A)', 50, 'Lab Work', '100% Classes Taken', 50, 10);

-- --------------------------------------------------------

--
-- Table structure for table `teach_opc`
--

CREATE TABLE IF NOT EXISTS `teach_opc` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Teach_OPC_Title` varchar(50) NOT NULL,
  `Teach_OPC_Agency` varchar(50) NOT NULL,
  `Teach_OPC_month` varchar(20) NOT NULL,
  `Teach_OPC_day` int(11) NOT NULL,
  `Teach_OPC_GAM` double NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_OPC_Title`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_opc`
--

INSERT INTO `teach_opc` (`User_Id`, `Year`, `Teach_OPC_Title`, `Teach_OPC_Agency`, `Teach_OPC_month`, `Teach_OPC_day`, `Teach_OPC_GAM`) VALUES
('', '', '', '', '', 0, 0),
('', '', 'Aauu', 'Lolita', 'shakti', 0, 5),
('n', '2003', 'b', 'b', 'b', 0, 0),
('n', '2003', 'n', 'n', 'n', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teach_pda`
--

CREATE TABLE IF NOT EXISTS `teach_pda` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Teach_PDA_TOA` varchar(150) NOT NULL,
  `Teach_PDA_YSR` varchar(50) NOT NULL,
  `PROFESSIONAL_ID` int(9) NOT NULL AUTO_INCREMENT,
  `Session` varchar(30) NOT NULL,
  `Data_Set` varchar(7) NOT NULL,
  PRIMARY KEY (`PROFESSIONAL_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `teach_pda`
--

INSERT INTO `teach_pda` (`User_Id`, `Year`, `Teach_PDA_TOA`, `Teach_PDA_YSR`, `PROFESSIONAL_ID`, `Session`, `Data_Set`) VALUES
('a', '2003', 'a', 'a', 1, '', ''),
('a', '', 'vikas', 'chouhan', 2, '', 'updated'),
('a', '', 'activity', 'semester wise', 3, '', 'deleted'),
('a', '', 'new01', 'yearly', 4, '', 'updated'),
('a', '', 'a', 's', 5, '', 'deleted'),
('a', '', 'vikas', 'chouhan', 6, '', 'updated'),
('a', '', 'juhi', '2017', 7, '', 'updated'),
('a', '', 'AAA', 'SSSS', 8, '', 'updated'),
('a', '', 'QQQ', 'AAA', 9, '', 'updated'),
('a', '', 'AAA', 'AAA', 10, '', 'updated'),
('a', '', 'ASSSS', 'VIKAS', 11, '', 'updated'),
('a', '', 'ASSSS__yupdate', 'VIKAS', 12, '', 'new');

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

-- --------------------------------------------------------

--
-- Table structure for table `teach_ppij`
--

CREATE TABLE IF NOT EXISTS `teach_ppij` (
  `Session` varchar(30) NOT NULL,
  `PPIJ_ID` int(9) NOT NULL AUTO_INCREMENT,
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(11) NOT NULL,
  `Teach_PPIJ_TNO` varchar(30) NOT NULL,
  `Teach_PPIJ_Journal` varchar(30) NOT NULL,
  `Teach_PPIJ_ISBN` varchar(30) NOT NULL,
  `Teach_PPIJ_PR` varchar(30) NOT NULL,
  `Teach_PPIJ_NCA` int(11) NOT NULL,
  `Teach_PPIJ_MA` varchar(30) NOT NULL,
  `Data_Set` varchar(7) NOT NULL DEFAULT 'valid',
  `Teach_PPIJ_IF` varchar(20) NOT NULL,
  PRIMARY KEY (`PPIJ_ID`),
  KEY `User_Id` (`User_Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=180 ;

--
-- Dumping data for table `teach_ppij`
--

INSERT INTO `teach_ppij` (`Session`, `PPIJ_ID`, `User_Id`, `Year`, `Teach_PPIJ_TNO`, `Teach_PPIJ_Journal`, `Teach_PPIJ_ISBN`, `Teach_PPIJ_PR`, `Teach_PPIJ_NCA`, `Teach_PPIJ_MA`, `Data_Set`, `Teach_PPIJ_IF`) VALUES
('', 9, 'shaligram.prajapat@gmail.com', '2013-2014', '"fdg"', '"sdf"', '"SD"S', '"SDf"', 0, 'Yes', 'valid', ''),
('', 126, 'a', '', 'uuuu', 'uuuu', 'uuu', 'uuu', 0, 'Yes', 'deleted', ''),
('', 131, 'rahul', '', 'heloo', 'hiii', 'hiee', 'bbye', 56, '', 'deleted', ''),
('', 132, 'ritika', '', 'Total Pages', 'Journal', 'ISSN', 'no', 4, 'Yes', 'new', ''),
('', 179, 'pradeep_jatav', '', 'updateaaaaaaaaaa', 'AAAAAAAAAAAAA', 'AAAAAAAAAAAAAA', '', 2, '', 'new', 'kkkkkkkkkk'),
('', 178, 'pradeep_jatav', '', 'niytin', 'djdjdj', 'jsjsjsj', '', 1, '', 'new', 'aaaaaaaaaaaaa'),
('', 177, 'pradeep_jatav', '', 'AAAArrrrrrrrrrrrr', 'aaaaaaaaaa', '44444444', '', 11, '', 'deleted', '10 peer sdsdsdsdsdsd'),
('', 176, 'pradeep_jatav', '', 'AAAA', 'aaaaaaaaaa', '44444444', 'Yes', 11, 'Yes', 'updated', '10 peer sdsdsdsdsdsd'),
('', 175, 'shraddha_soni', '', 'AAAAAAAAAA', 'AAAAAAAAAAAAA', 'AAAAAAAAAAAAAA', 'No', 2, 'No', 'new', 'NIL'),
('', 174, 'shraddha_soni', '', 'AAAAAAAAAA', 'AAAAAAAAAAAAA', 'AAAAAAAAAAAAAA', 'No', 2, 'No', 'updated', 'NIL'),
('', 173, 'shraddha_soni', '', 'AAAAAAAAAA', 'AAAAAAAAAAAAA', 'AAAAAAAAAAAAAA', 'No', 2, 'No', 'updated', 'NIL'),
('', 164, 'rupesh_01', '', 'xxcx update', 'xxx', 'xx', 'xxx', 4, 'Yes', 'new', ''),
('', 172, 'shraddha_soni', '', 'AAAAAAAAAA', 'AAAAAAAAAAAAA', 'AAAAAAAAAAAAAA', 'Yes', 2, '', 'updated', 'FIVE PEER'),
('', 167, 'shraddha_soni', '', 'updateaaaaaaaaaa', 'aa', 'j', 'j', 2, 'Yes', 'new', ''),
('', 171, 'shraddha_soni', '', 'AAAAAAAAAA', 'AAAAAAAAAAAAA', 'AAAAAAAAAAAAAA', 'Yes', 2, '', 'updated', 'FIVE PEER'),
('', 170, 'shraddha_soni', '', 'aaazzzz', 'my Journal', '455ef5s5dd5555', 'No', 1, 'Yes', 'updated', 'NIL');

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

-- --------------------------------------------------------

--
-- Table structure for table `teach_rimc`
--

CREATE TABLE IF NOT EXISTS `teach_rimc` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(11) NOT NULL,
  `Teach_RIMC_Course` varchar(100) NOT NULL,
  `Teach_RIMC_Consulted` varchar(255) NOT NULL,
  `Teach_RIMC_Prescribed` varchar(255) NOT NULL,
  `Teach_RIMC_ARP` varchar(255) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_RIMC_Course`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_rimc`
--

INSERT INTO `teach_rimc` (`User_Id`, `Year`, `Teach_RIMC_Course`, `Teach_RIMC_Consulted`, `Teach_RIMC_Prescribed`, `Teach_RIMC_ARP`) VALUES
('a', '2003', 'a', 'a', 'a', '5'),
('Faculty', '', 'Economics', 'asasssdsd', 'sdsd', 'dsdsd'),
('n', '', 'Python', 'russo', 'kjkj', '10'),
('n', '2003', 'a', 'sasa', 'sas', '10'),
('n', '2003', 'g', 'g', 'g', '5'),
('n', '2003', 'n', 'sas', 'asa', '7'),
('n', '2003', 'v', 'v', 'asa', '6'),
('v', '2003', 'v', 'v', 'v', '5'),
('shaligram', '2012-13', 'MCA-V / Computer Graphics', 'Computer Graphics by Hearn & B', 'https://sites.google.com/site/', 'https://sites.google.com/site/'),
('a', '2011', 'bvg', 'dfg', 'dfg', ''),
('a', '1990', 'a', 'a', 'a', ''),
('shaligram.prajapat@gmail.com', '2013-2014', 'Analysis and Design of algorithms', 'Introduction to Algorithms-Second edition by Thomas H.Cormen,Charles E. Leiserson,Ronald L. Rivest and Clifford Stein at PHI Publication â€œDesign and analysis of algorithmsâ€ Dave and Dave by Pearson education for complexity notations â€œFundamentals of', 'â€œThe design and analysis of computer Algorithmsâ€ Aho,Hopcroft and Ullman by Pearson Education and â€œIntroduction to Algorithmsâ€-Second edition by Thomas H. Cormen,Charles E. Leiserson,Ronald L. Rivest and Clifford Stein at PHI Publication Visiting ', '5'),
('shaligram.prajapat@gmail.com', '2013-2014', 'IC-503-Computer Graphics', 'Computer Graphics-C Version Second edition by Donald Hearn and M. Pauline Baker, Second Edition Pearson Education publication Computer Graphics by Harington for Segmentation chapters Interactive Computer Graphics" by Neumann for output primit', 'Computer Graphics N sinha ,Arun Udai by McGraw-Hill Company Publication Computer Graphics -C Version Second edition by Donald Hearn and M.Pauline Baker,Second Edition Pearson Education publication Visiting google group regularly.', '5'),
('shaligram.prajapat@gmail.com', '2013-2014', 'Projects for MCA and MTech', 'â€œAnalysis and design of Information Systemsâ€ V. rajaraman,PHI publications â€œSystems Analysis and Design â€œ-Second Edition ,Elias M. Awad Galgotia Publications â€œAn Integrated approach to software Engineeringâ€ Third Edition,Pankaj Jalote by naros', 'Visiting google group regularly Asked to Visit regularly https://sites.google.com/site/shaligramiipsdavvindore/activities/academic-projects', '5'),
('a', '2003-2004', 'a', 'a', 'a', '');

-- --------------------------------------------------------

--
-- Table structure for table `teach_tlm`
--

CREATE TABLE IF NOT EXISTS `teach_tlm` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(11) NOT NULL,
  `Teach_TLM_SD` varchar(255) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_TLM_SD`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_tlm`
--

INSERT INTO `teach_tlm` (`User_Id`, `Year`, `Teach_TLM_SD`) VALUES
('a', '2003', 'a'),
('a', '2011', 'dfghdf'),
('n', '', 'python is functional programmi'),
('n', '2003', 'cjscg'),
('n', '2003', 'gd'),
('n', '2003', 'nm'),
('shaligram.prajapat@gmail.com', '2013-2014', 'a'),
('shaligram.prajapat@gmail.com', '2013-2014', 'Conduction of end Semester CV/PV/Lab examination(Assistant superintended of end-semester examination April-May 2012)'),
('shaligram.prajapat@gmail.com', '2013-2014', 'Designed and Updated syllabus for computer graphics, Project management plan for students projects, Visit :https://groups.google.com/forum/hl=enfromgroupsforum/computergraphics_shaligram'),
('shaligram.prajapat@gmail.com', '2013-2014', 'Improved Projects planning ,scheduling, submissions alignments with the growth of syllabus and industry requirements for more details visit : information-system-analysis-and-design_shaligram@googlegroups.com'),
('shaligram.prajapat@gmail.com', '2013-2014', 'pulikt says "hii"'),
('shaligram.prajapat@gmail.com', '2013-2014', 'pulkit says â€œSatal is badâ€œ'),
('shaligram.prajapat@gmail.com', '2013-2014', 'Small projects, Industry project life cycle and SDLC ,visit: https://sites.google.com/site/shaligramiipsdavvindore/activities/academic-projects'),
('shaligram.prajapat@gmail.com', '2013-2014', 'Updated analysis and design of algorithm contents ,notes, assignments For more details ,visit : algorithm-analysis--design-shaligram@googlegroups.com'),
('shaligram.prajapat@gmail.com', '2013-2014', 'Updated computer graphics contents, study materials, notes, manuscript, assignments. For more details, visit: computergraphics_shaligram@googlegroups.com'),
('shaligram.prajapat@gmail.com', '2013-2014', 'Updated syllabus of Electronic Circuits, syllabus for BCA program of PIMR. This paper is included in BCA- II semester (Syllabus updated on May 28, 2012.)'),
('v', '2003', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `User_Id` varchar(30) NOT NULL,
  `Pwd` varchar(50) NOT NULL,
  `user_level` int(11) NOT NULL,
  PRIMARY KEY (`User_Id`),
  KEY `user_level` (`user_level`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`User_Id`, `Pwd`, `user_level`) VALUES
('a', 'a', 0),
('rahul', 'rahul', 0),
('ritika', 'ritika', 1),
('vikas', 'vikas', 1),
('ramesh_thakur', '942593711', 0),
('shraddha_soni', '9424474746', 0),
('kirti_mathur', '9755101873', 0),
('shaligram_prajapat', '9826037078', 0),
('rajkumar', '1234', 0),
('rajat', 'garg', 0),
('pradeep_jatav', '9713038949', 0),
('rupesh_01', '9981116176', 0),
('manju_suchdeo', '1234', 0),
('rajesh_verma', '9993107224', 0),
('abc', 'abc', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oauth_provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
