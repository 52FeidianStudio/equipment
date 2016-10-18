-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-10-18 17:51:08
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

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
(52, 6, 39, '17日凌晨4时15分许，航天员出征仪式在酒泉卫星发射中心问天阁举行。范长龙代表党中央、国务院和中央军委，代表习近平总书记，亲切看望了执行神舟十一号载人飞行任务的航天员景海鹏、陈冬。\r\n\r\n航天员们郑重表示，服从命令，听从指挥，沉着冷静，精心操作，圆满完成任务，请祖国和人民放心。在送行人群的鼓掌欢呼声中航天员们乘车前往发射场，进入飞船作发射前的准备。', '2016-10-18 21:52:15');

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- 转存表中的数据 `tp_equipment`
--

INSERT INTO `tp_equipment` (`id`, `eid`, `ecname`, `eename`, `etype`, `ecmanufactor`, `eemanufactor`, `eoutdate`, `eoutid`, `ebuydate`, `eprice`, `elocation`, `eblong`, `imagicname`, `imagicaddress`) VALUES
(30, 2, '刘晓磊', 'Liuxiaolei', '女', '山东省临沂市莒南县', 'Shandong Linyi', '1996-09-08', '1997', '12', '￥4444', '当发', '2016-10-13 10:57:45', '1476370665.jpg', './Equipment/2016-10-13/1476370665.jpg'),
(29, 371327, '莒南三中', 'school 3', 'student', '山东', 'Shandong', '1956', '003', '1989', '￥80489494514', '十字路', '2016-10-13 10:48:41', '1476370121.jpeg', './Equipment/2016-10-13/1476370121.jpeg');

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
  `userid` int(11) NOT NULL,
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `tp_information`
--

INSERT INTO `tp_information` (`id`, `userid`, `date`, `content`, `title`) VALUES
(6, 5, '2016-10-11 08:25:45', '同志们，为体现党对教育事业的关怀，根据总过经济建设发展的需要，特将国庆小长假由原来的七天延长至十五天，为充分体现对同志们的关怀，任何教师不准以任何形式布置任何作业', '关于国庆延长放假的通知'),
(9, 1, '2016-10-11 08:34:23', '哈哈哈', '朱传波大帅哥'),
(10, 1, '2016-10-15', '现在是北京时间10:30', '时间'),
(11, 1, '2016-10-15', '沸点工作室是隶属我院的一些志同道合的，有能力的优秀人才聚集起来一起培养的优秀团队，为了吸收新鲜血液，定于下周开始沸点工作室的招新工作，各单位务必大力配合与支持', '关于加大对我院沸点工作室招新工作的支持');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

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
(39, 6, '习近平指出，天宫二号和神舟十一号载人飞行任务，将首次实现我国航天员中期在轨驻留，开展一批体现国际科学前沿和高新技术发展方向的空间科学与应用任务，标志着我国载人航天工程取得了新的重大进展。\r\n\r\n习近平强调，太空探索永无止境，航天攻关任重道远。希望同志们大力弘扬载人航天精神，精心做好后续各项工作，确保实现既定任务目标，不断开创载人航天事业发展新局面，使中国人探索太空的脚步迈得更大更远，为建设航天强国作出新的贡献。', '2016-10-18 21-49-11', '习近平致电表示热烈祝贺神舟十一号载人飞船发射成功');

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
(9, '2015317200401', '852', 0, '项健健', 0, '2016-10-18 11:46:37'),
(8, '2015317200426', '741', 0, '田尧', 0, '2016-10-18 11:46:37'),
(7, '2015317200416', '789', 0, '占鹏', 0, '2016-10-18 11:46:37'),
(6, '2015317200402', '123', 1, '朱传波', 0, ''),
(11, '2015317200409', '123', 0, '黄海明', 0, '2016-10-18 11:46:37');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
