-- Adminer 4.7.8 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(255) NOT NULL,
  `adminpassword` varchar(255) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`adminid`, `adminname`, `adminpassword`) VALUES
(1,	'Admin',	'Kinoprojekt');

DROP TABLE IF EXISTS `cinemaroomone`;
CREATE TABLE `cinemaroomone` (
  `cinemaroomoneid` int(11) NOT NULL,
  `movieid` int(11) NOT NULL,
  `usersid` int(11) NOT NULL,
  `seatid` int(11) NOT NULL,
  PRIMARY KEY (`cinemaroomoneid`),
  KEY `fk_cinemaroomone_movie_idx` (`movieid`),
  KEY `fk_cinemaroomone_users_idx` (`usersid`),
  KEY `fk_cinemaroomone_seat_idx` (`seatid`),
  CONSTRAINT `fk_cinemaroomone_movie` FOREIGN KEY (`movieid`) REFERENCES `movie` (`movieid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cinemaroomone_seat1` FOREIGN KEY (`seatid`) REFERENCES `seat` (`seatid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cinemaroomone_users1` FOREIGN KEY (`usersid`) REFERENCES `users` (`usersid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `cinemaroomthree`;
CREATE TABLE `cinemaroomthree` (
  `cinemaroomthreeid` int(11) NOT NULL,
  `movieid` int(11) NOT NULL,
  `usersid` int(11) NOT NULL,
  `seatid` int(11) NOT NULL,
  PRIMARY KEY (`cinemaroomthreeid`),
  KEY `fk_cinemaroomthree_movie1_idx` (`movieid`),
  KEY `fk_cinemaroomone_users_idx` (`usersid`),
  KEY `fk_cinemaroomone_seat_idx` (`seatid`),
  CONSTRAINT `fk_cinemaroomthree_movie1` FOREIGN KEY (`movieid`) REFERENCES `movie` (`movieid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cinemaroomthree_seat1` FOREIGN KEY (`seatid`) REFERENCES `seat` (`seatid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cinemaroomthree_users1` FOREIGN KEY (`usersid`) REFERENCES `users` (`usersid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `cinemaroomtwo`;
CREATE TABLE `cinemaroomtwo` (
  `cinemaroomtwoid` int(11) NOT NULL,
  `movieid` int(11) NOT NULL,
  `usersid` int(11) NOT NULL,
  `seatid` int(11) NOT NULL,
  PRIMARY KEY (`cinemaroomtwoid`),
  KEY `fk_cinemaroomtwo_movie_idx` (`movieid`),
  KEY `fk_cinemaroomtwo_users_idx` (`usersid`),
  KEY `fk_cinemaroomone_seat_idx` (`seatid`),
  CONSTRAINT `fk_cinemaroomtwo_movie` FOREIGN KEY (`movieid`) REFERENCES `movie` (`movieid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cinemaroomtwo_seat1` FOREIGN KEY (`seatid`) REFERENCES `seat` (`seatid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cinemaroomtwo_users1` FOREIGN KEY (`usersid`) REFERENCES `users` (`usersid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `movie`;
CREATE TABLE `movie` (
  `movieid` int(11) NOT NULL,
  `moviename` varchar(255) DEFAULT NULL,
  `duration` int(11) NOT NULL,
  PRIMARY KEY (`movieid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `seat`;
CREATE TABLE `seat` (
  `seatid` int(11) NOT NULL,
  `seatplace` int(11) DEFAULT NULL,
  PRIMARY KEY (`seatid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `seat` (`seatid`, `seatplace`) VALUES
(1,	1),
(2,	2),
(3,	3),
(4,	4),
(5,	5),
(6,	6),
(7,	7),
(8,	8),
(9,	9),
(10,	10),
(11,	11),
(12,	12),
(13,	13),
(14,	14),
(15,	15),
(16,	16),
(17,	17),
(18,	18),
(19,	19),
(20,	20),
(21,	21),
(22,	22),
(23,	23),
(24,	24),
(25,	25),
(26,	26),
(27,	27),
(28,	28),
(29,	29),
(30,	30),
(31,	31),
(32,	32),
(33,	33),
(34,	34),
(35,	35),
(36,	36),
(37,	37),
(38,	38),
(39,	39),
(40,	40),
(41,	41),
(42,	42),
(43,	43),
(44,	44),
(45,	45),
(46,	46),
(47,	47),
(48,	48),
(49,	49),
(50,	50),
(51,	51),
(52,	52),
(53,	53),
(54,	54),
(55,	55),
(56,	56),
(57,	57),
(58,	58),
(59,	59),
(60,	60),
(61,	61),
(62,	62),
(63,	63),
(64,	64),
(65,	65),
(66,	66),
(67,	67),
(68,	68),
(69,	69),
(70,	70),
(71,	71),
(72,	72),
(73,	73),
(74,	74),
(75,	75),
(76,	76),
(77,	77),
(78,	78),
(79,	79),
(80,	80),
(81,	81),
(82,	82),
(83,	83),
(84,	84),
(85,	85),
(86,	86),
(87,	87),
(88,	88),
(89,	89),
(90,	90),
(91,	91),
(92,	92),
(93,	93),
(94,	94),
(95,	95),
(96,	96),
(97,	97),
(98,	98),
(99,	99),
(100,	100);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `usersid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`usersid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2021-02-10 13:43:16
