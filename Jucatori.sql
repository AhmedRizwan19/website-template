-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 24, 2018 at 01:43 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `jucatori_de_fotbal`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `Jucatori`
-- 

CREATE TABLE `jucatori` (
  `Nr Crt` tinyint(4) NOT NULL,
  `Nume` varchar(35) NOT NULL,
  `Data_nasterii` date NOT NULL,
  `Tara` varchar(40) NOT NULL,
  `Echipa` varchar(40) NOT NULL,
  `Post` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `Jucatori`
-- 

INSERT INTO `Jucatori` VALUES (1, 'Cristiano Ronaldo', '1985-02-05', 'Portugalia', 'Real Madrid', 'Atacant');
INSERT INTO `Jucatori` VALUES (2, 'Lionel Messi', '1987-06-24', 'Argentina', 'FC Barcelona', 'Atacant');
INSERT INTO `Jucatori` VALUES (3, 'Neymar Da silva', '1992-02-05', 'Brazilia', 'PSG', 'Atacant');
INSERT INTO `Jucatori` VALUES (4, 'Andres Iniesta', '1984-05-11', 'Spania', 'FC Barcelona', 'Mijlocas');
INSERT INTO `Jucatori` VALUES (5, 'Gareth Bale', '1989-07-16', 'Anglia', 'Real Madrid', 'Atacant');
