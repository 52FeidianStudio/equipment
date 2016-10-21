-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-10-21 06:44:09
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zky`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_answer`
--

CREATE TABLE IF NOT EXISTS `tp_answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `messageid` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- 转存表中的数据 `tp_answer`
--

INSERT INTO `tp_answer` (`id`, `userid`, `messageid`, `content`, `date`) VALUES
(1, 9, 1, '哈哈哈', '2016-10-09'),
(2, 8, 1, '我就是', '2016-10-09'),
(3, 6, 1, '古代中国', '2015-10-09'),
(4, 11, 1, '大家好，我是植物科学与技术学院学生', '2015-10-09'),
(5, 11, 1, '大家好，我是信息学院学生', '2016-10-09'),
(6, 9, 1, '来了就是武汉人，文明武汉欢迎您', '2016-10-09'),
(13, 111, 3, '沸点工作室招新', '1476442193'),
(15, 11, 1, '还不知道好好珍惜', '1476513630'),
(16, 11, 1, '哈哈哈，老夫让你见笑了', '2016-10-15 14:41:04'),
(17, 11, 1, 'lalala', '2016-10-15 14:45:42'),
(18, 11, 1, 'lalala', '2016-10-15 14:56:52'),
(19, 11, 1, 'oyou', '2016-10-15 14:57:44'),
(21, 11, 5, 'shide', '2016-10-15 15:17:09'),
(22, 11, 12, '456', '2016-10-15 15:18:30'),
(23, 11, 12, '456', '2016-10-15 15:18:47'),
(24, 11, 7, '531', '2016-10-15 15:18:57'),
(25, 11, 7, '531', '2016-10-15 15:19:19'),
(26, 11, 12, '1456', '2016-10-15 15:28:06'),
(27, 11, 12, '1456', '2016-10-15 15:28:21'),
(28, 11, 12, '1456', '2016-10-15 15:28:43'),
(29, 11, 12, '1456', '2016-10-15 15:31:52'),
(30, 11, 12, '1456', '2016-10-15 15:32:22'),
(31, 11, 1, 'hahaha', '2016-10-15 15:39:07'),
(32, 11, 1, '成功了', '2016-10-15 15:40:35'),
(33, 11, 8, 'I love you', '2016-10-15 15:42:14'),
(34, 11, 8, 'uoy', '2016-10-15 15:43:30'),
(36, 11, 1, '1234', '2016-10-15 16:14:23'),
(37, 11, 3, 'yeap\r\n', '2016-10-15 16:26:52'),
(38, 0, 13, '四教A102', '2016-10-17 16:04:05'),
(43, 11, 13, '现在是北京时间16:16', '2016-10-17 16:16:56'),
(44, 11, 9, '田尧', '2016-10-17 16:17:56'),
(49, 6, 17, '瓦咔咔', '2016-10-18 21:16:19'),
(50, 6, 17, '哈哈哈', '2016-10-18 21:17:47'),
(51, 6, 17, '现在是北京时间21:21', '2016-10-18 21:21:33'),
(52, 6, 39, '17日凌晨4时15分许，航天员出征仪式在酒泉卫星发射中心问天阁举行。范长龙代表党中央、国务院和中央军委，代表习近平总书记，亲切看望了执行神舟十一号载人飞行任务的航天员景海鹏、陈冬。\r\n\r\n航天员们郑重表示，服从命令，听从指挥，沉着冷静，精心操作，圆满完成任务，请祖国和人民放心。在送行人群的鼓掌欢呼声中航天员们乘车前往发射场，进入飞船作发射前的准备。', '2016-10-18 21:52:15'),
(53, 6, 41, '666', '2016-10-19 13:07:23'),
(54, 6, 1, 'wakakaka', '2016-10-19 17:57:59'),
(55, 6, 39, '收到！', '2016-10-19 22:15:22');

-- --------------------------------------------------------

--
-- 表的结构 `tp_equipment`
--

CREATE TABLE IF NOT EXISTS `tp_equipment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eid` int(11) NOT NULL,
  `ecname` varchar(32) NOT NULL DEFAULT '',
  `eename` varchar(32) NOT NULL DEFAULT '',
  `etype` varchar(32) NOT NULL DEFAULT '',
  `ecmanufactor` varchar(32) NOT NULL DEFAULT '',
  `eemanufactor` varchar(32) NOT NULL DEFAULT '',
  `eoutdate` varchar(32) NOT NULL DEFAULT '',
  `eoutid` varchar(32) NOT NULL,
  `ebuydate` varchar(32) NOT NULL,
  `eprice` varchar(32) NOT NULL DEFAULT '',
  `elocation` varchar(32) NOT NULL DEFAULT '',
  `eblong` varchar(32) NOT NULL,
  `imagicname` varchar(32) NOT NULL,
  `imagicaddress` varchar(100) NOT NULL,
  `class` varchar(32) NOT NULL DEFAULT 'other',
  `introduction` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- 转存表中的数据 `tp_equipment`
--

INSERT INTO `tp_equipment` (`id`, `eid`, `ecname`, `eename`, `etype`, `ecmanufactor`, `eemanufactor`, `eoutdate`, `eoutid`, `ebuydate`, `eprice`, `elocation`, `eblong`, `imagicname`, `imagicaddress`, `class`, `introduction`) VALUES
(30, 2, '刘晓磊', 'Liuxiaolei', '女', '山东省临沂市莒南县', 'Shandong Linyi', '1996-09-08', '1997', '12', '￥123', '逸夫楼信息学院办公室', '2016-10-13 10:57:45', '1476370665.jpg', './Equipment/2016-10-13/1476370665.jpg', 'audi', ''),
(31, 371327, '朱传波', 'Doubibobo', '74LS00', '山东省临沂市莒南县', 'Linyi of Shandong prorvince', '1997-12-12', '371327199712121516', '2015-09-06', '$10000', '华中农业大学', '2016-10-20 23:20:10', '1476976810.jpg', './Equipment/2016-10-20/1476976810.jpg', 'volvo', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `tp_equipmentfile`
--

CREATE TABLE IF NOT EXISTS `tp_equipmentfile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_equipmentmanage`
--

CREATE TABLE IF NOT EXISTS `tp_equipmentmanage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `equipmentid` int(11) NOT NULL,
  `title` varchar(32) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_equipmenttype`
--

CREATE TABLE IF NOT EXISTS `tp_equipmenttype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_file`
--

CREATE TABLE IF NOT EXISTS `tp_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` varchar(99) NOT NULL,
  `filename` varchar(32) NOT NULL,
  `realname` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- 转存表中的数据 `tp_file`
--

INSERT INTO `tp_file` (`id`, `userid`, `address`, `date`, `filename`, `realname`) VALUES
(24, 1, './File/2016-10-15/1476497290.jpg', '2016-10-15 10:08:10', '1476497290.jpg', 'd62a6059252dd42af2cc464b053b5bb5c8eab80d.jpg'),
(23, 1, './File/2016-10-11/1476188995.docx', '2016-10-11 20:29:55', '1476188995.docx', '贫困认定资料.docx'),
(25, 1, './File/2016-10-15/1476497300.jpg', '2016-10-15 10:08:20', '1476497300.jpg', '0ff41bd5ad6eddc40bf0f61b3fdbb6fd5266333e.jpg'),
(26, 1, './File/2016-10-15/1476497305.jpg', '2016-10-15 10:08:25', '1476497305.jpg', '-1269ea6b7be2a97e(1).jpg'),
(27, 1, './File/2016-10-15/1476497311.jpeg', '2016-10-15 10:08:31', '1476497311.jpeg', '20141201131216_5FCTh.jpeg'),
(36, 1, './File/2016-10-18/1476792170.jpg', '2016-10-18 20:02:50', '1476792170.jpg', '刘晓磊.jpg'),
(29, 1, './File/2016-10-15/1476497404.jpg', '2016-10-15 10:10:04', '1476497404.jpg', 'c8fbe05dc7e1aa294ba6cc8f856f5d0d.jpg'),
(30, 1, './File/2016-10-15/1476497411.PNG', '2016-10-15 10:10:11', '1476497411.PNG', '捕获5.PNG'),
(34, 1, './File/2016-10-17/1476719208.pcm', '2016-10-17 23:46:48', '1476719208.pcm', 'code_short.pcm'),
(32, 1, './File/2016-10-15/1476497425.PNG', '2016-10-15 10:10:25', '1476497425.PNG', '捕获1.PNG'),
(33, 1, './File/2016-10-15/1476497433.PNG', '2016-10-15 10:10:33', '1476497433.PNG', '捕获3.PNG'),
(35, 1, './File/2016-10-17/1476719257.jpg', '2016-10-17 23:47:37', '1476719257.jpg', 'QQ图片20160828221420.jpg'),
(38, 1, './File/2016-10-18/1476804077.jpg', '2016-10-18 23:21:17', '1476804077.jpg', '14599644_980x1200_0.jpg'),
(39, 1, './File/2016-10-18/1476805132.jpg', '2016-10-18 23:38:52', '1476805132.jpg', 'WIN_20160211_12_30_56_Pro.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `tp_information`
--

CREATE TABLE IF NOT EXISTS `tp_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `date` varchar(99) NOT NULL,
  `content` text NOT NULL,
  `title` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `tp_information`
--

INSERT INTO `tp_information` (`id`, `userid`, `date`, `content`, `title`) VALUES
(15, 6, '2016-10-19', '习近平与贾大山\r\n\r\n　　习近平与作家贾大山的友情，同样朴素而动人。1998年，贾大山去世一周年时，习近平发表文章《忆大山》，历数了二人多年的情谊和对老友的怀念。习近平在文中饱含深情地写道，“大山的逝世，使我失去了一个好朋友、好兄长。我多么想亲自去为他送行，再看他最后一眼哪！”\r\n\r\n　　然而，当年习近平与贾大山初次见面时，气氛却并不算融洽。彼时，贾大山正在办公室里与几个文友讨论作品。他当过老师、编剧、导演和演员，博闻强记，口才极佳。那是一个文学的年代，到处是文学青年，到处是文学论坛。他的屋内，更是常常访客盈门。\r\n\r\n▲上世纪80年代贾大山（左一）参加人民文学笔会\r\n\r\n　　习近平穿着一件褪色的绿军装，像一名普通的退伍兵，又像一个青涩的文学青年。或许正是因此，当习近平进来的时候，谈兴正浓的贾大山没有注意到他，继续着自己的演说。等了一会儿，趁喝水的间歇，旁人上前介绍。贾大山才明白，面前这位高高大大、清清瘦瘦的青年，就是新来的县委副书记。\r\n\r\n　　接下来的场景曾让习近平印象深刻，贾大山扭头一转就说：“来了个嘴上没毛的管我们！”\r\n\r\n　　但是，习近平并没有介意，依然笑容满面。\r\n\r\n　　作家贾大山总是关注现实，解剖现实。他得奖的《取经》《花市》等作品，就是以政治视角描写基层干部和普通农民。对这座县城，这个国家，这个民族，他有着深深的热爱和关注。习近平与贾大山很快就谈到了一起，房间内的气氛逐渐活跃了起来。\r\n\r\n　　习近平在《忆大山》一文中记录了当时的情景：“虽然第一次见面，但我们却像多年不见的朋友，有说不完的话题，表不尽的情谊。临别时……我劝他留步，他像没听见似的。就这样边走边说，竟一直把我送到机关门口。”\r\n\r\n　　以后的日子里，每隔一段时间两人就要约见一次。有时是在习近平办公室，多数是在贾大山家里。', '习近平与他的作家“朋友圈”');

-- --------------------------------------------------------

--
-- 表的结构 `tp_message`
--

CREATE TABLE IF NOT EXISTS `tp_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(32) NOT NULL,
  `content` text NOT NULL,
  `date` varchar(32) NOT NULL,
  `title` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- 转存表中的数据 `tp_message`
--

INSERT INTO `tp_message` (`id`, `userid`, `content`, `date`, `title`) VALUES
(1, 6, '我是中国湖北武汉华中农业大学信息学院计算机科学与技术1502班的学生朱传波', '2015-10-09', '个人简介'),
(3, 7, '现在是北京时间09:23，我在四教C208', '2016-10-14 09:25:49', '时间'),
(5, 9, '昨天计科1502班召开了主题班会', '2016-10-14 09:32:16', '主题班会'),
(6, 6, '今天是几月几号', '2016-10-14 09:37:31', '华中农业大学'),
(7, 7, '作者：沸点工作室', '2016-10-14 09:37:57', '荟十530'),
(8, 8, '沸点工作室', '2016-10-14 09:38:12', '作者'),
(9, 8, 'HUAZHONG AGRICULTURE UNIVERSITY', '2015-10-14', 'HZAU'),
(10, 1, '我是山东省临沂市莒南县文疃镇石城村人', '1476510541', '朱传波'),
(11, 1, 'hahaha', '1476514879', 'jintina'),
(12, 1, '', '1476515056', '123'),
(13, 1, '123456', '1476527065', '0.0324'),
(38, 6, '哈哈哈', '2016-10-18 21-47-57', '回家了'),
(15, 11, '今天是2015年10月17日下午16:19分', '1476692372', '四教'),
(16, 11, '朱传波', '1476692474', '程天赐'),
(17, 11, '他是程天赐', '2016-10-17 16:23:36', '我是朱传波'),
(39, 6, '习近平指出，天宫二号和神舟十一号载人飞行任务，将首次实现我国航天员中期在轨驻留，开展一批体现国际科学前沿和高新技术发展方向的空间科学与应用任务，标志着我国载人航天工程取得了新的重大进展。\r\n\r\n习近平强调，太空探索永无止境，航天攻关任重道远。希望同志们大力弘扬载人航天精神，精心做好后续各项工作，确保实现既定任务目标，不断开创载人航天事业发展新局面，使中国人探索太空的脚步迈得更大更远，为建设航天强国作出新的贡献。', '2016-10-18 21-49-11', '习近平致电表示热烈祝贺神舟十一号载人飞船发射成功'),
(41, 6, 'hahaha', '2016-10-19 13-07-16', 'hahaha'),
(42, 6, '拉屎', '2016-10-19 22:17:37', '凯撒');

-- --------------------------------------------------------

--
-- 表的结构 `tp_regulation`
--

CREATE TABLE IF NOT EXISTS `tp_regulation` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `userid` int(32) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `realname` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `tp_regulation`
--

INSERT INTO `tp_regulation` (`id`, `userid`, `address`, `date`, `name`, `realname`) VALUES
(2, 6, './Regulation/2016-10-19/1476870670.docx', '2016-10-19 17:51:10', '', '展板 - 网站.docx'),
(3, 6, './Regulation/2016-10-19/1476870700.zip', '2016-10-19 17:51:40', '', 'Emoji2.zip');

-- --------------------------------------------------------

--
-- 表的结构 `tp_sensitive`
--

CREATE TABLE IF NOT EXISTS `tp_sensitive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_user`
--

CREATE TABLE IF NOT EXISTS `tp_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `isTeacher` tinyint(4) NOT NULL DEFAULT '0',
  `name` varchar(32) NOT NULL,
  `say` int(11) NOT NULL DEFAULT '0',
  `time` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `tp_user`
--

INSERT INTO `tp_user` (`id`, `username`, `password`, `isTeacher`, `name`, `say`, `time`) VALUES
(9, '2015317200401', '852', 0, '项健健', 0, '2016-10-21 12:30:00'),
(8, '2015317200426', '741', 0, '田尧', 0, '2016-10-21 12:30:00'),
(7, '2015317200416', '789', 0, '占鹏', 0, '2016-10-21 12:30:00'),
(6, '2015317200402', '123', 1, '朱传波', 0, ''),
(11, '2015317200409', '123', 0, '黄海明', 0, '2016-10-21 12:30:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
