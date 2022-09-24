-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2022 at 08:29 AM
-- Server version: 5.7.36
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lrv_sikoku`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch_ujian`
--

CREATE TABLE `batch_ujian` (
  `batch_id` bigint(20) UNSIGNED NOT NULL,
  `transaksi_id` bigint(20) UNSIGNED NOT NULL,
  `waktu_pelaksanaan` datetime DEFAULT NULL,
  `siswa` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `batch_ujian`
--

INSERT INTO `batch_ujian` (`batch_id`, `transaksi_id`, `waktu_pelaksanaan`, `siswa`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-06-14 11:30:00', '[{\"token\": 1, \"nama_siswa\": \"Roberto Klein\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 2, \"nama_siswa\": \"Kaycee Dooley\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 3, \"nama_siswa\": \"Ms. Isabel Wisoky\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 4, \"nama_siswa\": \"Jayson Kub\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 5, \"nama_siswa\": \"Dr. Lafayette O\'Keefe DDS\", \"tanggal_lahir\": \"2022-06-04\"}]', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(2, 1, '2022-06-14 11:30:00', '[{\"token\": 6, \"nama_siswa\": \"Ethyl Mraz\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 7, \"nama_siswa\": \"Tia Jerde\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 8, \"nama_siswa\": \"Addie Metz\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 9, \"nama_siswa\": \"Therese Fadel\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 10, \"nama_siswa\": \"Miss Alba Kub\", \"tanggal_lahir\": \"2022-06-04\"}]', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(3, 1, '2022-06-14 11:30:00', '[{\"token\": 11, \"nama_siswa\": \"Lucas Fay V\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 12, \"nama_siswa\": \"Willard Ledner\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 13, \"nama_siswa\": \"Pattie Stiedemann\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 14, \"nama_siswa\": \"Miss Juana Braun I\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 15, \"nama_siswa\": \"Sister Mann\", \"tanggal_lahir\": \"2022-06-04\"}]', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(4, 1, '2022-06-14 11:30:00', '[{\"token\": 16, \"nama_siswa\": \"Dave Lesch\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 17, \"nama_siswa\": \"Fritz Leannon\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 18, \"nama_siswa\": \"Candice Leffler\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 19, \"nama_siswa\": \"Jamel Swift\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 20, \"nama_siswa\": \"Dr. Aida Herzog III\", \"tanggal_lahir\": \"2022-06-04\"}]', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(5, 1, '2022-06-14 11:30:00', '[{\"token\": 21, \"nama_siswa\": \"Dr. Ida Goldner\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 22, \"nama_siswa\": \"Colt Mohr\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 23, \"nama_siswa\": \"Isabel Mertz\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 24, \"nama_siswa\": \"Casper Leffler\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 25, \"nama_siswa\": \"Ms. Marcella Hyatt\", \"tanggal_lahir\": \"2022-06-04\"}]', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(6, 1, '2022-06-14 11:30:00', '[{\"token\": 26, \"nama_siswa\": \"Prof. Adelle Weimann\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 27, \"nama_siswa\": \"Antonia Bernier\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 28, \"nama_siswa\": \"Shanelle Senger\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 29, \"nama_siswa\": \"Prof. Kailyn Effertz\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 30, \"nama_siswa\": \"Myrtice Kertzmann Jr.\", \"tanggal_lahir\": \"2022-06-04\"}]', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(7, 1, '2022-06-14 11:30:00', '[{\"token\": 31, \"nama_siswa\": \"Luz Tremblay\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 32, \"nama_siswa\": \"Merlin Mayer\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 33, \"nama_siswa\": \"Prof. Breana Turner I\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 34, \"nama_siswa\": \"Dr. Jordan Metz V\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 35, \"nama_siswa\": \"Miss Lilla McDermott\", \"tanggal_lahir\": \"2022-06-04\"}]', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(8, 1, '2022-06-14 11:30:00', '[{\"token\": 36, \"nama_siswa\": \"Reginald Mueller III\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 37, \"nama_siswa\": \"Charity Lemke\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 38, \"nama_siswa\": \"Dr. Buford Lockman\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 39, \"nama_siswa\": \"Dr. Geovanny Beatty\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 40, \"nama_siswa\": \"Lonie Little\", \"tanggal_lahir\": \"2022-06-04\"}]', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(9, 1, '2022-06-14 11:30:00', '[{\"token\": 41, \"nama_siswa\": \"Juvenal Frami\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 42, \"nama_siswa\": \"Jovan Senger\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 43, \"nama_siswa\": \"Drake Little\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 44, \"nama_siswa\": \"Evan Mann III\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 45, \"nama_siswa\": \"Felicia Dickinson\", \"tanggal_lahir\": \"2022-06-04\"}]', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(10, 1, '2022-06-14 11:30:00', '[{\"token\": 46, \"nama_siswa\": \"Kathryn Conroy\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 47, \"nama_siswa\": \"Joel Price\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 48, \"nama_siswa\": \"Leanna Graham\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 49, \"nama_siswa\": \"Ms. Delfina Schroeder\", \"tanggal_lahir\": \"2022-06-04\"}, {\"token\": 50, \"nama_siswa\": \"Jeffery Jaskolski\", \"tanggal_lahir\": \"2022-06-04\"}]', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(11, 11, '2022-07-01 06:30:00', '[{\"token\": \"302211161\", \"status\": \"selesai\", \"nama_siswa\": \"wahyu triono\", \"tanggal_lahir\": \"22 05 2000\"}, {\"token\": \"3022115016\", \"nama_siswa\": \"arya yohanes christian\", \"tanggal_lahir\": \"24 01 2012\"}, {\"token\": \"302211971\", \"status\": \"selesai\", \"nama_siswa\": \"ari\", \"tanggal_lahir\": \"23 05 2000\"}, {\"token\": \"302211229\", \"nama_siswa\": \"ayu\", \"tanggal_lahir\": \"25 01 2012\"}, {\"token\": \"302211323\", \"nama_siswa\": \"aulia\", \"tanggal_lahir\": \"24 05 2000\"}, {\"token\": \"302211409\", \"nama_siswa\": \"anggi\", \"tanggal_lahir\": \"26 01 2012\"}, {\"token\": \"302211714\", \"nama_siswa\": \"agus\", \"tanggal_lahir\": \"25 05 2000\"}, {\"token\": \"302211624\", \"nama_siswa\": \"ade\", \"tanggal_lahir\": \"27 01 2012\"}, {\"token\": \"302211704\", \"nama_siswa\": \"arya yohanes christian\", \"tanggal_lahir\": \"26 05 2000\"}, {\"token\": \"302211910\", \"nama_siswa\": \"amel\", \"tanggal_lahir\": \"28 01 2012\"}, {\"token\": \"302211956\", \"nama_siswa\": \"andi\", \"tanggal_lahir\": \"27 05 2000\"}, {\"token\": \"302211843\", \"nama_siswa\": \"bayu\", \"tanggal_lahir\": \"29 01 2012\"}, {\"token\": \"302211884\", \"nama_siswa\": \"bagas\", \"tanggal_lahir\": \"28 05 2000\"}, {\"token\": \"302211344\", \"nama_siswa\": \"budi\", \"tanggal_lahir\": \"30 01 2012\"}, {\"token\": \"302211331\", \"nama_siswa\": \"bagus\", \"tanggal_lahir\": \"29 05 2000\"}, {\"token\": \"302211430\", \"nama_siswa\": \"bastian\", \"tanggal_lahir\": \"31 01 2012\"}, {\"token\": \"302211810\", \"nama_siswa\": \"ben\", \"tanggal_lahir\": \"30 05 2000\"}]', '2022-06-30 16:32:43', '2022-06-30 17:07:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_siswa`
--

CREATE TABLE `jawaban_siswa` (
  `jawaban_siswa_id` bigint(20) UNSIGNED NOT NULL,
  `batch_id` bigint(20) UNSIGNED NOT NULL,
  `paket_soal_id` bigint(20) UNSIGNED NOT NULL,
  `token` int(11) NOT NULL,
  `jawaban` json NOT NULL,
  `result` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jawaban_siswa`
--

INSERT INTO `jawaban_siswa` (`jawaban_siswa_id`, `batch_id`, `paket_soal_id`, `token`, `jawaban`, `result`, `created_at`, `updated_at`) VALUES
(1, 11, 1, 302211161, '[{\"jawaban\": {\"pilihan\": \"Jadi selebriti\", \"value_pilihan\": \"2\"}, \"pertanyaan\": \"Dalam 15 tahun ke depan, apa yang ingin kamu lakukan?\", \"soal_pg_id\": null}, {\"jawaban\": {\"pilihan\": \"Yang aku cinta\", \"value_pilihan\": \"4\"}, \"pertanyaan\": \"Kamu menginginkan orang yang seperti apa untuk menjadi pasanganmu?\", \"soal_pg_id\": \"11\"}, {\"jawaban\": {\"pilihan\": \"Garasi\", \"value_pilihan\": \"5\"}, \"pertanyaan\": \"Di rumahmu, ruangan mana yang menjadi tempat favoritmu?\", \"soal_pg_id\": \"12\"}]', '11', '2022-06-30 16:37:49', '2022-06-30 16:37:49'),
(2, 11, 1, 302211971, '[{\"jawaban\": {\"pilihan\": \"Memiliki sifat yang sama\", \"value_pilihan\": \"5\"}, \"pertanyaan\": \"Kamu menginginkan orang yang seperti apa untuk menjadi pasanganmu?\", \"soal_pg_id\": \"11\"}, {\"jawaban\": {\"pilihan\": \"Keliling dunia\", \"value_pilihan\": \"2\"}, \"pertanyaan\": \"Dalam 15 tahun ke depan, apa yang ingin kamu lakukan?\", \"soal_pg_id\": null}, {\"jawaban\": {\"pilihan\": \"Dapur\", \"value_pilihan\": \"2\"}, \"pertanyaan\": \"Di rumahmu, ruangan mana yang menjadi tempat favoritmu?\", \"soal_pg_id\": \"12\"}]', '9', '2022-06-30 16:59:53', '2022-06-30 16:59:53');

-- --------------------------------------------------------

--
-- Table structure for table `key_2d`
--

CREATE TABLE `key_2d` (
  `key_2d_id` bigint(20) UNSIGNED NOT NULL,
  `soal_2d_id` bigint(20) UNSIGNED NOT NULL,
  `pilihan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value_pilihan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `key_2d`
--

INSERT INTO `key_2d` (`key_2d_id`, `soal_2d_id`, `pilihan`, `value_pilihan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Meagan Hudson', 9, '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(2, 1, 'Dorian Denesik', 9, '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(3, 1, 'Aylin Weimann', 4, '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(4, 1, 'Anabelle Oberbrunner', 5, '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(5, 1, 'Joel Lowe', 2, '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(6, 1, 'Columbus Huel', 8, '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(7, 1, 'Karelle Nienow', 8, '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(8, 1, 'Elva Lueilwitz', 5, '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(9, 1, 'Laurie Williamson', 1, '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(10, 1, 'Ettie Turner IV', 8, '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(45, 27, 'Jadi selebriti', 5, '2022-06-30 16:28:46', '2022-06-30 16:28:46'),
(44, 27, 'Tetap menjomblo', 3, '2022-06-30 16:28:46', '2022-06-30 16:28:46'),
(43, 27, 'Keliling dunia', 4, '2022-06-30 16:28:46', '2022-06-30 16:28:46'),
(42, 27, 'Jadi CEO', 1, '2022-06-30 16:28:46', '2022-06-30 16:28:46'),
(41, 27, 'Berkeluarga', 2, '2022-06-30 16:28:46', '2022-06-30 16:28:46'),
(40, 26, 'Lainnya', 2, '2022-06-30 16:28:46', '2022-06-30 16:28:46'),
(39, 26, 'Teras/Ruang tamu', 5, '2022-06-30 16:28:46', '2022-06-30 16:28:46'),
(38, 26, 'Garasi', 4, '2022-06-30 16:28:46', '2022-06-30 16:28:46'),
(37, 26, 'Kamar tidur', 3, '2022-06-30 16:28:46', '2022-06-30 16:28:46'),
(36, 26, 'Dapur', 1, '2022-06-30 16:28:46', '2022-06-30 16:28:46'),
(35, 25, 'Yang aku cinta', 5, '2022-06-30 16:28:46', '2022-06-30 16:28:46'),
(34, 25, 'Memiliki sifat yang sama', 2, '2022-06-30 16:28:46', '2022-06-30 16:28:46'),
(33, 25, 'Teman dekat', 3, '2022-06-30 16:28:46', '2022-06-30 16:28:46'),
(32, 25, 'Seksi', 4, '2022-06-30 16:28:46', '2022-06-30 16:28:46'),
(31, 25, 'Kaya', 1, '2022-06-30 16:28:46', '2022-06-30 16:28:46'),
(46, 28, 'Nongkrong', 4, '2022-06-30 16:28:46', '2022-06-30 16:28:46'),
(47, 28, 'Makan di kafe', 1, '2022-06-30 16:28:46', '2022-06-30 16:28:46'),
(48, 28, 'Nonton film', 3, '2022-06-30 16:28:46', '2022-06-30 16:28:46'),
(49, 28, 'Shopping', 5, '2022-06-30 16:28:46', '2022-06-30 16:28:46'),
(50, 28, 'Jalan jalan sama pacar', 2, '2022-06-30 16:28:46', '2022-06-30 16:28:46');

-- --------------------------------------------------------

--
-- Table structure for table `key_pilgan`
--

CREATE TABLE `key_pilgan` (
  `key_pilgan_id` bigint(20) UNSIGNED NOT NULL,
  `soal_pg_id` bigint(20) UNSIGNED NOT NULL,
  `pilihan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value_pilihan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `key_pilgan`
--

INSERT INTO `key_pilgan` (`key_pilgan_id`, `soal_pg_id`, `pilihan`, `value_pilihan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Eveline Roob', 3, '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(2, 1, 'Ella Walter', 0, '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(3, 1, 'Fleta Corkery', 8, '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(4, 1, 'Kevon Turcotte', 1, '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(5, 1, 'Nelle Oberbrunner', 5, '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(6, 1, 'Israel Monahan I', 2, '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(7, 1, 'Jaime Moore', 1, '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(8, 1, 'Guadalupe Abshire', 2, '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(9, 1, 'Brett Beatty', 2, '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(10, 1, 'Mr. Barrett Schulist', 2, '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(11, 11, 'Kaya', 1, '2022-06-30 16:20:08', '2022-06-30 16:20:08'),
(12, 11, 'Seksi', 4, '2022-06-30 16:20:08', '2022-06-30 16:20:08'),
(13, 11, 'Teman dekat', 3, '2022-06-30 16:20:08', '2022-06-30 16:20:08'),
(14, 11, 'Memiliki sifat yang sama', 2, '2022-06-30 16:20:08', '2022-06-30 16:20:08'),
(15, 11, 'Yang aku cinta', 5, '2022-06-30 16:20:08', '2022-06-30 16:20:08'),
(16, 12, 'Dapur', 1, '2022-06-30 16:20:08', '2022-06-30 16:20:08'),
(17, 12, 'Kamar tidur', 3, '2022-06-30 16:20:08', '2022-06-30 16:20:08'),
(18, 12, 'Garasi', 4, '2022-06-30 16:20:08', '2022-06-30 16:20:08'),
(19, 12, 'Teras/Ruang tamu', 5, '2022-06-30 16:20:08', '2022-06-30 16:20:08'),
(20, 12, 'Lainnya', 2, '2022-06-30 16:20:08', '2022-06-30 16:20:08'),
(21, 13, 'Berkeluarga', 2, '2022-06-30 16:20:08', '2022-06-30 16:20:08'),
(22, 13, 'Jadi CEO', 1, '2022-06-30 16:20:08', '2022-06-30 16:20:08'),
(23, 13, 'Keliling dunia', 4, '2022-06-30 16:20:08', '2022-06-30 16:20:08'),
(24, 13, 'Tetap menjomblo', 3, '2022-06-30 16:20:08', '2022-06-30 16:20:08'),
(25, 13, 'Jadi selebriti', 5, '2022-06-30 16:20:08', '2022-06-30 16:20:08'),
(26, 14, 'Nongkrong', 4, '2022-06-30 16:20:08', '2022-06-30 16:20:08'),
(27, 14, 'Makan di kafe', 1, '2022-06-30 16:20:08', '2022-06-30 16:20:08'),
(28, 14, 'Nonton film', 3, '2022-06-30 16:20:08', '2022-06-30 16:20:08'),
(29, 14, 'Shopping', 5, '2022-06-30 16:20:08', '2022-06-30 16:20:08'),
(30, 14, 'Jalan jalan sama pacar', 2, '2022-06-30 16:20:08', '2022-06-30 16:20:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_31_030804_create_paket_soals_table', 1),
(6, '2022_06_01_102318_key_pilgan', 1),
(7, '2022_06_01_102354_soal_pilgan', 1),
(8, '2022_06_01_103441_soal_2d', 1),
(9, '2022_06_01_103453_key_2d', 1),
(10, '2022_06_05_152409_create_transaksis_table', 1),
(11, '2022_06_06_004950_create_batch_ujians_table', 1),
(12, '2022_06_08_164927_create_jawaban_siswas_table', 1),
(13, '2022_06_30_093557_siswa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `paket_soal`
--

CREATE TABLE `paket_soal` (
  `paket_soal_id` bigint(20) UNSIGNED NOT NULL,
  `user_add` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_paket` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soal` json NOT NULL,
  `harga` bigint(20) DEFAULT NULL,
  `waktu_pengerjaan` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paket_soal`
--

INSERT INTO `paket_soal` (`paket_soal_id`, `user_add`, `nama_paket`, `soal`, `harga`, `waktu_pengerjaan`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Mazie Nader PhD', '[{\"jawaban\": [{\"pilihan\": \"Holloway Whitaker\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Crane Hanson\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Key Reed\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Joanna\", \"soal_pg_id\": 1}, {\"jawaban\": [{\"pilihan\": \"Lilian Whitfield\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Lavonne Stewart\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Barber Bond\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Shepherd\", \"soal_pg_id\": 2}, {\"jawaban\": [{\"pilihan\": \"Wahyu Triono\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Arya Yohanes Christian\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Beby Wahyu Veliza\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Bambang\", \"soal_pg_id\": 3}, {\"jawaban\": [{\"pilihan\": \"Patton Lynch\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Jeanette Harper\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Moses Gregory\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Sloan\", \"soal_pg_id\": 4}]', NULL, '02:30:00', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(2, NULL, 'Kamron Gibson III', '[{\"jawaban\": [{\"pilihan\": \"Holloway Whitaker\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Crane Hanson\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Key Reed\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Joanna\", \"soal_pg_id\": 1}, {\"jawaban\": [{\"pilihan\": \"Lilian Whitfield\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Lavonne Stewart\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Barber Bond\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Shepherd\", \"soal_pg_id\": 2}, {\"jawaban\": [{\"pilihan\": \"Wahyu Triono\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Arya Yohanes Christian\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Beby Wahyu Veliza\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Bambang\", \"soal_pg_id\": 3}, {\"jawaban\": [{\"pilihan\": \"Patton Lynch\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Jeanette Harper\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Moses Gregory\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Sloan\", \"soal_pg_id\": 4}]', NULL, '02:30:00', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(3, NULL, 'Mrs. Lucy Conn I', '[{\"jawaban\": [{\"pilihan\": \"Holloway Whitaker\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Crane Hanson\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Key Reed\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Joanna\", \"soal_pg_id\": 1}, {\"jawaban\": [{\"pilihan\": \"Lilian Whitfield\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Lavonne Stewart\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Barber Bond\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Shepherd\", \"soal_pg_id\": 2}, {\"jawaban\": [{\"pilihan\": \"Wahyu Triono\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Arya Yohanes Christian\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Beby Wahyu Veliza\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Bambang\", \"soal_pg_id\": 3}, {\"jawaban\": [{\"pilihan\": \"Patton Lynch\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Jeanette Harper\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Moses Gregory\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Sloan\", \"soal_pg_id\": 4}]', NULL, '02:30:00', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(4, NULL, 'Violette Buckridge II', '[{\"jawaban\": [{\"pilihan\": \"Holloway Whitaker\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Crane Hanson\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Key Reed\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Joanna\", \"soal_pg_id\": 1}, {\"jawaban\": [{\"pilihan\": \"Lilian Whitfield\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Lavonne Stewart\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Barber Bond\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Shepherd\", \"soal_pg_id\": 2}, {\"jawaban\": [{\"pilihan\": \"Wahyu Triono\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Arya Yohanes Christian\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Beby Wahyu Veliza\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Bambang\", \"soal_pg_id\": 3}, {\"jawaban\": [{\"pilihan\": \"Patton Lynch\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Jeanette Harper\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Moses Gregory\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Sloan\", \"soal_pg_id\": 4}]', NULL, '02:30:00', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(5, NULL, 'Baylee Jast', '[{\"jawaban\": [{\"pilihan\": \"Holloway Whitaker\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Crane Hanson\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Key Reed\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Joanna\", \"soal_pg_id\": 1}, {\"jawaban\": [{\"pilihan\": \"Lilian Whitfield\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Lavonne Stewart\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Barber Bond\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Shepherd\", \"soal_pg_id\": 2}, {\"jawaban\": [{\"pilihan\": \"Wahyu Triono\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Arya Yohanes Christian\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Beby Wahyu Veliza\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Bambang\", \"soal_pg_id\": 3}, {\"jawaban\": [{\"pilihan\": \"Patton Lynch\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Jeanette Harper\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Moses Gregory\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Sloan\", \"soal_pg_id\": 4}]', NULL, '02:30:00', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(6, NULL, 'Eladio Willms III', '[{\"jawaban\": [{\"pilihan\": \"Holloway Whitaker\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Crane Hanson\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Key Reed\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Joanna\", \"soal_pg_id\": 1}, {\"jawaban\": [{\"pilihan\": \"Lilian Whitfield\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Lavonne Stewart\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Barber Bond\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Shepherd\", \"soal_pg_id\": 2}, {\"jawaban\": [{\"pilihan\": \"Wahyu Triono\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Arya Yohanes Christian\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Beby Wahyu Veliza\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Bambang\", \"soal_pg_id\": 3}, {\"jawaban\": [{\"pilihan\": \"Patton Lynch\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Jeanette Harper\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Moses Gregory\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Sloan\", \"soal_pg_id\": 4}]', NULL, '02:30:00', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(7, NULL, 'Patricia Lehner', '[{\"jawaban\": [{\"pilihan\": \"Holloway Whitaker\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Crane Hanson\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Key Reed\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Joanna\", \"soal_pg_id\": 1}, {\"jawaban\": [{\"pilihan\": \"Lilian Whitfield\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Lavonne Stewart\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Barber Bond\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Shepherd\", \"soal_pg_id\": 2}, {\"jawaban\": [{\"pilihan\": \"Wahyu Triono\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Arya Yohanes Christian\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Beby Wahyu Veliza\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Bambang\", \"soal_pg_id\": 3}, {\"jawaban\": [{\"pilihan\": \"Patton Lynch\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Jeanette Harper\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Moses Gregory\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Sloan\", \"soal_pg_id\": 4}]', NULL, '02:30:00', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(8, NULL, 'Prof. Cornelius Willms DVM', '[{\"jawaban\": [{\"pilihan\": \"Holloway Whitaker\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Crane Hanson\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Key Reed\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Joanna\", \"soal_pg_id\": 1}, {\"jawaban\": [{\"pilihan\": \"Lilian Whitfield\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Lavonne Stewart\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Barber Bond\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Shepherd\", \"soal_pg_id\": 2}, {\"jawaban\": [{\"pilihan\": \"Wahyu Triono\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Arya Yohanes Christian\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Beby Wahyu Veliza\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Bambang\", \"soal_pg_id\": 3}, {\"jawaban\": [{\"pilihan\": \"Patton Lynch\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Jeanette Harper\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Moses Gregory\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Sloan\", \"soal_pg_id\": 4}]', NULL, '02:30:00', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(9, NULL, 'Miss Tia McGlynn II', '[{\"jawaban\": [{\"pilihan\": \"Holloway Whitaker\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Crane Hanson\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Key Reed\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Joanna\", \"soal_pg_id\": 1}, {\"jawaban\": [{\"pilihan\": \"Lilian Whitfield\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Lavonne Stewart\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Barber Bond\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Shepherd\", \"soal_pg_id\": 2}, {\"jawaban\": [{\"pilihan\": \"Wahyu Triono\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Arya Yohanes Christian\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Beby Wahyu Veliza\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Bambang\", \"soal_pg_id\": 3}, {\"jawaban\": [{\"pilihan\": \"Patton Lynch\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Jeanette Harper\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Moses Gregory\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Sloan\", \"soal_pg_id\": 4}]', NULL, '02:30:00', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(10, NULL, 'Kira Bernhard', '[{\"jawaban\": [{\"pilihan\": \"Holloway Whitaker\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Crane Hanson\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Key Reed\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Joanna\", \"soal_pg_id\": 1}, {\"jawaban\": [{\"pilihan\": \"Lilian Whitfield\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Lavonne Stewart\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Barber Bond\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Shepherd\", \"soal_pg_id\": 2}, {\"jawaban\": [{\"pilihan\": \"Wahyu Triono\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Arya Yohanes Christian\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Beby Wahyu Veliza\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Bambang\", \"soal_pg_id\": 3}, {\"jawaban\": [{\"pilihan\": \"Patton Lynch\", \"key_pilgan_id\": 1, \"value_pilihan\": 1}, {\"pilihan\": \"Jeanette Harper\", \"key_pilgan_id\": 2, \"value_pilihan\": 2}, {\"pilihan\": \"Moses Gregory\", \"key_pilgan_id\": 3, \"value_pilihan\": 3}], \"pertanyaan\": \"Sloan\", \"soal_pg_id\": 4}]', NULL, '02:30:00', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(11, 11, 'Paket soal smp', '[{\"jawaban\": [{\"pilihan\": \"Kaya\", \"key_pilgan_id\": 11, \"value_pilihan\": 1}, {\"pilihan\": \"Seksi\", \"key_pilgan_id\": 12, \"value_pilihan\": 4}, {\"pilihan\": \"Teman dekat\", \"key_pilgan_id\": 13, \"value_pilihan\": 3}, {\"pilihan\": \"Memiliki sifat yang sama\", \"key_pilgan_id\": 14, \"value_pilihan\": 2}, {\"pilihan\": \"Yang aku cinta\", \"key_pilgan_id\": 15, \"value_pilihan\": 5}], \"tipe_soal\": \"pilgan\", \"pertanyaan\": \"Kamu menginginkan orang yang seperti apa untuk menjadi pasanganmu?\", \"soal_pg_id\": \"11\"}, {\"jawaban\": [{\"pilihan\": \"Dapur\", \"key_pilgan_id\": 16, \"value_pilihan\": 1}, {\"pilihan\": \"Kamar tidur\", \"key_pilgan_id\": 17, \"value_pilihan\": 3}, {\"pilihan\": \"Garasi\", \"key_pilgan_id\": 18, \"value_pilihan\": 4}, {\"pilihan\": \"Teras/Ruang tamu\", \"key_pilgan_id\": 19, \"value_pilihan\": 5}, {\"pilihan\": \"Lainnya\", \"key_pilgan_id\": 20, \"value_pilihan\": 2}], \"tipe_soal\": \"pilgan\", \"pertanyaan\": \"Di rumahmu, ruangan mana yang menjadi tempat favoritmu?\", \"soal_pg_id\": \"12\"}, {\"jawaban\": [{\"pilihan\": \"Jadi selebriti\", \"key_2d_id\": 45, \"value_pilihan\": 5}, {\"pilihan\": \"Tetap menjomblo\", \"key_2d_id\": 44, \"value_pilihan\": 3}, {\"pilihan\": \"Keliling dunia\", \"key_2d_id\": 43, \"value_pilihan\": 4}, {\"pilihan\": \"Jadi CEO\", \"key_2d_id\": 42, \"value_pilihan\": 1}, {\"pilihan\": \"Berkeluarga\", \"key_2d_id\": 41, \"value_pilihan\": 2}], \"tipe_soal\": \"2d\", \"pertanyaan\": \"Dalam 15 tahun ke depan, apa yang ingin kamu lakukan?\", \"soal_2d_id\": \"27\"}]', 50000, '02:30:00', '2022-06-30 16:29:36', '2022-06-30 16:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `soal_2d`
--

CREATE TABLE `soal_2d` (
  `soal_2d_id` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soal_2d`
--

INSERT INTO `soal_2d` (`soal_2d_id`, `pertanyaan`, `created_at`, `updated_at`) VALUES
(1, 'Fugit molestiae nihil placeat est fugiat. Quam illo magnam veniam cupiditate. Magnam enim ut doloremque earum. Dicta eos omnis odit nihil et delectus. Et architecto fugiat veritatis perspiciatis.', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(2, 'Ut enim placeat quasi sunt amet. Sint sit omnis autem est. Distinctio ut magnam deleniti excepturi molestiae.', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(3, 'Id sunt praesentium blanditiis eaque dolorem impedit autem pariatur. In enim et consequuntur sit sint temporibus. Sint esse commodi quam culpa odio.', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(4, 'Maxime aut est architecto sint natus non non esse. Omnis qui omnis aliquam sed aliquid quas.', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(5, 'Et dolores optio libero expedita ea culpa fugiat. Vitae et molestias qui qui et et. Et blanditiis asperiores molestiae ad eius et eius ea.', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(6, 'Voluptate incidunt officiis magni quo quo aut illo cupiditate. Quae fugit blanditiis non voluptatem blanditiis. Delectus qui labore iste quas sed molestias.', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(7, 'At facere at ipsam magnam rerum. Voluptas quia rem tempore incidunt. Omnis itaque necessitatibus quo ea velit reiciendis. Numquam magnam eveniet iure est ipsa libero accusamus.', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(8, 'Voluptas rerum facilis adipisci occaecati natus sapiente. Quod aut pariatur dolore. Beatae autem laboriosam molestiae natus totam sed.', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(9, 'Tempora omnis est quam debitis neque soluta officia. Repellat doloribus qui magni animi et. Sit necessitatibus impedit ut neque enim quas placeat. Et delectus consequatur tempora ipsa.', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(10, 'Pariatur commodi tempore eum totam distinctio. Assumenda et aliquid a fuga ipsam unde. Aut dolores neque iure in. Culpa et omnis sed sint doloribus voluptas corrupti.', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(28, 'Apa yang ingin kamu lakukan untuk bersenang senang?', NULL, NULL),
(27, 'Dalam 15 tahun ke depan, apa yang ingin kamu lakukan?', NULL, NULL),
(26, 'Di rumahmu, ruangan mana yang menjadi tempat favoritmu?', NULL, NULL),
(25, 'Kamu menginginkan orang yang seperti apa untuk menjadi pasanganmu?', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `soal_pilgan`
--

CREATE TABLE `soal_pilgan` (
  `soal_pg_id` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soal_pilgan`
--

INSERT INTO `soal_pilgan` (`soal_pg_id`, `pertanyaan`, `created_at`, `updated_at`) VALUES
(1, 'Rem eos nulla nihil aliquam assumenda non voluptas officia. Et facilis facilis et aut beatae molestias. Aliquam quo necessitatibus sed labore eos quis maiores tempore.', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(2, 'Qui incidunt delectus sint eaque fuga cumque corporis. Esse qui voluptatem quam neque. Non autem est perspiciatis qui harum.', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(3, 'Distinctio vel odio ea. Voluptatem doloremque sed culpa sint. Molestiae optio quo doloribus molestias asperiores dicta. Vel sit quibusdam voluptate.', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(4, 'Sequi sint est id cumque. Sunt mollitia eum aliquam dignissimos. Laborum occaecati corrupti eum est laborum.', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(5, 'Eaque reprehenderit quod qui voluptatem. Aut occaecati eos doloremque id dolorem. Officiis accusamus eius incidunt et consequuntur quaerat. Occaecati pariatur et rerum dolor.', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(6, 'Laboriosam et enim ut quibusdam. Earum ut ea at. Voluptas dignissimos iusto rerum odio. Impedit sequi autem molestiae veniam voluptatum ipsum dolor quam.', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(7, 'Impedit nostrum fugit molestiae eaque ratione. Dolorem et sapiente labore officia. Aspernatur totam molestias fugiat culpa. Et odit non dolores molestias.', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(8, 'Et dignissimos enim quod esse est sed veritatis qui. Maiores rerum quia id voluptas minus. Eligendi sunt minus rerum molestias ullam perferendis.', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(9, 'At porro aspernatur modi. Ab nemo inventore unde magnam maiores aut. Est voluptas soluta fuga enim distinctio molestiae odit. Eveniet eos aut esse dolorum qui assumenda.', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(10, 'Natus cupiditate minima quaerat ratione. Consectetur eius placeat voluptatem cupiditate illo. Ex neque molestiae dolorem aliquam. Consequatur aperiam voluptatum voluptas eos ea dolores.', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(11, 'Kamu menginginkan orang yang seperti apa untuk menjadi pasanganmu?', NULL, NULL),
(12, 'Di rumahmu, ruangan mana yang menjadi tempat favoritmu?', NULL, NULL),
(13, 'Dalam 15 tahun ke depan, apa yang ingin kamu lakukan?', NULL, NULL),
(14, 'Apa yang ingin kamu lakukan untuk bersenang senang?', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `paket_soal_id` bigint(20) UNSIGNED NOT NULL,
  `tgl_bayar` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `user_id`, `paket_soal_id`, `tgl_bayar`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-06-30 23:18:11', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(2, 1, 1, '2022-06-30 23:18:11', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(3, 1, 1, '2022-06-30 23:18:11', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(4, 1, 1, '2022-06-30 23:18:11', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(5, 1, 1, '2022-06-30 23:18:11', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(6, 1, 1, '2022-06-30 23:18:11', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(7, 1, 1, '2022-06-30 23:18:11', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(8, 1, 1, '2022-06-30 23:18:11', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(9, 1, 1, '2022-06-30 23:18:11', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(10, 1, 1, '2022-06-30 23:18:11', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(11, 13, 11, '2022-06-30 23:32:10', '2022-06-30 16:32:10', '2022-06-30 16:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','psikolog','guru','siswa') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mrs. Vivienne Bode', 'guru', 'noe19@example.com', '2022-06-30 16:18:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'q2B5moMu7D', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(2, 'Estevan Welch III', 'guru', 'tpurdy@example.org', '2022-06-30 16:18:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 's41g5D93cn', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(3, 'Nettie O\'Hara III', 'guru', 'rutherford.clovis@example.org', '2022-06-30 16:18:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'oJt7Pm1vPQ', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(4, 'Talia Keeling V', 'guru', 'ellis.bogisich@example.org', '2022-06-30 16:18:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dkt092dH8Y', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(5, 'Ferne Schroeder', 'guru', 'valentina.johns@example.com', '2022-06-30 16:18:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8iv78pYyOH', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(6, 'Lue Wiza', 'guru', 'jettie.koch@example.com', '2022-06-30 16:18:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JO8LWGrt98', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(7, 'Ms. Julia Weissnat PhD', 'guru', 'molly19@example.org', '2022-06-30 16:18:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'jJQeEQWtrD', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(8, 'Miss Lenna Morar', 'guru', 'leannon.kurtis@example.org', '2022-06-30 16:18:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qSNaeqOeWM', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(9, 'Martina Homenick', 'guru', 'nebert@example.org', '2022-06-30 16:18:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'iX26b4ggM3', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(10, 'Nikita Abernathy', 'guru', 'ruth85@example.net', '2022-06-30 16:18:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'WSUl6HNVU0', '2022-06-30 16:18:11', '2022-06-30 16:18:11'),
(11, 'psikolog', 'psikolog', 'psikolog@gmail.com', NULL, '$2y$10$kMGrlVIWfaHr/z56KNTQmuIdTlivAloFg29WodoIaJIE6woU2fQDS', NULL, '2022-06-30 16:18:52', '2022-06-30 16:18:52'),
(13, 'guru', 'guru', 'guru@gmail.com', NULL, '$2y$10$h4FEBqHM24wO61/0Z228Ge6i6RXjR7gMt3EwQUJPmFcvSUw/H10Ym', NULL, '2022-06-30 16:31:28', '2022-06-30 16:31:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch_ujian`
--
ALTER TABLE `batch_ujian`
  ADD PRIMARY KEY (`batch_id`),
  ADD KEY `batch_ujian_transaksi_id_foreign` (`transaksi_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jawaban_siswa`
--
ALTER TABLE `jawaban_siswa`
  ADD PRIMARY KEY (`jawaban_siswa_id`),
  ADD KEY `jawaban_siswa_batch_id_foreign` (`batch_id`),
  ADD KEY `jawaban_siswa_paket_soal_id_foreign` (`paket_soal_id`);

--
-- Indexes for table `key_2d`
--
ALTER TABLE `key_2d`
  ADD PRIMARY KEY (`key_2d_id`),
  ADD UNIQUE KEY `key_2d_pilihan_unique` (`pilihan`),
  ADD KEY `key_2d_soal_2d_id_foreign` (`soal_2d_id`);

--
-- Indexes for table `key_pilgan`
--
ALTER TABLE `key_pilgan`
  ADD PRIMARY KEY (`key_pilgan_id`),
  ADD UNIQUE KEY `key_pilgan_pilihan_unique` (`pilihan`),
  ADD KEY `key_pilgan_soal_pg_id_foreign` (`soal_pg_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket_soal`
--
ALTER TABLE `paket_soal`
  ADD PRIMARY KEY (`paket_soal_id`),
  ADD KEY `paket_soal_user_add_foreign` (`user_add`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`siswa_id`);

--
-- Indexes for table `soal_2d`
--
ALTER TABLE `soal_2d`
  ADD PRIMARY KEY (`soal_2d_id`);

--
-- Indexes for table `soal_pilgan`
--
ALTER TABLE `soal_pilgan`
  ADD PRIMARY KEY (`soal_pg_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`),
  ADD KEY `transaksi_user_id_foreign` (`user_id`),
  ADD KEY `transaksi_paket_soal_id_foreign` (`paket_soal_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch_ujian`
--
ALTER TABLE `batch_ujian`
  MODIFY `batch_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jawaban_siswa`
--
ALTER TABLE `jawaban_siswa`
  MODIFY `jawaban_siswa_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `key_2d`
--
ALTER TABLE `key_2d`
  MODIFY `key_2d_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `key_pilgan`
--
ALTER TABLE `key_pilgan`
  MODIFY `key_pilgan_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `paket_soal`
--
ALTER TABLE `paket_soal`
  MODIFY `paket_soal_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `siswa_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `soal_2d`
--
ALTER TABLE `soal_2d`
  MODIFY `soal_2d_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `soal_pilgan`
--
ALTER TABLE `soal_pilgan`
  MODIFY `soal_pg_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
