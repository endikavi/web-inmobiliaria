-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2018 a las 16:13:52
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inmobiliaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles`
--

CREATE TABLE `inmuebles` (
  `id_inmueble` int(11) NOT NULL,
  `tipo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `localizacion` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `situacion` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `metroscuadrados` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `pertenencia` char(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_inmueble` int(11) NOT NULL,
  `conserje` tinyint(1) NOT NULL,
  `seguridad` tinyint(1) NOT NULL,
  `accesominusvalidos` tinyint(1) NOT NULL,
  `zonacomunitaria` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `favoritos` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombre` char(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` char(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contrasena` char(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `votos` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votos`
--

CREATE TABLE `votos` (
  `visitas` int(11) NOT NULL,
  `id_inmueble` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas`
--

CREATE TABLE `zonas` (
  `id_inmueble` int(11) NOT NULL,
  `baños` int(11) NOT NULL,
  `habitaciones` int(11) NOT NULL,
  `jardin` tinyint(1) NOT NULL,
  `terraza` tinyint(1) NOT NULL,
  `balcon` tinyint(1) NOT NULL,
  `patio` tinyint(1) NOT NULL,
  `piscina` tinyint(1) NOT NULL,
  `garaje` tinyint(1) NOT NULL,
  `ascensor` tinyint(1) NOT NULL,
  `pisos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  ADD UNIQUE KEY `id_inmueble` (`id_inmueble`),
  ADD KEY `id_inmueble_2` (`id_inmueble`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD UNIQUE KEY `id_inmueble` (`id_inmueble`),
  ADD KEY `id_inmueble_2` (`id_inmueble`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD UNIQUE KEY `id_usuario` (`id_usuario`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `contrasena` (`contrasena`),
  ADD KEY `id_usuario_2` (`id_usuario`);

--
-- Indices de la tabla `votos`
--
ALTER TABLE `votos`
  ADD UNIQUE KEY `id_inmueble` (`id_inmueble`),
  ADD KEY `id_inmueble_2` (`id_inmueble`);

--
-- Indices de la tabla `zonas`
--
ALTER TABLE `zonas`
  ADD UNIQUE KEY `id_inmueble` (`id_inmueble`),
  ADD KEY `id_inmueble_2` (`id_inmueble`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
