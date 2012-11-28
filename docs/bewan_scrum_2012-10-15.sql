-- phpMyAdmin SQL Dump
-- version 3.4.5deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 15, 2012 at 11:40 PM
-- Server version: 5.1.62
-- PHP Version: 5.3.6-13ubuntu3.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bewan_scrum`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `label`) VALUES
(3, 'Analysis'),
(4, 'Translations'),
(5, 'Code Cleanup'),
(6, 'TEST'),
(7, 'Design'),
(8, 'new code'),
(9, 'ScrumDev'),
(10, 'Mask'),
(11, 'Tasks Planning'),
(12, 'Configuration'),
(13, 'Staff'),
(14, 'Forms');

-- --------------------------------------------------------

--
-- Table structure for table `play`
--

CREATE TABLE IF NOT EXISTS `play` (
  `id_play` int(11) NOT NULL AUTO_INCREMENT,
  `fk_id_scrum_item` int(11) NOT NULL,
  `label` varchar(255) CHARACTER SET latin1 NOT NULL,
  `started_on` datetime DEFAULT NULL,
  `stopped_on` datetime NOT NULL,
  `stop_reason` text CHARACTER SET latin1 NOT NULL,
  `estimate_duration` float NOT NULL,
  `estimate_finish` datetime NOT NULL,
  `deadline` datetime NOT NULL,
  `finished_on` datetime NOT NULL,
  `result` tinyint(1) NOT NULL,
  `result_comment` text CHARACTER SET latin1 NOT NULL,
  `fk_id_category` int(11) NOT NULL,
  `fk_id_player` int(11) NOT NULL,
  `fk_id_team` int(11) NOT NULL,
  PRIMARY KEY (`id_play`),
  KEY `fk_id_category` (`fk_id_category`),
  KEY `fk_id_player` (`fk_id_player`),
  KEY `fk_id_team` (`fk_id_team`),
  KEY `fk_id_scrum_item` (`fk_id_scrum_item`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `play`
--

INSERT INTO `play` (`id_play`, `fk_id_scrum_item`, `label`, `started_on`, `stopped_on`, `stop_reason`, `estimate_duration`, `estimate_finish`, `deadline`, `finished_on`, `result`, `result_comment`, `fk_id_category`, `fk_id_player`, `fk_id_team`) VALUES
(1, 1, 'csv translations2', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 7, 1, 1),
(2, 3, 'New DB', '2012-10-08 00:00:00', '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 7, 4, 2),
(3, 4, 'Analysis', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 7, 1, 1),
(4, 4, 'Story', '2012-10-09 00:00:00', '2012-10-24 00:00:00', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 3, 6, 4),
(5, 7, 'Expand analysis', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 3, 1, 1),
(6, 6, 'new design', '2012-10-08 00:00:00', '0000-00-00 00:00:00', 'Why did progress stop?', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-10-09 00:00:00', 1, 'no comments', 7, 2, 1),
(7, 3, 'Not much to do yet', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Answer this: Why did progress stop? eg. Further analysis required? Pending a decision? ', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'What is the result/Why is there no result?', 3, 1, 1),
(8, 1, 'remove task types tabs + show selector', '2012-10-15 00:00:00', '0000-00-00 00:00:00', 'Answer this: Why did progress stop? eg. Further analysis required? Pending a decision? ', 4, '2012-10-16 00:00:00', '2012-10-16 00:00:00', '0000-00-00 00:00:00', 0, 'What is the result/Why is there no result?', 10, 2, 1),
(9, 1, 'delete button not working. (delete == update/delete contract?)', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Answer this: Why did progress stop? eg. Further analysis required? Pending a decision? ', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'What is the result/Why is there no result?', 13, 1, 1),
(10, 1, 'remove the remove button in staff list', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Answer this: Why did progress stop? eg. Further analysis required? Pending a decision? ', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'What is the result/Why is there no result?', 13, 1, 1),
(11, 1, 'badge entry needs validation', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Answer this: Why did progress stop? eg. Further analysis required? Pending a decision? ', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'What is the result/Why is there no result?', 13, 2, 1),
(12, 1, 'forms -> translation', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Answer this: Why did progress stop? eg. Further analysis required? Pending a decision? ', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'What is the result/Why is there no result?', 14, 1, 1),
(13, 1, 'time picker default values', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', 14, 2, 1),
(14, 1, '''add team'' code is commented.', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', 12, 1, 1),
(15, 1, 'Language choice', '2012-10-15 00:00:00', '2012-10-15 00:00:00', 'What about configuration/user/list?', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 12, 1, 1),
(16, 1, 'grid(segments) not linked to JS tasks', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 11, 2, 1),
(17, 1, 'lock planning text needs review', '2012-10-15 00:00:00', '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-10-15 00:00:00', 1, 'Done', 11, 1, 1),
(18, 1, 'firstname - lastname don''t always show ->contract issue', '2012-10-15 00:00:00', '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-10-15 00:00:00', 1, 'Done', 11, 1, 1),
(19, 1, 'Html>pdf button', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 11, 2, 1),
(20, 1, 'Visuals for template editing', '0000-00-00 00:00:00', '2012-10-15 00:00:00', 'No template editing exist anymore. Normal tasks added to normal tasks planning week is copied.', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 11, 1, 1),
(21, 1, 'Reportings (like bewantime-old-version)', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 12, 2, 1),
(22, 1, 'right click task, doesn’t change color', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 10, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE IF NOT EXISTS `player` (
  `id_player` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id_player`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id_player`, `name`) VALUES
(1, 'Willem'),
(2, 'Jasper'),
(3, 'Quentin'),
(4, 'Olivier'),
(5, 'Thomas'),
(6, 'Franky');

-- --------------------------------------------------------

--
-- Table structure for table `scrum_item`
--

CREATE TABLE IF NOT EXISTS `scrum_item` (
  `id_scrum_item` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(255) CHARACTER SET latin1 NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL,
  `created_on` datetime NOT NULL,
  `removed_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id_scrum_item`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `scrum_item`
--

INSERT INTO `scrum_item` (`id_scrum_item`, `label`, `description`, `created_on`, `removed_on`) VALUES
(1, 'BewanTime VDB', 'BewanTime VandenBogaerden', '2012-10-13 18:43:40', '0000-00-00 00:00:00'),
(3, 'BewanTime Quick', 'BewanTime Quick', '2012-10-13 18:43:40', '0000-00-00 00:00:00'),
(4, 'BewanTime Oostende', 'BewanTime Oostende', '2012-10-13 18:43:40', '0000-00-00 00:00:00'),
(5, 'RetailServices Web', 'RetailServices Webshop', '2012-10-13 17:30:00', '0000-00-00 00:00:00'),
(6, 'Daikin', 'Daikin DataCapture ', '2012-10-13 17:30:00', '0000-00-00 00:00:00'),
(7, 'ScrumDev', 'Development of the Scrum', '2012-10-13 18:43:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `id_team` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id_team`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id_team`, `label`) VALUES
(1, 'Wevelgem'),
(2, 'Waterloo'),
(3, 'Sales'),
(4, 'Bewan Planning and Analysis');

-- --------------------------------------------------------

--
-- Table structure for table `team_has_player`
--

CREATE TABLE IF NOT EXISTS `team_has_player` (
  `fk_id_team` int(11) NOT NULL,
  `fk_id_player` int(11) NOT NULL,
  KEY `fk_id_team` (`fk_id_team`),
  KEY `fk_id_player` (`fk_id_player`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team_has_player`
--

INSERT INTO `team_has_player` (`fk_id_team`, `fk_id_player`) VALUES
(1, 1),
(1, 2),
(2, 3),
(2, 4);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `play`
--
ALTER TABLE `play`
  ADD CONSTRAINT `play_ibfk_4` FOREIGN KEY (`fk_id_team`) REFERENCES `team` (`id_team`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `play_ibfk_1` FOREIGN KEY (`fk_id_scrum_item`) REFERENCES `scrum_item` (`id_scrum_item`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `play_ibfk_2` FOREIGN KEY (`fk_id_category`) REFERENCES `category` (`id_category`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `play_ibfk_3` FOREIGN KEY (`fk_id_player`) REFERENCES `player` (`id_player`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `team_has_player`
--
ALTER TABLE `team_has_player`
  ADD CONSTRAINT `team_has_player_ibfk_2` FOREIGN KEY (`fk_id_player`) REFERENCES `player` (`id_player`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `team_has_player_ibfk_1` FOREIGN KEY (`fk_id_team`) REFERENCES `team` (`id_team`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
