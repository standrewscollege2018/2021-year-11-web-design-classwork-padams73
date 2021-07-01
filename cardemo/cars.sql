-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 08:40 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--
CREATE DATABASE IF NOT EXISTS `cars` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cars`;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `carID` int(3) NOT NULL,
  `numberplate` varchar(7) NOT NULL,
  `colour` varchar(15) NOT NULL,
  `driver` varchar(30) NOT NULL,
  `make` varchar(15) NOT NULL,
  `makeID` int(2) NOT NULL,
  `model` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`carID`, `numberplate`, `colour`, `driver`, `make`, `makeID`, `model`) VALUES
(1, 'ABC123', 'Red', 'John Smith', 'Toyota', 1, 'Corolla'),
(2, 'CPM321', 'Red', 'Bob Roberts', 'Toyota', 1, 'Prius'),
(3, 'ZZ999', 'Brown', 'Joe Bloggs', 'Kia', 2, 'Niro'),
(4, 'MBW44', 'Dark Blue', 'Paul Smith', 'Kia', 2, 'Niro'),
(5, 'FAAAST', 'Black', 'Elon Musk', 'Tesla', 3, 'Roadster'),
(6, 'OLD111', 'Brown', 'Miss Daisy', 'Ford', 4, 'Model T'),
(7, 'I8A4RE', 'Red', 'Steve Sanders', 'Chevrolet', 5, 'Corvette'),
(8, 'BGF211', 'Yellow', 'Brandon Walsh', 'Ford', 4, 'Mustang'),
(9, 'CCA990', 'White', 'Jason Johns', 'Mini', 6, 'Cooper'),
(10, 'ZX9987', 'White', 'Logan Paul', 'Mini', 6, 'Countryman');

-- --------------------------------------------------------

--
-- Table structure for table `make`
--

CREATE TABLE `make` (
  `makeID` int(1) NOT NULL,
  `make` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `make`
--

INSERT INTO `make` (`makeID`, `make`) VALUES
(1, 'Toyota'),
(2, 'Kia'),
(3, 'Tesla'),
(4, 'Ford'),
(5, 'Chevrolet'),
(6, 'Mini');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`carID`);

--
-- Indexes for table `make`
--
ALTER TABLE `make`
  ADD PRIMARY KEY (`makeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `carID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `make`
--
ALTER TABLE `make`
  MODIFY `makeID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
