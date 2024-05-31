-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2024 at 04:42 PM
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
-- Table structure for table `tbl_approved`
--

CREATE TABLE `tbl_approved` (
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
  `product_desc` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_approved`
--

INSERT INTO `tbl_approved` (`id`, `brand`, `model`, `chipset`, `ram`, `storage`, `display_size`, `resolution`, `refresh_rate`, `connectivity`, `usb`, `battery`, `os`, `price`, `color`, `product_desc`, `status`, `customer_name`) VALUES
(97, 'Apple', 'iPhone 16 Pro Max', 'A18 Bionic', '12GB', ' 256GB, 512GB, 1TB', '6.9 inches', '3200 x 1440 pixels', '90hz', '5G', 'USB-C', ' 4500mAh', 'iOS 18', '$1,399 (base model)', 'Space Black, Silver, Gold, Midnight Blue', 'The iPhone 16 Pro Max represents the pinnacle of Apple’s innovation, featuring the powerful A18 Bionic chip, a stunning 6.9-inch Super Retina XDR display, and an all-new design with enhanced durability.', '', ''),
(98, 'Infinix', 'Zero Ultra 5G', 'MediaTek Dimensity 9000', '12GB', '256GB', '6.78 inches', '2400 x 1080 pixels', '144hz', '5g', 'Type-C', '4800mAh', 'Cosmic Black, Glacier Blue, Sunset Gold', 'Android 14 with XOS 10', 'Cosmic Black, Glacier Blue, Sunset Gold', 'The Infinix Zero Ultra 5G combines high-end performance with affordability, powered by the MediaTek Dimensity 9000 chipset and 12GB of RAM. ', '', ''),
(99, 'ASUS', 'ROG Phone 9', 'Qualcomm Snapdragon 8 Gen 5', '18GB', '512GB, 1TB', '6.8 inches', ' 2400 x 1080 pixels', '165Hz', '5G, Wi-Fi 6E', 'USB-C', '6500mAh', 'Android 17 with ROG UI', '$1,699 (base model)', 'Phantom Black, Cosmic Blue', 'ROG Phone 9: Unleash your gaming potential with a high-refresh-rate display, advanced cooling system, and customizable gaming features. Designed for hardcore gamers.', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buyproduct`
--

CREATE TABLE `tbl_buyproduct` (
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
  `product_desc` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_buyproduct`
--

INSERT INTO `tbl_buyproduct` (`id`, `brand`, `model`, `chipset`, `ram`, `storage`, `display_size`, `resolution`, `refresh_rate`, `connectivity`, `usb`, `battery`, `os`, `price`, `color`, `product_desc`, `status`, `customer_name`) VALUES
(91, 'Infinix', 'Zero Ultra 5G', 'MediaTek Dimensity 9000', '12GB', '256GB', '6.78 inches', '2400 x 1080 pixels', '144hz', '5g', 'Type-C', '4800mAh', 'Cosmic Black, Glacier Blue, Sunset Gold', 'Android 14 with XOS 10', 'Cosmic Black, Glacier Blue, Sunset Gold', 'The Infinix Zero Ultra 5G combines high-end performance with affordability, powered by the MediaTek Dimensity 9000 chipset and 12GB of RAM. ', '', ''),
(101, 'Infinix', 'Zero Ultra 5G', 'MediaTek Dimensity 9000', '12GB', '256GB', '6.78 inches', '2400 x 1080 pixels', '144hz', '5g', 'Type-C', '4800mAh', 'Cosmic Black, Glacier Blue, Sunset Gold', 'Android 14 with XOS 10', 'Cosmic Black, Glacier Blue, Sunset Gold', 'The Infinix Zero Ultra 5G combines high-end performance with affordability, powered by the MediaTek Dimensity 9000 chipset and 12GB of RAM. ', '0', '');

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
(91, 'Infinix', 'Zero Ultra 5G', 'MediaTek Dimensity 9000', '12GB', '256GB', '6.78 inches', '2400 x 1080 pixels', '144hz', '5g', 'Type-C', '4800mAh', 'Cosmic Black, Glacier Blue, Sunset Gold', 'Android 14 with XOS 10', 'Cosmic Black, Glacier Blue, Sunset Gold', 'The Infinix Zero Ultra 5G combines high-end performance with affordability, powered by the MediaTek Dimensity 9000 chipset and 12GB of RAM. '),
(92, 'Infinix', 'Zero X3 Pro', 'MediaTek Dimensity 3000', '12GB', '512GB', '6.8 inches', '2400 x 1080 pixels', '144Hz', '5G, Wi-Fi 6', 'USB-C', '5500mAh', 'Android 17 with XOS 13', '$899 (base model', 'Cosmic Gray, Aurora Purple, Solar Green', 'Zero X3 Pro: Experience flagship-level performance and versatility with the Zero X3 Pro, featuring a high-refresh-rate display, ample storage, and fast connectivity options. Perfect for power users.'),
(93, 'ASUS', 'ROG Phone 10 Ultimate', 'Qualcomm Snapdragon 8 Gen 6', '18GB', '1TB', '6.9 inches', '2400 x 1080 pixels', '180Hz', '5G, Wi-Fi 6', 'USB-C', '5500mAh', 'Android 17 with XOS 13', '$899 (base model)', 'Cosmic Gray, Aurora Purple, Solar Green', 'Zero X3 Pro: Experience flagship-level performance and versatility with the Zero X3 Pro, featuring a high-refresh-rate display, ample storage, and fast connectivity options. Perfect for power users.'),
(94, 'Samsung', 'Galaxy Note 10 Ultraa', ' Exynos 2200 (Global), Snapdragon 8 Gen 5 (USA)', '12GB', '256GB, 512GB, 1TB', '6.9 inches', '3200 x 1440 pixels', '144Hz', '5G, Wi-Fi 6E', 'USB-C', '4800mAh', 'Android 16 with One UI 8.0', '$1,299 (base model)', 'Mystic Black, Mystic Bronze, Mystic Navy', 'Galaxy Note 10 Ultra: The ultimate productivity tool with a large immersive display, S Pen functionality, and top-tier performance. Ideal for multitaskers and creative professionals.'),
(95, 'ASUS', 'ROG Phone 9', 'Qualcomm Snapdragon 8 Gen 5', '18GB', '512GB, 1TB', '6.8 inches', ' 2400 x 1080 pixels', '165Hz', '5G, Wi-Fi 6E', 'USB-C', '6500mAh', 'Android 17 with ROG UI', '$1,699 (base model)', 'Phantom Black, Cosmic Blue', 'ROG Phone 9: Unleash your gaming potential with a high-refresh-rate display, advanced cooling system, and customizable gaming features. Designed for hardcore gamers.'),
(96, 'Infinix', 'Zero X2', 'MediaTek Dimensity 2000', '10GB', '256GB', '6.7 inches', '2400 x 1080 pixels', '120Hz', '5G, Wi-Fi 6', ' USB-C', '5000mAh', 'Android 16 with XOS 12', ' $799 (base model)', 'Nebula Blue, Stellar Silver, Sunrise Orange', 'A sleek and powerful device with a high-refresh-rate display, impressive camera system, and fast connectivity options. '),
(97, 'Apple', 'iPhone 16 Pro Max', 'A18 Bionic', '12GB', ' 256GB, 512GB, 1TB', '6.9 inches', '3200 x 1440 pixels', '90hz', '5G', 'USB-C', ' 4500mAh', 'iOS 18', '$1,399 (base model)', 'Space Black, Silver, Gold, Midnight Blue', 'The iPhone 16 Pro Max represents the pinnacle of Apple’s innovation, featuring the powerful A18 Bionic chip, a stunning 6.9-inch Super Retina XDR display, and an all-new design with enhanced durability.'),
(98, 'Samsung', 'Galaxy Note 10 Ultraa', ' Exynos 2200 (Global), Snapdragon 8 Gen 5 (USA)', '12GB', '256GB, 512GB, 1TB', '6.9 inches', '3200 x 1440 pixels', '144Hz', '5G, Wi-Fi 6E', 'USB-C', '4800mAh', 'Android 16 with One UI 8.0', '$1,299 (base model)', 'Mystic Black, Mystic Bronze, Mystic Navy', 'Galaxy Note 10 Ultra: The ultimate productivity tool with a large immersive display, S Pen functionality, and top-tier performance. Ideal for multitaskers and creative professionals.'),
(99, 'Infinix', 'Zero Ultra 5G', 'MediaTek Dimensity 9000', '12GB', '256GB', '6.78 inches', '2400 x 1080 pixels', '144hz', '5g', 'Type-C', '4800mAh', 'Cosmic Black, Glacier Blue, Sunset Gold', 'Android 14 with XOS 10', 'Cosmic Black, Glacier Blue, Sunset Gold', 'The Infinix Zero Ultra 5G combines high-end performance with affordability, powered by the MediaTek Dimensity 9000 chipset and 12GB of RAM. ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`) VALUES
(7, 'poorsaken', '$2y$10$GT2.1VTjcN/n3pe/SuGktu5nPvefa1F9gPWucSl3vpuzq47MxHehq'),
(11, 'A9v%r5M3', '$2y$10$hdmtVaBkdg0TcFleKvUcD.M0v9amwZEeky6pjlxAKKgUYi.z9iA4S');

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
(92, 'Infinix', 'Zero X3 Pro', 'MediaTek Dimensity 3000', '12GB', '512GB', '6.8 inches', '2400 x 1080 pixels', '144Hz', '5G, Wi-Fi 6', 'USB-C', '5500mAh', 'Android 17 with XOS 13', '$899 (base model', 'Cosmic Gray, Aurora Purple, Solar Green', 'Zero X3 Pro: Experience flagship-level performance and versatility with the Zero X3 Pro, featuring a high-refresh-rate display, ample storage, and fast connectivity options. Perfect for power users.', 0),
(94, 'Samsung', 'Galaxy Note 10 Ultraa', ' Exynos 2200 (Global), Snapdragon 8 Gen 5 (USA)', '12GB', '256GB, 512GB, 1TB', '6.9 inches', '3200 x 1440 pixels', '144Hz', '5G, Wi-Fi 6E', 'USB-C', '4800mAh', 'Android 16 with One UI 8.0', '$1,299 (base model)', 'Mystic Black, Mystic Bronze, Mystic Navy', 'Galaxy Note 10 Ultra: The ultimate productivity tool with a large immersive display, S Pen functionality, and top-tier performance. Ideal for multitaskers and creative professionals.', 0),
(95, 'ASUS', 'ROG Phone 9', 'Qualcomm Snapdragon 8 Gen 5', '18GB', '512GB, 1TB', '6.8 inches', ' 2400 x 1080 pixels', '165Hz', '5G, Wi-Fi 6E', 'USB-C', '6500mAh', 'Android 17 with ROG UI', '$1,699 (base model)', 'Phantom Black, Cosmic Blue', 'ROG Phone 9: Unleash your gaming potential with a high-refresh-rate display, advanced cooling system, and customizable gaming features. Designed for hardcore gamers.', 0),
(96, 'Infinix', 'Zero X2', 'MediaTek Dimensity 2000', '10GB', '256GB', '6.7 inches', '2400 x 1080 pixels', '120Hz', '5G, Wi-Fi 6', ' USB-C', '5000mAh', 'Android 16 with XOS 12', ' $799 (base model)', 'Nebula Blue, Stellar Silver, Sunrise Orange', 'A sleek and powerful device with a high-refresh-rate display, impressive camera system, and fast connectivity options. ', 0),
(97, 'Apple', 'iPhone 16 Pro Max', 'A18 Bionic', '12GB', ' 256GB, 512GB, 1TB', '6.9 inches', '3200 x 1440 pixels', '90hz', '5G', 'USB-C', ' 4500mAh', 'iOS 18', '$1,399 (base model)', 'Space Black, Silver, Gold, Midnight Blue', 'The iPhone 16 Pro Max represents the pinnacle of Apple’s innovation, featuring the powerful A18 Bionic chip, a stunning 6.9-inch Super Retina XDR display, and an all-new design with enhanced durability.', 0),
(98, 'Samsung', 'Galaxy Note 10 Ultraa', ' Exynos 2200 (Global), Snapdragon 8 Gen 5 (USA)', '12GB', '256GB, 512GB, 1TB', '6.9 inches', '3200 x 1440 pixels', '144Hz', '5G, Wi-Fi 6E', 'USB-C', '4800mAh', 'Android 16 with One UI 8.0', '$1,299 (base model)', 'Mystic Black, Mystic Bronze, Mystic Navy', 'Galaxy Note 10 Ultra: The ultimate productivity tool with a large immersive display, S Pen functionality, and top-tier performance. Ideal for multitaskers and creative professionals.', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_approved`
--
ALTER TABLE `tbl_approved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_buyproduct`
--
ALTER TABLE `tbl_buyproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_deletedproducts`
--
ALTER TABLE `tbl_deletedproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_approved`
--
ALTER TABLE `tbl_approved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `tbl_buyproduct`
--
ALTER TABLE `tbl_buyproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `tbl_deletedproducts`
--
ALTER TABLE `tbl_deletedproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=394;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
