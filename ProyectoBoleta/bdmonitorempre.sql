-- --------------------------------------------------------
-- Host:                         sql.drimer.com.pe
-- Versión del servidor:         10.5.8-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para monitorbolpago
CREATE DATABASE IF NOT EXISTS `monitorbolpago` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `monitorbolpago`;

-- Volcando estructura para tabla monitorbolpago.tbl_empresa
DROP TABLE IF EXISTS `tbl_empresa`;
CREATE TABLE IF NOT EXISTS `tbl_empresa` (
  `ID` char(2) NOT NULL,
  `Empresa` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla monitorbolpago.tbl_empresa: ~5 rows (aproximadamente)
DELETE FROM `tbl_empresa`;
INSERT INTO `tbl_empresa` (`ID`, `Empresa`) VALUES
	('01', 'CIA. INDUSTRIAL CONTINENTAL SAC.'),
	('02', 'MUEBLES Y DORMITORIOS EIRL.'),
	('03', 'REPER S.A.'),
	('04', 'EMPRESA DE TRANSPORTE SERVICE STAR S.A.C '),
	('05', 'SEGELL DECORACIONES S.A.C.'),
	('06', 'INMOCONTINENTAL.S.A.C');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
