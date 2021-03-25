-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 25-03-2021 a las 16:21:23
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `Id` int(11) NOT NULL,
  `Cod` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Career` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `State` int(11) NOT NULL,
  `Created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`Id`, `Cod`, `Name`, `Career`, `State`, `Created_at`, `updated_at`) VALUES
(1, 'SIS201901', 'Yisus Gutierrez', 'Ing Sistemas', 1, '2021-03-23 18:06:19', '2021-03-25 14:16:40'),
(2, 'SIS201902', 'Roberto Rivero', 'Ing Sistemas', 1, '2021-03-23 23:13:25', '2021-03-25 14:16:57'),
(3, 'SIS201903', 'ana patricia', 'Ing Sistemas', 1, '2021-03-23 23:16:45', '2021-03-25 14:17:06'),
(4, 'SIS201904', 'Hector Mollo', 'Ing Sistemas', 1, '2021-03-24 23:45:41', '2021-03-25 14:17:27'),
(5, 'SIS201905', 'Ronald Delgado', 'Ing Sistemas', 1, '2021-03-24 23:47:21', '2021-03-25 14:17:43'),
(6, 'SIS201906', 'Erick Justiniano', 'Ing. Redes y Telecomunicaciones', 1, '2021-03-25 16:16:04', '2021-03-25 16:16:04'),
(7, 'SIS201907', 'Jesus Mollo', 'Ing. Redes y Telecomunicaciones', 1, '2021-03-25 16:18:50', '2021-03-25 16:18:50');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
