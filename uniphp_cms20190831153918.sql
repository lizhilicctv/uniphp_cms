-- MySQL dump 10.13  Distrib 5.5.53, for Win32 (AMD64)
--
-- Host: localhost    Database: uniphp_cms
-- ------------------------------------------------------
-- Server version	5.5.53

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
-- Table structure for table `lizhili_admin`
--

DROP TABLE IF EXISTS `lizhili_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lizhili_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `in_time` int(11) DEFAULT NULL,
  `up_time` int(11) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `isopen` int(11) NOT NULL DEFAULT '1',
  `mark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lizhili_admin`
--

LOCK TABLES `lizhili_admin` WRITE;
/*!40000 ALTER TABLE `lizhili_admin` DISABLE KEYS */;
INSERT INTO `lizhili_admin` VALUES (1,'admin','a3f17ee3685c44216eed0724f0c717c2',1529570040,1559016242,1,1,'超级管理员,拥有至高无限权利,且不能删除.'),(27,'lizhili','a3f17ee3685c44216eed0724f0c717c2',1532685192,1559046462,2,1,'');
/*!40000 ALTER TABLE `lizhili_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lizhili_adposition`
--

DROP TABLE IF EXISTS `lizhili_adposition`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lizhili_adposition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_title` varchar(150) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `isopen` tinyint(1) DEFAULT NULL,
  `sort` tinyint(3) DEFAULT '0',
  `in_time` int(11) DEFAULT NULL,
  `up_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lizhili_adposition`
--

LOCK TABLES `lizhili_adposition` WRITE;
/*!40000 ALTER TABLE `lizhili_adposition` DISABLE KEYS */;
/*!40000 ALTER TABLE `lizhili_adposition` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lizhili_article`
--

DROP TABLE IF EXISTS `lizhili_article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lizhili_article` (
  `id` mediumint(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) DEFAULT NULL,
  `cateid` mediumint(9) DEFAULT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `desc` varchar(100) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `pic` varchar(160) DEFAULT NULL,
  `editor` text,
  `state` smallint(6) unsigned DEFAULT '0' COMMENT '0代表未推荐,1代表推荐了',
  `click` mediumint(9) DEFAULT '0',
  `zan` mediumint(9) DEFAULT '0',
  `in_time` int(10) DEFAULT NULL,
  `up_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lizhili_article`
--

LOCK TABLES `lizhili_article` WRITE;
/*!40000 ALTER TABLE `lizhili_article` DISABLE KEYS */;
INSERT INTO `lizhili_article` VALUES (42,'Node.js 12.4.0 发布，JSON 文档稳定',4,'node,php,html,css','　　显着的变化　　doc：　　API文档的JSON变体不再是实验性的(Rich Trott)#27842。　　esm：　　始终启用JSON模块支持--experimental-modules。该　　-','',NULL,'&lt;p&gt;　　显着的变化&lt;/p&gt;&lt;p&gt;　　doc：&lt;/p&gt;&lt;p&gt;　　API文档的JSON变体不再是实验性的(Rich Trott)#27842。&lt;/p&gt;&lt;p&gt;　　esm：&lt;/p&gt;&lt;p&gt;　　始终启用JSON模块支持--experimental-modules。该&lt;/p&gt;&lt;p&gt;　　--experimental-json-modules旗帜已被删除(Myles Borins)#27752。&lt;/p&gt;&lt;p&gt;　　http，http2：&lt;/p&gt;&lt;p&gt;　　添加了一个新标志，用于覆盖默认的HTTP服务器套接字&lt;/p&gt;&lt;p&gt;　　超时(两分钟)。通过--http-server-default-timeout=milliseconds&lt;/p&gt;&lt;p&gt;　　或--http-server-default-timeout=0分别更改或禁用超时。&lt;/p&gt;&lt;p&gt;　　从Node.js 13.0.0开始，默认情况下将禁用超时(Ali Ijaz Sheikh)#27704。&lt;/p&gt;&lt;p&gt;　　inspector：&lt;/p&gt;&lt;p&gt;　　添加了一个实验--heap-prof标志，用于&lt;/p&gt;&lt;p&gt;　　在启动时启动V8堆分析器，并在退出之前将堆配置文件写入磁盘(Joyee Cheung)#27596。&lt;/p&gt;&lt;p&gt;　　流：&lt;/p&gt;&lt;p&gt;　　该readable.unshift()方法现在正确地将字符串转换为缓冲区&lt;/p&gt;&lt;p&gt;　　此外，接受新的可选参数来指定字符串的&lt;/p&gt;&lt;p&gt;　　编码，例如&#39;utf8&#39;或&#39;ascii&#39;(Marcos Casagrande)#27194。&lt;/p&gt;&lt;p&gt;　　v8：&lt;/p&gt;&lt;p&gt;　　返回的对象v8.getHeapStatistics()有两个新属性：&lt;/p&gt;&lt;p&gt;　　number_of_native_contexts和number_of_detached_contexts(Yuriy \r\nVasiyarov)#27933。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;',1,0,0,1559787574,1559791682);
/*!40000 ALTER TABLE `lizhili_article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lizhili_auth_access`
--

DROP TABLE IF EXISTS `lizhili_auth_access`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lizhili_auth_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lizhili_auth_access`
--

LOCK TABLES `lizhili_auth_access` WRITE;
/*!40000 ALTER TABLE `lizhili_auth_access` DISABLE KEYS */;
INSERT INTO `lizhili_auth_access` VALUES (1,1),(27,2);
/*!40000 ALTER TABLE `lizhili_auth_access` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lizhili_auth_group`
--

DROP TABLE IF EXISTS `lizhili_auth_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lizhili_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` char(80) NOT NULL DEFAULT '',
  `sort` tinyint(4) DEFAULT '0',
  `desc` varchar(255) DEFAULT NULL,
  `in_time` int(11) DEFAULT NULL,
  `up_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lizhili_auth_group`
--

LOCK TABLES `lizhili_auth_group` WRITE;
/*!40000 ALTER TABLE `lizhili_auth_group` DISABLE KEYS */;
INSERT INTO `lizhili_auth_group` VALUES (1,'超级管理员',1,'',0,'拥有至高无上的权利',NULL,1559037994),(2,'内容发布员',1,'12',0,'只能发布内容',NULL,1559046550);
/*!40000 ALTER TABLE `lizhili_auth_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lizhili_auth_rule`
--

DROP TABLE IF EXISTS `lizhili_auth_rule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lizhili_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `tiao` char(100) NOT NULL DEFAULT '' COMMENT '这个是条件,我修改了,原来是condition,现在是tiao',
  `fid` mediumint(9) DEFAULT '0',
  `level` tinyint(4) DEFAULT '0',
  `sort` int(11) DEFAULT '0',
  `mark` varchar(255) DEFAULT NULL,
  `in_time` int(11) DEFAULT NULL,
  `up_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lizhili_auth_rule`
--

LOCK TABLES `lizhili_auth_rule` WRITE;
/*!40000 ALTER TABLE `lizhili_auth_rule` DISABLE KEYS */;
INSERT INTO `lizhili_auth_rule` VALUES (8,'cate/all','栏目管理',1,1,'',0,0,0,'1111',NULL,1559040889),(9,'cate/add','栏目添加',1,1,'',8,1,0,NULL,NULL,1559040889),(10,'cate/del','栏目删除',1,1,'',8,1,0,NULL,NULL,1559040889),(11,'cate/edit','栏目修改',1,1,'',8,1,0,NULL,NULL,1559040889),(12,'cate/index','栏目查看',1,1,'',8,1,0,NULL,NULL,1559040889),(13,'cate/ajax','栏目ajax',1,1,'',8,1,0,NULL,NULL,1559040889),(14,'article/all','资讯管理',1,1,'',0,0,0,NULL,NULL,1559040889),(15,'article/index','资讯查看',1,1,'',14,1,0,NULL,NULL,1559040889),(16,'article/add','资讯添加',1,1,'',14,1,0,NULL,NULL,1559040889),(17,'article/del','资讯删除',1,1,'',14,1,0,NULL,NULL,1559040889),(18,'article/edit','资讯修改',1,1,'',14,1,0,NULL,NULL,1559040889),(19,'article/ajax','资讯ajax',1,1,'',14,1,0,NULL,NULL,1559040889),(20,'link/all','友情链接',1,1,'',0,0,0,NULL,NULL,1559040889),(21,'link/add','友情链接添加',1,1,'',20,1,0,NULL,NULL,1559040889),(22,'link/del','友情链接删除',1,1,'',20,1,0,NULL,NULL,1559040889),(23,'link/edit','友情链接修改',1,1,'',20,1,0,NULL,NULL,1559040889),(24,'link/index','友情链接查看',1,1,'',20,1,0,NULL,NULL,1559040889),(25,'link/ajax','友情链接ajax',1,1,'',20,1,0,NULL,NULL,1559040889);
/*!40000 ALTER TABLE `lizhili_auth_rule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lizhili_cate`
--

DROP TABLE IF EXISTS `lizhili_cate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lizhili_cate` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `catename` varchar(30) DEFAULT NULL,
  `en_name` varchar(30) DEFAULT NULL,
  `fid` tinyint(4) DEFAULT NULL,
  `type` tinyint(3) DEFAULT NULL COMMENT '1代表是列表，2代表是单页，3代表图片列表',
  `keyword` varchar(255) DEFAULT NULL COMMENT '栏目关键字',
  `template` varchar(255) DEFAULT NULL COMMENT '模版地址文件',
  `mark` varchar(255) DEFAULT NULL,
  `editorValue` text COMMENT '单页的数据',
  `sort` int(11) unsigned NOT NULL DEFAULT '0',
  `up_time` int(11) DEFAULT NULL,
  `in_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lizhili_cate`
--

LOCK TABLES `lizhili_cate` WRITE;
/*!40000 ALTER TABLE `lizhili_cate` DISABLE KEYS */;
INSERT INTO `lizhili_cate` VALUES (1,'关于我','about',0,2,'关于我,李志立',NULL,'',NULL,0,1559700134,1559700134),(2,'学无止境','study',0,3,'',NULL,'',NULL,0,1559701755,1559701755),(4,'慢生活','life',0,1,'',NULL,'',NULL,0,1559701779,1559701779),(5,'留言','message',0,2,'',NULL,'',NULL,0,1559701812,1559701812),(3,'视频学习','video',0,3,'',NULL,'',NULL,0,1559701994,1559701994),(6,'后端学习','back-end',2,3,'','wo/list.php','',NULL,0,1560166626,1559703507),(7,'前端学习','front-end',2,3,'',NULL,'',NULL,0,1559703550,1559703535),(8,'数据库','sql',2,3,'',NULL,'',NULL,0,1559705675,1559705675),(9,'基础学习','basics',3,3,'',NULL,'',NULL,0,1559705827,1559705734),(10,'进阶学习','high',3,3,'',NULL,'',NULL,0,1559705782,1559705782),(11,'实战学习','project',3,3,'',NULL,'',NULL,0,1559705818,1559705818);
/*!40000 ALTER TABLE `lizhili_cate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lizhili_comment`
--

DROP TABLE IF EXISTS `lizhili_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lizhili_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) DEFAULT NULL COMMENT '内容',
  `article_id` int(6) DEFAULT NULL COMMENT '文章id',
  `member_id` int(6) DEFAULT NULL COMMENT '用户id',
  `isopen` tinyint(4) DEFAULT '-1' COMMENT '0是不展示，1是展示，-1是没有审核',
  `in_time` int(11) DEFAULT NULL,
  `up_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lizhili_comment`
--

LOCK TABLES `lizhili_comment` WRITE;
/*!40000 ALTER TABLE `lizhili_comment` DISABLE KEYS */;
INSERT INTO `lizhili_comment` VALUES (13,'的',NULL,NULL,0,NULL,1559101316),(12,'深度',NULL,NULL,0,NULL,1559100831);
/*!40000 ALTER TABLE `lizhili_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lizhili_link`
--

DROP TABLE IF EXISTS `lizhili_link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lizhili_link` (
  `id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `linkurl` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `sort` int(11) DEFAULT '0',
  `in_time` int(11) DEFAULT NULL,
  `up_time` int(11) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL COMMENT '友情链接logo',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lizhili_link`
--

LOCK TABLES `lizhili_link` WRITE;
/*!40000 ALTER TABLE `lizhili_link` DISABLE KEYS */;
INSERT INTO `lizhili_link` VALUES (10,'百度','http://www.baidu.com','',2,1558679635,1558680928,'/link/20190524/5ce7905377af6.png'),(12,'华为','http://www.hao123.com','',3,1558680625,1558680928,NULL);
/*!40000 ALTER TABLE `lizhili_link` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lizhili_log`
--

DROP TABLE IF EXISTS `lizhili_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lizhili_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `ip` char(15) DEFAULT NULL,
  `in_time` int(11) DEFAULT NULL,
  `up_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lizhili_log`
--

LOCK TABLES `lizhili_log` WRITE;
/*!40000 ALTER TABLE `lizhili_log` DISABLE KEYS */;
INSERT INTO `lizhili_log` VALUES (2,'admin','127.0.0.1',1557143132,1557143132),(3,'admin','127.0.0.1',1557143179,1557143179),(4,'admin','127.0.0.1',1557143226,1557143226),(37,'admin','127.0.0.1',1559550120,1559550120),(38,'admin','127.0.0.1',1559558289,1559558289),(39,'admin','127.0.0.1',1559558662,1559558662),(40,'admin','127.0.0.1',1559560023,1559560023),(41,'admin','127.0.0.1',1559700043,1559700043),(42,'admin','127.0.0.1',1559787386,1559787386),(43,'admin','127.0.0.1',1560162967,1560162967),(44,'admin','127.0.0.1',1564455338,1564455338),(45,'admin','127.0.0.1',1564455416,1564455416),(46,'admin','127.0.0.1',1564455540,1564455540),(47,'admin','127.0.0.1',1565146958,1565146958);
/*!40000 ALTER TABLE `lizhili_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lizhili_member`
--

DROP TABLE IF EXISTS `lizhili_member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lizhili_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) DEFAULT NULL,
  `password` varchar(32) DEFAULT 'e10adc3949ba59abbe56e057f20f883e',
  `sex` tinyint(4) DEFAULT NULL COMMENT '1代表男，2代表女，3代表未知',
  `email` varchar(60) DEFAULT NULL,
  `phone` bigint(11) DEFAULT NULL,
  `isopen` tinyint(4) DEFAULT NULL,
  `state` tinyint(4) DEFAULT '0' COMMENT '0代表是没有通过审核，1代表通过审核',
  `score` int(11) DEFAULT '0' COMMENT '积分',
  `headimg` varchar(60) DEFAULT NULL,
  `sheng` varchar(60) DEFAULT NULL,
  `shi` varchar(60) DEFAULT NULL,
  `xian` varchar(60) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `in_time` int(11) DEFAULT NULL,
  `up_time` int(11) DEFAULT NULL,
  `del_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lizhili_member`
--

LOCK TABLES `lizhili_member` WRITE;
/*!40000 ALTER TABLE `lizhili_member` DISABLE KEYS */;
INSERT INTO `lizhili_member` VALUES (10,'李志立','2af5c662cab479e5471ca76326a57563',1,'lizhilicctv@163.com',18633456271,0,1,100,NULL,'澳门','澳门','澳门','阿斯达斯爱上 ',1558924483,1558929019,1558929019);
/*!40000 ALTER TABLE `lizhili_member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lizhili_message`
--

DROP TABLE IF EXISTS `lizhili_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lizhili_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) DEFAULT NULL,
  `name` varchar(60) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `neirong` text,
  `isopen` tinyint(4) DEFAULT '0',
  `in_time` int(11) DEFAULT NULL,
  `up_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lizhili_message`
--

LOCK TABLES `lizhili_message` WRITE;
/*!40000 ALTER TABLE `lizhili_message` DISABLE KEYS */;
INSERT INTO `lizhili_message` VALUES (23,'1','11',11,'11',1,NULL,1559101022);
/*!40000 ALTER TABLE `lizhili_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lizhili_shield`
--

DROP TABLE IF EXISTS `lizhili_shield`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lizhili_shield` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shield` text,
  `in_time` int(11) DEFAULT NULL,
  `up_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lizhili_shield`
--

LOCK TABLES `lizhili_shield` WRITE;
/*!40000 ALTER TABLE `lizhili_shield` DISABLE KEYS */;
INSERT INTO `lizhili_shield` VALUES (1,'她妈|它妈|他妈|你妈|去死|贱人|1090tv|10jil|21世纪中国基金会|2c8|3p|4kkasi|64惨案|64惨剧|64学生运动|64运动|64运动民國|89惨案|89惨剧|89学生运动|89运动|adult|asiangirl|avxiu|av女|awoodong|A片|bbagoori|bbagury|bdsm|binya|bitch|bozy|bunsec|bunsek|byuntae|B样|fa轮|fuck|ＦｕｃΚ|gay|hrichina|jiangzemin|j女|kgirls|kmovie|lihongzhi|MAKELOVE|NND|nude|petish|playbog|playboy|playbozi|pleybog|pleyboy|q奸|realxx|s2x|sex|shit|sorasex|tmb|TMD|tm的|tongxinglian|triangleboy|UltraSurf|unixbox|ustibet|voa|lizhili|admin',NULL,1558956338);
/*!40000 ALTER TABLE `lizhili_shield` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lizhili_slide`
--

DROP TABLE IF EXISTS `lizhili_slide`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lizhili_slide` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sort` int(11) DEFAULT '0',
  `isopen` tinyint(1) DEFAULT '0' COMMENT '1代表启用，0代表不启用',
  `desc` varchar(255) DEFAULT NULL,
  `in_time` int(11) DEFAULT NULL,
  `up_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lizhili_slide`
--

LOCK TABLES `lizhili_slide` WRITE;
/*!40000 ALTER TABLE `lizhili_slide` DISABLE KEYS */;
INSERT INTO `lizhili_slide` VALUES (8,'/slide/20190524/5ce79ba453f33.png','','111',0,1,'',1558682532,1558682532),(7,'/slide/20190524/5ce799520eacd.png','http://www.baidu.com','111',0,0,'111',1558681938,1558681938);
/*!40000 ALTER TABLE `lizhili_slide` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lizhili_system`
--

DROP TABLE IF EXISTS `lizhili_system`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lizhili_system` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cnname` varchar(100) DEFAULT NULL,
  `enname` varchar(100) DEFAULT NULL,
  `type` tinyint(4) DEFAULT '1',
  `value` varchar(255) DEFAULT NULL,
  `kxvalue` varchar(255) DEFAULT NULL,
  `sort` int(11) DEFAULT '0',
  `desc` varchar(255) DEFAULT NULL,
  `st` tinyint(3) DEFAULT '0',
  `in_time` int(11) DEFAULT NULL,
  `up_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lizhili_system`
--

LOCK TABLES `lizhili_system` WRITE;
/*!40000 ALTER TABLE `lizhili_system` DISABLE KEYS */;
INSERT INTO `lizhili_system` VALUES (1,'网站名称','webname',1,'李志立博客','',0,'网站名称',1,NULL,1559551140),(2,'关键词','keyword',1,'李志立博客,技术博客','',0,'网站关键字',1,NULL,1559551140),(3,'描述','miaoshu',1,'我是一个厉害的技术博客人!','',0,'网站描述',1,NULL,1559551140),(4,'底部版权信息','copyright',1,'Design by &lt;a href=&quot;/&quot;&gt;李志立个人博客&lt;/a&gt; @技术宅','',0,'网站版权信息',1,NULL,1559551140),(5,'备案号','No',1,'','',0,'网站备案号',1,NULL,1559551140),(6,'统计代码','statistics',2,'','',0,'网站统计代码',1,NULL,1559551140),(7,'网站状态','value',3,'开启','开启,关闭',0,'网站的状态',1,NULL,1559551140);
/*!40000 ALTER TABLE `lizhili_system` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-31 15:39:20
