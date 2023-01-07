-- --------------------------------------------------------
-- Host:                         www.desarrollaplus.net
-- Versión del servidor:         10.3.37-MariaDB-cll-lve - MariaDB Server
-- SO del servidor:              Linux
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para desarro7_boyas
CREATE DATABASE IF NOT EXISTS `desarro7_boyas` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `desarro7_boyas`;

-- Volcando estructura para tabla desarro7_boyas.ritmo
CREATE TABLE IF NOT EXISTS `ritmo` (
  `meastime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `boyaid` varchar(6) NOT NULL,
  `ritcode` int(5) DEFAULT 0,
  `ritmos` int(5) DEFAULT 0,
  `period` int(5) DEFAULT 0,
  `duty` int(5) DEFAULT 0,
  `fl01` int(5) DEFAULT 0,
  `osc01` int(5) DEFAULT 0,
  `fl02` int(5) DEFAULT 0,
  `osc02` int(5) DEFAULT 0,
  `fl03` int(5) DEFAULT 0,
  `osc03` int(5) DEFAULT 0,
  `fl04` int(5) DEFAULT 0,
  `osc04` int(5) DEFAULT 0,
  `fl05` int(5) DEFAULT 0,
  `osc05` int(5) DEFAULT 0,
  `fl06` int(5) DEFAULT 0,
  `osc06` int(5) DEFAULT 0,
  `fl07` int(5) DEFAULT 0,
  `osc07` int(5) DEFAULT 0,
  `fl08` int(5) DEFAULT 0,
  `osc08` int(5) DEFAULT 0,
  `fl09` int(5) DEFAULT 0,
  `osc09` int(5) DEFAULT 0,
  `fl10` int(5) DEFAULT 0,
  `osc10` int(5) DEFAULT 0,
  `fl11` int(5) DEFAULT 0,
  `osc11` int(5) DEFAULT 0,
  `fl12` int(5) DEFAULT 0,
  `osc12` int(5) DEFAULT 0,
  PRIMARY KEY (`boyaid`,`meastime`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla desarro7_boyas.ritmo: ~2 rows (aproximadamente)
INSERT IGNORE INTO `ritmo` (`meastime`, `boyaid`, `ritcode`, `ritmos`, `period`, `duty`, `fl01`, `osc01`, `fl02`, `osc02`, `fl03`, `osc03`, `fl04`, `osc04`, `fl05`, `osc05`, `fl06`, `osc06`, `fl07`, `osc07`, `fl08`, `osc08`, `fl09`, `osc09`, `fl10`, `osc10`, `fl11`, `osc11`, `fl12`, `osc12`) VALUES
	('2022-07-21 17:28:20', 'BOY123', 257, 6, 12500, 50, 500, 500, 300, 300, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	('2022-07-14 17:32:09', 'BOY456', 258, 12, 23400, 80, 2000, 4000, 2000, 4000, 15000, 6000, 9000, 1000, 2000, 3000, 8000, 9000, 2000, 300, 300, 900, 900, 5000, 1000, 1000, 3000, 500, 500, 1000);

-- Volcando estructura para tabla desarro7_boyas.telemetry
CREATE TABLE IF NOT EXISTS `telemetry` (
  `meastime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `boyaid` varchar(6) NOT NULL,
  `gpslat` float DEFAULT NULL,
  `gpslon` float DEFAULT NULL,
  `vbattfanal` int(5) DEFAULT NULL,
  `ibattfanal` int(5) DEFAULT NULL,
  `vsolarcharg` int(5) DEFAULT NULL,
  `isolarcharg` int(5) DEFAULT NULL,
  `vmaxfanal` int(5) DEFAULT NULL,
  `vminfanal` int(5) DEFAULT NULL,
  `imaxfanal` int(5) DEFAULT NULL,
  `iminfanal` int(5) DEFAULT NULL,
  `vmaxsolar` int(5) DEFAULT NULL,
  `vminsolar` int(5) DEFAULT NULL,
  `imaxsolar` int(5) DEFAULT NULL,
  `iminsolar` int(5) DEFAULT NULL,
  `din1` int(1) DEFAULT NULL,
  `din2` int(1) DEFAULT NULL,
  `din3` int(1) DEFAULT NULL,
  `alarmdins` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`boyaid`,`meastime`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla desarro7_boyas.telemetry: ~13 rows (aproximadamente)
INSERT IGNORE INTO `telemetry` (`meastime`, `boyaid`, `gpslat`, `gpslon`, `vbattfanal`, `ibattfanal`, `vsolarcharg`, `isolarcharg`, `vmaxfanal`, `vminfanal`, `imaxfanal`, `iminfanal`, `vmaxsolar`, `vminsolar`, `imaxsolar`, `iminsolar`, `din1`, `din2`, `din3`, `alarmdins`) VALUES
	('2022-07-20 03:00:00', 'BOY123', -36.822, -73.0134, 22311, 291, 17231, 292, 21000, 5000, 400, 5, 20000, 4000, 300, 10, 1, 0, 1, '0500'),
	('2022-07-20 06:00:00', 'BOY123', -36.822, -73.0134, 22311, 291, 17231, 292, 21000, 5000, 400, 5, 20000, 4000, 300, 10, 1, 0, 1, '0500'),
	('2022-07-21 03:30:00', 'BOY123', -36.8103, -73.1743, 25311, 791, 6031, 292, 21033, 10055, 505, 100, 15023, 5012, 401, 101, 1, 1, 0, '03FF'),
	('2022-07-21 04:00:00', 'BOY123', -36.822, -73.0134, 20311, 91, 10231, 92, 21000, 5000, 400, 5, 20000, 4000, 300, 10, 1, 0, 1, '0500'),
	('2022-07-21 04:30:00', 'BOY123', -36.8103, -73.1743, 20311, 291, 9031, 392, 21033, 10055, 505, 100, 15023, 5012, 401, 101, 1, 0, 0, '01FF'),
	('2022-07-21 05:30:00', 'BOY123', -36.8103, -73.1743, 25311, 791, 6031, 292, 21133, 10155, 715, 151, 18023, 9012, 501, 201, 1, 1, 0, '03FF'),
	('2022-07-21 06:30:00', 'BOY123', -36.8103, -73.1743, 15311, 591, 7031, 192, 21033, 10055, 505, 100, 15023, 5012, 401, 101, 1, 1, 0, '03FF'),
	('2022-07-21 07:30:00', 'BOY123', -36.8103, -73.1743, 15311, 491, 7031, 192, 21033, 10055, 505, 100, 15023, 5012, 401, 101, 1, 1, 0, '03FF'),
	('2022-07-21 08:30:00', 'BOY123', -36.8103, -73.1743, 15311, 491, 7031, 192, 21033, 10055, 505, 100, 15023, 5012, 401, 101, 1, 0, 0, '01FF'),
	('2022-07-21 09:30:00', 'BOY123', -36.8103, -73.1743, 15311, 491, 7031, 192, 21033, 10055, 505, 100, 15023, 5012, 401, 101, 0, 0, 0, '00FF'),
	('2022-07-20 03:00:00', 'BOY456', -36.822, -73.0134, 20311, 91, 10231, 92, 21000, 5000, 400, 5, 20000, 4000, 300, 10, 1, 0, 1, '0500'),
	('2022-07-20 04:10:00', 'BOY456', -36.822, -73.0134, 19311, 991, 15231, 992, 21000, 5000, 400, 5, 20000, 4000, 300, 10, 1, 0, 0, '0100'),
	('2022-07-20 05:10:00', 'BOY456', -36.822, -73.0134, 19311, 991, 15231, 992, 21000, 5000, 400, 5, 20000, 4000, 300, 10, 1, 0, 0, '0100'),
	('2022-07-20 06:00:00', 'BOY456', -36.822, -73.0134, 19311, 191, 15231, 392, 21000, 5000, 400, 5, 20000, 4000, 300, 10, 1, 0, 0, '0100'),
	('2022-07-21 10:30:00', 'BOY456', -36.8103, -73.1743, 20311, 291, 9031, 392, 21033, 10055, 505, 100, 15023, 5012, 401, 101, 1, 0, 0, '01FF'),
	('2022-07-21 11:30:00', 'BOY456', -36.8103, -73.1743, 25311, 791, 6031, 292, 21133, 10155, 715, 151, 18023, 9012, 501, 201, 1, 1, 0, '03FF'),
	('2022-07-21 12:30:00', 'BOY456', -36.8103, -73.1743, 15311, 491, 7031, 192, 21033, 10055, 505, 100, 15023, 5012, 401, 101, 0, 0, 0, '00FF');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
