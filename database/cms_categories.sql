-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: cms
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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category_name` (`category_name`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Electronics :-)','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTtcMMdbFfG6_mO3TOphS_bwTFCVWi0dknoA&usqp=CAU'),(3,'Home & Kitchen','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwBQXLMTHr0o2T2D3a40Z51zDmUm-T2Ge7UA&usqp=CAU'),(4,'Sports & Outdoors','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQuwK04L8j-uey3PGCj0d7UWr6LO3rGDwK4w&usqp=CAU'),(5,'Toys & Games','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR91ulautcR1OmtFDCAwsImpxbAHIf41WDVpw&usqp=CAU'),(6,'Beauty & Personal Care','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2acSow73cMH4eEKiyY0Kg6SlXeiDwCNBlHg&usqp=CAU'),(7,'Automotive','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXPhtMx6RHSThwbJUmyCvhs9-0XWlCxCXsvw&usqp=CAU'),(8,'Office Products','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3HsxPPV12qXack1hCqPT29BZ1XWp79x4H7w&usqp=CAU'),(9,'Tools & Home Improvement','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0Yunk2nPmqJu5fMnzGKjnrv23LoRKHPJ0Pg&usqp=CAU'),(10,'Grocery & Gourmet Food','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQayk3RPliYcmtcAaD78ubOrBWyZKGEbRIuIA&usqp=CAU'),(11,'Books','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvdcp_cBY55AuL5iSDtBpfgy_7a8or3Zv29A&usqp=CAU'),(12,'Health & Personal Care','https://www.shutterstock.com/image-vector/hygiene-items-vector-icon-soapclean-260nw-1197754033.jpg'),(13,'Pet Supplies','https://i.pinimg.com/736x/51/df/ea/51dfeaf4653203351d74c42430bce51f--render-in-dry-dog-food.jpg'),(14,'Musical Instruments','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCNrTHYndKLBW3F6SEtBISlViwv_yyXNHUhA&usqp=CAU'),(15,'Video Games','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEfgVoCi8jVcEWf199kz0RbSNk2EKdMujI4w&usqp=CAU'),(16,'Movies & TV','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNK3VPCZ4WNAXA9ufp1YoxCShZ8ndskh4qtQ&usqp=CAU'),(17,'Garden & Outdoor','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqMAyHNQMCKqt8amS5jzbgzSxDYgnhFSqjGQ&usqp=CAU'),(18,'Industrial & Scientific','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBp_Lw9pleYkYK1WEHzmkX58so9ra_UYrN2g&usqp=CAU');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-07 17:22:48
