-- phpMyAdmin SQL Dump
-- version 2.11.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-05-2017 a las 00:44:04
-- Versión del servidor: 5.0.91
-- Versión de PHP: 5.2.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de datos: `baul`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_demo`
--
CREATE DATABASE IF NOT EXISTS ejemplo;
USE ejemplo;

CREATE TABLE IF NOT EXISTS `tabla_demo` (
  `id` int(11) NOT NULL auto_increment,
  `nombres` varchar(25) NOT NULL,
  `apellidos` varchar(35) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcar la base de datos para la tabla `tabla_demo`
--

INSERT INTO `tabla_demo` (`id`, `nombres`, `apellidos`) VALUES
(1, 'Juan', 'Albarracin'),
(2, 'Estela', 'Gómez'),
(3, 'Mario', 'Ruiz'),
(4, 'Luisa', 'López'),
(5, 'Maria', 'Pérez'),
(6, 'Elena', 'Garcia');