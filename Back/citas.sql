-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2022 a las 03:04:11
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `citas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Raza` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Edad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Motivo_Cita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fecha_Cita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Propietario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `Nombre`, `Raza`, `Edad`, `Motivo_Cita`, `Fecha_Cita`, `Propietario`, `Imagen`, `created_at`, `updated_at`) VALUES
(1, 'Manchas', 'Pitbull', '1 año', 'revisión general', '16 de Mayo', 'Ricardo', 'assets/img/portfolio/pitbull.png', '2022-05-09 03:00:01', '2022-05-09 04:53:47'),
(3, 'Goliat', 'Chihuahua', '4 años', 'Lesiones en piel', '20 de Mayo', 'Alma Rodríguez', 'assets/img/portfolio/chihuahua.jpg', '2022-05-09 04:27:25', '2022-05-09 05:23:10'),
(4, 'Pinky', 'Pastor Alemán', '2 meses', 'Primer Vacuna', '01 de Junio', 'Isabel Mendoza', 'assets/img/portfolio/pastor.jpg', '2022-05-09 04:29:15', '2022-05-09 05:23:23'),
(5, 'Max', 'Poodle', '8 años', 'revisión general', '20 de Junio', 'Eduardo Sánchez', 'assets/img/portfolio/poo.jpg', '2022-05-09 04:30:24', '2022-05-09 05:23:38'),
(6, 'Canela', 'Labrador', '1 mes', 'Primer Vacuna', '22 de Junio', 'Anabel Rosales', 'assets/img/portfolio/labrador.jpg', '2022-05-09 05:21:23', '2022-05-09 05:28:52'),
(7, 'Perla', 'Bóxer', '3 años', 'Rascado Excesivo', '28 de Junio', 'Raúl Mendoza', 'assets/img/portfolio/boxér.jpg', '2022-05-09 05:22:55', '2022-05-09 05:30:32'),
(8, 'Rex', 'Pug', '2 meses', 'revisión general', '01 de Julio', 'José Hernández', 'assets/img/portfolio/pugf.png', '2022-05-09 05:25:12', '2022-05-09 05:36:38'),
(9, 'Cazador', 'bulldog', '1 año', 'Perdida de Pelaje', '20 de Agosto', 'Adriana González', 'assets/img/portfolio/bulldog.jpg', '2022-05-09 05:26:39', '2022-05-09 05:33:58'),
(10, 'Lucas', 'Pekín Americano', '1 año', 'revisión general', '25 de Agosto', 'Pablo López', 'assets/img/portfolio/pato.jpg', '2022-05-09 05:46:35', '2022-05-09 05:48:07'),
(11, 'Olga', 'Iguana Verde', '2 años', 'revisión general', '01 de Septiembre', 'Matilde Aguilar', 'assets/img/portfolio/iguana.jpg', '2022-05-09 05:52:33', '2022-05-09 05:54:22');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
