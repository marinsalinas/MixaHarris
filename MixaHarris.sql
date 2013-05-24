-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-05-2013 a las 13:17:22
-- Versión del servidor: 5.5.31
-- Versión de PHP: 5.4.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mixaharris`
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
  `administradorPrivilegios` int(11) NOT NULL DEFAULT '0',
  `administradorSexo` varchar(1) NOT NULL,
  PRIMARY KEY (`idadministrador`),
  UNIQUE KEY `idadministrador_UNIQUE` (`idadministrador`),
  UNIQUE KEY `administradorUsername_UNIQUE` (`administradorUsername`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla del Administrador' AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`idadministrador`, `administradorNombre`, `administradorApellido`, `administradorUsername`, `administradorPassword`, `administradorNacimiento`, `administradorTelefono`, `administradorEmail`, `administradorPrivilegios`, `administradorSexo`) VALUES
(1, 'MarÃ­n', 'Salinas', 'admin1', 'efe4c534f51bff41db4c4f07500225f3', '1994-01-27', 83593222, 'm.mslns27@gmail.com', 0, 'M'),
(3, 'Alberto', 'Cortes', 'admin2', '3982b51a9097aabd3ebbe23491004223', '1993-08-03', 12436523, 'c.n.albertocortes@gmail.com', 0, 'M');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE IF NOT EXISTS `carrito` (
  `idcarrito` int(11) NOT NULL AUTO_INCREMENT,
  `idproductos` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `carritoDefault` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idcarrito`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
  `clientesPrivilegio` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idclientes`),
  UNIQUE KEY `idclientes_UNIQUE` (`idclientes`),
  UNIQUE KEY `clientesUsername_UNIQUE` (`clientesUsername`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla de Clientes' AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idclientes`, `clientesNombre`, `clientesApellido`, `clientesDireccion`, `clientesCP`, `clientesEmail`, `clientesTelefono`, `clientesUsername`, `clientesPassword`, `clientesCelular`, `clientesOcupacion`, `clientesNacimiento`, `clientesSexo`, `clientesPrivilegio`) VALUES
(1, 'MarÃ­n', 'Salinas SÃ¡nchez', 'NiÃ±o Artillero 113, Altamira', 64750, 'm.mslns27@gmail.com', 83592311, 'marinslns', 'efe4c534f51bff41db4c4f07500225f3', 8115780151, 'Estudiante', '1994-01-27', 'M', 1),
(2, 'Andrea Lizbeth', 'Rojas HernÃ¡ndez', 'Contadores #333 TecnolÃ³gico Monterrey N.L.', 64700, 'arojas_hdz@hotmail.com', 83403812, 'arojas_hdz', 'arojas1505608', 8114813953, 'Estudiante', '1993-05-04', 'F', 1),
(3, 'CibrÃ¡n', 'Samaniego RolÃ³n', 'Pase Lucio 29 Mirador, Monterrey N.L.', 64750, 'CibrnSamaniegoRoln@superrito.com', 83344556, 'evernshoid', '81dc9bdb52d04dc20036dbd8313ed055', 8114567814, 'Keeper', '1958-02-16', 'M', 1),
(4, 'JosÃ©', 'GÃ³mez Cardenas', 'Cerrada Harto No. 469', 66064, 'acbriones2@outlook.com', 12876723, 'josego', '827ccb0eea8a706c4c34a16891f84e7b', 8115689235, 'Profesor', '1985-01-05', 'M', 1),
(5, 'Alberto', 'Cortes', 'Enrique Segoivano 123', 6660, 'alberto@hotfuzz.com', 12345678, 'alberto', '3982b51a9097aabd3ebbe23491004223', 1234567890, 'AlbaÃ±il', '1993-08-03', 'M', 1),
(6, 'Alexiss', 'Gamal', 'Enrique Segoivano 200', 6660, 'alex.gamal@gmail.com', 84455667, 'alexis', 'e9f99cff925f61d8c62fd0bc3b5edc54', 86655543, 'Estudiante', '2002-05-23', 'M', 1),
(7, 'Xavier Chabelo', 'Lopez', 'Enrique Segoivano 125', 6660, 'chabelin@gmail.com', 84488585, 'chabelo', '0fdfba0f897becd5b5fbd0c1a7781c67', 5234566554, 'Amigo de todos los niÃ±os', '1900-05-09', 'M', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
  `idcompras` int(11) NOT NULL AUTO_INCREMENT,
  `idproducto` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `idcarrito` varchar(45) NOT NULL,
  `fechac compra` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `folio` bigint(20) NOT NULL,
  PRIMARY KEY (`idcompras`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`idcompras`, `idproducto`, `idcliente`, `idcarrito`, `fechac compra`, `folio`) VALUES
(1, 16, 1, '6', '2013-05-23 21:57:14', 172604958),
(2, 18, 1, '8', '2013-05-23 21:57:14', 172604958),
(3, 6, 1, '14', '2013-05-23 21:57:14', 172604958),
(4, 6, 1, '15', '2013-05-23 21:57:14', 172604958),
(5, 17, 1, '17', '2013-05-23 21:57:14', 172604958),
(6, 17, 1, '18', '2013-05-23 21:57:14', 172604958),
(7, 17, 1, '19', '2013-05-23 21:57:14', 172604958),
(8, 31, 1, '21', '2013-05-23 21:57:14', 172604958),
(9, 31, 1, '23', '2013-05-23 21:57:14', 172604958),
(10, 16, 1, '24', '2013-05-23 21:57:14', 172604958),
(11, 6, 1, '25', '2013-05-23 21:57:14', 172604958),
(12, 6, 1, '1', '2013-05-23 21:58:11', 11454160247),
(13, 2, 1, '3', '2013-05-24 05:15:06', 11121894088);

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
-- Estructura de tabla para la tabla `logadmin`
--

CREATE TABLE IF NOT EXISTS `logadmin` (
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
-- Estructura de tabla para la tabla `loguser`
--

CREATE TABLE IF NOT EXISTS `loguser` (
  `idlogUser` int(11) NOT NULL AUTO_INCREMENT,
  `logUserFecha` date NOT NULL,
  `logUserHoraI` time NOT NULL,
  `logUserHoraF` time NOT NULL,
  `clientes_idclientes` int(11) NOT NULL,
  PRIMARY KEY (`idlogUser`,`clientes_idclientes`),
  UNIQUE KEY `idlogUser_UNIQUE` (`idlogUser`),
  KEY `fk_logUser_clientes1_idx` (`clientes_idclientes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `idproductos` int(11) NOT NULL AUTO_INCREMENT,
  `productosNombre` varchar(45) NOT NULL,
  `productosMarca` varchar(45) NOT NULL,
  `productosModelo` varchar(45) NOT NULL,
  `productosDescripcion` varchar(60) NOT NULL,
  `productosPrecio` double NOT NULL,
  `productosTipo` varchar(45) NOT NULL,
  `productosGarantia` tinyint(1) NOT NULL,
  `proveedor_idproveedor` int(11) NOT NULL,
  PRIMARY KEY (`idproductos`,`proveedor_idproveedor`),
  UNIQUE KEY `idproductos_UNIQUE` (`idproductos`),
  KEY `fk_productos_proveedor_idx` (`proveedor_idproveedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=54 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproductos`, `productosNombre`, `productosMarca`, `productosModelo`, `productosDescripcion`, `productosPrecio`, `productosTipo`, `productosGarantia`, `proveedor_idproveedor`) VALUES
(2, 'Guitarra electrica', 'Gibson', 'Les Paul', 'Guitarra Electrica', 20000, 'GElectricas', 1, 2),
(6, 'Guitarra ElÃ©ctrica', 'Fender', 'Jaguar', 'GElectricas', 19000, 'GElectricas', 1, 4),
(7, 'Guitarra elÃ©ctrica', 'Fender', 'Jazz Master', 'GElectricas', 15000, 'GElectricas', 1, 4),
(8, 'Guitarra electrica', 'Gibson', 'FireBird', 'GElectricas', 17000, 'GElectricas', 1, 12),
(9, 'Guitarra electrica', 'Gibson', 'Moderne', 'GElectricas', 13000, 'GElectricas', 1, 12),
(10, 'Guitarra electrica', 'Gibson', 'Flying V', 'GElectricas', 23000, 'GElectricas', 1, 12),
(11, 'Guitarra electrica', 'Gibson', 'Explorer', 'GElectricas', 15000, 'GElectricas', 1, 12),
(12, 'Guitarra electrica', 'Gibson', 'SG', 'GElectricas', 10000, 'GElectricas', 1, 12),
(13, 'Guitarra electrica', 'Fender', 'Mustang', 'GElectricas', 14000, 'GElectricas', 1, 4),
(14, 'Guitarra electrica', 'Fender', 'Stratocaster', 'GElectricas', 19000, 'GElectricas', 0, 4),
(15, 'Guitarra electrica', 'Fender', 'Squier', 'GElectricas', 12000, 'GElectricas', 1, 4),
(16, 'Guitarra acustica', 'Yamaha', 'GC', 'Guitarra acustica', 5000, 'GAcusticas', 1, 1),
(17, 'Guitarra ElectroacÃºstica', 'Takamine', 'EG440', 'TAK G NEX FLAME MPL RED', 3000, 'GAcusticas', 0, 6),
(18, 'Guitarra acustica', 'Yamaha', 'CS', 'Guitarra acustica', 4500, 'GAcusticas', 0, 1),
(19, 'Guitarra acustica', 'Yamaha', 'C', 'Guitarra acustica', 4000, 'GAcusticas', 1, 1),
(20, 'Bateria', 'Mapex', 'Saturn', 'Bateria', 33000, 'Baterias', 1, 5),
(21, 'Bateria', 'Mapex', 'QR', 'Bateria', 25000, 'Baterias', 1, 5),
(22, 'Bateria', 'Mapex', 'Pro M', 'Bateria', 25000, 'Baterias', 1, 5),
(31, 'Saxofon', 'Yamaha', 'YAS-23', 'Saxofon Alto', 15000, 'Viento', 1, 1),
(32, 'DJ PAD', 'M-AUDIO', 'YS0090', 'Buena Calida', 4500, 'Audio', 1, 6),
(33, 'Jazz Bass', 'Fender', 'AMERICAN DELUXE VRW 3TS', 'Cedro Acabado Retro', 24521, 'Bajos', 1, 8),
(34, 'Bajo ElÃ©ctrico', 'Ibanez', 'BTB675-NTF', '5 Cuerdas, Pino Canadiense, Color Natural', 8744, 'Bajos', 0, 13),
(35, 'Bajo ThunderBird', 'Gibson', 'Vintaje Sunburst Black', 'Negra, Cero EstÃ¡tica', 15742, 'Bajos', 1, 12),
(36, 'Bajo ElÃ©ctrico', 'Epiphone', 'EB-3 BASS ', 'SG, SET 2-PICKU', 4173, 'Bajos', 0, 3),
(37, 'Bajo Electroacustico', 'Fender', 'KINGMAN BASS SCE V2', 'Gran Sonido conectado o sin conectar', 5885, 'Bajos', 0, 8),
(38, 'Sintetizador', 'NORD', 'ELECTRO 61 ELECTROMECHANIC', 'Color Rojo', 13592, 'Teclados', 0, 3),
(39, 'Teclado', 'YAMAHA', 'CP50', 'Piano PRO portatil 88 teclas', 21139, 'Teclados', 1, 1),
(40, 'Sintetizador', 'KORG', 'MK1', 'sintetizer MicroKorg  con microfono', 5197, 'Teclados', 1, 13),
(41, 'PIANO DIGITAL', 'CASIO', 'CDP200R', '88 teclas, 48 de polifonia, 670 tonos, pedal Sp3', 9496, 'Teclados', 1, 10),
(42, 'Piano PRO', 'YAMAHA', 'CP5', 'P/Escenario 88 Teclas', 30801, 'Teclados', 1, 1),
(43, 'Bateria ElÃ©ctrica', 'ALESIS', 'DM6 KIT', 'Kit de bateria Hardware PADS y MODULO', 6174, 'Baterias', 0, 10),
(44, 'Guitarra ElectroacÃºstica', 'Fender', 'CD220', 'SCE ASH BURL -V2', 4807, 'GAcusticas', 0, 8),
(45, 'Trombon Tenor', 'YAMAHA', 'YSL354E', 'Vara Estandar', 8275, 'Viento', 0, 1),
(46, 'Flauta Transversal', 'YAMAHA', 'YFL211', 'Estandar Plateada, Sol Desalineado, llaves cubiertas', 5074, 'Viento', 0, 1),
(47, 'Clarinete', 'YAMAHA', 'YCL250', 'Clarinete Estandar de Resina', 6392, 'Viento', 1, 1),
(48, 'Armonica', 'HOHNER', '53220', 'HOHNER BLUES HARP', 439, 'Viento', 0, 8),
(49, 'Tuba', 'YAMAHA', 'YBB105', 'Tuba estandar 3 pistones', 42011, 'Viento', 0, 1),
(50, 'Microfono Estudio', 'Shure', '55SH SERIE II', 'Vocal DinÃ¡mico 50-15,000 CARD Retro', 2191, 'Audio', 0, 3),
(51, 'Amplificador', 'BehRinger', 'EP2000', 'Poder EP2000', 5175, 'Audio', 1, 5),
(52, 'Estacion DJ', 'NATIVE', '20900', 'Traktor Kont S4', 13396, 'Audio', 1, 5),
(53, 'Cable PLUG', 'Fender', '00990', '18.5ft Agle Instrument', 244, 'Audio', 0, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `idproveedor` int(11) NOT NULL AUTO_INCREMENT,
  `proveedorNombre` varchar(45) NOT NULL,
  `proveedorContacto` varchar(45) NOT NULL,
  `proveedorTelefono` bigint(20) NOT NULL,
  PRIMARY KEY (`idproveedor`),
  UNIQUE KEY `idproveedor_UNIQUE` (`idproveedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idproveedor`, `proveedorNombre`, `proveedorContacto`, `proveedorTelefono`) VALUES
(1, 'Yamaha', 'Rodolfo Gutierrez', 12871298),
(2, 'SaxUK', 'Roberto Hinojosa', 98128723),
(3, 'Platomusic', 'Omar Elizondo', 12092309),
(4, 'Fender', 'Robbin Maxwell', 9988723),
(5, 'Pacific Instruments', 'Rolando Ramirez', 98673423),
(6, 'Hermes Music', 'Alejandro Galvan', 78352312),
(8, 'Honner Instruments', 'Lucia Sanchez', 98672314),
(9, 'Instrumentos de Paracho', 'Jose Hernandez', 98985423),
(10, 'DW Perfformance', 'James Bell', 78313212),
(11, 'Marshal', 'Susana Zabaleta', 12435465),
(12, 'Gibson Inc.', 'Brad Pit', 12231212),
(13, 'MediHistMusic', 'Marin Salinas', 84488585);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `fk_inventario_productos1` FOREIGN KEY (`productos_idproductos`, `productos_proveedor_idproveedor`) REFERENCES `productos` (`idproductos`, `proveedor_idproveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `logadmin`
--
ALTER TABLE `logadmin`
  ADD CONSTRAINT `fk_logAdmin_administrador1` FOREIGN KEY (`administrador_idadministrador`) REFERENCES `administrador` (`idadministrador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `loguser`
--
ALTER TABLE `loguser`
  ADD CONSTRAINT `fk_logUser_clientes1` FOREIGN KEY (`clientes_idclientes`) REFERENCES `clientes` (`idclientes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_proveedor` FOREIGN KEY (`proveedor_idproveedor`) REFERENCES `proveedor` (`idproveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
