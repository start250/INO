-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2018 at 10:47 PM
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
  `year` int(11) NOT NULL
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
('Helo', 'lucas', 'the unicode) directly from this page into a text layer.the unicode) directly from this page into a text layer.', 32, 312320, 'admin', '2018-03-31 11:09:35', NULL, 1, 'Lecture+1-2018-1522494575.ppt', 'eng_class', 'Web-Twitter-alt-2-Metro-icon.png', 0, 0, 'For_Biginners'),
('ESRDYFTUIK', 'DXFGHJ', 'EWARSGYIJOGFCXZSDXFBHJ', 45, 4890, 'admin', '2018-03-31 11:40:13', NULL, 2, 'Logout-1522496413.png', 'eng_class', 'Log-Out-icon.png', 0, 0, 'For_Intermediates'),
('etrdtfhuj', 'fghj', 'oijhuftreswasdfgy', 23, 15517, 'admin', '2018-03-31 11:43:15', NULL, 3, 'Apps-preferences-desktop-user-password-icon-1522496595.png', 'eng_class', 'Apps-preferences-system-login-icon.png', 0, 0, 'For_Intermediates');

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

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `postID`, `videoID`, `names`, `email`, `msg`) VALUES
(1, 4, 0, 'Anaclet Ahishakiye', 'a.anaclet920@gmail.com', 'i am testing ok'),
(2, 4, 0, 'Anaclet Ahishakiye', 'a.anaclet920@gmail.com', 'i am testing ok'),
(3, 4, 0, 'Anaclet Ahishakiye', 'a.anaclet920@gmail.com', 'i am testing ok'),
(4, 4, 0, 'Arsene', 'a.anaclet920@gmail.com', 'if s]done ok'),
(5, 4, 0, 'Arsene', 'a.anaclet920@gmail.com', 'if s]done ok'),
(6, 4, 0, '', '', ''),
(7, 4, 0, '', '', ''),
(8, 5, 0, 'lucas', 'a.anaclet920@gmail.com', 'dvkhsbjl,dn'),
(9, 4, 0, 'Anaclet Ahishakiye', 'a.anaclet920@gmail.com', 'ok view as needed'),
(10, 0, 4, 'Anaclet Ahishakiye', 'a.anaclet920@gmail.com', 'paragraph is fine'),
(11, 0, 4, 'Anaclet Ahishakiye', 'a.anaclet920@gmail.com', 'paragraph is fine'),
(12, 0, 4, 'Anaclet Ahishakiye', 'a.anaclet920@gmail.com', 'paragraph is fine'),
(13, 0, 4, 'Anaclet Ahishakiye', 'a.anaclet920@gmail.com', 'paragraph is fine'),
(14, 0, 4, 'Anaclet Ahishakiye', 'a.anaclet920@gmail.com', 'paragraph is fine'),
(15, 0, 4, 'Anaclet Ahishakiye', 'a.anaclet920@gmail.com', 'paragraph is fine'),
(16, 0, 4, 'Anaclet Ahishakiye', 'a.anaclet920@gmail.com', 'paragraph is fine'),
(17, 0, 4, 'Anaclet Ahishakiye', 'a.anaclet920@gmail.com', 'paragraph is fine');

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
(2, '2-Hot-Home-icon-1522065218.png', 'Academic Logo'),
(3, 'Emoji-Glad-icon-1522011148.png', 'Business Logo'),
(4, 'Hugging_Face_Emoji_2028ce8b-c213-4d45-94aa-21e1a0842b4d_large-1522011155.png', 'Road Logo'),
(5, 'Emoji-Cute-icon-1522011162.png', 'Health Logo'),
(6, 'Emoji-Anger-icon-1522011171.png', 'English Logo'),
(7, 'Emoji-Whining-icon-1522011178.png', 'Culture Logo'),
(8, 'Emoji-Nervous-icon-1522011187.png', 'Quiz Logo'),
(9, '2-Hot-Home-icon-1522072803.png', 'Library'),
(10, 'Register-icon-1522072721.png', 'Scholarship'),
(11, 'Save-icon-1522072713.png', 'Past_Papers'),
(12, '1Password-icon-1522072705.png', 'Explore_Rwandan_Education'),
(13, '2-Hot-Home-icon-1522072823.png', 'Academic_news'),
(15, 'iDisk-User-Drive-icon-1522502990.png', 'Business_Opportunities'),
(16, 'word-doc-icon-1522503004.png', 'Business_Advice'),
(17, 'Animals-Sheep-On-Bike-icon-1522503018.png', 'Business_News'),
(18, 'Animals-Ant-icon-1522503034.png', 'Biographies_Of_Successful_Business_Men'),
(19, 'coreldraw-cdr-icon-1522503074.png', 'Meet_With_Business_Mentors'),
(20, 'Apps-session-logout-icon-1522094985.png', 'Nutritions'),
(21, 'word-doc-icon-1522095000.png', 'Traditional_Medecine'),
(22, 'Animals-Sheep-2-icon-1522095014.png', 'Serious_Deseases'),
(23, 'Log-Out-icon-1522095026.png', 'Doctor_Advice'),
(24, 'Animals-Rabbit-icon-1522095037.png', 'Health_News'),
(25, 'Logout-1522095057.png', 'Ask_Doctor'),
(26, '', 'Igazeti'),
(27, 'Piggy-bank-icon-1522095390.png', 'Ibibazo_nibisubizo'),
(28, 'Animals-Fish-2-icon+%281%29-1522095365.png', 'Ibyapa'),
(29, 'Monitor-icon-1522095455.png', 'Amakuru'),
(30, 'Animals-Giraffe-icon+%281%29-1522095484.png', 'Baza_Mwarimu'),
(31, 'Security-Password-2-icon-1522094953.png', 'For_Biginners'),
(32, 'Animals-Dog-Bowl-icon-1522503114.png', 'For_Intermediate'),
(33, 'Password-icon-1522094915.png', 'Advanced_English'),
(34, 'App-password-icon-1522094891.png', 'Business_English'),
(35, 'House-icon-1522094878.png', 'Ask_Teacher'),
(36, 'home-icon-1522094868.png', 'Amateka_yu_Rwanda'),
(37, '2-Hot-Home-icon-1522094860.png', 'Imigani'),
(38, 'png-icon-1522095331.png', 'Ibisakuzo'),
(39, 'Animals-Dog-Bowl-icon-1522095259.png', 'Kirazira_zumuco_Nyarwanda'),
(40, 'dropbox-icon-1522095311.png', 'Baza_Sokuru');

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
(1, 'the unicode) directly from this page into a text layer.', '<p>the unicode) directly from this page into a text layer.the unicode) directly from this page into a text layer.the unicode) directly from this page into a text layer.the unicode) directly from this page into a text layer.the unicode) directly from this page into a text layer.the unicode) directly from this page into a text layer.the unicode) directly from this page into a text layer.the unicode) directly from this page into a text layer.the unicode) directly from this page into a text layer.the unicode) directly from this page into a text layer.the unicode) directly from this page into a text layer.the unicode) directly from this page into a text layer.the unicode) directly from this page into a text layer.the unicode) directly from this page into a text layer.the unicode) directly from this page into a text layer.the unicode) directly from this page into a text layer.the unicode) directly from this page into a text layer.</p>\r\n', '', '', 'eng_class', 'For_Intermediates', '', '', '', '2-Hot-Home-icon.png', '2018-03-31 11:08:16', '0000-00-00 00:00:00', 0, 2, 1),
(2, 'tfyhijok', '<p>ftgyhuijkojhjgvhbjkljbvgbjklftgyhuijkojhjgvhbjkljbvgbjklftgyhuijkojhjgvhbjkljbvgbjklftgyhuijkojhjgvhbjkljbvgbjklftgyhuijkojhjgvhbjkljbvgbjklftgyhuijkojhjgvhbjkljbvgbjklftgyhuijkojhjgvhbjkljbvgbjklftgyhuijkojhjgvhbjkljbvgbjklftgyhuijkojhjgvhbjkljbvgbjklftgyhuijkojhjgvhbjkljbvgbjkl</p>\r\n', '', '', 'eng_class', 'For_Intermediates', '', '', '', 'Register-icon.png', '2018-03-31 12:18:00', '0000-00-00 00:00:00', 0, 2, 2),
(3, 'ftgyhuijkojhjgvhbjkljbvgbjklftgyhuijkojhjgvhbjkljbvgbjklftgyhuijkojhjgvhbjkljbvgbjkl', '<p>ftgyhuijkojhjgvhbjkljbvgbjklftgyhuijkojhjgvhbjkljbvgbjklftgyhuijkojhjgvhbjkljbvgbjklftgyhuijkojhjgvhbjkljbvgbjklftgyhuijkojhjgvhbjkljbvgbjklftgyhuijkojhjgvhbjkljbvgbjklftgyhuijkojhjgvhbjkljbvgbjklftgyhuijkojhjgvhbjkljbvgbjkl</p>\r\n', '', '', 'eng_class', 'For_Intermediates', '', '', '', 'home-icon.png', '2018-03-31 12:20:22', '0000-00-00 00:00:00', 0, 2, 4),
(4, 'paste it into a text field and let ligatures do the rest ', '<p>After following our&nbsp;<a href=\"https://fontawesome.com/get-started/desktop\">desktop get started steps</a>, you can copy any icon&#39;s name here and paste it into a text field and let ligatures do the rest of the work (when supported by your desktop app). Or you can also copy and paste the icon (not the unicode) directly from this page into a text layer.After following our&nbsp;<a href=\"https://fontawesome.com/get-started/desktop\">desktop get started steps</a>, you can copy any icon&#39;s name here and paste it into a text field and let ligatures do the rest of the work (when supported by your desktop app). Or you can also copy and paste the icon (not the unicode) directly from this page into a text layer.After following our&nbsp;<a href=\"https://fontawesome.com/get-started/desktop\">desktop get started steps</a>, you can copy any icon&#39;s name here and paste it into a text field and let ligatures do the rest of the work (when supported by your desktop app). Or you can also copy and paste the icon (not the unicode) directly from this page into a text layer.After following our&nbsp;<a href=\"https://fontawesome.com/get-started/desktop\">desktop get started steps</a>, you can copy any icon&#39;s name here and paste it into a text field and let ligatures do the rest of the work (when supported by your desktop app). Or you can also copy and paste the icon (not the unicode) directly from this page into a text layer.</p>\r\n', '', '', 'eng_class', 'For_Intermediates', '', '', '', 'Animals-Aquarium-icon.png', '2018-03-31 12:26:45', '0000-00-00 00:00:00', 0, 2, 1),
(5, 'Featured_images Featured_images Featured_images', '<p>Featured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_imagesFeatured_images</p>\r\n', '', '', 'eng_class', 'For_Intermediates', '', '', '', 'im (1).jpg', '2018-03-31 14:24:29', '0000-00-00 00:00:00', 0, 3, 3),
(6, 'yello ', '<p>yello&nbsp;yello&nbsp;yello&nbsp;yello&nbsp;yello&nbsp;yello&nbsp;yello&nbsp;yello&nbsp;yello&nbsp;yello&nbsp;yello&nbsp;yello&nbsp;yello&nbsp;yello&nbsp;</p>\r\n', '', 'admin', 'eng_class', 'For_Intermediates', '', '', '', 'lead_960.jpg', '2018-03-31 14:31:19', '0000-00-00 00:00:00', 0, 2, 1),
(7, 'content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit ame', '<p>content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet</p>\r\n', '', 'admin', 'eng_class', 'For_Intermediates', '', '', '', '636122739856255638-1137033243_Big-data-Exhaustive-review-pulls-together-evidence-on-food-groups-and-diet-related-disease.jpg', '2018-03-31 15:54:36', '0000-00-00 00:00:00', 0, 0, 0),
(8, 'content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet', '<p>content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet</p>\r\n', '', 'admin', 'eng_class', 'For_Intermediates', '', '', '', 'img.jpg', '2018-03-31 15:57:18', '0000-00-00 00:00:00', 0, 0, 1),
(9, 'content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet', '<p>content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet</p>\r\n', '', 'admin', 'eng_class', 'For_Intermediates', '', '', '', 'img.jpg', '2018-03-31 18:32:06', '0000-00-00 00:00:00', 0, 0, 3);

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
(1, 'the unicode) directly from this page into a text layer.', 'the unicode) directly from this page into a text layer.the unicode) directly from this page into a text layer.', 'Health-Sign-red-icon.png', 'For_Biginners', 'the unicode) directly from this page into a text layer.', 'eng_class', 0, 0, 0, '2018-03-31 11:10:06', '0000-00-00 00:00:00'),
(2, 'Games industry is ok', 'Description Description DescriptionDescription Description Description', 'Home-icon (3).png', 'Business_Opportunities', '<iframe width=\"854\" height=\"480\" src=\"https://www.youtube.com/embed/3SH3CPJhthE\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'business', 6, 0, 0, '2018-04-01 19:41:29', '0000-00-00 00:00:00'),
(4, 'very is sorry ik ok', 'very is sorry ik ok very is sorry ik ok very is sorry ik ok', 'Log-Out-icon.png', 'Business_Opportunities', '<iframe width=\"854\" height=\"480\" src=\"https://www.youtube.com/embed/3SH3CPJhthE\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'business', 11, 9, 0, '2018-04-01 10:18:32', '0000-00-00 00:00:00');

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
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `academic_doc`
--
ALTER TABLE `academic_doc`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
