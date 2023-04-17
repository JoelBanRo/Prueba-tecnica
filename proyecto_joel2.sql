-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2023 a las 04:41:32
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_joel2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_vehiculo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `nombres` varchar(255) DEFAULT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `identificacion` int(55) DEFAULT NULL,
  `profesion_oficio` varchar(255) DEFAULT NULL,
  `es_casado` varchar(10) DEFAULT NULL,
  `ingresos_mensuales` int(20) DEFAULT NULL,
  `vehiculo_actual` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nombres`, `apellidos`, `fecha_nacimiento`, `identificacion`, `profesion_oficio`, `es_casado`, `ingresos_mensuales`, `vehiculo_actual`) VALUES
(1, 'joel', 'bandera', '2023-04-16', 1002, 'programador', 'no', 200, 'AUDI'),
(2, '', '', '0000-00-00', 0, '', '', 0, ''),
(3, '', '', '0000-00-00', 0, '', '', 0, ''),
(4, '', '', '0000-00-00', 0, '', '', 0, ''),
(5, '', '', '0000-00-00', 0, '', '', 0, '3'),
(6, 'usd', 'jkn', '0000-00-00', 5115151, 'jn', 'jnj', 0, '5'),
(7, 'LKMM', 'KMLKM', '0000-00-00', 4484, 'LÑ,L', 'NHB', 0, '3'),
(8, 'km', 'mkmkm', '0000-00-00', 456454, 'jkmkj', 'lkjlk', 0, '3'),
(9, 'lkmk', 'kml', '0000-00-00', 5454, 'lkmkl', 'kmlkkl', 5454, '3'),
(10, 'jknjkJNJ', 'JNJ', '0000-00-00', 54564, 'MLKM', 'KMLKM', 5745, '3'),
(11, 'MKLmkm', 'KMKL', '0000-00-00', 55754, 'KMLK', 'MKLM', 5457, '5'),
(12, 'LKLMLKMkm', 'klk', '0000-00-00', 57545, 'kl', 'lkjkj', 54575, '5'),
(13, 'LKLMLKMkm', 'klk', '0000-00-00', 57545, 'kl', 'lkjkj', 54575, '5'),
(14, 'LKLMLKMkm', 'klk', '0000-00-00', 57545, 'kl', 'lkjkj', 54575, '5'),
(15, 'LKLMLKMkm', 'klk', '0000-00-00', 57545, 'kl', 'lkjkj', 54575, '5'),
(16, 'LKLMLKMkm', 'klk', '0000-00-00', 57545, 'kl', 'lkjkj', 54575, '5'),
(17, 'LKLMLKMkm', 'klk', '0000-00-00', 57545, 'kl', 'lkjkj', 54575, '5'),
(18, 'lkmlkm', 'kmlkm', '0000-00-00', 545775, 'kmlkm', 'lkmlk', 8457, '3'),
(19, 'jjnjnj', 'jnkj', '0000-00-00', 74455, 'kjnkjnj', 'ljljmlk', 545554, '3'),
(20, 'lklkmKM', 'KMK445', '0000-00-00', 445, 'KMLKM', 'KMLKM', 5754, '3'),
(21, 'lklkmKM', 'KMK445', '0000-00-00', 445, 'KMLKM', 'KMLKM', 5754, '3'),
(22, 'lklkmKM', 'KMK445', '0000-00-00', 445, 'KMLKM', 'KMLKM', 5754, '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `id` int(11) NOT NULL,
  `placa` varchar(255) DEFAULT NULL,
  `marca` varchar(255) DEFAULT NULL,
  `modelo` varchar(255) DEFAULT NULL,
  `numero_puertas` int(11) DEFAULT NULL,
  `tipo_vehiculo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`id`, `placa`, `marca`, `modelo`, `numero_puertas`, `tipo_vehiculo`) VALUES
(3, '887hgf', 'AUDI', 'A7', 2, 'COUPE'),
(5, '887AAA', 'AUDI', 'R8', 2, 'DEPORTIVO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
