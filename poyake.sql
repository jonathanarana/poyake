-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 28-07-2020 a las 11:20:59
-- Versión del servidor: 10.3.22-MariaDB-0+deb10u1
-- Versión de PHP: 7.3.19-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `poyake`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(254) NOT NULL,
  `price` float(11,2) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `list`
--

INSERT INTO `list` (`id`, `quantity`, `description`, `price`, `active`) VALUES
(1, 1, 'producto de prueba', 50.00, 1),
(2, 1, 'gfhgf', 1.00, 0),
(3, 1, 'stop', 100.00, 0),
(4, 1, 'ok', 200.00, 0),
(5, 1, 'fg', 1.00, 0),
(6, 1, 'fdggd', 1.00, 0),
(7, 1, 'fdgfdg', 1.00, 0),
(8, 1, 'ghbf', 1.00, 0),
(9, 1, 'ghbf', 1.00, 0),
(10, 1, 'ghbf', 1.00, 0),
(11, 1, 'ghbf', 1.00, 0),
(12, 1, 'ghbf', 1.00, 0),
(13, 1, 'fbf', 1.00, 0),
(14, 1, 'fbf', 1.00, 0),
(15, 1, 'fbf', 1.00, 0),
(16, 1, 'fbf', 1.00, 0),
(17, 1, 'fbf', 1.00, 0),
(18, 1, 'fbf', 1.00, 0),
(19, 1, 'fgfdg', 1.00, 0),
(20, 1, 'res', 1.00, 0),
(21, 1, 'start', 1.00, 0),
(22, 1, 'sfc', 1.00, 0),
(23, 1, 'okey', 1.00, 0),
(24, 1, 'oket', 100.00, 0),
(25, 1, 'okey2', 100.00, 0),
(26, 1, 'demo', 1.00, 0),
(27, 1, 'ds', 1.00, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
