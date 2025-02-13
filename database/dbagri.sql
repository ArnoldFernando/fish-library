-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2024 at 03:20 PM
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
-- Database: `dbagri`
--

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
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `farmers` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `image`, `farmers`, `description`, `created_at`, `updated_at`) VALUES
(12, '1727158883.jpg', NULL, 'qweqew', '2024-09-23 22:21:23', '2024-09-23 22:21:23'),
(13, '1727159016.jpg', NULL, 'qweqwe', '2024-09-23 22:23:36', '2024-09-23 22:23:36'),
(14, '1728910731.webp', NULL, 'rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5rsthsr5yhr5tyhr5h5r46thwr5', '2024-10-14 04:58:51', '2024-10-14 04:58:51'),
(15, '1728910794.webp', NULL, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta, quisquam quidem. Provident qui autem alias voluptate quibusdam architecto, aliquid voluptatibus asperiores laboriosam eligendi repellat incidunt! Ipsa reprehenderit inventore quae eaque quia tempora exercitationem, suscipit enim commodi facilis aspernatur ad earum. At delectus pariatur voluptate atque. Vitae laudantium obcaecati facilis nam alias, recusandae accusantium in quas vel, animi distinctio ipsum non explicabo commodi perferendis fugiat. Quos distinctio voluptatum aperiam eligendi in consequatur, reiciendis, debitis minus provident, quod odio incidunt inventore. Qui quibusdam nobis ea eum ipsam consectetur repudiandae dicta quidem cumque at eligendi, animi saepe corrupti alias exercitationem non suscipit sed vel? Cupiditate quos, alias sequi culpa magni nemo asperiores reiciendis sed voluptates voluptatem quis eos accusamus rem obcaecati ad praesentium! Similique nam illo excepturi porro adipisci! Maiores distinctio, optio dolore numquam eum sapiente animi cum, hic sit qui voluptate, mollitia a beatae aliquid aut voluptates. Saepe, numquam quisquam dolorem maiores vero enim eum aperiam a ipsam odit corporis sapiente. Cupiditate doloribus nulla libero omnis eveniet dolorum reiciendis, ut et officia labore, perferendis esse ipsa illo similique. Quia deserunt consequatur obcaecati ratione modi, vitae voluptatibus earum, deleniti laudantium quos ducimus aut! Alias laudantium ullam rem quae enim! Et ipsam voluptas voluptate!', '2024-10-14 04:59:54', '2024-10-14 04:59:54');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `rate` varchar(255) DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fruits`
--

CREATE TABLE `fruits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `fruits` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fruits`
--

INSERT INTO `fruits` (`id`, `image`, `fruits`, `description`, `created_at`, `updated_at`) VALUES
(7, '1727157854.jpg', 'Assorted', 'madama genshin ni kurt', '2024-09-23 22:04:14', '2024-09-23 22:04:14'),
(8, '1727159164.jpg', 'Saba', 'Lakatan', '2024-09-23 22:26:04', '2024-09-23 22:26:04'),
(9, '1727159198.jpg', 'Grapes', 'Dik ammu raman na', '2024-09-23 22:26:38', '2024-09-23 22:26:38'),
(10, '1727161396.jpg', 'PAPAYA', 'Papaya is a sweet, fleshy fruit native to Mexico. People can eat its pinkish-orange soft flesh on its own or add it to salads, smoothies, or other dishes.\r\n\r\nIt is high in nutrients such as vitamin C, folate, vitamin A, magnesium, fiber, and antioxidants.', '2024-09-23 23:03:16', '2024-09-23 23:03:16'),
(11, '1727163038.jpg', 'banana', 'It is high in nutrients such as vitamin C, folate, vitamin A, magnesium, fiber, and antioxidants.', '2024-09-23 23:30:38', '2024-09-23 23:30:38');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_12_123519_create_roles_table', 1),
(6, '2023_12_12_123555_create_role_user_table', 1),
(7, '2024_02_20_082913_create_feedbacks_table', 1),
(8, '2024_02_21_034054_create_products_table', 1),
(9, '2024_05_27_080848_create_fruits_table', 1),
(10, '2024_05_29_040125_create_vegetables_table', 1),
(11, '2024_05_29_060656_create_farmers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('admin@mail.com', '$2y$12$AttRQ1jdhzlL1O9eT3csuuK3l/MXDk.nVeS7p5tL05YPXHJ45nwRO', '2024-09-13 00:02:52');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pid` varchar(255) DEFAULT NULL,
  `pdesc` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `stocks` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2024-09-12 21:44:39', '2024-09-12 21:44:39'),
(2, 'user', '2024-09-12 21:44:39', '2024-09-12 21:44:39');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 4, NULL, NULL),
(2, 2, 5, NULL, NULL),
(3, 2, 6, NULL, NULL),
(4, 2, 7, NULL, NULL),
(5, 2, 8, NULL, NULL),
(6, 2, 9, NULL, NULL),
(7, 2, 10, NULL, NULL),
(8, 2, 11, NULL, NULL),
(9, 2, 12, NULL, NULL),
(10, 2, 13, NULL, NULL),
(11, 2, 14, NULL, NULL),
(12, 2, 15, NULL, NULL),
(13, 2, 16, NULL, NULL),
(14, 2, 17, NULL, NULL),
(15, 2, 18, NULL, NULL),
(16, 2, 19, NULL, NULL),
(17, 2, 20, NULL, NULL),
(18, 2, 21, NULL, NULL),
(19, 2, 22, NULL, NULL),
(20, 2, 23, NULL, NULL),
(21, 1, 1, NULL, NULL),
(22, 1, 2, NULL, NULL),
(23, 2, 3, NULL, NULL),
(24, 1, 26, NULL, NULL),
(25, 2, 28, NULL, NULL),
(26, 2, 26, NULL, NULL),
(27, 2, 27, NULL, NULL),
(28, 2, 28, NULL, NULL),
(29, 2, 29, NULL, NULL);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(26, 'admin', 'admin@mail.com', NULL, '$2y$12$wRJEl9QatdnHGLqSTxJPXuQxCbX9seq45GxiH6gYVVaRgaO7ruXDu', NULL, '2024-09-22 19:38:37', '2024-09-22 19:38:37'),
(28, 'user', 'user@gmail.com', NULL, '$2y$12$k9Vz998p8ariQT8nNqmFqOMq6NmXK50rfC8s0fZz2Otj5VDNUw8jG', '28qTt300VxJfc0c60oUsiKNyLgIFnvOs399QL3KEnFzfitHcumAywNRDXf8Z', '2024-09-22 21:21:45', '2024-09-22 21:21:45'),
(29, 'cindy', 'cindy@mail.com', NULL, '$2y$12$59DJt5ypBj6rMDYEWCQyouMJqAm3046NpNmo3C7sxfUI03MV4nvg2', NULL, '2024-09-22 21:33:09', '2024-09-22 21:33:09');

-- --------------------------------------------------------

--
-- Table structure for table `vegetables`
--

CREATE TABLE `vegetables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `vegies` varchar(255) DEFAULT NULL,
  `descrip` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vegetables`
--

INSERT INTO `vegetables` (`id`, `images`, `vegies`, `descrip`, `created_at`, `updated_at`) VALUES
(9, '1727157765.jpg', 'qwert', 'qwerty', '2024-09-23 22:02:45', '2024-09-23 22:02:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fruits`
--
ALTER TABLE `fruits`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vegetables`
--
ALTER TABLE `vegetables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fruits`
--
ALTER TABLE `fruits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `vegetables`
--
ALTER TABLE `vegetables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
