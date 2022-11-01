-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2022 a las 06:50:15
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `purebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iniciosesion`
--

CREATE TABLE `iniciosesion` (
  `id_aspirantes` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `folio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `iniciosesion`
--

INSERT INTO `iniciosesion` (`id_aspirantes`, `nombre`, `folio`) VALUES
(1, 'Angel Daniel Perez', 'APPA9701HD');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `iniciosesion`
--
ALTER TABLE `iniciosesion`
  ADD PRIMARY KEY (`id_aspirantes`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `iniciosesion`
--
ALTER TABLE `iniciosesion`
  MODIFY `id_aspirantes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
