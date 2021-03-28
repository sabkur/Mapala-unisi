-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Jun 2015 pada 09.54
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `futsal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(3) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(3) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `konten` varchar(1000) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `tanggal`, `konten`, `gambar`) VALUES
(4, 'agas arya widodo', '2015-06-26', 'b', '1655657_801801399834789_1270630963_o.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentarnya`
--

CREATE TABLE IF NOT EXISTS `komentarnya` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `komentar` varchar(1000) NOT NULL,
  `tanggal` datetime NOT NULL,
  `art_id` varchar(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentarnya`
--

INSERT INTO `komentarnya` (`id`, `nama`, `komentar`, `tanggal`, `art_id`) VALUES
(1, 'hayaa', 'hayaaa', '2015-06-25 23:08:44', '2'),
(2, 'hehe', 'hehe', '2015-06-25 23:08:58', '2'),
(3, 'yuridi bintang pratama', 'hehe', '2015-06-30 14:36:21', '4'),
(4, 'yuridi bintang pratama', 'hihi', '2015-06-30 14:36:35', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemain`
--

CREATE TABLE IF NOT EXISTS `pemain` (
  `id` int(3) NOT NULL,
  `nama` varchar(16) NOT NULL,
  `punggung` int(3) NOT NULL,
  `kota` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemain`
--

INSERT INTO `pemain` (`id`, `nama`, `punggung`, `kota`, `tanggal`, `gambar`) VALUES
(2, 'yuridi bintang p', 7, 'mana aja', '2015-06-30', '1655657_801801399834789_1270630963_o.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(3) NOT NULL,
  `nama` varchar(16) NOT NULL,
  `jabatan` varchar(16) NOT NULL,
  `kota` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `wcd_rate`
--

CREATE TABLE IF NOT EXISTS `wcd_rate` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `rate` int(11) NOT NULL,
  `dt_rated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentarnya`
--
ALTER TABLE `komentarnya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemain`
--
ALTER TABLE `pemain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wcd_rate`
--
ALTER TABLE `wcd_rate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `komentarnya`
--
ALTER TABLE `komentarnya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pemain`
--
ALTER TABLE `pemain`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wcd_rate`
--
ALTER TABLE `wcd_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
