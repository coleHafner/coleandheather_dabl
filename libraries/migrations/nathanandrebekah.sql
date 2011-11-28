-- MySQL dump 10.13  Distrib 5.5.17, for Linux (x86_64)
--
-- Host: localhost    Database: dabl
-- ------------------------------------------------------
-- Server version	5.5.17

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
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `address` (
  `address_id` int(100) NOT NULL AUTO_INCREMENT,
  `street_address` varchar(1000) DEFAULT NULL,
  `city` varchar(1000) DEFAULT NULL,
  `state` varchar(1000) DEFAULT NULL,
  `zip` varchar(1000) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`address_id`)
) ENGINE=MyISAM AUTO_INCREMENT=574 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address`
--

LOCK TABLES `address` WRITE;
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
INSERT INTO `address` (`address_id`, `street_address`, `city`, `state`, `zip`, `active`) VALUES (0,NULL,NULL,NULL,NULL,0),(571,'1452 Mill Pond Rd.','Ashland','OR','97520',1),(570,'32265 N Fork Rd.','Lyons','OR','97358',1),(569,'PO Box 411','Sublimity','OR','97385',1),(568,'PO Box 121','Lyons','OR','97358',1),(567,'PO Box 53','Lyons','OR','97358',1),(565,'One Towers Ln. Box 2118 #A-1','Mt. Angel','OR','97362',1),(566,'Elliot Residence #217 390 SE Church','Sublimity','OR','97385',1),(564,'1154 Dawn Dr.','Stayton','OR','97383',1),(563,'1307 Heritage Loop','Stayton','OR','97383',1),(562,'1276 82nd SE','Salem','OR','97317',1),(561,'PO Box 727','Mill City','OR','97360',1),(560,'PO Box 723','Sublimity','OR','97385',1),(559,'40931 Rodgers Mtn. Loop','Scio','OR','97374',1),(558,'5715 Anderson Rd. SE','Aumsville','OR','97325',1),(557,'4609 Toutle Ct. SE','Olympia','WA','98501',1),(556,'1905 Madison Dr.','Lavergne','TN','37086',1),(555,'225 Walden St. #3F','Cambridge','MA','02140',1),(554,'7732 SE Ramona St.','Portland','OR','97206',1),(553,'12785 Parrish Gap Rd. SE','Turner','OR','97392',1),(552,'2642 NW Ginseng Pl.','Corvallis','OR','97330',1),(551,'PO Box 698','Lyons','OR','97358',1),(550,'202 Jefferson St. #2','Bend','OR','97701',1),(549,'PO Box 177','Selma','OR','97538',1),(548,'123 Main St.','Stayton','OR','97383',1),(547,'PO Box 562','Stayton','OR','97383',1),(546,'378 Church St.','Sublimity','OR','97385',1),(545,'1244 Calypso Ct.','Ashland','OR','97520',1),(544,'19395 E. Evans Creek Rd.','White City','OR','97305',1),(543,'168 W. 300 St.','Herber City','UT','84032',1),(542,'496 Starflower Ln.','Ashland','OR','97520',1),(541,'3611 NW Upas Ave.','Redmond','OR','97756',1),(540,'12744 Brick Rd.','Turner','OR','97392',1),(539,'200 E Grant St.','Enterprise','OR','97828',1),(538,'1102 N. 13th St.','Boise','ID','83702',1),(537,'6810 Jerdon Ct. N','Keizer','OR','97303',1),(536,'108 5th St. #8','Ashland','OR','97520',1),(535,'442 W. Berdine St.','Roseburg','OR','97471',1),(534,'3514 SW Reindeer Ave.','Redmond','OR','97756',1),(533,'PO Box 1005','Aumsville','OR','97325',1),(532,'1153 Stanford Ave.','Palo Alto','CA','94306',1),(531,'1170 Barnes Ave. #221','Salem','OR','97306',1),(530,'8029 SE 24th','Portland','OR','97202',1),(529,'3403 Marigold Dr.','Prescott','AZ','97385',1),(528,'701 Larkspur Ct.','Sublimity','OR','97385',1),(527,'511.5 S. Meldrum St.','Fort Collins','CO','80521',1),(526,'5405 W. Arlington','Yakima','WA','98908',1),(525,'6590 Griffin Creek Rd','Medford','OR','97501',1),(524,'2863 Camp Baker Rd.','Medford','OR','97501',1),(523,'400 N. Colorado St. #203B','Gunnison','CO','81230',1),(522,'2459 NW 22nd St.','Redmond','OR','97756',1),(521,'1821 Taylor Circle','Reedsburg','WI','53959',1),(520,'175 High St.','Lee','MA','01238',1),(519,'4920 Whisting Acres','Las Vegas','NV','89131',1),(518,'7513 Mardean Ct.','Las Vegas','NV','89131',1),(517,'230 N. McDow St.','Susanville','CA','96130',1),(516,'3570 Lost Hills Dr.','Las Vegas','NV','89122',1),(515,'3688 Cavender Creek Rd.','Danlonega','GA','30533',1),(514,'1365 Burtschell Place','Crescent City','CA','95531',1),(513,'2472 W. Silverstreak Way','Queen Creek','AZ','85242',1),(512,'53507 N. Thomas Rd.','Benton City','WA','99320',1),(511,'4826 Jean St. SE','Salem','OR','97305',1),(510,'4848 North Start Ct.','Salem','OR','97305',1),(509,'3254 Ridgeway Dr.','Turner','OR','97392',1),(572,'17874 Old Mehama Rd. SE','Stayton','OR','97383',1);
/*!40000 ALTER TABLE `address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `article_id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) DEFAULT NULL,
  `body` varchar(5000) DEFAULT NULL,
  `post_timestamp` int(100) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `user_id` int(100) NOT NULL,
  `section_id` int(100) NOT NULL,
  `view_id` int(100) NOT NULL,
  `priority` int(100) DEFAULT NULL,
  `tag_string` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`article_id`),
  KEY `authentication_id` (`user_id`),
  KEY `section_id` (`section_id`),
  KEY `view_id` (`view_id`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` (`article_id`, `title`, `body`, `post_timestamp`, `active`, `user_id`, `section_id`, `view_id`, `priority`, `tag_string`) VALUES (0,NULL,NULL,NULL,0,0,0,0,NULL,NULL),(88,'Heather\\\'s Story','Some say time flies when you\\\'re having fun, and they\\\'re right. Fun is the first word that comes to mind if I had to describe the last six and a half years of my life. Well that, and luck. Throughout this time I have accomplished a lot. Gone to college, gotten a real job, been the proud owner of a cute dog. But what really makes the past few years of my life fun, is that I have been lucky enough to have someone to share it with. \n\nIt\\\'s not everyone that has to travel four hours to meet someone who grew up twenty minutes away from you. But I can\\\'t say that if we had met before in another setting, we would have ever started dating. Had we met while still in high school, I may have never talked to Cole (old Cascade High School traditions dictate not ever dating anyone from Regis High School-still haven\\\'t heard a reason why or how this status quo got started). As it was, I might never have met him still if it hadn\\\'t been for a certain future roommate of his bringing him up to my dorm room one night with a guitar and a penchant for stories. Apparently I had amazed them both with my on-the-fly account of a scuba diver who meets up with a suave talking shark.  \n\nA few days later, I saw Cole in the cafeteria and (I\\\'m embarrassed to say) ignored him. I wasn\\\'t sure what he thought about a girl who could make up silly fish stories at a moment\\\'s notice . . . and I wasn\\\'t sure he\\\'d recognize me anyway. Of course, no sooner had I dodged in front of the sandwich bar I nearly collide into him. He wouldn\\\'t remember this, but right then he said \\\"hi\\\"Ã‚Â and complimented me on the scarf I was wearing. I look back on that moment now and laugh. The scarf he complimented I had made, and it was lopsided with a quite a few holes. But that moment really illustrates who Cole was and continues to be. He has always been caring, thoughtful, supportive and above all, kind-hearted. \n\nThe past six years have flown by because Cole and I were having fun. And we still are. Above all, I have had the best time watching Cole evolve into the person he is today. Six years ago, I fell in love with a long-haired, long boarding video gamer, and now, I\\\'m even more in love with the person he\\\'s grown up to be. Cole is a smart, successful, loving, creative and hard-working person. I am lucky just to have met him. Together, I know our next sixty years are going to be just as fun as the last six.  ',1297801457,1,2,37,1,2,''),(87,'Cole\\\'s Story','I first met Heather in the dorms. My friend Erik and I were going door to door trying to meet new people. Now, we weren\\\'t like any other couple of losers, pathetically trying to meet girls, we were different. We had a gimick, we had a guitar. We knocked on the door of Heather\\\'s room, and got right in. When I first saw Heather I thought she was very pretty. She went on to tell a story that she made up on the spot about a magical talking shark. Cute and clever?! Too good to be true. Later that week we held hands while watching a Harry Potter movie, and almost seven years later, here we are. \n\nA lot has changed since then. We both have our degrees, we both have \\\"grown up\\\" jobs, we own a dog together. One thing that hasn\\\'t changed though, is Heather. She is still the same beautiful, hard working person that I met in the dorms that fall. I count myself lucky to have kept the affection of such a wonderful person all this time. I can\\\'t wait to marry her because I know it\\\'s just going to get better.',1297801420,1,2,36,1,2,''),(85,'Test','This is a new post for testing purposes...',1297362730,0,2,34,46,1,'');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articleToFile`
--

DROP TABLE IF EXISTS `articleToFile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articleToFile` (
  `article_to_file_id` int(100) NOT NULL AUTO_INCREMENT,
  `article_id` int(100) NOT NULL,
  `file_id` int(100) NOT NULL,
  `priority` int(100) DEFAULT NULL,
  PRIMARY KEY (`article_to_file_id`),
  KEY `article_id` (`article_id`),
  KEY `file_id` (`file_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articleToFile`
--

LOCK TABLES `articleToFile` WRITE;
/*!40000 ALTER TABLE `articleToFile` DISABLE KEYS */;
/*!40000 ALTER TABLE `articleToFile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fact`
--

DROP TABLE IF EXISTS `fact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fact` (
  `fact_id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `fact` varchar(1000) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`fact_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fact`
--

LOCK TABLES `fact` WRITE;
/*!40000 ALTER TABLE `fact` DISABLE KEYS */;
/*!40000 ALTER TABLE `fact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `file`
--

DROP TABLE IF EXISTS `file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `file` (
  `file_id` int(100) NOT NULL AUTO_INCREMENT,
  `file_type_id` int(100) NOT NULL,
  `file_name` varchar(1000) DEFAULT NULL,
  `upload_timestamp` int(100) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`file_id`),
  KEY `file_type_id` (`file_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=178 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file`
--

LOCK TABLES `file` WRITE;
/*!40000 ALTER TABLE `file` DISABLE KEYS */;
INSERT INTO `file` (`file_id`, `file_type_id`, `file_name`, `upload_timestamp`, `active`) VALUES (174,21,'28d20032f3.jpg',1298627586,1),(173,21,'d90d4d8881.jpg',1298626837,1),(172,21,'18a45d164a.jpg',1297973475,1),(171,21,'ed73774b6d.jpg',1297447636,1),(170,21,'f7544d929e.jpg',1297447545,1),(169,21,'a6bec7dc32.jpg',1297369589,1),(168,21,'36c5f7cded.png',1297369294,1),(167,21,'fd85cf9381.jpeg',1297368779,1),(0,0,NULL,NULL,0),(175,21,'604f6bfced.jpg',1302932771,1),(177,21,'d4eb09aa7f.jpg',1303297189,1);
/*!40000 ALTER TABLE `file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fileType`
--

DROP TABLE IF EXISTS `fileType`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fileType` (
  `file_type_id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `directory` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`file_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fileType`
--

LOCK TABLES `fileType` WRITE;
/*!40000 ALTER TABLE `fileType` DISABLE KEYS */;
INSERT INTO `fileType` (`file_type_id`, `title`, `active`, `directory`) VALUES (0,NULL,0,NULL),(20,'Site Image',1,'/images'),(21,'User Image',1,'/images/user_images');
/*!40000 ALTER TABLE `fileType` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guest`
--

DROP TABLE IF EXISTS `guest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guest` (
  `guest_id` int(100) NOT NULL AUTO_INCREMENT,
  `parent_guest_id` int(100) NOT NULL,
  `address_id` int(100) NOT NULL,
  `first_name` varchar(1000) DEFAULT NULL,
  `last_name` varchar(1000) DEFAULT NULL,
  `activation_code` varchar(1000) DEFAULT NULL,
  `initial_timestamp` varchar(1000) NOT NULL,
  `update_timestamp` varchar(1000) DEFAULT NULL,
  `expected_count` tinyint(3) DEFAULT NULL,
  `actual_count` tinyint(3) DEFAULT NULL,
  `rsvp_through_site` tinyint(1) NOT NULL,
  `is_attending` tinyint(1) NOT NULL,
  `is_new` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`guest_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1352 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guest`
--

LOCK TABLES `guest` WRITE;
/*!40000 ALTER TABLE `guest` DISABLE KEYS */;
INSERT INTO `guest` (`guest_id`, `parent_guest_id`, `address_id`, `first_name`, `last_name`, `activation_code`, `initial_timestamp`, `update_timestamp`, `expected_count`, `actual_count`, `rsvp_through_site`, `is_attending`, `is_new`, `active`) VALUES (1316,0,548,'Nancy','Williamson','6ecb1625bd','1298847686','1305409198',4,1,1,1,0,0),(1315,0,548,'Abbie','Lasota','e7e2ae408b','1298847686','1305409173',5,1,1,1,0,1),(1314,0,548,'Krista','Cavanaugh','7ff6010df4','1298847686','1303664371',4,1,1,1,0,1),(1312,0,548,'Galen','Wright','026f07e73e','1298847686',NULL,2,0,0,0,0,1),(1313,0,548,'Chris','Ostmo','d6d61df2e4','1298847686','1304382896',2,0,0,0,0,1),(1311,0,548,'Prateek','Sharma','42ffd60277','1298847686',NULL,2,0,0,0,0,1),(1310,1308,571,'Emma','Robison','0','1298847686','1304036809',0,0,1,1,0,1),(1309,1308,571,'Christine','Robison','0','1298847686','1304036809',0,0,1,1,0,1),(1306,0,548,'Bob','Scott','bf28ce1fc0','1298847686','1304179051',2,0,1,0,0,1),(1307,0,548,'Nate','Biondi','646ef341d2','1298847686',NULL,5,0,0,0,0,1),(1308,0,571,'Tony','Robison','14edad6e22','1298847686','1304036809',3,3,1,1,0,1),(1305,0,548,'Tim','Arthur','91c0ffb87b','1298847686','1304735897',6,0,1,0,0,1),(1304,1301,570,'Andrew','Vandehey','0','1298847686','1301789508',0,0,0,1,0,1),(1303,1301,570,'Jill','Vandehey','0','1298847686','1301789508',0,0,0,1,0,1),(1302,1301,570,'Roger','Vandehey','0','1298847686','1301789508',0,0,0,1,0,1),(1300,1297,569,'Piper','Freres','0','1298847686','1301352172',0,0,1,1,0,1),(1301,0,570,'Shelly','Vandehey','3ba2d63d02','1298847686','1301789508',4,4,0,1,0,1),(1299,1297,569,'Sam','Freres','0','1298847686','1301352172',0,0,1,1,0,1),(1298,1297,569,'Rich','Freres','0','1298847686','1301352172',0,0,1,1,0,1),(1297,0,569,'Brandi','Freres','de7f1e3a0b','1298847686','1301352172',4,4,1,1,0,1),(1295,0,568,'Sue','Sutton','3633c7bddd','1298847686','1301255864',2,2,0,1,0,1),(1296,1295,568,'Leonard','Sutton','0','1298847686','1301255864',0,0,0,1,0,1),(1294,0,567,'Dan','Hafner','904b84f282','1298847686','1304030698',3,3,1,1,0,1),(1293,0,565,'Don','Bender','fc531a43b1','1298847686','1304924814',1,1,0,1,0,1),(1292,0,564,'Steve','Bender','31a547099e','1298847685','1304376453',2,2,1,1,0,1),(1291,1288,563,'Mikel','Becktold','0','1298847685','1302651280',0,0,1,0,0,1),(1290,1288,563,'Katelyn','Becktold','0','1298847685','1302651280',0,0,1,0,0,1),(1286,1284,562,'Donica','Bender','0','1298847684','1304054954',0,0,1,0,0,0),(1287,0,548,'Brianna','Anderson','86febf0e20','1298847684','1302455493',3,3,0,1,0,1),(1288,0,563,'Melanie','Hafner','ec44f39068','1298847685','1302651280',4,2,1,1,0,1),(1289,1288,563,'Gregg','Unknown','0','1298847685','1302651280',0,0,1,1,0,1),(1285,1284,562,'Pam','Bender','0','1298847684','1304055009',0,0,1,1,0,1),(1284,0,562,'Bob','Bender','7c6d66a157','1298847684','1304055009',4,2,1,1,0,1),(1282,1280,548,'JC','Hafner','0','1298847684','1301190597',0,0,1,1,0,1),(1283,0,561,'Angie','Connor','b5917fe2d1','1298847684','1301789935',4,5,0,1,0,1),(1280,0,548,'Johnny','Hafner','9ba1e15d40','1298847684','1301190597',4,3,1,1,0,1),(1281,1280,548,'Tricia','Hafner','0','1298847684','1301190597',0,0,1,1,0,1),(1279,1276,560,'Jill','Hafner','0','1298847683','1304030997',0,0,0,1,0,1),(1278,1276,560,'Carrie','Hafner','0','1298847683','1304030997',0,0,0,1,0,1),(1277,1276,560,'Debbie','Hafner','0','1298847683','1304030997',0,0,0,1,0,1),(1275,1272,559,'Charlie','Siegmund','0','1298847682','1305412262',0,0,1,0,0,1),(1276,0,560,'John','Hafner','da94be2ee4','1298847683','1304030997',5,6,0,1,0,1),(1271,1270,548,'Amanda','Newkirk','0','1298847682','1301789680',0,0,0,1,0,1),(1272,0,559,'Mandy','Siegmund','a8131143cf','1298847682','1305412262',4,0,1,0,0,1),(1273,1272,559,'Alan','Siegmund','0','1298847682','1305412262',0,0,1,0,0,1),(1274,1272,559,'Henry','Siegmund','0','1298847682','1305412262',0,0,1,0,0,1),(1270,0,548,'Walt','Hafner','4d13c5ca28','1298847682','1301789680',2,2,0,1,0,1),(1267,0,558,'Ted','Hafner','d9c89dd486','1298847681','1301789619',3,3,0,1,0,1),(1268,1267,558,'Margaret','Hafner','0','1298847681','1301789619',0,0,0,1,0,1),(1269,1267,558,'Gus','Hafner','0','1298847681','1301789619',0,0,0,1,0,1),(1266,1263,557,'Riley','Vanderbeek','0','1298847681','1299953791',0,0,1,1,0,1),(1264,1263,557,'Jack','Vanderbeek','0','1298847681','1299953791',0,0,1,1,0,1),(1265,1263,557,'Ben','Vanderbeek','0','1298847681','1299953791',0,0,1,1,0,1),(1263,0,557,'Suzy','Vanderbeek','824bd19ccb','1298847681','1299953791',4,4,1,1,0,1),(1262,1261,556,'Andrea','Bender','0','1298847681','1300026410',0,0,1,1,0,1),(1260,0,555,'Chris','Newkirk','84e68b5dfe','1298847680','1304226221',2,0,1,0,0,1),(1261,0,556,'Sara','Bender','2316ee660b','1298847681','1300026410',2,2,1,1,0,1),(1258,1253,553,'Kimmy','Bender','0','1298847679','1304376417',0,0,1,0,0,1),(1259,0,554,'Mary Kay','Bender','bc109559ce','1298847680','1301862451',2,1,1,1,0,1),(1257,1253,553,'Mandy','Bender','0','1298847679','1304376417',0,0,1,0,0,1),(1256,1253,553,'Justine','Bender','0','1298847679','1304376417',0,0,1,1,0,1),(1255,1253,553,'Katie','Bender','0','1298847679','1304376417',0,0,1,1,0,1),(1254,1253,553,'Patty','Bender','0','1298847679','1304376417',0,0,1,1,0,1),(1253,0,553,'Vince','Bender','aebfc746c9','1298847679','1304376417',6,4,1,1,0,1),(1252,1251,552,'Jayme','Felice','0','1298847679','1299901542',0,0,1,1,0,1),(1250,1245,551,'Jack','Hafner','0','1298847678','1300574714',0,0,1,1,0,1),(1251,0,552,'TJ','Hafner','874230305b','1298847679','1299901542',2,2,1,1,0,1),(1246,1245,551,'Christine','Hafner','0','1298847678','1300574714',0,0,1,1,0,1),(1247,1245,551,'Prescilla','Celino','0','1298847678','1300574714',0,0,1,0,0,1),(1248,1245,551,'Amanda','Krafcik','0','1298847678','1300574714',0,0,1,1,0,1),(1249,1245,551,'Jed','Hafner','0','1298847678','1300574714',0,0,1,1,0,1),(1245,0,551,'Jerry','Hafner','a6d705546d','1298847678','1300574714',2,4,1,1,0,1),(1244,0,550,'Jenna','Jacquard','587af9c4a3','1298847678','1304292506',2,2,1,1,0,1),(1241,0,549,'Michelle','Sidell','783571cff3','1298847678','1302455789',2,0,0,0,0,1),(1242,1241,549,'Dan','Unknown','0','1298847678','1302455789',0,0,0,0,0,1),(1243,1241,549,'Baby','Forrest','0','1298847678','1302455789',0,0,0,0,0,1),(1240,0,548,'Caleb','Heuburger','9aac33b3b7','1298847678','1304376644',2,2,0,1,0,1),(1239,0,547,'Evan','Pierce','76a2116e8d','1298847678',NULL,2,0,0,0,0,1),(1238,1234,546,'Ryan','Joyce','0','1298847678','1302455760',0,0,0,1,0,1),(1237,1234,546,'Jason','Joyce','0','1298847678','1302455760',0,0,0,1,0,1),(1236,1234,546,'Brandon','Joyce','0','1298847678','1302455760',0,0,0,1,0,1),(1235,1234,546,'Mary','Joyce','0','1298847678','1302455760',0,0,0,1,0,1),(1233,0,545,'Hannah','Edlefsen','e7833270f8','1298847678','1303095935',2,1,0,1,0,1),(1234,0,546,'Doug','Joyce','6f996f06fa','1298847678','1302455760',5,7,0,1,0,1),(1232,1231,544,'Jacob','Kinsman','0','1298847678','1299968251',0,0,0,0,0,1),(1231,0,544,'Julie','Kinsman','18246da021','1298847678','1299968251',2,0,0,0,0,1),(1230,1229,543,'Ingrid','Campbell','0','1298847678','1301255905',0,0,0,0,0,1),(1229,0,543,'Eric','Campbell','4917746e38','1298847678','1301255905',2,0,0,0,0,1),(1228,1226,542,'Baby','Bella','0','1298847678','1304810099',0,0,0,0,0,1),(1227,1226,542,'Davie','Carranza','0','1298847678','1304810099',0,0,0,0,0,1),(1225,1223,541,'Devin','Hill','0','1298847678','1300813198',0,0,1,1,0,1),(1226,0,542,'Katie','Hardeman','6d755667f3','1298847678','1304810099',3,0,0,0,0,1),(1223,0,541,'Bud','Hill','5a97150d5c','1298847678','1300813198',3,2,1,0,0,1),(1224,1223,541,'Mary','Hill','0','1298847678','1300813198',0,0,1,1,0,1),(1221,0,540,'Heather','Hoffman-Abbott','d4e5207d66','1298847678','1304924908',2,2,0,1,0,1),(1222,1221,540,'Jeremy','Abbott','0','1298847678','1304924908',0,0,0,1,0,1),(1219,0,538,'Torrey','McConnell','00a669ee59','1298847678','1304301354',2,1,1,1,0,1),(1220,0,539,'Rebecca','Voltin','6a0fca4e0a','1298847678','1304272720',2,1,1,1,0,1),(1216,0,536,'Crystal','Powell','58d8daef26','1298847678','1303095996',2,1,0,1,0,1),(1217,1216,536,'Kyle','Logsdon','0','1298847678','1303095996',0,0,0,0,0,1),(1218,0,537,'Stephanie','Powers','9e4a167ec9','1298847678','1304809887',3,2,1,1,0,1),(1214,1211,534,'Robert','Gagermeier','0','1298847677','1301366564',0,0,1,0,0,1),(1215,0,535,'Katie','McClure','52a2eeb5d5','1298847677','1301790048',2,0,0,0,0,1),(1213,1211,534,'Lloyd','Gagermeier','0','1298847677','1301366564',0,0,1,1,0,1),(1210,0,533,'Heather','Mauer','60aeb8820d','1298847677','1303665253',2,1,0,1,0,1),(1211,0,534,'Bob','Gagermeier','dfdfe4ca97','1298847677','1301366564',4,3,1,1,0,1),(1212,1211,534,'Michelle','Gagermeier','0','1298847677','1301366564',0,0,1,1,0,1),(1208,0,531,'Erin','Peeples','7c01a33a15','1298847677','1301255807',2,1,0,1,0,1),(1209,0,532,'Matt','Grahn','ab9900a391','1298847677','1304050996',2,1,1,1,0,1),(1206,0,530,'Kylan','Hoener','68e173c5db','1298847677','1301255756',2,2,0,1,0,1),(1207,1206,530,'Johanna','Hoener','0','1298847677','1301255756',0,0,0,1,0,1),(1205,0,529,'Jay','Reynolds','93bbbc83f2','1298847677','1300499344',2,1,1,1,0,1),(1204,0,528,'Tim','ODonnell','7e4050b2f7','1298847677','1304809961',2,2,1,1,0,1),(1203,0,527,'Erik','Larsen','89356f1fd3','1298847677','1300033819',2,1,1,1,0,1),(1200,1199,525,'Baby','Hank','0','1298847677','1301795358',0,0,1,1,0,1),(1201,0,526,'Chris','Joyce','582cf9f3ed','1298847677','1301789567',2,2,0,1,0,1),(1202,1201,526,'Ava','Segal','0','1298847677','1301789567',0,0,0,1,0,1),(1199,0,525,'Karen','Kralik','9e284be9fb','1298847677','1301795358',2,2,1,1,0,1),(1198,0,524,'Annie','Tyner','e055f88d08','1298847677','1304924994',2,1,0,1,0,1),(1197,1196,523,'Owen','King','0','1298847677','1301012920',0,0,1,0,0,0),(1195,1194,522,'Nate','Albertson','0','1298847677','1300808844',0,0,1,1,0,1),(1196,0,523,'Ashley','Black','b3604edffb','1298847677','1301012949',2,1,1,1,0,1),(1194,0,522,'Becky','Hill','27477cb5c2','1298847677','1300808844',2,2,1,1,0,1),(1193,0,521,'Sandy','Horstman','70669c1aa4','1298847677','1305409044',2,0,1,0,0,1),(1192,1191,520,'Dylan','Mechek','0','1298847677','1305409096',0,0,1,0,0,1),(1191,0,520,'Troy','Mechek','8ae4f8a020','1298847677','1305409096',3,0,1,0,0,1),(1190,0,519,'Lisa','Clarke','7eff6fd301','1298847677','1305409064',5,0,1,0,0,1),(1189,1188,518,'Toni','Ramey','0','1298847677','1305409135',0,0,1,0,0,1),(1188,0,518,'Ted','Ramey','5d4fc517cf','1298847677','1305409135',2,0,1,0,0,1),(1186,1185,516,'Mark','Piazza','0','1298847676','1302455843',0,0,0,0,0,1),(1187,0,517,'Lola','Ramey','40a10d90d2','1298847676','1299978705',1,1,1,1,0,1),(1185,0,516,'Denise','Piazaa','d73a91c67f','1298847676','1302455843',2,1,0,1,0,1),(1184,0,515,'Annabelle','Justice','b175f5bfac','1298847676','1305409360',1,0,0,0,0,1),(1183,1182,514,'Dottie','Graves','0','1298847676','1303183964',0,0,1,0,0,1),(1182,0,514,'Al','Graves','fa62e0acac','1298847676','1303183964',2,2,1,1,0,1),(1181,1180,513,'Marissa','Eick','0','1298847676','1301594031',0,0,1,1,0,1),(1180,0,513,'Josh','Eick','61c47ded41','1298847676','1301594031',4,4,1,1,0,1),(1179,1178,512,'Trish','Eick','0','1298847675','1302229210',0,0,1,1,0,1),(1178,0,512,'Jim','Eick','6aa766dd79','1298847675','1302229210',2,2,1,1,0,1),(1177,0,511,'Glenn','Black','7ee56c75a3','1298847675','1303664194',1,2,1,1,0,1),(1176,0,510,'Lillian','Black','0c71d5659a','1298847674','1299888898',1,1,1,1,0,1),(1175,0,509,'Dennis','Black','033a9ee975','1298847673','1317758491',1,0,1,0,0,1),(1319,0,548,'Alisha','Proctor','257e85b542','1298847686','1305409226',3,1,1,1,0,1),(1320,0,548,'Walter','Hafner','687048ba8c','1298867123','1305409504',1,0,0,0,0,1),(1324,1180,513,'Kaitlyn','Eick','0','1301594006','1301594031',0,0,1,1,1,1),(1325,1180,513,'Colin','Eick','0','1301594020','1301594031',0,0,1,1,1,1),(1326,1283,561,'Gabe','Connor','0','1301789843','1301789935',0,0,0,1,1,1),(1327,1283,561,'Hailey','Connor','0','1301789863','1301789935',0,0,0,1,1,1),(1328,1283,561,'Kayla','Connor','0','1301789886','1301789935',0,0,0,1,1,1),(1329,1283,561,'Kara','Connor','0','1301789904','1301789935',0,0,0,1,1,1),(1330,1287,548,'Kevin','Anderson','0','1302455476','1302455493',0,0,0,1,1,1),(1331,1287,548,'Reece','Anderson','0','1302455487','1302455493',0,0,0,1,1,1),(1332,1234,546,'Lauren','Katich','0','1302455603','1302455760',0,0,0,1,1,1),(1333,1234,546,'Sara','Davenport','0','1302455624','1302455760',0,0,0,1,1,1),(1334,0,572,'Chad','Hafner','51ddc47a67','1303100731','1304030721',2,2,1,1,0,1),(1335,1334,572,'Kara','Unknown','0','1303100731','1304030721',0,0,1,1,0,1),(1336,1182,514,'Shelley ','Fox','0','1303183960','1303183964',0,0,1,1,1,1),(1338,1177,511,'Larry','Iverson','0','1303664192','1303664194',0,0,1,1,1,1),(1339,1294,567,'Suzzane','Unknown','0','1304030680','1304030698',0,0,1,1,1,1),(1340,1294,567,'Isaac','Unknown','0','1304030696','1304030698',0,0,1,1,1,1),(1341,1276,560,'Lauren','Hafner','0','1304030979','1304030997',0,0,0,1,1,1),(1342,1276,560,'Alexis','Hafner','0','1304030988','1304030997',0,0,0,1,1,1),(1343,1244,550,'Clayton','Morgan','0','1304292494','1304292506',0,0,1,1,1,1),(1344,1292,564,'Steve','Unknown','0','1304376450','1304376453',0,0,1,1,1,1),(1345,1240,548,'Caleb','Unknown','0','1304376642','1304376644',0,0,0,1,1,1),(1346,1218,537,'Clayton','Powers','0','1304809886','1304809887',0,0,1,1,1,1),(1347,1204,528,'Unknown','Odonnell','0','1304809955','1304809961',0,0,1,1,1,1),(1348,1175,509,'Test','','0','1317751230','1317755485',0,0,1,0,1,0),(1349,1175,509,'Test','Guest','0','1317751347','1317755485',0,0,1,0,1,0),(1350,1175,509,'Test23234234','Guest','0','1317751755','1317755485',0,0,1,0,1,0),(1351,1175,509,'new','Guest','0','1317751845','1317758491',0,0,1,0,1,1);
/*!40000 ALTER TABLE `guest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guestToGuestType`
--

DROP TABLE IF EXISTS `guestToGuestType`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guestToGuestType` (
  `guest_to_guest_type_id` int(100) NOT NULL AUTO_INCREMENT,
  `guest_id` int(100) NOT NULL,
  `guest_type_id` int(100) NOT NULL,
  PRIMARY KEY (`guest_to_guest_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1449 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guestToGuestType`
--

LOCK TABLES `guestToGuestType` WRITE;
/*!40000 ALTER TABLE `guestToGuestType` DISABLE KEYS */;
INSERT INTO `guestToGuestType` (`guest_to_guest_type_id`, `guest_id`, `guest_type_id`) VALUES (1263,1175,146),(1264,1175,147),(1265,1176,146),(1266,1176,148),(1267,1177,146),(1268,1178,146),(1269,1179,146),(1270,1180,146),(1271,1181,146),(1272,1182,146),(1273,1183,146),(1274,1184,146),(1275,1185,146),(1276,1185,149),(1277,1186,146),(1278,1187,146),(1279,1188,146),(1280,1189,146),(1281,1190,146),(1282,1191,146),(1283,1192,146),(1284,1193,146),(1285,1194,150),(1286,1194,151),(1287,1194,152),(1288,1194,153),(1289,1195,150),(1290,1195,154),(1291,1196,150),(1292,1196,152),(1293,1196,151),(1294,1197,155),(1295,1198,150),(1296,1198,152),(1297,1198,151),(1298,1199,150),(1299,1199,152),(1300,1199,151),(1301,1200,150),(1302,1201,150),(1303,1201,154),(1304,1201,156),(1305,1201,157),(1306,1202,150),(1307,1203,150),(1308,1203,154),(1309,1203,156),(1310,1204,150),(1311,1204,154),(1312,1204,156),(1313,1205,150),(1314,1205,154),(1316,1206,150),(1317,1206,152),(1318,1207,150),(1319,1208,152),(1320,1209,150),(1321,1209,154),(1322,1210,152),(1323,1211,150),(1324,1212,150),(1325,1213,150),(1326,1214,150),(1327,1215,150),(1328,1215,152),(1329,1216,150),(1330,1216,152),(1331,1217,150),(1332,1218,152),(1333,1219,150),(1334,1219,152),(1335,1220,150),(1336,1220,154),(1337,1221,152),(1338,1222,152),(1339,1223,150),(1340,1224,150),(1341,1225,150),(1342,1226,150),(1343,1226,154),(1344,1227,150),(1345,1228,150),(1346,1229,154),(1347,1230,150),(1348,1231,150),(1349,1231,152),(1350,1232,150),(1351,1233,150),(1352,1233,152),(1353,1234,154),(1354,1235,154),(1355,1236,154),(1356,1237,154),(1357,1238,154),(1358,1239,154),(1359,1240,154),(1360,1241,154),(1361,1242,154),(1362,1243,154),(1363,1244,152),(1364,1245,158),(1365,1245,159),(1366,1246,158),(1367,1246,160),(1368,1247,150),(1369,1248,150),(1370,1249,158),(1371,1249,156),(1372,1250,158),(1373,1250,156),(1374,1251,158),(1375,1252,150),(1376,1253,158),(1377,1254,158),(1378,1255,158),(1379,1256,158),(1380,1257,158),(1381,1258,158),(1382,1259,158),(1383,1260,158),(1384,1261,158),(1385,1262,158),(1386,1263,158),(1387,1264,158),(1388,1265,158),(1389,1266,158),(1390,1267,158),(1391,1268,158),(1392,1269,158),(1393,1270,158),(1394,1271,155),(1395,1272,158),(1396,1273,158),(1397,1274,158),(1398,1275,158),(1399,1276,158),(1400,1277,158),(1401,1278,158),(1402,1279,158),(1403,1280,158),(1404,1281,158),(1405,1282,158),(1406,1283,158),(1407,1284,158),(1408,1285,158),(1409,1286,158),(1410,1287,158),(1411,1288,158),(1412,1289,158),(1413,1290,158),(1414,1291,158),(1415,1292,158),(1416,1293,158),(1417,1293,148),(1418,1270,148),(1419,1294,158),(1420,1295,158),(1421,1296,158),(1422,1297,158),(1423,1298,158),(1424,1299,158),(1425,1300,158),(1426,1301,158),(1427,1302,158),(1428,1303,158),(1429,1304,158),(1430,1305,161),(1431,1306,161),(1432,1307,161),(1433,1308,161),(1434,1309,161),(1435,1310,161),(1436,1311,161),(1437,1312,161),(1438,1313,161),(1439,1314,162),(1440,1315,162),(1441,1316,162),(1442,1317,162),(1443,1318,162),(1444,1319,162),(1445,1320,148),(1446,1320,158),(1447,1334,158),(1448,1335,158);
/*!40000 ALTER TABLE `guestToGuestType` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guestType`
--

DROP TABLE IF EXISTS `guestType`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guestType` (
  `guest_type_id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) DEFAULT NULL,
  `is_special` tinyint(1) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`guest_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=164 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guestType`
--

LOCK TABLES `guestType` WRITE;
/*!40000 ALTER TABLE `guestType` DISABLE KEYS */;
INSERT INTO `guestType` (`guest_type_id`, `title`, `is_special`, `active`) VALUES (0,NULL,NULL,0),(162,'Bride Coworker',0,1),(161,'Groom Coworker',0,1),(160,'Mother of the Groom',1,1),(159,'Father of the Groom',1,1),(158,'Groom Family',0,1),(157,'Best Man',1,1),(156,'Groomsman',1,1),(155,'Friend of Friend',0,1),(154,'Groom Friend',0,1),(153,'Maid of Honor',1,1),(152,'Bride Friend',0,1),(151,'Bridesmaid',1,1),(150,'Mutual Friend',0,1),(149,'Mother of the Bride',1,1),(148,'Guest of Honor',1,1),(147,'Father of the Bride',1,1),(146,'Bride Family',0,1);
/*!40000 ALTER TABLE `guestType` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section`
--

DROP TABLE IF EXISTS `section`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `section` (
  `section_id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`section_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section`
--

LOCK TABLES `section` WRITE;
/*!40000 ALTER TABLE `section` DISABLE KEYS */;
INSERT INTO `section` (`section_id`, `title`, `active`) VALUES (0,NULL,0),(37,'her-story',1),(34,'main',1),(36,'his-story',1);
/*!40000 ALTER TABLE `section` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-11-27 22:45:32
