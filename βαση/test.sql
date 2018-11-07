-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2018 at 04:40 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `Amenities_id` varchar(45) NOT NULL,
  `Room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
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

-- --------------------------------------------------------

--
-- Table structure for table `employee`
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
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`IRSnumber`, `SSN`, `First_name`, `Last_name`, `Street`, `Number`, `City`, `Postal_code`) VALUES
(0, 0, '', '', '', 0, '', 0),
(3, 3, '3', '3', '3', 3, '3', 3),
(9, 9, 'Î±', 'Î±', '9', 9, '9', 9),
(12, 34, 'dimitris', 'katsiros', 'aginora', 7, 'heraklion', 71409),
(13, 55, 'anna', 'katsirou', 'aginora', 0, 'herad', 99);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
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

-- --------------------------------------------------------

--
-- Table structure for table `hotel_email_address`
--

CREATE TABLE `hotel_email_address` (
  `Email_address` varchar(45) NOT NULL,
  `Hotel_Hotel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_group`
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
-- Dumping data for table `hotel_group`
--

INSERT INTO `hotel_group` (`Hotel_group_id`, `Number_of_hotels`, `Street`, `City`, `Number`, `Postal_code`) VALUES
(2, 1, '1', '1', 1, 1),
(3, 1, '1', '1', 1, 1),
(4, 2, '2', '2', 2, 2),
(5, 2, '1', 'ke', 1, 11),
(6, 0, '', '', 0, 0),
(7, 0, '', '', 0, 0),
(8, 0, '', '', 0, 0),
(9, 0, '', '', 0, 0),
(10, 0, '', '', 0, 0),
(11, 0, '', '', 0, 0),
(12, 0, '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_group_email_address`
--

CREATE TABLE `hotel_group_email_address` (
  `Email_address` varchar(45) NOT NULL,
  `Hotel_group_Hotel_group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotel_group_email_address`
--

INSERT INTO `hotel_group_email_address` (`Email_address`, `Hotel_group_Hotel_group_id`) VALUES
('', 6),
('', 7),
('', 8),
('', 9),
('', 10),
('', 11),
('', 12),
('dka', 5);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_group_phone_number`
--

CREATE TABLE `hotel_group_phone_number` (
  `Phone_number` int(11) NOT NULL,
  `Hotel_group_Hotel_group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotel_group_phone_number`
--

INSERT INTO `hotel_group_phone_number` (`Phone_number`, `Hotel_group_Hotel_group_id`) VALUES
(0, 6),
(0, 7),
(0, 8),
(0, 9),
(0, 10),
(0, 11),
(0, 12),
(2, 4),
(2147483647, 3),
(2147483647, 5);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_phone_number`
--

CREATE TABLE `hotel_phone_number` (
  `Phone_number` int(11) NOT NULL,
  `Hotel_Hotel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_room`
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

-- --------------------------------------------------------

--
-- Table structure for table `payment transaction`
--

CREATE TABLE `payment transaction` (
  `Payment_Amount` int(11) NOT NULL,
  `Payment_Method` varchar(45) NOT NULL,
  `Rents_Customer_IRSnumber` int(11) NOT NULL,
  `Rents_Employee_IRSnumber` int(11) NOT NULL,
  `Rents_Hotel_room_Room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rents`
--

CREATE TABLE `rents` (
  `Customer_IRSnumber` int(11) NOT NULL,
  `Hotel_room_Room_id` int(11) NOT NULL,
  `Employee_IRSnumber` int(11) NOT NULL,
  `Start_date` date NOT NULL,
  `Finish_date` date NOT NULL,
  `Payment_amount` int(11) NOT NULL,
  `Payment_method` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

CREATE TABLE `reserves` (
  `Customer_IRSnumber` int(11) NOT NULL,
  `Hotel_room_Room_id` int(11) NOT NULL,
  `Start_date` date NOT NULL,
  `Paid` int(11) NOT NULL,
  `FInish_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `Employee_IRSnumber` int(11) NOT NULL,
  `Hotel_Hotel_id` int(11) NOT NULL,
  `Start_date` date NOT NULL,
  `Position` varchar(45) NOT NULL,
  `FInish_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`Amenities_id`,`Room_id`),
  ADD KEY `fk_Room_id_Hotel_room_idx` (`Room_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`IRSnumber`),
  ADD UNIQUE KEY `SSN_UNIQUE` (`SSN`),
  ADD UNIQUE KEY `First_registration_UNIQUE` (`First_registration`),
  ADD UNIQUE KEY `IRSnumber_UNIQUE` (`IRSnumber`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`IRSnumber`),
  ADD UNIQUE KEY `SSN_UNIQUE` (`SSN`),
  ADD UNIQUE KEY `IRSnumber_UNIQUE` (`IRSnumber`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`Hotel_id`),
  ADD UNIQUE KEY `Hotel_id_UNIQUE` (`Hotel_id`),
  ADD KEY `fk_Hotel_Hotel_group_idx` (`Hotel_group_id`);

--
-- Indexes for table `hotel_email_address`
--
ALTER TABLE `hotel_email_address`
  ADD PRIMARY KEY (`Hotel_Hotel_id`,`Email_address`);

--
-- Indexes for table `hotel_group`
--
ALTER TABLE `hotel_group`
  ADD PRIMARY KEY (`Hotel_group_id`),
  ADD UNIQUE KEY `Hotel_group_id_UNIQUE` (`Hotel_group_id`);

--
-- Indexes for table `hotel_group_email_address`
--
ALTER TABLE `hotel_group_email_address`
  ADD PRIMARY KEY (`Email_address`,`Hotel_group_Hotel_group_id`),
  ADD KEY `fk_Hotel_group_email_address_Hotel_group1_idx` (`Hotel_group_Hotel_group_id`);

--
-- Indexes for table `hotel_group_phone_number`
--
ALTER TABLE `hotel_group_phone_number`
  ADD PRIMARY KEY (`Phone_number`,`Hotel_group_Hotel_group_id`),
  ADD KEY `fk_Hotel_group_phone_number_Hotel_group1_idx` (`Hotel_group_Hotel_group_id`);

--
-- Indexes for table `hotel_phone_number`
--
ALTER TABLE `hotel_phone_number`
  ADD PRIMARY KEY (`Phone_number`,`Hotel_Hotel_id`),
  ADD KEY `fk_Hotel_phone_number_Hotel1_idx` (`Hotel_Hotel_id`);

--
-- Indexes for table `hotel_room`
--
ALTER TABLE `hotel_room`
  ADD PRIMARY KEY (`Room_id`,`Hotel_id`),
  ADD UNIQUE KEY `Room_id_UNIQUE` (`Room_id`),
  ADD KEY `fk_Hotel_id_Hotel_idx` (`Hotel_id`);

--
-- Indexes for table `payment transaction`
--
ALTER TABLE `payment transaction`
  ADD PRIMARY KEY (`Rents_Customer_IRSnumber`,`Rents_Employee_IRSnumber`,`Rents_Hotel_room_Room_id`);

--
-- Indexes for table `rents`
--
ALTER TABLE `rents`
  ADD PRIMARY KEY (`Customer_IRSnumber`,`Employee_IRSnumber`,`Hotel_room_Room_id`),
  ADD UNIQUE KEY `fk_Customer_Employee_Hotel_room` (`Customer_IRSnumber`,`Hotel_room_Room_id`,`Employee_IRSnumber`),
  ADD KEY `fk_Rents_Customer1_idx` (`Customer_IRSnumber`),
  ADD KEY `fk_Rents_Hotel_room1_idx` (`Hotel_room_Room_id`),
  ADD KEY `fk_Rents_Employee1_idx` (`Employee_IRSnumber`);

--
-- Indexes for table `reserves`
--
ALTER TABLE `reserves`
  ADD UNIQUE KEY `fk_Reserves_CustomerIRS_HotelroomRoomid` (`Customer_IRSnumber`,`Hotel_room_Room_id`),
  ADD KEY `fk_Reserves_Customer1_idx` (`Customer_IRSnumber`),
  ADD KEY `fk_Reserves_Hotel_room1_idx` (`Hotel_room_Room_id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD UNIQUE KEY `fk_IRS_ID` (`Employee_IRSnumber`,`Hotel_Hotel_id`),
  ADD KEY `fk_Works_Employee_idx` (`Employee_IRSnumber`),
  ADD KEY `fk_Works_Hotel1_idx` (`Hotel_Hotel_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `Hotel_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel_group`
--
ALTER TABLE `hotel_group`
  MODIFY `Hotel_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hotel_room`
--
ALTER TABLE `hotel_room`
  MODIFY `Room_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `amenities`
--
ALTER TABLE `amenities`
  ADD CONSTRAINT `fk_Room_id_Hotel_room` FOREIGN KEY (`Room_id`) REFERENCES `hotel_room` (`Room_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `fk_Hotel_Hotel_group` FOREIGN KEY (`Hotel_group_id`) REFERENCES `hotel_group` (`Hotel_group_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `hotel_email_address`
--
ALTER TABLE `hotel_email_address`
  ADD CONSTRAINT `fk_Hotel_email_address_Hotel1` FOREIGN KEY (`Hotel_Hotel_id`) REFERENCES `hotel` (`Hotel_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `hotel_group_email_address`
--
ALTER TABLE `hotel_group_email_address`
  ADD CONSTRAINT `fk_Hotel_group_email_address_Hotel_group1` FOREIGN KEY (`Hotel_group_Hotel_group_id`) REFERENCES `hotel_group` (`Hotel_group_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `hotel_group_phone_number`
--
ALTER TABLE `hotel_group_phone_number`
  ADD CONSTRAINT `fk_Hotel_group_phone_number_Hotel_group1` FOREIGN KEY (`Hotel_group_Hotel_group_id`) REFERENCES `hotel_group` (`Hotel_group_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `hotel_phone_number`
--
ALTER TABLE `hotel_phone_number`
  ADD CONSTRAINT `fk_Hotel_phone_number_Hotel1` FOREIGN KEY (`Hotel_Hotel_id`) REFERENCES `hotel` (`Hotel_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `hotel_room`
--
ALTER TABLE `hotel_room`
  ADD CONSTRAINT `fk_Hotel_id_Hotel` FOREIGN KEY (`Hotel_id`) REFERENCES `hotel` (`Hotel_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment transaction`
--
ALTER TABLE `payment transaction`
  ADD CONSTRAINT `fk_Payment Transaction_Rents1` FOREIGN KEY (`Rents_Customer_IRSnumber`,`Rents_Employee_IRSnumber`,`Rents_Hotel_room_Room_id`) REFERENCES `rents` (`Customer_IRSnumber`, `Employee_IRSnumber`, `Hotel_room_Room_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rents`
--
ALTER TABLE `rents`
  ADD CONSTRAINT `fk_Rents_Customer1` FOREIGN KEY (`Customer_IRSnumber`) REFERENCES `customer` (`IRSnumber`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Rents_Employee1` FOREIGN KEY (`Employee_IRSnumber`) REFERENCES `employee` (`IRSnumber`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Rents_Hotel_room1` FOREIGN KEY (`Hotel_room_Room_id`) REFERENCES `hotel_room` (`Room_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `fk_Reserves_Customer1` FOREIGN KEY (`Customer_IRSnumber`) REFERENCES `customer` (`IRSnumber`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Reserves_Hotel_room1` FOREIGN KEY (`Hotel_room_Room_id`) REFERENCES `hotel_room` (`Room_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `works`
--
ALTER TABLE `works`
  ADD CONSTRAINT `fk_Works_Employee` FOREIGN KEY (`Employee_IRSnumber`) REFERENCES `employee` (`IRSnumber`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Works_Hotel1` FOREIGN KEY (`Hotel_Hotel_id`) REFERENCES `hotel` (`Hotel_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
