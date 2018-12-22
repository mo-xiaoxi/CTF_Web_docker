-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: emmm
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.18.04.1

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
-- Table structure for table `emmm_ad`
--

DROP TABLE IF EXISTS `emmm_ad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_ad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Adtitle` varchar(255) NOT NULL DEFAULT '',
  `COL_Adcontent` text,
  `COL_Adclass` varchar(255) NOT NULL DEFAULT '',
  `COL_Adpiaofui` varchar(255) NOT NULL DEFAULT '',
  `COL_Adpiaofuu` text,
  `COL_Adyouxiat` varchar(255) NOT NULL DEFAULT '',
  `COL_Adyouxiaf` text,
  `COL_Adduilianli` varchar(255) NOT NULL DEFAULT '',
  `COL_Adduilianlu` text,
  `COL_Adduilianri` varchar(255) NOT NULL DEFAULT '',
  `COL_Adduilianru` text,
  `COL_Adstateo` int(11) NOT NULL DEFAULT '0',
  `COL_Adstatet` int(11) NOT NULL DEFAULT '0',
  `COL_Adstates` int(11) NOT NULL DEFAULT '0',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_ad`
--

LOCK TABLES `emmm_ad` WRITE;
/*!40000 ALTER TABLE `emmm_ad` DISABLE KEYS */;
INSERT INTO `emmm_ad` VALUES (1,'全站顶部','','','../../skin/headerbanner.gif','','','','','','','',2,2,2,'2015-01-01 12:00:00'),(2,'全站底部','','','../../skin/footerbanner.gif','','','','','','','',2,2,2,'2015-01-01 12:00:00'),(3,'信息列表页','','','../../skin/threadlist.gif','','','','','','','',2,2,2,'2015-01-01 12:00:00'),(4,'信息内容页','','','../../skin/article.gif','','','','','','','',2,2,2,'2015-01-01 12:00:00'),(5,'特殊广告','','','','','','','','','','',2,2,2,'2015-01-01 12:00:00'),(6,'会员中心登录左侧广告位','','','../../skin/userrightad.gif','','','','','','','',2,2,2,'2015-01-01 12:00:00');
/*!40000 ALTER TABLE `emmm_ad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_admin`
--

DROP TABLE IF EXISTS `emmm_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Adminname` varchar(255) NOT NULL DEFAULT '',
  `COL_Adminpass` varchar(255) NOT NULL DEFAULT '',
  `COL_Adminpower` text,
  `COL_Admin` int(11) NOT NULL DEFAULT '0',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_admin`
--

LOCK TABLES `emmm_admin` WRITE;
/*!40000 ALTER TABLE `emmm_admin` DISABLE KEYS */;
INSERT INTO `emmm_admin` VALUES (1,'admin','c44ea3b8faf88312','01,02,03,04,05,06,07,08,09,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60',1,'2018-12-15 15:34:14');
/*!40000 ALTER TABLE `emmm_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_adminclick`
--

DROP TABLE IF EXISTS `emmm_adminclick`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_adminclick` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Title` varchar(255) NOT NULL DEFAULT '',
  `COL_Url` varchar(255) NOT NULL DEFAULT '',
  `COL_Click` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_adminclick`
--

LOCK TABLES `emmm_adminclick` WRITE;
/*!40000 ALTER TABLE `emmm_adminclick` DISABLE KEYS */;
INSERT INTO `emmm_adminclick` VALUES (1,'招聘管理','emmm_job.php?id=emmm',8);
/*!40000 ALTER TABLE `emmm_adminclick` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_api`
--

DROP TABLE IF EXISTS `emmm_api`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_api` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Key` text,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_api`
--

LOCK TABLES `emmm_api` WRITE;
/*!40000 ALTER TABLE `emmm_api` DISABLE KEYS */;
INSERT INTO `emmm_api` VALUES (1,'快递100接口|2|key值',NULL),(2,'支付宝服务窗API接口|2|0|0',NULL),(3,'支付宝[即时到账]接口|2|0|0|0',NULL),(4,'银联[网银支付]接口|2|0|0|0',NULL),(5,'微信登录API接口|2|0|0',NULL),(6,'手机短信API接口|2|0|0|sendsms|regsms',NULL),(7,'QQ登录API接口|2|0|0',NULL),(8,'支付宝[移动支付]接口|2|0|0',NULL),(9,'电脑端微信扫码支付|2|0|0|0|0',NULL),(10,'微信手机端H5支付接口|2|0|0|0|0',NULL);
/*!40000 ALTER TABLE `emmm_api` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_article`
--

DROP TABLE IF EXISTS `emmm_article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Articletitle` varchar(255) NOT NULL DEFAULT '',
  `COL_Articleauthor` varchar(255) NOT NULL DEFAULT '',
  `COL_Articlesource` varchar(255) NOT NULL DEFAULT '',
  `time` datetime DEFAULT NULL,
  `COL_Articlecontent` text,
  `COL_Class` int(11) NOT NULL DEFAULT '0',
  `COL_Lang` varchar(255) NOT NULL DEFAULT '',
  `COL_Tag` varchar(255) NOT NULL DEFAULT '',
  `COL_Sorting` int(11) NOT NULL DEFAULT '0',
  `COL_Attribute` varchar(255) NOT NULL DEFAULT '',
  `COL_Url` varchar(255) NOT NULL DEFAULT '',
  `COL_Description` text,
  `COL_Click` int(11) NOT NULL DEFAULT '0',
  `COL_Minimg` text,
  `COL_Callback` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `COL_Class` (`COL_Class`),
  KEY `COL_Callback` (`COL_Callback`),
  KEY `COL_Lang` (`COL_Lang`),
  KEY `COL_Attribute` (`COL_Attribute`),
  KEY `COL_Articletitle` (`COL_Articletitle`),
  KEY `COL_Sorting` (`COL_Sorting`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_article`
--

LOCK TABLES `emmm_article` WRITE;
/*!40000 ALTER TABLE `emmm_article` DISABLE KEYS */;
INSERT INTO `emmm_article` VALUES (5,'123','123','提交','2018-12-15 15:35:02','123',3,'cn','123',99,'0','123','123',0,'123',0),(2,'世界，你好！','','','2014-12-07 15:59:43','世界，你好！',3,'cn','',99,'','','世界，你好！',0,'skin/noimage.png',0),(3,'世界，你好！','','','2014-12-07 16:02:04','世界，你好！',3,'cn','',99,'','','世界，你好！',0,'skin/noimage.png',0),(4,'123','123','提交','2018-12-15 15:34:25','123',3,'cn','123',99,'0','123','123',0,'123',0),(6,'123','123','提交','2018-12-15 15:40:22','123',3,'cn','123',99,'0','123','123',0,'123',0),(7,'123','123','提交','2018-12-15 15:44:52','123',3,'cn','123',99,'0','123','123',0,'123',0),(8,'123','123','提交','2018-12-15 15:50:36','123',3,'cn','123',99,'0','123','123',0,'123',0),(9,'123','123','提交','2018-12-15 15:53:54','123',3,'cn','123',99,'0','123','123',0,'123',0),(10,'123','123','提交','2018-12-15 15:55:21','123',3,'cn','123',99,'0','123','123',0,'123',0),(11,'123','123','提交','2018-12-15 15:58:37','123',3,'cn','123',99,'0','123','123',0,'123',0),(12,'123','123','提交','2018-12-15 15:59:04','123',3,'cn','123',99,'0','123','123',0,'123',0);
/*!40000 ALTER TABLE `emmm_article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_banner`
--

DROP TABLE IF EXISTS `emmm_banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_banner` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Bannerimg` text,
  `COL_Bannertitle` varchar(255) NOT NULL DEFAULT '',
  `COL_Bannerurl` varchar(255) NOT NULL DEFAULT '',
  `COL_Bannerlang` varchar(255) NOT NULL DEFAULT '',
  `time` datetime DEFAULT NULL,
  `COL_Bannerclass` int(11) NOT NULL DEFAULT '0',
  `COL_Bannertext` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_banner`
--

LOCK TABLES `emmm_banner` WRITE;
/*!40000 ALTER TABLE `emmm_banner` DISABLE KEYS */;
INSERT INTO `emmm_banner` VALUES (1,'function/uploadfile/emmm888/1.png','banner1','#','cn','2014-12-06 17:27:56',0,'||'),(2,'function/uploadfile/emmm888/2.png','banner2','#','cn','2014-12-06 18:01:55',1,'||');
/*!40000 ALTER TABLE `emmm_banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_book`
--

DROP TABLE IF EXISTS `emmm_book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_book` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Bookcontent` text,
  `COL_Bookname` varchar(255) NOT NULL DEFAULT '',
  `COL_Booktel` varchar(255) NOT NULL DEFAULT '',
  `COL_Bookip` varchar(255) NOT NULL DEFAULT '',
  `COL_Bookclass` int(11) NOT NULL DEFAULT '0',
  `COL_Booklang` varchar(255) NOT NULL DEFAULT '',
  `COL_Bookreply` text,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `COL_Bookclass` (`COL_Bookclass`),
  KEY `COL_Booklang` (`COL_Booklang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_book`
--

LOCK TABLES `emmm_book` WRITE;
/*!40000 ALTER TABLE `emmm_book` DISABLE KEYS */;
/*!40000 ALTER TABLE `emmm_book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_booksection`
--

DROP TABLE IF EXISTS `emmm_booksection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_booksection` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Booksectiontitle` varchar(255) NOT NULL DEFAULT '',
  `COL_Booksectioncontent` text,
  `COL_Booksectionlanguage` varchar(255) NOT NULL DEFAULT '',
  `COL_Booksectionsorting` int(11) NOT NULL DEFAULT '0',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_booksection`
--

LOCK TABLES `emmm_booksection` WRITE;
/*!40000 ALTER TABLE `emmm_booksection` DISABLE KEYS */;
INSERT INTO `emmm_booksection` VALUES (1,'问题反馈','在这里可以把您碰到的问题反馈给我们。','cn',0,'2015-01-01 12:00:00'),(2,'客户服务','您有什么需求或是需要什么帮助，可以在这里留言哦！','cn',1,'2015-01-01 12:00:00');
/*!40000 ALTER TABLE `emmm_booksection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_column`
--

DROP TABLE IF EXISTS `emmm_column`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_column` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Uid` int(11) NOT NULL DEFAULT '0',
  `COL_Lang` varchar(255) NOT NULL DEFAULT '',
  `COL_Columntitle` varchar(255) NOT NULL DEFAULT '',
  `COL_Columntitleto` varchar(255) NOT NULL DEFAULT '',
  `COL_Model` varchar(255) NOT NULL DEFAULT '',
  `COL_Templist` varchar(255) NOT NULL DEFAULT '',
  `COL_Tempview` varchar(255) NOT NULL DEFAULT '',
  `COL_Url` varchar(255) NOT NULL DEFAULT '',
  `COL_About` text,
  `COL_Hide` int(11) NOT NULL DEFAULT '0',
  `COL_Sorting` int(11) NOT NULL DEFAULT '0',
  `COL_Briefing` text,
  `COL_Img` varchar(255) NOT NULL DEFAULT '',
  `COL_Userright` varchar(255) NOT NULL DEFAULT '',
  `COL_Weight` int(11) NOT NULL DEFAULT '0',
  `COL_Adminopen` text,
  PRIMARY KEY (`id`),
  KEY `COL_Hide` (`COL_Hide`),
  KEY `COL_Lang` (`COL_Lang`),
  KEY `COL_Uid` (`COL_Uid`),
  KEY `COL_Sorting` (`COL_Sorting`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_column`
--

LOCK TABLES `emmm_column` WRITE;
/*!40000 ALTER TABLE `emmm_column` DISABLE KEYS */;
INSERT INTO `emmm_column` VALUES (1,0,'cn','网站首页','','weburl','','','/','',0,0,'','','0',0,'0,1'),(2,0,'cn','企业商城','','weburl','','','?cn-shop.html','',0,2,'','','0',0,'0,1'),(3,0,'cn','公司新闻','','article','cn_article.html','cn_articleview.html','','',0,3,'','','0',0,'0,1'),(4,0,'cn','公司产品','','product','cn_product.html','cn_productview.html','','',0,4,'','','0',0,'0,1'),(5,0,'cn','公司案例','','photo','cn_photo.html','cn_photoview.html','','',0,5,'','','0',0,'0,1'),(6,0,'cn','视频展示','','video','cn_video.html','cn_videoview.html','','',0,6,'','','0',0,'0,1'),(7,0,'cn','资料下载','','down','cn_down.html','cn_downview.html','','',0,7,'','','0',0,'0,1'),(8,0,'cn','在线招聘','','job','cn_job.html','cn_jobview.html','','',0,8,'','','0',0,'0,1'),(9,0,'cn','关于我们','','about','','cn_about.html','','<br>',0,9,'','','0',0,'0,1'),(10,0,'cn','在线留言','','weburl','','','?cn-club.html','',0,10,'','','0',0,'0,1'),(11,2,'cn','积分兑换','系统栏目','product','cn_integral.html','cn_integralview.html','','',1,0,'','','0',0,'0,1'),(12,2,'cn','手机数码','','product','cn_shoplist.html','cn_shopview.html','','',0,1,'','','0',0,'0,1'),(13,2,'cn','男装女装','','product','cn_shoplist.html','cn_shopview.html','','',0,2,'','','0',0,'0,1'),(14,2,'cn','鞋靴箱包','','product','cn_shoplist.html','cn_shopview.html','','',0,3,'','','0',0,'0,1'),(15,2,'cn','护外运动','','product','cn_shoplist.html','cn_shopview.html','','',0,4,'','','0',0,'0,1'),(16,2,'cn','珠宝配饰','','product','cn_shoplist.html','cn_shopview.html','','',0,5,'','','0',0,'0,1'),(17,2,'cn','护肤彩妆','','product','cn_shoplist.html','cn_shopview.html','','',0,6,'','','0',0,'0,1');
/*!40000 ALTER TABLE `emmm_column` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_comment`
--

DROP TABLE IF EXISTS `emmm_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Content` text,
  `COL_Class` int(11) NOT NULL DEFAULT '0',
  `COL_Type` varchar(255) NOT NULL DEFAULT '',
  `COL_Name` varchar(255) NOT NULL DEFAULT '',
  `COL_Ip` varchar(255) NOT NULL DEFAULT '',
  `COL_Vote` int(11) NOT NULL DEFAULT '0',
  `COL_Scoring` varchar(255) NOT NULL DEFAULT '',
  `COL_Gocontent` text,
  `COL_Gotime` varchar(255) NOT NULL DEFAULT '',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_comment`
--

LOCK TABLES `emmm_comment` WRITE;
/*!40000 ALTER TABLE `emmm_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `emmm_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_coupon`
--

DROP TABLE IF EXISTS `emmm_coupon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_coupon` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Title` varchar(255) NOT NULL DEFAULT '',
  `COL_Money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `COL_Timewin` datetime DEFAULT NULL,
  `COL_Moneygo` decimal(10,2) NOT NULL DEFAULT '0.00',
  `COL_Content` text,
  `COL_Type` int(11) NOT NULL DEFAULT '0',
  `COL_Md` varchar(255) NOT NULL DEFAULT '',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_coupon`
--

LOCK TABLES `emmm_coupon` WRITE;
/*!40000 ALTER TABLE `emmm_coupon` DISABLE KEYS */;
INSERT INTO `emmm_coupon` VALUES (2,'123',0.00,'2022-03-25 00:00:00',0.00,'123',0,'83b8b027091f23f5cdd42dbd497e67bf','2018-12-15 15:35:02'),(3,'123',0.00,'2022-03-25 00:00:00',0.00,'123',0,'be8f0d6d78506e8473c453e6edc89262','2018-12-15 15:40:22'),(4,'123',0.00,'2022-03-25 00:00:00',0.00,'123',0,'567a82f8f83bff3a79556dd718326442','2018-12-15 15:44:52'),(5,'123',0.00,'2022-03-25 00:00:00',0.00,'123',0,'b8d43feafb19f09d16833982e41dcec2','2018-12-15 15:50:36'),(6,'123',0.00,'2022-03-25 00:00:00',0.00,'123',0,'158a23f5ed31ce34ed0703fca13137ac','2018-12-15 15:53:54'),(7,'123',0.00,'2022-03-25 00:00:00',0.00,'123',0,'70bcc84ba6b21607d120df601fd4fdbc','2018-12-15 15:55:21'),(8,'123',0.00,'2022-03-25 00:00:00',0.00,'123',0,'a643441de3ac0d1b156f9860e3330c64','2018-12-15 15:58:37'),(9,'123',0.00,'2022-03-25 00:00:00',0.00,'123',0,'1cf3e942a217948a400cd26890b71eee','2018-12-15 15:59:04');
/*!40000 ALTER TABLE `emmm_coupon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_couponlist`
--

DROP TABLE IF EXISTS `emmm_couponlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_couponlist` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Couponid` int(11) NOT NULL DEFAULT '0',
  `COL_Username` varchar(255) NOT NULL DEFAULT '',
  `COL_Type` int(11) NOT NULL DEFAULT '0',
  `COL_Timewin` datetime DEFAULT NULL,
  `COL_Moneygo` decimal(10,2) NOT NULL DEFAULT '0.00',
  `COL_Md` varchar(255) NOT NULL DEFAULT '',
  `COL_Time` datetime DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_couponlist`
--

LOCK TABLES `emmm_couponlist` WRITE;
/*!40000 ALTER TABLE `emmm_couponlist` DISABLE KEYS */;
/*!40000 ALTER TABLE `emmm_couponlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_down`
--

DROP TABLE IF EXISTS `emmm_down`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_down` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Downtitle` varchar(255) NOT NULL DEFAULT '',
  `time` datetime DEFAULT NULL,
  `COL_Downimg` text,
  `COL_Downdurl` text,
  `COL_Downcontent` text,
  `COL_Downempower` varchar(255) NOT NULL DEFAULT '',
  `COL_Downtype` varchar(255) NOT NULL DEFAULT '',
  `COL_Downlang` varchar(255) NOT NULL DEFAULT '',
  `COL_Downsize` varchar(255) NOT NULL DEFAULT '',
  `COL_Class` int(11) NOT NULL DEFAULT '0',
  `COL_Lang` varchar(255) NOT NULL DEFAULT '',
  `COL_Downmake` varchar(255) NOT NULL DEFAULT '',
  `COL_Downsetup` varchar(255) NOT NULL DEFAULT '',
  `COL_Tag` varchar(255) NOT NULL DEFAULT '',
  `COL_Downrights` varchar(255) NOT NULL DEFAULT '',
  `COL_Sorting` int(11) NOT NULL DEFAULT '0',
  `COL_Attribute` varchar(255) NOT NULL DEFAULT '',
  `COL_Url` varchar(255) NOT NULL DEFAULT '',
  `COL_Description` text,
  `COL_Click` int(11) NOT NULL DEFAULT '0',
  `COL_Random` text,
  `COL_Callback` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `COL_Class` (`COL_Class`),
  KEY `COL_Callback` (`COL_Callback`),
  KEY `COL_Lang` (`COL_Lang`),
  KEY `COL_Attribute` (`COL_Attribute`),
  KEY `COL_Downtitle` (`COL_Downtitle`),
  KEY `COL_Sorting` (`COL_Sorting`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_down`
--

LOCK TABLES `emmm_down` WRITE;
/*!40000 ALTER TABLE `emmm_down` DISABLE KEYS */;
/*!40000 ALTER TABLE `emmm_down` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_freight`
--

DROP TABLE IF EXISTS `emmm_freight`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_freight` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Freightname` varchar(255) NOT NULL DEFAULT '',
  `COL_Freighttext` text,
  `COL_Freightdefault` int(11) NOT NULL DEFAULT '0',
  `COL_Freightweight` int(11) NOT NULL DEFAULT '0',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_freight`
--

LOCK TABLES `emmm_freight` WRITE;
/*!40000 ALTER TABLE `emmm_freight` DISABLE KEYS */;
INSERT INTO `emmm_freight` VALUES (1,'包邮模板(官方默认)','0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0',1,0,NULL);
/*!40000 ALTER TABLE `emmm_freight` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_integral`
--

DROP TABLE IF EXISTS `emmm_integral`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_integral` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Iid` int(11) NOT NULL DEFAULT '0',
  `COL_Iname` varchar(255) NOT NULL DEFAULT '',
  `COL_Imarket` decimal(10,2) NOT NULL DEFAULT '0.00',
  `COL_Iwebmarket` decimal(10,2) NOT NULL DEFAULT '0.00',
  `COL_Iintegral` decimal(10,2) NOT NULL DEFAULT '0.00',
  `COL_Ivirtual` int(11) NOT NULL DEFAULT '0',
  `COL_Iconfirm` int(11) NOT NULL DEFAULT '0',
  `COL_Iuseremail` varchar(255) NOT NULL DEFAULT '',
  `COL_Iadmin` int(11) NOT NULL DEFAULT '0',
  `COL_ITime` varchar(255) NOT NULL DEFAULT '',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_integral`
--

LOCK TABLES `emmm_integral` WRITE;
/*!40000 ALTER TABLE `emmm_integral` DISABLE KEYS */;
/*!40000 ALTER TABLE `emmm_integral` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_job`
--

DROP TABLE IF EXISTS `emmm_job`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_job` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Jobtitle` varchar(255) NOT NULL DEFAULT '',
  `time` datetime DEFAULT NULL,
  `COL_Jobwork` varchar(255) NOT NULL DEFAULT '',
  `COL_Jobadd` varchar(255) NOT NULL DEFAULT '',
  `COL_Jobnature` varchar(255) NOT NULL DEFAULT '',
  `COL_Jobexperience` varchar(255) NOT NULL DEFAULT '',
  `COL_Jobeducation` varchar(255) NOT NULL DEFAULT '',
  `COL_Jobnumber` varchar(255) NOT NULL DEFAULT '',
  `COL_Jobage` varchar(255) NOT NULL DEFAULT '',
  `COL_Jobwelfare` varchar(255) NOT NULL DEFAULT '',
  `COL_Jobwage` varchar(255) NOT NULL DEFAULT '',
  `COL_Jobcontact` varchar(255) NOT NULL DEFAULT '',
  `COL_Jobtel` varchar(255) NOT NULL DEFAULT '',
  `COL_Jobcontent` text,
  `COL_Class` int(11) NOT NULL DEFAULT '0',
  `COL_Lang` varchar(255) NOT NULL DEFAULT '',
  `COL_Tag` varchar(255) NOT NULL DEFAULT '',
  `COL_Sorting` int(11) NOT NULL DEFAULT '0',
  `COL_Attribute` varchar(255) NOT NULL DEFAULT '',
  `COL_Url` varchar(255) NOT NULL DEFAULT '',
  `COL_Description` text,
  `COL_Click` int(11) NOT NULL DEFAULT '0',
  `COL_Callback` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `COL_Class` (`COL_Class`),
  KEY `COL_Callback` (`COL_Callback`),
  KEY `COL_Lang` (`COL_Lang`),
  KEY `COL_Attribute` (`COL_Attribute`),
  KEY `COL_Jobtitle` (`COL_Jobtitle`),
  KEY `COL_Sorting` (`COL_Sorting`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_job`
--

LOCK TABLES `emmm_job` WRITE;
/*!40000 ALTER TABLE `emmm_job` DISABLE KEYS */;
INSERT INTO `emmm_job` VALUES (2,'123','2018-12-15 15:35:01','123','123','123','123','123','123','123','123','123','123','123','123',8,'cn','123',99,'0','123','123',0,0),(3,'123','2018-12-15 15:40:22','123','123','123','123','123','123','123','123','123','123','123','123',8,'cn','123',99,'0','123','123',0,0),(4,'123','2018-12-15 15:44:52','123','123','123','123','123','123','123','123','123','123','123','123',8,'cn','123',99,'0','123','123',0,0),(5,'123','2018-12-15 15:50:36','123','123','123','123','123','123','123','123','123','123','123','123',8,'cn','123',99,'0','123','123',0,0),(6,'123','2018-12-15 15:53:54','123','123','123','123','123','123','123','123','123','123','123','123',8,'cn','123',99,'0','123','123',0,0),(7,'123','2018-12-15 15:55:21','123','123','123','123','123','123','123','123','123','123','123','123',8,'cn','123',99,'0','123','123',0,0),(8,'123','2018-12-15 15:58:36','123','123','123','123','123','123','123','123','123','123','123','123',8,'cn','123',99,'0','123','123',0,0),(9,'123','2018-12-15 15:59:04','123','123','123','123','123','123','123','123','123','123','123','123',8,'cn','123',99,'0','123','123',0,0);
/*!40000 ALTER TABLE `emmm_job` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_lang`
--

DROP TABLE IF EXISTS `emmm_lang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_lang` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Lang` varchar(255) NOT NULL DEFAULT '',
  `COL_Font` varchar(255) NOT NULL DEFAULT '',
  `COL_Default` varchar(255) NOT NULL DEFAULT '',
  `COL_Note` varchar(255) NOT NULL DEFAULT '',
  `COL_Langtitle` varchar(255) NOT NULL DEFAULT '',
  `COL_Langkeywords` text,
  `COL_Langdescription` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_lang`
--

LOCK TABLES `emmm_lang` WRITE;
/*!40000 ALTER TABLE `emmm_lang` DISABLE KEYS */;
INSERT INTO `emmm_lang` VALUES (1,'cn','中文','Default','中文语言唯一标识','','','');
/*!40000 ALTER TABLE `emmm_lang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_link`
--

DROP TABLE IF EXISTS `emmm_link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_link` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Linkname` varchar(255) NOT NULL DEFAULT '',
  `COL_Linkurl` varchar(255) NOT NULL DEFAULT '',
  `COL_Linkclass` varchar(255) NOT NULL DEFAULT '',
  `COL_Linkimg` text,
  `COL_Linksorting` int(11) NOT NULL DEFAULT '0',
  `COL_Linkstate` int(11) NOT NULL DEFAULT '0',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_link`
--

LOCK TABLES `emmm_link` WRITE;
/*!40000 ALTER TABLE `emmm_link` DISABLE KEYS */;
INSERT INTO `emmm_link` VALUES (1,'Emmm','http://vidar.club','font','http://',99,1,'2014-12-07 17:49:10'),(2,'YidaCMS','http://yidacms.com','font','http://',99,1,'2014-12-07 17:49:10');
/*!40000 ALTER TABLE `emmm_link` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_mail`
--

DROP TABLE IF EXISTS `emmm_mail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_mail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Mailsmtp` varchar(255) NOT NULL DEFAULT '',
  `COL_Mailport` int(11) NOT NULL DEFAULT '0',
  `COL_Mailusermail` varchar(255) NOT NULL DEFAULT '',
  `COL_Mailuser` varchar(255) NOT NULL DEFAULT '',
  `COL_Mailpass` varchar(255) NOT NULL DEFAULT '',
  `COL_Mailsubject` varchar(255) NOT NULL DEFAULT '',
  `COL_Mailcontent` text,
  `COL_Mailtype` varchar(255) NOT NULL DEFAULT '',
  `COL_Mailtitle` varchar(255) NOT NULL DEFAULT '',
  `COL_Mailclass` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_mail`
--

LOCK TABLES `emmm_mail` WRITE;
/*!40000 ALTER TABLE `emmm_mail` DISABLE KEYS */;
INSERT INTO `emmm_mail` VALUES (1,'smtp.qq.com',25,'993141000@qq.com','993141000','123456','这是一封测试邮件','测试内容','HTML','注册会员邮件提醒',2),(2,'smtp.qq.com',25,'993141000@qq.com','993141000','123456','这是一封测试邮件','测试内容','HTML','提交订单邮件提醒',2),(3,'smtp.qq.com',25,'993141000@qq.com','993141000','123456','这是一封测试邮件','测试内容','HTML','后台发货邮件提醒',2),(4,'smtp.qq.com',25,'993141000@qq.com','993141000','123456','您的会员注册验证码','验证码：#opcms#code#','HTML','用户注册邮件验证码',2);
/*!40000 ALTER TABLE `emmm_mail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_orders`
--

DROP TABLE IF EXISTS `emmm_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Ordersname` text,
  `COL_Ordersid` int(11) NOT NULL DEFAULT '0',
  `COL_Ordersnum` int(11) NOT NULL DEFAULT '0',
  `COL_Ordersemail` varchar(255) NOT NULL DEFAULT '',
  `COL_Ordersusername` varchar(255) NOT NULL DEFAULT '',
  `COL_Ordersusertel` varchar(255) NOT NULL DEFAULT '',
  `COL_Ordersuseradd` text,
  `COL_Ordersusetext` text,
  `COL_Ordersproductatt` text,
  `COL_Orderswebmarket` decimal(10,2) NOT NULL DEFAULT '0.00',
  `COL_Ordersusermarket` decimal(10,2) NOT NULL DEFAULT '0.00',
  `COL_Ordersweight` int(11) NOT NULL DEFAULT '1',
  `COL_Ordersfreight` int(11) NOT NULL DEFAULT '1',
  `COL_Ordersexpress` varchar(255) NOT NULL DEFAULT '',
  `COL_Ordersexpressnum` varchar(255) NOT NULL DEFAULT '',
  `time` datetime DEFAULT NULL,
  `COL_Ordersnumber` varchar(255) NOT NULL DEFAULT '',
  `COL_Orderspay` int(11) NOT NULL DEFAULT '1',
  `COL_Orderssend` int(11) NOT NULL DEFAULT '1',
  `COL_Ordersgotime` datetime DEFAULT NULL,
  `COL_Integralok` int(11) NOT NULL DEFAULT '0',
  `COL_Sign` int(11) NOT NULL DEFAULT '0',
  `COL_Ordersclassid` int(11) NOT NULL DEFAULT '0',
  `COL_Ordersadminoper` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `COL_Ordersid` (`COL_Ordersid`),
  KEY `COL_Ordersemail` (`COL_Ordersemail`),
  KEY `COL_Ordersnumber` (`COL_Ordersnumber`),
  KEY `COL_Orderspay` (`COL_Orderspay`),
  KEY `COL_Orderssend` (`COL_Orderssend`),
  KEY `COL_Sign` (`COL_Sign`),
  KEY `COL_Ordersclassid` (`COL_Ordersclassid`),
  KEY `COL_Ordersadminoper` (`COL_Ordersadminoper`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_orders`
--

LOCK TABLES `emmm_orders` WRITE;
/*!40000 ALTER TABLE `emmm_orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `emmm_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_orderslist`
--

DROP TABLE IF EXISTS `emmm_orderslist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_orderslist` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Ordersnum` varchar(255) NOT NULL DEFAULT '',
  `COL_Ordersid` varchar(255) NOT NULL DEFAULT '',
  `COL_Ordersusername` varchar(255) NOT NULL DEFAULT '',
  `COL_Ordersusertel` varchar(255) NOT NULL DEFAULT '',
  `COL_Ordersuseradd` varchar(255) NOT NULL DEFAULT '',
  `COL_Orderscouponmoney` decimal(10,2) NOT NULL DEFAULT '0.00',
  `COL_Orderscouponid` int(11) NOT NULL DEFAULT '0',
  `COL_Ordersuser` varchar(255) NOT NULL DEFAULT '',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_orderslist`
--

LOCK TABLES `emmm_orderslist` WRITE;
/*!40000 ALTER TABLE `emmm_orderslist` DISABLE KEYS */;
/*!40000 ALTER TABLE `emmm_orderslist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_photo`
--

DROP TABLE IF EXISTS `emmm_photo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_photo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Phototitle` varchar(255) NOT NULL DEFAULT '',
  `time` datetime DEFAULT NULL,
  `COL_Photocminimg` varchar(255) NOT NULL DEFAULT '',
  `COL_Photoimg` text,
  `COL_Photocontent` text,
  `COL_Class` int(11) NOT NULL DEFAULT '0',
  `COL_Lang` varchar(255) NOT NULL DEFAULT '',
  `COL_Tag` varchar(255) NOT NULL DEFAULT '',
  `COL_Sorting` int(11) NOT NULL DEFAULT '0',
  `COL_Attribute` varchar(255) NOT NULL DEFAULT '',
  `COL_Url` varchar(255) NOT NULL DEFAULT '',
  `COL_Description` text,
  `COL_Click` int(11) NOT NULL DEFAULT '0',
  `COL_Callback` int(11) NOT NULL DEFAULT '0',
  `COL_Photoname` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `COL_Class` (`COL_Class`),
  KEY `COL_Callback` (`COL_Callback`),
  KEY `COL_Lang` (`COL_Lang`),
  KEY `COL_Attribute` (`COL_Attribute`),
  KEY `COL_Phototitle` (`COL_Phototitle`),
  KEY `COL_Sorting` (`COL_Sorting`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_photo`
--

LOCK TABLES `emmm_photo` WRITE;
/*!40000 ALTER TABLE `emmm_photo` DISABLE KEYS */;
INSERT INTO `emmm_photo` VALUES (1,'测试01','2014-12-09 16:25:29','function/uploadfile/emmm888/ph1.jpg','','测试02',5,'cn','',99,'','','测试02',0,0,''),(2,'测试02','2014-12-09 16:25:29','function/uploadfile/emmm888/ph1.jpg','','测试02',5,'cn','',99,'','','测试02',0,0,''),(3,'测试03','2014-12-09 16:25:29','function/uploadfile/emmm888/ph1.jpg','','测试02',5,'cn','',99,'','','测试02',0,0,''),(4,'测试04','2014-12-09 16:25:29','function/uploadfile/emmm888/ph1.jpg','','测试02',5,'cn','',99,'','','测试02',0,0,''),(5,'测试05','2014-12-09 16:25:29','function/uploadfile/emmm888/ph1.jpg','','测试02',5,'cn','',99,'','','测试02',0,0,'');
/*!40000 ALTER TABLE `emmm_photo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_plus`
--

DROP TABLE IF EXISTS `emmm_plus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_plus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Name` varchar(255) NOT NULL DEFAULT '',
  `COL_Version` varchar(255) NOT NULL DEFAULT '',
  `COL_Versiondate` varchar(255) NOT NULL DEFAULT '',
  `COL_Author` varchar(255) NOT NULL DEFAULT '',
  `COL_Fraction` varchar(255) NOT NULL DEFAULT '',
  `COL_About` text,
  `COL_Pluspath` text,
  `COL_Time` date DEFAULT NULL,
  `COL_Off` int(11) NOT NULL DEFAULT '1',
  `COL_Plugid` varchar(255) NOT NULL DEFAULT '',
  `COL_Plugclass` varchar(255) NOT NULL DEFAULT '',
  `COL_Plugmysql` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_plus`
--

LOCK TABLES `emmm_plus` WRITE;
/*!40000 ALTER TABLE `emmm_plus` DISABLE KEYS */;
/*!40000 ALTER TABLE `emmm_plus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_product`
--

DROP TABLE IF EXISTS `emmm_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Class` int(11) NOT NULL DEFAULT '0',
  `COL_Lang` varchar(255) NOT NULL DEFAULT '',
  `COL_Title` varchar(255) NOT NULL DEFAULT '',
  `COL_Number` varchar(255) NOT NULL DEFAULT '',
  `COL_Goodsno` varchar(255) NOT NULL DEFAULT '',
  `COL_Brand` varchar(255) NOT NULL DEFAULT '',
  `COL_Market` decimal(10,2) NOT NULL DEFAULT '0.00',
  `COL_Webmarket` decimal(10,2) NOT NULL DEFAULT '0.00',
  `COL_Stock` int(11) NOT NULL DEFAULT '0',
  `COL_Usermoney` text,
  `COL_Specificationsid` varchar(255) NOT NULL DEFAULT '',
  `COL_Specificationstitle` text,
  `COL_Specifications` text,
  `COL_Pattribute` text,
  `COL_Minimg` varchar(255) NOT NULL DEFAULT '',
  `COL_Maximg` varchar(255) NOT NULL DEFAULT '',
  `COL_Img` text,
  `COL_Content` text,
  `COL_Down` int(11) NOT NULL DEFAULT '0',
  `COL_Weight` int(11) NOT NULL DEFAULT '1',
  `COL_Freight` int(11) NOT NULL DEFAULT '1',
  `COL_Tag` varchar(255) NOT NULL DEFAULT '',
  `COL_Sorting` int(11) NOT NULL DEFAULT '0',
  `COL_Attribute` varchar(255) NOT NULL DEFAULT '',
  `COL_Url` varchar(255) NOT NULL DEFAULT '',
  `COL_Description` text,
  `COL_Click` int(11) NOT NULL DEFAULT '0',
  `time` datetime DEFAULT NULL,
  `COL_Integral` decimal(10,2) NOT NULL DEFAULT '0.00',
  `COL_Integralok` int(11) NOT NULL DEFAULT '0',
  `COL_Integralexchange` decimal(10,2) NOT NULL DEFAULT '0.00',
  `COL_Suggest` varchar(255) NOT NULL DEFAULT '',
  `COL_Productimgname` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `COL_Class` (`COL_Class`),
  KEY `COL_Down` (`COL_Down`),
  KEY `COL_Lang` (`COL_Lang`),
  KEY `COL_Attribute` (`COL_Attribute`),
  KEY `COL_Brand` (`COL_Brand`),
  KEY `COL_Sorting` (`COL_Sorting`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_product`
--

LOCK TABLES `emmm_product` WRITE;
/*!40000 ALTER TABLE `emmm_product` DISABLE KEYS */;
INSERT INTO `emmm_product` VALUES (1,12,'cn','测试01','OP20141209155321','OP20141209155321','',0.00,0.00,100,'1:0.00|2:0.00|3:0.00|4:0.00|5:0.00','','','','','function/uploadfile/emmm888/pr1.jpg','function/uploadfile/emmm888/ph1.jpg','','',2,1,1,'',99,'','','',0,'2014-12-09 15:54:05',0.00,0,0.00,'',''),(2,12,'cn','测试02','OP20141209155321','OP20141209155321','',0.00,0.00,100,'1:0.00|2:0.00|3:0.00|4:0.00|5:0.00','','','','','function/uploadfile/emmm888/pr1.jpg','function/uploadfile/emmm888/ph1.jpg','','',2,1,1,'',99,'','','',0,'2014-12-09 15:54:05',0.00,0,0.00,'',''),(3,12,'cn','测试03','OP20141209155321','OP20141209155321','',0.00,0.00,100,'1:0.00|2:0.00|3:0.00|4:0.00|5:0.00','','','','','function/uploadfile/emmm888/pr1.jpg','function/uploadfile/emmm888/ph1.jpg','','',2,1,1,'',99,'','','',0,'2014-12-09 15:54:05',0.00,0,0.00,'',''),(4,12,'cn','测试04','OP20141209155321','OP20141209155321','',0.00,0.00,100,'1:0.00|2:0.00|3:0.00|4:0.00|5:0.00','','','','','function/uploadfile/emmm888/pr1.jpg','function/uploadfile/emmm888/ph1.jpg','','',2,1,1,'',99,'','','',0,'2014-12-09 15:54:05',0.00,0,0.00,'',''),(5,12,'cn','测试05','OP20141209155321','OP20141209155321','',0.00,0.00,100,'1:0.00|2:0.00|3:0.00|4:0.00|5:0.00','','','','','function/uploadfile/emmm888/pr1.jpg','function/uploadfile/emmm888/ph1.jpg','','',2,1,1,'',99,'','','',0,'2014-12-09 15:54:05',0.00,0,0.00,'',''),(6,12,'cn','测试06','OP20141209155321','OP20141209155321','',0.00,0.00,100,'1:0.00|2:0.00|3:0.00|4:0.00|5:0.00','','','','','function/uploadfile/emmm888/pr1.jpg','function/uploadfile/emmm888/ph1.jpg','','',2,1,1,'',99,'','','',0,'2014-12-09 15:54:05',0.00,0,0.00,'',''),(7,12,'cn','测试07','OP20141209155321','OP20141209155321','',0.00,0.00,100,'1:0.00|2:0.00|3:0.00|4:0.00|5:0.00','','','','','function/uploadfile/emmm888/pr1.jpg','function/uploadfile/emmm888/ph1.jpg','','',2,1,1,'',99,'','','',0,'2014-12-09 15:54:05',0.00,0,0.00,'',''),(8,12,'cn','测试08','OP20141209155321','OP20141209155321','',0.00,0.00,100,'1:0.00|2:0.00|3:0.00|4:0.00|5:0.00','','','','','function/uploadfile/emmm888/pr1.jpg','function/uploadfile/emmm888/ph1.jpg','','',2,1,1,'',99,'','','',0,'2014-12-09 15:54:05',0.00,0,0.00,'','');
/*!40000 ALTER TABLE `emmm_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_productattribute`
--

DROP TABLE IF EXISTS `emmm_productattribute`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_productattribute` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Title` varchar(255) NOT NULL DEFAULT '',
  `COL_Class` varchar(255) NOT NULL DEFAULT '',
  `COL_Text` text,
  `COL_Sorting` int(11) NOT NULL DEFAULT '0',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_productattribute`
--

LOCK TABLES `emmm_productattribute` WRITE;
/*!40000 ALTER TABLE `emmm_productattribute` DISABLE KEYS */;
INSERT INTO `emmm_productattribute` VALUES (1,'电脑系列','0','',99,'2015-01-01 12:00:00'),(2,'硬盘容量','1','500G|800G|1T',99,'2015-01-01 12:00:00'),(3,'内存容量','1','1G|2G|3G',99,'2015-01-01 12:00:00');
/*!40000 ALTER TABLE `emmm_productattribute` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_productcp`
--

DROP TABLE IF EXISTS `emmm_productcp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_productcp` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Vender` varchar(255) NOT NULL DEFAULT '',
  `COL_Brand` varchar(255) NOT NULL DEFAULT '',
  `COL_Class` int(11) NOT NULL DEFAULT '0',
  `COL_Img` varchar(255) NOT NULL DEFAULT '',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_productcp`
--

LOCK TABLES `emmm_productcp` WRITE;
/*!40000 ALTER TABLE `emmm_productcp` DISABLE KEYS */;
/*!40000 ALTER TABLE `emmm_productcp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_productset`
--

DROP TABLE IF EXISTS `emmm_productset`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_productset` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Pattern` int(11) NOT NULL DEFAULT '0',
  `COL_Scheme` int(11) NOT NULL DEFAULT '0',
  `COL_Stock` int(11) NOT NULL DEFAULT '0',
  `COL_buy` int(11) NOT NULL DEFAULT '0',
  `COL_Sendout` text,
  `time` datetime DEFAULT NULL,
  `COL_Delivery` int(11) NOT NULL DEFAULT '0',
  `COL_Userbuysms` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_productset`
--

LOCK TABLES `emmm_productset` WRITE;
/*!40000 ALTER TABLE `emmm_productset` DISABLE KEYS */;
INSERT INTO `emmm_productset` VALUES (1,2,1,100,2,'','2015-01-01 12:00:00',0,0);
/*!40000 ALTER TABLE `emmm_productset` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_productspecifications`
--

DROP TABLE IF EXISTS `emmm_productspecifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_productspecifications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Title` varchar(255) NOT NULL DEFAULT '',
  `COL_Titleto` varchar(255) NOT NULL DEFAULT '',
  `COL_Value` text,
  `COL_Class` int(11) NOT NULL DEFAULT '0',
  `COL_Img` varchar(255) NOT NULL DEFAULT '',
  `COL_Sorting` int(11) NOT NULL DEFAULT '0',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_productspecifications`
--

LOCK TABLES `emmm_productspecifications` WRITE;
/*!40000 ALTER TABLE `emmm_productspecifications` DISABLE KEYS */;
INSERT INTO `emmm_productspecifications` VALUES (1,'尺码','女鞋','36|37|38|39',1,'',99,'2015-01-01 12:00:00'),(2,'颜色','女鞋','红色|白色|黑色',1,'',99,'2015-01-01 12:00:00');
/*!40000 ALTER TABLE `emmm_productspecifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_qq`
--

DROP TABLE IF EXISTS `emmm_qq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_qq` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_QQname` varchar(255) NOT NULL DEFAULT '',
  `COL_QQnumber` varchar(255) NOT NULL DEFAULT '',
  `COL_QQclass` varchar(255) NOT NULL DEFAULT '',
  `COL_QQsorting` int(11) NOT NULL DEFAULT '0',
  `COL_QQother` varchar(255) NOT NULL DEFAULT '',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_qq`
--

LOCK TABLES `emmm_qq` WRITE;
/*!40000 ALTER TABLE `emmm_qq` DISABLE KEYS */;
/*!40000 ALTER TABLE `emmm_qq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_search`
--

DROP TABLE IF EXISTS `emmm_search`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_search` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Searchtext` text,
  `COL_Searchclick` int(11) NOT NULL DEFAULT '0',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_search`
--

LOCK TABLES `emmm_search` WRITE;
/*!40000 ALTER TABLE `emmm_search` DISABLE KEYS */;
/*!40000 ALTER TABLE `emmm_search` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_shoppingcart`
--

DROP TABLE IF EXISTS `emmm_shoppingcart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_shoppingcart` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Shopproductid` int(11) NOT NULL DEFAULT '0',
  `COL_Shopnum` int(11) NOT NULL DEFAULT '0',
  `COL_Shopusername` varchar(255) NOT NULL DEFAULT '',
  `COL_Shopatt` text,
  `COL_Shopkc` varchar(255) NOT NULL DEFAULT '',
  `COL_Shophh` varchar(255) NOT NULL DEFAULT '',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_shoppingcart`
--

LOCK TABLES `emmm_shoppingcart` WRITE;
/*!40000 ALTER TABLE `emmm_shoppingcart` DISABLE KEYS */;
INSERT INTO `emmm_shoppingcart` VALUES (1,8,1,'sdbUnBRxwD@LFzJefEkSo.com','','100','OP20141209155321','2018-12-15 15:34:25'),(2,8,1,'NYTqvbVgwz@aEeSozfnCU.com','','100','OP20141209155321','2018-12-15 15:35:01'),(3,8,1,'uwrTfsneYN@AMHQrVEmBx.com','','100','OP20141209155321','2018-12-15 15:44:52'),(4,8,1,'iUYDxzoaQZ@RbsGTcgBQj.com','','100','OP20141209155321','2018-12-15 15:53:54'),(5,8,1,'igSbhXkRaT@lMHoOLKUvw.com','','100','OP20141209155321','2018-12-15 15:55:21'),(6,8,1,'pkqiJWIztr@xaTVtCcSbK.com','','100','OP20141209155321','2018-12-15 15:58:36'),(7,8,1,'dGvBgDzmQY@qdmACbTaQP.com','','100','OP20141209155321','2018-12-15 15:59:04');
/*!40000 ALTER TABLE `emmm_shoppingcart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_temp`
--

DROP TABLE IF EXISTS `emmm_temp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_temp` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Temppath` varchar(255) NOT NULL DEFAULT '',
  `COL_Tempauthor` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_temp`
--

LOCK TABLES `emmm_temp` WRITE;
/*!40000 ALTER TABLE `emmm_temp` DISABLE KEYS */;
INSERT INTO `emmm_temp` VALUES (1,'default','emmm!');
/*!40000 ALTER TABLE `emmm_temp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_user`
--

DROP TABLE IF EXISTS `emmm_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Useremail` varchar(255) NOT NULL DEFAULT '',
  `COL_Userpass` varchar(255) NOT NULL DEFAULT '',
  `COL_Username` varchar(255) NOT NULL DEFAULT '',
  `COL_Usertel` varchar(255) NOT NULL DEFAULT '',
  `COL_Userqq` varchar(255) NOT NULL DEFAULT '',
  `COL_Userskype` varchar(255) NOT NULL DEFAULT '',
  `COL_Useraliww` varchar(255) NOT NULL DEFAULT '',
  `COL_Useradd` varchar(255) NOT NULL DEFAULT '',
  `COL_Userimage` varchar(255) NOT NULL DEFAULT '',
  `COL_Userclass` int(11) NOT NULL DEFAULT '0',
  `COL_Usersource` varchar(255) NOT NULL DEFAULT '',
  `COL_Userhead` varchar(255) NOT NULL DEFAULT '',
  `COL_Usermoney` decimal(10,2) NOT NULL DEFAULT '0.00',
  `COL_Userintegral` decimal(10,2) NOT NULL DEFAULT '0.00',
  `COL_Userip` varchar(255) NOT NULL DEFAULT '',
  `COL_Userproblem` varchar(255) NOT NULL DEFAULT '',
  `COL_Useranswer` varchar(255) NOT NULL DEFAULT '',
  `COL_Userstatus` int(11) NOT NULL DEFAULT '0',
  `COL_Usertext` text,
  `logintime` datetime DEFAULT NULL,
  `COL_Usercode` varchar(255) NOT NULL DEFAULT '',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `COL_Useremail` (`COL_Useremail`),
  KEY `COL_Userpass` (`COL_Userpass`),
  KEY `COL_Usertel` (`COL_Usertel`),
  KEY `COL_Userstatus` (`COL_Userstatus`),
  KEY `COL_Usercode` (`COL_Usercode`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_user`
--

LOCK TABLES `emmm_user` WRITE;
/*!40000 ALTER TABLE `emmm_user` DISABLE KEYS */;
-- INSERT INTO `emmm_user` VALUES (1, 'a@a.com', '14e1b600b1fd579f', '', 'a@a.com', '', '', '', '', 1, '', '', 0.00, 0.00, '::1', '', '', 1, NULL, NULL, 'niu4klvrz47avje44y20181214183451', '2018-12-14 18:34:51');
INSERT INTO `emmm_user` VALUES (1,'sdbUnBRxwD@LFzJefEkSo.com','d9b1d7db4cd6e709','123','13895372018','123','123','123','123','../../skin/zcgoUibklt.png',1,'','',0.00,0.00,'127.0.0.1','你自已的生日？','123',1,'123',NULL,'wtll4fuseapjjm991j20181215153425','2018-12-15 15:34:25'),(2,'NYTqvbVgwz@aEeSozfnCU.com','d9b1d7db4cd6e709','123','13338745106','123','123','123','123','../../skin/KECnXjxqkH.png',1,'','',0.00,0.00,'127.0.0.1','你自已的生日？','123',1,'123',NULL,'2jciklel8lm6xzaygl20181215153501','2018-12-15 15:35:01'),(3,'nexkericwy@gmail.com','14e1b600b1fd579f','','nexkericwy@gmail.com','','','','','../../skin/user.png',1,'','',0.00,0.00,'192.168.13.135','','',1,NULL,NULL,'ajaipfbx12dq2te7ff20181215153807','2018-12-15 15:38:07'),(4,'AfZPDF@hctfcheck.com','14e1b600b1fd579f','','AfZPDF@hctfcheck.com','','','','','../../skin/user.png',1,'','',0.00,0.00,'172.17.0.1','','',1,NULL,NULL,'mttvay7hi5pambup8520181215153954','2018-12-15 15:39:54'),(5,'1@1.com','9db06bcff9248837','1','1','','','','','../../skin/1.php',1,'','',0.00,0.00,'192.168.14.42','你自已的生日？','1',1,'',NULL,'seg67vewnxruy6cem620181215155436','2018-12-15 15:40:02'),(6,'\"ejaNKGLzIB\'\"@jixsNOkyFG.com','14e1b600b1fd579f','','\"ejaNKGLzIB\'\"@jixsNOkyFG.com','','','','','../../skin/user.png',1,'','',0.00,0.00,'127.0.0.1','','',1,NULL,NULL,'8k95ityirof71job3g20181215154022','2018-12-15 15:40:22'),(7,'RUjokB@hctfcheck.com','14e1b600b1fd579f','','RUjokB@hctfcheck.com','','','','','../../skin/user.png',1,'','',0.00,0.00,'172.17.0.1','','',1,NULL,NULL,'11sbvrrhw2798yqmpm20181215154052','2018-12-15 15:40:52'),(8,'AjJfWi@hctfcheck.com','14e1b600b1fd579f','','AjJfWi@hctfcheck.com','','','','','../../skin/user.png',1,'','',0.00,0.00,'172.17.0.1','','',1,NULL,NULL,'ayyio595xzfy3vfae520181215154153','2018-12-15 15:41:53'),(9,'uwrTfsneYN@AMHQrVEmBx.com','d9b1d7db4cd6e709','123','13136470128','123','123','123','123','../../skin/SvLWsflmGY.png',1,'','',0.00,0.00,'127.0.0.1','你自已的生日？','123',1,'123',NULL,'imilserkll9qkn6ryh20181215154452','2018-12-15 15:44:52'),(10,'tCHATf@hctfcheck.com','14e1b600b1fd579f','','tCHATf@hctfcheck.com','','','','','../../skin/user.png',1,'','',0.00,0.00,'172.17.0.1','','',1,NULL,NULL,'4nmg759hbz4qnlftyc20181215154702','2018-12-15 15:47:02'),(11,'xQfOdl@hctfcheck.com','14e1b600b1fd579f','','xQfOdl@hctfcheck.com','','','','','../../skin/user.png',1,'','',0.00,0.00,'172.17.0.1','','',1,NULL,NULL,'dpm47jacvi3srbqsud20181215154803','2018-12-15 15:48:03'),(12,'MGHQWz@hctfcheck.com','14e1b600b1fd579f','','MGHQWz@hctfcheck.com','','','','','../../skin/user.png',1,'','',0.00,0.00,'172.17.0.1','','',1,NULL,NULL,'aemb8uhnn1x8ujwk5s20181215154905','2018-12-15 15:49:05'),(13,'WLkTsh@hctfcheck.com','14e1b600b1fd579f','','WLkTsh@hctfcheck.com','','','','','../../skin/user.png',1,'','',0.00,0.00,'172.17.0.1','','',1,NULL,NULL,'32px9hfj9wd8e73div20181215155006','2018-12-15 15:50:06'),(14,'\"JrxPFlOEyT\'\"@IbScnsOlFP.com','14e1b600b1fd579f','','\"JrxPFlOEyT\'\"@IbScnsOlFP.com','','','','','../../skin/user.png',1,'','',0.00,0.00,'127.0.0.1','','',1,NULL,NULL,'h9c988lg9doqgw00pz20181215155036','2018-12-15 15:50:36'),(15,'CKgaFV@hctfcheck.com','14e1b600b1fd579f','','CKgaFV@hctfcheck.com','','','','','../../skin/user.png',1,'','',0.00,0.00,'172.17.0.1','','',1,NULL,NULL,'jmir43bxzfkq8wk7qk20181215155108','2018-12-15 15:51:08'),(16,'QlNijZ@hctfcheck.com','14e1b600b1fd579f','','QlNijZ@hctfcheck.com','','','','','../../skin/user.png',1,'','',0.00,0.00,'172.17.0.1','','',1,NULL,NULL,'tw8legwabck49dd3po20181215155209','2018-12-15 15:52:09'),(17,'iUYDxzoaQZ@RbsGTcgBQj.com','d9b1d7db4cd6e709','123','15845917862','123','123','123','123','../../skin/bnPMKylIts.png',1,'','',0.00,0.00,'127.0.0.1','你自已的生日？','123',1,'123',NULL,'oqlxfpaghcg7vwjl6v20181215155354','2018-12-15 15:53:54'),(18,'igSbhXkRaT@lMHoOLKUvw.com','d9b1d7db4cd6e709','123','15889065473','123','123','123','123','../../skin/UlhJaGsBTZ.png',1,'','',0.00,0.00,'127.0.0.1','你自已的生日？','123',1,'123',NULL,'dmbdtzc5rhjg08o83z20181215155521','2018-12-15 15:55:21'),(19,'pkqiJWIztr@xaTVtCcSbK.com','d9b1d7db4cd6e709','123','18512638709','123','123','123','123','../../skin/tYFBPHZaeR.png',1,'','',0.00,0.00,'127.0.0.1','你自已的生日？','123',1,'123',NULL,'ve3727azv7f93avosq20181215155836','2018-12-15 15:58:36'),(20,'dGvBgDzmQY@qdmACbTaQP.com','d9b1d7db4cd6e709','123','15765072819','123','123','123','123','../../skin/mdcUCVkGHa.png',1,'','',0.00,0.00,'127.0.0.1','你自已的生日？','123',1,'123',NULL,'rbash34yqbnjs513nc20181215155904','2018-12-15 15:59:04');
/*!40000 ALTER TABLE `emmm_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_usercontrol`
--

DROP TABLE IF EXISTS `emmm_usercontrol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_usercontrol` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Userreg` int(11) NOT NULL DEFAULT '0',
  `COL_Userlogin` int(11) NOT NULL DEFAULT '0',
  `COL_Userprotocol` text,
  `COL_Usergroup` int(11) NOT NULL DEFAULT '0',
  `COL_Usermoney` varchar(255) NOT NULL DEFAULT '',
  `COL_Useripoff` int(11) NOT NULL DEFAULT '0',
  `COL_Regtyle` varchar(255) NOT NULL DEFAULT 'email',
  `COL_Regcode` int(11) NOT NULL DEFAULT '0',
  `COL_Userpassgo` int(11) NOT NULL DEFAULT '0',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_usercontrol`
--

LOCK TABLES `emmm_usercontrol` WRITE;
/*!40000 ALTER TABLE `emmm_usercontrol` DISABLE KEYS */;
INSERT INTO `emmm_usercontrol` VALUES (1,1,1,'欢迎您注册成为[.$emmm_web.website.] 用户！',1,'0|0|0|0',2,'email',0,0,'2015-01-01 12:00:00');
/*!40000 ALTER TABLE `emmm_usercontrol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_userleve`
--

DROP TABLE IF EXISTS `emmm_userleve`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_userleve` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Userlevename` varchar(255) NOT NULL DEFAULT '',
  `COL_Userweight` int(11) NOT NULL DEFAULT '0',
  `COL_Useropen` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_userleve`
--

LOCK TABLES `emmm_userleve` WRITE;
/*!40000 ALTER TABLE `emmm_userleve` DISABLE KEYS */;
INSERT INTO `emmm_userleve` VALUES (1,'普通会员',10,0),(2,'银牌会员',20,0),(3,'金牌会员',30,0),(4,'分销商',40,0),(5,'代理商',50,0);
/*!40000 ALTER TABLE `emmm_userleve` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_usermessage`
--

DROP TABLE IF EXISTS `emmm_usermessage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_usermessage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Usersend` varchar(255) NOT NULL DEFAULT '',
  `COL_Usercollect` varchar(255) NOT NULL DEFAULT '',
  `COL_Usercontent` text,
  `COL_Userclass` int(11) NOT NULL DEFAULT '0',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `COL_Usersend` (`COL_Usersend`),
  KEY `COL_Usercollect` (`COL_Usercollect`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_usermessage`
--

LOCK TABLES `emmm_usermessage` WRITE;
/*!40000 ALTER TABLE `emmm_usermessage` DISABLE KEYS */;
/*!40000 ALTER TABLE `emmm_usermessage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_userpay`
--

DROP TABLE IF EXISTS `emmm_userpay`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_userpay` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Useremail` varchar(255) NOT NULL DEFAULT '',
  `COL_Usermoney` decimal(10,2) NOT NULL DEFAULT '0.00',
  `COL_Userintegral` decimal(10,2) NOT NULL DEFAULT '0.00',
  `COL_Usercontent` text,
  `COL_Useradmin` varchar(255) NOT NULL DEFAULT '',
  `COL_Uservoucherone` varchar(255) NOT NULL DEFAULT '',
  `COL_Uservouchertwo` varchar(255) NOT NULL DEFAULT '',
  `COL_Userpaytype` varchar(255) NOT NULL DEFAULT '',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_userpay`
--

LOCK TABLES `emmm_userpay` WRITE;
/*!40000 ALTER TABLE `emmm_userpay` DISABLE KEYS */;
/*!40000 ALTER TABLE `emmm_userpay` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_userproblem`
--

DROP TABLE IF EXISTS `emmm_userproblem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_userproblem` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Userproblem` varchar(255) NOT NULL DEFAULT '',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_userproblem`
--

LOCK TABLES `emmm_userproblem` WRITE;
/*!40000 ALTER TABLE `emmm_userproblem` DISABLE KEYS */;
INSERT INTO `emmm_userproblem` VALUES (1,'你妈妈的姓名？','2015-01-01 12:00:00'),(2,'你爸爸的姓名？','2015-01-01 12:00:00'),(3,'你老婆的姓名？','2015-01-01 12:00:00'),(4,'你的家乡在哪？','2015-01-01 12:00:00'),(5,'你的大学是哪家学校？','2015-01-01 12:00:00'),(6,'你老婆的生日？','2015-01-01 12:00:00'),(7,'你自已的生日？','2015-01-01 12:00:00');
/*!40000 ALTER TABLE `emmm_userproblem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_usershopadd`
--

DROP TABLE IF EXISTS `emmm_usershopadd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_usershopadd` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Add` varchar(255) NOT NULL DEFAULT '',
  `COL_Addtel` varchar(255) NOT NULL DEFAULT '',
  `COL_Addname` varchar(255) NOT NULL DEFAULT '',
  `COL_Adduser` varchar(255) NOT NULL DEFAULT '',
  `COL_Addindex` int(11) NOT NULL DEFAULT '0',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_usershopadd`
--

LOCK TABLES `emmm_usershopadd` WRITE;
/*!40000 ALTER TABLE `emmm_usershopadd` DISABLE KEYS */;
INSERT INTO `emmm_usershopadd` VALUES (1,'道里区','18767155950','123','sdbUnBRxwD@LFzJefEkSo.com',1,'2018-12-15 15:34:25'),(2,'道里区','18767155950','123','NYTqvbVgwz@aEeSozfnCU.com',1,'2018-12-15 15:35:01'),(3,'道里区','18767155950','123','uwrTfsneYN@AMHQrVEmBx.com',1,'2018-12-15 15:44:52'),(4,'道里区','18767155950','123','iUYDxzoaQZ@RbsGTcgBQj.com',1,'2018-12-15 15:53:54'),(5,'道里区','18767155950','123','igSbhXkRaT@lMHoOLKUvw.com',1,'2018-12-15 15:55:21'),(6,'道里区','18767155950','123','pkqiJWIztr@xaTVtCcSbK.com',1,'2018-12-15 15:58:36'),(7,'道里区','18767155950','123','dGvBgDzmQY@qdmACbTaQP.com',1,'2018-12-15 15:59:04');
/*!40000 ALTER TABLE `emmm_usershopadd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_video`
--

DROP TABLE IF EXISTS `emmm_video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_video` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Videotitle` varchar(255) NOT NULL DEFAULT '',
  `time` datetime DEFAULT NULL,
  `COL_Videoimg` text,
  `COL_Videovurl` text,
  `COL_Videoformat` varchar(255) NOT NULL DEFAULT '',
  `COL_Videowidth` int(11) NOT NULL DEFAULT '0',
  `COL_Videoheight` int(11) NOT NULL DEFAULT '0',
  `COL_Videocontent` text,
  `COL_Class` int(11) NOT NULL DEFAULT '0',
  `COL_Lang` varchar(255) NOT NULL DEFAULT '',
  `COL_Tag` varchar(255) NOT NULL DEFAULT '',
  `COL_Sorting` int(11) NOT NULL DEFAULT '0',
  `COL_Attribute` varchar(255) NOT NULL DEFAULT '',
  `COL_Url` varchar(255) NOT NULL DEFAULT '',
  `COL_Description` text,
  `COL_Click` int(11) NOT NULL DEFAULT '0',
  `COL_Callback` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `COL_Class` (`COL_Class`),
  KEY `COL_Callback` (`COL_Callback`),
  KEY `COL_Lang` (`COL_Lang`),
  KEY `COL_Attribute` (`COL_Attribute`),
  KEY `COL_Videotitle` (`COL_Videotitle`),
  KEY `COL_Sorting` (`COL_Sorting`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_video`
--

LOCK TABLES `emmm_video` WRITE;
/*!40000 ALTER TABLE `emmm_video` DISABLE KEYS */;
/*!40000 ALTER TABLE `emmm_video` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_wap`
--

DROP TABLE IF EXISTS `emmm_wap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_wap` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Website` varchar(255) NOT NULL DEFAULT '',
  `COL_Weblogo` varchar(255) NOT NULL DEFAULT '',
  `COL_Webkeywords` text,
  `COL_Webdescriptions` text,
  `COL_Weburl` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_wap`
--

LOCK TABLES `emmm_wap` WRITE;
/*!40000 ALTER TABLE `emmm_wap` DISABLE KEYS */;
INSERT INTO `emmm_wap` VALUES (1,'我的手机网站','function/uploadfile/emmm888/logo.png','','','yes');
/*!40000 ALTER TABLE `emmm_wap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_watermark`
--

DROP TABLE IF EXISTS `emmm_watermark`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_watermark` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Watermarkimg` varchar(255) NOT NULL DEFAULT '',
  `COL_Watermarkfont` varchar(255) NOT NULL DEFAULT '',
  `COL_Watermarkcolor` varchar(255) NOT NULL DEFAULT '',
  `COL_Watermarksize` varchar(255) NOT NULL DEFAULT '',
  `COL_Watermarkposition` int(11) NOT NULL DEFAULT '0',
  `COL_Watermarkoff` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_watermark`
--

LOCK TABLES `emmm_watermark` WRITE;
/*!40000 ALTER TABLE `emmm_watermark` DISABLE KEYS */;
INSERT INTO `emmm_watermark` VALUES (1,'watermark.png','vidar.club','#000000','5',9,2);
/*!40000 ALTER TABLE `emmm_watermark` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_web`
--

DROP TABLE IF EXISTS `emmm_web`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_web` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Website` varchar(255) NOT NULL DEFAULT '',
  `COL_Weburl` varchar(255) NOT NULL DEFAULT '',
  `COL_Weblogo` varchar(255) NOT NULL DEFAULT '',
  `COL_Webname` varchar(255) NOT NULL DEFAULT '',
  `COL_Webadd` varchar(255) NOT NULL DEFAULT '',
  `COL_Webtel` varchar(255) NOT NULL DEFAULT '',
  `COL_Webmobi` varchar(255) NOT NULL DEFAULT '',
  `COL_Webfax` varchar(255) NOT NULL DEFAULT '',
  `COL_Webemail` varchar(255) NOT NULL DEFAULT '',
  `COL_Webzip` varchar(255) NOT NULL DEFAULT '',
  `COL_Webqq` varchar(255) NOT NULL DEFAULT '',
  `COL_Weblinkman` varchar(255) NOT NULL DEFAULT '',
  `COL_Webicp` varchar(255) NOT NULL DEFAULT '',
  `COL_Webstatistics` text,
  `COL_Webtime` varchar(255) NOT NULL DEFAULT '',
  `COL_Webemmmurl` varchar(255) NOT NULL DEFAULT '',
  `COL_Webemmmcode` text,
  `COL_Webemmmu` text,
  `COL_Webemmmp` text,
  `COL_Websitemin` varchar(255) NOT NULL DEFAULT '',
  `COL_Weixin` varchar(255) NOT NULL DEFAULT '',
  `COL_Weixinerweima` varchar(255) NOT NULL DEFAULT '',
  `COL_Alipayname` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_web`
--

LOCK TABLES `emmm_web` WRITE;
/*!40000 ALTER TABLE `emmm_web` DISABLE KEYS */;
INSERT INTO `emmm_web` VALUES (1,'emmm','192.168.233.40:5003','','','','','','','','','','','','','2018-12-15','','','','','','','','');
/*!40000 ALTER TABLE `emmm_web` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emmm_webdeploy`
--

DROP TABLE IF EXISTS `emmm_webdeploy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emmm_webdeploy` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COL_Weboff` int(11) NOT NULL DEFAULT '0',
  `COL_Webofftext` text,
  `COL_Webrewrite` int(11) NOT NULL DEFAULT '0',
  `COL_Webpage` text,
  `COL_Webkeywords` int(11) NOT NULL DEFAULT '0',
  `COL_Webkeywordsto` text,
  `COL_Webdescriptions` text,
  `COL_Webfenci` int(11) NOT NULL DEFAULT '0',
  `COL_Webservice` varchar(255) NOT NULL DEFAULT '',
  `COL_Webocomment` int(11) NOT NULL DEFAULT '2',
  `COL_Webpcomment` int(11) NOT NULL DEFAULT '2',
  `COL_Webweight` int(11) NOT NULL DEFAULT '1',
  `time` datetime DEFAULT NULL,
  `COL_Webfile` int(11) NOT NULL DEFAULT '1',
  `COL_Ucenter` int(11) NOT NULL DEFAULT '0',
  `COL_Searchtime` int(11) NOT NULL DEFAULT '10',
  `COL_Home` varchar(255) NOT NULL DEFAULT 'cn|cn|cn',
  `COL_Sensitive` text,
  `COL_Bookuser` int(11) NOT NULL DEFAULT '0',
  `COL_Adminrecord` text,
  `COL_Pagestype` int(11) NOT NULL DEFAULT '0',
  `COL_Pages` text NOT NULL,
  `COL_Pagefont` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emmm_webdeploy`
--

LOCK TABLES `emmm_webdeploy` WRITE;
/*!40000 ALTER TABLE `emmm_webdeploy` DISABLE KEYS */;
INSERT INTO `emmm_webdeploy` VALUES (1,1,'',2,'20,20,20,20,20,20,20',1,'Emmm','Emmm',2,'default',2,4,1,'2015-01-01 12:00:00',1,0,10,'cn|cn|cn','傻逼|二货|狗屎|去死',0,'请输入建站备忘事项!',0,'<style type=\"text/css\">.emmm_page { font-size:14px; margin:20px auto 0 auto; float:left; clear:both;}.emmm_page a { padding:8px 15px; float:left; margin-right:10px; border:1px #D1D1D1 solid; background:#f4f4f4; color:#666;}.emmm_page .me { padding:8px 15px; float:left; margin-right:10px; border:1px #f4f4f4 solid; background:#D1D1D1; color:#666; font-weight:bold;}.emmm_page a:hover {background:#D1D1D1; color:#666;}.emmm_dian{ padding:8px 15px; float:left; margin-right:10px; color:#666;}.emmm_page .disabled{ padding:8px 15px; float:left; margin-right:10px; border:1px #f4f4f4 solid; background:#D1D1D1; color:#666;}.emmm_page .disabled2{background:#f4f4f4; color:#666;}</style>','上一页|下一页');
/*!40000 ALTER TABLE `emmm_webdeploy` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-15  7:59:46

CREATE USER 'hctf'@'%' identified by 'hy0bvMgq6j';
GRANT ALL PRIVILEGES ON emmm.* TO 'hctf'@'%';
flush privileges;

CREATE DATABASE flag;
USE flag;

# Dump of table flag
# ------------------------------------------------------------

DROP TABLE IF EXISTS `flag`;

CREATE TABLE `flag` (
  `flag` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `flag` WRITE;
/*!40000 ALTER TABLE `flag` DISABLE KEYS */;

INSERT INTO `flag` (`flag`)
VALUES
	('hctf{84b7833717d6eddd1f8c2ba9c78e497f}');

/*!40000 ALTER TABLE `flag` ENABLE KEYS */;
UNLOCK TABLES;

GRANT SELECT ON flag.* TO 'hctf'@'%';
flush privileges;
