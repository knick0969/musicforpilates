-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2017 at 12:06 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musicforpilates`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `deliver` date NOT NULL,
  `coverlink` int(11) NOT NULL,
  `uploaddate` date NOT NULL,
  `enabled` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `content`, `author`, `deliver`, `coverlink`, `uploaddate`, `enabled`) VALUES
(5, 'Editted blog 4', 'This blog has been editted twice', 'This is my NEW editted Blog post diddly dawg!', 'Nick Big Daddy Kington', '2017-04-27', 109, '2017-04-27', 1),
(2, 'Untitled Blog.', 'This is my new Blog post diddly dawg!', 'This is my blog.  It is my blog.  I must look after this blog.  It has content.  Its not good though', 'Nick Big Daddy Kington', '2017-04-20', 104, '2017-04-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `streetaddress` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hours` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `streetaddress`, `email`, `hours`) VALUES
(1, 'New address', 'new email', 'new hours');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `uploaddate` date NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `link`, `uploaddate`, `type`) VALUES
(113, 'google.images.com/homepagg.jpeg', '2017-04-26', 'homepage picture'),
(112, 'myspace.com/lisa.jpg', '2017-04-24', 'profile picture'),
(111, 'myspace.com/perry.jpg', '2017-04-24', 'profile picture'),
(110, 'google.images.com/newimage.jpeg', '2017-04-24', 'about us blurb pic'),
(109, 'googleimages.com/newblogimage4', '2017-04-20', 'blog image'),
(104, 'googleimages.com/blogcoverimg', '2017-04-20', 'blog image'),
(103, 'googleimages.com/thirdsong', '2017-04-21', 'image'),
(102, 'google.com/music/thirdsong.wav', '2017-04-21', 'music'),
(101, 'googleimages.com/thirdsong', '2017-04-21', 'image'),
(100, 'google.com/music/thirdsong.wav', '2017-04-21', 'music'),
(43, 'googleimages.com/deleteimg4', '2017-04-18', 'image'),
(42, 'google.com/music/deleted2.wav', '2017-04-18', 'music'),
(41, 'googleimages.com/newimg', '2017-04-10', 'image'),
(40, 'google.com/music/nusong.mp3', '2017-04-10', 'music');

-- --------------------------------------------------------

--
-- Table structure for table `meta`
--

CREATE TABLE `meta` (
  `id` int(11) NOT NULL,
  `pageid` int(11) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `content`, `description`) VALUES
(1, 'This is new content LALALALALALALA', 'about us blurb'),
(2, 'New Homepage deets yoloswag!', 'home page blurb');

-- --------------------------------------------------------

--
-- Table structure for table `pageimage`
--

CREATE TABLE `pageimage` (
  `id` int(11) NOT NULL,
  `pageid` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `fileid` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pageimage`
--

INSERT INTO `pageimage` (`id`, `pageid`, `type`, `fileid`) VALUES
(1, 1, 'about us picture', '110'),
(2, 2, 'home page picture', '113');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `externalid` int(50) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `profile` text NOT NULL,
  `fileid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `profile`, `fileid`) VALUES
(1, 'New Perry!', 'This is Perrys NEW and UPDATED profile blurb', 111),
(2, 'The new and improved Lisa!', 'This is Lisas NEW and UPDATED profile blurb', 112);

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `soundcloudurl` varchar(255) NOT NULL,
  `tracklink` int(50) NOT NULL,
  `coverlink` int(50) NOT NULL,
  `deliver` date NOT NULL,
  `price` double NOT NULL,
  `bpm` varchar(10) NOT NULL,
  `orderposition` int(10) NOT NULL DEFAULT '0',
  `discountcode` varchar(50) DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`id`, `title`, `description`, `soundcloudurl`, `tracklink`, `coverlink`, `deliver`, `price`, `bpm`, `orderposition`, `discountcode`, `enabled`) VALUES
(16, 'New song 2', 'This is the new test song', 'soundcloud.com/music/newsong.wav', 40, 41, '2017-04-27', 32.9, '666', 2, '0', 1),
(17, 'Editted song3', 'This is a song that needs to be DELETED', 'soundcloud.com/music/deletemeplz.wav', 42, 43, '2017-04-26', 2, '123', 0, '', 1),
(25, 'Song number 3', 'Third song', 'soundcloud.com/music/thirdsong.wav', 100, 101, '2017-04-26', 2, '123', 0, '0', 0),
(26, 'Song number 4', 'Third song', 'soundcloud.com/music/thirdsong.wav', 102, 103, '2017-04-26', 2, '123', 0, '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'root', '$2y$10$ifh.qKbAv.bOtnNInk7AFOWWFB51TPhGdBaIV3AUwVOhaDUC.qwFW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pageimage`
--
ALTER TABLE `pageimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `meta`
--
ALTER TABLE `meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pageimage`
--
ALTER TABLE `pageimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
