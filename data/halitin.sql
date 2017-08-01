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

-- Dumping structure for table models.itin
CREATE TABLE IF NOT EXISTS `itin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itin_code` varchar(50) NOT NULL,
  `step_num` varchar(50) NOT NULL,
  `weekday` varchar(3) NOT NULL,
  `port_code` varchar(3) NOT NULL,
  `port_name` varchar(50) NOT NULL,
  `departure_time` time NOT NULL,
  `arrival_time` time NOT NULL,
  `itin_description` varchar(255) NOT NULL,
  `itin_departure_date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rederij_id` (`itin_code`),
  KEY `schip_id` (`step_num`),
  KEY `haven_id` (`weekday`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table models.itin: ~0 rows (approximately)
DELETE FROM `itin`;
/*!40000 ALTER TABLE `itin` DISABLE KEYS */;
/*!40000 ALTER TABLE `itin` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
