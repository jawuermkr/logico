-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-07-2020 a las 21:04:55
-- Versión del servidor: 8.0.20-0ubuntu0.19.10.1
-- Versión de PHP: 7.3.19-1+ubuntu19.10.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `logico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PostTec`
--

CREATE TABLE `PostTec` (
  `id_postt` int NOT NULL,
  `id_tec` int NOT NULL,
  `nombre_tec` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `mensaje` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `PostTec`
--

INSERT INTO `PostTec` (`id_postt`, `id_tec`, `nombre_tec`, `fecha`, `mensaje`) VALUES
(7, 9, 'Pedro Perez', '2020-07-09', 'Esta es otra prueba de datos para verificar la sección de ads! '),
(9, 6, 'Jawuer Morales', '2020-07-11', 'Una pequeña prueba de conexión a base de datos para postear y para eliminar el mensaje más antiguo en este espacio.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnicos`
--

CREATE TABLE `tecnicos` (
  `id_tec` int NOT NULL,
  `rol` varchar(15) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `t_documento` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `n_documento` varchar(15) NOT NULL,
  `localidad` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `descripcion` varchar(900) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tecnicos`
--

INSERT INTO `tecnicos` (`id_tec`, `rol`, `nombres`, `apellidos`, `t_documento`, `n_documento`, `localidad`, `email`, `celular`, `clave`, `descripcion`, `foto`) VALUES
(6, 'tec', 'Jawuer', 'Morales', 'C.C.', '1010202422', 'Bosa N.', 'jawuer.morales@verdaluno.com', '3114436548', '123456', 'Director de desarrollo en Verda Luno. Productor de multimedia y amante de los idiomas, la música y otras expreciones artísticas.', 'img/perfil.png'),
(9, 'tec', 'Pedro', 'Perez', '', '1011332210', 'Fontibón', 'pedro321p@hotmail.com', '3102332244', '654321', '', 'img/fotos/webcam-toy-foto2.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `PostTec`
--
ALTER TABLE `PostTec`
  ADD PRIMARY KEY (`id_postt`);

--
-- Indices de la tabla `tecnicos`
--
ALTER TABLE `tecnicos`
  ADD PRIMARY KEY (`id_tec`),
  ADD UNIQUE KEY `n_documento` (`n_documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `PostTec`
--
ALTER TABLE `PostTec`
  MODIFY `id_postt` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tecnicos`
--
ALTER TABLE `tecnicos`
  MODIFY `id_tec` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
