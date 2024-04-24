-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 05:34 PM
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
-- Table structure for table `la_liga_clubs`
--

CREATE TABLE `la_liga_clubs` (
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `la_liga_clubs`
--

INSERT INTO `la_liga_clubs` (`id`, `club_name`, `logo`, `founded_year`, `country`, `social`, `league`, `world_ranking`, `market_value`, `champions_league`, `league_trophy`, `stadium_name`, `capacity`, `stadium_picture`, `manager`, `name1`, `position1`, `name2`, `position2`, `name3`, `position3`, `name4`, `position4`, `name5`, `position5`, `name6`, `position6`, `name7`, `position7`, `name8`, `position8`, `name9`, `position9`, `name10`, `position10`, `name11`, `position11`, `created_at`, `updated_at`) VALUES
(1, 'Real Madrid', '1713470487_logo.png', '1902', 'Spain', 'https://www.realmadrid.com/en-US', 'LaLiga', '2', '€1.04bn', 14, 67, 'Santiago Bernabéu', 84000, '1713470487_stadium_picture.jpg', 'Carlo Ancelotti', 'Thibaut Courtois', 'Goalkeeper', 'Federico Valverde', 'Central Midfielder | CM', 'Antonio Rüdiger', 'Central Defender | CB', 'Rodrygo', 'Second Striker | FW', 'Jude Bellingham', 'Central Midfielder | CAM', 'Toni Kroos', 'Attacking Midfielder | CM', 'Date of Birth', 'Full Back | FB', 'Aurélien Tchouaméni', 'Central Midfielder | CM', 'Vinicius Junior', 'Winger | FW', 'Luka Modric', 'Attack - Left Winger', 'Eduardo Camavinga', 'Central Midfielder | CM', '2024-04-18 14:01:27', '2024-04-23 23:06:29'),
(2, 'FC Barcelona', '1713728159_logo.png', '1899', 'Spain', 'https://www.fcbarcelona.com/en/', 'LaLiga', '8', '€839.50m', 5, 76, 'Camp Nou', 50000, '1713728159_stadium_picture.jpg', 'Xavi', 'Lamine Yamal', 'Forward', 'Raphinha', 'Forward', 'Robert Lewandowski', 'Forward', 'Pedri', 'Forward', 'Ferran Torres', 'Forward', 'Aleix Garrido', 'Midfielder', 'Fermin Lopez', 'Midfielder', 'Marc-Andre ter Stegen', 'Goalkeeper', 'Joao Cancelo', 'Defender', 'Gavi', 'Midfielder', 'Marc Casado', 'Defender', '2024-04-21 13:35:59', '2024-04-21 13:35:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `la_liga_clubs`
--
ALTER TABLE `la_liga_clubs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `la_liga_clubs`
--
ALTER TABLE `la_liga_clubs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
