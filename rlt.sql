-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 09:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

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
-- Table structure for table `daftar_miner`
--

CREATE TABLE `daftar_miner` (
  `id_miner` int(11) NOT NULL,
  `nama_miner` varchar(255) DEFAULT NULL,
  `url_img_miner` varchar(255) DEFAULT NULL,
  `lvl_miner` int(11) DEFAULT NULL,
  `power_miner` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar_miner`
--

INSERT INTO `daftar_miner` (`id_miner`, `nama_miner`, `url_img_miner`, `lvl_miner`, `power_miner`) VALUES
(1, 'Perfection', 'https://static.rollercoin.com/static/img/market/miners/631f77d58238ed283a23283a.gif', 2, 924000),
(2, 'Sweets Stealer', 'https://static.rollercoin.com/static/img/market/miners/6399c3811c483a58f70e9d76.gif', 2, 53655),
(3, 'Helipop', 'https://static.rollercoin.com/static/img/market/miners/6399c3451c483a58f70e99f6.gif', 3, 435225),
(4, 'Disco-Roll', 'https://static.rollercoin.com/static/img/market/miners/6399c3411c483a58f70e99be.gif', 4, 523635),
(5, 'Mergedge', 'https://static.rollercoin.com/static/img/market/miners/631f7b6f8238ed283a2352bb.gif', 4, 55755),
(6, 'Mergedge', 'https://static.rollercoin.com/static/img/market/miners/631f7b6f8238ed283a2352bb.gif', 3, 21420),
(7, 'The Savantron', 'https://static.rollercoin.com/static/img/market/miners/631f7b538238ed283a235169.gif', 3, 149730),
(8, 'RollerShow', 'https://static.rollercoin.com/static/img/market/miners/631f7b488238ed283a2350e7.gif', 3, 498960),
(9, 'Dancing Queen', 'https://static.rollercoin.com/static/img/market/miners/631f7af68238ed283a234d0b.gif', 2, 180180),
(10, 'Jungle King', 'https://static.rollercoin.com/static/img/market/miners/631f7af38238ed283a234ce4.gif', 4, 242445),
(11, 'Deepdiver', 'https://static.rollercoin.com/static/img/market/miners/631f7a938238ed283a234879.gif', 2, 28875),
(12, 'Afterparty', 'https://static.rollercoin.com/static/img/market/miners/631f7a728238ed283a2346f3.gif', 2, 288750),
(13, 'Mine’n\'Bass', 'https://static.rollercoin.com/static/img/market/miners/631f7a618238ed283a234630.gif', 2, 115500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_miner`
--
ALTER TABLE `daftar_miner`
  ADD PRIMARY KEY (`id_miner`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_miner`
--
ALTER TABLE `daftar_miner`
  MODIFY `id_miner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
