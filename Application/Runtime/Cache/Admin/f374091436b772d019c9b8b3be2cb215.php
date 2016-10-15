<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文件</title>
</head>
<body>

	<!-- 管理员（教师用户文件页面） 
	功能是：展示已上传的所有文件和上传文件
	-->

	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/zky/Uploads<?php echo ($vo["address"]); ?>"><p><?php echo ($vo["realname"]); ?>　　<?php echo ($vo["date"]); ?></a>　　　　　　　<a href="/zky/index.php/Admin/File/delete/id/<?php echo ($vo["id"]); ?>">删除</a></p>
		<!-- 用户点击删除，添加一个事件 ====是否删除此文件 --><?php endforeach; endif; else: echo "" ;endif; ?>
	<?php echo ($show); ?>
	<form action="/zky/index.php/Admin/File/do_show" enctype="multipart/form-data" method="post" >
		<p>上传文件</p>
		<input type="file" name = "file">
		<input type="submit" value = "提交">
	</form>
</body>
</html>