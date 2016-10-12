<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>朱传波</title>
 </head>
 <body>

	<!-- 普通用户（学生）登录进去的主界面 -->

 	<p>Hello world!</p>
 	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p><?php echo ($vo["username"]); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
 </body>
 </html>