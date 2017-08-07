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

-- Dumping structure for table models.destinations
CREATE TABLE IF NOT EXISTS `destinations` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Dumping data for table models.destinations: 14 rows
DELETE FROM `destinations`;
/*!40000 ALTER TABLE `destinations` DISABLE KEYS */;
INSERT INTO `destinations` (`id`, `name`) VALUES
	(1, 'Caribbean & Midden-Amerika'),
	(2, 'Azië'),
	(3, 'Dubai & Emiraten'),
	(4, 'Middellandse Zee'),
	(5, 'Noord-Europa'),
	(6, 'Zuid-Amerika'),
	(7, 'Transatlantisch'),
	(8, 'Wereldcruise & Grand Voyages'),
	(9, 'Westkust VS'),
	(10, 'Oceanie'),
	(11, 'Alaska'),
	(12, 'Afrika'),
	(13, 'Noord-Amerika'),
	(14, 'Panamakanaal');
/*!40000 ALTER TABLE `destinations` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
