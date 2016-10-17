-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 10 月 17 日 17:52
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `hello`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin_user`
--

CREATE TABLE IF NOT EXISTS `admin_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
  `create_time` varchar(255) NOT NULL,
  `head_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `admin_user`
--

INSERT INTO `admin_user` (`id`, `user_name`, `user_pwd`, `create_time`, `head_photo`) VALUES
(7, 'hlo', '1234567890198', '1476346987', ''),
(9, 'test5', '123456788887', '1476347197', ''),
(10, 'hlo2', '123456', '1476349745', ''),
(12, 'admin', '123456', '1476350743', './2016-10-14/58004d3c2bdb8.png'),
(13, 'test8', '1234567', '1476410314', ''),
(14, 'test9', '123456123', '1476410480', './2016-10-14/58003c7048b5d.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `grade` int(11) NOT NULL DEFAULT '60' COMMENT '学生成绩',
  `address` varchar(255) NOT NULL,
  `mobile` char(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `class`
--

INSERT INTO `class` (`id`, `name`, `teacher_id`, `grade`, `address`, `mobile`) VALUES
(1, 'tom', 1, 70, '广州市天河区', '13866667777'),
(3, 'candy', 1, 60, '广东省广州市天河区', '13399990000'),
(4, 'simith lily', 1, 51, '天河区', '13388889999'),
(11, '思路', 3, 76, '天河区', '13355556668'),
(12, '思路', 3, 79, '天河区', '13355556668'),
(13, '稍等', 2, 99, '天河区', '133888'),
(14, '思路3', 2, 97, '天河区', '13388889999'),
(15, '转', 3, 78, '天河区', '13388889999'),
(16, '思路9', 2, 88, '天河区', '13355556668');

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `grade` int(11) NOT NULL DEFAULT '60' COMMENT '学生成绩',
  `address` varchar(255) NOT NULL,
  `mobile` char(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`id`, `name`, `teacher_id`, `grade`, `address`, `mobile`) VALUES
(1, 'tom', 1, 85, '广州市天河区', '13866667777'),
(3, 'candy', 1, 60, '广东省广州市天河区', '13399990000'),
(4, 'simith lily', 1, 51, '天河区', '13388889999'),
(13, '稍等', 2, 99, '天河区', '133888'),
(17, '生动', NULL, 77, '', ''),
(18, '', NULL, 0, '', ''),
(19, '', NULL, 0, '', ''),
(20, '', NULL, 0, '', ''),
(21, '', NULL, 0, '', ''),
(22, '陌', NULL, 60, '', ''),
(23, '思路', NULL, 60, '', '13388889999'),
(24, '思路', NULL, 60, '', '133888'),
(25, '思路', NULL, 60, '', ''),
(26, '思路', NULL, 60, '', ''),
(27, '思路', NULL, 60, '', ''),
(28, '思路', NULL, 60, '', ''),
(29, '思路', NULL, 60, '', '13388889999'),
(30, '思路', NULL, 60, '', '13388889999');

-- --------------------------------------------------------

--
-- 表的结构 `system_conf`
--

CREATE TABLE IF NOT EXISTS `system_conf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `system_conf`
--

INSERT INTO `system_conf` (`id`, `site_name`) VALUES
(1, '力动企业'),
(2, ''),
(3, '');

-- --------------------------------------------------------

--
-- 表的结构 `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `teacher`
--

INSERT INTO `teacher` (`id`, `teacher_name`) VALUES
(1, 'Adel'),
(2, 'Bell'),
(3, 'Mps'),
(4, 'Sklim');

-- --------------------------------------------------------

--
-- 表的结构 `think_auth_group`
--

CREATE TABLE IF NOT EXISTS `think_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` char(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `think_auth_group`
--

INSERT INTO `think_auth_group` (`id`, `title`, `status`, `rules`) VALUES
(1, '超级管理员', 1, ''),
(2, '用户管理员', 1, '');

-- --------------------------------------------------------

--
-- 表的结构 `think_auth_group_access`
--

CREATE TABLE IF NOT EXISTS `think_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `think_auth_group_access`
--

INSERT INTO `think_auth_group_access` (`uid`, `group_id`) VALUES
(12, 1),
(13, 1),
(14, 1);

-- --------------------------------------------------------

--
-- 表的结构 `think_auth_rule`
--

CREATE TABLE IF NOT EXISTS `think_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
