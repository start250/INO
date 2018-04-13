-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2018 at 05:24 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inobase`
--

-- --------------------------------------------------------

--
-- Table structure for table `past_papers`
--

CREATE TABLE `past_papers` (
  `id` int(11) NOT NULL,
  `paper_year` year(4) NOT NULL,
  `grade` varchar(200) NOT NULL,
  `Qlink` varchar(254) NOT NULL,
  `Alink` varchar(254) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `past_papers`
--

INSERT INTO `past_papers` (`id`, `paper_year`, `grade`, `Qlink`, `Alink`, `createdAt`, `title`) VALUES
(1, 2018, 'P6', 'assign_word_ladder-q-1523580557.pdf', 'sample-3pp-a-1523580557.pdf', '2018-04-13 00:49:17', 'Social Studies'),
(2, 2007, 'S6', 'sqrt-q-1523581088.pdf', 'sample-3pp-a-1523581088.pdf', '2018-04-13 00:58:08', 'Mathematics'),
(3, 2016, 'Other Papers', 'sqrt-q-1523587270.pdf', '', '2018-04-13 02:41:10', 'WDA Construction'),
(4, 2015, 'S6', 'sample-3pp-q-1523587310.pdf', 'assign_word_ladder-a-1523587310.pdf', '2018-04-13 02:41:50', 'Physics');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `past_papers`
--
ALTER TABLE `past_papers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `past_papers`
--
ALTER TABLE `past_papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
