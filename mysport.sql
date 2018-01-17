-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2018 at 04:18 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysport`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `name`, `description`) VALUES
(1, 'judul', 'MySports'),
(2, 'header2.1', 'Ingatlah'),
(3, 'header1.1', 'Kita tidak berhenti berolahraga karena menjadi renta'),
(4, 'header4.1', 'Kita menjadi renta karena berhenti berolahraga'),
(9, 'header3.1', ' Michael Jordan'),
(10, 'pgraph.1', '   I\'ve missed more than 9,000 shots in my career. I\'ve lost almost 300 games. 26 times, I\'ve been trusted to take the game winning shot and missed. I\'ve failed over and over and over again in my life. And that is why I succeed'),
(11, 'header3.2', ' KEVIN DURANT'),
(12, 'pgraph.2', ' Hard work beats talent when talent fails to work hard.'),
(13, 'header3.3', 'JESSE OWENS'),
(14, 'pgraph.3', ' In the end, it’s extra effort that separates a winner from second place. It takes desire, determination, discipline, and self-sacrifice. Put all these together, and even if you don’t win, how can you lose?'),
(15, 'habout.1', 'Our Vision'),
(16, 'pabout.1', ' Menjadi agensi olahraga nomor satu di Dunia yang berkualitas, terpercaya dan terdepan dalam memenuhi kebutuhan client'),
(17, 'habout.2', ' Our Mission'),
(18, 'pabout.2', 'Memberi pelayanan yang terbaik kepada client di setiap permintaan dan memberikan hasil yang terbaik yang menyenangkan hati client'),
(19, 'ptest1.1', ' We just wanted to say a huge thank you for selecting Tom as the best boy on the course at the breakfast club course at MySports... I can\'t tell you just what this means for Tom. '),
(20, 'ptest1.2', ' It is going to do wonders for his self-esteem and confidence. It would take us a lot longer to achieve a similar result using the techniques we use at home. Tom really enjoys attending the course and can\'t wait until it starts up again'),
(21, 'client.1', ' Roxas'),
(22, 'ptest2.1', 'MySports team have been absolutely brilliant! The children have developed skills in P.E. in games, multi-skills and athletics. All the children have been engaged in the activities to choose from and enthused to become better at sports.'),
(23, 'ptest2.2', '  We have had nothing but positive feedback from all staff through Foundation Stage to Year 2; \'inspirational\' and \'energetic\' being some of many words chosen to describe the MySports team. Thank you!'),
(24, 'client.2', ' Mrs Audsley'),
(25, 'ptest3.1', ' My son has been going for the last year, in the school holidays and as always has had a fabulous time. I sign him up for the Olympians course as he gets to experience several different sports, some of which aren\'t even for his age group yet! '),
(26, 'ptest3.2', ' He has come home this time with a list of about 5 sports he wants to do, all extra to school and playing with friends and he also has swimming!!'),
(27, 'client.3', ' John Vamous');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'singgih@gmail.com', '123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
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
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
