-- MySQL dump 10.13  Distrib 8.0.20, for Win64 (x86_64)
--
-- Host: localhost    Database: roteirizador
-- ------------------------------------------------------
-- Server version	5.7.31

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
-- Table structure for table `motoristas`
--

DROP TABLE IF EXISTS `motoristas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `motoristas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_admissao` date DEFAULT NULL,
  `numero_cnh` varchar(45) DEFAULT NULL,
  `data_validade_cnh` date DEFAULT NULL,
  `tipo_contrato` varchar(20) DEFAULT NULL,
  `PESSOAS_id` int(11) DEFAULT NULL,
  `ativoInativo` varchar(3) DEFAULT NULL,
  `dataInativacao` varchar(25) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  `deleted_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_MOTORISTAS_PESSOAS1_idx` (`PESSOAS_id`),
  CONSTRAINT `fk_MOTORISTAS_PESSOAS1` FOREIGN KEY (`PESSOAS_id`) REFERENCES `pessoas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=1010106 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `motoristas`
--

LOCK TABLES `motoristas` WRITE;
/*!40000 ALTER TABLE `motoristas` DISABLE KEYS */;
INSERT INTO `motoristas` VALUES (10,'2020-10-20','2121','2021-10-10','2',NULL,'0','2021-02-04 15:53:05','2021-02-04 17:00:31','2021-02-03 19:35:14','2021-02-04 17:00:31'),(11,'2020-10-10','11212558','2021-10-10','1',NULL,'1','','2021-02-04 19:33:07','2021-02-04 19:32:28',NULL),(101,'0101-01-01','0101','0101-01-01','1',NULL,'1','','2021-03-08 14:04:16','2021-03-08 14:04:13',NULL),(232,'2020-10-10','32','2020-10-10','1',NULL,NULL,NULL,'2021-03-08 14:03:44','2021-03-08 14:03:19','2021-03-08 14:03:44'),(1010,'2020-10-20','22323','2020-10-20','1',NULL,'1',NULL,'2021-03-08 14:04:13','2021-03-08 13:42:42',NULL),(1414,'1010-12-14','41','1010-10-10','1',NULL,'1','','2021-03-08 14:07:32','2021-03-08 14:06:39',NULL),(10101,'2020-10-20','22323','2020-10-20','1',NULL,'1',NULL,'2021-03-08 14:03:46','2021-03-08 13:43:11','2021-03-08 14:03:46'),(1010101,'0101-01-01','0101','0101-01-01','1',7,'1','','2021-03-17 22:03:21','2021-03-08 16:38:00',NULL),(1010102,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2021-03-12 15:53:06','2021-03-12 15:53:06',NULL),(1010103,NULL,NULL,NULL,NULL,NULL,'1',NULL,'2021-03-17 14:56:54','2021-03-17 14:56:54',NULL),(1010104,NULL,NULL,NULL,NULL,NULL,'1',NULL,'2021-03-17 14:57:41','2021-03-17 14:57:40',NULL),(1010105,NULL,NULL,NULL,NULL,NULL,'1',NULL,'2021-03-17 14:58:50','2021-03-17 14:58:50',NULL);
/*!40000 ALTER TABLE `motoristas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-08 14:25:00
