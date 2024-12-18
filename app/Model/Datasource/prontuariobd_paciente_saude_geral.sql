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
-- Table structure for table `paciente_saude_geral`
--

DROP TABLE IF EXISTS `paciente_saude_geral`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paciente_saude_geral` (
  `questoes` varchar(36) DEFAULT NULL,
  `doenca_contagiosa` varchar(200) DEFAULT NULL,
  `alergia` varchar(200) DEFAULT NULL,
  `bebida` varchar(200) DEFAULT NULL,
  `drogas` varchar(200) DEFAULT NULL,
  `medicamento` varchar(200) DEFAULT NULL,
  `fumo` varchar(200) DEFAULT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paciente_saude_geral`
--

LOCK TABLES `paciente_saude_geral` WRITE;
/*!40000 ALTER TABLE `paciente_saude_geral` DISABLE KEYS */;
INSERT INTO `paciente_saude_geral` VALUES ('10101011010011101110100100111100000','não, nunca tive','dasdasda','não, não bebo','não','não','sdas',1),('10110111000010000000000010101100000','não, nunca teve	','não, nenhum','Sim, festas','pior que já, tempos tenebrosos da DC	','Não, eu acho','não fuma',2),('10110111010000100111100101010001100','não, pai é indestrutível	','nanhuma alergia	','não','jamais	','nop','nunca fumou',3),('00000000000000000000000000000000000','','','','','','',4),('00000000000000000000000000000000000','','','','','','',5);
/*!40000 ALTER TABLE `paciente_saude_geral` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-12-18 15:08:05
