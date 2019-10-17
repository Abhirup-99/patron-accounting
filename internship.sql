-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 13, 2019 at 09:50 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `password`, `email`, `name`) VALUES
(1, 'sagnik', 'sagnik', 'abhiruppalmethodist@gmail.com', 'Sagnik Pal'),
(2, 'abhi', 'abhi', 'abcd@gmail.com', 'abhi');

-- --------------------------------------------------------

--
-- Table structure for table `gstdata`
--

DROP TABLE IF EXISTS `gstdata`;
CREATE TABLE IF NOT EXISTS `gstdata` (
  `id` int(25) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `business` varchar(200) NOT NULL,
  `tradename` varchar(200) NOT NULL,
  `PAN` varchar(200) NOT NULL,
  `Adhaar` varchar(200) NOT NULL,
  `Cheque` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Rent` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gstdata`
--

INSERT INTO `gstdata` (`id`, `email`, `mobile`, `business`, `tradename`, `PAN`, `Adhaar`, `Cheque`, `Address`, `Rent`) VALUES
(1, 'abhiruppalmethodist@gmail.com', '442e7', '12335', 'wssfd', 'PAN/dummy.pdf', 'Adhaar/dummy.pdf', 'Cheque/dummy.pdf', 'Address/dummy.pdf', 'Rent/dummy.pdf'),
(1, 'abhiruppalmethodist@gmail.com', '442e7', '12335', 'wssfd', 'PAN/dummy.pdf', 'Adhaar/dummy.pdf', 'Cheque/dummy.pdf', 'Address/dummy.pdf', 'Rent/dummy.pdf'),
(1, 'abhiruppalmethodist@gmail.com', '442e7', '12335', 'wssfd', 'PAN/dummy.pdf', 'Adhaar/abhiruppalmethodist@gmail.comAdhaar71436.pdf', 'Cheque/abhiruppalmethodist@gmail.comCheque90727.pdf', 'Address/abhiruppalmethodist@gmail.comAddress93940.pdf', 'Rent/dummy.pdf'),
(1, 'abhiruppalmethodist@gmail.com', '442e7', '12335', 'wssfd', 'PAN/dummy.pdf', 'Adhaar/abhiruppalmethodist@gmail.comAdhaar63831.pdf', 'Cheque/abhiruppalmethodist@gmail.comCheque76740.pdf', 'Address/abhiruppalmethodist@gmail.comAddress64872.pdf', 'Rent/dummy.pdf'),
(1, 'abhiruppalmethodist@gmail.com', '745', '12335', 'wssfd', 'PAN/sample.pdf', 'Adhaar/abhiruppalmethodist@gmail.comAdhaar53524.pdf', 'Cheque/abhiruppalmethodist@gmail.comCheque76550.pdf', 'Address/abhiruppalmethodist@gmail.comAddress94193.pdf', 'Rent/sample.pdf'),
(1, 'abhiruppalmethodist@gmail.com', '442e7', '12335', 'wssfd', 'PAN/helloWorl (31).docx', 'Adhaar/abhiruppalmethodist@gmail.comAdhaar89598.pdf', 'Cheque/abhiruppalmethodist@gmail.comCheque96799.pdf', 'Address/abhiruppalmethodist@gmail.comAddress90147.pdf', ''),
(1, 'abhiruppalmethodist@gmail.com', '442e7', '12335', 'wssfd', 'PAN/helloWorl (31).docx', 'Adhaar/abhiruppalmethodist@gmail.comAdhaar96953.pdf', 'Cheque/abhiruppalmethodist@gmail.comCheque61808.pdf', 'Address/abhiruppalmethodist@gmail.comAddress79567.pdf', ''),
(1, 'abhiruppalmethodist@gmail.com', '442e7', '12335', 'wssfd', 'PAN/abhiruppalmethodist@gmail.comPAN96079.docx', 'Adhaar/abhiruppalmethodist@gmail.comAdhaar89599.pdf', 'Cheque/abhiruppalmethodist@gmail.comCheque51055.pdf', 'Address/abhiruppalmethodist@gmail.comAddress59707.pdf', ''),
(1, 'abhiruppalmethodist@gmail.com', '442e7', '12335', 'wssfd', 'PAN/abhiruppalmethodist@gmail.comPAN92177.docx', 'Adhaar/abhiruppalmethodist@gmail.comAdhaar82934.pdf', 'Cheque/abhiruppalmethodist@gmail.comCheque86766.pdf', 'Address/abhiruppalmethodist@gmail.comAddress90534.pdf', ''),
(1, 'abhiruppal9051323282@gmail.com', '442e7', '12335', 'wssfd', 'PAN/abhiruppal9051323282@gmail.comPAN57140.pdf', 'Adhaar/abhiruppal9051323282@gmail.comAdhaar57977.pdf', 'Cheque/abhiruppal9051323282@gmail.comCheque64814.pdf', 'Address/abhiruppal9051323282@gmail.comAddress65799.pdf', ''),
(1, 'abhiruppalmethodist@gmail.com', '442e7', '12335', 'wssfd', 'PAN/abhiruppalmethodist@gmail.comPAN82691.pdf', 'Adhaar/abhiruppalmethodist@gmail.comAdhaar50416.pdf', 'Cheque/abhiruppalmethodist@gmail.comCheque94030.pdf', 'Address/abhiruppalmethodist@gmail.comAddress58616.pdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `llpdata`
--

DROP TABLE IF EXISTS `llpdata`;
CREATE TABLE IF NOT EXISTS `llpdata` (
  `id` int(200) NOT NULL,
  `name1` varchar(200) NOT NULL,
  `name2` varchar(200) NOT NULL,
  `businessObjective` text NOT NULL,
  `TotalCapital` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `namePartner` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `IndividualContrib` varchar(100) NOT NULL,
  `DIN` varchar(100) NOT NULL,
  `PAN` varchar(100) NOT NULL,
  `Adhaar` varchar(100) NOT NULL,
  `Passport` varchar(100) NOT NULL,
  `Bank` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `llpdata`
--

INSERT INTO `llpdata` (`id`, `name1`, `name2`, `businessObjective`, `TotalCapital`, `Address`, `namePartner`, `email`, `mobile`, `qualification`, `occupation`, `IndividualContrib`, `DIN`, `PAN`, `Adhaar`, `Passport`, `Bank`) VALUES
(1, 'whsdjk', 'hjds', 'hvasdbjg,', 'hjds', 'Addressllp/gfhbnPAN76015.pdf', 'sdf', 'gfhbn', 'fgh', 'hj', 'ghj', 'yjkn', 'ghmj', 'PANllp/gfhbnPAN76015.pdf', '', 'Passportllp/gfhbnPassport74436.pdf', 'Bankllp/gfhbnBank74474.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

DROP TABLE IF EXISTS `master`;
CREATE TABLE IF NOT EXISTS `master` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`id`, `username`, `password`, `email`) VALUES
(1, 'abhirup', 'abhirup', 'abhiruppalmethodist@gmail.com'),
(2, 'sag', 'sag', 'sag');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `cin` varchar(255) NOT NULL,
  `CompanyName` varchar(255) DEFAULT NULL,
  `RegistrationNumber` varchar(15) NOT NULL,
  `CompanyOrLLP` varchar(15) NOT NULL,
  `AuthorisedCapital` int(20) NOT NULL,
  `PaidUpCapital` int(20) NOT NULL,
  `DateOfIncoporation` date NOT NULL,
  `RegisteredAddress1` varchar(255) NOT NULL,
  `RegisteredAddress2` varchar(255) DEFAULT NULL,
  `EmailId` varchar(30) NOT NULL,
  `DirectorName1` varchar(30) NOT NULL,
  `PAN1` int(20) NOT NULL,
  `DirectorName2` varchar(30) DEFAULT NULL,
  `PAN2` varchar(20) DEFAULT NULL,
  `DirectorName3` varchar(255) DEFAULT NULL,
  `PAN3` varchar(255) DEFAULT NULL,
  `DirectorName4` varchar(255) DEFAULT NULL,
  `PAN4` varchar(255) DEFAULT NULL,
  `DirectorName5` varchar(255) DEFAULT NULL,
  `PAN5` varchar(255) DEFAULT NULL,
  `password` varchar(26) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `cin`, `CompanyName`, `RegistrationNumber`, `CompanyOrLLP`, `AuthorisedCapital`, `PaidUpCapital`, `DateOfIncoporation`, `RegisteredAddress1`, `RegisteredAddress2`, `EmailId`, `DirectorName1`, `PAN1`, `DirectorName2`, `PAN2`, `DirectorName3`, `PAN3`, `DirectorName4`, `PAN4`, `DirectorName5`, `PAN5`, `password`) VALUES
(3, 'U7499', 'AMP Digital', '50352', 'Company', 1000, 100, '2013-09-12', '403,sovereign 1', 'sohna road', 'amitabh@ampdigital.co', 'Amitabh Verma', 658, 'Rajshri Paul', '658', '', '', '', '5', '', '', 'abhirup'),
(10, '456', 'ABC', '50352', 'Company', 1000, 100, '1999-10-10', '403,sovereign 1', 'sohna road', 'abcd@gmail.com', 'Amitabh Verma', 658, '', '', '', '', '', '', '', '', '52262');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `valid` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `valid`) VALUES
(1, 'abhirup', 'abhirup', 'Abhirup Pal', 'abhiruppalmethodist@gmail.com', 2),
(3, 'sagnik', 'sagnik', 'Sagnik Pal', 'abhiruppalmethodist@gmail.com', 2),
(5, 'abhirup', 'abhi', 'Abhirup Pal', 'abcd@gmail.com', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
