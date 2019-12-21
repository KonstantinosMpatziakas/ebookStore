CREATE DATABASE  IF NOT EXISTS `bookstoredb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `bookstoredb`;
-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: localhost    Database: bookstoredb
-- ------------------------------------------------------
-- Server version	5.1.68-community

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
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Programming Languages'),(2,'Operating Systems'),(3,'Databases'),(4,'Networks'),(5,'Web ');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(100) DEFAULT NULL,
  `Lname` varchar(100) DEFAULT NULL,
  `Address` varchar(300) DEFAULT NULL,
  `Phone` varchar(100) DEFAULT NULL,
  `uname` varchar(30) DEFAULT NULL,
  `passwd` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (11,'Nikos','Papadopoulos','Egnatia 130','302310222222','nikos','12345'),(10,'Kostas','Chatzigeorgiou','Ag. Dimitriou 150','302310111111','kostas','12345');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(200) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Price` float DEFAULT NULL,
  `Category` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'Sams Teach Yourself SQL in 10 Minutes (3rd Edition)','Sams Teach Yourself SQL in 10 Minutes has established itself as the gold standard for introductory SQL books, offering a fast-paced accessible tutorial to the major themes and techniques involved in applying the SQL language. Forta\'s examples are clear and his writing style is crisp and concise. As with earlier editions, this revision includes coverage of current versions of all major commercial SQL platforms.',15,3),(2,'Fundamentals of Database Systems','This introduction to database systems offers a comprehensive approach, focusing on database design, database use, and implementation of database applications and database management systems.',30,3),(3,'Database Systems: The Complete Book','Clear explanations of theory and design, broad coverage of models and real systems, and an up-to-date introduction to modern database technologies result in a leading introduction to database systems. Intended for computer science majors, Fundamentals of Database Systems, 6/e emphasizes math models, design issues, relational algebra, and relational calculus.',35,3),(4,'Java In A Nutshell, 5th Edition','With more than 700,000 copies sold to date, Java in a Nutshell from O\'Reilly is clearly the favorite resource amongst the legion of developers and programmers using Java technology. And now, with the release of the 5.0 version of Java, O\'Reilly has given the book that defined the \"in a Nutshell\" category another impressive tune-up. ',30,1),(5,'Essential C# 4.0','Essential C# 4.0 is a well-organized,no-fluff guide to all versions of C# for programmers at all levels of C# experience. This fully updated edition shows how to make the most of C# 4.0’s new features and programming patterns to write code that is simple, yet powerful.',40,1),(6,'PHP and MySQL Web Development ','The PHP server-side scripting language and the MySQL database management system (DBMS) make a potent pair. Both are open-source products--free of charge for most purposes--remarkably strong, and capable of handling all but the most enormous transaction loads. Both are supported by large, skilled, and enthusiastic communities of architects, programmers, and designers.',35,1),(7,'Unix in a Nutshell, Fourth Edition','Unix in a Nutshell is the standard desktop reference, without question. (Manpages come in a close second.) With a clean layout and superior command tables available at a glance, O\'Reilly\'s third edition of Nutshell is an essential to own.',25,2),(8,'Windows 7: The Missing Manual','In early reviews, geeks raved about Windows 7. But if you\'re an ordinary mortal, learning what this new system is all about will be challenging. Fear not: David Pogue\'s Windows 7: The Missing Manual comes to the rescue. Like its predecessors, this book illuminates its subject with reader-friendly insight, plenty of wit, and hardnosed objectivity for beginners as well as veteran PC users. ',25,2),(9,'Understanding the Linux Kernel, Third Edition','In order to thoroughly understand what makes Linux tick and why it works so well on a wide variety of systems, you need to delve deep into the heart of the kernel. The kernel handles all interactions between the CPU and the external world, and determines which programs will share processor time, in what order. It manages limited memory so well that hundreds of processes can share the system efficiently, and expertly organizes data transfers so that the CPU isn\'t kept waiting any longer than nece',30,2),(10,'TCP/IP Illustrated, Vol. 1: The Protocols ','TCP/IP Illustrated, Volume 1: The Protocols is an excellent text that provides encyclopedic coverage of the TCP/IP protocol suite. What sets this book apart from others on this subject is the fact that the author supplements all of the discussion with data collected via diagnostic programs; thus, it is possible to \"watch\" the protocols in action in a real situation. Also, the diagnostic tools involved are publicly available; the reader has the opportunity to play along at home. This offers the r',50,4),(11,'CCNA: Cisco Certified Network Associate Study Guide','Cisco networking authority Todd Lammle has completely updated this new edition to cover all of the exam objectives for the latest version of the CCNA exam. Todd’s straightforward style provides lively examples, easy-to-understand analogies, and real-world scenarios that will not only help you prepare for the exam, but also give you a solid foundation as a Cisco networking professional.',50,4),(12,'Network Security Essentials: Applications and Standards (4th Edition)','Wiliiam Stallings\' Network Security: Applications and Standards, 4/e is a practical survey of network security applications and standards, with unmatched support for instructors and students.',60,4),(13,'Learning Web Design: A Beginner\'s Guide to (X)HTML, StyleSheets, and Web Graphics','Everything you need to know to create professional web sites is right here. Learning Web Design  starts from the beginning -- defining how the Web and web pages work -- and builds from there. By the end of the book, you\'ll have the skills to create multi-column CSS layouts with optimized graphic files, and you\'ll know how to get your pages up on the Web.\r\nEverything you need to know to create professional web sites is right here. Learning Web Design  starts from the beginning -- defining how the',40,5),(14,'Beginning Web Programming with HTML, XHTML, and CSS','This beginning guide reviews HTML and also introduces you to using XHTML for the structure of a web page and cascading style sheets (CSS) for controlling how a document should appear on a web page. You?ll learn how to take advantage of the latest features of browsers while making sure that your pages still work in older, but popular, browsers. By incorporating usability and accessibility, you?ll be able to write professional-looking and well-coded web pages that use the latest technologies. ',35,5),(15,'Programming the World Wide Web','Programming the World Wide Web 2010 provides a comprehensive introduction to the tools and skills required for both client- and server-side programming, teaching students how to develop platform-independent sites using the most current Web development technology',50,5);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Customer` int(11) DEFAULT NULL,
  `oDate` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (15,11,'2011-12-21'),(14,10,'2011-12-21');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orderdetails`
--

DROP TABLE IF EXISTS `orderdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orderdetails` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Orders` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Product` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=79 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderdetails`
--

LOCK TABLES `orderdetails` WRITE;
/*!40000 ALTER TABLE `orderdetails` DISABLE KEYS */;
INSERT INTO `orderdetails` VALUES (78,15,1,9),(77,15,3,12),(76,14,1,3),(75,14,1,1);
/*!40000 ALTER TABLE `orderdetails` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-10-25 14:51:18
