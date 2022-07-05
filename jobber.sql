-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 04:05 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobber`
--

-- --------------------------------------------------------

--
-- Table structure for table `applictbl`
--

CREATE TABLE `applictbl` (
  `UserID` int(50) NOT NULL,
  `CompanyID` int(50) NOT NULL,
  `JobID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applictbl`
--

INSERT INTO `applictbl` (`UserID`, `CompanyID`, `JobID`) VALUES
(2, 8, 9),
(2, 8, 9),
(2, 8, 9),
(2, 8, 1),
(1, 8, 1),
(2, 8, 9),
(2, 8, 9),
(2, 8, 9),
(2, 8, 9),
(2, 8, 9),
(2, 8, 9),
(2, 8, 9),
(2, 8, 9),
(2, 8, 9),
(2, 8, 9),
(2, 8, 9),
(2, 8, 9),
(2, 8, 9),
(2, 8, 9),
(2, 8, 9),
(4, 9, 12);

-- --------------------------------------------------------

--
-- Table structure for table `comptbl`
--

CREATE TABLE `comptbl` (
  `CompanyID` int(50) NOT NULL,
  `CompanyName` varchar(50) NOT NULL,
  `Industry` varchar(50) NOT NULL,
  `JobType` enum('Formal','formal','Informal','informal') NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comptbl`
--

INSERT INTO `comptbl` (`CompanyID`, `CompanyName`, `Industry`, `JobType`, `Email`, `Password`) VALUES
(1, 'Trent', 'telecommunications', 'Formal', 'trent@ti', '1843e51e39e7195d4ef79a58fdeea872'),
(2, 'Safaricom', 'Telecommunications', 'Formal', 'safaricom@saf.co.ke', '63e1f0db60ea554fd8708326c5f7374f'),
(7, 'Boeing Aerospace', 'Aerospace', 'Formal', 'boeing@air.space', '4cb445d496308fef2dc0f2b881b421f9'),
(8, 'Boeing', 'Aerospace', 'Formal', 'fly@boeing.air', '72572dba80adc4e23ef216ef46f3ee64'),
(9, 'Annom', 'Engineering', 'Formal', 'annom@jobber.com', '4e7dd68644a090c23c842816c5ad76dc');

-- --------------------------------------------------------

--
-- Table structure for table `comp_imgtbl`
--

CREATE TABLE `comp_imgtbl` (
  `ProfID` int(50) NOT NULL,
  `CompanyID` int(50) NOT NULL,
  `URL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comp_imgtbl`
--

INSERT INTO `comp_imgtbl` (`ProfID`, `CompanyID`, `URL`) VALUES
(1, 1, 'avatar.png'),
(2, 1, 'IMG-607dc0b9399f58.61737237.png'),
(3, 2, 'IMG-607ece8f214de0.07759036.png'),
(4, 8, 'IMG-607efb8023b950.50212658.png');

-- --------------------------------------------------------

--
-- Table structure for table `comp_postjobtbl`
--

CREATE TABLE `comp_postjobtbl` (
  `JobID` int(50) NOT NULL,
  `CompanyID` int(50) NOT NULL,
  `JobPosition` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `YOE` int(15) NOT NULL,
  `Salary` int(15) NOT NULL,
  `RED` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comp_postjobtbl`
--

INSERT INTO `comp_postjobtbl` (`JobID`, `CompanyID`, `JobPosition`, `Location`, `YOE`, `Salary`, `RED`) VALUES
(1, 8, 'SRE', 'Nairobi', 3, 100000, '2021-05-13'),
(2, 1, 'Engineer', 'Nairobi', 4, 100000, '2021-04-17'),
(3, 1, 'Engineer', 'Nairobi', 5, 100000, '2021-05-04'),
(4, 1, 'Engineer', 'Nairobi', 3, 120000, '2021-05-06'),
(5, 2, 'Engineer', 'Eldoret', 3, 120000, '2021-05-14'),
(6, 1, 'Engineer', 'Eldoret', 3, 120000, '2021-04-22'),
(7, 2, 'Developer', 'Naivasha', 1, 80000, '2021-04-16'),
(8, 1, 'Developer', 'Naivasha', 1, 100000, '2021-04-16'),
(9, 8, 'Developer', 'Naivasha', 3, 200000, '2021-04-23'),
(10, 2, 'Electrician', 'Eldoret', 3, 70000, '2021-05-08'),
(11, 8, 'Engineer', 'Nairobi', 4, 250000, '2021-05-01'),
(12, 9, 'Engineer', 'Naivasha', 1, 1000000, '2021-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `prostbl`
--

CREATE TABLE `prostbl` (
  `UserID` int(50) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `UName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Tel_No` int(15) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prostbl`
--

INSERT INTO `prostbl` (`UserID`, `FName`, `LName`, `UName`, `Email`, `Tel_No`, `Password`) VALUES
(1, 'Amon', 'Kiprotich', 'Amon Kiprotich', 'amon.kip.kip@gmail.com', 0, 'b6e6985f142e9add97e2079727192b20'),
(2, 'Ann', 'Karuku', 'Karuku', 'annkaruku@gmail.com', 0, 'b6e6985f142e9add97e2079727192b20'),
(3, 'John', 'Doe', 'johndoe', 'johndoe@gmail.com', 0, 'cb6f3b8fa1aa7248aee240f594448a39'),
(4, 'Amon', 'Kiprotich', 'Annom', 'annom@jobber.com', 0, '4e7dd68644a090c23c842816c5ad76dc');

-- --------------------------------------------------------

--
-- Table structure for table `pros_imgtbl`
--

CREATE TABLE `pros_imgtbl` (
  `ProfID` int(50) NOT NULL,
  `UserID` int(50) NOT NULL,
  `URL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pros_imgtbl`
--

INSERT INTO `pros_imgtbl` (`ProfID`, `UserID`, `URL`) VALUES
(1, 1, 'avatar.png'),
(2, 1, 'IMG-607e7d589d8b52.87986488.jpg'),
(3, 2, 'IMG-607ef44002f238.75712586.jpg'),
(4, 3, 'IMG-607fc4fd01abe4.13435635.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pros_preftbl`
--

CREATE TABLE `pros_preftbl` (
  `UserID` int(50) NOT NULL,
  `Salary` int(15) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `YOE` int(5) NOT NULL,
  `AOE` varchar(50) NOT NULL,
  `JobType` enum('Formal','formal','Informal','informal') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pros_preftbl`
--

INSERT INTO `pros_preftbl` (`UserID`, `Salary`, `Location`, `YOE`, `AOE`, `JobType`) VALUES
(1, 100000, 'Nairobi', 5, 'Engineer', 'Formal'),
(2, 100000, 'Naivasha', 3, 'Developer', 'Formal'),
(3, 180000, 'Nairobi', 6, 'Engineer', 'Formal'),
(4, 20000, 'Naivasha', 3, 'Engineer', 'Formal');

-- --------------------------------------------------------

--
-- Table structure for table `pros_resumetbl`
--

CREATE TABLE `pros_resumetbl` (
  `ResumeID` int(50) NOT NULL,
  `UserID` int(50) NOT NULL,
  `URL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pros_resumetbl`
--

INSERT INTO `pros_resumetbl` (`ResumeID`, `UserID`, `URL`) VALUES
(1, 1, '607fbf2fe9f529.04186837.pdf'),
(2, 3, '607fc533acf829.86943215.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applictbl`
--
ALTER TABLE `applictbl`
  ADD KEY `CompanyID` (`CompanyID`),
  ADD KEY `JobID` (`JobID`),
  ADD KEY `UserID` (`UserID`) USING BTREE;

--
-- Indexes for table `comptbl`
--
ALTER TABLE `comptbl`
  ADD PRIMARY KEY (`CompanyID`);

--
-- Indexes for table `comp_imgtbl`
--
ALTER TABLE `comp_imgtbl`
  ADD PRIMARY KEY (`ProfID`),
  ADD KEY `CompanyID` (`CompanyID`);

--
-- Indexes for table `comp_postjobtbl`
--
ALTER TABLE `comp_postjobtbl`
  ADD PRIMARY KEY (`JobID`),
  ADD KEY `CompanyID` (`CompanyID`);

--
-- Indexes for table `prostbl`
--
ALTER TABLE `prostbl`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `pros_imgtbl`
--
ALTER TABLE `pros_imgtbl`
  ADD PRIMARY KEY (`ProfID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `pros_preftbl`
--
ALTER TABLE `pros_preftbl`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `pros_resumetbl`
--
ALTER TABLE `pros_resumetbl`
  ADD PRIMARY KEY (`ResumeID`),
  ADD KEY `UserID` (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comptbl`
--
ALTER TABLE `comptbl`
  MODIFY `CompanyID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comp_imgtbl`
--
ALTER TABLE `comp_imgtbl`
  MODIFY `ProfID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comp_postjobtbl`
--
ALTER TABLE `comp_postjobtbl`
  MODIFY `JobID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `prostbl`
--
ALTER TABLE `prostbl`
  MODIFY `UserID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pros_imgtbl`
--
ALTER TABLE `pros_imgtbl`
  MODIFY `ProfID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pros_resumetbl`
--
ALTER TABLE `pros_resumetbl`
  MODIFY `ResumeID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applictbl`
--
ALTER TABLE `applictbl`
  ADD CONSTRAINT `applictbl_ibfk_1` FOREIGN KEY (`CompanyID`) REFERENCES `comptbl` (`CompanyID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `applictbl_ibfk_3` FOREIGN KEY (`UserID`) REFERENCES `prostbl` (`UserID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `applictbl_ibfk_4` FOREIGN KEY (`JobID`) REFERENCES `comp_postjobtbl` (`JobID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `comp_imgtbl`
--
ALTER TABLE `comp_imgtbl`
  ADD CONSTRAINT `comp_imgtbl_ibfk_1` FOREIGN KEY (`CompanyID`) REFERENCES `comptbl` (`CompanyID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `comp_postjobtbl`
--
ALTER TABLE `comp_postjobtbl`
  ADD CONSTRAINT `comp_postjobtbl_ibfk_1` FOREIGN KEY (`CompanyID`) REFERENCES `comptbl` (`CompanyID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pros_imgtbl`
--
ALTER TABLE `pros_imgtbl`
  ADD CONSTRAINT `pros_imgtbl_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `prostbl` (`UserID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pros_preftbl`
--
ALTER TABLE `pros_preftbl`
  ADD CONSTRAINT `pros_preftbl_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `prostbl` (`UserID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pros_resumetbl`
--
ALTER TABLE `pros_resumetbl`
  ADD CONSTRAINT `pros_resumetbl_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `prostbl` (`UserID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
