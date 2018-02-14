-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 29, 2017 at 02:39 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `phonenumber` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `confirmpassword` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `Email`, `phonenumber`, `password`, `confirmpassword`, `username`) VALUES
(1, 'eeeeee', 'fffff', 'rrrr', '0704', 'ee', 'er', 'eee'),
(27, 'yahaya', 'lule', 'yahya@gmail.com', '75467890', '1234', '1234', 'yahaya lule'),
(28, 'yahaya', 'lule', 'yahya@gmail.com', '75467890', '1234', '1234', 'yahaya lule'),
(29, 'Fasial', 'Semuko', 'semukof@yahoo', '75643', '1234', '123w', 'semuko fai'),
(36, 'aaaaab', 'ccccc', 'ccccc', '3333', '5555', '5555', 'rrrr'),
(37, 'arm', 'kalame', 'kamla', '453', '123', '123', 'aqwe'),
(38, 'Florence', 'Nassazi', 'Flo@ssazi', '231', '123', '123', 'Lorah'),
(39, 'a', 'b', 'c', '6', 'd', 'd', 'e'),
(40, 'xz', 'zx', 'vc', '78', '67', '67', 'gh'),
(41, 'Ham', 'Ptower', 'ham@p', '567', '123', '123', 'ham p'),
(42, 'Ham', 'Ptower', 'ham@p', '567', '123', '123', 'ham p'),
(43, 'a', 'b', 'c', '6', 'd', 'd', 'e'),
(44, 'Ham', 'Ptower', 'ham@p', '567', '123', '123', 'ham p'),
(45, 'ggggggg', 'fffffffffff', 'ffffffffffff', '333333', '444', '444', 'weee'),
(46, 'ggggggg', 'fffffffffff', 'ffffffffffff', '333333', '444', '444', 'weee'),
(47, 'hnb', 'nbv', 'nbv', '23', 'yu', 'uy', 'ghf'),
(48, 'kij', 'jik', 'lokij', '0987', 'oiu', 'oij', 'uyt'),
(49, 'kij', 'jik', 'lokij', '0987', 'oiu', 'oij', 'uyt'),
(50, 'gfds', 'ytr', 'kijuop', '0987', '123', '321', 'rews'),
(51, 'gfds', 'ytr', 'kijuop', '0987', '123', '321', 'rews'),
(52, 'xzs', 'qwa', 'asde', '123', '123', '123', 'nmh'),
(53, 'okij', 'juih', 'lojkh', '0987', 'oiu', 'oiu', 'loki'),
(54, 'gad', 'wera', 'wq@F', '123', '123', '123', 'ASD'),
(55, 'Armstrong', 'Kahwa', 'arm@kahwa', '075897654', '1qaz', '1qaz', 'Arm K'),
(56, 'Andrew', 'Ddamulira', 'andrew@damu', '075467322', '123we', '123we', 'andrew'),
(57, 'Allan', 'Tugume', 'allan@tugume', '0786548786', 'qwe', 'qwe', 'Allan T');
