-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.19-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for aplikasi_penilaian_tower
CREATE DATABASE IF NOT EXISTS `aplikasi_penilaian_tower` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `aplikasi_penilaian_tower`;

-- Dumping structure for table aplikasi_penilaian_tower.penilaian_tower
CREATE TABLE IF NOT EXISTS `penilaian_tower` (
  `id_penilaian_tower` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_tower` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `nilai_tower` float(6,2) DEFAULT NULL,
  `nilai_andongan_1` float(6,2) DEFAULT NULL,
  `nilai_andongan_2` float(6,2) DEFAULT NULL,
  `nilai_tower_fitman` float(6,2) DEFAULT NULL,
  `nilai_aksesoris_1` float(6,2) DEFAULT NULL,
  `nilai_aksesoris_2` float(6,2) DEFAULT NULL,
  `jarak_dumper` float(6,2) DEFAULT NULL,
  `lilitan_dumper` float(6,2) DEFAULT NULL,
  `nilai_corona_coil` float(6,2) DEFAULT NULL,
  `nilai_spare_kabel` float(6,2) DEFAULT NULL,
  `nilai_olit` float(6,2) DEFAULT NULL,
  `tanggal_input` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_penilaian_tower`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table aplikasi_penilaian_tower.penilaian_tower: ~6 rows (approximately)
/*!40000 ALTER TABLE `penilaian_tower` DISABLE KEYS */;
INSERT INTO `penilaian_tower` (`id_penilaian_tower`, `nomor_tower`, `nilai_tower`, `nilai_andongan_1`, `nilai_andongan_2`, `nilai_tower_fitman`, `nilai_aksesoris_1`, `nilai_aksesoris_2`, `jarak_dumper`, `lilitan_dumper`, `nilai_corona_coil`, `nilai_spare_kabel`, `nilai_olit`, `tanggal_input`) VALUES
	(1, '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '0000-00-00 00:00:00'),
	(2, 'Tower 194', 0.99, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '0000-00-00 00:00:00'),
	(3, 'Tower 194', 45.62, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '2021-07-11 19:38:08'),
	(4, 'Tower 194', 45.62, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '2021-07-11 20:48:20'),
	(5, 'Tower 194', 45.62, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '2021-07-11 20:49:49'),
	(6, 'Tower 194', 45.62, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '2021-07-11 20:55:29');
/*!40000 ALTER TABLE `penilaian_tower` ENABLE KEYS */;

-- Dumping structure for table aplikasi_penilaian_tower.user
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `tipe` enum('admin','pegawai','manager') DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table aplikasi_penilaian_tower.user: 3 rows
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`username`, `password`, `tipe`) VALUES
	('admin', 'admin', 'admin'),
	('user2', '123456', 'pegawai'),
	('test1', '123456', 'manager');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
