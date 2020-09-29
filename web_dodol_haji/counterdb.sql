-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2019 at 01:52 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_ale`
--

-- --------------------------------------------------------

--
-- Table structure for table `counterdb`
--

CREATE TABLE `counterdb` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `counter` varchar(20) NOT NULL,
  `browser` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counterdb`
--

INSERT INTO `counterdb` (`id`, `tanggal`, `ip_address`, `counter`, `browser`) VALUES
(3, '2016-12-30', '195.20.5.31', '1', 'Firefox'),
(9, '2019-10-09', '::1', '1', 'Chrome/Opera'),
(10, '2019-10-10', '::1', '1', 'Chrome/Opera'),
(11, '2019-10-12', '::1', '1', 'Chrome/Opera');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counterdb`
--
ALTER TABLE `counterdb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `counterdb`
--
ALTER TABLE `counterdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
