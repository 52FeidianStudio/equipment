<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html>
	<head>
		<title>关于我们</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="zh-CN" />
		<meta name="Author" content="网页作者" /> 
		<meta name="Copyright" content="网站版权" /> 
		<meta name="keywords" content="网站关键字" />
		<meta name="description" content="网站描述" />
		<link rel="stylesheet" href="./zhihu-css.css" />
		<link rel="stylesheet" href="/equipment/Public/Css/public.css" />
		<script></script>
	</head>
	<body>
		<div id='header'>
			<div class="contain" >
				<img src="/equipment/Public/Pic/top.jpg" alt="" style="width:100%;" />
			</div>
		</div>
		<div id='navi'>
			<div class="contain">
				<a href="/equipment/index.php/Home/Index/main" class="navi_a">首页</a>
				<a href="/equipment/index.php/Home/Inform/news" class="navi_a">新闻通知</a>
				<a href="/equipment/index.php/Home/Equipment/equipment" class="navi_a">仪器介绍</a>
				<a href="/equipment/index.php/Home/Regulation/regulation" class="navi_a">规章制度</a>
				<a href="/equipment/index.php/Home/File/document" class="navi_a">文档下载</a>
				<a href="/equipment/index.php/Home/Message/conmunication" class="navi_a">讨论区</a>
				<a href="/equipment/index.php/Home/Index/about_us" class="navi_a">关于我们</a>
				<div id='na_log'>
					<span>欢迎</span>
					<span ><?php echo (session('username')); ?></span>
					<a href="/equipment/index.php/Home/Login/login_out" style=''>退出</a>
				</div>
			</div>
		</div>
		<div id='main'>
			<div class="contain">
				<div id="main_navi">
						<a href="/equipment/index.php/Home/Index/main">首页</a>--->关于我们
				</div>
				<hr /><br />
				<h3>联系我们：</h3>
				<ul id='address'>
					<li>联系地址:
							华中农业大学主楼东附楼二楼
						
					</li>
					<li>联系人：李凤凤</li><li>邮编：43xxxx</li>
				</ul>
				<ul id='teloffice'>
					<li>植科院公共平台目前的组织管理结构如下</li>
					<li></p>
						<p><span>平台主任 </span> 张椿雨 </p>
						<p>职责</p>
						
						<p><span>平台副主任</span>王学奎</p>
						<p>职责</p>
						<p><span>平台管理办公室主任</span>李凤凤</p>
						<p>
						职责：仪器设备使用和维护，维持平台顺利运行和发展，提高平台技术水平</p></li>
				</ul>
			</div>
		</div>
		<div id='footer'>
			<div class="contain">
				<p class="footer_p">通讯地址：华中农业大学主楼东附楼二楼</p>
				<p class="footer_p">邮政编码：430070</p>
				<hr />
				<p class="footer_p">@xxxxxxxxxxxxxx  <a href="/equipment/index.php/Admin/Index/admin">管理</a></p>
			</div>
		</div>
	</body>
</html>