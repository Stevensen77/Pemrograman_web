-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2020 at 01:23 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ivory`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `nama_barang`, `type`, `spesification`, `tanggal_in`, `tanggal_out`, `amount`, `note`, `length`, `capacity`, `upload`, `session`) VALUES
(1, 'SFP', '2', 'kalakal', '2019-04-23 14:38:47', '2019-04-30 15:52:34', 2, ' wek', 0, 0, 'hard-disk.png', ''),
(2, 'SFP', '1', 'Ganteng', '2019-04-30 18:26:58', '2019-04-30 18:28:04', 3, 'Jangan main-main ', 0, 0, 'classroom.png', 'Sarah');

-- --------------------------------------------------------

--
-- Table structure for table `input3`
--

CREATE TABLE `input3` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `input3`
--

INSERT INTO `input3` (`id`, `nama_barang`, `type`, `spesification`, `tanggal`, `amount`, `note`, `length`, `capacity`, `upload`, `session`) VALUES
(3, 'Cable', '1', 'Jelek', '2019-04-30 18:50:02', 1, 'Wek ', 2, 2, 'box.png', 'Sarah'),
(4, 'Cable', '1', 'Dudong', '2019-05-03 13:52:52', 3, ' Jajaja', 1, 1, 'SHARINGAN.png', 'Sarah'),
(5, 'SFP', '2', 'Jackal', '2019-05-03 13:53:32', 3, ' Nothing', 0, 0, 'rickshaw-3986689_960_720.png', 'Sarah'),
(6, 'Cable', '2', 'nomnom', '2019-05-03 13:54:14', 8, ' Kelelawar', 1, 2, 'photo_2019-04-08_20-30-36.jpg', 'Sarah'),
(7, 'Cable', '2', 'Mamamama', '2019-05-03 13:55:02', 2, 'Toloooong ', 1, 2, 'digital-campaign.png', 'Sarah'),
(8, 'SFP', '1', 'Omooooo', '2019-05-03 13:55:33', 1, 'Puhlissss ', 0, 0, 'cogwheel.png', 'Sarah'),
(9, 'SFP', '2', 'Ucucucu', '2019-05-03 13:56:33', 1, 'Empaaa ', 0, 0, 'decrease (1).png', 'Sarah'),
(10, 'Cable', '2', 'BBeleac', '2019-06-24 10:18:45', 4, ' Wek', 2, 1, 'Undangan Penyusunan Dokumen Best Unit 2019 Telkom ', 'Sarah'),
(11, 'Cable', '1', 'jajaa', '2019-09-09 11:57:59', 2, ' we', 1, 1, 'MOM Improvement Telkom.id 20190822.pdf', 'Sarah'),
(12, 'Cable', 'type1', 'yy', '2020-01-25 14:57:37', 2, ' acc', 0, 0, 'gambar odoo 2.jpg', 'tes'),
(13, 'Cable', '1', '8', '2020-01-25 15:28:10', 7, ' ', 0, 0, '1200px-Telkom_Indonesia_2013.svg.png', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `from1` varchar(100) NOT NULL,
  `to1` varchar(100) NOT NULL,
  `capacity` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `tanggal`, `from1`, `to1`, `capacity`, `session`) VALUES
(1, '2019-04-23', 'banten', 'banten', '1', 'Kalamadhi1'),
(2, '2019-04-26', 'jakpus', 'jaksel', '3', 'Sarah');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `position` varchar(25) NOT NULL,
  `hp` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `position`, `hp`) VALUES
(45, 'yusufalvinor', '49d6a232fff6856b139a9159679aac1f', 'yusuf alvino', 'staf', '081291309173'),
(46, 'Kalamadhi1', '707a6f95527b701ade3c9cc1e3c978d8', 'Kalam', 'Staf', '081320135038'),
(47, 'Satrio', '58363cd7b2c05778d65a98e7d2281c39', 'Satrio Saja', 'Staf', '08111111111'),
(48, 'Sarah', 'c642cbd67d6bec4266a643aa6fe750a0', 'Sarah S', 'Staff', '+628122223'),
(49, 'erifiandi', 'd7163ec50090b9f3d611abcfd6e30902', 'erifiandi', 'Internship', '081263391959'),
(50, 'Johan', '485acacf4ce17734a7d07949244cb211', 'Johan', 'OFF 0 Becakayu', '08098999921'),
(51, 'James', 'ffed880985d9e700410b9cb7133f0517', 'James Isaac', 'OFF 1 BB', '0809212142'),
(52, 'Tenkaicihi', '39a2343fc9b1926ad09542753edb47dc', 'jona', 'staf', '08111111111'),
(53, 'James12', 'ffed880985d9e700410b9cb7133f0517', 'James Norrington', 'OFF 0 Becakayu', '081221865432'),
(54, 'tes', '28b662d883b6d76fd96e4ddc5e9ba780', 'tes', 'tes', 'tes');

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `input3`
--
ALTER TABLE `input3`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
