-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2017 at 03:20 AM
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
CREATE DATABASE IF NOT EXISTS `musicforpilates` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `musicforpilates`;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `blurb` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `deliver` date NOT NULL,
  `coverlink` int(11) NOT NULL,
  `uploaddate` date NOT NULL,
  `enabled` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `blog`
--

TRUNCATE TABLE `blog`;
--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `keywords`, `blurb`, `content`, `author`, `deliver`, `coverlink`, `uploaddate`, `enabled`) VALUES
(2, 'Our new blog section.', 'first, post, pilates, music, welcome', 'Welcome to our new site, and our new blog section!', 'We\'ll be starting our new blog, to keep our customers and visitters up to date with everything Music for Pilates!\n\nFirst of all, welcome to our new and improved website!  We\'ve been wanting our website to be updatted for a little while now however we haven\'t had the chance to get it done.  That was until recently, when we were provided with the oppurtunity of a new, FREE website thanks to some students studying at SAE Qantm.  Working alongside them, we\'re happy to present our new website which will house our products, contact details and blog!\n\nSo please, take a look around and check out our music!  Check back regularly to see any new music and blog posts.', 'Lisa Horner and PJ Hawn', '2017-05-02', 104, '2017-05-02', 1),
(6, 'Preparing to see a lot of new music come this way!', 'new, wet, naughty, MA15+', 'LOTS of music coming your way.', 'Over the coming weeks we are planning on bringing in a lot of new content to the website!  We are very excited to start uploading more content to really push the site further forward!', 'Lisa Horner', '2017-05-02', 114, '2017-05-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `streetaddress` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hours` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `contact`
--

TRUNCATE TABLE `contact`;
--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `streetaddress`, `email`, `hours`) VALUES
(1, 'PO Box 1042, Kenmore, Queensland, Australia', 'lisa@musicforpilates.com', 'Opening Times Monday to Friday: 9AM to 5PM (GMT+10)');

-- --------------------------------------------------------

--
-- Table structure for table `featuredtracks`
--

DROP TABLE IF EXISTS `featuredtracks`;
CREATE TABLE `featuredtracks` (
  `id` int(11) NOT NULL,
  `trackid` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `featuredtracks`
--

TRUNCATE TABLE `featuredtracks`;
--
-- Dumping data for table `featuredtracks`
--

INSERT INTO `featuredtracks` (`id`, `trackid`) VALUES
(0, 26),
(1, 16),
(2, 17),
(3, 25);

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

DROP TABLE IF EXISTS `file`;
CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `uploaddate` date NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `file`
--

TRUNCATE TABLE `file`;
--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `link`, `uploaddate`, `type`) VALUES
(116, 'googleimages.com/thirdsong', '2017-05-03', 'image'),
(117, 'google.com/music/thirdsong.wav', '2017-05-03', 'music'),
(118, 'googleimages.com/thirdsong', '2017-05-03', 'image'),
(115, 'google.com/music/thirdsong.wav', '2017-05-03', 'music'),
(113, 'google.images.com/homepagge.jpeg', '2017-04-26', 'homepage picture'),
(112, 'myspace.com/lisa.jpg', '2017-04-24', 'profile picture'),
(111, 'myspace.com/perry.jpg', '2017-04-24', 'profile picture'),
(110, 'google.images.com/aboutuspagge.jpeg', '2017-04-24', 'about us blurb pic'),
(114, 'googleimages.com/newsoggs.jpg', '2017-05-02', 'blog image'),
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

DROP TABLE IF EXISTS `meta`;
CREATE TABLE `meta` (
  `id` int(11) NOT NULL,
  `pageid` int(11) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `meta`
--

TRUNCATE TABLE `meta`;
-- --------------------------------------------------------

--
-- Table structure for table `page`
--

DROP TABLE IF EXISTS `page`;
CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `description` varchar(255) NOT NULL,
  `article` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `page`
--

TRUNCATE TABLE `page`;
--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `title`, `keywords`, `content`, `description`, `article`) VALUES
(1, 'About all of us here at M4P', 'about, music, pilates', 'WE are an officially authorised online retail website providing high quality music tracks to professional Pilates and Fitness Instructors.', 'Having experience in music production, Lisa and PJ have created music designed for pilates classes for several years.', 'about us'),
(2, 'WELCOME to Music for Pilates', 'homepage, music, piplates', 'Yoga, gyms, fitness classes of all kinds, spas, even pubs, clubs, restaurants, hairdressers, offices, anywhere.  Yes, all our music is 100% royalty and license free. This means you can download and use your music in public places, without paying any fees to royalty and license organisations e.g. PPL (UK), PPCA (Australia), ASCAP (USA).', 'Lisa horner and PJ Hawn work together to bring you a collection of royalty free music, perfect for pilates classes.', 'home page'),
(3, 'Our track listings!', 'music, pilates, tracks, listing', 'Here is a collection of all our musical works to date, yo!', 'This is the music page, motherfucker', 'music page'),
(4, 'OUR collection of blogs!', 'blogs, music, pilates, lisa horner, pj hawn', 'Here is a collection of our blogs!  Be sure to check back regularly for more blogs!', 'Here is a collection of our blogs posts, from Lisa and PJ.', 'blog posts');

-- --------------------------------------------------------

--
-- Table structure for table `pageimage`
--

DROP TABLE IF EXISTS `pageimage`;
CREATE TABLE `pageimage` (
  `id` int(11) NOT NULL,
  `pageid` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `fileid` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `pageimage`
--

TRUNCATE TABLE `pageimage`;
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

DROP TABLE IF EXISTS `tag`;
CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `externalid` int(50) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `tag`
--

TRUNCATE TABLE `tag`;
-- --------------------------------------------------------

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `profile` text NOT NULL,
  `fileid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `team`
--

TRUNCATE TABLE `team`;
--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `profile`, `fileid`) VALUES
(1, 'PJ Hawn', 'PJ Hawn, also a founder member, has worked within the music industry as an international songwriter and music producer for over 30 years. He works with multiplatinum international recording artist, musicians and Grammy award winning producers in a wide range of genres and has released tracks, intentionally charting in many countries.\n\nPJ worked closely with Lisa on all the ‘Music for Pilates’ tracks, recording, mixing and mastering them to a high professional standard.', 111),
(2, 'Lisa Horner', 'Lisa Horner, a founder member has been working in the fitness industry for over 22 years, initially training and teaching Aerobics and various different mat classes, but the past 13 years her passion has been in Pilates. She has always struggled to find really good usable music for her classes.\n\nAfter many wasted CD purchases and hours spent searching for the ideal download, she decided to create her own music. What better time to embark on a new venture as she emigrated to Brisbane, Australia from the UK in 2012. The beautiful scenery and tranquil days inspiring the creation of calming and relaxing music.\n\nLisa is now teaching in amazing places, some classes are out in the open with beautiful Australian backdrops. These tranquil settings are in perfect harmony with ‘Music for Pilates’ albums. Lisa has rigourously tested all the products and they have proven to be highly successful with her clients and professional colleagues.', 112);

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

DROP TABLE IF EXISTS `track`;
CREATE TABLE `track` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `tags` varchar(255) NOT NULL,
  `soundcloudurl` varchar(255) NOT NULL,
  `tracklink` int(50) NOT NULL,
  `coverlink` int(50) NOT NULL,
  `deliver` date NOT NULL,
  `price` double NOT NULL,
  `bpm` varchar(10) NOT NULL,
  `duration` time NOT NULL,
  `orderposition` int(10) NOT NULL DEFAULT '0',
  `discountcode` varchar(50) DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `track`
--

TRUNCATE TABLE `track`;
--
-- Dumping data for table `track`
--

INSERT INTO `track` (`id`, `title`, `description`, `tags`, `soundcloudurl`, `tracklink`, `coverlink`, `deliver`, `price`, `bpm`, `duration`, `orderposition`, `discountcode`, `enabled`) VALUES
(16, 'MFP001 - Creation of our Dreams', 'This album consists of 3 tracks, lasting over an hour.\n\nThe was the first of our creations. A beautiful, chilled download with calming piano, flute, oboe and pan pipes. You will find your clients with their eyes closed and focusing on your voice, leaving them to really concentrate on their practice. Ideal for Pilates and relaxation.', 'music, pilates, dreams', 'soundcloud.com/music/newsong.wav', 40, 41, '2014-05-08', 25, '60', '01:12:30', 0, '', 1),
(17, 'MFP002 - Whale\'s Journey | Music For Pilates', 'Consists of 3 tracks, lasting over an hour.\n\nA relaxing, mellow and happy feel, using strings, acoustic guitar, piano and flute sounds. Suitable for all Pilates styles.', 'music, pilates, whale, journey', 'soundcloud.com/music/deletemeplz.wav', 42, 43, '2014-05-08', 25, '80', '00:45:50', 0, '', 1),
(25, 'MFP003 - Birds of Paradise | Music for Pilates', 'This album consists of 4 tracks lasting over an hour.\n\nIt has a beautiful, light and up beat feel. It is easy to lose yourself in these wonderful piano and guitar based sounds. You will be able to focus on your teaching and your participants will be able to focus on their practice. Ideal for all styles of Pilates and relaxation.', 'music, pilates, birds, paradise', 'soundcloud.com/music/thirdsong.wav', 100, 101, '2014-05-08', 25, '100', '02:03:00', 0, '', 1),
(26, 'MFP004 - Funky Music | Music for Pilates', 'Consists of 5 tracks, lasting over an hour.\n\nThis download is available in 5 different tempos: 120bpm, 126bpm, 128bpm,130bpm and 132bpm, enabling you to use it for various style classes, such as Barre and more energetic, circuit type Pilates classes. It has a fun and funky feel and will leave you and your participants feeling invigorated and energised.', 'music, pilates, funky, pop', 'soundcloud.com/music/thirdsong.wav', 102, 103, '2014-05-08', 25, '126', '01:10:50', 0, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
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
-- Indexes for table `featuredtracks`
--
ALTER TABLE `featuredtracks`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `featuredtracks`
--
ALTER TABLE `featuredtracks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT for table `meta`
--
ALTER TABLE `meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
