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
-- Table structure for table `paciente`
--

DROP TABLE IF EXISTS `paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paciente` (
  `nome` varchar(150) DEFAULT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `cpf` varchar(15) NOT NULL,
  `rg` varchar(10) NOT NULL,
  `idade` int NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `data_nascimento` varchar(10) DEFAULT NULL,
  `estado_civil` varchar(20) DEFAULT NULL,
  `cor` varchar(12) DEFAULT NULL,
  `profissao` varchar(30) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `telefone_casa` varchar(20) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `telefone_trab` varchar(20) DEFAULT NULL,
  `responsavel` varchar(50) DEFAULT NULL,
  `telefone_responsavel` varchar(20) DEFAULT NULL,
  `email_responsavel` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paciente`
--

LOCK TABLES `paciente` WRITE;
/*!40000 ALTER TABLE `paciente` DISABLE KEYS */;
INSERT INTO `paciente` VALUES ('Gustavo Êrades Vilarinho Silva',1,'084.268.501-46','4.062.399',20,'(61) 9 9449-0664','eradesvilarinho@gmail.com','qnb 9','Masculino','12/08/2003','solteiro','preta','estudante','72115-090','(61) 3562-6605','taguatinga ','(  )     -    ','Késsia','(61) 9 9333-0434',''),('Bruce Wayne',2,'123.456.789-99','1.234.567',32,'(99) 9 9999-9999','batman@gmail.com','Mansão Wayne','Masculino','22/22/1945','casado','trevas','vigilante','31232-323','(99) 9999-9999','Gotham City','(99) 9999-9999','Alfred Pennyworth','(99) 9 9999-9999','alfred@gmail.com'),('Clark Kent',3,'111.111.111-11','1.111.111',26,'(61) 9 1111-1111','superman@gmail.com','Smallvile','Masculino','11/11/1111','casado','kriptoniano','reporter','11111-111','(61) 1111-1111','Metrópoles','(61) 1111-1111','Martha Kent','(61) 9 1111-1111','--');
/*!40000 ALTER TABLE `paciente` ENABLE KEYS */;
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
