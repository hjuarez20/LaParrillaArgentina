-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2016 at 11:47 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laparrilla`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbcontact`
--

DROP TABLE IF EXISTS `tbcontact`;
CREATE TABLE IF NOT EXISTS `tbcontact` (
  `idContact` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`idContact`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbmenu`
--

DROP TABLE IF EXISTS `tbmenu`;
CREATE TABLE IF NOT EXISTS `tbmenu` (
  `idDish` int(11) NOT NULL AUTO_INCREMENT,
  `idUserMod` int(11) NOT NULL,
  `nameDish` varchar(45) NOT NULL,
  `category` varchar(45) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `state` varchar(45) NOT NULL,
  `dayMod` date NOT NULL,
  `image` varchar(45) NOT NULL,
  PRIMARY KEY (`idDish`),
  KEY `idUserMod_idx` (`idUserMod`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbmenu`
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
-- Table structure for table `tbreservations`
--

DROP TABLE IF EXISTS `tbreservations`;
CREATE TABLE IF NOT EXISTS `tbreservations` (
  `idReservation` int(11) NOT NULL AUTO_INCREMENT,
  `reservationHour` time(6) NOT NULL,
  `peopleAmount` int(11) NOT NULL,
  `clientName` varchar(45) NOT NULL,
  `clientPhone` varchar(45) NOT NULL,
  `clientEmail` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`idReservation`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbreservations`
--

INSERT INTO `tbreservations` (`idReservation`, `reservationHour`, `peopleAmount`, `clientName`, `clientPhone`, `clientEmail`, `state`, `date`) VALUES
(1, '00:00:00.000000', 5, 'Harold', '88558855', 'nose', '1', '0000-00-00'),
(2, '00:00:00.000000', 2, 'pedro', '25252525', 'j@g.com', '1', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbtables`
--

DROP TABLE IF EXISTS `tbtables`;
CREATE TABLE IF NOT EXISTS `tbtables` (
  `idTable` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  `chairsNum` int(11) NOT NULL,
  PRIMARY KEY (`idTable`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbtablesreservations`
--

DROP TABLE IF EXISTS `tbtablesreservations`;
CREATE TABLE IF NOT EXISTS `tbtablesreservations` (
  `idReservation` int(11) NOT NULL,
  `idTable` int(11) NOT NULL,
  `state` varchar(45) NOT NULL,
  KEY `idReservation_idx` (`idReservation`),
  KEY `idTable_idx` (`idTable`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbusers`
--

DROP TABLE IF EXISTS `tbusers`;
CREATE TABLE IF NOT EXISTS `tbusers` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `identification` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbusers`
--

INSERT INTO `tbusers` (`idUser`, `login`, `password`, `identification`, `name`) VALUES
(1, 'harold20', '81dc9bdb52d04dc20036dbd8313ed055', '604080534', 'Harold Juarez Barquero'),
(2, 'gato', '827ccb0eea8a706c4c34a16891f84e7b', '202220222', 'Ricardo Jimenez Arroyo'),
(5, 'Oscar Noguera', 'e10adc3949ba59abbe56e057f20f883e', '604200925', 'Oscar');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbmenu`
--
ALTER TABLE `tbmenu`
  ADD CONSTRAINT `idUserMod` FOREIGN KEY (`idUserMod`) REFERENCES `tbusers` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbtablesreservations`
--
ALTER TABLE `tbtablesreservations`
  ADD CONSTRAINT `idReservation` FOREIGN KEY (`idReservation`) REFERENCES `tbreservations` (`idReservation`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idTable` FOREIGN KEY (`idTable`) REFERENCES `tbtables` (`idTable`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
