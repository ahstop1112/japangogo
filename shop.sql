-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: 127.0.0.1    Database: shop
-- ------------------------------------------------------
-- Server version	5.7.17

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `passcode` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'chiwai','P@ssw0rd');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(50) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `tag` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'Sport Nutrition','Orgain Organic Plant Based Protein Powder, Creamy Chocolate Fudge, 2.03 Pound, 1 Count, Vegan, Non-GMO, Gluten Free','1.png',0,'Protein'),(2,'Sport Nutrition','BSN SYNTHA-6 Protein Powder, Whey Protein, Micellar Casein, Milk Protein Isolate, Flavor: Chocolate Milkshake, 48 Servings','2.png',0,'Protein'),(3,'Sport Nutrition','Orgain Kids Protein Organic Nutritional Shake, Chocolate, 8.25 Ounce, 12 Count, Non-GMO, Gluten Free','3.png',0,'Protein'),(4,'Sport Nutrition','fairlife Core Power High Protein (26g) Milk Shake, Chocolate (Packaging May Vary), 11.5-ounce bottles, 12 Count','4.png',0,'Protein'),(5,'Sport Nutrition','Optimum Nutrition Gold Standard 100% Casein Protein Powder, Chocolate Supreme, 4 Pound','5.png',0,'Protein'),(6,'Sport Nutrition','Optimum Nutrition Micronized Creatine Monohydrate Powder, Unflavored, 600g','6.png',0,'Amino Acids'),(7,'Sport Nutrition','xtra Strength L Arginine - 1200mg Nitric Oxide Supplement for Muscle Growth, Vascularity & Energy - Powerful NO Booster With L-Citrulline & Essential Amino Acids To Train Longer & Harder','7.png',0,'Amino Acids'),(8,'Sport Nutrition','Creatine Monohydrate Powder Micronized by BulkSupplements (1 kilogram) | 99.99% Pure High Performance Formula | Pre/Post Workout Bodybuilding/Crossfit Supplement','8.png',0,'Amino Acids'),(9,'Sport Nutrition','MuscleTech Platinum 100% Creatine, Ultra-Pure Micronized Creatine Powder, Unflavored, 14.11 Oz (400 Grams)','9.png',0,'Amino Acids'),(10,'Sport Nutrition','Hydroxycut Hardcore Elite , 100ct, 100mg Coleus Forskohlii, 56.3mg Yohimbe, 200mg Green Coffee, 100mg L-Theanin ,200mg C.canephora Robusta','10.png',0,'Amino Acids'),(11,'Sport Nutrition','Premium MCT Oil from sustainable Coconuts. Huge 32 Oz. Keto, Easier To Absorb and Digest. Triple Filtered','11.png',0,'Energy Endurance'),(12,'Sport Nutrition','GENIUS CAFFEINE – Extended Release Microencapsulated Caffeine Pills, All Natural Non-Crash Sustained Energy & Focus Supplement –Preworkout & Nootropic Brain Booster For Men & Women,100 veggie capsules','12.png',0,'Energy Endurance'),(13,'Sport Nutrition','Scivation Xtend BCAA Powder, Branched Chain Amino Acids, BCAAs, Blue Raspberry, 30 Servings','13.png',0,'Energy Endurance'),(14,'Sport Nutrition','Cellucor C4 Original Pre Workout Powder Energy Drink w/ Creatine, Nitric Oxide & Beta Alanine, Cherry Limeade, 30 Servings','14.png',0,'Energy Endurance'),(15,'Sport Nutrition','VINTAGE BLAST - The First Two-Stage Pre-Workout Supplement - Non-Habit-Forming, Sustained Energy & Nitric Oxide Booster - All-Natural Flavors & Sweeteners - Blueberry Lemonade - 305 Grams Powder','15.png',0,'Energy Endurance'),(16,'Sanrio Japan Character','My Melody Blanket: Rocking Horse','16.png',224,'My Melody'),(17,'Sanrio Japan Character','My Melody x Chimutan Wash Towel: Friends','17.png',60,'My Melody'),(18,'Sanrio Japan Character','My Melody Key Clip: Friendship','18.png',40,'My Melody'),(19,'Sanrio Japan Character','My Melody 6 pc Ballpoint Pen Set: Beauty','19.png',120,'My Melody'),(20,'Sanrio Japan Character','My Melody 3 pc Plate Set: Rhythm','20.png',120,'My Melody'),(21,'Sanrio Japan Character','Hello Kitty Canister: Friendship','21.png',60,'Hello Kitty'),(22,'Sanrio Japan Character','Helo Kitty Binder Clips Set: Strawberries','22.png',60,'Hello Kitty'),(23,'Sanrio Japan Character','Hello Kitty Pocket Folder Oraganizer: Strawberries','23.png',80,'Hello Kitty'),(24,'Sanrio Japan Character','Hello Kitty Notebook: Charming Pink','24.png',120,'Hello Kitty'),(25,'Sanrio Japan Character','Hello Kitty Beverage Bottle: Charming Pink','25.png',104,'Hello Kitty'),(26,'Electronic Applicance','TOTO Washlet apricot 2017 F1 lever washing type','26.png',4729,'Household'),(27,'Electronic Applicance','Panasonic VL-SV25X video intercom systems','27.png',686,'Household'),(28,'Electronic Applicance','Ultrasonic washer (SWT710) indication stock','28.png',629,'Household'),(29,'Electronic Applicance','DSLI1206 photovoltaic power generation kit','29.png',1328,'Household'),(30,'Electronic Applicance','ID-101PS duct ventilation fan SEIDENKO DF-10PS successor model','30.png',438,'Household'),(31,'Electronic Applicance','Professional Anion Hair Straightener 20mm','31.png',584,'Beauty & Health'),(32,'Electronic Applicance','Overseas combined use curling irons','32.png',948,'Beauty & Health'),(33,'Electronic Applicance','Diamond clean Sonicare replacement brush 2 book set','33.png',254,'Beauty & Health'),(34,'Electronic Applicance','Light depilator belulu Clear Veil mini','34.png',2182,'Beauty & Health'),(35,'Electronic Applicance','Louvre dough reconstruction dryer','35.png',950,'Beauty & Health');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-13 14:27:21
