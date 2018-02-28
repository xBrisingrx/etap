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
  `categoria_id` int(11) DEFAULT NULL,
  `tiene_vencimiento` tinyint(1) DEFAULT NULL,
  `permite_pdf` tinyint(1) DEFAULT NULL,
  `observaciones` varchar(200) DEFAULT NULL,
  `metodologia_renovacion` varchar(200) DEFAULT NULL,
  `fecha_inicio_vigencia` date DEFAULT NULL,
  `importe` float DEFAULT NULL,
  `presenta_resumen_mensual` tinyint(1) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `tipo_vencimiento` varchar(10) DEFAULT NULL,
  `periodo_vencimiento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atributos`
--

LOCK TABLES `atributos` WRITE;
/*!40000 ALTER TABLE `atributos` DISABLE KEYS */;
INSERT INTO `atributos` VALUES (1,'attr1','ATR',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'1',NULL,NULL),(2,'attr2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'1',NULL,NULL),(3,'Name attr','',NULL,NULL,0,NULL,NULL,NULL,'2018-02-14',123,NULL,'2018-02-27 21:25:53','2018-02-27 21:25:53',1,'1',NULL,NULL);
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` VALUES (1,'Etap',NULL),(2,'Costa',NULL);
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfiles`
--

LOCK TABLES `perfiles` WRITE;
/*!40000 ALTER TABLE `perfiles` DISABLE KEYS */;
INSERT INTO `perfiles` VALUES (1,0,'Mi primer perfil',NULL,'1969-12-31','2018-02-24 00:07:19','2018-02-24 00:07:19',1),(2,0,'Sarasasa',NULL,'1969-12-31','2018-02-24 00:11:37','2018-02-24 00:11:37',1),(3,1,'Shijamaruoooo','','2018-02-24','2018-02-24 00:12:18','2018-02-24 02:11:01',1),(4,1,'2do','','2018-02-16','2018-02-24 00:58:20','2018-02-24 02:12:50',1),(5,1,'3er intento','','2018-02-23','2018-02-24 01:12:57','2018-02-24 02:12:10',1),(6,1,'13123123','','2018-02-01','2018-02-24 01:14:28','2018-02-24 02:12:19',1),(7,1,'primernombrefila','Descripcion','2018-02-12','2018-02-24 01:18:34','2018-02-24 04:37:38',0),(8,1,'','','2018-01-31','2018-02-24 01:18:45','2018-02-24 02:58:37',0),(9,1,'Card','card','2018-02-24','2018-02-24 01:22:39','2018-02-24 02:10:16',1),(10,1,'nombreasdasd','nombreasdasd','2018-02-01','2018-02-24 01:26:21','2018-02-24 01:26:21',1),(11,1,'','','0000-00-00','2018-02-24 03:05:16','2018-02-24 03:05:16',1),(12,1,'','','0000-00-00','2018-02-24 03:07:18','2018-02-24 03:07:18',1),(13,1,'','','0000-00-00','2018-02-24 03:07:36','2018-02-24 03:07:36',1),(14,1,'','','0000-00-00','2018-02-24 03:28:30','2018-02-24 03:28:30',1),(15,1,'valido','','0000-00-00','2018-02-24 03:28:37','2018-02-24 03:28:37',1),(16,1,'','','0000-00-00','2018-02-24 03:36:41','2018-02-24 03:36:41',1),(17,1,'nueve','9999999999999999','2018-02-26','2018-02-24 03:50:29','2018-02-26 18:00:17',0),(18,1,'','','0000-00-00','2018-02-24 03:50:32','2018-02-24 03:50:32',1),(19,1,'','','0000-00-00','2018-02-24 03:54:04','2018-02-24 03:54:04',1),(20,1,'Sarasasa','descripcion1213123123','2018-02-06','2018-02-24 03:57:19','2018-02-26 17:56:48',1),(21,1,'aaas','asdas','0000-00-00','2018-02-24 04:01:59','2018-02-24 04:01:59',1);
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
  `fecha_inicio_vigencia` date DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_perfiles_idx` (`perfil_id`),
  KEY `fk_atributos_idx` (`atributo_id`),
  CONSTRAINT `fk_atributos` FOREIGN KEY (`atributo_id`) REFERENCES `atributos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_perfiles` FOREIGN KEY (`perfil_id`) REFERENCES `perfiles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfiles_atributos`
--

LOCK TABLES `perfiles_atributos` WRITE;
/*!40000 ALTER TABLE `perfiles_atributos` DISABLE KEYS */;
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
  `activo` tinyblob,
  `create_at` datetime DEFAULT NULL,
  `update_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfiles_personas`
--

LOCK TABLES `perfiles_personas` WRITE;
/*!40000 ALTER TABLE `perfiles_personas` DISABLE KEYS */;
/*!40000 ALTER TABLE `perfiles_personas` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personas`
--

LOCK TABLES `personas` WRITE;
/*!40000 ALTER TABLE `personas` DISABLE KEYS */;
INSERT INTO `personas` VALUES (1,9,'Nara','Shijamaru123',35896210,NULL,NULL,'Nara_dni_358962101.pdf',2147483647,'Nara_cuil_2147483647.pdf','2018-01-04','Nara_35896210_pdf_nacimiento.pdf','Argentina','Islas Leones 602',8874520,0,'2018-01-06 06:55:09','2018-01-17 22:37:53','1'),(2,0,'Nara','Shijamaruoooo',2147483647,NULL,NULL,NULL,2147483647,NULL,'0000-00-00',NULL,'Argentina','Islas Leones',0,0,'2018-01-06 07:00:04','2018-01-17 22:43:29','1'),(3,0,'Nara','Shijamaru123',2147483647,NULL,NULL,NULL,2147483647,NULL,'2018-01-03',NULL,'Argentina','Islas Leones',2147483647,0,'2018-01-06 07:03:58','2018-01-17 22:39:10','1'),(4,0,'Un apellido','nombreasdasd',85956321,NULL,NULL,'_dni_.pdf',2147483647,NULL,'2018-01-04',NULL,'Chile','No tiene',4462080,0,'2018-01-06 15:44:16','2018-01-17 21:30:57','1'),(5,0,'Nara','Shijamaruoooo',2147483647,NULL,NULL,'Nara_dni_5285654102.pdf',2147483647,'Nara_cuil_351162102020.pdf','2018-01-10',NULL,'Argentina','Islas Leones',2147483647,0,'2018-01-08 12:29:41','2018-01-17 22:27:24','1'),(6,0,'Neko','Shijamaru123',65896210,NULL,NULL,'Neko_dni_65896210.pdf',2147483647,'Neko_cuil_551162102020.pdf','2018-01-03',NULL,'Argentina','Islas Leones',2147483647,0,'2018-01-08 12:38:51','2018-01-17 21:52:56','1'),(7,0,'Neko23','Shijamaruoooo',85896210,NULL,NULL,'Neko23_dni_85896210.pdf',2147483647,'Neko23_cuil_958962102020.pdf','2018-01-04','Neko23_85896210_pdf_nacimiento.pdf','Argentina 2','Islas Leones',2147483647,0,'2018-01-08 12:42:17','2018-01-17 21:03:50','1'),(8,0,'','Card',0,NULL,NULL,'__pdf_nacimiento1.pdf',0,'_cuil_.pdf','0000-00-00','__pdf_nacimiento.pdf','','',0,0,'2018-01-18 02:59:00','2018-01-18 02:59:00','1'),(9,0,'','',0,NULL,NULL,'_dni_',0,'_cuil_','0000-00-00','__pdf_nacimiento','','',0,0,'2018-02-16 23:53:58','2018-02-16 23:53:58','1'),(10,0,'almiron','',0,NULL,NULL,'almiron_dni_',0,'almiron_cuil_','0000-00-00','almiron__pdf_nacimiento','','',0,0,'2018-02-16 23:54:08','2018-02-16 23:54:08','1'),(11,0,'Sakura','',0,NULL,NULL,'Sakura_dni_',0,'Sakura_cuil_','0000-00-00','Sakura__pdf_nacimiento','','',0,0,'2018-02-16 23:55:23','2018-02-16 23:55:23','1'),(12,0,'','',353846303,NULL,NULL,'_dni_353846303',0,'_cuil_','0000-00-00','_353846303_pdf_nacimiento','','',0,0,'2018-02-16 23:55:27','2018-02-16 23:55:27','1'),(13,0,'','asdasdasd',0,NULL,NULL,'_dni_',0,'_cuil_','0000-00-00','__pdf_nacimiento','','',0,0,'2018-02-17 00:03:10','2018-02-17 00:03:10','1'),(14,0,'','',0,NULL,NULL,'_dni_',0,'_cuil_','0000-00-00','__pdf_nacimiento','','',0,0,'2018-02-17 00:05:15','2018-02-17 00:05:15','1'),(15,123123,'snoopy','',358962109,NULL,NULL,'snoopy_dni_358962109',0,'snoopy_cuil_','0000-00-00','snoopy_358962109_pdf_nacimiento','','',0,0,'2018-02-17 00:09:55','2018-02-17 00:09:55','1'),(16,0,'redes','',353846303,NULL,NULL,'redes_dni_353846303.pdf',0,'redes_cuil_.pdf','0000-00-00','redes_353846303_pdf_nacimiento.pdf','','',0,0,'2018-02-17 00:11:09','2018-02-17 00:11:09','1'),(17,0,'','',0,NULL,NULL,'_dni_.pdf',0,'_cuil_.pdf','0000-00-00','__pdf_nacimiento.pdf','','',0,0,'2018-02-17 00:13:50','2018-02-17 00:13:50','1'),(18,0,'asd','',0,NULL,NULL,'asd_dni_.pdf',0,'asd_cuil_.pdf','0000-00-00','asd__pdf_nacimiento.pdf','','',0,0,'2018-02-17 00:13:57','2018-02-17 00:13:57','1'),(19,2147483647,'','',0,NULL,NULL,'_dni_.pdf',0,'_cuil_.pdf','0000-00-00','__pdf_nacimiento.pdf','','',0,0,'2018-02-17 00:36:14','2018-02-17 00:36:14','1'),(20,NULL,NULL,NULL,NULL,NULL,NULL,'_dni_.pdf',NULL,'_cuil_.pdf',NULL,'__pdf_nacimiento.pdf',NULL,NULL,NULL,NULL,'2018-02-17 16:36:22','2018-02-17 16:36:22','1'),(21,NULL,NULL,NULL,NULL,NULL,NULL,'_dni_.pdf',NULL,'_cuil_.pdf',NULL,'__pdf_nacimiento.pdf',NULL,NULL,NULL,NULL,'2018-02-17 20:09:37','2018-02-17 20:09:37','1'),(22,NULL,NULL,NULL,NULL,NULL,NULL,'_dni_.pdf',NULL,'_cuil_.pdf',NULL,'__pdf_nacimiento.pdf',NULL,NULL,NULL,NULL,'2018-02-17 20:09:51','2018-02-17 20:09:51','1'),(23,NULL,NULL,NULL,NULL,NULL,NULL,'_dni_.pdf',NULL,'_cuil_.pdf',NULL,'__pdf_nacimiento.pdf',NULL,NULL,NULL,NULL,'2018-02-17 20:10:35','2018-02-17 20:10:35','1'),(24,NULL,NULL,NULL,NULL,NULL,NULL,'_dni_.pdf',NULL,'_cuil_.pdf',NULL,'__pdf_nacimiento.pdf',NULL,NULL,NULL,NULL,'2018-02-17 20:11:55','2018-02-17 20:11:55','1'),(25,0,'asdasdasdadasd','',0,NULL,NULL,'asdasdasdadasd_dni_.pdf',0,'asdasdasdadasd_cuil_.pdf','0000-00-00','asdasdasdadasd__pdf_nacimiento.pdf','','',0,0,'2018-02-17 20:12:02','2018-02-17 20:12:02','1'),(26,0,'changos','',0,NULL,NULL,'changos_dni_.pdf',0,'changos_cuil_.pdf','0000-00-00','changos__pdf_nacimiento.pdf','','',0,0,'2018-02-17 20:12:10','2018-02-17 20:12:10','1'),(27,0,'changosDos','',0,NULL,NULL,'changosDos_dni_.pdf',0,'changosDos_cuil_.pdf','0000-00-00','changosDos__pdf_nacimiento.pdf','','',0,0,'2018-02-17 20:12:48','2018-02-17 20:12:48','1'),(28,0,'chanchan','',0,NULL,NULL,'chanchan_dni_.pdf',0,'chanchan_cuil_.pdf','0000-00-00','chanchan__pdf_nacimiento.pdf','','',0,0,'2018-02-17 20:14:52','2018-02-17 20:14:52','1'),(29,0,'','',0,NULL,NULL,'_dni_.pdf',0,'_cuil_.pdf','0000-00-00','__pdf_nacimiento.pdf','','',0,0,'2018-02-17 20:15:15','2018-02-17 20:15:15','1'),(30,NULL,NULL,NULL,NULL,NULL,NULL,'_dni_.pdf',NULL,'_cuil_.pdf',NULL,'__pdf_nacimiento.pdf',NULL,NULL,NULL,NULL,'2018-02-17 20:15:52','2018-02-17 20:15:52','1'),(31,NULL,NULL,NULL,NULL,NULL,NULL,'_dni_.pdf',NULL,'_cuil_.pdf',NULL,'__pdf_nacimiento.pdf',NULL,NULL,NULL,NULL,'2018-02-17 20:16:14','2018-02-17 20:16:14','1'),(32,NULL,NULL,NULL,NULL,NULL,NULL,'_dni_.pdf',NULL,'_cuil_.pdf',NULL,'__pdf_nacimiento.pdf',NULL,NULL,NULL,NULL,'2018-02-17 20:16:43','2018-02-17 20:16:43','1'),(33,0,'','',0,NULL,NULL,'_dni_.pdf',0,'_cuil_.pdf','0000-00-00','__pdf_nacimiento.pdf','','',0,0,'2018-02-17 20:16:57','2018-02-17 20:16:57','1'),(34,0,'','',0,NULL,NULL,'_dni_.pdf',0,'_cuil_.pdf','0000-00-00','__pdf_nacimiento.pdf','','',0,0,'2018-02-17 20:17:31','2018-02-17 20:17:31','1'),(35,NULL,NULL,NULL,NULL,NULL,NULL,'_dni_.pdf',NULL,'_cuil_.pdf',NULL,'__pdf_nacimiento.pdf',NULL,NULL,NULL,NULL,'2018-02-17 20:19:40','2018-02-17 20:19:40','1'),(36,0,'','',0,NULL,NULL,'_dni_.pdf',0,'_cuil_.pdf','0000-00-00','__pdf_nacimiento.pdf','','',0,0,'2018-02-17 20:20:10','2018-02-17 20:20:10','1'),(37,0,'','',0,NULL,NULL,'_dni_.pdf',0,'_cuil_.pdf','0000-00-00','__pdf_nacimiento.pdf','','',0,0,'2018-02-17 20:20:17','2018-02-17 20:20:17','1'),(38,0,'','',0,NULL,NULL,'_dni_.pdf',0,'_cuil_.pdf','0000-00-00','__pdf_nacimiento.pdf','','',0,0,'2018-02-17 20:21:55','2018-02-17 20:21:55','1'),(39,NULL,NULL,NULL,NULL,NULL,NULL,'_dni_.pdf',NULL,'_cuil_.pdf',NULL,'__pdf_nacimiento.pdf',NULL,NULL,NULL,NULL,'2018-02-17 20:24:59','2018-02-17 20:24:59','1'),(40,NULL,NULL,NULL,NULL,NULL,NULL,'_dni_.pdf',NULL,'_cuil_.pdf',NULL,'__pdf_nacimiento.pdf',NULL,NULL,NULL,NULL,'2018-02-17 20:25:41','2018-02-17 20:25:41','1');
/*!40000 ALTER TABLE `personas` ENABLE KEYS */;
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehiculos`
--

LOCK TABLES `vehiculos` WRITE;
/*!40000 ALTER TABLE `vehiculos` DISABLE KEYS */;
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

-- Dump completed on 2018-02-27 21:38:01
