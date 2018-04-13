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
(1, 'hello p', 'hello p', 'hello p hello p hello p hello p hello p ', 22, 27615, 'licas', 'Assignment-Set+1-1523381383.pdf', 'academic', '', '', '', 'Anaclet.png', 'Science Book', 2, 0, NULL, '2018-04-10 17:29:43'),
(2, 'dfghjkl', 'ghbjnmk,', 'cvbbnm,.', 6, 22027, 'ghjkl.', 'Assignment-Set+2-1523382584.pdf', 'eng_class', '', '', '', 'Corneille.png', '', 0, 0, NULL, '2018-04-10 17:49:44'),
(3, 'DHJHKHF', 'FGHJMK', 'GHGMJ,KFD', 212, 27615, 'NVBNV', 'Assignment-Set+1-1523382820.pdf', 'eng_class', '', '', '', 'Anaclet.png', '', 0, 0, NULL, '2018-04-10 17:53:40'),
(4, 'motherfucker', 'motherfucker', 'motherfucker ', 12, 22027, 'rtfgyhj', 'Assignment-Set+2-1523383292.pdf', 'eng_class', '', '', '', 'Corneille.png', 'For_Intermediates', 0, 0, NULL, '2018-04-10 18:01:32'),
(5, 'fghjkjf', 'gdfhghjk', 'dgrhftgyhjb drftghj', 45, 27615, 'fghjk', 'Assignment-Set+1-1523383346.pdf', 'rules_road', '', '', '', 'Isaie.png', 'Ibibazo_nibisubizo', 0, 0, NULL, '2018-04-10 18:02:26'),
(6, 'fghjkj', 'fghjjj', 'dgfhghjk', 54, 22027, 'dgfhgjhkj', 'Assignment-Set+2-1523396458.pdf', 'academic', '', '', '', 'Anaclet.png', 'Science Book', 0, 0, NULL, '2018-04-10 21:40:58'),
(7, 'gfddf', 'ghj', 'ghghj', 45, 27615, 'fghj', 'Assignment-Set+1-1523396980.pdf', 'academic', '', '', '', 'Corneille.png', 'ICT Book', 0, 0, NULL, '2018-04-10 21:49:40');

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
(7, 'gggggggggggg', '<p>cccccccccccccccccccc</p>\r\n', '', 'mik', 'academic', '', 'other info', 'Tips to Win Scholaship', '1', 'Corneille.png', '2018-04-10 22:08:58', '0000-00-00 00:00:00', 0, 0, 1),
(8, 'cccccccccccccccccccccc', '<p>cccccccccccccccccccc</p>\r\n', '', 'mik', 'academic', '', 'other info', 'links', '', 'Isaie.png', '2018-04-10 22:09:17', '0000-00-00 00:00:00', 0, 0, 2),
(9, 'ssssssssssssssssssssssss', '<p>ssssssssssssssssssssssss</p>\r\n', '', 'mik', 'academic', '', 'other info', 'News', '1', '', '2018-04-10 22:09:32', '0000-00-00 00:00:00', 0, 0, 0),
(10, '', '', '', 'mik', 'academic', '', '', '', '', '', '2018-04-10 22:09:35', '0000-00-00 00:00:00', 0, 0, 0),
(11, 'Return of Kim', '<form action=\"https://www.google.rw/search\" id=\"tsf\" method=\"GET\" name=\"f\">\r\n<h1><a href=\"https://www.google.rw/webhp?hl=en&amp;sa=X&amp;ved=0ahUKEwjToqnGgrXaAhWEuxQKHd6ICEYQPAgD\" id=\"logo\" title=\"Go to Google Home\"><img alt=\"Google\" src=\"https://www.google.rw/images/branding/googlelogo/2x/googlelogo_color_120x44dp.png\" style=\"height:44px; width:120px\" /></a></h1>\r\n\r\n<p><input maxlength=\"2048\" name=\"q\" type=\"text\" value=\"yarn add --dev --exact react-scripts@1.0.0\" /><input /><input /></p>\r\n</form>\r\n\r\n<p>All</p>\r\n\r\n<p><a href=\"https://www.google.rw/search?q=yarn+add+--dev+--exact+react-scripts%401.0.0&amp;source=lnms&amp;tbm=vid&amp;sa=X&amp;ved=0ahUKEwjToqnGgrXaAhWEuxQKHd6ICEYQ_AUICigB\">Videos</a></p>\r\n\r\n<p><a href=\"https://www.google.rw/search?q=yarn+add+--dev+--exact+react-scripts%401.0.0&amp;source=lnms&amp;tbm=isch&amp;sa=X&amp;ved=0ahUKEwjToqnGgrXaAhWEuxQKHd6ICEYQ_AUICygC\">Images</a></p>\r\n\r\n<p><a href=\"https://www.google.rw/search?q=yarn+add+--dev+--exact+react-scripts%401.0.0&amp;source=lnms&amp;tbm=nws&amp;sa=X&amp;ved=0ahUKEwjToqnGgrXaAhWEuxQKHd6ICEYQ_AUIDCgD\">News</a></p>\r\n\r\n<p><a href=\"https://maps.google.rw/maps?q=yarn+add+--dev+--exact+react-scripts%401.0.0&amp;um=1&amp;ie=UTF-8&amp;sa=X&amp;ved=0ahUKEwjToqnGgrXaAhWEuxQKHd6ICEYQ_AUIDSgE\">Maps</a></p>\r\n\r\n<p>More</p>\r\n\r\n<p><a href=\"https://www.google.rw/preferences\" id=\"abar_button_opt\" tabindex=\"0\">Settings</a>Tools</p>\r\n\r\n<ol>\r\n</ol>\r\n\r\n<p>About 11,100 results&nbsp;(0.41 seconds)&nbsp;</p>\r\n\r\n<h2>Search Results</h2>\r\n\r\n<h3><a href=\"https://github.com/facebook/create-react-app/issues/2225\">react-scripts@1.0.0 can&#39;t `npm start` if dependencies include ... - GitHub</a></h3>\r\n\r\n<p><cite>https://github.com/facebook/create-react-app/issues/2225</cite></p>\r\n\r\n<ol>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p>May 18, 2017 -&nbsp;For those encountering this issue, running yarn upgrade after running&nbsp;<em>yarn add --</em><em>dev --exact react-scripts</em>@<em>1.0.0</em>&nbsp;solved the issue without removing storybook.</p>\r\n\r\n<h3><a href=\"https://github.com/react-community/create-react-native-app/issues/229\">Error creating new app with &quot;create-react-native-app&quot; &middot; Issue #229 ...</a></h3>\r\n\r\n<p><cite>https://github.com/react-community/create-react-native-app/issues/229</cite></p>\r\n\r\n<ol>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p>May 26, 2017 -&nbsp;Installing&nbsp;<em>react</em>-native-<em>scripts</em>... npm WARN deprecated fs-promise@<em>1.0.0</em>: Use mz or fs-extra^3.0 with Promise Suppor t npm WARN deprecated @exponent/spawn-async@1.2.8: ... /home/jimmy/my-app/npm-debug.log `npm install&nbsp;<em>--</em>save-<em>dev --</em>save-<em>exact react</em>-native-<em>scripts</em>` failed jimmy@AppDev:~$&nbsp;...</p>\r\n\r\n<h3><a href=\"https://github.com/facebook/create-react-app/issues/2268\">Failing on installing react-scripts &middot; Issue #2268 &middot; facebook/create-react ...</a></h3>\r\n\r\n<p><cite>https://github.com/facebook/create-react-app/issues/2268</cite></p>\r\n\r\n<ol>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p>May 19, 2017 -&nbsp;Arguments: /Users/mshin/.nvm/versions/node/v6.9.5/bin/node /usr/local/bin/<em>yarnpkg add --exact react</em>-<em>scripts</em>&nbsp;PATH: /Users/mshin/.nvm/versions/node/v6.9.5/bin:/usr/local/bin:/usr/bin:/bin:/usr/sbin:/sbin Yarn version: 0.24.5 Node version: 6.9.5 Platform: darwin x64 npm manifest: { &quot;dependencies&quot;: { &quot;react&quot;:&nbsp;...</p>\r\n\r\n<h3><a href=\"https://github.com/react-community/create-react-native-app/issues/118\">Error creating new app with &quot;create-react-native-app&quot; &middot; Issue #118 ...</a></h3>\r\n\r\n<p><cite>https://github.com/react-community/create-react-native-app/issues/118</cite></p>\r\n\r\n<ol>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p>Mar 26, 2017 -&nbsp;`yarnpkg&nbsp;<em>add --dev --exact</em>&nbsp;--ignore-optional&nbsp;<em>react</em>-native-<em>scripts</em>` failed. If I try multiple times, it will sometimes fail on a different package but that may just come down to parallel fetching and which one fails first. FWIW, my issue seems to be agnostic of CRNA, I simply can&#39;t install scoped pages with&nbsp;<em>yarn</em>&nbsp;for&nbsp;...</p>\r\n\r\n<h3><a href=\"https://github.com/facebook/create-react-app/issues/2172\">Public Beta Testing of react-scripts@1.0.0 &middot; Issue #2172 &middot; facebook ...</a></h3>\r\n\r\n<p><cite>https://github.com/facebook/create-react-app/issues/2172</cite></p>\r\n\r\n<ol>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p>May 16, 2017 -&nbsp;<em>Add</em>&nbsp;support for dynamic import &amp; disable require.ensure #1538. Closed .....&nbsp;<em>yarn</em>&nbsp;start v0.21.3 $&nbsp;<em>react</em>-<em>scripts</em>&nbsp;start module.js:472 throw err; ^ Error: Cannot find module &#39;react-<em>dev</em>-utils/ModuleScopePlugin&#39; at Function.Module._resolveFilename .... Maybe we should pass the&nbsp;<em>--exact</em>flag to lerna. Yikes, looks&nbsp;...</p>\r\n\r\n<h3><a href=\"https://github.com/react-community/create-react-native-app/issues/526\">Can&#39;t create a new app &middot; Issue #526 &middot; react-community/create-react ...</a></h3>\r\n\r\n<p><cite>https://github.com/react-community/create-react-native-app/issues/526</cite></p>\r\n\r\n<ol>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p>Jan 6, 2018 -&nbsp;create-<em>react</em>-native-app foo failed with output: Creating a new&nbsp;<em>React</em>&nbsp;Native app in /Users/yashapodeswa/projects/foo. Using package manager as yarnpkg with yarn interface. Installing packages. This might take a couple minutes. Installing&nbsp;<em>react</em>-native-<em>scripts</em>...&nbsp;<em>yarn add</em>&nbsp;v1.3.2 info No lockfile found.</p>\r\n\r\n<h3><a href=\"https://github.com/majodev/aaa-create-react-app-typescript/blob/master/packages/react-scripts/template/README.md\">aaa-create-react-app-typescript/README.md at master &middot; majodev/aaa ...</a></h3>\r\n\r\n<p><cite>https://github.com/majodev/aaa-create-react...typescript/.../react-scripts/.../README.m...</cite></p>\r\n\r\n<ol>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p>The generated project includes&nbsp;<em>React</em>&nbsp;and&nbsp;<em>ReactDOM</em>&nbsp;as dependencies. It also includes a set of&nbsp;<em>scripts</em>used by Create&nbsp;<em>React</em>&nbsp;App as a&nbsp;<em>development</em>&nbsp;dependency. You may install other dependencies (for example,&nbsp;<em>React</em>&nbsp;Router) with npm : npm install&nbsp;<em>--</em>save&nbsp;<em>react</em>-router. Alternatively you may use yarn :<em>yarn add react</em>-router.</p>\r\n\r\n<h3><a href=\"https://github.com/kitze/custom-react-scripts/blob/master/CHANGELOG.md\">custom-react-scripts/CHANGELOG.md at master &middot; kitze/custom-react ...</a></h3>\r\n\r\n<p><cite>https://github.com/kitze/custom-react-scripts/blob/master/CHANGELOG.md</cite></p>\r\n\r\n<ol>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p>GitHub is where people build software. More than 27 million people use GitHub to discover, fork, and contribute to over 80 million projects.</p>\r\n\r\n<h3><a href=\"https://stackoverflow.com/questions/39959900/npm-start-error-with-create-react-app\">javascript - npm start error with create-react-app - Stack Overflow</a></h3>\r\n\r\n<p><cite>https://stackoverflow.com/questions/39959900/npm-start-error-with-create-react-app</cite></p>\r\n\r\n<ol>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p>Oct 10, 2016 -&nbsp;&quot;scripts&quot;: { &quot;start&quot;: &quot;./node_modules/<em>react</em>-<em>scripts</em>/bin/<em>react</em>-<em>scripts</em>.js start&quot;, &quot;start:prod&quot;: &quot;pushstate-server build&quot;, &quot;build&quot;: &quot;./node_modules/<em>react</em>-<em>scripts</em>/bin/<em>react</em>-<em>scripts</em>.js build&quot;, &quot;test&quot;: &quot;./node_modules/<em>react</em>-<em>scripts</em>/bin/<em>react</em>-<em>scripts</em>.js test&nbsp;<em>--</em>env=jsdom&quot;, &quot;eject&quot;: &quot;./node_modules/<em>react</em>-<em>scripts</em>/bin/<em>react</em>-<em>scripts</em>.js&nbsp;...</p>\r\n\r\n<h3><a href=\"https://libraries.io/npm/react-scripts-sedona\">react-scripts-sedona 1.0.0-beta.7 on npm - Libraries.io</a></h3>\r\n\r\n<p><cite>https://libraries.io/npm/react-scripts-sedona</cite></p>\r\n\r\n<ol>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p>npm install -g create-react-app@1.3.0 create-react-app my-app&nbsp;<em>--</em>scripts-version=<em>react</em>-<em>scripts</em>-sedona cd my-app/ npm install&nbsp;<em>--</em>save-<em>dev</em>&nbsp;@types/node @types/react @types/react-dom @types/jest npm start. We recommand to use&nbsp;<em>yarn</em>&nbsp;instead of npm. To do so, install&nbsp;<em>yarn</em>, and then :&nbsp;<em>yarn</em>&nbsp;global&nbsp;<em>add</em>create-react-app@1.3.0&nbsp;...</p>\r\n\r\n<table id=\"nav\">\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>1</td>\r\n			<td><a href=\"https://www.google.rw/search?q=yarn+add+--dev+--exact+react-scripts%401.0.0&amp;ei=83bPWpPdE4T3Ut6RorAE&amp;start=10&amp;sa=N\">2</a></td>\r\n			<td><a href=\"https://www.google.rw/search?q=yarn+add+--dev+--exact+react-scripts%401.0.0&amp;ei=83bPWpPdE4T3Ut6RorAE&amp;start=20&amp;sa=N\">3</a></td>\r\n			<td><a href=\"https://www.google.rw/search?q=yarn+add+--dev+--exact+react-scripts%401.0.0&amp;ei=83bPWpPdE4T3Ut6RorAE&amp;start=30&amp;sa=N\">4</a></td>\r\n			<td><a href=\"https://www.google.rw/search?q=yarn+add+--dev+--exact+react-scripts%401.0.0&amp;ei=83bPWpPdE4T3Ut6RorAE&amp;start=40&amp;sa=N\">5</a></td>\r\n			<td><a href=\"https://www.google.rw/search?q=yarn+add+--dev+--exact+react-scripts%401.0.0&amp;ei=83bPWpPdE4T3Ut6RorAE&amp;start=50&amp;sa=N\">6</a></td>\r\n			<td><a href=\"https://www.google.rw/search?q=yarn+add+--dev+--exact+react-scripts%401.0.0&amp;ei=83bPWpPdE4T3Ut6RorAE&amp;start=60&amp;sa=N\">7</a></td>\r\n			<td><a href=\"https://www.google.rw/search?q=yarn+add+--dev+--exact+react-scripts%401.0.0&amp;ei=83bPWpPdE4T3Ut6RorAE&amp;start=70&amp;sa=N\">8</a></td>\r\n			<td><a href=\"https://www.google.rw/search?q=yarn+add+--dev+--exact+react-scripts%401.0.0&amp;ei=83bPWpPdE4T3Ut6RorAE&amp;start=80&amp;sa=N\">9</a></td>\r\n			<td><a href=\"https://www.google.rw/search?q=yarn+add+--dev+--exact+react-scripts%401.0.0&amp;ei=83bPWpPdE4T3Ut6RorAE&amp;start=90&amp;sa=N\">10</a></td>\r\n			<td><a href=\"https://www.google.rw/search?q=yarn+add+--dev+--exact+react-scripts%401.0.0&amp;ei=83bPWpPdE4T3Ut6RorAE&amp;start=10&amp;sa=N\" id=\"pnnext\">Next</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Rwanda&nbsp;</p>\r\n\r\n<p>Nyarugenge, Kigali&nbsp;-&nbsp;From your search history&nbsp;-&nbsp;<a href=\"https://www.google.rw/search?q=yarn+add+--dev+--exact+react-scripts%401.0.0&amp;oq=yarn+add+--dev+--exact+react-scripts%401.0.0&amp;aqs=chrome..69i57&amp;sourceid=chrome&amp;ie=UTF-8#\" id=\"swml-upd\">Use precise location</a>&nbsp;-&nbsp;<a href=\"https://support.google.com/websearch?p=ws_settings_location&amp;hl=en-RW\">Learn more</a></p>\r\n\r\n<p><a href=\"https://support.google.com/websearch/?p=ws_results_help&amp;hl=en-RW&amp;fg=1\">Help</a><a href=\"https://www.google.rw/search?q=yarn+add+--dev+--exact+react-scripts%401.0.0&amp;oq=yarn+add+--dev+--exact+react-scripts%401.0.0&amp;aqs=chrome..69i57&amp;sourceid=chrome&amp;ie=UTF-8#\" id=\"dk2qOd\" target=\"_blank\">Send feedback</a><a href=\"https://www.google.rw/intl/en_rw/policies/privacy/?fg=1\">Privacy</a><a href=\"https://www.google.rw/intl/en_rw/policies/terms/?fg=1\">Terms</a></p>\r\n\r\n<p>&nbsp;</p>\r\n', '', 'mik', 'academic', '', 'high school', 'computer', '6', 'i-love-books-books-to-read-18694968-500-445.jpg', '2018-04-12 20:24:08', '0000-00-00 00:00:00', 0, 0, 7);

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
(1, '1523477067', 'dfghj', 'dfghj', 'dfgh', 'dfgh', 'wert', 'checkbox', 'General knowledge', 'sfdgfhgjhj'),
(2, '1523477067', 'dfghj', 'dfghj', 'dfgh', 'dfgh', 'wert', 'radio', 'General knowledge', 'sfdgfhgjhj'),
(3, '1523477067', 'dfghj', 'dfgh', 'dfgh', 'wert', 'wer', 'radio', 'General knowledge', 'sfdgfhgjhjb'),
(4, '1523477067', 'dfgh', 'dfgh', 'wert', 'wer', 'werty', 'radio', 'General knowledge', 'sfdgfhgjhjb'),
(5, '1523566911', 'Who is the president of USA?', 'Trump', 'Obama', 'Kagame', 'Hillary', 'checkbox', 'General knowledge', 'USA Knowledge'),
(6, '1523566911', 'Who is the president of USA?', 'Trump', 'Obama', 'Kagame', 'Hillary', 'radio', 'General knowledge', 'USA Knowledge');

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
(1, 'fgnhb', 'bnghhnbv', 'Anaclet.png', 'Business_Advice', 'dfghjfdscdvfb', 'business', 1, 0, 0, '2018-04-11 00:14:58', '0000-00-00 00:00:00');

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
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
