-- phpMyAdmin SQL Dump
-- version 3.5.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-05-2013 a las 22:48:28
-- Versión del servidor: 5.5.31
-- Versión de PHP: 5.4.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `MixaHarris`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `idadministrador` int(11) NOT NULL AUTO_INCREMENT,
  `administradorNombre` varchar(45) NOT NULL,
  `administradorApellido` varchar(45) NOT NULL,
  `administradorUsername` varchar(45) NOT NULL,
  `administradorPassword` varchar(45) NOT NULL,
  `administradorNacimiento` date NOT NULL,
  `administradorTelefono` bigint(20) NOT NULL,
  `administradorEmail` varchar(45) NOT NULL,
  PRIMARY KEY (`idadministrador`),
  UNIQUE KEY `idadministrador_UNIQUE` (`idadministrador`),
  UNIQUE KEY `administradorUsername_UNIQUE` (`administradorUsername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla del Administrador' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `idclientes` int(11) NOT NULL AUTO_INCREMENT,
  `clientesNombre` varchar(45) NOT NULL,
  `clientesApellido` varchar(45) NOT NULL,
  `clientesDireccion` varchar(60) NOT NULL,
  `clientesCP` int(11) NOT NULL,
  `clientesEmail` varchar(45) NOT NULL,
  `clientesTelefono` bigint(20) NOT NULL,
  `clientesUsername` varchar(45) NOT NULL,
  `clientesPassword` varchar(45) NOT NULL,
  `clientesCelular` bigint(20) NOT NULL,
  `clientesOcupacion` varchar(45) NOT NULL,
  `clientesNacimiento` date NOT NULL,
  `clientesSexo` varchar(15) NOT NULL,
  PRIMARY KEY (`idclientes`),
  UNIQUE KEY `idclientes_UNIQUE` (`idclientes`),
  UNIQUE KEY `clientesUsername_UNIQUE` (`clientesUsername`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla de Clientes' AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idclientes`, `clientesNombre`, `clientesApellido`, `clientesDireccion`, `clientesCP`, `clientesEmail`, `clientesTelefono`, `clientesUsername`, `clientesPassword`, `clientesCelular`, `clientesOcupacion`, `clientesNacimiento`, `clientesSexo`) VALUES
(1, 'Marin', 'Salinas Sánchez', 'Niño Artillero 113, Altamira', 64750, 'm.mslns27@gmail.com', 83592311, 'marinslns', 'efe4c534f51bff41db4c4f07500225f3', 8115780151, 'Estudiante', '1994-01-27', ''),
(2, 'Andrea Lizbeth', 'Rojas Hernández', 'Condadores #333 Tecnológico Monterrey N.L.', 64700, 'arojas_hdz@hotmail.com', 83403812, 'arojas_hdz', 'arojas1505608', 8114813953, 'Estudiante', '1993-05-04', 'F'),
(3, 'CibrÃ¡n', 'Samaniego RolÃ³n', 'Pase Lucio 29 Mirador, Monterrey N.L.', 64750, 'CibrnSamaniegoRoln@superrito.com', 83344556, 'evernshoid', '81dc9bdb52d04dc20036dbd8313ed055', 8114567814, 'Keeper', '1958-02-16', 'M');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE IF NOT EXISTS `inventario` (
  `idinventario` int(11) NOT NULL,
  `inventarioMovimiento` varchar(45) NOT NULL,
  `inventarioCantidad` int(11) NOT NULL,
  `inventarioFecha` date NOT NULL,
  `productos_idproductos` int(11) NOT NULL,
  `productos_proveedor_idproveedor` int(11) NOT NULL,
  PRIMARY KEY (`idinventario`,`productos_idproductos`,`productos_proveedor_idproveedor`),
  UNIQUE KEY `idinventario_UNIQUE` (`idinventario`),
  KEY `fk_inventario_productos1_idx` (`productos_idproductos`,`productos_proveedor_idproveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logAdmin`
--

CREATE TABLE IF NOT EXISTS `logAdmin` (
  `idlogAdmin` int(11) NOT NULL,
  `logAdminFecha` date NOT NULL,
  `logAdminHoraI` time NOT NULL,
  `logAdminHoraF` time NOT NULL,
  `administrador_idadministrador` int(11) NOT NULL,
  PRIMARY KEY (`idlogAdmin`,`administrador_idadministrador`),
  UNIQUE KEY `idlogAdmin_UNIQUE` (`idlogAdmin`),
  KEY `fk_logAdmin_administrador1_idx` (`administrador_idadministrador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logUser`
--

CREATE TABLE IF NOT EXISTS `logUser` (
  `idlogUser` int(11) NOT NULL,
  `logUserFecha` date NOT NULL,
  `logUserHoraI` time NOT NULL,
  `logUserHoraF` time NOT NULL,
  `clientes_idclientes` int(11) NOT NULL,
  PRIMARY KEY (`idlogUser`,`clientes_idclientes`),
  UNIQUE KEY `idlogUser_UNIQUE` (`idlogUser`),
  KEY `fk_logUser_clientes1_idx` (`clientes_idclientes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `idproductos` int(11) NOT NULL,
  `productosNombre` varchar(45) NOT NULL,
  `productosMarca` varchar(45) NOT NULL,
  `productosModelo` varchar(45) NOT NULL,
  `productosDescripcion` varchar(60) NOT NULL,
  `productosPrecio` double NOT NULL,
  `productosTipo` varchar(45) NOT NULL,
  `productosGarantia` varchar(45) NOT NULL,
  `proveedor_idproveedor` int(11) NOT NULL,
  PRIMARY KEY (`idproductos`,`proveedor_idproveedor`),
  UNIQUE KEY `idproductos_UNIQUE` (`idproductos`),
  KEY `fk_productos_proveedor_idx` (`proveedor_idproveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `idproveedor` int(11) NOT NULL,
  `proveedorNombre` varchar(45) NOT NULL,
  `proveedorContacto` varchar(45) NOT NULL,
  `proveedorTelefono` bigint(20) NOT NULL,
  PRIMARY KEY (`idproveedor`),
  UNIQUE KEY `idproveedor_UNIQUE` (`idproveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `fk_inventario_productos1` FOREIGN KEY (`productos_idproductos`, `productos_proveedor_idproveedor`) REFERENCES `productos` (`idproductos`, `proveedor_idproveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `logAdmin`
--
ALTER TABLE `logAdmin`
  ADD CONSTRAINT `fk_logAdmin_administrador1` FOREIGN KEY (`administrador_idadministrador`) REFERENCES `administrador` (`idadministrador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `logUser`
--
ALTER TABLE `logUser`
  ADD CONSTRAINT `fk_logUser_clientes1` FOREIGN KEY (`clientes_idclientes`) REFERENCES `clientes` (`idclientes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_proveedor` FOREIGN KEY (`proveedor_idproveedor`) REFERENCES `proveedor` (`idproveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
