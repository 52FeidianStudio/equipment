<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>查看消息详情</title>
</head>
<body>
	<h2>问题梗概：<?php echo ($data2); ?>　已经有<?php echo ($data3); ?>人关注<a href="/zky/index.php/Home/Message\add\id\<?php echo ($data4); ?>">回复</a></h2>
	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p><?php echo ($vo["userid"]); ?>回复：<?php echo ($vo["content"]); ?>　　　　回复时间：<?php echo ($vo["date"]); ?></p>
	<hr><?php endforeach; endif; else: echo "" ;endif; ?>
	<?php echo ($show); ?>
</body>
</html>