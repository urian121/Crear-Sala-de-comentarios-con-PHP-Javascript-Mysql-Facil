-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-01-2022 a las 20:14:08
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
  `user_presente` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_presente_photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `msjUser` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateMsjs` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HoursMsjs` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `salacomentarios`
--

INSERT INTO `salacomentarios` (`id`, `user_presente`, `user_presente_photo`, `msjUser`, `dateMsjs`, `HoursMsjs`) VALUES
(294, 'Host TURS', 'Host TURS6f371c81d3.webp', 'bienvenidosd sytodsadasdasd', '05/01/2022 01:57 pm', '01:57 pm'),
(295, 'Host TURS', 'Host TURS6f371c81d3.webp', 'hola quien esta alli', '05/01/2022 01:57 pm', '01:57 pm'),
(296, 'Host TURS', 'Host TURS6f371c81d3.webp', 'podrian saludade', '05/01/2022 01:57 pm', '01:57 pm');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=297;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
