-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para ghmedic
CREATE DATABASE IF NOT EXISTS `ghmedic` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ghmedic`;

-- Volcando estructura para tabla ghmedic.empleados
CREATE TABLE IF NOT EXISTS `empleados` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Departamento` varchar(17) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla ghmedic.empleados: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` (`ID`, `Nombre`, `Edad`, `Departamento`) VALUES
	(4, 'dadasd', 33, 'Recursos humano'),
	(5, 'dadasd', 33, 'Recursos humano'),
	(6, 'dadasd', 33, 'Recursos humano'),
	(7, 'dadasd', 33, 'Recursos humano'),
	(8, 'dadasd', 33, 'Recursos humano'),
	(9, 'Alejandro Richaud Renteria', 21, 'Mercadotecnia'),
	(10, 'Alejandro Richaud Renteria', 21, 'Mercadotecnia'),
	(11, 'Pedro', 22, 'Recursos humano');
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;

-- Volcando estructura para tabla ghmedic.estados_federativos
CREATE TABLE IF NOT EXISTS `estados_federativos` (
  `PKEstado` int(11) NOT NULL AUTO_INCREMENT,
  `Estado` varchar(35) NOT NULL,
  `FKPais` int(11) NOT NULL,
  PRIMARY KEY (`PKEstado`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla ghmedic.estados_federativos: ~34 rows (aproximadamente)
/*!40000 ALTER TABLE `estados_federativos` DISABLE KEYS */;
INSERT INTO `estados_federativos` (`PKEstado`, `Estado`, `FKPais`) VALUES
	(1, 'Aguascalientes', 146),
	(2, 'Baja California', 146),
	(3, 'Baja California Sur', 146),
	(4, 'Campeche', 146),
	(5, 'Chiapas', 146),
	(6, 'Chihuahua', 146),
	(7, 'Ciudad de México', 146),
	(8, 'Coahuila', 146),
	(9, 'Colima', 146),
	(10, 'Durango', 146),
	(11, 'Guanajuato', 146),
	(12, 'Guerrero', 146),
	(13, 'Hidalgo', 146),
	(14, 'Jalisco', 146),
	(15, 'Estado de México', 146),
	(16, 'Michoacán', 146),
	(17, 'Morelos', 146),
	(18, 'Nayarit', 146),
	(19, 'Nuevo León', 146),
	(20, 'Oaxaca', 146),
	(21, 'Puebla', 146),
	(22, 'Querétaro', 146),
	(23, 'Quintana Roo', 146),
	(24, 'San Luis Potosí', 146),
	(25, 'Sinaloa', 146),
	(26, 'Sonora', 146),
	(27, 'Tabasco', 146),
	(28, 'Tamaulipas', 146),
	(29, 'Tlaxcala', 146),
	(30, 'Veracruz', 146),
	(31, 'Yucatán', 146),
	(32, 'Zacatecas', 146),
	(33, 'Texas', 75),
	(34, 'DC', 75);
/*!40000 ALTER TABLE `estados_federativos` ENABLE KEYS */;

-- Volcando estructura para tabla ghmedic.paises
CREATE TABLE IF NOT EXISTS `paises` (
  `PKPais` int(11) NOT NULL AUTO_INCREMENT,
  `Pais` varchar(25) NOT NULL,
  `Disponible` int(5) NOT NULL,
  PRIMARY KEY (`PKPais`)
) ENGINE=InnoDB AUTO_INCREMENT=241 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ghmedic.paises: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `paises` DISABLE KEYS */;
INSERT INTO `paises` (`PKPais`, `Pais`, `Disponible`) VALUES
	(75, 'Estados Unidos', 0),
	(146, 'México', 1);
/*!40000 ALTER TABLE `paises` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
