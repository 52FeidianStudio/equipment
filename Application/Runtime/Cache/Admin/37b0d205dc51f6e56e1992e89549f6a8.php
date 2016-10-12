<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加实验仪器</title>
</head>
<body>
	  <form action="/zky/admin.php/Admin/Equipment/do_add" method="post" enctype="multipart/form-data" name="myForm">
	  	仪器图片：<input type="file" name = "image"><br><br>
		仪器编号：<input type="text" name = "eid"> <br><br>
		仪器中文名称：<input type="text" name = "ecname"><br><br>
		仪器英文名称：<input type="text" name = "eename"><br><br>
		仪器型号：<input type="text" name = "etype"><br><br>
		仪器生产厂家中文名称：<input type="text" name = "ecmanufactor"><br><br>
		仪器生产厂家英文名称：<input type="text" name = "eemanufactor"><br><br>
		仪器出厂年月：<input type="text" name = "eoutdate"><br><br>
		仪器出厂编号：<input type="text" name = "eoutid"><br><br>
		仪器购买时间：<input type="text" name = "ebuydate"><br><br>
		仪器价格：<input type="text" name = "eprice"><br><br>
		仪器放置地点：<input type="text" name = "elocation"><br><br>
		<input type="submit" value = "提交">
		<input type="reset" value = "重置"> 
	</form>
</body>
</html>