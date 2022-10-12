# Host: localhost  (Version: 5.5.47)
# Date: 2017-04-15 22:43:04
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "speech"
#

CREATE TABLE `speech` (
  `content` text,
  `name` tinytext,
  `class` tinytext,
  `dateandtime` datetime DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
