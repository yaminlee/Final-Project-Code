-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Aug 02, 2020 at 03:37 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `before`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`country`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country`) VALUES
('Afghanistan'),
('Albania'),
('Algeria'),
('American Samoa'),
('Andorra'),
('Angola'),
('Anguilla'),
('Antarctica'),
('Antigua and Barbuda'),
('Argentina'),
('Armenia'),
('Aruba'),
('Australia'),
('Austria'),
('Azerbaijan'),
('Bahamas'),
('Bahrain'),
('Bangladesh'),
('Barbados'),
('Belarus'),
('Belgium'),
('Belize'),
('Benin'),
('Bermuda'),
('Bhutan'),
('Bolivia'),
('Bosnia and Herzegovina'),
('Botswana'),
('Brazil'),
('British Indian Ocean Territory'),
('Brunei'),
('Bulgaria'),
('Burkina Faso'),
('Burundi'),
('Cambodia'),
('Cameroon'),
('Canada'),
('Cape Verde'),
('Cayman Islands'),
('Central African Republic'),
('Chad'),
('Chile'),
('China'),
('Christmas Island'),
('Cocos Islands'),
('Colombia'),
('Comoros'),
('Congo'),
('Congo, The Democratic Republic of The'),
('Cook Islands'),
('Costa Rica'),
('Cote D\'ivoire'),
('Croatia'),
('Cuba'),
('Cyprus'),
('Czech Republic'),
('Denmark'),
('Djibouti'),
('Dominica'),
('Dominican Republic'),
('Ecuador'),
('Egypt'),
('El Salvador'),
('Equatorial Guinea'),
('Eritrea'),
('Estonia'),
('Ethiopia'),
('Falkland Islands'),
('Faroe Islands'),
('Fiji'),
('Finland'),
('France'),
('French Guiana'),
('French Polynesia'),
('French Southern Territories'),
('Gabon'),
('Gambia'),
('Georgia'),
('Germany'),
('Ghana'),
('Gibraltar'),
('Greece'),
('Greenland'),
('Grenada'),
('Guadeloupe'),
('Guam'),
('Guatemala'),
('Guinea'),
('Guyana'),
('Haiti'),
('Hawaii'),
('Honduras'),
('Hong Kong'),
('Hungary'),
('Iceland'),
('India'),
('Indonesia'),
('Iran'),
('Iraq'),
('Ireland'),
('Isle of Man'),
('Israel'),
('Italy'),
('Jamaica'),
('Japan'),
('Jordan'),
('Kazakhstan'),
('Kenya'),
('Kiribati'),
('Kuwait'),
('Kyrgyzstan'),
('Laos'),
('Latvia'),
('Lebanon'),
('Lesotho'),
('Liberia'),
('Libya'),
('Liechtenstein'),
('Lithuania'),
('Luxembourg'),
('Macau'),
('Macedonia'),
('Madagascar'),
('Malawi'),
('Malaysia'),
('Maldives'),
('Mali'),
('Malta'),
('Marshall Islands'),
('Martinique'),
('Mauritania'),
('Mauritius'),
('Mayotte'),
('Mexico'),
('Micronesia'),
('Moldova'),
('Monaco'),
('Mongolia'),
('Montenegro'),
('Montserrat'),
('Morocco'),
('Mozambique'),
('Myanmar'),
('Namibia'),
('Nauru'),
('Nepal'),
('Netherlands'),
('Netherlands Antilles'),
('New Caledonia'),
('New Zealand'),
('Nicaragua'),
('Niger'),
('Nigeria'),
('Niue'),
('Norfolk Island'),
('North Korea'),
('Norway'),
('Oman'),
('Pakistan'),
('Palau Island'),
('Panama'),
('Papua New Guinea'),
('Paraguay'),
('Peru'),
('Philippines'),
('Pitcairn'),
('Poland'),
('Portugal'),
('Puerto Rico'),
('Qatar'),
('Reunion'),
('Romania'),
('Russia'),
('Rwanda'),
('Saint Helena'),
('Saint Kitts-Nevis'),
('Saint Lucia'),
('Saint Pierre and Miquelon'),
('Saint Vincent and The Grenadines'),
('Samoa'),
('San Marino'),
('Sao Tome and Principe'),
('Saudi Arabia'),
('Senegal'),
('Serbia'),
('Seychelles'),
('Sierra Leone'),
('Singapore'),
('Slovakia'),
('Slovenia'),
('Solomon Islands'),
('Somalia'),
('South Africa'),
('South Georgia and The South Sandwich Islands'),
('South Korea'),
('Spain'),
('Sri Lanka'),
('Sudan'),
('Suriname'),
('Svalbard and Jan Mayen'),
('Swaziland'),
('Sweden'),
('Switzerland'),
('Syrian Arab Republic'),
('Taiwan (ROC)'),
('Tajikistan'),
('Tanzania'),
('Thailand'),
('Timor-leste'),
('Togo'),
('Tokelau'),
('Tonga'),
('Trinidad and Tobago'),
('Tunisia'),
('Turkey'),
('Turkmenistan'),
('Turks and Caicos Islands'),
('Tuvalu'),
('Uganda'),
('Ukraine'),
('United Arab Emirates'),
('United Kingdom'),
('United States'),
('Uruguay'),
('Uzbekistan'),
('Vanuatu'),
('Venezuela'),
('Vietnam'),
('Virgin Islands, British'),
('Virgin Islands, U.S.'),
('Wallis and Futuna'),
('Western Sahara'),
('Yemen'),
('Zambia'),
('Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `dimensions`
--

DROP TABLE IF EXISTS `dimensions`;
CREATE TABLE IF NOT EXISTS `dimensions` (
  `dName` varchar(255) NOT NULL,
  `dOpp` varchar(255) NOT NULL,
  `dNum` int(1) NOT NULL,
  PRIMARY KEY (`dName`,`dOpp`),
  UNIQUE KEY `dName_4` (`dName`),
  UNIQUE KEY `dOpp_4` (`dOpp`),
  KEY `dName` (`dName`),
  KEY `dOpp` (`dOpp`),
  KEY `dName_2` (`dName`),
  KEY `dOpp_2` (`dOpp`),
  KEY `dName_3` (`dName`),
  KEY `dOpp_3` (`dOpp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dimensions`
--

INSERT INTO `dimensions` (`dName`, `dOpp`, `dNum`) VALUES
('Childlike', 'Mature', 1),
('Machine-like', 'Animal-like', 2),
('Masculine', 'Feminine', 3),
('Not at all interactive', 'Extremely interactive', 4),
('Not at all likable', 'Extremely likable', 5),
('Unfriendly', 'Friendly', 6),
('Unintelligent', 'Intelligent', 7),
('Untrustworthy', 'Trustworthy', 8);

-- --------------------------------------------------------

--
-- Table structure for table `drones`
--

DROP TABLE IF EXISTS `drones`;
CREATE TABLE IF NOT EXISTS `drones` (
  `serialNumber` int(11) NOT NULL,
  `imageURL` varchar(255) NOT NULL,
  `eyes` varchar(255) NOT NULL COMMENT 'does the drone have seeming eyes?',
  `mouth` tinyint(1) NOT NULL,
  `guard` tinyint(1) NOT NULL COMMENT 'do the propellers have clear guards?',
  `camera` tinyint(1) NOT NULL,
  `color` tinyint(1) NOT NULL COMMENT 'grayscale=0 other=1',
  `bodyShape` tinyint(1) NOT NULL COMMENT 'straight=0 round=1 (standard will be consider straight)',
  `pet` tinyint(1) DEFAULT NULL COMMENT 'is a drone defined to be a pet',
  `newDrone` tinyint(1) NOT NULL,
  PRIMARY KEY (`serialNumber`),
  KEY `eyes` (`eyes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drones`
--

INSERT INTO `drones` (`serialNumber`, `imageURL`, `eyes`, `mouth`, `guard`, `camera`, `color`, `bodyShape`, `pet`, `newDrone`) VALUES
(64, '../general/images/drones/64.jpg', 'color', 0, 0, 0, 1, 1, 0, 1),
(65, '../general/images/drones/65.jpg', 'dark', 0, 1, 0, 0, 1, 0, 1),
(66, '../general/images/drones/66.jpg', 'none', 0, 1, 0, 1, 0, 0, 1),
(67, '../general/images/drones/67.jpg', 'none', 0, 0, 1, 0, 0, 0, 1),
(68, '../general/images/drones/68.jpg', 'color', 1, 1, 1, 1, 0, 0, 1),
(69, '../general/images/drones/69.jpg', 'none', 0, 1, 1, 0, 1, 0, 1),
(70, '../general/images/drones/70.jpg', 'color', 0, 0, 0, 1, 0, 0, 1),
(71, '../general/images/drones/71.jpg', 'dark', 0, 0, 1, 0, 0, 0, 1),
(72, '../general/images/drones/72.jpg', 'none', 0, 0, 1, 0, 0, 0, 1),
(73, '../general/images/drones/73.jpg', 'none', 0, 0, 1, 0, 0, 0, 1),
(74, '../general/images/drones/74.jpg', 'none', 0, 0, 1, 0, 0, 0, 1),
(75, '../general/images/drones/75.jpg', 'none', 0, 1, 1, 0, 1, 0, 1),
(76, '../general/images/drones/76.jpg', 'none', 0, 0, 1, 0, 0, 0, 1),
(77, '../general/images/drones/77.jpg', 'color', 0, 0, 0, 1, 0, 0, 1),
(78, '../general/images/drones/78.jpg', 'color', 1, 0, 1, 0, 0, 0, 1),
(79, '../general/images/drones/79.jpg', 'color', 1, 0, 1, 1, 0, 0, 1),
(80, '../general/images/drones/80.jpg', 'none', 0, 1, 1, 1, 0, 0, 1),
(81, '../general/images/drones/81.jpg', 'none', 0, 0, 0, 0, 0, 0, 1),
(82, '../general/images/drones/82.jpg', 'none', 0, 0, 1, 0, 0, 0, 1),
(83, '../general/images/drones/83.jpg', 'none', 0, 1, 1, 1, 1, 0, 1),
(84, '../general/images/drones/84.jpg', 'none', 0, 0, 1, 0, 0, 0, 1),
(85, '../general/images/drones/85.jpg', 'none', 0, 1, 0, 0, 1, 0, 1),
(86, '../general/images/drones/86.jpg', 'none', 0, 1, 0, 1, 1, 0, 1),
(87, '../general/images/drones/87.jpg', 'color', 0, 1, 0, 0, 1, 0, 1),
(88, '../general/images/drones/88.jpg', 'none', 0, 1, 0, 1, 1, 0, 1),
(89, '../general/images/drones/89.jpg', 'none', 0, 0, 1, 0, 0, 0, 1),
(90, '../general/images/drones/90.jpg', 'none', 0, 0, 0, 1, 0, 0, 1),
(91, '../general/images/drones/91.jpg', 'none', 0, 0, 1, 0, 0, 0, 1),
(92, '../general/images/drones/92.jpg', 'none', 0, 1, 1, 0, 1, 0, 1),
(93, '../general/images/drones/93.jpg', 'none', 0, 0, 1, 0, 0, 0, 1),
(94, '../general/images/drones/94.jpg', 'none', 0, 1, 1, 1, 1, 0, 1),
(95, '../general/images/drones/95.jpg', 'none', 0, 0, 1, 1, 1, 0, 1),
(96, '../general/images/drones/96.jpg', 'color', 0, 1, 0, 1, 1, 0, 1),
(97, '../general/images/drones/97.jpg', 'none', 0, 0, 1, 0, 0, 0, 1),
(98, '../general/images/drones/98.jpg', 'none', 0, 1, 0, 1, 1, 0, 1),
(99, '../general/images/drones/99.jpg', 'none', 0, 0, 1, 1, 0, 0, 1),
(100, '../general/images/drones/100.jpg', 'none', 0, 1, 1, 1, 1, 0, 1),
(101, '../general/images/drones/101.jpg', 'none', 0, 1, 0, 0, 1, 0, 1),
(102, '../general/images/drones/102.jpg', 'none', 0, 1, 0, 0, 1, 0, 1),
(103, '../general/images/drones/103.jpg', 'none', 0, 0, 1, 0, 0, 0, 1),
(104, '../general/images/drones/104.jpg', 'none', 0, 0, 1, 0, 0, 0, 1),
(105, '../general/images/drones/105.jpg', 'none', 0, 1, 0, 1, 1, 0, 1),
(106, '../general/images/drones/106.jpg', 'none', 0, 1, 0, 1, 0, 0, 1),
(107, '../general/images/drones/107.jpg', 'none', 0, 0, 1, 0, 0, 0, 1),
(108, '../general/images/drones/108.jpg', 'none', 0, 0, 1, 1, 1, 0, 1),
(109, '../general/images/drones/109.jpg', 'none', 0, 0, 0, 0, 0, 0, 1),
(110, '../general/images/drones/110.jpg', 'dark', 1, 0, 1, 1, 0, 0, 1),
(111, '../general/images/drones/111.jpg', 'none', 0, 1, 1, 1, 1, 0, 1),
(112, '../general/images/drones/112.jpg', 'none', 0, 0, 1, 1, 0, 0, 1),
(113, '../general/images/drones/113.jpg', 'none', 0, 0, 1, 0, 0, 0, 1),
(114, '../general/images/drones/114.jpg', 'none', 0, 0, 1, 1, 0, 0, 1),
(115, '../general/images/drones/115.jpg', 'none', 0, 0, 1, 0, 0, 0, 1),
(116, '../general/images/drones/116.jpg', 'none', 0, 0, 1, 0, 0, 0, 1),
(117, '../general/images/drones/117.jpg', 'none', 0, 1, 1, 1, 1, 0, 1),
(118, '../general/images/drones/118.jpg', 'none', 0, 1, 0, 0, 0, 0, 1),
(119, '../general/images/drones/119.jpg', 'none', 0, 1, 1, 0, 1, 0, 1),
(120, '../general/images/drones/120.jpg', 'none', 0, 1, 0, 1, 1, 0, 1),
(121, '../general/images/drones/121.jpg', 'color', 0, 0, 1, 0, 0, 0, 1),
(122, '../general/images/drones/122.jpg', 'none', 0, 1, 1, 0, 0, 0, 1),
(123, '../general/images/drones/123.jpg', 'color', 0, 0, 0, 0, 0, 0, 1),
(124, '../general/images/drones/124.jpg', 'none', 0, 1, 0, 1, 1, 0, 1),
(125, '../general/images/drones/125.jpg', 'none', 0, 0, 1, 0, 0, 0, 1),
(126, '../general/images/drones/126.jpg', 'none', 0, 0, 0, 0, 0, 0, 1),
(127, '../general/images/drones/127.jpg', 'none', 0, 1, 0, 1, 1, 0, 1),
(128, '../general/images/drones/128.jpg', 'none', 0, 1, 1, 0, 0, 0, 1),
(129, '../general/images/drones/129.jpg', 'dark', 1, 0, 1, 1, 0, 0, 1),
(130, '../general/images/drones/130.jpg', 'none', 0, 0, 1, 0, 1, 0, 1),
(131, '../general/images/drones/131.jpg', 'dark', 1, 0, 1, 1, 0, 0, 1),
(132, '../general/images/drones/132.jpg', 'none', 0, 0, 1, 0, 0, 0, 1),
(133, '../general/images/drones/133.jpg', 'none', 0, 0, 1, 0, 0, 0, 1),
(134, '../general/images/drones/134.jpg', 'none', 0, 1, 0, 0, 1, 0, 1),
(135, '../general/images/drones/135.jpg', 'none', 0, 0, 1, 0, 0, 0, 1),
(136, '../general/images/drones/136.jpg', 'none', 0, 1, 0, 0, 1, 0, 1),
(137, '../general/images/drones/137.jpg', 'none', 0, 1, 1, 1, 0, 0, 1),
(138, '../general/images/drones/138.jpg', 'none', 0, 1, 1, 0, 1, 0, 1),
(139, '../general/images/drones/139.jpg', 'none', 0, 1, 0, 0, 0, 0, 1),
(140, '../general/images/drones/140.jpg', 'none', 0, 0, 1, 0, 0, 0, 1),
(141, '../general/images/drones/141.jpg', 'dark', 0, 0, 0, 0, 0, 0, 1),
(142, '../general/images/drones/142.jpg', 'none', 0, 0, 0, 0, 0, 0, 1),
(143, '../general/images/drones/143.jpg', 'none', 0, 0, 1, 0, 0, 0, 1),
(144, '../general/images/drones/144.jpg', 'none', 0, 0, 0, 0, 1, 0, 1),
(145, '../general/images/drones/145.jpg', 'none', 0, 1, 0, 0, 1, 0, 1),
(146, '../general/images/drones/146.jpg', 'none', 0, 0, 0, 0, 1, 0, 1),
(147, '../general/images/drones/147.jpg', 'color', 1, 0, 0, 0, 1, 0, 0),
(148, '../general/images/drones/148.jpg', 'dark', 1, 1, 0, 1, 1, 1, 0),
(149, '../general/images/drones/149.jpg', 'dark', 1, 0, 0, 0, 0, 1, 0),
(150, '../general/images/drones/150.jpg', 'dark', 1, 0, 0, 0, 1, 1, 0),
(151, '../general/images/drones/151.jpg', 'dark', 0, 0, 0, 1, 1, 1, 0),
(152, '../general/images/drones/152.jpg', 'color', 0, 0, 0, 1, 1, 1, 0),
(153, '../general/images/drones/153.jpg', 'color', 0, 1, 0, 0, 1, 1, 1),
(154, '../general/images/drones/154.jpg', 'none', 0, 1, 1, 0, 1, 1, 1),
(155, '../general/images/drones/155.jpg', 'none', 0, 1, 0, 1, 1, 1, 1),
(156, '../general/images/drones/156.jpg', 'color', 0, 0, 0, 1, 1, 1, 1),
(157, '../general/images/drones/157.jpg', 'color', 0, 1, 0, 1, 1, 1, 1),
(158, '../general/images/drones/158.jpg', 'none', 0, 1, 0, 1, 1, 1, 1),
(159, '../general/images/drones/159.jpg', 'dark', 0, 1, 0, 0, 0, 1, 1),
(160, '../general/images/drones/160.jpg', 'dark', 0, 1, 0, 1, 1, 1, 1),
(161, '../general/images/drones/161.jpg', 'color', 0, 1, 0, 1, 1, 1, 1),
(162, '../general/images/drones/162.jpg', 'dark', 1, 1, 0, 0, 1, 1, 1),
(163, '../general/images/drones/163.jpg', 'color', 0, 0, 0, 1, 0, 1, 1),
(164, '../general/images/drones/164.jpg', 'none', 0, 1, 0, 1, 1, 1, 1),
(165, '../general/images/drones/165.jpg', 'color', 1, 1, 0, 1, 1, 1, 1),
(166, '../general/images/drones/166.jpg', 'color', 0, 0, 0, 1, 1, 1, 1),
(167, '../general/images/drones/167.jpg', 'color', 1, 1, 1, 1, 0, 1, 1),
(168, '../general/images/drones/168.jpg', 'none', 0, 0, 0, 0, 1, 1, 1),
(169, '../general/images/drones/169.jpg', 'color', 0, 1, 0, 1, 1, 1, 1),
(170, '../general/images/drones/170.jpg', 'dark', 0, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `education_levels`
--

DROP TABLE IF EXISTS `education_levels`;
CREATE TABLE IF NOT EXISTS `education_levels` (
  `level` int(11) NOT NULL,
  `education` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`education`),
  UNIQUE KEY `value_4` (`value`),
  KEY `education` (`education`),
  KEY `value` (`value`),
  KEY `value_2` (`value`),
  KEY `value_3` (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `education_levels`
--

INSERT INTO `education_levels` (`level`, `education`, `value`) VALUES
(4, 'Bachelor\'s Degree', 'bachelor'),
(3, 'College', 'college'),
(1, 'Did not graduate high school', 'min'),
(2, 'Graduated high school', 'high school'),
(6, 'Higher degree, e.g., Ph.D.', 'phd'),
(5, 'Master\'s Degree', 'master');

-- --------------------------------------------------------

--
-- Table structure for table `eyes`
--

DROP TABLE IF EXISTS `eyes`;
CREATE TABLE IF NOT EXISTS `eyes` (
  `eyes` varchar(255) NOT NULL,
  `eyeNum` int(1) NOT NULL,
  PRIMARY KEY (`eyes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eyes`
--

INSERT INTO `eyes` (`eyes`, `eyeNum`) VALUES
('color', 2),
('dark', 1),
('none', 0);

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

DROP TABLE IF EXISTS `genders`;
CREATE TABLE IF NOT EXISTS `genders` (
  `gender` varchar(255) NOT NULL,
  PRIMARY KEY (`gender`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`gender`) VALUES
('Female'),
('Male'),
('Non binary');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

DROP TABLE IF EXISTS `participants`;
CREATE TABLE IF NOT EXISTS `participants` (
  `serial` int(11) NOT NULL,
  `IP` varchar(128) NOT NULL COMMENT 'IP address',
  `gender` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `education` varchar(255) NOT NULL,
  `see` tinyint(1) DEFAULT NULL COMMENT 'have you seen a drone before?',
  `whereSee` text COMMENT 'where?',
  `pilot` tinyint(1) DEFAULT NULL COMMENT 'have you piloted a drone before?',
  `own` tinyint(1) DEFAULT NULL COMMENT 'do you own a drone?',
  `whichOwn` text COMMENT 'which?',
  `pet` tinyint(1) DEFAULT NULL COMMENT 'do you have a pet or had one in the past?',
  `whatPet` text COMMENT 'what pet?',
  `whenPet` text COMMENT 'when?',
  `finish` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`serial`,`IP`),
  KEY `gender` (`gender`),
  KEY `country` (`country`),
  KEY `education` (`education`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `questionnaires`
--

DROP TABLE IF EXISTS `questionnaires`;
CREATE TABLE IF NOT EXISTS `questionnaires` (
  `DTStart` datetime NOT NULL,
  `serialSubject` int(11) NOT NULL,
  `droneNumber` int(11) NOT NULL,
  `DTEnd` datetime NOT NULL,
  `ability` text,
  PRIMARY KEY (`DTStart`,`serialSubject`,`droneNumber`),
  KEY `pEmail` (`serialSubject`),
  KEY `DTStart` (`DTStart`),
  KEY `droneNumber` (`droneNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ranked`
--

DROP TABLE IF EXISTS `ranked`;
CREATE TABLE IF NOT EXISTS `ranked` (
  `dRankedBelow` varchar(255) NOT NULL COMMENT 'opposite dimension ranked if rank is under 50',
  `serialSubject` int(11) NOT NULL,
  `droneSerialNumber` int(11) NOT NULL,
  `rank` int(11) NOT NULL COMMENT '0<rank<100',
  PRIMARY KEY (`dRankedBelow`,`serialSubject`,`droneSerialNumber`),
  KEY `dRankedBelow` (`dRankedBelow`),
  KEY `pEmail` (`serialSubject`),
  KEY `droneSerialNumber` (`droneSerialNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `drones`
--
ALTER TABLE `drones`
  ADD CONSTRAINT `eyesENUM` FOREIGN KEY (`eyes`) REFERENCES `eyes` (`eyes`);

--
-- Constraints for table `participants`
--
ALTER TABLE `participants`
  ADD CONSTRAINT `countryENUM` FOREIGN KEY (`country`) REFERENCES `countries` (`country`),
  ADD CONSTRAINT `educationENUM` FOREIGN KEY (`education`) REFERENCES `education_levels` (`value`),
  ADD CONSTRAINT `genderENUM` FOREIGN KEY (`gender`) REFERENCES `genders` (`gender`);

--
-- Constraints for table `questionnaires`
--
ALTER TABLE `questionnaires`
  ADD CONSTRAINT `questionnaires_ibfk_2` FOREIGN KEY (`droneNumber`) REFERENCES `drones` (`serialNumber`),
  ADD CONSTRAINT `serial subject constraint` FOREIGN KEY (`serialSubject`) REFERENCES `participants` (`serial`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `ranked`
--
ALTER TABLE `ranked`
  ADD CONSTRAINT `ranked_ibfk_2` FOREIGN KEY (`dRankedBelow`) REFERENCES `dimensions` (`dName`),
  ADD CONSTRAINT `ranked_ibfk_4` FOREIGN KEY (`droneSerialNumber`) REFERENCES `drones` (`serialNumber`),
  ADD CONSTRAINT `serial subject fk` FOREIGN KEY (`serialSubject`) REFERENCES `participants` (`serial`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
