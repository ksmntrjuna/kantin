-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 05:51 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kantin`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `food_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` enum('pending','completed') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `price`, `food_id`, `quantity`, `status`, `created_at`) VALUES
(1, '', '0.00', 0, 1, 'pending', '2023-07-06 13:16:16'),
(2, '', '0.00', 0, 1, 'pending', '2023-07-06 13:27:27'),
(3, '', '0.00', 0, 1, 'pending', '2023-07-06 13:27:53'),
(4, '', '0.00', 0, 1, 'pending', '2023-07-06 13:29:49'),
(5, '', '0.00', 0, 1, 'pending', '2023-07-06 13:35:47'),
(6, '', '0.00', 0, 1, 'pending', '2023-07-06 13:37:03'),
(7, '', '0.00', 0, 2, 'pending', '2023-07-06 13:39:13'),
(8, '', '0.00', 0, 1, 'pending', '2023-07-06 13:49:47'),
(9, '', '0.00', 0, 1, 'pending', '2023-07-06 13:50:49'),
(10, '', '0.00', 0, 1, 'pending', '2023-07-06 13:51:25'),
(11, '', '0.00', 0, 1, 'pending', '2023-07-06 13:59:51'),
(12, '', '0.00', 0, 9, 'pending', '2023-07-06 14:00:05'),
(13, '', '0.00', 0, 1, 'pending', '2023-07-06 14:03:55'),
(14, '', '0.00', 0, 1, 'pending', '2023-07-06 14:04:01'),
(15, '', '0.00', 0, 1, 'pending', '2023-07-06 14:09:47'),
(16, '', '0.00', 0, 1, 'pending', '2023-07-06 14:10:40'),
(17, '', '0.00', 0, 1, 'pending', '2023-07-06 14:11:33'),
(18, '', '0.00', 0, 11, 'pending', '2023-07-06 14:13:35'),
(19, '', '0.00', 0, 11, 'pending', '2023-07-06 14:14:57'),
(20, '', '0.00', 0, 11, 'pending', '2023-07-06 14:15:39'),
(21, 'kentang ', '5000.00', 40, 11, 'pending', '2023-07-06 14:19:50'),
(22, 'kentang ', '5000.00', 40, 11, 'pending', '2023-07-06 14:20:14'),
(23, 'kentang ', '5000.00', 40, 11, 'pending', '2023-07-06 14:20:21'),
(24, 'kentang ', '5000.00', 40, 1, 'pending', '2023-07-06 14:20:41'),
(25, 'kentang ', '5000.00', 40, 1, 'pending', '2023-07-06 14:23:24'),
(26, 'kentang ', '5000.00', 40, 1, 'pending', '2023-07-06 14:23:56'),
(27, 'kentang ', '5000.00', 40, 1, 'pending', '2023-07-06 14:25:15'),
(28, 'kentang ', '5000.00', 40, 1, 'pending', '2023-07-06 14:33:07'),
(29, 'kopi', '4000.00', 45, 1, 'pending', '2023-07-06 14:33:22'),
(30, 'kentang ', '5000.00', 40, 6, 'pending', '2023-07-06 14:34:10'),
(31, 'sate', '10000.00', 41, 6, 'pending', '2023-07-06 14:34:24'),
(32, 'bakso', '10000.00', 42, 11, 'pending', '2023-07-06 14:34:40'),
(33, 'kentang ', '5000.00', 40, 11111, 'pending', '2023-07-06 14:36:36'),
(34, 'kentang ', '5000.00', 40, 9, 'pending', '2023-07-06 14:41:12'),
(35, 'sate', '10000.00', 41, 1, 'pending', '2023-07-06 14:41:23'),
(36, 'kentang ', '5000.00', 40, 5, 'pending', '2023-07-06 14:42:30'),
(37, 'sate', '10000.00', 41, 111, 'pending', '2023-07-06 14:42:42'),
(38, 'mie rebus', '6000.00', 46, 3, 'pending', '2023-07-06 14:44:59'),
(39, 'bakso', '10000.00', 42, 2, 'pending', '2023-07-06 14:45:25'),
(40, 'bakso', '10000.00', 42, 2, 'pending', '2023-07-06 14:46:08'),
(41, 'kentang ', '5000.00', 40, 2, 'pending', '2023-07-06 14:56:58'),
(42, 'kentang ', '5000.00', 40, 23, 'pending', '2023-07-06 15:07:19'),
(43, 'kentang ', '5000.00', 40, 23, 'pending', '2023-07-06 15:08:05'),
(44, 'kentang ', '5000.00', 40, 23, 'pending', '2023-07-06 15:08:44'),
(45, 'kentang ', '5000.00', 40, 23, 'pending', '2023-07-06 15:08:59'),
(46, 'kentang ', '5000.00', 40, 23, 'pending', '2023-07-06 15:10:12'),
(47, 'kentang ', '5000.00', 40, 2, 'pending', '2023-07-06 15:10:21'),
(48, 'kentang ', '5000.00', 40, 3, 'pending', '2023-07-06 15:11:08'),
(49, 'kentang ', '5000.00', 40, 3, 'pending', '2023-07-06 15:15:19'),
(50, 'kentang ', '5000.00', 40, 3, 'pending', '2023-07-06 15:15:59'),
(51, 'kentang ', '5000.00', 40, 3, 'pending', '2023-07-06 15:16:02'),
(52, 'kentang ', '5000.00', 40, 3, 'pending', '2023-07-06 15:16:29'),
(53, 'kentang ', '5000.00', 40, 3, 'pending', '2023-07-06 15:16:35'),
(54, 'kentang ', '5000.00', 40, 3, 'pending', '2023-07-06 15:18:14'),
(55, 'kentang ', '5000.00', 40, 3, 'pending', '2023-07-06 15:19:12'),
(56, 'kentang ', '5000.00', 40, 3, 'pending', '2023-07-06 15:19:20'),
(57, 'sate', '10000.00', 41, 5, 'pending', '2023-07-06 15:19:28'),
(58, 'bakso', '10000.00', 42, 4, 'pending', '2023-07-06 15:19:39'),
(59, 'bakso', '10000.00', 42, 4, 'pending', '2023-07-06 15:20:31'),
(60, 'bakso', '10000.00', 42, 4, 'pending', '2023-07-06 15:24:44'),
(61, 'mie goreng', '7000.00', 47, 34, 'pending', '2023-07-06 15:24:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
