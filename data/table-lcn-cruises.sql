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

-- Dumping structure for table test.lcn_crs
CREATE TABLE IF NOT EXISTS `lcn_crs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `run_dat` varchar(8) DEFAULT NULL,
  `ship_cd` varchar(10) DEFAULT NULL,
  `sail_dat` date DEFAULT NULL,
  `sail_day_qty` int(3) DEFAULT NULL,
  `voyage_cd` varchar(10) DEFAULT NULL,
  `package_type_cd` varchar(20) DEFAULT NULL,
  `itinerary_desc` varchar(100) DEFAULT NULL,
  `price_program_cd` varchar(50) DEFAULT NULL,
  `category_cd` varchar(5) DEFAULT NULL,
  `gateway_cd` varchar(5) DEFAULT NULL,
  `sail_id` varchar(50) DEFAULT NULL,
  `embark_port_cd` varchar(3) DEFAULT NULL,
  `disembark_port_cd` varchar(3) DEFAULT NULL,
  `meta_category_cd` varchar(15) DEFAULT NULL,
  `total_pkg_tariff_amt` double(5,2) DEFAULT NULL,
  `total_pkg_sgl_supp_amt` double(5,2) DEFAULT NULL,
  `total_pkg_t4_adult_amt` double(5,2) DEFAULT NULL,
  `total_pkg_t4_child_amt` double(5,2) DEFAULT NULL,
  `total_pkg_t4_infant_amt` double(5,2) DEFAULT NULL,
  `gtf_tariff_amt` double(5,2) DEFAULT NULL,
  `gtf_sgl_supp_amt` double(5,2) DEFAULT NULL,
  `gtf_t4_adult_amt` double(5,2) DEFAULT NULL,
  `gtf_t4_child_amt` double(5,2) DEFAULT NULL,
  `gtf_t4_infant_amt` double(5,2) DEFAULT NULL,
  `fuel_suppl_comm_tariff_amt` double(5,2) DEFAULT NULL,
  `fuel_suppl_comm_sgl_supp_amt` double(5,2) DEFAULT NULL,
  `fuel_suppl_comm_t4_adult_amt` double(5,2) DEFAULT NULL,
  `fuel_suppl_comm_t4_child_amt` double(5,2) DEFAULT NULL,
  `fuel_suppl_comm_t4_infant_amt` double(5,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table test.lcn_crs: ~0 rows (approximately)
DELETE FROM `lcn_crs`;
/*!40000 ALTER TABLE `lcn_crs` DISABLE KEYS */;
/*!40000 ALTER TABLE `lcn_crs` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
