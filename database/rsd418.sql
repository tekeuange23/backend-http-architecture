CREATE DATABASE  IF NOT EXISTS `rsd418` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `rsd418`;
-- MySQL dump 10.13  Distrib 8.0.21, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: rsd418
-- ------------------------------------------------------
-- Server version	8.0.21

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
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transaction` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_emetteur` int NOT NULL,
  `id_recepteur` int NOT NULL,
  `montant` decimal(11,2) unsigned NOT NULL,
  `devise` varchar(45) NOT NULL,
  `question` text,
  `reponse` text,
  PRIMARY KEY (`id`),
  KEY `fk_id_recepteur_idx` (`id_recepteur`),
  KEY `fk_id_emetteur_idx` (`id_emetteur`,`id_recepteur`),
  KEY `fk_id_recepteur` (`id_recepteur`),
  KEY `fk_id_emetteur` (`id_emetteur`),
  CONSTRAINT `fk_id_emetteur` FOREIGN KEY (`id_emetteur`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `fk_id_recepteur` FOREIGN KEY (`id_recepteur`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaction`
--

LOCK TABLES `transaction` WRITE;
/*!40000 ALTER TABLE `transaction` DISABLE KEYS */;
INSERT INTO `transaction` VALUES (1,1,25,200000.00,'Dollar','ca va aller ?','yep'),(2,1,26,200000.00,'Euro','ca va aller ?','yep yep'),(3,26,1,1000.00,'€','Tu as un autre soucis ?','Okkk'),(4,25,26,3500.00,'$','je tai envoyer 3,5k $ TNTA. tu as recu ?','fais moi signe.'),(5,27,26,10000.00,'$','Hello cest moi Francois ????????','yep yep'),(6,1,27,55555.00,'€','je tai envoyer 3,5k $ TNTA. tu as recu ?','yrp'),(7,28,1,200000.00,'$','ca va aller ?','Okkk'),(8,24,27,3413.00,'€','32142341','dfdsgfdg');
/*!40000 ALTER TABLE `transaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  `login` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `date_naissance` date NOT NULL,
  `ville` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `pays` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login_UNIQUE` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'ange','ange','ange','2021-04-18','douala','leo','camer'),(24,'ange tekeu','angetekeu','angetekeu','2021-04-18','douala','leo','camer'),(25,'tekeu ange 23','tekeuange23','tekeuange23','2021-04-08','yaounde','leo','camer'),(26,'tnta','tnta','tnta','2021-04-18','Douala','brice','USA'),(27,'Francois','a','a','2021-04-20','Dschang','Xavier','France'),(28,'FLORE','flore','flore','2021-05-18','Dschang','F','Cameroon');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'rsd418'
--

--
-- Dumping routines for database 'rsd418'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-29 23:50:11
