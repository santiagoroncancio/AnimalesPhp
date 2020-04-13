-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-04-2020 a las 19:51:02
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mvcVet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adoption`
--

CREATE TABLE `adoption` (
  `id` int(11) NOT NULL,
  `idAnimal` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `date` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `reason` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animal`
--

CREATE TABLE `animal` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `specie` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `breed` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `gender` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `color` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `animal`
--

INSERT INTO `animal` (`id`, `name`, `specie`, `breed`, `gender`, `color`, `age`) VALUES
(6, 'Rodolfo', 'Perro', 'Guao Guao', 'macho', 'Marron', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `document` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `lastName` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `sex` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `document`, `name`, `lastName`, `sex`, `address`, `phone`, `age`) VALUES
(1, '1121956650', 'Santiago', 'Roncancio', 'Masculino', 'Mi casa ', '5555555', 21),
(3, '98082123', 'Pablo', 'Herrera', 'Masculino', 'Su casa', '6666699', 21),
(4, '1121954321', 'Fernanda', 'Saveedra', 'Masculino', 'Su casa', '3332211', 20),
(5, '1121956312', 'Pablo', 'Clavo Clavito', 'Masculino', 'Su casa', '1234', 23);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adoption`
--
ALTER TABLE `adoption`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAnimal` (`idAnimal`),
  ADD KEY `idUser` (`idUser`);

--
-- Indices de la tabla `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adoption`
--
ALTER TABLE `adoption`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `animal`
--
ALTER TABLE `animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adoption`
--
ALTER TABLE `adoption`
  ADD CONSTRAINT `adoption_ibfk_1` FOREIGN KEY (`idAnimal`) REFERENCES `animal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `adoption_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
