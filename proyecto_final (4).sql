-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-02-2022 a las 19:42:42
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_final`
--
CREATE DATABASE IF NOT EXISTS `proyecto_final` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `proyecto_final`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `total_price` decimal(8,2) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_ship` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carts`
--

INSERT INTO `carts` (`id`, `amount`, `product_id`, `total_price`, `order_date`, `created_at`, `updated_at`, `id_ship`) VALUES
(1, NULL, 1, '150.00', '0000-00-00', NULL, NULL, NULL),
(2, NULL, 1, NULL, NULL, '2022-02-16 23:46:00', '2022-02-16 23:46:00', NULL),
(3, NULL, 1, NULL, NULL, '2022-02-16 23:46:00', '2022-02-16 23:46:00', NULL),
(4, NULL, 1, NULL, NULL, '2022-02-17 11:09:42', '2022-02-17 11:09:42', NULL),
(5, NULL, 1, NULL, NULL, '2022-02-17 11:09:43', '2022-02-17 11:09:43', NULL),
(6, NULL, 1, NULL, NULL, '2022-02-17 11:09:43', '2022-02-17 11:09:43', NULL),
(7, NULL, 1, NULL, NULL, '2022-02-17 11:09:44', '2022-02-17 11:09:44', NULL),
(8, NULL, 1, NULL, NULL, '2022-02-17 11:09:44', '2022-02-17 11:09:44', NULL),
(9, NULL, 1, NULL, NULL, '2022-02-17 11:09:44', '2022-02-17 11:09:44', NULL),
(10, NULL, 1, NULL, NULL, '2022-02-17 11:09:46', '2022-02-17 11:09:46', NULL),
(11, NULL, 1, NULL, NULL, '2022-02-17 11:09:47', '2022-02-17 11:09:47', NULL),
(12, NULL, 1, NULL, NULL, '2022-02-17 11:09:47', '2022-02-17 11:09:47', NULL),
(13, NULL, 1, NULL, NULL, '2022-02-17 11:09:48', '2022-02-17 11:09:48', NULL),
(14, NULL, 1, NULL, NULL, '2022-02-17 11:09:48', '2022-02-17 11:09:48', NULL),
(15, NULL, 1, NULL, NULL, '2022-02-17 11:09:48', '2022-02-17 11:09:48', NULL),
(16, NULL, 1, NULL, NULL, '2022-02-17 11:09:50', '2022-02-17 11:09:50', NULL),
(17, NULL, 1, NULL, NULL, '2022-02-17 11:09:50', '2022-02-17 11:09:50', NULL),
(18, NULL, 1, NULL, NULL, '2022-02-17 11:09:50', '2022-02-17 11:09:50', NULL),
(19, NULL, 1, NULL, NULL, '2022-02-17 11:09:50', '2022-02-17 11:09:50', NULL),
(20, NULL, 1, NULL, NULL, '2022-02-17 11:10:16', '2022-02-17 11:10:16', NULL),
(21, NULL, 1, NULL, NULL, '2022-02-17 11:34:27', '2022-02-17 11:34:27', NULL),
(22, NULL, 1, NULL, NULL, '2022-02-17 11:37:11', '2022-02-17 11:37:11', NULL),
(23, NULL, 1, NULL, NULL, '2022-02-17 11:37:11', '2022-02-17 11:37:11', NULL),
(24, NULL, 1, NULL, NULL, '2022-02-17 11:37:12', '2022-02-17 11:37:12', NULL),
(25, NULL, 1, NULL, NULL, '2022-02-17 11:37:13', '2022-02-17 11:37:13', NULL),
(26, NULL, 1, NULL, NULL, '2022-02-17 11:37:13', '2022-02-17 11:37:13', NULL),
(27, NULL, 1, NULL, NULL, '2022-02-17 11:37:14', '2022-02-17 11:37:14', NULL),
(28, NULL, 1, NULL, NULL, '2022-02-17 11:37:14', '2022-02-17 11:37:14', NULL),
(29, NULL, 1, NULL, NULL, '2022-02-17 11:37:15', '2022-02-17 11:37:15', NULL),
(30, NULL, 1, NULL, NULL, '2022-02-17 11:37:15', '2022-02-17 11:37:15', NULL),
(31, NULL, 1, NULL, NULL, '2022-02-17 11:37:16', '2022-02-17 11:37:16', NULL),
(32, NULL, 1, NULL, NULL, '2022-02-17 11:37:16', '2022-02-17 11:37:16', NULL),
(33, NULL, 1, NULL, NULL, '2022-02-17 11:37:16', '2022-02-17 11:37:16', NULL),
(34, NULL, 1, NULL, NULL, '2022-02-17 11:37:16', '2022-02-17 11:37:16', NULL),
(35, NULL, 1, NULL, NULL, '2022-02-17 11:43:39', '2022-02-17 11:43:39', NULL),
(36, NULL, 1, NULL, NULL, '2022-02-17 11:47:34', '2022-02-17 11:47:34', NULL),
(37, NULL, 1, NULL, NULL, '2022-02-17 13:39:05', '2022-02-17 13:39:05', NULL),
(38, NULL, 1, NULL, NULL, '2022-02-17 13:39:08', '2022-02-17 13:39:08', NULL),
(39, NULL, 1, NULL, NULL, '2022-02-17 13:39:10', '2022-02-17 13:39:10', NULL),
(40, NULL, 1, NULL, NULL, '2022-02-17 13:39:11', '2022-02-17 13:39:11', NULL),
(41, NULL, 1, NULL, NULL, '2022-02-17 13:39:21', '2022-02-17 13:39:21', NULL),
(42, NULL, 1, NULL, NULL, '2022-02-17 13:39:22', '2022-02-17 13:39:22', NULL),
(43, NULL, 1, NULL, NULL, '2022-02-17 13:39:23', '2022-02-17 13:39:23', NULL),
(44, NULL, 1, NULL, NULL, '2022-02-17 14:10:04', '2022-02-17 14:10:04', NULL),
(45, NULL, 1, NULL, NULL, '2022-02-17 14:10:08', '2022-02-17 14:10:08', NULL),
(46, NULL, 1, NULL, NULL, '2022-02-17 14:10:10', '2022-02-17 14:10:10', NULL),
(47, NULL, 1, NULL, NULL, '2022-02-17 14:10:11', '2022-02-17 14:10:11', NULL),
(48, NULL, 1, NULL, NULL, '2022-02-17 14:10:14', '2022-02-17 14:10:14', NULL),
(49, NULL, 1, NULL, NULL, '2022-02-17 14:10:14', '2022-02-17 14:10:14', NULL),
(50, NULL, 1, NULL, NULL, '2022-02-17 14:10:15', '2022-02-17 14:10:15', NULL),
(51, NULL, 1, NULL, NULL, '2022-02-17 14:24:51', '2022-02-17 14:24:51', NULL),
(52, NULL, 1, NULL, NULL, '2022-02-17 14:37:45', '2022-02-17 14:37:45', NULL),
(53, NULL, 1, NULL, NULL, '2022-02-17 14:37:47', '2022-02-17 14:37:47', NULL),
(54, NULL, 1, NULL, NULL, '2022-02-17 14:38:47', '2022-02-17 14:38:47', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Pescaderia'),
(2, 'Carniceria'),
(3, 'Panaderia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_01_31_154219_create_sessions_table', 1),
(7, '2022_01_31_160801_add_fields_to_users_table', 1),
(8, '2022_01_31_161347_proyecto_final', 1),
(9, '2022_02_04_182107_create_categories_table', 1),
(10, '2022_02_04_183030_create_products_table', 1),
(11, '2022_02_07_183218_create_carts_table', 1),
(12, '2022_02_16_164954_create_images_table', 1),
(13, '2022_02_16_165628_add_idimage_to_products_table', 1),
(14, '2022_02_16_180800_add_idproduct_to_images_table', 1),
(15, '2022_02_17_024051_create_ships_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `impuesto` decimal(8,2) DEFAULT NULL,
  `descuento` decimal(8,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `disponible` tinyint(1) NOT NULL DEFAULT 1,
  `sold` decimal(8,2) DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `file_path`, `price`, `impuesto`, `descuento`, `stock`, `disponible`, `sold`, `created_at`, `updated_at`, `image_id`) VALUES
(1, 2, 'Pelota cerdo', 'Útil para arreglos', 'Pelota cerdo.webp', 13, '0.00', '0.00', 30, 1, '8.00', '2022-02-16 18:21:39', '2022-02-16 18:21:39', NULL),
(2, 2, 'Embutido', 'Arreglo para arroz al horno', 'Embutido.webp', 8, '0.00', '0.00', 30, 1, '3.00', '2022-02-16 18:22:06', '2022-02-16 18:22:06', NULL),
(3, 2, 'Hueso', 'Arreglado vacuno', 'Hueso.webp', 6, '0.00', '0.00', 30, 1, '15.00', '2022-02-16 18:24:17', '2022-02-16 18:24:17', NULL),
(4, 2, 'Puchero', 'Arreglo vacuno cerdo pollo', 'Puchero.webp', 13, '0.00', '0.00', 30, 1, '371.00', '2022-02-16 18:24:55', '2022-02-16 18:24:55', NULL),
(5, 2, 'Pechuga de pollo', 'Marinada, filetes finos.', 'Pechuga de pollo.webp', 9, '0.00', '0.00', 30, 1, '672.00', '2022-02-16 18:28:05', '2022-02-16 18:28:05', NULL),
(6, 2, 'Jamoncitos de pavo', 'Ideal para comer con tomate cherry', 'Jamoncitos de pavo.webp', 7, '0.00', '0.00', 30, 1, '15.00', '2022-02-16 18:29:21', '2022-02-16 18:29:21', NULL),
(7, 2, 'Flautas de pollo', 'Rápido de cocinar y comer', 'Flautas de pollo.webp', 4, '0.00', '0.00', 50, 1, '33.00', '2022-02-16 18:31:26', '2022-02-16 18:31:26', NULL),
(8, 1, 'Arreglo marisco', 'Perfecto para una fideua', 'Arreglo marisco.webp', 17, '0.00', '0.00', 3, 1, '39.00', '2022-02-16 18:32:50', '2022-02-16 18:32:50', NULL),
(9, 1, 'Salmón ahumado', '100g aprox', 'Salmón ahumado.webp', 3, '0.00', '0.00', 7, 1, '15.00', '2022-02-16 18:35:35', '2022-02-16 18:35:35', NULL),
(10, 1, 'Salmón ahumado', '100g aprox', 'Salmón ahumado.webp', 3, '0.00', '0.00', 7, 0, '99.00', '2022-02-16 18:37:17', '2022-02-16 18:37:17', NULL),
(11, 1, 'Trucha', '150g aprox', 'Trucha.webp', 6, '0.00', '0.00', 12, 1, '99.00', '2022-02-16 18:37:34', '2022-02-16 18:37:34', NULL),
(12, 1, 'Calamar', 'Rico de cualquier manera', 'Calamar.webp', 3, '0.00', '0.00', 59, 1, '999.00', '2022-02-16 20:09:22', '2022-02-16 20:09:22', NULL),
(13, 3, 'Pan', 'Pan', 'Pan.webp', 0.5, '0.00', '0.00', 900, 1, '69.00', '2022-02-16 21:54:39', '2022-02-16 21:54:39', NULL),
(14, 3, 'Napolitana', 'La mejor merienda del mundo', 'Napolitana.webp', 1, '0.00', '0.00', 40, 1, '38.00', '2022-02-16 21:56:47', '2022-02-16 21:56:47', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('T2GWMPdX0b1lsJVSdAnYWJFXsRvlMoWrdyZPmWiW', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUUlFUXhvU0tRTkI1d0xZamlyQzhLaTdOU2ZXbWpPcDVHTWdLZmpSSiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wcm9kdWN0cyI7fX0=', 1645122977);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ships`
--

DROP TABLE IF EXISTS `ships`;
CREATE TABLE `ships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ships`
--

INSERT INTO `ships` (`id`, `created_at`, `updated_at`, `user_id`) VALUES
(1, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `admin`, `created_at`, `updated_at`, `nif`, `address`, `username`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$M8RZlyyIVYwgvjbNns/NI.tCO1KaM/2JxHxFp2mLTYh0PWyRarI32', NULL, NULL, NULL, NULL, 'profile-photos/FuP6U2D25XNKqjNyxGwvOaD5OacVPI3gC2jLJCzB.jpg', 1, '2022-02-16 18:20:14', '2022-02-16 23:27:47', '03151198Z', 'No', 'admin'),
(2, 'Juan', 'bravas@gmail.com', NULL, '$2y$10$PKTDbFu1p42Dla.yfEa1YulLrwptA//yfyAj9R42sesZtSMrpyTVG', NULL, NULL, NULL, NULL, 'profile-photos/xF3mX3LhUaN7r5MVNJkxt6E5R1XFQN0Gk8dqWJ33.jpg', 0, '2022-02-17 15:49:58', '2022-02-17 15:50:08', '73664039F', 'No', 'Bravas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`product_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_image_id_foreign` (`image_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `ships`
--
ALTER TABLE `ships`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `ships`
--
ALTER TABLE `ships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_image_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
