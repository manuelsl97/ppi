-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-02-2017 a las 22:08:24
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tienda2017`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcategoria`
--

CREATE TABLE IF NOT EXISTS `tblcategoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `strNombre` varchar(50) NOT NULL,
  `intEstado` int(11) NOT NULL,
  `refPadre` int(11) NOT NULL,
  `intOrden` int(11) NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `tblcategoria`
--

INSERT INTO `tblcategoria` (`idCategoria`, `strNombre`, `intEstado`, `refPadre`, `intOrden`) VALUES
(1, 'Azul', 1, 0, 1),
(2, 'Pruebas 2', 1, 0, 1),
(3, 'Verde', 1, 0, 2),
(4, 'dfegerg', 1, 0, 54),
(5, 'Ultima', 1, 0, 22222),
(6, 'sub azul', 1, 1, 2),
(7, 'Subpruebas 2', 1, 2, 3),
(8, 'suborden 3', 1, 2, 2),
(9, 'tercer nivel subazul', 1, 6, 2),
(10, '123213', 1, 6, 123),
(11, 'suborden 3', 1, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblconfiguracion`
--

CREATE TABLE IF NOT EXISTS `tblconfiguracion` (
  `idConfiguracion` int(11) NOT NULL AUTO_INCREMENT,
  `strTelefono` varchar(50) NOT NULL,
  `strEmail` varchar(50) NOT NULL,
  `strLogo` varchar(50) NOT NULL,
  `intMarcas` int(11) NOT NULL,
  PRIMARY KEY (`idConfiguracion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tblconfiguracion`
--

INSERT INTO `tblconfiguracion` (`idConfiguracion`, `strTelefono`, `strEmail`, `strLogo`, `intMarcas`) VALUES
(1, '+34 654987654', 'jorvidu@gmail.com', 'logo.png', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblmarca`
--

CREATE TABLE IF NOT EXISTS `tblmarca` (
  `idMarca` int(11) NOT NULL AUTO_INCREMENT,
  `strMarca` varchar(50) NOT NULL,
  `intOrden` int(11) NOT NULL,
  `intEstado` int(11) NOT NULL,
  PRIMARY KEY (`idMarca`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `tblmarca`
--

INSERT INTO `tblmarca` (`idMarca`, `strMarca`, `intOrden`, `intEstado`) VALUES
(1, 'Peugeot X', 1, 1),
(2, 'Opel', 2, 1),
(3, 'Mercedes', 3, 1),
(4, 'Saab', 4, 1),
(5, 'BMW', 5, 1),
(6, 'Ferrari 23', 6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproducto`
--

CREATE TABLE IF NOT EXISTS `tblproducto` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `strNombre` varchar(50) NOT NULL,
  `intCategoria` int(11) NOT NULL,
  `strImagen` varchar(50) NOT NULL,
  `strDescripcion` text NOT NULL,
  `dblPrecio` double(8,2) NOT NULL,
  PRIMARY KEY (`idProducto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tblproducto`
--

INSERT INTO `tblproducto` (`idProducto`, `strNombre`, `intCategoria`, `strImagen`, `strDescripcion`, `dblPrecio`) VALUES
(1, 'Seat África', 1, '0', 'Coche grande y espacioso', 8000.00),
(2, 'Seat América', 1, '', 'Coche muy espacioso', 8100.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblusuario`
--

CREATE TABLE IF NOT EXISTS `tblusuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `strEmail` varchar(50) NOT NULL,
  `strPassword` varchar(50) NOT NULL,
  `strNombre` varchar(30) NOT NULL,
  `intNivel` int(11) NOT NULL DEFAULT '0',
  `intEstado` int(11) NOT NULL DEFAULT '1',
  `strImagen` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `strEmail` (`strEmail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `tblusuario`
--

INSERT INTO `tblusuario` (`idUsuario`, `strEmail`, `strPassword`, `strNombre`, `intNivel`, `intEstado`, `strImagen`) VALUES
(1, 'sdfrrdsf@333fsd.com', '26fe0cdfe99bfa306e31733c4e2b17dc', 'Pepe López', 0, 1, 'face2.jpg'),
(2, 'jorvidu@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Jorge', 1, 1, ''),
(3, 'wdfdes@fsdf.com', '42be65bff2c5725e883a43de69147c85', '0980', 10, 1, ''),
(4, '345345@dsgftd.comn', 'a06cef7b78ecfb2461fe6ab2ac847fa0', '876', 100, 1, ''),
(5, 'publico@fsdf.com', '4ede4fbf6e52d6dd0f25ad91c016db82', '098', 0, 1, NULL),
(6, 'dksjf@sdfdsf.com', 'df6d2338b2b8fce1ec2f6dda0a630eb0', 'Luis José', 0, 1, 'facerisas.jpg'),
(8, 'wefwf', '5f9a177892f1e4ecb3484ba5a82fb813', 'fewfe', 0, 1, NULL),
(9, 'ergerg@dsfgf.com', '92daa86ad43a42f28f4bf58e94667c95', '09u', 0, 1, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
