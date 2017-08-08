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

-- Dumping structure for table models.brokers
CREATE TABLE IF NOT EXISTS `brokers` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `abbreviation` varchar(10) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `is_actif` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Dumping data for table models.brokers: 18 rows
DELETE FROM `brokers`;
/*!40000 ALTER TABLE `brokers` DISABLE KEYS */;
INSERT INTO `brokers` (`id`, `name`, `abbreviation`, `company_name`, `telephone`, `is_actif`) VALUES
	(1, 'Norwegian Cruise Line', 'NCL', 'Norwegian Cruise Line', '', 1),
	(2, 'MSC Cruises', 'MSC', 'MSC Cruises (MSC Cruises The Netherlands B.V.)', ' (0)23 71 11 500 ', 1),
	(3, 'Holland America Line', 'HAL', 'Holland America Line (HAL Services B.V.)', '', 1),
	(4, 'Royal Caribbean', 'Royal', 'Royal Caribbean (Amca Consultancy B.V.)', '', 1),
	(5, 'Azamara Club Cruises', 'Azamara', 'Azamara Club Cruises (Amca Consultancy B.V.)', '', 1),
	(6, 'Celebrity Cruises', 'Celebrity', 'Celebrity Cruises (Amca Consultancy B.V.)', '', 1),
	(7, 'Disney Cruise Line', 'Disney', 'Disney Cruise Line', '407 566-7000', 1),
	(8, 'Carnival Cruise Lines', 'Carnival', 'Carnival Cruise Lines', '1.888.227.6482', 1),
	(9, 'Hapag-Lloyd Cruises', 'HL', 'Hapag-Lloyd Cruises', '+49 40 3070 3070', 1),
	(10, 'AIDA Cruises', 'AIDA', 'AIDA Cruises', '', 1),
	(11, 'SeaDream Yacht Club', 'SeaDream', 'SeaDream Yacht Club', '', 1),
	(12, 'Star Clippers', 'Star C', 'Star Clippers', '', 1),
	(13, 'Seabourn', 'Seabourn', 'Seabourn', '', 1),
	(14, 'Ponant Yacht Cruises', 'Ponant', 'Ponant Yacht Cruises', '', 0),
	(15, 'Regent Seven Seas Cruises', 'Regent', 'Regent Seven Seas Cruises', '', 0),
	(16, 'Costa Cruises', 'Costa', 'Costa Cruises', '', 1),
	(17, 'Silversea Cruises', 'Silversea', 'Silversea Cruises', '', 1),
	(18, 'Oceania Cruises', 'Oceania', 'Oceania Cruises', '', 1);
/*!40000 ALTER TABLE `brokers` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
