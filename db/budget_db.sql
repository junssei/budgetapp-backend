-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2025 at 06:44 PM
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
-- Database: `budget_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `budget_table`
--

CREATE TABLE `budget_table` (
  `id` int(11) NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `budget_table`
--

INSERT INTO `budget_table` (`id`, `amount`) VALUES
(1, 0),
(2, 10),
(3, 69),
(4, 0),
(5, 100),
(6, 0),
(7, 6900),
(8, 0),
(9, 0),
(10, 600),
(11, 200),
(12, 100),
(13, 0),
(14, 0),
(15, 0),
(16, 0),
(17, 0),
(18, 0),
(19, 100),
(20, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `expenses_table`
--

CREATE TABLE `expenses_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expenses_table`
--

INSERT INTO `expenses_table` (`id`, `name`, `description`, `amount`) VALUES
(1, '50', 'Jolibee', 50),
(2, '5900', 'Google', 5900),
(3, '300', 'Burger', 300),
(4, '300', 'Burger', 300),
(5, '300', 'Burger', 300),
(6, '200', '', 200),
(7, '500', 'Burger', 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budget_table`
--
ALTER TABLE `budget_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses_table`
--
ALTER TABLE `expenses_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budget_table`
--
ALTER TABLE `budget_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `expenses_table`
--
ALTER TABLE `expenses_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
