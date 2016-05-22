-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2016 a las 07:52:56
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
  `dayMod` date NOT NULL,
  `image` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbmenu`
--

INSERT INTO `tbmenu` (`idDish`, `idUserMod`, `nameDish`, `category`, `description`, `price`, `state`, `dayMod`, `image`) VALUES
(1, 5, 'Te de limon', 'drinks', 'Elaborado de los mas frescos limones. (Melocón opcional)', 2, 'active', '2016-05-21', 'img/food/teLimon.jpg'),
(2, 5, 'Naranja y Zanahoria', 'drinks', 'Las mejores Naranjas del país en perfecta combinación con la Zanahoria', 2, 'active', '2016-05-21', 'img/food/naranjaZanahoria.jpg'),
(3, 5, 'Mora en Leche', 'drinks', 'La mejores Moras traídas desde Cartago', 2, 'active', '2016-05-21', 'img/food/moraLeche.jpg'),
(4, 5, 'Frutas coladas', 'drinks', 'Las mejores frutas frescas, perfectamente coladas', 1, 'active', '2016-05-21', 'img/food/frutas.jpg'),
(5, 5, 'Gaseosas', 'drinks', 'Todo tipo de gaseosas para ofrecerte variedad', 3, 'active', '2016-05-21', 'img/food/gaseosa.jpg'),
(6, 5, 'Robert Baratheon Labeul', 'wines', 'Perfectamente conservado 1940\r\n', 100, 'active', '2016-05-19', 'img/food/vinoBaratheon.jpg'),
(7, 2, 'Garnis Label', 'wines', 'El Laprel finamente añejado pero con un toque de amargura 1970\r\n', 80, 'active', '2016-05-11', 'img/food/vinoGarnis.jpg'),
(8, 1, 'Paris de Gustavs', 'wines', 'Suave y espectacular al gusto 1960\r\n', 200, 'active', '2016-05-19', 'img/food/vinoParis.jpg'),
(9, 5, 'New York Steak', 'mains', 'La mejor carne estilo NY solo aquí', 15, 'active', '2016-05-20', 'img/food/nySteak.jpg'),
(10, 5, 'Filet Mignon', 'mains', 'Con un corte gourmet especial 1/5', 15, 'active', '2016-05-19', 'img/food/mignon.jpg'),
(11, 5, 'Cordon Blue Premiun', 'mains', 'Con acompañamiento al gusto', 12, 'active', '2016-05-20', 'img/food/cordonBlue.jpg'),
(12, 5, 'Salmon a la Parilla', 'mains', 'Salmon fresco con verduras', 8, 'active', '2016-05-20', 'img/food/salmon.jpg'),
(13, 5, 'Filet de Pollo', 'mains', 'Relleno hecho a las brazas', 7, 'active', '2016-05-21', 'img/food/polloRelleno.jpg'),
(14, 5, 'Bife de Chorizo', 'mains', '100% recomendado el mejor bife', 6, 'active', '2016-05-20', 'img/food/bifeChorizo.jpg'),
(15, 5, 'Entrecot Argentina', 'mains', 'Origen ARG de la mejor casa del Entrecot', 10, 'active', '2016-05-21', 'img/food/entrecot.jpg'),
(16, 5, 'Patatas al Horno', 'mains', 'Rellenas con queso y jamón', 5, 'active', '2016-05-18', 'img/food/patatas.jpg'),
(17, 5, 'Ensalada de Patata', 'salads', 'Conocida como Kartoffelsalat', 3, 'active', '2016-05-12', 'img/food/ensaladaPatata.jpg'),
(18, 5, 'Ensalada Rusa', 'salads', 'Rusa/Olivier tienes que probarla', 3, 'active', '2016-05-18', 'img/food/ensaladaRusa.jpg'),
(19, 5, 'Ensalada Mixta', 'salads', 'No te quedes sin probar nuestra ensalada mixta, 100% sin colesterol', 3, 'active', '2016-05-18', 'img/food/ensaladaMixta.jpg'),
(20, 5, 'Flan de Vainilla', 'desserts', 'El mejor flan de la casa, pruébalo', 2, 'active', '2016-05-02', 'img/food/flanVainilla.jpg'),
(21, 5, 'Pie de Piña', 'desserts', 'Bañado en dulce de leche que complementa perfectamente el sabor', 2, 'active', '2016-05-18', 'img/food/piePiña.jpg'),
(22, 5, 'cheesecake', 'desserts', 'Normal o con frutas pídelo a tu gusto', 3, 'active', '2016-05-10', 'img/food/cheesecake.jpg');

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
-- Estructura de tabla para la tabla `tbtime`
--

CREATE TABLE `tbtime` (
  `idTime` int(100) NOT NULL,
  `nameTime` varchar(45) NOT NULL,
  `time` time NOT NULL,
  `state` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbtime`
--

INSERT INTO `tbtime` (`idTime`, `nameTime`, `time`, `state`) VALUES
(1, 'nueve', '09:00:00', 'int'),
(2, 'diez', '10:00:00', 'int'),
(3, 'once', '11:00:00', 'int'),
(4, 'doce', '12:00:00', 'int'),
(5, 'trece', '13:00:00', 'int'),
(6, 'catorce', '14:00:00', 'int'),
(7, 'quince', '15:00:00', 'int'),
(8, 'dieciseis', '16:00:00', 'int'),
(9, 'diecisiete', '17:00:00', 'int'),
(10, 'dieciocho', '18:00:00', 'int'),
(11, 'diecinueve', '19:00:00', 'int'),
(12, 'veinte', '20:00:00', 'int'),
(13, 'veintiuno', '21:00:00', 'int'),
(14, 'veintidos', '22:00:00', 'int');

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
(2, 'gato', '827ccb0eea8a706c4c34a16891f84e7b', '202220222', 'Ricardo Jimenez Arroyo'),
(5, 'Oscar Noguera', 'e10adc3949ba59abbe56e057f20f883e', '604200925', 'Oscar');

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
-- Indices de la tabla `tbtime`
--
ALTER TABLE `tbtime`
  ADD PRIMARY KEY (`idTime`);

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
  MODIFY `idDish` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
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
-- AUTO_INCREMENT de la tabla `tbtime`
--
ALTER TABLE `tbtime`
  MODIFY `idTime` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `tbusers`
--
ALTER TABLE `tbusers`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
