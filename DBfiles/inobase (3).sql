-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 09:08 PM
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
(1, 'Mukia Vid Primiere', 'Education is the power of the people', 'blueprint.png', 'https://www.youtube.com/watch?v=7qWMHpKqsrc', 'biology', 'high school', '5');

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

--
-- Dumping data for table `academic_doc`
--

INSERT INTO `academic_doc` (`id`, `title`, `author`, `description`, `pages`, `thumb`, `book_file`, `level`, `course`, `year`) VALUES
(1, 'HOCUS POCUS', 'Van Corp', 'The emperior the d neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas', 233, '', 'LAB_vers1-1521287957-1523187658.pdf', 'high school', 'economie', 5),
(2, 'The adven', 'Mikoas', 'You ha adas asYou ha adas asYou ha adas asYou ha adas asYou ha adas asYou ha adas asYou ha adas asYou ha adas asYou ha adas asYou ha adas asYou ha adas asYou ha adas asYou ha adas as', 3214, '', 'report-1523198420.pdf', 'primary', 'english', 6),
(3, 'Mike will made it!', 'Mio Pizza', 'The unix time stamp is a way to track time as a running total of seconds. This count starts at the Unix Epoch on January 1st, 1970 at UTC. Therefore, the unix time stamp is merely the number of seconds between a particular date and the Unix Epoch. It should also be pointed out (thanks to the comments from visitors to this site) that this point in time technically does not change no matter where you are located on the globe. This is very useful to computer systems for tracking and sorting dated information in dynamic and distributed applications both online and client side.', 76, '', 'hwk10_2-1523204041.pdf', 'primary', 'francais', 1);

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
(1, 'Helo', 'lucas', 'the unicode) directly from this page into a text layer.the unicode) directly from this page into a text layer.', 32, 312320, 'admin', 'Lecture+1-2018-1522494575.ppt', 'eng_class', '0', '0', '0', 'Default.png', 'For_Biginners', 0, 0, NULL, '2018-03-31 11:09:35'),
(2, 'ESRDYFTUIK', 'DXFGHJ', 'EWARSGYIJOGFCXZSDXFBHJ', 45, 4890, 'admin', 'Logout-1522496413.png', 'eng_class', '0', '0', '0', 'Default.png', 'For_Intermediates', 0, 0, NULL, '2018-03-31 11:40:13'),
(3, 'etrdtfhuj', 'fghj', 'oijhuftreswasdfgy', 23, 15517, 'admin', 'Apps-preferences-desktop-user-password-icon-1522496595.png', 'eng_class', '0', '0', '0', 'Default.png', 'For_Intermediates', 0, 0, NULL, '2018-03-31 11:43:15'),
(4, 'HOCUS POCUS', 'Van Corp', 'The emperior the d neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas', 233, 0, 'admin', 'LAB_vers1-1521287957-1523187658.pdf', '', 'high school', '5', 'economie', 'help.png', '', 0, 0, NULL, '2018-04-08 16:36:17'),
(5, 'The adven', 'Mikoas', 'You ha adas asYou ha adas asYou ha adas asYou ha adas asYou ha adas asYou ha adas asYou ha adas asYou ha adas asYou ha adas asYou ha adas asYou ha adas asYou ha adas asYou ha adas as', 3214, 0, 'admin', 'report-1523198420.pdf', '', 'primary', '6', 'english', 'blueprint.png', '', 0, 0, NULL, '2018-04-08 16:36:17'),
(6, 'Mike will made it!', 'Mio Pizza', 'The unix time stamp is a way to track time as a running total of seconds. This count starts at the Unix Epoch on January 1st, 1970 at UTC. Therefore, the unix time stamp is merely the number of seconds between a particular date and the Unix Epoch. It should also be pointed out (thanks to the comments from visitors to this site) that this point in time technically does not change no matter where you are located on the globe. This is very useful to computer systems for tracking and sorting dated information in dynamic and distributed applications both online and client side.', 76, 0, 'admin', 'hwk10_2-1523204041.pdf', '', 'primary', '1', 'francais', 'attachment.png', '', 0, 0, NULL, '2018-04-08 16:36:17');

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
(9, 'content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet', '<p>content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet&nbsp;content here Lorem ipsum dolor sit amet, id nec conceptam conclusionemque.Lorem ipsum dolor sit amet</p>\r\n', '', 'admin', 'eng_class', 'For_Intermediates', '', '', '', 'img.jpg', '2018-03-31 18:32:06', '0000-00-00 00:00:00', 0, 0, 3),
(10, 'How to solve quadratic equations!', '<p>For the best practice, use a well rounded calculatot</p>\r\n\r\n<p><img alt=\"\" src=\" http://localhost/INOGIT/Resources/Storage/Images/1523186602.png\" style=\"height:300px; width:300px\" /></p>\r\n\r\n<p><u><em><strong><span style=\"font-size:14px\">Never Forget to doublecheck</span></strong></em></u></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><em><strong><span style=\"font-size:14px\">Gow Make</span></strong></em></u></p>\r\n\r\n<p>d neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit au<span style=\"color:#e67e22\">gue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas erod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas ero</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>d neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas ero</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>d neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas ero</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>d neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas ero</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>d neque, sed ornare massa mauris sed <span style=\"background-color:#c0392b\">velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas ero</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>d neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas ero</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>d neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas ero</p>\r\n\r\n<p>Do you love balls?</p>\r\n\r\n<p><input name=\"ball\" type=\"radio\" />No</p>\r\n\r\n<p><input name=\"ball\" type=\"radio\" />Yes</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#c0392b\">jeskfdc</span></p>\r\n', '', 'mik', 'academic', '', 'high school', 'math', '6', 'calculator-1.png', '2018-04-08 11:27:17', '0000-00-00 00:00:00', 0, 0, 0),
(11, 'English for Newbie', '<p>Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor uMaecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor uMaecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor uMaecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor uMaecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor uMaecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor uMaecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor uMaecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor uMaecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor uMaecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor uMaecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor u</p>\r\n', '', 'mik', 'academic', '', 'primary', 'english', '3', '22115-3-cartoon-bee.png', '2018-04-08 14:51:19', '0000-00-00 00:00:00', 0, 0, 0);

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
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
