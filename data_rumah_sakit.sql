-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2024 at 04:25 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_rumah_sakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_layanans`
--

CREATE TABLE `jenis_layanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_layanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_layanans`
--

INSERT INTO `jenis_layanans` (`id`, `jenis_layanan`, `created_at`, `updated_at`) VALUES
(1, 'Publik Umum Kemenkes', '2022-02-06 23:17:13', '2022-02-06 23:17:13'),
(2, 'Swasta Umum', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(3, 'Rumah Sakit Umum', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(4, 'Kemenkumham', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(5, 'Swasta Khusus Ibu dan Anak', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(6, 'Swasta Khusus Bedah', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(7, 'Kemenkes Khusus', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(8, 'Pemda Umum', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(9, 'Pemda DKI', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(10, 'Polri Umum', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(11, 'TNI AD Umum', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(12, 'Pemda Khusus Jiwa', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(13, 'Swasta Khusus Bersalin', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(14, 'TNI AU Umum', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(15, 'TNI AU Khusus', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(16, 'Kemenpora', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(17, 'Swasta Khusus', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(18, 'Kemenkumham', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(19, 'Klinik Umum', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(20, 'Klinik Kecantikan', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(21, 'Poli Umum', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(22, 'Poli Umum (khusus karyawan)', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(23, 'Pelayanan Umum', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(24, 'Pelayanan Gigi', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(25, 'Pelayanan Kecantikan Estetika', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(26, 'Pelayanan Medik Spesialis Dasar Okupasi', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(27, 'Pelayanan Medik Spesialis Dasar Obsgyn', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(28, 'Bersalin', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(29, 'Pelayanan dasar Medik Umum', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(30, 'Rawat Jalan', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(31, 'Pelayanan Gawat Darurat', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(32, 'Rawat Inap', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(33, 'Imunisasi', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(34, 'Gigi dan Mulut', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(35, 'Hematologi', '2022-02-06 23:17:14', '2022-02-06 23:17:14'),
(36, 'KIA/KB', '2022-02-06 23:17:14', '2022-02-06 23:17:14');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatans`
--

CREATE TABLE `kecamatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kecamatans`
--

INSERT INTO `kecamatans` (`id`, `kecamatan`, `created_at`, `updated_at`) VALUES
(1, 'Pulogadung', '2022-02-03 06:14:57', '2022-02-03 06:14:57'),
(2, 'Kramat Jati', '2022-02-03 06:14:58', '2022-02-03 06:14:58'),
(3, 'Duren Sawit', '2022-02-03 06:14:58', '2022-02-03 06:14:58'),
(4, 'Makasar', '2022-02-03 06:14:58', '2022-02-03 06:14:58'),
(5, 'Ciracas', '2022-02-03 06:14:58', '2022-02-03 06:14:58'),
(6, 'Pasar Rebo', '2022-02-03 06:14:58', '2022-02-03 06:14:58'),
(7, 'Matraman', '2022-02-03 06:14:58', '2022-02-03 06:14:58'),
(8, 'Jatinegara', '2022-02-03 06:14:58', '2022-02-03 06:14:58'),
(9, 'Cakung', '2022-02-03 06:14:58', '2022-02-03 06:14:58'),
(10, 'Cipayung', '2022-02-03 06:14:58', '2022-02-03 06:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahans`
--

CREATE TABLE `kelurahans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelurahans`
--

INSERT INTO `kelurahans` (`id`, `kelurahan`, `created_at`, `updated_at`) VALUES
(1, 'Pisangan Baru', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(2, 'Utan Kayu Selatan', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(3, 'Utan Kayu Utara', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(4, 'Kayu Manis', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(5, 'Pal Meriam', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(6, 'Kebon Manggis', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(7, 'Kayu Putih', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(8, 'Jati', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(9, 'Rawamangun', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(10, 'Pisangan Timur', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(11, 'Cipinang', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(12, 'Jatinegara Kaum', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(13, 'Pulo Gadung', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(14, 'Bali Mester', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(15, 'Kampung Melayu', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(16, 'Bidaracina', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(17, 'Cipinang Cempedak', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(18, 'Rawa Bunga', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(19, 'Cipinang Besar Utara', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(20, 'Cipinang Besar Selatan', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(21, 'Cipinang Muara', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(22, 'Pondok Bambu', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(23, 'Duren Sawit', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(24, 'Pondok Kelapa', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(25, 'Pondok Kopi', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(26, 'Malaka Jaya', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(27, 'Malaka Sari', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(28, 'Klender', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(29, 'Kramat Jati', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(30, 'Batu Ampar', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(31, 'Balekambang', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(32, 'Kampung Tengah', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(33, 'Dukuh', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(34, 'Cawang', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(35, 'Cililitan', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(36, 'Pinang Ranti', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(37, 'Makasar', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(38, 'Halim Perdanakusuma', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(39, 'Cipinang Melayu', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(40, 'Kebon Pala', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(41, 'Pekayon', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(42, 'Kampung Gedong', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(43, 'Cijantung', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(44, 'Kampung Baru', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(45, 'Kalisari', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(46, 'Cibubur', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(47, 'Kelapa Dua Wetan', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(48, 'Ciracas', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(49, 'Susukan', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(50, 'Rambutan', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(51, 'Lubang Buaya', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(52, 'Ceger', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(53, 'Cipayung', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(54, 'Munjul', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(55, 'Pondok Ranggon', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(56, 'Cilangkap', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(57, 'Setu', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(58, 'Bambu Apus', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(59, 'Cakung', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(60, 'Cakung Timur', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(61, 'Rawa Terate', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(62, 'Jatinegara', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(63, 'Penggilingan', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(64, 'Pulogebang', '2022-02-03 06:24:54', '2022-02-03 06:24:54'),
(65, 'Ujung Menteng', '2022-02-03 06:24:54', '2022-02-03 06:24:54');

-- --------------------------------------------------------

--
-- Table structure for table `kepemilikans`
--

CREATE TABLE `kepemilikans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kepemilikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kepemilikans`
--

INSERT INTO `kepemilikans` (`id`, `kepemilikan`, `created_at`, `updated_at`) VALUES
(1, 'Rumah Sakit Kementrian', '2022-02-03 06:27:19', '2022-02-03 06:27:19'),
(2, 'Rumah Sakit Pemerintah Daerah', '2022-02-03 06:27:19', '2022-02-03 06:27:19'),
(3, 'Rumah Sakit Umum Swasta', '2022-02-03 06:27:19', '2022-02-03 06:27:19'),
(4, 'Rumah Sakit Umum Angkatan', '2022-02-03 06:27:19', '2022-02-03 06:27:19'),
(5, 'Rumah Sakit Khusus Angkatan', '2022-02-03 06:27:19', '2022-02-03 06:27:19'),
(6, 'Rumah Sakit Khusus Swasta', '2022-02-03 06:27:19', '2022-02-03 06:27:19'),
(7, 'Rumah Sakit Ibu dan Anak', '2022-02-03 06:27:19', '2022-02-03 06:27:19');

-- --------------------------------------------------------

--
-- Table structure for table `kliniks`
--

CREATE TABLE `kliniks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_klinik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penanggung_jawab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan_id` int(11) NOT NULL,
  `kelurahan_id` int(11) NOT NULL,
  `no_telepon` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenislayanan_id` int(11) NOT NULL,
  `bpjs` int(11) NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_pendataan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_akreditasi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kliniks`
--

INSERT INTO `kliniks` (`id`, `nama_klinik`, `penanggung_jawab`, `alamat`, `kecamatan_id`, `kelurahan_id`, `no_telepon`, `jenislayanan_id`, `bpjs`, `latitude`, `longitude`, `images`, `tahun_pendataan`, `status_akreditasi`, `created_at`, `updated_at`) VALUES
(1, 'Klinik Yadika', 'Dr. Novita', 'Jl. Lap. Tembak No. 9 ,Pekayon', 6, 41, '081219674297', 19, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(2, 'Klinik Citra Medika', 'dr. Dani Pramudya', 'Jl. Raya Bogor Km. 28 Rt..Rw. 03/02 Kel. Pekayon', 6, 41, '082138605155', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(3, 'Klinik PT Panasonic', 'dr.Soetjiningsih', 'Jl. Raya Bogor Km. 29, Pekayon', 6, 41, '0811865745', 19, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(4, 'Klinik Intertek', 'dr.Hj. Yudhawati', 'Jl. Raya Bogor KM. 28 Rt. 04/07 , Kel. Pekayon', 6, 41, '08561801177', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(5, 'Klinik Pratama Rafa', 'dr. R.Herman K', 'Jl. Gongseng Raya No. 48 Rt/Rw. 04/01 Kel. Baru Kec. Pasar Rebo', 6, 44, '08129099040', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(6, 'Klinik Medika Ananda', 'dr. Rikha Sri M', 'Jalan hasan no 9 RT 02/09 kel baru', 6, 44, '082272896908', 19, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(7, 'Klinik Anugerah', 'dr.Nella Christia E', 'Jl. Gongseng Raya No. 2 , RT 06/09. Kel Baru', 6, 44, '082113071352', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(8, 'Klinik Fista Nanda', '0', 'jln masjid aljadid I, no 33 rt04/09', 6, 44, '08170944865', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(9, 'Klinik Budhi Pratama Kalisari ', 'dr. Nugroho', 'Jl. Kalisari II No. 120 Rt. 06/03 Kalisari', 6, 45, '089523919301', 19, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(10, 'Klinik Pratama Salamah Kalisari', 'dr. Elmizah ', 'Jl. Lapan Kalisari No. 176 Rt/Rw. 13/02 Kel. Kalisari Kec. Pasar Rebo ', 6, 45, '081284851772', 19, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(11, 'Klinik Yadika', 'dr. Rahmi Pudiastuti ', 'Jl. Baret Biru III No. 6 ,RT 6 RW 3 ', 6, 45, '087788674445', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(12, 'Klinik Budi Pratama Gedong', 'dr.Rifki Effendi Suyono', 'Jl. Raya Tengah No. 26 Rt/Rw. 06/01 Kel. Gedong', 6, 42, '085642207402', 19, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(13, 'PT. Frisian Flag Indonesia', 'dr. Wijanto Widjaja', 'Jl. Raya Bogor KM. 5 Rt/Rw 005/02 Kel. Gedong ', 6, 42, '08161972700', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(14, 'Klinik Sandoz', 'dr. M.Arief Novianto, MKK,Sp Ok', 'Gd. PT SANDOZ INDONESIA, Jl. TB Simatupang Rt. 007 Rw. 001', 6, 42, '081316807203', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(15, 'Estetiderma', 'dr M Karyadi Hadiprodjo,MM', 'Ruko Grand Simatupang 1E, Jl TB. Simatupang Raya, RT 008 RW 02', 6, 42, '08161144867', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(16, 'Estetiderma', 'dr M Karyadi Hadiprodjo,MM', 'Jl Kesehatan No 16 A RT 04/11 ', 6, 42, '08161144867', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(17, 'Taqia Medika', 'dr. Emilia Bulan Baganti', 'Jl Gongseng Raya no 1 RT/RW 01/09 Kel Cijantung', 6, 43, '087883932599', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(18, 'Polma Keskopasus', 'dr. Alfian', 'Jalan jati no 1, Kelurahan Gedong', 6, 42, '085640452012', 19, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(19, 'Klinik Pratama Polkes Induk Cijantung', 'dr. Nurini W', 'Jl. Sederhana Raya RT01/RW06 Gedong', 6, 42, '081210238707', 19, 1, '', '', '', 'Februari 2021', 1, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(20, 'Klinik Pratama Rindam Jaya', 'dr. Nurul', 'Jl. Raya Condet No.55 Kel. Gedong', 6, 42, '082383010185', 19, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(21, 'Klinik Miracle', 'dr. Subianto', 'JL. Matraman Raya NO. 14-16', 7, 6, '081398281098', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(22, 'Klinik YKKP Bank Dki', 'Dr.dr.TB Djumhana Atmakusuma,SpPD.K-HOM', 'JL. Matraman Raya No. 72 Jak Tim', 7, 6, '087781238365', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(23, 'Klinik BPU Bio Medis', 'dr. Juli Widiharto', 'JL. Kayu ManisTimur No 52', 7, 4, '081317282120', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(24, 'Klinik Zafira Medika', 'dr. Silvani', 'JL. Kayu Manis No.37 RT 014/02', 7, 4, '085224774459', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(25, 'Klinik Sartika ', 'dr Anis Sundari', 'JL. Kayu Manis VIII/78', 7, 4, '0218504931', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(26, 'Klinik Pratama Keluarga Yayasan Kusuma Buana', 'Dr.dr. Joedo Prihartono MPH', 'JL. Pisangan Baru III No 210 RT010/07', 7, 1, '08564941670', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(27, 'Klinik Yabi Medika', 'dr. Clara Magdalena', 'JL. Pisangan Baru No. 16 A RT 04 RW 11 Pisangan Baru', 7, 1, '087773074982', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(28, 'Klinik PKBI DKI Jakarta', 'dr. Teza Farida/ Bonita', 'Jl. Pisangan Baru Timur', 7, 1, '085649416700', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(29, 'Klinik Karya Bhakti Dhipa', 'dr. Rahmat Edi Wahyudi/ Bu. Khairunissa', 'JL. Pisangan Baru Tengah No. 38 1/12', 7, 1, '081293330061', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(30, 'Klinik Pratama Dr. Abdul Radjak', 'dr. Hj Hawani Halvina', 'JL. Tegalan no. 30 RT 001 RW 07 Kel. Palmeriam', 7, 5, '081210860229', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(31, 'Klinik Prima Medika', 'dr. Santi Sasanti', 'JL. Kelapa Sawit Raya No 28 RT001/010', 7, 2, '081210860229', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(32, 'Klinik Bhakti Sairi', 'dr. Syamsul Andi Hakim', 'JL. Kebon Kelapa Tinggi No.1 009/008', 7, 2, '0818767702', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(33, 'Klinik Namirah', 'dr. Menik Yuliani', 'JL. Utan Kayu Raya No.28', 7, 3, '0818767702', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(34, 'Klinik Azka Medika', 'Dini Maharani Bachtiar', 'JL. Kayu Manis X No. 3C RT 002/09 Kayu Manis', 7, 4, '082213686708', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(35, 'Klinik Pratama BPKP DKI Jakarta', 'dr. Hana Amalia', 'JL. Parmuka No. 33 Kel. Utan Kayu Utara', 7, 3, '081315749737', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(36, 'Polkes Induk,00.09.04/JT', 'drg. Suciyanti Harahap', 'JL. Matraman Raya', 7, 6, '08116802004', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(37, 'Klinik Derma Express', 'dr. Deasy Natalia Bustam', 'JL. Utan Kayu Raya No. 79B RT 001/08 Utan Kayu Utara', 7, 3, '081311806326', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(38, 'Klinik Pratama BPKP DKI Jakarta', 'dr. Hana Amalia', 'JL. Pramuka No. 33 Kel. Utan Kayu Utara', 7, 3, '081315749737', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(39, 'Polkes Induk,00.09.04/JT', 'drg. Suciyanti Harahap', 'JL. Matraman Raya', 7, 6, '08116802004', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(40, 'Klinik Pratama Ummi Medika', 'Dr. Hendi Purwanto Bastaman', 'KRT. Radjiman Widyoningrat No 54 ', 9, 62, '46833267', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(41, 'Klinik Wisma Asri Medika', 'dr. Ali Nur Subkhan', 'Jl. KRT Radjiman Widyoningrat No 14', 9, 62, '08111977995', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(42, 'Klinik Nayaka Era Husada 03', 'dr. Zarliani', 'Jl. KRT Radjiman Widyoningrat No 26', 9, 62, '', 19, 1, '', '', '', 'Februari 2021', 1, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(43, 'Klinik Pratama Sukma Anggrek', 'Dr. Budiman Murdani L Tobing', 'JL Raya Bekasi Km 18 No 8 Rt 10/04 ', 9, 62, '46823314', 19, 1, '', '', '', 'Februari 2021', 1, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(44, 'Poliklinik PT DNP Indonesia', 'Dr. Okky Hutama', 'Jl Pulo Gadung No 16-18, Kav II H2 & II H3, Kawasan Industri Pulo Gadung', 9, 62, '4610313', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(45, 'Klinik Mustika Aesthetic ', 'Dr. Nasriyatul Hannak', 'Jl Raya Bekasi Km 18 no 21', 9, 62, '', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(46, 'Klinik Kimia Farma Kawasan Industri Pulogadung', 'dr Franki Yuniar Maradona/ dr Elsa Martina', 'Jl. Rawa Gelam V no 1 kawasan Industri Pulogadung', 9, 62, '02122466906', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(47, 'Klinik Pratama Sumber Waluyo', 'dr. Asri Badarudin', 'Jl. Radjiman RT.008/012', 9, 62, '082125594944', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(48, 'PT Herlina Indah', 'dr. Shabrina Ghassani Roza', 'Jalan Rawa Sumur II Blok DD No 16,  Kawasan Industri Pulogadung', 9, 62, '4609482', 22, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(49, 'PT Johnson Home Hygiene', 'dr Ajeng Amelianingtyas', 'JL. RAWA SUMUR NO.12 JAKARTA INDUSTRIAL ESTATE PULOGADUNG, JATINEGARA , CAKUNG, JAKARTA TIMUR , KODE POS : 13930', 9, 62, '08113303968', 22, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(50, 'PT Pamapersada Nusantara', 'dr Erie Wisudiyono', 'Jl.Rawa Gelam I No.9 Kel.Jatinegara Kec.Cakung Kawasan Industri Pulogadung Jakarta Timur 13930', 9, 62, '081952848448', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(51, 'In House Klinik Nayaka House Musik', 'dr Ananda Rosi ES', 'Jl. Pulo Buaran IV, KIP Pulo Gadung blok B 3 JJ 6, Kel.Jatinegara Kec. Cakung', 9, 62, '081218339697', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(52, 'Andalan Medika', 'dr. Henry Antares', 'Dr. KRT Radjiman Widyodiningrat  RT02/RW.13', 9, 62, '087774414630', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(53, 'Klinik Permata Bunda', 'dr.Arikafitri Andini', 'Jl Marzuki no 28 RT/RW 012/001 Penggilingan Cakung', 9, 63, '', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(54, 'Klinik Pratama PT Yamaha Indonesia Motor Manufacturing', 'dr. Ni Nyoman Yuliadhyatmi', 'Jl. Dr.KRT.Radjiman Widyodiningrat RW 06', 9, 61, '4612222', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(55, 'Klinik Permata Bunda', 'dr.Arikafitri Andini', 'Jl Marzuki no 28 RT/RW 012/001 Penggilingan Cakung', 9, 63, '', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(56, 'Klinik Pratama Renny Eva Sari', 'Dr. Fauzan Rahman', 'Jl. P Komarudin Rt 10/05 ', 9, 63, '22830433', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(57, 'Klinik Bina Husada Bakti', 'dr. Afridal Castro', 'Jl. Raya Penggilingan No.12 RT.07/08 ', 9, 63, '22464998', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(58, 'Klinik Pratama Klapa 2', 'dr. Pony Ndaruji', 'Jl. Raya Penggilingan No.03 RT.11/07 ', 9, 63, '4601927', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(59, 'Klinik Mitra', 'dr. Gunawan Tjhia', 'Jl. Raya Penggilingan RT.07/07 ', 9, 63, '4805201', 18, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(60, 'Klinik Nurmala Medica 01', 'dr. Lusia Dewi Khristina Wbs', 'Jl. Pedaengan No.60 RT.05/08 ', 9, 63, '4608479', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(61, 'Klinik Syabil Medika', 'dr. H Wais Al-Qurni', 'Jl Raya Tipar Cakung Rt 2/9', 9, 59, '', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(62, 'Klinik Pratama Poliklinik PT. United Tractors Tbk', 'dr. Febrina Listya Andanti', 'Jl. Raya Bekasi KM 22 RT.001/001 ', 9, 59, '0811859118', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(63, 'Klinik Pratama PT Bina Sinar Amity', 'dr. dian Puspita Sari', 'Jl Raya Cakung Cilincing Km 03 Jakarta Timur', 9, 59, '4603401', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(64, 'Klinik SKF', 'dr . Afrina', 'Jln. Cakung Drain RT 01/ RW 09 Kel Cakung Barat', 9, 59, '081297578884', 22, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(65, 'Klinik Pelita Insani', 'dr. Nelsy Maitar', 'Jl. Inspeksi PAM No. 95 RT 04/04', 9, 59, '081385714706', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(66, 'Klinik Widya Husada', 'dr. Risyaf Saladin', 'Jl Raya Penggilingan no 3 Rt 1/1 ', 9, 59, '4618161', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(67, 'klinik Pratama Nurmala Medika 02', 'dr. Meigi Suwarto', 'jl bulak indah rt 1/12', 9, 60, '', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(68, 'klinik mitra cakung', 'dr. Rika Erna Maynovalina', 'Jl. Balai rakyat No 38 kp gempol rt 3/1 ', 9, 60, '081382220794', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(69, 'klinik mitra warga medika', 'dr. Irodatul Husnah', 'jl raya kayu tinggi rt 1/11 ', 9, 60, '', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(70, 'Natasha Skin Clinic Center', 'Dr. Ananda Sujati', 'AEON MALL Jakarta Garden City Cakung', 9, 60, '', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(71, 'ZAP AEON Jakarta Garden City', 'dr. Arindhita Permatasari', 'AEON Mall Jakarta Garden City Lantai 1-G2. Jl Boulevard Jakarta Garden City Cakung', 9, 60, '22463155', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(72, 'Klinik Pratama Attaufik Medical Center', 'dr. Muhammad Syah', 'Kp. Gempol RT/RW 003/001', 9, 60, '087877614524', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(73, 'Klinik Pratama Erha Apothecary', 'dr Jessica Ubercaprita', 'Aeon Mall JGC Ground Floor Unit G-09 Jl. Kayu Tinggi', 9, 60, '085890279797', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(74, 'Klinik Pratama Dental Theory', 'drg. Fadlia Murtafia', 'Ruko The Walk No. 26 JGC Jl. Raya Cakung Cilincing', 9, 60, '08953373306', 24, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(75, 'Klinik Pratama Wijaya Platinum', 'dr Findhy', 'Ruko Boulevard City TB/19 JGC', 9, 60, '081381333918', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(76, 'Klinik Pratama Le Merrian', 'dr Ivo', 'Ruko The Walk No. 57 JGC Cakung Timur', 9, 60, '', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(77, 'Klinik Pertamedika Medan', 'dr. Sri Sumanti Purwatiningsih', 'JL. Arun IX No 2 Rt 09/04 ', 9, 65, '4604944', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(78, 'Klinik Cava Medika', 'dr. Bonifasi Lestari', 'Jl Raya Bekasi Km 26 RT 01/01 No 02 ', 9, 65, '2146827547', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(79, 'Klinik Pratama Tiara Estetika', 'dr. Harjani Ledi Mulyana', 'Ruko Taman Modern Blok R1 No.12 RT.010/006', 9, 65, '4614091', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(80, 'Klinik Pratama Amelia Medika', 'dr. Vicky Ali Rausyan Fikri', 'Jl. Raya PuloGebang Rt 5/4', 9, 65, '081223468727', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(81, 'Klinik Millenium Sehat Abadi', 'Dr. Hadi Purnomo Halim, MM', 'Jl Raya pulo Gebang No 43  Rt 05/04', 9, 64, '4804304', 21, 1, '', '', '', 'Februari 2021', 1, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(82, 'Klinik Dewa Medika', 'Dr. Delvina Anastasya Pertiwi', 'Jln. Raya Pulogebang Rt03/Rw03 Kel Pulogebang ', 9, 64, '4802944', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(83, 'Klinik Pratama Cempaka 24 Jam', 'Dr. Gita Monika', 'Jl. Raya Pulo Gebang No 86 Rt 06/06 ', 9, 64, '4801980', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(84, 'Klinik Ar-Rahmah', 'dr. Ridwan Ahmad Albana', 'Jl. Komarudin Rt 02/05 No 10 ', 9, 64, '4803295', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(85, 'Klinik PKPP', 'drg Ayu Widowati', 'Kantor Walikota Jakarta Timur Blok A lantai 1, Jln Dr. Sumarno  Rt 11/ RW 08', 9, 64, '082298638394', 21, 1, '', '', '', 'Februari 2021', 1, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(86, 'Klinik Pratama Batari Husada', 'dr.Leni Astuti', 'Jl. Buaran Sakti No. 59 RT 3/RW 13 Klender', 3, 28, '08974437626', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(87, 'Klinik Pratama Dermaga Raya', 'dr.Dina Meilina', 'Jl.Dermaga Raya No.79 RT 003/ RW 008', 3, 28, '86602590', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(88, 'Klinik Pratama Al-Falah', 'dr.Mochamad Sani, MM', 'Jl.Pahlawan Revolusi No.2A RT 10/06', 3, 28, '02186613318', 23, 1, '', '', '', 'Februari 2021', 1, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(89, 'Klinik Pratama St.Carolus Samadi Klender', 'drg. Yuliana Helena, MARS', 'Jl. Bulak Raya No 58 RT. 03 RW 07', 3, 28, '8615514', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(90, 'Klinik Pratama Axel Dental', 'drg.Dianita Purbarani', 'Jl.Buaran Raya No.92 RT 01/ RW 14', 3, 28, '02122322829', 24, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(91, 'Klinik Pratama Win Medika', 'dr.Luthfi Mahmudah', 'Jl.Cipinang Muara III No.6 RT 007/ RW 004', 3, 28, '02186612248', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(92, 'Klinik Pratama Kimia Farma 147 Duren Sawit', 'dr. Siti Sarah', 'Jl. duren sawit raya blok B3 no 29', 3, 28, '28531226', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(93, 'Klinik Pratama ERTO BEAUTY CLINIC', 'dr.Amanda Rahmania', 'Jl. Buaran Raya No.95 & 98A, RT.1/RW.14', 3, 28, '0218607580', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(94, 'Klinik Pratama Griya Asih', 'dr.Natalia Permatasari', 'JL. Buaran III RT 03/ RW 13', 3, 28, '087875247378', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(95, 'Klinik Pratama DL Slim & Skin Care', 'dr.Irma Pratiwy', 'Jl. Dermaga Raya No.46, RT.7/RW.16', 3, 28, '02186612920', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(96, 'Klinik Pratama Zglow', 'dr.Milka Anisya Norasiya', 'Jl Raden Inten II No 58 ', 3, 28, '08119004996', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(97, 'Klinik Pratama Berkah Medika', 'dr.Deva Ani', 'Jl.SMP 135 RT 7/RW 7, Pondok Bambu', 3, 22, '081315008381', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(98, 'Klinik Pratama Medissa', 'dr.Mohadjri', 'Jl.Pahlawan Revolusi No.15B, Pondok Bambu', 3, 22, '02186609727', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(99, 'Klinik Pratama Rutan Pondok Bambu', 'dr. Titien Widya Astuti, MARS', 'Jl.Pahlawan Revolusi, Pondok Bambu', 3, 22, '8612004', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(100, 'Klinik Pratama Naavagreen Skin Care', 'dr. Dian Nurhani Safitri', 'Jl.Pahlawan Revolusi No.46, Pondok Bambu', 3, 22, '21285044', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(101, 'Klinik Pratama Kimia Farma Pondok Bambu', 'dr.Mega Permata', 'Jl.Pahlawan Revolusi No.53, Pondok Bambu', 3, 22, '02128535366', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(102, 'Klinik Pratama Fairy', 'dr. Bernard Christian Hasugian', 'Jl.Pahlawan Revolusi No.8B, Pondok Bambu', 3, 22, '02186611407', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(103, 'Klinik Pratama HappyTooth - Pondok Bambu', 'drg. Lenie Dahliana', 'Jl. Pahlawan Revolusi no 57 ', 3, 22, '085211300100', 24, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(104, 'Klinik Pratama HappyTooth - Kalimalang', 'drg. Ahmad Rusydi HMS', 'Jl. Kalimalang Raya E7 Kalimalang Mas Building no 7', 3, 22, '088908819191', 24, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(105, 'Klinik Pratama Dava', 'dr. Elni Lukman', 'Jl.Kejaksaan Raya No.21, Pondok Bambu', 3, 22, '0218616608', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(106, 'Klinik Pratama E3A', 'dr. Emilia Kasturi', 'Jl. Camar Blok CC No.15 Cipinang Indah II', 3, 22, '08179988322', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(107, 'Klinik Pratama Cipinang Indah', 'dr. Roswita Eva Magdalena', 'Cipinang Indah 2, Jl. Merak no 1, ', 3, 22, '0811900359', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(108, 'Klinik Pratama Tiara Medika', 'dr.Siti Fatimah', 'Apt Casablanca East Residence, Pondok Bambu', 3, 22, '087780755335', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(109, 'Klinik Pratama Skina Aesthetics', 'dr.Siska Kristina Purnamasari', 'Jl. Pahlawan Revolusi No.16C, RT.3/RW.4', 3, 22, '02122088457', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(110, 'Klinik Pratama FDC Dental Clinic', 'drg.Farida', 'Jl. Teratai Putih Raya No.2, RT.8/RW.4', 3, 26, '02186616675', 24, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(111, 'Klinik Pratama Kimia Farma Malaka Jaya', 'dr.Jayanti', 'Jalan Teratai Putih Raya blok 28 kav 9 L RT.6/RW.13', 3, 26, '08161953452', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(112, 'Klinik Pratama Lulu Medika', 'drg.Atikka Muhammad .B.', 'Jl.Raya Pondok Kelapa Blok C4 No.38, RT 04/ RW 11', 3, 26, '087881508090', 24, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(113, 'Klinik Pratama Putewa', 'dr.Dian Triana Mayasari', 'Jl.Nusa Indah Raya Blok 40 No.17 RT 012/ RW 003', 3, 26, '0218622207', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(114, 'Klinik Pratama Yakrija', 'Suci Widiastuti', 'Jl. Teratai Putih Raya Blok 28 No.9F', 3, 26, '081212156555', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(115, 'Klinik Pratama Agung Medika', 'dr. Muhammad Agung HBS', 'Jl.Pondok Kelapa Raya Blok L10 No.2', 3, 24, '085102213866', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(116, 'Klinik Pratama Medikasih', 'dr.Armida Simanungkalit', 'Jl.Taman Malaka Selatan Blok K16 No.12-14', 3, 24, '8643186', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(117, 'Klinik Pratama Maryani-Tamsil', 'dr. Maryani Masud', 'Jln. Pondok Kelapa Raya Blok C7/18', 3, 24, '081311391953', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(118, 'Klinik Pratama Audrey Beauty Center', 'dr.Ineke Sunarjo', 'Jl.Kalimalang Raya A2/6 RT 001/ RW 004', 3, 24, '8648120', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(119, 'Klinik Pratama RALINE MEDICA CLINIC ', 'dr.RAIHANA SAKTIRYANI ', 'Jln raya pondok kelapa, Blok G1 no 7B  RT.1/RW.11', 3, 24, '085959737418', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(120, 'Klinik Pratama BEAU CLINIC', 'dr.Siti Latifah Nur Rahima', 'Jl. Pondok kelapa Raya Blok A7 No13 B-C, RT.1/RW.4', 3, 24, '02186907295', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(121, 'Klinik Pratama Dzakira Haiyfa', 'dr.Fauzan Rahman', 'Jl. H. Naman No.67A, RT.17/RW.2', 3, 24, '02129622788', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(122, 'Klinik Pratama FDC Dental Clinic', 'drg.Afifah', ' Jl. Inspeksi Kalimalang No.9C, RT.2/RW.11', 3, 24, '081112205808', 24, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(123, 'Klinik AH', 'dr.Rizqiana Alfi Huda', 'Jl.Pondok Kelapa, RT 006/ RW 011', 3, 24, '0218645080', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(124, 'Klinik Pratama Bunga Rampai', 'Dr. Endang MSK Barus', 'Jl. Bunga Rampai Raya no. 38 RT 07/RW 012', 3, 26, '86607297', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(125, 'Klinik Pratama Ibin Sina', 'dr.Gilang Swarnita', 'Jl.Pendidikan Raya No.33 RT 05/ RW 01', 3, 23, '08816875627', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(126, 'Klinik Pratama Kecantikan Estetika Jasper', 'dr.Dian Rizki Rahayu', 'Jl. Raden Inten II No.4, RT.8/RW.15', 3, 23, '085785639285', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(127, 'Klinik Pratama Assistama', 'dr. Retno Asti Werdhani', 'Jl. Radin Inten II NO.80 Ruko Exclusive Radin Inten', 3, 23, '08129603432', 24, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(128, 'Klinik Pratama Medika Prakarsa', 'dr.Eka Surya Septiawan', 'Jalan Radin Inten II No 31 Duren Sawit, RT 03/RW 07', 3, 23, '86908103', 226, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(129, 'Klinik Pratama DR. CHAIRIL TANJUNG', 'dr.Chairil Tanjung Sp.OG', 'Jl. Teratai Putih Raya Blok 18 No.6A-B, RT.12/RW.4', 3, 27, '34652238', 27, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(130, 'Klinik Pratama Fakultas Farmasi dan Sains UHAMKA', 'dr.Anjasari', 'Jl. Delima II Gg. 4, RT.9/RW.3, Malaka Sari', 3, 27, '0895622610219', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(131, 'Klinik Pratama Griya Denta', 'drg.Elita Febrianty', 'Jl. Buaran Raya No.9, RT.6/RW.13', 3, 28, '02129193610', 24, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(132, 'Klinik Pratama MEKAR SARI', 'dr. Wahyuningtyastuti Widia Purnama Dewi', 'Jl.Cililitan besar No.13 Rt.12/01.Makasar, Kota Administrasi Jakarta Timur ', 4, 37, '081311022224', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(133, 'KLINIK PRATAMA BAHAGIA', 'dr.Andriani Damanik', 'JL.JENGKI RT 04/09  NO 6 C D KEL.KEBON PALA KEC.MAKASAR KOTA ADMINISTRASI JAKARTA TIMUR', 4, 37, '081380188853', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(134, 'Klinik Pratama Fajar Medika', '', 'Jl. Jengki Gg. Mushola No. 15 Kel.Kebon Pala Kec.Makasar Kota Administrasi Jakarta Timur', 4, 40, '081288380551', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(135, 'KLINIK PRATAMA SANTOSA', 'dr. Berlian Maurise Hendrawati', 'JL.JENGKI RT 02/12 NO 11 D KEL.KEBON PALA KEC.MAKASAR KOTA ADMINISTRASI JAKARTA TIMUR', 4, 40, '8002689', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(136, 'Klinik Pratama Kelurga Kita Angkasa Pura', 'dr.Gerrywilianto', 'Jl.Komodor Halim Perdana Kusuma Makasar, Kota Administrasi Jakarta Timur ', 4, 38, '02180899320', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(137, 'Klinik Pratama Kimia Farma', 'drg.Amatul Firdaus Ramadhan', 'Jl.Komodor Halim Perdana Kusuma  Rt 03/07 Makasar, Kota Administrasi Jakarta Timur ', 4, 38, '8092199', 24, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(138, 'Klinik Pratama Kharisma', 'dr,Bambang E.D', 'Jl.Asri No.35 Komodor  Halim   RT 01/07 Kel.Halim Kec Makasar Kota Administrasi Jakarta Timur', 4, 38, '081310005158', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(139, 'KLINIK PRATAMA KARYA BAKTI P.RANTI', 'dr.Septelina Lasniati', 'Jln.Raya Pondok Gede Rt 005/02 No. 23  , Kel.Pinang Ranti ', 4, 36, '0852888854355', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(140, 'KLINIK PRATAMA SAHARA', 'dr.Ida Fianty', 'Jln.Raya Pondok Gede Rt 005/02 No. 88A , Kel.Pinang Ranti ', 4, 36, '08128181659', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(141, 'Klinik Pratama  Kelurga Kita (Angkasa Pura 2)', 'dr.Gery Wilianto', 'Jl.Komodor Halim Perdana Kusuma', 4, 38, '', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(142, 'KLINIK PRATAMA DIRGANTARA HALIM', 'drg. Cecilia Glyceria Yogrha Messara', 'JL.SETIOBOMO NO.01 RT/RW 01/02 KEL.HALIM PERDANA KUSUMA KEC,MAKASAR KOTA ADMINISTASI JAKARTA TIMUR', 4, 38, '80879256', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(143, 'KLINIK PRATAMA DENMA KODIKLAT  AU', 'drg.Maria Gloria', 'JL.GOLF RAYA NO.1 KEL.HALIM PERDANA KUSUMA KEC,MAKASAR KOTA ADMINISTRASI JAKARTA TIMUR', 4, 38, '80870287', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(144, 'KLINIK PRATAMA  SATKES KOHANUDNAS', 'dr.Lea Ratna Lestari', 'JL.MUSTANG NO. 5 KEL.HALIM PERDANA KUSUMA KEC,MAKASAR KOTA ADMINISTRASI JAKARTA TIMUR', 4, 38, '8009343', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(145, 'KLINIK PRATAMA SATKES DENMA KOOPSAU 1', 'dr.Ratih Kartika Sari', 'JL.KOPATDARA NO.1  KEL.HALIM PERDANA KUSUMA KEC,MAKASAR KOTA ADMINISTRASI JAKARTA TIMUR', 4, 38, '8001578', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(146, 'KLINIK PRATAMA RAJAWALI', 'dr.Duma Wenty Irene', 'JL.RAJAWALI RAYA KEL.HALIM PERDANA KUSUMA KEC,MAKASAR KOTA ADMINISTRASI JAKARTA TIMUR', 4, 38, '80882817', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(147, 'KLINIK PRATAMA Kantor Kesehatan Pelabuhan Kelas 1 Sukarno Hatta', 'dr.Tunggul Birowo,M.H', 'BANDARA HALIM JL.Halim Perdana Kusuma  KEL.HALIM PERDANA KUSUMA KEC,MAKASAR KOTA ADMINISTRASI JAKARTA TIMUR', 4, 38, '081388287491', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(148, 'KLINIK PRATAMA Kantor Kesehatan Pelabuhan Kelas 1 Sukarno Hatta', 'dr. Hawani', 'Jl.Jengki Raya No 8 RT 08 Rw 02 Kel Kebon Pala Kec.Makasar Jakarta Timur', 4, 40, '081372060696', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(149, 'Kias Kencana BKKBN', 'dr.Eka Susanti', 'Kantor BKKBN Jl. Permata No. 1 Kel.Kebon Pala Kec.Makasar Kota Administrasi Jakarta Timur', 4, 40, '08128471938', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(150, 'Klinik Daarussyifa', 'dr Rahwana', 'Jl. Monumen Pancasilan sakti rt 014/09 Lb. Buaya', 10, 51, '081288880667', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(151, 'klinik Nayaka ', 'dr Miftahul Jannah', 'Jl. Pondok Gede Raya Ruko Mulek no 2B', 10, 51, '081290958389', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(152, 'Klinik Pratama Assomadiyah medicare Center', 'dr Srie Nurhayati', 'Jl.Albaidho raya no 2a  L.Buaya', 10, 51, '081314120022', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(153, 'Klinik Pratama Ardita', 'dr. Ami Mulyanti', 'JL.Raya Cilangkap rt 4/5', 10, 56, '08128939646', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(154, 'Klinik Nur Alif', 'dr Susilo Nugroho', 'Jl Raya Cilangkap rt 001 rw 05 Kel. Cilangkap  Cipayung Jak- Tim', 10, 56, '8452787', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(155, 'Klinik Melati Medika', 'dr Putri Prihartati', 'Jl asyafiiyah rt 05 rw 03 No 174 Kel. Cilangkap Jak -Tim', 10, 56, '082112382340', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(156, 'KliniK Pratama Permata Bunda', 'dr Lintong Napitupulu', 'Jln. Budi Murni ', 10, 53, '085101340858', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(157, 'Klinik Pratama Ananda', 'dr Yulius Kandoko ', 'Jln Mini III rt 12/03 Bambu Apus', 10, 58, '0816822660', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(158, 'Klinik Printis sehat', 'dr H achmad sofyan', 'Jl. Malaka no 100 Munjul', 10, 53, '70952511', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(159, 'Klinik sagas', 'dr Estiningtias Prihatiningsih', 'Jl Raya Cilangkap rt 03/01', 10, 53, '02184303761', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(160, 'Klinik Pratama TMII', 'dr Radwia Siyamiati', 'Jl Raya Taman Mini, Area Wisata TMII Kel.Ceger', 10, 52, '087770213505', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(161, 'Klinik koronka', 'Florentina Yuni Hartati', 'Jln raya Munjul no 55 ', 10, 54, '08122014848', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(162, 'Klinik Pratama Patria Medika', 'dr Berliana', 'Jln Raya Bina Marga rt 002', 10, 52, '02129824061', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(163, 'Klinik Pratama Satkes Denma Mabesal', 'dr Monita Arya Marina', 'Jln Raya hankam Kelurahan Cilangkap', 10, 56, '', 23, 1, '', '', '', 'Februari 2021', 1, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(164, 'Klinik Pratama Satkes Denma Mabesau', 'dr Yazid ', 'Jln Raya hankam Mabes TNI AU rt 00/00 Kelurahan Cilangkap', 10, 56, '081289666911', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(165, 'Klinik Pratama Satkes Denma Mabes TNI', 'dr Fitriana Hapsari', 'Jln Raya hankam Kelurahan Cilangkap', 10, 56, '081218242645', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(166, 'Klinik BPU SS MEDKA OHM Kramat Jati', '', 'Jl. Dewi Sartika no. 292 C RT 04/05 Kel. Cawang Tel. 80870172', 2, 34, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(167, 'Klinik Hygea Kramat Jati', 'dr. Feriyah', 'Jl. Dewi sartika NO.261 Cawang 3 Kel Cawang', 2, 34, '82133668492', 29, 1, '', '', '', 'Februari 2021', 1, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(168, 'Klinik Pratama Anda Sehat Kramat Jati', 'Jl. SMEA VI No.24 Kel. Cawang Kec. Kramat Jati', '', 2, 34, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(169, 'Klinik Pratama Binawan Kramat Jati', 'dr Hilwa Alwaini', 'Jl. Kalibata Raya No.25-30 Rt.12/05 Kel. Cawang Kec. Kramat Jati', 2, 34, '081280005154', 29, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(170, 'Klinik Pratama Merial Health Kramat Jati', 'Abd Halik Malik', 'Jln. Dewi sartika no. 312 A. RT 09/04 Kel. CAWANG', 2, 34, '-85341162998', 30, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(171, 'Klinik Pratama Medika 24 jam', 'dr Anita natiur Panggabean', 'Jl. Dewi Sartika No. 296 Rt.01/04, Cawang', 2, 34, '081369160469', 29, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(172, 'Klinik Pratama Kecantikan FBC Kramat Jati', '', 'Jl. Raya Bogor No.04, RT.2/RW.13, Cililitan  Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13640', 2, 34, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(173, 'Klinik Pratama Sejahtera Mitra Afia Kramat Jati', 'dr Alfy Abaria', 'Jl. Jambul No.17-18 Rt. 05/13 Dewi Sartika Kel. Cililitan Kec. Kramat Jati', 2, 34, '081280530130', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(174, 'Klinik Pratama Kasih Kramat Jati', 'dr Suwardika Putra', 'Jl. Cililitan Besar No.83 Rt.03/09 Kel. Cililitan Kec. Kramat Jati', 2, 34, '087779531702', 30, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(175, 'ESTETIKA FBC', '', 'Kramat Jati', 2, 34, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(176, 'Klinik AS-SYIFA', 'dr. Lina Hendrawati', 'Jl Condet Raya No 5 RT 01/16 Kel Cililitan Kramat Jati', 2, 34, '085774766574', 29, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(177, 'Klinik Pratama Sartika 24 jam', 'dr Ira Angraini', 'Jln Dewi Sartika no 22  RT 05/13 Kel Cililitan Jakarta Timur', 2, 34, '081267223030', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(178, 'Klinik Pratama Esther Kramat Jati', 'dr. Dyah Gayatri Kusumasari', 'Jln Kelapa Gading V No 1 RT 001/003 Kel Kramat Jati', 2, 29, '081290003565', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(179, 'Klinik Pratama Dianindra Kramat Jati', '', 'Jl. Rs. Polri, RT.12/RW.4, Kramat Jati, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13510', 2, 29, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(180, 'Klinik Condet 24 Jam Kramat Jati', 'dr. Lestari Soebowo', 'Jl Condet Raya no 3 RT 003/04  Kel. Batu Ampar Kec Kramat Jati', 2, 30, '081292782106', 29, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(181, 'Klinik Pratama Al Fauzan Kramat Jati', 'dr Farida Lusiana', 'Jalan Raya Condet No. 02 RT 005/003 Kel. Batu Ampar', 2, 30, '081311518394', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(182, 'Klinik Pratama Kimia Farma Condet ', 'dr Devi Anneta', 'Jalan Raya Condet No. 30 B Kel. Batu Ampar', 2, 30, '8567806033', 29, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(183, 'Klinik Pratama Medika Kramat Jati', 'dr. Arief Wahyu Mulyana', 'Jl. Batu Ampar III No.55 RT 11/02 Kel. Batu Ampar Kec. Kramat Jati', 2, 30, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(184, 'Klinik Pratama Nura Dental Care & Aesthetics Kramat Jati', 'drg Nila Kresna Noviyanti', 'Jln. Raya Tengah No. 31 FRT 07/03 Kel. Batu Ampar', 2, 30, '08174994122', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(185, 'Klinik NKDC DENTAL CARE', 'drg. Nila Kresna Noviyanti', 'Jln. Batu Ampar III no 3A RT 12/02 Kel. Batu Ampar Kec. Kramat Jati', 2, 30, '081572459999', 24, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(186, 'Klinik Pratama CANTIKEAYU AESTHETIC CLINIC', 'dr. Witra Ayu', 'Jln Jl. Raya Tengah no 31 F lantai 2 RT 07/03 Kel Batu Ampar Kec Kramat Jati', 2, 30, '081287640076', 25, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(187, 'Klinik Jasmine Estetika Kramat Jati', '', 'Jl. Munggang no.14 Kel Balekambang', 2, 31, '', 25, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(188, 'Klinik Pratama Global Doctor Kramat Jati', 'dr. Agung Triyatno', 'Jl. Kayu Manis No. 21 A Kel. Balekambang', 2, 31, '081311734277', 29, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(189, 'Klinik Pratama Sejahtera Medica Kramat Jati', '', 'Jalan Condet Raya no. 9 E RT 005/003 KEL. Balekambang Kec. Kramat Jati', 2, 31, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(190, 'AL KHAIRAT', '', 'Kramat Jati', 2, 31, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(191, 'ESTETIKAKU', '', 'Jl. Raya Condet No. 9B, Balekambang', 2, 31, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(192, 'Klinik Pratama Bina Sehat Insani Kramat Jati', 'dr. Endar Maskendar', 'Jl Raya Tengah No.10 Rt.06/09 Kel Tengah Kec Kramat Jati', 2, 32, '081380890864', 29, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(193, 'MGM 24', '', 'Jln Raya Tengah/Inpres no 10 RT 04/01 Kel. Tengah', 2, 32, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(194, 'Klinik Marga Bhakti Husada Kramat Jati', 'dr Srikoning Widyaningsih', 'Plaza Tol Taman Mini Indonesia Indah Rt.08/02 Kel. Dukuh Kec Kramat Jati', 2, 33, '87884340515', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(195, 'Klinik Pratama Dokter Abdul Radjak Pondok Gede Kramat Jati', 'dr Tety Sri S', 'Jl. Raya Pondok Gede No. 23-25 Kel. Dukuh Kec. Kr. Jati', 2, 33, '081326610706', 24, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(196, 'Klinik Pratama Restu Ibu Kramat Jati', 'dr. Mahesa Paranadipa Maikel', 'Jl. Penggilingan Baru No. 104 RT 08/04 Kel. Dukuh Kec Kramat Jati', 2, 33, '085240713171', 31, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(197, 'Klinik pratama sinergi lisna medika 01', '', '', 2, 33, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(198, 'Klinik Pratama BNN Kramat Jati', 'dr Sitty Jewuskadara', 'Jalan MT Haryono No. 11 Kel. Cawang', 2, 34, '08128678344', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(199, 'Klinik Pratama Polma Kodam Jaya Kramat Jati', 'dr Putri Nindya Citra', 'Jl. Mayjen Sutoyo no 5 RT 007/007 Kel Cawang', 2, 34, '', 34, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(200, 'Klinik Pratama Badan Kepegawaian Negara Kramat Jati', 'dr Tety', 'Jl. Let.Jend Sutoyo no 12 Rt. 06/14 Kel. Cililitan Kec. Kramat Jati', 2, 35, '', 29, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(201, 'Klinik Pratama MAPUSKESAD', 'dr Afriani Likun', 'Jl. Mayjen Sutoyo RT 03 /11 Kel. Cililitan Kec. Kramat Jati', 2, 35, '081349396122', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(202, 'Klinik Pratama Satpelkes Dinas Lingkungan Hidup Kramat Jati', 'drg Adria MARS', 'Jl.Mandala V No.67 Rt 01/02 Kel. Cililitan', 2, 35, '087878628864', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(203, 'Klinik BPHN', '', 'Jl Mayjen Sutoyo No 10 Kel Cililitan Kec. Kramat Jati', 2, 35, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(204, 'Klinik Pratama Pusdikkes TNI AD', 'drg. Widda Mayuyani, M.M', 'Jln Raya Bogor Kel Kramat Jati', 2, 29, '081367150030', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(205, 'Tjakra 24 jam ', 'dr. Darwin Dahsyat', 'Jl. Raya Bogor KM. 24 No. 35 Rt/Rw. 001/01 Kel. Susukan', 5, 49, '081314941245', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(206, 'Suci Husada ', 'Dr.Edi Satriawan, MARS', 'Jl. Suci No. 21 RT. 008 RW. 006 Kel. Susukan', 5, 49, '089602702728', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(207, 'KLINIK JESINDA', 'dr. Evi Maryam, MARS', 'Jl. Kelapa Dua Wetan Komp. PTB II C/3, Kel. Kelapa Dua Wetan, Kec. Ciracas', 5, 47, '081345297144', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(208, 'SETIA RUMANDA', 'dr. Henny Estikasari', 'Jl. Lapangan Tembak No. 62 RT.002/RW.07, Kel. Kelapa Dua Wetan, Kec. Ciracas', 5, 47, '0811855633', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(209, 'Namiera', 'dr. RAHMI MUTIADEWI DALIMUNTHE', 'Jl. Kelapa Dua Wetan No. 10 RT.002/RW.05 Kel. Kelapa Dua Wetan, Kec. Ciracas', 5, 47, '081908092574', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(210, 'Klinik Pratama Mitra Diani', 'dr. Dian Permana', 'Jl. Raya Pkp No.16, RT.9/RW.12, Kel. Kelapa Dua Wetan, Kec. Ciracas', 5, 47, '081381115151', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(211, 'Khitan Bogem', 'dr. Dexi Andriyanto', 'Jl. Manunggal Raya No. 1 A RT.013/RW.08, Kel. Kelapa Dua wetan, Kec. Ciracas', 5, 47, '081213900678', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(212, 'Anggrek Medika 24 Jam', 'dr winda Alicia irene ', 'Jl.  PKP Raya No. 32 RT.002/RW.08, Kel. Kelapa Dua Wetan Kec. Ciracas', 5, 47, '081386839253', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(213, 'Klinik Pratama Surya Medika ', 'dr. ENDIVIA RIZKI MAGHFIROH', 'JL. KELAPA DUA WETAN RT.001 RW.008 KEL. KELAPA DUA WETAN  KEC. CIRACAS', 5, 47, '081232012246', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(214, 'DHARMA MULIA - 2 ', 'dr. Cecelia Naritha', 'Jl. Raya Bogor Km. 22 Rt/Rw. 08/02, Kel. Rambutan', 5, 50, '08121069474', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(215, 'KUSUMA MEDIKA', 'dr. Welinton M. Simanjuntak', 'Jl. Hadidji No. 28 Rt/Rw. 12/02, Rambutan', 5, 50, '08129988837', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(216, 'MITRA MEDIKA', 'dr. Caixar Agus Sudharmono', 'Jln. Raya Bogor Km. 22 Rt/Rw 010,01, Kel Rambutan, Kec Ciracas Jaktim', 5, 50, '082373569624', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(217, 'Annisa Ciracas', 'dr. Pradnya Paramita', 'Jl. Ciracas No. 18 Rt/Rw. 004/02 Kel. Ciracas', 5, 48, '081219240338', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(218, 'ARDITA CIRACAS', 'dr. rita Erfita', 'Jl. Raya Ciracas No. 3A. Rt. 01/02', 5, 48, '085793393990', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(219, 'SEJAHTERA CIRACAS', 'dr. Yuni Astutiningsih', 'Jl. Raya Ciracas No. 38 Rt/Rw. 16/02 Kel. Ciracas', 5, 48, '08161801690', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(220, 'Klinik PT. Frisian Flag Indonesia Plant Ciracas', 'dr. Djoko Kurdo Hutomo Siswoyo Putra', 'Jl. Raya Bogor KM. 26 RT. 011 RW. 004 Kel. Ciracas Kec. Ciracas', 5, 48, '08119000418', 22, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(221, 'BHAKTI UTAMA MEDIKA', 'dr amelia nurfajrina', 'jl raya ciracas no 1 004/003 kel. Ciracas ', 5, 48, '081313606061', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(222, 'klinik pratama komplek porli ciracas', 'dr. Dewi Malahayati', 'jl. Komplek porli rt 008 rw 004 kel. Ciracas, kecamatan ciracas ', 5, 48, '0217218240', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(223, 'klinik pratama Elidas ', 'DR YOSE RIZAL', 'jl raya ciracas no 29 11/03 kel. Ciracas ', 5, 48, '', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(224, 'Permata Medika', 'dr. Sahruna', 'Jl. Mustika Ratu No. 3 Kel. Ciracas Kec. Ciracas', 5, 48, '02129842766', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(225, 'Ar-Rahim', 'dr. H. Asmadi Chaidin, MARS', 'Jl. Lapangan Tembak Rt/Rw. 02/02 Kel. Cibubur Kec. Ciracas', 5, 46, '08121035025', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(226, 'Klinik Pratama Taruna Jaya', 'dr. Melvina Tungga Dewi', 'jl. Taruna jaya No. 7 RT 04/ RW 13, Cibubur, Ciracas ', 5, 46, '085280929282', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(227, 'Klinik Pratama Le Beaute', 'dr. Irza Monalisa AZ', 'Cibubur Junction Lt. 1 Blok I.5-7, Jl. Jambore Raya No. 1 RT. 004 RW. 004 Kel. Cibubur Kec. Ciracas', 5, 46, '02187755103', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(228, 'kimia farma ', 'dr laksita ', 'l.Lawu B1 No. 1 Arundina Lap, Tembak RT.1/RW.11, Cibubur, ', 5, 46, '02129626791', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(229, 'ZAP', 'dr. Arum Puspita Sari', 'Cibubur Junction Lt. 1 Blok I 38, Jl. Jambore Raya No. 1Kel. Cibubur Kec. Ciracas', 5, 46, '081219597933', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(230, 'ORISKIN ', 'dr. Dian Anugrah', 'MALL CIBUBUR JUNTION LT LG, UNIT 5 . JLN JAMBORE NO 01 , KELURAHAN CIBUBUR', 5, 46, '02187756434', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(231, 'klinik pratama komplek porli ciracas', 'dr. Dewi Malahayati', 'jl. Komplek porli rt 008 rw 004 kel. Ciracas, kecamatan ciracas ', 5, 48, '0217218240', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(232, 'Alfatonah', 'dr Maderlis', 'Jl Cipinang Timur Raya No 58 Rt 8/3', 1, 11, '082299066902', 32, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03');
INSERT INTO `kliniks` (`id`, `nama_klinik`, `penanggung_jawab`, `alamat`, `kecamatan_id`, `kelurahan_id`, `no_telepon`, `jenislayanan_id`, `bpjs`, `latitude`, `longitude`, `images`, `tahun_pendataan`, `status_akreditasi`, `created_at`, `updated_at`) VALUES
(233, 'Klinik Pratama Kasih Medika Pulogadung', 'dr. vonny Maryadi', 'Jl Taruna No 42 Rt 14/03', 1, 13, '087889564545', 30, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(234, 'klinik kimia Farma 04 RAWAMANGUN', 'dr.Handayani', 'Jl Perserikatan No 7-8', 1, 9, '0214718059', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(235, 'Medina Husada', 'dr. Edi Sutikno', 'Jl Raya Bekasi Km 18 No 3 rt 01/06', 1, 13, '085959996749', 30, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(236, 'Griya Kesehatan Indonesia', 'dr. M Tedjasaputra', 'Jl Gabus Raya No 11 Rt 04/11', 1, 8, '0821254429534', 30, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(237, 'Karya Bhakti Cipinang', 'dr. Robertus aryo Seno H', 'Jl Raya Bekasi Timur No 22', 1, 12, '087808010093', 30, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(238, 'Cahaya Sehat', 'dr. Nana Lilia H', 'Jl Taruna 14/03', 1, 13, '08193246676', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(239, 'Kasih Bunda', 'dr. Kristina Sutedja', 'Jl. Bandeng raya no 5 rt 12/05', 1, 7, '087880878908', 30, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(240, 'Klinik Pratama Click House Rawamangun Pulogadung', 'dr. Gun Gun Gunarto', 'Jl. Cipinang Baru Raya No.25 RT 005 / RW 002', 1, 11, '08179912999', 30, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(241, 'Klinik Pratama dr ERNA Pulogadung', 'dr. Erna Purnamasari', 'Jl. Pondasi No. 12 RT.002 RW. 017 Kelurahan Kayu Putih Kecamatan Pulogadung', 1, 7, '085775177968', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(242, 'Klinik Pratama Nayaka Era Husada 09 Pulogadung', 'dr. Rohana', 'Jl. Raya Bekasi No.1, RT.5/RW.1, Jatinegara Kaum, Kec. Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13240', 1, 12, '021-22470199', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(243, 'Klinik Pratama Pertamedika Pulogadung', 'drg. Renvi Hardyanto', 'Jalan Mundu Raya No. 1Rt/Rw 12/04 kel. jati , kec. Pulogadung ', 1, 8, '0811981509', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(244, 'Klinik Pratama Pondasi Medika Pulogadung', 'dr. Indra Anis', 'Jl. Pondasi No.27 E Rt 06 Rw 02 Kel. Kayu Putih Kec. Pulogadung', 1, 7, '08111913019', 33, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(245, 'Klinik Pratama Ratnasari Pulogadung', 'dr.Rama Devarie', 'Jl. Bawal Raya No.10 RT.005 RW.008 Kel.Rawamangun Kec.Pulogadung, Jakarta Timur', 1, 9, '085881623394', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(246, 'Klinik Pratama Yunda', 'dr. Emilda Yunda', 'Jl. Sinar Jaya no. 17, RT 003 RW 010', 1, 10, '0214721516', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(247, 'Klinik Pratama Melati', 'dr. Rosmini Nurdin, MARS', 'Jl. Pisangan Lama III No.7 RT 004 RW 008', 1, 10, '0214895351', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(248, 'Kama Clinic', 'dr.Lia Anggraini, Sp.Og', ' Jl. Pemuda No.Kav. 17, RT.2/RW.7,', 1, 9, '02122478101', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(249, 'UP. PERPARKIRAN DISHUB PROV. DKI JAKARTA', 'dr.Tuti Haryanti', 'Jl. Perintis Kemerdekaan I No. 1 Kel. Kayu Putih Kec. Pulo Gadung', 1, 9, '0857714106271', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:00:03', '2022-02-16 06:00:03'),
(250, 'Klinik Yadika', 'Dr. Novita', 'Jl. Lap. Tembak No. 9 ,Pekayon', 6, 41, '081219674297', 19, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(251, 'Klinik Citra Medika', 'dr. Dani Pramudya', 'Jl. Raya Bogor Km. 28 Rt..Rw. 03/02 Kel. Pekayon', 6, 41, '082138605155', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(252, 'Klinik PT Panasonic', 'dr.Soetjiningsih', 'Jl. Raya Bogor Km. 29, Pekayon', 6, 41, '0811865745', 19, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(253, 'Klinik Intertek', 'dr.Hj. Yudhawati', 'Jl. Raya Bogor KM. 28 Rt. 04/07 , Kel. Pekayon', 6, 41, '08561801177', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(254, 'Klinik Pratama Rafa', 'dr. R.Herman K', 'Jl. Gongseng Raya No. 48 Rt/Rw. 04/01 Kel. Baru Kec. Pasar Rebo', 6, 44, '08129099040', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(255, 'Klinik Medika Ananda', 'dr. Rikha Sri M', 'Jalan hasan no 9 RT 02/09 kel baru', 6, 44, '082272896908', 19, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(256, 'Klinik Anugerah', 'dr.Nella Christia E', 'Jl. Gongseng Raya No. 2 , RT 06/09. Kel Baru', 6, 44, '082113071352', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(257, 'Klinik Fista Nanda', '0', 'jln masjid aljadid I, no 33 rt04/09', 6, 44, '08170944865', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(258, 'Klinik Budhi Pratama Kalisari ', 'dr. Nugroho', 'Jl. Kalisari II No. 120 Rt. 06/03 Kalisari', 6, 45, '089523919301', 19, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(259, 'Klinik Pratama Salamah Kalisari', 'dr. Elmizah ', 'Jl. Lapan Kalisari No. 176 Rt/Rw. 13/02 Kel. Kalisari Kec. Pasar Rebo ', 6, 45, '081284851772', 19, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(260, 'Klinik Yadika', 'dr. Rahmi Pudiastuti ', 'Jl. Baret Biru III No. 6 ,RT 6 RW 3 ', 6, 45, '087788674445', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(261, 'Klinik Budi Pratama Gedong', 'dr.Rifki Effendi Suyono', 'Jl. Raya Tengah No. 26 Rt/Rw. 06/01 Kel. Gedong', 6, 42, '085642207402', 19, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(262, 'PT. Frisian Flag Indonesia', 'dr. Wijanto Widjaja', 'Jl. Raya Bogor KM. 5 Rt/Rw 005/02 Kel. Gedong ', 6, 42, '08161972700', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(263, 'Klinik Sandoz', 'dr. M.Arief Novianto, MKK,Sp Ok', 'Gd. PT SANDOZ INDONESIA, Jl. TB Simatupang Rt. 007 Rw. 001', 6, 42, '081316807203', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(264, 'Estetiderma', 'dr M Karyadi Hadiprodjo,MM', 'Ruko Grand Simatupang 1E, Jl TB. Simatupang Raya, RT 008 RW 02', 6, 42, '08161144867', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(265, 'Estetiderma', 'dr M Karyadi Hadiprodjo,MM', 'Jl Kesehatan No 16 A RT 04/11 ', 6, 42, '08161144867', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(266, 'Taqia Medika', 'dr. Emilia Bulan Baganti', 'Jl Gongseng Raya no 1 RT/RW 01/09 Kel Cijantung', 6, 43, '087883932599', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(267, 'Polma Keskopasus', 'dr. Alfian', 'Jalan jati no 1, Kelurahan Gedong', 6, 42, '085640452012', 19, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(268, 'Klinik Pratama Polkes Induk Cijantung', 'dr. Nurini W', 'Jl. Sederhana Raya RT01/RW06 Gedong', 6, 42, '081210238707', 19, 1, '', '', '', 'Februari 2021', 1, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(269, 'Klinik Pratama Rindam Jaya', 'dr. Nurul', 'Jl. Raya Condet No.55 Kel. Gedong', 6, 42, '082383010185', 19, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(270, 'Klinik Miracle', 'dr. Subianto', 'JL. Matraman Raya NO. 14-16', 7, 6, '081398281098', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(271, 'Klinik YKKP Bank Dki', 'Dr.dr.TB Djumhana Atmakusuma,SpPD.K-HOM', 'JL. Matraman Raya No. 72 Jak Tim', 7, 6, '087781238365', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(272, 'Klinik BPU Bio Medis', 'dr. Juli Widiharto', 'JL. Kayu ManisTimur No 52', 7, 4, '081317282120', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(273, 'Klinik Zafira Medika', 'dr. Silvani', 'JL. Kayu Manis No.37 RT 014/02', 7, 4, '085224774459', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(274, 'Klinik Sartika ', 'dr Anis Sundari', 'JL. Kayu Manis VIII/78', 7, 4, '0218504931', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(275, 'Klinik Pratama Keluarga Yayasan Kusuma Buana', 'Dr.dr. Joedo Prihartono MPH', 'JL. Pisangan Baru III No 210 RT010/07', 7, 1, '08564941670', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(276, 'Klinik Yabi Medika', 'dr. Clara Magdalena', 'JL. Pisangan Baru No. 16 A RT 04 RW 11 Pisangan Baru', 7, 1, '087773074982', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(277, 'Klinik PKBI DKI Jakarta', 'dr. Teza Farida/ Bonita', 'Jl. Pisangan Baru Timur', 7, 1, '085649416700', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(278, 'Klinik Karya Bhakti Dhipa', 'dr. Rahmat Edi Wahyudi/ Bu. Khairunissa', 'JL. Pisangan Baru Tengah No. 38 1/12', 7, 1, '081293330061', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(279, 'Klinik Pratama Dr. Abdul Radjak', 'dr. Hj Hawani Halvina', 'JL. Tegalan no. 30 RT 001 RW 07 Kel. Palmeriam', 7, 5, '081210860229', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(280, 'Klinik Prima Medika', 'dr. Santi Sasanti', 'JL. Kelapa Sawit Raya No 28 RT001/010', 7, 2, '081210860229', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(281, 'Klinik Bhakti Sairi', 'dr. Syamsul Andi Hakim', 'JL. Kebon Kelapa Tinggi No.1 009/008', 7, 2, '0818767702', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(282, 'Klinik Namirah', 'dr. Menik Yuliani', 'JL. Utan Kayu Raya No.28', 7, 3, '0818767702', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(283, 'Klinik Azka Medika', 'Dini Maharani Bachtiar', 'JL. Kayu Manis X No. 3C RT 002/09 Kayu Manis', 7, 4, '082213686708', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(284, 'Klinik Pratama BPKP DKI Jakarta', 'dr. Hana Amalia', 'JL. Parmuka No. 33 Kel. Utan Kayu Utara', 7, 3, '081315749737', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(285, 'Polkes Induk,00.09.04/JT', 'drg. Suciyanti Harahap', 'JL. Matraman Raya', 7, 6, '08116802004', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(286, 'Klinik Derma Express', 'dr. Deasy Natalia Bustam', 'JL. Utan Kayu Raya No. 79B RT 001/08 Utan Kayu Utara', 7, 3, '081311806326', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(287, 'Klinik Pratama BPKP DKI Jakarta', 'dr. Hana Amalia', 'JL. Pramuka No. 33 Kel. Utan Kayu Utara', 7, 3, '081315749737', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(288, 'Polkes Induk,00.09.04/JT', 'drg. Suciyanti Harahap', 'JL. Matraman Raya', 7, 6, '08116802004', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(289, 'Klinik Pratama Ummi Medika', 'Dr. Hendi Purwanto Bastaman', 'KRT. Radjiman Widyoningrat No 54 ', 9, 62, '46833267', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(290, 'Klinik Wisma Asri Medika', 'dr. Ali Nur Subkhan', 'Jl. KRT Radjiman Widyoningrat No 14', 9, 62, '08111977995', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(291, 'Klinik Nayaka Era Husada 03', 'dr. Zarliani', 'Jl. KRT Radjiman Widyoningrat No 26', 9, 62, '', 19, 1, '', '', '', 'Februari 2021', 1, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(292, 'Klinik Pratama Sukma Anggrek', 'Dr. Budiman Murdani L Tobing', 'JL Raya Bekasi Km 18 No 8 Rt 10/04 ', 9, 62, '46823314', 19, 1, '', '', '', 'Februari 2021', 1, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(293, 'Poliklinik PT DNP Indonesia', 'Dr. Okky Hutama', 'Jl Pulo Gadung No 16-18, Kav II H2 & II H3, Kawasan Industri Pulo Gadung', 9, 62, '4610313', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(294, 'Klinik Mustika Aesthetic ', 'Dr. Nasriyatul Hannak', 'Jl Raya Bekasi Km 18 no 21', 9, 62, '', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(295, 'Klinik Kimia Farma Kawasan Industri Pulogadung', 'dr Franki Yuniar Maradona/ dr Elsa Martina', 'Jl. Rawa Gelam V no 1 kawasan Industri Pulogadung', 9, 62, '02122466906', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(296, 'Klinik Pratama Sumber Waluyo', 'dr. Asri Badarudin', 'Jl. Radjiman RT.008/012', 9, 62, '082125594944', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(297, 'PT Herlina Indah', 'dr. Shabrina Ghassani Roza', 'Jalan Rawa Sumur II Blok DD No 16,  Kawasan Industri Pulogadung', 9, 62, '4609482', 22, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(298, 'PT Johnson Home Hygiene', 'dr Ajeng Amelianingtyas', 'JL. RAWA SUMUR NO.12 JAKARTA INDUSTRIAL ESTATE PULOGADUNG, JATINEGARA , CAKUNG, JAKARTA TIMUR , KODE POS : 13930', 9, 62, '08113303968', 22, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(299, 'PT Pamapersada Nusantara', 'dr Erie Wisudiyono', 'Jl.Rawa Gelam I No.9 Kel.Jatinegara Kec.Cakung Kawasan Industri Pulogadung Jakarta Timur 13930', 9, 62, '081952848448', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(300, 'In House Klinik Nayaka House Musik', 'dr Ananda Rosi ES', 'Jl. Pulo Buaran IV, KIP Pulo Gadung blok B 3 JJ 6, Kel.Jatinegara Kec. Cakung', 9, 62, '081218339697', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(301, 'Andalan Medika', 'dr. Henry Antares', 'Dr. KRT Radjiman Widyodiningrat  RT02/RW.13', 9, 62, '087774414630', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(302, 'Klinik Permata Bunda', 'dr.Arikafitri Andini', 'Jl Marzuki no 28 RT/RW 012/001 Penggilingan Cakung', 9, 63, '', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(303, 'Klinik Pratama PT Yamaha Indonesia Motor Manufacturing', 'dr. Ni Nyoman Yuliadhyatmi', 'Jl. Dr.KRT.Radjiman Widyodiningrat RW 06', 9, 61, '4612222', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(304, 'Klinik Permata Bunda', 'dr.Arikafitri Andini', 'Jl Marzuki no 28 RT/RW 012/001 Penggilingan Cakung', 9, 63, '', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(305, 'Klinik Pratama Renny Eva Sari', 'Dr. Fauzan Rahman', 'Jl. P Komarudin Rt 10/05 ', 9, 63, '22830433', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(306, 'Klinik Bina Husada Bakti', 'dr. Afridal Castro', 'Jl. Raya Penggilingan No.12 RT.07/08 ', 9, 63, '22464998', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(307, 'Klinik Pratama Klapa 2', 'dr. Pony Ndaruji', 'Jl. Raya Penggilingan No.03 RT.11/07 ', 9, 63, '4601927', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(308, 'Klinik Mitra', 'dr. Gunawan Tjhia', 'Jl. Raya Penggilingan RT.07/07 ', 9, 63, '4805201', 18, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(309, 'Klinik Nurmala Medica 01', 'dr. Lusia Dewi Khristina Wbs', 'Jl. Pedaengan No.60 RT.05/08 ', 9, 63, '4608479', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(310, 'Klinik Syabil Medika', 'dr. H Wais Al-Qurni', 'Jl Raya Tipar Cakung Rt 2/9', 9, 59, '', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(311, 'Klinik Pratama Poliklinik PT. United Tractors Tbk', 'dr. Febrina Listya Andanti', 'Jl. Raya Bekasi KM 22 RT.001/001 ', 9, 59, '0811859118', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(312, 'Klinik Pratama PT Bina Sinar Amity', 'dr. dian Puspita Sari', 'Jl Raya Cakung Cilincing Km 03 Jakarta Timur', 9, 59, '4603401', 19, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(313, 'Klinik SKF', 'dr . Afrina', 'Jln. Cakung Drain RT 01/ RW 09 Kel Cakung Barat', 9, 59, '081297578884', 22, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(314, 'Klinik Pelita Insani', 'dr. Nelsy Maitar', 'Jl. Inspeksi PAM No. 95 RT 04/04', 9, 59, '081385714706', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(315, 'Klinik Widya Husada', 'dr. Risyaf Saladin', 'Jl Raya Penggilingan no 3 Rt 1/1 ', 9, 59, '4618161', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(316, 'klinik Pratama Nurmala Medika 02', 'dr. Meigi Suwarto', 'jl bulak indah rt 1/12', 9, 60, '', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(317, 'klinik mitra cakung', 'dr. Rika Erna Maynovalina', 'Jl. Balai rakyat No 38 kp gempol rt 3/1 ', 9, 60, '081382220794', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(318, 'klinik mitra warga medika', 'dr. Irodatul Husnah', 'jl raya kayu tinggi rt 1/11 ', 9, 60, '', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(319, 'Natasha Skin Clinic Center', 'Dr. Ananda Sujati', 'AEON MALL Jakarta Garden City Cakung', 9, 60, '', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(320, 'ZAP AEON Jakarta Garden City', 'dr. Arindhita Permatasari', 'AEON Mall Jakarta Garden City Lantai 1-G2. Jl Boulevard Jakarta Garden City Cakung', 9, 60, '22463155', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(321, 'Klinik Pratama Attaufik Medical Center', 'dr. Muhammad Syah', 'Kp. Gempol RT/RW 003/001', 9, 60, '087877614524', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(322, 'Klinik Pratama Erha Apothecary', 'dr Jessica Ubercaprita', 'Aeon Mall JGC Ground Floor Unit G-09 Jl. Kayu Tinggi', 9, 60, '085890279797', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(323, 'Klinik Pratama Dental Theory', 'drg. Fadlia Murtafia', 'Ruko The Walk No. 26 JGC Jl. Raya Cakung Cilincing', 9, 60, '08953373306', 24, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(324, 'Klinik Pratama Wijaya Platinum', 'dr Findhy', 'Ruko Boulevard City TB/19 JGC', 9, 60, '081381333918', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(325, 'Klinik Pratama Le Merrian', 'dr Ivo', 'Ruko The Walk No. 57 JGC Cakung Timur', 9, 60, '', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(326, 'Klinik Pertamedika Medan', 'dr. Sri Sumanti Purwatiningsih', 'JL. Arun IX No 2 Rt 09/04 ', 9, 65, '4604944', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(327, 'Klinik Cava Medika', 'dr. Bonifasi Lestari', 'Jl Raya Bekasi Km 26 RT 01/01 No 02 ', 9, 65, '2146827547', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(328, 'Klinik Pratama Tiara Estetika', 'dr. Harjani Ledi Mulyana', 'Ruko Taman Modern Blok R1 No.12 RT.010/006', 9, 65, '4614091', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(329, 'Klinik Pratama Amelia Medika', 'dr. Vicky Ali Rausyan Fikri', 'Jl. Raya PuloGebang Rt 5/4', 9, 65, '081223468727', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(330, 'Klinik Millenium Sehat Abadi', 'Dr. Hadi Purnomo Halim, MM', 'Jl Raya pulo Gebang No 43  Rt 05/04', 9, 64, '4804304', 21, 1, '', '', '', 'Februari 2021', 1, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(331, 'Klinik Dewa Medika', 'Dr. Delvina Anastasya Pertiwi', 'Jln. Raya Pulogebang Rt03/Rw03 Kel Pulogebang ', 9, 64, '4802944', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(332, 'Klinik Pratama Cempaka 24 Jam', 'Dr. Gita Monika', 'Jl. Raya Pulo Gebang No 86 Rt 06/06 ', 9, 64, '4801980', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(333, 'Klinik Ar-Rahmah', 'dr. Ridwan Ahmad Albana', 'Jl. Komarudin Rt 02/05 No 10 ', 9, 64, '4803295', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(334, 'Klinik PKPP', 'drg Ayu Widowati', 'Kantor Walikota Jakarta Timur Blok A lantai 1, Jln Dr. Sumarno  Rt 11/ RW 08', 9, 64, '082298638394', 21, 1, '', '', '', 'Februari 2021', 1, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(335, 'Klinik Pratama Batari Husada', 'dr.Leni Astuti', 'Jl. Buaran Sakti No. 59 RT 3/RW 13 Klender', 3, 28, '08974437626', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(336, 'Klinik Pratama Dermaga Raya', 'dr.Dina Meilina', 'Jl.Dermaga Raya No.79 RT 003/ RW 008', 3, 28, '86602590', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(337, 'Klinik Pratama Al-Falah', 'dr.Mochamad Sani, MM', 'Jl.Pahlawan Revolusi No.2A RT 10/06', 3, 28, '02186613318', 23, 1, '', '', '', 'Februari 2021', 1, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(338, 'Klinik Pratama St.Carolus Samadi Klender', 'drg. Yuliana Helena, MARS', 'Jl. Bulak Raya No 58 RT. 03 RW 07', 3, 28, '8615514', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(339, 'Klinik Pratama Axel Dental', 'drg.Dianita Purbarani', 'Jl.Buaran Raya No.92 RT 01/ RW 14', 3, 28, '02122322829', 24, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(340, 'Klinik Pratama Win Medika', 'dr.Luthfi Mahmudah', 'Jl.Cipinang Muara III No.6 RT 007/ RW 004', 3, 28, '02186612248', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(341, 'Klinik Pratama Kimia Farma 147 Duren Sawit', 'dr. Siti Sarah', 'Jl. duren sawit raya blok B3 no 29', 3, 28, '28531226', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(342, 'Klinik Pratama ERTO BEAUTY CLINIC', 'dr.Amanda Rahmania', 'Jl. Buaran Raya No.95 & 98A, RT.1/RW.14', 3, 28, '0218607580', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(343, 'Klinik Pratama Griya Asih', 'dr.Natalia Permatasari', 'JL. Buaran III RT 03/ RW 13', 3, 28, '087875247378', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(344, 'Klinik Pratama DL Slim & Skin Care', 'dr.Irma Pratiwy', 'Jl. Dermaga Raya No.46, RT.7/RW.16', 3, 28, '02186612920', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(345, 'Klinik Pratama Zglow', 'dr.Milka Anisya Norasiya', 'Jl Raden Inten II No 58 ', 3, 28, '08119004996', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(346, 'Klinik Pratama Berkah Medika', 'dr.Deva Ani', 'Jl.SMP 135 RT 7/RW 7, Pondok Bambu', 3, 22, '081315008381', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(347, 'Klinik Pratama Medissa', 'dr.Mohadjri', 'Jl.Pahlawan Revolusi No.15B, Pondok Bambu', 3, 22, '02186609727', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(348, 'Klinik Pratama Rutan Pondok Bambu', 'dr. Titien Widya Astuti, MARS', 'Jl.Pahlawan Revolusi, Pondok Bambu', 3, 22, '8612004', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(349, 'Klinik Pratama Naavagreen Skin Care', 'dr. Dian Nurhani Safitri', 'Jl.Pahlawan Revolusi No.46, Pondok Bambu', 3, 22, '21285044', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(350, 'Klinik Pratama Kimia Farma Pondok Bambu', 'dr.Mega Permata', 'Jl.Pahlawan Revolusi No.53, Pondok Bambu', 3, 22, '02128535366', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(351, 'Klinik Pratama Fairy', 'dr. Bernard Christian Hasugian', 'Jl.Pahlawan Revolusi No.8B, Pondok Bambu', 3, 22, '02186611407', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(352, 'Klinik Pratama HappyTooth - Pondok Bambu', 'drg. Lenie Dahliana', 'Jl. Pahlawan Revolusi no 57 ', 3, 22, '085211300100', 24, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(353, 'Klinik Pratama HappyTooth - Kalimalang', 'drg. Ahmad Rusydi HMS', 'Jl. Kalimalang Raya E7 Kalimalang Mas Building no 7', 3, 22, '088908819191', 24, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(354, 'Klinik Pratama Dava', 'dr. Elni Lukman', 'Jl.Kejaksaan Raya No.21, Pondok Bambu', 3, 22, '0218616608', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(355, 'Klinik Pratama E3A', 'dr. Emilia Kasturi', 'Jl. Camar Blok CC No.15 Cipinang Indah II', 3, 22, '08179988322', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(356, 'Klinik Pratama Cipinang Indah', 'dr. Roswita Eva Magdalena', 'Cipinang Indah 2, Jl. Merak no 1, ', 3, 22, '0811900359', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(357, 'Klinik Pratama Tiara Medika', 'dr.Siti Fatimah', 'Apt Casablanca East Residence, Pondok Bambu', 3, 22, '087780755335', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(358, 'Klinik Pratama Skina Aesthetics', 'dr.Siska Kristina Purnamasari', 'Jl. Pahlawan Revolusi No.16C, RT.3/RW.4', 3, 22, '02122088457', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(359, 'Klinik Pratama FDC Dental Clinic', 'drg.Farida', 'Jl. Teratai Putih Raya No.2, RT.8/RW.4', 3, 26, '02186616675', 24, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(360, 'Klinik Pratama Kimia Farma Malaka Jaya', 'dr.Jayanti', 'Jalan Teratai Putih Raya blok 28 kav 9 L RT.6/RW.13', 3, 26, '08161953452', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(361, 'Klinik Pratama Lulu Medika', 'drg.Atikka Muhammad .B.', 'Jl.Raya Pondok Kelapa Blok C4 No.38, RT 04/ RW 11', 3, 26, '087881508090', 24, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(362, 'Klinik Pratama Putewa', 'dr.Dian Triana Mayasari', 'Jl.Nusa Indah Raya Blok 40 No.17 RT 012/ RW 003', 3, 26, '0218622207', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(363, 'Klinik Pratama Yakrija', 'Suci Widiastuti', 'Jl. Teratai Putih Raya Blok 28 No.9F', 3, 26, '081212156555', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(364, 'Klinik Pratama Agung Medika', 'dr. Muhammad Agung HBS', 'Jl.Pondok Kelapa Raya Blok L10 No.2', 3, 24, '085102213866', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(365, 'Klinik Pratama Medikasih', 'dr.Armida Simanungkalit', 'Jl.Taman Malaka Selatan Blok K16 No.12-14', 3, 24, '8643186', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(366, 'Klinik Pratama Maryani-Tamsil', 'dr. Maryani Masud', 'Jln. Pondok Kelapa Raya Blok C7/18', 3, 24, '081311391953', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(367, 'Klinik Pratama Audrey Beauty Center', 'dr.Ineke Sunarjo', 'Jl.Kalimalang Raya A2/6 RT 001/ RW 004', 3, 24, '8648120', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(368, 'Klinik Pratama RALINE MEDICA CLINIC ', 'dr.RAIHANA SAKTIRYANI ', 'Jln raya pondok kelapa, Blok G1 no 7B  RT.1/RW.11', 3, 24, '085959737418', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(369, 'Klinik Pratama BEAU CLINIC', 'dr.Siti Latifah Nur Rahima', 'Jl. Pondok kelapa Raya Blok A7 No13 B-C, RT.1/RW.4', 3, 24, '02186907295', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(370, 'Klinik Pratama Dzakira Haiyfa', 'dr.Fauzan Rahman', 'Jl. H. Naman No.67A, RT.17/RW.2', 3, 24, '02129622788', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(371, 'Klinik Pratama FDC Dental Clinic', 'drg.Afifah', ' Jl. Inspeksi Kalimalang No.9C, RT.2/RW.11', 3, 24, '081112205808', 24, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(372, 'Klinik AH', 'dr.Rizqiana Alfi Huda', 'Jl.Pondok Kelapa, RT 006/ RW 011', 3, 24, '0218645080', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(373, 'Klinik Pratama Bunga Rampai', 'Dr. Endang MSK Barus', 'Jl. Bunga Rampai Raya no. 38 RT 07/RW 012', 3, 26, '86607297', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(374, 'Klinik Pratama Ibin Sina', 'dr.Gilang Swarnita', 'Jl.Pendidikan Raya No.33 RT 05/ RW 01', 3, 23, '08816875627', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(375, 'Klinik Pratama Kecantikan Estetika Jasper', 'dr.Dian Rizki Rahayu', 'Jl. Raden Inten II No.4, RT.8/RW.15', 3, 23, '085785639285', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(376, 'Klinik Pratama Assistama', 'dr. Retno Asti Werdhani', 'Jl. Radin Inten II NO.80 Ruko Exclusive Radin Inten', 3, 23, '08129603432', 24, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(377, 'Klinik Pratama Medika Prakarsa', 'dr.Eka Surya Septiawan', 'Jalan Radin Inten II No 31 Duren Sawit, RT 03/RW 07', 3, 23, '86908103', 226, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(378, 'Klinik Pratama DR. CHAIRIL TANJUNG', 'dr.Chairil Tanjung Sp.OG', 'Jl. Teratai Putih Raya Blok 18 No.6A-B, RT.12/RW.4', 3, 27, '34652238', 27, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(379, 'Klinik Pratama Fakultas Farmasi dan Sains UHAMKA', 'dr.Anjasari', 'Jl. Delima II Gg. 4, RT.9/RW.3, Malaka Sari', 3, 27, '0895622610219', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(380, 'Klinik Pratama Griya Denta', 'drg.Elita Febrianty', 'Jl. Buaran Raya No.9, RT.6/RW.13', 3, 28, '02129193610', 24, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(381, 'Klinik Pratama MEKAR SARI', 'dr. Wahyuningtyastuti Widia Purnama Dewi', 'Jl.Cililitan besar No.13 Rt.12/01.Makasar, Kota Administrasi Jakarta Timur ', 4, 37, '081311022224', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(382, 'KLINIK PRATAMA BAHAGIA', 'dr.Andriani Damanik', 'JL.JENGKI RT 04/09  NO 6 C D KEL.KEBON PALA KEC.MAKASAR KOTA ADMINISTRASI JAKARTA TIMUR', 4, 37, '081380188853', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(383, 'Klinik Pratama Fajar Medika', '', 'Jl. Jengki Gg. Mushola No. 15 Kel.Kebon Pala Kec.Makasar Kota Administrasi Jakarta Timur', 4, 40, '081288380551', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(384, 'KLINIK PRATAMA SANTOSA', 'dr. Berlian Maurise Hendrawati', 'JL.JENGKI RT 02/12 NO 11 D KEL.KEBON PALA KEC.MAKASAR KOTA ADMINISTRASI JAKARTA TIMUR', 4, 40, '8002689', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(385, 'Klinik Pratama Kelurga Kita Angkasa Pura', 'dr.Gerrywilianto', 'Jl.Komodor Halim Perdana Kusuma Makasar, Kota Administrasi Jakarta Timur ', 4, 38, '02180899320', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(386, 'Klinik Pratama Kimia Farma', 'drg.Amatul Firdaus Ramadhan', 'Jl.Komodor Halim Perdana Kusuma  Rt 03/07 Makasar, Kota Administrasi Jakarta Timur ', 4, 38, '8092199', 24, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(387, 'Klinik Pratama Kharisma', 'dr,Bambang E.D', 'Jl.Asri No.35 Komodor  Halim   RT 01/07 Kel.Halim Kec Makasar Kota Administrasi Jakarta Timur', 4, 38, '081310005158', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(388, 'KLINIK PRATAMA KARYA BAKTI P.RANTI', 'dr.Septelina Lasniati', 'Jln.Raya Pondok Gede Rt 005/02 No. 23  , Kel.Pinang Ranti ', 4, 36, '0852888854355', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(389, 'KLINIK PRATAMA SAHARA', 'dr.Ida Fianty', 'Jln.Raya Pondok Gede Rt 005/02 No. 88A , Kel.Pinang Ranti ', 4, 36, '08128181659', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(390, 'Klinik Pratama  Kelurga Kita (Angkasa Pura 2)', 'dr.Gery Wilianto', 'Jl.Komodor Halim Perdana Kusuma', 4, 38, '', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(391, 'KLINIK PRATAMA DIRGANTARA HALIM', 'drg. Cecilia Glyceria Yogrha Messara', 'JL.SETIOBOMO NO.01 RT/RW 01/02 KEL.HALIM PERDANA KUSUMA KEC,MAKASAR KOTA ADMINISTASI JAKARTA TIMUR', 4, 38, '80879256', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(392, 'KLINIK PRATAMA DENMA KODIKLAT  AU', 'drg.Maria Gloria', 'JL.GOLF RAYA NO.1 KEL.HALIM PERDANA KUSUMA KEC,MAKASAR KOTA ADMINISTRASI JAKARTA TIMUR', 4, 38, '80870287', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(393, 'KLINIK PRATAMA  SATKES KOHANUDNAS', 'dr.Lea Ratna Lestari', 'JL.MUSTANG NO. 5 KEL.HALIM PERDANA KUSUMA KEC,MAKASAR KOTA ADMINISTRASI JAKARTA TIMUR', 4, 38, '8009343', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(394, 'KLINIK PRATAMA SATKES DENMA KOOPSAU 1', 'dr.Ratih Kartika Sari', 'JL.KOPATDARA NO.1  KEL.HALIM PERDANA KUSUMA KEC,MAKASAR KOTA ADMINISTRASI JAKARTA TIMUR', 4, 38, '8001578', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(395, 'KLINIK PRATAMA RAJAWALI', 'dr.Duma Wenty Irene', 'JL.RAJAWALI RAYA KEL.HALIM PERDANA KUSUMA KEC,MAKASAR KOTA ADMINISTRASI JAKARTA TIMUR', 4, 38, '80882817', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(396, 'KLINIK PRATAMA Kantor Kesehatan Pelabuhan Kelas 1 Sukarno Hatta', 'dr.Tunggul Birowo,M.H', 'BANDARA HALIM JL.Halim Perdana Kusuma  KEL.HALIM PERDANA KUSUMA KEC,MAKASAR KOTA ADMINISTRASI JAKARTA TIMUR', 4, 38, '081388287491', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(397, 'KLINIK PRATAMA Kantor Kesehatan Pelabuhan Kelas 1 Sukarno Hatta', 'dr. Hawani', 'Jl.Jengki Raya No 8 RT 08 Rw 02 Kel Kebon Pala Kec.Makasar Jakarta Timur', 4, 40, '081372060696', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(398, 'Kias Kencana BKKBN', 'dr.Eka Susanti', 'Kantor BKKBN Jl. Permata No. 1 Kel.Kebon Pala Kec.Makasar Kota Administrasi Jakarta Timur', 4, 40, '08128471938', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(399, 'Klinik Daarussyifa', 'dr Rahwana', 'Jl. Monumen Pancasilan sakti rt 014/09 Lb. Buaya', 10, 51, '081288880667', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(400, 'klinik Nayaka ', 'dr Miftahul Jannah', 'Jl. Pondok Gede Raya Ruko Mulek no 2B', 10, 51, '081290958389', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(401, 'Klinik Pratama Assomadiyah medicare Center', 'dr Srie Nurhayati', 'Jl.Albaidho raya no 2a  L.Buaya', 10, 51, '081314120022', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(402, 'Klinik Pratama Ardita', 'dr. Ami Mulyanti', 'JL.Raya Cilangkap rt 4/5', 10, 56, '08128939646', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(403, 'Klinik Nur Alif', 'dr Susilo Nugroho', 'Jl Raya Cilangkap rt 001 rw 05 Kel. Cilangkap  Cipayung Jak- Tim', 10, 56, '8452787', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(404, 'Klinik Melati Medika', 'dr Putri Prihartati', 'Jl asyafiiyah rt 05 rw 03 No 174 Kel. Cilangkap Jak -Tim', 10, 56, '082112382340', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(405, 'KliniK Pratama Permata Bunda', 'dr Lintong Napitupulu', 'Jln. Budi Murni ', 10, 53, '085101340858', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(406, 'Klinik Pratama Ananda', 'dr Yulius Kandoko ', 'Jln Mini III rt 12/03 Bambu Apus', 10, 58, '0816822660', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(407, 'Klinik Printis sehat', 'dr H achmad sofyan', 'Jl. Malaka no 100 Munjul', 10, 53, '70952511', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(408, 'Klinik sagas', 'dr Estiningtias Prihatiningsih', 'Jl Raya Cilangkap rt 03/01', 10, 53, '02184303761', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(409, 'Klinik Pratama TMII', 'dr Radwia Siyamiati', 'Jl Raya Taman Mini, Area Wisata TMII Kel.Ceger', 10, 52, '087770213505', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(410, 'Klinik koronka', 'Florentina Yuni Hartati', 'Jln raya Munjul no 55 ', 10, 54, '08122014848', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(411, 'Klinik Pratama Patria Medika', 'dr Berliana', 'Jln Raya Bina Marga rt 002', 10, 52, '02129824061', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(412, 'Klinik Pratama Satkes Denma Mabesal', 'dr Monita Arya Marina', 'Jln Raya hankam Kelurahan Cilangkap', 10, 56, '', 23, 1, '', '', '', 'Februari 2021', 1, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(413, 'Klinik Pratama Satkes Denma Mabesau', 'dr Yazid ', 'Jln Raya hankam Mabes TNI AU rt 00/00 Kelurahan Cilangkap', 10, 56, '081289666911', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(414, 'Klinik Pratama Satkes Denma Mabes TNI', 'dr Fitriana Hapsari', 'Jln Raya hankam Kelurahan Cilangkap', 10, 56, '081218242645', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(415, 'Klinik BPU SS MEDKA OHM Kramat Jati', '', 'Jl. Dewi Sartika no. 292 C RT 04/05 Kel. Cawang Tel. 80870172', 2, 34, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(416, 'Klinik Hygea Kramat Jati', 'dr. Feriyah', 'Jl. Dewi sartika NO.261 Cawang 3 Kel Cawang', 2, 34, '82133668492', 29, 1, '', '', '', 'Februari 2021', 1, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(417, 'Klinik Pratama Anda Sehat Kramat Jati', 'Jl. SMEA VI No.24 Kel. Cawang Kec. Kramat Jati', '', 2, 34, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(418, 'Klinik Pratama Binawan Kramat Jati', 'dr Hilwa Alwaini', 'Jl. Kalibata Raya No.25-30 Rt.12/05 Kel. Cawang Kec. Kramat Jati', 2, 34, '081280005154', 29, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(419, 'Klinik Pratama Merial Health Kramat Jati', 'Abd Halik Malik', 'Jln. Dewi sartika no. 312 A. RT 09/04 Kel. CAWANG', 2, 34, '-85341162998', 30, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(420, 'Klinik Pratama Medika 24 jam', 'dr Anita natiur Panggabean', 'Jl. Dewi Sartika No. 296 Rt.01/04, Cawang', 2, 34, '081369160469', 29, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(421, 'Klinik Pratama Kecantikan FBC Kramat Jati', '', 'Jl. Raya Bogor No.04, RT.2/RW.13, Cililitan  Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13640', 2, 34, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(422, 'Klinik Pratama Sejahtera Mitra Afia Kramat Jati', 'dr Alfy Abaria', 'Jl. Jambul No.17-18 Rt. 05/13 Dewi Sartika Kel. Cililitan Kec. Kramat Jati', 2, 34, '081280530130', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(423, 'Klinik Pratama Kasih Kramat Jati', 'dr Suwardika Putra', 'Jl. Cililitan Besar No.83 Rt.03/09 Kel. Cililitan Kec. Kramat Jati', 2, 34, '087779531702', 30, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(424, 'ESTETIKA FBC', '', 'Kramat Jati', 2, 34, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(425, 'Klinik AS-SYIFA', 'dr. Lina Hendrawati', 'Jl Condet Raya No 5 RT 01/16 Kel Cililitan Kramat Jati', 2, 34, '085774766574', 29, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(426, 'Klinik Pratama Sartika 24 jam', 'dr Ira Angraini', 'Jln Dewi Sartika no 22  RT 05/13 Kel Cililitan Jakarta Timur', 2, 34, '081267223030', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(427, 'Klinik Pratama Esther Kramat Jati', 'dr. Dyah Gayatri Kusumasari', 'Jln Kelapa Gading V No 1 RT 001/003 Kel Kramat Jati', 2, 29, '081290003565', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(428, 'Klinik Pratama Dianindra Kramat Jati', '', 'Jl. Rs. Polri, RT.12/RW.4, Kramat Jati, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13510', 2, 29, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(429, 'Klinik Condet 24 Jam Kramat Jati', 'dr. Lestari Soebowo', 'Jl Condet Raya no 3 RT 003/04  Kel. Batu Ampar Kec Kramat Jati', 2, 30, '081292782106', 29, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(430, 'Klinik Pratama Al Fauzan Kramat Jati', 'dr Farida Lusiana', 'Jalan Raya Condet No. 02 RT 005/003 Kel. Batu Ampar', 2, 30, '081311518394', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(431, 'Klinik Pratama Kimia Farma Condet ', 'dr Devi Anneta', 'Jalan Raya Condet No. 30 B Kel. Batu Ampar', 2, 30, '8567806033', 29, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(432, 'Klinik Pratama Medika Kramat Jati', 'dr. Arief Wahyu Mulyana', 'Jl. Batu Ampar III No.55 RT 11/02 Kel. Batu Ampar Kec. Kramat Jati', 2, 30, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(433, 'Klinik Pratama Nura Dental Care & Aesthetics Kramat Jati', 'drg Nila Kresna Noviyanti', 'Jln. Raya Tengah No. 31 FRT 07/03 Kel. Batu Ampar', 2, 30, '08174994122', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(434, 'Klinik NKDC DENTAL CARE', 'drg. Nila Kresna Noviyanti', 'Jln. Batu Ampar III no 3A RT 12/02 Kel. Batu Ampar Kec. Kramat Jati', 2, 30, '081572459999', 24, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(435, 'Klinik Pratama CANTIKEAYU AESTHETIC CLINIC', 'dr. Witra Ayu', 'Jln Jl. Raya Tengah no 31 F lantai 2 RT 07/03 Kel Batu Ampar Kec Kramat Jati', 2, 30, '081287640076', 25, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(436, 'Klinik Jasmine Estetika Kramat Jati', '', 'Jl. Munggang no.14 Kel Balekambang', 2, 31, '', 25, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(437, 'Klinik Pratama Global Doctor Kramat Jati', 'dr. Agung Triyatno', 'Jl. Kayu Manis No. 21 A Kel. Balekambang', 2, 31, '081311734277', 29, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(438, 'Klinik Pratama Sejahtera Medica Kramat Jati', '', 'Jalan Condet Raya no. 9 E RT 005/003 KEL. Balekambang Kec. Kramat Jati', 2, 31, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:10', '2022-02-16 06:01:10'),
(439, 'AL KHAIRAT', '', 'Kramat Jati', 2, 31, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(440, 'ESTETIKAKU', '', 'Jl. Raya Condet No. 9B, Balekambang', 2, 31, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(441, 'Klinik Pratama Bina Sehat Insani Kramat Jati', 'dr. Endar Maskendar', 'Jl Raya Tengah No.10 Rt.06/09 Kel Tengah Kec Kramat Jati', 2, 32, '081380890864', 29, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(442, 'MGM 24', '', 'Jln Raya Tengah/Inpres no 10 RT 04/01 Kel. Tengah', 2, 32, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(443, 'Klinik Marga Bhakti Husada Kramat Jati', 'dr Srikoning Widyaningsih', 'Plaza Tol Taman Mini Indonesia Indah Rt.08/02 Kel. Dukuh Kec Kramat Jati', 2, 33, '87884340515', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(444, 'Klinik Pratama Dokter Abdul Radjak Pondok Gede Kramat Jati', 'dr Tety Sri S', 'Jl. Raya Pondok Gede No. 23-25 Kel. Dukuh Kec. Kr. Jati', 2, 33, '081326610706', 24, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(445, 'Klinik Pratama Restu Ibu Kramat Jati', 'dr. Mahesa Paranadipa Maikel', 'Jl. Penggilingan Baru No. 104 RT 08/04 Kel. Dukuh Kec Kramat Jati', 2, 33, '085240713171', 31, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(446, 'Klinik pratama sinergi lisna medika 01', '', '', 2, 33, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(447, 'Klinik Pratama BNN Kramat Jati', 'dr Sitty Jewuskadara', 'Jalan MT Haryono No. 11 Kel. Cawang', 2, 34, '08128678344', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(448, 'Klinik Pratama Polma Kodam Jaya Kramat Jati', 'dr Putri Nindya Citra', 'Jl. Mayjen Sutoyo no 5 RT 007/007 Kel Cawang', 2, 34, '', 34, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(449, 'Klinik Pratama Badan Kepegawaian Negara Kramat Jati', 'dr Tety', 'Jl. Let.Jend Sutoyo no 12 Rt. 06/14 Kel. Cililitan Kec. Kramat Jati', 2, 35, '', 29, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(450, 'Klinik Pratama MAPUSKESAD', 'dr Afriani Likun', 'Jl. Mayjen Sutoyo RT 03 /11 Kel. Cililitan Kec. Kramat Jati', 2, 35, '081349396122', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(451, 'Klinik Pratama Satpelkes Dinas Lingkungan Hidup Kramat Jati', 'drg Adria MARS', 'Jl.Mandala V No.67 Rt 01/02 Kel. Cililitan', 2, 35, '087878628864', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(452, 'Klinik BPHN', '', 'Jl Mayjen Sutoyo No 10 Kel Cililitan Kec. Kramat Jati', 2, 35, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(453, 'Klinik Pratama Pusdikkes TNI AD', 'drg. Widda Mayuyani, M.M', 'Jln Raya Bogor Kel Kramat Jati', 2, 29, '081367150030', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(454, 'Tjakra 24 jam ', 'dr. Darwin Dahsyat', 'Jl. Raya Bogor KM. 24 No. 35 Rt/Rw. 001/01 Kel. Susukan', 5, 49, '081314941245', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(455, 'Suci Husada ', 'Dr.Edi Satriawan, MARS', 'Jl. Suci No. 21 RT. 008 RW. 006 Kel. Susukan', 5, 49, '089602702728', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(456, 'KLINIK JESINDA', 'dr. Evi Maryam, MARS', 'Jl. Kelapa Dua Wetan Komp. PTB II C/3, Kel. Kelapa Dua Wetan, Kec. Ciracas', 5, 47, '081345297144', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(457, 'SETIA RUMANDA', 'dr. Henny Estikasari', 'Jl. Lapangan Tembak No. 62 RT.002/RW.07, Kel. Kelapa Dua Wetan, Kec. Ciracas', 5, 47, '0811855633', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(458, 'Namiera', 'dr. RAHMI MUTIADEWI DALIMUNTHE', 'Jl. Kelapa Dua Wetan No. 10 RT.002/RW.05 Kel. Kelapa Dua Wetan, Kec. Ciracas', 5, 47, '081908092574', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(459, 'Klinik Pratama Mitra Diani', 'dr. Dian Permana', 'Jl. Raya Pkp No.16, RT.9/RW.12, Kel. Kelapa Dua Wetan, Kec. Ciracas', 5, 47, '081381115151', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(460, 'Khitan Bogem', 'dr. Dexi Andriyanto', 'Jl. Manunggal Raya No. 1 A RT.013/RW.08, Kel. Kelapa Dua wetan, Kec. Ciracas', 5, 47, '081213900678', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(461, 'Anggrek Medika 24 Jam', 'dr winda Alicia irene ', 'Jl.  PKP Raya No. 32 RT.002/RW.08, Kel. Kelapa Dua Wetan Kec. Ciracas', 5, 47, '081386839253', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(462, 'Klinik Pratama Surya Medika ', 'dr. ENDIVIA RIZKI MAGHFIROH', 'JL. KELAPA DUA WETAN RT.001 RW.008 KEL. KELAPA DUA WETAN  KEC. CIRACAS', 5, 47, '081232012246', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(463, 'DHARMA MULIA - 2 ', 'dr. Cecelia Naritha', 'Jl. Raya Bogor Km. 22 Rt/Rw. 08/02, Kel. Rambutan', 5, 50, '08121069474', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11');
INSERT INTO `kliniks` (`id`, `nama_klinik`, `penanggung_jawab`, `alamat`, `kecamatan_id`, `kelurahan_id`, `no_telepon`, `jenislayanan_id`, `bpjs`, `latitude`, `longitude`, `images`, `tahun_pendataan`, `status_akreditasi`, `created_at`, `updated_at`) VALUES
(464, 'KUSUMA MEDIKA', 'dr. Welinton M. Simanjuntak', 'Jl. Hadidji No. 28 Rt/Rw. 12/02, Rambutan', 5, 50, '08129988837', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(465, 'MITRA MEDIKA', 'dr. Caixar Agus Sudharmono', 'Jln. Raya Bogor Km. 22 Rt/Rw 010,01, Kel Rambutan, Kec Ciracas Jaktim', 5, 50, '082373569624', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(466, 'Annisa Ciracas', 'dr. Pradnya Paramita', 'Jl. Ciracas No. 18 Rt/Rw. 004/02 Kel. Ciracas', 5, 48, '081219240338', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(467, 'ARDITA CIRACAS', 'dr. rita Erfita', 'Jl. Raya Ciracas No. 3A. Rt. 01/02', 5, 48, '085793393990', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(468, 'SEJAHTERA CIRACAS', 'dr. Yuni Astutiningsih', 'Jl. Raya Ciracas No. 38 Rt/Rw. 16/02 Kel. Ciracas', 5, 48, '08161801690', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(469, 'Klinik PT. Frisian Flag Indonesia Plant Ciracas', 'dr. Djoko Kurdo Hutomo Siswoyo Putra', 'Jl. Raya Bogor KM. 26 RT. 011 RW. 004 Kel. Ciracas Kec. Ciracas', 5, 48, '08119000418', 22, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(470, 'BHAKTI UTAMA MEDIKA', 'dr amelia nurfajrina', 'jl raya ciracas no 1 004/003 kel. Ciracas ', 5, 48, '081313606061', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(471, 'klinik pratama komplek porli ciracas', 'dr. Dewi Malahayati', 'jl. Komplek porli rt 008 rw 004 kel. Ciracas, kecamatan ciracas ', 5, 48, '0217218240', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(472, 'klinik pratama Elidas ', 'DR YOSE RIZAL', 'jl raya ciracas no 29 11/03 kel. Ciracas ', 5, 48, '', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(473, 'Permata Medika', 'dr. Sahruna', 'Jl. Mustika Ratu No. 3 Kel. Ciracas Kec. Ciracas', 5, 48, '02129842766', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(474, 'Ar-Rahim', 'dr. H. Asmadi Chaidin, MARS', 'Jl. Lapangan Tembak Rt/Rw. 02/02 Kel. Cibubur Kec. Ciracas', 5, 46, '08121035025', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(475, 'Klinik Pratama Taruna Jaya', 'dr. Melvina Tungga Dewi', 'jl. Taruna jaya No. 7 RT 04/ RW 13, Cibubur, Ciracas ', 5, 46, '085280929282', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(476, 'Klinik Pratama Le Beaute', 'dr. Irza Monalisa AZ', 'Cibubur Junction Lt. 1 Blok I.5-7, Jl. Jambore Raya No. 1 RT. 004 RW. 004 Kel. Cibubur Kec. Ciracas', 5, 46, '02187755103', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(477, 'kimia farma ', 'dr laksita ', 'l.Lawu B1 No. 1 Arundina Lap, Tembak RT.1/RW.11, Cibubur, ', 5, 46, '02129626791', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(478, 'ZAP', 'dr. Arum Puspita Sari', 'Cibubur Junction Lt. 1 Blok I 38, Jl. Jambore Raya No. 1Kel. Cibubur Kec. Ciracas', 5, 46, '081219597933', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(479, 'ORISKIN ', 'dr. Dian Anugrah', 'MALL CIBUBUR JUNTION LT LG, UNIT 5 . JLN JAMBORE NO 01 , KELURAHAN CIBUBUR', 5, 46, '02187756434', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(480, 'klinik pratama komplek porli ciracas', 'dr. Dewi Malahayati', 'jl. Komplek porli rt 008 rw 004 kel. Ciracas, kecamatan ciracas ', 5, 48, '0217218240', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(481, 'Alfatonah', 'dr Maderlis', 'Jl Cipinang Timur Raya No 58 Rt 8/3', 1, 11, '082299066902', 32, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(482, 'Klinik Pratama Kasih Medika Pulogadung', 'dr. vonny Maryadi', 'Jl Taruna No 42 Rt 14/03', 1, 13, '087889564545', 30, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(483, 'klinik kimia Farma 04 RAWAMANGUN', 'dr.Handayani', 'Jl Perserikatan No 7-8', 1, 9, '0214718059', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(484, 'Medina Husada', 'dr. Edi Sutikno', 'Jl Raya Bekasi Km 18 No 3 rt 01/06', 1, 13, '085959996749', 30, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(485, 'Griya Kesehatan Indonesia', 'dr. M Tedjasaputra', 'Jl Gabus Raya No 11 Rt 04/11', 1, 8, '0821254429534', 30, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(486, 'Karya Bhakti Cipinang', 'dr. Robertus aryo Seno H', 'Jl Raya Bekasi Timur No 22', 1, 12, '087808010093', 30, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(487, 'Cahaya Sehat', 'dr. Nana Lilia H', 'Jl Taruna 14/03', 1, 13, '08193246676', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(488, 'Kasih Bunda', 'dr. Kristina Sutedja', 'Jl. Bandeng raya no 5 rt 12/05', 1, 7, '087880878908', 30, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(489, 'Klinik Pratama Click House Rawamangun Pulogadung', 'dr. Gun Gun Gunarto', 'Jl. Cipinang Baru Raya No.25 RT 005 / RW 002', 1, 11, '08179912999', 30, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(490, 'Klinik Pratama dr ERNA Pulogadung', 'dr. Erna Purnamasari', 'Jl. Pondasi No. 12 RT.002 RW. 017 Kelurahan Kayu Putih Kecamatan Pulogadung', 1, 7, '085775177968', 20, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(491, 'Klinik Pratama Nayaka Era Husada 09 Pulogadung', 'dr. Rohana', 'Jl. Raya Bekasi No.1, RT.5/RW.1, Jatinegara Kaum, Kec. Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13240', 1, 12, '021-22470199', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(492, 'Klinik Pratama Pertamedika Pulogadung', 'drg. Renvi Hardyanto', 'Jalan Mundu Raya No. 1Rt/Rw 12/04 kel. jati , kec. Pulogadung ', 1, 8, '0811981509', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(493, 'Klinik Pratama Pondasi Medika Pulogadung', 'dr. Indra Anis', 'Jl. Pondasi No.27 E Rt 06 Rw 02 Kel. Kayu Putih Kec. Pulogadung', 1, 7, '08111913019', 33, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(494, 'Klinik Pratama Ratnasari Pulogadung', 'dr.Rama Devarie', 'Jl. Bawal Raya No.10 RT.005 RW.008 Kel.Rawamangun Kec.Pulogadung, Jakarta Timur', 1, 9, '085881623394', 23, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(495, 'Klinik Pratama Yunda', 'dr. Emilda Yunda', 'Jl. Sinar Jaya no. 17, RT 003 RW 010', 1, 10, '0214721516', 21, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(496, 'Klinik Pratama Melati', 'dr. Rosmini Nurdin, MARS', 'Jl. Pisangan Lama III No.7 RT 004 RW 008', 1, 10, '0214895351', 21, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(497, 'Kama Clinic', 'dr.Lia Anggraini, Sp.Og', ' Jl. Pemuda No.Kav. 17, RT.2/RW.7,', 1, 9, '02122478101', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(498, 'UP. PERPARKIRAN DISHUB PROV. DKI JAKARTA', 'dr.Tuti Haryanti', 'Jl. Perintis Kemerdekaan I No. 1 Kel. Kayu Putih Kec. Pulo Gadung', 1, 9, '0857714106271', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(499, 'Klinik Pratama Cipinang', 'dr.Dedi Suranda', 'Jl.Bakasi Timur Raya no.206 Rt 008/009', 1, 11, '0214712117', 23, 0, '', '', '', 'Februari 2021', 1, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(500, 'Klinik Pratama Direktorat Jenderal Bea Dan Cukai ', 'dr. maya C.L Malaihollo', 'Jl. Ahmad Yani By Pass, RT.12/RW.5, Rawamangun, Pulo Gadung - Jakarta Timur', 1, 9, '1500225', 23, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(501, 'Klinik Pegadaian Permata ', 'dr. Lian Permata', 'Jl. Cipinang Jaya II B No. 42', 8, 11, '081317460900', 30, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(502, 'Klinik Pratama Rawat Inap Widodo', 'dr. Diah Purnamayanti', 'Jl. Antariksa III No. 102', 8, 11, '0218199667', 32, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(503, 'Klinik Pratama BRImedika', 'dr. Azdi', 'Jl. Otista Raya no 72, RT 004 / RW 005, Kel. Bidara Cina, Kec. Jatinegara', 8, 16, '085693333185', 29, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(504, 'Laboratorium Klinik Siaga Medika', 'dr. Toni', 'Jl. Otista Rayano 48 RT 001 / RW 003, Kel. Bidara Cina, Kec. Jatinegara', 8, 16, '081212880690', 29, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(505, 'KLINIK PRATAMA MEDIKO ', 'DR. INDRAWATI JUANINA WIJAYA', 'Jl.Bekasi Timur IX/6 RT 04 rw 03', 8, 18, '02147483647', 30, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(506, 'Klinik Pratama Cita Sehat Kel.Cipinang Muara  kecamatan Jatinegara', 'dr. Agung Zentyo Wibowo', 'Jl. Mulya Jaya No. 9 B, Rt/Rw 11/08, Kelurahan Cipinang Muara', 8, 21, '02147483647', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(507, 'Klinik Pratama Cipinang Bali Kel.Cipinang Muara Kec. Jatinegara', 'dr. Hariani', 'Jl. Cipinang Bali II No. 3A RT/RW 008/013', 8, 21, '081343409519', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(508, 'Klinik Pratama Medika Keluarga kel.Cipinang Muara Kecamatan Jatinegara', 'dr. Femmy Iravanti', 'Jl. Cipinang Muara III Rt/Rw.010/015 ', 8, 21, '0218500922', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(509, 'Devita Profit', '', 'Jl. Raya Jatinegara Timur No. 57 Rt/Rw. 11/02 Kel. Balimester Kec. Jatinegara', 8, 0, '0218501134', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(510, 'PARTIWI', '', 'Jl. Cipinang Jaya II E Rt. 12/09, CBS', 9, 0, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(511, 'Dharma Bakti Medika', '', 'Jl. Cipinang Jaya Raya No. 74 Rt. 08/07, Cip. Besar selatan', 9, 0, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(512, 'JDS', '', 'Jl. Cipinang  Jaya Raya No 74 RT08/07 Kel. Cipayung Besar Selatan- Jatinegara', 8, 0, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(513, 'MUTIARA SENTRA MEDIKA', 'Jl. Cawang Baru Utara No. 18 Rt/Rw. 01/11 Kel. Cip.Cempedak kec. Jatinegara', '', 8, 17, '0218507050', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(514, 'CIPINANG BALI', '', 'Jl. Cipinang Bali II No. 3A Rt/Rw. 08/13, Cip Muara', 8, 21, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(515, 'MEDIKA SAIRI A.W.', '', 'Jl. Prumpung Sawah No. 26 Rt/Rw. 04/06, Cip Besar Selatan', 8, 20, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(516, 'PT. HUTAMA KARYA', '', 'Jl. MT. Haryono Kav. 8, Cip Cempedak', 8, 17, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(517, 'MEDIKA KELUARGA', '', 'Jl. Cip. Muara III No. 11 Rt/Rw. 101/015 Kel. Cip. Muara Kec. Jatinegara', 8, 21, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(518, 'BRIMEDIKA', '', 'Jl. Otto Iskandardinata no. 68 B RT 003 RW 004', 8, 0, '02185907845', 0, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(519, 'PEGADAIAN PERMATA', '', 'Jl. Cipinang Jaya 2B No. 42 RT. 007 RW. 007 Kel. Cipinang  Besar Selatan, Kec. Jatinegara, Kota Administrasi Jakarta Timur', 8, 20, '', 0, 1, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(520, 'KLINIK ULTRA MEDICA', '', 'Jl. Cipinang Muara Raya No. 27 RT 001 RW 003 Kel. Cipinang Muara, Kec. Jatinegara, Kota Administrasi Jakarta Timur', 8, 21, '02129361096', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(521, 'DL SLIM', '', 'Jl. Otista Raya No. 46A Rt. 04/07, Cip Muara', 8, 21, '02129613763', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(522, 'Avira 24 Jam', '', 'Jl. Otista No. 82 Rt/Rw. 05/06 Kel. Bidara Cina Kec. Jatinegara', 8, 16, '0218199245', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(523, 'KIMIA FARMA CIPINANG', '', 'Jl. Cipinang Jaya  No. 74 RT 008 RW 007 Kel. Cipinang Besar Selatan', 8, 20, '02129821930', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(524, 'Mediko', '', 'Jl. Bekasi Timur IX No. 6 Kel. Rawa Bunga', 8, 18, '02185910259', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(525, 'JT ', '', 'Jl. Otista III No. 119 Rt/Rw. 01/01 Kel. Cip. Cempedak Kec. Jatinegara', 8, 17, '081717777003', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(526, 'Agape', '', 'Jl. Otista No. 24 Rt/Rw. 01/02 Kel. Bidara Cina Kec. Jatinegara', 8, 16, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(527, 'Otista 24 Jam', '', 'Jl. Otista Raya No. 26 Rt/Rw. 01/02 Bidara cina jatinegara', 8, 16, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(528, 'Siaga Medika 24 Jam', '', 'Jl. Otista Raya No. 48 Rt/Rw. 01/03 Kel. Bidara Cina Kec. Jatinegara', 8, 16, '0218518101', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(529, 'Santo Antonius', '', 'Jl. Otista No. 76 Rt/Rw. 04/03 Kel. Bidara Cina Kec. Jatinegara', 8, 16, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(530, 'Yunda 3', '', 'Jl. Cipinang Muara Raya No. 25 Rt/Rw. 12/03 Kel. Cip. Muara Kec. Jatinegara', 8, 21, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(531, 'Cita Sehat', '', 'Jl. Mulya Jaya No.9 B Rt/Rw.11/8 Kel. Cipinang Muara Kec. Jatinegara ', 8, 21, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(532, 'otista HF', '', '', 8, 0, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(533, 'Poliklinik Cipinang', '', '', 8, 0, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(534, 'Klinik Orange Dental', '', '', 8, 0, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(535, 'Klinik Setia Jaya', '', '', 8, 0, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(536, 'Klinik Pratama Yayasan Bidara Mulia', '', 'Jl. Otto Iskandar Dinata No.64, RT.4/RW.15, Bidara Cina, Kecamatan Jatinegara, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13330', 8, 16, '0218191665', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(537, 'Klinik Humanika', '', 'No. 5 Otista, Bidara Cina, Gg. Pertama, RT.6/RW.2, Bidara Cina, Kecamatan Jatinegara,', 8, 16, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(538, 'Klinik Bakti Ananda', '', 'Jl. I Gusti Ngurah Rai, RT.3/RW.6, Cipinang Muara, Kecamatan Jatinegara', 8, 21, '0218198514', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(539, 'Poliklinik Darma Bakti', '', 'jl. Panca Warga 2, RT.14/RW.3, Cipinang Besar Sel., Kecamatan Jatinegara', 8, 20, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(540, 'MEDIKA KELUARGA', '', 'Jl. Cip. Muara III No. 11 Rt/Rw. 101/015 Kel. Cip. Muara Kec. Jatinegara', 8, 20, '0218500922', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(541, 'LAPAS NARKOTIKA KLAS II A JAKARTA', '', 'Jl. Raya Bekasi Timur Kel. Cip. Besar Utara', 8, 19, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(542, 'Polres Metro Jakarta Timur', '', 'Jl. Matraman Raya No. 224 Balimester', 8, 14, '02122850803', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(543, 'Rutan Klas I Cipinang ', '', 'Jl. Raya Bekasi Timur No. 170 Kel. Cipinang Besar Utara Kec. Jatinegara', 8, 19, '02133008528', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11'),
(544, 'Kementrian Lingkungan Hidup', '', 'Jl. DI Panjaitan , Kebon Nanas ', 8, 20, '', 0, 0, '', '', '', 'Februari 2021', 0, '2022-02-16 06:01:11', '2022-02-16 06:01:11');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_18_132837_create_permission_tables', 1),
(14, '2022_01_27_061150_create_rumah_sakits_table', 2),
(16, '2022_01_27_061237_create_kepemilikans_table', 2),
(17, '2022_01_27_061257_create_kecamatans_table', 2),
(18, '2022_01_27_061322_create_jenis_layanans_table', 2),
(19, '2022_01_27_061351_create_kelurahans_table', 2),
(21, '2022_01_27_061421_create_tempat_tidurs_table', 3),
(22, '2022_01_27_061216_create_kliniks_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(3, 'App\\Models\\User', 3),
(5, 'App\\Models\\User', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'jenis_layanans.index', 'web', '2022-02-17 06:05:23', '2022-02-17 06:05:23'),
(2, 'jenis_layanans.create', 'web', '2022-02-17 06:05:23', '2022-02-17 06:05:23'),
(3, 'jenis_layanans.edit', 'web', '2022-02-17 06:05:23', '2022-02-17 06:05:23'),
(4, 'jenis_layanans.delete', 'web', '2022-02-17 06:05:24', '2022-02-17 06:05:24'),
(5, 'kelurahans.index', 'web', '2022-02-17 06:05:24', '2022-02-17 06:05:24'),
(6, 'kelurahans.create', 'web', '2022-02-17 06:05:24', '2022-02-17 06:05:24'),
(7, 'kelurahans.edit', 'web', '2022-02-17 06:05:24', '2022-02-17 06:05:24'),
(8, 'kelurahans.delete', 'web', '2022-02-17 06:05:24', '2022-02-17 06:05:24'),
(9, 'kecamatans.index', 'web', '2022-02-17 06:05:24', '2022-02-17 06:05:24'),
(10, 'kecamatans.create', 'web', '2022-02-17 06:05:24', '2022-02-17 06:05:24'),
(11, 'kecamatans.edit', 'web', '2022-02-17 06:05:24', '2022-02-17 06:05:24'),
(12, 'kecamatans.delete', 'web', '2022-02-17 06:05:24', '2022-02-17 06:05:24'),
(13, 'tempat_tidurs.index', 'web', '2022-02-17 06:05:24', '2022-02-17 06:05:24'),
(14, 'tempat_tidurs.create', 'web', '2022-02-17 06:05:24', '2022-02-17 06:05:24'),
(15, 'tempat_tidurs.edit', 'web', '2022-02-17 06:05:24', '2022-02-17 06:05:24'),
(16, 'tempat_tidurs.delete', 'web', '2022-02-17 06:05:24', '2022-02-17 06:05:24'),
(17, 'rumah_sakits.index', 'web', '2022-02-17 06:05:24', '2022-02-17 06:05:24'),
(18, 'rumah_sakits.create', 'web', '2022-02-17 06:05:24', '2022-02-17 06:05:24'),
(19, 'rumah_sakits.edit', 'web', '2022-02-17 06:05:24', '2022-02-17 06:05:24'),
(20, 'rumah_sakits.delete', 'web', '2022-02-17 06:05:24', '2022-02-17 06:05:24'),
(21, 'kliniks.index', 'web', '2022-02-17 06:05:24', '2022-02-17 06:05:24'),
(22, 'kliniks.create', 'web', '2022-02-17 06:05:24', '2022-02-17 06:05:24'),
(23, 'kliniks.edit', 'web', '2022-02-17 06:05:24', '2022-02-17 06:05:24'),
(24, 'kliniks.delete', 'web', '2022-02-17 06:05:24', '2022-02-17 06:05:24'),
(25, 'categories.update', 'web', '2022-03-01 06:07:01', '2022-03-01 06:07:01'),
(26, 'customers.update', 'web', '2022-03-01 06:07:01', '2022-03-01 06:07:01'),
(27, 'products.update', 'web', '2022-03-01 06:07:01', '2022-03-01 06:07:01'),
(28, 'pembelians.update', 'web', '2022-03-01 06:07:01', '2022-03-01 06:07:01'),
(29, 'roles.create', 'web', '2022-03-08 06:47:22', '2022-03-08 06:47:22'),
(30, 'roles.edit', 'web', '2022-03-08 06:47:22', '2022-03-08 06:47:22'),
(31, 'roles.delete', 'web', '2022-03-08 06:47:22', '2022-03-08 06:47:22'),
(32, 'roles.index', 'web', '2022-03-08 06:47:22', '2022-03-08 06:47:22'),
(33, 'permissions.update', 'web', '2022-03-16 05:49:48', '2022-03-16 05:49:48'),
(34, 'permissions.delete', 'web', '2022-03-16 05:49:48', '2022-03-16 05:49:48'),
(35, 'permissions.create', 'web', '2022-03-16 05:49:49', '2022-03-16 05:49:49'),
(36, 'permissions.index', 'web', '2022-03-16 05:49:49', '2022-03-16 05:49:49'),
(37, 'user.delete', 'web', '2022-03-16 05:52:54', '2022-03-16 05:52:54'),
(38, 'user.create', 'web', '2022-03-16 05:52:54', '2022-03-16 05:52:54'),
(39, 'user.index', 'web', '2022-03-16 05:52:54', '2022-03-16 05:52:54'),
(40, 'user.edit', 'web', '2022-03-16 05:52:54', '2022-03-16 05:52:54');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2022-01-18 07:04:48', '2022-01-18 07:04:48'),
(2, 'admin test 1', 'web', '2022-03-08 06:03:44', '2022-03-08 06:03:44'),
(3, 'test test 1', 'web', '2022-03-08 06:30:58', '2022-03-08 06:30:58'),
(5, 'test delete 2', 'web', '2022-03-08 06:32:19', '2022-03-08 06:32:19');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(2, 2),
(2, 3),
(3, 1),
(3, 3),
(4, 1),
(4, 3),
(5, 1),
(5, 3),
(6, 1),
(6, 2),
(6, 3),
(7, 1),
(7, 3),
(8, 1),
(8, 3),
(9, 1),
(9, 3),
(10, 1),
(10, 2),
(10, 3),
(11, 1),
(11, 3),
(12, 1),
(12, 3),
(13, 1),
(13, 3),
(14, 1),
(14, 3),
(15, 1),
(15, 3),
(16, 1),
(16, 3),
(17, 1),
(17, 3),
(18, 1),
(18, 2),
(18, 3),
(19, 1),
(19, 3),
(20, 1),
(20, 3),
(21, 1),
(21, 3),
(22, 1),
(22, 2),
(22, 3),
(23, 1),
(23, 3),
(24, 1),
(24, 3),
(25, 1),
(25, 3),
(26, 1),
(26, 3),
(27, 1),
(27, 3),
(28, 1),
(28, 3),
(29, 1),
(29, 3),
(30, 1),
(30, 3),
(31, 1),
(31, 3),
(32, 1),
(32, 3),
(33, 1),
(33, 3),
(34, 1),
(34, 3),
(35, 1),
(35, 3),
(36, 1),
(36, 3),
(37, 1),
(37, 3),
(38, 1),
(38, 3),
(39, 1),
(39, 3),
(40, 1),
(40, 3);

-- --------------------------------------------------------

--
-- Table structure for table `rumah_sakits`
--

CREATE TABLE `rumah_sakits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_rumah_sakit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan_id` int(11) NOT NULL,
  `kelurahan_id` int(11) NOT NULL,
  `no_telepon` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_fax` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_rs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_rs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_akreditasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepemilikan_id` int(11) NOT NULL,
  `jenislayanan_id` int(11) NOT NULL,
  `tempattidur_id` int(11) NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_pendataan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rumah_sakits`
--

INSERT INTO `rumah_sakits` (`id`, `nama_rumah_sakit`, `alamat`, `kecamatan_id`, `kelurahan_id`, `no_telepon`, `no_fax`, `email`, `jenis_rs`, `tipe_rs`, `status_akreditasi`, `kepemilikan_id`, `jenislayanan_id`, `tempattidur_id`, `latitude`, `longitude`, `images`, `tahun_pendataan`, `created_at`, `updated_at`) VALUES
(1, 'RS Persahabatan', 'Jalan Persahabatan Raya No.1 Kel.Pisangan Timur, Kec.Pulogadung', 1, 10, '4891708', '4711222', 'info@rsuppersahabatan.co.id', 'Umum', 'A', 'Sudah Akreditasi', 1, 1, 1, '', '', '', 2020, '2022-02-15 05:05:15', '2022-02-15 05:05:15'),
(2, 'RS Pengayoman Cipinang', 'Jl Raya Bekasi Timur No 170 B Cipinang', 1, 11, '33153700', '85914558', 'rspengayoman.dki@gmail.com', 'Umum', 'C', 'Belum Akreditasi', 1, 4, 2, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(3, 'RS. OMNI PULOMAS', 'Jalan. Pulomas Barat VI No.20, Kel. Kayu Putih, Kec. Pulogadung', 1, 7, '472 27 19', '4718081', '', 'Umum', 'B', 'Sudah Akreditasi', 3, 2, 3, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(4, 'RS. MEDIROS ', 'Jl. Perintis Kemerdekaan  Kav.149, Kel.Pulogadung, Kec. Pulogadung', 1, 13, '472 13 36', '472 13 36', 'medrecmediros@gmail.com', 'Umum', 'C', 'Sudah Akreditasi', 3, 2, 4, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(5, 'RS. COLUMBIA ASIA ', 'Jalan Kayu Putih, Kel.Kayu Putih, Kec.Pulogadung', 1, 7, '47883195', '29559477', 'medicalrecord.pulomas@columbiaasia.com', 'Umum', 'B', 'Sudah Akreditasi', 3, 2, 5, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(6, 'RS. YADIKA', 'Jalan Pahlawan Revolusi No.57, Kel. Pondok Bambu, Kec. Pulogadung', 1, 22, '866 009 40', '8613332', 'rsyadika@yahoo.com', 'Umum', 'C', 'Sudah Akreditasi', 3, 2, 6, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(7, 'RS. KARTIKA PULO MAS', 'Jalan Pulomas Timur No.1, Kel. Kayu Putih, Kec.Pulogadung', 1, 7, '471 49 76', '472 34 02', 'yayasankartikapulomas@gmail.com', 'Umum', 'C', 'Sudah Akreditasi', 3, 2, 7, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(8, 'RS. ANTAM MEDIKA', 'Jl. Pemuda Raya No.1A Kec. Pulogadung', 1, 12, '29378939 ', '29378941', 'sekretaris@antam.co.id', 'Umum', 'C', 'Sudah Akreditasi', 3, 2, 8, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(9, 'RS  DHARMA NUGRAHA ', 'Jl. Balai Pustaka Baru no. 19 Rawamangun jakarta Timur', 1, 9, '470 74 34', '', '', 'Umum', 'C', 'Belum Akreditasi', 3, 2, 9, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(10, 'RSIA. ALVERNIA AGUSTA', 'Jalan Pemuda No.80, Kelurahan Jati, Kec.Pulogadung', 1, 8, '470 52 66', '470 44 74', 'alvernia_agusta@yahoo.co.id', 'Umum', 'C', 'Belum Akreditasi', 7, 5, 10, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(11, 'RS Khusus Bedah Rawamangun', 'jl. Balai Pustaka Raya No. 29 - 31 Rawamangun,  Jakarta Timur', 1, 9, '489 35 31', '4710918', 'rs.rawamangun@gmail.com', 'Khusus Bedah', 'C', 'Sudah Akreditasi', 6, 6, 11, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(12, 'RS Khusus MATA SMEC', 'Jl. Pemuda No. 36, RT05/RW 03 Rawamangun', 1, 9, '4714848', '', 'jakarta.rsmatasmec.com', 'Khusus Mata', 'C', 'Sudah Akreditasi', 6, 17, 12, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(13, 'RSK. Pusat Otak Nasional ', 'Jalan MT. Haryono Rt.001/06 Kel.Cawang Kec.Kramat Jati', 2, 34, '29373377', '29373445', 'rspotakn@gmail.com', 'Khusus Otak', 'A Khusus', 'Sudah Akreditasi', 1, 7, 13, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(14, 'RSUD. BUDHI ASIH', 'Jl. Dewi Sartika No.200, Kel. Cawang, Kec.Kramat Jati', 2, 34, '808 78 559', '8009157', 'rsudbudhiasih200@gmail.com', 'Umum', 'B', 'Sudah Akreditasi', 2, 8, 14, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(15, 'RSUD  Type D Kramat Jati', 'Jl Raya Inpres No 48 Kel Tengah Kramat Jati', 2, 32, '87791352', '87793604', 'rsukramatjati@gmail.com', 'Umum', 'D', 'Sudah Akreditasi', 2, 8, 15, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(16, 'RS.Bhayangkara Tk.1  R.Said Soekamto', 'Jalan Raya RS. Polri Kel. Kramat Jati, Kec.Kramat Jati,  Jakarta Timur', 2, 29, '809 32 88', '8095310', 'bidyanmedwat.rssukanto@gmail.com', 'Umum', 'A', 'Sudah Akreditasi', 2, 10, 16, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(17, 'RS. Pusdikkes Kodiklat TNI-AD', 'Jalan Raya Bogor, Kel. Kramat Jati, Kec.Kramat Jati', 2, 29, '808 83 704', '', '', 'Umum', 'C', 'Sudah Akreditasi', 4, 11, 17, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(18, 'RSU. UKI ', 'Jalan Letjend Sutoyo No.2, Kel. Cawang, Kec.Kramat Jati', 2, 34, '8092317', '8092445', 'rsuki@gmail.com', 'Umum', 'B', 'Sudah Akreditasi', 3, 2, 18, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(19, 'RSU. JIH AL FAUZAN', 'Jl. Pedati No.3, Kel. Kampung Tengah, Kec. Kramat Jati', 2, 32, '87780318', '87780318', 'jakartaislamichospital@yahoo.com', 'Umum', 'D', 'Belum Akreditasi', 3, 2, 19, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(20, 'RSIA. RESTU KASIH', 'Jl. Raya Bogor  No.13A,  Kramat Jati jakarta Timur', 2, 29, '800 21 66', '808 82 753', 'medrec@rsiarestukasih.com', 'Khusus Ibu dan Anak', 'C', 'Sudah Akreditasi', 7, 5, 20, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(21, 'RSKD. Duren Sawit ', 'Jalan Duren Sawit Baru No.4, Kel. Duren Sawit, Kec. Duren Sawit', 3, 23, '861 55 55', '8628659', 'kesekretariatan.rskdurensawit@gmail.com', 'Khusus Jiwa', 'A Khusus', 'Sudah Akreditasi', 2, 12, 21, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(22, 'RS. Islam Jakarta Pondok Kopi ', 'Jalan Raya Pondok Kopi No.1, Kel. Pondok Kopi, Kec. Duren Sawit', 3, 25, '863 06 54', '86604256', 'rsipk@cbn.net.id', 'Umum', 'B', 'Sudah Akreditasi', 3, 2, 22, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(23, 'RS dr. Euis ', 'Jl. H. Naman no.3 ( Transito ) Pondok Kelapa Jakarta Timur', 3, 24, '869 05383', '865 6488', '', 'Umum', 'C', 'Belum Akreditasi', 3, 2, 23, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(24, 'RSIA. BUNDA ALIYAH', 'Jl. Pahlawan Revolusi  No.100, Kel. Pondok Bambu, Kec. Duren Sawit', 3, 22, '866 025 25', '86615321', 'rsiabundaaliyah@yahoo.com', 'Khusus Ibu dan Anak', 'B', 'Sudah Akreditasi', 7, 5, 24, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(25, 'RSIA. SAM MARIE BASRA', 'Jl. Basuki Rahmat No.31, Kel. Pondok Bambu, Kec. Duren Sawit', 3, 22, '86613146', '86613147', 'contact.sambasra@gmail.com', 'Khusus Ibu dan Anak', 'C', 'Sudah Akreditasi', 7, 5, 25, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(26, 'RSIA. ASTA NUGRAHA', 'Jl. Duren Sawit Raya Blok K3 No.1, Kel.Klender Kec. Duren sawit', 3, 28, '8615937', '86603953', '', 'Khusus Ibu dan Anak', 'C', 'Belum Akreditasi', 7, 5, 26, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(27, 'RSIA. SAYYIDAH', 'Jalan Taman Malaka Selatan No.6 Kel.Pondok Kelapa Kec.Duren Sawit', 3, 24, '8655156', '8649886', 'rsia.sayyidah@yahoo.com', 'Khusus Bersalin', 'C', 'Sudah Akreditasi', 6, 113, 27, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(28, 'RSK. Jiwa Islam Klender ', 'Jalan Bunga Rampai X, Kel. Pondok Kopi, Kec. Duiren Sawit', 3, 25, '866 024 02', '86610234', 'rsjiwaislam@yahoo.co.id', 'Khusus Jiwa', 'C', 'Sudah Akreditasi', 6, 17, 28, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(29, 'RSAU. Dr. Esnawan Antariksa', 'Jalan Merpati No.2, Kel. Halim Perdanakusuma, Kec. Makasar', 4, 38, '808 819 11', '8098665', 'rsau_esnawan.antariksa@yahoo.com', 'Umum', 'B', 'Sudah Akreditasi', 4, 14, 29, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(30, 'RS. HAJI  JAKARTA', 'Jalan Raya Pondok Gede, Kel. Pinang ranti, Kec.Makasar', 4, 36, '800 07 03', '80876209', 'info@rshaji-jakarta.com', 'Umum', 'B', 'Sudah Akreditasi', 1, 1, 30, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(31, 'RS TK.II Moh. Ridwan Meuraksa', 'Jl. Taman Mini I, RT04/RW02 Pinang Ranti', 4, 36, '22819465', '', '', 'Umum', 'B', 'Sudah Akreditasi', 4, 11, 31, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(32, 'RS. HARUM', 'Jl. Raya Tarum Barat, Kel. Cipinang Melayu, Kec. Makasar', 4, 39, '861 72 13', '8601039', 'sekretariat.rsharum@sismamedika.com', 'Umum', 'C', 'Sudah Akreditasi', 3, 2, 32, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(33, 'RSK. Gigi dan Mulut TNI AU', 'Jalan Puntodewo No.1 Dirgantara II Rt.001/02 Kel. Halim Kec.Makasar', 4, 38, '80879256', '80887312', 'urperslakesgilut@gmail.com', 'Khusus Gigi dan Mulut', 'B Khusus', 'Sudah Akreditasi', 4, 14, 33, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(34, 'RSKO. CIBUBUR', 'Jl. Lapangan Tembak No.74,75  Kel. Cibubur, Kec.Ciracas', 5, 46, '877 11 968', '87711970', 'rskojakarta@yahoo.co.id', 'Khusus Ketergantungan Obat', 'B', 'Sudah Akreditasi', 1, 7, 34, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(35, 'RS Olahraga Nasional', 'Jl. Jambore No. 1 , Kel. Cibubur  Kec. Ciracas.', 5, 46, '5738318', '5731106', 'rsolahragacibubur@gmail.com', 'Khusus', 'C', 'Sudah Akreditasi', 1, 16, 35, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(36, 'RSUD Type D Ciracas', 'Jl Cibubur No 1 Ciracas', 5, 46, '8718995', '8718995', 'rsuciracas@gmail.com', 'Umum', 'D', 'Sudah Akreditasi', 2, 8, 36, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(37, 'RS. HARAPAN BUNDA', 'Jl. Raya Bogor Km.22 No.44, Kel. Kampung Rambutan, Kec. Ciracas', 5, 50, '8400257', '87781248', 'keuangan@rsharapanbunda.com', 'Umum', 'B', 'Sudah Akreditasi', 3, 2, 37, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(38, 'RSK. Jantung BINA WALUYA', 'Jl. TB. Simatupang No.71, Kel.Susukan, Kec.Ciracas', 5, 49, '840 46 52', '840 38 69', '', 'Khusus Jantung', 'C', 'Sudah Akreditasi', 6, 17, 38, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(39, 'RSUD. PASAR REBO', 'Jl. TB. Simatupang No.30, Kel.Gedong, Kec. Pasar Rebo', 6, 42, '840 11 27', '8411159', 'rsudpasarrebo1@gmailcom', 'Umum', 'B', 'Sudah Akreditasi', 2, 8, 39, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(40, 'RS. KESDAM Cijantung', 'Jalan Mahoni Cijantung II, Kel. Gedong, Kec. Pasar Rebo', 6, 42, '87793332', '87793332', 'rskesdamjaya_cijantung@yahoo.com', 'Umum', 'C', 'Sudah Akreditasi', 4, 11, 40, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(41, 'RSUD Type D MATRAMAN', 'Jl. Kebon Kelapa Raya  No.29, Utan Kayu Utara RT01/RW10', 7, 2, '8581958', '85909055', 'rsukmatraman@gmail.com', 'Umum', 'D', 'Sudah Akreditasi', 2, 9, 41, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(42, 'RSK. JANTUNG JAKARTA', 'Jl. Matraman Raya No. 23, Kel. palmeriam Kec. Matraman 13211', 7, 5, '293 61160-67', '', 'jakartaheartcenter@gmail.com ', 'Khusus Jantung', 'B Khusus', 'Sudah Akreditasi', 6, 17, 42, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(43, 'RS. Premier Jatinegara ', ' Jalan Raya Jatinegara Timur No.85-87, Kel. Balimester Kec. Jatinegara', 8, 14, '280 08 88', '2800755', 'sekretaris-rspj@ramsayhealth.co.id', 'Umum', 'B', 'Sudah Akreditasi', 3, 2, 43, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(44, 'RS. Hermina Jatinegara ', 'Jalan Jatinegara Barat No.126, Kel. Kampung Melayu, Kec. Jatinegara', 8, 15, '8191223', '8190111', 'jakartaislamichospital@yahoo.com', 'Umum', 'B', 'Sudah Akreditasi', 3, 2, 44, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(45, 'RS. HARAPAN JAYAKARTA', 'Jl. Bekasi Timur Raya   No.6, Kel.Jatinegara, Kec. Cakung Jakarta Timur', 9, 62, '4608886', '4608863', 'info@rshjayakarta.com', 'Umum', 'C', 'Sudah Akreditasi', 3, 2, 45, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(46, 'RSIA.  RESTI  MULYA', 'Jl. Pahlawan Komarudin Raya No.5, Kel. Penggilingan, Kec. Cakung ', 9, 63, '480 39 36', '48701488', 'rsia_resty_mulya@gmail.com', 'Khusus Ibu dan Anak', 'C', 'Sudah Akreditasi', 7, 5, 46, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(47, 'RSU ADHYAKSA', 'Jl. Raya   No. 60  Hankam Kel. Ceger  Kec. Cipayung.', 10, 52, '29462345', '29462370', 'rsia_resty_mulya@gmail.com', 'Umum', 'B', 'Sudah Akreditasi', 2, 8, 47, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16'),
(48, 'RSUD Cipayung', 'Jl. Mini III RT04 RW 03 Bambu Apus Cipayung 13890', 10, 58, '85506588', '', 'rsudcipayung@gmail.com', 'Umum', 'D', 'Sudah Akreditasi', 2, 8, 48, '', '', '', 2020, '2022-02-15 05:05:16', '2022-02-15 05:05:16');

-- --------------------------------------------------------

--
-- Table structure for table `tempat_tidurs`
--

CREATE TABLE `tempat_tidurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tempat_tidur_rawat_inap` decimal(8,2) NOT NULL,
  `tempat_tidur_intensive_care` decimal(8,2) NOT NULL,
  `bor` decimal(8,2) NOT NULL,
  `los` decimal(8,2) NOT NULL,
  `toi` decimal(8,2) NOT NULL,
  `bto` decimal(8,2) NOT NULL,
  `gdr` decimal(8,2) NOT NULL,
  `ndr` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tempat_tidurs`
--

INSERT INTO `tempat_tidurs` (`id`, `tempat_tidur_rawat_inap`, `tempat_tidur_intensive_care`, `bor`, `los`, `toi`, `bto`, `gdr`, `ndr`, `created_at`, `updated_at`) VALUES
(1, '158.00', '24.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(2, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(3, '164.00', '11.00', '7.00', '3.30', '1.10', '83.30', '1.30', '8.40', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(4, '98.00', '3.00', '21.00', '4.00', '13.00', '20.00', '0.58', '0.21', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(5, '108.00', '13.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(6, '88.00', '3.00', '49.00', '3.00', '5.00', '4.00', '1.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(7, '60.00', '3.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(8, '94.00', '8.00', '30.98', '4.00', '10.00', '2.00', '4.00', '2.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(9, '0.00', '0.00', '18.21', '3.44', '10.20', '23.78', '3.26', '3.52', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(10, '29.00', '1.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(11, '45.00', '2.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(12, '6.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(13, '170.00', '28.00', '62.26', '8.00', '5.00', '12.00', '64.81', '48.89', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(14, '341.00', '41.00', '60.50', '7.60', '2.60', '55.90', '4.80', '2.40', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(15, '76.00', '5.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(16, '817.00', '117.00', '75.48', '3.90', '1.57', '62.57', '59.74', '37.54', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(17, '50.00', '3.00', '45.66', '2.81', '3.27', '4.48', '0.00', '0.21', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(18, '140.00', '8.00', '35.00', '4.00', '8.00', '29.00', '41.00', '23.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(19, '19.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(20, '156.00', '8.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(21, '522.00', '30.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(22, '163.00', '8.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(23, '78.00', '11.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(24, '67.00', '12.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(25, '17.00', '3.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(26, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(27, '31.00', '0.00', '3.70', '1.50', '6.50', '1.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(28, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(29, '189.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(30, '199.00', '20.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(31, '190.00', '12.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(32, '25.00', '7.00', '37.21', '3.00', '5.00', '49.00', '1.00', '0.60', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(33, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(34, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(35, '18.00', '0.00', '0.87', '4482.00', '0.75', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(36, '36.00', '3.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(37, '48.00', '2.00', '40.72', '3.64', '4.52', '47.85', '15.05', '5.85', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(38, '16.00', '4.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(39, '279.00', '49.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(40, '120.00', '3.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(41, '38.00', '2.00', '75.00', '1.00', '0.00', '44.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(42, '61.00', '23.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(43, '180.00', '24.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(44, '138.00', '32.00', '67.67', '2.94', '1.37', '86.06', '4.85', '14.55', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(45, '68.00', '8.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(46, '62.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(47, '89.00', '1.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22'),
(48, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-02-07 07:11:22', '2022-02-07 07:11:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Irfan Prasetyo', 'admin@gmail.com', NULL, '$2y$10$edBDYOQyEEA2xoUh79/4ie3KPgrm/e1dNLsN1RInOzsPk.3uPfgQy', '6vGzPWy2kmZBxZkZqRZvVsXH8Zz8M27SK7g2rwSqqCmSanglbVCIViROhRYE', '2022-02-15 06:58:38', '2022-02-15 06:58:38'),
(3, 'testuser2', 'testuser2@gmail.com', NULL, '$2y$10$1buR2b5F672uEc0BJ.mW1exXbog400Nn0wluSbjHHWx0/YptDXMWS', NULL, '2022-09-08 06:31:00', '2022-09-22 05:40:51'),
(4, 'testwisnu123', 'testwisnu123@gmail.com', NULL, '$2y$10$/RPjS4sV.Ez0CYTrLxjRouvuzuhANXuH9Qo1rWEF9zfJWlgA0RvVi', NULL, '2022-09-22 05:02:59', '2022-09-22 05:37:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jenis_layanans`
--
ALTER TABLE `jenis_layanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatans`
--
ALTER TABLE `kecamatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelurahans`
--
ALTER TABLE `kelurahans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kepemilikans`
--
ALTER TABLE `kepemilikans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kliniks`
--
ALTER TABLE `kliniks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `rumah_sakits`
--
ALTER TABLE `rumah_sakits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempat_tidurs`
--
ALTER TABLE `tempat_tidurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_layanans`
--
ALTER TABLE `jenis_layanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `kecamatans`
--
ALTER TABLE `kecamatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kelurahans`
--
ALTER TABLE `kelurahans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `kepemilikans`
--
ALTER TABLE `kepemilikans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kliniks`
--
ALTER TABLE `kliniks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=545;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rumah_sakits`
--
ALTER TABLE `rumah_sakits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tempat_tidurs`
--
ALTER TABLE `tempat_tidurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
