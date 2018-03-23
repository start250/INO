-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2018 at 06:54 PM
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
('Da Vinci Code', 'Dan Brown', 'The Best book of life and love!', 456, 5154486, 'Marsenadmin', '2018-03-15 19:56:00', '0000-00-00 00:00:00', 1, '\\INOGIT\\Resources\\Storage\\Books\\advanced-arch-2011-1521143760.pdf', 'health', 'Da Vinci Code', 0, 0, ''),
('English for Newbie', 'Malinde', 'Not easy Hard, difficult, ultra powerful', 325, 245956, 'Mucyo', '2018-03-15 19:57:31', '0000-00-00 00:00:00', 2, 'C:\\xampp\\htdocs\\INOGIT\\Resources\\Storage\\Books\\484Lecture-Wireless-Hacking-1521143851.pdf', 'English Class', 'English for Newbie', 0, 0, ''),
('We English!', 'Musafili', 'but if you use header function then some times you will get \"warning like header already send\" to resolve that do not echo or print before sending headers or you can simply use die() or exit() after header function.', 23, 385371, 'Muhizi', '2018-03-15 20:06:42', '0000-00-00 00:00:00', 4, 'C:\\xampp\\htdocs\\INOGIT\\Resources\\Storage\\Books\\gronowski1998-1521144402.pdf', 'English Class', 'We English!', 0, 0, ''),
('Boo book', 'reti', 'fggfkfgk', 1, 19031, 'anony', '2018-03-18 15:30:48', '0000-00-00 00:00:00', 6, 'thumbnail-1521387048.jpg', 'English Class', 'Boo book', 0, 0, ''),
('liku', 'klkl', 'cxvdlkf', 54, 0, 'gffgf', '2018-03-18 15:34:51', '0000-00-00 00:00:00', 7, 'l-1521387291.txt', 'Rules of the Road', 'liku', 0, 0, ''),
('English Vocs', 'jet pack', 'sderiroegbgritjre regklgklrelkg', 12, 182329, 'boo', '2018-03-19 05:49:27', '0000-00-00 00:00:00', 8, 'INO+technical+description-1521438567.pdf', 'English Class', 'English Vocs', 0, 0, ''),
('Types of Plagiarism', 'Positivo', 'erdtfuyjokjbvcvbvbnghj,', 23, 23444, '', '2018-03-19 17:00:38', '0000-00-00 00:00:00', 9, 'TypesofPlagiarism-1521478838.pdf', 'Culture', 'Types of Plagiarism', 0, 0, ''),
('dfghj', 'sdfgh', 'sdrtyu', 45, 307712, 'admin', '2018-03-20 17:30:45', NULL, 14, 'lecture+1-2018-1521567045.ppt', 'Academic', 'phpF531.tmp', 0, 0, ''),
('yfgjehglk', 'dfghj', 'asdfghj', 5, 707014, 'admin', '2018-03-20 17:40:00', NULL, 15, 'lecture3-1521567600.pdf', 'Academic', '', 0, 0, ''),
('dfghj', 'fghjk', 'sdfyghj', 23, 307712, 'admin', '2018-03-20 17:40:50', NULL, 16, 'lecture+1-2018-1521567650.ppt', 'Academic', 'php622C.tmp', 0, 0, ''),
('hsafkhb', 'jabkjhv,n', 'sdrtfyhj', 55, 243610, 'admin', '2018-03-20 17:42:55', NULL, 17, 'Designing+performance+of+microprocessor+speed-1521567775.pdf', 'Academic', 'Emoji-Glad-icon.png', 0, 0, ''),
('ujhafdjk', 'jfabjkghn', 'yuefhj', 34, 307712, 'admin', '2018-03-20 18:04:06', NULL, 18, 'lecture+1-2018-1521569046.ppt', 'Academic', 'Emoji-Anger-icon.png', 0, 0, ''),
('ykejfhi', 'kjefgwbujk', 'xctvbjkml', 456, 707014, 'admin', '2018-03-20 18:04:56', NULL, 19, 'lecture3-1521569096.pdf', 'Academic', 'Emoji-Anger-icon.png', 0, 0, ''),
('hkjhlwjqegwrl', 'hekw,jg.rh', 'rytfyguhilfgu', 54, 243610, 'admin', '2018-03-20 18:06:14', NULL, 20, 'Designing+performance+of+microprocessor+speed-1521569174.pdf', 'Academic', 'Emoji-Anger-icon.png', 0, 0, 'Life Book'),
('rtfyhwjer', 'gvbjklg', 'erdyfuij', 54, 307712, 'admin', '2018-03-20 18:09:46', NULL, 21, 'lecture+1-2018-1521569386.ppt', 'Business', 'Emoji-Anger-icon.png', 0, 0, 'Business News'),
('ayefukyghuij', 'tfygjhfgrjmg', 'etsrfyghij', 234, 707014, 'admin', '2018-03-21 06:19:48', NULL, 22, 'lecture3-1521613188.pdf', 'Culture', 'Register-icon.png', 0, 0, 'Imigani'),
('jrhekj', 'dgfhgjkl', 'fghjkl;', 345, 270069, 'admin', '2018-03-21 18:43:22', NULL, 23, '1461023276-1521657802.0024quizes+300+Dr+Mahdi', 'culture', 'banana-714.jpg', 0, 0, 'Imigani'),
('new333', '', '', 0, 5907274, 'admin', '2018-03-22 09:27:16', NULL, 24, 'The_Brothers_Karamazov_T-1521710836.pdf', 'eng_class', 'SHOEE.JPG', 0, 0, 'For Business'),
('New11', 'mike', 'book categorybook categorybook categorybook categorybook categorybook categorybook categorybook categorybook categorybook categorybook categorybook categorybook categorybook categorybook categorybook categorybook categorybook categorybook categorybook categorybook categorybook categorybook category', 1221, 5907274, 'Mike', '2018-03-22 09:29:03', NULL, 25, 'The_Brothers_Karamazov_T-1521710943.pdf', 'eng_class', 'b57719e23371d70b681c537612a4f789.jpg', 0, 0, 'Select Category'),
('new', '', '', 0, 883584, 'admin', '2018-03-22 21:37:55', NULL, 26, 'report-1521754675.pdf', 'academic', 'AAUW-Local-Scholarship.jpg', 0, 0, 'Select Category');

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
  `comments` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `excerpt`, `author`, `section`, `category`, `level`, `course`, `year`, `featured_image`, `created_at`, `updated_at`, `shares`, `comments`) VALUES
(1, 'The do of idiots', '<ol>\r\n	<li><br />\r\n	<span style=\"font-size:15.21px\">Changes</span>\r\n	<table id=\"nav\">\r\n		<tbody>\r\n			<tr>\r\n				<td>&nbsp;</td>\r\n				<td>&nbsp;</td>\r\n				<td>&nbsp;</td>\r\n				<td>&nbsp;</td>\r\n				<td>&nbsp;</td>\r\n				<td>&nbsp;</td>\r\n				<td>&nbsp;</td>\r\n				<td>&nbsp;</td>\r\n				<td>&nbsp;</td>\r\n				<td>&nbsp;</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	</li>\r\n</ol>\r\n', '', '', 'eng_class', 'Select Category', '', '', '', '', '2018-03-22 15:07:39', '0000-00-00 00:00:00', 0, 0),
(2, 'New Post', '<p>SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELEC<u><strong>T * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[</strong></u>&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;</p>\r\n', '', '', 'eng_class', 'For Business', '', '', '', 'AAUW-Local-Scholarship.jpg', '2018-03-22 15:46:51', '0000-00-00 00:00:00', 0, 0),
(3, 'New Post', '<p>SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELEC<u><strong>T * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[</strong></u>&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;SELECT * FROM Posts WHERE id=&#39;&quot;.$_GET[&quot;edit&quot;].&quot;&#39;</p>\r\n', '', '', 'eng_class', 'Beginners', '', '', '', '', '2018-03-22 15:47:10', '0000-00-00 00:00:00', 0, 0),
(4, 'The idiots', '<h3><a href=\"https://www.lipsum.com/feed/html\">Muhiree- All the facts - Lipsum generator</a></h3>\r\n\r\n<p><cite>https://www.lipsum.com/feed/html</cite></p>\r\n\r\n<ol>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p><a href=\"https://translate.google.rw/translate?hl=en&amp;sl=la&amp;u=https://www.lipsum.com/feed/html&amp;prev=search\">Translate this page</a>Reference site about&nbsp;<em>Lorem Ipsum</em>, giving information on its origins, as well as a random Lipsum generator.</p>\r\n\r\n<h3><a href=\"http://generator.lorem-ipsum.info/\">Professional lorem ipsum generator for typographers</a></h3>\r\n\r\n<p><cite>generator.lorem-ipsum.info/</cite></p>\r\n\r\n<ol>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p><em>Lorem Ipsum copy</em>&nbsp;in various charsets and languages for layouts.</p>\r\n\r\n<h3><a href=\"http://www.lorem.biz/loremipsum.php\">Lorem Ipsum - copy as much text as you need</a></h3>\r\n\r\n<p><cite>www.lorem.biz/loremipsum.php</cite></p>\r\n\r\n<ol>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p><a href=\"https://translate.google.rw/translate?hl=en&amp;sl=la&amp;u=http://www.lorem.biz/loremipsum.php&amp;prev=search\">Translate this page</a><em>Lorem ipsum</em>&nbsp;dolor sit amet, consectetuer adipiscing elit. Nam nibh. Nunc varius facilisis eros. Sed erat. In in velit quis arcu ornare laoreet. Curabitur adipiscing luctus massa. Integer ut purus ac augue commodo commodo. Nunc nec mi eu justo tempor consectetuer. Etiam vitae nisl. In dignissim lacus ut ante. Cras elit lectus&nbsp;...</p>\r\n\r\n<h3><a href=\"http://www.blindtextgenerator.com/lorem-ipsum\">|| Dummy Text Generator | Lorem ipsum for webdesigners ||</a></h3>\r\n\r\n<p><cite>www.blindtextgenerator.com/lorem-ipsum</cite></p>\r\n\r\n<ol>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p>A handy&nbsp;<em>Lorem Ipsum</em>&nbsp;Generator that helps to create dummy text for all layout needs.</p>\r\n\r\n<h3><a href=\"http://www.cupcakeipsum.com/\">Cupcake Ipsum - Sugar-coated Lorem Ipsum Generator</a></h3>\r\n\r\n<p><cite>www.cupcakeipsum.com/</cite></p>\r\n\r\n<ol>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p>Long Medium Short. Start with &quot;Cupcake&nbsp;<em>ipsum</em>&nbsp;dolor sit amet&quot; &quot;Give your text some &quot;love&quot;. Generate. Happy muffin Sweets Light brown muffin Sweet cherry Green muffin Light pink muffin Blue muffin Pink pie Cherry Pink muffin Raspberry. Supported by the softwear loving girls at Unerdwear and Basia. Donut White muffin.</p>\r\n\r\n<h3><a href=\"https://mashable.com/2013/07/11/lorem-ipsum/\">56 Unique Lorem Ipsum Generators - Mashable</a></h3>\r\n\r\n<p><cite>https://mashable.com/2013/07/11/lorem-ipsum/</cite></p>\r\n\r\n<ol>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p>Jul 11, 2013 -&nbsp;Spice up your filler text and design projects with these hilarious&nbsp;<em>lorem ipsum</em>&nbsp;generators. ... Cat Ipsum. The web loves cats, so what better way to celebrate those cute, furry creatures than to litter your&nbsp;<em>copy</em>&nbsp;with kittens? Combine this with Placekitten for the ultimate feline inspired mockup. &quot;Cat ipsum dolor sit&nbsp;...</p>\r\n\r\n<h3><a href=\"http://websitetips.com/articles/copy/lorem/\">Lorem Ipsum Dolor Sit Amet Dummy Text or Dummy Copy aka Sample ...</a></h3>\r\n\r\n<p><cite>websitetips.com &rsaquo; Articles, Tutorials, Tips &rsaquo; Lorem Ipsum Text</cite></p>\r\n\r\n<ol>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p>Nov 18, 2007 -&nbsp;Below is a sample of &ldquo;<em>Lorem ipsum</em>&nbsp;dolor sit&rdquo; dummy&nbsp;<em>copy</em>&nbsp;text often used to show font face samples, for page layout and design as sample layout text by printers, graphic designers, Web designers, people creating Microsoft Word templates, and many other uses. It mimics the look of real text quite well as&nbsp;...</p>\r\n\r\n<h3><a href=\"http://lorizzle.nl/\">Gangsta Lorem Ipsum dummy text generator</a></h3>\r\n\r\n<p><cite>lorizzle.nl/</cite></p>\r\n\r\n<ol>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p>Gangsta&nbsp;<em>Lorem Ipsum</em>&nbsp;generator &middot; If you like this, follow us on twitter and we let you know when you. By: Jeroen, Gerard and Dennis (built in some stray minutes, while working at Zicht Online)</p>\r\n\r\n<h3><a href=\"https://placeholder.com/text/lorem-ipsum/\">Copy &amp; Paste Lorem Ipsum at Placeholder.comPlaceholder.com</a></h3>\r\n\r\n<p><cite>https://placeholder.com/text/lorem-ipsum/</cite></p>\r\n\r\n<ol>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p><br />\r\n<em>&nbsp;</em></p>\r\n\r\n<table id=\"nav\">\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '', '', 'eng_class', 'Select Category', '', '', '', '', '2018-03-22 15:57:47', '0000-00-00 00:00:00', 0, 0),
(5, 'The Beginning of Erva', '<p>Erva was kind ov a dik</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede</p>\r\n\r\n<p><img alt=\"\" src=\"https://placehold.it/350x400\" /></p>\r\n\r\n<p>sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>\r\n', '', '', 'eng_class', 'Intermediate', '', '', '', 'selfie.jpg', '2018-03-22 19:33:45', '0000-00-00 00:00:00', 0, 0),
(6, 'The return of Xender', '<p>&nbsp;s. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida m</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://placehold.it/400x300\" />jkefchsd kcaefdnsjkwd<img alt=\"\" src=\"http://placehold.it/400x300\" />jkefchsd kcaefdnsjkwd</p>\r\n\r\n<p><img alt=\"\" src=\"http://placehold.it/400x300\" />jkefchsd kcaefdnsjkwd</p>\r\n\r\n<p>s. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida ms. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida m</p>\r\n', '', '', 'eng_class', 'Intermediate', '', '', '', 'selfie.jpg', '2018-03-22 19:41:19', '0000-00-00 00:00:00', 0, 0),
(7, 'The return of Xender', '<p>&nbsp;s. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida m</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://placehold.it/400x300\" />jkefchsd kcaefdnsjkwd<img alt=\"\" src=\"http://placehold.it/400x300\" />jkefchsd kcaefdnsjkwd</p>\r\n\r\n<p><img alt=\"\" src=\"http://placehold.it/400x300\" />jkefchsd kcaefdnsjkwd</p>\r\n\r\n<p>s. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida ms. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida m</p>\r\n', '', '', 'eng_class', 'Intermediate', '', '', '', 'selfie.jpg', '2018-03-22 19:41:19', '0000-00-00 00:00:00', 0, 0),
(8, 'The return of Xender', '<p>&nbsp;s. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida m</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://placehold.it/400x300\" />jkefchsd kcaefdnsjkwd<img alt=\"\" src=\"http://placehold.it/400x300\" />jkefchsd kcaefdnsjkwd</p>\r\n\r\n<p><img alt=\"\" src=\"http://placehold.it/400x300\" />jkefchsd kcaefdnsjkwd</p>\r\n\r\n<p>s. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida ms. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida m</p>\r\n', '', '', 'eng_class', 'Intermediate', '', '', '', 'selfie.jpg', '2018-03-22 19:41:20', '0000-00-00 00:00:00', 0, 0),
(9, 'Mirio Mayio', '<h2>Add a Breakpoint</h2>\r\n\r\n<p>Earlier in this tutorial we made a web page with rows and columns, and it was responsive, but it did not look good on a small screen.</p>\r\n\r\n<p>Media queries can help with that. We can add a breakpoint where certain parts of the design will behave differently on each side of the breakpoint.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', 'academic', '', 'primary', 'francais', '4', 'dino.JPG', '2018-03-22 20:13:41', '0000-00-00 00:00:00', 0, 0),
(10, 'klgdf', '<p>klhgyftdzh</p>\r\n', '', '', 'academic', '', 'Select Level...', 'Select Course...', 'Select...', 'dino.JPG', '2018-03-22 20:14:47', '0000-00-00 00:00:00', 0, 0),
(11, 'nnsadnas c', '<p>&nbsp;add a breakpoint where certain parts of the design will behave differently on each side of the breakpoint.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;add a breakpoint where certain parts of the design will behave differently on each side of the breakpoint.&nbsp;add a breakpoint where certain parts of the design will behave differently on each side of the breakpoint.</p>\r\n', '', '', 'eng_class', 'Beginners', '', '', '', 'Front ID.jpg', '2018-03-22 20:15:46', '0000-00-00 00:00:00', 0, 0),
(12, 'jhgfgdfd', '<p>jouyirtysae&#39;</p>\r\n\r\n<p>lkjogfhgsaf</p>\r\n\r\n<p>kjhgffd<img alt=\"\" src=\"localhost/INOGIT/Resources/Storage/Postimgs/1521754139.jpg\" /></p>\r\n', '', '', 'academic', '', 'Select Level...', 'Select Course...', 'Select...', '', '2018-03-22 21:30:07', '0000-00-00 00:00:00', 0, 0),
(13, 'ensdjkBC', '<p>[lvpebjadfwq</p>\r\n\r\n<p>vefjsqkaerbf</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/INOGIT/Resources/Storage/Postimgs/1521754412.jpg\" style=\"height:330px; width:419px\" /></p>\r\n\r\n<p>vefav;jlenrvf</p>\r\n', '', '', 'academic', '', 'Select Level...', 'Select Course...', 'Select...', '', '2018-03-22 21:34:23', '0000-00-00 00:00:00', 0, 0),
(14, 'Limo', '<p><img alt=\"\" src=\" http://localhost/INOGIT/Resources/Storage/Postimgs/1521757649.JPG\" style=\"height:446px; width:864px\" /></p>\r\n', '', '', 'academic', '', 'primary', 'kinyarwanda', 'Select...', '2000px-American_Association_of_University_Women_logo.jpg', '2018-03-22 22:28:10', '0000-00-00 00:00:00', 0, 0),
(15, 'Le best as', '<p>&nbsp;</p>\r\n\r\n<p>0down vote</p>\r\n\r\n<p>If you are just trying to have placeholder text that gets replaced when a user selects the element then it is obviously best practice to use&nbsp;<code>placeholder</code>&nbsp;attribute nowadays. However, if you want to select all of the current value when a field gains focus then a combination of @Cory House and @Toastrackeni</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/INOGIT/Resources/Storage/Postimgs/1521797942.jpg\" /></p>\r\n\r\n<p>gma answers seems to be most canonical. Use&nbsp;<code>focus</code>&nbsp;and&nbsp;<code>focusout</code>&nbsp;events, with handlers that set/release the current focus element, and select all when focused. An angular2/typescript example is as follows (but would be trivial to convert to vanilla js):</p>\r\n\r\n<p>Template:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', 'academic', '', 'nursary', 'baby', 'Select...', 'placeholder-car.jpg', '2018-03-23 09:40:13', '0000-00-00 00:00:00', 0, 0),
(16, '', '<p>http://localhost/INOGIT/Resources/Storage/Postimgs/1521827105.jpg</p>\r\n\r\n<p><br />\r\n<span style=\"font-size:9px\"><img alt=\"\" src=\" http://localhost/INOGIT/Resources/Storage/Postimgs/1521827105.jpg\" style=\"height:333px; width:500px\" /></span></p>\r\n', '', '', 'academic', '', 'Select Level...', 'Select Course...', 'Select...', '', '2018-03-23 17:46:12', '0000-00-00 00:00:00', 0, 0),
(17, '', '<p>http://localhost/INOGIT/Resources/Storage/Postimgs/1521827105.jpg</p>\r\n\r\n<p><br />\r\n<span style=\"font-size:9px\"><img alt=\"\" src=\" http://localhost/INOGIT/Resources/Storage/Postimgs/1521827105.jpg\" style=\"height:333px; width:500px\" /></span></p>\r\n', '', '', 'academic', '', 'Select Level...', 'Select Course...', 'Select...', '', '2018-03-23 17:47:31', '0000-00-00 00:00:00', 0, 0);

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
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
