-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.37-0ubuntu0.13.10.1 - (Ubuntu)
-- Server OS:                    debian-linux-gnu
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2015-09-05 14:30:12
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table ifamil.t_asociados
DROP TABLE IF EXISTS `t_asociados`;
CREATE TABLE IF NOT EXISTS `t_asociados` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `asociado` text COLLATE latin1_spanish_ci NOT NULL,
  `imagen` text COLLATE latin1_spanish_ci NOT NULL,
  `descrip` text COLLATE latin1_spanish_ci NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Dumping data for table ifamil.t_asociados: ~0 rows (approximately)
/*!40000 ALTER TABLE `t_asociados` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_asociados` ENABLE KEYS */;


-- Dumping structure for table ifamil.t_categoria
DROP TABLE IF EXISTS `t_categoria`;
CREATE TABLE IF NOT EXISTS `t_categoria` (
  `oid` int(10) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descrip` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Dumping data for table ifamil.t_categoria: ~2 rows (approximately)
/*!40000 ALTER TABLE `t_categoria` DISABLE KEYS */;
INSERT INTO `t_categoria` (`oid`, `categoria`, `descrip`) VALUES
	(1, 'Viaje con nosotros', '*Venta de Boletos Aéreos Nacionales e Internacionales<br>'),
	(2, 'Paquetes', 'algo2');
/*!40000 ALTER TABLE `t_categoria` ENABLE KEYS */;


-- Dumping structure for table ifamil.t_datos
DROP TABLE IF EXISTS `t_datos`;
CREATE TABLE IF NOT EXISTS `t_datos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `mision` text COLLATE latin1_spanish_ci NOT NULL,
  `vision` text COLLATE latin1_spanish_ci NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Dumping data for table ifamil.t_datos: ~0 rows (approximately)
/*!40000 ALTER TABLE `t_datos` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_datos` ENABLE KEYS */;


-- Dumping structure for table ifamil.t_empresa
DROP TABLE IF EXISTS `t_empresa`;
CREATE TABLE IF NOT EXISTS `t_empresa` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE latin1_spanish_ci NOT NULL,
  `imagen` text COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Dumping data for table ifamil.t_empresa: ~0 rows (approximately)
/*!40000 ALTER TABLE `t_empresa` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_empresa` ENABLE KEYS */;


-- Dumping structure for table ifamil.t_galeria
DROP TABLE IF EXISTS `t_galeria`;
CREATE TABLE IF NOT EXISTS `t_galeria` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `oidpor` int(11) NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `detalle` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `enlace` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`oid`),
  KEY `oidpor` (`oidpor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Dumping data for table ifamil.t_galeria: ~0 rows (approximately)
/*!40000 ALTER TABLE `t_galeria` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_galeria` ENABLE KEYS */;


-- Dumping structure for table ifamil.t_noticias
DROP TABLE IF EXISTS `t_noticias`;
CREATE TABLE IF NOT EXISTS `t_noticias` (
  `oid` int(10) NOT NULL AUTO_INCREMENT,
  `imagen` text NOT NULL,
  `titulo` text NOT NULL,
  `descrip` text NOT NULL,
  `enlace` text NOT NULL,
  `fecha` date NOT NULL,
  `resumen` text NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table ifamil.t_noticias: ~1 rows (approximately)
/*!40000 ALTER TABLE `t_noticias` DISABLE KEYS */;
INSERT INTO `t_noticias` (`oid`, `imagen`, `titulo`, `descrip`, `enlace`, `fecha`, `resumen`, `modificado`) VALUES
	(1, '0 214_1.jpg', 'Noticia 1', 'Detalle Noticia 1', '', '2015-09-04', 'Resumen noticia 1', '2015-09-04 18:18:39');
/*!40000 ALTER TABLE `t_noticias` ENABLE KEYS */;


-- Dumping structure for table ifamil.t_portafolio
DROP TABLE IF EXISTS `t_portafolio`;
CREATE TABLE IF NOT EXISTS `t_portafolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oidcat` int(11) NOT NULL DEFAULT '0',
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `descrip` text COLLATE utf8_spanish_ci NOT NULL,
  `resumen` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `estatus` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `oidcat` (`oidcat`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Dumping data for table ifamil.t_portafolio: ~1 rows (approximately)
/*!40000 ALTER TABLE `t_portafolio` DISABLE KEYS */;
INSERT INTO `t_portafolio` (`id`, `oidcat`, `titulo`, `descrip`, `resumen`, `fecha`, `modificado`, `estatus`) VALUES
	(1, 1, 'Viaje con nosotros', '*Venta de Boletos Aéreos Nacionales e Internacionales<br>', '*Venta de Boletos Aéreos Nacionales e Internacionales<br>\r\nY algo mas\r\n', '2015-09-04', '2015-09-04 16:35:37', 1);
/*!40000 ALTER TABLE `t_portafolio` ENABLE KEYS */;


-- Dumping structure for table ifamil.t_usuarios
DROP TABLE IF EXISTS `t_usuarios`;
CREATE TABLE IF NOT EXISTS `t_usuarios` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `documento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nivel` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table ifamil.t_usuarios: ~1 rows (approximately)
/*!40000 ALTER TABLE `t_usuarios` DISABLE KEYS */;
INSERT INTO `t_usuarios` (`id`, `documento`, `nombre`, `apellido`, `login`, `clave`, `nivel`) VALUES
	(1, '1', 'Administrador', 'Administrador', 'admin', '202cb962ac59075b964b07152d234b70', 0);
/*!40000 ALTER TABLE `t_usuarios` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;