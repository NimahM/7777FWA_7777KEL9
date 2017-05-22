-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2017 at 12:54 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pororoland`
--

-- --------------------------------------------------------

--
-- Table structure for table `angsuran`
--

CREATE TABLE IF NOT EXISTS `angsuran` (
`id` int(10) unsigned NOT NULL,
  `lama_angsuran` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `angsuranper_bulan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kredit_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `angsuran`
--

INSERT INTO `angsuran` (`id`, `lama_angsuran`, `angsuranper_bulan`, `kredit_id`, `created_at`, `updated_at`) VALUES
(6, '12 bulan', 'Rp 84.000.000', 3, '2017-05-18 19:23:24', '2017-05-18 19:23:40'),
(7, 'sas', 'ss', 3, '2017-05-20 04:50:34', '2017-05-20 04:50:34');

-- --------------------------------------------------------

--
-- Table structure for table `cash`
--

CREATE TABLE IF NOT EXISTS `cash` (
`id` int(10) unsigned NOT NULL,
  `tanggal_cash` date NOT NULL,
  `pembeli_id` int(10) unsigned NOT NULL,
  `rumah_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cash`
--

INSERT INTO `cash` (`id`, `tanggal_cash`, `pembeli_id`, `rumah_id`, `created_at`, `updated_at`) VALUES
(1, '2017-05-20', 3, 27, '2017-05-19 15:41:51', '2017-05-19 15:41:51');

-- --------------------------------------------------------

--
-- Table structure for table `data_transaksi`
--

CREATE TABLE IF NOT EXISTS `data_transaksi` (
`id` int(10) unsigned NOT NULL,
  `cash_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `title`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Tipe A', 'Gede banget Sumpah', '2017-05-15 05:02:19', '2017-05-19 15:34:53'),
(2, 'Tipe B', 'ukuran xl sedang, ya muat 1 kampung mungkin', '2017-05-16 06:48:37', '2017-05-18 19:11:12'),
(7, 'Tipe C', 'Ukuran kecil dan sederhana', '2017-05-18 19:10:36', '2017-05-18 19:10:36');

-- --------------------------------------------------------

--
-- Table structure for table `komplek_perumahan`
--

CREATE TABLE IF NOT EXISTS `komplek_perumahan` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `komplek_perumahan`
--

INSERT INTO `komplek_perumahan` (`id`, `title`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, 'Komplek A', 'letak yang strategis ,dapat di jumpai pada awal masuk wilayah pororoland', '2017-05-17 03:43:03', '2017-05-19 15:28:48'),
(3, 'Komplek B', 'Berada di letak yan strategis setelah komplek A, kemudian belok kanan ke utara.', '2017-05-19 15:27:53', '2017-05-19 15:27:53');

-- --------------------------------------------------------

--
-- Table structure for table `kredit`
--

CREATE TABLE IF NOT EXISTS `kredit` (
`id` int(10) unsigned NOT NULL,
  `tanggal_kredit` date NOT NULL,
  `pembeli_id` int(10) unsigned NOT NULL,
  `rumah_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kredit`
--

INSERT INTO `kredit` (`id`, `tanggal_kredit`, `pembeli_id`, `rumah_id`, `created_at`, `updated_at`) VALUES
(3, '2017-02-16', 2, 25, '2017-05-18 19:21:33', '2017-05-18 19:21:33'),
(6, '2017-02-10', 3, 27, '2017-05-19 23:54:21', '2017-05-19 23:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2017_04_17_135221_buat_table_pengguna', 1),
('2017_04_17_135415_buat_table_admin', 1),
('2017_04_17_135509_buat_table_pembeli', 1),
('2017_04_17_135723_buat_table_komplek_perumahan', 2),
('2017_04_17_135903_buat_table_kategori', 2),
('2017_04_17_135649_buat_table_rumah', 3),
('2017_04_17_135528_buat_table_cash', 4),
('2017_04_17_135544_buat_table_kredit', 4),
('2017_04_17_135611_buat_table_angsuran', 4),
('2017_04_17_135933_buat_table_data_transaksi', 5),
('2014_10_12_000000_create_users_table', 6),
('2014_10_12_100000_create_password_resets_table', 6),
('2017_05_19_101433_buat_table_myadmin', 7),
('2017_05_19_131544_buat_table_gambar', 8);

-- --------------------------------------------------------

--
-- Table structure for table `myadmin`
--

CREATE TABLE IF NOT EXISTS `myadmin` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_telpon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `umur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `myadmin`
--

INSERT INTO `myadmin` (`id`, `nama`, `alamat`, `no_telpon`, `umur`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(3, 'admin1', 'sss', '221233333', '11', 15, '2017-05-19 19:01:15', '2017-05-19 19:01:15');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE IF NOT EXISTS `pembeli` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `no_telp` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id`, `nama`, `no_telp`, `alamat`, `created_at`, `updated_at`) VALUES
(2, 'Ropeah', '3244678922121', 'gang buntu Rt 10e', '2017-05-18 19:12:55', '2017-05-20 04:30:21'),
(3, 'Sarboah', '0913121213121', 'jalan jengkol Rt 12', '2017-05-19 15:33:41', '2017-05-20 04:31:00'),
(9, 'tftftft', '082351187725', 'shshshhs', '2017-05-21 21:27:11', '2017-05-21 21:27:11'),
(10, 'tftftft', '082351186666', 'shshshhs', '2017-05-21 21:28:20', '2017-05-21 21:28:20'),
(11, 'tftftft', '082351186fff', 'shshshhs', '2017-05-21 21:29:43', '2017-05-21 21:29:43');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(15, 'admin1', 'admin1', '2017-05-19 19:01:15', '2017-05-19 19:01:15');

-- --------------------------------------------------------

--
-- Table structure for table `rumah`
--

CREATE TABLE IF NOT EXISTS `rumah` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `komplek_perumahan_id` int(10) unsigned NOT NULL,
  `kategori_id` int(10) unsigned NOT NULL,
  `harga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rumah`
--

INSERT INTO `rumah` (`id`, `title`, `keterangan`, `komplek_perumahan_id`, `kategori_id`, `harga`, `created_at`, `updated_at`) VALUES
(25, 'Pertamax Class', 'luas bro', 2, 1, 'Rp 1.000.000.000 ', '2017-05-18 19:14:02', '2017-05-19 15:26:26'),
(26, 'Pertalite Class', 'lumayan', 2, 2, 'Rp 750.000.000', '2017-05-18 19:14:54', '2017-05-19 15:26:36'),
(27, 'Premium Class', 'lumayan besar kok', 2, 7, 'Rp 500.000.000', '2017-05-19 15:30:09', '2017-05-19 15:30:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nim', 'nimah', '123', NULL, '2017-05-28 16:00:00', '2017-05-14 16:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angsuran`
--
ALTER TABLE `angsuran`
 ADD PRIMARY KEY (`id`), ADD KEY `angsuran_kredit_id_foreign` (`kredit_id`);

--
-- Indexes for table `cash`
--
ALTER TABLE `cash`
 ADD PRIMARY KEY (`id`), ADD KEY `cash_pembeli_id_foreign` (`pembeli_id`), ADD KEY `cash_rumah_id_foreign` (`rumah_id`);

--
-- Indexes for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
 ADD PRIMARY KEY (`id`), ADD KEY `data_transaksi_cash_id_foreign` (`cash_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komplek_perumahan`
--
ALTER TABLE `komplek_perumahan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kredit`
--
ALTER TABLE `kredit`
 ADD PRIMARY KEY (`id`), ADD KEY `kredit_pembeli_id_foreign` (`pembeli_id`), ADD KEY `kredit_rumah_id_foreign` (`rumah_id`);

--
-- Indexes for table `myadmin`
--
ALTER TABLE `myadmin`
 ADD PRIMARY KEY (`id`), ADD KEY `myadmin_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rumah`
--
ALTER TABLE `rumah`
 ADD PRIMARY KEY (`id`), ADD KEY `rumah_komplek_perumahan_id_foreign` (`komplek_perumahan_id`), ADD KEY `rumah_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `angsuran`
--
ALTER TABLE `angsuran`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `cash`
--
ALTER TABLE `cash`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `komplek_perumahan`
--
ALTER TABLE `komplek_perumahan`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kredit`
--
ALTER TABLE `kredit`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `myadmin`
--
ALTER TABLE `myadmin`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `rumah`
--
ALTER TABLE `rumah`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `angsuran`
--
ALTER TABLE `angsuran`
ADD CONSTRAINT `angsuran_kredit_id_foreign` FOREIGN KEY (`kredit_id`) REFERENCES `kredit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cash`
--
ALTER TABLE `cash`
ADD CONSTRAINT `cash_pembeli_id_foreign` FOREIGN KEY (`pembeli_id`) REFERENCES `pembeli` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `cash_rumah_id_foreign` FOREIGN KEY (`rumah_id`) REFERENCES `rumah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
ADD CONSTRAINT `data_transaksi_cash_id_foreign` FOREIGN KEY (`cash_id`) REFERENCES `cash` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kredit`
--
ALTER TABLE `kredit`
ADD CONSTRAINT `kredit_pembeli_id_foreign` FOREIGN KEY (`pembeli_id`) REFERENCES `pembeli` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `kredit_rumah_id_foreign` FOREIGN KEY (`rumah_id`) REFERENCES `rumah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `myadmin`
--
ALTER TABLE `myadmin`
ADD CONSTRAINT `myadmin_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rumah`
--
ALTER TABLE `rumah`
ADD CONSTRAINT `rumah_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `rumah_komplek_perumahan_id_foreign` FOREIGN KEY (`komplek_perumahan_id`) REFERENCES `komplek_perumahan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
