-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-01-2022 a las 19:03:20
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdcomentarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salacomentarios`
--

CREATE TABLE `salacomentarios` (
  `id` int(11) NOT NULL,
  `de` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fotoUser` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `msjUser` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateMsjs` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HoursMsjs` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `salacomentarios`
--

INSERT INTO `salacomentarios` (`id`, `de`, `fotoUser`, `msjUser`, `dateMsjs`, `HoursMsjs`) VALUES
(93, 'Urian', NULL, 'eqwe', '28/12/2021 03:00 pm', '03:00 pm'),
(94, 'Urian', NULL, 'eqweqweqweqwe', '28/12/2021 03:00 pm', '03:00 pm'),
(95, 'Urian', NULL, 'eqwe', '28/12/2021 03:00 pm', '03:00 pm'),
(96, 'Urian', NULL, 'qwe', '28/12/2021 03:00 pm', '03:00 pm'),
(97, 'Urian', NULL, 'qweq', '28/12/2021 03:00 pm', '03:00 pm'),
(98, 'Urian', NULL, 'wee', '28/12/2021 03:00 pm', '03:00 pm'),
(99, 'Urian', NULL, 'qweqwe', '28/12/2021 03:00 pm', '03:00 pm'),
(100, 'Urian', NULL, 'eqwe', '28/12/2021 03:00 pm', '03:00 pm'),
(101, 'Urian', NULL, 'qwe', '28/12/2021 03:00 pm', '03:00 pm'),
(102, 'Urian', NULL, 'weqweqwe', '28/12/2021 03:01 pm', '03:01 pm'),
(103, 'Urian', NULL, 'eqwe', '28/12/2021 03:01 pm', '03:01 pm'),
(104, 'Urian', NULL, 'qw', '28/12/2021 03:01 pm', '03:01 pm'),
(105, 'Urian', NULL, 'qw', '28/12/2021 03:01 pm', '03:01 pm'),
(106, 'Urian', NULL, 'qwe', '28/12/2021 03:01 pm', '03:01 pm'),
(107, 'Urian', NULL, 'qwe', '28/12/2021 03:01 pm', '03:01 pm'),
(108, 'Urian', NULL, 'dsd', '28/12/2021 03:02 pm', '03:02 pm'),
(109, 'Urian', NULL, 'sd', '28/12/2021 03:02 pm', '03:02 pm'),
(110, 'Urian', NULL, 'asd', '28/12/2021 03:02 pm', '03:02 pm'),
(111, 'Urian', NULL, 'dasd', '28/12/2021 03:02 pm', '03:02 pm'),
(112, 'Urian', NULL, 'd', '28/12/2021 03:02 pm', '03:02 pm'),
(113, 'Urian', NULL, 'hola', '28/12/2021 03:03 pm', '03:03 pm'),
(114, 'Urian', NULL, 'ho', '28/12/2021 03:03 pm', '03:03 pm'),
(115, 'Urian', NULL, 'f', '28/12/2021 03:03 pm', '03:03 pm'),
(116, 'Urian', NULL, 'f', '28/12/2021 03:04 pm', '03:04 pm'),
(117, 'Urian', NULL, 'f', '28/12/2021 03:04 pm', '03:04 pm'),
(118, 'Urian', NULL, 'f', '28/12/2021 03:04 pm', '03:04 pm'),
(119, 'Urian', NULL, 'f', '28/12/2021 03:04 pm', '03:04 pm'),
(120, 'Urian', NULL, 'dsadas', '28/12/2021 03:05 pm', '03:05 pm'),
(121, 'Urian', NULL, 'ñ', '28/12/2021 03:07 pm', '03:07 pm'),
(122, 'Urian', NULL, 'fff', '28/12/2021 03:08 pm', '03:08 pm'),
(123, 'Urian', NULL, 'hooo', '28/12/2021 03:10 pm', '03:10 pm'),
(124, 'Urian', NULL, 'g', '28/12/2021 03:12 pm', '03:12 pm');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `salacomentarios`
--
ALTER TABLE `salacomentarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `salacomentarios`
--
ALTER TABLE `salacomentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
