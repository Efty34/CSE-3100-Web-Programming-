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
-- Table structure for table `epl_clubs`
--

CREATE TABLE `epl_clubs` (
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
-- Dumping data for table `epl_clubs`
--

INSERT INTO `epl_clubs` (`id`, `club_name`, `logo`, `founded_year`, `country`, `social`, `league`, `world_ranking`, `market_value`, `champions_league`, `league_trophy`, `stadium_name`, `capacity`, `stadium_picture`, `manager`, `name1`, `position1`, `name2`, `position2`, `name3`, `position3`, `name4`, `position4`, `name5`, `position5`, `name6`, `position6`, `name7`, `position7`, `name8`, `position8`, `name9`, `position9`, `name10`, `position10`, `name11`, `position11`, `created_at`, `updated_at`) VALUES
(2, 'Manchester United', '1713943169_logo.png', '1878', 'England', 'https://www.manutd.com/', 'English Premier League', '18', '€734.25m', 3, 62, 'Old Trafford', 75000, '1713943169_stadium_picture.jpg', 'Erik ten Hag', 'André Onana', 'Goalkeeper', 'R. Varane', 'Defender', 'Harry Maguire', 'Defender', 'Luke Shaw', 'Defender', 'Lisandro Martínez', 'Defender', 'Bruno Fernandes', 'Midfielder', 'Casemiro', 'Midfielder', 'Mason Mount', 'Midfielder', 'M. Rashford', 'Striker', 'A. Garnacho', 'Striker', 'A. Martial', 'Striker', '2024-04-24 01:19:29', '2024-04-24 01:19:29'),
(3, 'Liverpool FC', '1713943658_logo.png', '1892', 'England', 'https://www.liverpoolfc.com/', 'English Premier League', '12', '€921.40m', 6, 57, 'Anfield', 60000, '1713943658_stadium_picture.jpg', 'Jürgen Klopp', 'Alisson', 'Goalkeeper', 'V. Van Dijk', 'Defender', 'Alexander-Arnold', 'Defender', 'A. Robertson', 'Defender', 'Joël Matip', 'Defender', 'A. Mac Allister', 'Midfielder', 'Thiago', 'Midfielder', 'Harvey Elliott', 'Midfielder', 'M. Salah', 'Striker', 'Darwin Núñez', 'Striker', 'Luis Díaz', 'Striker', '2024-04-24 01:27:38', '2024-04-24 01:27:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `epl_clubs`
--
ALTER TABLE `epl_clubs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `epl_clubs`
--
ALTER TABLE `epl_clubs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
