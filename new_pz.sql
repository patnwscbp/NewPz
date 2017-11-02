-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2017 at 09:43 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_pz`
--

-- --------------------------------------------------------

--
-- Table structure for table `s_migrations`
--

CREATE TABLE `s_migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `s_migrations`
--

INSERT INTO `s_migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_28_131210_create_social_accounts_table', 1),
(4, '2017_10_28_131607_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `s_password_resets`
--

CREATE TABLE `s_password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `s_sessions`
--

CREATE TABLE `s_sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8_unicode_ci,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `s_sessions`
--

INSERT INTO `s_sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3VdttioDMuMWDq5NsQnQRitJAdVs1X4pnJnAz1m3', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiS2NQWW14MWpsaWpsQVp3Vm12RmxZcjJKZ1M4MFVtNXBmTERoTGFTTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHA6Ly9sb2NhbGhvc3QvYWRtaW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1509422212),
('43tNP4vHVxJ6TbU5OnBydgPnGR84PBIFXf7KY0JL', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib0tiMjhpcmNDUldPZFNPQmZBdG5tczRVdnc0SHVRaDRSWEJPU1dEbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9sb2NhbGhvc3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1509387138),
('51Ztf8WxK2raSKgnziWsNbv7SPyBQz4Fij3ozrmU', NULL, '192.168.2.244', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0_3 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A432 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMmVkWmRkRVE1UmJHSjlMZVZaUkxvUjN0aHNveXh5d2FjS2dkdE5mNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHA6Ly8xOTIuMTY4LjIuMjQ5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1509468532),
('jAYTWZ92xcAVVQNOhaDdGThczpx9BZArBP9t1ioe', NULL, '192.168.2.244', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0_3 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A432 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN2Z5Q2ZOalAzc0o4NWNEOGNRVHFQeDd4eGo2SlkxS0Q3RlJaeHBYUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xOTIuMTY4LjIuMjQ5L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1509468561),
('KQw4wrc79QbY4aJcN5XQdhfmHISi9L8aEC8dk3Hd', NULL, '192.168.2.244', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0_3 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A432 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaHdRbmw1Z0IwSGZPbmZEVjV3VUo5ZjRoMGxxOGM4NUUwcTBsZm82aiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xOTIuMTY4LjIuMjQ5L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1509468507),
('LOkQXmaATC6SKz91lMcZ9OxIZCtqO3TGr9a2ScWZ', NULL, '192.168.2.244', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0_3 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A432 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicWNYbjRrQVFoVmI4ak41UVZVUjZNZmN6VkRXZEpCVWNqbkRBRDl1VSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xOTIuMTY4LjIuMjQ5L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1509468556),
('p2cisFySbzofNWe5eWbKO3yM2zDPVIj2SDEhNwyl', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMDE2b1drWHAwVGx1bjl2eDNIa1J5eHp1VDQzWWtnMGVoSUN3ZmdubCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9sb2NhbGhvc3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1509612188),
('PB2gkEtmOCKvdjI3jlGii3Tb2ExadQ4Ffsn4gt2t', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36', 'YTozOntzOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoiWUJOWG1kbnFFaDlJRzE5Z2ZFUEFlMHdFc0cyU2ZFMnpMSkdyOE9haCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHA6Ly9sb2NhbGhvc3QvbG9naW4iO319', 1509411276),
('QEb0JRci2DsNq7Y3ztK3nKr64JBy44FWf49uJ85f', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZXdjczlYZ29Nd0hKaEdFVjgyYzZNbHBRVm5Zem9VNnVnY0xvcHdJUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9sb2NhbGhvc3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1509473105),
('r066m4VZtj3W58zvC6AuyAr80OrVMO0goy3dU9QY', NULL, '192.168.2.244', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0_3 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A432 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaGZwRVRGOHlycEtkb0J4VGpSM2kycmtpaDdtUjhjV3BzR1pGMVNqayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xOTIuMTY4LjIuMjQ5L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1509468499),
('rE8UYALMtE83xXEwVNMui3t48nexgoIqcR8i7DWk', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiTWRSdjJtZVA0bGxlWWl2WWF3NWQyQjd1NGQ0bFlzM2kzNXIwWk5XdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHA6Ly9sb2NhbGhvc3QvNDAzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMjoiaHR0cDovL2xvY2FsaG9zdC9hZG1pbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1509446190),
('rjDm99zdHwAXd7tMQ8Acobv44VFYreRym7Bs3q0P', NULL, '192.168.2.244', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0_3 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A432 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYVNIcGxZWFU0azhNRjVxemJlVFZSYXpKNUxJQVYxcGpjRGhac0pkTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHA6Ly8xOTIuMTY4LjIuMjQ5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1509468509),
('rXqkY3ej4tiD2279CUnhA01azvdI8zjYsdregx5f', NULL, '192.168.2.244', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0_3 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A432 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV3RoV3RMQklhek45NExoSmpESlQ0alZ1TGVIbFM4czNTblZxQ2FaNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xOTIuMTY4LjIuMjQ5L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1509468535),
('SGXXvAqFJ38Uv2RJAkUrsQ7iI6j608wrcnH2MLFO', NULL, '192.168.2.244', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0_3 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A432 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNDRrYjBuWFJTWWdyZkxJanpKMUNpZm0xWTZFbWl0TGY1YUhaNDZkVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHA6Ly8xOTIuMTY4LjIuMjQ5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1509468484),
('VSwEAOSVeFIQUL6MD5QiWipBiGUPKiKoUQLB2P2Z', NULL, '192.168.2.244', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0_3 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A432 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRlFSeU1iaWZtanc0U3YyMDNhZEFNRm1id3NyTkt3M3RRR1BHelVkTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHA6Ly8xOTIuMTY4LjIuMjQ5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1509468554),
('ZaXZqyCpubcAqPtbjMnhBWCMv7orMp4ESO1syCuB', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibTcwdEw0WWM3OEJNWnJoanF2bThvUWhlOG5JNWRCOWlwTXBuQzZUdyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMjoiaHR0cDovL2xvY2FsaG9zdC9hZG1pbiI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIyOiJodHRwOi8vbG9jYWxob3N0L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1509431672);

-- --------------------------------------------------------

--
-- Table structure for table `s_social_accounts`
--

CREATE TABLE `s_social_accounts` (
  `user_id` int(11) NOT NULL,
  `provider_user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `s_social_accounts`
--

INSERT INTO `s_social_accounts` (`user_id`, `provider_user_id`, `provider`, `created_at`, `updated_at`) VALUES
(1, '1818682225077637', 'facebook', '2017-10-28 12:26:34', '2017-10-28 12:26:34');

-- --------------------------------------------------------

--
-- Table structure for table `s_users`
--

CREATE TABLE `s_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'client',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `s_users`
--

INSERT INTO `s_users` (`id`, `name`, `email`, `password`, `user_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Patchara Mirit', 'iampatmr@hotmail.com', '$2y$10$j.VozS3f5D33wcAtsVqcduGe6mP7J5xyRt.GX6BH1/kFKjaarPNQ6', 'client', 'vStnRg1o3bDo2ukbLWYetvFFIR3BHVDagSRgvU00EX9zt3wd4X3actyNlJUx', '2017-10-28 12:26:34', '2017-10-28 12:26:34'),
(2, 'Patchara Meerit', 'iampatnws@outlook.com', '$2y$10$QodMpaXuPo4L2Z437fW0re35khbU/q8r/rKg0Ifc6TvEiRFPwEoLu', 'Admin', '2ItbFtnRr0pkozluexkjrASrAqOVDjOov2Pmh4WAxzAKfCESSTdosxSfCP3e', '2017-10-30 07:35:16', '2017-10-30 07:35:16'),
(3, 'PTMR Network', 'contact@patchara.in.th', '$2y$10$H37.PFx7kkm/KfG7Ja9OPulyMpaQKy9x0Cx3fhwYo0oXoU6T2RVg6', 'client', NULL, '2017-10-30 07:35:46', '2017-10-30 07:35:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `s_migrations`
--
ALTER TABLE `s_migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_password_resets`
--
ALTER TABLE `s_password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `s_sessions`
--
ALTER TABLE `s_sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `s_users`
--
ALTER TABLE `s_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `s_migrations`
--
ALTER TABLE `s_migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `s_users`
--
ALTER TABLE `s_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
