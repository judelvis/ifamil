-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.44-0ubuntu0.14.04.1 - (Ubuntu)
-- Server OS:                    debian-linux-gnu
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2015-09-14 07:35:47
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table ifamil.contacto
DROP TABLE IF EXISTS `contacto`;
CREATE TABLE IF NOT EXISTS `contacto` (
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `mensaje` text COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`correo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Dumping data for table ifamil.contacto: ~0 rows (approximately)
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;


-- Dumping structure for table ifamil.t_afiliados
DROP TABLE IF EXISTS `t_afiliados`;
CREATE TABLE IF NOT EXISTS `t_afiliados` (
  `oid` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Auto Incremento',
  `ced` int(11) NOT NULL COMMENT 'Cedula de identidad',
  `nom` varchar(255) NOT NULL COMMENT 'Nombre Completo',
  `fna` varchar(50) NOT NULL COMMENT 'Fecha de Nacimiento',
  `tel` varchar(64) NOT NULL COMMENT 'Teléfono Celular',
  `cor` varchar(255) NOT NULL COMMENT 'Correo Electronico',
  `fac` varchar(255) NOT NULL COMMENT 'FaceBook',
  `pro` varchar(255) NOT NULL COMMENT 'Profesión',
  PRIMARY KEY (`oid`),
  UNIQUE KEY `cedula` (`ced`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='Listado de Clientes Padres';

-- Dumping data for table ifamil.t_afiliados: ~3 rows (approximately)
/*!40000 ALTER TABLE `t_afiliados` DISABLE KEYS */;
INSERT INTO `t_afiliados` (`oid`, `ced`, `nom`, `fna`, `tel`, `cor`, `fac`, `pro`) VALUES
	(1, 25475197, 'Anthony Uzcategui', '07/05/97', '041682821823', 'anthony-uzcategui7@gmail.com', 'AnthonyPEÑ', 'TAXISTA'),
	(2, 25475192, 'Anthony UzcateguiP', '07/05/97', '041682821821', 'anthony-uzcategui7@gmail.com', 'AnthonyPEÑA', 'Buecetero'),
	(3, 17456121, 'judelvis rivas', '1985/12/23', '354564', 'jud.prog@gmail.com', '', 'sdfsdfdsf');
/*!40000 ALTER TABLE `t_afiliados` ENABLE KEYS */;


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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Dumping data for table ifamil.t_categoria: ~4 rows (approximately)
/*!40000 ALTER TABLE `t_categoria` DISABLE KEYS */;
INSERT INTO `t_categoria` (`oid`, `categoria`, `descrip`) VALUES
	(1, 'Transporte', ''),
	(2, 'Viajes', ''),
	(3, 'Hoteleria', ''),
	(4, 'Paquetes', '');
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Dumping data for table ifamil.t_empresa: ~5 rows (approximately)
/*!40000 ALTER TABLE `t_empresa` DISABLE KEYS */;
INSERT INTO `t_empresa` (`id`, `nombre`, `imagen`) VALUES
	(4, 'Locatel', 'locatel.png'),
	(5, 'PDVSA', 'pdvsa.png'),
	(6, 'Conatel', 'conatel.png'),
	(7, 'Commerso', 'comersso.png'),
	(8, 'IPSFA', 'IPSFA.png');
/*!40000 ALTER TABLE `t_empresa` ENABLE KEYS */;


-- Dumping structure for table ifamil.t_estados
DROP TABLE IF EXISTS `t_estados`;
CREATE TABLE IF NOT EXISTS `t_estados` (
  `oid` int(18) NOT NULL AUTO_INCREMENT,
  `estado` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Dumping data for table ifamil.t_estados: ~24 rows (approximately)
/*!40000 ALTER TABLE `t_estados` DISABLE KEYS */;
INSERT INTO `t_estados` (`oid`, `estado`) VALUES
	(1, 'Amazonas'),
	(2, 'Anzoategui'),
	(3, 'Apure'),
	(4, 'Aragua'),
	(5, 'Barinas'),
	(6, 'Bolívar'),
	(7, 'Carabobo'),
	(8, 'Cojedes'),
	(9, 'Delta Amacuro'),
	(10, 'Distrito Capital'),
	(11, 'Falcón'),
	(12, 'Guárico'),
	(13, 'Lara'),
	(14, 'Mérida'),
	(15, 'Miranda'),
	(16, 'Monagas'),
	(17, 'Nueva Esparta'),
	(18, 'Portuguesa'),
	(19, 'Sucre'),
	(20, 'Táchira'),
	(21, 'Trujillo'),
	(22, 'Vargas'),
	(23, 'Yaracuy'),
	(24, 'Zulia');
/*!40000 ALTER TABLE `t_estados` ENABLE KEYS */;


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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Dumping data for table ifamil.t_galeria: ~18 rows (approximately)
/*!40000 ALTER TABLE `t_galeria` DISABLE KEYS */;
INSERT INTO `t_galeria` (`oid`, `oidpor`, `imagen`, `titulo`, `detalle`, `fecha`, `modificado`, `enlace`) VALUES
	(1, 2, 'navidad.jpg', 'Navidad', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2015-09-14', '2015-09-09 16:59:00', ''),
	(2, 3, 'navidad2.jpg', 'Navidad', 'afjdalfnadlkjfndaljkfbdajlk', '2015-09-11', '2015-09-09 17:14:44', ''),
	(3, 3, 'navidad3.jpg', '', '', '0000-00-00', '2015-09-09 17:15:25', ''),
	(5, 4, 'isal.jpg', 'Isla la tortuga', 'Isla la tortuga', '2015-09-11', '2015-09-11 08:51:07', ''),
	(6, 4, 'isla2.jpg', '', '', '0000-00-00', '2015-09-11 08:51:56', ''),
	(7, 4, 'isla3.jpg', '', '', '0000-00-00', '2015-09-11 08:52:07', ''),
	(8, 4, 'LA TORTUGA.jpg', '', '', '0000-00-00', '2015-09-11 08:52:33', ''),
	(9, 5, 'llanso.jpg', 'Los Llanos', 'llanos', '2015-09-11', '2015-09-11 10:09:10', ''),
	(10, 5, 'llanos2.jpg', 'Los Llanos', 'llanos', '2015-09-11', '2015-09-11 10:10:07', ''),
	(11, 5, 'llanos3.jpg', '', '', '0000-00-00', '2015-09-11 10:10:17', ''),
	(12, 5, 'LOS LLANOS.jpg', '', '', '0000-00-00', '2015-09-11 10:11:52', ''),
	(13, 6, 'bueceo.jpg', 'Isla de Margarita Buceo o snorkeling', 'margarita', '2015-09-11', '2015-09-11 10:26:13', ''),
	(14, 6, 'buceo2.jpg', '', '', '0000-00-00', '2015-09-11 10:22:49', ''),
	(15, 6, 'buceo3.jpg', '', '', '0000-00-00', '2015-09-11 10:22:59', ''),
	(17, 7, 'isla2.jpg', 'cvcvbv', 'cvbvcbvcbvcbv', '2015-09-11', '2015-09-11 16:19:02', ''),
	(18, 7, 'isal.jpg', 'dsf', 'dsf', '2015-09-11', '2015-09-11 16:19:52', ''),
	(19, 8, '13trapiche01_700.jpg', 'imagen', 'dfdsf', '0000-00-00', '2015-09-13 15:02:41', ''),
	(20, 9, 'P1120315.JPG', 'asdfds', 'dsf', '2015-09-16', '2015-09-13 15:12:15', 'dsfsa');
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
	(1, 'rugby.jpg', 'IFAMIL BRINDA A SUS EMPLEADOS UN DÍA RECREACIONAL', 'Caracas, 18 de julio de 2015. Este jueves VIAJE Y TURISMO IFAMIL C.A a través de su gerente el Cnel. Juan Puertas Tovar, le dedico un día a sus empleados, a través de una visita a la hacienda Santa Teresa con el fin de esparcir e integrar a estas personas, que más de ser un grupo de trabajo, son la familia IFAMIL.\r\n\r\nLa actividad fue realizada en la hacienda Santa Teresa, allí recibieron los valores fundamentales, del  juego “Rugby” como son disciplina, respeto, integridad, pasión y solidaridad.\r\n\r\nDegustaron de un exquisito almuerzo y realizaron un recorrido donde conocieron el arte de hacer Ron.', '', '2015-07-18', 'La actividad fue realizada en la hacienda Santa Teresa, allí recibieron los valores fundamentales, del  juego “Rugby” como son disciplina, respeto, integridad, pasión y solidaridad.', '2015-09-08 08:51:50');
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Dumping data for table ifamil.t_portafolio: ~6 rows (approximately)
/*!40000 ALTER TABLE `t_portafolio` DISABLE KEYS */;
INSERT INTO `t_portafolio` (`id`, `oidcat`, `titulo`, `descrip`, `resumen`, `fecha`, `modificado`, `estatus`) VALUES
	(4, 4, 'Isla la tortuga', '<ul class="para"><li>Incluye:</li>\r\n<li>Traslado en unidades ejecutivas Caracas- Chirimena- Caracas.</li>\r\n<li>Traslado en lancha Chirimena- La Tortuga- Chirimena.</li>\r\n<li>Todas las comidas (02 desayuno-02 almuerzo-01cena)(comida a base de pescado, desayunos arepa y sándwich).</li>\r\n<li>Pernocta en carpa con colchón (el colchon ya esta incluido con la carpa).</li>\r\n<li>Cava con hielo, agua y refresco.</li>\r\n<li>Toldo y sillas de playa.</li>\r\n<li>Paseo a los cayos Tortuguillos.</li>\r\n<li>Paramedico.</li></ul>', '<p class="para">Vive una mágica experiencia en la Isla de Margarita 2 DIAS / 1 NOCHE</p>', '2015-09-11', '2015-09-12 17:08:28', 0),
	(5, 4, 'Los Llanos', '<ul class="para"><li>Incluye:</li>\r\n<li>Asistencia aeropuerto Barinas, traslado In/Out.</li>\r\n<li>Alojamiento en habitación Full equipo.\r\n<li>Desayuno, almuerzo, cena, y bebidas durante las comidas (No Alcohólicas).\r\n<li>Actividades recreativas observación del comportamiento de la anaconda, cancha de bolas criollas, pesca deportiva, piscina tipo jacuzzi, paseo en bicicleta, mesa de ping pong exhibición ecuestre y safari nocturno(Ciertas condiciones aplican).</li></ul>', '<p class="para">Vive una mágica experencia en los Llanos', '2015-09-11', '2015-09-11 10:16:13', 0),
	(6, 4, 'Isla de Margarita Buceo o Snorkeling', 'En nuestro tour de buceo o snorkeling por los frailes, usted disfrutara dentro de sus siete pequeñas islas ubicadas al noreste de Margarita una experiencia maravillosa donde lo llevara a descubrir un mundo totalmente diferente, y hermoso a la vez.\r\n\r\nSnorkelling incluye:\r\n\r\nTranslado Hotel- Muelle- Hotel, Observando la abundante vida marina y reconociendo una gran cantidad de peces tropicales en aguas claras y tranquilas, Almuerzo, refrigerios, y equipos.\r\nDuracion:8horas aproximadamente.\r\n\r\nBuceo incluye:\r\n\r\nTraslado Hotel-Muelle-Hotel.\r\nDos inmersiones de no mas de 20 metros de profundidad, guiadas por un experto, Dive Master que le mostrara diferentes especies de vida marina.\r\nAlmuerzo, refrigerios y equipos.\r\nDuración de 8 horas aproximadamente.', '<p class="para">Vive una mágica experiencia en la Isla de Margarita 2 DIAS/ 1 NOCHE</p>', '2015-09-11', '2015-09-11 10:30:03', 0),
	(7, 4, 'paquete 1', '\'<p class="parra">Aca va el contenido largo</p><br><div style="background-color:#00ff66">Epale</div>\'', '\'resumen paqjuetre 1\'', '2015-09-11', '2015-09-13 14:48:52', 0),
	(8, 4, '\'<h2>titulo principal</h2>\'', '\'<h5>Descripcion probando</h5\'', '\'<p class=\\"parra\\">Resumen Ejemplo</p>\'', '2015-09-16', '2015-09-13 15:00:56', 0),
	(9, 4, '\'dsfdsf\'', '\'dfafddsf\'', '\'dsfdsf\'', '2015-09-08', '2015-09-13 15:11:53', 0);
/*!40000 ALTER TABLE `t_portafolio` ENABLE KEYS */;


-- Dumping structure for table ifamil.t_sitios
DROP TABLE IF EXISTS `t_sitios`;
CREATE TABLE IF NOT EXISTS `t_sitios` (
  `oid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador',
  `nom` varchar(255) NOT NULL COMMENT 'Nombre Completo',
  `cod` varchar(16) NOT NULL COMMENT 'Codigo del Sitio',
  `est` varchar(255) NOT NULL COMMENT 'Estado o Provincia',
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1 COMMENT='Control de los sitios WEB';

-- Dumping data for table ifamil.t_sitios: ~31 rows (approximately)
/*!40000 ALTER TABLE `t_sitios` DISABLE KEYS */;
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
	(30, 'Aeropuerto Nacional Ezequiel Zamora', '', 'San Carlos'),
	(31, 'Aeropuerto Judelvis', 'jud', 'merida');
/*!40000 ALTER TABLE `t_sitios` ENABLE KEYS */;


-- Dumping structure for table ifamil.t_solicitud
DROP TABLE IF EXISTS `t_solicitud`;
CREATE TABLE IF NOT EXISTS `t_solicitud` (
  `oid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador',
  `cor` varchar(64) NOT NULL COMMENT 'Correo Electronico del cliente',
  `fes` date NOT NULL COMMENT 'Fecha Solicitud',
  `fel` int(11) NOT NULL COMMENT 'Fecha de Llegada',
  `ori` int(11) NOT NULL COMMENT 'Origen',
  `des` int(11) NOT NULL COMMENT 'Destino',
  `caa` int(2) NOT NULL COMMENT 'Cantidad Adultos',
  `can` int(2) NOT NULL COMMENT 'Cantidad de Ni;os',
  `det` text NOT NULL COMMENT 'Detalles',
  `tip` int(2) NOT NULL COMMENT 'Tipo de Solicitud',
  `fap` int(1) NOT NULL COMMENT 'Forma de Pago',
  `hos` varchar(256) NOT NULL COMMENT 'Hospedaje',
  `tra` varchar(256) NOT NULL COMMENT 'Transporte',
  `paq` int(2) NOT NULL COMMENT 'Paquete',
  `est` tinyint(1) NOT NULL COMMENT 'Estatus',
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='Control de Solicitudes';

-- Dumping data for table ifamil.t_solicitud: ~1 rows (approximately)
/*!40000 ALTER TABLE `t_solicitud` DISABLE KEYS */;
INSERT INTO `t_solicitud` (`oid`, `cor`, `fes`, `fel`, `ori`, `des`, `caa`, `can`, `det`, `tip`, `fap`, `hos`, `tra`, `paq`, `est`) VALUES
	(1, 'jud.prog@gmail.com', '2015-09-24', 2015, 31, 1, 4, 2, 'epale', 2, 1, '0', '', 4, 0);
/*!40000 ALTER TABLE `t_solicitud` ENABLE KEYS */;


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
t_portafolio