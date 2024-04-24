-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 05:33 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Goku', 'goku@abc.com', NULL, '$2y$12$2DWj7LIL.JA9YGTYMdxCv.LEjNAxoSN2vwR.doe2ggxe6yg8Kg8Sa', 0, NULL, '2024-04-18 04:16:12', '2024-04-18 04:16:12'),
(2, 'Vegeta', 'vegeta@abc.com', NULL, '$2y$12$bHzJEiRZkkOHEzIwCAamhulE3gLcfPy1NZfkPQ2hqic/KSeo3fRUC', 0, NULL, '2024-04-18 04:37:45', '2024-04-18 04:37:45'),
(3, 'Gohan', 'gohan@gmail.com', NULL, '$2y$12$7Ns3nBNjaYqIpn/s8Zf/3.tpCPPnemX1paSR8ZP/rzeuT.eNSUNPC', 0, NULL, '2024-04-18 05:01:44', '2024-04-18 05:01:44'),
(4, 'Krilin', 'krilin@gmail.com', NULL, '$2y$12$shIR6EVWcGkYh.iIprs9COyFNuz0Qb6sq9YYs3BF5deTLIqNU4hhC', 0, NULL, '2024-04-18 05:05:58', '2024-04-18 05:05:58'),
(5, 'Boo', 'boo@gmail.com', NULL, '$2y$12$t6iYqIR/mspCG9oSciN5y.QtkozxodMLh0ojwTZZ.rZxslF8c1.FS', 0, NULL, '2024-04-18 05:07:33', '2024-04-18 05:07:33'),
(6, 'Phantom6', 'admin@admin.com', NULL, '$2y$12$ZmXzAhJaWwplVbddW2kfi.TniLFI2rDXb5ff0T1cN5vQEU2BUOVFS', 1, NULL, '2024-04-18 06:01:33', '2024-04-18 06:01:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
