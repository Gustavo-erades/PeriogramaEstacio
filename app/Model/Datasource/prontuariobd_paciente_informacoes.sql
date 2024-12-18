-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: prontuariobd
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `paciente_informacoes`
--

DROP TABLE IF EXISTS `paciente_informacoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paciente_informacoes` (
  `queixa` varchar(500) DEFAULT NULL,
  `doenca_atual` varchar(300) DEFAULT NULL,
  `medica_pre` varchar(100) DEFAULT NULL,
  `medicacao` varchar(100) DEFAULT NULL,
  `alcool` varchar(100) DEFAULT NULL,
  `fumo` varchar(100) DEFAULT NULL,
  `pressao_arterial` varchar(100) DEFAULT NULL,
  `exame_fisico` varchar(100) DEFAULT NULL,
  `intra_oral` varchar(300) DEFAULT NULL,
  `extra_oral` varchar(300) DEFAULT NULL,
  `id_paciente` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_paciente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paciente_informacoes`
--

LOCK TABLES `paciente_informacoes` WRITE;
/*!40000 ALTER TABLE `paciente_informacoes` DISABLE KEYS */;
INSERT INTO `paciente_informacoes` VALUES ('asdasdsadsadasdasdsad','sadsaddsaddsadsadsadsad','sadsadsadsadasdsadsa','sadasdsadsad','sadsadsa','sadsadsadsadsadsad','dsadsadsadsadsadsadsadsad','dsadsadsadsadsa','dsaaaaaaaaaaaaaadasdsad','sadsasadasbbbbbbbbbbbbbbbbbbbbb',1),('blábláblá','blábláblblá','blábláblblá','blábláblblá','blábláblblá','blábláblblá','blábláblblá','blábláblblá','blábláblblá','blábláblblá',2),('blá blá blá blá','blá blá blá blá','blá blá blá blá','blá blá blá blá','blá blá blá blá','blá blá blá blá','blá blá blá blá','blá blá blá blá','blá blá blá blá','blá blá blá blá',3);
/*!40000 ALTER TABLE `paciente_informacoes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-12-18 15:08:04
