-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-05-2018 a las 10:55:26
-- Versión del servidor: 5.7.10-log
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `imagen` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `descripcion` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `precio` decimal(9,2) DEFAULT NULL,
  `stock` varchar(10) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `imagen`, `nombre`, `descripcion`, `precio`, `stock`, `fecha`) VALUES
(1, 'imagenes/imagen.jpg', 'nombre', 'descripciona', '2.00', '10', '2018-04-27'),


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `usuario` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `pass` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `permisos` int(1) DEFAULT NULL,
  `imagen` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `pass`, `permisos`, `imagen`, `fecha`) VALUES
(1, 'sandra', 'administrador', 'administrador', 1, NULL, NULL),
(2, 'javier', 'profesor', 'profesor', 9, NULL, NULL),
(4, 'san', 'san', 'san', 3, 'imagenes/', '2018-05-17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
