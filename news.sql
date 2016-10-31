-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 10 月 31 日 01:45
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `title`, `author_id`, `sort_ename`, `content`, `img`, `date`) VALUES
(1, '詹姆斯夺冠', 1, 'nba', '&lt;p&gt;&lt;span style=&quot;color: rgb(51, 51, 51); font-family: 微软雅黑, 宋体; font-size: 14px; line-height: 26px; widows: 1; background-color: rgb(255, 255, 255);&quot;&gt;LBJ 夺冠后趴地痛哭不起，压力释然。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;color: rgb(51, 51, 51); font-family: 微软雅黑, 宋体; font-size: 14px; line-height: 26px; widows: 1; background-color: rgb(255, 255, 255);&quot;&gt;&lt;span style=&quot;color: rgb(51, 51, 51); font-family: 微软雅黑, 宋体; font-size: 14px; line-height: 26px; widows: 1; background-color: rgb(255, 255, 255);&quot;&gt;2010 年，LBJ 发表了他的决定，瞬间从克里夫兰的救世主变成过街老鼠，人们焚烧他的球衣，像被自己家乡的人唾弃的感觉，曾经的避风港变成烽火连天的战场，而那些火都烧在他的球衣上。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;', 'img/news_img/58131f90ab7ed.JPEG', '5 JULY 2016'),
(2, 'Many desktop packages', 2, 'baseball', 'Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy over the years', 'img/news_img/site-img224.jpg', '5 JULY 2016'),
(3, 'Letraset sheets containing lorem passages', 1, 'iball', 'Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy over the years', 'img/news_img/blog-img-05.jpg', '12 MAY 2016'),
(9, '科比=伟大', 1, 'nba', '&lt;p&gt;&lt;span style=&quot;color: rgb(51, 51, 51); font-family: &amp;quot;Microsoft YaHei&amp;quot;, 宋体, Verdana, Arial, Tahoma, sans-serif; line-height: 30.4px; text-indent: 32px; widows: 1; background-color: rgb(251, 251, 251);&quot;&gt;2016年，37岁科比终于要告别NBA赛场，科比谢幕战将于4月14日打响，作为科比的死忠，小编心情是无比激动啊。如果科比能在最后一个赛季再拿一次总冠军或者再拿一次mvp那就更完美了，但现实中本来就没有完美的事情，如同灌篮高手一样，湘北到最后仍然没有拿到全国大赛的冠军，这就是我们的青春。&lt;/span&gt;&lt;/p&gt;', 'img/news_img/581320a803edb.jpeg', '12 MAY 2016'),
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
(20, '5', 2, 'baseball', '5', 'img/news_img/580f12dac2d47.png', '1477382874'),
(21, '6', 2, 'iball', '&lt;p&gt;e12ewdqd2dwqdwd&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;color: rgb(255, 0, 0);&quot;&gt;adasdsadasc&lt;/span&gt;&lt;/p&gt;&lt;p&gt;adasdasdasd&lt;/p&gt;', 'img/news_img/580f14ae1bd16.png', '1477383342'),
(25, '8', 2, 'baseball', '&lt;p&gt;&amp;lt;p&amp;gt;9&amp;lt;/p&amp;gt;&lt;/p&gt;', 'img/news_img/5812c08774f9f.jpg', '1477623943'),
(26, '更强大的林丹，更偶像的一哥', 2, 'fetherball', '&lt;p&gt;&lt;span style=&quot;color: rgb(120, 120, 120); font-family: 宋体; font-size: 12px; line-height: 27px; widows: 1; background-color: rgb(255, 255, 255);&quot;&gt;林丹自己很清楚，他需要在赛场上找回地位，才会赢得更大的价值。世锦赛对他派发外卡，本来就是一种特权，但超级丹在广州王者归来，世界羽联也不得不承认：“林丹依然是羽毛球现今最有影响力的代言人。”……&lt;/span&gt;&lt;/p&gt;', 'img/news_img/58132196aae53.jpg', '1477648790');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
