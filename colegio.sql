-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:33065
-- Tiempo de generación: 22-02-2023 a las 03:44:10
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
-- Base de datos: `crud1_php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `colegio` (
  `id` int(11) NOT NULL,
  `dni` int(9) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `colegio` (`id`, `dni`, `nombres`, `apellidos`) VALUES
(101, 73401020, 'Ana Rosa', 'Jimenez Ramos'),
(102, 78501021, 'Raul Pablo', 'Lopez Fernandez'),
(103, 78951120, 'Juan Carlos', 'Gutierrez Tito'),
(104, 78541085, 'Luis Miguel', 'Torres Perez'),
(105, 78541086, 'Sandra Maria', 'Lara Montes'),
(106, 78541087, 'Juan Carlos', 'Mestanza Ticona'),
(107, 78541014, 'Sandra Maria', 'Lara Montalvan'),
(108, 78541081, 'Juan Carlos', 'Lara Soto'),
(109, 78541014, 'Jose Arturo', 'Manzanal Torres'),
(110, 78541095, 'Luis Ronald', 'Muñoz Arteaga');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `colegio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `colegio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
