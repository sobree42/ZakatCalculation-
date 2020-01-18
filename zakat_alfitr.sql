-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2019 at 05:26 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zakat_alfitr`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `Id` int(50) NOT NULL,
  `Fname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Lname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Tel` int(50) NOT NULL,
  `Peoples` int(50) NOT NULL,
  `Rice_type` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Zakat_type` varchar(50) CHARACTER SET utf8 NOT NULL,
  `kg` int(50) NOT NULL,
  `Slips` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Status` varchar(50) CHARACTER SET utf8 NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`Id`, `Fname`, `Lname`, `Tel`, `Peoples`, `Rice_type`, `Zakat_type`, `kg`, `Slips`, `Status`, `total`) VALUES
(16, 'thai', 'lao', 85, 2, '150', 'ZakatFediah', 8, '1560064340.png', 'Opinion', 0),
(19, 'ewrw', 'ggdgdg', 24242, 4, '75', 'ZakatFtirah', 12, '', 'First', 600);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
