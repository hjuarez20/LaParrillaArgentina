-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2016 a las 00:00:15
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laparrilla`
--
CREATE DATABASE IF NOT EXISTS `laparrilla` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `laparrilla`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcontact`
--

CREATE TABLE `tbcontact` (
  `idContact` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbmenu`
--

CREATE TABLE `tbmenu` (
  `idDish` int(11) NOT NULL,
  `idUserMod` int(11) NOT NULL,
  `nameDish` varchar(45) NOT NULL,
  `category` varchar(45) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `state` varchar(45) NOT NULL,
  `dayMod` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbreservations`
--

CREATE TABLE `tbreservations` (
  `idReservation` int(11) NOT NULL,
  `reservationHour` time(6) NOT NULL,
  `peopleAmount` int(11) NOT NULL,
  `clientName` varchar(45) NOT NULL,
  `clientPhone` varchar(45) NOT NULL,
  `clientEmail` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbreservations`
--

INSERT INTO `tbreservations` (`idReservation`, `reservationHour`, `peopleAmount`, `clientName`, `clientPhone`, `clientEmail`, `state`, `date`) VALUES
(1, '00:00:00.000000', 5, 'Harold', '88558855', 'nose', '1', '0000-00-00'),
(2, '00:00:00.000000', 2, 'pedro', '25252525', 'j@g.com', '1', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbtables`
--

CREATE TABLE `tbtables` (
  `idTable` int(11) NOT NULL,
  `category` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  `chairsNum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbtablesreservations`
--

CREATE TABLE `tbtablesreservations` (
  `idReservation` int(11) NOT NULL,
  `idTable` int(11) NOT NULL,
  `state` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbusers`
--

CREATE TABLE `tbusers` (
  `idUser` int(11) NOT NULL,
  `login` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `identification` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbusers`
--

INSERT INTO `tbusers` (`idUser`, `login`, `password`, `identification`, `name`) VALUES
(1, 'harold20', '81dc9bdb52d04dc20036dbd8313ed055', '604080534', 'Harold Juarez Barquero'),
(2, 'gato', '827ccb0eea8a706c4c34a16891f84e7b', '202220222', 'Ricardo Jimenez Arroyo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbcontact`
--
ALTER TABLE `tbcontact`
  ADD PRIMARY KEY (`idContact`);

--
-- Indices de la tabla `tbmenu`
--
ALTER TABLE `tbmenu`
  ADD PRIMARY KEY (`idDish`),
  ADD KEY `idUserMod_idx` (`idUserMod`);

--
-- Indices de la tabla `tbreservations`
--
ALTER TABLE `tbreservations`
  ADD PRIMARY KEY (`idReservation`);

--
-- Indices de la tabla `tbtables`
--
ALTER TABLE `tbtables`
  ADD PRIMARY KEY (`idTable`);

--
-- Indices de la tabla `tbtablesreservations`
--
ALTER TABLE `tbtablesreservations`
  ADD KEY `idReservation_idx` (`idReservation`),
  ADD KEY `idTable_idx` (`idTable`);

--
-- Indices de la tabla `tbusers`
--
ALTER TABLE `tbusers`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbcontact`
--
ALTER TABLE `tbcontact`
  MODIFY `idContact` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbmenu`
--
ALTER TABLE `tbmenu`
  MODIFY `idDish` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbreservations`
--
ALTER TABLE `tbreservations`
  MODIFY `idReservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbtables`
--
ALTER TABLE `tbtables`
  MODIFY `idTable` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbusers`
--
ALTER TABLE `tbusers`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbmenu`
--
ALTER TABLE `tbmenu`
  ADD CONSTRAINT `idUserMod` FOREIGN KEY (`idUserMod`) REFERENCES `tbusers` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbtablesreservations`
--
ALTER TABLE `tbtablesreservations`
  ADD CONSTRAINT `idReservation` FOREIGN KEY (`idReservation`) REFERENCES `tbreservations` (`idReservation`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idTable` FOREIGN KEY (`idTable`) REFERENCES `tbtables` (`idTable`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
