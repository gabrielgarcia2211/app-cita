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
  `title` varchar(50) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `color` varchar(255) NOT NULL,
  `textColor` varchar(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `id_servicio` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `codigo` (`codigo`),
  KEY `id_servicio` (`id_servicio`),
  CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`codigo`) REFERENCES `users` (`codigo`),
  CONSTRAINT `cita_ibfk_2` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `cita` DISABLE KEYS */;
INSERT INTO `cita` (`id`, `codigo`, `title`, `descripcion`, `color`, `textColor`, `start`, `end`, `id_servicio`) VALUES
	(35, 1151654, 'mejorar conocimiento', 'desarrollo de actitudes', '#8080ff', '#FFFFFF', '2020-12-03 10:00:00', '2020-12-03 08:00:00', 2),
	(38, 1151655, 'cita', 'nuevos metodos de PDO', '#8080ff', '#FFFFFF', '2020-12-03 14:00:00', '2020-12-03 10:00:00', 2),
	(39, 1151654, 'nueva actividad', 'casos de uso', '#8080ff', '#FFFFFF', '2020-12-04 08:00:00', '2020-12-04 08:00:00', 3),
	(40, 1151654, 'experiencia de usuario', 'temas y diseños web', '#8080ff', '#FFFFFF', '2020-12-04 12:00:00', '2020-12-04 12:00:00', 3);
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
	('Matias', 'Herrera', 8126, 'matias@ufps.edu.co', 'aa'),
	('Javier', 'Trujillo', 1002112, 'javier@ufps.edu.co', '222'),
	('Adam', 'Herrera', 10021554, 'maria@gmail.com', '222'),
	('Daniel', 'Calderon', 521999098, 'calderon@gmail.com', '126721'),
	('Manuel', 'Quintana', 1004804511, 'el@gmail.com', '213123'),
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
	(2, 'Estructuras de datos'),
	(3, 'ANALISIS Y DISEñO');
/*!40000 ALTER TABLE `servicio` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `users` (
  `codigo` int(11) NOT NULL,
  `correo_institucional` varchar(255) DEFAULT NULL,
  `documento` int(11) NOT NULL,
  `contrasenia` varchar(50) DEFAULT NULL,
  `rol` int(1) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `documento` (`documento`),
  KEY `rol` (`rol`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`documento`) REFERENCES `personas` (`documento`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `users_ibfk_2` FOREIGN KEY (`rol`) REFERENCES `rol` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`codigo`, `correo_institucional`, `documento`, `contrasenia`, `rol`) VALUES
	(111, 'javier@gmail.com', 1002112, '827ccb0eea8a706c4c34a16891f84e7b', 2),
	(6402, 'wilber04@example.com', 10021554, '827ccb0eea8a706c4c34a16891f84e7b', 3),
	(45454, 'matias@gmail.com', 8126, '827ccb0eea8a706c4c34a16891f84e7b', 2),
	(1151654, 'gabrielarturogq@ufps.edu.co', 1004804515, '827ccb0eea8a706c4c34a16891f84e7b', 3),
	(1151655, 'no@ufps.edu.co', 1004804511, '827ccb0eea8a706c4c34a16891f84e7b', 3),
	(1154252, 'danielcaos@ufps.edu.co', 521999098, '827ccb0eea8a706c4c34a16891f84e7b', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `user_servicio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_ingeniero` int(11) DEFAULT NULL,
  `id_servico` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_servico` (`id_servico`),
  KEY `user_servicio_ibfk_1` (`codigo_ingeniero`),
  CONSTRAINT `user_servicio_ibfk_1` FOREIGN KEY (`codigo_ingeniero`) REFERENCES `users` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_servicio_ibfk_2` FOREIGN KEY (`id_servico`) REFERENCES `servicio` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `user_servicio` DISABLE KEYS */;
INSERT INTO `user_servicio` (`id`, `codigo_ingeniero`, `id_servico`) VALUES
	(4, 45454, 1),
	(5, 45454, 2),
	(6, 111, 1);
/*!40000 ALTER TABLE `user_servicio` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
