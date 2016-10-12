<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户留言模块</title>
</head>
<body>
	<!-- 
		用户留言模块刚刚进入之后的主界面
		功能：以链接的形式显示所有的标题
				用户登陆的情形下发表或者回复留言
	 -->
	<h2>这里是用户留言讨论区</h2>
	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p><?php echo ($vo["title"]); ?></p>
		<a href="/zky/index.php/Home/Message/do_see/id/<?php echo ($vo["id"]); ?>">查看详情</a>
		<hr><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>