-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-03-2018 a las 22:40:52
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `php_modal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `content_modal`
--

CREATE TABLE IF NOT EXISTS `content_modal` (
`id_modal` int(11) NOT NULL,
  `titulo` varchar(150) CHARACTER SET utf8 NOT NULL,
  `contenido` text CHARACTER SET utf8 NOT NULL,
  `creado` datetime NOT NULL,
  `modificado` datetime NOT NULL,
  `estado` enum('1','0') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `content_modal`
--

INSERT INTO `content_modal` (`id_modal`, `titulo`, `contenido`, `creado`, `modificado`, `estado`) VALUES
(1, 'Sobre nosotros', 'BaulPHP es el blog de programación y desarrollo web más popular. Nuestra misión es proporcionar los mejores recursos relacioandos con la programación  y desarrollo web. Les entregamos los mejores y útiles tutoriales para los profesionales de la web: desarrolladores, programadores, freelancers y propietarios de sitios. Gracias por su visita.', '2018-01-24 16:43:40', '2018-01-24 16:43:40', '1'),
(2, 'Contactanos', 'BaulPHP es el blog de programación y desarrollo web más popular. Nuestra misión es proporcionar los mejores recursos relacioandos con la programación  y desarrollo web. Les entregamos los mejores y útiles tutoriales para los profesionales de la web: desarrolladores, programadores, freelancers y propietarios de sitios. Gracias por su visita.', '2018-01-24 16:43:40', '2018-01-24 16:43:40', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `content_modal`
--
ALTER TABLE `content_modal`
 ADD PRIMARY KEY (`id_modal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `content_modal`
--
ALTER TABLE `content_modal`
MODIFY `id_modal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
