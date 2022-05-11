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
-- Table structure for table `lesson`
--

DROP TABLE IF EXISTS `lesson`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lesson` (
  `lesson_id` varchar(45) NOT NULL,
  `lesson_name` varchar(45) DEFAULT NULL,
  `cj_id` varchar(45) DEFAULT NULL,
  `class` varchar(45) DEFAULT NULL,
  `lesson_about` longtext,
  `lesson_video` varchar(500) DEFAULT NULL,
  `lesson_text` longtext,
  `lesson_file` varchar(500) DEFAULT NULL,
  `lesson_test` varchar(45) DEFAULT NULL,
  `lesson_image` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_unicode_ci DEFAULT NULL,
  `lesson_created_date` datetime NOT NULL,
  PRIMARY KEY (`lesson_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lesson`
--

LOCK TABLES `lesson` WRITE;
/*!40000 ALTER TABLE `lesson` DISABLE KEYS */;
INSERT INTO `lesson` VALUES ('tyghcs3','Функцийн хязгаар','regs213','qwer123','бйбхыйроболдтыо  ыйөрыбрбөлр','https://www.youtube.com/watch?v=7d4EXOSO-O8&list=RDMM6nd_Gpo0dgY&index=27','ужө\"₮- \"уцыбрыйолбр\r\n-\"оо-№р\"лр \r\n-ло\"ло-№д \r\n-№\"үл-№ол\"о\r\n-№\"ол-№о\"л\r\n о№-ло\"-дп№\r\nо-№\"лд\r\n','https://www.youtube.com/watch?v=7d4EXOSO-O8&list=RDMM6nd_Gpo0dgY&index=27',NULL,'http://www.clker.com/cliparts/4/7/1/0/1513735018672072592maths-logo.hi.png','2022-05-04 15:36:31'),('zatkbsf7dn','1221312213','regs213','qwer123','<p>123sadsad</p>\r\n','qbMp8-CafA4','<p>asdqe4sdsz</p>\r\n','http://localhost/sur2/uploads/activity diagram (Nurali Jarkhyn).vsdx',NULL,'http://localhost/sur2/uploads/279623811_514039770300042_7124301690583303370_n.jpg','2022-05-11 02:02:09');
/*!40000 ALTER TABLE `lesson` ENABLE KEYS */;
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
