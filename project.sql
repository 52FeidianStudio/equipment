-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-10-18 11:00:11
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_helped`
--

CREATE TABLE IF NOT EXISTS `tp_helped` (
  `id` int(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `count` varchar(32) NOT NULL,
  `reason` text NOT NULL,
  `callnumber` bigint(32) NOT NULL,
  `card` bigint(32) NOT NULL,
  `time` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp_helped`
--

INSERT INTO `tp_helped` (`id`, `name`, `count`, `reason`, `callnumber`, `card`, `time`) VALUES
(0, '宋玉飞', '456', '57d5182d65ef8.xls', 4561, 456, ''),
(0, 'zhuchuanbo', '753951', '57d5190601242.xls', 753, 45896, '1473583366'),
(0, '田尧', '123', '57d52e2d65abc.xlsx', 213, 126, ''),
(0, 'CESHI', '456', '57d52e874ae9a.xlsx', 852, 951, ''),
(0, '展鹏', '963', '57d52f333f785.docx', 852, 741, ''),
(0, '荟十530', '530', '57d52fb180d6e.exe', 530, 530, ''),
(0, '项健健', '753', '57d5304454d3f.jpeg', 951, 456, '1473589316'),
(0, '项健健', '7794632', '57dc0ea8d802d.zip', 598489, 4994152, '1474039464');

-- --------------------------------------------------------

--
-- 表的结构 `tp_helper`
--

CREATE TABLE IF NOT EXISTS `tp_helper` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `password` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `count` varchar(32) NOT NULL,
  `callnumber` bigint(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `introduction` text NOT NULL,
  `username` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=124 ;

--
-- 转存表中的数据 `tp_helper`
--

INSERT INTO `tp_helper` (`id`, `password`, `name`, `count`, `callnumber`, `email`, `introduction`, `username`) VALUES
(1, '12151618', '朱传波', '371327199712121516', 15071267961, '3287662416@qq.com', '我就是我', '15071267961'),
(2, '4894', '希特勒', 'a48949', 0, 'a48949egrereag', 'a48949egrereagargaaaaa48949egrereagargaaaa', 'a48949egrereagarg'),
(3, '963', '奥巴马', '123456789', 789456123, '753159', 'America', '894'),
(4, '1532', '安倍晋三', '78945613123103A', 489494, '7878@', 'Japan', 'Aijor'),
(5, '1563', '安倍晋三', '78945613123103A', 489494, '7878@', 'Japan', 'aijgor'),
(6, '12151618', '如果他如何', '48948', 0, '498489', '', '216984'),
(7, '12151618', '868', '78567867', 0, '天经地义动态', '', '82758'),
(8, '12151618', '868', '78567867', 0, '天经地义动态', '', '82758'),
(9, '753', '荟十530', '530', 0, '31235', '', '789456123'),
(10, '123', '789456123', '852741963', 0, '98446623', '', '123'),
(11, '何京', '生信1202', '女', 0, '湖南衡阳', '19950820', '20131201'),
(12, '李恒瑶', '生信1202', '女', 0, '山东济南', '19930930', '20130608'),
(13, '李则尧', '生信1201', '女', 0, '湖北孝感', '19941110', '20131201'),
(14, '刘萌', '生信1202', '女', 0, '湖北武汉', '19940307', '20131201'),
(15, '刘梦妮', '生信1201', '女', 0, '浙江慈溪', '19940817', '20131201'),
(16, '吕雪莹', '生信1201', '女', 0, '广西桂林', '19930901', '20131201'),
(17, '舒明月', '生信1201', '女', 0, '湖北孝感', '19940601', '20131201'),
(18, '王瑾', '生信1202', '女', 0, '湖北鄂州', '19940719', '20131201'),
(19, '王双琦', '生信1201', '女', 0, '湖北钟祥', '19940807', '20131201'),
(20, '陈念航', '生信1302', '男', 0, '湖北鄂州', '19950616', '20130626'),
(21, '周建炜', '生信1302', '女', 0, '湖北襄阳', '19940729', '20130530'),
(22, '王晗', '生信1202', '女', 0, '河南洛阳', '19950528', '20140528'),
(23, '张娟荣', '生信1202', '女', 0, '河南南乐', '19931205', '20140621'),
(24, '杨家珺', '生信1202', '女', 0, '辽宁', '19941130', '20141207'),
(25, '吕晨恺', '生信1202', '男', 0, '江苏', '19940812', '20141207'),
(26, '陈超', '生信1301', '男', 0, '安徽淮北', '19931020', '20141207'),
(27, '包健宇', '生信1301', '男', 0, '黑龙江', '19950218', '20141207'),
(28, '范英旭', '生信1302', '男', 0, '辽宁丹东', '19940301', '20141207'),
(29, '王宏伟', '计科1203', '男', 0, '贵州安顺', '19930918', '20120724'),
(30, '卢文', '计科1204', '男', 0, '湖南东安', '19940201', '20120630'),
(31, '赵绪超', '计科1202', '男', 0, '河北鸡泽', '19921006', '20120517'),
(32, '袁果', '计科1201', '男', 0, '四川绵阳', '19930808', '20131207'),
(33, '汪星宇', '计科1202', '男', 0, '江苏泗阳', '19940327', '20131207'),
(34, '陈文强', '计科1203', '男', 0, '湖北仙桃', '19930120', '20131207'),
(35, '李金鑫', '计科1203', '男', 0, '湖北黄冈', '19940420', '20131207'),
(36, '徐杨岚', '计科1204', '女', 0, '湖南岳阳', '19940901', '20131207'),
(37, '崔丽丽', '计科1201', '女', 0, '天津蓟县', '19930509', '20140529'),
(38, '王  超', '计科1201', '女', 0, '山东日照', '19930722', '20140529'),
(39, '胡梦雪', '计科1202', '女', 0, '湖北十堰', '19930805', '20140529'),
(40, '寇亚飞', '计科1203', '男', 0, '河南许昌', '19940106', '20140529'),
(41, '王琦', '计科1204', '女', 0, '黑龙江哈尔滨', '19940901', '20140529'),
(42, '王浩鹏', '计科1201', '男', 0, '山东宁津', '19940614', '20140529'),
(43, '金凯悦', '计科1202', '女', 0, '山东济南', '19940325', '20140529'),
(44, '付雅茹 ', '计科1203', '女', 0, '湖北咸宁', '19930313', '20140529'),
(45, '李劭杰', '计科1301', '男', 0, '内蒙多伦', '19950125', '20130626'),
(46, '徐静迪', '计科1403', '男', 0, '广西桂林', '19960216', '20140706'),
(47, '曾芳洁', '计科1201', '女', 0, '湖北', '19930601', '20141207'),
(48, '姚曼', '计科1202', '女', 0, '湖北武汉', '19940201', '20141207'),
(49, '刘杨阳', '计科1203', '女', 0, '广西柳州', '199311', '20141207'),
(50, '郭兆璐', '计科1204', '男', 0, '吉林长春', '19930908', '20141207'),
(51, '杨琳', '计科1204', '女', 0, '河北', '19940501', '20141207'),
(52, '申艳', '计科1204', '女', 0, '安徽', '19940601', '20141207'),
(53, '卢敏', '计科1301', '女', 0, '湖北广水', '19941001', '20141207'),
(54, '邱津怡', '计科1302', '女', 0, '辽宁阜宁', '19950501', '20141207'),
(55, '唐俊杰', '计科1302', '男', 0, '湖北随州', '19950701', '20141207'),
(56, '王蕊', '计科1303', '女', 0, '河北沧州', '19940604', '20141207'),
(57, '邱欣欣', '计科1304', '女', 0, '山东潍坊', '19941101', '20141207'),
(58, '窦若允', '计科1302', '女', 0, '山东枣庄', '19960603', '20141212'),
(59, '王彦霖', '计科1302', '女', 0, '山东淄博', '19950110', '20141212'),
(60, '张耀升', '计科1204', '女', 0, '河南灵宝', '19940103', '20141212'),
(61, '任旭升', '计科1201', '男', 0, '湖北', '19950818', '20150530'),
(62, '杨罡', '计科1201', '男', 0, '湖北', '19940207', '20150530'),
(63, '张虎', '计科1201', '男', 0, '甘肃', '19910605', '20150530'),
(64, '胡盼盼', '计科1201', '女', 0, '湖北', '19921230', '20150530'),
(65, '张爽', '计科1201', '女', 0, '河北', '19930504', '20150530'),
(66, '张梦亚', '计科1202', '女', 0, '河北衡水', '19911013', '20150530'),
(67, '曾小豹', '计科1202', '男', 0, '湖北孝感', '19930701', '20150530'),
(68, '胡闵', '计科1204', '男', 0, '湖北郧县', '19931219', '20150530'),
(69, '许武奎', '计科1204', '男', 0, '湖北', '19941005', '20150530'),
(70, '朱玺桐', '生信1201', '男', 0, '山西临汾', '19940724', '20150530'),
(71, '薛刚', '生信1201', '男', 0, '河南滑县', '19940602', '20150530'),
(72, '王振超', '生信1201', '男', 0, '河南驻马店', '19920606', '20150530'),
(73, '朱永为', '生信1202', '男', 0, '湖北', '19921103', '20150530'),
(74, '高歌', '计科1301', '女', 0, '内蒙古', '19941211', '20150530'),
(75, '王文平', '计科1302', '女', 0, '山东枣庄', '19940909', '20150530'),
(76, '刘玲', '计科1302', '女', 0, '湖南株洲', '19950703', '20150530'),
(77, '辛颖', '计科1303', '女', 0, '山东日照', '19960220', '20150530'),
(78, '刘微', '计科1303', '女', 0, '湖南衡阳', '19940824', '20150530'),
(79, '罗中宝', '计科1304', '男', 0, '湖北武汉', '19950502', '20150530'),
(80, '黄冰玉', '计科1304', '女', 0, '湖北随州', '19960121', '20150530'),
(81, '陈楚佳', '生信1301', '女', 0, '湖北武汉', '19950505', '20150530'),
(82, '胡悦', '生信1301', '女', 0, '内蒙赤峰', '19950316', '20150530'),
(83, '刘慕汀', '生信1301', '女', 0, '湖北武汉', '19950120', '20150530'),
(84, '毛静慧', '生信1302', '女', 0, '河北承德', '19950602', '20150530'),
(85, '陈科', '计科1201', '男', 0, '山西吕梁', '19931019', '20151208'),
(86, '王鸿洋', '计科1202', '男', 0, '辽宁鞍山', '19931003', '20151208'),
(87, '高翔', '计科1301', '男', 0, '浙江温州', '19950702', '20151207'),
(88, '王庆刚', '计科1302', '男', 0, '河南南阳', '19941104', '20151207'),
(89, '赵双', '计科1302', '女', 0, '河南南阳', '19950912', '20151207'),
(90, '王朝阳', '计科1303', '男', 0, '河南桐柏', '19950522', '20151207'),
(91, '卢建斌', '计科1303', '男', 0, '甘肃漳县', '19920720', '20151207'),
(92, '王元芳', '计科1303', '女', 0, '湖北黄石', '19930314', '20151207'),
(93, '王晨', '计科1304', '男', 0, '河南周口', '19950516', '20151207'),
(94, '陈天哲', '生信1301', '男', 0, '安徽绩溪', '19951003', '20151207'),
(95, '卢楠', '生信1302', '女', 0, '天津静海', '19940525', '20151207'),
(96, '管鹏鹏', '生信1302', '男', 0, '浙江金华', '19950622', '20151207'),
(97, '周怡', '生信1302', '女', 0, '浙江江山', '19941209', '20151207'),
(98, '曹浩', '计科1401', '男', 0, '陕西白河', '19960812', '20151207'),
(99, '钟芷漫', '计科1401', '女', 0, '湖北荆州', '19970815', '20151207'),
(100, '房子琪', '计科1404', '女', 0, '山东沾化', '19960403', '20151207'),
(101, '宋亚冰', '生信1401', '男', 0, '湖北襄阳', '19950519', '20151207'),
(102, '赵伊', '生信1401', '女', 0, '湖南长沙', '19960416', '20151207'),
(103, '潘锐', '', '', 0, '', '', ''),
(104, '詹慧光', '', '', 0, '', '', ''),
(105, '孙超', '', '', 0, '', '', ''),
(106, '李国祥', '', '', 0, '', '', ''),
(107, '宗明绪', '', '', 0, '', '', ''),
(108, '鲍锦星', '计科1403', '男', 0, '', '', ''),
(109, '董怡慧', '计科1403', '女', 0, '', '', ''),
(110, '焦裕迪', '计科1403', '男', 0, '', '', ''),
(111, '李洋', '计科1403', '男', 0, '', '', ''),
(112, '李晓文', '计科1402', '男', 0, '', '', ''),
(113, '陈锦', '计科1404', '男', 0, '', '', ''),
(114, '谢倩', '计科1404', '女', 0, '', '', ''),
(115, '孙梦海', '计科1404', '女', 0, '', '', ''),
(116, '阙红艳', '计科1404', '女', 0, '', '', ''),
(117, '王丙利', '计科1401', '女', 0, '', '', ''),
(118, '黄业兴', '计科1401', '男', 0, '', '', ''),
(119, '单娜', '计科1401', '女', 0, '', '', ''),
(120, '张宜飞', '计科1401', '男', 0, '', '', ''),
(121, '张伟彤', '生信1401', '', 0, '', '', ''),
(122, '蒋碧轩', '生信1402', '', 0, '', '', ''),
(123, '何双', '生信1402', '', 0, '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
