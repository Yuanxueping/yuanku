-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 10 月 28 日 03:07
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
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT '标题',
  `author_id` int(11) NOT NULL COMMENT '作者ID',
  `sort_ename` varchar(255) NOT NULL COMMENT '分类英文名字',
  `content` text NOT NULL COMMENT '内容',
  `img` varchar(255) NOT NULL COMMENT '图片',
  `date` varchar(255) NOT NULL COMMENT '日期',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `title`, `author_id`, `sort_ename`, `content`, `img`, `date`) VALUES
(1, 'Many desktop packages', 1, 'nba', 'Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy over the years', 'img/news_img/site-img225 (1).jpg', '5 JULY 2016'),
(2, 'Many desktop packages', 2, 'baseball', 'Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy over the years', 'img/news_img/site-img224.jpg', '5 JULY 2016'),
(3, 'Letraset sheets containing lorem passages', 1, 'iball', 'Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy over the years', 'img/news_img/blog-img-05.jpg', '12 MAY 2016'),
(9, 'Making this the first true generator on the internet', 1, 'nba', 'Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy over the years', 'img/news_img/blog-img-01.jpg', '12 MAY 2016'),
(4, 'Letraset sheets containing lorem passages', 1, 'baseball', 'Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy over the years', 'img/news_img/blog-img-06.jpg', '12 MAY 2016'),
(5, 'Through the cites of the word in classical literature', 1, 'iball', 'Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy over the years', 'img/news_img/blog-img-02.jpg', '12 MAY 2016'),
(6, 'Making this the first true generator on the internet', 1, 'nba', 'Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy over the years', 'img/news_img/blog-img-01.jpg', '12 MAY 2016'),
(7, 'Versions have evolved over the years', 1, 'baseball', 'Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy over the years', 'img/news_img/blog-img-09.jpg', '12 MAY 2016'),
(8, 'Versions have evolved over the years', 1, 'iball', 'Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy over the years', 'img/news_img/blog-img-08.jpg', '12 MAY 2016'),
(10, 'Through the cites of the word in classical literature', 1, 'nba', 'Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy over the years', 'img/news_img/blog-img-02.jpg', '12 MAY 2016'),
(11, 'Letraset sheets containing lorem passages', 1, 'baseball', 'Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy over the years', 'img/news_img/blog-img-06.jpg', '12 MAY 2016'),
(12, 'Letraset sheets containing lorem passages', 1, 'iball', 'Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy over the years', 'img/news_img/blog-img-05.jpg', '12 MAY 2016'),
(13, 'Letraset sheets containing lorem passages', 1, 'nba', 'Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy over the years', 'img/news_img/blog-img-05.jpg', '12 MAY 2016'),
(14, 'Versions have evolved over the years', 1, 'baseball', 'Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy over the years', 'img/news_img/blog-img-05.jpg', '12 MAY 2016'),
(15, 'Many web sites still fancy', 1, 'iball', 'Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy over the years', 'img/news_img/blog-img-03.jpg', '10 MAY 2016'),
(19, '4', 2, 'nba', '4', 'img/news_img/580f0d4c58a02.png', '1477381452'),
(20, '5', 2, 'baseball', '5', 'img/news_img/580f12dac2d47.png', '1477382874'),
(21, '6', 2, 'iball', '&lt;p&gt;e12ewdqd2dwqdwd&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;color: rgb(255, 0, 0);&quot;&gt;adasdsadasc&lt;/span&gt;&lt;/p&gt;&lt;p&gt;adasdasdasd&lt;/p&gt;', 'img/news_img/580f14ae1bd16.png', '1477383342'),
(22, '他们1323123', 1, 'nba', '&lt;p&gt;&amp;lt;p&amp;gt;123&amp;lt;/p&amp;gt;&lt;/p&gt;', 'img/news_img/5810811c4e26e.png', '1477386194'),
(25, '8', 2, 'baseball', '&lt;p&gt;&amp;lt;p&amp;gt;9&amp;lt;/p&amp;gt;&lt;/p&gt;', 'img/news_img/5812c08774f9f.jpg', '1477623943');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
