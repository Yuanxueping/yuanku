-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 10 月 19 日 08:15
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
-- 表的结构 `php34_good`
--

CREATE TABLE IF NOT EXISTS php34_good
(
   id mediumint unsigned not null auto_increment,
   good_name varchar(45) not null comment '商品名称',
   logo varchar(150) not null default '' comment '商品logo',
   sm_logo varchar(150) not null default '' comment '商品缩略图',
   price decimal(10,2) not null default '0.00' comment '商品价格',
   good_desc longtext comment '商品描述',
   is_on_sale tinyint unsigned not null default '1' comment '是否上架：1:上架 0：下架',
   is_delete tinyint unsigned not null default '0' comment '是否已经删除：1:已经删除 0：未删除',
   addtime int unsigned not null comment '添加时间',
   primary key(id),
   key price(price),
   key is_on_sale(is_on_sale),
   key is_delete(is_delete),
   key addtime(addtime)
   )ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
