-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2016 at 07:48 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `essav`
--

-- --------------------------------------------------------

--
-- Table structure for table `newsAdmin`
--

CREATE TABLE IF NOT EXISTS `newsAdmin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `texte` text NOT NULL,
  `date_` date NOT NULL,
  `auteur` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `newsAdmin`
--

INSERT INTO `newsAdmin` (`id`, `title`, `texte`, `date_`, `auteur`) VALUES
(6, 'site 2.0', 'Le site d''essavilly vous propose maintenant une nouvelle version. Venez la découvrir dès maintenant.', '2016-04-12', 'administrator u');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `surnom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pass`, `email`, `nom`, `prenom`, `surnom`) VALUES
(1, '', '', 'jules', 'eschbach', 'test'),
(2, 'hola', 'goig', 'icn', 'ljnc', 'lknjc'),
(3, '5c2dd944dde9e08881bef0894fe7b22a5c9c4b06', 'jules.eschbach@icloud.com', 'eschbach', 'jules', 'leboss'),
(4, '5c2dd944dde9e08881bef0894fe7b22a5c9c4b06', 'ju', 'eschbach', 'jules', 'llrl'),
(5, 'eed1903a65fb51375c9a57c0d5925ebe4056dcab', 'ro', 'ro', 'ro', 'ro'),
(6, '51e69892ab49df85c6230ccc57f8e1d1606caccc', 'u', 'u', 'u', 'u');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
