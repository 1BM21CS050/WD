-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Aug 17, 2023 at 06:49 PM
-- Server version: 8.0.34
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book collection drive`
--

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `Location` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Subject` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `collection`
--

INSERT INTO `collection` (`Location`, `Subject`, `Quantity`) VALUES
('BMSCE', 'Math', 20),
('BMSCE', 'English', 6),
('BMSCE', 'Computer', 10),
('BMSCE', 'Chemistry', 8),
('BMSCE', 'Physics', 15),
('BMSCE', 'Biology', 17),
('bmsce', 'Comp', 2),
('bmsce', 'Hindi', 13),
('bmsce', 'English', 24),
('bmsce', 'Math', 20),
('bmsce', 'Kannada', 12),
('bmsce', 'Chemistry', 23),
('BMS', 'Math ', 20),
('BMS', 'English', 10),
('BMS', '', 0),
('BMS', '', 0),
('BMS', '', 0),
('BMS', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `distribution`
--

CREATE TABLE `distribution` (
  `Location` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `Subject` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `Quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `distribution`
--

INSERT INTO `distribution` (`Location`, `Subject`, `Quantity`) VALUES
('BMS', 'Math', 5),
('BMS', 'Chemistry', 7),
('BMS', 'Physics', 2),
('BMS', 'English', 4),
('BMS', 'Hindi', 3),
('BMS', 'Computer', 9),
('BMSCE', 'ENGLISH', 5),
('BMSCE', 'MATHS', 15),
('BMSCE', 'HINDI', 10),
('BMSCE', 'PHYSICS', 23),
('BMSCE', 'CHEMISTRY', 10),
('BMSCE', 'BIOLOGY', 12),
('bms', '', 0),
('bms', '', 0),
('bms', '', 0),
('bms', '', 0),
('bms', '', 0),
('bms', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`) VALUES
('deepini.cs21@bmsce.ac.in', '1BM21CS050'),
('revanth.cs21@bmsce.ac.in', '1BM21CS047'),
('revanth.cs22@bmsce.ac.in', '1bm21cs047'),
('deepini.cs21@bmsce.ac.in', '1BM21CS050');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Confirmpassword` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Email`, `Password`, `Confirmpassword`) VALUES
('', '', ''),
('', '', ''),
('deepini.cs21@bmsce.ac.in', '1BM21CS050', '1BM21CS050'),
('deepini.cs21@bmsce.ac.in', '1BM21CS050', '1BM21CS050');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
