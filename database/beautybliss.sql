-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2024 at 02:42 AM
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
-- Database: `beautybliss`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `judul`, `konten`, `gambar`, `tanggal`) VALUES
(4, 'Blog 1', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, praesentium maiores, quasi ad obcaecati soluta nihil, ex error esse aperiam tempore labore dolor delectus optio accusamus odit dolorem inventore dolores.Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, praesentium maiores, quasi ad obcaecati soluta nihil, ex error esse aperiam tempore labore dolor delectus optio accusamus odit dolorem inventore dolores.</p>\r\n', 'blog (1).webp', '2024-12-01 07:00:09'),
(5, 'blog 2', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, praesentium maiores, quasi ad obcaecati soluta nihil, ex error esse aperiam tempore labore dolor delectus optio accusamus odit dolorem inventore dolores.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, praesentium maiores, quasi ad obcaecati soluta nihil, ex error esse aperiam tempore labore dolor delectus optio accusamus odit dolorem inventore dolores.</p>\r\n', 'blog (2).webp', '2024-12-02 14:15:45'),
(6, 'blog 3', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, praesentium maiores, quasi ad obcaecati soluta nihil, ex error esse aperiam tempore labore dolor delectus optio accusamus odit dolorem inventore dolores.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, praesentium maiores, quasi ad obcaecati soluta nihil, ex error esse aperiam tempore labore dolor delectus optio accusamus odit dolorem inventore dolores.</p>\r\n', 'blog (3).webp', '2024-12-02 15:04:48');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `full_name` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `full_name`, `email`, `message`, `created_at`) VALUES
(4, 'yanti', 'yanti@gmail.com', 'tes', '2024-12-02 13:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `gambar`) VALUES
(7, 'BEAUTEAMOR - Garnier Micellar Cleansing Water Salicylic Blue Skin Care 125ml', 80000.00, 'BEAUTEAMOR - Garnier Micellar Cleansing Water Salicylic Blue Skin Care 125ml(35).png'),
(8, 'FOCALSKIN Porefying Bubble Cleanser Facial Wash Sabun Cuci Muka Membersihkan Komedo 120g', 160000.00, 'FOCALSKIN Porefying Bubble Cleanser Facial Wash Sabun Cuci Muka Membersihkan Komedo 120g(160).png'),
(9, 'Olay Total Effects 7in1 Touch of Foundation BB Cream SPF 15 Niacinamide Skincare Antiaging 50gr(92)', 92000.00, 'Olay Total Effects 7in1 Touch of Foundation BB Cream SPF 15 Niacinamide Skincare Antiaging 50gr(92).png'),
(10, 'Olay Regenerist Set Niacinamide Skincare Antiaging Cream, Serum, Cleanser(398)', 398000.00, 'Olay Regenerist Set Niacinamide Skincare Antiaging Cream, Serum, Cleanser(398).png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(254) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` char(128) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `foto` varchar(50) NOT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `token`, `status`, `foto`, `last_login`) VALUES
(5, 'anjani', '48f55ebf10eeac8b54ea803837eb17ef', 'anjani@gmail.com', 'e130a7e5f5eaf096b580c8026b76eb9b', '1', '', '2024-12-03 08:41:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
