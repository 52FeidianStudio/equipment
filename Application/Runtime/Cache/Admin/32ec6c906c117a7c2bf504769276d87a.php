<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>管理员登陆界面</title>
</head>
<body>
	<!-- 用Ajax判断用户是否已经填写了完整的信息 -->
	<p>管理员用户登录</p>
<<<<<<< HEAD
	<form action="/zky/index.php/Admin/Login/do_login" method = "post">
=======
	<form action="/equipment/index.php/Admin/Login/do_login" method = "post">
>>>>>>> e95e39b6935d717c333ed3594bed491f1f9a8955
		用户名：<input type="text" name = "username"> <br><br>
		密　码：<input type="text" name = "password"> <br><br>
		<input type="submit" value = "提交">
		<input type="reset" value = "重置">
	</form>
</body>
</html>