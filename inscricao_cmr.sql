-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: inscricao_cmr
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.9-MariaDB

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
-- Table structure for table `cadastro`
--

DROP TABLE IF EXISTS `cadastro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cadastro` (
  `om` varchar(45) DEFAULT NULL,
  `posto` varchar(45) DEFAULT NULL,
  `reserva` varchar(25) DEFAULT NULL,
  `bol` varchar(25) DEFAULT NULL,
  `nome_militar` varchar(200) DEFAULT NULL,
  `exclusao_logic` int(2) DEFAULT NULL,
  `data2` varchar(45) DEFAULT NULL,
  `nascimento` varchar(25) DEFAULT NULL,
  `nome_dependente` varchar(200) DEFAULT NULL,
  `letivo` varchar(45) DEFAULT NULL,
  `ensino` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tel` varchar(45) DEFAULT NULL,
  `grau` varchar(45) DEFAULT NULL,
  `COD` int(11) NOT NULL AUTO_INCREMENT,
  `bol_local` varchar(45) DEFAULT NULL,
  `id` varchar(45) DEFAULT NULL,
  `bol_local_a` varchar(45) DEFAULT NULL,
  `amparo` varchar(45) DEFAULT NULL,
  `email_p` varchar(60) DEFAULT NULL,
  `localidade` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`COD`)
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro`
--

LOCK TABLES `cadastro` WRITE;
/*!40000 ALTER TABLE `cadastro` DISABLE KEYS */;
/*!40000 ALTER TABLE `cadastro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `codigo_usuario` int(11) DEFAULT NULL,
  `nome` text,
  `login` text,
  `senha` text,
  `exclusao_logica` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'jorge','jorge','81dc9bdb52d04dc20036dbd8313ed055',1),(2,'3S LIMA','lima','81dc9bdb52d04dc20036dbd8313ed055',1),(3,'S2 PEIXOTO','peixoto','81dc9bdb52d04dc20036dbd8313ed055',1),(NULL,'gabriel','gabriel','81dc9bdb52d04dc20036dbd8313ed055',1),(NULL,'moraes','moraes','81dc9bdb52d04dc20036dbd8313ed055',1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-14  2:07:58
