-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2018 at 07:04 AM
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

--
-- Dumping data for table `academicvideos`
--

INSERT INTO `academicvideos` (`id`, `title`, `description`, `thumb`, `video_link`, `course`, `level`, `year`) VALUES
(1, 'dfg', 'tyj', 'comment-planter-des-carottes.jpg', 'sdfgh', 'math', 'high school', '6'),
(2, 'dfghj', 'kjhgfd', 'banana-714.jpg', 'fghj', 'francais', 'primary', '2');

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
('Da Vinci Code', 'Dan Brown', 'The Best book of life and love!', 456, 5154486, 'Marsenadmin', '2018-03-15 19:56:00', '0000-00-00 00:00:00', 1, '\\INOGIT\\Resources\\Storage\\Books\\advanced-arch-2011-1521143760.pdf', 'health', 'Da Vinci Code', 0, 0, ''),
('English for Newbie', 'Malinde', 'Not easy Hard, difficult, ultra powerful', 325, 245956, 'Mucyo', '2018-03-15 19:57:31', '0000-00-00 00:00:00', 2, 'C:\\xampp\\htdocs\\INOGIT\\Resources\\Storage\\Books\\484Lecture-Wireless-Hacking-1521143851.pdf', 'English Class', 'English for Newbie', 0, 0, ''),
('We English!', 'Musafili', 'but if you use header function then some times you will get \"warning like header already send\" to resolve that do not echo or print before sending headers or you can simply use die() or exit() after header function.', 23, 385371, 'Muhizi', '2018-03-15 20:06:42', '0000-00-00 00:00:00', 4, 'C:\\xampp\\htdocs\\INOGIT\\Resources\\Storage\\Books\\gronowski1998-1521144402.pdf', 'English Class', 'We English!', 0, 0, ''),
('Boo book', 'reti', 'fggfkfgk', 1, 19031, 'anony', '2018-03-18 15:30:48', '0000-00-00 00:00:00', 6, 'thumbnail-1521387048.jpg', 'English Class', 'Boo book', 0, 0, ''),
('liku', 'klkl', 'cxvdlkf', 54, 0, 'gffgf', '2018-03-18 15:34:51', '0000-00-00 00:00:00', 7, 'l-1521387291.txt', 'Rules of the Road', 'liku', 0, 0, ''),
('English Vocs', 'jet pack', 'sderiroegbgritjre regklgklrelkg', 12, 182329, 'boo', '2018-03-19 05:49:27', '0000-00-00 00:00:00', 8, 'INO+technical+description-1521438567.pdf', 'English Class', 'English Vocs', 0, 0, ''),
('Types of Plagiarism', 'Positivo', 'erdtfuyjokjbvcvbvbnghj,', 23, 23444, '', '2018-03-19 17:00:38', '0000-00-00 00:00:00', 9, 'TypesofPlagiarism-1521478838.pdf', 'Culture', 'Types of Plagiarism', 0, 0, ''),
('Hello', 'Anaclet', 'esrdfyhj', 33, 707014, 'admin', '2018-03-20 17:10:09', '0000-00-00 00:00:00', 10, 'lecture3-1521565809.pdf', 'Academic', 'Emoji-Amazed-icon.png', 0, 0, ''),
('Hello', 'ysjtefyhvfjm', 'rdtfyhijk', 11, 707014, 'admin', '2018-03-20 17:21:52', '0000-00-00 00:00:00', 11, 'lecture3-1521566512.pdf', 'Academic', 'Emoji-Amazed-icon.png', 0, 0, ''),
('', 'ysjtefyhvfjm', 'rdtfyhijk', 11, 707014, 'admin', '2018-03-20 17:23:53', NULL, 12, 'lecture3-1521566633.pdf', 'Academic', 'Emoji-Amazed-icon.png', 0, 0, ''),
('wertyu', 'sdfghjk', 'rdtfguhj', 45, 707014, 'admin', '2018-03-20 17:26:02', NULL, 13, 'lecture3-1521566762.pdf', 'Academic', 'Hugging_Face_Emoji_2028ce8b-c213-4d45-94aa-21e1a0842b4d_large.png', 0, 0, ''),
('dfghj', 'sdfgh', 'sdrtyu', 45, 307712, 'admin', '2018-03-20 17:30:45', NULL, 14, 'lecture+1-2018-1521567045.ppt', 'Academic', 'phpF531.tmp', 0, 0, ''),
('yfgjehglk', 'dfghj', 'asdfghj', 5, 707014, 'admin', '2018-03-20 17:40:00', NULL, 15, 'lecture3-1521567600.pdf', 'Academic', '', 0, 0, ''),
('dfghj', 'fghjk', 'sdfyghj', 23, 307712, 'admin', '2018-03-20 17:40:50', NULL, 16, 'lecture+1-2018-1521567650.ppt', 'Academic', 'php622C.tmp', 0, 0, ''),
('hsafkhb', 'jabkjhv,n', 'sdrtfyhj', 55, 243610, 'admin', '2018-03-20 17:42:55', NULL, 17, 'Designing+performance+of+microprocessor+speed-1521567775.pdf', 'Academic', 'Emoji-Glad-icon.png', 0, 0, ''),
('ujhafdjk', 'jfabjkghn', 'yuefhj', 34, 307712, 'admin', '2018-03-20 18:04:06', NULL, 18, 'lecture+1-2018-1521569046.ppt', 'Academic', 'Emoji-Anger-icon.png', 0, 0, ''),
('ykejfhi', 'kjefgwbujk', 'xctvbjkml', 456, 707014, 'admin', '2018-03-20 18:04:56', NULL, 19, 'lecture3-1521569096.pdf', 'Academic', 'Emoji-Anger-icon.png', 0, 0, ''),
('hkjhlwjqegwrl', 'hekw,jg.rh', 'rytfyguhilfgu', 54, 243610, 'admin', '2018-03-20 18:06:14', NULL, 20, 'Designing+performance+of+microprocessor+speed-1521569174.pdf', 'Academic', 'Emoji-Anger-icon.png', 0, 0, 'Life Book'),
('rtfyhwjer', 'gvbjklg', 'erdyfuij', 54, 307712, 'admin', '2018-03-20 18:09:46', NULL, 21, 'lecture+1-2018-1521569386.ppt', 'Business', 'Emoji-Anger-icon.png', 0, 0, 'Business News'),
('ayefukyghuij', 'tfygjhfgrjmg', 'etsrfyghij', 234, 707014, 'admin', '2018-03-21 06:19:48', NULL, 22, 'lecture3-1521613188.pdf', 'Culture', 'Register-icon.png', 0, 0, 'Imigani'),
('jrhekj', 'dgfhgjkl', 'fghjkl;', 345, 270069, 'admin', '2018-03-21 18:43:22', NULL, 23, '1461023276-1521657802.0024quizes+300+Dr+Mahdi', 'culture', 'banana-714.jpg', 0, 0, 'Imigani');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `section` text NOT NULL,
  `category` text NOT NULL,
  `level` text NOT NULL,
  `course` text NOT NULL,
  `year` text NOT NULL,
  `featured_image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `section`, `category`, `level`, `course`, `year`, `featured_image`, `created_at`, `updated_at`) VALUES
(1, 'ok', '<p>testing</p>\r\n', 'rules_road', 'Ibibazo nibisubizo', '', '', '', 'featured_image', '2018-03-21 21:29:58', '0000-00-00 00:00:00'),
(2, 'test2', '<p>ok2</p>\r\n', 'rules_road', 'Ibyapa', '', '', '', 'featured_image', '2018-03-21 21:31:35', '0000-00-00 00:00:00'),
(3, 'testing7', '<p>done all</p>\r\n', 'rules_road', 'Ibyapa', '', '', '', 'shutterstock_376905205-pp1-opener-tn.jpg', '2018-03-21 21:32:15', '0000-00-00 00:00:00'),
(6, 'oolo', '<p>yolo</p>\r\n', 'academic', '', 'high school', 'computer', '2', '0395-red-wethersfield-onion.jpg', '2018-03-21 21:40:38', '0000-00-00 00:00:00'),
(7, 'eeekk', '<p>fcgvhjkl</p>\r\n', 'academic', '', 'high school', 'gp', '4', 'carotte.jpg', '2018-03-21 22:42:17', '0000-00-00 00:00:00');

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
(1, 'FGHJK', 'RDTFYGUIJKOL', '2-Hot-Home-icon.png', 'Business Advice', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/5D5MySV16-M\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'business', '2018-03-20 21:18:51', '0000-00-00 00:00:00'),
(2, 'fghjk', 'mnbvcx', 'Save-icon.png', 'Advanced', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/5D5MySV16-M\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'eng_class', '2018-03-20 21:27:46', '0000-00-00 00:00:00'),
(3, 'ghuj', 'nbv', 'Logout.png', 'Advanced', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/5D5MySV16-M\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'eng_class', '2018-03-20 22:01:23', '0000-00-00 00:00:00'),
(4, 'dfvgbhnjmk', 'hbgvf', 'Internal-Drive-icon.png', 'Ibisakuzo', 'oook', 'culture', '2018-03-20 22:20:01', '0000-00-00 00:00:00');

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
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
