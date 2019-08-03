-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2019 at 10:45 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr13_adam_gyarmati_bigevents`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `eventName` varchar(155) COLLATE utf8_unicode_ci NOT NULL,
  `eventDesc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eventImg` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eventCapacity` int(11) NOT NULL,
  `eventEmail` varchar(155) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eventPhone` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eventAdd` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eventUrl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eventType` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eventDate` varchar(155) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `eventName`, `eventDesc`, `eventImg`, `eventCapacity`, `eventEmail`, `eventPhone`, `eventAdd`, `eventUrl`, `eventType`, `eventDate`) VALUES
(1, 'Big Event', 'This is a very big event', NULL, 12000, 'bigevent@gmail.com', '066235589756', '1180 Billrothstrasse 19, Vienna', 'https://bigevent.com', 'Movie', '2020-06-10 10:00'),
(5, 'Laiser Show', 'New Year laiser show', NULL, 3000, 'laiser@gmail.com', '069033568987', '1110 Newyearstrasse 31, Vienna', 'http://laiser.com', 'Music', '2020-12-31 23:00'),
(13, 'Vienna Mozart Orchestra', 'Vienna Mozart Orchestra, Golden Hall of Musikverein and Vienna State Opera\r\n\r\nDetails\r\nOrchestra: Mozart Orchestra\r\nVenue: Golden Hall, State Opera, Konzerthaus\r\nAddress: Kärtner Strasse 51\r\nContent: Overtures, Arias, Symphonies, Serenades\r\nCompositions: ', 'vienna-mozart-orchestra2-5d453b9718583.jpeg', 600, 'vienna@gmail.com', '06639865469', '1110 Newyearstrasse 31, Vienna', 'http://viennaevents.com', 'Music', '2019-11-20 19:30'),
(14, 'Dinner and Schoenbrunn Concert', 'This package offers a unique combination of two delightful destinations: gourmet cuisine and world-famous music. Enjoy a first-class dinner at Café-Restaurant Residenz, followed by a concert at Schoenbrunn Palace Orangery including the most beautiful work', 'schoenbrunn_dinner-5d453ea5e1e5d.jpeg', 80, 'vienna@gmail.com', '069033568987', '1990 Neuburg 23', 'http://viennaevents.com', 'Music', '2019-09-16 19:00'),
(15, 'Spanish Riding School', 'The performances of the famous snowy white Lipizzaner stallions and their riders in the baroque Winter Riding School built by Josef Emanuel Fischer von Erlach in the years 1729 to 1735 are some of the most moving and beautiful impressions for horse lovers', 'riding-school-5d453f17c6ea5.jpeg', 600, 'vienna@gmail.com', '06639865469', '1110 Newyearstrasse 31, Vienna', 'http://viennaevents.com', 'Sport', '2019-09-16 11:00'),
(16, 'CATS Musical', 'CATS triumphantly swept the world straight after its première in London, revolutionising the musical world. The legendary play has been recognised by all the major theatre awards, including seven Tony® Awards, one for \"Best Musical\", as well as three \"Oli', 'cats_musical_vienna_cover-5d453f920f8d2.jpeg', 900, 'vienna@gmail.com', '069033568987', '1110 Newyearstrasse 31, Vienna', 'http://viennaevents.com', 'Theater', '25 September 2019 - 18:30'),
(17, 'Ariana Grande', 'Multi-platinum artist Ariana Grande comes to Europe with Sweetener World Tour. 2019 live in Germany, Austria and Switzerland.\r\n\r\nWith her powerful voice and her extraordinary vocal range, Ariana Grande is considered one of the most successful pop artists ', NULL, 3000, 'vienna@gmail.com', '069033568987', 'Stadthalle, Vienna', 'http://viennaevents.com', 'Music', '03 September 2019 - 19:30'),
(18, 'Ariana Grande', 'Multi-platinum artist Ariana Grande comes to Europe with Sweetener World Tour. 2019 live in Germany, Austria and Switzerland.\r\n\r\nWith her powerful voice and her extraordinary vocal range, Ariana Grande is considered one of the most successful pop artists ', 'ariana-grande-wien-top-5d454089b06dd.jpeg', 3000, 'vienna@gmail.com', '069033568987', 'Stadthalle, Vienna', 'http://viennaevents.com', 'Music', '2019-11-20 19:30');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$13$28FLobV/OmE418d3DuOrt.XiIMozE5jCzuEiAa8iD/TS.RYejJZZq'),
(2, 'adam', 'adam@gmail.com', '$2y$13$Xmi2vl5MUC.lgoNnlvueZerpVm4YDF6iO/7p7J76knszAAdQQD2jy'),
(3, 'hello', 'hello@gmail.com', '$2y$13$wRtvH52haoPWpzIiqMbqc.9TM2zSpIlJBxONqZ17UpNFzk.Nc0qG.'),
(4, 'new', 'newy@gmail.com', '$2y$13$.64SgMM6fX4LWmoQsofHlOt7dKSO7tFJPX/K/Uv2D21vXusPlorkq'),
(5, 'brandnew', 'brandnew@gmail.com', '$2y$13$H8h7ummAhJlhVctqu4Isre9ARuOj6AwBagR4bhwiOAQ8/roByREXC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_70E4FA78F85E0677` (`username`),
  ADD UNIQUE KEY `UNIQ_70E4FA78E7927C74` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
