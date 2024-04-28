-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2024 at 08:18 AM
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_image`, `product_id`, `product_price`, `created_at`, `updated_at`) VALUES
(1, 'Adidas X12', '1713960382_product.jpg', 'Ads B#x12', 100, '2024-04-24 06:06:22', '2024-04-24 06:41:46'),
(3, 'Nike Phantom', '1713962336_product.jpg', 'NP B#12', 110, '2024-04-24 06:38:56', '2024-04-24 06:41:53'),
(4, 'Adidas Predator', '1713962417_product.jpg', 'Ads B#21', 150, '2024-04-24 06:40:17', '2024-04-24 06:42:00'),
(5, 'Adidas AFB', '1713962497_product.jpg', 'Ads FB#25', 50, '2024-04-24 06:41:37', '2024-04-28 00:00:24'),
(6, 'Wilson Elite', '1713962565_product.jpg', 'Wis FB#wi89', 45, '2024-04-24 06:42:45', '2024-04-24 15:58:36'),
(7, 'Adidas Prime', '1714284790_product.jpg', 'Ads B#45f', 200, '2024-04-28 00:13:10', '2024-04-28 00:13:10'),
(8, 'Nike Air', '1714284826_product.jpg', 'Nik B#rf3', 180, '2024-04-28 00:13:46', '2024-04-28 00:13:46'),
(9, 'NB Light', '1714284855_product.jpg', 'NB #9I0', 170, '2024-04-28 00:14:15', '2024-04-28 00:14:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
