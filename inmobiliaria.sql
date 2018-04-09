-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-04-2018 a las 13:25:55
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `provincia` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `calle` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `situacion` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `metroscuadrados` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `pertenencia` char(25) COLLATE utf8_spanish_ci NOT NULL,
  `imagenes` varchar(365) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` bigint(20) NOT NULL,
  `imagenpri` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `inmuebles`
--

INSERT INTO `inmuebles` (`id_inmueble`, `tipo`, `localizacion`, `provincia`, `ciudad`, `calle`, `situacion`, `descripcion`, `metroscuadrados`, `valor`, `categoria`, `pertenencia`, `imagenes`, `fecha`, `imagenpri`) VALUES
(15019, 'apartamento', 'guipuzcoa,Donosti,El mejor,13 2ÂºD', 'guipuzcoa', 'Donosti', 'El mejor,13 2ÂºD', 'venta', 'Apartamento con dos cocinas para cocinar rico rico aiba la hostia', 110, 110000, 4, 'Don Federio Figueroa', '150190-home-02.jpg ,  Imagenes ', 20180409112443, '/inmobiliaria/public/images/150190-home-02.jpg'),
(18579, 'apartamento', 'guipuzcoa,Donosti,Zapaleta,345 2Âºc', 'guipuzcoa', 'Donosti', 'Zapaleta,345 2Âºc', 'venta', 'Amplio Apartamento aiba la hostia', 90, 120000, 3, 'Alejandro Vazquez', '185790-home-01.jpg ,  Imagenes ', 20180409110748, '/inmobiliaria/public/images/185790-home-01.jpg'),
(26827, 'chalet', 'caceres,Caceres,Paseo del naval,14 3ÂºB', 'caceres', 'Caceres', 'Paseo del naval,14 3ÂºB', 'venta', 'Chalet a las afueras de caceres con un jardincito para plantar plantitas', 200, 240000, 6, 'Colmin Minmin', '268270-home-04.jpg ,  Imagenes ', 20180409111504, '/inmobiliaria/public/images/268270-home-04.jpg'),
(33519, 'apartamento', 'guipuzcoa,Donosti,Barratxo,21 4ÂºC', 'guipuzcoa', 'Donosti', 'Barratxo,21 4ÂºC', 'venta', '', 95, 115000, 4, 'Sorio Donovam', '335190-home-05.jpg ,  Imagenes ', 20180409111031, '/inmobiliaria/public/images/335190-home-05.jpg'),
(119958, 'tierras', 'asturias,Zurito,La providencia,65 1ÂºA', 'asturias', 'Zurito', 'La providencia,65 1ÂºA', 'alquiler', 'Mis tierrinas oh ah', 200, 2000, 5, 'Isidoro Matias', '1199580-naveindustrial-03.jpg ,  Imagenes ', 20180409110518, '/inmobiliaria/public/images/1199580-naveindustrial-03.jpg'),
(136388, 'parcela', 'asturias,Gijon,El periquito,21', 'asturias', 'Gijon', 'El periquito,21', 'alquiler', 'Parcelita para tomar el sol de asturies ', 150, 0, 2, 'Emilio Emiliano', '1363880-home-02.jpg ,  Imagenes ', 20180409111737, '/inmobiliaria/public/images/1363880-home-02.jpg'),
(198579, 'Nave industrial', 'castellon,Corino,Poligono 45,23 ', 'castellon', 'Corino', 'Poligono 45,23 ', 'alquiler', 'Nave amplia y barata', 120, 2000, 2, 'Argonas S.A', '1985790-naveindustrial-03.jpg ,  Imagenes ', 20180409112754, '/inmobiliaria/public/images/1985790-naveindustrial-03.jpg'),
(445786, 'local', 'cuenca,Cuenca,La bendicion,45 1Âº', 'cuenca', 'Cuenca', 'La bendicion,45 1Âº', 'venta', 'Local amplio', 110, 100000, 3, 'Durin Turanbar', '4457860-static-home.jpg ,  Imagenes ', 20180409110202, '/inmobiliaria/public/images/4457860-static-home.jpg'),
(457710, 'Nave industrial', 'ciudadreal,San Antonio,Poligono de Valderojo,34', 'ciudadreal', 'San Antonio', 'Poligono de Valderojo,34', 'venta', 'Poligono cerca de la ciudad y de la autopista perfecta para transportes.', 130, 100000, 4, 'Surun S.A', '4577100-naveindustrial-02.jpg ,  Imagenes ', 20180409113054, '/inmobiliaria/public/images/4577100-naveindustrial-02.jpg'),
(583666, 'Nave industrial', 'huesca,Huesca,Poligono Norte,37', 'huesca', 'Huesca', 'Poligono Norte,37', 'venta', 'Nave amplia y barata en el poligono norte.', 150, 120000, 3, 'Larkin S.A', '5836660-naveindustrial-01.jpg ,  Imagenes ', 20180409113401, '/inmobiliaria/public/images/5836660-naveindustrial-01.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `imagenes` text NOT NULL,
  `contenido` text NOT NULL,
  `titulo` varchar(40) NOT NULL,
  `descripcion` text NOT NULL,
  `id_noticia` int(11) NOT NULL,
  `fecha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_inmueble` int(11) NOT NULL,
  `conserje` int(11) DEFAULT NULL,
  `seguridad` int(11) DEFAULT NULL,
  `accesominusvalidos` int(11) DEFAULT NULL,
  `zonacomunitaria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_inmueble`, `conserje`, `seguridad`, `accesominusvalidos`, `zonacomunitaria`) VALUES
(15019, 0, 0, 0, 0),
(18579, 0, 0, 1, 0),
(26827, 0, 0, 0, 0),
(33519, 0, 0, 1, 0),
(119958, 0, 0, 0, 0),
(136388, 0, 0, 0, 0),
(198579, 0, 0, 0, 0),
(445786, 0, 0, 1, 0),
(457710, 0, 0, 0, 0),
(583666, 0, 0, 0, 0);

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
(74215, 0, ' ', 'fgrgrgtttt', 'effef@dfgdfg.es', '$2y$11$C1FoJ4dkQmYRnCTYZVlUg.LkWSE9ND.hpVTvmL4Yt9ZX2jeEW2swC', ' '),
(76512, 0, ' ', 'sdsdassdsdd', 'sdad@sdas.es', '$2y$11$yG5fda4wdqvR.xLQzRkx6.JxQn1SuVWF6vKFxDDMUuZxdiQ8s6D5.', ' '),
(134213, 0, ' ', 'sdfdsf', 'dfdsfg@dsf.es', '$2y$11$hAI25299xZlz8BAYcSmTv.TYI3ZzIEpMPkBR3kBR1yglTU2bxlK3q', ' '),
(325215, 0, ' ', 'dfsdfdfdfsss', 'ererre@dfgf.rde', '$2y$11$NtEaRaUBZLOhKtjV7Dw6sOqOWg66O/HwMJS6kOPqDy0l/ZczQ4BdG', ' '),
(366113, 0, ' ', 'sdsdsds', 'endfsdf@sd.es', '$2y$11$HsKNvn.a9VwtnG4iusBskevdcVuhj9iPyjEegZaT1CkwgjpXlhKpm', ' '),
(534413, 0, ' ', 'fefefefff', 'perez@sdsd.es', '$2y$11$KjkLROINbfB7LT7GuXekEe5mUUWqOfNhxLeR7h19pzq5duL8ssSp6', ' '),
(544514, 0, ' ', 'elias', 'eliaas@fefe.es', '$2y$11$X6osmgP9eKodp3o5mnpY8OPMEbKk4WfSX1wvSHInrt0HqCDxdIjzq', ' '),
(562016, 0, ' ', 'fsdfdsf', 'ddfgdf@asdad.esg', '$2y$11$7W4xXsXjncKCuSUIIWYlee21gT8Q/ExdFFdlfA5XMnOyJuiZXMrry', ' '),
(618915, 0, ' ', 'sdfsdfsdfdd', 'ddfgdf@asdad.es', '$2y$11$47xfWF5ZfRs0BMz5ePEfGuqKdwlBNfawQ8742NFGpQNJqWIZf5eP.', ' '),
(691813, 1, ' ', 'pepitogrillo', 'pepe@gmail.es', '$2y$11$wUjx7EiUVMw8qRzNWbdOKOTCY8974mC028L3LPReLSBRbPfdKhiY.', ' '),
(877816, 0, ' ', 'emiliano', 'emilio@gmail.com', '$2y$11$sMOYJpS0R01PkYMDx./lFuuMMyOujpVCY35q/Gf23wmFAuE5jtJ4m', ' '),
(969617, 0, ' ', 'sdsader', 'ererer@sderdsf.es', '$2y$11$3zqkeK9al5eFQSrtLkqrn.JIiumn7nDxyqdycDz0kBoZCw497YGOm', ' '),
(1302216, 0, ' ', 'sdsdsdsd', 'sdfsdf@sdsdsd.es', '$2y$11$Zku58ryQVxDx6kdXuq8KGeGBsoNZXCYruhfSa44UbPP9IG71KLmxe', ' '),
(1314616, 0, ' ', 'dfdgdfg', 'tretret@fhfgh.es', '$2y$11$Yd7VScIae2pFFhuxzDy.sON3fdIf08.33zsi2gtffPzEmmDDZ2Mcq', ' '),
(1713414, 0, ' ', 'sdsdadaasd', 'wewe@sadasd.es', '$2y$11$QhaTmhKrLlC3QZ.NsXpmxukQ2wESc3ZCwGCUozDNE3gNA72bJyuO6', ' '),
(2266515, 0, ' ', 'sdsdasd', 'peperoni@dor.es', '$2y$11$2ddUVijTjKthwqDkTzFkKOIWGHjF6OsVah58Mhw0obSYuiudS4Yc2', ' '),
(2639515, 1, ' ', 'administrador', 'admin@admin.com', '$2y$11$8fPMdbw.RAhZuBMGeoyADOX6Ld/qGK4OOIv0SHSM5kA9aZHn8ObPS', ' '),
(3151817, 0, ' ', 'fefefefe', 'dfdf@defgdfdf.ere', '$2y$11$vCmKn3zH8BVNU/Yk4wCiCeHhKT7l8wKg1/okv2I2jZvbSvppJPFEC', ' '),
(3395014, 0, ' ', 'asdsad', 'felipe@sdsd.es', '$2y$11$yzn7/HOClp92aS.pO/Oose8Ke6TNHq13IIIluXhHzYPEoGAfNNL0G', ' '),
(4905512, 0, ' ', 'dfddfdfdf', 'wewe@ssdf.es', '$2y$11$Ix.CgUYw0MQ8vfH5NB9G7.ryMHQY8qJPz17zwCPdwGZo3kMWhTwW.', ' '),
(6205017, 0, ' ', 'sdfdsfdsfee', 'hgjghj@dsfdfsf.es', '$2y$11$MW2XQnjvqAUL1xfpIUYzYute0T36wsTnunzwuLJ7mC1gfs04tyexG', ' '),
(6269314, 0, ' ', 'dsfsdfsdfa', 'fsdfdsf@dsf.es', '$2y$11$dpOGMII0x.JNi980Bl0ieeUUQkVyAzdN4YZzop4PLzEShPZjgLjV2', ' ');

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
(1, 15019),
(1, 18579),
(1, 26827),
(1, 33519),
(1, 119958),
(1, 136388),
(1, 198579),
(1, 445786),
(1, 457710),
(1, 583666);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas`
--

CREATE TABLE `zonas` (
  `id_inmueble` int(11) NOT NULL,
  `banos` int(11) DEFAULT NULL,
  `habitaciones` int(11) DEFAULT NULL,
  `jardin` int(11) DEFAULT NULL,
  `terraza` int(11) DEFAULT NULL,
  `balcon` int(11) DEFAULT NULL,
  `patio` int(11) DEFAULT NULL,
  `piscina` int(11) DEFAULT NULL,
  `garaje` int(11) DEFAULT NULL,
  `ascensor` int(11) DEFAULT NULL,
  `pisos` int(11) DEFAULT NULL,
  `cocina` int(11) DEFAULT NULL,
  `sotano` int(11) DEFAULT NULL,
  `desvan` int(11) DEFAULT NULL,
  `salon` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `zonas`
--

INSERT INTO `zonas` (`id_inmueble`, `banos`, `habitaciones`, `jardin`, `terraza`, `balcon`, `patio`, `piscina`, `garaje`, `ascensor`, `pisos`, `cocina`, `sotano`, `desvan`, `salon`) VALUES
(15019, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 2, 0, 0, 1),
(18579, 1, 2, 0, 0, 1, 1, 0, 1, 1, 0, 1, 0, 1, 1),
(26827, 3, 5, 1, 0, 3, 0, 0, 1, 0, 2, 1, 0, 0, 1),
(33519, 2, 3, 0, 0, 2, 0, 0, 0, 1, 0, 1, 0, 0, 0),
(119958, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(136388, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(198579, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0),
(445786, 1, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 1, 0),
(457710, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0),
(583666, 1, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
