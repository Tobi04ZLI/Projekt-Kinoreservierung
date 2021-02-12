-- Adminer 4.7.8 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';



CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(255) NOT NULL,
  `adminpassword` varchar(255) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`adminid`, `adminname`, `adminpassword`) VALUES
(1,	'Admin',	'Kinoprojekt');


CREATE TABLE `movie` (
  `movieid` int(11) NOT NULL AUTO_INCREMENT,
  `moviename` varchar(255) DEFAULT NULL,
  `duration` int(11) NOT NULL,
  PRIMARY KEY (`movieid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `movie` (`movieid`, `moviename`, `duration`) VALUES
(1,	'Battleship',	131),
(2,	'Ironman',	126),
(3,	'Bad Boys',	118),
(4,	'The Old Guard',	125);


CREATE TABLE `seat` (
  `seatid` int(11) NOT NULL,
  `seatplace` int(11) NOT NULL,
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


CREATE TABLE `users` (
  `usersid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`usersid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`usersid`, `username`, `email`) VALUES
(1,	'Mauschu',	'maurin@schucan.ch'),
(2,	'tobiasbertschi',	'tobias@bertschi.com'),
(3,	'Yvesuber',	'yves@uber.ch'),
(4,	'Alexsmolders',	'Alexsmolders@gmail.com');

CREATE TABLE `cinemaroomone` (
  `cinemaroomoneid` int(11) NOT NULL AUTO_INCREMENT,
  `movieid` int(11) NOT NULL,
  `usersid` int(11) DEFAULT NULL,
  `seatid` int(11) NOT NULL,
  `blocked` int(11) NOT NULL,
  PRIMARY KEY (`cinemaroomoneid`),
  KEY `fk_cinemaroomone_movie_idx` (`movieid`),
  KEY `fk_cinemaroomone_users_idx` (`usersid`),
  KEY `fk_cinemaroomone_seat_idx` (`seatid`),
  CONSTRAINT `fk_cinemaroomone_movie` FOREIGN KEY (`movieid`) REFERENCES `movie` (`movieid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cinemaroomone_seat` FOREIGN KEY (`seatid`) REFERENCES `seat` (`seatid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cinemaroomone_users` FOREIGN KEY (`usersid`) REFERENCES `users` (`usersid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `cinemaroomone` (`cinemaroomoneid`, `movieid`, `usersid`, `seatid`, `blocked`) VALUES
(1,	1,	1,	1,	1),
(2,	1,	2,	2,	1),
(3,	1,	3,	3,	1),
(4,	1,	NULL,	4,	0),
(5,	1,	4,	5,	1),
(6,	1,	NULL,	6,	0),
(7,	1,	NULL,	7,	0),
(8,	1,	NULL,	8,	0),
(9,	1,	NULL,	9,	0),
(10,	1,	NULL,	10,	0),
(11,	1,	NULL,	11,	0),
(12,	1,	NULL,	12,	0),
(13,	1,	NULL,	13,	0),
(14,	1,	NULL,	14,	0),
(15,	1,	NULL,	15,	0),
(16,	1,	NULL,	16,	0),
(17,	1,	NULL,	17,	0),
(18,	1,	NULL,	18,	0),
(19,	1,	NULL,	19,	0),
(20,	1,	NULL,	20,	0),
(21,	1,	NULL,	21,	0),
(22,	1,	NULL,	22,	0),
(23,	1,	NULL,	23,	0),
(24,	1,	NULL,	24,	0),
(25,	1,	NULL,	25,	0),
(26,	1,	NULL,	26,	0),
(27,	1,	NULL,	27,	0),
(28,	1,	NULL,	28,	0),
(29,	1,	NULL,	29,	0),
(30,	1,	NULL,	30,	0),
(31,	1,	NULL,	31,	0),
(32,	1,	NULL,	32,	0),
(33,	1,	NULL,	33,	0),
(34,	1,	NULL,	34,	0),
(35,	1,	NULL,	35,	0),
(36,	1,	NULL,	36,	0),
(37,	1,	NULL,	37,	0),
(38,	1,	NULL,	38,	0),
(39,	1,	NULL,	39,	0),
(40,	1,	NULL,	40,	0),
(41,	1,	NULL,	41,	0),
(42,	1,	NULL,	42,	0),
(43,	1,	NULL,	43,	0),
(44,	1,	NULL,	44,	0),
(45,	1,	NULL,	45,	0),
(46,	1,	NULL,	46,	0),
(47,	1,	NULL,	47,	0),
(48,	1,	NULL,	48,	0),
(49,	1,	NULL,	49,	0),
(50,	1,	NULL,	50,	0),
(51,	1,	NULL,	51,	0),
(52,	1,	NULL,	52,	0),
(53,	1,	NULL,	53,	0),
(54,	1,	NULL,	54,	0),
(55,	1,	NULL,	55,	0),
(56,	1,	NULL,	56,	0),
(57,	1,	NULL,	57,	0),
(58,	1,	NULL,	58,	0),
(59,	1,	NULL,	59,	0),
(60,	1,	NULL,	60,	0),
(61,	1,	NULL,	61,	0),
(62,	1,	NULL,	62,	0),
(63,	1,	NULL,	63,	0),
(64,	1,	NULL,	64,	0),
(65,	1,	NULL,	65,	0),
(66,	1,	NULL,	66,	0),
(67,	1,	NULL,	67,	0),
(68,	1,	NULL,	68,	0),
(69,	1,	NULL,	69,	0),
(70,	1,	NULL,	70,	0),
(71,	1,	NULL,	71,	0),
(72,	1,	NULL,	72,	0),
(73,	1,	NULL,	73,	0),
(74,	1,	NULL,	74,	0),
(75,	1,	NULL,	75,	0),
(76,	1,	NULL,	76,	0),
(77,	1,	NULL,	77,	0),
(78,	1,	NULL,	78,	0),
(79,	1,	NULL,	79,	0),
(80,	1,	NULL,	80,	0),
(81,	1,	NULL,	81,	0),
(82,	1,	NULL,	82,	0),
(83,	1,	NULL,	83,	0),
(84,	1,	NULL,	84,	0),
(85,	1,	NULL,	85,	0),
(86,	1,	NULL,	86,	0),
(87,	1,	NULL,	87,	0),
(88,	1,	NULL,	88,	0),
(89,	1,	NULL,	89,	0),
(90,	1,	NULL,	90,	0),
(91,	1,	NULL,	91,	0),
(92,	1,	NULL,	92,	0),
(93,	1,	NULL,	93,	0),
(94,	1,	NULL,	94,	0),
(95,	1,	NULL,	95,	0),
(96,	1,	NULL,	96,	0),
(97,	1,	NULL,	97,	0),
(98,	1,	NULL,	98,	0),
(99,	1,	NULL,	99,	0),
(100,	1,	NULL,	100,	0);


CREATE TABLE `cinemaroomthree` (
  `cinemaroomthreeid` int(11) NOT NULL AUTO_INCREMENT,
  `movieid` int(11) NOT NULL,
  `usersid` int(11) DEFAULT NULL,
  `seatid` int(11) NOT NULL,
  `blocked` int(11) NOT NULL,
  PRIMARY KEY (`cinemaroomthreeid`),
  KEY `fk_cinemaroomthree_movie1_idx` (`movieid`),
  KEY `fk_cinemaroomone_users_idx` (`usersid`),
  KEY `fk_cinemaroomone_seat_idx` (`seatid`),
  CONSTRAINT `fk_cinemaroomthree_movie1` FOREIGN KEY (`movieid`) REFERENCES `movie` (`movieid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cinemaroomthree_seat` FOREIGN KEY (`seatid`) REFERENCES `seat` (`seatid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cinemaroomthree_users` FOREIGN KEY (`usersid`) REFERENCES `users` (`usersid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `cinemaroomthree` (`cinemaroomthreeid`, `movieid`, `usersid`, `seatid`, `blocked`) VALUES
(1,	3,	NULL,	1,	0),
(2,	3,	NULL,	2,	0),
(3,	3,	NULL,	3,	0),
(4,	3,	NULL,	4,	0),
(5,	3,	NULL,	5,	0),
(6,	3,	NULL,	6,	0),
(7,	3,	NULL,	7,	0),
(8,	3,	NULL,	8,	0),
(9,	3,	NULL,	9,	0),
(10,	3,	NULL,	10,	0),
(11,	3,	NULL,	11,	0),
(12,	3,	NULL,	12,	0),
(13,	3,	NULL,	13,	0),
(14,	3,	NULL,	14,	0),
(15,	3,	NULL,	15,	0),
(16,	3,	NULL,	16,	0),
(17,	3,	NULL,	17,	0),
(18,	3,	NULL,	18,	0),
(19,	3,	NULL,	19,	0),
(20,	3,	NULL,	20,	0),
(21,	3,	NULL,	21,	0),
(22,	3,	NULL,	22,	0),
(23,	3,	NULL,	23,	0),
(24,	3,	NULL,	24,	0),
(25,	3,	NULL,	25,	0),
(26,	3,	NULL,	26,	0),
(27,	3,	NULL,	27,	0),
(28,	3,	NULL,	28,	0),
(29,	3,	NULL,	29,	0),
(30,	3,	NULL,	30,	0),
(31,	3,	NULL,	31,	0),
(32,	3,	NULL,	32,	0),
(33,	3,	NULL,	33,	0),
(34,	3,	NULL,	34,	0),
(35,	3,	NULL,	35,	0),
(36,	3,	NULL,	36,	0),
(37,	3,	NULL,	37,	0),
(38,	3,	NULL,	38,	0),
(39,	3,	NULL,	39,	0),
(40,	3,	NULL,	40,	0),
(41,	3,	NULL,	41,	0),
(42,	3,	NULL,	42,	0),
(43,	3,	NULL,	43,	0),
(44,	3,	NULL,	44,	0),
(45,	3,	NULL,	45,	0),
(46,	3,	NULL,	46,	0),
(47,	3,	NULL,	47,	0),
(48,	3,	NULL,	48,	0),
(49,	3,	NULL,	49,	0),
(50,	3,	NULL,	50,	0),
(51,	3,	NULL,	51,	0),
(52,	3,	NULL,	52,	0),
(53,	3,	NULL,	53,	0),
(54,	3,	NULL,	54,	0),
(55,	3,	NULL,	55,	0),
(56,	3,	NULL,	56,	0),
(57,	3,	NULL,	57,	0),
(58,	3,	NULL,	58,	0),
(59,	3,	NULL,	59,	0),
(60,	3,	NULL,	60,	0),
(61,	3,	NULL,	61,	0),
(62,	3,	NULL,	62,	0),
(63,	3,	NULL,	63,	0),
(64,	3,	NULL,	64,	0),
(65,	3,	NULL,	65,	0),
(66,	3,	NULL,	66,	0),
(67,	3,	NULL,	67,	0),
(68,	3,	NULL,	68,	0),
(69,	3,	NULL,	69,	0),
(70,	3,	NULL,	70,	0),
(71,	3,	NULL,	71,	0),
(72,	3,	NULL,	72,	0),
(73,	3,	NULL,	73,	0),
(74,	3,	NULL,	74,	0),
(75,	3,	NULL,	75,	0),
(76,	3,	NULL,	76,	0),
(77,	3,	NULL,	77,	0),
(78,	3,	NULL,	78,	0),
(79,	3,	NULL,	79,	0),
(80,	3,	NULL,	80,	0),
(81,	3,	NULL,	81,	0),
(82,	3,	NULL,	82,	0),
(83,	3,	NULL,	83,	0),
(84,	3,	NULL,	84,	0),
(85,	3,	NULL,	85,	0),
(86,	3,	NULL,	86,	0),
(87,	3,	NULL,	87,	0),
(88,	3,	NULL,	88,	0),
(89,	3,	NULL,	89,	0),
(90,	3,	NULL,	90,	0),
(91,	3,	NULL,	91,	0),
(92,	3,	NULL,	92,	0),
(93,	3,	NULL,	93,	0),
(94,	3,	NULL,	94,	0),
(95,	3,	NULL,	95,	0),
(96,	3,	NULL,	96,	0),
(97,	3,	NULL,	97,	0),
(98,	3,	NULL,	98,	0),
(99,	3,	NULL,	99,	0),
(100,	3,	NULL,	100,	0);


CREATE TABLE `cinemaroomtwo` (
  `cinemaroomtwoid` int(11) NOT NULL AUTO_INCREMENT,
  `movieid` int(11) NOT NULL,
  `usersid` int(11) DEFAULT NULL,
  `seatid` int(11) NOT NULL,
  `blocked` int(11) NOT NULL,
  PRIMARY KEY (`cinemaroomtwoid`),
  KEY `fk_cinemaroomtwo_movie_idx` (`movieid`),
  KEY `fk_cinemaroomtwo_users_idx` (`usersid`),
  KEY `fk_cinemaroomone_seat_idx` (`seatid`),
  CONSTRAINT `fk_cinemaroomtwo_movie` FOREIGN KEY (`movieid`) REFERENCES `movie` (`movieid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cinemaroomtwo_seat` FOREIGN KEY (`seatid`) REFERENCES `seat` (`seatid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cinemaroomtwo_users` FOREIGN KEY (`usersid`) REFERENCES `users` (`usersid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `cinemaroomtwo` (`cinemaroomtwoid`, `movieid`, `usersid`, `seatid`, `blocked`) VALUES
(1,	2,	NULL,	1,	0),
(2,	2,	NULL,	2,	0),
(3,	2,	NULL,	3,	0),
(4,	2,	NULL,	4,	0),
(5,	2,	NULL,	5,	0),
(6,	2,	NULL,	6,	0),
(7,	2,	NULL,	7,	0),
(8,	2,	NULL,	8,	0),
(9,	2,	NULL,	9,	0),
(10,	2,	NULL,	10,	0),
(11,	2,	NULL,	11,	0),
(12,	2,	NULL,	12,	0),
(13,	2,	NULL,	13,	0),
(14,	2,	NULL,	14,	0),
(15,	2,	NULL,	15,	0),
(16,	2,	NULL,	16,	0),
(17,	2,	NULL,	17,	0),
(18,	2,	NULL,	18,	0),
(19,	2,	NULL,	19,	0),
(20,	2,	NULL,	20,	0),
(21,	2,	NULL,	21,	0),
(22,	2,	NULL,	22,	0),
(23,	2,	NULL,	23,	0),
(24,	2,	NULL,	24,	0),
(25,	2,	NULL,	25,	0),
(26,	2,	NULL,	26,	0),
(27,	2,	NULL,	27,	0),
(28,	2,	NULL,	28,	0),
(29,	2,	NULL,	29,	0),
(30,	2,	NULL,	30,	0),
(31,	2,	NULL,	31,	0),
(32,	2,	NULL,	32,	0),
(33,	2,	NULL,	33,	0),
(34,	2,	NULL,	34,	0),
(35,	2,	NULL,	35,	0),
(36,	2,	NULL,	36,	0),
(37,	2,	NULL,	37,	0),
(38,	2,	NULL,	38,	0),
(39,	2,	NULL,	39,	0),
(40,	2,	NULL,	40,	0),
(41,	2,	NULL,	41,	0),
(42,	2,	NULL,	42,	0),
(43,	2,	NULL,	43,	0),
(44,	2,	NULL,	44,	0),
(45,	2,	NULL,	45,	0),
(46,	2,	NULL,	46,	0),
(47,	2,	NULL,	47,	0),
(48,	2,	NULL,	48,	0),
(49,	2,	NULL,	49,	0),
(50,	2,	NULL,	50,	0),
(51,	2,	NULL,	51,	0),
(52,	2,	NULL,	52,	0),
(53,	2,	NULL,	53,	0),
(54,	2,	NULL,	54,	0),
(55,	2,	NULL,	55,	0),
(56,	2,	NULL,	56,	0),
(57,	2,	NULL,	57,	0),
(58,	2,	NULL,	58,	0),
(59,	2,	NULL,	59,	0),
(60,	2,	NULL,	60,	0),
(61,	2,	NULL,	61,	0),
(62,	2,	NULL,	62,	0),
(63,	2,	NULL,	63,	0),
(64,	2,	NULL,	64,	0),
(65,	2,	NULL,	65,	0),
(66,	2,	NULL,	66,	0),
(67,	2,	NULL,	67,	0),
(68,	2,	NULL,	68,	0),
(69,	2,	NULL,	69,	0),
(70,	2,	NULL,	70,	0),
(71,	2,	NULL,	71,	0),
(72,	2,	NULL,	72,	0),
(73,	2,	NULL,	73,	0),
(74,	2,	NULL,	74,	0),
(75,	2,	NULL,	75,	0),
(76,	2,	NULL,	76,	0),
(77,	2,	NULL,	77,	0),
(78,	2,	NULL,	78,	0),
(79,	2,	NULL,	79,	0),
(80,	2,	NULL,	80,	0),
(81,	2,	NULL,	81,	0),
(82,	2,	NULL,	82,	0),
(83,	2,	NULL,	83,	0),
(84,	2,	NULL,	84,	0),
(85,	2,	NULL,	85,	0),
(86,	2,	NULL,	86,	0),
(87,	2,	NULL,	87,	0),
(88,	2,	NULL,	88,	0),
(89,	2,	NULL,	89,	0),
(90,	2,	NULL,	90,	0),
(91,	2,	NULL,	91,	0),
(92,	2,	NULL,	92,	0),
(93,	2,	NULL,	93,	0),
(94,	2,	NULL,	94,	0),
(95,	2,	NULL,	95,	0),
(96,	2,	NULL,	96,	0),
(97,	2,	NULL,	97,	0),
(98,	2,	NULL,	98,	0),
(99,	2,	NULL,	99,	0),
(100,	2,	NULL,	100,	0);

-- 2021-02-12 12:49:41
