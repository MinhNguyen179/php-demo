-- MySQL dump 10.13  Distrib 8.0.31, for macos12 (x86_64)
--
-- Host: 127.0.0.1    Database: php-todo
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `todos`
--

DROP TABLE IF EXISTS `todos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `todos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `todos`
--

LOCK TABLES `todos` WRITE;
/*!40000 ALTER TABLE `todos` DISABLE KEYS */;
INSERT INTO `todos` VALUES 
(1,'Learn MySQL','Study the basics of MySQL',0,1,'2023-08-07 17:22:29','2023-08-07 17:22:29'),
(2,'Finish demo Project','Learning Design Pattern',1,1,'2023-08-08 08:15:31','2023-08-08 16:16:46'),
(3,'Finish Laravel Project2','Finish demo Project1',1,2,'2023-08-08 16:34:51','2023-08-09 02:16:12'),
(4,'Finish Laravel Project3','Finish demo Project2',0,2,'2023-08-08 16:34:52','2023-08-08 16:43:34'),
(5,'Finish demo Project0','Finish demo Project1',0,2,'2023-08-08 16:34:53','2023-08-09 02:22:50'),
(6,'Finish demo Project1','Finish demo Project1',0,2,'2023-08-08 16:36:11','2023-08-08 16:36:11'),
(7,'Finish demo Project2','Finish demo Project2',0,2,'2023-08-08 16:36:11','2023-08-08 16:36:11'),
(8,'Finish demo Project3','Finish demo Project3',0,2,'2023-08-08 16:36:11','2023-08-08 16:36:11'),
(9,'Finish demo Project4','Finish demo Project4',0,2,'2023-08-08 16:36:11','2023-08-08 16:36:11'),
(10,'Finish demo Project5','Finish demo Project5',1,2,'2023-08-08 16:36:11','2023-08-09 02:22:47'),
(11,'Finish demo Project6','Finish demo Project6',0,2,'2023-08-08 16:36:11','2023-08-08 16:36:11'),
(12,'Finish demo Project7','Finish demo Project8',0,2,'2023-08-08 16:36:11','2023-08-09 03:00:38'),
(13,'Finish demo Project8','Finish demo Project8',0,2,'2023-08-08 16:36:11','2023-08-09 03:00:27'),
(14,'Finish demo Project9','Finish demo Project9',0,2,'2023-08-08 16:36:11','2023-08-08 16:36:11'),
(15,'Finish demo Project10','Finish demo Project10',0,2,'2023-08-09 03:24:26','2023-08-09 03:24:26');
/*!40000 ALTER TABLE `todos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-09 10:51:18
