<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>通告</title>
</head>
<body>

    <!-- 普通用户（学生）的通知模块，直接从admin模块copy下来的，
    功能是：展示所有的通知
    没改 -->

	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p><?php echo ($vo["title"]); ?></p><br /><br />
		<p><?php echo ($vo["content"]); ?></p><br /> <br />
		<hr><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>