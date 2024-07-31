-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-07-2024 a las 09:05:38
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
-- Estructura de tabla para la tabla `asignacionincidente`
--

CREATE TABLE `asignacionincidente` (
  `idasignacion` int(5) NOT NULL,
  `tecnico` int(5) NOT NULL,
  `incidente` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidente`
--

CREATE TABLE `incidente` (
  `idIncidente` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `categoria` varchar(35) NOT NULL,
  `subcategoria` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `contacto` varchar(35) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `estado` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(35) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `tipo_usuario` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id_login`, `usuario`, `clave`, `nombre`, `apellido`, `mail`, `tipo_usuario`) VALUES
(1, 'adm', 'adm', 'Administrador', 'IT', 'admIT@gmail.com', 2),
(6, 'tecnico', 'tecnico', 'Tecnico', 'IT', 'tecnicoIT@gmail.com', 1),
(8, 'usr', 'usr', 'Usuario', 'IT', 'usrIT@gmail.com', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignacionincidente`
--
ALTER TABLE `asignacionincidente`
  ADD PRIMARY KEY (`idasignacion`),
  ADD KEY `asignacionTecnico` (`tecnico`),
  ADD KEY `asignacionIncidente` (`incidente`);

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
-- AUTO_INCREMENT de la tabla `asignacionincidente`
--
ALTER TABLE `asignacionincidente`
  MODIFY `idasignacion` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `incidente`
--
ALTER TABLE `incidente`
  MODIFY `idIncidente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignacionincidente`
--
ALTER TABLE `asignacionincidente`
  ADD CONSTRAINT `asignacionIncidente` FOREIGN KEY (`incidente`) REFERENCES `incidente` (`idIncidente`),
  ADD CONSTRAINT `asignacionTecnico` FOREIGN KEY (`tecnico`) REFERENCES `login` (`id_login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
