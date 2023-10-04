-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2021 at 09:34 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `QuestionId` int(50) NOT NULL,
  `QuestionText` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `QuizId` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`QuestionId`, `QuestionText`, `QuizId`) VALUES
(1, 'In what coding language was original Minecraft created?', 1),
(2, 'Who was the original creator of Minecraft?', 1),
(3, 'Which of these tools can be used to harvest Lapis Lazuli ore?', 1),
(4, 'What is the highest level of Sharpness that can be obtained in vanilla minecraft?', 1),
(5, 'Which of these is not a structure that can be found in minecraft?', 1),
(6, 'How many pieces of obsidian are needed to make a nether portal?', 1),
(7, 'How many iron ingots does it take to craft an iron chestplate?', 1),
(8, 'What does a Wither drop upon being killed?', 1),
(9, 'In what dimension is the Ender Dragon located at?', 1),
(10, 'What ingredient is used to brew a potion of swiftness?', 1),
(11, 'Which of the following names in the name of Yasuo\'s ultimate ability?', 2),
(12, 'What is the name of Riven\'s passive ability?', 2),
(13, 'Which of these items doesnt give any ability power?', 2),
(14, 'What is the name of Garen\'s second (w) ability?', 2),
(15, 'Which of the following items is a on-hit effect item?', 2),
(16, 'What is the name of Quinn\'s passive ability?', 2),
(17, 'Which of these items is a magic resistance item?', 2),
(18, 'What is the name of Annie\'s passive ability?', 2),
(19, 'Which of the following monster has most hp at the lowest level?', 2),
(20, 'Which of these runes is not a precision path rune?', 2),
(21, 'What are the ruins to the northwest of Mondstadt called?', 3),
(22, 'What is Jean\'s official title?', 3),
(23, 'Which of the following reactions is not an electro reaction?', 3),
(24, 'What is the name of Beidou\'s elemental burst?', 3),
(25, 'What is the name of Fischl\'s elemental skill?', 3),
(26, 'What is the name of Diluc\'s elemental burst?', 3),
(27, 'What is the name of Mona\'s normal attack?', 3),
(28, 'Which of the following is not a claymore weapon?', 3),
(29, 'Which of the following is a polearm weapon?', 3),
(30, 'Which of these places is in Liyue?', 3);

-- --------------------------------------------------------

--
-- Table structure for table `questionchoices`
--

CREATE TABLE `questionchoices` (
  `ChoiceId` int(200) NOT NULL,
  `Choice` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `RightChoice` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  `QuestionId` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questionchoices`
--

INSERT INTO `questionchoices` (`ChoiceId`, `Choice`, `RightChoice`, `QuestionId`) VALUES
(1, 'C', '0', 1),
(2, 'C++', '0', 1),
(3, 'Java', '1', 1),
(4, 'Python', '0', 1),
(5, 'Elon Musk', '0', 2),
(6, 'Mark Zuckerberg', '0', 2),
(7, 'Jens Bergensten', '0', 2),
(8, 'Markus Persson', '1', 2),
(9, 'Golden axe', '0', 3),
(10, 'Diamond hoe', '0', 3),
(11, 'Stone pickaxe', '1', 3),
(12, 'None of the above', '0', 3),
(13, 'III', '0', 4),
(14, 'V', '1', 4),
(15, 'I', '0', 4),
(16, 'IV', '0', 4),
(17, 'Desert temple', '0', 5),
(18, 'Forest hut', '1', 5),
(19, 'Ocean monument', '0', 5),
(20, 'Nether fortress', '0', 5),
(21, '8', '0', 6),
(22, '10', '1', 6),
(23, '6', '0', 6),
(24, '12', '0', 6),
(25, '8', '1', 7),
(26, '6', '0', 7),
(27, '12', '0', 7),
(28, '4', '0', 7),
(29, 'Wither Skeleton skull', '0', 8),
(30, 'Bones', '0', 8),
(31, 'Nether star', '1', 8),
(32, 'Stone sword', '0', 8),
(33, 'The End', '1', 9),
(34, 'The Overworld', '0', 9),
(35, 'The Nether', '0', 9),
(36, 'None of the above', '0', 9),
(37, 'Spider eye', '0', 10),
(38, 'Glistering melon', '0', 10),
(39, 'Golden carrot', '0', 10),
(40, 'Sugar', '1', 10),
(41, 'Unstoppable force', '0', 11),
(42, 'Last breath', '1', 11),
(43, 'Spirit rush', '0', 11),
(44, 'Final hour', '0', 11),
(45, 'Broken wings', '0', 12),
(46, 'Ki burst', '0', 12),
(47, 'Tumble', '0', 12),
(48, 'Runic blade', '1', 12),
(49, 'Guinsoo\'s rageblade', '1', 13),
(50, 'Moonstone renewer', '0', 13),
(51, 'Staff of flowing water', '0', 13),
(52, 'Riftmaker', '0', 13),
(53, 'Perseverance', '0', 14),
(54, 'Judgment', '0', 14),
(55, 'Demacian Justice', '0', 14),
(56, 'Courage', '1', 14),
(57, 'Sterak\'s gage', '0', 15),
(58, 'Rage knife', '1', 15),
(59, 'Cosmic drive', '0', 15),
(60, 'Hexdrinker', '0', 15),
(61, 'Valor', '0', 16),
(62, 'Essence theft', '0', 16),
(63, 'Harrier', '1', 16),
(64, 'Curtain call', '0', 16),
(65, 'Force of nature', '1', 17),
(66, 'Zhonya\'s hourglass', '0', 17),
(67, 'Warmog\'s armor', '0', 17),
(68, 'Edge of night', '0', 17),
(69, 'Final spark', '0', 18),
(70, 'Pyromania', '1', 18),
(71, 'Icinerate', '0', 18),
(72, 'Molten shield', '0', 18),
(73, 'Rift scutller', '0', 19),
(74, 'Gromp', '0', 19),
(75, 'Murk wolf', '0', 19),
(76, 'Blue sentinel', '1', 19),
(77, 'Second wind', '1', 20),
(78, 'Overheal', '0', 20),
(79, 'Cut down', '0', 20),
(80, 'Last stand', '0', 20),
(81, 'Thousand winds temple', '0', 21),
(82, 'Stormterror\'s lair', '1', 21),
(83, 'Whispering woods', '0', 21),
(84, 'Stormbearer point', '0', 21),
(85, 'Outrider', '0', 22),
(86, 'Librarian', '0', 22),
(87, 'Cavalry captain', '0', 22),
(88, 'Acting grand master', '1', 22),
(89, 'Melt', '1', 23),
(90, 'Electro-charge', '0', 23),
(91, 'Overload', '0', 23),
(92, 'Superconduct', '0', 23),
(93, 'Retribution', '0', 24),
(94, 'Oceanborne', '0', 24),
(95, 'Tidecaller', '0', 24),
(96, 'Stormbreaker', '1', 24),
(97, 'Midnight Phantasmagoria', '0', 25),
(98, 'Nightrider', '1', 25),
(99, 'Stellar predator', '0', 25),
(100, 'Wings of Nightmare', '0', 25),
(101, 'Searing onslaught', '0', 26),
(102, 'Blessing of the phoenix', '0', 26),
(103, 'Dawn', '1', 26),
(104, 'Searing ember', '0', 26),
(105, 'Ripple of fate', '1', 27),
(106, 'Reflection of doom', '0', 27),
(107, 'Waterborne destiny', '0', 27),
(108, 'Stellaris phantasm', '0', 27),
(109, 'Debate club', '0', 28),
(110, 'Cool steel', '1', 28),
(111, 'Old Merc\'s pal', '0', 28),
(112, 'Quartz', '0', 28),
(113, 'Twin Nephrite', '0', 29),
(114, 'Serpent spine', '0', 29),
(115, 'Lion\'s roar', '0', 29),
(116, 'Deathmatch', '1', 29),
(117, 'Wuwang hill', '1', 30),
(118, 'Wolvendom', '0', 30),
(119, 'Springvale', '0', 30),
(120, 'Windrise', '0', 30);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `QuizId` int(30) NOT NULL,
  `QuizName` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`QuizId`, `QuizName`) VALUES
(1, 'Minecraft'),
(2, 'League of Legends'),
(3, 'Genshin Impact');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `RoleId` int(10) NOT NULL,
  `RoleName` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`RoleId`, `RoleName`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserId` int(255) NOT NULL,
  `UserName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `UserEmail` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `UserPass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `RegistrationTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `RoleId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `UserName`, `UserEmail`, `UserPass`, `RegistrationTime`, `RoleId`) VALUES
(3, 'Ilija712', 'ilija.kostic.56.19@ict.edu.rs', '59e4ca630628e7da275f6c123bdb29df', '2021-03-08 17:26:30', 1),
(4, 'Nia', 'nia.nia@nia.edu.com', '59e4ca630628e7da275f6c123bdb29df', '2021-03-08 18:20:18', 2);

-- --------------------------------------------------------

--
-- Table structure for table `userquestionanswer`
--

CREATE TABLE `userquestionanswer` (
  `UserId` int(255) NOT NULL,
  `QuestionId` int(50) NOT NULL,
  `ChoiceId` int(200) NOT NULL,
  `IsRight` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  `AnswerTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`QuestionId`),
  ADD KEY `QuizId` (`QuizId`);

--
-- Indexes for table `questionchoices`
--
ALTER TABLE `questionchoices`
  ADD PRIMARY KEY (`ChoiceId`),
  ADD KEY `QuestionId` (`QuestionId`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`QuizId`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`RoleId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`),
  ADD KEY `RoleId` (`RoleId`);

--
-- Indexes for table `userquestionanswer`
--
ALTER TABLE `userquestionanswer`
  ADD KEY `UserId` (`UserId`),
  ADD KEY `QuestionId` (`QuestionId`),
  ADD KEY `ChoiceId` (`ChoiceId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `QuestionId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `questionchoices`
--
ALTER TABLE `questionchoices`
  MODIFY `ChoiceId` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`QuizId`) REFERENCES `quiz` (`QuizId`);

--
-- Constraints for table `questionchoices`
--
ALTER TABLE `questionchoices`
  ADD CONSTRAINT `questionchoices_ibfk_1` FOREIGN KEY (`QuestionId`) REFERENCES `question` (`QuestionId`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`RoleId`) REFERENCES `role` (`RoleId`);

--
-- Constraints for table `userquestionanswer`
--
ALTER TABLE `userquestionanswer`
  ADD CONSTRAINT `userquestionanswer_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `user` (`UserId`),
  ADD CONSTRAINT `userquestionanswer_ibfk_2` FOREIGN KEY (`QuestionId`) REFERENCES `question` (`QuestionId`),
  ADD CONSTRAINT `userquestionanswer_ibfk_3` FOREIGN KEY (`ChoiceId`) REFERENCES `questionchoices` (`ChoiceId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
