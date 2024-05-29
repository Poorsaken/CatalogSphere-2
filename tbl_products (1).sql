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
  `refresh_rate` varchar(255) NOT NULL,
  `connectivity` varchar(155) NOT NULL,
  `usb` varchar(255) NOT NULL,
  `battery` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `color` varchar(50) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `brand`, `model`, `chipset`, `ram`, `storage`, `display_size`, `resolution`, `refresh_rate`, `connectivity`, `usb`, `battery`, `os`, `price`, `color`, `product_desc`, `status`) VALUES
(387, 'Apple', 'iphone 17 Pro Max', 'A19 Bionic', '8GB', '128GB, 256GB, 512GB', '6.5 inches', '2778 x 1284 pixels', '144hz', '5G-ready', 'Lightning', '4000mAh', 'iOS 19', '$999 (base model)', 'Graphite, Silver, Gold, Blue', 'iPhone 17: Sleek design, powerful performance, and enhanced camera capabilities. Perfect for everyday use and photography enthusiasts.', 0),
(388, 'Apple', 'iPhone 18 Pro', 'A20 Bionic', '10GB', '128GB, 256GB, 512GB', '6.7 inches', '2778 x 1284 pixels', '120Hz', '5G, Wi-Fi 6E', 'Lightning', '4200mAh', 'iOS 20', '$1,099 (base model)', 'Midnight Black, Silver Frost, Rose Gold', 'iPhone 18 Pro: A powerhouse with a stunning ProMotion display, advanced camera system, and seamless connectivity. Perfect for professionals and tech enthusiasts.', 0),
(389, 'Samsung', 'Galaxy Note 10 Ultra', ' Exynos 2200 (Global), Snapdragon 8 Gen 5 (USA)', '12GB', '256GB, 512GB, 1TB', '6.9 inches', '3200 x 1440 pixels', '144Hz', '5G, Wi-Fi 6E', 'USB-C', '4800mAh', 'Android 16 with One UI 8.0', '$1,299 (base model)', 'Mystic Black, Mystic Bronze, Mystic Navy', 'Galaxy Note 10 Ultra: The ultimate productivity tool with a large immersive display, S Pen functionality, and top-tier performance. Ideal for multitaskers and creative professionals.', 0),
(390, 'ASUS', 'ROG Phone 9', 'Qualcomm Snapdragon 8 Gen 5', '18GB', '512GB, 1TB', '6.8 inches', ' 2400 x 1080 pixels', '165Hz', '5G, Wi-Fi 6E', 'USB-C', '6500mAh', 'Android 17 with ROG UI', '$1,699 (base model)', 'Phantom Black, Cosmic Blue', 'ROG Phone 9: Unleash your gaming potential with a high-refresh-rate display, advanced cooling system, and customizable gaming features. Designed for hardcore gamers.', 0),
(391, 'Infinix', 'Zero X2', 'MediaTek Dimensity 2000', '10GB', '256GB', '6.7 inches', '2400 x 1080 pixels', '120Hz', '5G, Wi-Fi 6', ' USB-C', '5000mAh', 'Android 16 with XOS 12', ' $799 (base model)', 'Nebula Blue, Stellar Silver, Sunrise Orange', 'A sleek and powerful device with a high-refresh-rate display, impressive camera system, and fast connectivity options. ', 0),
(392, 'Infinix', 'Zero X3 Pro', 'MediaTek Dimensity 3000', '12GB', '512GB', '6.8 inches', '2400 x 1080 pixels', '144Hz', '5G, Wi-Fi 6', 'USB-C', '5500mAh', 'Android 17 with XOS 13', '$899 (base model', 'Cosmic Gray, Aurora Purple, Solar Green', 'Zero X3 Pro: Experience flagship-level performance and versatility with the Zero X3 Pro, featuring a high-refresh-rate display, ample storage, and fast connectivity options. Perfect for power users.', 0),
(393, 'ASUS', 'ROG Phone 10 Ultimate', 'Qualcomm Snapdragon 8 Gen 6', '18GB', '1TB', '6.9 inches', '2400 x 1080 pixels', '180Hz', '5G, Wi-Fi 6', 'USB-C', '5500mAh', 'Android 17 with XOS 13', '$899 (base model)', 'Cosmic Gray, Aurora Purple, Solar Green', 'Zero X3 Pro: Experience flagship-level performance and versatility with the Zero X3 Pro, featuring a high-refresh-rate display, ample storage, and fast connectivity options. Perfect for power users.', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=394;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
