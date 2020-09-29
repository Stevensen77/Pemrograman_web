-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Jul 2019 pada 06.09
-- Versi Server: 5.5.39
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
-- Struktur dari tabel `history`
--

CREATE TABLE IF NOT EXISTS `history` (
`id` int(25) NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `spesification` varchar(25) NOT NULL,
  `tanggal_in` date NOT NULL,
  `tanggal_out` date NOT NULL,
  `amount` int(25) NOT NULL,
  `note` varchar(25) NOT NULL,
  `length` varchar(25) NOT NULL,
  `capacity` varchar(25) NOT NULL,
  `upload` varchar(25) NOT NULL,
  `session` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `input`
--

CREATE TABLE IF NOT EXISTS `input` (
`id` int(25) NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `spesification` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `amount` int(25) NOT NULL,
  `note` varchar(25) NOT NULL,
  `length` varchar(25) NOT NULL,
  `capacity` varchar(25) NOT NULL,
  `upload` varchar(100) NOT NULL,
  `session` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `input`
--

INSERT INTO `input` (`id`, `nama_barang`, `type`, `spesification`, `tanggal`, `amount`, `note`, `length`, `capacity`, `upload`, `session`) VALUES
(2, 'SFP', 'GLC T', 'interface RJ-45', '2019-07-08', 6, ' qewqe', '', '100 meter', 'wow2t.jpg', 'yusufalvinor'),
(3, 'Cable', 'Single Mode', 'prime', '2019-07-08', 34, ' adsad', '1 meter', '8 - 10 mikrometer', 'anchor-rope-chain-cobweb-vector-illustration-vector-illustration-perfect-t-shirt-57466144.jpeg', 'yusufalvinor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `request`
--

CREATE TABLE IF NOT EXISTS `request` (
`id` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `from1` varchar(25) NOT NULL,
  `to1` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `session` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `request`
--

INSERT INTO `request` (`id`, `tanggal`, `from1`, `to1`, `type`, `session`) VALUES
(2, '2019-07-03', 'bekasi', 'banten', 'Single Mode', 'user'),
(3, '2019-07-02', 'jakbar', 'banten', 'GLC-T', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `position` varchar(25) NOT NULL,
  `hp` varchar(25) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `position`, `hp`) VALUES
(73, 'admin', '49d6a232fff6856b139a9159679aac1f', 'admin', 'admin', '081291309173'),
(72, 'user', '49d6a232fff6856b139a9159679aac1f', 'User', 'user', '081291309173'),
(70, 'yusufalvinor', '49d6a232fff6856b139a9159679aac1f', 'yusuf alvino', 'Manajer', '081291309173'),
(71, 'fajar', '49d6a232fff6856b139a9159679aac1f', 'fajar ilhamy', 'Manajer', '081291309173'),
(69, 'zulfan', '49d6a232fff6856b139a9159679aac1f', 'zulfan', 'Manajer', '081291309173');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `input`
--
ALTER TABLE `input`
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
MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `input`
--
ALTER TABLE `input`
MODIFY `id` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=74;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
