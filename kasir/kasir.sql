-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 08:29 AM
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
-- Database: `kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `level` varchar(10) NOT NULL,
  `blokir` varchar(2) NOT NULL,
  `id_session` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama_lengkap`, `email`, `telp`, `level`, `blokir`, `id_session`) VALUES
('kelompok4', 'admin', 'Administrator', 'administrator@gmail.com', '081267771344', 'Admin', 'N', '21232f297a57a5a743894a0e4a801fc3'),
('steven', 'admin', 'Steven sen', 'stev@gmail.com', '0819282382', 'admin', 'N', 'steven'),
('elfin', 'admin', 'elfin_riz', 'rizaldi@yahoo.co.id', '08224747328', 'admin', 'N', 'elfin');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori`, `nama_kategori`) VALUES
(18, 'alat tulis'),
(19, 'mie'),
(20, 'Perabot'),
(21, 'Rumah tangga'),
(23, 'Bumbu Dapur'),
(24, 'obat-obatan'),
(25, 'minuman'),
(26, 'makanan ringan'),
(27, 'rokok'),
(28, 'shampo'),
(29, 'sabun mandi'),
(30, 'detergen'),
(31, 'elekronik');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_orders` int(5) NOT NULL,
  `nama_kustomer` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_order` date NOT NULL,
  `jam_order` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_orders`, `nama_kustomer`, `tgl_order`, `jam_order`) VALUES
(144, 'Winda', '2014-09-03', '20:28:05'),
(145, 'Winda', '2014-09-06', '11:05:04'),
(158, 'Putri', '2019-04-07', '17:11:03'),
(157, 'Putri', '2019-04-07', '17:10:42'),
(151, 'Winda', '2017-08-15', '01:08:28'),
(152, 'Winda', '2017-08-15', '01:10:14'),
(153, 'Winda', '2017-08-15', '01:11:55'),
(154, 'Winda', '2019-04-05', '17:11:30'),
(155, 'Gabriel Argado', '2019-04-07', '17:05:47'),
(156, 'Gabriel Argado', '2019-04-07', '17:06:02');

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `id_orders` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`id_orders`, `id_produk`, `jumlah`) VALUES
(145, 87, 1),
(145, 96, 2),
(145, 88, 1),
(145, 95, 3),
(144, 96, 3),
(144, 84, 1),
(144, 95, 2),
(146, 86, 2),
(146, 84, 1),
(146, 97, 3),
(147, 100, 2),
(147, 101, 1),
(148, 89, 1),
(148, 97, 3),
(149, 101, 1),
(149, 97, 3),
(150, 101, 12),
(150, 97, 12),
(151, 97, 5),
(152, 88, 1),
(153, 92, 1),
(154, 97, 1),
(154, 92, 1),
(155, 103, 10),
(156, 102, 1),
(157, 97, 20),
(157, 96, 1),
(158, 85, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders_temp`
--

CREATE TABLE `orders_temp` (
  `id_orders_temp` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `id_session` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `jumlah` int(5) NOT NULL,
  `tgl_order_temp` date NOT NULL,
  `jam_order_temp` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `id_supplier` int(5) NOT NULL,
  `nama_produk` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `deskripsi` text COLLATE latin1_general_ci NOT NULL,
  `harga` int(20) NOT NULL,
  `harga_grosir` int(20) NOT NULL,
  `harga_pokok` int(20) NOT NULL,
  `stok` int(5) NOT NULL,
  `satuan` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `berat` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `diskon` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tgl_masuk` date NOT NULL,
  `dibeli` int(5) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `id_supplier`, `nama_produk`, `deskripsi`, `harga`, `harga_grosir`, `harga_pokok`, `stok`, `satuan`, `berat`, `diskon`, `tgl_masuk`, `dibeli`) VALUES
(82, 18, 1, 'PS 4', 'Bermain dengan teknologi kekinian', 9000000, 7000000, 6500000, 9, 'Set', '0', '0', '2014-05-25', 2),
(83, 19, 2, 'senter police', '', 20000, 19000, 15000, 19, 'kotak', '1', '0', '2014-05-25', 2),
(84, 18, 3, 'Camera Digital Sony DCS-W710  16.1', '', 13000, 12000, 10000, 57, 'kotak', '0', '0', '2014-05-25', 3),
(85, 21, 1, 'Sterika Philips Classic', '', 25000, 22000, 20000, 9, 'kotak', '2', '0', '2014-05-25', 2),
(86, 21, 2, 'Sterika Philips Light Care', '', 29000, 28000, 25000, 4, 'kotak', '2', '0', '2014-05-25', 3),
(87, 18, 2, 'Speaker Aktif Roadstone', '', 20000, 19000, 12000, 2, 'kotak', '7', '0', '2014-05-25', 3),
(88, 18, 1, 'DVD Player', 'Kotak ajaib yang bisa mengeluarkan suara', 700000, 500000, 500000, 19, 'unit', '0', '10', '2014-05-25', 3),
(89, 21, 3, 'Blender philips', 'kuat dan tahan banting , anti pecah, mampu menghancurkan es batu menjadi kepingan kecil. dll', 200000, 190000, 150000, 55, 'kotak', '0', '0', '2014-05-25', 4),
(91, 20, 3, 'Pompa air panasonic', 'daya tekanan kuat', 35000, 34000, 30000, 13, 'kotak', '0', '0', '2014-05-25', 5),
(92, 19, 2, 'lampu sorot philips ', 'jarak sorot sampai 20m\r\ncahaya putih dan terang\r\n200watt', 50000, 49000, 40000, 2, 'kotak', '0', '0', '2014-05-25', 7),
(93, 18, 2, 'Radio karcher', '', 25000, 23000, 15000, 4, 'kotak', '4', '0', '2014-05-25', 6),
(94, 21, 2, 'Magic com rice cooker cosmos ', 'kapasitar 3liter beras\r\nbisa buat kukus \r\npenanak dan pemanas', 25000, 22000, 20000, 0, 'Buah', '5', '0', '2014-05-25', 11),
(95, 21, 3, 'mesin-cuci-SHARP ES-T96CA', 'bisa menampung 8kg pakaian kotor\r\nada pengering', 20000, 15000, 10000, 9, 'Kotak', '0', '0', '2014-05-25', 11),
(96, 21, 3, 'sabun Sinzui', 'sabun mantapp,..', 5000, 4800, 3000, 191, 'Kotak', '0', '0', '2014-06-26', 10),
(97, 23, 2, 'ajinomoto', 'Bubuk ajaib yang membuat makanan enak', 1000, 900, 900, 453, 'Bungkus', '0', '0', '2014-09-01', 48),
(102, 27, 2, 'mild', 'Rokok merk MILD', 25000, 21000, 18000, 199, 'bungkus', '0', '', '2019-04-07', 2),
(103, 19, 6, 'indomie', '', 2300, 2000, 1900, 990, 'bungkus/dus', '0', '', '2019-04-07', 11),
(101, 21, 1, 'Spatula', 'Digunakan untuk menggoreng krabby patty', 9000, 7000, 6500, 30, 'Buah', '0', '50', '2015-01-22', 15),
(104, 25, 7, 'segar sari', 'segarrrrr', 700, 500, 400, 1000, 'sachet', '0', '', '2019-04-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(5) NOT NULL,
  `nama_supplier` varchar(255) NOT NULL,
  `no_rekening` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `no_rekening`) VALUES
(1, 'Pt Paramount Picture tbk', '882 12 1110 2124 812'),
(2, 'Pt Makmur Rugi', ''),
(3, 'Pt baygon', '123 1 90897 453 232'),
(6, 'indofood', '87192349312'),
(7, 'PT.Aqua', '392103902'),
(8, 'ABC', '11234324'),
(9, 'PT.rokok Indonesia', '21321321'),
(10, 'samsung group', '3123213');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'customer',
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `id_session` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `alamat_lengkap` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `level`, `aktif`, `id_session`, `alamat_lengkap`) VALUES
('gabs', '1234', 'Gabriel Argado', 'gabs@gmail.com', '081338311051', 'customer', 'Y', 'asda981921asbdiasda1291231s', 'Jl. Plawa no. 73; 80236; Br. Pagan Kelod, Sumerta Kauh, Denpasar Timur.'),
('putri', '1234', 'Putri', 'putrimardiani@gmail.com', '081267771344', 'customer', 'Y', '8d05dd2f03981f86b56c23951f3f34d7', 'Tunggul Hitam, Padang'),
('panji', '1234', 'panji petualang', 'ipul@gmail.com', '0887433234232', 'customer', 'Y', 'panji', 'Jalan Perintis,Planet Luar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_orders`);

--
-- Indexes for table `orders_temp`
--
ALTER TABLE `orders_temp`
  ADD PRIMARY KEY (`id_orders_temp`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_orders` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `orders_temp`
--
ALTER TABLE `orders_temp`
  MODIFY `id_orders_temp` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=394;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
