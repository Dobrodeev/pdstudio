-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.38 - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных Dance
CREATE DATABASE IF NOT EXISTS `Dance` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `Dance`;

-- Дамп структуры для таблица Dance.news
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `description` varchar(50) NOT NULL DEFAULT '0',
  `link` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Dance.news: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Дамп структуры для таблица Dance.prices
CREATE TABLE IF NOT EXISTS `prices` (
  `price_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name_lesson` varchar(50) NOT NULL DEFAULT '0',
  `price_lesson` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`price_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Dance.prices: ~9 rows (приблизительно)
/*!40000 ALTER TABLE `prices` DISABLE KEYS */;
INSERT INTO `prices` (`price_id`, `name_lesson`, `price_lesson`) VALUES
	(1, 'пробное', '70'),
	(2, 'разовое', '100'),
	(3, '4', '340'),
	(4, '6', '500'),
	(5, '8', '620'),
	(6, '12', '850'),
	(7, '16', '1080'),
	(8, 'индивидуалка', '250'),
	(9, 'аренда 1 час', '100');
/*!40000 ALTER TABLE `prices` ENABLE KEYS */;

-- Дамп структуры для таблица Dance.shedule
CREATE TABLE IF NOT EXISTS `shedule` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `time` time NOT NULL DEFAULT '00:00:00',
  `monday` varchar(50) NOT NULL DEFAULT '0',
  `tuesday` varchar(50) NOT NULL DEFAULT '0',
  `wednesday` varchar(50) NOT NULL DEFAULT '0',
  `thursday` varchar(50) NOT NULL DEFAULT '0',
  `friday` varchar(50) NOT NULL DEFAULT '0',
  `saturday` varchar(50) NOT NULL DEFAULT '0',
  `sunday` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Dance.shedule: ~7 rows (приблизительно)
/*!40000 ALTER TABLE `shedule` DISABLE KEYS */;
INSERT INTO `shedule` (`id`, `time`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`) VALUES
	(1, '00:09:00', '0', '0', 'Str', '0', '0', '0', '0'),
	(2, '00:10:00', 'Exot', '0', 'PD', '0', 'Exot', 'PD', 'PD'),
	(3, '00:11:00', 'Str', '0', 'Str', '0', 'Str', 'Str', 'Str'),
	(4, '00:12:00', 'PD', '0', '0', '0', '0', '0', '0'),
	(5, '00:18:00', '0', '0', '0', 'Exot', '0', '0', '0'),
	(6, '00:19:00', 'PD', 'PD', 'PD', 'PD', 'Exot', '0', '0'),
	(7, '00:20:00', 'Str', 'Exot', 'PD', 'Exot', 'Str', '0', '0');
/*!40000 ALTER TABLE `shedule` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
