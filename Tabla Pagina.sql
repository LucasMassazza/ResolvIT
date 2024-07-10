-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2024 a las 23:47:16
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestorincidentes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidente`
--

CREATE TABLE `incidente` (
  `idIncidente` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `resumen` varchar(255) NOT NULL,
  `fecha_creacion` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `incidente`
--

INSERT INTO `incidente` (`idIncidente`, `nombre`, `resumen`, `fecha_creacion`, `descripcion`, `apellido`, `mail`) VALUES
(1, 'Lucas', 'resumen', '07/10/2024', 'resumen', 'Massazza', 'lmassazza@gmail.com'),
(2, 'Lucas', 'resumen', '07/10/2024', 'resumen', 'Massazza', 'lmassazza@gmail.com'),
(3, 'Lucas', 'resumen', '07/10/2024', 'resumen', 'Massazza', 'lmassazza@gmail.com'),
(4, 'Lucas', 'dsda', '07/10/2024', 'sda', 'Massazza', 'lmassazza@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id_login` int(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `administrador` tinyint(1) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id_login`, `usuario`, `clave`, `administrador`, `nombre`, `apellido`, `mail`) VALUES
(1, 'adm', 'adm', 1, 'Administrador', 'Administrador', 'adm@gmail.com'),
(2, 'usuario', '1234', 0, 'Lucas', 'Massazza', 'lmassazza@gmail.com'),
(3, 'fiorella', '1234', 0, 'Fiorella', 'Luzzi', 'fluzzi@gmail.com'),
(4, '', '12345', 0, 'Matias', 'Bertino', 'mbertino@gmail.com'),
(5, 'masitamc', '12345', 0, 'Matias', 'Bertino', 'mbertino@gmail.com'),
(6, 'alfredo12', '12345', 0, 'Alfredo', 'Hernandez', 'Ahernandez@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `incidente`
--
ALTER TABLE `incidente`
  ADD PRIMARY KEY (`idIncidente`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `incidente`
--
ALTER TABLE `incidente`
  MODIFY `idIncidente` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
