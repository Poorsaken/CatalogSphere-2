-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 04:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kayeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `chipset` varchar(155) NOT NULL,
  `ram` varchar(50) NOT NULL,
  `storage` varchar(50) NOT NULL,
  `display_size` varchar(255) NOT NULL,
  `resolution` varchar(255) NOT NULL,
  `usb` varchar(255) NOT NULL,
  `battery` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `color` varchar(50) NOT NULL,
  `product_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `brand`, `model`, `chipset`, `ram`, `storage`, `display_size`, `resolution`, `usb`, `battery`, `os`, `price`, `color`, `product_desc`) VALUES
(177, 'Samsun', 'A54', 'Samsung Exynos 1380: Octa-core', ' 8 GB RAM', '128 GB ROM', '6.4 inches Super AMOLED', '2340 x 1080p Resolution (403 PPI)', 'Type-C', ' 5,000mAh Li-Po Battery, non-removable', 'Android 13, One UI 5.1', '18,000', 'Coal Black', 'ASDASDFDSF'),
(184, 'Samsun', 'A54', 'Samsung Exynos 1380: Octa-core', ' 8 GB RAM', '128 GB ROM', '6.4 inches Super AMOLED', '2340 x 1080p Resolution (403 PPI)', 'Type-C', ' 5,000mAh Li-Po Battery, non-removable', 'Android 13, One UI 5.1', '18,000', 'Coal Black', 'ASDASDFDSF'),
(185, 'Samsun', 'A54', 'Samsung Exynos 1380: Octa-core', ' 8 GB RAM', '128 GB ROM', '6.4 inches Super AMOLED', '2340 x 1080p Resolution (403 PPI)', 'Type-C', ' 5,000mAh Li-Po Battery, non-removable', 'Android 13, One UI 5.1', '18,000', 'Coal Black', 'ASDASDFDSF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
