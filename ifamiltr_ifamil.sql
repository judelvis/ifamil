-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-11-2015 a las 11:10:31
-- Versión del servidor: 5.5.45-cll-lve
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ifamiltr_ifamil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_afiliados`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Listado de Clientes Padres' AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `t_afiliados`
--

INSERT INTO `t_afiliados` (`oid`, `ced`, `nom`, `fna`, `tel`, `cor`, `fac`, `pro`) VALUES
(1, 25475197, 'Anthony Uzcategui', '07/05/97', '041682821823', 'anthony-uzcategui7@gmail.com', 'AnthonyPEÑ', 'TAXISTA'),
(2, 25475192, 'Anthony UzcateguiP', '07/05/97', '041682821821', 'anthony-uzcategui7@gmail.com', 'AnthonyPEÑA', 'Buecetero'),
(3, 17456121, 'judelvis rivas', '1985/12/23', '354564', 'jud.prog@gmail.com', '', 'sdfsdfdsf'),
(4, 20147852, 'jose guanipa suescum', '2015-10-08', '0416-2522523', 'fgdffffffffffg@hotmail.com', '', 'J');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_asociados`
--

CREATE TABLE IF NOT EXISTS `t_asociados` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `asociado` text COLLATE latin1_spanish_ci NOT NULL,
  `imagen` text COLLATE latin1_spanish_ci NOT NULL,
  `descrip` text COLLATE latin1_spanish_ci NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_categoria`
--

CREATE TABLE IF NOT EXISTS `t_categoria` (
  `oid` int(10) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descrip` text COLLATE utf8_spanish_ci NOT NULL,
  `categoria_i` text COLLATE utf8_spanish_ci NOT NULL,
  `descrip_i` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `t_categoria`
--

INSERT INTO `t_categoria` (`oid`, `categoria`, `descrip`, `categoria_i`, `descrip_i`) VALUES
(1, 'Sol Y Playa', '', 'Sun and beach', ''),
(2, 'Selva', '', 'Jungle', ''),
(3, 'Montaña', '', 'Mountain', ''),
(4, 'Llanos', '', '', ''),
(5, 'Ciudad', '', 'City', ''),
(6, 'Internacional', '', 'Internacional', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_contactos`
--

CREATE TABLE IF NOT EXISTS `t_contactos` (
  `oid` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE latin1_spanish_ci NOT NULL,
  `correo` text COLLATE latin1_spanish_ci NOT NULL,
  `telefono` text COLLATE latin1_spanish_ci NOT NULL,
  `mensaje` text COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `t_contactos`
--

INSERT INTO `t_contactos` (`oid`, `nombre`, `correo`, `telefono`, `mensaje`) VALUES
(1, 'Judelvis', 'sdsd2ads@fdf', '0424-4534543', 'qwert asf zxv 13234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_datos`
--

CREATE TABLE IF NOT EXISTS `t_datos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `mision` text COLLATE latin1_spanish_ci NOT NULL,
  `vision` text COLLATE latin1_spanish_ci NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_empresa`
--

CREATE TABLE IF NOT EXISTS `t_empresa` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE latin1_spanish_ci NOT NULL,
  `imagen` text COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `t_empresa`
--

INSERT INTO `t_empresa` (`id`, `nombre`, `imagen`) VALUES
(4, 'Locatel', 'locatel.png'),
(5, 'PDVSA', 'pdvsa.png'),
(6, 'Conatel', 'conatel.png'),
(7, 'Commerso', 'comersso.png'),
(8, 'IPSFA', 'IPSFA.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_estados`
--

CREATE TABLE IF NOT EXISTS `t_estados` (
  `oid` int(18) NOT NULL AUTO_INCREMENT,
  `estado` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `t_estados`
--

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_galeria`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=28 ;

--
-- Volcado de datos para la tabla `t_galeria`
--

INSERT INTO `t_galeria` (`oid`, `oidpor`, `imagen`, `titulo`, `detalle`, `fecha`, `modificado`, `enlace`) VALUES
(1, 2, 'navidad.jpg', 'Navidad', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2015-09-14', '2015-09-09 20:59:00', ''),
(2, 3, 'navidad2.jpg', 'Navidad', 'afjdalfnadlkjfndaljkfbdajlk', '2015-09-11', '2015-09-09 21:14:44', ''),
(3, 3, 'navidad3.jpg', '', '', '0000-00-00', '2015-09-09 21:15:25', ''),
(11, 5, 'llanos3.jpg', '', '', '0000-00-00', '2015-09-11 14:10:17', ''),
(12, 5, 'LOS LLANOS.jpg', '', '', '0000-00-00', '2015-09-11 14:11:52', ''),
(13, 6, 'bueceo.jpg', 'Isla de Margarita Buceo o snorkeling', 'margarita', '2015-09-11', '2015-09-11 14:26:13', ''),
(14, 6, 'buceo2.jpg', '', '', '0000-00-00', '2015-09-11 14:22:49', ''),
(15, 6, 'buceo3.jpg', '', '', '0000-00-00', '2015-09-11 14:22:59', ''),
(21, 9, 'PAQUETEMERIDA.png', '', '', '2015-11-11', '2015-11-11 13:05:01', ''),
(22, 9, 'PAQUETEMERIDA1.png', '', '', '0000-00-00', '2015-11-11 13:17:25', ''),
(23, 8, 'ISLATORRUGA.png', '', '', '0000-00-00', '2015-11-11 13:36:36', ''),
(24, 8, 'TORRTUGA2.png', '', '', '2015-11-11', '2015-11-11 13:51:28', ''),
(25, 5, 'LLANO1.png', '', '', '0000-00-00', '2015-11-11 14:03:33', ''),
(26, 10, 'SABANAGRANDE1.png', '', '', '2015-11-11', '2015-11-11 14:32:04', ''),
(27, 10, 'LaGranSabana.png', '', '', '0000-00-00', '2015-11-11 14:41:35', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_noticias`
--

CREATE TABLE IF NOT EXISTS `t_noticias` (
  `oid` int(10) NOT NULL AUTO_INCREMENT,
  `imagen` text NOT NULL,
  `titulo` text NOT NULL,
  `descrip` text NOT NULL,
  `enlace` text NOT NULL,
  `fecha` date NOT NULL,
  `resumen` text NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `titulo_i` text NOT NULL,
  `descrip_i` text NOT NULL,
  `resumen_i` text NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `t_noticias`
--

INSERT INTO `t_noticias` (`oid`, `imagen`, `titulo`, `descrip`, `enlace`, `fecha`, `resumen`, `modificado`, `titulo_i`, `descrip_i`, `resumen_i`) VALUES
(1, 'rugby.jpg', 'IFAMIL BRINDA A SUS EMPLEADOS UN DÍA RECREACIONAL', 'Caracas, 18 de julio de 2015. Este jueves VIAJE Y TURISMO IFAMIL C.A a través de su gerente el Cnel. Juan Puertas Tovar, le dedico un día a sus empleados, a través de una visita a la hacienda Santa Teresa con el fin de esparcir e integrar a estas personas, que más de ser un grupo de trabajo, son la familia IFAMIL.\r\n\r\nLa actividad fue realizada en la hacienda Santa Teresa, allí recibieron los valores fundamentales, del  juego “Rugby” como son disciplina, respeto, integridad, pasión y solidaridad.\r\n\r\nDegustaron de un exquisito almuerzo y realizaron un recorrido donde conocieron el arte de hacer Ron.', '', '2015-07-18', 'La actividad fue realizada en la hacienda Santa Teresa, allí recibieron los valores fundamentales, del  juego “Rugby” como son disciplina, respeto, integridad, pasión y solidaridad.', '2015-09-08 12:51:50', '', '', ''),
(2, 'noti.jpg', 'IPSFA inauguro nueva oficina administrativa de IFAMIL', 'Caracas, 20 de abril de 2015.- El Instituto de Previsión Social de la Fuerza Armada (IPSFA), este lunes inauguro la nueva oficina administrativa de Viajes y Turismo IFAMIL C.A. Estas nuevas instalaciones tienen como finalidad generar mayor comodidad y una mejor atención a los afiliados y públicos en general que eligen a la agencia IFAMIL, como la mejor alternativa a la hora de viajar, brindándoles un servicio de primera calidad.', '', '2015-04-20', 'La nueva oficina se encuentra ubicada en el centro comercial Los Próceres, en la feria socialista del tercer nivel.', '2015-09-14 12:43:48', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_opinion`
--

CREATE TABLE IF NOT EXISTS `t_opinion` (
  `oid` int(10) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `nombre` text COLLATE latin1_spanish_ci NOT NULL,
  `correo` text COLLATE latin1_spanish_ci NOT NULL,
  `telefono` text COLLATE latin1_spanish_ci NOT NULL,
  `mensaje` text COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `t_opinion`
--

INSERT INTO `t_opinion` (`oid`, `cedula`, `nombre`, `correo`, `telefono`, `mensaje`) VALUES
(1, '17456121', 'Judelvis', 'judelvis.sis@gmail.com', '0414-3231', 'dsjflksdfj ljljj sl32j4 ;23n4m w; 3434');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_portafolio`
--

CREATE TABLE IF NOT EXISTS `t_portafolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oidcat` int(11) NOT NULL DEFAULT '0',
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `descrip` text COLLATE utf8_spanish_ci NOT NULL,
  `resumen` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `estatus` tinyint(4) NOT NULL DEFAULT '0',
  `titulo_i` text COLLATE utf8_spanish_ci NOT NULL,
  `descrip_i` text COLLATE utf8_spanish_ci NOT NULL,
  `resumen_i` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `oidcat` (`oidcat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `t_portafolio`
--

INSERT INTO `t_portafolio` (`id`, `oidcat`, `titulo`, `descrip`, `resumen`, `fecha`, `modificado`, `estatus`, `titulo_i`, `descrip_i`, `resumen_i`) VALUES
(5, 4, 'Los Llanos', '<ul class="para"><li>Incluye:</li>\r\n<li>Asistencia aeropuerto Barinas, traslado In/Out.</li>\r\n<li>Alojamiento en habitación Full equipo.\r\n<li>Desayuno, almuerzo, cena, y bebidas durante las comidas (No Alcohólicas).\r\n<li>Actividades recreativas observación del comportamiento de la anaconda, cancha de bolas criollas, pesca deportiva, piscina tipo jacuzzi, paseo en bicicleta, mesa de ping pong exhibición ecuestre y safari nocturno(Ciertas condiciones aplican).</li></ul>', '<p class="para">Vive una mágica experencia en los Llanos', '2015-09-11', '2015-09-11 14:16:13', 0, '', '', ''),
(6, 1, 'Isla de Margarita Buceo o Snorkeling', 'En nuestro tour de buceo o snorkeling por los frailes, usted disfrutara dentro de sus siete pequeñas islas ubicadas al noreste de Margarita una experiencia maravillosa donde lo llevara a descubrir un mundo totalmente diferente, y hermoso a la vez.\r\n\r\nSnorkelling incluye:\r\n\r\nTranslado Hotel- Muelle- Hotel, Observando la abundante vida marina y reconociendo una gran cantidad de peces tropicales en aguas claras y tranquilas, Almuerzo, refrigerios, y equipos.\r\nDuracion:8horas aproximadamente.\r\n\r\nBuceo incluye:\r\n\r\nTraslado Hotel-Muelle-Hotel.\r\nDos inmersiones de no mas de 20 metros de profundidad, guiadas por un experto, Dive Master que le mostrara diferentes especies de vida marina.\r\nAlmuerzo, refrigerios y equipos.\r\nDuración de 8 horas aproximadamente.', '<p class="para">Vive una mágica experiencia en la Isla de Margarita 2 DIAS/ 1 NOCHE</p>', '2015-09-11', '2015-11-11 13:59:35', 0, '', '', ''),
(8, 1, 'Isla la tortuga', 'Incluye:\r\nTraslado en unidades ejecutivas Caracas- Chirimena- Caracas.\r\nTraslado en lancha Chirimena- La Tortuga- Chirimena.\r\nTodas las comidas (02 desayuno-02 almuerzo-01cena)(comida a base de pescado, desayunos arepa y sándwich).\r\nPernocta en carpa con colchón (el colchon ya esta incluido con la carpa).\r\nCava con hielo, agua y refresco.\r\nToldo y sillas de playa.\r\nPaseo a los cayos Tortuguillos.\r\nParamedico. CONSULTE TARIFA', '2 DIAS / 1 NOCHE EN CARPA', '2015-11-10', '2015-11-11 13:42:11', 0, 'Turtle Island', 'It includes:\\r\\nTransfer Chirimena- Caracas Caracas executive units .\\r\\nBoat transfer Chirimena- Chirimena the turtle .\\r\\nAll meals (02 breakfast - lunch -02 01cena ) ( based on fish meal , corn bread and breakfast sandwich) .\\r\\nOvernight in tents with mattress ( the mattress is already included with the tent ) .\\r\\nCooler with ice , water and soda.\\r\\nAwnings and beach chairs.\\r\\nWalk to Tortuguillos keys.\\r\\nParamedic.', 'He lives a magical experience on the island of Margarita 2 DAYS / 1 NIGHT'),
(9, 2, 'MERIDA PRECIOSA UN DESTINO DE ALTURA', '4 Noches de alojamiento en el hotel Mistafi <br> Desayunos andinos diarios \r\n<br>Full day a maravillosos pueblos del páramo, collado del Cóndor (pico el águila), laguna de mucubaji,Iglesia de piedra de (Juan Félix Sánchez), con Almuerzo y Refrigerio incluido (bebidas no alcohólicas).\r\n<br>Full day al pueblo de Bailadores (por la ruta café), con almuerzo y refrigerio incluido.\r\nVista a un parque temático según su elección.\r\n<br>Aleros, Vzla de Antier Guia Incluido.\r\n<br><br>POR PERSONA EN HAB. DBLE TPL (TARIFA ESPECIAL PARA NIÑOS)<br><br>CONSULTE TARIFA', 'El estado Mérida está ubicado en el occidente de Venezuela. Limita al norte con los estados Zulia y Trujillo, al sur con Táchira y Barinas, al este con Trujillo y Barinas y al oeste con Táchira y Zulia. Su capital es la Ciudad de Mérida.', '2015-11-11', '2015-11-11 13:11:20', 0, '', '', ''),
(10, 3, 'La Gran Sabana Tour 5D/4N', 'INCLUYE:<br><BR>Transporte en vehículo 4x4<BR>Guía especializado en la zona<BR>Alojamiento en las diferentes posadas de la zona<BR>Comidas: 4 desayunos, 5 almuerzos y 4 cenas<BR>Salida al tour mínimo de 4 personas.<BR><BR>Consulte Tarifas', 'La Gran Sabana está dentro del parque Nacional Canaima, al Sur de Venezuela, en el Estado Bolívar. Es uno de los mayores atractivos turísticos del país', '2015-11-11', '2015-11-11 14:36:57', 0, 'The Gran Sabana Tour 5D / 4N', 'IT INCLUDES:\r\nTransportation in 4x4\r\nSpecialized guide in the area\r\nAccommodation in different inns in the area\r\nMeals: 4 breakfasts, 5 lunches and 4 dinners\r\nExit to the tour minimum of 4 people.\r\n\r\nSee Rates', 'The Gran Sabana is in the Canaima National Park, south of Venezuela in Bolivar State. It is one of the biggest tourist attractions in the country'),
(11, 3, '<b>DELTA DEL ORINOCO</b> <br> encuentro único con la naturaleza ', '<b>Plan 3 Días y 2 Noches</b>Incluye<BR><BR>\\r\\nTraslado terrestre y acuático desde Maturin hasta la isla del Tigre (ida y vuelta)\\r\\n<br>Alojamiento en habitaciones estilo janoko. todas las comidas, bebidas no alcohólicas durante las comidas.\\r\\n<BR>Excursiones\\r\\n<ul>\\r\\n<li>Paseo por los caños en peñero</li>\\r\\n<li>Remo en los caños en curiaras y/o kajaks</li>\\r\\n<li>Observación de fauna (aves, monos, delfines de rió, peces, entre otros)</li>\\r\\n<li>Observación de flora (palmito, bora, palo de agua)</li>\\r\\n<li>pesca artesanal de pirañas</li>\\r\\n<li>Caminata por la selva intrincada pantanosa</li>\\r\\n<li>Paseo en bote hasta la isla Los Pájaros (si es temporada podrán disfrutar de una multitud de aves como la corocora y loros)</li>\\r\\n<li>Visita a las comunidades indígenas Waraos para conocer sus costumbres (guía Wuarao)</li>\\r\\n</ul>', 'El Delta del Orinoco es el delta formado por la desembocadura del río Orinoco, uno de los más grandes del mundo. Su extensión hizo pensar a los primeros exploradores españoles que se trataba de un mar. Se considera un lugar de gran riqueza paisajística por la gran variedad de flora y fauna que alberga.', '2015-11-11', '2015-11-11 15:13:48', 0, '<b> ORINOCO DELTA </ b> <br> unique encounter with nature', '<b> Plan 3 Days and 2 Nights </ b> includes <BR>\\r\\nTransfer land and water from Maturin to Tiger Island (return)\\r\\n<br> janoko style accommodation rooms. all meals, non-alcoholic beverages during meals.\\r\\n<BR> Excursions\\r\\n<ul>\\r\\n<li> Walk through the pipes in peñero </ li>\\r\\n<li> Remo in pipes in canoes and / or kayaks </ li>\\r\\n<li> Observation of fauna (birds, monkeys, river dolphins, fish, etc.) </ li>\\r\\n<li> Observation of flora (palm, bora, stick water) </ li>\\r\\n<li> piranha fishing craft </ li>\\r\\n<li> Walk through the tangled jungle swamp </ li>\\r\\n<li> Boat trip to the island Birds (if in season can enjoy a multitude of birds such as parrots and corocora) </ li>\\r\\n<li> Visit the Warao indigenous communities to learn about their customs (Wuarao guide) </ li>\\r\\n</ ul>', 'The Orinoco Delta is the delta formed by the mouth of the Orinoco River, one of the largest in the world. Its extension suggested to the early Spanish explorers was a sea. It is considered a place of great natural wealth for the great variety of flora and fauna it.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_sitios`
--

CREATE TABLE IF NOT EXISTS `t_sitios` (
  `oid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador',
  `nom` varchar(255) NOT NULL COMMENT 'Nombre Completo',
  `cod` varchar(16) NOT NULL COMMENT 'Codigo del Sitio',
  `est` varchar(255) NOT NULL COMMENT 'Estado o Provincia',
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Control de los sitios WEB' AUTO_INCREMENT=32 ;

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
(30, 'Aeropuerto Nacional Ezequiel Zamora', '', 'San Carlos'),
(31, 'Aeropuerto Judelvis', 'jud', 'merida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_solicitud`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Control de Solicitudes' AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `t_solicitud`
--

INSERT INTO `t_solicitud` (`oid`, `cor`, `fes`, `fel`, `ori`, `des`, `caa`, `can`, `det`, `tip`, `fap`, `hos`, `tra`, `paq`, `est`) VALUES
(1, 'jud.prog@gmail.com', '2015-09-24', 2015, 31, 1, 4, 2, 'epale', 2, 1, '0', '', 4, 0),
(2, 'gdfgfdg3@ffdg', '2015-09-01', 2015, 0, 0, 8, 4, 'kalsndlasndlnasdlknasdlknasldknlaskndklasdnlaskndlaskndas', 4, 0, '0', '', 5, 0),
(3, 'sdsd2ads@fdf', '2015-07-08', 0, 0, 0, 13, 8, 'sdfsdfsdfsf', 4, 4, '0', '', 6, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuarios`
--

CREATE TABLE IF NOT EXISTS `t_usuarios` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `documento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nivel` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `t_usuarios`
--

INSERT INTO `t_usuarios` (`id`, `documento`, `nombre`, `apellido`, `login`, `clave`, `nivel`) VALUES
(1, '1', 'Administrador', 'Administrador', 'admin', '202cb962ac59075b964b07152d234b70', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
