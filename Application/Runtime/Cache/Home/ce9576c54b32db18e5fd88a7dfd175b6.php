<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加回复</title>
</head>
<style>
	#content{
		width: 50%;
		font-size: 20px;
	}
	#myForm{
		text-align: center;
	}
</style>
<body>
	<form action="/zky/index.php/Home/Message/do_add" method = "post" id = "myForm">
		<p>添加回复</p>
		<textarea name="content" id = "content"></textarea><br /><br />
        <input type="submit" name="submit" value="提交">
    </form>
</body>
</html>