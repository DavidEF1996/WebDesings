-- MySQL dump 10.13  Distrib 8.0.24, for Win64 (x86_64)
--
-- Host: localhost    Database: bienes_raices
-- ------------------------------------------------------
-- Server version	8.0.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `propiedades`
--

DROP TABLE IF EXISTS `propiedades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `propiedades` (
  `idPropiedades` int NOT NULL AUTO_INCREMENT,
  `tituloPropiedades` varchar(255) DEFAULT NULL,
  `precioPropiedades` decimal(10,2) DEFAULT NULL,
  `imagenPropiedades` varchar(255) DEFAULT NULL,
  `descripcionPropiedades` longtext,
  `habitacionesPropiedades` int DEFAULT NULL,
  `banoPropiedades` int DEFAULT NULL,
  `estacionamientoPropiedades` int DEFAULT NULL,
  `creadoPropiedades` date DEFAULT NULL,
  `idVendedores` int DEFAULT NULL,
  PRIMARY KEY (`idPropiedades`),
  KEY `idVendedor_idx` (`idVendedores`),
  CONSTRAINT `idVendedor` FOREIGN KEY (`idVendedores`) REFERENCES `vendedores` (`idVendedores`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propiedades`
--

LOCK TABLES `propiedades` WRITE;
/*!40000 ALTER TABLE `propiedades` DISABLE KEYS */;
INSERT INTO `propiedades` VALUES (15,'Organización Total de tus Eventos',200.00,'5b4b5208251a64a3d0a139bc700ca0ef.jpg','HM PRODUCCIONES - Ofrese el asesoramiento y la organización total de sus eventos dentro y fuera de la Ciudad, con el mejor equipo profesional de Animadores, Djs, Equipos de Amplificación, Filmación, Fotografía, Pantallas Gigantes, Confetty, etc.',1,2,3,'2021-06-26',1),(16,'Todo tipo de Mantelería     ',50.00,'69b45452b7b1215b2f37e9a1faa60e06.jpg','dfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsaf',1,2,2,'2021-06-26',2),(17,'Pastelería                                                            ',50.00,'df29f0337c5994bf74af3b26b1177614.jpg','dfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsafdfadfafsaf',1,2,2,'2021-06-26',2),(18,'T',1212121.00,'3e6acf93e585ca9d6c828f34a3920f93.jpg','dafasfafasdafasfafasdafasfafasdafasfafasdafasfafasdafasfafasdafasfafasdafasfafasdafasfafasdafasfafasdafasfafasdafasfafasdafasfafasdafasfafasdafasfafasdafasfafasdafasfafasdafasfafasdafasfafasdafasfafasdafasfafasdafasfafas',4,4,4,'2021-06-26',1);
/*!40000 ALTER TABLE `propiedades` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-16 22:00:16
