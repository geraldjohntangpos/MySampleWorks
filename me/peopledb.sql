-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2015 at 02:50 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `peopledb`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Student_ID` int(11) NOT NULL,
  `Family_Name` varchar(31) CHARACTER SET latin1 NOT NULL,
  `First_Name` varchar(31) CHARACTER SET latin1 NOT NULL,
  `Course` varchar(9) CHARACTER SET latin1 NOT NULL,
  `Year_Level` int(11) NOT NULL,
  `Email_Address` varchar(45) CHARACTER SET latin1 NOT NULL,
  `Mobile_Number` varchar(13) CHARACTER SET latin1 NOT NULL,
  `Home_Address` varchar(45) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin AUTO_INCREMENT=46 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `Student_ID`, `Family_Name`, `First_Name`, `Course`, `Year_Level`, `Email_Address`, `Mobile_Number`, `Home_Address`) VALUES
(1, 13198379, 'Tangpos', 'Gerald John', 'BSIT', 3, 'gtangpos@yahoo.com', '+639331247584', 'Cebu City'),
(2, 13178751, 'Gonzales', 'Sherwin', 'BSIT', 3, 'sherwin@yahoo.com', '+63984928394', 'Camotes Island'),
(17, 23423423, 'Tangpos', 'Gerald John', 'BSIT', 3, 'gerald123@gmail.com', '+639999999999', 'Cebu City'),
(18, 12312312, 'Tangpos', 'Gerald John', 'BSIT', 3, 'gerald123@yahoo.com', '+639382729482', 'Manila'),
(20, 34849398, 'Natural', 'Kervin', 'BEED', 4, 'kevnat@gmail.com', '+639983958472', 'House'),
(21, 98984938, 'Apurado', 'Francisco', 'BSN', 2, 'aps@yahoo.com', '+639993827183', 'Our House'),
(22, 93283928, 'Punong', 'Belchristel', 'ACT', 2, 'belbel@yahoo.com', '+639382754849', 'Home Address'),
(23, 28392839, 'Zuckerberg', 'Mark', 'BSIT', 4, 'mark@gmail.com', '+639999911111', 'Facebook'),
(24, 11111111, 'Taylaran', 'Diane', 'BSIT', 3, 'yan@yahoo.com', '+639382738492', 'House'),
(25, 83728029, 'Levine', 'Adam', 'BSCE', 1, 'adam@gmail.com', '+639993827382', 'Usa'),
(26, 89482738, 'Empacis', 'Myles', 'BSIT', 3, 'myles@gmail.com', '+639999382837', 'Car Car City Cebu'),
(27, 73782938, 'Jacaban', 'Klyde', 'BSCE', 4, 'klyde@yahoo.com', '+639999999999', 'Bisan Asa'),
(28, 39282738, 'Family Name', 'First Name', 'ACT', 1, 'email@yahoo.com', '+639382938299', 'Home Address'),
(29, 48439283, 'Esguerra', 'Emmarel Jane', 'BSIT', 3, 'maryang@gmail.com', '+639938291839', 'Sa Ilang Balay'),
(30, 74839302, 'Haincadto Jr.', 'Benjamin', 'BSIT', 4, 'bench12334@yahoo.com', '+639847392871', 'Cute Pardo'),
(31, 73829827, 'Sarsoza', 'Jireh', 'BSIT', 3, 'jaijai@yahoo.com', '+639837292837', 'Toledo'),
(33, 12345678, 'Gerald ', 'Amancio', 'BSHRM', 3, 'gerald123@yahoo.com', '+639221231234', 'Sa Saya Sa Iyang Mama'),
(34, 56874598, 'Apurado', 'Francisco Edsa', 'BSIT', 3, 'edsamine@yahoo.com', '+639839283748', 'Sa Edsa'),
(35, 94594837, 'Daal', 'Faith', 'BSIT', 3, 'faith@yahoo.com', '+639938271872', 'Sa Ilang Baryo'),
(36, 88447739, 'Sacurom', 'Wenalyn', 'ACT', 2, 'wenwen@yahoo.com', '+639038278378', 'Balay Nila. Asa Pa Man Diay'),
(37, 84782893, 'Olmedo', 'Jane', 'BSIT', 3, 'badjao@yahoo.com', '+639938293829', 'Mambaling House Of Badjaos'),
(38, 83928372, 'Pata', 'Jullie Ann', 'BSIT', 3, 'ddai@yahoo.com', '+639903928372', 'Mambaling House Of Badjaos'),
(39, 75746638, 'Orbeta', 'Jennie', 'ACT', 2, 'jenjen@gmail.com', '+639938298372', 'Sa Iyang Heart'),
(40, 99839283, 'Cataraja', 'Gian Carlo', 'BSIT', 4, 'gian@gmail.com', '+639382718392', 'Faculty Room'),
(41, 83728928, 'Tolentino', 'Marijoy', 'BSIT', 3, 'joyjoy@gmail.com', '+639903928372', 'House'),
(42, 84938271, 'Saromines', 'Mariza', 'BSIT', 3, 'dondie@gmail.com', '+639382718392', 'House Of The Representative'),
(43, 85493489, 'Fajardo', 'Lucia', 'BSIT', 3, 'lucy@yahoo.com', '+639382738291', 'Bahay Kubo'),
(44, 84938473, 'Haincadto Jr.', 'Benjamin', 'BSIT', 3, 'bench12334@gmail.com', '+639382738293', 'Bench Body'),
(45, 83492839, 'Villason', 'Jonathan', 'BSIT', 3, 'jonathan@yahoo.com', '+639849378283', 'House Of Java');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
