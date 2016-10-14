<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html>
	<head>
		<title>登录</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="zh-CN" />
		<meta name="Author" content="网页作者" /> 
		<meta name="Copyright" content="网站版权" /> 
		<meta name="keywords" content="网站关键字" />
		<meta name="description" content="网站描述" />
		<link rel="stylesheet" href="./zhihu-css.css" />
		<link rel="stylesheet" type="text/css" href="/equipment/Public/Css/login.css" />
		<link rel="stylesheet" href="/equipment/Public/Css/public.css" />
		<script>
		</script>
	</head>
	<body>
		<div id='header'>
			<div class="contain">
				<img src="/equipment/Public/Pic/top.jpg" alt="" style="width:100%;" />
			</div>
		</div>
<div id='navi'>
	<div class="contain">
		<a href="#" class="navi_a">首页</a>
		<a href="#" class="navi_a">新闻通知</a>
		<a href="#" class="navi_a">仪器介绍</a>
		<a href="#" class="navi_a">规章制度</a>
		<a href="#" class="navi_a">文档下载</a>
		<a href="#" class="navi_a">讨论区</a>
		<a href="#" class="navi_a">关于我们</a>
	</div>
</div>
		
		<div id='main'>
			<div class="contain">
				<form name="login-form" class="login-form" action="/equipment/index.php/Home/Index/dolog" method="post">

	<!--HEADER-->
    				<div class="header">
    <!--TITLE--> 		<h1>登录</h1><!--END TITLE-->
    <!--DESCRIPTION--> 	<span>登录请填写用户名和密码 </span><!--END DESCRIPTION-->
    				</div>
    <!--END HEADER-->
	
	<!--CONTENT-->
    				<div class="content">
	<!--USERNAME-->  	<input name="username" type="text" class="input username" value="Username" onfocus="this.value=''" />
	<!--END USERNAME-->
    <!--PASSWORD-->  	<input name="password" type="password" class="input password" value="Password" onfocus="this.value=''" />
    <!--END PASSWORD-->
    				</div>
    <!--END CONTENT-->
    
    <!--FOOTER-->
    				<div class="footer">
    <!--LOGIN BUTTON--> 	<input type="submit" name="submit" value="登录" class="button" /><!--END LOGIN BUTTON-->
    <!--REGISTER BUTTON--> 	<input type="submit" name="submit" value="注册" class="register" /><!--END REGISTER BUTTON-->
    				</div>
    <!--END FOOTER-->

</form>
<!--END LOGIN FORM-->
			</div>
		</div>
		<div id='footer'>
			<div class="contain">
				<p class="footer_p">通讯地址：xxxxxxxxxxxxxxxxx</p>
				<p class="footer_p">邮政编码：xxxxxx</p>
				<p class="footer_p">联系电话：xxxxxxx xxxxxxxxxx xxxxxxxxxxxx</p>
				<hr />
				<p class="footer_p">@xxxxxxxxxxxxxx  <a href="">管理</a></p>
			</div>
		</div>
	</body>
</html>