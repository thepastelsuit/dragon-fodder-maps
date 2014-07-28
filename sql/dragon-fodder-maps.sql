
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `text` varchar(50) DEFAULT '0',
  `path` varchar(50) DEFAULT '0',
  `location` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `location` (`location`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` (`id`, `text`, `path`, `location`) VALUES
	(7, 'rivets', 'rivets.jpg', 5);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `map_points` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `val` varchar(20) DEFAULT NULL,
  `title` text,
  `desc` text,
  `icon` varchar(20) DEFAULT NULL,
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `map_points` DISABLE KEYS */;
INSERT INTO `map_points` (`id`, `val`, `title`, `desc`, `icon`, `x`, `y`, `type`) VALUES
	(5, 'nokudacity', 'Nokuda City', 'Large city governing the land mass of Merrimere.', 'big-city', 1782, 834, 'location');
/*!40000 ALTER TABLE `map_points` ENABLE KEYS */;


CREATE TABLE IF NOT EXISTS `map_types` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `key` varchar(20) DEFAULT '0',
  `image` varchar(50) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `map_types` DISABLE KEYS */;
INSERT INTO `map_types` (`id`, `key`, `image`) VALUES
	(3, 'roads', 'roads.png');
/*!40000 ALTER TABLE `map_types` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
