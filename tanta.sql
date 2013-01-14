-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 14, 2013 at 09:17 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `adv`
--

INSERT INTO `adv` (`id`, `name`, `nashat`, `address`, `phone`, `dept_id`, `sub_dept_id`, `type`, `desc`) VALUES
(1, 'شركه الملاح', 'برمجياات', 'هناك', '01527', 4, 1, 'g', 'شركه نتت'),
(2, 'تانى اعلان', 'تمىت', 'ىىتع', 'مه', 4, 1, 'g', 'بسليب');

-- --------------------------------------------------------

--
-- Table structure for table `big_slider`
--

CREATE TABLE IF NOT EXISTS `big_slider` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `pic_name` varchar(500) default NULL,
  `caption` varchar(500) default NULL,
  `active` varchar(500) default NULL,
  `link` varchar(500) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `big_slider`
--

INSERT INTO `big_slider` (`id`, `pic_name`, `caption`, `active`, `link`) VALUES
(1, '68934_305379012907595_969147143_n.jpg', NULL, '1', 'cxbnsdhbn'),
(2, '282983_377617929001093_1771081556_n.jpg', NULL, '1', 'dsgsdg'),
(3, '531961_539078879444450_1078265537_n.jpg', NULL, '1', 'yhj');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `name`, `desc`, `order`) VALUES
(1, 'الاطباء', NULL, '5'),
(2, 'fdhbgdhdfhsasaas', NULL, '6'),
(3, 'gfnmjxfgnm', NULL, '9'),
(4, 'الملاح', NULL, '3'),
(5, 'سعد', NULL, '2'),
(8, 'تمراز', NULL, '1'),
(9, 'hpl]', NULL, '1'),
(10, 'محلات', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(45) default NULL,
  `desc` varchar(45) default NULL,
  `spe` varchar(45) default NULL,
  `address` varchar(45) default NULL,
  `phone` varchar(45) default NULL,
  `f_time` varchar(45) default NULL,
  `f_date` varchar(45) default NULL,
  `book` varchar(45) default NULL,
  `sdept_id` int(10) unsigned default NULL,
  PRIMARY KEY  (`id`),
  KEY `FK_doctor_1` (`sdept_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `desc`, `spe`, `address`, `phone`, `f_time`, `f_date`, `book`, `sdept_id`) VALUES
(1, 'حاتك', 'دكتور', 'جراحه', 'هناك', '01525', 'الساعه4', 'كل يوم', 'لا يوجد ', 2),
(2, 'محمود', 'هتمها', 'لاان', 'لاالا', '015', 'لاات', 'الالاالا', 'لا يوجد ', 3),
(3, 'سينى', 'تمى', 'تى', 'تىت', '785', '54', 'تى', 'يوجد ', 2),
(4, 'دكتور', 'تلا', 'اتلاات', 'لااالااتلا', '4587', 'لااعلا', 'ملااع', 'لا يوجد ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(45) default NULL,
  `golden_id` int(10) unsigned default NULL,
  PRIMARY KEY  (`id`),
  KEY `FK_gallery_1` (`golden_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `golden_id`) VALUES
(1, '17167_image002.jpg', 1),
(2, '17167_image0021.jpg', 1),
(3, '17167_image0022.jpg', 1),
(4, '185666_2547499103746_942762452_n.jpg', 2),
(5, '185666_2547499103746_942762452_n1.jpg', 2),
(6, '174220_100002041914924_6263440_n.jpg', 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `golden`
--

INSERT INTO `golden` (`g_id`, `vedio`, `map_x`, `map_y`) VALUES
(1, 'يسليس', NULL, NULL),
(2, 'تاىتوى', NULL, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `golden_view`
--
CREATE TABLE IF NOT EXISTS `golden_view` (
`id` int(10) unsigned
,`name` varchar(200)
,`nashat` varchar(100)
,`address` varchar(100)
,`phone` varchar(100)
,`dept_id` int(10) unsigned
,`sub_dept_id` int(10) unsigned
,`type` varchar(45)
,`desc` varchar(1000)
,`username` varchar(450)
,`active` varchar(450)
,`views` int(10) unsigned
,`vedio` varchar(450)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `last_add`
--
CREATE TABLE IF NOT EXISTS `last_add` (
`adv_id` int(10) unsigned
,`main_photo` varchar(4552)
,`type` varchar(45)
,`name` varchar(200)
,`desc` varchar(1000)
,`address` varchar(100)
,`phone` varchar(100)
);
-- --------------------------------------------------------

--
-- Table structure for table `level2`
--

CREATE TABLE IF NOT EXISTS `level2` (
  `adv_id` int(10) unsigned NOT NULL,
  `views` int(10) unsigned default '0',
  `username` varchar(450) default NULL,
  `password` varchar(450) default NULL,
  `active` varchar(45) default '1',
  `type` varchar(45) default '0',
  `main_photo` varchar(4552) default NULL,
  PRIMARY KEY  (`adv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `level2`
--

INSERT INTO `level2` (`adv_id`, `views`, `username`, `password`, `active`, `type`, `main_photo`) VALUES
(1, 0, 'محمد', 'ممن', '1', 'g', NULL),
(2, 0, 'ىات', 'ىتو', '1', 'g', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `max_views`
--
CREATE TABLE IF NOT EXISTS `max_views` (
`views` int(10) unsigned
,`adv_id` int(10) unsigned
,`main_photo` varchar(4552)
,`type` varchar(45)
,`name` varchar(200)
,`desc` varchar(1000)
,`address` varchar(100)
,`phone` varchar(100)
);
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `name`, `level2_id`) VALUES
(1, '16152_4989456943709_956806798_n.jpg', 1),
(2, '16152_4989456943709_956806798_n1.jpg', 1),
(3, '185065_525888257427184_519132032_n.jpg', 2),
(4, '185065_525888257427184_519132032_n1.jpg', 2);

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
-- Stand-in structure for view `sliver_view`
--
CREATE TABLE IF NOT EXISTS `sliver_view` (
`id` int(10) unsigned
,`name` varchar(200)
,`nashat` varchar(100)
,`address` varchar(100)
,`phone` varchar(100)
,`dept_id` int(10) unsigned
,`sub_dept_id` int(10) unsigned
,`type` varchar(45)
,`desc` varchar(1000)
,`username` varchar(450)
,`active` varchar(450)
,`views` int(10) unsigned
);
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
(2, 'جراحه', 1),
(3, 'اطفال', 1),
(4, 'gfhfgh', 2),
(5, 'hdfghfgh', 2),
(6, 'ewrwety', 2),
(7, 'gfhfgh', 3);

-- --------------------------------------------------------

--
-- Structure for view `golden_view`
--
DROP TABLE IF EXISTS `golden_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `golden_view` AS select `adv`.`id` AS `id`,`adv`.`name` AS `name`,`adv`.`nashat` AS `nashat`,`adv`.`address` AS `address`,`adv`.`phone` AS `phone`,`adv`.`dept_id` AS `dept_id`,`adv`.`sub_dept_id` AS `sub_dept_id`,`adv`.`type` AS `type`,`adv`.`desc` AS `desc`,`level2`.`username` AS `username`,`level2`.`password` AS `active`,`level2`.`views` AS `views`,`golden`.`vedio` AS `vedio` from ((`adv` left join `level2` on((`adv`.`id` = `level2`.`adv_id`))) left join `golden` on((`level2`.`adv_id` = `golden`.`g_id`))) where (`adv`.`type` = _utf8'g') order by `level2`.`adv_id` desc;

-- --------------------------------------------------------

--
-- Structure for view `last_add`
--
DROP TABLE IF EXISTS `last_add`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `last_add` AS select `level2`.`adv_id` AS `adv_id`,`level2`.`main_photo` AS `main_photo`,`adv`.`type` AS `type`,`adv`.`name` AS `name`,`adv`.`desc` AS `desc`,`adv`.`address` AS `address`,`adv`.`phone` AS `phone` from (`adv` left join `level2` on((`adv`.`id` = `level2`.`adv_id`))) order by `level2`.`adv_id` desc;

-- --------------------------------------------------------

--
-- Structure for view `max_views`
--
DROP TABLE IF EXISTS `max_views`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `max_views` AS select max(`level2`.`views`) AS `views`,`level2`.`adv_id` AS `adv_id`,`level2`.`main_photo` AS `main_photo`,`adv`.`type` AS `type`,`adv`.`name` AS `name`,`adv`.`desc` AS `desc`,`adv`.`address` AS `address`,`adv`.`phone` AS `phone` from (`adv` left join `level2` on((`adv`.`id` = `level2`.`adv_id`))) group by `level2`.`adv_id` order by max(`level2`.`views`);

-- --------------------------------------------------------

--
-- Structure for view `sliver_view`
--
DROP TABLE IF EXISTS `sliver_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sliver_view` AS select `adv`.`id` AS `id`,`adv`.`name` AS `name`,`adv`.`nashat` AS `nashat`,`adv`.`address` AS `address`,`adv`.`phone` AS `phone`,`adv`.`dept_id` AS `dept_id`,`adv`.`sub_dept_id` AS `sub_dept_id`,`adv`.`type` AS `type`,`adv`.`desc` AS `desc`,`level2`.`username` AS `username`,`level2`.`password` AS `active`,`level2`.`views` AS `views` from (`adv` left join `level2` on((`adv`.`id` = `level2`.`adv_id`))) where (`adv`.`type` = _utf8's') order by `level2`.`adv_id` desc;

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
  ADD CONSTRAINT `FK_doctor_1` FOREIGN KEY (`sdept_id`) REFERENCES `sub_dept` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
