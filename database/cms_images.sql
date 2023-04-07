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
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `images` (
  `product_id` int DEFAULT NULL,
  `image_url` varchar(255) NOT NULL,
  KEY `product_id` (`product_id`),
  CONSTRAINT `images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxPMDNopdLW7wjdyh5Bg9gEl3QHZqv086MeQ&usqp=CAU1'),(1,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxPMDNopdLW7wjdyh5Bg9gEl3QHZqv086MeQ&usqp=CAU1'),(3,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-fzFhZm5Nh3EiJfly6dnPYa-YIPI0Br7lBRa__zckJ3VcQ5F8Vbh9zOMiErfQgWLMNq0xrFI&usqp=CAc'),(4,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUsB4_tKNr4OoUJJ8QCxq8i3OsVEbL0LSHkw&usqp=CAU'),(4,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTl4b7UgqrQoeP_minkIGZVP0DCHfjL6kagWStv4vWBOt_XQ2a1&usqp=CAc'),(5,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ28MbdSgrpo_9uHM948M4xEnMGP1po_J7wXw&usqp=CAU'),(5,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpbaFp_0RcHcjURhP3X7ySrbmr3VqVaEU1EQ&usqp=CAU'),(6,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiYCnhxTRYuRXTf_Wwrdr_mOnVOfPpw3D53A&usqp=CAU'),(7,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPSqdZWa0sZTHA4p-A07TN68a8XntNzI8Hag&usqp=CAU'),(8,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTI3-ltdaXJEiIauVQ1LA2km3bKZOWxZjLvg&usqp=CAU'),(9,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmPfRcxRY3VqI9VirgGtAc0b1yt3M9KzXkbA&usqp=CAU'),(10,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSe_EWm1AJS-iBr9C6uGj5MO04E9h3Qhlj-Xw&usqp=CAU'),(11,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTr6DN1c1tUjAI7mXCFYFNQFA42LiH15ge6MA&usqp=CAU'),(20,'https://cdn-images.farfetch-contents.com/15/27/13/93/15271393_35861352_600.jpg'),(19,'https://m.media-amazon.com/images/I/31ZmvvRBFgL._AC_.jpg'),(19,'https://m-cdn.phonearena.com/images/review/4878-wide-two_1200/Google-Pixel-5-Review-Brilliant-but-outshined.jpg'),(18,'https://imgd.aeplcdn.com/1200x900/n/cw/ec/110233/2022-camry-exterior-right-front-three-quarter.jpeg?isig=0&q=75'),(17,'https://cdn.shopify.com/s/files/1/2488/5102/products/spotcontrolling_facialwash_bottle.png?v=1633004713'),(15,'https://cdn.weartesters.com/wp-content/uploads/2022/01/UA-HOVR-Apex-2.jpeg'),(16,'https://m.media-amazon.com/images/I/81622tNw4yL._AC_SL1500_.jpg'),(14,'https://assets.surlatable.com/m/594875d1a1ea9b57/webimage-172692_p.jpg'),(14,'https://m.media-amazon.com/images/I/710zSdXYuIL.jpg'),(13,'http://cdn.shopify.com/s/files/1/2277/0487/products/e412e0f439098c53556e7ef8c03c6c7f.jpg?v=1639798317'),(12,'https://cdn.talaco.net/talaco/assets/images/2022/07/05114854/mbp-spacegray-select-202206.jpeg');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
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
