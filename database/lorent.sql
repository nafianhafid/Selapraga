-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2021 at 03:42 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lorent`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `gambar`, `tanggal`) VALUES
(1, 'Manchester United tak kunjung menunjukkan hasil positif', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in tortor quis nunc interdum aliquet. Pellentesque ut sagittis libero. In in eros efficitur, imperdiet quam eget, finibus ex. Vestibulum posuere rhoncus varius. Integer vestibulum auctor elit, sit amet molestie orci egestas sed. Nunc accumsan massa eu enim posuere tristique. Suspendisse metus metus, viverra quis finibus et, cursus sit amet est. Curabitur non pellentesque tellus. Mauris non feugiat mi.\r\n\r\nPhasellus eros tortor, mattis ac felis eget, accumsan pellentesque nisi. Maecenas rutrum, magna in pharetra tincidunt, velit mauris consequat est, vel blandit nisi risus non enim. Integer sed elit iaculis, tristique purus nec, congue purus. Mauris gravida vulputate sagittis. In interdum lacus quis tellus semper efficitur. Sed eget nisl eu turpis convallis interdum in eget augue. Proin sed elit dictum, rutrum ipsum at, ornare nisl. Donec sodales dignissim nisl sed dictum. Curabitur quis magna semper neque tristique elementum. Maecenas nec facilisis ante. Etiam sed velit tincidunt, tempor velit quis, fermentum augue. Nam posuere, risus eget feugiat maximus, quam sapien posuere dui, ac vestibulum sem mi nec ipsum. Sed finibus felis a fringilla blandit. Pellentesque et tellus ac orci porttitor auctor. Aenean ac ante vel massa dictum posuere. In nec quam lacinia, posuere urna et, posuere dui.', '837-gambar5.jpg', '2021-11-03'),
(2, 'Barcelona Mengalami Keterpurukan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in tortor quis nunc interdum aliquet. Pellentesque ut sagittis libero. In in eros efficitur, imperdiet quam eget, finibus ex. Vestibulum posuere rhoncus varius. Integer vestibulum auctor elit, sit amet molestie orci egestas sed. Nunc accumsan massa eu enim posuere tristique. Suspendisse metus metus, viverra quis finibus et, cursus sit amet est. Curabitur non pellentesque tellus. Mauris non feugiat mi.\r\n\r\nPhasellus eros tortor, mattis ac felis eget, accumsan pellentesque nisi. Maecenas rutrum, magna in pharetra tincidunt, velit mauris consequat est, vel blandit nisi risus non enim. Integer sed elit iaculis, tristique purus nec, congue purus. Mauris gravida vulputate sagittis. In interdum lacus quis tellus semper efficitur. Sed eget nisl eu turpis convallis interdum in eget augue. Proin sed elit dictum, rutrum ipsum at, ornare nisl. Donec sodales dignissim nisl sed dictum. Curabitur quis magna semper neque tristique elementum. Maecenas nec facilisis ante. Etiam sed velit tincidunt, tempor velit quis, fermentum augue. Nam posuere, risus eget feugiat maximus, quam sapien posuere dui, ac vestibulum sem mi nec ipsum. Sed finibus felis a fringilla blandit. Pellentesque et tellus ac orci porttitor auctor. Aenean ac ante vel massa dictum posuere. In nec quam lacinia, posuere urna et, posuere dui.', '754-jb.jpg', '2021-11-11'),
(3, 'Arema Terus Menang ', 'Suspendisse sed lectus mauris. Duis congue tristique porta. Aenean condimentum dapibus sagittis. Nulla dignissim consequat odio. Sed consectetur a quam at efficitur. Ut orci diam, sagittis eget ornare at, vehicula vel nulla. Nulla tincidunt dictum luctus.\r\n\r\nSed luctus dictum libero, ac dignissim diam semper vitae. Cras nec mi pulvinar, finibus tellus et, pharetra mauris. Proin id fermentum diam, non finibus elit. Aenean sed quam tellus. Maecenas sollicitudin diam eu leo posuere pharetra. Aliquam quis rhoncus augue. Sed feugiat turpis a massa consequat ultrices. In fermentum lectus tincidunt ex pretium, vel interdum felis auctor. In tincidunt porta felis maximus efficitur. Praesent sed commodo est, eu tristique urna. Etiam quis ultrices lacus. Vivamus auctor ullamcorper tristique. Praesent facilisis eu est in viverra. Quisque et quam risus.', '653-stadion.jpg', '2021-11-29'),
(4, 'Messi Pindah ke PSG', 'Suspendisse sed lectus mauris. Duis congue tristique porta. Aenean condimentum dapibus sagittis. Nulla dignissim consequat odio. Sed consectetur a quam at efficitur. Ut orci diam, sagittis eget ornare at, vehicula vel nulla. Nulla tincidunt dictum luctus.\r\n\r\nSed luctus dictum libero, ac dignissim diam semper vitae. Cras nec mi pulvinar, finibus tellus et, pharetra mauris. Proin id fermentum diam, non finibus elit. Aenean sed quam tellus. Maecenas sollicitudin diam eu leo posuere pharetra. Aliquam quis rhoncus augue. Sed feugiat turpis a massa consequat ultrices. In fermentum lectus tincidunt ex pretium, vel interdum felis auctor. In tincidunt porta felis maximus efficitur. Praesent sed commodo est, eu tristique urna. Etiam quis ultrices lacus. Vivamus auctor ullamcorper tristique. Praesent facilisis eu est in viverra. Quisque et quam risus.', '760-jb.jpg', '2021-11-29');

-- --------------------------------------------------------

--
-- Table structure for table `lapangan`
--

CREATE TABLE `lapangan` (
  `id_lapangan` int(11) NOT NULL,
  `nama_lapangan` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `gambar_lapangan` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapangan`
--

INSERT INTO `lapangan` (`id_lapangan`, `nama_lapangan`, `lokasi`, `gambar_lapangan`, `harga`) VALUES
(1, 'Lapangan SM Futsal', 'Jl. mawar', '388-1.jpg', '130.000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `id_booking` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `lapangan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `lama_sewa` int(2) NOT NULL,
  `time_mulai` time NOT NULL,
  `time_akhir` time NOT NULL,
  `harga_sewa` varchar(100) NOT NULL,
  `total_sewa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`id_booking`, `nama`, `lapangan`, `tanggal`, `lama_sewa`, `time_mulai`, `time_akhir`, `harga_sewa`, `total_sewa`) VALUES
(1, 'Zulkifli Firdausi', 'Lapangan Rumput', '2021-11-09', 2, '01:00:00', '03:00:00', 'IDRÂ 50,000.00', 'IDRÂ 100,000.00'),
(2, 'Hijjul ', 'Lapangan Rumput', '2021-11-09', 2, '07:17:00', '09:17:00', 'IDRÂ 75,000.00', 'IDRÂ 150,000.00'),
(3, 'Hijjul ', 'Lapangan Rumput', '2021-11-09', 2, '07:17:00', '09:17:00', 'IDRÂ 75,000.00', 'IDRÂ 150,000.00'),
(4, 'Rama', 'Lapangan Rumput', '2021-11-11', 2, '15:50:00', '17:50:00', 'IDRÂ 50,000.00', 'IDRÂ 100,000.00');

-- --------------------------------------------------------

--
-- Table structure for table `turnamen`
--

CREATE TABLE `turnamen` (
  `id_tur` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `lapangan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `tanggal_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `turnamen`
--

INSERT INTO `turnamen` (`id_tur`, `judul`, `gambar`, `lapangan`, `tanggal`, `waktu_mulai`, `tanggal_akhir`) VALUES
(1, 'Tambaksari Cup', '334-gambar2.png', 'Lapangan 1', '2021-11-29', '07:00:00', '2021-11-29'),
(2, 'Merjosari', '257-gambar4.png', 'Lapangan 2', '2021-11-29', '09:00:00', '2021-11-29'),
(3, 'Filkom Cup', '806-gambar3.png', 'Lapangan 1', '2021-11-10', '07:00:00', '2021-11-29'),
(4, 'Tambaksari', '591-jb.jpg', 'Lapangan 3', '2021-11-13', '09:02:00', '2021-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` enum('user','admin') NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `password`, `name`) VALUES
(1, 'admin', 'Zulkifli', '81dc9bdb52d04dc20036dbd8313ed055', 'Zulkifli Firdausi'),
(2, 'user', 'Rama', 'e2fc714c4727ee9395f324cd2e7f331f', 'Ramadityaa'),
(9, 'user', 'Niko', '81dc9bdb52d04dc20036dbd8313ed055', 'Nikola Kovac'),
(10, 'user', 'Ron', '0aa16ca527d32f44bc7a166b878211c8', 'Ronaldo'),
(11, 'user', 'Jody', 'c459a0a5e56bf6374eea58ab928fecf5', 'Jody Pramana Putra'),
(12, 'admin', 'Amin', '81dc9bdb52d04dc20036dbd8313ed055', 'Amin Fadillah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `lapangan`
--
ALTER TABLE `lapangan`
  ADD PRIMARY KEY (`id_lapangan`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `turnamen`
--
ALTER TABLE `turnamen`
  ADD PRIMARY KEY (`id_tur`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lapangan`
--
ALTER TABLE `lapangan`
  MODIFY `id_lapangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `turnamen`
--
ALTER TABLE `turnamen`
  MODIFY `id_tur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
