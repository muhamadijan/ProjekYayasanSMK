-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 20, 2024 at 02:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unsur`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(200) NOT NULL DEFAULT 'default.png',
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `gambar`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(2, '1730878937.png', 'test', '<p>p</p>', '2024-11-06 00:42:17', '2024-11-06 00:42:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `maps` varchar(1000) DEFAULT NULL,
  `telp` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `maps`, `telp`, `fax`, `email`, `created_at`, `updated_at`) VALUES
(4, 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15846.905300368386!2d107.2195298!3d-6.8031103!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68535d2dd12b03%3A0xbb08b654531fb447!2sNurul%20Islam%20Vocational%20High%20School!5e0!3m2!1sid!2sid!4v1731034684680!5m2!1sid!2sid', '087', '087', 'YayasanNurulIsalamAffandiah@gmail.com', '2024-11-05 23:50:48', '2024-11-07 19:59:37');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(200) NOT NULL DEFAULT 'default.png',
  `icon` varchar(200) NOT NULL DEFAULT 'default.png',
  `nama` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo`, `icon`, `nama`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'satu-1730889938.png', 'dua-1730889938.png', 'Yayasan Nurul Islam Affandiyyah', 'Hebat', '2024-11-06 03:45:38', '2024-11-11 18:25:37');

-- --------------------------------------------------------

--
-- Table structure for table `ma`
--

CREATE TABLE `ma` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(200) NOT NULL DEFAULT 'default.png',
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `link_web` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ma`
--

INSERT INTO `ma` (`id`, `gambar`, `judul`, `isi`, `link_web`, `created_at`, `updated_at`) VALUES
(1, '1730948488.png', 'Madrasah Aliyah (MA)', '<p>tes</p>', 'https://maniscjr.sch.id/', '2024-11-06 02:13:30', '2024-11-11 19:02:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_17_093713_create_sejarah_table', 2),
(6, '2021_12_01_005805_create_visi_table', 2),
(7, '2023_04_26_152545_create_photo_table', 2),
(8, '2023_04_26_152554_create_vidio_table', 2),
(9, '2023_03_27_212925_create_sarana_table', 3),
(10, '2021_11_26_024329_create_kontak_table', 4),
(11, '2021_11_30_062343_create_struktur_table', 5),
(12, '2021_11_28_102553_create_weblink_table', 6),
(13, '2014_08_15_224710_create_berita_table', 7),
(14, '2024_11_06_082512_create_ma_table', 8),
(15, '2024_11_06_082519_create_mts_table', 8),
(16, '2024_11_06_082525_create_smk_table', 8),
(17, '2024_11_06_082536_create_pesantren_table', 8),
(18, '2024_11_06_083215_create_vidio_table', 9),
(19, '2024_11_06_090319_create_contoh_table', 10),
(20, '2021_11_27_022507_create_logo_table', 11),
(21, '2021_12_09_113427_create_navbar_table', 11),
(22, '2021_11_19_024856_create_sambutan_table', 12),
(23, '2024_11_11_023326_create_tentang_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `mts`
--

CREATE TABLE `mts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(200) NOT NULL DEFAULT 'default.png',
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `link_web` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mts`
--

INSERT INTO `mts` (`id`, `gambar`, `judul`, `isi`, `link_web`, `created_at`, `updated_at`) VALUES
(2, '1730948228.jpg', 'Madrasah Tsanawiyah (MTs)', '<p>tes</p>', 'https://matsanuris.sch.id/', '2024-11-06 02:11:36', '2024-11-11 19:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `navbar`
--

CREATE TABLE `navbar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar1` varchar(200) NOT NULL DEFAULT 'default.png',
  `gambar2` varchar(200) NOT NULL DEFAULT 'default.png',
  `gambar3` varchar(200) NOT NULL DEFAULT 'default.png',
  `gambar4` varchar(200) NOT NULL DEFAULT 'default.png',
  `gambar5` varchar(200) NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navbar`
--

INSERT INTO `navbar` (`id`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `gambar5`, `created_at`, `updated_at`) VALUES
(1, 'satu-1730945157.jpg', 'dua-1730945157.jpg', 'tilu-1730945157.png', 'empat-1730945157.webp', 'lima-1730945157.jpg', '2024-11-06 03:49:35', '2024-11-06 19:05:57');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesantren`
--

CREATE TABLE `pesantren` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(200) NOT NULL DEFAULT 'default.png',
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `link_web` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesantren`
--

INSERT INTO `pesantren` (`id`, `gambar`, `judul`, `isi`, `link_web`, `created_at`, `updated_at`) VALUES
(2, '1730946749.png', 'Pondok Pesantren(Ponpes)', '<p>isi tentang</p>', '#', '2024-11-06 02:07:19', '2024-11-11 19:04:02');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gamar` varchar(200) NOT NULL DEFAULT 'default.png',
  `judul` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `gamar`, `judul`, `created_at`, `updated_at`) VALUES
(2, '1730951650.jpg', 'test', '2024-11-05 21:18:06', '2024-11-06 20:54:10'),
(3, '1731374480.jpg', 'test 1', '2024-11-11 18:21:20', '2024-11-11 18:21:20'),
(4, '1731374499.jpg', 'PARIJAN ST', '2024-11-11 18:21:39', '2024-11-11 18:21:39'),
(5, '1731374514.jpg', 'Tentang Yayasan Nurul Islam Affandiyyah', '2024-11-11 18:21:54', '2024-11-11 18:21:54'),
(6, '1731374533.webp', 'STRUKTUR ORGANISASI YAYASAN NURUL ISLAM', '2024-11-11 18:22:13', '2024-11-11 18:22:13'),
(7, '1731374567.png', 'test 1', '2024-11-11 18:22:47', '2024-11-11 18:22:47');

-- --------------------------------------------------------

--
-- Table structure for table `sambutan`
--

CREATE TABLE `sambutan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(200) NOT NULL DEFAULT 'default.png',
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sambutan`
--

INSERT INTO `sambutan` (`id`, `gambar`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(2, '1730952444.jpg', 'PARIJAN ST', '<p><span style=\"color: #7697c6; font-family: Muli, -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 17.6px;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus assumenda omnis tempora ullam alias amet eveniet voluptas, incidunt quasi aut officiis porro ad, expedita saepe necessitatibus rem debitis architecto dolore? Nam omnis sapiente placeat blanditiis voluptas dignissimos, itaque fugit a laudantium adipisci dolorem enim ipsum cum molestias? Quod quae molestias modi fugiat quisquam. Eligendi recusandae officiis debitis quas beatae aliquam?</span></p>', '2024-11-06 21:07:24', '2024-11-06 21:07:24');

-- --------------------------------------------------------

--
-- Table structure for table `sarana`
--

CREATE TABLE `sarana` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `jumlah_ada` varchar(255) NOT NULL,
  `kondisi` varchar(255) NOT NULL,
  `jumlah_yg_diperlukan` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sarana`
--

INSERT INTO `sarana` (`id`, `uraian`, `jumlah_ada`, `kondisi`, `jumlah_yg_diperlukan`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, 'test', '3', 'baik', '3', 'bagus', '2024-11-05 20:59:08', '2024-11-05 20:59:08');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(200) NOT NULL DEFAULT 'default.png',
  `isi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id`, `gambar`, `isi`, `created_at`, `updated_at`) VALUES
(4, '1730861743.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis ipsum natus, dicta doloribus eaque omnis officiis voluptatum obcaecati harum saepe, aut necessitatibus neque! Quos alias labore veritatis quae culpa cum veniam tempora nisi numquam eligendi obcaecati dolorem magni maxime quam natus inventore, quas ex ipsum illo fugit delectus voluptas ut. Labore inventore nam aspernatur porro molestiae dolorem quis, mollitia cum error natus libero necessitatibus, debitis laborum consequuntur id sunt consequatur.', '2024-11-05 19:55:43', '2024-11-05 19:55:43');

-- --------------------------------------------------------

--
-- Table structure for table `smk`
--

CREATE TABLE `smk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(200) NOT NULL DEFAULT 'default.png',
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `link_web` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smk`
--

INSERT INTO `smk` (`id`, `gambar`, `judul`, `isi`, `link_web`, `created_at`, `updated_at`) VALUES
(1, '1730948514.png', 'SMK NURUL ISMLAM CIANJUR', '<p>tess</p>', 'https://smakniscjr.sch.id/', '2024-11-06 02:14:25', '2024-11-11 19:03:03');

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE `struktur` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(200) NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `struktur`
--

INSERT INTO `struktur` (`id`, `judul`, `gambar`, `created_at`, `updated_at`) VALUES
(2, 'STRUKTUR ORGANISASI YAYASAN NURUL ISLAM', '1730876781.jpg', '2024-11-06 00:06:21', '2024-11-06 00:06:21');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `siswa` varchar(255) NOT NULL,
  `tahun_berdiri` varchar(255) NOT NULL,
  `guru_karyawan` varchar(255) NOT NULL,
  `lembaga` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id`, `judul`, `isi`, `siswa`, `tahun_berdiri`, `guru_karyawan`, `lembaga`, `created_at`, `updated_at`) VALUES
(2, 'Tentang Yayasan Nurul Islam Affandiyyah', '<p><span style=\"color: #808080; font-family: Muli, -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 17.6px; text-align: center;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis ipsum natus, dicta doloribus eaque omnis officiis voluptatum obcaecati harum saepe, aut necessitatibus neque! Quos alias labore veritatis quae culpa cum veniam tempora nisi numquam eligendi obcaecati dolorem magni maxime quam natus inventore, quas ex ipsum illo fugit delectus voluptas ut. Labore inventore nam aspernatur porro molestiae dolorem quis, mollitia cum error natus libero necessitatibus, debitis laborum consequuntur id sunt consequatur.</span></p>', '1870', '1987', '120', '4', '2024-11-10 20:19:33', '2024-11-10 20:19:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'Muhama Farijan', 'admin@gmail.com', NULL, '$2y$10$A/PuXUCCipGWkR87qKxWBuCrW9vPxI1biU/AzBZlreSAqfgEYJFSa', NULL, '2024-03-01 06:00:39', '2024-11-05 03:30:16');

-- --------------------------------------------------------

--
-- Table structure for table `vidio`
--

CREATE TABLE `vidio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video` varchar(200) NOT NULL DEFAULT 'default.png',
  `judul` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vidio`
--

INSERT INTO `vidio` (`id`, `video`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(1, '1730881964.mp4', 'test', '<p>tes</p>', '2024-11-06 01:32:45', '2024-11-06 01:32:45');

-- --------------------------------------------------------

--
-- Table structure for table `visi`
--

CREATE TABLE `visi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visi` varchar(255) NOT NULL,
  `misi` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visi`
--

INSERT INTO `visi` (`id`, `visi`, `misi`, `tujuan`, `created_at`, `updated_at`) VALUES
(3, '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae eum sapiente mollitia! Cupiditate molestias magni temporibus, tempore commodi, debitis dolore quos sequi repellat similique eaque earum, natus quibusdam iusto officia.</p>', '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae eum sapiente mollitia! Cupiditate molestias magni temporibus, tempore commodi, debitis dolore quos sequi repellat similique eaque earum, natus quibusdam iusto officia.</p>', '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae eum sapiente mollitia! Cupiditate molestias magni temporibus, tempore commodi, debitis dolore quos sequi repellat similique eaque earum, natus quibusdam iusto officia.</p>', '2024-11-05 20:08:37', '2024-11-10 19:21:04');

-- --------------------------------------------------------

--
-- Table structure for table `weblink`
--

CREATE TABLE `weblink` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fb` varchar(1000) DEFAULT NULL,
  `ig` varchar(1000) DEFAULT NULL,
  `yt` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `weblink`
--

INSERT INTO `weblink` (`id`, `fb`, `ig`, `yt`, `created_at`, `updated_at`) VALUES
(2, 'tes', 'tes', 'tes', '2024-11-06 00:22:04', '2024-11-06 00:22:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ma`
--
ALTER TABLE `ma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mts`
--
ALTER TABLE `mts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesantren`
--
ALTER TABLE `pesantren`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sambutan`
--
ALTER TABLE `sambutan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sarana`
--
ALTER TABLE `sarana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smk`
--
ALTER TABLE `smk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vidio`
--
ALTER TABLE `vidio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weblink`
--
ALTER TABLE `weblink`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ma`
--
ALTER TABLE `ma`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `mts`
--
ALTER TABLE `mts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `navbar`
--
ALTER TABLE `navbar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesantren`
--
ALTER TABLE `pesantren`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sambutan`
--
ALTER TABLE `sambutan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sarana`
--
ALTER TABLE `sarana`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `smk`
--
ALTER TABLE `smk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `vidio`
--
ALTER TABLE `vidio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visi`
--
ALTER TABLE `visi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `weblink`
--
ALTER TABLE `weblink`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
