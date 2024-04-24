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
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `birth_date` varchar(255) NOT NULL,
  `birth_place` varchar(255) NOT NULL,
  `social` varchar(255) NOT NULL,
  `preferred_foot` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `market_value` varchar(255) NOT NULL,
  `outfitter` varchar(255) NOT NULL,
  `career_goals` int(11) NOT NULL,
  `world_cups` int(11) NOT NULL,
  `continental_cups` int(11) NOT NULL,
  `ballon_dors` int(11) NOT NULL,
  `champions_league` int(11) NOT NULL,
  `league_titles` int(11) NOT NULL,
  `club_debut` varchar(255) NOT NULL,
  `current_club` varchar(255) NOT NULL,
  `previous_clubs` varchar(255) NOT NULL,
  `national_team` varchar(255) NOT NULL,
  `national_debut` varchar(255) NOT NULL,
  `overall` int(11) NOT NULL,
  `pace` int(11) NOT NULL,
  `shooting` int(11) NOT NULL,
  `passing` int(11) NOT NULL,
  `dribbling` int(11) NOT NULL,
  `defending` int(11) NOT NULL,
  `physical` int(11) NOT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `first_name`, `last_name`, `position`, `profile_image`, `birth_date`, `birth_place`, `social`, `preferred_foot`, `height`, `market_value`, `outfitter`, `career_goals`, `world_cups`, `continental_cups`, `ballon_dors`, `champions_league`, `league_titles`, `club_debut`, `current_club`, `previous_clubs`, `national_team`, `national_debut`, `overall`, `pace`, `shooting`, `passing`, `dribbling`, `defending`, `physical`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `created_at`, `updated_at`) VALUES
(1, 'Lionel', 'Messi', 'Attack - Right Winger', '1713456281_profile.jpg', 'Jun 24, 1987 (36)', 'Rosario, Argentina', 'https://www.instagram.com/leomessi', 'Left', '1.7m', '€30.00m', 'Adidas', 727, 1, 1, 8, 4, 34, 'November 2003', 'Inter Miami', 'Fc Barcelona, Paris Saint Germain', 'Argentina', 'Aug 17, 2005', 90, 80, 84, 90, 94, 33, 64, '1713456281_photo1.jpg', '1713456281_photo2.jpg', '1713456281_photo3.jpg', '1713456281_photo4.jpg', '1713456281_photo5.jpg', '2024-04-18 10:04:41', '2024-04-18 10:04:41'),
(3, 'Cristiano', 'Ronaldo', 'Attack - Centre-Forward', '1713463305_profile.jpg', 'Feb 5, 1985 (39)', 'Funchal, Portugal', 'https://www.instagram.com/cristiano', 'Right', '1.88m', '€15.00m', 'Nike', 751, 0, 1, 5, 5, 25, '2002', 'Al-Nassr', 'Real Madrid, Manchester United, Juventus', 'Portugal', 'Aug 20, 2003', 88, 85, 90, 77, 84, 35, 75, '1713463305_photo1.jpg', '1713463305_photo2.jpg', '1713463305_photo3.jpg', '1713463305_photo4.jpg', '1713463305_photo5.jpg', '2024-04-18 12:01:45', '2024-04-18 12:01:45'),
(4, 'Neymar da Silva Santos', 'Júnior', 'Attack - Left Winger', '1713466475_profile.jpg', 'Feb 5, 1992 (32)', 'Mogi das Cruzes, Brazil', 'https://www.instagram.com/neymarjr', 'Right', '1.75m', '€45.00m', 'Puma', 297, 0, 1, 0, 1, 18, '2009', 'Al-Hilal', 'Fc Barcelona, Paris Saint Germain', 'Brazil', 'Aug 10, 2010', 89, 86, 83, 85, 93, 37, 61, '1713466475_photo1.jpg', '1713466475_photo2.jpg', '1713466475_photo3.jpg', '1713466475_photo4.jpg', '1713466475_photo5.jpg', '2024-04-18 12:54:35', '2024-04-18 12:54:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
