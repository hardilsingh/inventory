-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2019 at 05:20 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `barcodes`
--

CREATE TABLE `barcodes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `paid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `name`, `address`, `tel`, `created_at`, `updated_at`, `paid`, `total`, `date`) VALUES
(10, 'Hardil Singh', '662/7 Mehar chand Road Gurdaspur', '7340910031', '2019-11-14 18:24:51', '2019-11-14 18:24:51', '100000', '122800', '2019-11-14'),
(11, 'Hardil singh', '662/7 Mehar chand Road', '9417464646', '2019-11-14 18:36:24', '2019-11-14 18:36:24', '5200000', '5280000', '2019-11-15'),
(12, 'Hardil Singh', '662/7 Mehar chand Road Gurdaspur', '7340910031', '2019-11-14 19:33:13', '2019-11-14 19:33:13', '470000', '470000', '2019-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `category_c_p_u_s`
--

CREATE TABLE `category_c_p_u_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_c_p_u_s`
--

INSERT INTO `category_c_p_u_s` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, '3.5', '2019-11-10 03:48:14', '2019-11-10 03:49:56');

-- --------------------------------------------------------

--
-- Table structure for table `category_devices`
--

CREATE TABLE `category_devices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_devices`
--

INSERT INTO `category_devices` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Watch', '2019-11-10 04:36:50', '2019-11-10 04:36:50'),
(3, 'Laptop', '2019-11-12 06:10:51', '2019-11-12 06:10:51');

-- --------------------------------------------------------

--
-- Table structure for table `category_g_p_u_s`
--

CREATE TABLE `category_g_p_u_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_g_p_u_s`
--

INSERT INTO `category_g_p_u_s` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, 'Nvidia geforce', '2019-11-10 04:36:41', '2019-11-10 04:36:41');

-- --------------------------------------------------------

--
-- Table structure for table `category_manufacturers`
--

CREATE TABLE `category_manufacturers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_manufacturers`
--

INSERT INTO `category_manufacturers` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'HP', '2019-11-10 04:37:27', '2019-11-10 04:37:27'),
(3, 'Apple', '2019-11-12 06:26:21', '2019-11-12 06:26:21'),
(4, 'Microsoft', '2019-11-12 22:17:59', '2019-11-12 22:17:59');

-- --------------------------------------------------------

--
-- Table structure for table `category_r_a_m_s`
--

CREATE TABLE `category_r_a_m_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_r_a_m_s`
--

INSERT INTO `category_r_a_m_s` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, '8', '2019-11-10 04:37:03', '2019-11-10 04:37:03');

-- --------------------------------------------------------

--
-- Table structure for table `category_screens`
--

CREATE TABLE `category_screens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_screens`
--

INSERT INTO `category_screens` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, '15.6', '2019-11-10 04:37:19', '2019-11-10 04:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `category_storages`
--

CREATE TABLE `category_storages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_storages`
--

INSERT INTO `category_storages` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, '500', '2019-11-10 04:37:11', '2019-11-10 04:37:11');

-- --------------------------------------------------------

--
-- Table structure for table `category_usages`
--

CREATE TABLE `category_usages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_usages`
--

INSERT INTO `category_usages` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Brand New', '2019-11-10 04:37:37', '2019-11-10 04:37:37'),
(3, 'Used', '2019-11-10 04:37:42', '2019-11-10 04:37:42');

-- --------------------------------------------------------

--
-- Table structure for table `earnings`
--

CREATE TABLE `earnings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `earnings` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventories`
--

CREATE TABLE `inventories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `cpu_id` int(11) NOT NULL DEFAULT '0',
  `gpu_id` int(11) NOT NULL DEFAULT '0',
  `storage_id` int(11) NOT NULL,
  `screen_id` int(11) NOT NULL,
  `ram_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL DEFAULT '0',
  `usage_id` int(11) NOT NULL,
  `product_code` text COLLATE utf8mb4_unicode_ci,
  `current_stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sale_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventories`
--

INSERT INTO `inventories` (`id`, `product_name`, `manufacturer_id`, `cpu_id`, `gpu_id`, `storage_id`, `screen_id`, `ram_id`, `supplier_id`, `usage_id`, `product_code`, `current_stock`, `created_at`, `updated_at`, `sale_price`, `device_id`) VALUES
(34, 'HP ab2019TX', 2, 2, 2, 4, 2, 2, 0, 3, '255808039973', 43, '2019-11-12 12:59:54', '2019-11-14 19:31:44', '580000', 3),
(35, 'Surface Book 2', 4, 2, 4, 4, 2, 2, 3, 2, '287763650042', 11, '2019-11-12 22:18:28', '2019-11-12 22:18:28', '120000', 3),
(36, 'Surface Book 3', 4, 2, 4, 4, 2, 2, 2, 2, '296930221400', 68, '2019-11-12 23:07:56', '2019-11-12 23:07:56', '854000', 3),
(37, 'Apple Macbook Pro 2010', 3, 2, 4, 4, 2, 2, 2, 3, '241658351233', 52, '2019-11-12 23:23:52', '2019-11-12 23:23:52', '470000', 3);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_10_054342_create_inventories_table', 2),
(5, '2019_11_10_054419_create_bills_table', 2),
(6, '2019_11_10_054456_create_earnings_table', 2),
(7, '2019_11_10_054534_create_category_devices_table', 2),
(8, '2019_11_10_054549_create_category_c_p_u_s_table', 2),
(9, '2019_11_10_054558_create_category_g_p_u_s_table', 2),
(10, '2019_11_10_054607_create_category_r_a_m_s_table', 2),
(11, '2019_11_10_054618_create_category_screens_table', 2),
(12, '2019_11_10_054628_create_category_storages_table', 2),
(13, '2019_11_10_054653_create_category_manufacturers_table', 2),
(14, '2019_11_10_060627_create_suppliers_table', 2),
(15, '2019_11_10_061108_create_category_usages_table', 2),
(16, '2019_11_10_094632_add_sale_price_to_inventory', 3),
(17, '2019_11_10_094736_add_sold_at_price', 3),
(18, '2019_11_12_114500_add_device_id_to_inventory', 4),
(19, '2019_11_12_120129_create_barcodes_table', 5),
(20, '2019_11_13_042228_add_email_field_to_suppliers', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `tel`, `address`, `created_at`, `updated_at`, `email`) VALUES
(2, 'Sri Computers', '7340910031', '662/7 Mehar chand Road Gurdaspur', '2019-11-12 23:04:10', '2019-11-12 23:04:10', 'hardilsingh87@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_active`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', 0, NULL, '$2y$10$7jaVN7N2mIKRublJ.Y7Id.tU01BYVTeR1WRLXrt3ZtEXN.rXzxufe', NULL, '2019-11-09 04:12:22', '2019-11-09 04:12:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barcodes`
--
ALTER TABLE `barcodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_c_p_u_s`
--
ALTER TABLE `category_c_p_u_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_devices`
--
ALTER TABLE `category_devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_g_p_u_s`
--
ALTER TABLE `category_g_p_u_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_manufacturers`
--
ALTER TABLE `category_manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_r_a_m_s`
--
ALTER TABLE `category_r_a_m_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_screens`
--
ALTER TABLE `category_screens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_storages`
--
ALTER TABLE `category_storages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_usages`
--
ALTER TABLE `category_usages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `earnings`
--
ALTER TABLE `earnings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventories`
--
ALTER TABLE `inventories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barcodes`
--
ALTER TABLE `barcodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category_c_p_u_s`
--
ALTER TABLE `category_c_p_u_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category_devices`
--
ALTER TABLE `category_devices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category_g_p_u_s`
--
ALTER TABLE `category_g_p_u_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category_manufacturers`
--
ALTER TABLE `category_manufacturers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category_r_a_m_s`
--
ALTER TABLE `category_r_a_m_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category_screens`
--
ALTER TABLE `category_screens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category_storages`
--
ALTER TABLE `category_storages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category_usages`
--
ALTER TABLE `category_usages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `earnings`
--
ALTER TABLE `earnings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventories`
--
ALTER TABLE `inventories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
