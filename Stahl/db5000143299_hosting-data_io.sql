-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: db5000143299.hosting-data.io
-- Tiempo de generación: 26-03-2020 a las 00:43:42
-- Versión del servidor: 5.7.28-log
-- Versión de PHP: 7.0.33-0+deb9u7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbs138645`
--
CREATE DATABASE IF NOT EXISTS `dbs138645` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dbs138645`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idTitle` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `url`, `title`, `description`, `idTitle`, `created_at`, `updated_at`) VALUES
(1, 'images/51761690.jpg', NULL, NULL, 5, NULL, '2019-12-18 00:03:59'),
(2, 'images/246152735.jpg', NULL, NULL, 5, NULL, '2019-12-18 00:04:13'),
(3, 'images/2006276592.jpeg', NULL, NULL, 5, NULL, '2020-03-26 03:34:31'),
(4, 'images/867293861.png', NULL, NULL, 5, NULL, '2019-12-17 23:55:54'),
(5, 'images/557849534.jpeg', NULL, NULL, 5, NULL, '2020-03-26 03:36:36'),
(6, 'images/1330016619.jpeg', 'Lorem ipsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quisquam quis maxime consequuntur nam, sapiente ex. Modi laboriosam commodi', 10, NULL, '2020-03-26 03:48:26'),
(7, 'images/1219320573.jpeg', 'Lorem ipsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quisquam quis maxime consequuntur nam, sapiente ex. Modi laboriosam commodi', 10, NULL, '2020-03-26 03:48:53'),
(8, 'images/1306252586.jpeg', 'Lorem ipsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quisquam quis maxime consequuntur nam, sapiente ex. Modi laboriosam commodi', 10, NULL, '2020-03-26 03:49:15'),
(9, 'images/1586028271.jpeg', 'Lorem ipsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quisquam quis maxime consequuntur nam, sapiente ex. Modi laboriosam commodi', 10, NULL, '2020-03-26 03:50:11'),
(10, 'images/1521998176.jpeg', 'Lorem ipsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quisquam quis maxime consequuntur nam, sapiente ex. Modi laboriosam commodi', 10, NULL, '2020-03-26 03:50:31'),
(11, 'images/1647463654.png', 'Magna Cims', NULL, 11, NULL, '2020-03-26 03:54:41'),
(12, 'images/logo-pace-industries.png', 'Pace Industries', NULL, 11, NULL, NULL),
(13, 'images/logo-magna-closures.png', 'Magna Closures', NULL, 11, NULL, NULL),
(14, 'images/1890300098.png', 'Turck', NULL, 11, NULL, '2020-03-26 03:53:33'),
(15, 'images/901571160.png', 'Wastequip', NULL, 11, '2019-12-18 01:51:25', '2019-12-18 01:51:25'),
(16, 'images/1810622690.png', 'Stabilus', NULL, 11, '2019-12-18 01:52:08', '2020-03-26 03:55:01'),
(17, 'images/1539725778.png', 'DeAcero', NULL, 11, '2019-12-18 01:52:45', '2019-12-18 01:52:45'),
(18, 'images/801006795.png', 'PowerBrace', NULL, 11, '2019-12-18 01:53:37', '2019-12-18 02:01:27'),
(19, 'images/476352742.png', 'Gobierno Federal', NULL, 11, '2019-12-18 01:54:30', '2019-12-18 01:54:30'),
(20, 'images/25813604.png', 'Ford', NULL, 11, '2020-03-26 04:08:18', '2020-03-26 04:11:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_30_172001_create_titles_table', 1),
(4, '2019_07_30_172136_create_images_table', 1),
(5, '2019_07_30_174850_create_networks_table', 1),
(6, '2019_07_30_182538_create_ubications_table', 1),
(7, '2019_08_05_095052_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `networks`
--

CREATE TABLE `networks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idTitle` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `networks`
--

INSERT INTO `networks` (`id`, `url`, `icon`, `idTitle`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/stahlsolucionesindustriales/', 'fab fa-facebook-f', 16, NULL, NULL),
(2, 'https://www.instagram.com/stahl_solind/', 'fab fa-instagram', 16, NULL, NULL),
(3, '#', 'fab fa-linkedin-in', 16, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titles`
--

CREATE TABLE `titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `titles`
--

INSERT INTO `titles` (`id`, `name`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'MENU_LOGOTIPO', 'Logotipo Stahl', 'images/logo-stahl-white.svg', NULL, NULL),
(2, 'ISO', 'iso 9001:2015', 'images/iso9001.svg', NULL, NULL),
(3, 'INICIO', 'La calidad es nuestra prioridad', 'Servicio profesional y especializado de maquinados industriales de alta precisión CNC', NULL, '2019-08-06 20:28:55'),
(4, 'INICIO_MEDIA', NULL, 'videos/1905072923.mp4', NULL, '2019-08-10 18:00:41'),
(5, 'NOSOTROS', 'Nosotros', 'es una empresa mexicana enfocada al maquinado de piezas metálicas con alta precisión, nuestro compromiso es exceder las espectativas de nuestros clientes elaborando piezas con la mejor calidad así como hacer las entregas en tiempo y forma.', NULL, NULL),
(6, 'SERVICIOS', 'Servicios', 'Especializados en maquinados CNC', NULL, NULL),
(7, 'SERVICIO_M', 'Maquinado', 'images/769589253.jpeg', NULL, '2020-03-26 03:40:53'),
(8, 'SERVICIO_T', 'Torno', 'images/811158878.jpeg', NULL, '2020-03-26 04:16:16'),
(9, 'SERVICIO_S', 'Soldadura', 'images/925999595.jpg', NULL, '2019-08-10 17:06:04'),
(10, 'TRABAJOS', 'Nuestros trabajos hablan por si solos.', 'Conoce más sobre ellos.', NULL, NULL),
(11, 'CLIENTES', 'Clientes', NULL, NULL, NULL),
(12, 'CONTACTO', 'Contacto', NULL, NULL, NULL),
(13, 'UBICACION', 'Ubicación', NULL, NULL, NULL),
(14, 'TELEFONO', 'Teléfono', '+52 1 844 4393329', NULL, NULL),
(15, 'EMAIL', 'Correo', 'admin@s-stahl.com', NULL, NULL),
(16, 'FOOTER', 'STAHL 2019', NULL, NULL, NULL),
(17, 'CLIENTES_BACKGROUND', NULL, 'images/129186488.jpg', NULL, '2019-08-10 17:25:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubications`
--

CREATE TABLE `ubications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `street` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colony` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `located` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idTitle` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ubications`
--

INSERT INTO `ubications` (`id`, `street`, `colony`, `located`, `idTitle`, `created_at`, `updated_at`) VALUES
(1, 'Blvd. Vito Alessio Robles #3045', 'Col. Valle del Rio Grande,', 'Saltillo Coahuila.', 13, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'STAHL', 'admin@s-stahl.com', NULL, '$2y$10$ZP4eLd3ton7vSBHJ13vW/uPj85hC57.4JqowyEJgmt814GfwIMtUS', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_idtitle_foreign` (`idTitle`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `networks`
--
ALTER TABLE `networks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `networks_idtitle_foreign` (`idTitle`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ubications`
--
ALTER TABLE `ubications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ubications_idtitle_foreign` (`idTitle`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `networks`
--
ALTER TABLE `networks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `titles`
--
ALTER TABLE `titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `ubications`
--
ALTER TABLE `ubications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_idtitle_foreign` FOREIGN KEY (`idTitle`) REFERENCES `titles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `networks`
--
ALTER TABLE `networks`
  ADD CONSTRAINT `networks_idtitle_foreign` FOREIGN KEY (`idTitle`) REFERENCES `titles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `ubications`
--
ALTER TABLE `ubications`
  ADD CONSTRAINT `ubications_idtitle_foreign` FOREIGN KEY (`idTitle`) REFERENCES `titles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
