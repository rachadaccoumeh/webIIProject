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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_price` varchar(30) NOT NULL,
  `count` int NOT NULL,
  `sales` int DEFAULT (0),
  `category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_name` (`product_name`),
  KEY `category` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'iPhone 12','The latest iPhone model with a Super Retina XDR display and 5G capabilities.','$799',1,10,'1'),(3,'Cuisinart Coffee Maker','A 12-cup coffee maker with a built-in grinder and programmable settings.','$99',41,5,'3'),(4,'Nike Running Shoes','Breathable running shoes with a cushioned sole and Flywire cables for support.','$120',41,20,'4'),(5,'Lego City Set','A building set with over 600 pieces to create a city scene.','$70',41,10,'5'),(6,'L\'Oreal Face Cream','A moisturizing face cream with SPF 15 protection.','$30',40,25,'6'),(7,'Honda Civic','A compact car with excellent fuel efficiency and advanced safety features.','$20,000',41,3,'7'),(8,'HP OfficeJet Printer','An all-in-one printer with wireless connectivity and automatic document feeding.','$199',39,10,'8'),(9,'Dewalt Power Drill','A powerful cordless drill with variable speed settings and a reversible handle.','$129',41,15,'9'),(10,'Peet\'s Coffee Beans','Whole bean coffee from a renowned specialty coffee roaster.','$20',41,20,'10'),(11,'The Alchemist','A novel about a shepherd boy who embarks on a journey to find a hidden treasure.','$15',41,30,'11'),(12,'MacBook Pro','A powerful laptop with a Retina display and Touch Bar.','$1,299',41,5,'1'),(13,'Adidas T-Shirt','A comfortable, moisture-wicking t-shirt with the Adidas logo.','$30',41,15,'2'),(14,'KitchenAid Stand Mixer','A heavy-duty stand mixer with multiple attachments and a 5-quart stainless steel bowl.','$349',41,3,'3'),(15,'Under Armour Training Shoes','Breathable training shoes with a flexible sole and responsive cushioning.','$80',41,10,'4'),(16,'Barbie Dreamhouse','A three-foot tall dreamhouse with interactive features and accessories.','$100',41,5,'5'),(17,'Neutrogena Face Wash','A gentle foaming face wash that removes dirt and oil without over-drying skin.','$8',41,15,'6'),(18,'Toyota Camry','A reliable and spacious sedan with excellent fuel efficiency and a smooth ride.','$25,000',41,2,'7'),(19,'Google Pixel 5','A smartphone with a high-resolution camera and 5G connectivity.','$699',41,10,'1'),(20,'Ralph Lauren Polo Shirt aa','A classic polo shirt made with breathable cotton and featuring the Ralph Lauren logo.','$80',41,15,'2');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-07 17:22:47
