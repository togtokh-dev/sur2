-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: localhost    Database: sur
-- ------------------------------------------------------
-- Server version	8.0.29

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
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `class` (
  `class_id` varchar(125) NOT NULL,
  `class_user_id` varchar(45) DEFAULT NULL,
  `class_name` varchar(500) DEFAULT NULL,
  `class_type` varchar(45) DEFAULT NULL,
  `class_about` longtext,
  `class_image` varchar(500) DEFAULT NULL,
  `class_video` varchar(500) DEFAULT NULL,
  `class_amount` double DEFAULT NULL,
  `class_sell` double DEFAULT NULL,
  `class_created_date` datetime NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class`
--

LOCK TABLES `class` WRITE;
/*!40000 ALTER TABLE `class` DISABLE KEYS */;
INSERT INTO `class` VALUES ('qwer123','490625137','Математика213213213',NULL,'&lt;p&gt;&lt;strong&gt;Сурагчид өөрийн хүсэл зорилгод нийцүүлэн суралцах боломжтой ба ойлгоогүй хоцорсон хичээлүүдээ эхлээд нөхөж үзээд дараа нь ахиулан суралцах боломжтой.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;&lt;img alt=&quot;angel&quot; class=&quot;img-fluid&quot; src=&quot;http://localhost/sur2/vendor/edit/ckeditor/plugins/smiley/images/angel_smile.png&quot; style=&quot;height:23px; width:23px&quot; title=&quot;angel&quot; /&gt;&lt;/strong&gt;&lt;/p&gt;\r\n','','m96VzAzvb8Q',200000213213,50000123213,'0000-00-00 00:00:00'),('umgv28jax4','490625137','tg','','','','',0,0,'2022-05-10 17:06:20'),('wlu5o829qv','490625137','tg123 123','','','https://thumbs.dreamstime.com/b/imitation-transparent-background-seamless-vector-illustration-69028332.jpg','',0,0,'2022-05-10 17:08:43');
/*!40000 ALTER TABLE `class` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-11 10:27:04
