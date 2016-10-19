<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html>
	<head>
		<title>讨论区</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<form action="/zky/index.php/Admin/Message/do_addanswer/id/<?php echo ($data["id"]); ?>/address/<?php echo ($address); ?>" method = "post" id = "myForm">
			<textarea name="content" id = "content"></textarea><br /><br />
			<input type="submit" name="submit" value="提交">
		</form>
	</body>
</html>