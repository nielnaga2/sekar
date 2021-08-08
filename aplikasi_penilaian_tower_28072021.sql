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

-- Dumping structure for view aplikasi_penilaian_tower.k1
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `k1` (
	`k1` DOUBLE(19,2) NULL
) ENGINE=MyISAM;

-- Dumping structure for view aplikasi_penilaian_tower.k10
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `k10` (
	`K10` DOUBLE(19,2) NULL
) ENGINE=MyISAM;

-- Dumping structure for view aplikasi_penilaian_tower.k11
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `k11` (
	`K11` DOUBLE(19,2) NULL
) ENGINE=MyISAM;

-- Dumping structure for view aplikasi_penilaian_tower.k2
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `k2` (
	`K2` DOUBLE(19,2) NULL
) ENGINE=MyISAM;

-- Dumping structure for view aplikasi_penilaian_tower.k3
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `k3` (
	`K3` DOUBLE(19,2) NULL
) ENGINE=MyISAM;

-- Dumping structure for view aplikasi_penilaian_tower.k4
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `k4` (
	`K4` DOUBLE(19,2) NULL
) ENGINE=MyISAM;

-- Dumping structure for view aplikasi_penilaian_tower.k5
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `k5` (
	`K5` DOUBLE(19,2) NULL
) ENGINE=MyISAM;

-- Dumping structure for view aplikasi_penilaian_tower.k6
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `k6` (
	`K6` DOUBLE(19,2) NULL
) ENGINE=MyISAM;

-- Dumping structure for view aplikasi_penilaian_tower.k7
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `k7` (
	`K7` DOUBLE(19,2) NULL
) ENGINE=MyISAM;

-- Dumping structure for view aplikasi_penilaian_tower.k8
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `k8` (
	`K8` DOUBLE(19,2) NULL
) ENGINE=MyISAM;

-- Dumping structure for view aplikasi_penilaian_tower.k9
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `k9` (
	`K9` DOUBLE(19,2) NULL
) ENGINE=MyISAM;

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
  `status_group` int(1) DEFAULT 1,
  `tanggal_input` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_penilaian_tower`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table aplikasi_penilaian_tower.penilaian_tower: ~6 rows (approximately)
/*!40000 ALTER TABLE `penilaian_tower` DISABLE KEYS */;
INSERT INTO `penilaian_tower` (`id_penilaian_tower`, `nomor_tower`, `nilai_tower`, `nilai_andongan_1`, `nilai_andongan_2`, `nilai_tower_fitman`, `nilai_aksesoris_1`, `nilai_aksesoris_2`, `jarak_dumper`, `lilitan_dumper`, `nilai_corona_coil`, `nilai_spare_kabel`, `nilai_olit`, `status_group`, `tanggal_input`) VALUES
	(1, 'Tower 194', 3.00, 3.00, 3.00, 3.00, 3.00, 3.00, 3.00, 3.00, 3.00, 3.00, 3.00, 1, '0000-00-00 00:00:00'),
	(2, 'Tower 186\r\n', 3.00, 3.00, 3.00, 3.00, 3.00, 3.00, 0.00, 3.00, 3.00, 1.00, 3.00, 1, '0000-00-00 00:00:00'),
	(3, 'Tower 177\r\n', 3.00, 3.00, 3.00, 3.00, 3.00, 3.00, 0.00, 3.00, 3.00, 3.00, 1.00, 1, '0000-00-00 00:00:00'),
	(4, 'Tower 172\r\n', 3.00, 3.00, 3.00, 3.00, 3.00, 3.00, 3.00, 3.00, 3.00, 1.00, 1.00, 1, '0000-00-00 00:00:00'),
	(5, 'Tower 157', 3.00, 3.00, 3.00, 3.00, 3.00, 3.00, 0.00, 0.00, 3.00, 3.00, 3.00, 1, '0000-00-00 00:00:00'),
	(6, 'Tower 121', 3.00, 3.00, 3.00, 3.00, 3.00, 3.00, 3.00, 3.00, 3.00, 3.00, 3.00, 1, '0000-00-00 00:00:00');
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

-- Dumping structure for view aplikasi_penilaian_tower.view_penilaian_tower
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_penilaian_tower` (
	`id_penilaian_tower` INT(11) NOT NULL,
	`nomor_tower` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`K1` FLOAT(6,2) NULL,
	`K2` FLOAT(6,2) NULL,
	`K3` FLOAT(6,2) NULL,
	`K4` FLOAT(6,2) NULL,
	`K5` FLOAT(6,2) NULL,
	`K6` FLOAT(6,2) NULL,
	`K7` FLOAT(6,2) NULL,
	`K8` FLOAT(6,2) NULL,
	`K9` FLOAT(6,2) NULL,
	`K10` FLOAT(6,2) NULL,
	`K11` FLOAT(6,2) NULL,
	`status_group` INT(1) NULL
) ENGINE=MyISAM;

-- Dumping structure for view aplikasi_penilaian_tower.view_penilaian_tower_hasil
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_penilaian_tower_hasil` (
	`id_penilaian_tower` INT(11) NOT NULL,
	`nomor_tower` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`hasil` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view aplikasi_penilaian_tower.view_penilaian_tower_normalisasi
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_penilaian_tower_normalisasi` (
	`id_penilaian_tower` INT(11) NOT NULL,
	`nomor_tower` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`k1` DOUBLE NULL,
	`k2` DOUBLE NULL,
	`k3` DOUBLE NULL,
	`k4` DOUBLE NULL,
	`k5` DOUBLE NULL,
	`k6` DOUBLE NULL,
	`k7` DOUBLE NULL,
	`k8` DOUBLE NULL,
	`k9` DOUBLE NULL,
	`k10` DOUBLE NULL,
	`k11` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view aplikasi_penilaian_tower.view_penilaian_tower_ranking
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_penilaian_tower_ranking` (
	`id_penilaian_tower` INT(11) NOT NULL,
	`nomor_tower` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`hasil` DOUBLE NULL,
	`ranking` BIGINT(21) NOT NULL
) ENGINE=MyISAM;

-- Dumping structure for view aplikasi_penilaian_tower.k1
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `k1`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `k1` AS SELECT 			
			SUM(K1*k1) AS k1
FROM view_penilaian_tower
GROUP BY status_group ;

-- Dumping structure for view aplikasi_penilaian_tower.k10
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `k10`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `k10` AS SELECT 			
			SUM(K10*K10) AS K10
FROM view_penilaian_tower
GROUP BY status_group ;

-- Dumping structure for view aplikasi_penilaian_tower.k11
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `k11`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `k11` AS SELECT 			
			SUM(K11*K11) AS K11
FROM view_penilaian_tower
GROUP BY status_group ;

-- Dumping structure for view aplikasi_penilaian_tower.k2
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `k2`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `k2` AS SELECT 			
			SUM(K2*K2) AS K2
FROM view_penilaian_tower
GROUP BY status_group ;

-- Dumping structure for view aplikasi_penilaian_tower.k3
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `k3`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `k3` AS SELECT 			
			SUM(K3*K3) AS K3
FROM view_penilaian_tower
GROUP BY status_group ;

-- Dumping structure for view aplikasi_penilaian_tower.k4
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `k4`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `k4` AS SELECT 			
			SUM(K4*K4) AS K4
FROM view_penilaian_tower
GROUP BY status_group ;

-- Dumping structure for view aplikasi_penilaian_tower.k5
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `k5`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `k5` AS SELECT 			
			SUM(K5*K5) AS K5
FROM view_penilaian_tower
GROUP BY status_group ;

-- Dumping structure for view aplikasi_penilaian_tower.k6
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `k6`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `k6` AS SELECT 			
			SUM(K6*K6) AS K6
FROM view_penilaian_tower
GROUP BY status_group ;

-- Dumping structure for view aplikasi_penilaian_tower.k7
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `k7`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `k7` AS SELECT 			
			SUM(K7*K7) AS K7
FROM view_penilaian_tower
GROUP BY status_group ;

-- Dumping structure for view aplikasi_penilaian_tower.k8
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `k8`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `k8` AS SELECT 			
			SUM(K8*K8) AS K8
FROM view_penilaian_tower
GROUP BY status_group ;

-- Dumping structure for view aplikasi_penilaian_tower.k9
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `k9`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `k9` AS SELECT 			
			SUM(K9*K9) AS K9
FROM view_penilaian_tower
GROUP BY status_group ;

-- Dumping structure for view aplikasi_penilaian_tower.view_penilaian_tower
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_penilaian_tower`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_penilaian_tower` AS SELECT t1.id_penilaian_tower,
			t1.nomor_tower,
			t1.nilai_tower as K1,
			t1.nilai_andongan_1 AS K2,
			t1.nilai_andongan_2 AS K3,
			t1.nilai_tower_fitman AS K4,
			t1.nilai_aksesoris_1 AS K5,
			t1.nilai_aksesoris_2 AS K6,
			t1.jarak_dumper AS K7,
			t1.lilitan_dumper AS K8,
			t1.nilai_corona_coil AS K9,
			t1.nilai_spare_kabel AS K10,
			t1.nilai_olit AS K11,
			t1.status_group
FROM penilaian_tower t1 ;

-- Dumping structure for view aplikasi_penilaian_tower.view_penilaian_tower_hasil
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_penilaian_tower_hasil`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_penilaian_tower_hasil` AS SELECT 
		t1.id_penilaian_tower,
		t1.nomor_tower,
		(t1.k1+t1.k2+t1.k2+t1.k4+t1.k5+t1.k6+t1.k7+t1.k8+t1.k9+t1.k10+t1.k11) AS hasil

FROM view_penilaian_tower_normalisasi t1 ;

-- Dumping structure for view aplikasi_penilaian_tower.view_penilaian_tower_normalisasi
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_penilaian_tower_normalisasi`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_penilaian_tower_normalisasi` AS SELECT t1.id_penilaian_tower,
t1.nomor_tower,
t1.K1/SQRT((SELECT k1 FROM k1)) AS k1,
t1.K2/SQRT((SELECT k2 FROM k2)) AS k2,
t1.K3/SQRT((SELECT k3 FROM k3)) AS k3,
t1.K4/SQRT((SELECT k4 FROM k4)) AS k4,
t1.K5/SQRT((SELECT k5 FROM k5)) AS k5,
t1.K6/SQRT((SELECT k6 FROM k6)) AS k6,
t1.K7/SQRT((SELECT k7 FROM k7)) AS k7,
t1.K8/SQRT((SELECT k8 FROM k8)) AS k8,
t1.K9/SQRT((SELECT k9 FROM k9)) AS k9,
t1.K10/SQRT((SELECT k10 FROM k10)) AS k10,
t1.K11/SQRT((SELECT k11 FROM k11)) AS k11
FROM view_penilaian_tower t1 ;

-- Dumping structure for view aplikasi_penilaian_tower.view_penilaian_tower_ranking
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_penilaian_tower_ranking`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_penilaian_tower_ranking` AS SELECT 
		t1.id_penilaian_tower,
		t1.nomor_tower,
		t1.hasil,
		RANK() OVER (
        ORDER BY hasil
    ) ranking
FROM view_penilaian_tower_hasil t1 ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
