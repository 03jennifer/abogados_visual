-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2023 a las 11:55:11
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `abogados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE `agenda` (
  `cliente` varchar(40) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`cliente`, `fecha`, `id`) VALUES
('richi', '2023-06-13', 2),
('MARIA DEL CARMEN', '2024-11-13', 3),
('magdalena', '2024-09-01', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `documento` varchar(255) NOT NULL,
  `abogado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `Nombre`, `documento`, `abogado`) VALUES
(2, 'veronica lisset', 'documento/tarjetaNSS.pdf', 'John Branca'),
(3, 'richi', 'documento/StudentScheduleReport.pdf', 'Rubén Blades'),
(4, 'magdalena', 'documento/comprobanteNSS.pdf', 'Barack Obama'),
(9, 'MARIA DEL CARMEN', 'documento/StudentScheduleReport.pdf', 'Rubén Blades'),
(10, 'victor', 'documento/tarjetaNSS.pdf', 'John Branca'),
(11, 'ANA VICTORIA YERBES ARZAT', 'documento/doc.pdf', 'Barack Obama');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposu`
--

CREATE TABLE `tiposu` (
  `id` int(11) NOT NULL,
  `tipo_usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tiposu`
--

INSERT INTO `tiposu` (`id`, `tipo_usuario`) VALUES
(1, 'administrador'),
(2, 'usuarios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contraseña` varchar(20) NOT NULL,
  `tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contraseña`, `tipo_usuario`) VALUES
(1, 'admin', 'admin', 1),
(2, 'jenni', '123456', 2),
(3, 'jenni', '123456', 2),
(4, 'salva', '321', 2),
(5, 'carlos', '0305', 2),
(6, 'carlos cel', '030518', 2),
(7, 'jose', '11', 2),
(8, 'vero', '654321', 2),
(9, 'victor', '07', 2),
(10, 'admin', 'admin', 2),
(11, '', '', 2),
(12, 'jenniyerbe', '123456', 2),
(13, 'ana', 'yerbes', 2),
(14, '', '11', 1),
(15, 'once', '11', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tiposu`
--
ALTER TABLE `tiposu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_tipousuario` (`tipo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tiposu`
--
ALTER TABLE `tiposu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `FK_tipousuario` FOREIGN KEY (`tipo_usuario`) REFERENCES `tiposu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
