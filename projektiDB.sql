-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2021 at 02:25 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekti`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontakti`
--

CREATE TABLE `kontakti` (
  `id` int(11) NOT NULL,
  `emri` varchar(258) NOT NULL,
  `mbiemri` varchar(258) NOT NULL,
  `emial` varchar(320) NOT NULL,
  `pershtypja` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontakti`
--

INSERT INTO `kontakti` (`id`, `emri`, `mbiemri`, `emial`, `pershtypja`) VALUES
(2, 'test', 'test', 'testKontakti@live.com', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(2, 'test2', 'test2@live.com', 'test2', '$2y$10$rXAkqa6rlHKuexixiz8bWup9UjiIxk4FmRTq2tSQ/Hihk8eas0i5W');

-- --------------------------------------------------------

--
-- Table structure for table `veturat`
--

CREATE TABLE `veturat` (
  `IdV` int(11) NOT NULL,
  `EmriV` varchar(40) NOT NULL,
  `PershkrimiV` varchar(1024) NOT NULL,
  `FotoV` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `veturat`
--

INSERT INTO `veturat` (`IdV`, `EmriV`, `PershkrimiV`, `FotoV`) VALUES
(6, 'audi', 'vetura 00', 'http://localhost/Projekti/Veturat/vetura02.jpg'),
(7, 'audi', 'vetura 00', 'http://localhost/Projekti/Veturat/vetura01.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontakti`
--
ALTER TABLE `kontakti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- Indexes for table `veturat`
--
ALTER TABLE `veturat`
  ADD PRIMARY KEY (`IdV`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontakti`
--
ALTER TABLE `kontakti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `veturat`
--
ALTER TABLE `veturat`
  MODIFY `IdV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
