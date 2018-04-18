-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2018 at 01:24 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

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
  `year` text NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `comments` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academicvideos`
--

INSERT INTO `academicvideos` (`id`, `title`, `description`, `thumb`, `video_link`, `course`, `level`, `year`, `views`, `comments`) VALUES
(1, 'gfthjkl;', 'ertfyguhijoklp;', 'Corneille.png', 'drftgyjhukijkl', 'francais', 'primary', '1', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `academic_doc`
--

CREATE TABLE `academic_doc` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `author` text NOT NULL,
  `description` text NOT NULL,
  `pages` int(11) NOT NULL,
  `thumb` text NOT NULL,
  `book_file` text NOT NULL,
  `level` text NOT NULL,
  `course` text NOT NULL,
  `year` int(11) NOT NULL,
  `downloads` int(11) NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL DEFAULT '0'
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
  `_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `pages` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `added_by` varchar(200) NOT NULL DEFAULT 'admin',
  `book_link` varchar(400) DEFAULT NULL,
  `section` varchar(200) NOT NULL DEFAULT '',
  `level` varchar(254) NOT NULL,
  `year` varchar(254) NOT NULL,
  `course` varchar(254) NOT NULL,
  `thumb` varchar(400) NOT NULL DEFAULT 'Default.png',
  `book_category` text NOT NULL,
  `downloads` int(11) DEFAULT '0',
  `views` int(11) NOT NULL DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`_id`, `title`, `author`, `description`, `pages`, `size`, `added_by`, `book_link`, `section`, `level`, `year`, `course`, `thumb`, `book_category`, `downloads`, `views`, `updated_at`, `created_at`) VALUES
(1, 'hello p', 'hello p', 'hello p hello p hello p hello p hello p ', 22, 27615, 'licas', 'Assignment-Set+1-1523381383.pdf', 'academic', '', '', '', 'Anaclet.png', 'Science Book', 0, 0, NULL, '2018-04-10 17:29:43'),
(2, 'dfghjkl', 'ghbjnmk,', 'cvbbnm,.', 6, 22027, 'ghjkl.', 'Assignment-Set+2-1523382584.pdf', 'eng_class', '', '', '', 'Corneille.png', '', 0, 0, NULL, '2018-04-10 17:49:44'),
(3, 'DHJHKHF', 'FGHJMK', 'GHGMJ,KFD', 212, 27615, 'NVBNV', 'Assignment-Set+1-1523382820.pdf', 'eng_class', '', '', '', 'Anaclet.png', '', 0, 0, NULL, '2018-04-10 17:53:40'),
(4, 'motherfucker', 'motherfucker', 'motherfucker ', 12, 22027, 'rtfgyhj', 'Assignment-Set+2-1523383292.pdf', 'eng_class', '', '', '', 'Corneille.png', 'For_Intermediates', 0, 0, NULL, '2018-04-10 18:01:32'),
(5, 'fghjkjf', 'gdfhghjk', 'dgrhftgyhjb drftghj', 45, 27615, 'fghjk', 'Assignment-Set+1-1523383346.pdf', 'rules_road', '', '', '', 'Isaie.png', 'Ibibazo_nibisubizo', 0, 0, NULL, '2018-04-10 18:02:26'),
(6, 'fghjkj', 'fghjjj', 'dgfhghjk', 54, 22027, 'dgfhgjhkj', 'Assignment-Set+2-1523396458.pdf', 'academic', '', '', '', 'Anaclet.png', 'Science Book', 0, 0, NULL, '2018-04-10 21:40:58'),
(7, 'gfddf', 'ghj', 'ghghj', 45, 27615, 'fghj', 'Assignment-Set+1-1523396980.pdf', 'academic', '', '', '', 'Corneille.png', 'ICT Book', 1, 0, NULL, '2018-04-10 21:49:40'),
(8, 'qwertyuio', 'fghjkldfgghf', 'rftgyjkdf56', 456, 525777, 'sdfghj', '268937-1523874405.jpg', 'culture', '', '', '', 'ghost_recon_wildlands-wallpaper-2048x1152.jpg', 'Imigani', 0, 0, NULL, '2018-04-16 10:26:45');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(30) NOT NULL,
  `postID` int(11) NOT NULL,
  `videoID` int(30) NOT NULL,
  `names` text NOT NULL,
  `email` text NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'archive-1-1523192011.png', 'Master'),
(2, 'alarm-clock-1-1523183573.png', 'Academic'),
(3, 'battery-1523183594.png', 'Business'),
(4, 'sign-1-1523183642.png', 'Road'),
(5, 'like-1-1523183816.png', 'Health'),
(6, 'music-player-2-1523183708.png', 'English'),
(7, 'photo-camera-1523183734.png', 'Culture'),
(8, 'edit-1523183776.png', 'Quiz'),
(9, 'folder-9-1523183913.png', 'Library'),
(10, 'gift-1523183951.png', 'Scholarship'),
(11, 'hourglass-1523184054.png', 'Past Papers'),
(12, 'notebook-2-1523183868.png', 'Explore Rwandan Education'),
(13, 'idea-1523183841.png', 'Academic news'),
(15, 'calendar-4-1523184084.png', 'Business Opportunities'),
(16, 'download-1523184118.png', 'Business Advice'),
(17, 'newspaper-1523184156.png', 'Business News'),
(18, 'megaphone-1523192457.png', 'Biographies Of Successful Business Men'),
(19, 'infinity-1523184225.png', 'Meet With Business Mentors'),
(20, 'like-1523184247.png', 'Nutritions'),
(21, 'note-1523184307.svg', 'Traditional Medecine'),
(22, 'key-1523184459.png', 'Serious Deseases'),
(23, 'battery-9-1523184485.png', 'Doctor Advice'),
(24, 'flag-4-1523184511.png', 'Health News'),
(25, 'archive-1523184830.png', 'Ask Doctor'),
(26, 'calendar-2-1523184559.png', 'Igazeti'),
(27, 'network-1523184588.png', 'Ibibazo nibisubizo'),
(28, 'user-7-1523184853.png', 'Ibyapa'),
(29, 'view-2-1523184889.png', 'Amakuru'),
(30, 'spotlight-1523184916.png', 'Baza Mwarimu'),
(31, 'success-1523184953.png', 'For Biginners'),
(32, 'repeat-1-1523185127.png', 'For Intermediate'),
(33, 'wifi-1-1523185062.png', 'Advanced English'),
(34, 'id-card-5-1523185179.png', 'Business English'),
(35, 'albums-1523184799.png', 'Ask Teacher'),
(36, 'time-1523184768.png', 'Amateka yu Rwanda'),
(37, 'more-2-1523184741.png', 'Imigani'),
(38, 'cloud-computing-3-1523184711.png', 'Ibisakuzo'),
(39, 'forbidden-1523184415.png', 'Kirazira zumuco Nyarwanda'),
(40, 'unlocked-1523184386.png', 'Baza Sokuru');

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
(1, 'chvbjmbgc fghj', '<p>dfghjfdghkjjhg dfghj<img alt=\"\" src=\" http://localhost/INOGIT/Resources/Storage/Images/1523383400.png\" style=\"height:280px; width:280px\" /></p>\r\n', '', 'mik', 'business', 'Business Opportunities', '', '', '', 'Isaie.png', '2018-04-10 18:04:39', '0000-00-00 00:00:00', 0, 0, 0),
(2, 'dxfgchjbjk', '<p><img alt=\"\" src=\" http://localhost/INOGIT/Resources/Storage/Images/1523389775.png\" style=\"height:480px; width:480px\" />dfghjkhgfdsghjkhgfdsfgyhj</p>\r\n\r\n<p>sdfghjkhgfdghjkhgfhj</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\" http://localhost/INOGIT/Resources/Storage/Images/1523389775.png\" style=\"height:480px; width:480px\" />dgfhjkljhgfdghgjkl;</p>\r\n\r\n<p>dfghjkhdfghjkkhgfghj</p>\r\n', '', 'mik', 'rules_road', 'Ibyapa', '', '', '', 'Corneille.png', '2018-04-10 19:51:15', '0000-00-00 00:00:00', 0, 0, 1),
(3, 'LUCAS', '<p>LKJHGFD</p>\r\n', '', 'mik', 'rules_road', 'Igazeti', '', '', '', 'Corneille.png', '2018-04-10 21:07:38', '0000-00-00 00:00:00', 0, 0, 0),
(4, 'LUCAS', '<p>GHJGFDSF</p>\r\n', '', 'mik', 'rules_road', 'Igazeti', '', '', '', 'Corneille.png', '2018-04-10 21:12:55', '0000-00-00 00:00:00', 0, 0, 0),
(5, '', '<p>rtyuiofghj</p>\r\n', '', 'mik', 'rules_road', 'Igazeti', '', '', '', '', '2018-04-10 21:19:17', '0000-00-00 00:00:00', 0, 0, 0),
(6, 'tyuioiouyt', '<p>tyuiiuytret</p>\r\n', '', 'mik', 'rules_road', 'Igazeti', '', '', '', '', '2018-04-10 21:19:29', '0000-00-00 00:00:00', 0, 0, 1),
(7, 'gggggggggggg', '<p>cccccccccccccccccccc</p>\r\n', '', 'mik', 'academic', '', 'other info', 'Tips to Win Scholaship', '1', 'Corneille.png', '2018-04-10 22:08:58', '0000-00-00 00:00:00', 0, 0, 0),
(8, 'cccccccccccccccccccccc', '<p>cccccccccccccccccccc</p>\r\n', '', 'mik', 'academic', '', 'other info', 'links', '', 'Isaie.png', '2018-04-10 22:09:17', '0000-00-00 00:00:00', 0, 0, 0),
(9, 'ssssssssssssssssssssssss', '<p>ssssssssssssssssssssssss</p>\r\n', '', 'mik', 'academic', '', 'other info', 'News', '1', '', '2018-04-10 22:09:32', '0000-00-00 00:00:00', 0, 0, 0),
(10, '', '', '', 'mik', 'academic', '', '', '', '', '', '2018-04-10 22:09:35', '0000-00-00 00:00:00', 0, 0, 0),
(11, 'qwertyuiop', '<p>wertyuiop[]</p>\r\n', '', 'mik', 'culture', 'Ibisakuzo', '', '', '', 'far_cry_5_4k_8k-wide.jpg', '2018-04-16 10:16:10', '0000-00-00 00:00:00', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` int(30) NOT NULL,
  `same_q` text NOT NULL,
  `question` text NOT NULL,
  `ans1` text NOT NULL,
  `ans2` text NOT NULL,
  `ans3` text NOT NULL,
  `ans4` text NOT NULL,
  `type` text NOT NULL,
  `category` text NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `same_q`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `type`, `category`, `title`) VALUES
(1, '1523580863', 'icyambere', 'oiuy', 'yuio', 'ytuio', '', 'radio', 'Science', 'c++'),
(2, '1523580863', '', '56yuj', 'rgthyju', '', 'rimwe', 'radio', 'Science', 'c++'),
(3, '1523580863', '', 'tyujkj', '', 'rimwe', 'y5rtyhg', 'radio', 'Science', 'c++'),
(4, '1523580863', '', '', '', '', '', 'radio', 'Science', 'c++'),
(5, '1523580976', 'icyambere', 'rimwe', 't', 't', 'f', 'radio', 'Science', 'java'),
(6, '1523580976', 'icyakabiri', 'rimwe', 'd', 'f', 'd', 'radio', 'Science', 'java'),
(7, '1523580976', 'icyagatatu', 'rimwe', 'f', 'f', 'f', 'radio', 'Science', 'java'),
(8, '1523580976', 'icyakane', 'rimwe', 'fg', 'gf', 'rtyh', 'radio', 'Science', 'java'),
(9, '1523613308', 'fgvhbjk', 'fghjhlk', 'fgvhbjn', 'fcgvhbjnk', 'fcgvhbjnkm', 'radio', 'General knowledge', 'dgfhgjj'),
(10, '1523613468', 'fdghuik', 'drftygh', 'xgvhbjnkm', 'swdefrgtyhu', 'ghjk', 'radio', 'Umuco nyarwanda', 'umuco'),
(11, '1523613468', 'dfvgbhnjmk', 'dcfvbn', 'vbgnhmj', 'dfgbhnm', 'dfvgbhnm,', 'radio', 'Umuco nyarwanda', 'umuco'),
(12, '1523648772', 'rimwe', 'ok', 'rhfgf', 'ghjk', 'hjk', 'radio', 'Science', 'php scripting'),
(13, '1523648772', 'kabiri', 'ok', 'hjk', 'hjk', 'bnm', 'radio', 'Science', 'php scripting'),
(14, '1523648772', 'werf', 'ok', 'fcghb', 'vbn', 'vbn', 'radio', 'Science', 'php scripting'),
(15, '1523648772', 'vbn', 'ok', 'cvbn', 'cvbn', 'cvbn', 'radio', 'Science', 'php scripting'),
(16, '1523648772', 'ok', 'xcvbn', 'cvb', 'cvb', 'cvbhj', 'radio', 'Science', 'php scripting'),
(17, '1523648772', 'dfghu', 'ok', 'xcvbn', 'cvbn', 'cvb', 'radio', 'Science', 'php scripting');

-- --------------------------------------------------------

--
-- Table structure for table `reset_password`
--

CREATE TABLE `reset_password` (
  `id` int(11) NOT NULL,
  `token` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(254) NOT NULL,
  `username` varchar(254) NOT NULL,
  `password` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `level` varchar(254) NOT NULL DEFAULT 'guest',
  `joinedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `level`, `joinedAt`, `active`) VALUES
(1, 'mik', 'mik', '$2y$10$oUk4Uh.wQceRt6AyNa0N6O3Wzo9OGYRS/15FTafb4xnKtFa3JanU2', 'mik@mik.com', 'admin', '2018-04-06 23:19:48', 0),
(2, 'segr', 'segr', '$2y$10$Llj/K7JvlNQBrp/g3fzEaehXwX.5oTYyeiYU7FIep4T05h0lz.Zku', 'segr@segr.hgf', 'guest', '2018-04-07 13:48:30', 0);

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
  `views` int(11) NOT NULL DEFAULT '0',
  `comments` int(11) NOT NULL DEFAULT '0',
  `share` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `description`, `thumb`, `category`, `video_link`, `section`, `views`, `comments`, `share`, `created_at`, `updated_at`) VALUES
(1, 'fgnhb', 'bnghhnbv', 'Anaclet.png', 'Business_Advice', 'dfghjfdscdvfb', 'business', 1, 0, 0, '2018-04-11 00:14:58', '0000-00-00 00:00:00'),
(2, 'dryfthujk', 'ftghujko', '268937.jpg', 'Imigani', 'sedrftgyuijl', 'culture', 0, 0, 0, '2018-04-16 10:15:54', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academicvideos`
--
ALTER TABLE `academicvideos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `academic_doc`
--
ALTER TABLE `academic_doc`
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
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `past_papers`
--
ALTER TABLE `past_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reset_password`
--
ALTER TABLE `reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

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
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `academic_doc`
--
ALTER TABLE `academic_doc`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `past_papers`
--
ALTER TABLE `past_papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `reset_password`
--
ALTER TABLE `reset_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
