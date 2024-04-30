-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 12:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_players`
--

CREATE TABLE `user_players` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `player_name` varchar(255) NOT NULL,
  `player_position` varchar(255) NOT NULL,
  `club_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_players`
--

INSERT INTO `user_players` (`id`, `user_id`, `player_name`, `player_position`, `club_type`, `created_at`, `updated_at`) VALUES
(32, 1, 'Alisson', 'Goalkeeper', 'la_liga', '2024-04-30 00:56:37', '2024-04-30 00:56:37'),
(33, 1, 'V. Van Dijk', 'Defender', 'la_liga', '2024-04-30 00:56:53', '2024-04-30 00:56:53'),
(34, 1, 'William Saliba', 'Defender', 'la_liga', '2024-04-30 00:57:09', '2024-04-30 00:57:09'),
(35, 1, 'Antonio Rüdiger', 'Defender', 'la_liga', '2024-04-30 00:57:22', '2024-04-30 00:57:22'),
(36, 1, 'Matthijs De Ligt', 'Defender', 'la_liga', '2024-04-30 00:57:32', '2024-04-30 00:57:32'),
(37, 1, 'Toni Kroos', 'Midfielder', 'la_liga', '2024-04-30 00:57:55', '2024-04-30 00:57:55'),
(38, 1, 'Martin Ødegaard', 'Midfielder', 'la_liga', '2024-04-30 00:58:08', '2024-04-30 00:58:08'),
(39, 1, 'Jamal Musiala', 'Midfielder', 'la_liga', '2024-04-30 00:58:29', '2024-04-30 00:58:29'),
(40, 1, 'Bukayo Saka', 'Forward', 'la_liga', '2024-04-30 00:58:47', '2024-04-30 00:58:47'),
(41, 1, 'Vinícius Júnior', 'Forward', 'la_liga', '2024-04-30 00:58:59', '2024-04-30 00:58:59'),
(42, 1, 'Harry Kane', 'Forward', 'la_liga', '2024-04-30 00:59:10', '2024-04-30 00:59:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_players`
--
ALTER TABLE `user_players`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_players_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_players`
--
ALTER TABLE `user_players`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_players`
--
ALTER TABLE `user_players`
  ADD CONSTRAINT `user_players_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
