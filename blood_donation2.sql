-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2024 at 06:22 PM
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
-- Database: `blood_donation2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `blood_details`
--

CREATE TABLE `blood_details` (
  `id` int(11) NOT NULL,
  `blood_type` varchar(10) DEFAULT NULL,
  `blood_amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood_details`
--

INSERT INTO `blood_details` (`id`, `blood_type`, `blood_amount`) VALUES
(11, 'A+', 186),
(12, 'A-', 856),
(13, 'O+', 90),
(14, 'AB+', 67),
(15, 'AB+', 67),
(16, 'B+', 258),
(17, 'A-', 856);

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `blood_group` varchar(10) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `nearest_hospital` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `address`, `blood_group`, `contact`, `nearest_hospital`) VALUES
(9, 'colombo', 'B-', '0765434211', 'Kurunegala General Hospital'),
(11, 'negombo', 'AB-', '0776543123', 'Monaragala General Hospital'),
(12, 'negombo', 'AB-', '0776543123', 'Monaragala General Hospital'),
(14, 'negombo', 'AB-', '0776543123', 'Monaragala General Hospital'),
(15, 'negombo', 'AB-', '0776543123', 'Monaragala General Hospital'),
(16, 'negombo', 'AB-', '0776543123', 'Monaragala General Hospital'),
(17, 'negombo', 'AB-', '0776543123', 'Monaragala General Hospital'),
(18, 'negombo', 'AB-', '0776543123', 'Monaragala General Hospital'),
(19, 'negombo', 'AB-', '0776543123', 'Monaragala General Hospital'),
(20, '128/1,Heeloyagedara,Eththalapitiya\r\nBandarawela', 'A-', '0714930364', 'Batticaloa Teaching Hospital'),
(21, '128/1,Heeloyagedara,Eththalapitiya\r\nBandarawela', 'B-', '0714930364', 'Vavuniya General Hospital'),
(22, 'bulathwathta,badulla', 'B+', '0754231421', 'Badulla General Hospital'),
(23, '128/1,Heeloyagedara,Eththalapitiya\r\nBandarawela', 'A+', '0714930364', 'Vavuniya General Hospital'),
(24, 'anamaduwa,Puttalama', 'O-', '075782929299299', 'Ratnapura General Hospital'),
(26, 'pilimathalawa,Kandy', 'A-', '0714568676', 'Polonnaruwa General Hospital'),
(27, 'pilimathalawa,Kandy', 'A-', '0714568676', 'Polonnaruwa General Hospital'),
(29, 'pilimathalawa,Kandy', 'A-', '0714568676', 'Polonnaruwa General Hospital'),
(31, 'pilimathalawa,Kandy', 'A-', '0714568676', 'Polonnaruwa General Hospital'),
(32, 'pilimathalawa,Kandy', 'A-', '0714568676', 'Polonnaruwa General Hospital'),
(33, 'pilimathalawa,Kandy', 'A-', '0714568676', 'Polonnaruwa General Hospital'),
(34, 'pilimathalawa,Kandy', 'A-', '0714568676', 'Polonnaruwa General Hospital'),
(39, 'pilimathalawa,Kandy', 'A-', '0714568676', 'Polonnaruwa General Hospital'),
(42, 'bulathwathta,badulla', 'AB+', '0754231421', 'Trincomalee General Hospital'),
(43, 'bulathwathta,badulla', 'AB+', '0754231421', 'Trincomalee General Hospital'),
(45, 'bulathwathta,badulla', 'AB+', '0754231421', 'Trincomalee General Hospital'),
(46, 'pampaimadu,Vavuniya', 'B-', '0714835652', 'Hambantota General Hospital'),
(47, 'nelukkulam,vavuniya', 'A+', '0776523111', 'Mannar General Hospital'),
(48, 'nelukkulam,vavuniya', 'A+', '0776523111', 'Mannar General Hospital'),
(49, 'Varakapola,colombo', 'B-', '0776543212', 'Colombo National Hospital');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(4, 'jeewa', 'jeewa123'),
(5, 'manga', 'manga123'),
(6, 'lamba', 'lamba123'),
(7, 'geluwa', 'geluwa123'),
(8, 'admin', 'admin123'),
(9, 'shan', 'shan123'),
(10, 'nimal', 'nimal123'),
(11, 'ama', 'ama123'),
(12, 'nisa', 'nisa12'),
(13, 'amal', 'amal1234'),
(14, 'sadun', 'sadun123'),
(15, 'yum', 'yum123'),
(16, 'shehan', 'shehan123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_details`
--
ALTER TABLE `blood_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
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
-- AUTO_INCREMENT for table `blood_details`
--
ALTER TABLE `blood_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
