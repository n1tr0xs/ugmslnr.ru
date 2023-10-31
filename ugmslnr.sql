-- Adminer 4.8.1 MySQL 5.1.73-community dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `ugmslnr`;
CREATE DATABASE `ugmslnr` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `ugmslnr`;

DROP TABLE IF EXISTS `awc`;
CREATE TABLE `awc` (
  `date` date NOT NULL,
  `desc` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


DROP TABLE IF EXISTS `day_parts`;
CREATE TABLE `day_parts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `day_parts` (`id`, `name`) VALUES
(1,	'ночь'),
(2,	'день');

DROP TABLE IF EXISTS `fire_forecast`;
CREATE TABLE `fire_forecast` (
  `start` date NOT NULL,
  `end` date NOT NULL,
  `desc` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


DROP TABLE IF EXISTS `icons`;
CREATE TABLE `icons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `url` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `url` (`url`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `icons` (`id`, `name`, `url`) VALUES
(1,	'Ясно',	'/files/imgs/clearly.png'),
(2,	'Туман',	'/files/imgs/fog.png'),
(3,	'Дождь с грозой',	'/files/imgs/rain_thunder.png'),
(4,	'Дождь со снегом',	'/files/imgs/rain_snow.png'),
(5,	'Метель, поземок',	'/files/imgs/snowstorm.png'),
(6,	'Гололед',	'/files/imgs/black_ice.png'),
(7,	'Переменная облачность',	'/files/imgs/cloudly.png'),
(8,	'Дождь',	'/files/imgs/rain.png'),
(9,	'Град',	'/files/imgs/hail.png'),
(10,	'Снег',	'/files/imgs/snow.png'),
(11,	'Гололедица',	'/files/imgs/ice_slick.png');

DROP TABLE IF EXISTS `pfatp`;
CREATE TABLE `pfatp` (
  `date` date NOT NULL,
  `desc` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


DROP TABLE IF EXISTS `pollution`;
CREATE TABLE `pollution` (
  `date` date NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


DROP TABLE IF EXISTS `radiation`;
CREATE TABLE `radiation` (
  `date` date NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


DROP TABLE IF EXISTS `sinop_comments`;
CREATE TABLE `sinop_comments` (
  `date` date NOT NULL,
  `comment` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


DROP TABLE IF EXISTS `warnings`;
CREATE TABLE `warnings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) COLLATE utf8_bin NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `aside_name` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


DROP TABLE IF EXISTS `weather_current`;
CREATE TABLE `weather_current` (
  `date` date NOT NULL,
  `icon` int(11) NOT NULL,
  `temperature` varchar(30) COLLATE utf8_bin NOT NULL,
  `wind_speed` char(30) COLLATE utf8_bin NOT NULL,
  `humidity` int(11) NOT NULL,
  `pressure` int(11) NOT NULL,
  PRIMARY KEY (`date`),
  KEY `icon` (`icon`),
  CONSTRAINT `weather_current_ibfk_1` FOREIGN KEY (`icon`) REFERENCES `icons` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


DROP TABLE IF EXISTS `weather_forecast_table`;
CREATE TABLE `weather_forecast_table` (
  `date` date NOT NULL,
  `day_part` int(11) NOT NULL DEFAULT '0',
  `icon` int(11) NOT NULL,
  `wind_direction` int(11) NOT NULL,
  `wind_speed` varchar(50) COLLATE utf8_bin NOT NULL,
  `temperature` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`date`,`day_part`),
  KEY `day_part` (`day_part`),
  KEY `icon` (`icon`),
  KEY `wind_direction` (`wind_direction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


DROP TABLE IF EXISTS `weather_forecast_text`;
CREATE TABLE `weather_forecast_text` (
  `date` date NOT NULL,
  `desc_city` text COLLATE utf8_bin NOT NULL,
  `desc_region` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


DROP TABLE IF EXISTS `wind_directions`;
CREATE TABLE `wind_directions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `direction` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `direction` (`direction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `wind_directions` (`id`, `direction`) VALUES
(3,	'Восток'),
(7,	'Запад'),
(1,	'Север'),
(2,	'Северо-Восток'),
(8,	'Северо-Запад'),
(5,	'Юг'),
(4,	'Юго-Восток'),
(6,	'Юго-Запад');

-- 2023-10-31 10:21:18
