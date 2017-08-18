/*
SQLyog Ultimate v8.55 
MySQL - 5.5.38 : Database - sms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sms` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sms`;

/*Table structure for table `bank` */

DROP TABLE IF EXISTS `bank`;

CREATE TABLE `bank` (
  `bankid` int(11) NOT NULL AUTO_INCREMENT,
  `bankname` varchar(100) NOT NULL,
  `bankcode` int(11) NOT NULL,
  PRIMARY KEY (`bankid`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

/*Data for the table `bank` */

insert  into `bank`(`bankid`,`bankname`,`bankcode`) values (1,'Bank of Ceylon',7010),(2,'Standard Chartered Bank',7038),(3,'Citi Bank',7047),(4,'Commercial Bank PLC',7056),(5,'Habib Bank Ltd',7074),(6,'Hatton National Bank PLC',7083),(7,'Hongkong   Shanghai Bank',7092),(8,'Indian Bank',7108),(9,'Indian Overseas Bank',7117),(10,'Peoples Bank',7135),(11,'State Bank of India',7144),(12,'Nations Trust Bank PLC',7162),(13,'Deutsche Bank',7205),(14,'National Development Bank PLC',7214),(15,'MCB Bank Ltd',7269),(16,'Sampath Bank PLC',7278),(17,'Seylan Bank PLC',7287),(18,'Public Bank',7296),(19,'Union Bank of Colombo PLC',7302),(20,'Pan Asia Banking Corporation PLC',7311),(21,'ICICI Bank Ltd',7384),(22,'DFCC Vardhana Bank Ltd',7454),(23,'Amana Bank',7463),(24,'Axis Bank',7472),(25,'National Savings Bank',7719),(26,'Sanasa Development Bank',7728),(27,'HDFC Bank',7737),(28,'Citizen Development Business Finance PLC',7746),(29,'Regional Development Bank',7755),(30,'State Mortgage & Investment Bank',7764),(31,'LB Finance PLC',7773),(32,'Central Bank of Sri Lanka',8004),(33,'Bank of dkf',230000);

/*Table structure for table `bankbranch` */

DROP TABLE IF EXISTS `bankbranch`;

CREATE TABLE `bankbranch` (
  `branchid` int(11) NOT NULL AUTO_INCREMENT,
  `branchname` varchar(100) NOT NULL,
  PRIMARY KEY (`branchid`)
) ENGINE=InnoDB AUTO_INCREMENT=557 DEFAULT CHARSET=latin1;

/*Data for the table `bankbranch` */

insert  into `bankbranch`(`branchid`,`branchname`) values (1,'City Office'),(2,'Kandy'),(3,'Galle Fort'),(4,'Pettah'),(5,'Jaffna'),(6,'Trincomalee'),(7,'Panadura'),(8,'Kurunegala'),(9,'Badulla'),(10,'Batticaloa'),(11,'Central Office'),(12,'Kalutara'),(13,'Negombo'),(14,'Chilaw'),(15,'Ampara'),(16,'Anuradhapura'),(17,'Wellawatte'),(18,'Matara'),(19,'Main Street'),(20,'Kegalle'),(21,'Point Pedro'),(22,'Nuwara Eliya'),(23,'Katubedda'),(24,'Ratnapura'),(25,'Aluthkade'),(26,'Kollupitiya'),(27,'Haputale'),(28,'Bambalapitiya'),(29,'Borella'),(30,'Ja Ela'),(31,'Hatton'),(32,'Maradana'),(33,'Peliyagoda'),(34,'Union Place'),(35,'Vavuniya'),(36,'Gampaha'),(37,'Mannar'),(38,'Ambalangoda'),(39,'Puttalam'),(40,'Nugegoda'),(41,'Nattandiya'),(42,'Dehiwala'),(43,'Kuliyapitiya'),(44,'Chunnakam'),(45,'Horana'),(46,'Maharagama'),(47,'Tangalle'),(48,'Eheliyagoda'),(49,'Beruwala'),(50,'Kadawatha'),(51,'Fifth City'),(52,'Idama-Moratuwa'),(53,'Velanai'),(54,'Matale'),(55,'Monaragala'),(56,'Polonnaruwa New Town'),(57,'Hambantota'),(58,'International Division'),(59,'Mirigama'),(60,'Galle Bazaar'),(61,'Naula'),(62,'Kilinochchi'),(63,'Anuradhapura New Town'),(64,'Primary Dealer Unit'),(65,'Galaha'),(66,'Bentota'),(67,'Welpalla'),(68,'Muttur'),(69,'Galenbindunuwewa'),(70,'Padavi Parakramapura'),(71,'Imaduwa'),(72,'Weeraketiya'),(73,'Yatawatte'),(74,'Pemaduwa'),(75,'Tirappane'),(76,'Medawachchiya'),(77,'Rikillagaskada'),(78,'Kobeigane'),(79,'Sewagama'),(80,'Horowpathana'),(81,'Ipalogama'),(82,'Medagama'),(83,'Tawalama'),(84,'Malkaduwawa'),(85,'Thanthirimale'),(86,'Mawathagama'),(87,'Elakanda'),(88,'Rathgama'),(89,'Diyatalawa'),(90,'Katuwana'),(91,'Kekanadura'),(92,'Kosmodera'),(93,'Kudawella'),(94,'Lunugamvehera'),(95,'Maha-Edanda'),(96,'Makandura - Matara'),(97,'Malimbada'),(98,'Morawaka'),(99,'Pasgoda'),(100,'Pitabeddara'),(101,'Digana'),(102,'Weli-Oya'),(103,'Ahangama'),(104,'Aluthwala'),(105,'Barawakumbura'),(106,'Karapitiya'),(107,'Manipay'),(108,'Kitulgala'),(109,'Kolonna'),(110,'Kotiyakumbura'),(111,'Morontota'),(112,'Pinnawala'),(113,'Sabaragamuwa Provincial Council'),(114,'Seethawakapura'),(115,'Udawalawe'),(116,'Weligepola'),(117,'Dodangoda'),(118,'Karawanella'),(119,'Karawita'),(120,'Kegalle Hospital'),(121,'Urubokka'),(122,'Makandura'),(123,'Marawila'),(124,'Palaviya'),(125,'Pallama'),(126,'Paragahadeniya'),(127,'Thoduwawa'),(128,'Udappuwa'),(129,'Weerapokuna'),(130,'Wellawa'),(131,'Bulathkohupitiya'),(132,'Embilipitiya City'),(133,'Endana'),(134,'Galigamuwa'),(135,'Ratnapura Hospital'),(136,'Gonagaldeniya'),(137,'Kiriella'),(138,'Potuvil'),(139,'Mahawewa'),(140,'Ballaketuwa'),(141,'Thanamalwila'),(142,'Kochchikade'),(143,'Kumbukgete'),(144,'Kuruwita'),(145,'Thirumurukandi'),(146,'Visuvamadu'),(147,'Ambanpola'),(148,'Anawilundawa'),(149,'Dambadeniya'),(150,'Katuneriya'),(151,'Katupotha'),(152,'Kirimetiyana'),(153,'Mihintale'),(154,'Thalaimannar Pier'),(155,'Pussellawa'),(156,'Savalkaddu'),(157,'Sirupiddy'),(158,'Wattegama'),(159,'Puthukudieruppu'),(160,'Puthukulam'),(161,'Uva Paranagama'),(162,'Pesalai'),(163,'Poonagary'),(164,'Poovarasankulam'),(165,'Padiyatalawa'),(166,'Mallavi'),(167,'Manthikai'),(168,'Mulankavil'),(169,'Mulliyawalai'),(170,'Murungan'),(171,'Nainativu'),(172,'Nallur'),(173,'Nanatan'),(174,'Nedunkerny'),(175,'Oddusudan'),(176,'Omanthai'),(177,'Pallai'),(178,'Paranthan'),(179,'Jaffna Bus Stand'),(180,'Jaffna Main Street'),(181,'Jaffna University'),(182,'Kaithady'),(183,'Kalviyankadu'),(184,'Karanavai'),(185,'Kayts'),(186,'Kodikamam'),(187,'Kokuvil'),(188,'Madhu'),(189,'Wariyapola'),(190,'Alaveddy'),(191,'Andankulam'),(192,'Cheddikulam'),(193,'Meegahakiwula'),(194,'Vavunathivu'),(195,'Vellaveli'),(196,'Diyabeduma'),(197,'Diyasenpura'),(198,'Doramadalawa'),(199,'Galamuna'),(200,'General Hospital, A\' pura'),(201,'Habarana'),(202,'Minneriya'),(203,'Padaviya'),(204,'Rajanganaya'),(205,'Rajina Junction'),(206,'Ranajayapura'),(207,'Sevanapitiya'),(208,'Thalawa'),(209,'Ayagama'),(210,'Oddamavady'),(211,'Oluwil'),(212,'Palugamam'),(213,'Polwatte'),(214,'Palmuddai'),(215,'Sainthamarathu'),(216,'Serunuwara'),(217,'Thambiluvil'),(218,'Thampalakamam'),(219,'Thoppur'),(220,'Uhana'),(221,'Uppuvely'),(222,'Vakarai'),(223,'Siyambalanduwa'),(224,'Mollipothana'),(225,'Morawewa'),(226,'Navithanvely'),(227,'Nilavely'),(228,'Seeduwa'),(229,'Malwatte'),(230,'Mamangama'),(231,'Maruthamunai'),(232,'Pundaluoya'),(233,'Kallady'),(234,'Kallar'),(235,'Karadiyanaru'),(236,'Karaitivu'),(237,'Kiran'),(238,'Kokkadicholai'),(239,'Galewela'),(240,'Divulapitiya'),(241,'Wellawaya'),(242,'China Bay'),(243,'Gonagolla'),(244,'Irakkamam'),(245,'Samanthurai'),(246,'Pujapitiya'),(247,'Ragala'),(248,'Sigiriya'),(249,'Ukuwela'),(250,'Upcott'),(251,'Wilgamuwa'),(252,'Addalachchenai'),(253,'Alankerny'),(254,'Araiyampathy'),(255,'Batticaloa Town'),(256,'Independent  Square'),(257,'Kotagala'),(258,'Marassana'),(259,'Meepilimana'),(260,'Menikhinna'),(261,'Palapathwela'),(262,'Botanical Gardens Peradeniya'),(263,'Haldummulla'),(264,'Bokkawala'),(265,'Danture'),(266,'Daulagala'),(267,'Digana Village'),(268,'Gampola City'),(269,'Hatharaliyadda'),(270,'Ginigathhena'),(271,'Kandy City Centre'),(272,'Court Complex Kandy'),(273,'Ettampitiya'),(274,'Yatiyantota'),(275,'Adikarigama'),(276,'Agarapathana'),(277,'Akurana'),(278,'Ankumbura'),(279,'Bogawantalawa'),(280,'Padiyapelella'),(281,'Andiambalama'),(282,'Dankotuwa'),(283,'Alawwa'),(284,'Wijerama Junction'),(285,'Jaffna 2nd Branch'),(286,'Chavakachcheri'),(287,'Kaduruwela'),(288,'Passara'),(289,'Devinuwara'),(290,'Wattala'),(291,'Maskeliya'),(292,'Kahawatte'),(293,'Wennappuwa'),(294,'Hingurana'),(295,'Kalmunai'),(296,'Mullaitivu'),(297,'Thimbirigasyaya'),(298,'Kurunegala Bazaar'),(299,'Galnewa'),(300,'Bandarawela'),(301,'Thalawathugoda'),(302,'Walasmulla'),(303,'Middeniya'),(304,'Sri Jayawardenapura Hospital'),(305,'Hyde Park'),(306,'Batapola'),(307,'Geli Oya'),(308,'Baddegama'),(309,'Polgahawela'),(310,'Welisara'),(311,'Deniyaya'),(312,'Kamburupitiya'),(313,'Avissawella'),(314,'Talawakelle'),(315,'Ridigama'),(316,'Pitakotte'),(317,'Narammala'),(318,'Embilipitiya'),(319,'Kegalle Bazaar'),(320,'Ambalantota'),(321,'Tissamaharama'),(322,'Beliatta'),(323,'Badalkumbura'),(324,'Pelawatte City Kalutara'),(325,'Mahiyangana'),(326,'Kiribathgoda'),(327,'Madampe'),(328,'Minuwangoda'),(329,'Pannala'),(330,'Nikaweratiya'),(331,'Anamaduwa'),(332,'Galgamuwa'),(333,'Weligama'),(334,'Anuradhapura Bazzar'),(335,'Giriulla'),(336,'Bingiriya'),(337,'Melsiripura'),(338,'Matugama'),(339,'Moratumulla'),(340,'Waikkal'),(341,'Mawanella'),(342,'Buttala'),(343,'Dematagoda'),(344,'Warakapola'),(345,'Dharga Town'),(346,'Maho'),(347,'Madurankuliya'),(348,'Aranayake'),(349,'Dedicated Economic Centre - Meegoda'),(350,'Homagama'),(351,'Hiripitiya'),(352,'Hettipola'),(353,'Kirindiwela'),(354,'Negombo Bazzar'),(355,'Central Bus Stand'),(356,'Mankulam'),(357,'Gampola'),(358,'Dambulla'),(359,'Lunugala'),(360,'Yakkalamulla'),(361,'Bibile'),(362,'Dummalasuriya'),(363,'Madawala'),(364,'Rambukkana'),(365,'Mattegoda'),(366,'Wadduwa'),(367,'Ruwanwella'),(368,'Pilimatalawa'),(369,'Peradeniya'),(370,'Kalpitiya'),(371,'Akkaraipattu'),(372,'Nintavur'),(373,'Dikwella'),(374,'Milagiriya'),(375,'Rakwana'),(376,'Kolonnawa'),(377,'Talgaswela'),(378,'Nivitigala'),(379,'Nawalapitiya'),(380,'Aralaganwila'),(381,'Jayanthipura'),(382,'Hingurakgoda'),(383,'Kirulapana'),(384,'Lanka Hospital'),(385,'Ingiriya'),(386,'Kankesanthurai'),(387,'Uda Dumbara'),(388,'Panadura Bazaar'),(389,'Kaduwela'),(390,'Hikkaduwa'),(391,'Pitigala'),(392,'Kaluwanchikudy'),(393,'Lake View'),(394,'Akuressa'),(395,'Matara City'),(396,'Galagedera'),(397,'Kataragama'),(398,'Keselwatte'),(399,'Metropolitan'),(400,'Elpitiya'),(401,'Kesbewa'),(402,'Kebithigollawa'),(403,'Kahatagasdigiliya'),(404,'Kantale Bazaar'),(405,'Trincomalee Bazaar'),(406,'Katukurunda'),(407,'Valachchenai'),(408,'Regent Street'),(409,'Grandpass'),(410,'Koslanda'),(411,'Chenkalady'),(412,'Kandapola'),(413,'Dehiowita'),(414,'Lake House'),(415,'Nelliady'),(416,'Rattota'),(417,'Pallepola'),(418,'Medirigiriya'),(419,'Deraniyagala'),(420,'Gonapola'),(421,'Parliamentary Complex'),(422,'Kalawana'),(423,'Boralesgamuwa'),(424,'Lunuwatte'),(425,'Kattankudy'),(426,'Kandy 2nd'),(427,'Talatuoya'),(428,'Bombuwela'),(429,'Bakamuna'),(430,'Galkiriyagama'),(431,'Madatugama'),(432,'Tambuttegama'),(433,'Nochchiyagama'),(434,'Agalawatta'),(435,'Katunayake I.P.Z.'),(436,'Corporate'),(437,'Baduraliya'),(438,'Kotahena'),(439,'Pothuhera'),(440,'Bandaragama'),(441,'Katugastota'),(442,'Neluwa'),(443,'Borella  2nd'),(444,'Girandurukotte'),(445,'Kollupitiya 2nd'),(446,'Central Super Market'),(447,'Bulathsinhala'),(448,'Enderamulla'),(449,'Nittambuwa'),(450,'Kekirawa'),(451,'Weliweriya'),(452,'Padukka'),(453,'Battaramulla'),(454,'Aluthgama'),(455,'Personal'),(456,'Veyangoda'),(457,'Pelmadulla'),(458,'Ratnapura Bazaar'),(459,'Ward Place'),(460,'Dehiattakandiya'),(461,'Raddolugama'),(462,'Balangoda'),(463,'Ratmalana'),(464,'Pelawatta'),(465,'Hakmana'),(466,'Eppawala'),(467,'Ruhunu Campus'),(468,'Bogahakumbura'),(469,'Ella'),(470,'Keppetipola'),(471,'Batuwatte'),(472,'Bopitiya'),(473,'Asiri Central'),(474,'Katuwellegama Courtaulds Clothing Lanka (Pvt) Ltd'),(475,'Dalugama'),(476,'Delgoda'),(477,'Fish Market Peliyagoda'),(478,'Demanhandiya'),(479,'Ganemulla'),(480,'Gothatuwa'),(481,'Mulleriyawa New Town'),(482,'Katana'),(483,'Naiwala'),(484,'Meegalewa'),(485,'Badulla City'),(486,'Welimada'),(487,'CEYBANK Credit card centre'),(488,'Biyagama'),(489,'Kinniya'),(490,'Piliyandala'),(491,'Hanwella'),(492,'Walapane'),(493,'Walgama'),(494,'Rajagiriya'),(495,'Taprobane'),(496,'Uragasmanhandiya'),(497,'Karainagar'),(498,'Koggala E.P.Z'),(499,'Suriyawewa'),(500,'Thihagoda'),(501,'Udugama'),(502,'Ahungalla'),(503,'Athurugiriya'),(504,'Treasury Division'),(505,'Thirunelvely'),(506,'Narahenpita'),(507,'Malabe'),(508,'Ragama'),(509,'Pugoda'),(510,'Mount Lavinia'),(511,'Ranna'),(512,'Alawathugoda'),(513,'Yakkala'),(514,'Ibbagamuwa'),(515,'Kandana'),(516,'Hemmathagama'),(517,'Kottawa'),(518,'Angunakolapelessa'),(519,'Visakha'),(520,'Islamic Banking Unit'),(521,'Atchuvely'),(522,'Norchcholei'),(523,'Kadawatha 2nd City'),(524,'Teldeniya'),(525,'Rambewa'),(526,'Polpithigama'),(527,'Deiyandara'),(528,'Hali ela'),(529,'Godakawela'),(530,'Kopay'),(531,'BOC premier'),(532,'Makola'),(533,'Eravur'),(534,'Valvettithurai'),(535,'Chankanai'),(536,'Vavuniya City'),(537,'Urumpirai'),(538,'Mattala Airport'),(539,'Medawala'),(540,'Wanduramba'),(541,'Provincial Council Complex, Pallakelle'),(542,'Welioya-Sampath Nuwara'),(543,'Vaddukoddai'),(544,'Madawakkulama'),(545,'Mahaoya'),(546,'Bogaswewa'),(547,'Kurunduwatte'),(548,'Ethimale'),(549,'Central Camp'),(550,'Aladeniya'),(551,'Corporate 2nd'),(552,'Head Office'),(553,'jjjjk3'),(554,'adf222212'),(555,'asd2'),(556,'eee');

/*Table structure for table `bankbranchcode` */

DROP TABLE IF EXISTS `bankbranchcode`;

CREATE TABLE `bankbranchcode` (
  `codeid` int(11) NOT NULL AUTO_INCREMENT,
  `bankid` int(11) NOT NULL,
  `branchid` int(11) NOT NULL,
  `branchcode` int(5) NOT NULL,
  `grade` int(11) NOT NULL,
  `address` text NOT NULL,
  `tel1` varchar(10) NOT NULL,
  `tel2` varchar(10) NOT NULL,
  PRIMARY KEY (`codeid`)
) ENGINE=InnoDB AUTO_INCREMENT=553 DEFAULT CHARSET=latin1;

/*Data for the table `bankbranchcode` */

insert  into `bankbranchcode`(`codeid`,`bankid`,`branchid`,`branchcode`,`grade`,`address`,`tel1`,`tel2`) values (1,1,1,1,0,'','',''),(2,1,2,2,0,'','',''),(3,1,3,3,0,'','',''),(4,1,4,4,0,'','',''),(5,1,5,5,0,'','',''),(6,1,6,6,0,'','',''),(7,1,7,7,0,'','',''),(8,1,8,9,0,'','',''),(9,1,9,11,0,'','',''),(10,1,10,12,0,'','',''),(11,1,11,15,0,'','',''),(12,1,12,16,1,'','',''),(13,1,13,18,0,'','',''),(14,1,14,20,0,'','',''),(15,1,15,21,0,'','',''),(16,1,16,22,0,'','',''),(17,1,17,23,0,'','',''),(18,1,18,24,0,'','',''),(19,1,19,26,0,'','',''),(20,1,20,27,0,'','',''),(21,1,21,28,0,'','',''),(22,1,22,29,0,'','',''),(23,1,23,30,0,'','',''),(24,1,24,31,0,'','',''),(25,1,25,32,0,'','',''),(26,1,26,34,0,'','',''),(27,1,27,35,0,'','',''),(28,1,28,37,0,'','',''),(29,1,29,38,1,'','',''),(30,1,30,39,0,'','',''),(31,1,31,40,0,'','',''),(32,1,32,41,0,'','',''),(33,1,33,42,0,'','',''),(34,1,34,43,0,'','',''),(35,1,35,44,0,'','',''),(36,1,36,45,1,'','',''),(37,1,37,46,0,'','',''),(38,1,38,47,0,'','',''),(39,1,39,48,0,'','',''),(40,1,40,49,0,'','',''),(41,1,41,50,0,'','',''),(42,1,42,51,0,'','',''),(43,1,43,52,0,'','',''),(44,1,44,53,0,'','',''),(45,1,45,54,0,'','',''),(46,1,46,55,0,'','',''),(47,1,47,56,0,'','',''),(48,1,48,57,0,'','',''),(49,1,49,58,0,'','',''),(50,1,50,59,0,'','',''),(51,1,51,60,0,'','',''),(52,1,52,61,0,'','',''),(53,1,53,63,0,'','',''),(54,1,54,68,0,'','',''),(55,1,55,82,0,'','',''),(56,1,56,83,0,'','',''),(57,1,57,85,0,'','',''),(58,1,58,87,0,'','',''),(59,1,59,88,0,'','',''),(60,1,60,89,0,'','',''),(61,1,61,92,0,'','',''),(62,1,62,93,0,'','',''),(63,1,63,98,0,'','',''),(64,1,64,99,0,'','',''),(65,1,65,101,0,'','',''),(66,1,66,102,0,'','',''),(67,1,67,104,0,'','',''),(68,1,68,118,0,'','',''),(69,1,69,122,0,'','',''),(70,1,70,127,0,'','',''),(71,1,71,135,0,'','',''),(72,1,72,139,0,'','',''),(73,1,73,144,0,'','',''),(74,1,74,152,0,'','',''),(75,1,75,157,0,'','',''),(76,1,76,162,0,'','',''),(77,1,77,167,0,'','',''),(78,1,78,172,0,'','',''),(79,1,79,183,0,'','',''),(80,1,80,217,0,'','',''),(81,1,81,236,0,'','',''),(82,1,82,238,0,'','',''),(83,1,83,250,0,'','',''),(84,1,84,255,0,'','',''),(85,1,85,256,0,'','',''),(86,1,86,257,0,'','',''),(87,1,87,258,0,'','',''),(88,1,88,259,0,'','',''),(89,1,89,260,0,'','',''),(90,1,90,261,0,'','',''),(91,1,91,262,0,'','',''),(92,1,92,263,0,'','',''),(93,1,93,264,0,'','',''),(94,1,94,265,0,'','',''),(95,1,95,266,0,'','',''),(96,1,96,267,0,'','',''),(97,1,97,268,0,'','',''),(98,1,98,270,0,'','',''),(99,1,99,271,0,'','',''),(100,1,100,272,0,'','',''),(101,1,101,273,0,'','',''),(102,1,102,274,0,'','',''),(103,1,103,276,0,'','',''),(104,1,104,277,0,'','',''),(105,1,105,278,0,'','',''),(106,1,106,280,0,'','',''),(107,1,107,281,0,'','',''),(108,1,108,282,0,'','',''),(109,1,109,283,0,'','',''),(110,1,110,284,0,'','',''),(111,1,111,285,0,'','',''),(112,1,112,287,0,'','',''),(113,1,113,288,0,'','',''),(114,1,114,290,0,'','',''),(115,1,115,291,0,'','',''),(116,1,116,292,0,'','',''),(117,1,117,293,0,'','',''),(118,1,118,294,0,'','',''),(119,1,119,295,0,'','',''),(120,1,120,297,0,'','',''),(121,1,121,298,0,'','',''),(122,1,122,299,0,'','',''),(123,1,123,300,0,'','',''),(124,1,124,301,0,'','',''),(125,1,125,302,0,'','',''),(126,1,126,303,0,'','',''),(127,1,127,305,0,'','',''),(128,1,128,306,0,'','',''),(129,1,129,308,0,'','',''),(130,1,130,309,0,'','',''),(131,1,131,311,0,'','',''),(132,1,132,312,0,'','',''),(133,1,133,313,0,'','',''),(134,1,134,314,0,'','',''),(135,1,135,315,0,'','',''),(136,1,136,316,0,'','',''),(137,1,137,317,0,'','',''),(138,1,138,318,0,'','',''),(139,1,139,319,0,'','',''),(140,1,140,320,0,'','',''),(141,1,141,322,0,'','',''),(142,1,142,323,0,'','',''),(143,1,143,324,0,'','',''),(144,1,144,325,0,'','',''),(145,1,145,326,0,'','',''),(146,1,146,328,0,'','',''),(147,1,147,329,0,'','',''),(148,1,148,330,0,'','',''),(149,1,149,331,0,'','',''),(150,1,150,332,0,'','',''),(151,1,151,333,0,'','',''),(152,1,152,334,0,'','',''),(153,1,153,335,0,'','',''),(154,1,154,336,0,'','',''),(155,1,155,337,0,'','',''),(156,1,156,338,0,'','',''),(157,1,157,339,0,'','',''),(158,1,158,340,0,'','',''),(159,1,159,341,0,'','',''),(160,1,160,342,0,'','',''),(161,1,161,343,0,'','',''),(162,1,162,344,0,'','',''),(163,1,163,345,0,'','',''),(164,1,164,346,0,'','',''),(165,1,165,348,0,'','',''),(166,1,166,349,0,'','',''),(167,1,167,351,0,'','',''),(168,1,168,353,0,'','',''),(169,1,169,355,0,'','',''),(170,1,170,356,0,'','',''),(171,1,171,357,0,'','',''),(172,1,172,358,0,'','',''),(173,1,173,359,0,'','',''),(174,1,174,360,0,'','',''),(175,1,175,361,0,'','',''),(176,1,176,362,0,'','',''),(177,1,177,363,0,'','',''),(178,1,178,364,0,'','',''),(179,1,179,366,0,'','',''),(180,1,180,368,0,'','',''),(181,1,181,369,0,'','',''),(182,1,182,370,0,'','',''),(183,1,183,371,0,'','',''),(184,1,184,372,0,'','',''),(185,1,185,373,0,'','',''),(186,1,186,375,0,'','',''),(187,1,187,376,0,'','',''),(188,1,188,378,0,'','',''),(189,1,189,379,0,'','',''),(190,1,190,380,0,'','',''),(191,1,191,381,0,'','',''),(192,1,192,382,0,'','',''),(193,1,193,384,0,'','',''),(194,1,194,385,0,'','',''),(195,1,195,386,0,'','',''),(196,1,196,388,0,'','',''),(197,1,197,389,0,'','',''),(198,1,198,390,0,'','',''),(199,1,199,391,0,'','',''),(200,1,200,392,0,'','',''),(201,1,201,393,0,'','',''),(202,1,202,394,0,'','',''),(203,1,203,395,0,'','',''),(204,1,204,396,0,'','',''),(205,1,205,397,0,'','',''),(206,1,206,398,0,'','',''),(207,1,207,399,0,'','',''),(208,1,208,400,0,'','',''),(209,1,209,401,0,'','',''),(210,1,210,402,0,'','',''),(211,1,211,403,0,'','',''),(212,1,212,404,0,'','',''),(213,1,213,405,0,'','',''),(214,1,214,406,0,'','',''),(215,1,215,407,0,'','',''),(216,1,216,408,0,'','',''),(217,1,217,409,0,'','',''),(218,1,218,410,0,'','',''),(219,1,219,411,0,'','',''),(220,1,220,413,0,'','',''),(221,1,221,414,0,'','',''),(222,1,222,415,0,'','',''),(223,1,223,416,0,'','',''),(224,1,224,417,0,'','',''),(225,1,225,418,0,'','',''),(226,1,226,419,0,'','',''),(227,1,227,420,0,'','',''),(228,1,228,421,0,'','',''),(229,1,229,422,0,'','',''),(230,1,230,423,0,'','',''),(231,1,231,424,0,'','',''),(232,1,232,425,0,'','',''),(233,1,233,426,0,'','',''),(234,1,234,427,0,'','',''),(235,1,235,428,0,'','',''),(236,1,236,429,0,'','',''),(237,1,237,430,0,'','',''),(238,1,238,431,0,'','',''),(239,1,239,432,0,'','',''),(240,1,240,433,0,'','',''),(241,1,241,434,0,'','',''),(242,1,242,436,0,'','',''),(243,1,243,438,0,'','',''),(244,1,244,439,0,'','',''),(245,1,245,440,0,'','',''),(246,1,246,441,0,'','',''),(247,1,247,442,0,'','',''),(248,1,248,443,0,'','',''),(249,1,249,444,0,'','',''),(250,1,250,446,0,'','',''),(251,1,251,447,0,'','',''),(252,1,252,448,0,'','',''),(253,1,253,449,0,'','',''),(254,1,254,451,0,'','',''),(255,1,255,452,0,'','',''),(256,1,256,453,0,'','',''),(257,1,257,455,0,'','',''),(258,1,258,456,0,'','',''),(259,1,259,458,0,'','',''),(260,1,260,459,0,'','',''),(261,1,261,461,0,'','',''),(262,1,262,462,0,'','',''),(263,1,263,463,0,'','',''),(264,1,264,465,0,'','',''),(265,1,265,466,0,'','',''),(266,1,266,467,0,'','',''),(267,1,267,469,0,'','',''),(268,1,268,470,0,'','',''),(269,1,269,472,0,'','',''),(270,1,270,471,0,'','',''),(271,1,271,473,0,'','',''),(272,1,272,474,0,'','',''),(273,1,273,476,0,'','',''),(274,1,274,477,0,'','',''),(275,1,275,487,0,'','',''),(276,1,276,488,0,'','',''),(277,1,277,489,0,'','',''),(278,1,278,490,0,'','',''),(279,1,279,491,0,'','',''),(280,1,280,492,0,'','',''),(281,1,281,494,0,'','',''),(282,1,282,497,0,'','',''),(283,1,283,498,0,'','',''),(284,1,284,499,0,'','',''),(285,1,285,500,0,'','',''),(286,1,286,501,0,'','',''),(287,1,287,502,0,'','',''),(288,1,288,503,0,'','',''),(289,1,289,504,0,'','',''),(290,1,290,505,0,'','',''),(291,1,291,506,0,'','',''),(292,1,292,507,0,'','',''),(293,1,293,508,0,'','',''),(294,1,294,509,0,'','',''),(295,1,295,510,0,'','',''),(296,1,296,511,0,'','',''),(297,1,297,512,0,'','',''),(298,1,298,513,0,'','',''),(299,1,299,514,0,'','',''),(300,1,300,515,0,'','',''),(301,1,301,516,0,'','',''),(302,1,302,517,0,'','',''),(303,1,303,518,0,'','',''),(304,1,304,520,0,'','',''),(305,1,305,521,0,'','',''),(306,1,306,522,0,'','',''),(307,1,307,524,0,'','',''),(308,1,308,525,0,'','',''),(309,1,309,526,0,'','',''),(310,1,310,527,0,'','',''),(311,1,311,528,0,'','',''),(312,1,312,529,0,'','',''),(313,1,313,530,0,'','',''),(314,1,314,531,0,'','',''),(315,1,315,532,0,'','',''),(316,1,316,533,0,'','',''),(317,1,317,534,0,'','',''),(318,1,318,535,0,'','',''),(319,1,319,536,0,'','',''),(320,1,320,537,0,'','',''),(321,1,321,538,0,'','',''),(322,1,322,539,0,'','',''),(323,1,323,540,0,'','',''),(324,1,324,541,0,'','',''),(325,1,325,542,0,'','',''),(326,1,326,543,0,'','',''),(327,1,327,544,0,'','',''),(328,1,328,545,0,'','',''),(329,1,329,546,0,'','',''),(330,1,330,547,0,'','',''),(331,1,331,548,0,'','',''),(332,1,332,549,0,'','',''),(333,1,333,550,0,'','',''),(334,1,334,551,0,'','',''),(335,1,335,553,0,'','',''),(336,1,336,554,0,'','',''),(337,1,337,555,0,'','',''),(338,1,338,556,0,'','',''),(339,1,339,557,0,'','',''),(340,1,340,558,0,'','',''),(341,1,341,559,0,'','',''),(342,1,342,560,0,'','',''),(343,1,343,561,0,'','',''),(344,1,344,562,0,'','',''),(345,1,345,563,0,'','',''),(346,1,346,564,0,'','',''),(347,1,347,565,0,'','',''),(348,1,348,566,0,'','',''),(349,1,349,567,0,'','',''),(350,1,350,568,0,'','',''),(351,1,351,569,0,'','',''),(352,1,352,570,0,'','',''),(353,1,353,571,0,'','',''),(354,1,354,572,0,'','',''),(355,1,355,573,0,'','',''),(356,1,356,574,0,'','',''),(357,1,357,575,0,'','',''),(358,1,358,576,0,'','',''),(359,1,359,577,0,'','',''),(360,1,360,578,0,'','',''),(361,1,361,579,0,'','',''),(362,1,362,580,0,'','',''),(363,1,363,581,0,'','',''),(364,1,364,582,0,'','',''),(365,1,365,583,0,'','',''),(366,1,366,584,0,'','',''),(367,1,367,585,0,'','',''),(368,1,368,587,0,'','',''),(369,1,369,588,0,'','',''),(370,1,370,589,0,'','',''),(371,1,371,590,0,'','',''),(372,1,372,591,0,'','',''),(373,1,373,592,0,'','',''),(374,1,374,593,0,'','',''),(375,1,375,594,0,'','',''),(376,1,376,595,0,'','',''),(377,1,377,596,0,'','',''),(378,1,378,597,0,'','',''),(379,1,379,598,0,'','',''),(380,1,380,599,0,'','',''),(381,1,381,600,0,'','',''),(382,1,382,601,0,'','',''),(383,1,383,602,0,'','',''),(384,1,384,603,0,'','',''),(385,1,385,604,0,'','',''),(386,1,386,605,0,'','',''),(387,1,387,606,0,'','',''),(388,1,388,607,0,'','',''),(389,1,389,608,0,'','',''),(390,1,390,609,0,'','',''),(391,1,391,610,0,'','',''),(392,1,392,611,0,'','',''),(393,1,393,612,0,'','',''),(394,1,394,613,0,'','',''),(395,1,395,614,0,'','',''),(396,1,396,615,0,'','',''),(397,1,397,616,0,'','',''),(398,1,398,617,0,'','',''),(399,1,399,618,0,'','',''),(400,1,400,619,0,'','',''),(401,1,401,620,0,'','',''),(402,1,402,621,0,'','',''),(403,1,403,622,0,'','',''),(404,1,404,623,0,'','',''),(405,1,405,624,0,'','',''),(406,1,406,625,0,'','',''),(407,1,407,626,0,'','',''),(408,1,408,627,0,'','',''),(409,1,409,628,0,'','',''),(410,1,410,629,0,'','',''),(411,1,411,630,0,'','',''),(412,1,412,633,0,'','',''),(413,1,413,634,0,'','',''),(414,1,414,636,0,'','',''),(415,1,415,638,0,'','',''),(416,1,416,639,0,'','',''),(417,1,417,640,0,'','',''),(418,1,418,641,0,'','',''),(419,1,419,642,0,'','',''),(420,1,420,643,0,'','',''),(421,1,421,644,0,'','',''),(422,1,422,645,0,'','',''),(423,1,423,646,0,'','',''),(424,1,424,647,0,'','',''),(425,1,425,648,0,'','',''),(426,1,426,649,0,'','',''),(427,1,427,650,0,'','',''),(428,1,428,651,0,'','',''),(429,1,429,652,0,'','',''),(430,1,430,653,0,'','',''),(431,1,431,654,0,'','',''),(432,1,432,655,0,'','',''),(433,1,433,656,0,'','',''),(434,1,434,657,0,'','',''),(435,1,435,658,0,'','',''),(436,1,436,660,0,'','',''),(437,1,437,662,0,'','',''),(438,1,438,663,0,'','',''),(439,1,439,664,0,'','',''),(440,1,440,665,0,'','',''),(441,1,441,666,0,'','',''),(442,1,442,667,0,'','',''),(443,1,443,668,0,'','',''),(444,1,444,669,0,'','',''),(445,1,445,670,0,'','',''),(446,1,446,672,0,'','',''),(447,1,447,673,0,'','',''),(448,1,448,674,0,'','',''),(449,1,449,675,0,'','',''),(450,1,450,676,0,'','',''),(451,1,451,677,0,'','',''),(452,1,452,678,0,'','',''),(453,1,453,679,0,'','',''),(454,1,454,680,0,'','',''),(455,1,455,681,0,'','',''),(456,1,456,682,0,'','',''),(457,1,457,683,0,'','',''),(458,1,458,684,0,'','',''),(459,1,459,685,0,'','',''),(460,1,460,686,0,'','',''),(461,1,461,687,0,'','',''),(462,1,462,688,0,'','',''),(463,1,463,689,0,'','',''),(464,1,464,690,0,'','',''),(465,1,465,691,0,'','',''),(466,1,466,692,0,'','',''),(467,1,467,693,0,'','',''),(468,1,468,699,0,'','',''),(469,1,469,701,0,'','',''),(470,1,470,703,0,'','',''),(471,1,471,708,0,'','',''),(472,1,472,711,0,'','',''),(473,1,473,713,0,'','',''),(474,1,474,714,0,'','',''),(475,1,475,715,0,'','',''),(476,1,476,716,0,'','',''),(477,1,477,718,0,'','',''),(478,1,478,717,0,'','',''),(479,1,479,720,0,'','',''),(480,1,480,721,0,'','',''),(481,1,481,723,0,'','',''),(482,1,482,722,0,'','',''),(483,1,483,724,0,'','',''),(484,1,484,728,0,'','',''),(485,1,485,729,0,'','',''),(486,1,486,730,0,'','',''),(487,1,487,731,0,'','',''),(488,1,488,732,0,'','',''),(489,1,489,735,0,'','',''),(490,1,490,736,0,'','',''),(491,1,491,741,0,'','',''),(492,1,492,743,0,'','',''),(493,1,493,744,0,'','',''),(494,1,494,746,0,'','',''),(495,1,495,747,0,'','',''),(496,1,496,748,0,'','',''),(497,1,497,749,0,'','',''),(498,1,498,750,0,'','',''),(499,1,499,751,0,'','',''),(500,1,500,752,0,'','',''),(501,1,501,753,0,'','',''),(502,1,502,754,0,'','',''),(503,1,503,757,0,'','',''),(504,1,504,760,0,'','',''),(505,1,505,761,0,'','',''),(506,1,506,762,0,'','',''),(507,1,507,763,0,'','',''),(508,1,508,764,0,'','',''),(509,1,509,765,0,'','',''),(510,1,510,766,0,'','',''),(511,1,511,767,0,'','',''),(512,1,512,768,0,'','',''),(513,1,513,769,0,'','',''),(514,1,514,770,0,'','',''),(515,1,515,771,0,'','',''),(516,1,516,772,0,'','',''),(517,1,517,773,0,'','',''),(518,1,518,774,0,'','',''),(519,1,519,775,0,'','',''),(520,1,520,776,0,'','',''),(521,1,521,778,0,'','',''),(522,1,522,779,0,'','',''),(523,1,523,780,0,'','',''),(524,1,524,781,0,'','',''),(525,1,525,782,0,'','',''),(526,1,526,783,0,'','',''),(527,1,527,784,0,'','',''),(528,1,528,785,0,'','',''),(529,1,529,786,0,'','',''),(530,1,530,787,0,'','',''),(531,1,531,788,0,'','',''),(532,1,532,789,0,'','',''),(533,1,533,790,0,'','',''),(534,1,534,791,0,'','',''),(535,1,535,792,0,'','',''),(536,1,536,793,0,'','',''),(537,1,537,794,0,'','',''),(538,1,538,796,0,'','',''),(539,1,539,797,0,'','',''),(540,1,540,800,0,'','',''),(541,1,541,802,0,'','',''),(542,1,542,803,0,'','',''),(543,1,543,804,0,'','',''),(544,1,544,805,0,'','',''),(545,1,545,806,0,'','',''),(546,1,546,808,0,'','',''),(547,1,547,809,0,'','',''),(548,1,548,810,0,'','',''),(549,1,549,811,0,'','',''),(550,1,550,812,0,'','',''),(551,1,551,822,0,'','',''),(552,1,552,999,0,'','','');

/*Table structure for table `boardofdirectors` */

DROP TABLE IF EXISTS `boardofdirectors`;

CREATE TABLE `boardofdirectors` (
  `boardofdirid` int(11) NOT NULL AUTO_INCREMENT,
  `comid` int(11) NOT NULL,
  `dirid` int(11) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `appointeddate` date NOT NULL,
  PRIMARY KEY (`boardofdirid`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `boardofdirectors` */

insert  into `boardofdirectors`(`boardofdirid`,`comid`,`dirid`,`designation`,`appointeddate`) values (5,1,1,'3','2016-12-11'),(7,1,2,'erer','2016-08-01'),(10,1,3,'ee','2016-08-26'),(11,1,8,'ee','2016-08-28'),(12,1,7,'123','2016-08-28'),(13,1,12,'df','2016-09-01'),(14,2,3,'hh','2016-09-03'),(15,2,1,'3','2016-09-04'),(16,2,4,'hh','2016-09-04'),(17,2,6,'df','2016-09-04');

/*Table structure for table `branchgrade` */

DROP TABLE IF EXISTS `branchgrade`;

CREATE TABLE `branchgrade` (
  `gradeid` int(11) NOT NULL AUTO_INCREMENT,
  `gradename` varchar(50) NOT NULL,
  PRIMARY KEY (`gradeid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `branchgrade` */

insert  into `branchgrade`(`gradeid`,`gradename`) values (1,'Super Grade'),(2,'Grade A'),(3,'Grade B'),(4,'Grade C'),(5,'Grade 1'),(6,'ffrr');

/*Table structure for table `brokerbankacc` */

DROP TABLE IF EXISTS `brokerbankacc`;

CREATE TABLE `brokerbankacc` (
  `brobankid` int(11) NOT NULL AUTO_INCREMENT,
  `brokercomid` int(11) NOT NULL,
  `bankid` int(11) NOT NULL,
  `branchid` int(11) NOT NULL,
  `bankaccno` int(15) NOT NULL,
  PRIMARY KEY (`brobankid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `brokerbankacc` */

/*Table structure for table `brokercompany` */

DROP TABLE IF EXISTS `brokercompany`;

CREATE TABLE `brokercompany` (
  `brokercomid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `symbol` varchar(10) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `address3` varchar(100) NOT NULL,
  `address4` varchar(100) NOT NULL,
  `address5` varchar(100) NOT NULL,
  `tel1` varchar(10) NOT NULL,
  `tel2` varchar(10) NOT NULL,
  `tel3` varchar(10) NOT NULL,
  `fax` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `contactperson` varchar(150) NOT NULL,
  `conpersondesignation` varchar(50) NOT NULL,
  `brokerid` int(11) NOT NULL,
  `brocomtypeid` int(11) NOT NULL,
  PRIMARY KEY (`brokercomid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `brokercompany` */

insert  into `brokercompany`(`brokercomid`,`name`,`symbol`,`address1`,`address2`,`address3`,`address4`,`address5`,`tel1`,`tel2`,`tel3`,`fax`,`email`,`website`,`contactperson`,`conpersondesignation`,`brokerid`,`brocomtypeid`) values (1,'Lanka Securities','LSL','No 35','Gall road','Colombo 3','----------','Sri Lanka','','','','','','','','',0,1),(2,'Asia Securities','ASL','No 1/115','Timbirigasyaya Road','Narahenpita','Colombo 5','3434','','','','','','','','',0,2),(3,'Equity Stock Brokers','ESB','No 335','Nawam Nawatha','Colombo 2','dfkjd','dfjmmm','','','','','','','','',0,2),(4,'Sampath Stock Brokers','SSB','No 450','D. R. Wejewardana Mawatha','Colombo 10','dkj','dfjfff','','','','','','','','',0,3),(5,'NDB Stock Broker','NDB','325/2','NDB House','3rd Floor','Nawam Mawatha','Colombo 2','','','','','','','','',0,1);

/*Table structure for table `brokercomtype` */

DROP TABLE IF EXISTS `brokercomtype`;

CREATE TABLE `brokercomtype` (
  `brocomtypeid` int(11) NOT NULL AUTO_INCREMENT,
  `typeslug` varchar(30) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`brocomtypeid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `brokercomtype` */

insert  into `brokercomtype`(`brocomtypeid`,`typeslug`,`type`) values (1,'members','Members'),(2,'trading-members','Trading Members'),(3,'debt-trading-members','Trading Members-Debt'),(4,'','thyh2');

/*Table structure for table `cal` */

DROP TABLE IF EXISTS `cal`;

CREATE TABLE `cal` (
  `calid` int(11) NOT NULL AUTO_INCREMENT,
  `transactionname` varchar(50) NOT NULL,
  `transcostupto50` double NOT NULL,
  `transcostover50` double NOT NULL,
  `units` double NOT NULL,
  PRIMARY KEY (`calid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `cal` */

insert  into `cal`(`calid`,`transactionname`,`transcostupto50`,`transcostover50`,`units`) values (1,'Brrokerage Fee',0.64,0.2,0.02),(2,'CSE Fee',0.084,0.0525,0.01),(3,'CDS Fee',0.024,0.015,0.02),(4,'SEC Cess',0.072,0.045,0.02),(5,'SLT',0.3,0.3,0);

/*Table structure for table `cdsaccount` */

DROP TABLE IF EXISTS `cdsaccount`;

CREATE TABLE `cdsaccount` (
  `cdsaccid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `brokercomid` int(11) NOT NULL,
  `stockbrokerid` int(11) NOT NULL,
  `cdsaccno` varchar(15) NOT NULL,
  `opendate` date NOT NULL,
  PRIMARY KEY (`cdsaccid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `cdsaccount` */

insert  into `cdsaccount`(`cdsaccid`,`userid`,`brokercomid`,`stockbrokerid`,`cdsaccno`,`opendate`) values (1,0,1,1,'101','2016-08-01'),(2,0,2,2,'102','2016-08-02'),(3,0,5,3,'105','2016-08-03'),(4,0,3,4,'104','2016-08-04'),(5,0,5,5,'6665645','2016-08-06');

/*Table structure for table `company` */

DROP TABLE IF EXISTS `company`;

CREATE TABLE `company` (
  `comid` int(4) NOT NULL AUTO_INCREMENT,
  `symbol` varchar(10) NOT NULL,
  `com_name` varchar(100) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `address3` varchar(100) NOT NULL,
  `address4` varchar(100) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `fax` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `sectorid` int(11) NOT NULL,
  `boardid` varchar(50) NOT NULL,
  `quoteddate` date NOT NULL,
  `secid` int(11) NOT NULL,
  `chairman` text NOT NULL,
  `ceo` text NOT NULL,
  `deputychairman` text NOT NULL,
  `dirid` int(11) NOT NULL,
  PRIMARY KEY (`comid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `company` */

insert  into `company`(`comid`,`symbol`,`com_name`,`address1`,`address2`,`address3`,`address4`,`tel`,`fax`,`email`,`website`,`sectorid`,`boardid`,`quoteddate`,`secid`,`chairman`,`ceo`,`deputychairman`,`dirid`) values (1,'JKH','JOHN KEELS HOLDINGS PLC','NO 350','Keel House','Galle Road','Colombo1','0115252552','011254879','info@keels.lk','www.keels.lk',2,'1','1949-02-13',3,'Mr. Gamage','Mr. Prageeth','Mr. Nimal Ranjith',0),(2,'SAMP','SAMPATH BANK PLC','Nawam Nawatha','Colombo2','o','o','011556486','0','info@sampath.lk','www.sampath.lk',1,'2','0000-00-00',1,'0','o','o',0),(3,'NDB','NATIONAL DEVELOPMENT BANK PLC','GDGdd','DDFG','DFGDFG','DFGG','464564564','56657567','gdfgdf','gdfgfg',1,'1','0000-00-00',1,'fdgdf','fdgdfg','ddfgdfgd',0),(4,'GLAS','PIRAMAL GLASS','No 113/5','Borupana','Rathmalana','DFD','343232','34','DFD','EDF',2,'3','0000-00-00',2,'FER','DF','Silva',0),(5,'zzzzzzzzzz','zzzzzzzzzzzz','xxxxxxxxxx','xxxxxxxx','xxxxxxxx','xxxxxxxx','212121212','423424','mpsarathw@gmail.com','qwqwqw',2,'2','0000-00-00',2,'wwwwwwww','sdsdsd','fsdfdsfdsf',0);

/*Table structure for table `companysecretary` */

DROP TABLE IF EXISTS `companysecretary`;

CREATE TABLE `companysecretary` (
  `secid` int(11) NOT NULL AUTO_INCREMENT,
  `secretaryname` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `tel1` varchar(10) NOT NULL,
  `tel2` varchar(10) NOT NULL,
  `fax` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactperson` varchar(150) NOT NULL,
  PRIMARY KEY (`secid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `companysecretary` */

insert  into `companysecretary`(`secid`,`secretaryname`,`address`,`tel1`,`tel2`,`fax`,`email`,`contactperson`) values (1,'S S P Corporate Services','No2, Gothami Road, Colombo 8.','0112789456','0114789258','0112741453','ssp@mail.com','Mr. Saman'),(2,'J K R Secretary','No 10, R A De Mel Mawatha, Colombo 2.','0112756159','0112712486','0112896425','jkr@mail.com','Mr. Gamini Perera'),(3,'Softlogic Corprotate','Colombo 3','34','4434','535','soft@email.com','Mr. Janka');

/*Table structure for table `costname` */

DROP TABLE IF EXISTS `costname`;

CREATE TABLE `costname` (
  `costid` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`costid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `costname` */

insert  into `costname`(`costid`,`description`) values (1,'Upto Rs. 50 Mil'),(2,'Over Rs. 50 Mil'),(3,'Units');

/*Table structure for table `debtintreceivable` */

DROP TABLE IF EXISTS `debtintreceivable`;

CREATE TABLE `debtintreceivable` (
  `intrecid` int(11) NOT NULL AUTO_INCREMENT,
  `debtid` int(11) NOT NULL,
  `paymentdate` date NOT NULL,
  `amount` float NOT NULL,
  PRIMARY KEY (`intrecid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `debtintreceivable` */

/*Table structure for table `debtsecurity` */

DROP TABLE IF EXISTS `debtsecurity`;

CREATE TABLE `debtsecurity` (
  `debtid` int(11) NOT NULL AUTO_INCREMENT,
  `comid` int(11) NOT NULL,
  `debttype` varchar(150) NOT NULL,
  `securityid` varchar(50) NOT NULL,
  `isin` varchar(20) NOT NULL,
  `interstrate` int(11) NOT NULL,
  `maturitydate` date NOT NULL,
  PRIMARY KEY (`debtid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `debtsecurity` */

/*Table structure for table `directordesignation` */

DROP TABLE IF EXISTS `directordesignation`;

CREATE TABLE `directordesignation` (
  `dirdesigid` int(11) NOT NULL AUTO_INCREMENT,
  `dirdesignation` varchar(100) NOT NULL,
  PRIMARY KEY (`dirdesigid`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `directordesignation` */

insert  into `directordesignation`(`dirdesigid`,`dirdesignation`) values (1,'Chairman'),(2,'Deputy Chairman'),(3,'CEO'),(4,'Deputy CEO'),(5,'Managing Director'),(6,'Joint Managing Director'),(7,'Director'),(8,'Director - Executive'),(9,'Director - Non Executive'),(10,'Director - Independent'),(11,'Director - Non Independednt'),(12,'Other'),(13,'34'),(14,'dtt'),(15,'j');

/*Table structure for table `directors` */

DROP TABLE IF EXISTS `directors`;

CREATE TABLE `directors` (
  `dirid` int(11) NOT NULL AUTO_INCREMENT,
  `title` int(11) NOT NULL,
  `initial` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(60) NOT NULL,
  `lname` varchar(100) NOT NULL,
  PRIMARY KEY (`dirid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `directors` */

insert  into `directors`(`dirid`,`title`,`initial`,`fname`,`mname`,`lname`) values (1,4,'F. A.','Dammiak','Nishantha','Gunawardana'),(3,7,'H.L','Dinesh','Madushan','Karunarathna'),(4,4,'W. M.','Kamani','Nalani','Jayathilaka'),(5,5,'K.','Sunila','Prasadinie','Silva'),(6,5,'T. G.','Kapila','Suranga','Mahanama'),(7,6,'S.','Rohan','dkfj','ddfkj'),(8,6,'fgk','fj','dfj','dfkj'),(9,7,'e','e','e','e'),(10,14,'F. K.','gf','er','er'),(11,4,'N.','Ramesh','er','ngh'),(12,4,'kj','kj','b','nb'),(13,7,'gl','l','l','l');

/*Table structure for table `dividend` */

DROP TABLE IF EXISTS `dividend`;

CREATE TABLE `dividend` (
  `dividendid` int(11) NOT NULL AUTO_INCREMENT,
  `comid` int(11) NOT NULL,
  `rate` double NOT NULL,
  `method` varchar(20) NOT NULL,
  `financialyear` varchar(20) NOT NULL,
  `xd` date NOT NULL,
  `paymentdate` date NOT NULL,
  PRIMARY KEY (`dividendid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `dividend` */

insert  into `dividend`(`dividendid`,`comid`,`rate`,`method`,`financialyear`,`xd`,`paymentdate`) values (1,1,2.5,'Final','2014/2015','2015-07-05','2015-08-01'),(2,1,1.25,'Final','2015/2016','2017-01-05','2017-02-22');

/*Table structure for table `dividentdetails` */

DROP TABLE IF EXISTS `dividentdetails`;

CREATE TABLE `dividentdetails` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `comid` int(11) NOT NULL,
  `announcementdate` date NOT NULL,
  `rate` double NOT NULL,
  `financialyear` year(4) NOT NULL,
  `xddate` date NOT NULL,
  `paymentdate` date NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `dividentdetails` */

insert  into `dividentdetails`(`did`,`comid`,`announcementdate`,`rate`,`financialyear`,`xddate`,`paymentdate`) values (1,4,'2017-03-23',22,2017,'2017-03-23','2017-03-23');

/*Table structure for table `employee` */

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `employee` */

insert  into `employee`(`id`,`name`,`nic`,`gender`) values (1,'Saman','3434343V','Male'),(2,'Kalum','3333','Male'),(3,'Nimal','5465','Male'),(4,'Shanika','4645456','Female'),(5,'Perera','3485903450','Male'),(6,'Geetha','4545','Female');

/*Table structure for table `equitysecurity` */

DROP TABLE IF EXISTS `equitysecurity`;

CREATE TABLE `equitysecurity` (
  `equityid` int(11) NOT NULL AUTO_INCREMENT,
  `comid` int(11) NOT NULL,
  `subtypeid` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `issuedqty` int(11) NOT NULL,
  `listedqty` int(11) NOT NULL,
  PRIMARY KEY (`equityid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `equitysecurity` */

insert  into `equitysecurity`(`equityid`,`comid`,`subtypeid`,`type`,`issuedqty`,`listedqty`) values (1,1,1,0,125000,125000),(2,1,5,22,50000,50000);

/*Table structure for table `financialdetails` */

DROP TABLE IF EXISTS `financialdetails`;

CREATE TABLE `financialdetails` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `comid` int(11) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `quarter` varchar(20) DEFAULT NULL,
  `startedcapital` double DEFAULT NULL,
  `revenue` double DEFAULT NULL,
  `profitbeforetax` double DEFAULT NULL,
  `profitaftertax` double DEFAULT NULL,
  `totalexpenditure` double DEFAULT NULL,
  `assets` double DEFAULT NULL,
  `liabilities` double DEFAULT NULL,
  `totalincome` double DEFAULT NULL,
  `costofsales` double DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `financialdetails` */

insert  into `financialdetails`(`fid`,`comid`,`year`,`quarter`,`startedcapital`,`revenue`,`profitbeforetax`,`profitaftertax`,`totalexpenditure`,`assets`,`liabilities`,`totalincome`,`costofsales`) values (1,4,0000,'32',2312,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,4,0000,'32',2312,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `listedboard` */

DROP TABLE IF EXISTS `listedboard`;

CREATE TABLE `listedboard` (
  `boardid` int(11) NOT NULL AUTO_INCREMENT,
  `boardname` varchar(50) NOT NULL,
  PRIMARY KEY (`boardid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `listedboard` */

insert  into `listedboard`(`boardid`,`boardname`) values (1,'Main Board'),(2,'Diri Savi Board'),(3,'Default Board'),(4,'Deling Suspended'),(5,'Trading Suspended'),(6,'Trading Halt');

/*Table structure for table `modules` */

DROP TABLE IF EXISTS `modules`;

CREATE TABLE `modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mName` varchar(255) DEFAULT NULL,
  `mDescription` varchar(255) DEFAULT NULL,
  `mPosition` varchar(50) DEFAULT NULL,
  `mView` varchar(255) DEFAULT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `modules` */

insert  into `modules`(`id`,`mName`,`mDescription`,`mPosition`,`mView`,`userid`) values (1,'P/L Calculator','P/L Calculator','p_left#1','plcalculator',0),(2,'Users','Users','p_left#1','users',0),(3,'Taxes & Charges List','Taxes & Charges List','p_left#1','taxes_charges',0),(4,'User\'s Log','User\'s Log','p_left#2','user_log',0),(5,'Main Editor Panel','Main Editor Panel','p_left#3','main_editor',0),(6,'Funds Management','Funds Management','p_left#4','funds_management',0),(7,'Module','Manage Module','p_left#2','module',0),(9,'Calendar','Calendar','p_right','calendar',0),(10,'Message','Message','p_middle','messages',0),(11,'Test','Test','test','test',1);

/*Table structure for table `nonvotingshare` */

DROP TABLE IF EXISTS `nonvotingshare`;

CREATE TABLE `nonvotingshare` (
  `nvshareid` int(11) NOT NULL AUTO_INCREMENT,
  `comid` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `issuedqty` int(11) NOT NULL,
  `cdsqty` int(11) NOT NULL,
  PRIMARY KEY (`nvshareid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `nonvotingshare` */

/*Table structure for table `ordinaryshare` */

DROP TABLE IF EXISTS `ordinaryshare`;

CREATE TABLE `ordinaryshare` (
  `odshareid` int(11) NOT NULL AUTO_INCREMENT,
  `comid` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `issuedqty` int(11) NOT NULL,
  `cdsqty` int(11) NOT NULL,
  PRIMARY KEY (`odshareid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ordinaryshare` */

/*Table structure for table `preferenceshare` */

DROP TABLE IF EXISTS `preferenceshare`;

CREATE TABLE `preferenceshare` (
  `pfshareid` int(11) NOT NULL AUTO_INCREMENT,
  `comid` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `issedqty` int(11) NOT NULL,
  `cdsqty` int(11) NOT NULL,
  PRIMARY KEY (`pfshareid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `preferenceshare` */

/*Table structure for table `prefix` */

DROP TABLE IF EXISTS `prefix`;

CREATE TABLE `prefix` (
  `preid` int(11) NOT NULL AUTO_INCREMENT,
  `prefix` varchar(10) NOT NULL,
  PRIMARY KEY (`preid`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `prefix` */

insert  into `prefix`(`preid`,`prefix`) values (5,'Dr.'),(6,'Prof.'),(7,'Atty.'),(8,'Maj.'),(9,'Capt.'),(11,'hh......'),(16,'g1');

/*Table structure for table `rightshare` */

DROP TABLE IF EXISTS `rightshare`;

CREATE TABLE `rightshare` (
  `rshareid` int(11) NOT NULL AUTO_INCREMENT,
  `comid` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `announceddate` date NOT NULL,
  `offeredqty` int(10) NOT NULL,
  `exdate` date NOT NULL,
  `renunciationdate` date NOT NULL,
  `comments` varchar(1500) NOT NULL,
  PRIMARY KEY (`rshareid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rightshare` */

/*Table structure for table `sector` */

DROP TABLE IF EXISTS `sector`;

CREATE TABLE `sector` (
  `sectorid` int(11) NOT NULL AUTO_INCREMENT,
  `sec_name` text NOT NULL,
  PRIMARY KEY (`sectorid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `sector` */

insert  into `sector`(`sectorid`,`sec_name`) values (1,'Bank & Finance'),(2,'Diversify'),(3,'Hotels'),(4,'Healthcare'),(5,'Telecominictions'),(6,'g'),(7,'hh'),(8,'hh'),(9,'g'),(10,'r');

/*Table structure for table `securitiessubtype` */

DROP TABLE IF EXISTS `securitiessubtype`;

CREATE TABLE `securitiessubtype` (
  `subtypeid` int(11) NOT NULL AUTO_INCREMENT,
  `subtypename` varchar(50) NOT NULL,
  `subtype` varchar(1) NOT NULL,
  PRIMARY KEY (`subtypeid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `securitiessubtype` */

insert  into `securitiessubtype`(`subtypeid`,`subtypename`,`subtype`) values (1,'Ordinary Shares','N'),(2,'Non Votting Shares','X'),(3,'Preference Shares','P'),(4,'Right Shares','R'),(5,'Warrant','W');

/*Table structure for table `stockbroker` */

DROP TABLE IF EXISTS `stockbroker`;

CREATE TABLE `stockbroker` (
  `stockbrokerid` int(11) NOT NULL AUTO_INCREMENT,
  `adviserfname` varchar(100) NOT NULL,
  `adviserlname` varchar(100) NOT NULL,
  `tel_mob` int(11) NOT NULL,
  `tel_direct` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`stockbrokerid`),
  KEY `stockbrokerid` (`stockbrokerid`),
  KEY `stockbrokerid_2` (`stockbrokerid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `stockbroker` */

insert  into `stockbroker`(`stockbrokerid`,`adviserfname`,`adviserlname`,`tel_mob`,`tel_direct`,`email`) values (1,'1.Amila','Perera',1111,1111,'amila@lanka.com'),(2,'2. Shanaka','Rathnayake',22,222,'shadfk@ldfl.com'),(3,'3. Nuwan','Pradeep',33345,33345,'shadfk@jgkldfl.com'),(4,'5. Ruwan','Gamage',33,34,'dfjk@dfjl.com'),(5,'Rohan','Fonseka',881,881,'dfjlkd#ddfk.com');

/*Table structure for table `students` */

DROP TABLE IF EXISTS `students`;

CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `added_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `students` */

insert  into `students`(`id`,`fname`,`lname`,`date_of_birth`,`mobile`,`address`,`gender`,`added_time`) values (1,'Nimesh','Perera','0000-00-00','678000900','Colombo 2','','2016-04-30 13:03:16'),(2,'Sampath','Dushan','0000-00-00','09988999','Malabe','','2016-04-30 13:39:18'),(3,'Kasun','Dinesh','0000-00-00','8734857893','Kurunagala','','2016-04-30 13:40:52'),(4,'Damith','Nuwan','0000-00-00','0992348','Malabe','','2016-05-07 09:21:04'),(5,'Sampath','Anuradha','0000-00-00','07889888','23D Dawi Rd','','2016-05-07 09:22:43'),(6,'Sampath','Perera','0000-00-00','078662234','Malabe','','2016-06-04 11:28:40'),(7,'Ruwan','Silva','0000-00-00','34','dfkj','','2016-08-02 20:42:53');

/*Table structure for table `transaction` */

DROP TABLE IF EXISTS `transaction`;

CREATE TABLE `transaction` (
  `transid` int(11) NOT NULL AUTO_INCREMENT,
  `transname` varchar(100) NOT NULL,
  PRIMARY KEY (`transid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `transaction` */

insert  into `transaction`(`transid`,`transname`) values (1,'Brokerage Fee'),(2,'CSE Fees'),(3,'CDS Fees'),(4,'SEC Cess'),(5,'STL');

/*Table structure for table `transaction_cost` */

DROP TABLE IF EXISTS `transaction_cost`;

CREATE TABLE `transaction_cost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transid` int(11) NOT NULL,
  `costid` int(11) NOT NULL,
  `value` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `transaction_cost` */

insert  into `transaction_cost`(`id`,`transid`,`costid`,`value`) values (1,1,1,0.64),(2,2,1,0.84),(3,3,1,0.024),(4,4,1,0.072),(5,5,1,0.3),(6,1,2,0.2),(7,2,2,0.0525),(8,3,2,0.015),(9,4,2,0.045),(10,5,2,0.3);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `reqdate` date NOT NULL,
  `status` int(1) NOT NULL,
  `approvedate` date NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`userid`,`email`,`fname`,`mname`,`lname`,`mobile`,`password`,`reqdate`,`status`,`approvedate`,`role`) values (1,'admin@sms.lk','Ruwan','Sangeewa','Fernando','0778878784','123','0000-00-00',1,'2017-02-18','admin'),(2,'janaka@mail.com','Janaka','Sampath','Jayaweera','0714896425','*23AE809DDACAF96AF0FD78ED04B6A265E05AA257','0000-00-00',1,'2017-02-15','user'),(3,'dfjk@dfjl.com','Samanatha','Suresh','Gunasekara','0774448962','123','0000-00-00',1,'2017-02-15','business_analyst'),(4,'user@sms.lk','user','user','user','0787877878','123','2017-02-20',1,'2017-02-27',NULL),(5,'w','wwwwwwwww','wwwwwwwwwww','wwww','1111111','*23AE809DDACAF96AF0FD78ED04B6A265E05AA257','2017-03-02',0,'2017-03-04','user'),(6,'sadasd','sdasd','asd','weqwe','213123','40bd001563085fc35165329ea1ff5c5ecbdbbeef','2017-03-02',0,'0000-00-00',NULL),(7,'sagara@gmail.com','Sagara','Praneeth','Jayasundara','077','40bd001563085fc35165329ea1ff5c5ecbdbbeef','2017-03-15',1,'2017-03-16',NULL);

/*Table structure for table `user_modules` */

DROP TABLE IF EXISTS `user_modules`;

CREATE TABLE `user_modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `module_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

/*Data for the table `user_modules` */

insert  into `user_modules`(`id`,`user_id`,`module_id`) values (2,2,1),(87,1,11),(86,1,10),(85,1,9),(84,1,7),(83,1,6),(82,1,5),(81,1,4),(80,1,3),(79,1,2),(78,1,1);

/*Table structure for table `user_share` */

DROP TABLE IF EXISTS `user_share`;

CREATE TABLE `user_share` (
  `usershareid` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `userbrokerid` int(11) NOT NULL,
  `comid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `shareprice` int(11) NOT NULL,
  `tax` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`usershareid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user_share` */

/*Table structure for table `user_stockbroker` */

DROP TABLE IF EXISTS `user_stockbroker`;

CREATE TABLE `user_stockbroker` (
  `userbrokerid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `brokercomid` int(11) NOT NULL,
  `stockbrokerid` int(11) NOT NULL,
  PRIMARY KEY (`userbrokerid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user_stockbroker` */

/*Table structure for table `usersharetransaction` */

DROP TABLE IF EXISTS `usersharetransaction`;

CREATE TABLE `usersharetransaction` (
  `usersharetransid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `usershareid` int(11) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(10) NOT NULL,
  `qty` int(11) NOT NULL,
  `shareprice` int(11) NOT NULL,
  `tax` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`usersharetransid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `usersharetransaction` */

/*Table structure for table `warrants` */

DROP TABLE IF EXISTS `warrants`;

CREATE TABLE `warrants` (
  `warantsid` int(11) NOT NULL AUTO_INCREMENT,
  `comid` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `exchangeddate` date NOT NULL,
  `comments` int(11) NOT NULL,
  PRIMARY KEY (`warantsid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `warrants` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
