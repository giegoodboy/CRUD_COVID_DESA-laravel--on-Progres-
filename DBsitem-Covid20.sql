-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 10:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laporan_covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `alldb`
--

CREATE TABLE `alldb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pasien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal_daerah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_pelapor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_laporan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alldb`
--

INSERT INTO `alldb` (`id`, `nama_pasien`, `jenis_kelamin`, `asal_daerah`, `no_pelapor`, `tanggal_laporan`, `status`, `created_at`, `updated_at`) VALUES
(1, 'dads', 'dsda', 'dads', 'dads', '2020/06/15', 'Positif', '2020-06-15 09:15:07', '2020-06-15 09:15:07'),
(2, '1', '1', '1', '1', '90', 'Positif', '2020-06-15 09:18:51', '2020-06-15 09:18:51'),
(3, 'd', 'd', 'd', 'd', '2020/06/15', 'Positif', '2020-06-15 09:50:33', '2020-06-15 09:50:33'),
(4, 'himeko', 'himeko', 'himeko', 'dads', '2020/06/15', 'Positif', '2020-06-15 09:54:17', '2020-06-15 09:54:17'),
(5, 'himeko', '1', 'd', 'dads', '2020/06/15', 'PDP', '2020-06-15 09:54:47', '2020-06-15 09:54:47'),
(6, 'd', 'd', 'd', 'd', '2020/06/15', 'Positif', '2020-06-15 09:57:55', '2020-06-15 09:57:55'),
(7, 'himeko', 'sdsdd', 'sdsds', 'dsdsdsd', '2020/06/15', 'Positif', '2020-06-15 10:04:56', '2020-06-15 10:04:56');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_pasien`
--

CREATE TABLE `laporan_pasien` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `asal_daerah` varchar(100) NOT NULL,
  `no_pelapor` varchar(100) NOT NULL,
  `tanggal_laporan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2020_06_15_160352_mainDB', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alldb`
--
ALTER TABLE `alldb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_pasien`
--
ALTER TABLE `laporan_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alldb`
--
ALTER TABLE `alldb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `laporan_pasien`
--
ALTER TABLE `laporan_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
