-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2016 a las 07:55:04
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laparrilla`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbusers`
--

CREATE TABLE `tbusers` (
  `idUser` int(11) NOT NULL,
  `login` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `identification` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `state` varchar(10) NOT NULL DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbusers`
--

INSERT INTO `tbusers` (`idUser`, `login`, `password`, `identification`, `name`, `state`) VALUES
(1, 'harold20', '81dc9bdb52d04dc20036dbd8313ed055', '604080534', 'Harold Juarez Barquero', 'Activo'),
(2, 'gato', 'e655834059c57c038e12961e16fca2b3', '202220222', 'Ricardo Jimenez Arroyo', 'Desactivo'),
(5, 'Oscar Noguera', 'e10adc3949ba59abbe56e057f20f883e', '604200925', 'Oscar', 'Activo'),
(6, 'nelguaro', '202cb962ac59075b964b07152d234b70', '115600186', 'nel', 'Activo'),
(7, 'nel', '202cb962ac59075b964b07152d234b70', '115600186', 'nel', 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbusers`
--
ALTER TABLE `tbusers`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbusers`
--
ALTER TABLE `tbusers`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
