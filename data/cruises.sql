-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table models.cruises
CREATE TABLE IF NOT EXISTS `cruises` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `broker_id` int(3) NOT NULL,
  `ship_id` int(4) NOT NULL,
  `haven_id` int(8) NOT NULL,
  `aankomsthaven_id` int(8) NOT NULL,
  `bestemming_id` int(3) NOT NULL,
  `begindatum` date NOT NULL,
  `duur` int(3) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `cruisecode` varchar(50) NOT NULL,
  `vaarroute` text NOT NULL,
  `vaarroute_detail` text NOT NULL,
  `incl_vluchten` enum('Y','N') NOT NULL DEFAULT 'N',
  `flight_search` enum('Y','N') NOT NULL DEFAULT 'N',
  `usps` text NOT NULL,
  `alias` varchar(255) NOT NULL,
  `img_urls` text NOT NULL,
  `metatitle` varchar(255) NOT NULL,
  `metadesc` text NOT NULL,
  `metatags` varchar(255) NOT NULL,
  `published` enum('Y','N') NOT NULL DEFAULT 'Y',
  `score` int(3) NOT NULL,
  `score_manual` int(3) NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `rederij_id` (`broker_id`),
  KEY `schip_id` (`ship_id`),
  KEY `haven_id` (`haven_id`),
  KEY `bestemming_id` (`bestemming_id`)
) ENGINE=InnoDB AUTO_INCREMENT=180466 DEFAULT CHARSET=latin1;

-- Dumping data for table models.cruises: ~1 rows (approximately)
DELETE FROM `cruises`;
/*!40000 ALTER TABLE `cruises` DISABLE KEYS */;
INSERT INTO `cruises` (`id`, `broker_id`, `ship_id`, `haven_id`, `aankomsthaven_id`, `bestemming_id`, `begindatum`, `duur`, `titel`, `cruisecode`, `vaarroute`, `vaarroute_detail`, `incl_vluchten`, `flight_search`, `usps`, `alias`, `img_urls`, `metatitle`, `metadesc`, `metatags`, `published`, `score`, `score_manual`, `modified`) VALUES
	(161051, 2, 192, 13, 13, 9, '2018-11-10', 7, '8 daagse Middellandse Zee Cruise vanuit Marseille langs Spanje, Malta en Itali&euml;', 'SV20181110MRSMRS', '13,9,157,461,125,105,2,13', 'a:7:{i:1;a:1:{s:1:"V";s:4:"1700";}i:2;a:2:{s:1:"A";s:4:"0800";s:1:"V";s:4:"1700";}i:3;a:2:{s:1:"A";s:4:"1300";s:1:"V";s:4:"1930";}i:4;a:2:{s:1:"A";s:4:"0800";s:1:"V";s:4:"1800";}i:5;a:2:{s:1:"A";s:4:"0800";s:1:"V";s:4:"1800";}i:7;a:2:{s:1:"A";s:4:"0900";s:1:"V";s:4:"1800";}i:8;a:1:{s:1:"A";s:4:"0900";}}', 'N', 'N', '', 'cruise/8-dagen-middellandse-zee-msc-seaview-161051', 'https://secure.cdn.vellance.com/cruisereizen/cruisereizen/img/rederijen/msc-cruises/schepen/mscseaview/schip/seaview_500.jpg,https://secure.cdn.vellance.com/cruisereizen/cruisereizen/img/rederijen/msc-cruises/schepen/mscseaview/schip/seaview_1400.jpg,https://secure.cdn.vellance.com/cruisereizen/cruisereizen/img/havens/genua/cr_102618134_1400.jpg,https://secure.cdn.vellance.com/cruisereizen/cruisereizen/img/havens/genua/cr_116905564_1400.jpg,https://secure.cdn.vellance.com/cruisereizen/cruisereizen/img/havens/napels/cr_123166243_1400.jpg,https://secure.cdn.vellance.com/cruisereizen/cruisereizen/img/havens/napels/cr_130051076_1400.jpg,https://secure.cdn.vellance.com/cruisereizen/cruisereizen/img/havens/messina/cr_115594582_1400.jpg,https://secure.cdn.vellance.com/cruisereizen/cruisereizen/img/havens/messina/cr_120626398_1400.jpg,https://secure.cdn.vellance.com/cruisereizen/cruisereizen/img/havens/barcelona/cr_85413376_1400.jpg,https://secure.cdn.vellance.com/cruisereizen/cruisereizen/img/havens/barcelona/gaudibarcelona_1400.jpg,https://secure.cdn.vellance.com/cruisereizen/cruisereizen/img/havens/marseille/cr_105182951_1400.jpg,https://secure.cdn.vellance.com/cruisereizen/cruisereizen/img/havens/marseille/cr_153807995_1400.jpg', 'Cruise Middellandse Zee | MSC Cruises | 161051 | MSC Seaview', 'Boek uw Middellandse Zee cruise (161051) van 8 dagen met MSC Seaview van MSC Cruises bij CruiseReizen.nl.', 'cruise Middellandse Zee, cruise MSC Cruises, cruise MSC Seaview, goedkope cruise Middellandse Zee, cruise Middellandse Zee aanbieding, cruise Frankrijk, cruise Marseille', 'Y', 12, 0, '2017-08-08 11:46:27');
/*!40000 ALTER TABLE `cruises` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
