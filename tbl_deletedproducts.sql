-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2024 at 06:30 PM
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
-- Table structure for table `tbl_deletedproducts`
--

CREATE TABLE `tbl_deletedproducts` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `chipset` varchar(255) NOT NULL,
  `ram` varchar(50) NOT NULL,
  `storage` varchar(255) NOT NULL,
  `display_size` varchar(255) NOT NULL,
  `resolution` varchar(255) NOT NULL,
  `refresh_rate` varchar(255) NOT NULL,
  `connectivity` varchar(255) NOT NULL,
  `usb` varchar(255) NOT NULL,
  `battery` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `color` varchar(50) NOT NULL,
  `product_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_deletedproducts`
--

INSERT INTO `tbl_deletedproducts` (`id`, `brand`, `model`, `chipset`, `ram`, `storage`, `display_size`, `resolution`, `refresh_rate`, `connectivity`, `usb`, `battery`, `os`, `price`, `color`, `product_desc`) VALUES
(90, 'Apple', 'iPhone 16 Pro Max', 'A18 Bionic', '12GB', ' 256GB, 512GB, 1TB', '6.9 inches', '3200 x 1440 pixels', '90hz', '5G', 'USB-C', ' 4500mAh', 'iOS 18', '$1,399 (base model)', 'Space Black, Silver, Gold, Midnight Blue', 'The iPhone 16 Pro Max represents the pinnacle of Apple’s innovation, featuring the powerful A18 Bionic chip, a stunning 6.9-inch Super Retina XDR display, and an all-new design with enhanced durability.'),
(91, 'Infinix', 'Zero Ultra 5G', 'MediaTek Dimensity 9000', '12GB', '256GB', '6.78 inches', '2400 x 1080 pixels', '144hz', '5g', 'Type-C', '4800mAh', 'Cosmic Black, Glacier Blue, Sunset Gold', 'Android 14 with XOS 10', 'Cosmic Black, Glacier Blue, Sunset Gold', 'The Infinix Zero Ultra 5G combines high-end performance with affordability, powered by the MediaTek Dimensity 9000 chipset and 12GB of RAM. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_deletedproducts`
--
ALTER TABLE `tbl_deletedproducts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_deletedproducts`
--
ALTER TABLE `tbl_deletedproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
