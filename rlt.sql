-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jun 2023 pada 04.56
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rlt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_miner`
--

CREATE TABLE `daftar_miner` (
  `id_daftar_miner` int(11) NOT NULL,
  `id_miner` int(11) DEFAULT NULL,
  `lvl_miner` int(11) DEFAULT NULL,
  `power_miner` bigint(20) DEFAULT NULL,
  `bonus_power` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `miner`
--

CREATE TABLE `miner` (
  `id_miner` int(11) NOT NULL,
  `nama_miner` varchar(255) DEFAULT NULL,
  `url_img_miner` varchar(255) DEFAULT NULL,
  `cell_miner` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `miner`
--

INSERT INTO `miner` (`id_miner`, `nama_miner`, `url_img_miner`, `cell_miner`) VALUES
(1, 'RollerMiner S5+', 'https://static.rollercoin.com/static/img/market/miners/5a0b08a9d1d9ee5894f36f2f.gif?v=1.0.3', 1),
(2, 'Rolleron Miner 761', 'https://static.rollercoin.com/static/img/market/miners/5a0b08afd1d9ee5894f36f31.gif?v=1.0.3', 1),
(3, 'Dragonroller 16T', 'https://static.rollercoin.com/static/img/market/miners/5a0b08b1d1d9ee5894f36f33.gif?v=1.0.3', 2),
(4, 'Rollerfury B8', 'https://static.rollercoin.com/static/img/market/miners/5a0b08b3d1d9ee5894f36f34.gif?v=1.0.3', 2),
(5, 'Dream Demolisher 3000', 'https://static.rollercoin.com/static/img/market/miners/5e2ee460041b386e78b97c2a.gif?v=1.0.3', 2),
(6, 'Gold Digger', 'https://static.rollercoin.com/static/img/market/miners/5e2ee460041b386e78b97c29.gif?v=1.0.3', 1),
(7, 'Scarabey', 'https://static.rollercoin.com/static/img/market/miners/5e2ee460041b386e78b97c28.gif?v=1.0.3', 1),
(8, 'El Monstro', 'https://static.rollercoin.com/static/img/market/miners/5f9ae5584ac419fdd08d08cd.gif?v=1.0.3', 2),
(9, 'DOGER 420', 'https://static.rollercoin.com/static/img/market/miners/607eedae65dce86c86e95319.gif?v=1.0.3', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_miner`
--
ALTER TABLE `daftar_miner`
  ADD PRIMARY KEY (`id_daftar_miner`);

--
-- Indeks untuk tabel `miner`
--
ALTER TABLE `miner`
  ADD PRIMARY KEY (`id_miner`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_miner`
--
ALTER TABLE `daftar_miner`
  MODIFY `id_daftar_miner` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `miner`
--
ALTER TABLE `miner`
  MODIFY `id_miner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
