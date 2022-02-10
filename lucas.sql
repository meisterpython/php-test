-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-11-2015 a las 08:43:39
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `lucas`
--
CREATE DATABASE IF NOT EXISTS `lucas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lucas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`admin`) VALUES
('55555');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

CREATE TABLE IF NOT EXISTS `novedades` (
  `nov_id` int(5) NOT NULL AUTO_INCREMENT,
  `nov_titulo` varchar(140) NOT NULL,
  `nov_novedad` varchar(1000) NOT NULL,
  `nov_imagen` varchar(140) DEFAULT NULL,
  `nov_fecha` date NOT NULL,
  PRIMARY KEY (`nov_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `novedades`
--

INSERT INTO `novedades` (`nov_id`, `nov_titulo`, `nov_novedad`, `nov_imagen`, `nov_fecha`) VALUES
(1, 'Nueva empresa, nuevo portal.', 'No sólo renovamos las instalaciones de la empresa, sino que también hemos creado un portal web institucional en el que el usuario podrá enterarse todas las novedades e interactuar con los diversos sectores de la empresa mediante el formulario de contacto.\r\nSaludos,\r\nLa empresa.', 'img/portal.jpg', '2015-11-02'),
(2, 'Cambio de directores.', 'La empresa les informa que ha habido un cambio de directores. Juan Castro dejó de ser nuestro director para darle paso al Ingeniero Raúl Martínez.\r\nSaludos,\r\nLa empresa.', 'img/director.jpg', '2015-11-05'),
(3, 'Feliz Cumple Esther!', 'Esther te deseamos un muy felíz cumpleaños de parte de toda la empresa.\r\nQue seas muy felíz.\r\nSaludos,\r\nLa empresa.', 'img/esther.jpg', '2015-11-16'),
(4, 'Felicidades por el bebé Hernán!!', 'Felicitamos a Hernan ya que el día de ayer fue papá.\r\nMuchas felicidades.\r\nLa empresa.', 'img/hernan.jpg', '2015-11-17'),
(5, 'Bienvenida Paula!!', 'Le damos la bienvenida a Paula, ya que se acaba de incorporar a la empresa y va a estar trabajando con nosotros para el cliente HSBC.\r\nÉxitos.\r\nLa empresa.', NULL, '2015-11-20'),
(6, 'Espacio libre de papeles.', 'Incorporamos la política de "Espacio libre de papeles" la cuál se basa en dejar completamente sin papeles el lugar de trabajo. Ésta política, además de generar un órden y limpieza en las oficinas, implica mayor seguridad de la información de la empresa.\r\nSaludos,\r\nLa empresa.', 'img/libre_papeles.jpg', '2015-11-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `legajo` varchar(5) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  UNIQUE KEY `legajo` (`legajo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`legajo`, `nombre`, `apellido`) VALUES
('11111', 'Nombre1', 'Apellido1'),
('22222', 'Nombre2', 'Apellido2'),
('33333', 'Nombre3', 'Apellido3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
