-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Des 2019 pada 05.40
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_nomads`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `travel_packages_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galleries`
--

INSERT INTO `galleries` (`id`, `travel_packages_id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(16, 14, 'assets/gambar/7taUsxdJwLucPqbk0kYNXx7tUvUsbFDKuusx9hjc.jpeg', '2019-12-21 06:27:54', '2019-12-21 05:00:47', '2019-12-21 06:27:54'),
(17, 15, 'assets/gambar/VwRFHUzRpX5ytewLemr2H6jfRalPUJ3g9SCrPEL8.jpeg', '2019-12-21 06:27:51', '2019-12-21 05:03:43', '2019-12-21 06:27:51'),
(18, 16, 'assets/gambar/DhAwIuDDnjR7xXYWLvUzMecOT7bBNKx7vy3ybpBK.jpeg', '2019-12-21 06:27:46', '2019-12-21 05:04:59', '2019-12-21 06:27:46'),
(19, 17, 'assets/gambar/fLRHsFZ0whZ5VTlSMkxuaS86GPasKaJ019VjQhsk.jpeg', '2019-12-21 06:27:25', '2019-12-21 05:05:17', '2019-12-21 06:27:25'),
(20, 14, 'assets/gallery/n1yOpp9v8dKLmqC7DoyZ7ftndH78c7Rrx0RiTKyW.jpeg', '2019-12-21 06:36:00', '2019-12-21 06:28:26', '2019-12-21 06:36:00'),
(21, 15, 'assets/gallery/wXyITKCZ7zJKVgsQIeTLHZtT7cWSGB8lwvjazxH5.jpeg', '2019-12-21 06:36:06', '2019-12-21 06:28:46', '2019-12-21 06:36:06'),
(22, 16, 'assets/gallery/L6ps0Jb9ciWp6oN2ZSiqO7YMi4SlBabcUD5D0bMc.jpeg', '2019-12-21 06:36:11', '2019-12-21 06:29:05', '2019-12-21 06:36:11'),
(23, 17, 'assets/gallery/VIcBGlZfvs0X7wjuEMToJHQo8JuHdzCqRxdgsMAk.jpeg', '2019-12-21 06:35:55', '2019-12-21 06:29:19', '2019-12-21 06:35:55'),
(24, 14, 'assets/gallery/bLp36XT0qYOpdmRSuSjCwK2iKrpp4mrH72jIK8QV.jpeg', NULL, '2019-12-21 06:36:47', '2019-12-21 06:36:47'),
(25, 15, 'assets/gallery/VFl2JLDuyMW4Hq1cQWqnXefwB0vPgZiwGAtcp8er.jpeg', NULL, '2019-12-21 06:37:16', '2019-12-21 06:37:16'),
(26, 16, 'assets/gallery/XLgmvi6cJkCOrfQrD2lbY5du84NT3FUWPzvpQNwi.jpeg', NULL, '2019-12-21 06:37:34', '2019-12-21 06:37:34'),
(27, 17, 'assets/gallery/Hoq2bCSKuk9VB0J6T6U9wfgJdk2pbFjiBOBOEpeO.jpeg', NULL, '2019-12-21 06:37:52', '2019-12-21 06:42:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_24_160051_create_travel_packages_table', 1),
(5, '2019_11_24_161900_create_galleries_table', 2),
(6, '2019_11_24_163416_create_transactions_table', 3),
(7, '2019_11_24_164343_create_transaction_details_table', 4),
(8, '2019_11_26_153148_add_roles_field_to_users_table', 5),
(10, '2019_11_30_164844_add_username_field_to_users_table', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `travel_packages_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `additional_visa` int(11) NOT NULL,
  `transaction_total` int(11) NOT NULL,
  `transaction_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transactions`
--

INSERT INTO `transactions` (`id`, `travel_packages_id`, `users_id`, `additional_visa`, `transaction_total`, `transaction_status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(28, 15, 1, 200, 25200, 'SUCCESS', NULL, '2019-12-21 08:28:21', '2019-12-21 08:30:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transactions_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_visa` tinyint(1) NOT NULL,
  `doe_passport` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaction_details`
--

INSERT INTO `transaction_details` (`id`, `transactions_id`, `username`, `nationality`, `is_visa`, `doe_passport`, `deleted_at`, `created_at`, `updated_at`) VALUES
(37, 28, 'Raden', 'Indonesia', 0, '2024-12-21', NULL, '2019-12-21 08:28:22', '2019-12-21 08:28:22'),
(38, 28, 'izal', 'Indonesia', 1, '2019-12-05', NULL, '2019-12-21 08:28:55', '2019-12-21 08:28:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `travel_packages`
--

CREATE TABLE `travel_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foods` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure_date` date NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `travel_packages`
--

INSERT INTO `travel_packages` (`id`, `title`, `slug`, `location`, `about`, `featured_event`, `language`, `foods`, `departure_date`, `duration`, `type`, `price`, `deleted_at`, `created_at`, `updated_at`) VALUES
(14, 'Jakarta', 'jakarta', 'Indonesia', 'Indonesia adalah negara  yang indah buat Traveling', 'Traveling', 'Indonesia', 'Tahu Sumedang', '2019-12-22', '7D', 'Open Trip', 25000, NULL, '2019-12-21 04:51:05', '2019-12-21 04:55:41'),
(15, 'Amsterdam', 'amsterdam', 'Belanda', 'belanda adalah negara yang menjajah Indonesia', 'Penjajah', 'Belanda', 'Batagor', '2019-12-28', '4D', 'Open Trip', 12500, NULL, '2019-12-21 04:52:13', '2019-12-21 04:56:11'),
(16, 'Tokyo', 'tokyo', 'Jepang', 'jepang adalah salah satu negara yang ikut menjajah Indonesia', 'Penjajah', 'Jepang', 'Dodol Garut', '2019-12-24', '2D', 'Open Trip', 2300, NULL, '2019-12-21 04:53:31', '2019-12-21 04:56:44'),
(17, 'Kuala Lumpur', 'kuala-lumpur', 'Malaysia', 'Malaysia adalah negara tetangga Indonesia', 'Tetangga', 'Melayu', 'Basreng', '2019-12-07', '2D', 'Open Trip', 4500, NULL, '2019-12-21 04:55:05', '2019-12-21 04:57:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`, `username`) VALUES
(1, 'Syahrizal Alisadikin', 'alisadikinsyahrizal@gmail.com', '2019-12-14 10:38:09', '$2y$10$R0mI6Ue6nhUlUfamTOA2jO3TZeM.sBXI9l4/If0oIJ1lrf/GAOZo6', NULL, '2019-11-28 09:07:57', '2019-12-14 10:38:09', 'ADMIN', 'Raden'),
(2, 'izal', 'izal@gmail.com', '2019-11-28 10:26:45', '$2y$10$G5PY6HAdGg2KJIJRjC0wfOj6J/601KaFJ95gQAdcL5VnSQIyz1DGC', NULL, '2019-11-28 10:26:24', '2019-11-28 10:26:45', 'USER', ''),
(3, 'Syahrizal', 'izal@yahoo.com', NULL, '$2y$10$u4TcLZnhok1bhTM4pStp6O0HnO42xFgeHg3xkLHUj4GhJNgQ5ZaHy', NULL, '2019-11-30 10:00:16', '2019-11-30 10:00:16', 'USER', 'izal'),
(4, 'Raden Kusuma', 'wijaya@gmail.com', NULL, '$2y$10$IIr6SfSRJqjiWeWLfW0BM.gpNP5lxl7dIYADcftmeOhyagQGrthOq', NULL, '2019-11-30 10:07:43', '2019-11-30 10:07:43', 'USER', 'wijaya'),
(5, 'wildan', 'wildan@yahoo.com', '2019-11-30 10:20:04', '$2y$10$Czof7KuxBB1JqQr15GxCNOrEyCy1XhL79MX3ln.5BFUv1U0KKeEhu', NULL, '2019-11-30 10:19:25', '2019-11-30 10:20:04', 'ADMIN', 'ali'),
(6, 'samsul', 'arif@gmail.com', '2019-11-30 10:21:43', '$2y$10$sA7lWlokGB7w29HJ9He.GeiW/KRWoi2TP21Cst0Uw2Bms4PSVJxFK', NULL, '2019-11-30 10:20:56', '2019-11-30 10:21:43', 'USER', 'arif'),
(8, 'Ardhi Ole', 'ardhi@gmail.com', '2019-12-09 07:25:22', '$2y$10$Yrf4UyHPU1mUENWxH2v82Ona4gQb.P1wCp/wemrHO0XL3N.Uv4Dpm', NULL, '2019-12-09 07:24:56', '2019-12-09 07:25:22', 'ADMIN', 'ole'),
(9, 'didi', 'kempot@gmail.com', NULL, '$2y$10$P1SrQ9pXyfYbb1k7cdRkwO0xfwjmd/n33rtTUo/NVGkjT0FeGuj1u', NULL, '2019-12-11 09:47:23', '2019-12-11 09:47:23', 'USER', 'kempot'),
(10, 'kamin', 'ajah@gmail.com', '2019-12-14 10:31:21', '$2y$10$94IQpJ97Gjh0NWX1Optqguf7B5NN9Gk6c6TTFV4PdCC/MKBU1Wrdy', NULL, '2019-12-11 09:48:43', '2019-12-14 10:31:21', 'ADMIN', 'ajah'),
(12, 'ali sadikin', 'ali@gmail.com', '2019-12-14 10:23:05', '$2y$10$Gqt2NXRlFVPCd0oN8.pmiO5Gs.GtxJ/XS1FEtFO74O5ofywGlXrYS', NULL, '2019-12-14 10:22:43', '2019-12-14 10:23:05', 'ADMIN', 'jaka');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `travel_packages`
--
ALTER TABLE `travel_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `travel_packages`
--
ALTER TABLE `travel_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
