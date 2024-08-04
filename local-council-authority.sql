-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 06:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `local-council-authority`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `complaint` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(5, '2024_04_27_105214_create_complaints_table', 2),
(6, '2024_04_27_151235_create_contacts_table', 3),
(8, '2024_04_27_164650_create_properties_table', 4),
(9, '2024_04_28_052522_create_property-features_table', 5),
(10, '2024_04_28_131726_create_residents_table', 6),
(11, '2024_04_28_133321_create_taxes_table', 7),
(12, '2024_04_30_062547_create_resident_tax_table', 8),
(14, '2024_04_30_062547_create_resident_taxs_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `encrypted_id` varchar(500) NOT NULL,
  `name` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `pf_ID` bigint(20) UNSIGNED NOT NULL,
  `property_image` varchar(255) NOT NULL,
  `owner_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `encrypted_id`, `name`, `area`, `description`, `price`, `owner`, `status`, `pf_ID`, `property_image`, `owner_image`) VALUES
(1, 'eyJpdiI6Inp3NVpoam5Nb3liekwxVnArMnBBT1E9PSIsInZhbHVlIjoid08xWFM2SElrcnh3VlJqbWZ5WEpVZz09IiwibWFjIjoiNzE2MmJkNWM2YmZjYzdiZDY1MWQyZDFlODU4MzhlMTJjYjAwNTNjMGI4NjdhYjU1OTNmODlhN2JiOWI1ZmE4NCIsInRhZyI6IiJ9', 'Beautiful Villa', '2000 sqft', 'This stunning villa is nestled in lush greenery, boasting a sprawling landscape that offers privacy and tranquility. The architecture exudes elegance, with a grand entrance leading into a spacious foyer adorned with marble floors and intricate chandeliers. The interior features high ceilings, large windows, and luxurious furnishings, creating an ambiance of opulence and comfort', '$200/mo', 'John Doe', 'rent', 5, 'property1.jpg', 'owner1.jpg'),
(2, 'eyJpdiI6Imp1NldBczVMemwzWGxzRTBsU2treHc9PSIsInZhbHVlIjoiNC91RXpqcElNaXRqTUpIVytMcEVHUT09IiwibWFjIjoiYTQxYzcyZGUyNDgxMDFmZGM4MmFiM2RhOWIyYzM2OGJlOTAwNWFjYjU5ZWQ2MDBmNDNkODY3NDc0MmM0ODlmYiIsInRhZyI6IiJ9', 'Cozy Apartment', '800 sqft', 'Tucked away in a bustling urban neighborhood, this cozy apartment offers a warm and inviting atmosphere. Upon entering, you\'re greeted by an open-concept living space adorned with plush furnishings and soft lighting, creating a comfortable retreat from the city\'s hustle and bustle.', '$12,000', 'Jane Smith', 'sale', 1, 'property2.jpg', 'owner2.jpg'),
(3, 'eyJpdiI6Ing2eXZHRk5hL0NkZnVxb2VCZlZsalE9PSIsInZhbHVlIjoiK0d3Q2ZYeVdxbmR6cU1ZTzN5U0xjQT09IiwibWFjIjoiMzMzMmJmYjY2YzUyOGU5YjdkYjE5MjZiYzk1MjE2N2NmMDE2MDA3MjI2MmI2NWFiYjIwMDhhMTNkMTk5OWM3OCIsInRhZyI6IiJ9', 'Spacious Office Space', '3000 sqft', 'Situated in a prime commercial district, this spacious office space is designed for productivity and professionalism. The interior is characterized by clean lines, minimalist décor, and abundant natural light, creating an environment that fosters focus and creativity', '$486/mo', 'Adam Johnson', 'rent', 2, 'property3.jpg', 'owner3.jpg'),
(4, 'eyJpdiI6Im0vcThncnh4eFhYYmYwem9LdTNFRmc9PSIsInZhbHVlIjoieHhRdWp1K1l2OXk3UU9KdVV3U2l5Zz09IiwibWFjIjoiMzEyZDljOWE4NjQ0NWRkNTAyMTEwZTYxZGNlM2E5ZWE5NmMwMjRmNDQ3MDA1ODExMmNlMjgxODIyNDhhZDM5YSIsInRhZyI6IiJ9', 'Luxury Penthouse', '3500 sqft', 'Perched atop a prestigious high-rise building, this luxury penthouse offers unparalleled views of the city skyline and beyond. The penthouse exudes sophistication and refinement, with sleek contemporary design elements and luxurious finishes throughout.', '$60,000', 'Emily Brown', 'sale', 6, 'property4.jpg', 'owner4.jpg'),
(5, 'eyJpdiI6ImVHb1hLaEdZOU1YNDIyaFZzNW1HWGc9PSIsInZhbHVlIjoicTdvZFFqU2Q5UTZHOVlBTlpEOTNsUT09IiwibWFjIjoiOTQ1YTNmOGFkZGQ5MDNjN2E1NzdhMGE2YzRiOTE5ZGY2MDcyNmUwZWJmNGY3ZDVjMTcwMzM0YzUzNjA4ZGJjMyIsInRhZyI6IiJ9', 'Seaside Cottage', '1200 sqft', 'Nestled along the picturesque coastline, this charming seaside cottage offers a quaint retreat from the hustle and bustle of everyday life. The cottage exudes coastal charm, with weathered shingles, wrap-around porches, and panoramic views of the ocean.', '$345/mo', 'Michael Johnson', 'rent', 3, 'property5.jpg', 'owner5.jpg'),
(6, 'eyJpdiI6IkdoQU5CWXliRnAxQ1BXZFkrNkpmZXc9PSIsInZhbHVlIjoiV0N5S1h3TGlUTmo4c1I1eEdUc2I1dz09IiwibWFjIjoiN2YzNWJmOWQ1YmExYmU2ZThmMDcwNWFjMmE5ZTdiMWNlYzkxYzQ4ODU4Yjg4YWY5OTA0MzEzYjkwYjUwNGQ4YyIsInRhZyI6IiJ9', 'Urban Loft', '1000 sqft', 'A rooftop terrace provides outdoor living space, complete with lounge seating, a barbecue area, and panoramic views of the surrounding cityscape. With its edgy design and prime location, this urban loft is perfect for those seeking a contemporary lifestyle in the heart of the city.', '$32,000', 'Sarah Wilson', 'sale', 4, 'property6.jpg', 'owner6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `property_features`
--

CREATE TABLE `property_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lot_area` varchar(255) NOT NULL,
  `bed_rooms` varchar(255) NOT NULL,
  `bath_rooms` varchar(255) NOT NULL,
  `luggage` varchar(255) NOT NULL,
  `garage` varchar(255) NOT NULL,
  `floor_area` varchar(255) NOT NULL,
  `year_built` varchar(255) NOT NULL,
  `water` varchar(255) NOT NULL,
  `stories` varchar(255) NOT NULL,
  `roofing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_features`
--

INSERT INTO `property_features` (`id`, `lot_area`, `bed_rooms`, `bath_rooms`, `luggage`, `garage`, `floor_area`, `year_built`, `water`, `stories`, `roofing`) VALUES
(1, '1500 sqft', '8', '2', 'Yes', '4 cars', '1200 sqft', '2005', 'City water', '2', 'Tile'),
(2, '2000 sqft', '12', '3', 'No', '1 car', '1800 sqft', '2010', 'Well water', '6', 'Metal'),
(3, '1800 sqft', '16', '5', 'Yes', '6 cars', '1500 sqft', '2008', 'City water', '2', 'Asphalt'),
(4, '2500 sqft', '7', '4', 'No', '3 cars', '2000 sqft', '2015', 'City water', '3', 'Slate'),
(5, '2200 sqft', '6', '3', 'Yes', '2 cars', '1900 sqft', '2012', 'Well water', '2', 'Metal'),
(6, '1700 sqft', '9', '7', 'No', '8 car', '1400 sqft', '2007', 'City water', '5', 'Asphalt');

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `family_code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`id`, `family_code`, `name`, `phone_number`, `address`) VALUES
(1, '9134', 'John Doe', '123-456-7890', '123 Main St'),
(2, '5678', 'Jane Smith', '456-789-0123', '456 Elm St'),
(3, '9012', 'Michael Johnson', '789-012-3456', '789 Oak St'),
(4, '3456', 'Emily Williams', '012-345-6789', '012 Pine St'),
(5, '7890', 'Christopher Brown', '234-567-8901', '234 Cedar St'),
(6, '2345', 'Jessica Miller', '567-890-1234', '567 Maple St'),
(7, '6789', 'Daniel Davis', '890-123-4567', '890 Birch St'),
(8, '0123', 'Sarah Wilson', '901-234-5678', '901 Walnut St'),
(9, '4567', 'Matthew Anderson', '012-345-6789', '345 Spruce St'),
(10, '8901', 'Amanda Martinez', '123-456-7890', '678 Laurel St'),
(11, '2345', 'David Rodriguez', '234-567-8901', '901 Cherry St'),
(12, '6109', 'Ashley Hernandez', '345-678-9012', '234 Peach St'),
(13, '1234', 'James Lopez', '456-789-0123', '567 Orange St'),
(14, '7685', 'Jennifer Gonzalez', '567-890-1234', '890 Lemon St'),
(15, '6273', 'Joshua Wilson', '678-901-2345', '123 Grape St'),
(16, '9321', 'Nicole Perez', '789-012-3456', '456 Banana St'),
(17, '6793', 'Andrew Sanchez', '890-123-4567', '789 Strawberry St'),
(18, '4448', 'Justin Torres', '901-234-5678', '012 Blueberry St'),
(19, '7735', 'Samantha Ramirez', '012-345-6789', '234 Raspberry St'),
(20, '2973', 'Brandon Flores', '123-456-7890', '345 Blackberry St');

-- --------------------------------------------------------

--
-- Table structure for table `resident_taxs`
--

CREATE TABLE `resident_taxs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `family_code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tax_name` varchar(255) NOT NULL,
  `tax_amount` varchar(255) NOT NULL,
  `persons` varchar(255) NOT NULL,
  `total_tax` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resident_taxs`
--

INSERT INTO `resident_taxs` (`id`, `family_code`, `name`, `phone_number`, `address`, `tax_name`, `tax_amount`, `persons`, `total_tax`, `message`, `created_at`, `updated_at`) VALUES
(1, '7890', 'Christopher Brown', '234-567-8901', '234 Cedar St', 'Sales Tax', '$20', '4', '$80', 'hiiiii', '2024-05-01 07:24:53', '2024-05-01 07:24:53');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9wu85aw4tPMc7bPASUZMlVigXcAI8ebLGvdJiE4Z', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYzB5d0twaXNaUmFuRGJJT0NzZVh0eHhWMHhpSFJsbXg3U3Fvc0JXNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wYXktdGF4ZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1714650378),
('eLc9CxWbpprSKJJkqCn6iXQYphYcTL1q9v8EBBN0', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTDJvaUYwTXpSYmRSN1JVY1Z2OFljdm1nc3RxZnFGVjhlZ2x4aUNPOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wYXktdGF4ZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1714565855),
('q0GIw7ecleogRTJ8Ta9LoBMSShuCC0VmcM8TsQ6X', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36 Edg/124.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU3hrTXg1YnBEMlM4M2I2M01xNTljb3QzM1ljMkZLNG5EZ1RPaUltZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wYXktdGF4ZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1714566293);

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE `taxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tax_name` varchar(255) NOT NULL,
  `tax_amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taxes`
--

INSERT INTO `taxes` (`id`, `tax_name`, `tax_amount`) VALUES
(1, 'Sales Tax', '20'),
(2, 'Income Tax', '60'),
(3, 'Business Tax', '140'),
(4, 'Council Tax', '8'),
(5, 'Community Tax', '13'),
(6, 'Utility Tax', '16'),
(7, 'Inheritance Tax', '89'),
(8, 'Excise Tax', '53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Momin` (`pf_ID`);

--
-- Indexes for table `property_features`
--
ALTER TABLE `property_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_taxs`
--
ALTER TABLE `resident_taxs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `taxes`
--
ALTER TABLE `taxes`
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
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `property_features`
--
ALTER TABLE `property_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `resident_taxs`
--
ALTER TABLE `resident_taxs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `Momin` FOREIGN KEY (`pf_ID`) REFERENCES `property_features` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
