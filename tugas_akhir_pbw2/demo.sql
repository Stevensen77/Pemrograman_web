-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2018 at 01:46 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_lahan`
--

CREATE TABLE `data_lahan` (
  `lokasi` varchar(500) NOT NULL,
  `luas` varchar(100) NOT NULL,
  `sertifikat` varchar(100) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `gambar_name` varchar(255) NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `username` varchar(50) NOT NULL,
  `id_lahan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_lahan`
--

INSERT INTO `data_lahan` (`lokasi`, `luas`, `sertifikat`, `harga`, `keterangan`, `gambar_name`, `uploaded_on`, `username`, `id_lahan`) VALUES
('jkk', '343', 'shm', 30000000, 'tesss111', 'login_image.jpg', '2018-05-07 14:37:04', 'dimastes1', 20),
('fdfs', '7', 'dfsf', 7, 'dgng', 'bg-01.jpg', '2018-05-07 18:21:07', 'dimastes1', 22),
('solo', '789', 'hem', 890, 'jhg', 'pohon.jpg', '2018-05-07 18:21:31', 'dimastes1', 23),
('jember', '180', 'shem', 180, 'sfds', '3page-img1.jpg', '2018-05-07 18:42:26', 'stev', 24);

-- --------------------------------------------------------


/*
CREATE TABLE `nego_chat` (
  `id_chat` int(11) NOT NULL,
  `idlahan` varchar(10) NOT NULL,
  `userlahannya` varchar(50) NOT NULL,
  `userpembelinya` varchar(50) NOT NULL,
  `nego` int(11) NOT NULL,
  `deal` int(11) NOT NULL,
  `created_pas` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `nego_chat` (`id_chat`, `idlahan`, `userlahannya`, `userpembelinya`, `nego`, `deal`, `created_pas`) VALUES
(1, '22', 'dimastes1', 'stev', 2000000, 1000000, '2018-05-26 13:13:13');
*/

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `alamat`, `no_hp`, `email`, `created_at`) VALUES
(10, 'stev', '$2y$10$6GANRuNIHL6yaR2jJ6AH0euPovd5ApbAT7xLcfq5Ff1uMtszGSHta', 'permata 1 a', '08234567891', 'stev@gmail.com', '2018-05-05 16:35:52'),
(11, 'ican', '$2y$10$YzPljlD8KHn0byXdaI5.ZOeFxG9d6wQMThwz9UpazXVVwiSrxfI8e', 'tj', '081234567892', 'ican@gmail.com', '2018-05-05 16:49:01'),
(12, 'ichsan', '$2y$10$XDbjmRhbiv69copiJ.vmO.Vq5qgCktaxQo8nMoCTD9xrFaA9bPE5y', 'tj', '081234567893', 'ichsan@gmail.com', '2018-05-05 17:28:23'),
(13, 'stev123456789', '$2y$10$xWXH/pcVQkssni02HHgO7uXRU4S9GJfFH2nppPOkHgGf/gxDJS9R2', 'rtu', '081234567894', 'stevpanjang@gmail.com', '2018-05-06 13:32:18'),
(15, 'dimastes1', '$2y$10$Jyc6LL.YNI4n351441618ez15HAJNlYYIh5dxn95cL19h1CQYNwh2', 'tangerang', '0812341234121', 'dimas@yahoo.com', '2018-05-06 15:27:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_lahan`
--
ALTER TABLE `data_lahan`
  ADD PRIMARY KEY (`id_lahan`);

--
-- Indexes for table `nego_chat`
--
/*
ALTER TABLE `nego_chat`
  ADD PRIMARY KEY (`id_chat`);
*/
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
-- AUTO_INCREMENT for table `data_lahan`
--
ALTER TABLE `data_lahan`
  MODIFY `id_lahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `nego_chat`
--

/*
ALTER TABLE `nego_chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
*/
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
