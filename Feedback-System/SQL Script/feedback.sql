-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2016 at 08:16 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `student_feedback` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `uno` varchar(60) NOT NULL,
  `Month1` int(11) NOT NULL,
  `Month2` int(11) NOT NULL,
  `Month3` int(11) NOT NULL,
  `Month4` int(11) NOT NULL,
  `Month5` int(11) NOT NULL,
  `Month6` int(11) NOT NULL,
  `overall` int(11) NOT NULL,
  `comments` varchar(600) NOT NULL,
  `name` varchar(60) NOT NULL ,
  `email` varchar(60) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `uno` (`uno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



INSERT INTO `student_feedback` (`uno`, `Month1`, `Month2`, `Month3`, `Month4`, `Month5`, `Month6`, `overall` , `comments`  ,`name` , `email`) VALUES
('14428778', 50, 39, 40, 90, 100, 67, 55, 'very good', 'Lisa Murphy', 'lisa@ncirl.ie'),
('14428775', 50, 39, 40, 90, 100, 67, 90, 'very good', 'Lisa Murphy', 'lisa@ncirl.ie'),
('14428773', 50, 39, 40, 90, 100, 67, 42, 'very good', 'Lisa Murphy', 'lisa@ncirl.ie'),
('14428771', 50, 39, 40, 90, 100, 67, 23, 'very good', 'Lisa Murphy', 'lisa@ncirl.ie');


