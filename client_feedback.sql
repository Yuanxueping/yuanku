-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 10 月 28 日 07:36
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `client_feedback`
--

INSERT INTO `client_feedback` (`fb_id`, `fb_name`, `fb_email`, `fb_theme`, `fb_msg`, `fb_time`) VALUES
(6, 'eee', 'eeee@eee.com', 'eee主题', 'eee内容描述', '2016-10-28 10:50:39'),
(7, 'aaa', 'aaa@aa.com', '我是aaa', '哈哈哈，我是aaa,我又回来啦~~~', '2016-10-28 15:19:06');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
