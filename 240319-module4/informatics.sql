-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 05:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `informatics`
--

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `id` int(11) NOT NULL,
  `student_id` varchar(10) NOT NULL,
  `course_name` varchar(45) NOT NULL,
  `numeric_score` int(101) NOT NULL,
  `alphabet_score` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`id`, `student_id`, `course_name`, `numeric_score`, `alphabet_score`) VALUES
(4, 'l200080002', 'Kapita Selekta', 60, 'BC'),
(5, 'l200080010', 'Pemrograman Web', 87, 'A'),
(6, 'l200080080', 'Pemrograman Web', 90, 'A');

-- --------------------------------------------------------

--
-- Stand-in structure for view `src`
-- (See below for the actual view)
--
CREATE TABLE `src` (
`student_id` varchar(10)
,`course_name` varchar(45)
,`numeric_score` int(101)
,`alphabet_score` char(5)
);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` varchar(10) NOT NULL,
  `name` char(50) DEFAULT NULL,
  `class` char(5) DEFAULT NULL,
  `address` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `class`, `address`) VALUES
('l200008080', 'Tya', 'B', 'Sragen'),
('l200080001', 'Ari Wibowo', 'A', 'Solo'),
('l200080002', 'Freya', 'A', 'Yogyakarta'),
('l200080010', 'Gita', 'A', 'Tangerang'),
('l200080011', 'Michie', 'B', 'Jakarta'),
('L200080080', 'Agustina Anggraini', 'B', 'Sragen');

-- --------------------------------------------------------

--
-- Structure for view `src`
--
DROP TABLE IF EXISTS `src`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `src`  AS SELECT `student`.`student_id` AS `student_id`, `score`.`course_name` AS `course_name`, `score`.`numeric_score` AS `numeric_score`, `score`.`alphabet_score` AS `alphabet_score` FROM (`student` join `score` on(`student`.`student_id` = `score`.`student_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_book_author` (`student_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `fk_book_author` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
