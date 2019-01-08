-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 16, 2016 at 02:28 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `url`
--
CREATE DATABASE IF NOT EXISTS `url` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `url`;

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100000026 ;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `url`, `code`, `created`) VALUES
(100000020, 'http://bootsnipp.com/register', '1njcic', '2016-05-10 01:27:00'),
(100000021, 'http://www.google.com', '1njcid', '2016-05-10 10:24:19'),
(100000022, 'http://jsfiddle.net/hashem/crspu/555/', '1njcie', '2016-05-10 10:41:26'),
(100000023, 'http://www.facebook.com', '1njcif', '2016-05-15 00:24:54'),
(100000024, 'https://www.dyclassroom.com/chartjs/chartjs-how-to-draw-bar-graph-using-data-from-mysql-table-and-php', '1njcig', '2016-05-16 10:14:57'),
(100000025, 'http://en.savefrom.net/#url=http://youtube.com/watch?v=mmz79gH0l6c&utm_source=youtube.com&utm_medium=short_domains&utm_campaign=www.ssyoutube.com', '1njcih', '2016-05-16 10:19:01');

-- --------------------------------------------------------

--
-- Table structure for table `link_counter`
--

CREATE TABLE IF NOT EXISTS `link_counter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(100) NOT NULL,
  `code` varchar(30) NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `link_counter`
--

INSERT INTO `link_counter` (`id`, `link`, `code`, `count`) VALUES
(13, 'http://localhost/urlshort/1njcig', '1njcig', 3),
(14, 'http://localhost/urlshort/1njcih', '1njcih', 0),
(15, 'http://localhost/urlshort/1njcid', '1njcid', 1);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `playerid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `score` int(11) DEFAULT '0',
  PRIMARY KEY (`playerid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`playerid`, `score`) VALUES
(1, 10),
(2, 40),
(3, 20),
(4, 9),
(5, 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `password`) VALUES
(8, 'kartik', 'kartik.tanksali@gmail.com', '12345'),
(9, 'kartik', 'k@gmail.com', 'kartik'),
(10, 'Shruti', 's@gmail.com', 'shruti'),
(12, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_links`
--

CREATE TABLE IF NOT EXISTS `user_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `url_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`,`url_id`),
  KEY `url_id` (`url_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_links`
--

INSERT INTO `user_links` (`id`, `uid`, `url_id`) VALUES
(5, 9, 100000021),
(1, 9, 100000024),
(2, 9, 100000024),
(3, 9, 100000024),
(4, 9, 100000025);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_links`
--
ALTER TABLE `user_links`
  ADD CONSTRAINT `ffk` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ffk2` FOREIGN KEY (`url_id`) REFERENCES `links` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
