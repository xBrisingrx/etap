-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: etap_db
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.31-MariaDB

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
-- Table structure for table `atributos`
--

DROP TABLE IF EXISTS `atributos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `atributos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `dato_obligatorio` tinyint(1) DEFAULT NULL,
  `categoria` varchar(25) DEFAULT NULL,
  `tiene_vencimiento` tinyint(1) DEFAULT NULL,
  `permite_pdf` tinyint(1) DEFAULT NULL,
  `observaciones` varchar(200) DEFAULT NULL,
  `metodologia_renovacion` varchar(250) DEFAULT NULL,
  `fecha_inicio_vigencia` date DEFAULT NULL,
  `importe` float DEFAULT NULL,
  `presenta_resumen_mensual` tinyint(1) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `tipo_vencimiento` varchar(10) DEFAULT NULL,
  `periodo_vencimiento` varchar(45) DEFAULT NULL,
  `permite_modificar_proximo_vencimiento` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atributos`
--

LOCK TABLES `atributos` WRITE;
/*!40000 ALTER TABLE `atributos` DISABLE KEYS */;
INSERT INTO `atributos` VALUES (1,'attr1','ATR',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-02-27 23:29:46',0,1,NULL,NULL,NULL),(2,'attr2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,1,NULL,NULL,NULL),(3,'Name attr','',NULL,NULL,0,NULL,NULL,NULL,'2018-02-14',123,NULL,'2018-02-27 21:25:53','2018-02-27 21:25:53',1,1,NULL,NULL,NULL),(4,'Card','asdasdasdasdasd',0,NULL,NULL,NULL,NULL,'asdasdasdasdasdasdas','2018-02-20',1112,NULL,'2018-02-27 21:40:04','2018-02-28 17:01:43',0,1,NULL,'',NULL),(5,'Card','aaaaaaaaaaaaaaaaa',NULL,NULL,NULL,NULL,NULL,'aaaaaaaaaaaaaaaaa','2018-02-20',88,NULL,'2018-02-28 17:02:25','2018-02-28 17:02:25',1,1,NULL,NULL,NULL),(6,'nueve','999999999999999',0,NULL,0,NULL,NULL,'999999999999999','2018-02-28',88,NULL,'2018-02-28 19:20:26','2018-02-28 19:20:26',1,1,NULL,'',NULL),(7,'opchrrteaq','999999999999999',0,NULL,0,0,NULL,'999999999999999','2018-02-07',90,NULL,'2018-02-28 19:22:31','2018-02-28 19:22:31',1,1,NULL,'',NULL),(8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-11 16:12:21','2018-03-11 16:12:21',1,NULL,NULL,NULL,NULL),(9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-11 16:14:47','2018-03-11 16:14:47',1,NULL,NULL,NULL,NULL),(10,'Cedula','Atributo cedula',0,NULL,0,0,NULL,'Atributo cedula','2018-03-08',0,NULL,'2018-03-11 16:27:07','2018-03-12 00:44:24',0,2,'0','true',NULL),(11,'Cedula','atributo cedula',0,NULL,0,0,NULL,'atributo cedula','2018-03-01',0,NULL,'2018-03-11 16:31:03','2018-03-12 00:44:27',0,2,'0','true',NULL),(12,'Cupo de combustrible','VEHICULOS ASIGANDOS A UN CUPO DE COMBUSTIBLE POR PROVINCIA',0,NULL,0,0,NULL,'SE ENVIA LA RENOVACION DE LA VTV CADA VEZ QUE VENZA POR CORREO A DIRECCION DE TTE EN RAWSON','2018-03-10',8,NULL,'2018-03-11 16:47:41','2018-03-11 16:47:41',1,2,NULL,'0',NULL),(13,'Desinfeccion','Descripcion de desinfeccion',0,NULL,0,0,'Sin obs grales','SE ENVIA RENOVACIONES DE VTV CON PAGO DE PATENTES Y SEGURO A LA DIRECCION DE TTE EN KM3, EN KM4 SE MANDAN LOS CARTONES PARA EL SELLADO, LUEGO SE PAGA, SE CONTROLA Y SE ENVIA NUEVAMENTE A KM3','2018-02-28',0,NULL,'2018-03-11 21:37:04','2018-03-11 21:37:04',1,2,'Mensual','',0),(17,'Linea turismo','Linea turismoLinea turismoLinea turismo',1,'Seguros',1,1,'Linea turismoLinea turismoLinea turismoLinea turismo','Linea turismoLinea turismoLinea turismoLinea turismo','2018-02-28',56,1,'2018-03-11 22:26:53','2018-03-11 22:26:53',1,2,'Seleccione','',1);
/*!40000 ALTER TABLE `atributos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresas`
--

DROP TABLE IF EXISTS `empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` VALUES (1,'Etap',NULL,NULL,1),(2,'Costa',NULL,NULL,1);
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marcas_vehiculos`
--

DROP TABLE IF EXISTS `marcas_vehiculos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marcas_vehiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `user_create_id` int(11) DEFAULT NULL,
  `user_last_update_id` int(11) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marcas_vehiculos`
--

LOCK TABLES `marcas_vehiculos` WRITE;
/*!40000 ALTER TABLE `marcas_vehiculos` DISABLE KEYS */;
INSERT INTO `marcas_vehiculos` VALUES (26,'Kya','2018-03-08 20:31:44','2018-03-08 20:31:44',NULL,NULL,1),(27,'Fiat','2018-03-08 21:11:36','2018-03-08 21:11:36',NULL,NULL,1),(28,'Renault','2018-03-10 00:44:30','2018-03-10 00:44:30',NULL,NULL,1);
/*!40000 ALTER TABLE `marcas_vehiculos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelos_vehiculos`
--

DROP TABLE IF EXISTS `modelos_vehiculos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modelos_vehiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca_vehiculo_id` int(11) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `user_create_id` int(11) DEFAULT NULL,
  `user_last_update_id` int(11) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelos_vehiculos`
--

LOCK TABLES `modelos_vehiculos` WRITE;
/*!40000 ALTER TABLE `modelos_vehiculos` DISABLE KEYS */;
INSERT INTO `modelos_vehiculos` VALUES (7,26,'Tremendo','2018-03-08 21:24:55','2018-03-08 21:24:55',NULL,NULL,1),(8,3,'Siena','2018-03-08 21:32:01','2018-03-08 21:32:01',NULL,NULL,1),(12,28,'Clio','2018-03-10 00:45:10','2018-03-10 00:45:10',NULL,NULL,1),(14,28,'Clio Mio','2018-03-10 01:05:52','2018-03-10 01:05:52',NULL,NULL,1),(15,27,'Tremendo','2018-03-10 01:05:58','2018-03-10 01:05:58',NULL,NULL,1);
/*!40000 ALTER TABLE `modelos_vehiculos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfiles`
--

DROP TABLE IF EXISTS `perfiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perfiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` int(11) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `fecha_inicio_vigencia` date DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` varchar(45) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfiles`
--

LOCK TABLES `perfiles` WRITE;
/*!40000 ALTER TABLE `perfiles` DISABLE KEYS */;
INSERT INTO `perfiles` VALUES (1,0,'Mi primer perfil',NULL,'1969-12-31','2018-02-24 00:07:19','2018-02-24 00:07:19',1),(2,0,'Sarasasa',NULL,'1969-12-31','2018-02-24 00:11:37','2018-02-24 00:11:37',1),(3,1,'Shijamaruoooo','','2018-02-24','2018-02-24 00:12:18','2018-02-24 02:11:01',1),(4,1,'2do','','2018-02-16','2018-02-24 00:58:20','2018-02-24 02:12:50',1),(5,1,'3er intento','','2018-02-23','2018-02-24 01:12:57','2018-02-24 02:12:10',1),(6,1,'13123123','','2018-02-01','2018-02-24 01:14:28','2018-02-24 02:12:19',1),(7,1,'primernombrefila','Descripcion','2018-02-12','2018-02-24 01:18:34','2018-02-24 04:37:38',0),(8,1,'','','2018-01-31','2018-02-24 01:18:45','2018-02-24 02:58:37',0),(9,1,'Card','card','2018-02-24','2018-02-24 01:22:39','2018-02-24 02:10:16',1),(10,1,'nombreasdasd','nombreasdasd','2018-02-01','2018-02-24 01:26:21','2018-02-24 01:26:21',1),(11,1,'NoName','descripcion de noname','2018-03-10','2018-02-24 03:05:16','2018-03-03 18:57:31',1),(12,1,'','','0000-00-00','2018-02-24 03:07:18','2018-02-24 03:07:18',1),(13,1,'','','0000-00-00','2018-02-24 03:07:36','2018-02-24 03:07:36',1),(14,1,'','','0000-00-00','2018-02-24 03:28:30','2018-02-24 03:28:30',1),(15,1,'valido','','0000-00-00','2018-02-24 03:28:37','2018-02-24 03:28:37',1),(16,1,'','','0000-00-00','2018-02-24 03:36:41','2018-02-24 03:36:41',1),(17,1,'nueve','9999999999999999','2018-02-26','2018-02-24 03:50:29','2018-02-26 18:00:17',0),(18,1,'','','0000-00-00','2018-02-24 03:50:32','2018-02-24 03:50:32',1),(19,2,'','','0000-00-00','2018-02-24 03:54:04','2018-02-24 03:54:04',0),(20,1,'Sarasasa','descripcion1213123123','2018-02-06','2018-02-24 03:57:19','2018-02-26 17:56:48',1),(21,1,'aaas','asdas','0000-00-00','2018-02-24 04:01:59','2018-02-24 04:01:59',1),(22,2,'Base sin servicio','Vehiculo sin asignacion definida de servicio','2018-03-01','2018-03-11 15:43:46','2018-03-11 15:43:46',1),(23,2,'Linea turismo','VEHICULOS QUE HACEN SERVICIO DE LINEA O TURISMO','2018-03-11','2018-03-11 15:45:51','2018-03-11 15:45:51',1),(24,2,'Rio Gallegos','VEHICULOS QUE ESTAN EN LA BASE DE RIO GALLEGOS','2018-03-01','2018-03-11 15:49:36','2018-03-11 15:49:36',1);
/*!40000 ALTER TABLE `perfiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfiles_atributos`
--

DROP TABLE IF EXISTS `perfiles_atributos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perfiles_atributos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perfil_id` int(11) DEFAULT NULL,
  `atributo_id` int(11) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `fecha_inicio_vigencia` date DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_perfiles_idx` (`perfil_id`),
  KEY `fk_atributos_idx` (`atributo_id`),
  CONSTRAINT `fk_atributos` FOREIGN KEY (`atributo_id`) REFERENCES `atributos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_perfiles` FOREIGN KEY (`perfil_id`) REFERENCES `perfiles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfiles_atributos`
--

LOCK TABLES `perfiles_atributos` WRITE;
/*!40000 ALTER TABLE `perfiles_atributos` DISABLE KEYS */;
INSERT INTO `perfiles_atributos` VALUES (13,3,2,2,'2018-03-16','2018-03-02 16:16:07','2018-03-12 00:51:15',0),(14,7,3,2,'2018-03-09','2018-03-02 17:25:49','2018-03-12 00:51:06',0),(15,3,3,1,'2018-03-09','2018-03-02 17:54:22','2018-03-02 17:54:22',1),(16,4,3,NULL,'2018-03-07','2018-03-02 18:01:07','2018-03-02 18:01:07',1),(17,3,7,NULL,'0000-00-00','2018-03-02 18:06:29','2018-03-02 18:06:29',1),(18,4,7,1,'2018-03-30','2018-03-02 18:06:41','2018-03-03 19:14:24',0),(19,21,4,1,'2018-03-07','2018-03-02 18:06:55','2018-03-03 18:52:44',1),(20,4,7,1,'2018-03-28','2018-03-03 18:30:51','2018-03-03 19:14:27',0),(21,4,7,1,'2018-04-11','2018-03-03 18:31:11','2018-03-03 18:31:11',1),(22,20,6,1,'2018-03-07','2018-03-03 18:39:26','2018-03-03 18:39:26',1),(23,24,17,2,'2018-03-06','2018-03-12 00:50:38','2018-03-12 00:50:38',1),(24,22,12,2,'2018-02-27','2018-03-12 00:51:25','2018-03-12 00:51:25',1);
/*!40000 ALTER TABLE `perfiles_atributos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfiles_personas`
--

DROP TABLE IF EXISTS `perfiles_personas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perfiles_personas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persona_id` int(11) NOT NULL,
  `perfil_id` int(11) NOT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `user_create_id` int(11) DEFAULT NULL,
  `user_last_update_id` int(11) DEFAULT NULL,
  `fecha_inicio_vigencia` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfiles_personas`
--

LOCK TABLES `perfiles_personas` WRITE;
/*!40000 ALTER TABLE `perfiles_personas` DISABLE KEYS */;
INSERT INTO `perfiles_personas` VALUES (1,2,3,1,'2018-03-21 20:19:39','2018-03-21 20:19:39',NULL,NULL,'2018-03-07'),(2,8,15,0,'2018-03-21 20:20:59','2018-03-24 20:24:08',NULL,NULL,'2018-02-25'),(3,7,15,1,'2018-03-21 20:22:15','2018-03-21 20:22:15',NULL,NULL,'2018-03-20'),(4,3,3,1,'2018-03-21 20:26:44','2018-03-21 20:26:44',NULL,NULL,'2018-02-28'),(5,2,5,1,'2018-03-21 20:27:24','2018-03-21 20:27:24',NULL,NULL,'2018-03-15'),(6,2,6,1,'2018-03-21 20:29:05','2018-03-21 20:29:05',NULL,NULL,'2018-03-14'),(7,2,4,1,'2018-03-21 20:32:04','2018-03-21 20:32:04',NULL,NULL,'2018-02-28'),(8,1,3,1,'2018-03-21 20:37:52','2018-03-21 20:37:52',NULL,NULL,'2018-03-13'),(9,3,5,1,'2018-03-21 21:31:11','2018-03-21 21:31:11',NULL,NULL,'2018-03-14'),(10,3,5,1,'2018-03-21 21:37:45','2018-03-21 21:37:45',NULL,NULL,'2018-03-14'),(11,3,4,1,'2018-03-21 21:39:26','2018-03-21 21:39:26',NULL,NULL,'2018-03-07'),(12,4,4,1,'2018-03-21 21:40:07','2018-03-21 21:40:07',NULL,NULL,'2018-02-27');
/*!40000 ALTER TABLE `perfiles_personas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfiles_vehiculos`
--

DROP TABLE IF EXISTS `perfiles_vehiculos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perfiles_vehiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vehiculo_id` varchar(45) DEFAULT NULL,
  `perfil_id` varchar(45) DEFAULT NULL,
  `fecha_inicio_vigencia` date DEFAULT NULL,
  `fecha_baja` date DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `user_create_id` int(11) DEFAULT NULL,
  `user_last_update_id` int(11) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfiles_vehiculos`
--

LOCK TABLES `perfiles_vehiculos` WRITE;
/*!40000 ALTER TABLE `perfiles_vehiculos` DISABLE KEYS */;
INSERT INTO `perfiles_vehiculos` VALUES (1,'10','22','2018-03-20',NULL,'2018-03-27 18:29:03','2018-03-27 19:11:47',NULL,NULL,0),(2,'9','23','2018-03-01',NULL,'2018-03-27 18:52:34','2018-03-27 18:52:34',NULL,NULL,1);
/*!40000 ALTER TABLE `perfiles_vehiculos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personas`
--

DROP TABLE IF EXISTS `personas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `n_legajo` int(11) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `dni` int(11) DEFAULT NULL,
  `dni_tiene_vencimiento` varchar(45) DEFAULT NULL,
  `fecha_vencimiento_dni` date DEFAULT NULL,
  `dni_pdf_path` varchar(45) DEFAULT NULL,
  `cuil` int(11) DEFAULT NULL,
  `cuil_pdf_path` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `fecha_nacimiento_pdf_path` varchar(45) DEFAULT NULL,
  `nacionalidad` varchar(45) DEFAULT NULL,
  `domicilio` varchar(100) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `empresa_id` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `activo` tinyblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personas`
--

LOCK TABLES `personas` WRITE;
/*!40000 ALTER TABLE `personas` DISABLE KEYS */;
INSERT INTO `personas` VALUES (1,9,'Nara','Shijamaru123',35896210,NULL,NULL,'Nara_dni_358962101.pdf',2147483647,'Nara_cuil_2147483647.pdf','2018-01-04','Nara_35896210_pdf_nacimiento.pdf','Argentina','Islas Leones 602',8874520,0,'2018-01-06 06:55:09','2018-01-17 22:37:53','1'),(2,0,'Nara','Shijamaruoooo',2147483647,NULL,NULL,NULL,2147483647,NULL,'0000-00-00',NULL,'Argentina','Islas Leones',0,0,'2018-01-06 07:00:04','2018-01-17 22:43:29','1'),(3,0,'Nara','Shijamaru123',2147483647,NULL,NULL,NULL,2147483647,NULL,'2018-01-03',NULL,'Argentina','Islas Leones',2147483647,0,'2018-01-06 07:03:58','2018-01-17 22:39:10','1'),(4,0,'Un apellido','nombreasdasd',85956321,NULL,NULL,'_dni_.pdf',2147483647,NULL,'2018-01-04',NULL,'Chile','No tiene',4462080,0,'2018-01-06 15:44:16','2018-01-17 21:30:57','1'),(5,0,'Nara','Shijamaruoooo',2147483647,NULL,NULL,'Nara_dni_5285654102.pdf',2147483647,'Nara_cuil_351162102020.pdf','2018-01-10',NULL,'Argentina','Islas Leones',2147483647,0,'2018-01-08 12:29:41','2018-01-17 22:27:24','1'),(6,0,'Neko','Shijamaru123',65896210,NULL,NULL,'Neko_dni_65896210.pdf',2147483647,'Neko_cuil_551162102020.pdf','2018-01-03',NULL,'Argentina','Islas Leones',2147483647,0,'2018-01-08 12:38:51','2018-01-17 21:52:56','1'),(7,0,'Neko23','Shijamaruoooo',85896210,NULL,NULL,'Neko23_dni_85896210.pdf',2147483647,'Neko23_cuil_958962102020.pdf','2018-01-04','Neko23_85896210_pdf_nacimiento.pdf','Argentina 2','Islas Leones',2147483647,0,'2018-01-08 12:42:17','2018-01-17 21:03:50','1'),(8,0,'','Card',0,NULL,NULL,'__pdf_nacimiento1.pdf',0,'_cuil_.pdf','0000-00-00','__pdf_nacimiento.pdf','','',0,0,'2018-01-18 02:59:00','2018-01-18 02:59:00','1'),(9,0,'','',0,NULL,NULL,'_dni_',0,'_cuil_','0000-00-00','__pdf_nacimiento','','',0,0,'2018-02-16 23:53:58','2018-02-16 23:53:58','1'),(10,0,'almiron','',0,NULL,NULL,'almiron_dni_',0,'almiron_cuil_','0000-00-00','almiron__pdf_nacimiento','','',0,0,'2018-02-16 23:54:08','2018-02-16 23:54:08','1'),(11,0,'Sakura','',0,NULL,NULL,'Sakura_dni_',0,'Sakura_cuil_','0000-00-00','Sakura__pdf_nacimiento','','',0,0,'2018-02-16 23:55:23','2018-02-16 23:55:23','1'),(12,0,'','',353846303,NULL,NULL,'_dni_353846303',0,'_cuil_','0000-00-00','_353846303_pdf_nacimiento','','',0,0,'2018-02-16 23:55:27','2018-02-16 23:55:27','1'),(13,0,'','asdasdasd',0,NULL,NULL,'_dni_',0,'_cuil_','0000-00-00','__pdf_nacimiento','','',0,0,'2018-02-17 00:03:10','2018-02-17 00:03:10','1'),(14,0,'','',0,NULL,NULL,'_dni_',0,'_cuil_','0000-00-00','__pdf_nacimiento','','',0,0,'2018-02-17 00:05:15','2018-02-17 00:05:15','1'),(15,123123,'snoopy','',358962109,NULL,NULL,'snoopy_dni_358962109',0,'snoopy_cuil_','0000-00-00','snoopy_358962109_pdf_nacimiento','','',0,0,'2018-02-17 00:09:55','2018-02-17 00:09:55','1'),(16,0,'redes','',353846303,NULL,NULL,'redes_dni_353846303.pdf',0,'redes_cuil_.pdf','0000-00-00','redes_353846303_pdf_nacimiento.pdf','','',0,0,'2018-02-17 00:11:09','2018-02-17 00:11:09','1'),(17,0,'','',0,NULL,NULL,'_dni_.pdf',0,'_cuil_.pdf','0000-00-00','__pdf_nacimiento.pdf','','',0,0,'2018-02-17 00:13:50','2018-02-17 00:13:50','1'),(18,0,'asd','',0,NULL,NULL,'asd_dni_.pdf',0,'asd_cuil_.pdf','0000-00-00','asd__pdf_nacimiento.pdf','','',0,0,'2018-02-17 00:13:57','2018-02-17 00:13:57','1'),(19,2147483647,'','',0,NULL,NULL,'_dni_.pdf',0,'_cuil_.pdf','0000-00-00','__pdf_nacimiento.pdf','','',0,0,'2018-02-17 00:36:14','2018-02-17 00:36:14','1'),(20,NULL,NULL,NULL,NULL,NULL,NULL,'_dni_.pdf',NULL,'_cuil_.pdf',NULL,'__pdf_nacimiento.pdf',NULL,NULL,NULL,NULL,'2018-02-17 16:36:22','2018-02-17 16:36:22','1'),(21,NULL,NULL,NULL,NULL,NULL,NULL,'_dni_.pdf',NULL,'_cuil_.pdf',NULL,'__pdf_nacimiento.pdf',NULL,NULL,NULL,NULL,'2018-02-17 20:09:37','2018-02-17 20:09:37','1'),(22,NULL,NULL,NULL,NULL,NULL,NULL,'_dni_.pdf',NULL,'_cuil_.pdf',NULL,'__pdf_nacimiento.pdf',NULL,NULL,NULL,NULL,'2018-02-17 20:09:51','2018-02-17 20:09:51','1'),(23,NULL,NULL,NULL,NULL,NULL,NULL,'_dni_.pdf',NULL,'_cuil_.pdf',NULL,'__pdf_nacimiento.pdf',NULL,NULL,NULL,NULL,'2018-02-17 20:10:35','2018-02-17 20:10:35','1'),(24,NULL,NULL,NULL,NULL,NULL,NULL,'_dni_.pdf',NULL,'_cuil_.pdf',NULL,'__pdf_nacimiento.pdf',NULL,NULL,NULL,NULL,'2018-02-17 20:11:55','2018-02-17 20:11:55','1'),(25,0,'asdasdasdadasd','',0,NULL,NULL,'asdasdasdadasd_dni_.pdf',0,'asdasdasdadasd_cuil_.pdf','0000-00-00','asdasdasdadasd__pdf_nacimiento.pdf','','',0,0,'2018-02-17 20:12:02','2018-02-17 20:12:02','1'),(26,0,'changos','',0,NULL,NULL,'changos_dni_.pdf',0,'changos_cuil_.pdf','0000-00-00','changos__pdf_nacimiento.pdf','','',0,0,'2018-02-17 20:12:10','2018-02-17 20:12:10','1'),(27,0,'changosDos','',0,NULL,NULL,'changosDos_dni_.pdf',0,'changosDos_cuil_.pdf','0000-00-00','changosDos__pdf_nacimiento.pdf','','',0,0,'2018-02-17 20:12:48','2018-02-17 20:12:48','1'),(28,0,'chanchan','',0,NULL,NULL,'chanchan_dni_.pdf',0,'chanchan_cuil_.pdf','0000-00-00','chanchan__pdf_nacimiento.pdf','','',0,0,'2018-02-17 20:14:52','2018-02-17 20:14:52','1'),(29,0,'','',0,NULL,NULL,'_dni_.pdf',0,'_cuil_.pdf','0000-00-00','__pdf_nacimiento.pdf','','',0,0,'2018-02-17 20:15:15','2018-02-17 20:15:15','1'),(30,NULL,NULL,NULL,NULL,NULL,NULL,'_dni_.pdf',NULL,'_cuil_.pdf',NULL,'__pdf_nacimiento.pdf',NULL,NULL,NULL,NULL,'2018-02-17 20:15:52','2018-02-17 20:15:52','1'),(31,NULL,NULL,NULL,NULL,NULL,NULL,'_dni_.pdf',NULL,'_cuil_.pdf',NULL,'__pdf_nacimiento.pdf',NULL,NULL,NULL,NULL,'2018-02-17 20:16:14','2018-02-17 20:16:14','1'),(32,NULL,NULL,NULL,NULL,NULL,NULL,'_dni_.pdf',NULL,'_cuil_.pdf',NULL,'__pdf_nacimiento.pdf',NULL,NULL,NULL,NULL,'2018-02-17 20:16:43','2018-02-17 20:16:43','1'),(33,0,'','',0,NULL,NULL,'_dni_.pdf',0,'_cuil_.pdf','0000-00-00','__pdf_nacimiento.pdf','','',0,0,'2018-02-17 20:16:57','2018-02-17 20:16:57','1'),(34,0,'','',0,NULL,NULL,'_dni_.pdf',0,'_cuil_.pdf','0000-00-00','__pdf_nacimiento.pdf','','',0,0,'2018-02-17 20:17:31','2018-02-17 20:17:31','1'),(35,NULL,NULL,NULL,NULL,NULL,NULL,'_dni_.pdf',NULL,'_cuil_.pdf',NULL,'__pdf_nacimiento.pdf',NULL,NULL,NULL,NULL,'2018-02-17 20:19:40','2018-02-17 20:19:40','1'),(36,0,'','',0,NULL,NULL,'_dni_.pdf',0,'_cuil_.pdf','0000-00-00','__pdf_nacimiento.pdf','','',0,0,'2018-02-17 20:20:10','2018-02-17 20:20:10','1'),(37,0,'','',0,NULL,NULL,'_dni_.pdf',0,'_cuil_.pdf','0000-00-00','__pdf_nacimiento.pdf','','',0,0,'2018-02-17 20:20:17','2018-02-17 20:20:17','1'),(38,0,'','',0,NULL,NULL,'_dni_.pdf',0,'_cuil_.pdf','0000-00-00','__pdf_nacimiento.pdf','','',0,0,'2018-02-17 20:21:55','2018-02-17 20:21:55','1'),(39,NULL,NULL,NULL,NULL,NULL,NULL,'_dni_.pdf',NULL,'_cuil_.pdf',NULL,'__pdf_nacimiento.pdf',NULL,NULL,NULL,NULL,'2018-02-17 20:24:59','2018-02-17 20:24:59','1'),(40,NULL,NULL,NULL,NULL,NULL,NULL,'_dni_.pdf',NULL,'_cuil_.pdf',NULL,'__pdf_nacimiento.pdf',NULL,NULL,NULL,NULL,'2018-02-17 20:25:41','2018-02-17 20:25:41','1'),(41,0,'','',0,NULL,NULL,'_dni_.pdf',0,'_cuil_.pdf','0000-00-00','__pdf_nacimiento.pdf','','',0,0,'2018-03-13 00:50:42','2018-03-13 00:50:42','1'),(42,NULL,NULL,NULL,NULL,NULL,NULL,'_dni_.pdf',NULL,'_cuil_.pdf',NULL,'__pdf_nacimiento.pdf',NULL,NULL,NULL,NULL,'2018-03-13 20:05:13','2018-03-13 20:05:13','1'),(43,0,'Almiron','Mauro',35384630,NULL,NULL,'Almiron_dni_35384630.pdf',2147483647,'Almiron_cuil_20353846303.pdf','0000-00-00','Almiron_35384630_pdf_nacimiento.pdf','','',0,0,'2018-03-13 20:05:58','2018-03-13 20:05:58','1'),(44,0,'Almiron','Mauro',35384630,NULL,NULL,'Almiron_dni_35384630.pdf',NULL,'Almiron_cuil_.pdf',NULL,'Almiron_35384630_pdf_nacimiento.pdf',NULL,NULL,NULL,NULL,'2018-03-13 20:06:38','2018-03-13 20:06:38','1'),(45,0,'Almiron','Mauro',35384630,NULL,NULL,'Almiron_dni_35384630.pdf',2147483647,'Almiron_cuil_20353846303.pdf','0000-00-00','Almiron_35384630_pdf_nacimiento.pdf','','',0,0,'2018-03-13 20:07:42','2018-03-13 20:07:42','1'),(46,1123,'','',0,NULL,NULL,'_dni_.pdf',0,'_cuil_.pdf','0000-00-00','__pdf_nacimiento.pdf','','',0,0,'2018-03-13 21:07:46','2018-03-13 21:07:46','1'),(47,1223129,'almiron','Card',0,NULL,NULL,'almiron_dni_.pdf',0,'almiron_cuil_.pdf','0000-00-00','almiron__pdf_nacimiento.pdf','','',0,0,'2018-03-14 16:34:45','2018-03-14 16:34:45','1'),(48,122312,'','Sarasasa',0,NULL,NULL,'_dni_.pdf',0,'_cuil_.pdf','0000-00-00','__pdf_nacimiento.pdf','','',0,0,'2018-03-14 16:36:02','2018-03-14 16:36:02','1'),(49,122312,'','Shijamar',0,NULL,NULL,'_dni_.pdf',0,'_cuil_.pdf','0000-00-00','__pdf_nacimiento.pdf','','',0,0,'2018-03-14 16:37:11','2018-03-14 16:37:11','1'),(50,2147483647,'','Sarasasa',0,NULL,NULL,'_dni_.pdf',0,'_cuil_.pdf','0000-00-00','__pdf_nacimiento.pdf','','',0,0,'2018-03-14 16:37:29','2018-03-14 16:37:29','1'),(51,1223129,'Nekoooiasdl','Sarasasa',353846303,NULL,NULL,'Nekoooiasdl_dni_353846303.pdf',0,'Nekoooiasdl_cuil_.pdf','0000-00-00','Nekoooiasdl_353846303_pdf_nacimiento.pdf','','',0,0,'2018-03-14 16:41:22','2018-03-14 16:41:22','1');
/*!40000 ALTER TABLE `personas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_vehiculos`
--

DROP TABLE IF EXISTS `tipos_vehiculos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipos_vehiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `user_create_id` int(11) DEFAULT NULL,
  `user_last_update_id` int(11) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_vehiculos`
--

LOCK TABLES `tipos_vehiculos` WRITE;
/*!40000 ALTER TABLE `tipos_vehiculos` DISABLE KEYS */;
INSERT INTO `tipos_vehiculos` VALUES (3,'Automóvil','2018-03-10 01:40:08','2018-03-10 01:40:08',NULL,NULL,1),(4,'Camión','2018-03-10 01:40:12','2018-03-10 01:40:12',NULL,NULL,1),(5,'Camioneta','2018-03-10 01:40:15','2018-03-10 01:40:15',NULL,NULL,1),(6,'Trans. de pasajeros','2018-03-10 01:40:24','2018-03-10 01:40:24',NULL,NULL,1);
/*!40000 ALTER TABLE `tipos_vehiculos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(45) NOT NULL,
  `password` varchar(200) NOT NULL,
  `last_sign_in_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `dni` int(11) DEFAULT NULL,
  `cuil` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `nacionalidad` varchar(45) DEFAULT NULL,
  `domicilio` varchar(100) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  `is_logued_in` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehiculos`
--

DROP TABLE IF EXISTS `vehiculos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `interno` int(11) DEFAULT NULL,
  `dominio` varchar(45) DEFAULT NULL,
  `anio` int(11) DEFAULT NULL,
  `marca_id` int(11) DEFAULT NULL,
  `modelo_id` int(11) DEFAULT NULL,
  `tipo_id` int(11) DEFAULT NULL,
  `n_chasis` int(11) DEFAULT NULL,
  `n_motor` int(11) DEFAULT NULL,
  `cant_asientos` int(11) DEFAULT NULL,
  `empresa_id` int(11) DEFAULT NULL,
  `observaciones` varchar(200) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` date DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  `user_create_id` int(11) DEFAULT NULL,
  `user_last_update_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehiculos`
--

LOCK TABLES `vehiculos` WRITE;
/*!40000 ALTER TABLE `vehiculos` DISABLE KEYS */;
INSERT INTO `vehiculos` VALUES (9,89996,'9888',2007,28,12,3,111,15,990,1,'observacines asd','2018-03-10 15:47:47','2018-03-11',1,NULL,NULL),(10,89996,'110',2007,28,12,6,8852,122,900,2,'observacines clio my','2018-03-10 15:47:59','2018-03-11',1,NULL,NULL);
/*!40000 ALTER TABLE `vehiculos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-03 21:32:14
