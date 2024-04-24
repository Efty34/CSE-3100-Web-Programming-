-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 05:32 PM
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
-- Table structure for table `bundes_liga_clubs`
--

CREATE TABLE `bundes_liga_clubs` (
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
-- Dumping data for table `bundes_liga_clubs`
--

INSERT INTO `bundes_liga_clubs` (`id`, `club_name`, `logo`, `founded_year`, `country`, `social`, `league`, `world_ranking`, `market_value`, `champions_league`, `league_trophy`, `stadium_name`, `capacity`, `stadium_picture`, `manager`, `name1`, `position1`, `name2`, `position2`, `name3`, `position3`, `name4`, `position4`, `name5`, `position5`, `name6`, `position6`, `name7`, `position7`, `name8`, `position8`, `name9`, `position9`, `name10`, `position10`, `name11`, `position11`, `created_at`, `updated_at`) VALUES
(2, 'Bayern Munich', '1713948337_logo.png', '1900', 'Germany', 'https://fcbayern.com/en', 'Bundes Liga', '5', '€929.45m', 6, 73, 'Allianz Arena', 750000, '1713948337_stadium_picture.jpg', 'Thomas Tuchel', 'M. Neuer', 'Goalkeeper', 'Matthijs De Ligt', 'Defender', 'A. Davies', 'Defender', 'Eric Dier', 'Defender', 'R. Guerreiro', 'Defender', 'J. Kimmich', 'Midfielder', 'Jamal Musiala', 'Midfielder', 'Thomas Müller', 'Midfielder', 'Harry Kane', 'Striker', 'Leroy Sané', 'Striker', 'S. Gnabry', 'Striker', '2024-04-24 02:45:37', '2024-04-24 02:45:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bundes_liga_clubs`
--
ALTER TABLE `bundes_liga_clubs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bundes_liga_clubs`
--
ALTER TABLE `bundes_liga_clubs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
