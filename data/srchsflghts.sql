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

-- Dumping structure for table cruisereizen2.flghts
CREATE TABLE IF NOT EXISTS `flghts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `search_id` int(11) NOT NULL DEFAULT '0',
  `departure_city_code` varchar(5) NOT NULL,
  `arrival_city_code` varchar(5) NOT NULL,
  `carrier_code` varchar(5) NOT NULL,
  `departure_date` date NOT NULL,
  `departure_time` time NOT NULL,
  `arrival_date` date NOT NULL,
  `arrival_time` time NOT NULL,
  `flight_code` varchar(10) NOT NULL,
  `total_price` double(5,2) NOT NULL,
  `adult_price` double(5,2) NOT NULL,
  `child_price` double(5,2) NOT NULL,
  `infant_price` double(5,2) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table cruisereizen2.flghts: ~0 rows (approximately)
DELETE FROM `flghts`;
/*!40000 ALTER TABLE `flghts` DISABLE KEYS */;
/*!40000 ALTER TABLE `flghts` ENABLE KEYS */;

-- Dumping structure for table cruisereizen2.srchs
CREATE TABLE IF NOT EXISTS `srchs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `departure_airport` varchar(5) NOT NULL,
  `arrival_airport` varchar(5) NOT NULL,
  `departure_date` date NOT NULL,
  `return_date` date NOT NULL,
  `num_adult` int(2) NOT NULL,
  `num_child` int(2) NOT NULL,
  `num_infant` int(2) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table cruisereizen2.srchs: ~0 rows (approximately)
DELETE FROM `srchs`;
/*!40000 ALTER TABLE `srchs` DISABLE KEYS */;
/*!40000 ALTER TABLE `srchs` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
