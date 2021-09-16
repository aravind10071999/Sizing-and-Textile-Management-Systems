-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2020 at 06:13 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nithiya-textiles`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE IF NOT EXISTS `accessories` (
  `acid` int(5) NOT NULL AUTO_INCREMENT,
  `acode` text NOT NULL,
  `pdate` text NOT NULL,
  `weight` text NOT NULL,
  `nbox` text NOT NULL,
  `scode` text NOT NULL,
  `ncover` text NOT NULL,
  `cost` text NOT NULL,
  PRIMARY KEY (`acid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`acid`, `acode`, `pdate`, `weight`, `nbox`, `scode`, `ncover`, `cost`) VALUES
(1, '24323', '2020-01-19', '', '23', '34535', '23', '2332');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE IF NOT EXISTS `billing` (
  `bid` int(100) NOT NULL AUTO_INCREMENT,
  `bilid` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `cname` text NOT NULL,
  `ccode` varchar(50) NOT NULL,
  `oid` varchar(50) NOT NULL,
  `totamt` varchar(50) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`bid`, `bilid`, `date`, `cname`, `ccode`, `oid`, `totamt`) VALUES
(1, 'id1', '2020-02-18', 'textile', '5678m', '67888', '24000');

-- --------------------------------------------------------

--
-- Table structure for table `concern`
--

CREATE TABLE IF NOT EXISTS `concern` (
  `cnid` int(5) NOT NULL AUTO_INCREMENT,
  `cid` text NOT NULL,
  `cname` text NOT NULL,
  `caddr` text NOT NULL,
  `cphone` text NOT NULL,
  `cemail` text NOT NULL,
  `oid` text NOT NULL,
  PRIMARY KEY (`cnid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `concern`
--

INSERT INTO `concern` (`cnid`, `cid`, `cname`, `caddr`, `cphone`, `cemail`, `oid`) VALUES
(1, '123', 'Siva Textiles', 'pollachi', '9994915435', 'siva@gmail.com', '542'),
(2, '5435', 'Giri Textiles', 'thudiyalur', '9677813391', 'giri@gmail.com', '4578');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE IF NOT EXISTS `delivery` (
  `did` int(100) NOT NULL AUTO_INCREMENT,
  `deid` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `loc` text NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`did`, `deid`, `date`, `loc`) VALUES
(1, '', '2020-02-17', 'theni'),
(2, 'id4567', '2020-02-17', 'theni');

-- --------------------------------------------------------

--
-- Table structure for table `eattendance`
--

CREATE TABLE IF NOT EXISTS `eattendance` (
  `eid` int(100) NOT NULL AUTO_INCREMENT,
  `emid` varchar(50) NOT NULL,
  `ename` text NOT NULL,
  `mon` text NOT NULL,
  `date` date NOT NULL,
  `itime` varchar(50) NOT NULL,
  `otime` varchar(50) NOT NULL,
  `pno` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `adrs` text NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `eattendance`
--

INSERT INTO `eattendance` (`eid`, `emid`, `ename`, `mon`, `date`, `itime`, `otime`, `pno`, `email`, `adrs`) VALUES
(1, '', 'mani', 'january', '2020-02-19', '9am', '6pm', '9876564323', 'mani@gmail.com', 'uppukkottai'),
(2, '9214', 'mani', 'january', '2020-02-19', '9am', '6pm', '9876564323', 'mani@gmail.com', 'uppukkottai');

-- --------------------------------------------------------

--
-- Table structure for table `esalary`
--

CREATE TABLE IF NOT EXISTS `esalary` (
  `sid` int(100) NOT NULL AUTO_INCREMENT,
  `said` varchar(50) NOT NULL,
  `amt` varchar(50) NOT NULL,
  `sdate` date NOT NULL,
  `ename` text NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `esalary`
--

INSERT INTO `esalary` (`sid`, `said`, `amt`, `sdate`, `ename`) VALUES
(1, 'sa555', '10000', '2020-02-19', ''),
(2, 'sa555', '10000', '2020-02-19', 'mani');

-- --------------------------------------------------------

--
-- Table structure for table `fgoods`
--

CREATE TABLE IF NOT EXISTS `fgoods` (
  `fid` int(5) NOT NULL AUTO_INCREMENT,
  `npieces` text NOT NULL,
  `fdate` text NOT NULL,
  `auseage` text NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `fgoods`
--

INSERT INTO `fgoods` (`fid`, `npieces`, `fdate`, `auseage`) VALUES
(1, '10', '2020-01-19', 'wrwer');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `meid` int(100) NOT NULL AUTO_INCREMENT,
  `mid` varchar(50) NOT NULL,
  `mtype` text NOT NULL,
  `odate` date NOT NULL,
  `ngoods` text NOT NULL,
  `oconfirm` text NOT NULL,
  `cid` varchar(50) NOT NULL,
  PRIMARY KEY (`meid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`meid`, `mid`, `mtype`, `odate`, `ngoods`, `oconfirm`, `cid`) VALUES
(1, '123', 'dress', '2020-02-19', '234', 'no', '456'),
(2, '123', 'dress', '2020-02-19', '234', 'no', '456');

-- --------------------------------------------------------

--
-- Table structure for table `order_recieve`
--

CREATE TABLE IF NOT EXISTS `order_recieve` (
  `orid` int(5) NOT NULL AUTO_INCREMENT,
  `cid` text NOT NULL,
  `otype` text NOT NULL,
  `odate` text NOT NULL,
  `ngoods` text NOT NULL,
  `oconfirm` text NOT NULL,
  `oid` text NOT NULL,
  PRIMARY KEY (`orid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `order_recieve`
--

INSERT INTO `order_recieve` (`orid`, `cid`, `otype`, `odate`, `ngoods`, `oconfirm`, `oid`) VALUES
(1, '234', 'Wholesale', '2020-01-19', '5', 'Yes', '23423');

-- --------------------------------------------------------

--
-- Table structure for table `order_require`
--

CREATE TABLE IF NOT EXISTS `order_require` (
  `ordid` int(5) NOT NULL AUTO_INCREMENT,
  `rcode` text NOT NULL,
  `nrequire` text NOT NULL,
  `brequire` text NOT NULL,
  `crequire` text NOT NULL,
  `ocode` text NOT NULL,
  PRIMARY KEY (`ordid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `order_require`
--

INSERT INTO `order_require` (`ordid`, `rcode`, `nrequire`, `brequire`, `crequire`, `ocode`) VALUES
(1, '23423', '10', '5', '5', '564');

-- --------------------------------------------------------

--
-- Table structure for table `phase`
--

CREATE TABLE IF NOT EXISTS `phase` (
  `pid` int(5) NOT NULL AUTO_INCREMENT,
  `acode` text NOT NULL,
  `pdate` text NOT NULL,
  `rdate` text NOT NULL,
  `pname` text NOT NULL,
  `cost` text NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `phase`
--

INSERT INTO `phase` (`pid`, `acode`, `pdate`, `rdate`, `pname`, `cost`) VALUES
(1, 'fd', '2020-01-19', '2020-01-19', 'adsf', 'sdfadsf');

-- --------------------------------------------------------

--
-- Table structure for table `rawmaterial`
--

CREATE TABLE IF NOT EXISTS `rawmaterial` (
  `rwgid` int(5) NOT NULL AUTO_INCREMENT,
  `nrolls` text NOT NULL,
  `pdate` text NOT NULL,
  `weight` text NOT NULL,
  `mcode` text NOT NULL,
  `scode` text NOT NULL,
  PRIMARY KEY (`rwgid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `rawmaterial`
--

INSERT INTO `rawmaterial` (`rwgid`, `nrolls`, `pdate`, `weight`, `mcode`, `scode`) VALUES
(1, '243', '2020-01-19', '5345', '345345', '34535');

-- --------------------------------------------------------

--
-- Table structure for table `sbilling`
--

CREATE TABLE IF NOT EXISTS `sbilling` (
  `bid` int(100) NOT NULL AUTO_INCREMENT,
  `bilid` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `cname` text NOT NULL,
  `ccode` varchar(50) NOT NULL,
  `oid` varchar(50) NOT NULL,
  `totamt` varchar(50) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sbilling`
--

INSERT INTO `sbilling` (`bid`, `bilid`, `date`, `cname`, `ccode`, `oid`, `totamt`) VALUES
(1, 'bil78', '2020-02-19', 'mani textiles', 'mani555', 'or555', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `schemical`
--

CREATE TABLE IF NOT EXISTS `schemical` (
  `chid` int(100) NOT NULL AUTO_INCREMENT,
  `cid` varchar(50) NOT NULL,
  `cname` text NOT NULL,
  `ceff` text NOT NULL,
  `edate` date NOT NULL,
  PRIMARY KEY (`chid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `schemical`
--

INSERT INTO `schemical` (`chid`, `cid`, `cname`, `ceff`, `edate`) VALUES
(1, '456', 'silicone waxes', 'colour change', '2020-02-19');

-- --------------------------------------------------------

--
-- Table structure for table `sconcern`
--

CREATE TABLE IF NOT EXISTS `sconcern` (
  `cnid` int(100) NOT NULL AUTO_INCREMENT,
  `cid` varchar(50) NOT NULL,
  `cname` text NOT NULL,
  `caddr` text NOT NULL,
  `cphone` text NOT NULL,
  `cemail` text NOT NULL,
  `oid` varchar(50) NOT NULL,
  PRIMARY KEY (`cnid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sconcern`
--

INSERT INTO `sconcern` (`cnid`, `cid`, `cname`, `caddr`, `cphone`, `cemail`, `oid`) VALUES
(1, '123', 'mani concern', 'theni', '9876453210', 'mani@gmail.com', '908id');

-- --------------------------------------------------------

--
-- Table structure for table `sdelivery`
--

CREATE TABLE IF NOT EXISTS `sdelivery` (
  `did` int(100) NOT NULL AUTO_INCREMENT,
  `deid` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `loc` text NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sdelivery`
--

INSERT INTO `sdelivery` (`did`, `deid`, `date`, `loc`) VALUES
(1, 'de09', '2020-02-19', 'theni');

-- --------------------------------------------------------

--
-- Table structure for table `sfgoods`
--

CREATE TABLE IF NOT EXISTS `sfgoods` (
  `sfid` int(100) NOT NULL AUTO_INCREMENT,
  `npieces` varchar(50) NOT NULL,
  `fdate` date NOT NULL,
  `auseage` text NOT NULL,
  PRIMARY KEY (`sfid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sfgoods`
--

INSERT INTO `sfgoods` (`sfid`, `npieces`, `fdate`, `auseage`) VALUES
(1, '45', '2020-02-19', 'thread,button,linings');

-- --------------------------------------------------------

--
-- Table structure for table `sgoods`
--

CREATE TABLE IF NOT EXISTS `sgoods` (
  `sgid` int(5) NOT NULL AUTO_INCREMENT,
  `scode` text NOT NULL,
  `odate` text NOT NULL,
  `nsent` text NOT NULL,
  `mcode` text NOT NULL,
  `dcode` text NOT NULL,
  `szcode` text NOT NULL,
  `oid` text NOT NULL,
  PRIMARY KEY (`sgid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sgoods`
--

INSERT INTO `sgoods` (`sgid`, `scode`, `odate`, `nsent`, `mcode`, `dcode`, `szcode`, `oid`) VALUES
(1, '4234', '2020-01-19', '10', '2342', '234234', '2342', '23423');

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE IF NOT EXISTS `shipment` (
  `sid` int(100) NOT NULL AUTO_INCREMENT,
  `shid` varchar(50) NOT NULL,
  `sname` text NOT NULL,
  `ddate` date NOT NULL,
  `dor` date NOT NULL,
  `cost` varchar(50) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`sid`, `shid`, `sname`, `ddate`, `dor`, `cost`) VALUES
(1, '0', 'ship1', '2020-02-17', '2020-02-17', '1000'),
(2, 'id1', 'ship1', '2020-02-17', '2020-02-17', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `sship`
--

CREATE TABLE IF NOT EXISTS `sship` (
  `sid` varchar(50) NOT NULL,
  `shid` varchar(50) NOT NULL,
  `sname` text NOT NULL,
  `ddate` date NOT NULL,
  `dor` date NOT NULL,
  `cost` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sship`
--

INSERT INTO `sship` (`sid`, `shid`, `sname`, `ddate`, `dor`, `cost`) VALUES
('', 'sh01', 'ship5', '2020-02-19', '2020-02-19', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `spid` int(100) NOT NULL AUTO_INCREMENT,
  `sid` varchar(50) NOT NULL,
  `sname` text NOT NULL,
  `saddr` text NOT NULL,
  `sphone` varchar(50) NOT NULL,
  `semail` text NOT NULL,
  PRIMARY KEY (`spid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`spid`, `sid`, `sname`, `saddr`, `sphone`, `semail`) VALUES
(1, 'sp12', 'Rajesh', 'uppukkottai', '9087654567', 'mani@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `swarehouse`
--

CREATE TABLE IF NOT EXISTS `swarehouse` (
  `wid` int(100) NOT NULL AUTO_INCREMENT,
  `wcode` varchar(50) NOT NULL,
  `wname` text NOT NULL,
  `adrs` text NOT NULL,
  `pno` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `ncon` varchar(50) NOT NULL,
  `conno` varchar(50) NOT NULL,
  `adate` date NOT NULL,
  `cost` varchar(50) NOT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `swarehouse`
--

INSERT INTO `swarehouse` (`wid`, `wcode`, `wname`, `adrs`, `pno`, `email`, `ncon`, `conno`, `adate`, `cost`) VALUES
(1, 'wa7890', 'retail', 'theni', '8756342134', 'mani@gmail.com', '10', 'c5555', '2020-02-19', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `swaste`
--

CREATE TABLE IF NOT EXISTS `swaste` (
  `swid` int(100) NOT NULL AUTO_INCREMENT,
  `acode` varchar(50) NOT NULL,
  `pname` text NOT NULL,
  `ocode` varchar(50) NOT NULL,
  `cost` varchar(50) NOT NULL,
  PRIMARY KEY (`swid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `swaste`
--

INSERT INTO `swaste` (`swid`, `acode`, `pname`, `ocode`, `cost`) VALUES
(1, 'wa56908', 'cotton', '890oc', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE IF NOT EXISTS `transport` (
  `tid` int(100) NOT NULL AUTO_INCREMENT,
  `tcode` varchar(50) NOT NULL,
  `gto` text NOT NULL,
  `ccode` varchar(50) NOT NULL,
  `vno` varchar(50) NOT NULL,
  `dist` varchar(50) NOT NULL,
  `ddate` date NOT NULL,
  `tcost` text NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`tid`, `tcode`, `gto`, `ccode`, `vno`, `dist`, `ddate`, `tcost`) VALUES
(1, '123', 'phase', '5678m', '8906', '45km', '2020-02-17', '100');

-- --------------------------------------------------------

--
-- Table structure for table `warping`
--

CREATE TABLE IF NOT EXISTS `warping` (
  `waid` int(100) NOT NULL AUTO_INCREMENT,
  `wid` varchar(50) NOT NULL,
  `wtype` text NOT NULL,
  `mname` text NOT NULL,
  `process` text NOT NULL,
  PRIMARY KEY (`waid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `warping`
--

INSERT INTO `warping` (`waid`, `wid`, `wtype`, `mname`, `process`) VALUES
(1, 'wa12', 'beam', 'creel', ' It consists of wooden pegs horizontally to hold the supply package');

-- --------------------------------------------------------

--
-- Table structure for table `wastage`
--

CREATE TABLE IF NOT EXISTS `wastage` (
  `wid` int(5) NOT NULL AUTO_INCREMENT,
  `acode` text NOT NULL,
  `ocode` text NOT NULL,
  `pname` text NOT NULL,
  `cost` text NOT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `wastage`
--

INSERT INTO `wastage` (`wid`, `acode`, `ocode`, `pname`, `cost`) VALUES
(1, 'wa789', 'or5655', 'creel', '1000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
