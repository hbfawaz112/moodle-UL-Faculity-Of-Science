-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 11:07 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helperexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `username`, `password`) VALUES
(1, 'admin Full Name', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `major` varchar(255) NOT NULL,
  `semestre` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_name`, `major`, `semestre`, `language`, `year`) VALUES
(1, 'I1100', 'Introduction a linfo', 'Informatic', 'First', 'Francais', 'First'),
(2, 'M1100', 'Algebre 1', 'Informatic', 'First', 'Francais', 'First'),
(3, 'M1101', 'Analyse 1', 'Informatic', 'First', 'Francais', 'First'),
(4, 'P1100', 'Mecanique 1', 'Informatic', 'First', 'Francais', 'First'),
(5, 'P1101', 'Electromanentisme', 'Informatic', 'First', 'Francais', 'First'),
(6, 'S1100', 'Statistique', 'Informatic', 'First', 'Francais', 'First'),
(7, 'M1102', 'Algebre 2', 'Informatic', 'Second', 'Francais', 'First'),
(8, 'M1103', 'Algebre 3', 'Informatic', 'Second', 'Francais', 'First'),
(9, 'M1104', 'Analyse 2', 'Informatic', 'Second', 'Francais', 'First'),
(10, 'M1105', 'Analyse 3', 'Informatic', 'Second', 'Francais', 'First'),
(11, 'M1106', 'Analyse 4', 'Informatic', 'Second', 'Francais', 'First'),
(12, 'I1100', 'Introduction a linfo', 'Math', 'First', 'Francais', 'First'),
(13, 'M1100', 'Algebre 1', 'Math', 'First', 'Francais', 'First'),
(14, 'M1101', 'Analyse 1', 'Math', 'First', 'Francais', 'First'),
(15, 'P1100', 'Mecanique 1', 'Math', 'First', 'Francais', 'First'),
(16, 'P1101', 'Electromanentisme', 'Math', 'First', 'Francais', 'First'),
(17, 'S1100', 'Statistique', 'Math', 'First', 'Francais', 'First'),
(18, 'M1102', 'Algebre 2', 'Math', 'Second', 'Francais', 'First'),
(19, 'M1103', 'Algebre 3', 'Math', 'Second', 'Francais', 'First'),
(20, 'M1104', 'Analyse 2', 'Math', 'Second', 'Francais', 'First'),
(21, 'M1105', 'Analyse 3', 'Math', 'Second', 'Francais', 'First'),
(22, 'M1106', 'Analyse 4', 'Math', 'Second', 'Francais', 'First'),
(23, 'I1100', 'Introduction a linfo', 'Physic', 'First', 'Francais', 'First'),
(24, 'M1100', 'Algebre 1', 'Physic', 'First', 'Francais', 'First'),
(25, 'M1101', 'Analyse 1', 'Physic', 'First', 'Francais', 'First'),
(26, 'P1100', 'Mecanique 1', 'Physic', 'First', 'Francais', 'First'),
(27, 'P1101', 'Electromanentisme', 'Physic', 'First', 'Francais', 'First'),
(28, 'S1100', 'Statistique', 'Physic', 'First', 'Francais', 'First'),
(29, 'M1107', 'Analyse pour phys', 'Physic', 'Second', 'Francais', 'First'),
(30, 'M1108', 'Algebre pour pyys', 'Physic', 'Second', 'Francais', 'First'),
(31, 'P1102', 'Ondes', 'Physic', 'Second', 'Francais', 'First'),
(32, 'P1103', 'Thermo', 'Physic', 'Second', 'Francais', 'First'),
(33, 'C1101', 'Chimie General', 'Physic', 'Second', 'Francais', 'First'),
(34, 'I1100', 'Introduction a linfo', 'Informatic', 'First', 'English', 'First'),
(35, 'M1100', 'Algebre 1', 'Informatic', 'First', 'English', 'First'),
(36, 'M1101', 'Analyse 1', 'Informatic', 'First', 'English', 'First'),
(37, 'P1100', 'Mecanique 1', 'Informatic', 'First', 'English', 'First'),
(38, 'P1101', 'Electromanentisme', 'Informatic', 'First', 'English', 'First'),
(39, 'S1100', 'Statistique', 'Informatic', 'First', 'English', 'First'),
(40, 'M1102', 'Algebre 2', 'Informatic', 'Second', 'English', 'First'),
(41, 'M1103', 'Algebre 3', 'Informatic', 'Second', 'English', 'First'),
(42, 'M1104', 'Analyse 2', 'Informatic', 'Second', 'English', 'First'),
(43, 'M1105', 'Analyse 3', 'Informatic', 'Second', 'English', 'First'),
(44, 'M1106', 'Analyse 4', 'Informatic', 'Second', 'English', 'First'),
(45, 'I1100', 'Introduction a linfo', 'Math', 'First', 'English', 'First'),
(46, 'M1100', 'Algebre 1', 'Math', 'First', 'English', 'First'),
(47, 'M1101', 'Analyse 1', 'Math', 'First', 'English', 'First'),
(48, 'P1100', 'Mecanique 1', 'Math', 'First', 'English', 'First'),
(49, 'P1101', 'Electromanentisme', 'Math', 'First', 'English', 'First'),
(50, 'S1100', 'Statistique', 'Math', 'First', 'English', 'First'),
(51, 'M1102', 'Algebre 2', 'Math', 'Second', 'English', 'First'),
(52, 'M1103', 'Algebre 3', 'Math', 'Second', 'English', 'First'),
(53, 'M1104', 'Analyse 2', 'Math', 'Second', 'English', 'First'),
(54, 'M1105', 'Analyse 3', 'Math', 'Second', 'English', 'First'),
(55, 'M1106', 'Analyse 4', 'Math', 'Second', 'English', 'First'),
(56, 'I1100', 'Introduction a linfo', 'Physic', 'First', 'English', 'First'),
(57, 'M1100', 'Algebre 1', 'Physic', 'First', 'English', 'First'),
(58, 'M1101', 'Analyse 1', 'Physic', 'First', 'English', 'First'),
(59, 'P1100', 'Mecanique 1', 'Physic', 'First', 'English', 'First'),
(60, 'P1101', 'Electromanentisme', 'Physic', 'First', 'English', 'First'),
(61, 'S1100', 'Statistique', 'Physic', 'First', 'English', 'First'),
(62, 'M1107', 'Analyse pour phys', 'Physic', 'Second', 'English', 'First'),
(63, 'M1108', 'Algebre pour pyys', 'Physic', 'Second', 'English', 'First'),
(64, 'P1102', 'Ondes', 'Physic', 'Second', 'English', 'First'),
(65, 'P1103', 'Thermo', 'Physic', 'Second', 'English', 'First'),
(66, 'C1101', 'Chimie General', 'Physic', 'Second', 'English', 'First'),
(67, 'I3301', 'Genie Logiciel', 'Informatic', 'First', 'Francais', 'Third'),
(68, 'I3302', 'PHP', 'Informatic', 'First', 'Francais', 'Third'),
(69, 'I3303', 'OS II', 'Informatic', 'First', 'Francais', 'Third'),
(70, 'I3304', 'Network II', 'Informatic', 'First', 'Francais', 'Third'),
(71, 'I3305', 'GUI', 'Informatic', 'First', 'Francais', 'Third'),
(72, 'I3306', 'Data Base II', 'Informatic', 'First', 'Francais', 'Third'),
(73, 'I3350', 'Android', 'Informatic', 'First', 'Francais', 'Third'),
(74, 'I3307', 'Theorie de language', 'Informatic', 'Second', 'Francais', 'Third'),
(75, 'I3330', 'Project Mengament', 'Informatic', 'Second', 'Francais', 'Third'),
(76, 'I3332', 'ASP.NET', 'Informatic', 'Second', 'Francais', 'Third'),
(77, 'I3333', 'Synthese D\'image', 'Informatic', 'Second', 'Francais', 'Third'),
(78, 'I3341', 'Advanced Data Structure', 'Informatic', 'Second', 'Francais', 'Third'),
(79, 'I3344', 'Simulation python', 'Informatic', 'Second', 'Francais', 'Third'),
(80, 'I3301', 'Genie Logiciel', 'Informatic', 'First', 'English', 'Third'),
(81, 'I3302', 'PHP', 'Informatic', 'First', 'English', 'Third'),
(82, 'I3303', 'OS II', 'Informatic', 'First', 'English', 'Third'),
(83, 'I3304', 'Network II', 'Informatic', 'First', 'English', 'Third'),
(84, 'I3305', 'GUI', 'Informatic', 'First', 'English', 'Third'),
(85, 'I3306', 'Data Base II', 'Informatic', 'First', 'English', 'Third'),
(86, 'I3350', 'Android', 'Informatic', 'First', 'English', 'Third'),
(87, 'I3307', 'Theorie de language', 'Informatic', 'Second', 'English', 'Third'),
(88, 'I3330', 'Project Mengament', 'Informatic', 'Second', 'English', 'Third'),
(89, 'I3332', 'ASP.NET', 'Informatic', 'Second', 'English', 'Third'),
(90, 'I3333', 'Synthese D\'image', 'Informatic', 'Second', 'English', 'Third'),
(91, 'I3341', 'Advanced Data Structure', 'Informatic', 'Second', 'English', 'Third'),
(92, 'I3344', 'Simulation python', 'Informatic', 'Second', 'English', 'Third'),
(93, 'I2201', 'HTML/CSS/JS', 'Informatic', 'First', 'Francais', 'Second'),
(94, 'I2202', 'Architect I', 'Informatic', 'First', 'Francais', 'Second'),
(95, 'I2203', 'OS I', 'Informatic', 'First', 'Francais', 'Second'),
(96, 'I2204', 'Imperativ Programaing C', 'Informatic', 'First', 'Francais', 'Second'),
(97, 'I2205', 'Graph Theorie', 'Informatic', 'First', 'Francais', 'Second'),
(98, 'M2250', 'Algebre Info', 'Informatic', 'First', 'Francais', 'Second'),
(99, 'M2251', 'Analyse Numeric', 'Informatic', 'First', 'Francais', 'Second'),
(100, 'S2250', 'Stat', 'Informatic', 'First', 'Francais', 'Second'),
(101, 'I2201', 'HTML/CSS/JS', 'Informatic', 'First', 'English', 'Second'),
(102, 'I2202', 'Architect I', 'Informatic', 'First', 'English', 'Second'),
(103, 'I2203', 'OS I', 'Informatic', 'First', 'English', 'Second'),
(104, 'I2204', 'Imperativ Programaing C', 'Informatic', 'First', 'English', 'Second'),
(105, 'I2205', 'Graph Theorie', 'Informatic', 'First', 'English', 'Second'),
(106, 'M2250', 'Algebre Info', 'Informatic', 'First', 'English', 'Second'),
(107, 'M2251', 'Numeric Analysis (Matlab)', 'Informatic', 'First', 'English', 'Second'),
(108, 'S2250', 'Stat', 'Informatic', 'First', 'English', 'Second'),
(109, 'P2200', 'P2200_NAME', 'Physic', 'First', 'Francais', 'Second'),
(110, 'P2201', 'P2200_NAME', 'Physic', 'First', 'Francais', 'Second'),
(111, 'P2202', 'P2200_NAME', 'Physic', 'First', 'Francais', 'Second'),
(112, 'P2203', 'P2200_NAME', 'Physic', 'First', 'Francais', 'Second'),
(113, 'M2270', 'M2270_NAME', 'Physic', 'First', 'Francais', 'Second'),
(114, 'I2270', 'I2270_NAME', 'Physic', 'First', 'Francais', 'Second'),
(115, 'M2271', 'M2271_NAME', 'Physic', 'Second', 'Francais', 'Second'),
(116, 'M2272', 'M2272_NAME', 'Physic', 'Second', 'Francais', 'Second'),
(117, 'P2204', 'P2204_NAME', 'Physic', 'Second', 'Francais', 'Second'),
(118, 'P2205', 'P2205_NAME', 'Physic', 'Second', 'Francais', 'Second'),
(119, 'P2206', 'P2206_NAME', 'Physic', 'Second', 'Francais', 'Second'),
(120, 'P2211', 'P2211_NAME', 'Physic', 'Second', 'Francais', 'Second'),
(121, 'P2212', 'P2212_NAME', 'Physic', 'Second', 'Francais', 'Second'),
(122, 'P2213', 'P2213_NAME', 'Physic', 'Second', 'Francais', 'Second'),
(123, 'P2200', 'P2200_NAME', 'Physic', 'First', 'English', 'Second'),
(124, 'P2201', 'P2200_NAME', 'Physic', 'First', 'English', 'Second'),
(125, 'P2202', 'P2200_NAME', 'Physic', 'First', 'English', 'Second'),
(126, 'P2203', 'P2200_NAME', 'Physic', 'First', 'English', 'Second'),
(127, 'M2270', 'M2270_NAME', 'Physic', 'First', 'English', 'Second'),
(128, 'I2270', 'I2270_NAME', 'Physic', 'First', 'English', 'Second'),
(129, 'M2271', 'M2271_NAME', 'Physic', 'Second', 'English', 'Second'),
(130, 'M2272', 'M2272_NAME', 'Physic', 'Second', 'English', 'Second'),
(131, 'P2204', 'P2204_NAME', 'Physic', 'Second', 'English', 'Second'),
(132, 'P2205', 'P2205_NAME', 'Physic', 'Second', 'English', 'Second'),
(133, 'P2206', 'P2206_NAME', 'Physic', 'Second', 'English', 'Second'),
(134, 'P2211', 'P2211_NAME', 'Physic', 'Second', 'English', 'Second'),
(135, 'P2212', 'P2212_NAME', 'Physic', 'Second', 'English', 'Second'),
(136, 'P2213', 'P2213_NAME', 'Physic', 'Second', 'English', 'Second');

-- --------------------------------------------------------

--
-- Table structure for table `matier1`
--

CREATE TABLE `matier1` (
  `matier_id` int(11) NOT NULL,
  `matier_name` varchar(255) NOT NULL,
  `major_name` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `semestre` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matier1`
--

INSERT INTO `matier1` (`matier_id`, `matier_name`, `major_name`, `year`, `semestre`, `language`, `userid`) VALUES
(1, 'I1100', 'Informatic', 'First', 'Fisrt', 'Francais', 1),
(2, 'M1100', 'Math', 'First', 'Fisrt', 'Francais', 2),
(3, 'I3305', 'Informatic', 'Third', 'Fisrt', 'Francais', 1),
(4, 'I3306', 'Informatic', 'Third', 'Fisrt', 'English', 1),
(5, 'I2203', 'Informatic', 'Second', 'Fisrt', 'Francais', 3),
(6, 'P2201', 'Physics', 'Second', 'Fisrt', 'Francais', 4),
(7, 'M1106', 'Math', 'First', 'Second', 'Francais', 5),
(8, 'I2206', 'Informatic', 'Second', 'Second', 'Francais', 1),
(9, 'I2204', 'Informatic', 'First', 'Fisrt', 'English', 1),
(10, 'I3303', 'Informatic', 'Third', 'Fisrt', 'Francais', 1);

-- --------------------------------------------------------

--
-- Table structure for table `matiere`
--

CREATE TABLE `matiere` (
  `matiere_id` int(10) UNSIGNED NOT NULL,
  `matiere_name` varchar(100) NOT NULL,
  `faculty_name` varchar(100) NOT NULL,
  `major_name` varchar(100) NOT NULL,
  `major_year` varchar(100) NOT NULL,
  `major_smester` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matiere`
--

INSERT INTO `matiere` (`matiere_id`, `matiere_name`, `faculty_name`, `major_name`, `major_year`, `major_smester`) VALUES
(2, 'm1101', 'science', 'math', 'first', 'first'),
(3, 'm1102', 'science', 'math', 'first', 'first'),
(4, 'm2100', 'science', 'math', 'second', 'first'),
(5, 'm2101', 'science', 'math', 'second', 'first'),
(6, 'm2102', 'science', 'math', 'second', 'first'),
(7, 'm3107', 'science', 'math', 'third', 'second'),
(8, 'm3108', 'science', 'math', 'third', 'second');

-- --------------------------------------------------------

--
-- Table structure for table `pdf_matiere_name`
--

CREATE TABLE `pdf_matiere_name` (
  `pdf_id` int(10) UNSIGNED NOT NULL,
  `pdf_name` varchar(100) NOT NULL,
  `matiere_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdf_matiere_name`
--

INSERT INTO `pdf_matiere_name` (`pdf_id`, `pdf_name`, `matiere_name`) VALUES
(1, 'final_2016', 'm1101'),
(2, 'partiel_2016', 'm1101'),
(3, 'partiel_2020', 'm3306'),
(4, 'final_2020', 'm3306');

-- --------------------------------------------------------

--
-- Table structure for table `pdf_matier_name1`
--

CREATE TABLE `pdf_matier_name1` (
  `pdf_id` int(11) NOT NULL,
  `pdf_name` varchar(256) NOT NULL,
  `matier_name` varchar(256) NOT NULL,
  `matier_option` varchar(256) NOT NULL,
  `matier_lang` varchar(256) NOT NULL,
  `date_of_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdf_matier_name1`
--

INSERT INTO `pdf_matier_name1` (`pdf_id`, `pdf_name`, `matier_name`, `matier_option`, `matier_lang`, `date_of_upload`) VALUES
(1, 'ch1', 'I1100', 'course', 'Francais', '2020-05-12'),
(2, 'ch1', 'M1100', 'course', 'Francais', '2020-05-12'),
(3, 'TD1', 'M1100', 'td', 'Francais', '2020-05-12'),
(4, 'M1100-Final_2018-2019 - FR', 'M1100', 'sessions', 'Francais', '2020-05-12'),
(5, 'ch1', 'I3305', 'course', 'Francais', '2020-05-12'),
(6, 'ch2', 'I3306', 'course', 'English', '2020-05-12'),
(7, 'ch1', 'I2203', 'course', 'Francais', '2020-05-12'),
(8, 'TP1', 'I2203', 'tp', 'Francais', '2020-05-12'),
(9, 'Partiel_2017_2018', 'I2203', 'sessions', 'Francais', '2020-05-12'),
(12, 'ch2', 'I1100', 'course', 'Francais', '2020-05-12'),
(13, 'ch3', 'I1100', 'course', 'Francais', '2020-05-12'),
(14, 'ch4', 'I1100', 'course', 'Francais', '2020-05-12'),
(15, 'ch5', 'I1100', 'course', 'Francais', '2020-05-12'),
(16, 'TD1', 'M1106', 'td', 'Francais', '2020-05-25'),
(17, 'BST-I2206-CH1-FR', 'I2206', 'course', 'Francais', '2020-06-28'),
(18, 'CH1-I2204-EN', 'I2204', 'course', 'English', '2020-06-28'),
(19, '', 'I1100', 'course', 'Francais', '2020-07-27'),
(20, 'Chap5_Cursor', 'I3303', 'course', 'Francais', '2020-08-18'),
(21, 'Chap5_Cursor', 'I2204', 'course', 'English', '2020-08-20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `major` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `username`, `password`, `major`) VALUES
(1, 'Bilal', 'Kanso', 'bilal', '123', 'info'),
(2, 'Rida', 'Jezzini', 'ridajezzini', '123', 'math'),
(3, 'Hussein', 'Shrara', 'HseinShrara', '123', 'info'),
(4, 'Hassan', 'Fawaz', 'jojo', 'bobo', 'Pyhysics'),
(5, 'Hassan', 'Fahes', 'hasanfahes', '123', 'math');

-- --------------------------------------------------------

--
-- Table structure for table `user_st`
--

CREATE TABLE `user_st` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `major` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `student_file_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_st`
--

INSERT INTO `user_st` (`id`, `fname`, `lname`, `username`, `password`, `major`, `year`, `language`, `student_file_number`) VALUES
(1, 'Hussein', 'Fawaz', 'hbfawaz', '123', 'Informatic', 'First', 'Francais', 10988),
(3, 'Hassan', 'Fawaz', 'hbfawaz19', '123', 'Physic', 'First', 'Francais', 10987),
(4, 'Mhmd', 'Khd', 'mhmdkhd', '123', 'Informatic', 'Third', 'Francais', 10580),
(5, 'Hadi', 'Hawi', 'hadihawi', '123', 'Informatic', 'Third', 'English', 12177),
(6, 'Basel', 'Reda', 'baslreda', '123', 'Informatic', 'Second', 'Francais', 10764),
(7, 'Jawad', 'English', 'jawad123', '123', 'Informatic', 'Second', 'English', 11234),
(9, 'Ali', 'Said', 'alisaid', '123', 'Physic', 'Second', 'Francais', 12231);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matier1`
--
ALTER TABLE `matier1`
  ADD PRIMARY KEY (`matier_id`);

--
-- Indexes for table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`matiere_id`);

--
-- Indexes for table `pdf_matiere_name`
--
ALTER TABLE `pdf_matiere_name`
  ADD PRIMARY KEY (`pdf_id`);

--
-- Indexes for table `pdf_matier_name1`
--
ALTER TABLE `pdf_matier_name1`
  ADD PRIMARY KEY (`pdf_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_st`
--
ALTER TABLE `user_st`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `matier1`
--
ALTER TABLE `matier1`
  MODIFY `matier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `matiere_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pdf_matiere_name`
--
ALTER TABLE `pdf_matiere_name`
  MODIFY `pdf_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pdf_matier_name1`
--
ALTER TABLE `pdf_matier_name1`
  MODIFY `pdf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_st`
--
ALTER TABLE `user_st`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
