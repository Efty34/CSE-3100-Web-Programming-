-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2024 at 10:52 PM
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
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `club_name` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `founded_year` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `social` varchar(255) NOT NULL,
  `league` varchar(255) NOT NULL,
  `world_ranking` varchar(255) NOT NULL,
  `market_value` varchar(255) NOT NULL,
  `champions_league` int(11) NOT NULL,
  `league_trophy` int(11) NOT NULL,
  `stadium_name` varchar(255) NOT NULL,
  `capacity` int(11) NOT NULL,
  `stadium_picture` varchar(255) DEFAULT NULL,
  `manager` varchar(255) NOT NULL,
  `name1` varchar(255) NOT NULL,
  `position1` varchar(255) NOT NULL,
  `name2` varchar(255) NOT NULL,
  `position2` varchar(255) NOT NULL,
  `name3` varchar(255) NOT NULL,
  `position3` varchar(255) NOT NULL,
  `name4` varchar(255) NOT NULL,
  `position4` varchar(255) NOT NULL,
  `name5` varchar(255) NOT NULL,
  `position5` varchar(255) NOT NULL,
  `name6` varchar(255) NOT NULL,
  `position6` varchar(255) NOT NULL,
  `name7` varchar(255) NOT NULL,
  `position7` varchar(255) NOT NULL,
  `name8` varchar(255) NOT NULL,
  `position8` varchar(255) NOT NULL,
  `name9` varchar(255) NOT NULL,
  `position9` varchar(255) NOT NULL,
  `name10` varchar(255) NOT NULL,
  `position10` varchar(255) NOT NULL,
  `name11` varchar(255) NOT NULL,
  `position11` varchar(255) NOT NULL,
  `league_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`id`, `club_name`, `logo`, `founded_year`, `country`, `social`, `league`, `world_ranking`, `market_value`, `champions_league`, `league_trophy`, `stadium_name`, `capacity`, `stadium_picture`, `manager`, `name1`, `position1`, `name2`, `position2`, `name3`, `position3`, `name4`, `position4`, `name5`, `position5`, `name6`, `position6`, `name7`, `position7`, `name8`, `position8`, `name9`, `position9`, `name10`, `position10`, `name11`, `position11`, `league_id`, `created_at`, `updated_at`) VALUES
(4, 'Paris Saint-Germain', '1714596148_logo.png', 'Aug 12, 1970', 'France', 'https://en.psg.fr/', 'Ligue 1', '19', '€1.07b', 0, 46, 'Parc des Princes', 50000, '1714596148_stadium_picture.jpg', 'Christophe Galtier', 'Gianluigi Donnarumma', 'Goalkeeper', 'Marquinhos', 'Defender', 'Lucas Hernández', 'Defender', 'Achraf Hakimi', 'Defender', 'Presnel Kimpembe', 'Defender', 'Vitinha', 'Midfielder', 'Marco Asensio', 'Midfielder', 'Manuel Ugarte', 'Midfielder', 'Ousmane Dembélé', 'Forward', 'Kylian Mbappé', 'Forward', 'Bradley Barcola', 'Forward', 1, '2024-05-01 14:42:28', '2024-05-01 14:42:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clubs_league_id_foreign` (`league_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clubs`
--
ALTER TABLE `clubs`
  ADD CONSTRAINT `clubs_league_id_foreign` FOREIGN KEY (`league_id`) REFERENCES `leagues` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
