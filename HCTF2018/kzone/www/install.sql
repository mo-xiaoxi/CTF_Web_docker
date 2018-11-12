

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



CREATE TABLE IF NOT EXISTS `fish_admin` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `name` varchar(255) DEFAULT '',
  `qq` varchar(255) DEFAULT '',
  `per` int(11) NOT NULL DEFAULT '3',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=innodb  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;



INSERT INTO `fish_admin` (`id`, `username`, `password`, `name`, `qq`, `per`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '小杰', '1503816935', 1);


CREATE TABLE IF NOT EXISTS `fish_ip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin` int(11) NOT NULL,
  `ip` varchar(30) DEFAULT NULL,
  `addres` varchar(30) DEFAULT NULL,
  `platform` varchar(150) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=innodb DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `fish_user` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `ip` varchar(15) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `device` varchar(255) DEFAULT '',
  `output` int(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=innodb DEFAULT CHARSET=utf8;
