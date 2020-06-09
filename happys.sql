-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2016 at 11:22 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `happys`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=117 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `pageName`, `galleryName`, `fullGalleryName`, `pictureName`, `pictureDescription`, `pictureDatas`, `portrait`, `fileName`, `indexOnPage`) VALUES
(1, 'index.php', 'gallery', '', 'Heritage homes on the West Island', 'The Société historique Beaurepaire-Beaconsfield Historical Society commissioned me to do watercolour paintings of 12 historical homes for a calendar project to be completed soon. ', 'Last changed on 05/02/2009. This album contains 12 items.', 0, 'images/383_lakeshore_001.highlight.jpg', 1),
(2, 'index.php', 'gallery', '', 'Pen & Ink', 'Many people ask me to do a pen&ink rendering of their home for cards. These are printed on ''peppercorn'' paper, blank inside and supplied with matching envelopes and cost 200$ for 80.\r\nPen&Ink drawings are also very attractive framed - they have a stark simplicity about them that is quite unique to this medium.', 'Last changed on 04/12/2007. This album contains 13 items.', 0, 'images/23_pacific_senneville.highlight.jpg', 2),
(3, 'index.php', 'gallery', '', 'Montreal', 'I really love the Montréal architecture; we have so many beautiful houses, each so different yet many with a common thread ... a strong sense of family and belonging and the home being the centre of it all.  ', 'Last changed on 01/23/2009. This album contains 21 items.', 0, 'images/ragapple_hudson.highlight.jpg', 3),
(4, 'index.php', 'gallery', '', 'Around the world', 'You''ll notice that I am using a range of medium - a lot depends what I have with me at the time. Often it was only children''s pencil crayons that I would buy at a local toy store. Please bear in mind the evironmental factors. The Everest Region gets very cold, and drawing outside with your hands freezing is no fun :-) and not conducive to good artwork.', 'Last changed on 01/23/2009. This album contains 25 items.', 0, 'images/luna_de_luz_web.highlight.jpg', 4),
(5, 'index.php', 'gallery', '', 'Figure, Still Life, Calligraphy', 'Most of these were done for pleasure. I love to draw the human figure, though I find it quite challanging. ', 'Last changed on 08/05/2005. This album contains 19 items.', 1, 'images/woman_effigy.highlight.jpg', 5),
(6, 'index.php', 'gallery', '', 'Toronto', 'The Société historique Beaurepaire-Beaconsfield Historical Society commissioned me to do watercolour paintings of 12 historical homes for a calendar project to be completed soon', 'Last changed on 05/02/2009. This album contains 12 items.', 0, 'images/avenue_road_guache.jpg', 6),
(7, 'index.php', 'gallery', '', 'Canada Wide', 'The Société historique Beaurepaire-Beaconsfield Historical Society commissioned me to do watercolour paintings of 12 historical homes for a calendar project to be completed soon.', 'Last changed on 05/02/2009. This album contains 12 items.', 0, 'images/cove_stanley_park.jpg', 7),
(8, 'bbhs.php', 'heritage', 'Heritage homes on the West Island', 'picture name', 'You''ll notice that I am using a range of medium - a lot depends what I have \r\n							with me at the time. Often it was only children''s pencil crayons that I would \r\n							buy at a local toy store. Please bear in mind the evironmental factors. \r\n							', 'Last changed on 01/23/2009. This album contains 25 items.', 0, '13_thompson_point_printreadyo.jpg', 1),
(9, 'bbhs.php', 'heritage', 'Heritage homes on the West Island', 'picture name', 'Bla...Bla...Bla... Bla...Bla...Bla... Bla...Bla...Bla... Bla...Bla...Bla... Bla...Bla...Bla... Bla...Bla...Bla... Bla...Bla...', '1999 year, watercolour', 0, '19_lakeshore_printready.jpg', 2),
(10, 'bbhs.php', 'heritage', 'Heritage homes on the West Island', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '26_lakeshore_printready.jpg', 3),
(11, 'bbhs.php', 'heritage', 'Heritage homes on the West Island', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '39_lakeshore_printready.jpg', 4),
(12, 'bbhs.php', 'heritage', 'Heritage homes on the West Island', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '49_lakeshore_printready.jpg', 5),
(13, 'bbhs.php', 'heritage', 'Heritage homes on the West Island', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '288_beaconsfield_printready.jpg', 6),
(14, 'bbhs.php', 'heritage', 'Heritage homes on the West Island', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '383_lakeshore_printready.jpg', 7),
(15, 'bbhs.php', 'heritage', 'Heritage homes on the West Island', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '431_lakeshore_printready.jpg', 8),
(16, 'bbhs.php', 'heritage', 'Heritage homes on the West Island', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '460_lakeshore_printreadyo.jpg', 9),
(17, 'bbhs.php', 'heritage', 'Heritage homes on the West Island', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '590_lakeshore_printready.jpg', 10),
(18, 'bbhs.php', 'heritage', 'Heritage homes on the West Island', 'Heritage', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '597_lakeshore_printreadyo.jpg', 11),
(19, 'canadawide.php', 'canada', 'Canada Wide', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'cookbus_93.jpg', 1),
(20, 'canadawide.php', 'canada', 'Canada Wide', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'cove_stanley_park.jpg', 2),
(21, 'canadawide.php', 'canada', 'Canada Wide', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'derelict_farmhouse_on_the_praries.jpg', 3),
(22, 'canadawide.php', 'canada', 'Canada Wide', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'downtown_scene_edmunton.jpg', 4),
(23, 'canadawide.php', 'canada', 'Canada Wide', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'floatplane_on_lake.jpg', 5),
(24, 'canadawide.php', 'canada', 'Canada Wide', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'galeano_view.jpg', 6),
(25, 'canadawide.php', 'canada', 'Canada Wide', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'gazebo.jpg', 7),
(26, 'canadawide.php', 'canada', 'Canada Wide', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'log_cabin.jpg', 8),
(27, 'canadawide.php', 'canada', 'Canada Wide', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'storm_jackfish_river.jpg', 9),
(28, 'canadawide.php', 'canada', 'Canada Wide', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'sunset_northern_ontario.jpg', 10),
(29, 'canadawide.php', 'canada', 'Canada Wide', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 1, 'temagami_boathouse.jpg', 11),
(30, 'penink.php', 'penink', 'Pen & Ink', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '3_congdon_street_perth.jpg', 1),
(31, 'penink.php', 'penink', 'Pen & Ink', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '11_northcote_hampstead.jpg', 2),
(32, 'penink.php', 'penink', 'Pen & Ink', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 1, '12_winton_road_toronto.jpg', 13),
(33, 'penink.php', 'penink', 'Pen & Ink', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '23_pacific_senneville.jpg', 3),
(34, 'penink.php', 'penink', 'Pen & Ink', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '64_woodland_beaconsfield.jpg', 4),
(35, 'penink.php', 'penink', 'Pen & Ink', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '66_forest_street_perth.jpg', 5),
(36, 'penink.php', 'penink', 'Pen & Ink', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '221_gilford_beaconsfield.jpg', 6),
(37, 'penink.php', 'penink', 'Pen & Ink', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '234_marmion_street_perth.jpg', 7),
(38, 'penink.php', 'penink', 'Pen & Ink', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '245_chemin_markham_beaconsf.jpg', 8),
(39, 'penink.php', 'penink', 'Pen & Ink', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '246_beaconsfield_blvd_beaco.jpg', 9),
(40, 'penink.php', 'penink', 'Pen & Ink', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '376_windermere_rd_beaconsfi.jpg', 10),
(41, 'penink.php', 'penink', 'Pen & Ink', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'abbey_olivier_beaconsfield.jpg', 11),
(42, 'penink.php', 'penink', 'Pen & Ink', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 1, 'door_greystone_manor_queenston.jpg', 14),
(43, 'penink.php', 'penink', 'Pen & Ink', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'st_lawrence_market_to.jpg', 12),
(44, 'montreal.php', 'montreal', 'Montreal', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '8_kilburn_cres_hampstead.jpg', 1),
(45, 'montreal.php', 'montreal', 'Montreal', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '12_greenshields_point_ste_agathe.jpg', 2),
(46, 'montreal.php', 'montreal', 'Montreal', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '12_kilburn_cres_hampstead.jpg', 3),
(47, 'montreal.php', 'montreal', 'Montreal', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '20_maplewood_outremont.jpg', 4),
(48, 'montreal.php', 'montreal', 'Montreal', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '28_morgan_rd_bai_durfe.jpg', 5),
(49, 'montreal.php', 'montreal', 'Montreal', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '39_stephenson_avenue.jpg', 6),
(50, 'montreal.php', 'montreal', 'Montreal', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '45_east_gables_max.jpg', 7),
(51, 'montreal.php', 'montreal', 'Montreal', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '50_stratford_hampstead.jpg', 8),
(52, 'montreal.php', 'montreal', 'Montreal', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '64_woodlands_beaconsfield.jpg', 9),
(53, 'montreal.php', 'montreal', 'Montreal', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '99_woodlands_ave_beaconsfield.jpg', 10),
(54, 'montreal.php', 'montreal', 'Montreal', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '221_gilford_beaconsfield.jpg', 11),
(55, 'montreal.php', 'montreal', 'Montreal', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '363_robin_ave_beaconsfield.jpg', 12),
(56, 'montreal.php', 'montreal', 'Montreal', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '373_windermere_road_beacons.jpg', 13),
(57, 'montreal.php', 'montreal', 'Montreal', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '376_robin_ave_beaconsfield.jpg', 14),
(58, 'montreal.php', 'montreal', 'Montreal', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '821_antonine_maillet.jpg', 15),
(59, 'montreal.php', 'montreal', 'Montreal', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '1314_blvd_mont_royal.jpg', 16),
(60, 'worldwide.php', 'worldwide', 'Around the world', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'ama_dablam.jpg', 1),
(61, 'worldwide.php', 'worldwide', 'Around the world', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'burning_ghats.jpg', 2),
(62, 'worldwide.php', 'worldwide', 'Around the world', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'calais_tug_boat.jpg', 3),
(63, 'worldwide.php', 'worldwide', 'Around the world', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'donna_catalina_web.jpg', 4),
(64, 'worldwide.php', 'worldwide', 'Around the world', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'fortified_keep.jpg', 5),
(65, 'worldwide.php', 'worldwide', 'Around the world', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 1, 'lifeboat.jpg', 23),
(66, 'worldwide.php', 'worldwide', 'Around the world', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'luna_de_luz_web.jpg', 6),
(67, 'worldwide.php', 'worldwide', 'Around the world', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'maupiti_from_motu_pitihahei_web.jpg', 7),
(68, 'worldwide.php', 'worldwide', 'Around the world', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'monkey_steal.jpg', 8),
(69, 'worldwide.php', 'worldwide', 'Around the world', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'mountains_of_the_sea_1.jpg', 9),
(70, 'worldwide.php', 'worldwide', 'Around the world', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'mountains_of_the_sea_2.jpg', 10),
(71, 'worldwide.php', 'worldwide', 'Around the world', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'naburn_church.jpg', 11),
(72, 'worldwide.php', 'worldwide', 'Around the world', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'nepalese_hut.jpg', 12),
(73, 'worldwide.php', 'worldwide', 'Around the world', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'ntshaba_umuzi.jpg', 13),
(74, 'worldwide.php', 'worldwide', 'Around the world', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'prayer_wheel.jpg', 14),
(75, 'worldwide.php', 'worldwide', 'Around the world', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'san_agustinillo_web.jpg', 15),
(76, 'worldwide.php', 'worldwide', 'Around the world', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'san_cristobal_de_las_casas_web.jpg', 16),
(77, 'worldwide.php', 'worldwide', 'Around the world', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 1, 'stupa.jpg', 24),
(78, 'worldwide.php', 'worldwide', 'Around the world', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'taj_mahal.jpg', 17),
(79, 'worldwide.php', 'worldwide', 'Around the world', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'telephone_kiosk.jpg', 18),
(80, 'worldwide.php', 'worldwide', 'Around the world', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'unknown_india.jpg', 19),
(81, 'worldwide.php', 'worldwide', 'Around the world', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 1, 'vultures.jpg', 25),
(82, 'worldwide.php', 'worldwide', 'Around the world', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'wat_arun_bankok.jpg', 20),
(83, 'worldwide.php', 'worldwide', 'Around the world', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'water_buffalo_1.jpg', 21),
(84, 'worldwide.php', 'worldwide', 'Around the world', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'water_buffalo_2.jpg', 22),
(85, 'toronto.php', 'toronto', 'Toronto', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '2_withrow_oakville.jpg', 1),
(86, 'toronto.php', 'toronto', 'Toronto', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '7_margarets_dr_toronto.jpg', 2),
(87, 'toronto.php', 'toronto', 'Toronto', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 1, '28_brookfields_toronto.jpg', 11),
(88, 'toronto.php', 'toronto', 'Toronto', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 1, '77_erskin_ave_toronto.jpg', 12),
(89, 'toronto.php', 'toronto', 'Toronto', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 1, '77_glencairn_ave_first_painting.jpg', 13),
(90, 'toronto.php', 'toronto', 'Toronto', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 1, '77_glencairn_ave_one_view.jpg', 14),
(91, 'toronto.php', 'toronto', 'Toronto', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 1, '77_glencairn_ave_second_painting.jpg', 15),
(92, 'toronto.php', 'toronto', 'Toronto', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 1, '77_glencairn_ave_second_view.jpg', 16),
(93, 'toronto.php', 'toronto', 'Toronto', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '103_balmoral_toronto.jpg', 3),
(94, 'toronto.php', 'toronto', 'Toronto', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, '226_russell_hill_toronto.jpg', 4),
(95, 'toronto.php', 'toronto', 'Toronto', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'arbour.jpg', 5),
(96, 'toronto.php', 'toronto', 'Toronto', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'avenue_road_guache.jpg', 6),
(97, 'toronto.php', 'toronto', 'Toronto', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'cedar_cottage_cottageview.jpg', 7),
(98, 'toronto.php', 'toronto', 'Toronto', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'cedar_cottage_lakeview.jpg', 8),
(99, 'toronto.php', 'toronto', 'Toronto', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'farmhouse_ontario.jpg', 9),
(100, 'toronto.php', 'toronto', 'Toronto', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'gazebo_greystone_manor_queenston.jpg', 10),
(101, 'figure.php', 'figure', 'Figure, Still Life, Calligraphy', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 1, 'alexander_calder.jpg', 1),
(102, 'figure.php', 'figure', 'Figure, Still Life, Calligraphy', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 1, 'christine.jpg', 2),
(103, 'figure.php', 'figure', 'Figure, Still Life, Calligraphy', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 1, 'collage_ocad.jpg', 3),
(104, 'figure.php', 'figure', 'Figure, Still Life, Calligraphy', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 1, 'galeano_nude.jpg', 4),
(105, 'figure.php', 'figure', 'Figure, Still Life, Calligraphy', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'galeano_nude_2.jpg', 15),
(106, 'figure.php', 'figure', 'Figure, Still Life, Calligraphy', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 1, 'japanese_birdfeeder.jpg', 5),
(107, 'figure.php', 'figure', 'Figure, Still Life, Calligraphy', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 1, 'julia_lived_and_loved_here.jpg', 6),
(108, 'figure.php', 'figure', 'Figure, Still Life, Calligraphy', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 1, 'letterhead_niagara.jpg', 7),
(109, 'figure.php', 'figure', 'Figure, Still Life, Calligraphy', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 1, 'native_face.jpg', 8),
(110, 'figure.php', 'figure', 'Figure, Still Life, Calligraphy', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 1, 'nude_kneeling.jpg', 9),
(111, 'figure.php', 'figure', 'Figure, Still Life, Calligraphy', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 1, 'nude_reclining.jpg', 10),
(112, 'figure.php', 'figure', 'Figure, Still Life, Calligraphy', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 1, 'orange_nude.jpg', 11),
(113, 'figure.php', 'figure', 'Figure, Still Life, Calligraphy', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 1, 'robert_tait_mckenzie.jpg', 12),
(114, 'figure.php', 'figure', 'Figure, Still Life, Calligraphy', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 1, 'self_portrait.jpg', 13),
(115, 'figure.php', 'figure', 'Figure, Still Life, Calligraphy', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 1, 'st_joseph.jpg', 14),
(116, 'figure.php', 'figure', 'Figure, Still Life, Calligraphy', 'picture name', 'Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla... Bla..', '1999 year, watercolour', 0, 'still_life_galiano.jpg', 16);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `pageName`, `titlePage`, `metaDescription`, `captionPage`, `imageLocation`, `header_1`, `header_2`, `header_3`, `text_1`, `text_2`, `text_3`) VALUES
(1, 'index', 'HappySlacks | Janos Varga', 'Photo and pictures from Janos Varga in HappySlacks.com website.', '', 'images', '', '', '', '', '', ''),
(2, 'canadawide', 'HappySlacks | Canada Wide', 'Canada Wide Gallery of Janos VargaPhoto and pictures from Janos Varga in HappySlacks.com website.', '', 'canada_wide', 'Welcome to Canada Wide Gallery', '', '', '', '', ''),
(3, 'family', 'HappySlacks | Enter to Family Page', 'Canada Wide Gallery of Janos VargaPhoto and pictures from Janos Varga in HappySlacks.com website.', '', '', 'Enter to family page', '', '', '', '', ''),
(4, 'heritage', 'HappySlacks | Heritage Homes on the West Island', 'Heritage Homes on the West Island Gallery of Janos Varga.    Photo and pictures from Janos Varga in HappySlacks.com website.', '', 'bbhs', 'Welcome to Heritage homes on the West Island Gallery', '', '', '', '', ''),
(5, 'penink', 'HappySlacks | Pen & Ink', 'Pen & Ink Gallery of Janos Varga.    Photo and pictures from Janos Varga in HappySlacks.com website.', '', 'pen_ink', 'Welcome to Pen & Ink Gallery', '', '', '', '', ''),
(6, 'montreal', 'HappySlacks | Montreal ', 'Montreal Gallery of Janos Varga. Photo and pictures from Janos Varga in HappySlacks.com website.', '', 'montreal', 'Welcome to Montreal  Gallery', '', '', '', '', ''),
(7, 'worldwide', 'HappySlacks | Around the world', 'Around the world Gallery of Janos Varga. Photo and pictures from Janos Varga in HappySlacks.com website.', '', 'world_wide', 'Welcome to Around the world  Gallery', '', '', '', '', ''),
(8, 'toronto', 'HappySlacks | Toronto ', 'Toronto Gallery of Janos Varga. Photo and pictures from Janos Varga in HappySlacks.com website.', '', 'toronto', 'Welcome to Toronto Gallery', '', '', '', '', ''),
(9, 'figure', 'HappySlacks | Figure, Still Life, Calligraphy', 'Figure, Still Life, Calligraphy Gallery of Janos Varga. Photo and pictures from Janos Varga in HappySlacks.com website.', '', 'figure', 'Welcome to Figure, Still Life, Calligraphy Gallery', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userlist`
--

CREATE TABLE IF NOT EXISTS `userlist` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pass` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `userlist`
--

INSERT INTO `userlist` (`id`, `user`, `pass`) VALUES
(1, 'lery', '1234'),
(2, '123', '321');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
