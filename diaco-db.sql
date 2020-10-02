-- MySQL dump 10.13  Distrib 5.7.24, for Win64 (x86_64)
--
-- Host: localhost    Database: diaco-umg
-- ------------------------------------------------------
-- Server version	5.7.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `diaco-umg`
--

--
-- Table structure for table `comercios`
--

DROP TABLE IF EXISTS `comercios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comercios` (
  `nit` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comercios`
--

LOCK TABLES `comercios` WRITE;
/*!40000 ALTER TABLE `comercios` DISABLE KEYS */;
INSERT INTO `comercios` VALUES (111,'Tiendas MAX','2020-10-01 11:08:59','2020-10-01 11:08:59'),(222,'iShop','2020-10-01 11:24:41','2020-10-01 11:24:41'),(333,'Pollo Campero','2020-10-01 11:26:34','2020-10-01 11:26:34'),(444,'FFACSA','2020-10-03 02:18:37','2020-10-03 02:18:37');
/*!40000 ALTER TABLE `comercios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consumidores`
--

DROP TABLE IF EXISTS `consumidores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consumidores` (
  `dpi` int(11) NOT NULL,
  `nit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'C/F',
  `nombres` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `genero` tinyint(1) DEFAULT NULL,
  `id_municipio` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`dpi`),
  KEY `consumidores_id_municipio_foreign` (`id_municipio`),
  CONSTRAINT `consumidores_id_municipio_foreign` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consumidores`
--

LOCK TABLES `consumidores` WRITE;
/*!40000 ALTER TABLE `consumidores` DISABLE KEYS */;
INSERT INTO `consumidores` VALUES (111,'111','Carlos','Perez','1ra calle 5-35 zona 1',11111111,1,224,'2020-10-01 11:24:00','2020-10-01 11:24:00'),(222,'222','Jorge','Hernandez','9A Avenida',12312321,1,26,'2020-10-01 11:57:03','2020-10-01 11:57:03'),(333,'333','Jhonathan','Socop','1ra calle 5-92',32424324,1,39,'2020-10-01 12:01:22','2020-10-01 12:01:22'),(444,'444','Veronica','Castro','1  calle 15-20 z. 2',11111111,2,30,'2020-10-03 02:08:17','2020-10-03 02:08:17'),(555,'555','Mayra','Perez','1-75 Zona 6',55555555,1,7,'2020-10-03 02:34:57','2020-10-03 02:34:57');
/*!40000 ALTER TABLE `consumidores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departamentos`
--

DROP TABLE IF EXISTS `departamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departamentos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamentos`
--

LOCK TABLES `departamentos` WRITE;
/*!40000 ALTER TABLE `departamentos` DISABLE KEYS */;
INSERT INTO `departamentos` VALUES (1,'Alta Verapaz','Región II o Verapaz',NULL,NULL),(2,'Baja Verapaz','Región II o Verapaz',NULL,NULL),(3,'Chimaltenago','Región V o Central',NULL,NULL),(4,'Chiquimula','Región III o Nororiente',NULL,NULL),(5,'Guatemala','Región I o Metropolitana',NULL,NULL),(6,'El Progreso','Región III o Nororiente',NULL,NULL),(7,'Escuintla','Región V o Central',NULL,NULL),(8,'Huehuetenango','Región VII o Noroccidente',NULL,NULL),(9,'Izabal','Región III o Nororiente',NULL,NULL),(10,'Jalapa','Región IV o Suroriente',NULL,NULL),(11,'Jutiapa','Región IV o Suroriente',NULL,NULL),(12,'Petén','Región VIII o Petén',NULL,NULL),(13,'Quetzaltenango','Región VI o Suroccidente',NULL,NULL),(14,'Quiché','Región VII o Noroccidente',NULL,NULL),(15,'Retalhuleu','Región VI o Suroccidente',NULL,NULL),(16,'Sacatepéquez','Región V o Central',NULL,NULL),(17,'San Marcos','Región VI o Suroccidente',NULL,NULL),(18,'Santa Rosa','Región IV o Suroriente',NULL,NULL),(19,'Sololá','Región VI o Suroccidente',NULL,NULL),(20,'Suchitepéquez','Región VI o Suroccidente',NULL,NULL),(21,'Totonicapán','Región VI o Suroccidente',NULL,NULL),(22,'Zacapa','Región III o Nororiente',NULL,NULL);
/*!40000 ALTER TABLE `departamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (17,'2014_10_12_000000_create_users_table',1),(18,'2014_10_12_100000_create_password_resets_table',1),(19,'2019_08_19_000000_create_failed_jobs_table',1),(20,'2020_09_03_203717_crear_tablas_diaco',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `municipios`
--

DROP TABLE IF EXISTS `municipios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `municipios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_departamento` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `municipios_id_departamento_foreign` (`id_departamento`),
  CONSTRAINT `municipios_id_departamento_foreign` FOREIGN KEY (`id_departamento`) REFERENCES `departamentos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=340 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `municipios`
--

LOCK TABLES `municipios` WRITE;
/*!40000 ALTER TABLE `municipios` DISABLE KEYS */;
INSERT INTO `municipios` VALUES (1,'Chahal',1,NULL,NULL),(2,'Chisec',1,NULL,NULL),(3,'Cobán',1,NULL,NULL),(4,'Fray Bartolomé de las Casas',1,NULL,NULL),(5,'San Agustín Lanquín',1,NULL,NULL),(6,'Panzós',1,NULL,NULL),(7,'Raxruha',1,NULL,NULL),(8,'San Cristóbal Verapaz',1,NULL,NULL),(9,'San Juan Chamelco',1,NULL,NULL),(10,'San Pedro Carchá',1,NULL,NULL),(11,'Santa Cruz Verapaz',1,NULL,NULL),(12,'Santa María Cahabón',1,NULL,NULL),(13,'Senahú',1,NULL,NULL),(14,'Tactic',1,NULL,NULL),(15,'Tamahú',1,NULL,NULL),(16,'Tucurú',1,NULL,NULL),(17,'Santa Catalina la Tinta',1,NULL,NULL),(18,'Cubulco',2,NULL,NULL),(19,'Granados',2,NULL,NULL),(20,'Purulhá',2,NULL,NULL),(21,'Rabinal',2,NULL,NULL),(22,'Salamá',2,NULL,NULL),(23,'San Jerónimo',2,NULL,NULL),(24,'San Miguel Chicaj',2,NULL,NULL),(25,'Santa Cruz El Chol',2,NULL,NULL),(26,'Acatenango',3,NULL,NULL),(27,'Chimaltenango',3,NULL,NULL),(28,'El Tejar',3,NULL,NULL),(29,'Parramos',3,NULL,NULL),(30,'Patzicía',3,NULL,NULL),(31,'Patzún',3,NULL,NULL),(32,'Pochuta',3,NULL,NULL),(33,'San Andrés Itzapa',3,NULL,NULL),(34,'San José Poaquil',3,NULL,NULL),(35,'San Juan Comalapa',3,NULL,NULL),(36,'San Martín Jilotepeque',3,NULL,NULL),(37,'Santa Apolonia',3,NULL,NULL),(38,'Santa Cruz Balanyá',3,NULL,NULL),(39,'Tecpán Guatemala',3,NULL,NULL),(40,'Yepocapa',3,NULL,NULL),(41,'Zaragoza',3,NULL,NULL),(42,'Camotán',4,NULL,NULL),(43,'Chiquimula',4,NULL,NULL),(44,'Concepción Las Minas',4,NULL,NULL),(45,'Esquipulas',4,NULL,NULL),(46,'Ipala',4,NULL,NULL),(47,'Jocotán',4,NULL,NULL),(48,'Olopa',4,NULL,NULL),(49,'Quezaltepeque',4,NULL,NULL),(50,'San Jacinto',4,NULL,NULL),(51,'San José La Arada',4,NULL,NULL),(52,'San Juan Ermita',4,NULL,NULL),(53,'Amatitlán',5,NULL,NULL),(54,'Chinautla',5,NULL,NULL),(55,'Chuarrancho',5,NULL,NULL),(56,'Fraijanes',5,NULL,NULL),(57,'Ciudad de Guatemala',5,NULL,NULL),(58,'Mixco',5,NULL,NULL),(59,'Palencia',5,NULL,NULL),(60,'San Miguel Petapa',5,NULL,NULL),(61,'San José del Golfo',5,NULL,NULL),(62,'San José Pinula',5,NULL,NULL),(63,'San Juan Sacatepéquez',5,NULL,NULL),(64,'San Pedro Ayampuc',5,NULL,NULL),(65,'San Pedro Sacatepéquez',5,NULL,NULL),(66,'San Raimundo',5,NULL,NULL),(67,'Santa Catarina Pinula',5,NULL,NULL),(68,'Villa Canales',5,NULL,NULL),(69,'Villa Nueva',5,NULL,NULL),(70,'El Jícaro',6,NULL,NULL),(71,'Guastatoya',6,NULL,NULL),(72,'Morazán',6,NULL,NULL),(73,'San Agustín Acasaguastlán',6,NULL,NULL),(74,'San Antonio La Paz',6,NULL,NULL),(75,'San Cristóbal Acasaguastlán',6,NULL,NULL),(76,'Sanarate',6,NULL,NULL),(77,'Sansare',6,NULL,NULL),(78,'Escuintla',7,NULL,NULL),(79,'Guanagazapa',7,NULL,NULL),(80,'Iztapa',7,NULL,NULL),(81,'La Democracia',7,NULL,NULL),(82,'La Gomera',7,NULL,NULL),(83,'Masagua',7,NULL,NULL),(84,'Nueva Concepción',7,NULL,NULL),(85,'Palín',7,NULL,NULL),(86,'San José',7,NULL,NULL),(87,'San Vicente Pacaya',7,NULL,NULL),(88,'Santa Lucía Cotzumalguapa',7,NULL,NULL),(89,'Sipacate',7,NULL,NULL),(90,'Siquinalá',7,NULL,NULL),(91,'Tiquisate',7,NULL,NULL),(92,'Aguacatán',8,NULL,NULL),(93,'Chiantla',8,NULL,NULL),(94,'Colotenango',8,NULL,NULL),(95,'Concepción Huista',8,NULL,NULL),(96,'Cuilco',8,NULL,NULL),(97,'Huehuetenango',8,NULL,NULL),(98,'Jacaltenango',8,NULL,NULL),(99,'La Democracia',8,NULL,NULL),(100,'La Libertad',8,NULL,NULL),(101,'Malacatancito',8,NULL,NULL),(102,'Nentón',8,NULL,NULL),(103,'Petatán',8,NULL,NULL),(104,'San Antonio Huista',8,NULL,NULL),(105,'San Gaspar Ixchil',8,NULL,NULL),(106,'San Ildefonso Ixtahuacán',8,NULL,NULL),(107,'San Juan Atitán',8,NULL,NULL),(108,'San Juan Ixcoy',8,NULL,NULL),(109,'San Mateo Ixtatán',8,NULL,NULL),(110,'San Miguel Acatán',8,NULL,NULL),(111,'San Pedro Necta',8,NULL,NULL),(112,'San Pedro Soloma',8,NULL,NULL),(113,'San Rafael La Independencia',8,NULL,NULL),(114,'San Rafael Petzal',8,NULL,NULL),(115,'San Sebastián Coatán',8,NULL,NULL),(116,'San Sebastián Huehuetenango',8,NULL,NULL),(117,'Santa Ana Huista',8,NULL,NULL),(118,'Santa Bárbara',8,NULL,NULL),(119,'Santa Cruz Barillas',8,NULL,NULL),(120,'Santa Eulalia',8,NULL,NULL),(121,'Santiago Chimaltenango',8,NULL,NULL),(122,'Tectitán',8,NULL,NULL),(123,'Todos Santos Cuchumatán',8,NULL,NULL),(124,'Unión Cantinil',8,NULL,NULL),(125,'El Estor',9,NULL,NULL),(126,'Livingston',9,NULL,NULL),(127,'Los Amates',9,NULL,NULL),(128,'Morales',9,NULL,NULL),(129,'Puerto Barrios',9,NULL,NULL),(130,'Jalapa',10,NULL,NULL),(131,'Mataquescuintla',10,NULL,NULL),(132,'Monjas',10,NULL,NULL),(133,'San Carlos Alzatate',10,NULL,NULL),(134,'San Luis Jilotepeque',10,NULL,NULL),(135,'San Manuel Chaparrón',10,NULL,NULL),(136,'San Pedro Pinula',10,NULL,NULL),(137,'Agua Blanca',11,NULL,NULL),(138,'Asunción Mita',11,NULL,NULL),(139,'Atescatempa',11,NULL,NULL),(140,'Comapa',11,NULL,NULL),(141,'Conguaco',11,NULL,NULL),(142,'El Adelanto',11,NULL,NULL),(143,'El Progreso',11,NULL,NULL),(144,'Jalpatagua',11,NULL,NULL),(145,'Jerez',11,NULL,NULL),(146,'Jutiapa',11,NULL,NULL),(147,'Moyuta',11,NULL,NULL),(148,'Pasaco',11,NULL,NULL),(149,'Quesada',11,NULL,NULL),(150,'San José Acatempa',11,NULL,NULL),(151,'Santa Catarina Mita',11,NULL,NULL),(152,'Yupiltepeque',11,NULL,NULL),(153,'Zapotitlán',11,NULL,NULL),(154,'Dolores',12,NULL,NULL),(155,'El Chal',12,NULL,NULL),(156,'Flores',12,NULL,NULL),(157,'La Libertad',12,NULL,NULL),(158,'Las Cruces',12,NULL,NULL),(159,'Melchor de Mencos',12,NULL,NULL),(160,'Poptún',12,NULL,NULL),(161,'San Andrés',12,NULL,NULL),(162,'San Benito',12,NULL,NULL),(163,'San Francisco',12,NULL,NULL),(164,'San José',12,NULL,NULL),(165,'San Luis',12,NULL,NULL),(166,'Santa Ana',12,NULL,NULL),(167,'Sayaxché',12,NULL,NULL),(168,'Almolonga',13,NULL,NULL),(169,'Cabricán',13,NULL,NULL),(170,'Cajolá',13,NULL,NULL),(171,'Cantel',13,NULL,NULL),(172,'Coatepeque',13,NULL,NULL),(173,'Colomba',13,NULL,NULL),(174,'Concepción Chiquirichapa',13,NULL,NULL),(175,'El Palmar',13,NULL,NULL),(176,'Flores Costa Cuca',13,NULL,NULL),(177,'Génova',13,NULL,NULL),(178,'Huitán',13,NULL,NULL),(179,'La Esperanza',13,NULL,NULL),(180,'Olintepeque',13,NULL,NULL),(181,'Palestina de Los Altos',13,NULL,NULL),(182,'Quetzaltenango',13,NULL,NULL),(183,'Salcajá',13,NULL,NULL),(184,'San Carlos Sija',13,NULL,NULL),(185,'San Francisco La Unión',13,NULL,NULL),(186,'San Juan Ostuncalco',13,NULL,NULL),(187,'San Martín Sacatepéquez',13,NULL,NULL),(188,'San Mateo',13,NULL,NULL),(189,'San Miguel Sigüilá',13,NULL,NULL),(190,'Sibilia',13,NULL,NULL),(191,'Zunil',13,NULL,NULL),(192,'Canillá',14,NULL,NULL),(193,'Chajul',14,NULL,NULL),(194,'Chicaman',14,NULL,NULL),(195,'Chiché',14,NULL,NULL),(196,'Chichicastenango',14,NULL,NULL),(197,'Chinique',14,NULL,NULL),(198,'Cunén',14,NULL,NULL),(199,'Joyabaj',14,NULL,NULL),(200,'Nebaj',14,NULL,NULL),(201,'Sacapulas',14,NULL,NULL),(202,'Patzité',14,NULL,NULL),(203,'Pachalum',14,NULL,NULL),(204,'Ixcán',14,NULL,NULL),(205,'San Andrés Sajcabajá',14,NULL,NULL),(206,'San Antonio Ilotenango',14,NULL,NULL),(207,'San Bartolomé Jocotenango',14,NULL,NULL),(208,'San Juan Cotzal',14,NULL,NULL),(209,'San Pedro Jocopilas',14,NULL,NULL),(210,'Santa Cruz del Quiché',14,NULL,NULL),(211,'Uspantán',14,NULL,NULL),(212,'Zacualpa',14,NULL,NULL),(213,'Champerico',15,NULL,NULL),(214,'El Asintal',15,NULL,NULL),(215,'Nuevo San Carlos',15,NULL,NULL),(216,'Retalhuleu',15,NULL,NULL),(217,'San Andrés Villa Seca',15,NULL,NULL),(218,'San Felipe',15,NULL,NULL),(219,'San Martín Zapotitlán',15,NULL,NULL),(220,'San Sebastián',15,NULL,NULL),(221,'Santa Cruz Muluá',15,NULL,NULL),(222,'Alotenango',16,NULL,NULL),(223,'Antigua Guatemala',16,NULL,NULL),(224,'Ciudad Vieja',16,NULL,NULL),(225,'Jocotenango',16,NULL,NULL),(226,'Magdalena Milpas Altas',16,NULL,NULL),(227,'Pastores',16,NULL,NULL),(228,'San Antonio Aguas Calientes',16,NULL,NULL),(229,'San Bartolomé Milpas Altas',16,NULL,NULL),(230,'San Lucas Sacatepéquez',16,NULL,NULL),(231,'San Miguel Dueñas',16,NULL,NULL),(232,'Santiago Sacatepéquez',16,NULL,NULL),(233,'Santa Catarina Barahona',16,NULL,NULL),(234,'Santa Lucía Milpas Altas',16,NULL,NULL),(235,'Santa María de Jesús',16,NULL,NULL),(236,'Santo Domingo Xenacoj',16,NULL,NULL),(237,'Sumpango',16,NULL,NULL),(238,'Ayutla',17,NULL,NULL),(239,'Catarina',17,NULL,NULL),(240,'Comitancillo',17,NULL,NULL),(241,'Concepción Tutuapa',17,NULL,NULL),(242,'El Quetzal',17,NULL,NULL),(243,'El Rodeo',17,NULL,NULL),(244,'El Tumbador',17,NULL,NULL),(245,'Esquipulas Palo Gordo',17,NULL,NULL),(246,'Ixchiguan',17,NULL,NULL),(247,'La Blanca',17,NULL,NULL),(248,'La Reforma',17,NULL,NULL),(249,'Malacatán',17,NULL,NULL),(250,'Nuevo Progreso',17,NULL,NULL),(251,'Ocos',17,NULL,NULL),(252,'Pajapita',17,NULL,NULL),(253,'Río Blanco',17,NULL,NULL),(254,'San Antonio Sacatepéquez',17,NULL,NULL),(255,'San Cristóbal Cucho',17,NULL,NULL),(256,'San José Ojetenam',17,NULL,NULL),(257,'San Lorenzo',17,NULL,NULL),(258,'San Marcos',17,NULL,NULL),(259,'San Miguel Ixtahuacán',17,NULL,NULL),(260,'San Pablo',17,NULL,NULL),(261,'San Pedro Sacatepéquez',17,NULL,NULL),(262,'San Rafael Pie de la Cuesta',17,NULL,NULL),(263,'Sibinal',17,NULL,NULL),(264,'Sipacapa',17,NULL,NULL),(265,'Tacaná',17,NULL,NULL),(266,'Tajumulco',17,NULL,NULL),(267,'Tejutla',17,NULL,NULL),(268,'Barberena',18,NULL,NULL),(269,'Casillas',18,NULL,NULL),(270,'Chiquimulilla',18,NULL,NULL),(271,'Cuilapa',18,NULL,NULL),(272,'Guazacapán',18,NULL,NULL),(273,'Nueva Santa Rosa',18,NULL,NULL),(274,'Oratorio',18,NULL,NULL),(275,'Pueblo Nuevo Viñas',18,NULL,NULL),(276,'San Juan Tecuaco',18,NULL,NULL),(277,'San Rafael Las Flores',18,NULL,NULL),(278,'Santa Cruz Naranjo',18,NULL,NULL),(279,'Santa María Ixhuatán',18,NULL,NULL),(280,'Santa Rosa de Lima',18,NULL,NULL),(281,'Taxisco',18,NULL,NULL),(282,'Concepción',19,NULL,NULL),(283,'Nahualá',19,NULL,NULL),(284,'Panajachel',19,NULL,NULL),(285,'San Andrés Semetabaj',19,NULL,NULL),(286,'San Antonio Palopó',19,NULL,NULL),(287,'San José Chacayá',19,NULL,NULL),(288,'San Juan La Laguna',19,NULL,NULL),(289,'San Lucas Tolimán',19,NULL,NULL),(290,'San Marcos La Laguna',19,NULL,NULL),(291,'San Pablo La Laguna',19,NULL,NULL),(292,'San Pedro La Laguna',19,NULL,NULL),(293,'Santa Catarina Ixtahuacan',19,NULL,NULL),(294,'Santa Catarina Palopó',19,NULL,NULL),(295,'Santa Clara La Laguna',19,NULL,NULL),(296,'Santa Cruz La Laguna',19,NULL,NULL),(297,'Santa Lucía Utatlán',19,NULL,NULL),(298,'Santa María Visitación',19,NULL,NULL),(299,'Santiago Atitlán',19,NULL,NULL),(300,'Sololá',19,NULL,NULL),(301,'Chicacao',20,NULL,NULL),(302,'Cuyotenango',20,NULL,NULL),(303,'Mazatenango',20,NULL,NULL),(304,'Patulul',20,NULL,NULL),(305,'Pueblo Nuevo',20,NULL,NULL),(306,'Río Bravo',20,NULL,NULL),(307,'Samayac',20,NULL,NULL),(308,'San Antonio Suchitepéquez',20,NULL,NULL),(309,'San Bernardino',20,NULL,NULL),(310,'San Francisco Zapotitlán',20,NULL,NULL),(311,'San Gabriel',20,NULL,NULL),(312,'San Jose La Maquina, Suchitepequez',20,NULL,NULL),(313,'San José El Idolo',20,NULL,NULL),(314,'San Juan Bautista',20,NULL,NULL),(315,'San Lorenzo',20,NULL,NULL),(316,'San Miguel Panán',20,NULL,NULL),(317,'San Pablo Jocopilas',20,NULL,NULL),(318,'Santa Bárbara',20,NULL,NULL),(319,'Santo Domingo Suchitepequez',20,NULL,NULL),(320,'Santo Tomás La Unión',20,NULL,NULL),(321,'Zunilito',20,NULL,NULL),(322,'Momostenango',21,NULL,NULL),(323,'San Andrés Xecul',21,NULL,NULL),(324,'San Bartolo',21,NULL,NULL),(325,'San Cristóbal Totonicapán',21,NULL,NULL),(326,'San Francisco El Alto',21,NULL,NULL),(327,'Santa Lucía La Reforma',21,NULL,NULL),(328,'Santa María Chiquimula',21,NULL,NULL),(329,'Totonicapán',21,NULL,NULL),(330,'Cabañas',22,NULL,NULL),(331,'Estanzuela',22,NULL,NULL),(332,'Gualán',22,NULL,NULL),(333,'Huité',22,NULL,NULL),(334,'La Unión',22,NULL,NULL),(335,'Río Hondo',22,NULL,NULL),(336,'San Diego',22,NULL,NULL),(337,'Teculután',22,NULL,NULL),(338,'Usumatlán',22,NULL,NULL),(339,'Zacapa',22,NULL,NULL);
/*!40000 ALTER TABLE `municipios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quejas`
--

DROP TABLE IF EXISTS `quejas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quejas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `factura` int(11) NOT NULL,
  `detalle_queja` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `detalle_solucion` longtext COLLATE utf8mb4_unicode_ci,
  `fecha_factura` date NOT NULL,
  `id_sucursal` bigint(20) unsigned NOT NULL,
  `dpi_consumidor` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `quejas_id_sucursal_foreign` (`id_sucursal`),
  KEY `quejas_dpi_consumidor_foreign` (`dpi_consumidor`),
  CONSTRAINT `quejas_dpi_consumidor_foreign` FOREIGN KEY (`dpi_consumidor`) REFERENCES `consumidores` (`dpi`),
  CONSTRAINT `quejas_id_sucursal_foreign` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursales` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quejas`
--

LOCK TABLES `quejas` WRITE;
/*!40000 ALTER TABLE `quejas` DISABLE KEYS */;
INSERT INTO `quejas` VALUES (1,33659236,'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.','Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2020-09-15',1,NULL,'2020-10-01 11:12:27','2020-10-01 11:12:27'),(2,265482,'Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur.','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua.','2020-09-16',2,111,'2020-10-01 11:25:08','2020-10-01 11:25:08'),(3,245689421,'sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit','laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat','2020-09-15',3,NULL,'2020-10-01 11:26:57','2020-10-01 11:26:57'),(4,55815648,'esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.','ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2020-09-15',4,NULL,'2020-10-01 11:56:07','2020-10-01 11:56:07'),(5,9988777,'a aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occa','et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2020-09-16',5,222,'2020-10-01 11:58:04','2020-10-01 11:58:04'),(6,3354223,'is nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepte','ore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mol','2020-09-22',6,NULL,'2020-10-01 11:59:29','2020-10-01 11:59:29'),(7,1122313,'adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi','in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Exc','2020-09-18',2,333,'2020-10-01 12:02:18','2020-10-01 12:02:18'),(8,231231,'Prueba','Solucion','2020-09-21',1,111,'2020-10-01 12:04:17','2020-10-01 12:04:17'),(9,1323332,'met, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor','et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor','2020-09-09',2,333,'2020-10-01 12:05:06','2020-10-01 12:05:06'),(10,123213,'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod','2020-09-22',2,NULL,'2020-10-01 12:21:11','2020-10-01 12:21:11'),(11,213123,'uis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nu','uis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nuuis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nu','2020-09-19',2,NULL,'2020-10-01 12:21:41','2020-10-01 12:21:41'),(12,234324324,'boris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in repr','boris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in repr','2020-09-22',5,222,'2020-10-01 12:28:10','2020-10-01 12:28:10'),(13,55532223,'eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia dese','eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deseeu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia dese','2020-09-20',4,111,'2020-10-01 12:29:02','2020-10-01 12:29:02'),(14,776776,'in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur.','in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur.','2020-09-24',7,NULL,'2020-10-01 12:31:02','2020-10-01 12:31:02'),(15,123213213,'No enviaron todo lo que pedi pero si me lo cobraron.','QUe me devuelvan la parte que no me enviaron.','2020-10-01',5,444,'2020-10-03 02:09:38','2020-10-03 02:09:38'),(16,9865888,'Hice una compra de piso, hicieron la entrega del producto a mi casa pero cuando lo revise los pisos estaban rotos.','Que me cambien el producto por pisos en buen estado.','2020-10-01',8,444,'2020-10-03 02:20:01','2020-10-03 02:20:01'),(17,7584578,'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,','quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse','2020-10-01',6,555,'2020-10-03 02:35:38','2020-10-03 02:35:38');
/*!40000 ALTER TABLE `quejas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sucursales`
--

DROP TABLE IF EXISTS `sucursales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sucursales` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `nit_comercio` int(11) NOT NULL,
  `id_municipio` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sucursales_nit_comercio_foreign` (`nit_comercio`),
  KEY `sucursales_id_municipio_foreign` (`id_municipio`),
  CONSTRAINT `sucursales_id_municipio_foreign` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id`),
  CONSTRAINT `sucursales_nit_comercio_foreign` FOREIGN KEY (`nit_comercio`) REFERENCES `comercios` (`nit`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sucursales`
--

LOCK TABLES `sucursales` WRITE;
/*!40000 ALTER TABLE `sucursales` DISABLE KEYS */;
INSERT INTO `sucursales` VALUES (1,'MAX Amatitlan','9A Avenida',11111111,111,53,'2020-10-01 11:08:59','2020-10-01 12:10:06'),(2,'Majadas','21 avenida 4-32 zona 11',33333333,222,57,'2020-10-01 11:24:41','2020-10-01 12:10:14'),(3,'Miraflores','21 avenida 4-32 zona 11',33333333,333,57,'2020-10-01 11:26:34','2020-10-01 11:26:34'),(4,'Pradera Chimaltenango','1-75 Zona 6',11111111,111,27,'2020-10-01 11:55:44','2020-10-01 11:55:44'),(5,'Pradera Chimaltenango','1-75 Zona 6',12313215,333,27,'2020-10-01 11:57:47','2020-10-01 11:57:47'),(6,'Plaza Magdalena','1  calle 15-20 z. 2',64564456,333,3,'2020-10-01 11:59:09','2020-10-01 11:59:09'),(7,'Plaza Magdalena','1ra calle 15-20 zona 2',45343434,111,3,'2020-10-01 12:30:41','2020-10-01 12:30:41'),(8,'FFACSA Zaragoza','9A Avenida',86868686,444,41,'2020-10-03 02:18:37','2020-10-03 02:18:37');
/*!40000 ALTER TABLE `sucursales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@gmail.com','2020-10-01 10:55:39','$2y$10$7okxDQGOPMfDRzwaUpmYb./.qM9d4aHAsbcDbZKL7MWnpf8Hzndm2','uqlzVbCida0gpv4ABt6ShssT1kqKSgGGZRdQ77MpHwQxLnzt1zjlw7OmRjN6',NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-02 15:21:33
