-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2024 at 07:42 PM
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
-- Database: `gdepinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `userId` int(12) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fstname` varchar(40) NOT NULL,
  `fmlname` varchar(40) NOT NULL,
  `rank` varchar(40) NOT NULL,
  `position` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`userId`, `password`, `fstname`, `fmlname`, `rank`, `position`, `email`) VALUES
(1000, '18112003', 'Messaoud', 'Fares Yacine', 'lieutenant', 'Chef Departement', 'chefDepartement@gmail.com'),
(1001, '123123azerty', 'khaled', 'matmat', 'captin', 'randomstuff', 'kha79692@gmail.com'),
(1002, '456456aaa', 'saadi', 'abdou', 'major', 'sthsth', 'ex@gmail.com'),
(1004, '147147', 'semasel', 'azzam', 'general', 'sthother', 'ex3@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `userId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
