-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 10 月 28 日 09:36
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
-- 表的结构 `client_feedback`
--

CREATE TABLE IF NOT EXISTS `client_feedback` (
  `fb_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '这是反馈信息的id号',
  `fb_name` varchar(255) NOT NULL COMMENT '用户反馈时所使用的姓名',
  `fb_email` varchar(255) NOT NULL COMMENT '用户反馈所使用的邮箱',
  `fb_theme` varchar(255) NOT NULL COMMENT '用户反馈的主题',
  `fb_msg` varchar(255) NOT NULL COMMENT '用户反馈的信息内容',
  `fb_time` varchar(255) NOT NULL COMMENT '反馈时间',
  PRIMARY KEY (`fb_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `client_feedback`
--

INSERT INTO `client_feedback` (`fb_id`, `fb_name`, `fb_email`, `fb_theme`, `fb_msg`, `fb_time`) VALUES
(1, '达尔文', 'darlwin@dw.com', '咨询咨询', '听说你们提出：任何对你们产品、服务的疑问、不满、意见及建议都可以随时与你们联系。而且还是支持7天24小时服务的。没什么，我就来试试真假。', '2016-10-28 16:12:40'),
(2, '大事记', 'mail@companyname.com', '首页布局巴拉巴拉', '在看它的布局时，会被一个页面的可读内容分散注意力。英语.许多桌面出版软件包和网页编辑器现在使用乱数假文作为默认的示范文本，并为 乱数假文搜索会发现很多网站尚在襁褓中的版本已经发展了多年的目的。这是一个相当长的字段，之所以出现在这里是因为这段字段的主要作 用为填充网站所用，并且这段文字并不会阻碍您的阅读，您可以放心浏览我们网站后续的所有内容', '2016-10-28 16:39:38'),
(3, '麦哲伦', 'mzl@mzlmail.com', '网站设计与开发', '对于乱数假文地球发现很多网站还有最近与桌面出版像婴儿的年软件版本。这是一段毫无意义的文字内容，你可以无视它并向后浏览你所想要浏览的内容。\r\n对于乱数假文地球发现很多网站还有最近与桌面出版像婴儿的年软件版本。这是一段毫无意义的文字内容，你可以无视它并向后浏览你所想要浏览的内容。', '2016-10-28 16:58:38'),
(4, '拿破仑', 'napolun@napolun.com', '在线营销', '对于乱数假文地球发现很多网站还有最近与桌面出版像婴儿的年软件版本。这是一段毫无意义的文字内容，你可以无视它并向后浏览你所想要浏览的内容。', '2016-10-28 17:00:07'),
(5, '哥伦布', 'gelunbu@gelunbu.com', '良好支持吗？', '对于乱数假文地球发现很多网站还有最近与桌面出版像婴儿的年软件版本。这是一段毫无意义的文字内容，你可以无视它并向后浏览你所想要浏览的内容。', '2016-10-28 17:00:44');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
