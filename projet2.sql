-- MySQL dump 10.13  Distrib 8.0.25, for Linux (x86_64)
--
-- Host: localhost    Database: projet2
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

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
-- Table structure for table `answer`
--

DROP TABLE IF EXISTS `answer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `answer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `answer_value` float NOT NULL,
  `label` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answer`
--

LOCK TABLES `answer` WRITE;
/*!40000 ALTER TABLE `answer` DISABLE KEYS */;
INSERT INTO `answer` VALUES (1,1404,'q1_choice1'),(2,759.2,'q1_choice2'),(3,371.28,'q1_choice3'),(4,287.04,'q1_choice4'),(5,379,'q2_choice1'),(6,218,'q2_choice2'),(7,140,'q2_choice3'),(8,218,'q2_choice4'),(9,60,'q3_choice1'),(10,45,'q3_choice2'),(11,29,'q3_choice3'),(12,45,'q3_choice4'),(13,135.05,'q4_choice1'),(14,120.45,'q4_choice2'),(15,0,'q4_choice3'),(16,85,'q4_choice4'),(17,305.76,'q5_choice1'),(18,7.5,'q5_choice2'),(19,0,'q5_choice3'),(20,0,'q5_choice4'),(21,6000,'q6_choice1'),(22,2000,'q6_choice2'),(23,400,'q6_choice3'),(24,0,'q6_choice4'),(25,502,'q7_choice1'),(26,160,'q7_choice2'),(27,16,'q7_choice3'),(28,0,'q7_choice4'),(29,7000,'q8_choice1'),(30,420,'q8_choice2'),(31,100,'q8_choice3'),(32,0,'q8_choice4'),(49,5850,'q9_choice1'),(50,3405,'q9_choice2'),(51,299.5,'q9_choice3'),(52,300,'q9_choice4'),(53,1700,'q10_choice1'),(54,850,'q10_choice2'),(55,340,'q10_choice3'),(56,377.5,'q10_choice4'),(57,850,'q11_choice1'),(58,566.5,'q11_choice2'),(59,330,'q11_choice3'),(60,377.5,'q11_choice4'),(61,139,'q12_choice1'),(62,123,'q12_choice2'),(63,68,'q12_choice3'),(64,80,'q12_choice4'),(65,156,'q13_choice1'),(66,78,'q13_choice2'),(67,39,'q13_choice3'),(68,25,'q13_choice4'),(69,33,'q14_choice1'),(70,16.5,'q14_choice2'),(71,8.25,'q14_choice3'),(72,0,'q14_choice4'),(73,371,'q15_choice1'),(74,120,'q15_choice2'),(75,50,'q15_choice3'),(76,50,'q15_choice4'),(77,36.5,'q16_choice1'),(78,18.25,'q16_choice2'),(79,7.3,'q16_choice3'),(80,7.3,'q16_choice4');
/*!40000 ALTER TABLE `answer` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-14 11:11:43
