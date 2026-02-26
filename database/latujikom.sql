-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2026 at 04:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latujikom`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

DROP TABLE IF EXISTS `buku`;
CREATE TABLE IF NOT EXISTS `buku` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `stok`) VALUES
(1, 'Cara Merubah Dosa Menjadi Saldo Dana', 0),
(3, 'Cerita Sekolah Pasundan', 0),
(4, 'Bumi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

DROP TABLE IF EXISTS `peminjaman`;
CREATE TABLE IF NOT EXISTS `peminjaman` (
  `id_pinjam` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status` enum('dipinjam','dikembalikan') NOT NULL,
  PRIMARY KEY (`id_pinjam`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_pinjam`, `id_user`, `id_buku`, `tanggal_pinjam`, `tanggal_kembali`, `status`) VALUES
(5, 3, 1, '2026-02-19', '2026-02-19', 'dikembalikan'),
(6, 3, 3, '2026-02-19', '2026-02-19', 'dikembalikan'),
(7, 3, 4, '2026-02-19', '0000-00-00', 'dipinjam');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('admin','siswa') NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `role`) VALUES
(1, 'Si Atmin Baik', 'admin', '1', 'admin'),
(3, 'Didik Saepudin', 'Dikz', 'Gakjalu76', 'siswa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
