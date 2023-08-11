-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2022 at 09:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` char(10) NOT NULL,
  `Status` tinyint(1) DEFAULT 0,
  `Created_At` datetime NOT NULL,
  `Updated_At` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`Id`, `Name`, `Username`, `Email`, `Password`, `Role`, `Status`, `Created_At`, `Updated_At`) VALUES
(1, 'John', 'John Hang Rai', 'j@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'admin', 1, '2022-08-03 17:28:23', '2022-08-03 17:28:23'),
(2, 'Shankhar', 'Shankhar Ghalan', 's@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'admin', 1, '2022-08-03 17:48:44', '2022-08-03 17:48:44');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `Id` int(11) NOT NULL,
  `Name` mediumtext NOT NULL,
  `Email` mediumtext NOT NULL,
  `Message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`Id`, `Name`, `Email`, `Message`) VALUES
(1, 'Jin', 'jin@gmail.com', 'It\'s Awesome!!!'),
(2, 'Iu', 'iu@gmail.com', 'Nice...'),
(3, 'Binita', 'b@gmail.com', 'Hello'),
(4, 'Jin', 'jin@gmail.com', 'Can you add song tab of Genshin OST. Tq'),
(5, 'Iu', 'iu@gmail.com', 'Omae wa mou tabs. Thank you');

-- --------------------------------------------------------

--
-- Table structure for table `guitarlessons`
--

CREATE TABLE `guitarlessons` (
  `Id` int(11) NOT NULL,
  `Video_Name` mediumtext NOT NULL,
  `uid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guitarlessons`
--

INSERT INTO `guitarlessons` (`Id`, `Video_Name`, `uid`) VALUES
(1, 'Lesson-_1.mp4', NULL),
(2, 'Lesson-_2.mp4', NULL),
(3, 'Lesson-_3.mp4', NULL),
(4, 'Lesson-_4.mp4', NULL),
(5, 'Lesson-_5.mp4', NULL),
(6, 'Bending-Lesson.mp4', NULL),
(7, '8 Steps To Understand Music Theory - Guitar Lesson.mp4', NULL),
(8, 'CAGED.mp4', NULL),
(9, 'Right Hand Picking Exercise - Guitar Lesson.mp4', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pianolessons`
--

CREATE TABLE `pianolessons` (
  `Id` int(11) NOT NULL,
  `Video_Name` mediumtext NOT NULL,
  `uid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pianolessons`
--

INSERT INTO `pianolessons` (`Id`, `Video_Name`, `uid`) VALUES
(1, 'C.mp4', NULL),
(2, 'chord-positions-2x2 (1)', NULL),
(3, 'grand staff labelled', NULL),
(4, 'sonata in c major - accidentals paino', NULL),
(5, 'sontata in c - dynamics', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `songtutorials`
--

CREATE TABLE `songtutorials` (
  `Id` int(11) NOT NULL,
  `Title` mediumtext NOT NULL,
  `Song_Tab` mediumtext NOT NULL,
  `Details` mediumtext NOT NULL,
  `uid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songtutorials`
--

INSERT INTO `songtutorials` (`Id`, `Title`, `Song_Tab`, `Details`, `uid`) VALUES
(1, 'MoonLike Smile - Dragonspine - GENSHIN IMPACT', 'MoonLike Smile - Dragonspine - GENSHIN IMPACT.jpeg', 'Capo: 1st Fret <br>\r\nTuning: Standard (EADGBe) <br>\r\nKey: F# <br>\r\nComposer: Yu-Peng Chen @HOYO-MiX', NULL),
(2, 'Dawn Winery', 'Dawn Winery - Genshin impact.jpeg', 'Capo: 2nd Fret <br>\r\nTuning: Standard (EADGBe) <br>\r\nKey: G <br>\r\nComposer: Yu-Peng Chen @HOYO-MiX', NULL),
(3, 'Omae Wa Mou', 'Omae Wa Mou.jpeg', 'Capo: No capo <br>\r\nTuning: Standard (EADGBe) <br>\r\nKey: C <br>\r\nComposer: Deadman', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Name` mediumtext NOT NULL,
  `Email` mediumtext NOT NULL,
  `Password` mediumtext NOT NULL,
  `Profile` mediumtext NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Name`, `Email`, `Password`, `Profile`) VALUES
(1, 'binita12', 'b@gmail.com', 'e8dc4081b13434b45189a720b77b6818', 'yoona.jpg'),
(2, 'jin12345', 'jin@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'jin.jpg'),
(3, 'iu123456', 'iu@gmail.com', 'ef73781effc5774100f87fe2f437a435', 'IU.jpg'),
(21, 'sagarghalan', 's@gmail.com', '25d55ad283aa400af464c76d713c07ad', '638920-naruto-shippuden-ultimate-ninja-storm-anime-action-fighting-1nsuns-fantasy-martial-arts.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `guitarlessons`
--
ALTER TABLE `guitarlessons`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `pianolessons`
--
ALTER TABLE `pianolessons`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `songtutorials`
--
ALTER TABLE `songtutorials`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `guitarlessons`
--
ALTER TABLE `guitarlessons`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pianolessons`
--
ALTER TABLE `pianolessons`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `songtutorials`
--
ALTER TABLE `songtutorials`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guitarlessons`
--
ALTER TABLE `guitarlessons`
  ADD CONSTRAINT `guitarlessons_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`Id`);

--
-- Constraints for table `pianolessons`
--
ALTER TABLE `pianolessons`
  ADD CONSTRAINT `pianolessons_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`Id`);

--
-- Constraints for table `songtutorials`
--
ALTER TABLE `songtutorials`
  ADD CONSTRAINT `songtutorials_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
