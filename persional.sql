-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2025 at 06:54 PM
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
-- Database: `persional`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashbord`
--

CREATE TABLE `dashbord` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pssword` varchar(255) NOT NULL,
  `rol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dashbord`
--

INSERT INTO `dashbord` (`id`, `username`, `email`, `pssword`, `rol`) VALUES
(1, 'sanjay', 'sanjay36yt@gmail.com', '$2y$10$v8Nj1VX2H.gqh0Tj5c/cKeihv5qAoB94.8k9dXokZD./tvTOCRwPe', 'ad'),
(2, 'gayathri', 'gayu@gmail.com', '$2y$10$vzG6Rb7Nf5eJFB.W4ENjYuJ97/fm0yiTU624QNl133ykb9kljjEnC', 'ad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dashbord`
--
ALTER TABLE `dashbord`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dashbord`
--
ALTER TABLE `dashbord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
