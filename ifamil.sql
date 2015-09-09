-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.44-0ubuntu0.14.04.1 - (Ubuntu)
-- Server OS:                    debian-linux-gnu
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- Dumping data for table ifamil.contacto: ~0 rows (approximately)
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;

-- Dumping data for table ifamil.t_afiliados: ~2 rows (approximately)
/*!40000 ALTER TABLE `t_afiliados` DISABLE KEYS */;
INSERT INTO `t_afiliados` (`oid`, `ced`, `nom`, `fna`, `tel`, `cor`, `fac`, `pro`) VALUES
	(1, 25475197, 'Anthony Uzcategui', '07/05/97', '041682821823', 'anthony-uzcategui7@gmail.com', 'AnthonyPEÑ', 'TAXISTA'),
	(2, 25475192, 'Anthony UzcateguiP', '07/05/97', '041682821821', 'anthony-uzcategui7@gmail.com', 'AnthonyPEÑA', 'Buecetero');
/*!40000 ALTER TABLE `t_afiliados` ENABLE KEYS */;

-- Dumping data for table ifamil.t_asociados: ~0 rows (approximately)
/*!40000 ALTER TABLE `t_asociados` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_asociados` ENABLE KEYS */;

-- Dumping data for table ifamil.t_categoria: ~4 rows (approximately)
/*!40000 ALTER TABLE `t_categoria` DISABLE KEYS */;
INSERT INTO `t_categoria` (`oid`, `categoria`, `descrip`) VALUES
	(1, 'Transporte', ''),
	(2, 'Viajes', ''),
	(3, 'Hoteleria', ''),
	(4, 'Paquetes', '');
/*!40000 ALTER TABLE `t_categoria` ENABLE KEYS */;

-- Dumping data for table ifamil.t_datos: ~0 rows (approximately)
/*!40000 ALTER TABLE `t_datos` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_datos` ENABLE KEYS */;

-- Dumping data for table ifamil.t_empresa: ~5 rows (approximately)
/*!40000 ALTER TABLE `t_empresa` DISABLE KEYS */;
INSERT INTO `t_empresa` (`id`, `nombre`, `imagen`) VALUES
	(4, 'Locatel', 'locatel.png'),
	(5, 'PDVSA', 'pdvsa.png'),
	(6, 'Conatel', 'conatel.png'),
	(7, 'Commerso', 'comersso.png'),
	(8, 'IPSFA', 'IPSFA.png');
/*!40000 ALTER TABLE `t_empresa` ENABLE KEYS */;

-- Dumping data for table ifamil.t_galeria: ~4 rows (approximately)
/*!40000 ALTER TABLE `t_galeria` DISABLE KEYS */;
INSERT INTO `t_galeria` (`oid`, `oidpor`, `imagen`, `titulo`, `detalle`, `fecha`, `modificado`, `enlace`) VALUES
	(1, 2, 'navidad.jpg', 'Navidad', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2015-09-14', '2015-09-09 16:59:00', ''),
	(2, 3, 'navidad2.jpg', 'Navidad', 'afjdalfnadlkjfndaljkfbdajlk', '2015-09-11', '2015-09-09 17:14:44', ''),
	(3, 3, 'navidad3.jpg', '', '', '0000-00-00', '2015-09-09 17:15:25', ''),
	(4, 4, 'navidad4.jpg', 'Navidad', 'afda', '2015-09-12', '2015-09-09 17:17:25', '');
/*!40000 ALTER TABLE `t_galeria` ENABLE KEYS */;

-- Dumping data for table ifamil.t_noticias: ~1 rows (approximately)
/*!40000 ALTER TABLE `t_noticias` DISABLE KEYS */;
INSERT INTO `t_noticias` (`oid`, `imagen`, `titulo`, `descrip`, `enlace`, `fecha`, `resumen`, `modificado`) VALUES
	(1, 'rugby.jpg', 'IFAMIL BRINDA A SUS EMPLEADOS UN DÍA RECREACIONAL', 'Caracas, 18 de julio de 2015. Este jueves VIAJE Y TURISMO IFAMIL C.A a través de su gerente el Cnel. Juan Puertas Tovar, le dedico un día a sus empleados, a través de una visita a la hacienda Santa Teresa con el fin de esparcir e integrar a estas personas, que más de ser un grupo de trabajo, son la familia IFAMIL.\r\n\r\nLa actividad fue realizada en la hacienda Santa Teresa, allí recibieron los valores fundamentales, del  juego “Rugby” como son disciplina, respeto, integridad, pasión y solidaridad.\r\n\r\nDegustaron de un exquisito almuerzo y realizaron un recorrido donde conocieron el arte de hacer Ron.', '', '2015-07-18', 'La actividad fue realizada en la hacienda Santa Teresa, allí recibieron los valores fundamentales, del  juego “Rugby” como son disciplina, respeto, integridad, pasión y solidaridad.', '2015-09-08 08:51:50');
/*!40000 ALTER TABLE `t_noticias` ENABLE KEYS */;

-- Dumping data for table ifamil.t_portafolio: ~1 rows (approximately)
/*!40000 ALTER TABLE `t_portafolio` DISABLE KEYS */;
INSERT INTO `t_portafolio` (`id`, `oidcat`, `titulo`, `descrip`, `resumen`, `fecha`, `modificado`, `estatus`) VALUES
	(3, 4, 'Navidad', 'naviadadfafdda', 'navidadafadfdagfad', '2015-09-11', '2015-09-09 17:14:05', 0);
/*!40000 ALTER TABLE `t_portafolio` ENABLE KEYS */;

-- Dumping data for table ifamil.t_sitios: ~30 rows (approximately)
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
	(30, 'Aeropuerto Nacional Ezequiel Zamora', '', 'San Carlos');
/*!40000 ALTER TABLE `t_sitios` ENABLE KEYS */;

-- Dumping data for table ifamil.t_solicitud: ~0 rows (approximately)
/*!40000 ALTER TABLE `t_solicitud` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_solicitud` ENABLE KEYS */;

-- Dumping data for table ifamil.t_usuarios: ~1 rows (approximately)
/*!40000 ALTER TABLE `t_usuarios` DISABLE KEYS */;
INSERT INTO `t_usuarios` (`id`, `documento`, `nombre`, `apellido`, `login`, `clave`, `nivel`) VALUES
	(1, '1', 'Administrador', 'Administrador', 'admin', '202cb962ac59075b964b07152d234b70', 0);
/*!40000 ALTER TABLE `t_usuarios` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
