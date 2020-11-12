/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE IF NOT EXISTS `cita` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cita`;

CREATE TABLE IF NOT EXISTS `cita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `color` varchar(255) NOT NULL,
  `textColor` varchar(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `id_servicio` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `codigo` (`codigo`),
  KEY `id_servicio` (`id_servicio`),
  CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`codigo`) REFERENCES `users` (`codigo`),
  CONSTRAINT `cita_ibfk_2` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `cita` DISABLE KEYS */;
INSERT INTO `cita` (`id`, `codigo`, `title`, `descripcion`, `color`, `textColor`, `start`, `end`, `id_servicio`) VALUES
	(1, 1151654, 'duda programada', 'no entiendo un concepto', '#FF5E4B', '#FFFFFF', '2020-11-07 10:00:00', '2020-11-07 10:00:00', 1),
	(6, 1151654, 'hola new', 'hola', '#FF5E4B', '#FFFFFF', '2020-11-13 12:00:00', '2020-11-13 12:00:00', 1),
	(7, 1151654, 'aaa', 'aa', '#FF5E4B', '#FFFFFF', '2020-11-12 10:00:00', '2020-11-12 10:00:00', 1),
	(9, 1151654, 'nada que ver', 'aaa', '#FF5E4B', '#FFFFFF', '2020-11-03 14:00:00', '2020-11-03 14:00:00', 1),
	(10, 1151654, 'dragon ball', 'aa', '#8080ff', '#FFFFFF', '2020-11-13 08:00:00', '2020-11-13 08:00:00', 2);
/*!40000 ALTER TABLE `cita` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `personas` (
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `documento` int(11) NOT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `personas` DISABLE KEYS */;
INSERT INTO `personas` (`nombre`, `apellido`, `documento`, `correo`, `telefono`) VALUES
	('Gabriel', 'Garcia', 1004804515, 'garcia@gmail.com', '455443');
/*!40000 ALTER TABLE `personas` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `rol` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` (`id`, `descripcion`) VALUES
	(1, 'administrador'),
	(2, 'ingeniero'),
	(3, 'estudiante');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `servicio` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `servicio` DISABLE KEYS */;
INSERT INTO `servicio` (`id`, `descripcion`) VALUES
	(1, 'Programacion web'),
	(2, 'Estructuras de datos');
/*!40000 ALTER TABLE `servicio` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `users` (
  `codigo` int(11) NOT NULL,
  `correo_institucional` varchar(255) DEFAULT NULL,
  `documento` int(11) NOT NULL,
  `contraseña` varchar(50) DEFAULT NULL,
  `rol` int(1) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `documento` (`documento`),
  KEY `rol` (`rol`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`documento`) REFERENCES `personas` (`documento`),
  CONSTRAINT `users_ibfk_2` FOREIGN KEY (`rol`) REFERENCES `rol` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`codigo`, `correo_institucional`, `documento`, `contraseña`, `rol`) VALUES
	(1151654, 'gabrielarturogq@ufps.edu.co', 1004804515, '12345', 3);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
