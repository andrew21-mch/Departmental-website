-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 25, 2021 at 04:37 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Student_Db`
--

-- --------------------------------------------------------

--
-- Table structure for table `Student_Table`
--

CREATE TABLE `Student_Table` (
  `Student_Matricule` varchar(15) NOT NULL,
  `Student_name` varchar(150) NOT NULL,
  `Student_Email` varchar(150) NOT NULL,
  `Student_Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Student_Table`
--

INSERT INTO `Student_Table` (`Student_Matricule`, `Student_name`, `Student_Email`, `Student_Password`) VALUES
('bbnn', 'mat33', 'nfonar@gmail.com', '123456789'),
('mat83', 'nfon', 'nfonandrew@gmail.com', 'nfonandrew@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Student_Table`
--
ALTER TABLE `Student_Table`
  ADD PRIMARY KEY (`Student_Matricule`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
