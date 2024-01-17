-- MySQL dump 10.13  Distrib 8.0.31, for macos12 (x86_64)
--
-- Host: 127.0.0.1    Database: entra21
-- ------------------------------------------------------
-- Server version	5.7.39

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
-- Table structure for table `pdv_categoria`
--

DROP TABLE IF EXISTS `pdv_categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pdv_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `ativo` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pdv_categoria`
--

LOCK TABLES `pdv_categoria` WRITE;
/*!40000 ALTER TABLE `pdv_categoria` DISABLE KEYS */;
INSERT INTO `pdv_categoria` VALUES (1,'Mercearia',1),(2,'Grãos',1),(3,'Bebidas',1),(4,'Padaria',1),(5,'Açougue',1);
/*!40000 ALTER TABLE `pdv_categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pdv_estoque`
--

DROP TABLE IF EXISTS `pdv_estoque`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pdv_estoque` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_produtos` int(8) NOT NULL,
  `quant` float NOT NULL,
  `reservado` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `from_produtos_idx` (`from_produtos`),
  CONSTRAINT `fk_from_produtos` FOREIGN KEY (`from_produtos`) REFERENCES `pdv_produtos` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pdv_estoque`
--

LOCK TABLES `pdv_estoque` WRITE;
/*!40000 ALTER TABLE `pdv_estoque` DISABLE KEYS */;
INSERT INTO `pdv_estoque` VALUES (3,2,10,NULL),(4,3,10,NULL),(5,4,5,NULL),(6,5,3,NULL),(7,6,2,NULL);
/*!40000 ALTER TABLE `pdv_estoque` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pdv_produtos`
--

DROP TABLE IF EXISTS `pdv_produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pdv_produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` text,
  `valor_venda` float NOT NULL DEFAULT '0',
  `valor_compra` float NOT NULL DEFAULT '0',
  `unidade` char(2) NOT NULL,
  `cod_ean` char(13) NOT NULL,
  `ativo` int(1) NOT NULL,
  `from_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_FROM_CATEGORIA_idx` (`from_categoria`),
  CONSTRAINT `FK_FROM_CATEGORIA` FOREIGN KEY (`from_categoria`) REFERENCES `pdv_categoria` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pdv_produtos`
--

LOCK TABLES `pdv_produtos` WRITE;
/*!40000 ALTER TABLE `pdv_produtos` DISABLE KEYS */;
INSERT INTO `pdv_produtos` VALUES (2,'Cerveja Brahma Duplo Malte','lata 360ml geladinha',4.99,2.99,'un','123443434334',1,3),(3,'Picanha do lula','coxão duro fatiado',59.99,32.9,'kg','4234342344',1,5),(4,'Pão Francês','Quentinho',9.99,5,'kg','098765432456',1,3),(5,'Feijão preto','Tio João',8.99,4.35,'kg','123443434334',1,2),(6,'Cerveja Heineken Long neck','lata 360ml geladinha',7.99,2.99,'kg','123443434334',1,3),(7,'produto do cadastro PDO','teste',3,2,'KG','12344343',1,5),(8,'Cachaça','Queima a guela',4.5,3.2,'ML','12321312312',1,5),(9,'Cachaça','Queima a guela',4.5,3.2,'ML','12321312312',1,5),(10,'Cachaça','Queima a guela',4.5,3.2,'ML','12321312312',1,5);
/*!40000 ALTER TABLE `pdv_produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seg_usuarios`
--

DROP TABLE IF EXISTS `seg_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `seg_usuarios` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
  `dateCreate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seg_usuarios`
--

LOCK TABLES `seg_usuarios` WRITE;
/*!40000 ALTER TABLE `seg_usuarios` DISABLE KEYS */;
INSERT INTO `seg_usuarios` VALUES (1,'Diego','admin','123','2024-01-16 21:44:38');
/*!40000 ALTER TABLE `seg_usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-16 22:15:17
