-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-03-2018 a las 16:11:43
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

--
-- Volcado de datos para la tabla `inmuebles`
--

INSERT INTO `inmuebles` (`id_inmueble`, `tipo`, `localizacion`, `situacion`, `descripcion`, `metroscuadrados`, `valor`, `categoria`, `pertenencia`) VALUES
(2343422, 'ejemplo', 'calle pummarin de alcovengas', 'en venta', 'pues es bonito y tal ', 130, 1232323, 2, 'pinpinela'),
(3456453, 'pin', 'pan', 'toma', 'lacasitos', 90, 345343534, 2, 'rey');

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

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_inmueble`, `conserje`, `seguridad`, `accesominusvalidos`, `zonacomunitaria`) VALUES
(2343422, 1, 1, 1, 1),
(3456453, 0, 0, 0, 0);

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

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `admin`, `favoritos`, `nombre`, `email`, `contrasena`, `votos`) VALUES
(47315, 0, ' ', 'sdsad', 'ererer@sddsf.es', '$2y$11$cCdrFFvQJI5FToOd.0Et/OlcQcSm6nGokSqxvTuEwgZMSBLbFNsHO', ' '),
(64611, 0, ' ', 'dfsfsdf', 'pepe@dsf.es', '$2y$11$wu7wgB9NY.jw0T2ohUdDpuuaibi9RnnAp7nvyMGukvhgaN7UvjzQe', ' '),
(76512, 0, ' ', 'sdsdassdsdd', 'sdad@sdas.es', '$2y$11$yG5fda4wdqvR.xLQzRkx6.JxQn1SuVWF6vKFxDDMUuZxdiQ8s6D5.', ' '),
(134213, 0, ' ', 'sdfdsf', 'dfdsfg@dsf.es', '$2y$11$hAI25299xZlz8BAYcSmTv.TYI3ZzIEpMPkBR3kBR1yglTU2bxlK3q', ' '),
(366113, 0, ' ', 'sdsdsds', 'endfsdf@sd.es', '$2y$11$HsKNvn.a9VwtnG4iusBskevdcVuhj9iPyjEegZaT1CkwgjpXlhKpm', ' '),
(534413, 0, ' ', 'fefefefff', 'perez@sdsd.es', '$2y$11$KjkLROINbfB7LT7GuXekEe5mUUWqOfNhxLeR7h19pzq5duL8ssSp6', ' '),
(969617, 0, ' ', 'sdsader', 'ererer@sderdsf.es', '$2y$11$3zqkeK9al5eFQSrtLkqrn.JIiumn7nDxyqdycDz0kBoZCw497YGOm', ' '),
(1713414, 0, ' ', 'sdsdadaasd', 'wewe@sadasd.es', '$2y$11$QhaTmhKrLlC3QZ.NsXpmxukQ2wESc3ZCwGCUozDNE3gNA72bJyuO6', ' '),
(2266515, 0, ' ', 'sdsdasd', 'peperoni@dor.es', '$2y$11$2ddUVijTjKthwqDkTzFkKOIWGHjF6OsVah58Mhw0obSYuiudS4Yc2', ' '),
(3395014, 0, ' ', 'asdsad', 'felipe@sdsd.es', '$2y$11$yzn7/HOClp92aS.pO/Oose8Ke6TNHq13IIIluXhHzYPEoGAfNNL0G', ' ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votos`
--

CREATE TABLE `votos` (
  `visitas` int(11) NOT NULL,
  `id_inmueble` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `votos`
--

INSERT INTO `votos` (`visitas`, `id_inmueble`) VALUES
(34, 2343422),
(2, 3456453);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas`
--

CREATE TABLE `zonas` (
  `id_inmueble` int(11) NOT NULL,
  `banos` int(11) NOT NULL,
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
-- Volcado de datos para la tabla `zonas`
--

INSERT INTO `zonas` (`id_inmueble`, `banos`, `habitaciones`, `jardin`, `terraza`, `balcon`, `patio`, `piscina`, `garaje`, `ascensor`, `pisos`) VALUES
(2343422, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1),
(3456453, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
