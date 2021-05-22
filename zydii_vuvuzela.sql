-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 22, 2021 at 11:42 AM
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
-- Database: `zydii_vuvuzela`
--

-- --------------------------------------------------------

--
-- Table structure for table `calculator`
--

DROP TABLE IF EXISTS `calculator`;
CREATE TABLE IF NOT EXISTS `calculator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `a` int(11) NOT NULL,
  `b` int(11) NOT NULL,
  `result` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `input`
--

DROP TABLE IF EXISTS `input`;
CREATE TABLE IF NOT EXISTS `input` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jina` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `input`
--

INSERT INTO `input` (`id`, `jina`) VALUES
(1, 'my first post'),
(2, 'my second post');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Sid Blanda', 'kennedy68@keebler.com', 'Nb$y!9Q19(6vK'),
(2, 'Mrs. Emilia Pacocha DVM', 'fred.jacobi@kshlerin.net', 'D3WOIwe%K7/lB^2+M'),
(3, 'Dr. Liam Johns', 'sedrick.bernier@eichmann.com', '$2y$10$x92iZ7WjcgC/jMz/9F95X.dfsOUs/aSMQAsMmYGH0RQ23buW.siRi'),
(4, 'Caitlyn Mosciski DVM', 'predovic.triston@simonis.net', 'password');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
