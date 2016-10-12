<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文件</title>
</head>
<body>
	
	<!-- 普通用户（学生文件模块），直接copy  admin里面的，
	功能是：展示所有的通知
	还没改 -->


	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/zky/Public<?php echo ($vo["address"]); ?>"><p><?php echo ($vo["realname"]); ?>　　<?php echo ($vo["date"]); ?></p></a><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>