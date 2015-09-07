-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-09-2015 a las 16:11:30
-- Versión del servidor: 5.5.43-MariaDB
-- Versión de PHP: 5.5.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ifamil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_afiliados`
--

CREATE TABLE IF NOT EXISTS `t_afiliados` (
  `oid` int(10) NOT NULL COMMENT 'Auto Incremento',
  `ced` int(11) NOT NULL COMMENT 'Cedula de identidad',
  `nom` varchar(255) NOT NULL COMMENT 'Nombre Completo',
  `fna` date NOT NULL COMMENT 'Fecha de Nacimiento',
  `tel` varchar(64) NOT NULL COMMENT 'Teléfono Celular',
  `cor` varchar(255) NOT NULL COMMENT 'Correo Electronico',
  `fac` varchar(255) NOT NULL COMMENT 'FaceBook',
  `pro` varchar(255) NOT NULL COMMENT 'Profesión'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Listado de Clientes Padres';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_asociados`
--

CREATE TABLE IF NOT EXISTS `t_asociados` (
  `id` int(10) NOT NULL,
  `asociado` text COLLATE latin1_spanish_ci NOT NULL,
  `imagen` text COLLATE latin1_spanish_ci NOT NULL,
  `descrip` text COLLATE latin1_spanish_ci NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_categoria`
--

CREATE TABLE IF NOT EXISTS `t_categoria` (
  `oid` int(10) NOT NULL,
  `categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descrip` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `t_categoria`
--

INSERT INTO `t_categoria` (`oid`, `categoria`, `descrip`) VALUES
(1, 'Viaje con nosotros', '*Venta de Boletos Aéreos Nacionales e Internacionales<br>'),
(2, 'Paquetes', 'algo2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_datos`
--

CREATE TABLE IF NOT EXISTS `t_datos` (
  `id` int(10) NOT NULL,
  `mision` text COLLATE latin1_spanish_ci NOT NULL,
  `vision` text COLLATE latin1_spanish_ci NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_empresa`
--

CREATE TABLE IF NOT EXISTS `t_empresa` (
  `id` int(10) NOT NULL,
  `nombre` text COLLATE latin1_spanish_ci NOT NULL,
  `imagen` text COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `t_empresa`
--

INSERT INTO `t_empresa` (`id`, `nombre`, `imagen`) VALUES
(1, 'Addidas', 'c1.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_galeria`
--

CREATE TABLE IF NOT EXISTS `t_galeria` (
  `oid` int(11) NOT NULL,
  `oidpor` int(11) NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `detalle` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `enlace` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_noticias`
--

CREATE TABLE IF NOT EXISTS `t_noticias` (
  `oid` int(10) NOT NULL,
  `imagen` text NOT NULL,
  `titulo` text NOT NULL,
  `descrip` text NOT NULL,
  `enlace` text NOT NULL,
  `fecha` date NOT NULL,
  `resumen` text NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_noticias`
--

INSERT INTO `t_noticias` (`oid`, `imagen`, `titulo`, `descrip`, `enlace`, `fecha`, `resumen`, `modificado`) VALUES
(1, '0 214_1.jpg', 'Noticia 1', 'Detalle Noticia 1', '', '2015-09-04', 'Resumen noticia 1', '2015-09-04 22:48:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_portafolio`
--

CREATE TABLE IF NOT EXISTS `t_portafolio` (
  `id` int(11) NOT NULL,
  `oidcat` int(11) NOT NULL DEFAULT '0',
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `descrip` text COLLATE utf8_spanish_ci NOT NULL,
  `resumen` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `estatus` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `t_portafolio`
--

INSERT INTO `t_portafolio` (`id`, `oidcat`, `titulo`, `descrip`, `resumen`, `fecha`, `modificado`, `estatus`) VALUES
(1, 1, 'Viaje con nosotros', '*Venta de Boletos Aéreos Nacionales e Internacionales<br>', '*Venta de Boletos Aéreos Nacionales e Internacionales<br>\r\nY algo mas\r\n', '2015-09-04', '2015-09-04 21:05:37', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_sitios`
--

CREATE TABLE IF NOT EXISTS `t_sitios` (
  `oid` int(11) NOT NULL COMMENT 'Identificador',
  `nom` varchar(255) NOT NULL COMMENT 'Nombre Completo',
  `cod` varchar(16) NOT NULL COMMENT 'Codigo del Sitio',
  `est` varchar(255) NOT NULL COMMENT 'Estado o Provincia'
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1 COMMENT='Control de los sitios WEB';

--
-- Volcado de datos para la tabla `t_sitios`
--

INSERT INTO `t_sitios` (`oid`, `nom`, `cod`, `est`) VALUES
(1, 'Aeropuerto Internacional de Maiquetía Simón Bolívar', 'CCS', 'Caracas'),
(2, 'Aeropuerto Internacional de La Chinita', 'MAR', 'Maracaibo'),
(3, 'Aeropuerto Internacional Arturo Michelena', 'VLN', 'Valencia'),
(4, 'Aeropuerto Internacional Juan Vicente Gómez', 'SVZ', 'San Antonio del Táchira'),
(5, 'Aeropuerto Internacional de Santo Domingo', 'STD', 'Santo Domingo Táchira'),
(6, 'Aeropuerto de La Fría', 'LFR', 'La Fría – Táchira'),
(7, 'Aeropuerto de Paramillo', 'SCI', 'San Cristóbal'),
(8, 'Aeropuerto Internacional de Oriente José Antonio Anzoátegui', 'BLA', 'Barcelona'),
(9, 'Aeropuerto Internacional Jacinto Lara', 'BRM', 'Barquisimeto'),
(10, 'Aeropuerto Alberto Carnevali', 'MRD', 'Mérida'),
(11, 'Aeropuerto  Internacional Juan Pablo Pérez Alfonzo', 'EVG', 'El Vigía- Mérida'),
(12, 'Aeropuerto Internacional del Caribe Santiago Mariño', 'PMV', 'Porlamar – Isla de Margarita'),
(13, 'Aeropuerto Internacional Manuel Piar', 'PZO', 'Puerto Ordaz'),
(14, 'Aeropuerto José Tadeo Monagas', 'MUN', 'Maturín'),
(15, 'Aeropuerto Don Edmundo Barrios', 'SOM', 'San Tomé – Anzoátegui'),
(16, 'Aeropuerto José Leonardo Chirinos', 'CZE', 'Coro'),
(17, 'Aeropuerto Internacional de Las Piedras Josefa Camejo', 'LSP', 'Punto Fijo – Falcón'),
(18, 'Aeropuerto Tomás de Heres', 'CBL', 'Ciudad Bolívar'),
(19, 'Aeropuerto Antonio José de Sucre', 'CUM', 'Cumaná'),
(20, 'Aeropuerto Las Flacheras', 'SFD', 'San Fernando de Apure'),
(21, 'Aeropuerto Gral. Bgda Oswaldo Guevara Mujica', 'AGV', 'Acarigua'),
(22, 'Aeropuerto Nacional de Barinas', 'BNS', 'Barinas'),
(23, 'Aeropuerto Cacique Aramare', 'PYH', 'Puerto Ayacucho'),
(24, 'Aeropuerto Nacional San Rafel', 'TUV', 'Tucupita'),
(25, 'Aeropuerto Nacional Antonio Nicolás Briceño', 'VLV', 'Valera'),
(26, 'Aeropuerto Parque Nacional Canaima', 'CAJ', 'Canaima'),
(27, 'Aeropuerto Parque Nacional Los Roques', 'LRV', 'Los Roques'),
(28, 'Aeropuerto Néstor Areas', 'SNF', 'San Felipe'),
(29, 'Aeropuerto Nacional Bartolomé Salom', 'PBL', 'Puerto Cabello'),
(30, 'Aeropuerto Nacional Ezequiel Zamora', '', 'San Carlos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_solicitud`
--

CREATE TABLE IF NOT EXISTS `t_solicitud` (
  `oid` int(11) NOT NULL COMMENT 'Identificador',
  `oidc` int(11) NOT NULL COMMENT 'Identificador del Cliente',
  `fre` date NOT NULL COMMENT 'Fecha Solicitud',
  `ori` int(11) NOT NULL COMMENT 'Origen',
  `des` int(11) NOT NULL COMMENT 'Destino',
  `det` text NOT NULL COMMENT 'Detalles',
  `tip` int(2) NOT NULL COMMENT 'Tipo de Solicitud',
  `est` tinyint(1) NOT NULL COMMENT 'Estatus'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Control de Solicitudes';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuarios`
--

CREATE TABLE IF NOT EXISTS `t_usuarios` (
  `id` int(5) NOT NULL,
  `documento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `t_usuarios`
--

INSERT INTO `t_usuarios` (`id`, `documento`, `nombre`, `apellido`, `login`, `clave`, `nivel`) VALUES
(1, '1', 'Administrador', 'Administrador', 'admin', '202cb962ac59075b964b07152d234b70', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_afiliados`
--
ALTER TABLE `t_afiliados`
  ADD PRIMARY KEY (`oid`),
  ADD UNIQUE KEY `cedula` (`ced`);

--
-- Indices de la tabla `t_asociados`
--
ALTER TABLE `t_asociados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `t_categoria`
--
ALTER TABLE `t_categoria`
  ADD PRIMARY KEY (`oid`);

--
-- Indices de la tabla `t_datos`
--
ALTER TABLE `t_datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `t_empresa`
--
ALTER TABLE `t_empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `t_galeria`
--
ALTER TABLE `t_galeria`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `oidpor` (`oidpor`);

--
-- Indices de la tabla `t_noticias`
--
ALTER TABLE `t_noticias`
  ADD PRIMARY KEY (`oid`);

--
-- Indices de la tabla `t_portafolio`
--
ALTER TABLE `t_portafolio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oidcat` (`oidcat`);

--
-- Indices de la tabla `t_sitios`
--
ALTER TABLE `t_sitios`
  ADD PRIMARY KEY (`oid`);

--
-- Indices de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_asociados`
--
ALTER TABLE `t_asociados`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `t_categoria`
--
ALTER TABLE `t_categoria`
  MODIFY `oid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `t_datos`
--
ALTER TABLE `t_datos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `t_empresa`
--
ALTER TABLE `t_empresa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `t_galeria`
--
ALTER TABLE `t_galeria`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `t_noticias`
--
ALTER TABLE `t_noticias`
  MODIFY `oid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `t_portafolio`
--
ALTER TABLE `t_portafolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `t_sitios`
--
ALTER TABLE `t_sitios`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador',AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
