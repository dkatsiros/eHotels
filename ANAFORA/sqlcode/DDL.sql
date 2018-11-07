-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 30 Μάη 2018 στις 22:36:44
-- Έκδοση διακομιστή: 10.1.31-MariaDB
-- Έκδοση PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `test`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `amenities`
--

CREATE TABLE `amenities` (
  `Amenities_id` varchar(45) NOT NULL,
  `Room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `amenities`
--

INSERT INTO `amenities` (`Amenities_id`, `Room_id`) VALUES
('TV', 1),
('TV', 3),
('TV', 6),
('TV', 8),
('TV', 9),
('TV', 11),
('TV', 13),
('TV', 16),
('TV', 18),
('TV', 21),
('TV', 23),
('TV', 25),
('TV', 26),
('TV', 28),
('TV', 31),
('TV', 33),
('TV', 36),
('TV', 38),
('TV', 41),
('TV', 43),
('TV', 46),
('TV', 48),
('TV', 51),
('TV', 53),
('TV', 56),
('TV', 58),
('TV', 61),
('TV', 63),
('TV', 66),
('TV', 68),
('TV', 71),
('TV', 73),
('TV', 76),
('TV', 78),
('TV', 81),
('TV', 83),
('TV', 86),
('TV', 88),
('TV', 91),
('TV', 93),
('TV', 96),
('TV', 98),
('TV', 101),
('TV', 103),
('TV', 106),
('TV', 108),
('TV', 111),
('TV', 113),
('TV', 116),
('TV', 118),
('TV', 121),
('TV', 123),
('TV', 124),
('wifi', 1),
('wifi', 2),
('wifi', 4),
('wifi', 5),
('wifi', 6),
('wifi', 7),
('wifi', 9),
('wifi', 10),
('wifi', 11),
('wifi', 12),
('wifi', 14),
('wifi', 15),
('wifi', 16),
('wifi', 17),
('wifi', 19),
('wifi', 20),
('wifi', 21),
('wifi', 22),
('wifi', 24),
('wifi', 25),
('wifi', 26),
('wifi', 27),
('wifi', 29),
('wifi', 30),
('wifi', 31),
('wifi', 32),
('wifi', 34),
('wifi', 35),
('wifi', 36),
('wifi', 37),
('wifi', 39),
('wifi', 40),
('wifi', 41),
('wifi', 42),
('wifi', 44),
('wifi', 45),
('wifi', 46),
('wifi', 47),
('wifi', 49),
('wifi', 50),
('wifi', 51),
('wifi', 52),
('wifi', 54),
('wifi', 55),
('wifi', 56),
('wifi', 57),
('wifi', 59),
('wifi', 60),
('wifi', 61),
('wifi', 62),
('wifi', 64),
('wifi', 65),
('wifi', 66),
('wifi', 67),
('wifi', 69),
('wifi', 70),
('wifi', 71),
('wifi', 72),
('wifi', 74),
('wifi', 75),
('wifi', 76),
('wifi', 77),
('wifi', 79),
('wifi', 80),
('wifi', 81),
('wifi', 82),
('wifi', 84),
('wifi', 85),
('wifi', 86),
('wifi', 87),
('wifi', 89),
('wifi', 90),
('wifi', 91),
('wifi', 92),
('wifi', 94),
('wifi', 95),
('wifi', 96),
('wifi', 97),
('wifi', 99),
('wifi', 100),
('wifi', 101),
('wifi', 102),
('wifi', 104),
('wifi', 105),
('wifi', 106),
('wifi', 107),
('wifi', 109),
('wifi', 110),
('wifi', 111),
('wifi', 112),
('wifi', 114),
('wifi', 115),
('wifi', 116),
('wifi', 117),
('wifi', 119),
('wifi', 120),
('wifi', 121),
('wifi', 122),
('wifi', 124),
('wifi', 125);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `customer`
--

CREATE TABLE `customer` (
  `IRSnumber` int(11) NOT NULL,
  `SSN` int(11) NOT NULL,
  `First_name` varchar(45) NOT NULL,
  `Last_name` varchar(45) NOT NULL,
  `Street` varchar(45) NOT NULL,
  `Number` int(11) NOT NULL,
  `City` varchar(45) NOT NULL,
  `Postal_code` int(11) NOT NULL,
  `First_registration` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `customer`
--

INSERT INTO `customer` (`IRSnumber`, `SSN`, `First_name`, `Last_name`, `Street`, `Number`, `City`, `Postal_code`, `First_registration`) VALUES
(5, 1, 'mikw', 'mike', 'odos', 2, 'athens', 12038, '2018-05-24'),
(6, 2553, '32', '23', '42', 42, 'athens', 2, '2018-05-24');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `employee`
--

CREATE TABLE `employee` (
  `IRSnumber` int(11) NOT NULL,
  `SSN` int(11) NOT NULL,
  `First_name` varchar(45) NOT NULL,
  `Last_name` varchar(45) NOT NULL,
  `Street` varchar(45) NOT NULL,
  `Number` int(11) NOT NULL,
  `City` varchar(45) NOT NULL,
  `Postal_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `employee`
--

INSERT INTO `employee` (`IRSnumber`, `SSN`, `First_name`, `Last_name`, `Street`, `Number`, `City`, `Postal_code`) VALUES
(108, 3315141, 'KWNSTANTINOS', 'MIXALAKOPOULOS', 'THRAKIS', 22, 'NEASMIRNI', 17121),
(505, 3117141, 'ATHINA', 'SILITZOGLOU', 'TRIZINIAS', 9, 'FALIRO', 17138),
(606, 3116141, 'OURANIA', 'PARMENIAN', 'GEORGIAS', 11, 'LIVADIA', 17204),
(707, 3115179, 'GIORGOS', 'KOTSARIS', 'FLAVIANWN', 16, 'CHAIDARI', 17123),
(901, 3115131, 'ANASTASIA', 'KRITIKIA', 'SALONIKAS', 11, 'THESSALONIKI', 11113),
(908, 3115141, 'ATHINA', 'TSOUMAKAO', 'TRELHS', 10, 'CHALANDRI', 17113),
(909, 3115142, 'DIMITRIS', 'NIKHTAS', 'SAKRAMENTO', 9, 'FALIRO', 17121),
(990, 3119141, 'MURTO', 'KALANIOTH', 'HOE', 1, 'NEOSKOSMOS', 17133),
(1010, 3120141, 'GREGO', 'PAPPAS', 'HMHTOU', 23, 'YMMHTOS', 17453),
(1011, 3143141, 'IOANNIS', 'DELLIMIXAHL', 'XONTRHS', 91, 'XOLARGOS', 17193),
(1012, 3121141, 'MARILENA', 'TSIMPOUKA', 'PERSINHS', 2, 'PEIRAIAS', 18123),
(1013, 3122141, 'PRWHN', 'AGAPH', 'MELAGXOLIAS', 4, 'NEVERLAND', 17133),
(1014, 3123141, 'PONOS', 'GREVIAS', 'AIGAIOU', 1, 'CHAIDARI', 17146),
(1015, 3125141, 'SAVVAS', 'KOGIOUMTSHS', 'FOMITHEAS', 2, 'SANTORINI', 56789),
(1016, 3126141, 'TAYLOR', 'SWIFT', 'AMERIKHS', 10, 'METAMORFOSH', 17190),
(1017, 3126143, 'AINT', 'NOO', 'MOUNTAINHIGH', 10, 'ENOUGH', 17180),
(1190, 3128141, 'PINA', 'COLLADA', 'YOGAS', 9, 'PAGRATI', 17213),
(1290, 3118901, 'ARETH', 'STHZWH', 'PENATHS', 8, 'CHOLARGOS', 17413),
(1390, 3115195, 'MARGIE', 'PROBLEMATIC', 'MAKSILARIOU', 8, 'TOUMPA', 12113),
(1431, 3115140, 'ANNAMARIA', 'VAKIANI', 'RODOU', 11, 'AG.PARASKEUH', 17213),
(1908, 13115141, 'AGGELIKI', 'STAVRAKOPOULOU', 'AIGAIOU', 1, 'NEOSKOSMOS', 17223),
(5454, 3115241, 'FLOUTRA', 'SEHOU', 'ALVANIAS', 2, 'TYRANA', 17190),
(9009, 3118141, 'ARISTI', 'PARAPONIARH', 'VIRGIN', 8, 'PATHSIA', 17893),
(9090, 4115141, 'THEODWRA', 'ALEFRAGI', 'IWNIAS', 90, 'CHALANDRI', 17113),
(9897, 3130141, 'GARUFALIA', 'KOROMHLOU', 'AGIAS', 7, 'SERRES', 19013);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `hotel`
--

CREATE TABLE `hotel` (
  `Hotel_id` int(11) NOT NULL,
  `Hotel_group_id` int(11) NOT NULL,
  `Stars` int(11) NOT NULL,
  `Number_of_rooms` int(11) NOT NULL,
  `Street` varchar(45) NOT NULL,
  `Number` int(11) NOT NULL,
  `City` varchar(45) NOT NULL,
  `Postal_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `hotel`
--

INSERT INTO `hotel` (`Hotel_id`, `Hotel_group_id`, `Stars`, `Number_of_rooms`, `Street`, `Number`, `City`, `Postal_code`) VALUES
(1, 1, 5, 5, 'korah', 23, 'Athens', 17121),
(2, 1, 4, 5, 'distomou', 36, 'Athens', 17272),
(3, 1, 3, 5, 'thrakis', 23, 'Thessaloniki', 19121),
(4, 1, 4, 5, 'loumpas', 24, 'Thessaloniki', 19124),
(5, 1, 2, 5, 'pistas', 3, 'Syros', 27172),
(6, 2, 5, 5, 'korah', 23, 'Athens', 17121),
(7, 2, 4, 5, 'distomou', 36, 'Athens', 17272),
(8, 2, 3, 5, 'thrakis', 23, 'Thessaloniki', 19121),
(9, 2, 4, 5, 'loumpas', 24, 'Thessaloniki', 19124),
(10, 2, 2, 5, 'pistas', 3, 'Syros', 27172),
(11, 3, 5, 5, 'korah', 23, 'Athens', 17121),
(12, 3, 4, 5, 'distomou', 36, 'Athens', 17272),
(13, 3, 3, 5, 'thrakis', 23, 'Thessaloniki', 19121),
(14, 3, 4, 5, 'loumpas', 24, 'Thessaloniki', 19124),
(15, 3, 2, 5, 'pistas', 3, 'Syros', 27172),
(16, 4, 5, 5, 'korah', 23, 'Athens', 17121),
(17, 4, 4, 5, 'distomou', 36, 'Athens', 17272),
(18, 4, 3, 5, 'thrakis', 23, 'Thessaloniki', 19121),
(19, 4, 4, 5, 'loumpas', 24, 'Thessaloniki', 19124),
(20, 4, 2, 5, 'pistas', 3, 'Syros', 27172),
(21, 5, 5, 5, 'korah', 23, 'Athens', 17121),
(22, 5, 4, 5, 'distomou', 36, 'Athens', 17272),
(23, 5, 3, 5, 'thrakis', 23, 'Thessaloniki', 19121),
(24, 5, 4, 5, 'loumpas', 24, 'Thessaloniki', 19124),
(25, 5, 2, 5, 'pistas', 3, 'Syros', 27172);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `hotel_email_address`
--

CREATE TABLE `hotel_email_address` (
  `Email_address` varchar(45) NOT NULL,
  `Hotel_Hotel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `hotel_email_address`
--

INSERT INTO `hotel_email_address` (`Email_address`, `Hotel_Hotel_id`) VALUES
('xatzis@hotmail.com', 1),
('xatzi@hotmail.com', 2),
('xatz@hotmail.gr', 3),
('xat@hotmail.com', 4),
('xatzis1@hotmail.com', 5),
('xatzis@hotmail.com', 6),
('billi@hotmail.com', 7),
('xatz@hotmail.com', 8),
('xat@hotmail.com', 9),
('xatzis1@hotmail.com', 10),
('xatzis@hotmail.com', 11),
('xatzi@hotmail.com', 12),
('xatz@hotmail.com', 13),
('xat@hotmail.com', 14),
('katsiros@hotmail.com', 15),
('xatzis@hotmail.com', 16),
('mixalakopoulos@hotmail.com', 17),
('xatz@hotmail.com', 18),
('xat@hotmail.com', 19),
('xatzis1@hotmail.com', 20),
('xatzis@hotmail.com', 21),
('xatzi@hotmail.com', 22),
('xatz@hotmail.com', 23),
('xat@hotmail.com', 24),
('xatzis1@hotmail.com', 25);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `hotel_group`
--

CREATE TABLE `hotel_group` (
  `Hotel_group_id` int(11) NOT NULL,
  `Number_of_hotels` int(11) NOT NULL,
  `Street` varchar(45) NOT NULL,
  `City` varchar(45) NOT NULL,
  `Number` int(11) NOT NULL,
  `Postal_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `hotel_group`
--

INSERT INTO `hotel_group` (`Hotel_group_id`, `Number_of_hotels`, `Street`, `City`, `Number`, `Postal_code`) VALUES
(1, 421, ' 42', '2', 23, 42),
(2, 231, '321', '1', 321, 3),
(3, 5, 'kora', 'Rhodes', 25, 17122),
(4, 23, ' eko', '3223', 32, 0),
(5, 2, '123', '2', 123, 32),
(6, 321, '123', '23', 321231, 21),
(7, 321, '123', '23', 321231, 21),
(8, 321, '123', '23', 321231, 21),
(9, 321, '123', '23', 321231, 21),
(10, 321, '123', '23', 321231, 21),
(11, 321, '123', '23', 321231, 21),
(12, 321, '123', '23', 321231, 21),
(13, 0, '', '', 0, 0),
(14, 0, '', '', 0, 0),
(15, 0, '', '', 0, 0),
(16, 0, '', '', 0, 0),
(17, 0, '', '', 0, 0),
(18, 0, '', '', 0, 0),
(19, 0, '', '', 0, 0),
(20, 0, '', '', 0, 0),
(21, 0, '', '', 0, 0),
(22, 0, '', '', 0, 0),
(23, 0, '', '', 0, 0),
(24, 0, '', '', 0, 0),
(25, 0, '', '', 0, 0),
(26, 0, '', '', 0, 0),
(27, 0, '', '', 0, 0),
(28, 0, '', '', 0, 0),
(29, 0, '', '', 0, 0),
(30, 0, '', '', 0, 0),
(31, 0, '', '', 0, 0),
(32, 0, '', '', 0, 0),
(33, 0, '', '', 0, 0),
(34, 0, '', '', 0, 0),
(35, 0, '', '', 0, 0),
(36, 0, '', '', 0, 0),
(37, 0, '', '', 0, 0),
(38, 0, '', '', 0, 0),
(39, 0, '', '', 0, 0),
(40, 0, '', '', 0, 0),
(41, 0, '', '', 0, 0),
(42, 0, '', '', 0, 0),
(43, 0, '', '', 0, 0),
(44, 0, '', '', 0, 0),
(45, 0, '', '', 0, 0),
(46, 0, '', '', 0, 0),
(47, 0, '', '', 0, 0),
(48, 0, '', '', 0, 0),
(49, 3, ' new', '34', 48, 30),
(50, 0, '', '', 0, 0),
(51, 0, '', '', 0, 0),
(52, 0, '', '', 0, 0),
(53, 0, '', '', 0, 0),
(54, 4, 'o3', '3', 3, 3),
(55, 4, 'o3', '3', 3, 3),
(56, 4, 'o3', '3', 3, 3),
(57, 4, 'o3', '3', 3, 3),
(58, 5, 'kora', 'Athens', 23, 17122),
(59, 5, 'distomo', 'Athens', 36, 17273),
(60, 5, 'thrakia', 'Thessaloniki', 23, 19181),
(61, 5, 'loumpas', 'Thessaloniki', 24, 19124),
(62, 5, 'pistas', 'Syros', 3, 27172);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `hotel_group_email_address`
--

CREATE TABLE `hotel_group_email_address` (
  `Email_address` varchar(45) NOT NULL,
  `Hotel_group_Hotel_group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `hotel_group_email_address`
--

INSERT INTO `hotel_group_email_address` (`Email_address`, `Hotel_group_Hotel_group_id`) VALUES
('', 13),
('', 14),
('', 15),
('', 16),
('', 17),
('', 18),
('', 19),
('', 20),
('', 21),
('', 22),
('', 23),
('', 24),
('', 25),
('', 26),
('', 38),
('', 39),
('', 40),
('', 41),
('', 42),
('', 43),
('', 44),
('', 45),
('', 46),
('', 47),
('', 48),
('', 50),
('', 51),
('', 52),
('', 53),
('12@2', 1),
('13', 2),
('13', 4),
('2', 4),
('23', 6),
('23', 7),
('23', 8),
('23', 9),
('23', 10),
('23', 11),
('23', 12),
('2@3', 5),
('email', 54),
('email', 55),
('email', 56),
('email', 57),
('kats@hotmail.com', 4),
('katsem@hotmail.com', 5),
('katsi@hotmail.com', 2),
('katsiros@hotmail.com', 1),
('katsou@hotmail.com', 4),
('kse@hotmail.gr', 49);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `hotel_group_phone_number`
--

CREATE TABLE `hotel_group_phone_number` (
  `Phone_number` int(11) NOT NULL,
  `Hotel_group_Hotel_group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `hotel_group_phone_number`
--

INSERT INTO `hotel_group_phone_number` (`Phone_number`, `Hotel_group_Hotel_group_id`) VALUES
(0, 13),
(0, 14),
(0, 15),
(0, 16),
(0, 17),
(0, 18),
(0, 19),
(0, 20),
(0, 21),
(0, 22),
(0, 23),
(0, 24),
(0, 25),
(0, 26),
(0, 27),
(0, 28),
(0, 29),
(0, 30),
(0, 31),
(0, 32),
(0, 33),
(0, 38),
(0, 39),
(0, 40),
(0, 41),
(0, 42),
(0, 43),
(0, 44),
(0, 45),
(0, 46),
(0, 47),
(0, 48),
(0, 50),
(0, 51),
(0, 52),
(0, 53),
(0, 54),
(0, 55),
(0, 56),
(0, 57),
(2, 4),
(23, 2),
(23, 4),
(32, 5),
(321, 6),
(321, 7),
(321, 8),
(321, 9),
(321, 10),
(321, 11),
(321, 12),
(2981, 1),
(8998, 49),
(2109322784, 1),
(2109323782, 2),
(2119322736, 4),
(2147483647, 4),
(2147483647, 5);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `hotel_phone_number`
--

CREATE TABLE `hotel_phone_number` (
  `Phone_number` int(11) NOT NULL,
  `Hotel_Hotel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `hotel_phone_number`
--

INSERT INTO `hotel_phone_number` (`Phone_number`, `Hotel_Hotel_id`) VALUES
(2109322784, 1),
(2109322784, 6),
(2109322784, 11),
(2109322784, 16),
(2109322784, 21),
(2109322785, 3),
(2109322785, 8),
(2109322785, 13),
(2109322785, 18),
(2109322785, 23),
(2109322786, 4),
(2109322786, 9),
(2109322786, 14),
(2109322786, 19),
(2109322786, 24),
(2109322794, 5),
(2109322794, 10),
(2109322794, 15),
(2109322794, 20),
(2109322794, 25),
(2109323784, 2),
(2109323784, 7),
(2109323784, 12),
(2109323784, 17),
(2109323784, 22);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `hotel_room`
--

CREATE TABLE `hotel_room` (
  `Room_id` int(11) NOT NULL,
  `Hotel_id` int(11) NOT NULL,
  `View` varchar(45) NOT NULL,
  `Price` int(11) NOT NULL,
  `Expandable` varchar(45) NOT NULL,
  `Repairs_need` varchar(45) NOT NULL,
  `Capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `hotel_room`
--

INSERT INTO `hotel_room` (`Room_id`, `Hotel_id`, `View`, `Price`, `Expandable`, `Repairs_need`, `Capacity`) VALUES
(1, 1, 'sea', 125, 'no', 'no', 2),
(2, 1, 'forest', 130, 'yes', 'no', 3),
(3, 1, 'sea', 125, 'no', 'no', 4),
(4, 1, 'sea', 180, 'yes', 'yes', 5),
(5, 1, 'road', 95, 'no', 'yes', 1),
(6, 2, 'sea', 125, 'no', 'no', 2),
(7, 2, 'forest', 130, 'yes', 'no', 3),
(8, 2, 'sea', 125, 'no', 'no', 4),
(9, 2, 'sea', 180, 'yes', 'yes', 5),
(10, 2, 'road', 95, 'no', 'yes', 1),
(11, 3, 'sea', 125, 'no', 'no', 2),
(12, 3, 'forest', 130, 'yes', 'no', 3),
(13, 3, 'sea', 125, 'no', 'no', 4),
(14, 3, 'sea', 180, 'yes', 'yes', 5),
(15, 3, 'road', 95, 'no', 'yes', 1),
(16, 4, 'sea', 125, 'no', 'no', 2),
(17, 4, 'forest', 130, 'yes', 'no', 3),
(18, 4, 'sea', 125, 'no', 'no', 4),
(19, 4, 'sea', 180, 'yes', 'yes', 5),
(20, 4, 'road', 95, 'no', 'yes', 1),
(21, 5, 'sea', 125, 'no', 'no', 2),
(22, 5, 'forest', 130, 'yes', 'no', 3),
(23, 5, 'sea', 125, 'no', 'no', 4),
(24, 5, 'sea', 180, 'yes', 'yes', 5),
(25, 5, 'road', 95, 'no', 'yes', 1),
(26, 6, 'sea', 125, 'no', 'no', 2),
(27, 6, 'forest', 130, 'yes', 'no', 3),
(28, 6, 'sea', 125, 'no', 'no', 4),
(29, 6, 'sea', 180, 'yes', 'yes', 5),
(30, 6, 'road', 95, 'no', 'yes', 1),
(31, 7, 'sea', 125, 'no', 'no', 2),
(32, 7, 'forest', 130, 'yes', 'no', 3),
(33, 7, 'sea', 125, 'no', 'no', 4),
(34, 7, 'sea', 180, 'yes', 'yes', 5),
(35, 7, 'road', 95, 'no', 'yes', 1),
(36, 8, 'sea', 125, 'no', 'no', 2),
(37, 8, 'forest', 130, 'yes', 'no', 3),
(38, 8, 'sea', 125, 'no', 'no', 4),
(39, 8, 'sea', 180, 'yes', 'yes', 5),
(40, 8, 'road', 95, 'no', 'yes', 1),
(41, 9, 'sea', 125, 'no', 'no', 2),
(42, 9, 'forest', 130, 'yes', 'no', 3),
(43, 9, 'sea', 125, 'no', 'no', 4),
(44, 9, 'sea', 180, 'yes', 'yes', 5),
(45, 9, 'road', 95, 'no', 'yes', 1),
(46, 10, 'sea', 125, 'no', 'no', 2),
(47, 10, 'forest', 130, 'yes', 'no', 3),
(48, 10, 'sea', 125, 'no', 'no', 4),
(49, 10, 'sea', 180, 'yes', 'yes', 5),
(50, 10, 'road', 95, 'no', 'yes', 1),
(51, 11, 'sea', 125, 'no', 'no', 2),
(52, 11, 'forest', 130, 'yes', 'no', 3),
(53, 11, 'sea', 125, 'no', 'no', 4),
(54, 11, 'sea', 180, 'yes', 'yes', 5),
(55, 11, 'road', 95, 'no', 'yes', 1),
(56, 12, 'sea', 125, 'no', 'no', 2),
(57, 12, 'forest', 130, 'yes', 'no', 3),
(58, 12, 'sea', 125, 'no', 'no', 4),
(59, 12, 'sea', 180, 'yes', 'yes', 5),
(60, 12, 'road', 95, 'no', 'yes', 1),
(61, 13, 'sea', 125, 'no', 'no', 2),
(62, 13, 'forest', 130, 'yes', 'no', 3),
(63, 13, 'sea', 125, 'no', 'no', 4),
(64, 13, 'sea', 180, 'yes', 'yes', 5),
(65, 13, 'road', 95, 'no', 'yes', 1),
(66, 14, 'sea', 125, 'no', 'no', 2),
(67, 14, 'forest', 130, 'yes', 'no', 3),
(68, 14, 'sea', 125, 'no', 'no', 4),
(69, 14, 'sea', 180, 'yes', 'yes', 5),
(70, 14, 'road', 95, 'no', 'yes', 1),
(71, 15, 'sea', 125, 'no', 'no', 2),
(72, 15, 'forest', 130, 'yes', 'no', 3),
(73, 15, 'sea', 125, 'no', 'no', 4),
(74, 15, 'sea', 180, 'yes', 'yes', 5),
(75, 15, 'road', 95, 'no', 'yes', 1),
(76, 16, 'sea', 125, 'no', 'no', 2),
(77, 16, 'forest', 130, 'yes', 'no', 3),
(78, 16, 'sea', 125, 'no', 'no', 4),
(79, 16, 'sea', 180, 'yes', 'yes', 5),
(80, 16, 'road', 95, 'no', 'yes', 1),
(81, 17, 'sea', 125, 'no', 'no', 2),
(82, 17, 'forest', 130, 'yes', 'no', 3),
(83, 17, 'sea', 125, 'no', 'no', 4),
(84, 17, 'sea', 180, 'yes', 'yes', 5),
(85, 17, 'road', 95, 'no', 'yes', 1),
(86, 18, 'sea', 125, 'no', 'no', 2),
(87, 18, 'forest', 130, 'yes', 'no', 3),
(88, 18, 'sea', 125, 'no', 'no', 4),
(89, 18, 'sea', 180, 'yes', 'yes', 5),
(90, 18, 'road', 95, 'no', 'yes', 1),
(91, 19, 'sea', 125, 'no', 'no', 2),
(92, 19, 'forest', 130, 'yes', 'no', 3),
(93, 19, 'sea', 125, 'no', 'no', 4),
(94, 19, 'sea', 180, 'yes', 'yes', 5),
(95, 19, 'road', 95, 'no', 'yes', 1),
(96, 20, 'sea', 125, 'no', 'no', 2),
(97, 20, 'forest', 130, 'yes', 'no', 3),
(98, 20, 'sea', 125, 'no', 'no', 4),
(99, 20, 'sea', 180, 'yes', 'yes', 5),
(100, 20, 'road', 95, 'no', 'yes', 1),
(101, 21, 'sea', 125, 'no', 'no', 2),
(102, 21, 'forest', 130, 'yes', 'no', 3),
(103, 21, 'sea', 125, 'no', 'no', 4),
(104, 21, 'sea', 180, 'yes', 'yes', 5),
(105, 21, 'road', 95, 'no', 'yes', 1),
(106, 22, 'sea', 125, 'no', 'no', 2),
(107, 22, 'forest', 130, 'yes', 'no', 3),
(108, 22, 'sea', 125, 'no', 'no', 4),
(109, 22, 'sea', 180, 'yes', 'yes', 5),
(110, 22, 'road', 95, 'no', 'yes', 1),
(111, 23, 'sea', 125, 'no', 'no', 2),
(112, 23, 'forest', 130, 'yes', 'no', 3),
(113, 23, 'sea', 125, 'no', 'no', 4),
(114, 23, 'sea', 180, 'yes', 'yes', 5),
(115, 23, 'road', 95, 'no', 'yes', 1),
(116, 24, 'sea', 125, 'no', 'no', 2),
(117, 24, 'forest', 130, 'yes', 'no', 3),
(118, 24, 'sea', 125, 'no', 'no', 4),
(119, 24, 'sea', 180, 'yes', 'yes', 5),
(120, 24, 'road', 95, 'no', 'yes', 1),
(121, 25, 'sea', 125, 'no', 'no', 2),
(122, 25, 'forest', 130, 'yes', 'no', 3),
(123, 25, 'sea', 125, 'no', 'no', 4),
(124, 25, 'sea', 180, 'yes', 'yes', 5),
(125, 25, 'road', 95, 'no', 'yes', 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `rents`
--

CREATE TABLE `rents` (
  `Customer_IRSnumber` int(11) DEFAULT NULL,
  `Hotel_room_Room_id` int(11) DEFAULT NULL,
  `Employee_IRSnumber` int(11) DEFAULT NULL,
  `Start_date` date NOT NULL,
  `Finish_date` date NOT NULL,
  `Payment_amount` int(11) NOT NULL,
  `Payment_method` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `rents`
--

INSERT INTO `rents` (`Customer_IRSnumber`, `Hotel_room_Room_id`, `Employee_IRSnumber`, `Start_date`, `Finish_date`, `Payment_amount`, `Payment_method`) VALUES
(5, NULL, 108, '2018-10-10', '2018-10-20', 200, 'cash');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `reserves`
--

CREATE TABLE `reserves` (
  `Customer_IRSnumber` int(11) DEFAULT NULL,
  `Hotel_room_Room_id` int(11) DEFAULT NULL,
  `Start_date` date NOT NULL,
  `Paid` varchar(11) NOT NULL,
  `Finish_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `reserves`
--

INSERT INTO `reserves` (`Customer_IRSnumber`, `Hotel_room_Room_id`, `Start_date`, `Paid`, `Finish_date`) VALUES
(5, 11, '2018-10-10', 'no', '2018-11-15'),
(6, 112, '2018-02-01', 'no', '2018-02-03');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `works`
--

CREATE TABLE `works` (
  `Employee_IRSnumber` int(11) NOT NULL,
  `Hotel_Hotel_id` int(11) NOT NULL,
  `Start_date` date NOT NULL,
  `Position` varchar(45) NOT NULL,
  `Finish_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `works`
--

INSERT INTO `works` (`Employee_IRSnumber`, `Hotel_Hotel_id`, `Start_date`, `Position`, `Finish_date`) VALUES
(108, 5, '0000-00-00', 'MANAGER', '0000-00-00'),
(505, 11, '0000-00-00', 'MANAGER', '0000-00-00'),
(606, 10, '0000-00-00', 'MANAGER', '0000-00-00'),
(707, 9, '0000-00-00', 'MANAGER', '0000-00-00'),
(901, 4, '0000-00-00', 'MANAGER', '0000-00-00'),
(908, 2, '0000-00-00', 'MANAGER', '0000-00-00'),
(909, 1, '0000-00-00', 'MANAGER', '0000-00-00'),
(990, 13, '0000-00-00', 'MANAGER', '0000-00-00'),
(1010, 14, '0000-00-00', 'MANAGER', '0000-00-00'),
(1011, 15, '0000-00-00', 'MANAGER', '0000-00-00'),
(1012, 16, '0000-00-00', 'MANAGER', '0000-00-00'),
(1013, 17, '0000-00-00', 'MANAGER', '0000-00-00'),
(1014, 18, '0000-00-00', 'MANAGER', '0000-00-00'),
(1015, 19, '0000-00-00', 'MANAGER', '0000-00-00'),
(1016, 20, '0000-00-00', 'MANAGER', '0000-00-00'),
(1017, 21, '0000-00-00', 'MANAGER', '0000-00-00'),
(1190, 22, '0000-00-00', 'MANAGER', '0000-00-00'),
(1290, 23, '0000-00-00', 'MANAGER', '0000-00-00'),
(1390, 24, '0000-00-00', 'MANAGER', '0000-00-00'),
(1431, 3, '0000-00-00', 'MANAGER', '0000-00-00'),
(1908, 6, '0000-00-00', 'MANAGER', '0000-00-00'),
(5454, 7, '0000-00-00', 'MANAGER', '0000-00-00'),
(9009, 12, '0000-00-00', 'MANAGER', '0000-00-00'),
(9090, 8, '0000-00-00', 'MANAGER', '0000-00-00'),
(9897, 25, '0000-00-00', 'MANAGER', '0000-00-00');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`Amenities_id`,`Room_id`),
  ADD KEY `fk_Room_id_Hotel_room_idx` (`Room_id`);

--
-- Ευρετήρια για πίνακα `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`IRSnumber`),
  ADD UNIQUE KEY `SSN_UNIQUE` (`SSN`),
  ADD UNIQUE KEY `IRSnumber_UNIQUE` (`IRSnumber`);

--
-- Ευρετήρια για πίνακα `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`IRSnumber`),
  ADD UNIQUE KEY `SSN_UNIQUE` (`SSN`),
  ADD UNIQUE KEY `IRSnumber_UNIQUE` (`IRSnumber`);

--
-- Ευρετήρια για πίνακα `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`Hotel_id`),
  ADD UNIQUE KEY `Hotel_id_UNIQUE` (`Hotel_id`),
  ADD KEY `fk_Hotel_Hotel_group_idx` (`Hotel_group_id`);

--
-- Ευρετήρια για πίνακα `hotel_email_address`
--
ALTER TABLE `hotel_email_address`
  ADD PRIMARY KEY (`Hotel_Hotel_id`,`Email_address`);

--
-- Ευρετήρια για πίνακα `hotel_group`
--
ALTER TABLE `hotel_group`
  ADD PRIMARY KEY (`Hotel_group_id`),
  ADD UNIQUE KEY `Hotel_group_id_UNIQUE` (`Hotel_group_id`);

--
-- Ευρετήρια για πίνακα `hotel_group_email_address`
--
ALTER TABLE `hotel_group_email_address`
  ADD PRIMARY KEY (`Email_address`,`Hotel_group_Hotel_group_id`),
  ADD KEY `fk_Hotel_group_email_address_Hotel_group1_idx` (`Hotel_group_Hotel_group_id`);

--
-- Ευρετήρια για πίνακα `hotel_group_phone_number`
--
ALTER TABLE `hotel_group_phone_number`
  ADD PRIMARY KEY (`Phone_number`,`Hotel_group_Hotel_group_id`),
  ADD KEY `fk_Hotel_group_phone_number_Hotel_group1_idx` (`Hotel_group_Hotel_group_id`);

--
-- Ευρετήρια για πίνακα `hotel_phone_number`
--
ALTER TABLE `hotel_phone_number`
  ADD PRIMARY KEY (`Phone_number`,`Hotel_Hotel_id`),
  ADD KEY `fk_Hotel_phone_number_Hotel1_idx` (`Hotel_Hotel_id`);

--
-- Ευρετήρια για πίνακα `hotel_room`
--
ALTER TABLE `hotel_room`
  ADD PRIMARY KEY (`Room_id`,`Hotel_id`),
  ADD UNIQUE KEY `Room_id_UNIQUE` (`Room_id`),
  ADD KEY `fk_Hotel_id_Hotel_idx` (`Hotel_id`);

--
-- Ευρετήρια για πίνακα `rents`
--
ALTER TABLE `rents`
  ADD KEY `fk_Rents_Customer1_idx` (`Customer_IRSnumber`),
  ADD KEY `fk_Rents_Hotel_room1_idx` (`Hotel_room_Room_id`),
  ADD KEY `fk_Rents_Employee1_idx` (`Employee_IRSnumber`);

--
-- Ευρετήρια για πίνακα `reserves`
--
ALTER TABLE `reserves`
  ADD UNIQUE KEY `fk_Reserves_CustomerIRS_HotelroomRoomid` (`Customer_IRSnumber`,`Hotel_room_Room_id`),
  ADD KEY `fk_Reserves_Customer1_idx` (`Customer_IRSnumber`),
  ADD KEY `fk_Reserves_Hotel_room1_idx` (`Hotel_room_Room_id`);

--
-- Ευρετήρια για πίνακα `works`
--
ALTER TABLE `works`
  ADD UNIQUE KEY `fk_IRS_ID` (`Employee_IRSnumber`,`Hotel_Hotel_id`),
  ADD KEY `fk_Works_Employee_idx` (`Employee_IRSnumber`),
  ADD KEY `fk_Works_Hotel1_idx` (`Hotel_Hotel_id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `hotel`
--
ALTER TABLE `hotel`
  MODIFY `Hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT για πίνακα `hotel_group`
--
ALTER TABLE `hotel_group`
  MODIFY `Hotel_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT για πίνακα `hotel_room`
--
ALTER TABLE `hotel_room`
  MODIFY `Room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `amenities`
--
ALTER TABLE `amenities`
  ADD CONSTRAINT `fk_Room_id_Hotel_room` FOREIGN KEY (`Room_id`) REFERENCES `hotel_room` (`Room_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Περιορισμοί για πίνακα `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `fk_Hotel_Hotel_group` FOREIGN KEY (`Hotel_group_id`) REFERENCES `hotel_group` (`Hotel_group_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Περιορισμοί για πίνακα `hotel_email_address`
--
ALTER TABLE `hotel_email_address`
  ADD CONSTRAINT `fk_Hotel_email_address_Hotel1` FOREIGN KEY (`Hotel_Hotel_id`) REFERENCES `hotel` (`Hotel_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Περιορισμοί για πίνακα `hotel_group_email_address`
--
ALTER TABLE `hotel_group_email_address`
  ADD CONSTRAINT `fk_Hotel_group_email_address_Hotel_group1` FOREIGN KEY (`Hotel_group_Hotel_group_id`) REFERENCES `hotel_group` (`Hotel_group_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Περιορισμοί για πίνακα `hotel_group_phone_number`
--
ALTER TABLE `hotel_group_phone_number`
  ADD CONSTRAINT `fk_Hotel_group_phone_number_Hotel_group1` FOREIGN KEY (`Hotel_group_Hotel_group_id`) REFERENCES `hotel_group` (`Hotel_group_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Περιορισμοί για πίνακα `hotel_phone_number`
--
ALTER TABLE `hotel_phone_number`
  ADD CONSTRAINT `fk_Hotel_phone_number_Hotel1` FOREIGN KEY (`Hotel_Hotel_id`) REFERENCES `hotel` (`Hotel_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Περιορισμοί για πίνακα `hotel_room`
--
ALTER TABLE `hotel_room`
  ADD CONSTRAINT `fk_Hotel_id_Hotel` FOREIGN KEY (`Hotel_id`) REFERENCES `hotel` (`Hotel_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Περιορισμοί για πίνακα `rents`
--
ALTER TABLE `rents`
  ADD CONSTRAINT `fk_Rents_Customer1` FOREIGN KEY (`Customer_IRSnumber`) REFERENCES `customer` (`IRSnumber`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_Rents_Employee1` FOREIGN KEY (`Employee_IRSnumber`) REFERENCES `employee` (`IRSnumber`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_Rents_Hotel_room1` FOREIGN KEY (`Hotel_room_Room_id`) REFERENCES `hotel_room` (`Room_id`) ON DELETE SET NULL;

--
-- Περιορισμοί για πίνακα `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `fk_Reserves_Customer1` FOREIGN KEY (`Customer_IRSnumber`) REFERENCES `customer` (`IRSnumber`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_Reserves_Hotel_room1` FOREIGN KEY (`Hotel_room_Room_id`) REFERENCES `hotel_room` (`Room_id`) ON DELETE SET NULL;

--
-- Περιορισμοί για πίνακα `works`
--
ALTER TABLE `works`
  ADD CONSTRAINT `fk_Works_Employee` FOREIGN KEY (`Employee_IRSnumber`) REFERENCES `employee` (`IRSnumber`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Works_Hotel1` FOREIGN KEY (`Hotel_Hotel_id`) REFERENCES `hotel` (`Hotel_id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
