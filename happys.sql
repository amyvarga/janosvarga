-- MySQL dump 10.13  Distrib 5.5.47, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: janosvarga
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

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
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pageName` varchar(255) NOT NULL,
  `galleryName` varchar(255) NOT NULL,
  `fullGalleryName` varchar(255) NOT NULL,
  `pictureName` varchar(255) NOT NULL,
  `pictureDescription` text NOT NULL,
  `pictureDatas` text NOT NULL,
  `portrait` tinyint(1) NOT NULL,
  `fileName` varchar(255) NOT NULL,
  `indexOnPage` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (1,'index.php','gallery','','Heritage','February winter eve','This album contains 10 items.',0,'images/383_lakeshore_001.highlight.jpg',1),(2,'index.php','gallery','','Pen & Ink','','This album contains 13 items.',0,'images/23_pacific_senneville.highlight.jpg',2),(3,'index.php','gallery','','Montreal','','This album contains 21 items.',0,'images/ragapple_hudson.highlight.jpg',3),(4,'index.php','gallery','','Around the world','','This album contains 25 items.',0,'images/luna_de_luz_web.highlight.jpg',4),(5,'index.php','gallery','','Figure, Still Life, Calligraphy',' ','This album contains 19 items.',1,'images/woman_effigy.highlight.jpg',5),(6,'index.php','gallery','','Toronto','','This album contains 12 items.',0,'images/avenue_road_guache.jpg',6),(7,'index.php','gallery','','Canada Wide','','',0,'images/cove_stanley_park.jpg',7),(19,'canadawide.php','canada','Canada Wide','Tree-planting','Pencil - 1993','The Cook-bus at our 1993 tree-planting camp',0,'cookbus_93.jpg',1),(20,'canadawide.php','canada','Canada Wide','Ocean Cove','Pen & Ink, Watercolour','Ocean Cove - Stanley Park ',0,'cove_stanley_park.jpg',2),(21,'canadawide.php','canada','Canada Wide','Farmhouse ','Pen & Ink, Watercolour','Derelict farmhouse on the Praries',0,'derelict_farmhouse_on_the_praries.jpg',3),(22,'canadawide.php','canada','Canada Wide','Downtown Edmonton','Pen & Ink, Watercolour','View from Edmonton bus station, painted during a very long wait',0,'downtown_scene_edmunton.jpg',4),(23,'canadawide.php','canada','Canada Wide','Northern Ontario commuting','Pen & Ink, Watercolour','Early morning takeoff ',0,'floatplane_on_lake.jpg',5),(24,'canadawide.php','canada','Canada Wide','Westward View from Salt Spring Island ','Watercolour','Mount Maxwell, looking west to Vancouver Island',0,'galeano_view.jpg',6),(25,'canadawide.php','canada','Canada Wide','Gazebo at Greystone manor','Watercolour','For the invitation card to a grand party',0,'gazebo.jpg',7),(26,'canadawide.php','canada','Canada Wide','Log cabin Betelgeuse ','Pen&Ink and watercolour','Somewhere on the prairies ... a French town. Voila!',0,'log_cabin.jpg',8),(27,'canadawide.php','canada','Canada Wide','Jackfish river - storm coming','Watercolour','Tree-planting camp overlooking a clearcut',0,'storm_jackfish_river.jpg',9),(28,'canadawide.php','canada','Canada Wide','Black Spruce at sunset','Watercolour','Tree-planting camp Jackfish River',0,'sunset_northern_ontario.jpg',10),(29,'canadawide.php','canada','Canada Wide','Temagami boathouse ','Watercolour','Itâ€™s a tale of Temagami moonlight',1,'temagami_boathouse.jpg',11),(30,'penink.php','penink','Pen & Ink','One of my early Pen & Ink drawings - Perth ','Pen & Ink ','',0,'3_congdon_street_perth.jpg',1),(31,'penink.php','penink','Pen & Ink','Northcote Hampstead','Pen & Ink ','',0,'11_northcote_hampstead.jpg',2),(32,'penink.php','penink','Pen & Ink','Winton Road, Toronto','Pen & Ink ','',1,'12_winton_road_toronto.jpg',13),(33,'penink.php','penink','Pen & Ink','Pacific, Senneville','Pen & Ink ','',0,'23_pacific_senneville.jpg',3),(34,'penink.php','penink','Pen & Ink','Woodland, Beaconsfield','Pen & Ink ','',0,'64_woodland_beaconsfield.jpg',4),(35,'penink.php','penink','Pen & Ink','Another early drawing, Perth ','Pen & Ink ','',0,'66_forest_street_perth.jpg',5),(36,'penink.php','penink','Pen & Ink','Gilford, Beaconsfield','Pen & Ink ','',0,'221_gilford_beaconsfield.jpg',6),(37,'penink.php','penink','Pen & Ink','Another early drawing, Perth','Pen & Ink ','',0,'234_marmion_street_perth.jpg',7),(38,'penink.php','penink','Pen & Ink','Markham, Beaconsfield','Pen & Ink ','',0,'245_chemin_markham_beaconsf.jpg',8),(39,'penink.php','penink','Pen & Ink','Beaconsfield Boulevard, Beaconsfield','Pen & Ink ','',0,'246_beaconsfield_blvd_beaco.jpg',9),(40,'penink.php','penink','Pen & Ink','Windermere, Beaconsfield','Pen & Ink ','',0,'376_windermere_rd_beaconsfi.jpg',10),(41,'penink.php','penink','Pen & Ink','Abbey and Olivier, Beaconsfield','Pen & Ink ','',0,'abbey_olivier_beaconsfield.jpg',11),(42,'penink.php','penink','Pen & Ink','Greystone Manor, Queenston','Pen & Ink ','',1,'door_greystone_manor_queenston.jpg',14),(43,'penink.php','penink','Pen & Ink','St Lawrence Market, Toronto','Pen & Ink ','',0,'st_lawrence_market_to.jpg',12),(44,'montreal.php','montreal','Montreal','Kilburn, Hampstead','Watercolour','',0,'8_kilburn_cres_hampstead.jpg',1),(45,'montreal.php','montreal','Montreal','Greenshields Point, Ste Agathe','Watercolour','',0,'12_greenshields_point_ste_agathe.jpg',2),(46,'montreal.php','montreal','Montreal','Kilburn, Montreal','Pen & Ink and Watercolour','',0,'12_kilburn_cres_hampstead.jpg',3),(47,'montreal.php','montreal','Montreal','Maplewood, Outremont','Pen & Ink and watercolour','',0,'20_maplewood_outremont.jpg',4),(48,'montreal.php','montreal','Montreal','Morgen, Bai d\'Urfe','Pen & Ink and Watercolour','',0,'28_morgan_rd_bai_durfe.jpg',5),(49,'montreal.php','montreal','Montreal','Stephenson, Montreal','Pen & Ink and Watercolour','',0,'39_stephenson_avenue.jpg',6),(50,'montreal.php','montreal','Montreal','East Gables, Montreal','Pen & Ink and Watercolour','',0,'45_east_gables_max.jpg',7),(51,'montreal.php','montreal','Montreal','Stratford, Hampstead','Pen & Ink and watercolour','',0,'50_stratford_hampstead.jpg',8),(52,'montreal.php','montreal','Montreal','Woodlands, Beaconsfield','Pen & Ink and watercolour','',0,'64_woodlands_beaconsfield.jpg',9),(53,'montreal.php','montreal','Montreal','Woodlands, Beaconsfield','Pen & Ink and watercolour','',0,'99_woodlands_ave_beaconsfield.jpg',10),(54,'montreal.php','montreal','Montreal','Gilford, Beaconsfield','Pen & Ink and watercolour','',0,'221_gilford_beaconsfield.jpg',11),(55,'montreal.php','montreal','Montreal','Robin, Beaconsfield','Pen & Ink and watercolour','',0,'363_robin_ave_beaconsfield.jpg',12),(56,'montreal.php','montreal','Montreal','Windermere, Beaconsfield','Pen & Ink and watercolour','',0,'373_windermere_road_beacons.jpg',13),(57,'montreal.php','montreal','Montreal','Robin, Beaconsfield','Pen & Ink and watercolour','',0,'376_robin_ave_beaconsfield.jpg',14),(58,'montreal.php','montreal','Montreal','Antoine Maillet, Montreal','Pen & Ink and watercolour','',0,'821_antonine_maillet.jpg',15),(59,'montreal.php','montreal','Montreal','Mont-Royal, Montreal','Pen & Ink and watercolour','',0,'1314_blvd_mont_royal.jpg',16),(60,'worldwide.php','worldwide','Around the world','Ama Dablam peak','Stupa on the path from Everest base camp to Namche Bazaar with Ama Dablam in the background','Stupa with Ama Dablam in the background',0,'ama_dablam.jpg',1),(61,'worldwide.php','worldwide','Around the world','Burning ghats, Varanassi, India','Pen & Ink and Pencil crayon','',0,'burning_ghats.jpg',2),(62,'worldwide.php','worldwide','Around the world','Calais tug boat','Pen & Ink','',0,'calais_tug_boat.jpg',3),(63,'worldwide.php','worldwide','Around the world','Donna Catalina, Mexico','Sunset','Watercolour',0,'donna_catalina_web.jpg',4),(64,'worldwide.php','worldwide','Around the world','Fortified keep','French fortification','Pen & Ink and watercolour',0,'fortified_keep.jpg',5),(65,'worldwide.php','worldwide','Around the world','Lifeboat on ferry','Crossing Calais to Dover','Pen & Ink',1,'lifeboat.jpg',23),(66,'worldwide.php','worldwide','Around the world','Luna de Luz, Mexico','Backpacker hostel courtyard','Watercolour',0,'luna_de_luz_web.jpg',6),(67,'worldwide.php','worldwide','Around the world','Maupitil, French Polynesia','View from Motu Pitihahei','Watercolour',0,'maupiti_from_motu_pitihahei_web.jpg',7),(68,'worldwide.php','worldwide','Around the world','Images in India','Charcoal','',0,'monkey_steal.jpg',8),(69,'worldwide.php','worldwide','Around the world','Halong Bay, Vietnam','Charcoal','',0,'mountains_of_the_sea_1.jpg',9),(70,'worldwide.php','worldwide','Around the world','Halong Bayl, Vietnam','Charcoal','',0,'mountains_of_the_sea_2.jpg',10),(71,'worldwide.php','worldwide','Around the world','Naburn church','Near York, England','Pen & Ink and watercolour',0,'naburn_church.jpg',11),(72,'worldwide.php','worldwide','Around the world','Nepalese hut','Crayon pencils','',0,'nepalese_hut.jpg',12),(73,'worldwide.php','worldwide','Around the world','Ntshaba Umuzi','Near Escourt South Africa','Watercolour',0,'ntshaba_umuzi.jpg',13),(74,'worldwide.php','worldwide','Around the world','Prayer wheel, Nepal','Water powered prayer wheel ','Pencil crayons',0,'prayer_wheel.jpg',14),(75,'worldwide.php','worldwide','Around the world','San Agustinillo, Mexico','Sunset from the Agama Yoga centre','',0,'san_agustinillo_web.jpg',15),(76,'worldwide.php','worldwide','Around the world','San Cristobal de las Casas, Mexico','Watercolour','',0,'san_cristobal_de_las_casas_web.jpg',16),(77,'worldwide.php','worldwide','Around the world','Stupa, Luang Prabang, Laos','Pen & Ink','',1,'stupa.jpg',24),(78,'worldwide.php','worldwide','Around the world','Taj Mahal, India','From not the usual angle','Pen & Ink and pencil crayons',0,'taj_mahal.jpg',17),(79,'worldwide.php','worldwide','Around the world','British telephone box','Pen & Ink and watercolour','',0,'telephone_kiosk.jpg',18),(80,'worldwide.php','worldwide','Around the world','Ritual bathing, India','Pen & Ink and pencil crayon','',0,'unknown_india.jpg',19),(81,'worldwide.php','worldwide','Around the world','Tower of Silence, Mumbai, India','Vultures wait ... ','Charcoal',1,'vultures.jpg',25),(82,'worldwide.php','worldwide','Around the world','Wat Arun, Bangkok, Thailand','Charcoal','',0,'wat_arun_bankok.jpg',20),(83,'worldwide.php','worldwide','Around the world','Water buffalo, India','Charcoal','',0,'water_buffalo_1.jpg',21),(84,'worldwide.php','worldwide','Around the world','Water buffalo, India','Charcoal','',0,'water_buffalo_2.jpg',22),(85,'toronto.php','toronto','Toronto','Withrow, Oakville','Watercolour','',0,'2_withrow_oakville.jpg',1),(86,'toronto.php','toronto','Toronto','Margarets Drive, Toronto','Pen & Ink and watercolour','',0,'7_margarets_dr_toronto.jpg',2),(87,'toronto.php','toronto','Toronto','Brookfields, Toronto','Watercolour','',1,'28_brookfields_toronto.jpg',11),(88,'toronto.php','toronto','Toronto','Erskin, Toronto','Pen & Ink and watercolour','',1,'77_erskin_ave_toronto.jpg',12),(89,'toronto.php','toronto','Toronto','Glencairn, Toronto','Pen & Ink and watercolour','First painting from one angle',1,'77_glencairn_ave_first_painting.jpg',13),(90,'toronto.php','toronto','Toronto','Glencairn, Toronto','Pen & Ink and watercolour','Second painting from another angle',1,'77_glencairn_ave_one_view.jpg',14),(93,'toronto.php','toronto','Toronto','Balmoral, Toronto','Pen & Ink and watercolour','1999 year, watercolour',0,'103_balmoral_toronto.jpg',3),(94,'toronto.php','toronto','Toronto','Russel Hill, Toronto','Pen & Ink and watercolour','',0,'226_russell_hill_toronto.jpg',4),(95,'toronto.php','toronto','Toronto','Arbour in the garden','Pen & Ink and watercolour','',0,'arbour.jpg',5),(96,'toronto.php','toronto','Toronto','Avenue Road, Toronto','Gouache','',0,'avenue_road_guache.jpg',6),(97,'toronto.php','toronto','Toronto','Cedar Cottage','Pen & Ink and watercolour','Cottage view',0,'cedar_cottage_cottageview.jpg',7),(98,'toronto.php','toronto','Toronto','Cedar Cottage','Pen & Ink and watercolour\r\n','Lakeview',0,'cedar_cottage_lakeview.jpg',8),(99,'toronto.php','toronto','Toronto','Farmhouse, Ontario','Pen & Ink and watercolour','',0,'farmhouse_ontario.jpg',9),(100,'toronto.php','toronto','Toronto','Gazebo, Queenston','Pen & Ink and watercolour','',0,'gazebo_greystone_manor_queenston.jpg',10),(101,'figure.php','figure','Figure, Still Life, Calligraphy','Alexander Calder','Pencil','',1,'alexander_calder.jpg',1),(102,'figure.php','figure','Figure, Still Life, Calligraphy','Christine','Pencil','',1,'christine.jpg',2),(103,'figure.php','figure','Figure, Still Life, Calligraphy','Collage','Collage','',1,'collage_ocad.jpg',3),(104,'figure.php','figure','Figure, Still Life, Calligraphy','Galeano model','Pencil and watercolour','',1,'galeano_nude.jpg',4),(106,'figure.php','figure','Figure, Still Life, Calligraphy','Japanese birdfeeder','Pen & Ink and watercolour','',1,'japanese_birdfeeder.jpg',5),(107,'figure.php','figure','Figure, Still Life, Calligraphy','Julia lived and loved here','Gouache','',1,'julia_lived_and_loved_here.jpg',6),(108,'figure.php','figure','Figure, Still Life, Calligraphy','Letterhead, Niagara','Ink','',1,'letterhead_niagara.jpg',7),(109,'figure.php','figure','Figure, Still Life, Calligraphy','Native portrait','Pencil','',1,'native_face.jpg',8),(110,'figure.php','figure','Figure, Still Life, Calligraphy','Kneeling figure','Pencil','',1,'nude_kneeling.jpg',9),(112,'figure.php','figure','Figure, Still Life, Calligraphy','Figure drawing','Pencil and pencil crayon ','',1,'orange_nude.jpg',11),(113,'figure.php','figure','Figure, Still Life, Calligraphy','Robert Tait Mckenzie, statuette','Crayon','\r\n',1,'robert_tait_mckenzie.jpg',12),(114,'figure.php','figure','Figure, Still Life, Calligraphy','Self portrait','Watercolour','',1,'self_portrait.jpg',13),(115,'figure.php','figure','Figure, Still Life, Calligraphy','St Joseph','Pencil','',1,'st_joseph.jpg',14),(116,'figure.php','figure','Figure, Still Life, Calligraphy','Still life, Galeano','Watercolour','',0,'still_life_galiano.jpg',16),(122,'toronto.php','toronto','','Amy & Tina','Amy & Tina','',0,'amy&tina - slide.jpg',12),(123,'world_wide.php','worldwide','','Amy & Tina','','',0,'amy&tina - slide.jpg',15),(124,'canada_wide.php','canada','','aaaaa','bbbbb','ccccc',0,'flowers_for_heidi.jpg',1),(126,'bbhs.php','heritage','','Cajo ','On the streets of Darwin \r\nwhat3words.com/guideline.resign.overruled','Cajo living rough',1,'3.4CajoDarwino.jpg',2),(127,'bbhs.php','heritage','','Wetland','Wetland Walkway \r\nwhat3words.com/lotion.congress.winning','Where paths meet ',0,'1.1WetlandWalkwayo.jpg',1),(128,'bbhs.php','heritage','','Leamington','Chewing the cud\r\nWhat3words.com/persuaded.wiggly.splurge\r\n','With his friend Jersey Boy\r\n',1,'1.4Leamingtono.jpg',3),(129,'bbhs.php','heritage','','Afternoon Break','Street bench in Sydney\r\nWhat3words.com/poem.going.losses','Catching up with messages',1,'2.3AfternoonBreako.jpg',3),(130,'bbhs.php','heritage','','Martin Place','Lovely square in Sydney\r\nWhat3words.com/stress.cared.headed\r\n','With fountain and terraced seating',1,'2.6MartinPlaceo.jpg',5),(131,'bbhs.php','heritage','','Dry country','Summer farmland near Cambridge\r\nWhat3words.com/delight.cavern.lying\r\n','On the road by Waikato river dam',0,'1.3DryCountryo.jpg',6),(132,'bbhs.php','heritage','','Victoria street bridge','Over the Waikato river, Cambridge\r\nWhat3words.com/vixens.swallow.blotted\r\n','Lush exotic vegetation line the banks',0,'2.2VictoriaStreetBridgeo.jpg',7),(133,'bbhs.php','heritage','','Lanterns','Restaurant in Mooloolaba\r\nwhat3words.com/cheek.scoring.nests','Waiting for friends, passing the time',1,'2.1Lanternso.jpg',8),(134,'bbhs.php','heritage','','Crystal Serenity ','At anchor at Airlie Beach \r\nwhat3words.com/switch.leaves.gusts','Northern coast of Australian ',0,'2.4CrystalSerenityAtAnchoro.jpg',9),(135,'bbhs.php','heritage','','Jersey Boy','Chewing the cud \r\nwhat3words.com/persuaded.wiggly.splurge','Hanging out with friend Leamington',0,'1.5JerseyBoyo.jpg',10);
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `pageName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `titlePage` varchar(255) CHARACTER SET utf8 NOT NULL,
  `metaDescription` varchar(255) CHARACTER SET utf8 NOT NULL,
  `captionPage` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `imageLocation` varchar(255) NOT NULL,
  `header_1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `header_2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `header_3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `text_1` text CHARACTER SET utf8 NOT NULL,
  `text_2` text CHARACTER SET utf8 NOT NULL,
  `text_3` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'index','Janos Varga','Pen & Ink and Watercolours ','','images','','','','','',''),(2,'canadawide','Canada Wide','Canada Wide - Gallery of Janos Varga\r\nWatercolours and Pen & Ink drawings around Canada','','canada_wide','Welcome to the Canada Wide Gallery ','','','','',''),(3,'family','Entry to Varga family personal pages','Varga family personal pages','','','Entry to the Varga family personal pages','','','','',''),(4,'heritage','On a whim','Mix of paintings, drawings','','bbhs','On a whim','','','','',''),(5,'penink','Pen & Ink','Pen & Ink drawings gallery of Janos Varga. \r\nDrawings using a pen and ink    ','','pen_ink','Welcome to Pen & Ink Gallery','','','','',''),(6,'montreal','Montreal ','Montreal Gallery of Janos Varga. \r\nWatercolour paintings of houses around Montreal. ','','montreal','Welcome to Montreal  Gallery','','','','',''),(7,'worldwide','Around the world','Around the world Gallery of Janos Varga. \r\nWatercolour paintings, multimedia drawings from around the world ','','world_wide','Welcome to Around the world  Gallery','','','','',''),(8,'toronto','Toronto ','Toronto Gallery of Janos Varga. \r\nWatercolour paintings of houses around Toronto','','toronto','Welcome to Toronto Gallery','','','','',''),(9,'figure','Figure, Still Life, Calligraphy','Figure, Still Life, Calligraphy Gallery of Janos Varga. \r\nWatercolour, multimedia works ','','figure','Welcome to Figure, Still Life, Calligraphy Gallery','','','','','');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userlist`
--

DROP TABLE IF EXISTS `userlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userlist` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pass` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userlist`
--

LOCK TABLES `userlist` WRITE;
/*!40000 ALTER TABLE `userlist` DISABLE KEYS */;
INSERT INTO `userlist` VALUES (1,'lery','1234'),(2,'123','321'),(3,'happysla','Se14C1hlj6');
/*!40000 ALTER TABLE `userlist` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-04 10:39:22
