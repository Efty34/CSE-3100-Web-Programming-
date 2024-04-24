-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 11:32 PM
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
(5, 1, 'Alisson', 'Goalkeeper', 'la_liga', '2024-04-24 15:29:39', '2024-04-24 15:29:39'),
(6, 1, 'V. Van Dijk', 'Defender', 'la_liga', '2024-04-24 15:29:54', '2024-04-24 15:29:54'),
(7, 1, 'Casemiro', 'Midfielder', 'la_liga', '2024-04-24 15:30:12', '2024-04-24 15:30:12'),
(8, 1, 'J. Kimmich', 'Midfielder', 'la_liga', '2024-04-24 15:30:29', '2024-04-24 15:30:29'),
(9, 1, 'Jamal Musiala', 'Midfielder', 'la_liga', '2024-04-24 15:30:34', '2024-04-24 15:30:34'),
(10, 1, 'Toni Kroos', 'Attacking Midfielder | CM', 'la_liga', '2024-04-24 15:31:01', '2024-04-24 15:31:01'),
(11, 1, 'Jude Bellingham', 'Central Midfielder | CAM', 'la_liga', '2024-04-24 15:31:05', '2024-04-24 15:31:05'),
(12, 1, 'Luka Modric', 'Attack - Left Winger', 'la_liga', '2024-04-24 15:31:09', '2024-04-24 15:31:09'),
(13, 1, 'Joao Cancelo', 'Defender', 'la_liga', '2024-04-24 15:31:27', '2024-04-24 15:31:27'),
(14, 1, 'Raphinha', 'Forward', 'la_liga', '2024-04-24 15:31:30', '2024-04-24 15:31:30'),
(15, 1, 'A. Davies', 'Defender', 'la_liga', '2024-04-24 15:31:44', '2024-04-24 15:31:44');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
