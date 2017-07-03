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

-- Dumping structure for table test.cn_itin
CREATE TABLE IF NOT EXISTS `cn_itin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cruise` varchar(50) NOT NULL,
  `ship` varchar(50) NOT NULL,
  `voy_length` float(3,2) NOT NULL,
  `date` datetime NOT NULL,
  `day_of_cruise` float(3,2) NOT NULL,
  `sequence` varchar(50) NOT NULL,
  `day_of_week` varchar(50) NOT NULL,
  `port_code` varchar(5) NOT NULL,
  `cntry_code` varchar(5) NOT NULL,
  `port_name` varchar(100) NOT NULL,
  `arrival` time NOT NULL,
  `departure` time NOT NULL,
  `type` varchar(25) NOT NULL,
  `mktcode` varchar(5) NOT NULL,
  `market_descr` varchar(100) NOT NULL,
  `supermkt` varchar(5) NOT NULL,
  `supermarket_descr` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table test.cn_itin: ~0 rows (approximately)
DELETE FROM `cn_itin`;
/*!40000 ALTER TABLE `cn_itin` DISABLE KEYS */;
/*!40000 ALTER TABLE `cn_itin` ENABLE KEYS */;

-- Dumping structure for table test.cn_prcs
CREATE TABLE IF NOT EXISTS `cn_prcs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `run_date` date NOT NULL,
  `cruise` varchar(50) NOT NULL,
  `ship` varchar(5) NOT NULL,
  `itin_desc` varchar(255) NOT NULL,
  `embark_date` date NOT NULL,
  `emb_port_code` varchar(5) NOT NULL,
  `emb_port_name` varchar(255) NOT NULL,
  `disembark_date` date NOT NULL,
  `disembark_port` varchar(5) NOT NULL,
  `disembark_port_desc` varchar(255) NOT NULL,
  `voy_length` float NOT NULL,
  `category` varchar(5) NOT NULL,
  `cat_status` varchar(10) NOT NULL,
  `promo_code` varchar(5) NOT NULL,
  `promo_desc` varchar(255) NOT NULL,
  `office` varchar(5) NOT NULL,
  `currency` varchar(3) NOT NULL,
  `broch_fare_amt` double(5,2) NOT NULL,
  `fare_amt` double(5,2) NOT NULL,
  `fare_type` varchar(5) NOT NULL,
  `broch_3_4_pax` double(5,2) NOT NULL,
  `fare_3_4_pax` double(5,2) NOT NULL,
  `port_charge` double(5,2) NOT NULL,
  `non_comm_chrg` double(5,2) NOT NULL,
  `mktcode` varchar(50) NOT NULL,
  `market_descr` varchar(50) NOT NULL,
  `supermkt` varchar(50) NOT NULL,
  `supermarket_descr` varchar(50) NOT NULL,
  `bonus_disc` double(5,2) NOT NULL,
  `bonus_disc_3_4` double(5,2) NOT NULL,
  `co_air_credit` double(5,2) NOT NULL,
  `co_air_credit_3_4` double(5,2) NOT NULL,
  `hotel_credit` double(5,2) NOT NULL,
  `hotel_credit_3_4` double(5,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table test.cn_prcs: ~0 rows (approximately)
DELETE FROM `cn_prcs`;
/*!40000 ALTER TABLE `cn_prcs` DISABLE KEYS */;
/*!40000 ALTER TABLE `cn_prcs` ENABLE KEYS */;

-- Dumping structure for table test.dsn_crs
CREATE TABLE IF NOT EXISTS `dsn_crs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ship` varchar(50) NOT NULL,
  `vacstart` date NOT NULL,
  `category` varchar(50) NOT NULL,
  `itin` varchar(50) NOT NULL,
  `occupancy` int(10) NOT NULL,
  `price12` double(5,2) NOT NULL,
  `adultprice35` double(5,2) NOT NULL,
  `childprice35` double(5,2) NOT NULL,
  `infantprice35` double(5,2) NOT NULL,
  `pricetaxes` double(5,2) NOT NULL,
  `sailid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table test.dsn_crs: ~0 rows (approximately)
DELETE FROM `dsn_crs`;
/*!40000 ALTER TABLE `dsn_crs` DISABLE KEYS */;
/*!40000 ALTER TABLE `dsn_crs` ENABLE KEYS */;

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

-- Dumping structure for table test.lcn_tnrrs
CREATE TABLE IF NOT EXISTS `lcn_tnrrs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `run_dat` date NOT NULL,
  `sail_id` int(10) NOT NULL,
  `long_ship_nam` varchar(255) NOT NULL,
  `sail_dat` date NOT NULL,
  `port_cd` varchar(3) NOT NULL,
  `port_nam` varchar(255) NOT NULL,
  `arrival_tim` time NOT NULL,
  `departure_tim` time NOT NULL,
  `offset_day_nbr` int(3) NOT NULL,
  `voyage_cd` varchar(100) NOT NULL,
  `brochure_product_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table test.lcn_tnrrs: ~0 rows (approximately)
DELETE FROM `lcn_tnrrs`;
/*!40000 ALTER TABLE `lcn_tnrrs` DISABLE KEYS */;
/*!40000 ALTER TABLE `lcn_tnrrs` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
