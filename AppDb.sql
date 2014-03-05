-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 24, 2014 at 04:05 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `EmergencyApp`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminTable`
--

CREATE TABLE `adminTable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `area` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `phoneNum` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `adminTable`
--

INSERT INTO `adminTable` (`id`, `name`, `area`, `address`, `phoneNum`) VALUES
(1, 'Garda', 'cork', 'Opera Lane, Cork, Ireland', '0860558229'),
(2, 'Fire Dep', 'Cork', 'Patricks street, Cork, Ireland', '0871234567');

-- --------------------------------------------------------

--
-- Table structure for table `userTable`
--

CREATE TABLE `userTable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `homeAddress` varchar(150) NOT NULL,
  `area` varchar(50) NOT NULL,
  `contact1` varchar(50) NOT NULL,
  `contact2` varchar(50) NOT NULL,
  `contact3` varchar(50) NOT NULL,
  `details` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
