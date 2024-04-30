-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 08:33 AM
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
-- Table structure for table `seria_a_clubs`
--

CREATE TABLE `seria_a_clubs` (
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
-- Dumping data for table `seria_a_clubs`
--

INSERT INTO `seria_a_clubs` (`id`, `club_name`, `logo`, `founded_year`, `country`, `social`, `league`, `world_ranking`, `market_value`, `champions_league`, `league_trophy`, `stadium_name`, `capacity`, `stadium_picture`, `manager`, `name1`, `position1`, `name2`, `position2`, `name3`, `position3`, `name4`, `position4`, `name5`, `position5`, `name6`, `position6`, `name7`, `position7`, `name8`, `position8`, `name9`, `position9`, `name10`, `position10`, `name11`, `position11`, `created_at`, `updated_at`) VALUES
(2, 'AC Milan', '1713957478_logo.png', '1899', 'Italy', 'https://www.acmilan.com/en', 'Seria A', '25', '€533.45m', 7, 39, 'Giuseppe Meazza', 76000, '1713957478_stadium_picture.jpg', 'Stefano Pioli', 'M. Maignan', 'Goalkeeper', 'Theo Hernández', 'Defender', 'Fikayo Tomori', 'Defender', 'D. Calabria', 'Defender', 'Simon Kjær', 'Defender', 'T. Reijnders', 'Midfielder', 'R. Loftus-Cheek', 'Midfielder', 'Ismael Bennacer', 'Midfielder', 'Rafael Leão', 'Forward', 'O. Giroud', 'Forward', 'C. Pulišić', 'Forward', '2024-04-24 05:17:58', '2024-04-30 00:32:11'),
(3, 'Inter Millan', '1714408086_logo.png', 'Mar 9, 1908', 'Italy', 'https://www.inter.it/en', 'Seria A', '4', '€563.35m', 1, 37, 'Giuseppe Meazza', 76000, '1714408086_stadium_picture.jpg', 'Simone Inzaghi', 'Emil Audero', 'Goalkeeper', 'Alessandro Bastoni', 'Defender', 'Benjamin Pavard', 'Defender', 'Stefan de Vrij', 'Defender', 'Yann Bisseck', 'Defender', 'Hakan Calhanoglu', 'Midfielder', 'Kristjan Asllani', 'Midfielder', 'Davide Frattesi', 'Midfielder', 'Lautaro Martínez', 'Forward', 'Marcus Thuram', 'Forward', 'Marko Arnautović', 'Forward', '2024-04-29 10:28:06', '2024-04-30 00:32:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `seria_a_clubs`
--
ALTER TABLE `seria_a_clubs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seria_a_clubs`
--
ALTER TABLE `seria_a_clubs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
