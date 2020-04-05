-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 17, 2020 at 06:19 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile-store`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(10) NOT NULL,
  `prod_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_rom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_ram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_os` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_price` int(20) NOT NULL,
  `prod_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_is_popular` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `prod_brand`, `prod_rom`, `prod_ram`, `prod_os`, `prod_price`, `prod_type`, `prod_image`, `prod_is_popular`) VALUES
(1, 'Samsung Galaxy A51', 'Samsung', '128GB', '6GB', 'Android 10', 7490000, 'smartphone', 'samsung-galaxy-a51-tet-400x460-400x460.png', 0),
(2, 'iPhone 11 Pro Max 64GB', 'Apple', '64GB', '4GB', 'iOS 13', 33990000, 'smartphone', 'iphone-11-pro-max-tet-400x460-400x460.png', 0),
(3, 'OPPO A9 (2020)', 'Oppo', '128GB', '8GB', 'Android 9', 6990000, 'smartphone', 'oppo-a9-white-1-400x460.png', 1),
(4, 'Samsung Galaxy A50s', 'Samsung', '64GB', '4GB', 'Android 9', 6290000, 'smartphone', 'samsung-galaxy-a50s-tet-400x460-400x460.png', 0),
(5, 'Samsung Galaxy A10s', 'Samsung', '32GB', '2GB', 'Android 9', 3390000, 'smartphone', 'samsung-galaxy-a10s-tet-chi-tiet-400x460.png', 0),
(6, 'iPhone 11 64GB             ', 'Apple', '64GB', '4GB', 'iOS 13', 21990000, 'smartphone', 'iphone-11-tet-400x460-400x460.png', 1),
(7, 'Samsung Galaxy S10+', 'Samsung', '512GB', '8GB', 'Android 9', 18989999, 'smartphone', 'sieu-pham-galaxy-s-moi-2-512gb-black-400x460.png', 1),
(8, 'OPPO Reno2', 'Oppo', '256GB', '8GB', 'Android 9', 112990000, 'smartphone', 'oppo-reno2-black-mtp1-400x460.png', 1),
(9, 'iPad 10.2 inch Wifi 128GB (2019)', 'Apple', '128GB', '3GB', 'iOS 13', 11990000, 'tablet', 'ipad-10-2-inch-wifi-128gb-2019-silver-400x460.png', 0),
(10, 'Samsung Galaxy Tab A8 8\" T295 (2019)', 'Samsung', '32GB', '2GB', 'Android 9', 3690000, 'tablet', 'samsung-galaxy-tab-a8-t295-2019-silver-400x460.png', 0),
(11, 'iPad Mini 7.9 inch Wifi 64GB (2019)', 'Apple', '64GB', '3GB', 'iOS 12', 10990000, 'tablet', 'ipad-mini-79-inch-wifi-2019-gold-400x460.png', 1),
(12, 'Samsung Galaxy Tab A 10.1 T515 (2019)', 'Samsung', '32GB', '3GB', 'Android 9', 7490000, 'tablet', 'samsung-galaxy-tab-a-101-t515-2019-gold-400x460.png', 0),
(13, 'iPad Pro 11 inch Wifi 64GB (2018)', 'Apple', '64GB', '4GB', 'iOS 12', 21990000, 'tablet', 'ipad-pro-11-inch-2018-64gb-wifi-33397-chitiet-400x460.png', 1),
(14, 'Samsung Galaxy Tab A 10.5\"', 'Samsung', '32GB', '3Gb', 'Android 8', 9490000, 'tablet', 'samsung-galaxy-tab-a-105-inch-black-1-400x460.png', 0),
(15, 'Samsung Galaxy Tab with S Pen (P205)', 'Samsung', '32GB', '3GB', 'Android 9', 6990000, 'tablet', 'samsung-galaxy-tab-a8-plus-p205-black-400x460.png', 1),
(16, 'iPad Air 10.5 inch Wifi 64GB 2019', 'Apple', '64GB', '3GB', 'iOS12', 13990000, 'tablet', 'ipad-air-105-inch-wifi-2019-gold-400x460.png', 1),
(17, 'Lenovo Ideapad S340', 'Lenovo', '1TB', '8GB', 'Windows 10', 15490000, 'laptop', 'lenovo-ideapad-s340-14iwl-i5-8265u-8gb-1tb-mx230-w-17-600x600.jpg', 0),
(18, 'Lenovo Legion Y530', 'Lenovo', '2TB', '8GB', 'Windows 10', 27990000, 'laptop', 'lenovo-legion-y530-i7-8750h-8gb-2tb-16gb-gtx-1050t-16-600x600.jpg', 1),
(19, 'Lenovo Ideapad S540', 'Lenovo', '1TB + 128GB M2', '8GB', 'Windows 10', 17490000, 'laptop', 'lenovo-ideapad-s540-15iwl-i5-8265u-8gb-128gb-1tb-w-18-600x600.jpg', 1),
(20, 'Acer Swift 3 SF315', 'Acer', '1TB', '4GB', 'Windows 10', 13190000, 'laptop', 'acer-swift-sf315-52-38yq-i3-8130u-4gb-1tb-156f-win-600x600.jpg', 1),
(21, 'MacBook Air 2017', 'Apple', '128GB SSD', '8GB', 'Mac OS', 18990000, 'laptop', 'apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg', 1),
(22, 'HP 15 da1023TU', 'HP', '1TB', '4GB', 'Windows 10', 14890000, 'laptop', 'hp-15-da1023tu-i5-8265u-4gb-1tb-win10-5nk81pa-16-600x600.jpg', 0),
(23, 'HP 15s du0058TU', 'HP', '1TB', '4GB', 'Windows 10', 7690000, 'laptop', 'hp-15s-du0058tu-n5000-4gb-1tb-win10-6zf55pa-1-600x600.jpg', 0),
(24, 'Asus VivoBook X409U', 'Asus', '256GB NVMe', '4GB', 'Windows 10', 10790000, 'laptop', 'asus-vivobook-x409u-i3-7020u-4gb-256gb-win10-ek20-1-600x600.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
