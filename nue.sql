-- MySQL dump 10.16  Distrib 10.1.34-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: nwe
-- ------------------------------------------------------
-- Server version	10.1.34-MariaDB

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
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` int(11) NOT NULL,
  `content` int(11) NOT NULL,
  `pic` text NOT NULL,
  `three_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hight_cate`
--

DROP TABLE IF EXISTS `hight_cate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hight_cate` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `created_at` varchar(200) NOT NULL,
  `updated_at` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hight_cate`
--

LOCK TABLES `hight_cate` WRITE;
/*!40000 ALTER TABLE `hight_cate` DISABLE KEYS */;
INSERT INTO `hight_cate` VALUES (1,'公司简介','5456456484','8678678'),(2,'产品中心','18736873873','86876786'),(3,'冷库案列','86786876876','876786876'),(4,'新闻中心','6786876','86876876'),(5,'售后服务','86868687686','876786786'),(6,'在线留言','86868686','786786786876'),(7,'联系我们','86876876','876786786'),(11,'埃德•斯科菲尔德','1533277237','1533277237'),(12,'埃德•斯科菲尔德','1533277423','1533277423');
/*!40000 ALTER TABLE `hight_cate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `middle_cate`
--

DROP TABLE IF EXISTS `middle_cate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `middle_cate` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `hight_id` int(2) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `middle_cate`
--

LOCK TABLES `middle_cate` WRITE;
/*!40000 ALTER TABLE `middle_cate` DISABLE KEYS */;
INSERT INTO `middle_cate` VALUES (1,'冷库分类',2,'1533277363','1533281220'),(2,'制冷设备',2,'1533277577','1533277577'),(6,'技术服务',4,'1533281544','1533281544'),(7,'行业新闻',4,'1533281570','1533281570'),(8,'技术服务',5,'1533281601','1533281601'),(9,'故障分析',5,'1533281623','1533281623');
/*!40000 ALTER TABLE `middle_cate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `three_cate`
--

DROP TABLE IF EXISTS `three_cate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `three_cate` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `middle_id` int(2) NOT NULL,
  `created_at` varchar(200) NOT NULL,
  `updated_at` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `three_cate`
--

LOCK TABLES `three_cate` WRITE;
/*!40000 ALTER TABLE `three_cate` DISABLE KEYS */;
INSERT INTO `three_cate` VALUES (1,'食品行业',1,'1533284737','1533284737'),(2,'医疗行业',1,'1533284786','1533284786'),(3,'化工实验',1,'1533284807','1533284807'),(4,'物流行业',1,'1533284832','1533284832'),(5,'保温板',2,'1533293603','1533293603'),(6,'压缩机组',2,'1533293618','1533293618'),(7,'制冷配件',2,'1533293637','1533294386');
/*!40000 ALTER TABLE `three_cate` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-03 19:34:50
