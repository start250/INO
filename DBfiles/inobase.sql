-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2018 at 06:41 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.14

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
-- Table structure for table `admin/author`
--

CREATE TABLE `admin/author` (
  `id` int(10) NOT NULL,
  `names` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `priority` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin/author`
--

INSERT INTO `admin/author` (`id`, `names`, `username`, `password`, `email`, `priority`) VALUES
(12, 'INO admin', 'admin', 'admin', 'admin@ino.com', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `adminauthor`
--

CREATE TABLE `adminauthor` (
  `id` int(10) NOT NULL,
  `names` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `priority` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminauthor`
--

INSERT INTO `adminauthor` (`id`, `names`, `username`, `password`, `email`, `priority`) VALUES
(12, 'INO admin', 'admin', 'admin', 'admin@ino.com', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `title` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `pages` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `added_by` varchar(200) NOT NULL DEFAULT 'admin',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `_id` int(11) NOT NULL,
  `book_link` varchar(400) DEFAULT NULL,
  `section` varchar(200) NOT NULL DEFAULT '',
  `thumb` varchar(400) NOT NULL DEFAULT '/noimage.jpeg',
  `views` int(11) NOT NULL DEFAULT '0',
  `downloads` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`title`, `author`, `description`, `pages`, `size`, `added_by`, `created_at`, `updated_at`, `_id`, `book_link`, `section`, `thumb`, `views`, `downloads`) VALUES
('Da Vinci Code', 'Dan Brown', 'The Best book of life and love!', 454, 5154486, 'Marsen', '2018-03-15 19:56:00', '0000-00-00 00:00:00', 1, '\\INOGIT\\Resources\\Storage\\Books\\advanced-arch-2011-1521143760.pdf', 'health', 'Da Vinci Code', 0, 0),
('English for Newbie', 'Malinde', 'Not easy Hard, difficult, ultra powerful', 325, 245956, 'Mucyo', '2018-03-15 19:57:31', '0000-00-00 00:00:00', 2, 'C:\\xampp\\htdocs\\INOGIT\\Resources\\Storage\\Books\\484Lecture-Wireless-Hacking-1521143851.pdf', 'English Class', 'English for Newbie', 0, 0),
('This Academia is Screwed', 'Manji', 'Ha! let me say it better than You', 456, 1142382, 'Muhire', '2018-03-15 20:05:31', '0000-00-00 00:00:00', 3, 'C:\\xampp\\htdocs\\INOGIT\\Resources\\Storage\\Books\\10-1521144331.1', 'Academic', 'This Academia is Screwed', 0, 0),
('We English!', 'Musafili', 'but if you use header function then some times you will get \"warning like header already send\" to resolve that do not echo or print before sending headers or you can simply use die() or exit() after header function.', 23, 385371, 'Muhizi', '2018-03-15 20:06:42', '0000-00-00 00:00:00', 4, 'C:\\xampp\\htdocs\\INOGIT\\Resources\\Storage\\Books\\gronowski1998-1521144402.pdf', 'English Class', 'We English!', 0, 0),
('Acadzmic is Life', 'Zilo', 'English Class has this fma asknds askd asjd', 923, 385371, 'Kid Ink', '2018-03-15 20:09:08', '0000-00-00 00:00:00', 5, 'C:\\xampp\\htdocs\\INOGIT\\Resources\\Storage\\Books\\gronowski1998-1521144548.pdf', 'Academic', 'Acadzmic is Life', 0, 0),
('Boo book', 'reti', 'fggfkfgk', 1, 19031, 'anony', '2018-03-18 15:30:48', '0000-00-00 00:00:00', 6, 'thumbnail-1521387048.jpg', 'English Class', 'Boo book', 0, 0),
('liku', 'klkl', 'cxvdlkf', 54, 0, 'gffgf', '2018-03-18 15:34:51', '0000-00-00 00:00:00', 7, 'l-1521387291.txt', 'Rules of the Road', 'liku', 0, 0),
('English Vocs', 'jet pack', 'sderiroegbgritjre regklgklrelkg', 12, 182329, 'boo', '2018-03-19 05:49:27', '0000-00-00 00:00:00', 8, 'INO+technical+description-1521438567.pdf', 'English Class', 'English Vocs', 0, 0),
('Types of Plagiarism', 'Positivo', 'erdtfuyjokjbvcvbvbnghj,', 23, 23444, '', '2018-03-19 17:00:38', '0000-00-00 00:00:00', 9, 'TypesofPlagiarism-1521478838.pdf', 'Culture', 'Types of Plagiarism', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin/author`
--
ALTER TABLE `admin/author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminauthor`
--
ALTER TABLE `adminauthor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
