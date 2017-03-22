-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2017 at 03:13 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9-2

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
('rahul', 'bsddjk mmmmmmmm', 'sdjkbf', 'sdf', '0000-00-00', 0, 'p', 'p', 'p', '', 0, 'ss@sdjf'),
('ritika', 'Ritika', 'Prem', 'Kiran', '0000-00-00', 0, '', '', '', '', 0, 'kk@hh');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `User_Id`, `image`, `insert_time`) VALUES
(1, 'ritika', '15-09-06-23-58-40-114_deco.jpg', '2017-03-20 15:31:59'),
(2, 'ritika', '1454002728820.jpg', '2017-03-20 15:32:13'),
(3, 'ritika', '', '2017-03-20 15:32:16'),
(4, 'ritika', '', '2017-03-20 15:32:18'),
(5, 'ritika', '1.jpg', '2017-03-20 15:32:30'),
(6, 'ritika', '', '2017-03-20 15:32:31'),
(7, 'ritika', '', '2017-03-20 15:32:32'),
(8, 'ritika', '15-10-03-17-58-55-138_deco.jpg', '2017-03-20 15:34:26'),
(9, 'ritika', '15-10-14-21-16-22-764_deco.jpg', '2017-03-20 15:36:32');

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
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Teach_APB_TNO` varchar(50) NOT NULL,
  `Teach_APB_BEP` varchar(50) NOT NULL,
  `Teach_APB_ISSN` varchar(30) NOT NULL,
  `Teach_APB_WPR` varchar(50) NOT NULL,
  `Teach_APB_NOC` int(11) NOT NULL,
  `Teach_APB_MA` varchar(20) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_APB_TNO`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_apb`
--

INSERT INTO `teach_apb` (`User_Id`, `Year`, `Teach_APB_TNO`, `Teach_APB_BEP`, `Teach_APB_ISSN`, `Teach_APB_WPR`, `Teach_APB_NOC`, `Teach_APB_MA`) VALUES
('', '', 'eminem ', 'cent', '45', 'uy', 4, 'on'),
('', '', 'ras', 'sar', '143', 'lala', 3, 'on'),
('n', '2003', 'b', 'b', 'b', 'b', 0, 'Yes'),
('n', '2003', 'j', 'j', 'j', 'j', 4, 'No'),
('n', '2003', 'n', 'n', 'n', 'n', 0, 'No'),
('n', '2003', 'o', 'o', 'o', 'o', 5, 'No'),
('n', '2003', 'u', 'u', 'u', 'u', 4, 'No');

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
  `Teach_CLMI_API` int(11) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_CLMI_TOA`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_clmi`
--

INSERT INTO `teach_clmi` (`User_Id`, `Year`, `Teach_CLMI_TOA`, `Teach_CLMI_YSR`, `Teach_CLMI_API`) VALUES
('a', '2003', 'a', 'aa', 0),
('n', '', 'Hawan', 'Karenge', 5),
('n', '', 'Samvardhan', 'dadsas', 5),
('v', '2003', 'v', 'v', 5),
('a', '2003', 'abc', 'abc', 9),
('a', '1990', 'a', 'a', 8),
('$user_id', '$year', '$type', '$responsibility', 0),
('a', '1990', 'q', 'q', 0),
('a', '1990', 's', 's', 0),
('a', '1990', 'e`', 'e', 0),
('shaligram.prajapat@gmail.com', '2013-2014', 'Member in discipline committee of IIPS', 'Semester wise', 5),
('shaligram.prajapat@gmail.com', '2013-2014', 'Member in anti-ragging committees', 'Semester wise', 5),
('shaligram.prajapat@gmail.com', '2013-2014', 'Member of ISTE,CSTA, IEEE', 'yearly', 5),
('shaligram.prajapat@gmail.com', '2013-2014', 'Project In charge for Counseling and co-coordinating Student Projects', 'Semester wise', 5),
('shaligram.prajapat@gmail.com', '2013-2014', 'Member of Innovative Practices for the preparation of NAAC inspection team visit.', 'Not applicable', 5),
('shaligram.prajapat@gmail.com', '2013-2014', 'Member of editorial board of Proposed IIPS international journal ', 'yearly', 5),
('shaligram.prajapat@gmail.com', '2013-2014', 'Member of subject allocation committee of computer course of IIPS', 'Semester wise', 5),
('shaligram.prajapat@gmail.com', '2013-2014', 'Member of monitoring committee and executing staff of Research and Development Center of IIPS', 'Not applicable', 5);

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
  `Teach_ECFA_API` int(11) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_ECFA_TOA`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_ecfa`
--

INSERT INTO `teach_ecfa` (`User_Id`, `Year`, `Teach_ECFA_TOA`, `Teach_ECFA_AH`, `Teach_ECFA_API`) VALUES
('a', '2003', 'a', 'a', 0),
('a', '2003', 'aa', 'aa', 8),
('Faculty', '', 'ggghgh', '4', 6),
('Faculty', '', 'Workshop', '11', 10),
('n', '', 'Pycon', '5', 20),
('n', '', 'TechDays', '3', 7),
('n', '2003', 'workshop', '5', 65),
('v', '2003', 'v', '5', 5),
('$user_id', '$year', '$type', '$averageHrs', 0),
('a', '1990', 'a', 'a', 0),
('a', '2003', 'abc', '5', 9),
('a', '1990', 'q', 'q', 0),
('shaligram.prajapat@gmail.com', '2013-2014', 'Judged software project competition organized by Nai-Duniya and MPTCTA â€œFonocom â€“2011â€', '8', 10),
('a', '2013-2014', '"sdff"', 'h', 0),
('a', '2013-2014', 'â€œGaurav Sirâ€', 'qw', 0);

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
  `Teach_EDAP_API` varchar(30) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_EDAP_TED`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_edap`
--

INSERT INTO `teach_edap` (`User_Id`, `Year`, `Teach_EDAP_TED`, `Teach_EDAP_DA`, `Teach_EDAP_ECO`, `Teach_EDAP_API`) VALUES
('a', '2003', 'a', 'a', '12', '5'),
('n', '', 'b', 'fgf', '50', '15'),
('n', '', 'board', 'bv', '80', '10'),
('n', '2003', 'vb', 'bv', '100', '10'),
('v', '2003', 'm', 'm', '12', '5'),
('a', '1990', 'ghgf', 'fgh', 'fhg', 'fhhfg'),
('a', '1990', 'a', 'a', 'a', 'a'),
('shaligram.prajapat@gmail.com', '2013-2014', 'Setting of question paper (University Level)', 'Yes', '100.00%', '5'),
('shaligram.prajapat@gmail.com', '2013-2014', 'Setting of question paper (Departmental Level)', 'Yes', '100.00%', '5'),
('shaligram.prajapat@gmail.com', '2013-2014', 'Invigilation (University Level)', 'Yes', '100.00%', '5'),
('shaligram.prajapat@gmail.com', '2013-2014', 'Invigilation (Departmental Level)', 'Yes', '100.00%', '5'),
('shaligram.prajapat@gmail.com', '2013-2014', 'Evaluation of Answer Scripts (University Level)', 'Yes', '100.00%', '5'),
('shaligram.prajapat@gmail.com', '2013-2014', 'Evaluation of Answer Book (Departmental Level)', 'Yes', '100.00%', '5'),
('shaligram.prajapat@gmail.com', '2013-2014', 'Assistant Superintendent of End semester examination at IIPS(April-May 2012)', 'Yes', '100.00%', '5');

-- --------------------------------------------------------

--
-- Table structure for table `teach_fcp`
--

CREATE TABLE IF NOT EXISTS `teach_fcp` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Teach_FCP_TNO` varchar(50) NOT NULL,
  `Teach_FCP_DCP` varchar(50) NOT NULL,
  `Teach_FCP_ISSN` varchar(30) NOT NULL,
  `Teach_FCP_NOC` int(11) NOT NULL,
  `Teach_FCP_MA` text NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_FCP_TNO`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_fcp`
--

INSERT INTO `teach_fcp` (`User_Id`, `Year`, `Teach_FCP_TNO`, `Teach_FCP_DCP`, `Teach_FCP_ISSN`, `Teach_FCP_NOC`, `Teach_FCP_MA`) VALUES
('', '', 'ramesh', ' a', ' a', 0, 'no'),
('n', '2003', 'bc', ' a', ' a', 0, 'no'),
('n', '2003', 'm', ' a', ' a', 0, 'no'),
('n', '2003', 'o', ' a', ' a', 0, 'no'),
('n', '2003', 'p', ' a', ' a', 0, 'no'),
('a', '2000', '', ' a', ' a', 0, 'no'),
('a', '2003', 'a', ' a', ' a', 0, 'no'),
('shaligram.prajapat@gmail.com', '2013-2014', 'â€œhelloâ€œ', 'â€œhelloâ€œ', 'â€œhelloâ€œ', 0, 'on');

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
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Teach_ILC_TOL` varchar(50) NOT NULL,
  `Teach_ILC_TCS` varchar(50) NOT NULL,
  `Teach_ILC_DOE` date NOT NULL,
  `Teach_ILC_Organized` varchar(50) NOT NULL,
  `Teach_ILC_WINS` varchar(15) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_ILC_TOL`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_ilc`
--

INSERT INTO `teach_ilc` (`User_Id`, `Year`, `Teach_ILC_TOL`, `Teach_ILC_TCS`, `Teach_ILC_DOE`, `Teach_ILC_Organized`, `Teach_ILC_WINS`) VALUES
('', '', 'i', 'i', '0000-00-00', 's', 'DA'),
('n', '2003', 'nb', 'n', '2013-01-01', 'n', 'International'),
('n', '2003', 'nm', 'm', '2013-01-02', 'mn', 'International'),
('shaligram.prajapat@gmail.com', '2013-2014', 'Shiv & bnbnbn', 'a', '0000-00-00', 'a', 'a');

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
  `Teach_PDA_YWR` varchar(50) NOT NULL,
  `Teach_PDA_API` int(11) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_PDA_TOA`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_pda`
--

INSERT INTO `teach_pda` (`User_Id`, `Year`, `Teach_PDA_TOA`, `Teach_PDA_YWR`, `Teach_PDA_API`) VALUES
('a', '2003', 'a', 'a', 0),
('n', '', 'Coaching', 'fgf', 12),
('n', '', 'OnlineCourse', 'sas', 5),
('v', '2003', 'n', 'n', 5),
('a', '1990', 'a', 'a', 0),
('a', '2003', 'qw', 'qw', 0),
('a', '2003', 'q', 'q', 0),
('shaligram.prajapat@gmail.com', '2013-2014', 'Teaching Methodology', '2 days', 10);

-- --------------------------------------------------------

--
-- Table structure for table `teach_ppc`
--

CREATE TABLE IF NOT EXISTS `teach_ppc` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Teach_PPC_TPP` varchar(50) NOT NULL,
  `Teach_PPC_TCS` varchar(50) NOT NULL,
  `Teach_PPC_DOE` date NOT NULL,
  `Teach_PPC_Organized` varchar(50) NOT NULL,
  `Teach_PPC_WINS` text NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_PPC_TPP`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_ppc`
--

INSERT INTO `teach_ppc` (`User_Id`, `Year`, `Teach_PPC_TPP`, `Teach_PPC_TCS`, `Teach_PPC_DOE`, `Teach_PPC_Organized`, `Teach_PPC_WINS`) VALUES
('', '', 'Rishte', 'me', '0000-00-00', 'tumhare', 'Baap'),
('n', '2003', 'm', 'm', '2013-01-07', 'm', 'National'),
('n', '2003', 'n', 'n', '2013-01-02', 'nf', 'International');

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
  PRIMARY KEY (`PPIJ_ID`),
  KEY `User_Id` (`User_Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=133 ;

--
-- Dumping data for table `teach_ppij`
--

INSERT INTO `teach_ppij` (`Session`, `PPIJ_ID`, `User_Id`, `Year`, `Teach_PPIJ_TNO`, `Teach_PPIJ_Journal`, `Teach_PPIJ_ISBN`, `Teach_PPIJ_PR`, `Teach_PPIJ_NCA`, `Teach_PPIJ_MA`, `Data_Set`) VALUES
('', 27, 'a', '2003', 'ek', 'dlo', 'teen', 'char', 0, 'Yes', 'invalid'),
('', 9, 'shaligram.prajapat@gmail.com', '2013-2014', '"fdg"', '"sdf"', '"SD"S', '"SDf"', 0, 'Yes', 'valid'),
('', 0, 'a', '', 'valid1', 'valid1', 'valid1', 'valid1', 11, 'valid1', 'updated'),
('', 29, 'a', '', 'qwerty', 'qwer', 'qwerty', 'qwerty', 0, 'Yes', 'deleted'),
('', 25, 'a', '124', 'invalid2', 'invalid2', 'invalid2', 'invalid2', 11, 'invalid2', 'invalid'),
('', 97, 'a', '', 'mm', 'mmm', 'mmm', 'mmm', 0, 'Yes', 'deleted'),
('', 96, 'a', '', 'mm', 'm', ',', 'm', 0, 'Yes', 'deleted'),
('', 70, 'rahul', '', 'keh', 'do', ' na', 'keh', 0, 'No', 'deleted'),
('', 95, 'a', '', 'pppppppp', 'ppppppppp', 'ppppppppppp', 'ppppppp', 7, 'Yes', 'deleted'),
('', 120, 'rahul', '', 'llllllllllllllllllllllllllllll', 'kkkkkkkkkkk', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkk', 'kkkkkkkkkkkkkkkkkkkk', 5, '', 'deleted'),
('', 119, 'rahul', '', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 'kkkkkkkkkkk', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkk', 'kkkkkkkkkkkkkkkkkkkk', 5, 'Yes', 'deleted'),
('', 92, 'rahul', '', 'ioooooooooooo', 'oooooooooooooooo', 'ooooooooooooooo', 'oooooooooooooooooooooo', 1, 'Yes', 'new'),
('', 91, 'rahul', '', 'lllll', 'llllllllllllllllllllll', 'llllllllllllllllllllll', 'lllllllllllllllllll', 8, 'Yes', 'deleted'),
('', 90, 'rahul', '', 'ppppppppp', 'ppppppppppp', 'pppppppppp', 'ppppppppppppp', 8, 'Yes', 'new'),
('', 89, '', '', 'ritika', 'barethia', '99', 'no', 9, 'No', 'new'),
('January 2017 - March 2017', 88, 'rahul', '', 'ritika', 'barethia', '99', 'no', 9, 'No', 'new'),
('January 2017 - March 2017', 98, 'a', '', 'uuuu', 'uuuu', 'uuu', 'uuu', 0, 'Yes', 'new'),
('', 118, 'a', '', 'page no', 'journal', 'issn', 'peer review', 2, 'Yes', 'deleted'),
('', 103, 'a', '', 'yyyyyyymmmmm', 'yyyyyyyyy', 'yyyyyyy', 'yyyyyyyy', 0, 'Yes', 'deleted'),
('', 114, 'a', '', 'uuuu', 'uuuu', 'uuu', 'uuu', 0, 'Yes', 'deleted'),
('January 2017 - March 2017', 108, 'a', '', 'uuuu', 'uuuu', 'uuu', 'uuu', 0, 'Yes', 'new'),
('', 109, 'a', '', 'uuuu', 'uuuu', 'uuu', 'uuu', 0, 'Yes', 'deleted'),
('January 2017 - March 2017', 110, 'a', '', 'uuuu', 'uuuu', 'uuu', 'uuu', 0, 'Yes', 'new'),
('', 112, 'a', '', 'tttt', 'tttttt', 'ttttt', 'tttttt', 0, 'Yes', 'deleted'),
('', 113, 'a', '', 'tttt', 'tttttt', 'ttttt', 'tttttt', 0, 'Yes', 'deleted'),
('', 115, 'a', '', 'k', 'k', 'k', 'k', 5, 'No', 'deleted'),
('', 116, 'a', '', 'uuuu', 'uuuu', 'uuu', 'uuu', 0, 'Yes', 'deleted'),
('', 117, 'a', '', 'uuuu', 'uuuu', 'uuu', 'uuu', 0, 'Yes', 'deleted'),
('', 121, 'a', '', 'fffffffffff', 'ffffffffffffffffffffffffffffff', 'fffffffffffffffffffff', 'ffffffffffffffffffffffffffffff', 55, 'Yes', 'deleted'),
('', 122, 'a', '', 'qqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqqqq', 2, '', 'deleted'),
('', 123, 'a', '', 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeee', 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeee', 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeee', 'eeeeeeeeeeeeeeeeeeeee', 4, '', 'deleted'),
('', 124, 'a', '', 'oooooooooooooooooooooooooooooo', 'oooooooooooooooooooooooooooooo', 'oooooooooooooooooooooooooooooo', 'oo', 1, '', 'deleted'),
('', 125, 'a', '', 'uuuugggggggggggg', 'uuuu', 'uuu', 'uuu', 0, 'Yes', 'deleted'),
('', 126, 'a', '', 'uuuu', 'uuuu', 'uuu', 'uuu', 0, 'Yes', 'deleted'),
('', 127, 'a', '', 'wwwwwwwwwwwww', 'wwwwwwwwwwwwww', 'wwwwwwwwwwwwww', 'wwwwwwwwwwwww', 4, 'No', 'new'),
('', 128, 'a', '', 'wqqqss', 'aasxswx', 'xdascsc', 'czssssssss', 4, '', 'deleted'),
('', 129, 'a', '', 'wqqqss', 'aasxswx', 'xdascsc', 'czssssssss', 4, '', 'deleted'),
('', 130, 'rahul', '', 'heloo', 'hiii', 'hiee', 'bbye', 5, 'No', 'deleted'),
('', 131, 'rahul', '', 'heloo', 'hiii', 'hiee', 'bbye', 56, '', 'deleted'),
('', 132, 'ritika', '', 'Total Pages', 'Journal', 'ISSN', 'no', 4, 'Yes', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `teach_rg`
--

CREATE TABLE IF NOT EXISTS `teach_rg` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(11) NOT NULL,
  `Teach_RG_NE` varchar(30) NOT NULL,
  `Teach_RG_TS` varchar(50) NOT NULL,
  `Teach_RG_DA` varchar(50) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_RG_NE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_rg`
--

INSERT INTO `teach_rg` (`User_Id`, `Year`, `Teach_RG_NE`, `Teach_RG_TS`, `Teach_RG_DA`) VALUES
('', '', 'hello', 'world', 'Programmer'),
('n', '2003', 'm', 'm', 'm'),
('n', '2003', 'n', 'n', 'n');

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
  `Teach_TLM_API` int(11) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_TLM_SD`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_tlm`
--

INSERT INTO `teach_tlm` (`User_Id`, `Year`, `Teach_TLM_SD`, `Teach_TLM_API`) VALUES
('a', '2003', 'a', 5),
('n', '', 'python is functional programmi', 7),
('n', '2003', 'cjscg', 2),
('n', '2003', 'gd', 15),
('n', '2003', 'nm', 5),
('v', '2003', 'n', 5),
('a', '2011', 'dfghdf', 0),
('shaligram.prajapat@gmail.com', '2013-2014', 'Updated analysis and design of algorithm contents ,notes, assignments For more details ,visit : algorithm-analysis--design-shaligram@googlegroups.com', 2),
('shaligram.prajapat@gmail.com', '2013-2014', 'Updated computer graphics contents, study materials, notes, manuscript, assignments. For more details, visit: computergraphics_shaligram@googlegroups.com', 2),
('shaligram.prajapat@gmail.com', '2013-2014', 'Improved Projects planning ,scheduling, submissions alignments with the growth of syllabus and industry requirements for more details visit : information-system-analysis-and-design_shaligram@googlegroups.com', 2),
('shaligram.prajapat@gmail.com', '2013-2014', 'Small projects, Industry project life cycle and SDLC ,visit: https://sites.google.com/site/shaligramiipsdavvindore/activities/academic-projects', 2),
('shaligram.prajapat@gmail.com', '2013-2014', 'Conduction of end Semester CV/PV/Lab examination(Assistant superintended of end-semester examination April-May 2012)', 2),
('shaligram.prajapat@gmail.com', '2013-2014', 'Designed and Updated syllabus for computer graphics, Project management plan for students projects, Visit :https://groups.google.com/forum/hl=enfromgroupsforum/computergraphics_shaligram', 2),
('shaligram.prajapat@gmail.com', '2013-2014', 'Updated syllabus of Electronic Circuits, syllabus for BCA program of PIMR. This paper is included in BCA- II semester (Syllabus updated on May 28, 2012.)', 2),
('shaligram.prajapat@gmail.com', '2013-2014', 'pulikt says "hii"', 5),
('shaligram.prajapat@gmail.com', '2013-2014', 'a', 1),
('shaligram.prajapat@gmail.com', '2013-2014', 'pulkit says â€œSatal is badâ€œ', 1);

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
('vikas', 'vikas', 1);
