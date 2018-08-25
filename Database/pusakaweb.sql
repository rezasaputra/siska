-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2018 at 12:30 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pusakaweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uid` int(11) NOT NULL,
  `picture` varchar(200) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `status` tinyint(5) DEFAULT '1',
  `session_id` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uid`, `picture`, `nama`, `username`, `password`, `status`, `session_id`) VALUES
(1, 'Logo v4.png', 'Admin JS', 'jayaslamet', '21232f297a57a5a743894a0e4a801fc3', 1, '5ee0efe4fbd2aca40c7c3fd4b49a77be5c51f1be'),
(2, 'img_1505322100.png', 'Akbar', 'akbar', '81dc9bdb52d04dc20036dbd8313ed055', 1, '5ad252bbc9175594222ac0a712169060bcf3093b');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(20) NOT NULL,
  `gambar` varchar(40) DEFAULT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `deskripsi` text,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `gambar`, `judul`, `deskripsi`, `tanggal`) VALUES
(1, 'img_1505268014.jpg', 'Raisa Menikah', 'Pada Tanggal 29 September', '2017-09-13 02:00:15');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(20) NOT NULL,
  `gambar` varchar(40) DEFAULT NULL,
  `status` tinyint(5) DEFAULT '1',
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `gambar`, `status`, `timestamp`) VALUES
(1, 'img_1505279764.jpg', 1, '2017-09-13 05:16:04'),
(2, 'img_1505283172.jpg', 1, '2017-09-13 06:12:52'),
(4, 'img_1505318738.jpg', 1, '2017-09-13 16:05:38'),
(7, 'img_1505318787.png', 1, '2017-09-13 16:06:27'),
(8, 'img_1505318807.jpg', 1, '2017-09-13 16:06:47'),
(9, 'img_1505318813.jpg', 1, '2017-09-13 16:06:53'),
(10, 'img_1505318825.jpg', 1, '2017-09-13 16:07:05');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` int(20) NOT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `judul` varchar(40) DEFAULT NULL,
  `deskripsi` text,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `gambar`, `judul`, `deskripsi`, `timestamp`) VALUES
(1, 'img_1505270256.jpg', 'Dicoba', 'apa saja lah', '2017-09-13 02:37:36');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `gambar` varchar(40) DEFAULT NULL,
  `judul` varchar(40) DEFAULT NULL,
  `tag_line` varchar(200) DEFAULT NULL,
  `tampil` tinyint(5) DEFAULT '1',
  `status` tinyint(5) DEFAULT '1',
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `gambar`, `judul`, `tag_line`, `tampil`, `status`, `timestamp`) VALUES
(1, 'img_1505271568.jpg', 'dicoba', 'bagus keren\r\n', 1, 1, '2017-09-13 02:59:28'),
(2, 'img_1505310450.jpg', 'kedua', 'dd', 1, 1, '2017-09-13 13:47:30'),
(3, 'img_1505312439.jpg', 'Ketiga', 'isi', 1, 1, '2017-09-13 14:20:39');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id` int(11) NOT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `judul` varchar(40) DEFAULT NULL,
  `deskripsi` text,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id`, `gambar`, `judul`, `deskripsi`, `timestamp`) VALUES
(1, 'img_1505270832.jpg', 'Dicoba', 'apa aja lah', '2017-09-13 02:47:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
