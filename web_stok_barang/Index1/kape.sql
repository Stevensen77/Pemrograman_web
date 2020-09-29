-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2019 at 05:55 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kape`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
`id` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `spesification` varchar(50) NOT NULL,
  `tanggal_in` varchar(100) NOT NULL,
  `tanggal_out` varchar(100) NOT NULL,
  `amount` int(50) NOT NULL,
  `note` varchar(50) NOT NULL,
  `length` int(50) NOT NULL,
  `capacity` int(50) NOT NULL,
  `upload` varchar(50) NOT NULL,
  `session` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `input3`
--

CREATE TABLE IF NOT EXISTS `input3` (
`id` int(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `spesification` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `note` varchar(50) NOT NULL,
  `length` int(50) NOT NULL,
  `capacity` int(50) NOT NULL,
  `upload` varchar(50) NOT NULL,
  `session` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
`id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `from1` varchar(100) NOT NULL,
  `to1` varchar(100) NOT NULL,
  `capacity` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `position` varchar(25) NOT NULL,
  `hp` varchar(25) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `input3`
--
ALTER TABLE `input3`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `input3`
--
ALTER TABLE `input3`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
