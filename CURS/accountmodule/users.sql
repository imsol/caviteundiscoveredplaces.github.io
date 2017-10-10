-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 04, 2017 at 05:40 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `personal_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `firstname` varchar(50) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Couse_Sec` varchar(50) NOT NULL,
  `Student_Num` int(50) NOT NULL,
  `Father` varchar(50) NOT NULL,
  `Mother` varchar(50) NOT NULL,
  `bday` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `Contact` int(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`Student_Num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `middlename`, `Surname`, `Couse_Sec`, `Student_Num`, `Father`, `Mother`, `bday`, `email`, `Contact`, `image`) VALUES
('qq', 'qq', 'qqq', 'qqq', 4545445, 'qqqq', 'qqq', '2017-09-07', 'qqq@qq.qq', 4455, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
