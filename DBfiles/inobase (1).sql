-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 11:57 PM
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
-- Table structure for table `academicvideos`
--

CREATE TABLE `academicvideos` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `thumb` text NOT NULL,
  `video_link` text NOT NULL,
  `course` text NOT NULL,
  `level` text NOT NULL,
  `year` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(12, 'INO admin', 'admin', 'admin', 'admin@ino.com', 'administrator'),
(14230860, 'Muhire', 'mars', '123', 'marsanline@gmail.com', 'author');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `_id` int(11) NOT NULL,
  `book_link` varchar(400) DEFAULT NULL,
  `section` varchar(200) NOT NULL DEFAULT '',
  `thumb` varchar(400) NOT NULL DEFAULT '/noimage.jpeg',
  `views` int(11) NOT NULL DEFAULT '0',
  `downloads` int(11) DEFAULT '0',
  `book_category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`title`, `author`, `description`, `pages`, `size`, `added_by`, `created_at`, `updated_at`, `_id`, `book_link`, `section`, `thumb`, `views`, `downloads`, `book_category`) VALUES
('CTFVGBHNJ', 'DFGYUJ', 'JHGFDRTYGUJI', 45, 707014, 'admin', '2018-03-25 07:17:40', NULL, 1, 'lecture3-1521962260.pdf', 'culture', 'midseason-tomatoes-1024x683.jpg', 0, 0, ''),
('gghj', 'fghj', 'fghj', 66, 243610, 'admin', '2018-03-25 11:23:24', NULL, 2, 'Designing+performance+of+microprocessor+speed-1521977004.pdf', 'eng_class', 'img.jpg', 0, 0, ''),
('gghj', 'fghj', 'fghj', 66, 243610, 'admin', '2018-03-25 11:27:08', NULL, 3, 'Designing+performance+of+microprocessor+speed-1521977228.pdf', 'eng_class', 'img.jpg', 0, 0, ''),
('', 'oiuy', 'rtfyguij', 67, 307712, 'admin', '2018-03-25 11:27:40', NULL, 4, 'lecture+1-2018-1521977260.ppt', 'eng_class', 'midseason-tomatoes-1024x683.jpg', 0, 0, 'Intermediate');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(11) NOT NULL,
  `filename` text NOT NULL,
  `position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `filename`, `position`) VALUES
(1, 'logo-1522009133.png', 'Master Logo'),
(2, 'Cry-icon-1522011130.png', 'Academic Logo'),
(3, 'Emoji-Glad-icon-1522011148.png', 'Business Logo'),
(4, 'Hugging_Face_Emoji_2028ce8b-c213-4d45-94aa-21e1a0842b4d_large-1522011155.png', 'Road Logo'),
(5, 'Emoji-Cute-icon-1522011162.png', 'Health Logo'),
(6, 'Emoji-Anger-icon-1522011171.png', 'English Logo'),
(7, 'Emoji-Whining-icon-1522011178.png', 'Culture Logo'),
(8, 'Emoji-Nervous-icon-1522011187.png', 'Quiz Logo');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `excerpt` text NOT NULL,
  `author` varchar(200) NOT NULL,
  `section` text NOT NULL,
  `category` text NOT NULL,
  `level` text NOT NULL,
  `course` text NOT NULL,
  `year` text NOT NULL,
  `featured_image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `shares` int(11) NOT NULL,
  `comments` int(11) NOT NULL,
  `views` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `excerpt`, `author`, `section`, `category`, `level`, `course`, `year`, `featured_image`, `created_at`, `updated_at`, `shares`, `comments`, `views`) VALUES
(3, 'The MAC protocol in cellular networks is designed to maximize', '<p>&nbsp;networks, also use a MAC layer. The MAC protocol in cellular networks is designed to maximize the utilization of the expensive licensed spectrum.&nbsp;<sup><a href=\"https://en.wikipedia.org/wiki/Medium_access_control#cite_note-Miao-3\">[3]</a></sup>The&nbsp;<a href=\"https://en.wikipedia.org/wiki/Air_interface\" title=\"Air interface\">air interface</a>&nbsp;of a cellular network is at layers 1 and 2 of the OSI model; at layer 2, it is divided into multiple protocol layers. In UMTS and LTE, those protocols are the&nbsp;<a href=\"https://en.wikipedia.org/wiki/PDCP\" title=\"PDCP\">Packet Data Convergence Protocol</a>&nbsp;(PDCP), the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Radio_Link_Control\" title=\"Radio Link Control\">Radio Link Control</a>&nbsp;(RLC) protocol, and the MAC protocol. The base station has the absolute control over the air interface and schedules the downlink access as well as the uplink access of all devices. The MAC protocol is specified by&nbsp;<a href=\"https://en.wikipedia.org/wiki/3GPP\" title=\"3GPP\">3GPP</a>&nbsp;in TS 25.321<sup><a href=\"https://en.wikipedia.org/wiki/Medium_access_control#cite_note-4\">[4]</a></sup>&nbsp;for UMTS, TS 36.321<sup><a href=\"https://en.wikipedia.org/wiki/Medium_access_control#cite_note-5\">[5]</a></sup>&nbsp;for LTE and TS 38.321<sup><a href=\"https://en.wikipedia.org/wiki/Medium_access_control#cite_note-6\">[6]</a></sup>&nbsp;for&nbsp;<a href=\"https://en.wikipedia.org/wiki/5G\" title=\"5G\">5G</a>&nbsp;New Radio&nbsp;</p>\r\n', '', '', 'culture', 'Imigani', '', '', '', 'filename.jpg', '2018-03-25 07:10:06', '0000-00-00 00:00:00', 0, 0, 0),
(4, 'you are still getting this warning, you most ', '<p>The MAC protocol in cellular networks is designed to maximize&nbsp;sqli_fetch_array(): It is not safe to rely on the system&#39;s timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone &#39;UTC&#39; for now, but please set date.timezone to select your timezone. in&nbsp;<strong>/home/microkaz/ino.microkazi.info/Admin/login.php</strong>&nbsp;on line&nbsp;<strong>44</strong></p>\r\n', '', '', 'culture', 'Ibisakuzo', '', '', '', 'Barry-Allen-The-Flash-Season-3-barry-allen-the-flash-39923681-500-334.jpg', '2018-03-25 07:10:52', '0000-00-00 00:00:00', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `thumb` text NOT NULL,
  `category` text NOT NULL,
  `video_link` text NOT NULL,
  `section` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `description`, `thumb`, `category`, `video_link`, `section`, `created_at`, `updated_at`) VALUES
(6, 'Hello', 'thank', 'Barry_Allen_Grant_Gustin-10.jpg', 'Ibisakuzo', 'sdfyghuijkol', 'culture', '2018-03-25 07:12:21', '0000-00-00 00:00:00'),
(7, 'dcfvgbhnjm', 'jhgf', 'img.jpg', 'Kirazira', 'xdcfvbhn', 'culture', '2018-03-25 07:13:07', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academicvideos`
--
ALTER TABLE `academicvideos`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academicvideos`
--
ALTER TABLE `academicvideos`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
