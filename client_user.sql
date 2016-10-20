-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 10 月 20 日 10:29
-- 服务器版本: 5.5.40
-- PHP 版本: 5.3.29

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
-- 表的结构 `client_user`
--

CREATE TABLE IF NOT EXISTS `client_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_pwd` varchar(40) NOT NULL,
  `create_time` varchar(255) DEFAULT NULL,
  `head_photo` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `client_user`
--

INSERT INTO `client_user` (`id`, `user_name`, `user_pwd`, `create_time`, `head_photo`, `email_address`) VALUES
(21, 'shuishui', '5854acf38caa01d136aa12e81164937e', NULL, '/Uploads/head_logo/2016-10-20/5808219a321b8.jpg', 'kjdhe@wkde.cm'),
(20, 'sanyoa', '2ac6fb57b48f094f097875fedc3b9e45', NULL, NULL, NULL),
(19, '757501172@qq.com', '971e6a4d28445667758481a1d1213ec1', NULL, '/Uploads/head_logo/2016-10-20/5807bf5d8e0fa.png', 'langhuaili@foxmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
