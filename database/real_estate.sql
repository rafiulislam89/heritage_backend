-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2024 at 09:29 PM
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
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `property_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `property_name`, `description`, `location`, `price`, `image_url`, `created_at`) VALUES
(1, 'Luxury Villa', 'A beautiful luxury villa with a stunning sea view, perfect for families.', 'Miami Beach, FL', 1200000.00, 'path/to/luxury_villa.jpg', '2024-09-30 19:12:31'),
(2, 'Cozy Cottage', 'A quaint cottage surrounded by nature, ideal for weekend getaways.', 'Asheville, NC', 350000.00, 'path/to/cozy_cottage.jpg', '2024-09-30 19:12:31'),
(3, 'Modern Apartment', 'A spacious modern apartment located in the heart of the city.', 'New York, NY', 950000.00, 'path/to/modern_apartment.jpg', '2024-09-30 19:12:31'),
(4, 'Charming Bungalow', 'A charming bungalow with a beautiful garden and open space.', 'San Diego, CA', 650000.00, 'path/to/charming_bungalow.jpg', '2024-09-30 19:12:31'),
(5, 'Stylish Loft', 'A stylish loft with high ceilings and contemporary design.', 'Chicago, IL', 750000.00, 'path/to/stylish_loft.jpg', '2024-09-30 19:12:31'),
(6, 'Elegant Mansion', 'An elegant mansion with luxurious amenities and extensive grounds.', 'Beverly Hills, CA', 5000000.00, 'path/to/elegant_mansion.jpg', '2024-09-30 19:12:31'),
(7, 'Luxury Apartment', 'A spacious luxury apartment with a view of the city skyline.', 'Dhaka', 2000000.00, 'path/to/image1.jpg', '2024-09-30 19:28:46'),
(8, 'Charming House', 'A charming house with a beautiful garden in a quiet neighborhood.', 'Chittagong', 1500000.00, 'path/to/image2.jpg', '2024-09-30 19:28:46'),
(9, 'Stylish Condo', 'A stylish condo with modern amenities and great accessibility.', 'Sylhet', 900000.00, 'path/to/image3.jpg', '2024-09-30 19:28:46'),
(10, 'Riverside Villa', 'A luxurious villa located by the river, perfect for relaxation.', 'Khulna', 1800000.00, 'path/to/image4.jpg', '2024-09-30 19:28:46'),
(11, 'Commercial Space', 'A prime commercial space located in the heart of the business district.', 'Rajshahi', 2500000.00, 'path/to/image5.jpg', '2024-09-30 19:28:46'),
(12, 'Family Home', 'A lovely family home with spacious rooms and a friendly neighborhood.', 'Barisal', 1200000.00, 'path/to/image6.jpg', '2024-09-30 19:28:46'),
(13, 'Farmhouse', 'A serene farmhouse with ample land for gardening and farming.', 'Cumilla', 1700000.00, 'path/to/image7.jpg', '2024-09-30 19:28:46'),
(14, 'Penthouse Suite', 'A luxurious penthouse suite with breathtaking views of the city.', 'Narayanganj', 3000000.00, 'path/to/image8.jpg', '2024-09-30 19:28:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
