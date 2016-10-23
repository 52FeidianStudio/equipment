<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文件</title>
</head>
<body>
	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p><?php echo ($vo["filename"]); ?></p><br /><br />
		<p><{$vo.address>}</p><br /><br />
		<p><{$vo.filedate>}</p><br /><br /><?php endforeach; endif; else: echo "" ;endif; ?>
	<form action="/zky/index.php/Home/File/do_show" enctype="multipart/form-data" method="post" >
		<p>上传文件</p>
		/zky/index.php/Home/File<br /><br />
		/zky/index.php
		<input type="file" name = "file">
		<input type="submit" value = "提交">
	</form>
</body>
</html>