-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Feb 2022 pada 16.44
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `idpeserta` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jeniskelamin` varchar(50) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  `notelp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`idpeserta`, `image`, `nama`, `jeniskelamin`, `departemen`, `notelp`) VALUES
('1KG2', 'pp6.jpg', 'Egy Yuda Nugraha', 'Laki-laki', 'Departemen Apps & Web', '088291319933'),
('2KG2', 'pp4.png', 'Elizabeth', 'Perempuan', 'Departemen DGAV', '085372765940'),
('3KG2', 'pp6.jpg', 'Helmi Haryanto', 'Laki-laki', 'Departemen Lembaga Kerjasama', '081299853644'),
('4KG2', 'pp2.png', 'Muhammad Dandhy Ardhyansyah', 'Laki-laki', 'Departemen PMO', '081316641402'),
('5KG2', 'pp4.png', 'Rahadatul Aisy Putriani', 'Perempuan', 'Departemen Accessment Center', '081214807346'),
('6KG2', 'pp3.jpg', 'Rasiyah Shafa Azizah', 'Perempuan', 'Departemen Apps & Web', '081932939378');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`idpeserta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
