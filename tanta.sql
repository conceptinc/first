-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 04, 2013 at 08:43 PM
-- Server version: 5.0.51
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tanta`
--

-- --------------------------------------------------------

--
-- Table structure for table `adv`
--

CREATE TABLE IF NOT EXISTS `adv` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(200) NOT NULL,
  `nashat` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `dept_id` int(10) unsigned NOT NULL,
  `sub_dept_id` int(10) unsigned default NULL,
  `type` varchar(45) default NULL,
  `desc` varchar(1000) default NULL,
  PRIMARY KEY  (`id`),
  KEY `FK_adv_1` (`dept_id`),
  KEY `FK_adv_2` (`sub_dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `adv`
--


-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `comment` varchar(1055) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `level2_id` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `FK_comments_1` (`level2_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `comments`
--


-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE IF NOT EXISTS `dept` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(500) NOT NULL,
  `desc` varchar(450) default NULL,
  `order` varchar(450) default '1',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `name`, `desc`, `order`) VALUES
(1, 'fgdhdfh', NULL, '5'),
(2, 'fdhbgdhdfhsasaas', NULL, '6'),
(3, 'gfnmjxfgnm', NULL, '9'),
(4, 'الملاح', NULL, '3'),
(5, 'سعد', NULL, '2'),
(8, 'تمراز', NULL, '1'),
(9, 'hpl]', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `f_time` varchar(45) NOT NULL,
  `f_data` varchar(45) NOT NULL,
  `book` varchar(45) NOT NULL default '1',
  `active` varchar(45) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `doctor`
--


-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(1000) NOT NULL,
  `golden_id` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `FK_gallery_1` (`golden_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `gallery`
--


-- --------------------------------------------------------

--
-- Table structure for table `golden`
--

CREATE TABLE IF NOT EXISTS `golden` (
  `g_id` int(10) unsigned NOT NULL auto_increment,
  `vedio` varchar(450) default NULL,
  `map_x` varchar(450) default NULL,
  `map_y` varchar(450) default NULL,
  PRIMARY KEY  (`g_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `golden`
--


-- --------------------------------------------------------

--
-- Table structure for table `level2`
--

CREATE TABLE IF NOT EXISTS `level2` (
  `adv_id` int(10) unsigned NOT NULL auto_increment,
  `views` int(10) unsigned NOT NULL,
  `username` varchar(450) default NULL,
  `password` varchar(450) default NULL,
  `active` varchar(45) default '1',
  `type` varchar(45) default NULL,
  PRIMARY KEY  (`adv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

--
-- Dumping data for table `level2`
--


-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(950) NOT NULL,
  `level2_id` int(10) unsigned default NULL,
  PRIMARY KEY  (`id`),
  KEY `FK_photo_1` (`level2_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `photo`
--


-- --------------------------------------------------------

--
-- Table structure for table `sitead`
--

CREATE TABLE IF NOT EXISTS `sitead` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `username` varchar(450) NOT NULL,
  `password` varchar(500) NOT NULL,
  `pin` varchar(450) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sitead`
--

INSERT INTO `sitead` (`id`, `username`, `password`, `pin`) VALUES
(1, 'ahmed', 'ahmed', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `sub_dept`
--

CREATE TABLE IF NOT EXISTS `sub_dept` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(450) NOT NULL,
  `dept_id` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `FK_sub_dept_1` (`dept_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `sub_dept`
--

INSERT INTO `sub_dept` (`id`, `name`, `dept_id`) VALUES
(1, 'احمد', 4),
(2, 'dfsg', 1),
(3, 'gdfgd', 1),
(4, 'gfhfgh', 2),
(5, 'hdfghfgh', 2),
(6, 'ewrwety', 2),
(7, 'gfhfgh', 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adv`
--
ALTER TABLE `adv`
  ADD CONSTRAINT `FK_adv_1` FOREIGN KEY (`dept_id`) REFERENCES `dept` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_adv_2` FOREIGN KEY (`sub_dept_id`) REFERENCES `sub_dept` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK_comments_1` FOREIGN KEY (`level2_id`) REFERENCES `level2` (`adv_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `FK_doctor_1` FOREIGN KEY (`id`) REFERENCES `adv` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `FK_gallery_1` FOREIGN KEY (`golden_id`) REFERENCES `golden` (`g_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `golden`
--
ALTER TABLE `golden`
  ADD CONSTRAINT `FK_golden_1` FOREIGN KEY (`g_id`) REFERENCES `level2` (`adv_id`);

--
-- Constraints for table `level2`
--
ALTER TABLE `level2`
  ADD CONSTRAINT `FK_level2_1` FOREIGN KEY (`adv_id`) REFERENCES `adv` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `FK_photo_1` FOREIGN KEY (`level2_id`) REFERENCES `level2` (`adv_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_dept`
--
ALTER TABLE `sub_dept`
  ADD CONSTRAINT `FK_sub_dept_1` FOREIGN KEY (`dept_id`) REFERENCES `dept` (`id`);
