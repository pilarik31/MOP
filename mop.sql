-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `cars`;
CREATE TABLE `cars` (
  `id_car` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf16_czech_ci NOT NULL,
  `SPZ` varchar(255) COLLATE utf16_czech_ci NOT NULL,
  `total_km` varchar(255) COLLATE utf16_czech_ci NOT NULL,
  PRIMARY KEY (`id_car`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_czech_ci;

INSERT INTO `cars` (`id_car`, `type`, `SPZ`, `total_km`) VALUES
(1,	'Mercedes',	'4E76392',	''),
(2,	'Škoda',	'7PA3627',	''),
(3,	'Wolksvagen',	'8HG3674',	''),
(4,	'Ford',	'8ZH3102',	''),
(5,	'FIat',	'7DF3201',	''),
(6,	'Mazda',	'5AP8521',	''),
(7,	'Hammer',	'4IU9625',	''),
(8,	'Peugot',	'7DF6321',	''),
(9,	'Audi',	'7PO2501',	''),
(10,	'Opel',	'7IU1029',	''),
(11,	'Fiat A',	'7PL6325',	'');

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `cars_rides`;
CREATE TABLE `cars_rides` (
  `id_car` int(11) NOT NULL,
  `id_ride` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

INSERT INTO `cars_rides` (`id_car`, `id_ride`) VALUES
(3,	21),
(1,	22),
(1,	23),
(2,	24),
(1,	42);

DROP TABLE IF EXISTS `rides`;
CREATE TABLE `rides` (
  `id_ride` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_car` int(11) NOT NULL,
  `time_left` datetime NOT NULL,
  `time_arrived` datetime NOT NULL,
  `place_left` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `place_arrived` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `km_before` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `km_after` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_czech_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_czech_ci DEFAULT NULL,
  PRIMARY KEY (`id_ride`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

INSERT INTO `rides` (`id_ride`, `id_user`, `id_car`, `time_left`, `time_arrived`, `place_left`, `place_arrived`, `km_before`, `km_after`, `note`, `state`) VALUES
(21,	1,	1,	'2220-05-14 09:09:00',	'2008-03-06 06:06:00',	'Kolín',	'Praha',	'255',	'300',	'',	''),
(22,	2,	2,	'5200-02-05 09:09:00',	'2000-07-07 08:08:00',	'Kolín',	'Praha',	'88',	'100',	'-',	''),
(23,	1,	1,	'5555-05-05 05:05:00',	'6666-06-06 06:06:00',	'yvddsvsdv',	'BEDSDV',	'2+92',	'129',	'829912',	''),
(24,	1,	1,	'5555-05-05 05:05:00',	'5555-05-05 05:05:00',	'26612+',	'16515',	'12',	'50',	'dascsa',	''),
(25,	1,	1,	'1970-01-01 00:00:00',	'1970-01-01 00:00:00',	'',	'',	'',	'',	'',	'2'),
(26,	3,	1,	'7777-07-07 07:07:00',	'8888-08-08 08:08:00',	'iodsvnbu',	'biubiu',	'99',	'100',	'',	''),
(27,	1,	1,	'8888-08-08 08:08:00',	'6666-06-06 06:06:00',	'bzu',	'bibzu',	'50',	'60',	'ppa',	''),
(28,	1,	1,	'2020-01-11 05:05:00',	'2020-01-09 05:05:00',	'praha',	'praha',	'5200',	'5300',	'',	''),
(29,	1,	1,	'1970-01-01 00:00:00',	'1970-01-01 00:00:00',	'',	'',	'',	'',	'',	''),
(30,	1,	1,	'1970-01-01 00:00:00',	'1970-01-01 00:00:00',	'',	'',	'',	'',	'',	''),
(31,	4,	4,	'2020-01-10 05:05:00',	'2020-01-04 05:05:00',	'bhukghi',	'uigb',	'55',	'100',	'',	''),
(32,	4,	4,	'2020-01-10 05:05:00',	'2020-01-04 05:05:00',	'bhukghi',	'uigb',	'55',	'100',	'',	''),
(33,	4,	4,	'2020-01-10 05:05:00',	'2020-01-04 05:05:00',	'bhukghi',	'uigb',	'55',	'100',	'',	''),
(34,	4,	4,	'2020-01-10 05:05:00',	'2020-01-04 05:05:00',	'bhukghi',	'uigb',	'55',	'100',	'',	''),
(35,	4,	4,	'2020-01-10 05:05:00',	'2020-01-04 05:05:00',	'bhukghi',	'uigb',	'55',	'100',	'',	''),
(36,	1,	1,	'1970-01-01 00:00:00',	'1970-01-01 00:00:00',	'',	'',	'',	'',	'',	''),
(37,	1,	1,	'1970-01-01 00:00:00',	'1970-01-01 00:00:00',	'',	'',	'',	'',	'',	''),
(38,	1,	1,	'1970-01-01 00:00:00',	'1970-01-01 00:00:00',	'',	'',	'',	'',	'',	''),
(39,	1,	1,	'1111-05-06 12:22:00',	'1111-11-11 11:11:00',	'asdknaks',	'dansdasjn',	'5454',	'1533',	'asd',	'asdas'),
(40,	1,	1,	'1111-05-06 12:22:00',	'1111-11-11 11:11:00',	'asdknaks',	'dansdasjn',	'5454',	'1533',	'asd',	'asdas'),
(41,	1,	1,	'1111-05-06 12:22:00',	'1111-11-11 11:11:00',	'asdknaks',	'dansdasjn',	'5454',	'1533',	'asd',	'asdas'),
(42,	1,	3,	'1970-01-01 00:00:00',	'1970-01-01 00:00:00',	'',	'',	'',	'',	'',	''),
(43,	1,	1,	'1970-01-01 00:00:00',	'1970-01-01 00:00:00',	'',	'',	'',	'',	'',	'');

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id_role` int(11) NOT NULL,
  `role_name` varchar(255) COLLATE utf8_czech_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `roles` (`id_role`, `role_name`) VALUES
(1,	'admin'),
(2,	'manager'),
(3,	'dispatcher'),
(4,	'rider');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_role` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `users` (`id_user`, `id_role`, `firstname`, `surname`, `email`, `password`) VALUES
(1,	1,	'admin',	'admin',	'admin@admin.cz',	'27b7dcbb589b0d8786fa8e32a7b872b1'),
(2,	2,	'manager',	'manager',	'manager@manager.cz',	'a672570142bb2152a2f9df1a4bfa9e21'),
(3,	3,	'dispacher',	'dispatcher ',	'dispatcher@dispatcher.cz',	'ffd4f9647e2d081e00225257af7de3c5'),
(4,	4,	'nejlepší',	'driver',	'driver@driver.cz',	'710816ee04f370ecdf02860c897a5e3a'),
(12,	4,	'Jan ',	'Novák',	'novak@novak.cz',	'883077e7020133ffe2c78e3ac22fd1da'),
(13,	2,	'Martin',	'Kokeš',	'info@martinkokes.cz',	'b30faad1a869bd1eac4b7100a4c387d0'),
(19,	1,	'',	'',	'',	'cb3f456a08a215ff50fa6d3132092478'),
(18,	1,	'',	'',	'',	'cb3f456a08a215ff50fa6d3132092478'),
(17,	1,	'',	'',	'',	'cb3f456a08a215ff50fa6d3132092478'),
(20,	1,	'',	'',	'',	'cb3f456a08a215ff50fa6d3132092478');

DROP TABLE IF EXISTS `users_cars`;
CREATE TABLE `users_cars` (
  `id_user` int(11) NOT NULL,
  `id_car` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `users_cars` (`id_user`, `id_car`) VALUES
(4,	2),
(2,	3),
(4,	1);

DROP TABLE IF EXISTS `users_rides`;
CREATE TABLE `users_rides` (
  `id_ride` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

INSERT INTO `users_rides` (`id_ride`, `id_user`) VALUES
(1,	4),
(2,	4),
(21,	4),
(11,	4),
(22,	4),
(13,	4),
(23,	4);

-- 2020-03-21 12:00:36
